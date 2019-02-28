<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017-2018
 * @package Controller
 * @subpackage Frontend
 */


namespace Aimeos\Controller\Frontend\Product;


/**
 * Default implementation of the product frontend controller.
 *
 * @package Controller
 * @subpackage Frontend
 */
class Standard
	extends \Aimeos\Controller\Frontend\Base
	implements Iface, \Aimeos\Controller\Frontend\Common\Iface
{
	/**
	 * Returns the given search filter with the conditions attached for filtering by attribute.
	 *
	 * @param \Aimeos\MW\Criteria\Iface $filter Criteria object used for product search
	 * @param array $attrIds List of attribute IDs for faceted search
	 * @param array $optIds List of OR-combined attribute IDs for faceted search
	 * @param array $attrIds Associative list of OR-combined attribute IDs per attribute type for faceted search
	 * @return \Aimeos\MW\Criteria\Iface Criteria object containing the conditions for searching
	 * @since 2017.03
	 */
	public function addFilterAttribute( \Aimeos\MW\Criteria\Iface $filter, array $attrIds, array $optIds, array $oneIds )
	{
		if( ( $attrIds = $this->validateIds( $attrIds ) ) !== [] )
		{
			$func = $filter->createFunction( 'index.attribute:all', [$attrIds] );
			$expr = array(
				$filter->compare( '!=', $func, null ),
				$filter->getConditions(),
			);
			$filter->setConditions( $filter->combine( '&&', $expr ) );
		}

		if( ( $optIds = $this->validateIds( $optIds ) ) !== [] )
		{
			$expr = array(
				$filter->compare( '==', 'index.attribute.id', $optIds ),
				$filter->getConditions(),
			);
			$filter->setConditions( $filter->combine( '&&', $expr ) );
		}

		foreach( $oneIds as $type => $list )
		{
			if( ( $list = $this->validateIds( (array) $list ) ) !== [] )
			{
				$func = $filter->createFunction( 'index.attribute:oneof', [$list] );
				$expr = array(
					$filter->compare( '!=', $func, null ),
					$filter->getConditions(),
				);
				$filter->setConditions( $filter->combine( '&&', $expr ) );
			}
		}

		return $filter;
	}


	/**
	 * Returns the given search filter with the conditions attached for filtering by category.
	 *
	 * @param \Aimeos\MW\Criteria\Iface $filter Criteria object used for product search
	 * @param array|string $catIds Selected category by the user
	 * @param string $listtype List type of the product associated to the category, usually "default"
	 * @param integer $level Constant for current category only, categories of next level (LEVEL_LIST) or whole subtree (LEVEL_SUBTREE)
	 * @return \Aimeos\MW\Criteria\Iface Criteria object containing the conditions for searching
	 * @since 2017.03
	 */
	public function addFilterCategory( \Aimeos\MW\Criteria\Iface $filter, $catIds, $listtype = 'default',
		$level = \Aimeos\MW\Tree\Manager\Base::LEVEL_ONE )
	{
		if( ( $catIds = $this->validateIds( (array) $catIds ) ) === [] ) {
			return $filter;
		}

		if( $level != \Aimeos\MW\Tree\Manager\Base::LEVEL_ONE )
		{
			$list = [];
			$cntl = \Aimeos\Controller\Frontend\Factory::create( $this->getContext(), 'catalog' );

			foreach( $catIds as $catId )
			{
				$tree = $cntl->getTree( $catId, [], $level );
				$list = array_merge( $list, $this->getCatalogIdsFromTree( $tree ) );
			}

			$catIds = $list;
		}

		$expr = [$filter->getConditions()];
		$expr[] = $filter->compare( '==', 'index.catalog.id', array_unique( $catIds ) );

		if( isset( $filter->sortname ) && $filter->sortname === 'relevance' )
		{
			$dir = ( isset( $filter->sortdir ) ? $filter->sortdir : '+' );

			$cmpfunc = $filter->createFunction( 'index.catalog:position', [$listtype, $catIds] );
			$expr[] = $filter->compare( '>=', $cmpfunc, 0 );

			$sortfunc = $filter->createFunction( 'sort:index.catalog:position', [$listtype, $catIds] );
			$filter->setSortations( [$filter->sort( $dir, $sortfunc ), $filter->sort( '+', 'product.id' )] );
		}

		$filter->setConditions( $filter->combine( '&&', $expr ) );

		return $filter;
	}


	/**
	 * Returns the given search filter with the conditions attached for filtering by suppliers.
	 *
	 * @param \Aimeos\MW\Criteria\Iface $filter Criteria object used for product search
	 * @param array|string $supIds List of supplier IDs for faceted search
	 * @param string $listtype List type of the product associated to the supplier, usually "default"
	 * @return \Aimeos\MW\Criteria\Iface Criteria object containing the conditions for searching
	 * @since 2018.07
	 */
	public function addFilterSupplier( \Aimeos\MW\Criteria\Iface $filter, $supIds, $listtype = 'default' )
	{
		if( ( $supIds = $this->validateIds( (array) $supIds ) ) === [] ) {
			return $filter;
		}

		$expr = [$filter->getConditions()];
		$expr[] = $filter->compare( '==', 'index.supplier.id', array_unique( $supIds ) );

		if( isset( $filter->sortname ) && $filter->sortname === 'relevance' )
		{
			$dir = ( isset( $filter->sortdir ) ? $filter->sortdir : '+' );

			$cmpfunc = $filter->createFunction( 'index.supplier:position', [$listtype, $supIds] );
			$expr[] = $filter->compare( '>=', $cmpfunc, 0 );

			$sortfunc = $filter->createFunction( 'sort:index.supplier:position', [$listtype, $supIds] );
			$filter->setSortations( [$filter->sort( $dir, $sortfunc ), $filter->sort( '+', 'product.id' )] );
		}

		return $filter->setConditions( $filter->combine( '&&', $expr ) );
	}


	/**
	 * Returns the given search filter with the conditions attached for filtering by text.
	 *
	 * @param \Aimeos\MW\Criteria\Iface $filter Criteria object used for product search
	 * @param string $input Search string entered by the user
	 * @return \Aimeos\MW\Criteria\Iface Criteria object containing the conditions for searching
	 * @since 2017.03
	 */
	public function addFilterText( \Aimeos\MW\Criteria\Iface $filter, $input )
	{
		$langid = $this->getContext()->getLocale()->getLanguageId();
		$cmpfunc = $filter->createFunction( 'index.text:relevance', [$langid, $input] );
		$expr = array( $filter->compare( '>', $cmpfunc, 0 ), $filter->getConditions() );

		return $filter->setConditions( $filter->combine( '&&', $expr ) );
	}


	/**
	 * Returns the aggregated count of products for the given key.
	 *
	 * @param \Aimeos\MW\Criteria\Iface $filter Critera object which contains the filter conditions
	 * @param string $key Search key to aggregate for, e.g. "index.attribute.id"
	 * @return array Associative list of key values as key and the product count for this key as value
	 * @since 2017.03
	 */
	public function aggregate( \Aimeos\MW\Criteria\Iface $filter, $key )
	{
		return \Aimeos\MShop::create( $this->getContext(), 'index' )->aggregate( $filter, $key );
	}


	/**
	 * Returns the default product filter.
	 *
	 * @param string|null $sort Sortation of the product list like "name", "code", "price" and "position", null for no sortation
	 * @param string $direction Sort direction of the product list ("+", "-")
	 * @param integer $start Position in the list of found products where to begin retrieving the items
	 * @param integer $size Number of products that should be returned
	 * @return \Aimeos\MW\Criteria\Iface Criteria object containing the conditions for searching
	 * @since 2017.03
	 */
	public function createFilter( $sort = null, $direction = '+', $start = 0, $size = 100 )
	{
		$sortations = [];
		$context = $this->getContext();
		$manager = \Aimeos\MShop::create( $context, 'index' );


		/** controller/frontend/product/ignore-dates
		 * Fetch product items even if they can't be bought at the current point in time
		 *
		 * Sometimes it's useful to show products in list and details views even
		 * if they can't be bought at the moment. Setting this configuration
		 * option to true will return product regardless of their start/end date
		 * but the product status is still checked.
		 *
		 * @param boolean True to get items regardless of their start/end date, false to check start/end dates
		 * @since 2017.10
		 * @category Developer
		 */
		if( $context->getConfig()->get( 'controller/frontend/product/ignore-dates', false ) )
		{
			$search = $manager->createSearch();
			$search->setConditions( $search->compare( '>', 'product.status', 0 ) );
		}
		else
		{
			$search = $manager->createSearch( true );
		}


		$expr = array( $search->compare( '!=', 'index.catalog.id', null ) );

		switch( $sort )
		{
			case 'code':
				$sortations[] = $search->sort( $direction, 'product.code' );
				break;

			case 'ctime':
				$sortations[] = $search->sort( $direction, 'product.ctime' );
				break;

			case 'name':
				$langid = $context->getLocale()->getLanguageId();

				$cmpfunc = $search->createFunction( 'index.text:name', [$langid] );
				$expr[] = $search->compare( '!=', $cmpfunc, null );

				$sortfunc = $search->createFunction( 'sort:index.text:name', [$langid] );
				$sortations[] = $search->sort( $direction, $sortfunc );
				break;

			case 'price':
				$currencyid = $context->getLocale()->getCurrencyId();

				$cmpfunc = $search->createFunction( 'index.price:value', [$currencyid] );
				$expr[] = $search->compare( '!=', $cmpfunc, null );

				$sortfunc = $search->createFunction( 'sort:index.price:value', [$currencyid] );
				$sortations[] = $search->sort( $direction, $sortfunc );
				break;
		}

		$expr[] = $search->getConditions();

		$search->setConditions( $search->combine( '&&', $expr ) );
		$search->setSortations( $sortations );
		$search->setSlice( $start, $size );
		$search->sortdir = $direction;
		$search->sortname = $sort;

		return $search;
	}


	/**
	 * Returns the product for the given product ID from the product
	 *
	 * @param string $productId Unique product ID
	 * @param string[] $domains Domain names of items that are associated with the products and that should be fetched too
	 * @return \Aimeos\MShop\Product\Item\Iface Product item including the referenced domains items
	 * @since 2017.03
	 */
	public function getItem( $productId, array $domains = array( 'attribute', 'media', 'price', 'product', 'product/property', 'text' ) )
	{
		$items = $this->getItems( [$productId], $domains );

		if( ( $item = reset( $items ) ) !== false ) {
			return $item;
		}

		throw new \Aimeos\Controller\Frontend\Exception( sprintf( 'Product item with ID "%1$s" not found', $productId ) );
	}


	/**
	 * Returns the product for the given product ID from the product
	 *
	 * @param string[] $productIds List of unique product ID
	 * @param string[] $domains Domain names of items that are associated with the products and that should be fetched too
	 * @return \Aimeos\MShop\Product\Item\Iface[] Associative list of product IDs as keys and product items as values
	 * @since 2017.03
	 */
	public function getItems( array $productIds, array $domains = array( 'media', 'price', 'text' ) )
	{
		$context = $this->getContext();
		$manager = \Aimeos\MShop::create( $context, 'product' );

		/** controller/frontend/order/ignore-dates
		 * Ignore start and end dates of products
		 *
		 * Usually, products are only shown in the product list if their start/end
		 * dates are not set or if the current date is withing the start/end date
		 * range of the product. This settings will list all products that wouldn't
		 * be shown due to their start/end dates but they still can't be bought.
		 *
		 * @param boolean True to show products whose start/end date range doesn't match the current date, false to hide them
		 * @since 2017.08
		 * @category Developer
		 */
		if( $context->getConfig()->get( 'controller/frontend/product/ignore-dates', false ) )
		{
			$search = $manager->createSearch();
			$search->setConditions( $search->compare( '>', 'product.status', 0 ) );
		}
		else
		{
			$search = $manager->createSearch( true );
		}

		$expr = array(
			$search->compare( '==', 'product.id', $productIds ),
			$search->getConditions(),
		);
		$search->setConditions( $search->combine( '&&', $expr ) );
		$search->setSlice( 0, count( $productIds ) );

		return $manager->searchItems( $search, $domains );
	}


	/**
	 * Returns the products from the product filtered by the given criteria object.
	 *
	 * @param \Aimeos\MW\Criteria\Iface $filter Critera object which contains the filter conditions
	 * @param string[] $domains Domain names of items that are associated with the products and that should be fetched too
	 * @param integer &$total Parameter where the total number of found products will be stored in
	 * @return array Ordered list of product items implementing \Aimeos\MShop\Product\Item\Iface
	 * @since 2017.03
	 */
	public function searchItems( \Aimeos\MW\Criteria\Iface $filter, array $domains = array( 'media', 'price', 'text' ), &$total = null )
	{
		return \Aimeos\MShop::create( $this->getContext(), 'index' )->searchItems( $filter, $domains, $total );
	}


	/**
	 * Returns the list of catalog IDs for the given catalog tree
	 *
	 * @param \Aimeos\MShop\Catalog\Item\Iface $item Catalog item with children
	 * @return array List of catalog IDs
	 */
	protected function getCatalogIdsFromTree( \Aimeos\MShop\Catalog\Item\Iface $item )
	{
		if( $item->getStatus() < 1 ) {
			return [];
		}

		$list = [ $item->getId() ];

		foreach( $item->getChildren() as $child ) {
			$list = array_merge( $list, $this->getCatalogIdsFromTree( $child ) );
		}

		return $list;
	}


	/**
	 * Validates the given IDs as integers
	 *
	 * @param array $ids List of IDs to validate
	 * @return array List of validated IDs
	 */
	protected function validateIds( array $ids )
	{
		$list = [];

		foreach( $ids as $id )
		{
			if( $id != '' && preg_match( '/^[A-Za-z0-9\-\_]+$/', $id ) === 1 ) {
				$list[] = (string) $id;
			}
		}

		return $list;
	}
}
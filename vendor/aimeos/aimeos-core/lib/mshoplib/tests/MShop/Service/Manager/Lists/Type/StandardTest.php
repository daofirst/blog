<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2011
 * @copyright Aimeos (aimeos.org), 2015-2018
 */


namespace Aimeos\MShop\Service\Manager\Lists\Type;


class StandardTest extends \PHPUnit\Framework\TestCase
{
	private $object;
	private $editor = '';


	protected function setUp()
	{
		$this->editor = \TestHelperMShop::getContext()->getEditor();
		$manager = \Aimeos\MShop\Service\Manager\Factory::create( \TestHelperMShop::getContext() );

		$listManager = $manager->getSubManager( 'lists' );
		$this->object = $listManager->getSubManager( 'type' );
	}


	protected function tearDown()
	{
		unset( $this->object );
	}


	public function testCleanup()
	{
		$this->assertInstanceOf( \Aimeos\MShop\Common\Manager\Iface::class, $this->object->cleanup( [-1] ) );
	}


	public function testGetResourceType()
	{
		$result = $this->object->getResourceType();

		$this->assertContains( 'service/lists/type', $result );
	}


	public function testCreateItem()
	{
		$item = $this->object->createItem();
		$this->assertInstanceOf( \Aimeos\MShop\Common\Item\Type\Iface::class, $item );
	}


	public function testGetItem()
	{
		$search = $this->object->createSearch()->setSlice( 0, 1 );
		$search->setConditions( $search->compare( '==', 'service.lists.type.editor', $this->editor ) );
		$results = $this->object->searchItems( $search );

		if( ( $expected = reset( $results ) ) === false ) {
			throw new \RuntimeException( 'No list type item found' );
		}

		$this->assertEquals( $expected, $this->object->getItem( $expected->getId() ) );
	}


	public function testSaveInvalid()
	{
		$this->setExpectedException( \Aimeos\MW\Common\Exception::class );
		$this->object->saveItem( new \Aimeos\MShop\Locale\Item\Standard() );
	}


	public function testSaveUpdateDeleteItem()
	{
		$search = $this->object->createSearch();
		$search->setConditions( $search->compare( '==', 'service.lists.type.editor', $this->editor ) );
		$results = $this->object->searchItems( $search );

		if( ( $item = reset( $results ) ) === false ) {
			throw new \RuntimeException( 'No type item found' );
		}

		$item->setId( null );
		$item->setCode( 'unitTestSave' );
		$resultSaved = $this->object->saveItem( $item );
		$itemSaved = $this->object->getItem( $item->getId() );

		$itemExp = clone $itemSaved;
		$itemExp->setCode( 'unitTestSave2' );
		$resultUpd = $this->object->saveItem( $itemExp );
		$itemUpd = $this->object->getItem( $itemExp->getId() );

		$this->object->deleteItem( $itemSaved->getId() );


		$this->assertTrue( $item->getId() !== null );
		$this->assertEquals( $item->getId(), $itemSaved->getId() );
		$this->assertEquals( $item->getSiteId(), $itemSaved->getSiteId() );
		$this->assertEquals( $item->getCode(), $itemSaved->getCode() );
		$this->assertEquals( $item->getDomain(), $itemSaved->getDomain() );
		$this->assertEquals( $item->getLabel(), $itemSaved->getLabel() );
		$this->assertEquals( $item->getStatus(), $itemSaved->getStatus() );

		$this->assertEquals( $this->editor, $itemSaved->getEditor() );
		$this->assertRegExp( '/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/', $itemSaved->getTimeCreated() );
		$this->assertRegExp( '/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/', $itemSaved->getTimeModified() );

		$this->assertEquals( $itemExp->getId(), $itemUpd->getId() );
		$this->assertEquals( $itemExp->getSiteId(), $itemUpd->getSiteId() );
		$this->assertEquals( $itemExp->getCode(), $itemUpd->getCode() );
		$this->assertEquals( $itemExp->getDomain(), $itemUpd->getDomain() );
		$this->assertEquals( $itemExp->getLabel(), $itemUpd->getLabel() );
		$this->assertEquals( $itemExp->getStatus(), $itemUpd->getStatus() );

		$this->assertEquals( $this->editor, $itemUpd->getEditor() );
		$this->assertEquals( $itemExp->getTimeCreated(), $itemUpd->getTimeCreated() );
		$this->assertRegExp( '/\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}/', $itemUpd->getTimeModified() );

		$this->assertInstanceOf( \Aimeos\MShop\Common\Item\Iface::class, $resultSaved );
		$this->assertInstanceOf( \Aimeos\MShop\Common\Item\Iface::class, $resultUpd );

		$this->setExpectedException( \Aimeos\MShop\Exception::class );
		$this->object->getItem( $itemSaved->getId() );
	}


	public function testSearchItems()
	{
		$total = 0;
		$search = $this->object->createSearch();

		$expr = [];
		$expr[] = $search->compare( '!=', 'service.lists.type.id', null );
		$expr[] = $search->compare( '!=', 'service.lists.type.siteid', null );
		$expr[] = $search->compare( '==', 'service.lists.type.code', 'unittype1' );
		$expr[] = $search->compare( '==', 'service.lists.type.domain', 'text' );
		$expr[] = $search->compare( '>', 'service.lists.type.label', '' );
		$expr[] = $search->compare( '>=', 'service.lists.type.position', 0 );
		$expr[] = $search->compare( '==', 'service.lists.type.status', 1 );
		$expr[] = $search->compare( '>=', 'service.lists.type.mtime', '1970-01-01 00:00:00' );
		$expr[] = $search->compare( '>=', 'service.lists.type.ctime', '1970-01-01 00:00:00' );
		$expr[] = $search->compare( '==', 'service.lists.type.editor', $this->editor );

		$search->setConditions( $search->combine( '&&', $expr ) );
		$results = $this->object->searchItems( $search, [], $total );
		$this->assertEquals( 1, count( $results ) );


		$search = $this->object->createSearch( true );
		$conditions = array(
			$search->compare( '==', 'service.lists.type.domain', 'text' ),
			$search->compare( '==', 'service.lists.type.editor', $this->editor ),
			$search->getConditions()
		);
		$search->setConditions( $search->combine( '&&', $conditions ) );
		$search->setSortations( [$search->sort( '-', 'service.lists.type.position' )] );
		$search->setSlice( 0, 3 );
		$results = $this->object->searchItems( $search, [], $total );
		$this->assertEquals( 3, count( $results ) );
		$this->assertEquals( 5, $total );

		foreach( $results as $itemId => $item ) {
			$this->assertEquals( $itemId, $item->getId() );
		}
	}


	public function testGetSubManager()
	{
		$this->setExpectedException( \Aimeos\MShop\Exception::class );
		$this->object->getSubManager( 'unknown' );
	}

}

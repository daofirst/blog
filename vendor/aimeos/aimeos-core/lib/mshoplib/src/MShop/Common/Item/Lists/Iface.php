<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2011
 * @copyright Aimeos (aimeos.org), 2015-2018
 * @package MShop
 * @subpackage Common
 */


namespace Aimeos\MShop\Common\Item\Lists;


/**
 * Generic interface for all list items.
 *
 * @package MShop
 * @subpackage Common
 */
interface Iface
	extends \Aimeos\MShop\Common\Item\Iface, \Aimeos\MShop\Common\Item\Config\Iface,
		\Aimeos\MShop\Common\Item\Position\Iface, \Aimeos\MShop\Common\Item\Time\Iface,
		\Aimeos\MShop\Common\Item\TypeRef\Iface, \Aimeos\MShop\Common\Item\Parentid\Iface,
		\Aimeos\MShop\Common\Item\Status\Iface
{
	/**
	 * Returns the unique key of the list item
	 *
	 * @return string Unique key consisting of domain/type/refid
	 */
	public function getKey();

	/**
	 * Returns the domain of the common list item, e.g. text or media.
	 *
	 * @return string Domain of the common list item
	 */
	public function getDomain();

	/**
	 * Sets the new domain of the common list item, e.g. text od media.
	 *
	 * @param string $domain New domain of the common list item
	 * @return \Aimeos\MShop\Common\Item\Lists\Iface Lists item for chaining method calls
	 */
	public function setDomain( $domain );

	/**
	 * Returns the reference id of the common list item, like the unique id of a text item or a media item.
	 *
	 * @return string reference id of the common list item
	 */
	public function getRefId();

	/**
	 * Sets the new reference id of the common list item, like the unique id of a text item or a media item.
	 *
	 * @param string $refid New reference id of the common list item
	 * @return \Aimeos\MShop\Common\Item\Lists\Iface Lists item for chaining method calls
	 */
	public function setRefId( $refid );

	/**
	 * Returns the referenced item if it's available.
	 *
	 * @return \Aimeos\MShop\Common\Item\Iface|null Referenced list item
	 */
	public function getRefItem();

	/**
	 * Stores the item referenced by the list item.
	 *
	 * @param \Aimeos\MShop\Common\Item\Iface|null $refItem Item referenced by the list item or null for no reference
	 * @return \Aimeos\MShop\Common\Item\Lists\Iface Lists item for chaining method calls
	 */
	public function setRefItem( \Aimeos\MShop\Common\Item\Iface $refItem = null );
}

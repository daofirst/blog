<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2011
 * @copyright Aimeos (aimeos.org), 2015-2018
 * @package MShop
 * @subpackage Price
 */


namespace Aimeos\MShop\Price\Item;


/**
 * Generic interface for price DTO objects.
 *
 * @package MShop
 * @subpackage Price
 */
interface Iface
	extends \Aimeos\MShop\Common\Item\Iface, \Aimeos\MShop\Common\Item\Domain\Iface,
		\Aimeos\MShop\Common\Item\ListRef\Iface, \Aimeos\MShop\Common\Item\Status\Iface,
		\Aimeos\MShop\Common\Item\TypeRef\Iface
{
	/**
	 * Add the given price to the current one.
	 *
	 * @param \Aimeos\MShop\Price\Item\Iface $item Price item which should be added
	 * @param integer $quantity Number of times the Price should be added
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function addItem( \Aimeos\MShop\Price\Item\Iface $item, $quantity = 1 );

	/**
	 * Resets the values of the price item.
	 *
	 * The currency ID, domain, type and status stays the same.
	 *
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function clear();

	/**
	 * Compares the properties of the given price item with its own one.
	 *
	 * This method compare only the essential price properties:
	 * * Value
	 * * Costs
	 * * Rebate
	 * * Taxrate
	 * * Quantity
	 * * Currency ID
	 *
	 * All other item properties are not compared.
	 *
	 * @param \Aimeos\MShop\Price\Item\Iface $price Price item to compare with
	 * @return boolean True if equal, false if not
	 * @since 2014.09
	 */
	public function compare( \Aimeos\MShop\Price\Item\Iface $price );

	/**
	 * Returns the decimal precision of the price
	 *
	 * @return integer Number of decimal digits
	 */
	public function getPrecision();

	/**
	 * Returns the label of the item
	 *
	 * @return string Label of the item
	 */
	public function getLabel();

	/**
	 * Sets the label of the item
	 *
	 * @param string $label Label of the item
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setLabel( $label );

	/**
	 * Returns the quantity.
	 *
	 * @return integer Quantity
	 */
	public function getQuantity();

	/**
	 * Sets the quantity.
	 *
	 * @param integer $quantity Quantity
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setQuantity( $quantity );

	/**
	 * Returns the amount of money.
	 *
	 * @return string Price
	 */
	public function getValue();

	/**
	 * Sets the new amount of money.
	 *
	 * @param string|integer|double $price Amount with two digits precision
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setValue( $price );

	/**
	 * Returns the costs.
	 *
	 * @return string Costs
	 */
	public function getCosts();

	/**
	 * Sets the new costs.
	 *
	 * @param string|integer|double $price Amount with two digits precision
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setCosts( $price );

	/**
	 * Returns the rebate amount.
	 *
	 * @return string Rebate amount
	 */
	public function getRebate();

	/**
	 * Sets the new rebate amount.
	 *
	 * @param string|integer|double $price Rebate amount with two digits precision
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setRebate( $price );

	/**
	 * Returns the tax rate in percent.
	 *
	 * @return string Tax rate of product
	 */
	public function getTaxRate();

	/**
	 * Sets the new tax rate in percent.
	 *
	 * @param string|integer|double $taxrate Tax rate with two digits precision
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setTaxRate( $taxrate );

	/**
	 * Returns the tax rate flag.
	 *
	 * True if tax is included in the price value, costs and rebate, false if not
	 *
	 * @return boolean Tax rate flag for the price
	 */
	public function getTaxFlag();

	/**
	 * Sets the new tax flag.
	 *
	 * @param boolean $flag True if tax is included in the price value, costs and rebate, false if not
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	*/
	public function setTaxFlag( $flag );

	/**
	 * Returns the tax for the price item
	 *
	 * If the tax isn't set, it's calculated according to the value, the
	 * costs per item, the tax rate and the tax flag.
	 *
	 * @return string Tax value with four digits precision
	 * @see mshop/price/taxflag
	 */
	public function getTaxValue();

	/**
	 * Sets the tax amount
	 *
	 * @param string|integer|double $value Tax value with up to four digits precision
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 */
	public function setTaxValue( $value );

	/**
	 * Returns the currency ID.
	 *
	 * @return string|null Three letter ISO currency code (e.g. EUR)
	 */
	public function getCurrencyId();

	/**
	 * Sets the currency ID.
	 *
	 * @param string $currencyid Three letter ISO currency code (e.g. EUR)
	 * @return \Aimeos\MShop\Price\Item\Iface Price item for chaining method calls
	 * @throws \Aimeos\MShop\Exception If the currency ID is invalid
	 */
	public function setCurrencyId( $currencyid );
}

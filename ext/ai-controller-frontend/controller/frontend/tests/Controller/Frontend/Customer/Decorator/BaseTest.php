<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2017-2018
 */


namespace Aimeos\Controller\Frontend\Customer\Decorator;


class BaseTest extends \PHPUnit\Framework\TestCase
{
	private $context;
	private $object;
	private $stub;


	protected function setUp()
	{
		$this->context = \TestHelperFrontend::getContext();

		$this->stub = $this->getMockBuilder( \Aimeos\Controller\Frontend\Customer\Standard::class )
			->disableOriginalConstructor()
			->getMock();

		$this->object = $this->getMockBuilder( \Aimeos\Controller\Frontend\Customer\Decorator\Base::class )
			->setConstructorArgs( [$this->stub, $this->context] )
			->getMockForAbstractClass();
	}


	protected function tearDown()
	{
		unset( $this->context, $this->object, $this->stub );
	}


	public function testConstructException()
	{
		$stub = $this->getMockBuilder( \Aimeos\Controller\Frontend\Iface::class )->getMock();

		$this->setExpectedException( \Aimeos\MW\Common\Exception::class );

		$this->getMockBuilder( \Aimeos\Controller\Frontend\Customer\Decorator\Base::class )
			->setConstructorArgs( [$stub, $this->context] )
			->getMockForAbstractClass();
	}


	public function testCall()
	{
		$stub = $this->getMockBuilder( \Aimeos\Controller\Frontend\Customer\Standard::class )
			->disableOriginalConstructor()
			->setMethods( ['invalid'] )
			->getMock();

		$object = $this->getMockBuilder( \Aimeos\Controller\Frontend\Customer\Decorator\Base::class )
			->setConstructorArgs( [$stub, $this->context] )
			->getMockForAbstractClass();

		$stub->expects( $this->once() )->method( 'invalid' )->will( $this->returnValue( true ) );

		$this->assertTrue( $object->invalid() );
	}


	public function testAddItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer' )->createItem();

		$this->stub->expects( $this->once() )->method( 'addItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Iface::class, $this->object->addItem( [] ) );
	}


	public function testCreateItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer' )->createItem();

		$this->stub->expects( $this->once() )->method( 'createItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Iface::class, $this->object->createItem() );
	}


	public function testDeleteItem()
	{
		$this->stub->expects( $this->once() )->method( 'deleteItem' );

		$this->object->deleteItem( -1 );
	}


	public function testEditItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer' )->createItem();

		$this->stub->expects( $this->once() )->method( 'editItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Iface::class, $this->object->editItem( -1, [] ) );
	}


	public function testGetItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer' )->createItem();

		$this->stub->expects( $this->once() )->method( 'getItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Iface::class, $this->object->getItem( -1 ) );
	}


	public function testFindItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer' )->createItem();

		$this->stub->expects( $this->once() )->method( 'findItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Iface::class, $this->object->findItem( 'test' ) );
	}


	public function testSaveItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer' )->createItem();

		$this->stub->expects( $this->once() )->method( 'saveItem' );

		$this->object->saveItem( $item );
	}


	public function testCreateAddressItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer/address' )->createItem();

		$this->stub->expects( $this->once() )->method( 'createAddressItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Address\Iface::class, $this->object->createAddressItem() );
	}


	public function testDeleteAddressItem()
	{
		$this->stub->expects( $this->once() )->method( 'deleteAddressItem' );

		$this->object->deleteAddressItem( -1 );
	}


	public function testEditAddressItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer/address' )->createItem();

		$this->stub->expects( $this->once() )->method( 'editAddressItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Address\Iface::class, $this->object->editAddressItem( -1, [] ) );
	}


	public function testGetAddressItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer/address' )->createItem();

		$this->stub->expects( $this->once() )->method( 'getAddressItem' )
			->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Customer\Item\Address\Iface::class, $this->object->getAddressItem( -1 ) );
	}


	public function testSaveAddressItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'customer/address' )->createItem();

		$this->stub->expects( $this->once() )->method( 'saveAddressItem' );

		$this->object->saveAddressItem( $item );
	}


	public function testGetController()
	{
		$result = $this->access( 'getController' )->invokeArgs( $this->object, [] );

		$this->assertSame( $this->stub, $result );
	}


	protected function access( $name )
	{
		$class = new \ReflectionClass( \Aimeos\Controller\Frontend\Customer\Decorator\Base::class );
		$method = $class->getMethod( $name );
		$method->setAccessible( true );

		return $method;
	}
}

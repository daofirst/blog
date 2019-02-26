<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2018
 */


namespace Aimeos\Controller\Frontend\Subscription\Decorator;


class BaseTest extends \PHPUnit\Framework\TestCase
{
	private $context;
	private $object;
	private $stub;


	protected function setUp()
	{
		$this->context = \TestHelperFrontend::getContext();

		$this->stub = $this->getMockBuilder( \Aimeos\Controller\Frontend\Subscription\Standard::class )
			->disableOriginalConstructor()
			->getMock();

		$this->object = $this->getMockBuilder( \Aimeos\Controller\Frontend\Subscription\Decorator\Base::class )
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

		$this->getMockBuilder( \Aimeos\Controller\Frontend\Subscription\Decorator\Base::class )
			->setConstructorArgs( [$stub, $this->context] )
			->getMockForAbstractClass();
	}


	public function testCall()
	{
		$stub = $this->getMockBuilder( \Aimeos\Controller\Frontend\Subscription\Standard::class )
			->disableOriginalConstructor()
			->setMethods( ['invalid'] )
			->getMock();

		$object = $this->getMockBuilder( \Aimeos\Controller\Frontend\Subscription\Decorator\Base::class )
			->setConstructorArgs( [$stub, $this->context] )
			->getMockForAbstractClass();

		$stub->expects( $this->once() )->method( 'invalid' )->will( $this->returnValue( true ) );

		$this->assertTrue( $object->invalid() );
	}


	public function testCancel()
	{
		$item = \Aimeos\MShop::create( $this->context, 'subscription' )->createItem();

		$this->stub->expects( $this->once() )->method( 'cancel' )->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Subscription\Item\Iface::class, $this->object->cancel( -1, '' ) );
	}


	public function testCreateFilter()
	{
		$search = \Aimeos\MShop::create( $this->context, 'subscription' )->createSearch();

		$this->stub->expects( $this->once() )->method( 'createFilter' )->will( $this->returnValue( $search ) );

		$this->assertInstanceOf( \Aimeos\MW\Criteria\Iface::class, $this->object->createFilter() );
	}


	public function testGetItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'subscription' )->createItem();

		$this->stub->expects( $this->once() )->method( 'getItem' )->will( $this->returnValue( $item ) );

		$this->assertInstanceOf( \Aimeos\MShop\Subscription\Item\Iface::class, $this->object->getItem( -1 ) );
	}


	public function testSaveItem()
	{
		$item = \Aimeos\MShop::create( $this->context, 'subscription' )->createItem();

		$this->stub->expects( $this->once() )->method( 'saveItem' );

		$this->object->saveItem( $item );
	}


	public function testSearchItems()
	{
		$search = $this->getMockBuilder( \Aimeos\MW\Criteria\Iface::class )->getMock();

		$this->stub->expects( $this->once() )->method( 'searchItems' )->will( $this->returnValue( [] ) );

		$this->assertEquals( [], $this->object->searchItems( $search ) );
	}


	public function testGetIntervals()
	{
		$this->stub->expects( $this->once() )->method( 'getIntervals' )->will( $this->returnValue( [] ) );

		$this->assertEquals( [], $this->object->getIntervals() );
	}


	public function testGetController()
	{
		$result = $this->access( 'getController' )->invokeArgs( $this->object, [] );

		$this->assertSame( $this->stub, $result );
	}


	protected function access( $name )
	{
		$class = new \ReflectionClass( \Aimeos\Controller\Frontend\Subscription\Decorator\Base::class );
		$method = $class->getMethod( $name );
		$method->setAccessible( true );

		return $method;
	}
}

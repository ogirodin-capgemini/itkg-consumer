<?php

namespace Itkg\Test\Service;

use Itkg\Service\Factory;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-16 at 12:09:11.
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Factory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Factory;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Itkg\Service\Factory::getService
     * @todo   Implement testGetService().
     */
    public function testGetService()
    {
   
        $service = 'ITKG_SERVICE_MAGAZINE';        
        try {
            $this->object->getService($service);
        } catch(\Exception $e) {
            $this->assertEquals('Itkg\Exception\NotFoundException', get_class($e));
        }
        
        $service = 'test';
        try {
            $this->object->getService($service);
        } catch(\Exception $e) {
             $this->assertEquals('Itkg\Exception\NotFoundException', get_class($e));
        }

    }
}
<?php

class RegistryTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {

    }

    public function testGetSetMethods()
    {
        $id = 'example';
        $value = '123';

        Zendx_Registry::set($id, $value);

        $service = Zendx_Registry::get($id);

        $this->assertEquals($value, $service);
    }

    public function testGetSetWithClosureMethods()
    {
        $id = 'closure';
        $value = '123';

        Zendx_Registry::set($id, function() use ($value) {
            return $value;
        });

        $service = Zendx_Registry::get($id);

        $this->assertEquals($value, $service);
    }

    /**
     * @expectedException Zend_Exception
     */
    public function testGetWhenItemNotFoundMethods()
    {
        $id = 'idontexist';

        $service = Zendx_Registry::get($id);

        $this->assertEquals(null, $service);
    }
}

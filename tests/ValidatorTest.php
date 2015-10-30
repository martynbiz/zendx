<?php

class ValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Zendx_Validate
     */
    protected $_validator;

    public function setUp()
    {
        $this->_validator = new Zendx_Validator();
    }

    public function testObjectInstanceOfClass()
    {
        $this->assertTrue($this->_validator instanceof Zendx_Validator);
    }
}

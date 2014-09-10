<?php

class AndTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->component = $this->getMockBuilder("PHPCR\Query\QOM\AndInterface")->disableOriginalConstructor()->getMock();
        $this->decoratorFactory = new \Sulu\Component\PhpcrDecorator\Factory\PassthruDecoratorFactory();
    }

    public function testInstantiation()
    {
        new Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM\AndConstraint($this->component, $this->decoratorFactory);
    }
}
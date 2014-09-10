<?php

class ComparisonTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->component = $this->getMockBuilder("PHPCR\Query\QOM\ComparisonInterface")->disableOriginalConstructor()->getMock();
        $this->decoratorFactory = new \Sulu\Component\PhpcrDecorator\Factory\PassthruDecoratorFactory();
    }

    public function testInstantiation()
    {
        new Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM\Comparison($this->component, $this->decoratorFactory);
    }
}
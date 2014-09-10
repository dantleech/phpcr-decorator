<?php

class ItemDefinitionTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->component = $this->getMockBuilder("PHPCR\NodeType\ItemDefinitionInterface")->disableOriginalConstructor()->getMock();
        $this->decoratorFactory = new \Sulu\Component\PhpcrDecorator\Factory\PassthruDecoratorFactory();
    }

    public function testInstantiation()
    {
        new Sulu\Component\PhpcrDecorator\PHPCR\NodeType\ItemDefinition($this->component, $this->decoratorFactory);
    }
}
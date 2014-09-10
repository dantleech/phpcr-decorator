<?php

class WorkspaceTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->component = $this->getMockBuilder("PHPCR\WorkspaceInterface")->disableOriginalConstructor()->getMock();
        $this->decoratorFactory = new \Sulu\Component\PhpcrDecorator\Factory\PassthruDecoratorFactory();
    }

    public function testInstantiation()
    {
        new Sulu\Component\PhpcrDecorator\PHPCR\Workspace($this->component, $this->decoratorFactory);
    }
}
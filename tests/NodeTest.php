<?php

namespace Sulu\Component\PhpcrDecorator\Tests;

use Sulu\Component\PhpcrDecorator\PHPCR\Node;
use Sulu\Component\PhpcrDecorator\Factory\PassthruDecoratorFactory;

/**
 * This test checks a few select methods to ensure that
 * things generally work (as opposed to just instantiating all
 * the classes as the genereated tests do).
 */
class NodeTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $decoratorFactory = new PassthruDecoratorFactory();
        $this->mockNode = $this->getMock('PHPCR\NodeInterface');
        $this->node = new Node($this->mockNode, $decoratorFactory);
    }

    public function testNode()
    {
        $this->mockNode->expects($this->once())
            ->method('isSame')
            ->with($this->mockNode);
        $this->node->isSame($this->mockNode);
    }

    public function testAddNode()
    {
        $this->mockNode->expects($this->once())
            ->method('addNode')
            ->with('/foo', 'nt:foo');
        $this->node->addNode('/foo', 'nt:foo');
    }
}

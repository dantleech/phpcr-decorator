<?php

class UserTransactionTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->component = $this->getMockBuilder("PHPCR\Transaction\UserTransactionInterface")->disableOriginalConstructor()->getMock();
        $this->decoratorFactory = new \Sulu\Component\PhpcrDecorator\Factory\PassthruDecoratorFactory();
    }

    public function testInstantiation()
    {
        new Sulu\Component\PhpcrDecorator\PHPCR\Transaction\UserTransaction($this->component, $this->decoratorFactory);
    }
}
<?php

// autogenerated: Wed, 10 Sep 2014 13:41:17 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM;


class SameNode implements \PHPCR\Query\QOM\SameNodeInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Query\QOM\SameNodeInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

}
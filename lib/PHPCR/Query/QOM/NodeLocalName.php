<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM;


class NodeLocalName implements \PHPCR\Query\QOM\NodeLocalNameInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Query\QOM\NodeLocalNameInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function getSelectorName()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getSelectorName());
    }

}
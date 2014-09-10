<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR;


class ItemVisitor implements \PHPCR\ItemVisitorInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\ItemVisitorInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function visit(\PHPCR\ItemInterface$item)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->visit($item));
    }

}
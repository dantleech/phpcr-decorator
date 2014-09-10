<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Retention;


class Hold implements \PHPCR\Retention\HoldInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Retention\HoldInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function isDeep()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->isDeep());
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getName());
    }

}
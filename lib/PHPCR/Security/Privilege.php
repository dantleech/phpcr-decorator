<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Security;


class Privilege implements \PHPCR\Security\PrivilegeInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Security\PrivilegeInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function isAbstract()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->isAbstract());
    }

    /**
     * {@inheritDoc}
     */
    public function isAggregate()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->isAggregate());
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaredAggregatePrivileges()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getDeclaredAggregatePrivileges());
    }

    /**
     * {@inheritDoc}
     */
    public function getAggregatePrivileges()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getAggregatePrivileges());
    }

}
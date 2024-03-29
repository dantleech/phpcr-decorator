<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Transaction;


class UserTransaction implements \PHPCR\Transaction\UserTransactionInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Transaction\UserTransactionInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function begin()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->begin());
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->commit());
    }

    /**
     * {@inheritDoc}
     */
    public function inTransaction()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->inTransaction());
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->rollback());
    }

    /**
     * {@inheritDoc}
     */
    public function setTransactionTimeout($seconds = 0)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setTransactionTimeout($seconds));
    }

}
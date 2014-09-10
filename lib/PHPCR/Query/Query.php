<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query;


class Query implements \PHPCR\Query\QueryInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Query\QueryInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function bindValue($varName, $value)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->bindValue($varName, $value));
    }

    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->execute());
    }

    /**
     * {@inheritDoc}
     */
    public function cancel()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->cancel());
    }

    /**
     * {@inheritDoc}
     */
    public function getBindVariableNames()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getBindVariableNames());
    }

    /**
     * {@inheritDoc}
     */
    public function setLimit($limit)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setLimit($limit));
    }

    /**
     * {@inheritDoc}
     */
    public function setOffset($offset)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setOffset($offset));
    }

    /**
     * {@inheritDoc}
     */
    public function getStatement()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getStatement());
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getLanguage());
    }

    /**
     * {@inheritDoc}
     */
    public function getStoredQueryPath()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getStoredQueryPath());
    }

    /**
     * {@inheritDoc}
     */
    public function storeAsNode($absPath)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->storeAsNode($absPath));
    }

}
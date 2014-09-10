<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query

class Query implements \PHPCR\Query\QueryInterface
{
    /**
     * {@inheritDoc}
     */
    public function bindValue($varName, $value)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->bindValue($varName $value))
    }

    /**
     * {@inheritDoc}
     */
    public function execute()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->execute())
    }

    /**
     * {@inheritDoc}
     */
    public function cancel()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->cancel())
    }

    /**
     * {@inheritDoc}
     */
    public function getBindVariableNames()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getBindVariableNames())
    }

    /**
     * {@inheritDoc}
     */
    public function setLimit($limit)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setLimit($limit))
    }

    /**
     * {@inheritDoc}
     */
    public function setOffset($offset)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setOffset($offset))
    }

    /**
     * {@inheritDoc}
     */
    public function getStatement()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getStatement())
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getLanguage())
    }

    /**
     * {@inheritDoc}
     */
    public function getStoredQueryPath()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getStoredQueryPath())
    }

    /**
     * {@inheritDoc}
     */
    public function storeAsNode($absPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->storeAsNode($absPath))
    }

}
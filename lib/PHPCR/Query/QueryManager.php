<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query

class QueryManager implements \PHPCR\Query\QueryManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public function createQuery($statement, $language)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->createQuery($statement $language))
    }

    /**
     * {@inheritDoc}
     */
    public function getQOMFactory()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getQOMFactory())
    }

    /**
     * {@inheritDoc}
     */
    public function getQuery($node)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getQuery($node))
    }

    /**
     * {@inheritDoc}
     */
    public function getSupportedQueryLanguages()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getSupportedQueryLanguages())
    }

}
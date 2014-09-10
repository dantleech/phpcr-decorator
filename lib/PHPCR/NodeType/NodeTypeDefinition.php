<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\NodeType

class NodeTypeDefinition implements \PHPCR\NodeType\NodeTypeDefinitionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getName())
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaredSupertypeNames()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDeclaredSupertypeNames())
    }

    /**
     * {@inheritDoc}
     */
    public function isAbstract()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isAbstract())
    }

    /**
     * {@inheritDoc}
     */
    public function isMixin()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isMixin())
    }

    /**
     * {@inheritDoc}
     */
    public function hasOrderableChildNodes()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->hasOrderableChildNodes())
    }

    /**
     * {@inheritDoc}
     */
    public function isQueryable()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isQueryable())
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryItemName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPrimaryItemName())
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaredPropertyDefinitions()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDeclaredPropertyDefinitions())
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaredChildNodeDefinitions()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDeclaredChildNodeDefinitions())
    }

}
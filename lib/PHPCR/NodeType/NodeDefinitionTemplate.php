<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\NodeType

class NodeDefinitionTemplate implements \PHPCR\NodeType\NodeDefinitionTemplateInterface
{
    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setName($name))
    }

    /**
     * {@inheritDoc}
     */
    public function setAutoCreated($autoCreated)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setAutoCreated($autoCreated))
    }

    /**
     * {@inheritDoc}
     */
    public function setMandatory($mandatory)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setMandatory($mandatory))
    }

    /**
     * {@inheritDoc}
     */
    public function setOnParentVersion($opv)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setOnParentVersion($opv))
    }

    /**
     * {@inheritDoc}
     */
    public function setProtected($protectedStatus)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setProtected($protectedStatus))
    }

    /**
     * {@inheritDoc}
     */
    public function setRequiredPrimaryTypeNames(array $requiredPrimaryTypeNames)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setRequiredPrimaryTypeNames($requiredPrimaryTypeNames))
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultPrimaryTypeName($defaultPrimaryTypeName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setDefaultPrimaryTypeName($defaultPrimaryTypeName))
    }

    /**
     * {@inheritDoc}
     */
    public function setSameNameSiblings($allowSameNameSiblings)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setSameNameSiblings($allowSameNameSiblings))
    }

    /**
     * {@inheritDoc}
     */
    public function getRequiredPrimaryTypes()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getRequiredPrimaryTypes())
    }

    /**
     * {@inheritDoc}
     */
    public function getRequiredPrimaryTypeNames()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getRequiredPrimaryTypeNames())
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultPrimaryType()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDefaultPrimaryType())
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultPrimaryTypeName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDefaultPrimaryTypeName())
    }

    /**
     * {@inheritDoc}
     */
    public function allowsSameNameSiblings()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->allowsSameNameSiblings())
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaringNodeType()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDeclaringNodeType())
    }

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
    public function isAutoCreated()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isAutoCreated())
    }

    /**
     * {@inheritDoc}
     */
    public function isMandatory()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isMandatory())
    }

    /**
     * {@inheritDoc}
     */
    public function getOnParentVersion()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getOnParentVersion())
    }

    /**
     * {@inheritDoc}
     */
    public function isProtected()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isProtected())
    }

}
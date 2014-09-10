<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\NodeType;


class NodeTypeTemplate implements \PHPCR\NodeType\NodeTypeTemplateInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\NodeType\NodeTypeTemplateInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setName($name));
    }

    /**
     * {@inheritDoc}
     */
    public function setDeclaredSuperTypeNames(array $names)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setDeclaredSuperTypeNames($names));
    }

    /**
     * {@inheritDoc}
     */
    public function setAbstract($abstractStatus)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setAbstract($abstractStatus));
    }

    /**
     * {@inheritDoc}
     */
    public function setMixin($mixin)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setMixin($mixin));
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderableChildNodes($orderable)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setOrderableChildNodes($orderable));
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimaryItemName($name)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setPrimaryItemName($name));
    }

    /**
     * {@inheritDoc}
     */
    public function setQueryable($queryable)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->setQueryable($queryable));
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyDefinitionTemplates()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getPropertyDefinitionTemplates());
    }

    /**
     * {@inheritDoc}
     */
    public function getNodeDefinitionTemplates()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getNodeDefinitionTemplates());
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
    public function getDeclaredSupertypeNames()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getDeclaredSupertypeNames());
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
    public function isMixin()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->isMixin());
    }

    /**
     * {@inheritDoc}
     */
    public function hasOrderableChildNodes()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->hasOrderableChildNodes());
    }

    /**
     * {@inheritDoc}
     */
    public function isQueryable()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->isQueryable());
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryItemName()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getPrimaryItemName());
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaredPropertyDefinitions()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getDeclaredPropertyDefinitions());
    }

    /**
     * {@inheritDoc}
     */
    public function getDeclaredChildNodeDefinitions()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getDeclaredChildNodeDefinitions());
    }

}
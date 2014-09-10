<?php

// autogenerated: Wed, 10 Sep 2014 13:41:17 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR;

use PHPCR\ItemInterface;
use PHPCR\ItemVisitorInterface;

class Node implements \PHPCR\NodeInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\NodeInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }


    /**
     * {@inheritDoc}
     */
    public function rename($newName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->rename($newName));
    }

    /**
     * {@inheritDoc}
     */
    public function setProperty($name, $value, $type = null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setProperty($name $value $type));
    }

    /**
     * {@inheritDoc}
     */
    public function getNode($relPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getNode($relPath));
    }

    /**
     * {@inheritDoc}
     */
    public function getNodes($nameFilter = null, $typeFilter = null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getNodes($nameFilter $typeFilter));
    }

    /**
     * {@inheritDoc}
     */
    public function getNodeNames($nameFilter = null, $typeFilter = null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getNodeNames($nameFilter $typeFilter));
    }

    /**
     * {@inheritDoc}
     */
    public function getProperty($relPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getProperty($relPath));
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyValue($name, $type=null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPropertyValue($name $type));
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertyValueWithDefault($relPath, $defaultValue)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPropertyValueWithDefault($relPath $defaultValue));
    }

    /**
     * {@inheritDoc}
     */
    public function getProperties($nameFilter = null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getProperties($nameFilter));
    }

    /**
     * {@inheritDoc}
     */
    public function getPropertiesValues($nameFilter=null, $dereference=true)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPropertiesValues($nameFilter $dereference));
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryItem()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPrimaryItem());
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getIdentifier());
    }

    /**
     * {@inheritDoc}
     */
    public function getIndex()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getIndex());
    }

    /**
     * {@inheritDoc}
     */
    public function getReferences($name = null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getReferences($name));
    }

    /**
     * {@inheritDoc}
     */
    public function getWeakReferences($name = null)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getWeakReferences($name));
    }

    /**
     * {@inheritDoc}
     */
    public function hasNode($relPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->hasNode($relPath));
    }

    /**
     * {@inheritDoc}
     */
    public function hasProperty($relPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->hasProperty($relPath));
    }

    /**
     * {@inheritDoc}
     */
    public function hasNodes()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->hasNodes());
    }

    /**
     * {@inheritDoc}
     */
    public function hasProperties()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->hasProperties());
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimaryNodeType()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPrimaryNodeType());
    }

    /**
     * {@inheritDoc}
     */
    public function getMixinNodeTypes()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getMixinNodeTypes());
    }

    /**
     * {@inheritDoc}
     */
    public function isNodeType($nodeTypeName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isNodeType($nodeTypeName));
    }

    /**
     * {@inheritDoc}
     */
    public function setPrimaryType($nodeTypeName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setPrimaryType($nodeTypeName));
    }

    /**
     * {@inheritDoc}
     */
    public function addMixin($mixinName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->addMixin($mixinName));
    }

    /**
     * {@inheritDoc}
     */
    public function removeMixin($mixinName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->removeMixin($mixinName));
    }

    /**
     * {@inheritDoc}
     */
    public function setMixins(array $mixinNames)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setMixins($mixinNames));
    }

    /**
     * {@inheritDoc}
     */
    public function canAddMixin($mixinName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->canAddMixin($mixinName));
    }

    /**
     * {@inheritDoc}
     */
    public function getDefinition()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDefinition());
    }

    /**
     * {@inheritDoc}
     */
    public function update($srcWorkspace)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->update($srcWorkspace));
    }

    /**
     * {@inheritDoc}
     */
    public function getCorrespondingNodePath($workspaceName)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getCorrespondingNodePath($workspaceName));
    }

    /**
     * {@inheritDoc}
     */
    public function getSharedSet()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getSharedSet());
    }

    /**
     * {@inheritDoc}
     */
    public function removeSharedSet()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->removeSharedSet());
    }

    /**
     * {@inheritDoc}
     */
    public function removeShare()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->removeShare());
    }

    /**
     * {@inheritDoc}
     */
    public function isCheckedOut()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isCheckedOut());
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isLocked());
    }

    /**
     * {@inheritDoc}
     */
    public function followLifecycleTransition($transition)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->followLifecycleTransition($transition));
    }

    /**
     * {@inheritDoc}
     */
    public function getAllowedLifecycleTransitions()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getAllowedLifecycleTransitions());
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getPath());
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getAncestor($depth)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getAncestor($depth));
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getParent());
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getDepth());
    }

    /**
     * {@inheritDoc}
     */
    public function getSession()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getSession());
    }

    /**
     * {@inheritDoc}
     */
    public function isNode()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isNode());
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isNew());
    }

    /**
     * {@inheritDoc}
     */
    public function isModified()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isModified());
    }

    /**
     * {@inheritDoc}
     */
    public function isSame(ItemInterface $otherItem)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->isSame($otherItem));
    }

    /**
     * {@inheritDoc}
     */
    public function accept(ItemVisitorInterface $visitor)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->accept($visitor));
    }

    /**
     * {@inheritDoc}
     */
    public function revert()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->revert());
    }

    /**
     * {@inheritDoc}
     */
    public function remove()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->remove());
    }

}
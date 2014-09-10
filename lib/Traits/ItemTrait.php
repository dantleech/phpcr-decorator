<?php

namespace Sulu\Component\PhpcrDecorator\Traits;

use PHPCR\ItemInterface;
use PHPCR\ItemVisitorInterface;

/**
 * This trait fulfils the PHPCR\ItemInterface
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
trait ItemTrait
{
    use DecoratedObjectTrait;
    use DecoratorAwareTrait;

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {
        return $this->getFilter()->decorate(parent::getPath());
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getDecorator()->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getAncestor($depth)
    {
        return $this->getDecorator()->getAncestor();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        return $this->getDecorator()->wrap($this->getDecorator()->getParent(), 'PHPCR\NodeInterface');
    }

    /**
     * {@inheritDoc}
     */
    public function getDepth()
    {
        return $this->getDecorator()->getDepth();
    }

    /**
     * {@inheritDoc}
     */
    public function isNode()
    {
        return $this->getDecorator()->isNode();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {
        return $this->getDecorator()->isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function isModified()
    {
        return $this->getDecorator()->isModified();
    }

    /**
     * {@inheritDoc}
     */
    public function isSame(ItemInterface $otherItem)
    {
        return $this->getDecorator()->isSame($otherItem);
    }

    /**
     * {@inheritDoc}
     */
    public function accept(ItemVisitorInterface $visitor)
    {
        return $this->getDecorator()->accept();
    }

    /**
     * {@inheritDoc}
     */
    public function revert()
    {
        return $this->getDecorator()->revert();
    }

    /**
     * {@inheritDoc}
     */
    public function remove()
    {
        return $this->getDecorator()->remove();
    }

    /**
     * {@inheritDoc}
     */
    public function getSession()
    {
        return $this->getDecorator()->wrap($this->getDecorator()->getSession(), 'PHPCR\SessionInterface');
    }
}

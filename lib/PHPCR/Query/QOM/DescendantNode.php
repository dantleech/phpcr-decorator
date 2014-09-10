<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class DescendantNode implements \PHPCR\Query\QOM\DescendantNodeInterface
{
    /**
     * {@inheritDoc}
     */
    public function getSelectorName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getSelectorName())
    }

    /**
     * {@inheritDoc}
     */
    public function getAncestorPath()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getAncestorPath())
    }

}
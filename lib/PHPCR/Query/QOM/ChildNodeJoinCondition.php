<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class ChildNodeJoinCondition implements \PHPCR\Query\QOM\ChildNodeJoinConditionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getChildSelectorName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getChildSelectorName())
    }

    /**
     * {@inheritDoc}
     */
    public function getParentSelectorName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getParentSelectorName())
    }

}
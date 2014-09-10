<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class Join implements \PHPCR\Query\QOM\JoinInterface
{
    /**
     * {@inheritDoc}
     */
    public function getLeft()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getLeft())
    }

    /**
     * {@inheritDoc}
     */
    public function getRight()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getRight())
    }

    /**
     * {@inheritDoc}
     */
    public function getJoinType()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getJoinType())
    }

    /**
     * {@inheritDoc}
     */
    public function getJoinCondition()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getJoinCondition())
    }

}
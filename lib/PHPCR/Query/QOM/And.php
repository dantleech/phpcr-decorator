<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class And implements \PHPCR\Query\QOM\AndInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConstraint1()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getConstraint1())
    }

    /**
     * {@inheritDoc}
     */
    public function getConstraint2()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getConstraint2())
    }

}
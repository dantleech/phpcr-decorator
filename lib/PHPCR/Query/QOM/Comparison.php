<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class Comparison implements \PHPCR\Query\QOM\ComparisonInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOperand1()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getOperand1())
    }

    /**
     * {@inheritDoc}
     */
    public function getOperator()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getOperator())
    }

    /**
     * {@inheritDoc}
     */
    public function getOperand2()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getOperand2())
    }

}
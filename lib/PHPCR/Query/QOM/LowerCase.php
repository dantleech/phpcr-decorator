<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class LowerCase implements \PHPCR\Query\QOM\LowerCaseInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOperand()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getOperand())
    }

}
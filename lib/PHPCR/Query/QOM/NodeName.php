<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM

class NodeName implements \PHPCR\Query\QOM\NodeNameInterface
{
    /**
     * {@inheritDoc}
     */
   public function getSelectorName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getSelectorName())
    }

}
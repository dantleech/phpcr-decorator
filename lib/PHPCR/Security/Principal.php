<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Security

class Principal implements \PHPCR\Security\PrincipalInterface
{
    /**
     * {@inheritDoc}
     */
    public function equals($object)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->equals($object))
    }

    /**
     * {@inheritDoc}
     */
    public function hashCode()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->hashCode())
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getName())
    }

}
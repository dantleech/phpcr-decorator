<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Security

class AccessControlList implements \PHPCR\Security\AccessControlListInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAccessControlEntries()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getAccessControlEntries())
    }

    /**
     * {@inheritDoc}
     */
    public function addAccessControlEntry(PrincipalInterface $principal, array $privileges)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->addAccessControlEntry($principal $privileges))
    }

    /**
     * {@inheritDoc}
     */
    public function removeAccessControlEntry(AccessControlEntryInterface $ace)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->removeAccessControlEntry($ace))
    }

}
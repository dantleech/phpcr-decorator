<?php

// autogenerated: Wed, 10 Sep 2014 09:56:22 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Retention

class RetentionManager implements \PHPCR\Retention\RetentionManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public function getHolds($absPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getHolds($absPath))
    }

    /**
     * {@inheritDoc}
     */
    public function addHold($absPath, $name, $isDeep)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->addHold($absPath $name $isDeep))
    }

    /**
     * {@inheritDoc}
     */
    public function removeHold($absPath, HoldInterface $hold)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->removeHold($absPath $hold))
    }

    /**
     * {@inheritDoc}
     */
    public function getRetentionPolicy($absPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getRetentionPolicy($absPath))
    }

    /**
     * {@inheritDoc}
     */
    public function setRetentionPolicy($absPath, RetentionPolicyInterface $retentionPolicy)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->setRetentionPolicy($absPath $retentionPolicy))
    }

    /**
     * {@inheritDoc}
     */
    public function removeRetentionPolicy($absPath)
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->removeRetentionPolicy($absPath))
    }

}
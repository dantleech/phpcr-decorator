<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR;


class Workspace implements \PHPCR\WorkspaceInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\WorkspaceInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function getSession()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getSession());
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function copy($srcAbsPath, $destAbsPath, $srcWorkspace = NULL)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->copy($srcAbsPath, $destAbsPath, $srcWorkspace));
    }

    /**
     * {@inheritDoc}
     */
    public function cloneFrom($srcWorkspace, $srcAbsPath, $destAbsPath, $removeExisting)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->cloneFrom($srcWorkspace, $srcAbsPath, $destAbsPath, $removeExisting));
    }

    /**
     * {@inheritDoc}
     */
    public function move($srcAbsPath, $destAbsPath)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->move($srcAbsPath, $destAbsPath));
    }

    /**
     * {@inheritDoc}
     */
    public function removeItem($absPath)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->removeItem($absPath));
    }

    /**
     * {@inheritDoc}
     */
    public function getLockManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getLockManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getQueryManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getQueryManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getTransactionManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getTransactionManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getNamespaceRegistry()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getNamespaceRegistry());
    }

    /**
     * {@inheritDoc}
     */
    public function getNodeTypeManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getNodeTypeManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getObservationManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getObservationManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getRepositoryManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getRepositoryManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getVersionManager()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getVersionManager());
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessibleWorkspaceNames()
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->getAccessibleWorkspaceNames());
    }

    /**
     * {@inheritDoc}
     */
    public function importXML($parentAbsPath, $uri, $uuidBehavior)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->importXML($parentAbsPath, $uri, $uuidBehavior));
    }

    /**
     * {@inheritDoc}
     */
    public function createWorkspace($name, $srcWorkspace = NULL)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->createWorkspace($name, $srcWorkspace));
    }

    /**
     * {@inheritDoc}
     */
    public function deleteWorkspace($name)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->deleteWorkspace($name));
    }

}
<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Observation;


class EventListener implements \PHPCR\Observation\EventListenerInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Observation\EventListenerInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

    /**
     * {@inheritDoc}
     */
    public function onEvent(\Traversable$events)
    {
        return $this->decoratorFactory->decorate(__METHOD__, $this->component->onEvent($events));
    }

}
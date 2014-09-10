<?php

// autogenerated: Wed, 10 Sep 2014 13:41:17 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query;


class QueryManager implements \PHPCR\Query\QueryManagerInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Query\QueryManagerInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getQuery($node));
    }

    /**
     * {@inheritDoc}
     */
    public function getSupportedQueryLanguages()
    {
        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getSupportedQueryLanguages());
    }

}
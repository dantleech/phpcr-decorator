<?php

// autogenerated: Wed, 10 Sep 2014 13:41:17 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR\Query\QOM;


class FullTextSearchConstraint implements \PHPCR\Query\QOM\FullTextSearchInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\Query\QOM\FullTextSearchInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

        return $this->getDecorator()->decorate(__METHOD__, $this->__component()->getFullTextSearchExpression());
    }

}
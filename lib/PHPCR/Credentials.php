<?php

// autogenerated: Wed, 10 Sep 2014 18:08:53 +0200

namespace Sulu\Component\PhpcrDecorator\PHPCR;


class Credentials implements \PHPCR\CredentialsInterface
{
    protected $component;
    protected $decoratorFactory;

    public function __construct(
        \PHPCR\CredentialsInterface $component,
        \Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface $decoratorFactory
    )
    {
        $this->component = $component;
        $this->decoratorFactory = $decoratorFactory;
    }

}
<?php

namespace Sulu\Component\PhpcrDecorator;

/**
 * Interface for decorator factory
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
interface DecoratorFactoryInterface
{
    /**
     * Return a decorated value for the given subject
     *
     * @param mixed subject
     *
     * @return mixed
     */
    public function decorate($method, $subject);
}

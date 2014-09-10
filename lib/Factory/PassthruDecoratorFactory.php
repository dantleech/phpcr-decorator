<?php

namespace Sulu\Component\PhpcrDecorator\Factory;

use Sulu\Component\PhpcrDecorator\DecoratorFactoryInterface;

/**
 * Passthru factory - transparently returns the given object.
 *
 * Can be used as a base for other factories or for testing.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class PassthruDecoratorFactory implements DecoratorFactoryInterface
{
    public function decorate($method, $subject)
    {
        return $subject;
    }
}

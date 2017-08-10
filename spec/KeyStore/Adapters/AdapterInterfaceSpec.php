<?php

namespace spec\johnnymast\KeyStore\KeyStore\Adapters;

use johnnymast\KeyStore\KeyStore\Adapters\AdapterInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdapterInterfaceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AdapterInterface::class);
    }
}

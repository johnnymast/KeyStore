<?php

namespace spec\johnnymast\KeyStore\Adapters;

use johnnymast\KeyStore\Adapters\AdapterInterface;
use johnnymast\KeyStore\Adapters\SessionAdapter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;


class SessionAdapterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SessionAdapter::class);
    }
}

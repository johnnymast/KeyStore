<?php

namespace spec\johnnymast\KeyStore\Adapters;

use johnnymast\KeyStore\Adapters\NullAdapter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NullAdapterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(NullAdapter::class);
    }
}

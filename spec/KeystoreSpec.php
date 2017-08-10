<?php

namespace spec\johnnymast\KeyStore;

use johnnymast\KeyStore\Adapters\AdapterInterface;
use johnnymast\KeyStore\Adapters\NullAdapter;
use johnnymast\KeyStore\Adapters\SessionAdapter;
use johnnymast\KeyStore\Keystore;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KeystoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Keystore::class);
    }

    function it_should_return_this_after_calling_set()
    {
        $this->set('key', 'val')->shouldReturn($this);
    }

    function it_should_return_a_value_for_get_after_setting()
    {
        $key = 'mykey';
        $value = 'myvalue';

        $this->set($key, $value)->get($key)->shouldReturn($value);
    }

    function it_should_be_able_to_check_if_keystore_has_a_value()
    {
        $key = 'mykey';
        $value = 'myvalue';

        $this->set($key, $value)->has($key)->shouldReturn(true);
    }

    function it_should_be_able_to_save_the_keys()
    {
        $this->save();
    }

    function it_as_in_get_adapter_should_be_an_instanceof_adapter_interface()
    {
        $adapter = $this->getAdapter();
        $adapter->shouldHaveType(AdapterInterface::class);
    }

    function it_as_in_get_adapter_should_return_the_session_adapter_by_default()
    {
        $this->getAdapter()->shouldHaveType(SessionAdapter::class);
    }

    function it_should_return_this_after_calling_setadapter(NullAdapter $adapter)
    {
        $this->setAdapter($adapter)->shouldReturn($this);
    }

    function it_should_be_able_to_accept_custom_adapters(NullAdapter $adapter)
    {
        $this->setAdapter($adapter);
        $this->getAdapter()->shouldReturn($adapter);
    }
}

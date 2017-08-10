<?php

namespace johnnymast\KeyStore;

use johnnymast\KeyStore\Adapters\SessionAdapter;

class Keystore
{
    /**
     * @var array
     */
    private $store = [];

    /**
     * @var \johnnymast\KeyStore\AdapterInterface
     */
    private $adapter = null;

    /**
     * @param string $key
     * @param null $value
     * @return $this
     */
    public function set($key = '', $value = null)
    {
        $this->store[$key] = $value;
        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get($key = '')
    {
        return $this->store[$key];
    }

    public function getAdapter()
    {
        if (! $this->adapter) {
            $this->adapter = new SessionAdapter();
        }
        return $this->adapter;
    }

    public function setAdapter($adapter = null)
    {
        if ($adapter) {
            $this->adapter = $adapter;
        }

        return $this;
    }
}

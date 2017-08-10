<?php

namespace johnnymast\KeyStore\KeyStore;

class Keystore
{
    /**
     * @var array
     */
    private $store = [];

    /**
     * @param string $key
     * @param null $value
     * @return $this
     */
    public function set($key = '', $value = '')
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
}

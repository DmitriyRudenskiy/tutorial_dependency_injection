<?php

namespace Tutorial\Step003;

class CookieStorage implements StorageInterface
{
    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return $_COOKIE[self::SESSION_INDEX_USER];
    }

    /**
     * {@inheritdoc}
     */
    public function set($data)
    {
        $_COOKIE[self::SESSION_INDEX_USER] = $data;
    }
}

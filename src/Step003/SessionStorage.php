<?php

namespace Tutorial\Step003;

class SessionStorage implements StorageInterface
{
    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return $_SESSION[self::SESSION_INDEX_USER];
    }

    /**
     * {@inheritdoc}
     */
    public function set($data)
    {
        $_SESSION[self::SESSION_INDEX_USER] = $data;
    }
}

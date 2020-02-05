<?php
namespace Tutorial\Step002;

class Storage
{
    /**
     *
     */
    const SESSION_INDEX_USER = 'user';

    public function get()
    {
        return $_SESSION[self::SESSION_INDEX_USER];
    }

    /**
     * @param $data
     */
    public function set($data)
    {
        $_SESSION[self::SESSION_INDEX_USER] = $data;
    }
}

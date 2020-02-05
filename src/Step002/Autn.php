<?php

namespace Tutorial\Step002;

class Auth
{
    /**
     * @var $storage
     */
    private $storage;

    public function __construct()
    {
        $this->storage = new Storage();
    }

    /**
     * @return array|null
     */
    public function user()
    {
        return $this->storage->get();
    }

    /**
     * @return bool
     */
    public function quest()
    {
        return empty($this->storage->get());
    }

    /**
     * @param array $user
     */
    public function login(array $user)
    {
        $this->storage->set($user);
    }

    /**
     *
     */
    public function logout()
    {
        $this->storage->set(null);
    }
}

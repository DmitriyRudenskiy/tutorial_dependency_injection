<?php

namespace Tutorial\Step003;

/**
 * Defines a stub storage.
 *
 * This storage is always empty; the controller reads and writes nothing.
 *
 * The stub implementation is needed for synchronizing configuration during
 * installation of a module, in which case all configuration being shipped with
 * the module is known to be new. Therefore, the module installation process is
 * able to short-circuit the full diff against the active configuration; the
 * diff would yield all currently available configuration as items to remove,
 * since they do not exist in the module's default configuration directory.
 *
 * This also can be used for testing purposes.
 */
class NullStorage implements StorageInterface
{
    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function set($data)
    {
        return null;
    }
}

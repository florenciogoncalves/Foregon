<?php

class Session
{
    public function __construct()
    {
        if (!session_id()) {
            session_start();
        }
    }

    /**
     * @param string $key
     * @param [type] $value
     * @return Session
     */
    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    /**
     * @param string $key
     * @return Session
     */
    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }

    /**
     * @param string $key
     * @return boolean
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * @return Session
     */
    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }
}

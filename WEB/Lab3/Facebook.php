<?php

class Facebook implements INetworkClient
{
    public function __construct(string $login, string $password)
    {
        // connect to facebook
    }

    public function postMessage(string $message): bool
    {
        // publishing a message

        return true;
    }
}

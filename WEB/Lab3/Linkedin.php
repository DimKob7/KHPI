<?php

class Linkedin implements INetworkClient
{
    public function __construct(string $email, string $password)
    {
        // connect to linkedin
    }

    public function postMessage(string $message): bool
    {
        // publishing a message

        return true;
    }
}

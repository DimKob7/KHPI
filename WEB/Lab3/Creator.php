<?php

abstract class Creator
{
    abstract protected function createClient(): INetworkClient;

    public function postMessage(string $message): bool
    {
        $client = $this->createClient();

        echo " Client: " . get_class($client);
        echo " Post: " . $message;

        return $client->postMessage($message);
    }
}

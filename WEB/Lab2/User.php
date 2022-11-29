<?php

class User
{
    public function __construct(protected IStorage $storage)  { }

    public function doSomething() 
    {
        $this->storage->someAction();
    }
}

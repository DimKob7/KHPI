<?php

spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});

$user_First = new User(FileSystemStorage::getInstance());
$user_First->doSomething();

$user_Second = new User(FileSystemStorage::getInstance());
$user_Third = new User(AmazonStorage::getInstance());

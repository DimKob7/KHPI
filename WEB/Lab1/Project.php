<?php

class Project {
  private $owner;
  private $users;

  function __construct($user) {
    // 1- $this->owner = $user
    // 2- $this->addUser($user, false)
  }

  public function addUser(User $user, $shouldNotify = true) {
    // add user --  array_push($this->users, $user)
    // send notify -- if (shouldNotify) { $this->owner->notifyUser(); }
  }
}

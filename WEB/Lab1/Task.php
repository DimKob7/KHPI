<?php

class Task {
  private $description;
  private $isComplete = false;
  private $user;
  private $logger;

  function __construct($description, $user, ILogger $logger) {
    // cteate task
    // send notify --  $this->user->notifyUser();
  }

  public function complete() {
    // change status from task -- $this->isComplete = true;
    // log change in task -- $this->logger->log($this->user);
  }
}

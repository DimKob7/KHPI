<?php

interface ILogger {
  public function log();
}

class Logger implements ILogger {
  function __construct() {}

  public function log($user) {
    // create a timestamp & log message with timestamp and userId
  }
}

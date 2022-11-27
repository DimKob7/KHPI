<?php

interface INotifier {
  public function send($message);
}

class SendEmail implements INotifier {
  function __construct() {}
  
  private function sendEmail($message) {}

  public function send($message) {
    $this->sendEmail($message);
  }
}

class SendSms implements INotifier {
  function __construct() {}
  
  private function sendSms($message) {}

  public function send($message) {
    $this->sendSms($message);
  }
}

class SendMessenger implements INotifier {
  function __construct() {}
  
  private function sendMes($message) {}

  public function send($message) {
    $this->sendMes($message)
  }
}

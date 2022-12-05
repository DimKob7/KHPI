<?php

class SmsClient {
  private $senderPhone;
  private $senderName;

  public function __construct(string $senderPhone, string $senderName) {
    $this->senderPhone = $senderPhone;
    $this->senderName = $senderName;
  }
  
  public function sendSms(string $recipientPhone, string $text): void {
    // to MesGate
  }
}

class SmsNotificationAdapter implements Notification {
  private $smsClient;
  private $recipientPhone;

  public function __construct(ISmsNotification $smsClient) {
  	$this->smsClient = $smsClient;
  }

  public function send(string $title, string $message) {
  	$phone = $title ? $title : $this->recipientPhone;
  	$this->smsClient->sendSms($phone, $message);
  }

  public function setRecipientNumber(string $phone): void {
  	$this->recipientPhone = $phone;
  }
}

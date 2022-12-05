<?php

class SlackClient {
  private $login;
  private $apiKey;

  public function __construct(string $login, string $apiKey) {
    $this->login = $login;
    $this->apiKey = $apiKey;
  }

  public function login(): void {
    // authentication to API
  }
  
  public function sendMessage(string $chatId, string $message): void {
    // message with API
  }
}

class SlackNotificationAdapter implements Notification {
  private $slackClient;
  private $chatId;

  public function __construct(ISlackNotification $slackClient, string $chatId) {
    $this->slackClient = $slackClient;
    $this->chatId = $chatId;
  }

  public function send(string $title, string $message): void {
    $this->slackClient->login();
    $chatId = $title ? $title : $this->chatId;
    $this->slackClient->sendMessage($chatId, $message);
  }

  public function setChatId(string $chatId): void {
    $this->chatId = $chatId;
  }
}

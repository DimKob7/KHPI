<?php

require_once 'Sms.php';
require_once 'Slack.php';
require_once 'Email.php';
$adminEmail = 'adminEm@bank.com.ua';
$adminPhone = '+380999999999';
$adminName = 'Ivanov Sergey';
$emailClient = new EmailNotification($adminEmail);
$emailTitle = 'Alarm for you!';
$emailBody = 'Your system is down!';
$emailClient->send($emailTitle, $emailBody);
$smsClient = new SmsClient($adminPhone, $adminName);
$smsAdapter = new SmsNotificationAdapter($smsClient);
$smsText = "Don't worry!";
$smsAdapter->send('+380999999990', $smsText);
$slackLogin = 'SIvanov';
$slackApiKey = 'e8634e0ab40926b83e26a48a09';
$slackClient = new SlackClient($slackLogin, $slackApiKey);
$slackAdapter = new SlackNotificationAdapter($slackClient, 'monitoring');
$slackChatId = 'id89374583';
$slackAdapter->send($slackChatId, 'System is maintenance.');

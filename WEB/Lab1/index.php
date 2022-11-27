<?php

require 'Logger.php';
require 'Notifier.php';
require 'User.php';
require 'Task.php';
require 'Project.php';

$logger = new Logger();
$notifier = new EmailNotifier();
$user = new User($userData, $notifier);
$project = new Project()
$task = new Task('Hello World', $user, $logger);

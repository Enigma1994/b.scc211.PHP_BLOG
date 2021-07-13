<?php

namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

// ���ø����̼�
$application = Application::getInstance();

date_default_timezone_set('Asia/Seoul');
session_start();

// ���� ȯ���� ���� Ȥ�� ������� ����
$dbConn = $application->getDbConnectionByEnv();

$application->runByRequestUri($_SERVER['REQUEST_URI']);

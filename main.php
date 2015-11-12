<?php
require __DIR__ . '/vendor/autoload.php';
$url = $_GET['url'];
$userUrl = $_GET['userUrl'];
    if ($userUrl && strlen($userUrl) > 10) {
        $errMsg = 'Too long url!';
    }
    if ($_GET['toTime'] && !preg_match('/^[0-9]{1,3}$/', $_GET['toTime'])) {
        $errMsg = 'Not correct time!';
    }
    if ($_GET['toTime']) {
        $toTime = strftime("%Y-%m-%d %H:%M:%S", (time() + $_GET['toTime']*3600));
    } else {
        $toTime = '0000-00-00 00:00:00';
    }
$dbIni = parse_ini_file('config_db.ini');
$message = new GetResult($dbIni['connection'], $dbIni['user'], $dbIni['password']);
$message->url = $url;
$message->toTime = $toTime;
    if (!$userUrl) {
        $randomUrl = new RandomKey;
        $userUrl = $randomUrl->getSymbols();
    }
$message->userUrl = $userUrl;
include 'index.php';
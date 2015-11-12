<?php
require __DIR__ . '/vendor/autoload.php';
$userUrl = substr($_SERVER['REQUEST_URI'], 1);
$dbIni = parse_ini_file('config_db.ini');
$redirect = new GetResult($dbIni['connection'], $dbIni['user'], $dbIni['password']);
$redirect->userUrl = $userUrl;
$addr = $redirect->redir();
header ("Location: $addr");

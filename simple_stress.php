<?php

set_time_limit(0);
ignore_user_abort(true);

$servers = array('ip' => '127.0.0.1', 'port' => 22, 'user' => 'root', 'pass' => 'password');

foreach ($servers as $server) {
	$connection = ssh2_connect($server['ip', 'port']);
}

if(isset($_GET['host'], $_GET['port'], $_GET['time'], $_GET['method']))
{
	switch ($_GET['method']) {
	case 'tcp':
		$stream = ssh2_exec($connection, '#Insert Command to be executed');
		break;
	case 'udp':
		$stream = ssh2_exec($connection, '#Insert Command to be executed');
		break;
	case 'stop'
		$stream = ssh2_exec($connection, 'killall')
		break;
	default:
		break;
	}
}

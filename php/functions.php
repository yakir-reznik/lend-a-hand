<?php

# Writes a line to a log file
function write_log($log_file_path, $item, $max_lines = 50) {

	// create file if it doesnt exist
	if (!file_exists($log_file_path)) {
		file_put_contents($log_file_path, '[]');
		$file = '[]';
	}

	$file = file_get_contents($log_file_path);
	$data = json_decode($file) ?: [];
	// Add current time to the item
	$item['time'] = date('Y-m-d H:i:s') . ' GMT';
	$item['php_input'] = file_get_contents('php://input');
	$item['REQUEST'] = $_REQUEST;
	$item['SERVER'] = $_SERVER;

	// Add the new item to the beginning of the array
	array_unshift($data, $item);
	$data = array_slice($data, 0, $max_lines);
	file_put_contents($log_file_path, json_encode($data));
}

function create_pdo() {
	$host = 'localhost';
	$dbname = 'notnim-yad';
	$user = 'root';
	$pass = 'e18e18';
	$charset = 'utf8';
	$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	];

	try {
		$pdo = new PDO($dsn, $user, $pass, $options);
	} catch (\PDOException $e) {
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}

	return $pdo;
}

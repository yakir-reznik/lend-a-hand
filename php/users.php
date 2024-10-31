<?php

require_once 'functions.php';

if ($_SERVER['HTTP_HOST'] === 'localhost') {
	header('Access-Control-Allow-Origin: *');
}

# check request method is POST
define('LOG_FILE', __DIR__ . '/logs/users.log');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
	write_log(LOG_FILE, [
		'error' => 'Invalid request method'
	]);
	http_response_code(405);
	die();
}

$pdo = create_pdo();

$last_10_users = $pdo->query('SELECT * FROM users ORDER BY createdAt DESC LIMIT 10;')->fetchAll();

$total_users = $pdo->query('SELECT COUNT(*) FROM users;')->fetchColumn();


http_response_code(200);
header('Content-Type: application/json');
$data = [
	'status' => 'success',
	'total_users' => $total_users,
	'last_10_users' => $last_10_users,
];

sleep(5);

echo json_encode($data);
die();

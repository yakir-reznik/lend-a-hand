<?php

# Cache for 30 seconds
header('Cache-Control: max-age=30');

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

$last_10_users = array_map(function ($user) {
	$user['initials'] = name_to_initials($user['name']);
	unset($user['name']);
	return $user;
}, $last_10_users);

$data = [
	'status' => 'success',
	'total_users' => $total_users,
	'last_10_users' => $last_10_users,
];

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($data, JSON_INVALID_UTF8_SUBSTITUTE);
die();


function name_to_initials(string $name): string {
	$name = trim($name);
	$name = preg_replace('/\s+/', ' ', $name);

	$words = explode(' ', $name);

	# If 2 words or more return 2 initials
	if (count($words) >= 2) {
		return mb_substr($words[0], 0, 1) . '.' . mb_substr($words[1], 0, 1);
	}
	return mb_substr($words[0], 0, 1);
}
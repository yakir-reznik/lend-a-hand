<?php

# get logs dir which is in the root dir
$log_dir = __DIR__ . '/logs';
define('ROOT_DIR', __DIR__);

# Cache for 30 seconds
header('Cache-Control: max-age=30');

require_once 'functions.php';

if ($_SERVER['HTTP_HOST'] === 'localhost') {
	header('Access-Control-Allow-Origin: *');
}

# check request method is POST
define('LOG_NAME', 'getUsers');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
	http_response_code(405);
	die();
}

$pdo = create_pdo();

$last_10_users = $pdo->query('SELECT * FROM users ORDER BY createdAt DESC LIMIT 10;')->fetchAll();

$total_users = $pdo->query('SELECT COUNT(*) FROM users;')->fetchColumn();

$last_10_users = array_map(function ($user) {
	$user['initials'] = name_to_initials($user['name']);

	# Remove sensitive data
	unset($user['name']);
	unset($user['email']);
	unset($user['ip']);

	# Convert to israel timezone
	$created_at_gmt = new DateTime($user['createdAt'], new DateTimeZone('GMT'));
	$created_at_israel_timezone = $created_at_gmt->setTimezone(new DateTimeZone('Asia/Jerusalem'));
	$user['createdAt'] = $created_at_israel_timezone->format('Y-m-d H:i:s');

	return $user;
}, $last_10_users);



$data = [
	'status' => 'success',
	'days_since_oct_7th_2023' => (new DateTime())->diff(new DateTime('2023-10-07'))->days + 1,
	'total_users' => $total_users,
	'last_10_users' => $last_10_users,
];

http_response_code(200);
header('Content-Type: application/json');
echo json_encode($data, JSON_INVALID_UTF8_SUBSTITUTE);
die();


function name_to_initials(string $name): string {

	# Remove non utf-8 characters
	$name = preg_replace('/[^\p{L}\s]/u', '', $name);

	# allow only hebrew and english letters and spaces
	$name = preg_replace('/[^א-תa-zA-Z ]/', '', $name);

	# Remove white spaces
	$name = trim($name);
	$name = preg_replace('/\s+/', ' ', $name);

	if (empty($name)) {
		return '(אנונימי)';
	}

	$words = explode(' ', $name);

	# If 2 words or more return 2 initials
	if (count($words) >= 2) {
		return mb_substr($words[0], 0, 1) . '.' . mb_substr($words[1], 0, 1);
	}
	return mb_substr($words[0], 0, 1);
}

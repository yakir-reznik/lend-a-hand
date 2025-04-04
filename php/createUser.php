<?php

require_once 'functions.php';

if ($_SERVER['HTTP_HOST'] === 'localhost') {
	header('Access-Control-Allow-Origin: *');
	if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
		header('Access-Control-Allow-Methods: POST');
		header('Access-Control-Allow-Headers: Content-Type');
		http_response_code(200);
		die();
	}
}

# check request method is POST
define('LOG_NAME', 'createUser');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	write_log(LOG_NAME, [
		'error' => 'Invalid request method'
	]);
	http_response_code(405);
	die();
}

# read JSON from POST
$input = file_get_contents('php://input');
$json = json_decode($input, true);

$email = filter_var($json['email'], FILTER_VALIDATE_EMAIL);
$name = sanitize_string($json['name'] ?: '');

$under12 = filter_var($json['under12'], FILTER_VALIDATE_BOOLEAN);
$messageId = sanitize_string($json['messageId']);

if (!$email || !$messageId) {
	write_log(LOG_NAME, [
		'error' => 'Invalid input',
		'input' => $json
	]);
	http_response_code(400);
	die();
}

$pdo = create_pdo();

$insert = $pdo->prepare('INSERT INTO users (email, name, under12, messageId, ip) VALUES (:email, :name, :under12, :messageId, :ip);');
try {
	$insert->execute([
		'email' => $email,
		'name' => $name,
		'under12' => $under12 ? 1 : 0,
		'messageId' => $messageId,
		'ip' => $_SERVER['REMOTE_ADDR']
	]);

	http_response_code(201);
	header('Content-Type: application/json');
	json_encode([
		'status' => 'success',
		'duplicate' => false,
		'message' => 'User created'
	]);
} catch (PDOException $e) {
	write_log(LOG_NAME, [
		'error' => 'Database error',
		'message' => $e->getMessage()
	]);


	# check if duplicate entry -> return 200
	if ($e->errorInfo[1] === 1062) {
		http_response_code(200);
		echo json_encode([
			'success' => 'true',
			'duplicate' => true,
			'message' => 'User already exists'
		]);
	}

	die();
}

function sanitize_string($val) {
	$val = trim($val);
	$val = htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
	return $val;
}

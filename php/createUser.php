<?php
require_once 'functions.php';

# check request method is POST
define('LOG_FILE', __DIR__ . '/logs/create.log');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	write_log(LOG_FILE, [
		'error' => 'Invalid request method'
	]);
	http_response_code(405);
	die();
}

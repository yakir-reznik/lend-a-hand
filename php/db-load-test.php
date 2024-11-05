<?php

// require 'functions.php';

// $pdo = create_pdo();

// # run register function 1000000 times
// for ($i = 0; $i < 50; $i++) {
// 	for ($j = 0; $j < 10000; $j++) {
// 		register();
// 	}
// 	sleep(2);
// 	echo 'done ' . $i . ' <br>';
// }

// echo 'done ALL';
// die();

// function randomEmail() {
// 	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
// 	$str = "";
// 	for ($i = 0; $i < 20; $i++) {
// 		$str .= $chars[rand(0, strlen($chars) - 1)];
// 	}
// 	return $str . '@fake-email.com';
// }

// function register() {
// 	global $pdo;
// 	$insert = $pdo->prepare('INSERT INTO users (email, name, under12, messageId) VALUES (:email, :name, :under12, :messageId);');
// 	try {
// 		$insert->execute([
// 			'email' => randomEmail(),
// 			'name' => 'fake name',
// 			'under12' => true,
// 			'messageId' => 'gave_hand',
// 		]);

// 		http_response_code(201);
// 		header('Content-Type: application/json');
// 		json_encode([
// 			'status' => 'success',
// 			'duplicate' => false,
// 			'message' => 'User created'
// 		]);
// 	} catch (PDOException $e) {
// 	}

// 	return;
// }

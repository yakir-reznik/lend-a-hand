<?php

/**
 * This script is used to deploy the app to the server.
 * Here's a list of the steps it takes:
 * ------------------------------------------------------------
 * 1. Build the frontend app using "npm run generate"
 * 2. Zip the output directory
 * 3. Clear the deploy directory on the server
 * 4. Upload the zip file to the server
 * 5. Unzip the zip file on the server
 * 6. Delete the zip file from the server
 * ------------------------------------------------------------
 * After the deployment finishes you need to manually clear the cache on siteground servers.
 * Go to the Siteground dashboard -> Site Tools -> Speed -> Caching -> Dynamic Cache (tab) -> Click the brush icon
 */

require_once 'enviroment_variables.php';

date_default_timezone_set('Asia/Jerusalem');

# Get json data from request
$raw = file_get_contents('php://input');
$json = json_decode($raw, true);

$message_log = [];

# Define general variables 
$NOW = date("Y-m-d H:i:s");

# Run the build pipline

build_app();

zip_build_directory();

clear_server_deploy_dir();

upload_zip_file_to_ftp_sever();

unzip_build_file_on_server();

delete_remote_build_zip_file();

# Echo out success message

echo "\n********************************************************";
echo "\n****** Successfully deployed the app to the server *****";
echo "\n********************************************************";
echo "\n\n";
die();

# Respond to request with success
// header('Content-Type: application/json');
// echo json_encode(['success' => true, 'message_log' => $message_log]);
// die();

function add_log_message($message) {
	global $message_log;
	echo "$message" . "\n";
	$message_log[] = $message;
}

function build_app() {
	add_log_message('building the app (using "npm run generate")');
	try {
		exec(PATH_VARS . " && npm run --prefix '" . SRC_DIR . "' generate", $output, $exit_code);
		if ($exit_code !== 0) throw new Exception('failed to build the app using "npm run generate"');
		add_log_message('built the app (using "npm run generate")');
	} catch (Exception $e) {
		echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		die();
	}
}

function zip_build_directory() {
	try {
		if (!extension_loaded('zip')) throw new Exception('zip extension for PHP is not installed or not loaded');

		$zip = new ZipArchive();

		$create_zip_file = $zip->open(BUILD_DIR . 'build.zip', ZipArchive::CREATE);
		if (!$create_zip_file) throw new Exception('failed to create zip file');

		$files = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator(BUILD_DIR),
			RecursiveIteratorIterator::LEAVES_ONLY
		);

		foreach ($files as $name => $file) {
			if (!$file->isDir()) {
				$filePath = $file->getRealPath();
				$relativePath = substr($filePath, strlen(BUILD_DIR));
				$zip->addFile($filePath, $relativePath);
			}
		}

		$zip->close();

		add_log_message('created build.zip file');
	} catch (Exception $e) {
		echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		die();
	}
}

function clear_server_deploy_dir() {
	try {
		$output = '';
		$exit_code = -1;

		exec("ssh u2540-ytu1mj2cpgrh@ssh.notnim-yad.net -p 18765 rm -rf " . SSH_FOLDER . "/*", $output, $exit_code);
		if ($exit_code !== 0) throw new Exception('failed to clear files in deploy folder');

		add_log_message('cleared files in deploy folder');
	} catch (Exception $e) {
		echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		die();
	}
}

function upload_zip_file_to_ftp_sever() {

	try {
		$ftp = ftp_connect(FTP_HOST, FTP_PORT);
		if (!$ftp) throw new Exception('failed to connect to ftp server');

		$login = ftp_login($ftp, FTP_USERNAME, FTP_PASSWORD);
		if (!$login) throw new Exception('failed to login to ftp server');

		$filename = 'build.zip';
		$remote_path = FTP_FOLDER . $filename;
		$local_path = BUILD_DIR . $filename;
		$upload = ftp_put($ftp, $remote_path, $local_path, FTP_BINARY);
		if (!$upload) throw new Exception('failed to upload build.zip file to ftp server');

		ftp_close($ftp);

		add_log_message('uploaded build.zip file to ftp server');
	} catch (Exception $e) {
		echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		die();
	}
}

function unzip_build_file_on_server() {

	try {
		$output = '';
		$exit_code = -1;
		$zip_file_path = SSH_FOLDER . "build.zip";

		exec("ssh u2540-ytu1mj2cpgrh@ssh.notnim-yad.net -p 18765 unzip -o $zip_file_path -d " . SSH_FOLDER, $output, $exit_code);
		if ($exit_code !== 0) throw new Exception('failed to unzip build.zip file on server');

		add_log_message('unzipped build.zip file on server');
	} catch (Exception $e) {
		echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		die();
	}
}

function delete_remote_build_zip_file() {
	try {
		$ftp = ftp_connect(FTP_HOST, FTP_PORT);
		if (!$ftp) throw new Exception('failed to connect to ftp server');

		$login = ftp_login($ftp, FTP_USERNAME, FTP_PASSWORD);
		if (!$login) throw new Exception('failed to login to ftp server');

		$zip_file_path = FTP_FOLDER . 'build.zip';
		$delete = ftp_delete($ftp, $zip_file_path);
		if (!$delete) throw new Exception('failed to delete build.zip file from ftp server');

		ftp_close($ftp);
		add_log_message('deleted build.zip file from ftp server');
	} catch (Exception $e) {
		echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		die();
	}
}

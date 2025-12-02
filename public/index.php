<?php

require_once __DIR__ . '/../app/init.php';

try {
	$app = new App();
	$app->run();
} catch (Throwable $e) {
	error_log($e->getMessage() . "\n" . $e->getTraceAsString());
	if (!headers_sent()) {
		http_response_code(500);
	}
	if (ini_get('display_errors')) {
		echo '<h1>Application error</h1>';
		echo '<pre>' . htmlspecialchars($e->getMessage()) . "\n" . htmlspecialchars($e->getTraceAsString()) . '</pre>';
	} else {
		echo '<h1>Something went wrong</h1>';
		echo '<p>We have logged the error. Please try again later or contact the administrator.</p>';
	}
}

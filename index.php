<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	include('index.html');
	//header('Location: '.$uri.'index.html');
	//exit;
?>
Something is wrong with the HTTP server installation :-(

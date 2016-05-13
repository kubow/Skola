<?php

function sezeni_start() {
	$sezeni_nazev = 'sezeni_id';
	$secure = SECURE;
	// stop js being able to access session id
	$httponly = true;
	// force only to use cookies
	if (ini_set('session.use_only_cookies',1) === FALSE) {
		header("Vyskytla se nejka chyba...");
		exit();
		}
	// get current cokie parameters
	$cookiePar = session_get_cookie_params();
	session_set_cookie_params($cookiePar["lifetime"], $cookiePar["path"], $cookiePar["domain"], $secure, $httponly);
	// set session name to one above
	session_name($sezeni_nazev);
	session_start();
	session_regenerate_id(true);
	}

function brutal_vstup($user_id, $mysql) {
	$vcil = time();    // get timestamp
	$pokusy = $vcil - (2 );
	}

function session_valid_id($session_id) {
    return preg_match('/^[-,a-zA-Z0-9]{1,128}$/', $session_id) > 0;
	}
?>

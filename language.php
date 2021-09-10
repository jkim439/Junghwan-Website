<?
session_start ();

if (!isset($_SESSION['lang'])) {
	echo "initialize1";
	$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
} else {
	switch ($_SESSION['lang']) {
		case 'ko':
			$_SESSION['lang'] = "en";
			break;
		default:
			$_SESSION['lang'] = "ko";
	}
}
header( 'Location: https://www.jacekim.com/' ) ;
?>
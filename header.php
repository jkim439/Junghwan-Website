<?
session_start ();
/*
if (!isset($_SESSION['code'])) {
	echo "Only authorized user can access."; exit;
}
*/
if (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
if (isset($_SESSION['lang'])) {
	switch ($_SESSION['lang']) {
		case 'ko':
		$lang_file = 'ko.php';
		break;

		default:
		$lang_file = 'en.php';
}

include_once 'languages/'.$lang_file;
}
?>
<?php
/*
 *
 * - eska Front End File
 *
 * - File : contact.php
 * - Version : 1.0
 * - Author : odak
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman kontak.
 * This is a php file for handling front end process for contact page.
 *
*/

/**
 * Router untuk memproses request $_POST[] komentar.
 *
 * Router for process request $_POST[] comment.
 *
*/
$router->match('GET|POST', '/dashboard', function() use ($core, $templates) {
	$lang = $core->setlang('dashboard', WEB_LANG);
	$info = array(
		'page_title' => 'Dashboard',
		'page_desc' => $core->posetting[2]['value'],
		'page_key' => $core->posetting[3]['value'],
		'social_mod' => $lang['front_contact'],
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('dashboard', compact('lang'));
});

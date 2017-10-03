<?php
session_start();
if (!$_POST['email']) {
    $_SESSION['message'] = 'Nu ati adaugat adresa de e-mail.';
    header('Location: /');
}

if( $_REQUEST["email"] ) {
	$fisier = fopen('email-newsletter.txt', "a+");
	fwrite($fisier, $_POST['email'] . "\n");

	$_SESSION['message'] = 'Va multumim! Vom reveni in curand cu noutati!';
	header('Location: /');
}
<?php
session_start();

if( $_REQUEST["name"] ) {
    $fisier = fopen('email-contact-form.txt', "a+");

    $email = "Nume: {$_POST['name']}" . "\n";
    $email .= "Email: {$_POST['email']}" . "\n";
    $email .= "Subject: {$_POST['subject']}" . "\n";
    $email .= "Message: {$_POST['message']}" . "\n";
    $email .= "Created at: " . date('Y-m-d H:i:s');
    $email .= "\n -------------------------- \n";


    fwrite($fisier, $email);

    // Siteul site-ul situl
    $_SESSION['message'] = 'Email-ul a fost trimis!';
    header('Location: /');
}

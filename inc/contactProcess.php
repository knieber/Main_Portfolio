<?php

if($_POST) {

//Commented out code is to show I can send without using Mailer. However, I've
//chosen to use mailer as to avoid spamming my inbox.

//    $to_email = "kyle.nieber@gmail.com";


    $name = trim($_POST['user_name']);
    $email = trim($_POST['user_email']);
    $subject = $_POST['subject'];
    $mesg = trim($_POST['msg']);

//    $send_mail = mail($to_email, $subject, $mesg);
//
//    if(!$send_mail) {
//        exit('error');
//    } else {
//        exit('success');
//    }


    require_once("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    $email_body = "";

    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $mesg;


    $mail->SetFrom($email, $name);

    $address = "kyle.nieber@gmail.com";
    $mail->AddAddress($address, "Shirts 4 Mike");

    $mail->Subject = $subject;

    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
        exit('error');
    } else {
        exit('success');
    }
}

?>
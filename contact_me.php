<?php

if($_POST) {
    $to_email       = "kyle.nieber@gmail.com";


    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $subject = $_POST['subject'];
    $mesg = $_POST['msg'];

    $send_mail = mail($to_email, $subject, $mesg);

    if(!$send_mail) {
        exit('error');
    } else {
        exit('success');
    }

}

?>
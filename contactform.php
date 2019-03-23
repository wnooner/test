<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = 'subject'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "wesleynooner@mail.com";
    $headers = "From: ".$email;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
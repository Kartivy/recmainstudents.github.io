<?php

if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $mailfrom= $_POST['mail'];
    $message = $_POST['message'];

    $mailTo ="kartikyadav@recmainstudents.tk";
    $headers = "From: ".$mailfrom;
    $txt = "you have recived a mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: email.php?mailsend");

}
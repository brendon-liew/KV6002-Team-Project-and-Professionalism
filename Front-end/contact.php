<?php

if (isset($POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $name = $_POST['message'];

    $mailTo = "a.nikolas.net@gmail.com";
    $headers ="From: ". $mailFrom;
    $txt ="You recieved an e=mail from client" .$name.".\n\n".$message;
   
    mail($mailTo,$subject,$txt,$headers);
    header("Location: contactPage.php?mailsend");
}
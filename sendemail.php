<?php

    $recipient="petar.pejic@outlook.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    
    if (mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>"))
    {
        echo "<p>Thank you! Your message has been sent.</p>";
    }
    else
    {
        echo "Error: Message not accepted";
    }

    
   

?>
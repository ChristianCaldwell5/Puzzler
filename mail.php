<?php
    $to = "cgcnbf@mail.missouri.edu";
    $subject = strip_tags(htmlspecialchars($_GET['subject']));
    $txt = strip_tags(htmlspecialchars($_GET['message']));;
    $headers = "From: puzzler.contact@mail.com" . "\r\n";

    mail($to,$subject,$txt,$headers);
    
    if(mail){
        header("Location: puzzlerMember.php");
    }
?>
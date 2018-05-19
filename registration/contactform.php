<?php

if(isset($_POST['sub'])){
    $topic = $_POST['topic'];
    $mailFrom = $_POST['mail'];
    $course = $_POST['cname'];
    $ques = $_POST['ques'];
    $image = $_POST['image'];
    
    $mailto = "shaquillemartin16@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from".$name.".\n\n".$ques;
    
    mail($mailto, $topic, $txt, $header);
    header("Location: indexx.php?mailsend");
}
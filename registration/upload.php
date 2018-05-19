<?php

 include_once 'dbh.inc.php';
 $cn = $_POST['cn'];
 $question = $_POST['ques'];
 $image = $_FILES['image']['name'];
 
$sql = "INSERT INTO questable (coursenumber, question, uploadques) VALUES ('$cn', '$question','$image');";



 $qry = mysqli_query($conn,$sql);
 
 if(!$qry)
    echo "Please try to resend the message";
    else 
     echo "Question was succeffully sent.";
    

 header("Location: question.php");

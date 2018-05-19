<?php

 include_once 'dbh.inc.php';
  $cn = $_POST['can'];
 $answer = $_POST['ans'];
 $image = $_FILES['image']['name'];
  $draw = $_POST['draw'];

 
$sql = "INSERT INTO answer (typeanswer, imageanswer, drawinganswer, coursenumber) VALUES ('$answer', '$image','$draw', '$cn');";



 $qry = mysqli_query($conn,$sql);
 
 if(!$qry)
    echo "Please try to resend the answer";
    else 
     echo "Answer was succeffully sent.";
    

 header("Location: index.php");
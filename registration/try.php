<?php
  session_start();
   include_once 'dbh.inc.php';

  // if (isset($_POST['submited'])) {
  //   // receive all input values from the form
    $cnumber = $_POST['cnumber'];
    $cname =  $_POST['cname'];

    $sql = "INSERT INTO addclass (coursenumber, coursename)
      			  VALUES('$cnumber', '$cname')";
  mysqli_query($conn, $sql);


  // }
//
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Adding a Class</h2>
  </div>


<form method = 'POST' enctype='multipart/form-data' action='try.php'>

  	<p><strong><?php echo $_SESSION['username']; ?></strong> add a new class below.</p><br><br>
   <label>Course Number</label>

   <input type='text' name= 'cnumber' placeholder='Course Number'/>
   <br/><br/>
   <label>Course Name</label>
    <input type='text' name= 'cname' placeholder='Course Name'/>
    <br/><br/>


     <button type='submit' name='submited'>Submit</button>
   </div><br><br>
 <a href="index.php">Click here to go back</a>

 </form>

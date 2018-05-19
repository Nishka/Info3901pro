<?php
  session_start();
   include_once 'dbh.inc.php';

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>


    	<p>Hello <strong><?php echo $_SESSION['username']; ?></strong>,</p>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <body>

     <h1>Classes in session</h1>


     <ol>

<form method="POST" action="try.php">
  <label>Click this button to add a new class.</label>
<input type="submit" value="Add a new Class" name= "submit" value="submit" >
<br/><br/>
</form>
<?php
   $sql = "SELECT * FROM addclass;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);

   if($resultCheck > 0){
     while($row = mysqli_fetch_assoc($result)){
       // echo "<li>".$row['coursenumber']. "     <button>Join Class</button><br><br></li>";
        echo " <form action= 'answer.php'> <li> ".$row['coursenumber']. "    <input type='submit' value = 'Join Class' name='join'></form><br><br></li>";
     }
   }


?>



</ol>

     </body>









    <?php endif ?>


    </body>

</div>

</body>
</html>

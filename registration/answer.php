<?php
  session_start();
  include_once 'dbh.inc.php'

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
<div class="header">
	<h2>Class</h2>
</div>
<div class="content">
  	<!-- notification message -->



    <!-- logged in user information -->



    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>

    
        
          <h1>Please Answer</h1>
        <div id= "qq">
          <?php
          $sql = "Select * from questable where id = 2;";
          $result= mysqli_query($conn,$sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
              echo $row['question']."<br><br>";
              
            }
          }
          
          ?>
        </div>

          <form id="form" method = "POST" enctype="multipart/form-data" action="uploadans.php">
            <div>
              <label>Course Number</label>
            </div>
            <input type="text" name="can"  placeholder="Name of the course">
            <br/>

            <div>
              <label>Answer</label>
              
            </div>
            <textarea type="text" name="ans" cols="40" rows="4" placeholder="Please type your answer here."></textarea>
            <br/>
            <div>
              <label>Upload A Document</label><br/>
              <input type="file" name="image">
            </div>

						<div>


						<button name="draw"><a href="draw.html">Click here to draw</a></button>
            </div>

      <br/>

            <div>
              <button type="submit" name="submit">Submit</button>
            </div>


          </form>
<a href="question.php">Click here to compose a question</a>




    </body>


</html>

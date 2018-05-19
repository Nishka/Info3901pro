<?php
  session_start()

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>




    	<p>Welcome Lecturer</strong></p><br>
      <p>On this page you will compose questions for the sudents to answer on the forum.</p><br>
      <p>This page should only be use by Lecturers and tutors.</p><br>


      <html>
        <head>
          <title>Post Question</title>
        </head>


          <form id="form" method = "POST" enctype="multipart/form-data" action="upload.php" target="iframe">
            <div>
              <label>Course Number</label>
            </div>
            <input type="text" name="cn"  placeholder="Name of the course">
            <br/>

            <div>
              <label>Question</label>
            </div>
            <textarea type="text" name="ques" cols="40" rows="4" placeholder="Please type your question here."></textarea>
            <br/>
            <div>
              <label>Upload A Document</label><br/>
              <input type="file" name="image">
            </div>

      <br/>

            <div>
              <button type="submit" name="submit">Submit</button>
            </div>


          </form>





    </body>

</div>

</body>
</html>

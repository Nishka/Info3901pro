<?php
  session_start();
   include_once 'dbh.inc.php';

 ?>
<html>
  <head>
    <title>Post Question</title>
  </head>

  <body>
    <form method = "POST" enctype="multipart/form-data" action="upload.php">
      <label>Topic</label>
      <input type="text" name= "topic" placeholder="Please enter the topic"/>
      <br/><br/>
      <div>
        <label>Question</label>
      </div>
      <textarea type="text" name="ques" cols="40" rows="4" placeholder="Please type a question"></textarea>
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

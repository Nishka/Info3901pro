 <?php
include_once 'dbh.inc.php';
$uid = $_POST['uid'];
$cn = $_POST['cn'];
$ans = $_POST['ans'];


$sql = "INSERT INTO classinfo (coursenum, answer, username) VALUES ('$cn', '$ans', '$uid')";
mysqli_query($conn, $sql);

// $sql = "SELECT * FROM user WHERE username='$uid' AND first='$first'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result)  > 0){
//   while($row = mysqli_fetch_assoc($result)){
//     $userid =$row['id'];
//     $sql = "INSERT INTO profileimg(userid, status) VALUES ('$userid', 1)";
//     mysqli_query($conn, $sql);
//     header("Location: index.php");
//   }
//
// }else {
//   echo "you have an error";
// }

 ?>

 <!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<?php
  // $sql= "SELECT coursenum FROM classinfo, users WHERE classinfo.user = users.username;";
  $sql= "SELECT * FROM classinfo, users  Where classinfo.username = users.username;";
  $result= mysqli_query($conn,$sql);

  if($result > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo $row['coursenum'];
    }
  }
  ?>
</body>
</html>

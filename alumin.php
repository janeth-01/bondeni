<?php
$alumnus=$_POST['alumnus'];
$year=$_POST['year'];
$graduation=$_POST['graduation'];
$master=$_POST['master'];
$teacher=$_POST['teacher'];
$result=$_POST['result'];
$current=$_POST['current'];
$address=$_POST['address'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];

$host = "localhost";
$root="root";
$pass="";
$alumnus="bondeni";
 
$conn = new mysqli($host,$root, $pass,$alumnus);
if(mysqli_connect_error()){
      die('connect error('.mysqli_connect_error().')'. mysqli_connect_error());
}else{
     $insert="INSERT INTO alumnus (alumnus,enrollment,graduation,master,teacher,result,current,address,mail,mobile)
     VALUES('$alumnus','$year','$graduation','$master','$teacher','$result','$current','$address','$mail','$mobile')";
     mysqli_query($conn,$insert);
      echo "data registered successfully";
} 

?>

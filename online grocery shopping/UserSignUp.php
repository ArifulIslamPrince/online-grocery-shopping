<?php
 //include_once('UserSignUpdb.php');
 $connect=mysqli_connect("localhost","root","","grocery shop");
 $SignUpName=$_POST['SignUpName'];
 $SignUpPass=$_POST['SignUpPass'];
 $SignUpEmail=$_POST['SignUpEmail'];
 $SignUpPhone=$_POST['SignUpPhone'];
 $SignUpArea=$_POST['area'];
 //$i=mysql_insert_id();
 if($_POST['SignUpName']!="" && $_POST['SignUpPass']!="" && $_POST['SignUpEmail']!="" && $_POST['SignUpPhone']!=""){
	if(mysqli_query($connect,"INSERT INTO signup VALUES('','$SignUpName','$SignUpEmail','$SignUpPhone','$SignUpPass','$SignUpArea')"))
	{
	header('Location:UserLogin.html');
	}
 }
else{
	echo '<script language="javascript">';
	echo 'alert("Error!!!")';
	echo '</script>';
	}
?>

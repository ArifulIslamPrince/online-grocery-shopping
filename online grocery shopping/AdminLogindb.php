<?php
	function getJSONFromDB($sql){
	$connect=mysqli_connect("localhost","root","","grocery shop");
	//$sql="SELECT 'Username' FROM signup";
	$result=mysqli_query($connect,$sql);
	$json_array=array();
	while($row=mysqli_fetch_assoc($result)){
		$json_array[]=$row;
	}
	return json_encode($json_array);
	}
	$jsonData= getJSONFromDB("SELECT PIN FROM adminlogin");
	//echo $jsonData;
	//echo getJSONFromDB("SELECT Password FROM signup");
	$jsn=json_decode($jsonData);
	for($i=0;$i<sizeof($jsn);$i++){
		if($jsn[$i]->PIN==$_REQUEST['PIN']){
				echo '<script language="javascript">';
				echo 'alert("Login Successfull!")';
				echo '</script>';
				header('location:AdminPanel.html');
		}
		else{
		echo '<script language="javascript">';
		echo 'alert("Error!!!")';
		echo '</script>';
	}
	}
?>
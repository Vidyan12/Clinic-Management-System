
<?php

session_start();

if(isset($_SESSION["user"])){
	if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
		header("location: login.php");
	}

}else{
	header("location: login.php");
}


if($_GET){
	//import database
	include("connection.php");
	$id=$_GET["id"];
	$result001= $database->query("select * from review where Rid=$id;");
	$Rid=($result001->fetch_assoc())["Rid"];
	$sql= $database->query("delete from review where Rid='$Rid';");
	//print_r($email);
	header("location: review.php");
}


?>
<?php 
require_once '../include.php';
$username=$_POST['username'];
// $username=$_GET['username'];
$username=addslashes($username);
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];

$autoFlag=$_POST['autoFlag'];
if($verify==$verify1){
	$sql="select * from life_admin where username='{$username}' and password='{$password}'";
	$row=checkAdmin($sql);
	// print_r($row);
	if($row){
		//如果选了一周内自动登陆
		if($autoFlag){
			setcookie("adminId",$row['id'],time()+7*24*3600);
			setcookie("adminName",$row['username'],time()+7*24*3600);
		}
		$_SESSION['adminName']=$row['username'];
		$_SESSION['adminId']=$row['id'];
		alertMes("登陆成功","index.php");
		// echo "<script>alert('登陆成功');</script>";
  //   	echo "<script>window.location = 'index.php';</script>";
	}
	else{
		alertMes("登陆失败，重新登陆","Login.php");
		// echo "<script>alert('登陆失败，重新登陆');</script>";
		// echo "<script>window.location = 'Login.php';</script>";
	}
}
else{
	alertMes("验证码错误","Login.php");
	// echo "<script>alert('验证码错误');</script>";
 //    echo "<script>window.location = 'Login.php';</script>";
 //     print_r($verify);
	// print_r($verify1);
}
 ?>
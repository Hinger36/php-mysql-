<?php 
function reg(){
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	$arr['regTime']=time();
	$uploadFile=uploadFile();
	
	//print_r($uploadFile);
	if($uploadFile&&is_array($uploadFile)){
		$arr['face']=$uploadFile[0]['name'];
	}else{
		return "注册失败";
	}
//	print_r($arr);exit;
	if(insert("life_user", $arr)){
		alertMes("注册成功","login.php");
	}else{
		$filename="uploads/".$uploadFile[0]['name'];
		if(file_exists($filename)){
			unlink($filename);
		}
		$mes="注册失败!<br/><a href='register.php'>重新注册</a>|<a href='index.php'>查看首页</a>";
	}
	return $mes;
}
function login(){
	$username=$_POST['username'];
	//addslashes():使用反斜线引用特殊字符
	//$username=addslashes($username);
	//$username=mysql_real_escape_string($username);
	$password=md5($_POST['password']);
	$sql="select * from life_user where username='{$username}' and password='{$password}'";
	// print_r($username);
	 //print_r($sql);
	//$resNum=getResultNum($sql);
	$row=fetchOne($sql);
	//echo $resNum;
	if($row){
		$_SESSION['loginFlag']=$row['id'];
		$_SESSION['username']=$row['username'];
		alertMes("登陆成功","index.php");
	}else{
		alertMes("登陆失败，重新登陆","login.php");
	}
	
}

function userOut(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}

	session_destroy();
	header("location:index.php");
}

function addgouwuche () {
	//判断用户是否已经登录
	if($_SESSION[username]==""){ 
	//如果用户还没登录，则提示用户先登录并返回到原来页面   
		echo "<script>alert('请先登录后购物!');history.back();</script>";         
		exit;        //用exit语句停止循环的继续执行}
	}
	$id=strval($_GET[id]);
	//将session变量$producelist中的内容用字符“@”进行分割，并将结果保存在数组$array中
	$array=explode("@",$_SESSION[producelist]);
	//如果$array数组中存在与$id相等的元素，说明该$id所对应的商品已经在购物车中
	for($i=0;$i<count($array)-1;$i++) { 
		if($array[$i]==$id) {
			echo"<script>alert('该商品已经在您的购物车中!');history.back();</script>";
			exit;
		}
	}
	$_SESSION[producelist]=$_SESSION[producelist].$id."@";
	//如果该商品不在购物车中，则将该商品的id值连接到session变量$producelist之后，并用“@”进行分割
	$_SESSION[quatity]=$_SESSION[quatity]."1@";
	//同时将该商品的数量用“@”进行分割保存在session变量$quatity中，并将默认数量设置为1
	header("location:shopcar.php");
	//添加成功之后将该页定位到gouwu1.php页面显示购物车中的内容
}

function addcart () {

	
}
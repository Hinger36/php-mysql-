<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/ie-h5.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="style/reset.css"> 
	<link type="text/css" rel="stylesheet" href="style/main.css">
<!-- 	<script type="text/javascript" src="js/dex.js"></script>
 -->	

</head>
<body>
	<header>
		<div class="logoBar-login">
				<div class="logo lf">
					<a href="#">来福网<!-- <img src="#" alt="来福网"> --></a>
				</div>			
				<h3 class="welcome_title">欢迎注册</h3>
		</div>
		
	</header>
	<section>
		<div class="regBox">
			<div class="login_cont">
				<form method="post" enctype="multipart/form-data" action="doAction.php?act=reg">
					<ul class="login">
						<li><span class="reg_item"><i>*</i>账户名：</span><div class="input_item"><input type="text" class="login_input user_icon" name="username"></div></li>
						<li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password" class="login_input user_icon" name="password"></div></li>
						<li><span class="reg_item"><i>*</i>确认密码：</span><div class="input_item"><input type="password" class="login_input user_icon" name="password"></div></li>
						<li><span class="reg_item"><i>*</i>邮箱：</span><div class="input_item"><input type="text" class="login_input user_icon" name="email"></div></li>
						<li><span class="reg_item"><i>*</i>性别：</span><div class="input_item">
						<input type="radio"  name="sex" value="男"> 男
						<input type="radio"  checked="checked" name="sex" value="女" > 女
						<input type="radio"  name="sex" value="保密" > 保密
						</div></li>
						<li><span class="reg_item"><i>*</i>头像：</span><div class="input_item"><input type="file"  name="myFace" ></div></li>
						<li class="autoLogin"><span class="reg_item">&nbsp;</span><input type="checkbox" id="t1" class="checked"><label for="t1">我已阅读并同意<a href="#">《用户注册协议》</a></label></li>
						<li><span class="reg_item">&nbsp;</span><input type="submit" value="登录" class="login_btn"></li>
					</ul>
				</form>		
			</div>
		</div>
	</section>
	
	<footer>
		<div class="foot">
			<p><a href="">来福简介</a><i>|</i><a href="">来福公告</a><i>|</i><a href="">招纳贤士</a><i>|</i><a href="">联系我们</a><i>|</i><a href="">客服热线：400-675-1234</a></p>
			<p>Copyright © 2006 - 2014 来福版权所有&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
			<ul class="webimg">
				<li><a href="#"><img src="images/1_34.png"></a></li>
				<li><a href="#"><img src="images/1_34.png"></a></li>
				<li><a href="#"><img src="images/1_34.png"></a></li>
				<li><a href="#"><img src="images/1_34.png"></a></li>
			</ul>
		</div>
	</footer>
</body>
</html>
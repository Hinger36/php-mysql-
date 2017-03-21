<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>登录</title>
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
				<h3 class="welcome_title">欢迎登陆</h3>
		</div>
		
	</header>
	<section>
		<div class="loginBox clearfloat">
			<div class="login_cont">
			<form method="post" action="doAction.php?act=login">
				<ul class="login">
					<li class="l_tit" >邮箱/用户名/手机号</li>
					<li class="mb_10"><input type="text" class="login_input user_icon" name="username" ></li>
					<li class="l_tit">密码</li>
					<li class="mb_10"><input type="password" class="login_input " name="password"></li>
					<li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><label for="a1">自动登陆(一周内自动登陆)</label></li>
					<li><input type="submit" value="登录" class="login_btn"></li>
				</ul>		
			</form>
			</div>
			<a class="reg_link" href="register.php">免费注册&gt;&gt;</a>
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
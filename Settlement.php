<?php 
require_once 'include.php';
$id=$_REQUEST['id'];
$proInfo=getProById($id);
$proImgs=getAllImgByProId($id);



// print_r(orderSner());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>结算</title>
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
		<div class="topBar">
			<div class="comWidth">
				<div class="leftArea">
					<a href="#" class="collection">收藏来福</a>
				</div>
				<div class="rightArea">
					欢迎来到来福网！
					<?php if($_SESSION['loginFlag']):?>
					<span>欢迎您</span><?php echo $_SESSION['username'];?>
					<a href="doAction.php?act=userOut">[退出]</a>
					<?php else:?>
					<a href="Login.php" class="logoIn">[登录]</a><a href="register.php" class="signIn">[免费注册]</a>
					<?php endif;?>
				</div>
			</div>
		</div>	
		<div class="logoBar">
			<div class="comWidth clearfloat">
				<div class="logo lf">
					<a href="#">来福网<!-- <img src="#" alt="来福网"> --></a>
				</div>
				
				
			</div>
		</div>
		
	</header>
	<section>
		<div class="shoppingCart comWidth">
		<form action="pay.php?act=pay"" method="post" enctype="multipart/form-data">
			<div class="shopping_item">
				<h3 class="shopping_tit">收货地址</h3>
				
					<div class="shopping_cont padding_shop">
						<ul class="shopping_list">
							<li><span class="shopping_list_text"><em>*</em>选择地区：</span>
								<select>
									<option value="0">北京</option>
									<option value="1">上海</option>
									<option value="2">福州</option>
									<option value="3">厦门</option>
								</select>
								<!-- <div class="select" id="select-adr">
									<h3>海淀区五环内</h3>
									<ul class="show_select hide" id="show-dz">
										<li>上帝</li>
										<li>五道口</li>
										<li>上帝</li>
									</ul>
								</div> -->
							</li>
							<li><span class="shopping_list_text"><em>*</em>详细地址：</span><input type="text" name="adr" placeholder="最多输入20个汉字"  class="input input_b"></li>
							<li><span class="shopping_list_text"><em>*</em>收 货 人：</span><input type="text" name="uname" placeholder="最多10个" class="input"></li>
							<li><span class="shopping_list_text"><em>*</em>手	机：</span><input type="text" name="cellnum" placeholder="如：12312312" class="input"><span class="cart_tel"></li>
							<li><input type="button" class="affirm"></li>
						</ul>
					</div>
				
			</div>
			<div class="hr_25"></div>
			<div class="shopping_item">
				<h3 class="shopping_tit">支付方式</h3>
				<div class="shopping_cont padding_shop">
					<ul class="shopping_list">
						<li><input type="radio" class="radio" id="r1"><label for="r1">微信支付</label></li>
						<li><input type="radio" class="radio" id="r2"><label for="r2">货到付款</label></li>
					</ul>
				</div>
			</div>
			<div class="shopping_item">
				<h3 class="shopping_tit">送货清单</h3>
				<div class="shopping_cont pb_10">
					<div class="cart_inner">
						<div class="cart_head clearfloat">
							<div class="cart_item t_name">商品名称</div>
							<div class="cart_item t_price">单价</div>
							<!-- <div class="cart_item t_return">返现</div> -->
							<div class="cart_item t_num">数量</div>
							<div class="cart_item t_subtotal">小计</div>
						</div>
						<div class="cart_cont clearfloat">
							<div class="cart_item t_name">
								<div class="cart_shopInfo clearfloat">
									<img src="image_350/<?php  echo $proImgs[0]['albumPath'];?>" alt="">
									<div class="cart_shopInfo_cont">
										<p class="cart_link"><?php echo $proInfo['pName'];?></p>
										
									</div>
								</div>
							</div>
							<div class="cart_item t_price">
								￥<?php echo $proInfo['iPrice'];?>
							</div>
							<!-- <div class="cart_item t_return">￥0.00</div> -->
							<div class="cart_item t_num">1</div>
							<div class="cart_item t_subtotal t_red">￥<?php echo $proInfo['iPrice'];?></div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="shopping_item">
				<h3 class="shopping_tit">订单结算</h3>
				<div class="shopping_cont padding_shop clearfloat">
					<div class="cart_count rt">
						<div class="cart_rmb">
							<i>总计：</i><span>￥<?php echo $proInfo['iPrice'];?></span>
						</div>
						<div class="cart_btnBox">
							<input type="submit" class="cart_btn" value="提交订单">
						</div>
					</div>
				</div>
			</div>
		</form>
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
	<script type="text/javascript">
		var sel = document.getElementById("select-adr");
    	var sul = document.getElementById("show-dz");    	
            sel.onmouseover = function(){
                sul.className = "show_select show";                             
            }
            sel.onmouseout = function(){
                sul.className = "show_select hide";                           
            }
      
	</script>
</body>
</html>
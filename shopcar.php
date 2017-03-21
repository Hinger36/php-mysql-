<?php 
require_once 'include.php';
$id=$_REQUEST['id'];
$proInfo=getProById($id);
$proImgs=getAllImgByProId($id);
$sql = "select * from life_glist";
$rows=fetchOne($sql,$result_type=MYSQL_ASSOC);
while($rows){  
    $row[] = $rows;  
}  
printf($row);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>购物车</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/ie-h5.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="style/reset.css"> 
	<link type="text/css" rel="stylesheet" href="style/main.css">
	<link type="text/css" rel="stylesheet" href="style/car.css">
	<script type="text/javascript" src="js/shopcar.js"></script>
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
				<div class="search-box-sm rt">
					<input type="text" class="search-text-sm lt">
					<input type="button" name="" value="搜 索" class="search-btn-sm rt">
				</div>
				
			</div>
		</div>
		
	</header>
	<section>
		<div class="shoppingCart comWidth">
			<table id="cartTable">
			    <thead>
			        <tr>
			            <th><label><input class="check-all check" type="checkbox"/>&nbsp;全选</label></th>
			            <th>商品</th>
			            <th>单价</th>
			            <th>数量</th>
			            <th>小计</th>
			            <th>操作</th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			            <td class="goods"><img src="images/1.jpg" alt=""/><span>Casio/卡西欧 EX-TR350</span></td>
			            <td class="price">5999.88</td>
			            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
			            <td class="subtotal">5999.88</td>
			            <td class="operation"><span class="delete">删除</span></td>
			        </tr>
			        <tr>
			            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			            <td class="goods"><img src="images/2.jpg" alt=""/><span>Canon/佳能 PowerShot SX50 HS</span></td>
			            <td class="price">3888.50</td>
			            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
			            <td class="subtotal">3888.50</td>
			            <td class="operation"><span class="delete">删除</span></td>
			        </tr>
			        <tr>
			            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			            <td class="goods"><img src="images/3.jpg" alt=""/><span>Sony/索尼 DSC-WX300</span></td>
			            <td class="price">1428.50</td>
			            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
			            <td class="subtotal">1428.50</td>
			            <td class="operation"><span class="delete">删除</span></td>
			        </tr>
			        <tr>
			            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
			            <td class="goods"><img src="images/4.jpg" alt=""/><span>Fujifilm/富士 instax mini 25</span></td>
			            <td class="price">640.60</td>
			            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
			            <td class="subtotal">640.60</td>
			            <td class="operation"><span class="delete">删除</span></td>
			        </tr>
			    </tbody>
			</table>
			<div class="foot1" id="foot1">
			    <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;全选</label>
			    <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
			    <div class="fr closing">结 算</div>
			    <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
			    <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up">︽</span><span class="arrow down">︾</span></div>
			    <div class="selected-view">
			        <div id="selectedViewList" class="clearfix">
			            <div><img src="images/1.jpg"><span>取消选择</span></div>
			        </div>
			        <span class="arrow">◆<span>◆</span></span>
			    </div>
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
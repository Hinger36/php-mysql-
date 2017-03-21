<?php
require_once 'include.php';


$cates=getAllcate();
if(!($cates && is_array($cates))){
	alertMes("不好意思，网站维护中!!!", "");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/ie-h5.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="style/reset.css">
	<link type="text/css" rel="stylesheet" href="style/main.css">
	<script type="text/javascript" src="js/dex.js"></script>
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
			<div class="comWidth">
				<div class="logo lf">
					<a href="index.php">来福网<!-- <img src="#" alt="来福网"> --></a>
				</div>
				
				
			</div>
		</div>
		<div class="navBox">
			<div class="comWidth">
				<div class="shopClass fl">
					<h3>全部商品分类</h3>
					<div class="shopClass-show">
						<dl class="shopClass-item">
							<dt>
								<a href="products.php?id=6">手机通讯</a>
								
							</dt>
							<dd>							
								<a href="">手机配件</a>
								<a href="">智能手机</a>
								<a href="">老人机</a>
							</dd>
							<div class="shopClass-list height-min">
								
								<dl class="shoplist-item">
									<dt>手机配件</dt>
									<dd>
									
										<a href="#">内存</a>
										<a href="#">显示器</a>
								
										<a href="#">DIY小附件</a>
										<a href="#">装机/配件安装</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>智能手机</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
										<a href="#">电源适配器</a>
										
										<a href="#">影音线材</a>
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>老人机</dt>
									<dd>
										<a href="#">鼠标</a>
										<a href="#">键盘</a>
										<a href="#">游戏外设</a>
										<a href="#">移动硬盘</a>
										<a href="#">摄像头</a>
										<a href="#">高清播放器</a>
										<a href="#">外置盒</a>
										<a href="#">移动硬盘包</a>
										<a href="#">手写板/绘图板</a>
									</dd>
								</dl>
								
								<div class="shoplist-links">
									<a href="#">电脑整机频道<span></span></a><a href="#">硬件/外设频道<span></span></a>
								</div>
							</div>
						</dl>
						<dl class="shopClass-item">
							<dt>
								<a href="products.php?id=5">家用电脑</a>								
							</dt>
							<dd>							
								<a href="#">笔记本</a>
								<a href="#">台式机</a>
								<a href="#">一体机</a>
								
							</dd>
							<div class="shopClass-list height-min">
								<dl class="shoplist-item">
									<dt>笔记本</dt>
									<dd>
										<a href="#">笔记本</a>
										<a href="#">超级本</a>
										<a href="#">上网本</a>
										<a href="#">平板电脑</a>
										<a href="#">台式机</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>台式机</dt>
									<dd>
										<a href="#">CPU</a>
										<a href="#">硬盘</a>
										<a href="#">SSD固态硬盘</a>
										<a href="#">内存</a>
										<a href="#">显示器</a>
										<a href="#">主板</a>
										<a href="#">显卡</a>
										<a href="#">机箱</a>
										<a href="#">电源</a>
										<a href="#">散热器</a>
										<a href="#">刻录机/光驱</a>
										<a href="#">声卡</a>
										<a href="#">拓展卡</a>
										<a href="#">服务器配件</a>
										<a href="#">DIY小附件</a>
										<a href="#">装机/配件安装</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>一体机</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
										<a href="#">电源适配器</a>
										<a href="#">贴膜</a>
										<a href="#">清洁用品</a>
										<a href="#">笔记本散热器</a>
										<a href="#">USB拓展</a>
										<a href="#">平板配件</a>
										<a href="#">特色附件</a>
										<a href="#">插座网线/电话线</a>
										<a href="#">影音线材</a>
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>游戏本</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
										<a href="#">电源适配器</a>
										<a href="#">贴膜</a>
										<a href="#">清洁用品</a>
										<a href="#">笔记本散热器</a>
										<a href="#">USB拓展</a>
										<a href="#">平板配件</a>
										<a href="#">特色附件</a>
										<a href="#">插座网线/电话线</a>
										<a href="#">影音线材</a>
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<div class="shoplist-links">
									<a href="#">电脑整机频道<span></span></a><a href="#">硬件/外设频道<span></span></a>
								</div>
							</div>
						</dl>
						<dl class="shopClass-item">
							<dt>
								<a href="#">智能设备</a>
							</dt>
							<dd>							
								<a href="#">智能手表</a>
								<a href="#">智能家居</a>
								

							</dd>
							<div class="shopClass-list height-min">					
								<dl class="shoplist-item">
									<dt>智能手表</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
										<a href="#">电源适配器</a>
										<a href="#">贴膜</a>
										<a href="#">清洁用品</a>
									
										<a href="#">插座网线/电话线</a>
										<a href="#">影音线材</a>
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>智能手环</dt>
									<dd>
										<a href="#">鼠标</a>
										<a href="#">键盘</a>
										<a href="#">游戏外设</a>
										<a href="#">移动硬盘</a>
										<a href="#">摄像头</a>
										<a href="#">高清播放器</a>
										<a href="#">外置盒</a>
										<a href="#">移动硬盘包</a>
										<a href="#">手写板/绘图板</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>智能眼镜</dt>
									<dd>
										<a href="#">路由器</a>
										<a href="#">网卡</a>
										<a href="#">3G无线上网</a>
										<a href="#">交换机</a>
										<a href="#">网络存储</a>
										<a href="#">布线工具</a>
										<a href="#">网络配件</a>
										<a href="#">正版软件</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>智能家居</dt>
									<dd>
										<a href="#">音箱</a>
										<a href="#">耳机/耳麦</a>
										<a href="#">麦克风</a>
										<a href="#">声卡</a>
										<a href="#">音频附件</a>
										<a href="#">录音笔</a>
									</dd>
								</dl>
								<div class="shoplist-links">
									<a href="#">电脑整机频道<span></span></a><a href="#">硬件/外设频道<span></span></a>
								</div>
							</div>
						</dl>
						<dl class="shopClass-item">
							<dt>
								<a href="#">摄影摄像</a>								
							</dt>
							<dd><a href="">单反相机</a>
							<a href="">微单/单电 </a>
							<a href="">拍立得</a>
							</dd>
							<div class="shopClass-list height-min">
								<dl class="shoplist-item">
									<dt>单反相机</dt>
									<dd>
										<a href="#">笔记本</a>
								
										<a href="#">上网本</a>
										<a href="#">平板电脑</a>
										<a href="#">台式机</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>微单/单电</dt>
									<dd>
										<a href="#">CPU</a>
										<a href="#">硬盘</a>
										<a href="#">SSD固态硬盘</a>
										<a href="#">内存</a>
								
										<a href="#">声卡</a>
										<a href="#">拓展卡</a>
										<a href="#">服务器配件</a>
										<a href="#">DIY小附件</a>
										<a href="#">装机/配件安装</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>数码相机</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
									
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>拍立得</dt>
									<dd>
										<a href="#">鼠标</a>
										<a href="#">键盘</a>
										<a href="#">游戏外设</a>
								
										<a href="#">外置盒</a>
										<a href="#">移动硬盘包</a>
										<a href="#">手写板/绘图板</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>摄影配件</dt>
									<dd>
										<a href="#">路由器</a>
										<a href="#">网卡</a>
										<a href="#">3G无线上网</a>
									
										<a href="#">网络配件</a>
										<a href="#">正版软件</a>
									</dd>
								</dl>
								
								<div class="shoplist-links">
									<a href="#">电脑整机频道<span></span></a><a href="#">硬件/外设频道<span></span></a>
								</div>
							</div>
						</dl>
						<dl class="shopClass-item">
							<dt>
								<a href="#">办公设备</a>
							</dt>
							<dd>							
								<a href="#">打印设备</a>
								<a href="#">投影设备</a>
							</dd>
							<div class="shopClass-list height-min">
								<dl class="shoplist-item">
									<dt>打印设备</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
										<a href="#">电源适配器</a>
										<a href="#">贴膜</a>
										<a href="#">清洁用品</a>
										<a href="#">笔记本散热器</a>
										<a href="#">USB拓展</a>
										<a href="#">平板配件</a>
										<a href="#">特色附件</a>
										<a href="#">插座网线/电话线</a>
										<a href="#">影音线材</a>
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>投影设备</dt>
									<dd>
										<a href="#">鼠标</a>
										<a href="#">键盘</a>
										<a href="#">游戏外设</a>
										<a href="#">移动硬盘</a>
										<a href="#">摄像头</a>
										<a href="#">高清播放器</a>
										<a href="#">外置盒</a>
										<a href="#">移动硬盘包</a>
										<a href="#">手写板/绘图板</a>
									</dd>
								</dl>
								
								<div class="shoplist-links">
									<a href="#">电脑整机频道<span></span></a><a href="#">硬件/外设频道<span></span></a>
								</div>
							</div>
						</dl>
					</div>										
				</div>
				<nav>
					<a href="#">买好货</a>
					<a href="#">就来</a>
					<a href="#">来福网</a>
					<a href="#">发现</a>
					<a href="#">新世界</a>
					
				</nav>
			</div>		
		</div>
	</header>
	<section>
		<div class="comWidth clearfloat">
			<div class="banner banner-big" id="container">
				<ul class="imgBox" id="list" style="left: -810px;">
					<li><a href="#"><img src="images/banner/banner-3.jpg" alt="banner"></a></li>
					<li><a href="#"><img src="images/banner/banner-1.png" alt="banner"></a></li>
					<li><a href="#"><img src="images/banner/banner-2.jpg" alt="banner"></a></li>
					<li><a href="#"><img src="images/banner/banner-3.jpg" alt="banner"></a></li>
					<li><a href="#"><img src="images/banner/banner-1.png" alt="banner"></a></li>
				</ul>
				<div class="imgNum" id="buttons">
					<span index="1" class="active"></span><span index="2"></span><span index="3"></span>
				</div>
				<a  id="prev" class="arrow">&lt;</a>
   				<a  id="next" class="arrow">&gt;</a>
			</div>			
		</div>
	</section>
	<?php foreach($cates as $cate):?>
	<section>
		<div class="comWidth">
			<div class="shopTitle">
				<span class="icon"></span>
				<h3><?php echo $cate['cName'];?></h3>
				<a href="products.php?id=<?php echo $cate['id'];?>">更多&gt;&gt;</a>
			</div>			
		</div>
	</section>
	<section>
		<div class="shopList comWidth clearfloat">
			<div class="leftArea">
				<div class="banner banner-sm">
					<ul class="imgBox">
						<li><a href="#"><img src="images/banner/1_03.jpg" alt="banner"></a></li>
						<li><a href="#"><img src="images/banner/1_24.png" alt="banner"></a></li>
					</ul>
				<div class="imgNum">
					<a href="#" class="active"></a><a href="#"></a><a href="#"></a>
				</div>
			</div>			
		</div>
		<div class="rightArea">
				<div class="shopList-top">
				<?php 
					$pros=getProsByCid($cate['id']);
					if($pros &&is_array($pros)):
					foreach($pros as $pro):
					$proImg=getProImgById($pro['id']);
				?>
					<div class="shop-item">
						<div class="shopimg">
							<a href="Detail.php?id=<?php echo $pro['id'];?>" target="_blank"><img height="154" width="154" src="image_220/<?php echo $proImg['albumPath'];?>" alt=""></a>
						</div>
						<a href="#"><?php echo $pro['pName'];?></a>
						<p><?php echo $pro['iPrice'];?>元</p>
					</div>
					<?php 
					endforeach;
					endif;
					?>
				</div>
				<div class="shopList-D lf">
				<?php 
					$prosSmall=getSmallProsByCid($cate['id']);
					if($prosSmall &&is_array($prosSmall)):
					foreach($prosSmall as $proSmall):
					$proSmallImg=getProImgById($proSmall['id']);
				?>
					<div class="shop-item">
						<div class="shopimg">
							<a href="Detail.php?id=<?php echo $proSmall['id'];?>" target="_blank"><img width="90" height="90" src="image_220/<?php echo $proSmallImg['albumPath'];?>" alt=""></a>
						</div>
						<div class="shop-Text">
							<a href="#"><?php echo $proSmall['pName'];?></a>
							<p>￥<?php echo $proSmall['iPrice'];?></p>
						</div>
					</div>
					<?php 
					endforeach;
					endif;
					?>
					
				</div>	
			</div>
		</div>
	
	</section>
	<?php endforeach;?>
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
	<script type="text/javascript" src="js/lbt.js"></script>
	
</body>
</html>
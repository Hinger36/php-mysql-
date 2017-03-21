<?php 
require_once 'include.php';
$id=$_REQUEST['id'];
$proInfo=getProById($id);
$proImgs=getAllImgByProId($id);
// print_r($proImgs);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>详情页</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/ie-h5.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="style/reset.css"> 
	<link type="text/css" rel="stylesheet" href="style/main.css">
	<link type="text/css" rel="stylesheet" media="all" href="style/jquery.jqzoom.css"/>
	<script src="js/jquery-1.6.js" type="text/javascript"></script>
	<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
<!-- 	<script type="text/javascript" src="js/dex.js"></script>
 -->	
<script type="text/javascript">
		window.onload = function () {

			if(!document.getElementsByClassName){
			    document.getElementsByClassName = function(className, element){
				    var children = (element || document).getElementsByTagName('*');
				    var elements = new Array();
				    for (var k=0; k<children.length; k++){
				        var child = children[k];
				        var classNames = child.className.split(' ');
				        for (var j=0; j<classNames.length; j++){
					        if (classNames[j] == className){ 
					        	elements.push(child);
					        	break;
					        }
				        }
	    			} 
    			return elements;
    		};}

			
			var Lis = document.getElementsByClassName("shopClass");
	        var bis = document.getElementsByClassName("shopClass-show");
            Lis[0].onmouseover = function(){
                    bis[0].className = "shopClass-show show";                
            }            
            Lis[0].onmouseout = function(){           		
       			bis[0].className = "shopClass-show hide";
        	}
        	var sct = document.getElementsByClassName("shopClass-item");
            // var ejk = document.getElementsByClassName("shopClass-list");
            for(var i = 0; i < sct.length; i++) {
            	sct[i].onmouseover = function(){
            		this.className = "shopClass-item shopClass-active";
                    // ejk[0].className = "shopClass-list show";                
                }
                sct[i].onmouseout = function(){
                	this.className = "shopClass-item";
                    // ejk[0].className = "shopClass-list";                
                }                        
            }
            
        }
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.jqzoom').jqzoom({
	            zoomType: 'standard',
	            lens:true,
	            preloadImages: false,
	            alwaysOn:false,
				title:false,
				zoomWidth:410,
				zoomHeight:410
	        });
		
	});
</script>
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
					<div class="shopClass-show hide">
						<dl class="shopClass-item">
							<dt>
								<a href="products.php">手机通讯</a>
								
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
								<a href="#">家用电脑</a>								
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
		<div class="con ">
			<div class="comWidth clearfloat">
				<div class="commod-top">
					<div class="commod-title">
						<p><a href=""><strong>首页</strong></a> > <a href=""><?php echo $proInfo['cName']?></a> > <a href=""><?php echo $proInfo['pSn']?></a></p>
					</div>
					<div class="commod-body clearfloat">
						<div class="com-img clearfloat lf">
							<div class="big">
								<a href="image_800/<?php echo  $proImgs[0]['albumPath'];?>" class="jqzoom" rel='gal1' title="triumph" >
           			 			<img width="309" height="340" src="image_350/<?php  echo $proImgs[0]['albumPath'];?>"  title="triumph">
	        					</a>
							</div>
							<ul class="des_smimg clearfloat" id="thumblist">
								<?php foreach($proImgs as $key=>$proImg):?>
								<li><a class="<?php echo $key==0?"zoomThumbActive":"";?> active" href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: 'image_350/<?php echo $proImg['albumPath'];?>',largeimage: 'image_800/<?php echo $proImg['albumPath'];?>'}"><img src="image_50/<?php echo $proImg['albumPath'];?>" alt=""></a></li>
								<?php endforeach;?>
							</ul>
						</div>
						<div class="com-text rt">
							<div class="des_content">
								<h3 class="des_content_tit"><?php echo $proInfo['pName'];?></h3>
								<dl class="dlx">
									<dt>来福价</dt>
									<dd><span class="des_money"><em>￥</em><?php echo $proInfo['iPrice'];?></span></dd>
								</dl>
								<dl class="dlx-1">
									<dt>优惠</dt>
									<dd><span class="hg"><i class="hg_icon">满换购</i><em>购ipad加价优惠够配件或USB充电插座</em></span></dd>
								</dl>
								
								<div class="des_select">
									<p>已选择 <span></span></p>
								</div>
								<div class="shop_buy">
									
									
									<a href="Settlement.php?id=<?php echo $id;?>" target="_blank" class="buy_btn">立即购买</a>
								</div>
								<div class="notes">
									注意：此商品可提供普通发票，不提供增值税发票。
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="leftArea ">
					<div class="recommend">
						<h3>推荐购买</h3>
						<div class="le-item">
							<div class="litem-img">
								<a href="#"><img src="images/5_03.jpg"></a>
							</div>
							<div class="litem-text">
								<a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a>
								<p>¥3588.00</p>
							</div>
						</div>
						<div class="le-item">
							<div class="litem-img">
								<a href="#"><img src="images/5_07.jpg"></a>
							</div>
							<div class="litem-text">
								<a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a>
								<p>¥3588.00</p>
							</div>
						</div>
						<div class="le-item">
							<div class="litem-img">
								<a href="#"><img src="images/5_10.jpg"></a>
							</div>
							<div class="litem-text">
								<a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a>
								<p>¥3588.00</p>
							</div>
						</div>
						<div class="le-item">
							<div class="litem-img">
								<a href="#"><img src="images/5_12.jpg"></a>
							</div>
							<div class="litem-text">
								<a href="#">Samsung 三星 GALAXY Tab 3 8.0 WLAN版本 T310平板电话</a>
								<p>¥3588.00</p>
							</div>
						</div>
					</div>
					
				</div>
				<div class="rightArea">
					<div class="cpjs">
						<ul class="product-title">
							<li class="active"><span>产品介绍</span></li>
							<li ><span>商品评论（18782）</span></li>
						</ul>						
						<div class="product-content">
							<div class="info_tit">
								<h3>强烈推荐</h3>
								<h4>货比三家，还选</h4>
							</div>
							<p><?php echo $proInfo['pDesc'];?></p>
							
						</div>
					</div>
					<div class="cpjs">
						<h3 class="shopDes_tit">商品评价</h3>
						<div class="score_box ">
							<div class="score">
								<span>4.7</span><em>分</em>
							</div>
							<div class="score_speed">
								<ul class="score_speed_text">
									<li class="speed_01">非常不满意</li>
									<li class="speed_02">不满意</li>
									<li class="speed_03">一般</li>
									<li class="speed_04">满意</li>
									<li>非常满意</li>
								</ul>
								<div class="score_num">
									<p>4.7</p>
									<span></span>
								</div>
								<p class="score_tex">共18939位来福网友参与评分</p>
							</div>
						</div>
						<div class="review_tab">
							<ul class="review">
								<li class="active"><a href="#" >全部</a></li>
								<li><a href="#">满意（3121）</a></li>
								<li><a href="#">一般（321）</a></li>
								<li><a href="#">不满意（1121）</a></li>
							</ul>
							
						</div>
						<div class="review_listBox">
							<div class="review_list clearfloat">
								<div class="review_userHead lf">
									<div class="review_user">
										<img src="images/userhead.jpg" alt="">
										<p>61***42</p>
										<p>金色会员</p>
									</div>
								</div>
								<div class="review_cont ">
									<div class="review_t clearfloat">
										<div class="starsBox lf"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
										<span class="stars_text lf">5分 满意</span>
									</div>
									<p>赖来福挺不错的信赖来福挺不错的，信赖来福</p>
									<p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
								</div>
							</div>
							<div class="review_list clearfloat">
								<div class="review_userHead lf">
									<div class="review_user">
										<img src="images/userhead.jpg" alt="">
										<p>61***42</p>
										<p>金色会员</p>
									</div>
								</div>
								<div class="review_cont">
									<div class="review_t clearfloat">
										<div class="starsBox lf"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
										<span class="stars_text lf">5分 满意</span>
									</div>
									<p>赖来福挺不错的信赖来福挺不错的，信赖来福</p>
									<p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
								</div>
							</div>
							<div class="page ">
					<a href="#">上一页</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><span class="hl">...</span><a href="#">200</a><a href="#">下一页</a>到第</span><input type="text" class="pageNum"><span class="ye">页</span><input type="button" value="确定" class="page_btn">
				</div>
						</div>
					</div>
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
    	var box = document.getElementsByClassName("des_item");
    	//console.log(box);
            sel.onmouseover = function(){
                sul.className = "show_select show";                             
            }
            sel.onmouseout = function(){
                sul.className = "show_select hide";                           
            }
        // for(var i = 0; i < box.length; i++) {
        // 	var arrx = box[i];
        // 	// console.log(arrx);
        // 	box[i].onclick = function(){
        // 		// box[arrx]className = "des_item";
        //         this.class
        // 	box[i].className = "des_item";
        // 	box[i].onclick = function(){
        // 		// box[arrx]className = "des_item";
        //         this.className = "des_item des_item_acitve";                             
        //     }

        // }
        // var yy = document.getElementsByClassName("product-title");
        // for(var i = 0; i < yy.length; i++) {
        // 	yy.onclick = function(){
        //         this.className = "product-title active";                             
        //     }
        // }

	</script>
</body>
</html>
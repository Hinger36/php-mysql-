<?php
require_once 'include.php';
$order=$_REQUEST['order']?$_REQUEST['order']:null;
$orderBy=$order?"order by p.".$order:null;
$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where p.pName like '%{$keywords}%'":null;
//得到数据库中所有商品
$sql="select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from life_pro as p join life_cate c on p.cId=c.id {$where}  ";
$totalRows=getResultNum($sql);
$pageSize=6;
$totalPage=ceil($totalRows/$pageSize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page))$page=1;
if($page>$totalPage)$page=$totalPage;
$offset=($page-1)*$pageSize;
$sql="select p.id,p.pName,p.pSn,p.pNum,p.mPrice,p.iPrice,p.pDesc,p.pubTime,p.isShow,p.isHot,c.cName from life_pro as p join life_cate c on p.cId=c.id {$where} {$orderBy} limit {$offset},{$pageSize}";
$rows=fetchAll($sql);

//print_r($rows);




$cates=getAllcate();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>筛选页</title>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/ie-h5.js"></script>
	<![endif]-->
	<link type="text/css" rel="stylesheet" href="style/reset.css"> 
	<link type="text/css" rel="stylesheet" href="style/main.css">
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
					<a href="#">来福网<!-- <img src="#" alt="来福网"> --></a>
				</div>
				<div class="search-box">
					<input type="text" class="search-text lt" id="search" onkeypress="search()">
					<input type="button" name="" value="搜 索" class="search-btn rt">
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
								<a href="#">手机</a>
								<a href="#">数码</a>
							</dt>
							<dd>							
								<a href="#">荣耀3X</a>
								<a href="#">单反</a>
								<a href="#">智能设备</a>
							</dd>
							<div class="shopClass-list height-min">
								
								<dl class="shoplist-item">
									<dt>装机配件</dt>
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
									<dt>整机附件</dt>
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
									<dt>电脑外设</dt>
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
									<dt>网络设备</dt>
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
									<dt>音频设备</dt>
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
								<a href="#">电脑</a>
								<a href="#">硬件外设</a>
							</dt>
							<dd>							
								<a href="#">笔记本</a>
								<a href="#">台式机</a>
								<a href="#">超级本</a>
								<a href="#">平板</a>
							</dd>
							<div class="shopClass-list height-min">
								<dl class="shoplist-item">
									<dt>电脑整机</dt>
									<dd>
										<a href="#">笔记本</a>
										<a href="#">超级本</a>
										<a href="#">上网本</a>
										<a href="#">平板电脑</a>
										<a href="#">台式机</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>装机配件</dt>
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
									<dt>整机附件</dt>
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
									<dt>电脑外设</dt>
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
									<dt>网络设备</dt>
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
									<dt>音频设备</dt>
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
								<a href="#">大家电</a>
							</dt>
							<dd>							
								<a href="#">电视</a>
								<a href="#">空调</a>
								<a href="#">冰箱</a>
								<a href="#">洗衣机</a>
							</dd>
							<div class="shopClass-list height-min">					
								<dl class="shoplist-item">
									<dt>整机附件</dt>
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
									<dt>电脑外设</dt>
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
									<dt>网络设备</dt>
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
									<dt>音频设备</dt>
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
								<a href="#">厨房电器</a>
								<a href="#">生活电器</a>
							</dt>
							<dd>							
								<a href="#">空气净化器</a>
								<a href="#">微波炉</a>
								<a href="#">取暖设备</a>
							</dd>
							<div class="shopClass-list height-min">
								<dl class="shoplist-item">
									<dt>电脑整机</dt>
									<dd>
										<a href="#">笔记本</a>
								
										<a href="#">上网本</a>
										<a href="#">平板电脑</a>
										<a href="#">台式机</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>装机配件</dt>
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
									<dt>整机附件</dt>
									<dd>
										<a href="#">电脑包</a>
										<a href="#">电脑桌</a>
										<a href="#">电池</a>
									
										<a href="#">电脑线材</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>电脑外设</dt>
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
									<dt>网络设备</dt>
									<dd>
										<a href="#">路由器</a>
										<a href="#">网卡</a>
										<a href="#">3G无线上网</a>
									
										<a href="#">网络配件</a>
										<a href="#">正版软件</a>
									</dd>
								</dl>
								<dl class="shoplist-item">
									<dt>音频设备</dt>
									<dd>
										<a href="#">音箱</a>
										<a href="#">耳机/耳麦</a>
										<a href="#">麦克风</a>
									
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
								<a href="#">食品/饮料/生鲜</a>
							</dt>
							<dd>							
								<a href="#">进口</a>
								<a href="#">方便面</a>
								<a href="#">零食</a>
								<a href="#">保健</a>
							</dd>
							<div class="shopClass-list height-min">
								<dl class="shoplist-item">
									<dt>整机附件</dt>
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
									<dt>电脑外设</dt>
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
									<dt>网络设备</dt>
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
									<dt>音频设备</dt>
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
					</div>										
				</div>
				<nav>
					<a href="#">数码城</a>
					<a href="#">天黑黑</a>
					<a href="#">团购</a>
					<a href="#">发现</a>
					<a href="#">二手特卖</a>
					<a href="#">名品会</a>
				</nav>
			</div>		
		</div>
	</header>
	<section>
		<div class="comWidth clearfloat products">
			<div class="leftArea">
				<div class="leftNav ">
					<h3 class="nav_title">产品分类</h3>
					<div class="nav_cont">
						<h4>手机通讯</h4>
						<ul class="navCont_list clearfix">
							<li><a href="#">手机</a></li>
							<li><a href="#">对讲机</a></li>
						</ul>
					</div>
					<div class="nav_cont">
						<h4>运营商</h4>
						<ul class="navCont_list clearfix">
							<li><a href="#">购机送费</a></li>
							<li><a href="#">“0”元购机</a></li>
							<li><a href="#">选号入网</a></li>
						</ul>
					</div>
					<div class="nav_cont">
						<h4>手机配件</h4>
						<ul class="navCont_list clearfix">
							<li><a href="#">手机电池</a></li>
							<li><a href="#">蓝牙耳机</a></li>
							<li><a href="#">充电器/数据线</a></li>
							<li><a href="#">手机耳机</a></li>
							<li><a href="#">手机贴膜</a></li>
							<li><a href="#">手机存储卡</a></li>
							<li><a href="#">手机保护套</a></li>
							<li><a href="#">车载配件</a></li>
							<li><a href="#">iphone配件</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="rightArea">
				<div class="screening_box">
					<dl class="screening clearfloat">
						<dt>手机</dt>
						<dd class="screening_top"><a href="#" class="active">裸机(773)</a></dd>
						<dd class="screening_top"><a href="#" class="active">合约机(192)</a></dd>
					</dl>
					<dl class="screening clearfloat">
						<dt>品牌</dt>
						<dd class="limit"><a href="#" class="active">不限</a></dd>
						<dd class="screening_list">
							<ul class="clearfloat">
								<li><a href="#">Samsung/三星</a></li>
								<li><a href="#">Apple/苹果</a></li>
								<li><a href="#">Huawei/华为</a></li>
								<li><a href="#">Miui/小米</a></li>
								<li><a href="#">Lenove/联想</a></li>
								<li><a href="#">Sony/索尼</a></li>
								<li><a href="#">Meizu/魅族</a></li>
								<li><a href="#">OPPO</a></li>
								<li><a href="#">Vivo</a></li>
							</ul>
						</dd>
					</dl>

					<dl class="screening clearfloat">
						<dt>屏幕尺寸</dt>
						<dd class="limit"><a href="#" class="active">不限</a></dd>
						<dd class="screening_list">
							<ul class="clearfloat">
								<li><a href="#">超大屏幕(>5.9英寸)</a></li>
								<li><a href="#">大屏幕(4.8-5.8英寸)</a></li>
								<li><a href="#">主流屏幕尺寸(4.0-4.7英寸)</a></li>
							</ul>
						</dd>
					</dl>
					<dl class="screening clearfloat">
						<dt>操作系统</dt>
						<dd class="limit"><a href="#" class="active">不限</a></dd>
						<dd class="screening_list">
							<ul class="clearfloat">
								<li><a href="#">Android</a></li>
								<li><a href="#">苹果ios</a></li>
								<li><a href="#">Windows phone</a></li>
								<li><a href="#">黑莓</a></li>
								<li><a href="#">非智能机</a></li>
							</ul>
						</dd>
					</dl>
					<dl class="screening clearfloat">
						<dt>适用网络制式</dt>
						<dd class="limit"><a href="#" class="active">不限</a></dd>
						<dd class="screening_list">
							<ul class="clearfloat">
								<li><a href="#">4G(TD-LTE)</a></li>
								<li><a href="#">4G(FDD-LTE)</a></li>
								<li><a href="#">移动3G(TD-SCDMA)</a></li>
								<li><a href="#">移动3.5G(TD-HSDPA)</a></li>
								
							</ul>
						</dd>
					</dl>
					<dl class="screening clearfloat">
						<dt>更多选项</dt>
						<dd class="screening_list">
							<div class="screen_more">
								<a href="#">CPU核心数</a>
							</div>
							<div class="screen_more">
								<a href="#">主摄像头像素</a>
							</div>
						</dd>
					</dl>
				</div>
				
				<div class="addInfo">
					<div class="address">
						<span class="add_text">送至</span>
						<div class="select">
							<h3>海淀区五环内</h3><span></span>
							<ul class="show_select hide">
								<li>上地</li>
								<li>五道口</li>
								<li>西二旗</li>
							</ul>
						</div>
					</div>
					<div class="rt screen_text">
						<span class="check">
							<input type="checkbox" id="check"><label for="check">仅显示有货</label>
						</span>
						<span class="shop_number">
							共<em>11123</em>件
						</span>
					</div>
				</div>
				<div class="merch-list-2 clearfloat">		
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3-01.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3-01.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">HTC新渴望8系列HTC新渴望8系列HTC新渴望8系列</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">HTC新渴望8系列HTC新渴望8系列HTC新渴望8系列</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3-01.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">HTC新渴望8系列HTC新渴望8系列HTC新渴望8系列</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">HTC新渴望8系列HTC新渴望8系列HTC新渴望8系列</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3-01.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
					<div class="merch-item-2">
						<div class="merchimg-2">
							<a href="#" ><img src="images/3_03.jpg"></a>
						</div>
						<div class="merchtext">
							<a href="#" class="fonts">荣耀8 4GB+64GB 全网通4G手机 幻夜黑</a>
							<p class="money">￥699.00元</p>
							<span><a href="#" class="addCar">加入购物车</a></span>						
						</div>					
					</div>
				</div>
				<div class="page">
					<a href="#">上一页</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><span class="hl">...</span><a href="#">200</a><a href="#">下一页</a><span class="morePage">共200页，到第</span><input type="text" class="pageNum"><span class="ye">页</span><input type="button" value="确定" class="page_btn">
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
		function search(){
		if(event.keyCode==13){
			var val=document.getElementById("search").value;
			window.location="index.php?keywords="+val;
			}
		}
	</script>
</body>
</html>
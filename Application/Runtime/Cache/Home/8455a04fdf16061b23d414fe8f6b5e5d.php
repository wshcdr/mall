<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品页</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/header.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/items.css">
	<style>
		.fixed{
			position: fixed;
			top: 0;
			width: 100%;
			left: 0;
		}
	</style>
</head>
<body>
	
<div class="header2016">
	<div class="content-w clear">
		<div class="left">
			<a href="javascript:void(0)">菜单1</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单2</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单3</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单4</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单5</a>
			<span class="dev">|</span>
			<a href="javascript:void(0)">菜单6</a>
			<span class="dev">|</span>
		</div>
		<div class="right">
			<?php if($username): ?><a href="javascript:void(0)"><?php echo ($username); ?></a>
				<span class="dev">|</span>
				<a href="javascript:void(0)">退出</a>
			<?php else: ?>
				<a href="/mall/login">登陆</a>
				<span class="dev">|</span>
				<a href="/mall/regist">注册</a><?php endif; ?>
		</div>
	</div>
</div>
<div class="nav2016">
	<div class="content-w clear">
		<div class="nav-logo">
			<a href="javascipt:;">
				<img src="/mall/Public/Common/images/mi-logo.jpg" alt="" class="logo">
			</a>
		</div>
		<div class="nav-bar left">
			<ul class="horizon-list clear">
				<li class="list-item">
					<a href="javascipt:;">分类1</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类2</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类3</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类4</a>
				</li>
				<li class="list-item">
					<a href="javascipt:;">分类5</a>
				</li>
			</ul>
		</div>
		<div class="nav-search right">
				<input type="text" class="search left">
				<input type="submit" class="submit">
		</div>
	</div>
</div>

	<!-- 目录导航 -->
	<div class="head-nav">
		<div class="content-w">
			<a href="javascript:;">首页</a>
			<span class="nav-sub">/</span>
			<a href="javascript:;">配件</a>
			<span class="nav-sub">/</span>
			<a href="javascript:;">后盖</a>
			<span class="nav-sub">/</span>
			<a href="javascript:;">亮彩高光后盖</a>
		</div>
	</div>
	<div class="item-profile">
		<div class="content-w clear">
			<div class="left-pics clear left">
				<div class="pic-list left" id="picList">
					<ul>
						<li class="active"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></li>
						<li><img src="/mall/Public/Common/images/items/test/2.jpg" alt=""></li>
						<li><img src="/mall/Public/Common/images/items/test/3.jpg" alt=""></li>
					</ul>
				</div>
				<div class="pic-big left" id="picShow">
					<img src="/mall/Public/Common/images/items/test/1.jpg" alt="">
				</div>
			</div>
			<div class="right-docs left">
				<h2 class="item-title">亮彩高光后盖</h2>
				<div class="item-desc">
					<p>官方模具 优质触感</p>
					<p>适用于小米2a</p>
				</div>
				<div class="item-price">
					<strong>19</strong>元
				</div>
				<div class="item-other">
					<div class="item-other-1 clear">
						<p>颜色：橙色</p>
						<a href="javascript:;" class="other-item active"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
					</div>
				</div>
				<div class="item-other">
					<div class="item-other-1 clear">
						<p>颜色：橙色</p>
						<a href="javascript:;" class="other-item active"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
						<a href="javascript:;" class="other-item"><img src="/mall/Public/Common/images/items/test/1.jpg" alt=""></a>
					</div>
				</div>
				<div class="item-buttons">
					<button class="btn btn-buy btn-confirm">加入购物车</button>
					<button class="btn btn-like btn-cancel">喜欢</button>
				</div>
				<div class="item-options flex">
					<a href="javascript:;">评论(888)</a>
					<span class="dev">|</span>
					<a href="javascript:;">提问(152)</a>
					<span class="dev">|</span>
					<a href="javascript:;">满意度(93.3%)</a>
				</div>
			</div>
		</div>
	</div>
	<div class="classify-w" id="classify">
		<div class="content-w">
			<div class="classify flex">
				<a href="#item-detail" id="" class="active">详情描述</a>
				<span class="dev">|</span>
				<a href="#item-params">规格参数</a>
				<span class="dev">|</span>
				<a href="#item-comment" id="">评价晒单</a>
				<span class="dev">|</span>
				<a href="hrefjavascript:;">商品提问</a>
			</div>
		</div>	
	</div>
	
	<div class="item-detail">
		
		<div class="item-content" id="item-detail">
			<div class="content-m">
				<img src="/mall/Public/Common/images/items/test/d1.jpg" alt="">
				<img src="/mall/Public/Common/images/items/test/d2.jpg" alt="">
				<img src="/mall/Public/Common/images/items/test/d3.jpg" alt="">
				<img src="/mall/Public/Common/images/items/test/d4.jpg" alt="">
				<img src="/mall/Public/Common/images/items/test/d5.jpg" alt="">
			</div>
		</div>
		<div class="item-params" id="item-params">
			<div class="sup-text">
				<p>规格参数</p>
			</div>
			<div class="content-w">
				<div class="params-detail clear">
					<div class="left-img left">
						<img src="/mall/Public/Common/images/items/test/1.jpg" alt="">
					</div>
					<div class="right-params">
						<label for="">工艺：喷漆</label>
						<label for="">尺寸：L/135mm*H/68mm*T/10mm</label>
						<label for="">颜色：橙色</label>
						<label for="">商品编号：1134700026</label>
					</div>
				</div>
			</div>
		</div>
		<div class="item-comment" id="item-comment">
			<div class="sup-text">
				<p>评价晒单</p>
			</div>
		</div>
		<div style="width: 100%;height: 1000px;"></div>
	</div>
	<script src="/mall/Public/Common/js/jquery-1.12.0.js"></script>
	<script>
		$(document).ready(function() {
			var $pic = $('#picShow').find('img'),
				$classify = $('#classify'),
				$body = $('body');

			var $comment = $('#item-comment'),
				$detail = $('#item-detail'),
				$params = $('#item-params'),
				aAll = $classify.find('a');

			var clHeight = $classify.offset().top,
				Height1 = $detail.offset().top  - 170,
				Height2 = $params.offset().top  - 170,
				Height3 = $comment.offset().top - 170;
				
			console.log(Height1+":"+Height2+":"+Height3);
			//预览图选择
			$('#picList').on('click', 'li', function(event) {
				event.preventDefault();
				$(this).addClass('active').siblings().removeClass('active');
				$pic.attr('src', $(this).find('img').attr('src'));
			});
			//滚动事件
			$(document).scroll(function(event) {
				event.preventDefault();
				var top = $(this).scrollTop();
					
				if (top >= clHeight - 70) {
					$classify.addClass('fixed');
					//top >= Height1 ? aAll.removeClass('active').eq(1).addClass('active') : 
					top >= Height2 && top < Height3 ? aAll.removeClass('active').eq(1).addClass('active') : 
					top >= Height3 ? aAll.removeClass('active').eq(2).addClass('active') :
					aAll.removeClass('active').eq(0).addClass('active');
				}else{
					$classify.removeClass('fixed');
				}
			});
			//分类显示
			$classify.on('click', 'a', function(event) {
				event.preventDefault();
				var target =  $($(this).attr('href'))
				$body.animate({scrollTop:target.offset().top - 100}, 600);
				//target.addClass('active').siblings('a').removeClass('active');
			});
		});
	</script>
</body>
</html>
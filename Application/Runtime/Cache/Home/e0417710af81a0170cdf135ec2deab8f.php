<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/mall/Public/Common/css/reset.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/common.css">
	<link rel="stylesheet" href="/mall/Public/Common/css/cart.css">
	<style>
		.main{
			background-color: #fff;
			min-height: 100px;
			margin-top: 30px;
			padding: 30px 40px;
			box-sizing: border-box;
		}
		.line{
			padding: 20px 0;
			border-bottom: 1px solid #e0e0e0;
			font-size: 14px;
		}
		.line.line-address{
			border-bottom: 0;
		}
		.line h3{
			font-size: 18px;
			display: inline-block;
			width: 150px;
			line-height: 27px;
		}
		.line .active{
			color: #ff6700 !important;
			border-color: #ff6700 !important;
		}
		.line .line-body{
			display: inline-block;
			width: 850px;
		}
		.line a.timing{
			display: inline-block;
			padding: 10px 20px;
			border: 1px solid #e0e0e0;
			margin-right: 20px;
		}
	</style>
</head>
<body onselectstart="return false;" style="-moz-user-select:none;">
	<div class="header">
		<div class="content-w">
			<a href="/mall" class="left header-logo">
				<div class="">
					<span class="logo"></span>
					<span class="home"></span>
				</div>
			</a>
			<div class="right">
				<a href=""><?php echo ($username); ?></a>
				<span class="sub">|</span>
				<a href="">我的订单</a>
			</div>
			<h3>我的购物车</h3>
		</div>
	</div>
	<div class="content-w main">
		<div class="line line-address">
			<h3>选择收货地址</h3>

		</div>
		<div class="line line-pay">
			<h3>支付方式</h3>
			<div class="line-body option active">
				在线支付 （支持支付宝、银联、财付通、小米支付等）
			</div>
		</div>
		<div class="line line-express">
			<h3>配送方式</h3>
			<div class="line-body option active">
				快递配送（运费 10 元）
			</div>
		</div>
		<div class="line line-time">
			<h3>配送时间</h3>
			<div class="line-body option">
				<a href="javascript:;" class="timing active">不限送货时间：周一至周日</a>
				<a href="javascript:;" class="timing">工作日送货：周一至周五</a>
				<a href="javascript:;" class="timing">双休日、假日送货：周六至周日</a>
			</div>
		</div>
		<div class="line line-">
			<h3>购买商品</h3>
		</div>
	</div>
</body>
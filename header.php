<?php
/*
Template Name:Loper
Description:因为简约，所以简单。
Version:1.0
Author:老罗
Author Url:http://hc123.site/zorro
Sidebar Amount:1
ForEmlog:6.0
*/
if (!defined('EMLOG_ROOT')) {
    exit('error!');
}
require_once View::getView('module');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<link rel="shortcut icon" href="<?php echo TEMPLATE_URL; ?>images/favicon.ico" type="image/x-icon" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />
<link type="text/css" href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" />
<link href="<?php echo TEMPLATE_URL; ?>style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js"></script>
<?php doAction('index_head'); ?>
</head>
<body>
	<div id="pre-header">
		<div class="container">
			<span class="icon-twitter"></span>&nbsp;&nbsp;<em style="font-style:normal" id="text"></em>
			<p class="snsright">
				<a href="mailto:<?php global $CACHE;$user_cache = $CACHE->readCache('user');echo  $user_cache[1]['mail'];?>" title="邮箱" class="emailsns" rel="nofollow" target="_blank"><i class="icon-envelope"></i></a>
				<a href="http://wpa.qq.com/msgrd?v=3&uin=2367232250" title="腾讯QQ" class="qqsns" rel="nofollow" target="_blank"><i class="icon-qq"></i></a>
				<a href="http://weibo.com/u/2047942211" title="新浪微博" class="sinasns" rel="nofollow" target="_blank"><i class="icon-weibo"></i></a>
				<a href="#" title="微信" class="wechatsns" rel="nofollow"><i class="icon-wechat"></i></a>
				<a href="<?php echo BLOG_URL; ?>rss.php" title="RSS" class="rsssns" rel="nofollow" target="_blank"><i class="icon-rss"></i></a> 			
			</p>
		</div>
	</div>
	<div id="header">
		<div class="hgroup">
			<h1>
				<a title="<?php echo $blogname; ?>" href="<?php echo BLOG_URL; ?>"><img height="80px" src="<?php echo TEMPLATE_URL; ?>images/logo.png"></a>
			</h1>
		</div>
		<div class="searchbarswitch"></div>
		<div class="searchbar">
			<div class="searchfade" style="display:none;">
				<form id="searchform" class="search" name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
					<input class="search_text" type="text" value="Search...and Enter" onclick="if(this.value=='Search...and Enter')this.value=''" onfocus="this.value='';" onblur="if(this.value =='')this.value='Search...and Enter';" name="keyword"></input>
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<nav class="primary">
			<span class="feedrss"></span>
			<?php blog_navi();?>
		</nav>
		<div class="clear"></div>
	</div>
	<div id="content">
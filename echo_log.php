<?php
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="main">
	<div class="breadcrumbs">
		<i class="icon-home"></i> <a href="<?php echo BLOG_URL;?>" title="返回首页">Home</a> &gt; <?php getBlogSort($logid);?> &gt; <?php echo $log_title; ?>&nbsp;&nbsp;&nbsp;<?php editflg($logid,$author); ?>
	</div>
    <div class="singletitle"><h2><?php topflg($top); ?><?php echo $log_title; ?></h2></div>
	<div class="singleinfo">
		<span class="singletime">
		<i class="icon-calendar"></i> <?php echo gmdate('Y年n月j日', $date); ?>
		</span>
		<span class="singlecom">
		<i class="icon-flask"></i> <?php if($comnum=="0"){ echo '<a href="#respond">抢沙发</a>'; }else{ echo '<a href="#comments">'.$comnum.'条评论</a>'; } ?>
		</span>
		<span class="singleview">
		<i class="icon-star-full"></i> <?php echo $views."人打酱油"; ?>
		</span>
	</div>
    <div class="post-content"><i class="icon-quotes-left"></i><?php echo mycontent($log_content); ?></div>
	<?php doAction('log_related', $logData); ?>
	<div class="postinfo">
		<p><b>声明：</b>若无特殊注明，本文皆为( <?php blog_author($author); ?> )原创，转载请保留文章出处。</p>
        <p class="singletag"><b>标签：</b><?php blog_tag($logid);?></p>
		<p class="singletag"><b>分享：</b><a title="分享到QQ空间" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php echo Url::log($logid); ?>&title=<?php echo $log_title.'-'.$blogname; ?>" target="_blank"><i class="icon-qq"></i></a><a title="分享到新浪微博" href="http://v.t.sina.com.cn/share/share.php?url=<?php echo Url::log($logid); ?>&title=<?php echo $log_title.'-'.$blogname; ?>" target="_blank"><i class="icon-weibo"></i></a></p>
        <nav class="postnav"><?php neighbor_log($neighborLog); ?></nav>
	</div>
	<div id="comments">
		<div class='commentsorping'><i class="icon-flask"></i> 已经有<?php echo $comnum;?>个回复</div>
		<div class="clear"></div>
		<?php blog_comments($comments,$params); ?>
		<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	</div>
</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>
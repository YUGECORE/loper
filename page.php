<?php
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="main">
	<div class="breadcrumbs">
		<i class="icon-home"></i> <a href="<?php echo BLOG_URL;?>" title="返回首页">Home</a> &gt; <?php getBlogSort($logid);?> &gt; <?php echo $log_title; ?>&nbsp;&nbsp;&nbsp;<?php editflg($logid,$author); ?>
	</div>
	<div class="clear"></div>
	<br>
	<div class="mytitle" style="height:50px"><h2><i class="icon-star-empty"></i> <?php echo $log_title; ?></h2></div>
	<div class="clear"></div>
	<div class="post-content"><?php echo mycontent($log_content); ?></div>
	<br><br>
	<div id="comments">
		<?php if($allow_remark=="y"):?>
		<div class='commentsorping'><i class="icon-flask"></i> 已经有<?php echo $comnum;?>个回复</div>
		<div class="clear"></div>
		<?php endif;?>
		<?php blog_comments($comments,$params); ?>
		<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	</div>
	<div style="clear:both;"></div>
</div>
<?php
 include View::getView('side');
 include View::getView('footer');
?>
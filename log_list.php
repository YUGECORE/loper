<?php
if (!defined('EMLOG_ROOT')) {
    exit('error!');
}
?>
<div id="main">
	<?php 
	if (!empty($logs)):
	foreach($logs as $value):
	 preg_match_all("|<img[^>]+src=\"([^>\"]+)\"?[^>]*>|is", $value['content'], $img);
	$imgsrcb = !empty($img[1]) ? $img[1][0] : '';
	$logdes = blog_tool_purecontent($value['content'], 147);
	if(pic_thumb($value['content'])){
	$imgsrc = pic_thumb($value['content']);
	}else
	$imgsrc = TEMPLATE_URL.'images/random/tb'.rand(1,20).'.jpg';
	?>
	<div class="abstract">
		<div class="mytitle">
			<h2><?php if((date('d',$value['date'])/10<2)&&(date('d',$value['date'])/10>=1)&&(date('d',$value['date'])%10==1)):?><span style="padding:3px 6px !important"><?php echo date('d',$value['date']); ?></span><?php elseif(((date('d',$value['date'])/10<2)&&(date('d',$value['date'])/10>=1))||(date('d',$value['date'])%10==1)):?><span style="padding:3px 5px !important"><?php echo date('d',$value['date']); ?></span><?php else:?><span><?php echo date('d',$value['date']); ?></span><?php endif;?> <a title="<?php echo $value['log_title']; ?>" href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a><?php topflg($value['top']); ?></h2>
			<div class="clear"></div>
			<span class="cate">
			<i class="icon-user"></i> <?php echo blog_author($value['author']); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-calendar"></i> <?php echo date('Y.m.d',$value['date']); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-books"></i> <?php blog_sort($value['logid']); ?>&nbsp;&nbsp;&nbsp;<i class="icon-flask"></i>    <?php if($value['comnum']=="0"){ echo '<a title="抢沙发" href="'.$value['log_url'].'#respond">抢沙发</a>'; }else{ echo  '<a title="《'.$value['log_title'].'》上的评论" href="'.$value['log_url'].'#comments">'.$value['comnum'].'条评论</a>'; } ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-star-full"></i> <?php echo $value['views']; ?>人打酱油
			</span>	
		</div>
		<div class="postcontents">
			<div class="thumbnailbg">
				<a href="<?php echo $value['log_url']; ?>">
				<img class="thumb" src="<?php echo $imgsrc; ?>" />
				</a>
			</div>
			<div class="post-content"><?php echo $logdes; ?><div class="clear"></div>
			<div class="post-meta">
				<a class="post-more" rel="nofollow" title="continue" href="<?php echo $value['log_url']; ?>">Continue</a>
				<span class="post-tags">
					Tags: <?php blog_tag($value['logid']); ?>
				</span>
			</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
    <?php endforeach; else: ?>
    <p><center>关键词“<?php echo urldecode($params[2]);?>”没搜到！</center></p>
    <?php endif; ?>
	<div class="clear"></div>	
	<div class="pagenavi">
		<?php echo mypage($lognum,$index_lognum,$page,$pageurl);?>
	</div>
</div>
<?php
include View::getView('side');
include View::getView('footer');
?>
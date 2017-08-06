<?php
if (!defined('EMLOG_ROOT')) {
    exit('error!');
}
?>
</div>
<div class="clear"></div>
<div id="updown"></div>
<div id="downup"></div>
<div id="circle"></div>
<div id="circletext"></div>
<div id="circle1"></div>
<div class="weixin">
	<span class="close">关闭</span>
	<img src="<?php echo TEMPLATE_URL; ?>images/weixin.jpg"/>
</div>
<div class="bg"></div>
<div id="footer">
	<div class="footertop">
	<div class="footerinfo">
	<p><i class="icon-home"></i> Copyright © <?php echo date('Y',time())?> <?php echo $blogname; ?></p>
	<p>Powered by <a href="http://www.emlog.net" target="_blank" title="采用emlog系统">emlog</a> & Loper Theme by <a href="http://hc123.site/zorro" target="_blank" title="我是老罗">老罗</a>&nbsp;<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>&nbsp;<?php echo $footer_info; ?></p>
	<?php doAction('index_footer'); ?>
	</div>
	</div>
</div>
</body>
</html>
<script>
prettyPrint();
jQuery(document).ready(function($){  
	$("img").not("#sidebar img").lazyload({
		placeholder:"<?php echo TEMPLATE_URL; ?>loper/images/image-pending.gif",
		effect      : "fadeIn"
	});
});
var a = "<?php if(empty($bloginfo)){ echo "求知若饥，虚心若愚。";}else{ echo $bloginfo; }?>" ;
</script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/jquery.lazyload.mini.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/fancybox.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/common.js"></script>
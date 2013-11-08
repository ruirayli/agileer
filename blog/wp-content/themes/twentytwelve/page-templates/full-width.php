<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<style type="text/css">
	ul li.span4{
		width: 187px;
	}
</style>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', 'page' ); ?>
				<pre style="margin-bottom:10px;">
  					<div style="text-align:center;">欢迎通过以下方式进行交流！</div>
				</pre>
				<div style="margin-left:75px;">
					<ul class="thumbnails">
					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/qq.png" alt="">
					      <h3>495137142</h3>
					    </div>
					  </li>
					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/email.png" alt="">
					      <h3>495137142@qq.com</h3>
					    </div>
					  </li>
			
					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/zhihu.png" alt="">
					      <h3><a href="http://zhihu.com/people/agileer" target="_blank">zhihu.com/people/agileer</a></h3>
					    </div>
					  </li>

					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/wechat.png" alt="">
					      <h3>495137142</h3>
					    </div>
					  </li>
					</ul>
				</div>

				<div style="margin-left:160px;">
					<ul class="thumbnails">
					  
					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/tencent_weibo.png" alt="">
					      <h3><a href="http://t.qq.com/rayrui" target="_blank">http://t.qq.com/rayrui</a></h3>
					    </div>
					  </li>

					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/sina_weibo.png" alt="">
					      <h3><a href="http://weibo.com/rayruilee" target="_blank">http://weibo.com/rayruilee</a></h3>
					    </div>
					  </li>
					  <li class="span4">
					    <div class="thumbnail">
					      <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/linkedin.png" alt="">
					      <h3> rui lee</h3>
					    </div>
					  </li>

					</ul>
				</div>				
				<?php //comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
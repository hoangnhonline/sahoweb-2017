<div id="f-dt">
	<div class="container">
		<h2 class="dtac-t"></h2>
		<p class="dtac-des"></p>
			
		<ul class="owl-carousel owl-theme owl-loaded webs dtac" data-items="5" data-nav="true" data-dots="false" data-margin="0" data-loop="true"> 
		<?php $dvw = array('post_type'=>'nv', 'posts_per_page'=>-1);
				$loops = new wp_query($dvw); while($loops -> have_posts()): $loops -> the_post();?>
			<li>
				<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				<div class="thumbs">
				<?php if(has_post_thumbnail()){?>
					<?php the_post_thumbnail();?>
				<?php }else{?>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/no-img.png"/>
				<?php };?>
				</div>
				<h3>
					<?php the_title();?>
				</h3>
				<span style="color:#666"><?php the_content();?></span>
				</a>
			</li>
		<?php endwhile;?>
		</ul>

	
	</div>
</div>
<?php dynamic_sidebar('footer');?>
<?php dynamic_sidebar('header');?>
	<style>
	header{
		display:inline-block
	}
	</style>
	<a class="backTOP" href="javascript:;"></a>
<script src="<?php echo get_template_directory_uri();?>/assets/js/single.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/sli.js"></script>
<script src="<?php echo get_template_directory_uri();?>/assets/js/common.js"></script>

<?php wp_footer();?>

</body></html>

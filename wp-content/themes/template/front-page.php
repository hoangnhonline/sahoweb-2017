<?php get_header();?>
<?php echo do_shortcode('[metaslider id=34]');?>
<div class="paragraph">
<main class="container">
<h2 class="page-title"><span><?php echo get_cat_name(13);?></span></h2>
<?php if(category_description(13)){?>
<p style="color: #8;
    text-align: center;
    max-width: 990px;
margin: 20px auto;"><?php echo category_description(13);?></p><?php };?>

<ul class="dv">
<?php $dv = array('post_type'=>'post', 'posts_per_page'=>3, 'cat'=>13);
		$loop = new wp_query($dv); while($loop -> have_posts()): $loop -> the_post();?>
<li>
<div>
	<h3><?php the_title();?></h3>
	<?php if(get_post_meta( get_the_ID(), 'Giá', true)){ ?>
		<b><?php echo get_post_meta( get_the_ID(), 'Giá', true);?></b>
	<?php };?>
	<div style="border:0px;height:176px;overflow:hidden;text-align:left"><?php the_excerpt();?></div>
	<a href="<?php the_permalink();?>">Xem tiếp <i class="fa fa-arrow-circle-o-right"></i></a>
</div>
</li>
<?php endwhile;?>
</ul>

</main>

<div style="display:inline-block;width:100%;background:url(<?php echo get_template_directory_uri();?>/assets/images/khung-nen.png)no-repeat; background-size:cover;margin-top:30px;padding:45px 0" class="on">
<div class="container">
<h2 class="page-title page-title-2"><span style="color:#fff"><?php echo get_cat_name(9);?></span></h2>
<?php if(category_description(9)){?>
<p style="color: #fff;
    text-align: center;
    max-width: 990px;
margin: 20px auto;"><?php echo category_description(9);?></p><?php };?>
<ul class="owl-carousel owl-theme owl-loaded webs" data-items="6" data-nav="true" data-dots="false" data-margin="0" data-loop="true"> 
<?php $dvw = array('post_type'=>'post', 'posts_per_page'=>-1, 'cat'=>9);
		$loops = new wp_query($dvw); while($loops -> have_posts()): $loops -> the_post();?>
	<li>
		<a href="<?php the_permalink();?>">
		<div class="thumbs">
			<?php the_post_thumbnail();?>
		</div>
		<h3>
			<?php the_title();?>
		</h3>
		</a>
	</li>
<?php endwhile;?>
</ul>
</div>
</div>

<div class="container" style="padding:30px 10px">
	<?php while(have_posts()): the_post();?>
		<h2 class="page-title"><span><?php the_title();?></span></h2>
		<div class="content">
			<?php the_content();?>
		</div>
	<?php endwhile;?>
</div>
<?php echo do_shortcode('[metaslider id=35]');?>
<div class="container" style="padding:30px 15px">
<h2 class="page-title"><span class="SP"></span></h2>
<p style="
    text-align: center;
    max-width: 990px;
    margin: 20px auto;" class="SP-DES"></p>
	<ul class="products">
		<?php $products = array('post_type'=>'product', 'posts_per_page'=>9);
		$loopss = new wp_query($products); while($loopss -> have_posts()): $loopss -> the_post();?>
			<li>
			<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				<div style="display:inline-block;border:1px solid #aaaaaa">
					<div class="thumbs">
						<?php the_post_thumbnail();?>
					</div>
					<h3><?php the_title();?></h3>
				</div>
			</a>
			</li>
		<?php endwhile;?>
	</ul>
</div>


</div>

<?php get_footer();?>

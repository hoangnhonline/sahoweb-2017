<?php get_header();?>
<?php echo do_shortcode('[metaslider id=25]');?>
<main class="container">
<section>
<div class="page-title"><i class="fa fa-cogs"></i><span class="home"></span></div>
<?php while(have_posts()): the_post();?>
<?php the_content();?>
<?php endwhile;?>
<div class="page-title"><i class="fa fa-cogs"></i><span class="new"></span></div>
	<ul class="owl-carousel owl-theme owl-loaded products" data-items="4" data-nav="true" data-dots="false" data-margin="0" data-loop="true"> 
			
	</ul>
</section>
<?php include 'views/side.php';?>
</main>
<?php get_footer();?>

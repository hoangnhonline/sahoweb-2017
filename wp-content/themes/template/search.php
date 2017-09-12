<?php get_header(); ?>
<div class="paragraph">
<main class="container">
<section>
<?php echo bc();?>
<?php if(have_posts()){?>
<h1 class="page-title"><span><?php printf( __( 'Search: %s', '' ),get_search_query() ); ?></span></h1>
<ul class="products"> 
<?php while(have_posts()) : the_post();?>
<?php if ( $post->post_type == 'product' ) { ?>		
	<li>
		<a href="<?php the_permalink();?>">
			<div class="thumb">
			<?php if(get_post_meta( get_the_ID(), 'New', true)){ ?>
			<span class="pop"><?php echo get_post_meta( get_the_ID(), 'New', true);?></span>
			<?php };?>				
				<?php the_post_thumbnail();?>
			</div>
			<h3>
				<?php the_title();?>
			</h3>
		</a>
	</li>
<?php } endwhile;?>
	</ul>
	<?php page_nav();?>
<?php }else{ ?>
			<h1 class="page-title"><span><?php printf( __( 'Không tìm thấy: %s', '' ), get_search_query() ); ?></span></h1>
<?php } ?>

</section>
<?php include 'views/side.php';?>
</main>
</div>
<?php get_footer();

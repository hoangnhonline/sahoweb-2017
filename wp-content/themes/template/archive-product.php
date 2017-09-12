<?php get_header(); ?>
<div style="width:100%;display:inline-block; background: url(<?php echo get_template_directory_uri();?>/assets/images/khung-breadcrum.png)no-repeat ; background-size:cover; padding:20px 0">
<div class="container">
<?php echo bc();?>
</div>
</div>
<main class="container">
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
<div class="paragraph">
<main class="container">
<?php 
    $terms = get_the_terms( $idCur, 'product_cat' );
      $cateID = $terms[0]->term_id;?>
<h1 class="page-title"><span><?php woocommerce_page_title(); ?></span></h1>
<p style="
    text-align: center;
    max-width: 990px;
    margin: 20px auto;">	<?php 
echo htmlspecialchars_decode($terms[0]->description) ;
;?> </p>
<ul class="products"> 
<?php if(have_posts()):?>
<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>
			<?php woocommerce_product_loop_end(); ?>
<?php while(have_posts()) : the_post();?>
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
	<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
	</ul>
	<?php page_nav();?>

</main>
</div>
<style>
.page-title:after{
	content:'';
	background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;

}
</style>
<?php get_footer(); ?>

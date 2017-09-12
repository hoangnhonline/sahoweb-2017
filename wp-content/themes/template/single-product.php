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
<?php while(have_posts()): the_post();?>
<h1 class="page-title" style="margin-bottom:25px"><span><?php the_title(); ?></span></h1>

                            <div class="gallery">

	<div class="content short"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ;?></div>
	Thiết bị hỗ trợ:<br>
<br>
<img class="mouse-over" src="http://iweb247.vn/wp-content/themes/iweb247/images/phone_dark.png" width="13" height="22" alt="">
<img class="mouse-over" src="http://iweb247.vn/wp-content/themes/iweb247/images/tablet_dark.png" width="17" height="22" alt="">
<img class="mouse-over" src="http://iweb247.vn/wp-content/themes/iweb247/images/desktop_dark.png" width="40" height="22" alt="">
<br><br>
Liên hệ:<br>
<span class="phone" style="color:#ff6600;font-weight:700">
0909 58 57 49 (Mr. Sang)</span>
<br><br>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div class='addthis_toolbox addthis_default_style'>
<a class='addthis_button_facebook_like' data-href="<?php the_permalink();?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></a>
<a class='addthis_button_google_plusone' g:plusone:size='medium'></a>
<a class='addthis_button_tweet'></a>
<a class='addthis_button_tumblr'></a>
<a class='addthis_button_digg'></a>
<a class='addthis_button_delicious'></a>
<a class='addthis_button_stumbleupon'></a>
<a class='addthis_button_reddit'></a>
<a class='addthis_button_diigo'></a>
</div>
<script src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d7960129197ed7' type='text/javascript'></script><br>
<?php if(get_post_meta( get_the_ID(), 'Link demo', true)){?>
	<a class="view" style="    padding: 7px 35px;
    background: #ff6600;
    color: #fff;
    border-radius: 10px 0;" href="<?php echo site_url();?>/demo?url=<?php echo get_post_meta( get_the_ID(), 'Link demo', true);?>">Xem giao diện</a>
<?php };?>
                            </div>
<div class="nd">
	<?php the_post_thumbnail();?>
  </div>
		<div style="display:inline-block;margin: 20px 0;width:100%;
    padding-top: 20px; background:#f1f1f1;border:1px dashed #a9a9a9;    padding: 15px;">
			<div class="content">
				<?php the_content();?>
			</div>

	</div>
             
 
  <?php endwhile;?> 
  
	<h4 class="page-title relate"><span>SẢN PHẨM LIÊN QUAN</span></h4>
<div style="display:inline-block;width:100%" class="rel-nd">
<ul class="owl-carousel owl-theme owl-loaded products" data-items="3" data-nav="true" data-dots="false" data-margin="0" data-loop="true"> 
											<?php 
 global $product;
 $related = $product->get_related(20); 
    $args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => 20,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );
$products                    = new WP_Query( $args );
  if(have_posts()):  while ( $products->have_posts() ) : $products->the_post(); 
?>
			<li style="width:auto!important">
			<a href="<?php the_permalink();?>" title="<?php the_title();?>">
				<div style="display:inline-block;border:1px solid #aaaaaa">
					<div class="thumbs">
						<?php the_post_thumbnail();?>
					</div>
					<h3><?php the_title();?></h3>
				</div>
			</a>
			</li>
<?php   endwhile; endif?>
	</ul>
	</div>
	
</main>
</div>
<style>
.page-title:after{
	content:'';
	background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;

}
</style>
<?php get_footer(); ?>

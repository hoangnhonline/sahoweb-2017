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
<section>
<?php while(have_posts()): the_post();?>
<h1 class="page-title" style="text-align:left;"><span><?php the_title();?></span></h1>
<div class="content">
<?php the_content();?>
<?php $tags = get_the_tags();
$html = '<ul class="tags">';
foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
             
    $html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a></li>";
}
$html .= '</ul>';
echo $html; ?>
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
<script src='//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d7960129197ed7' type='text/javascript'></script>
</div>
<?php endwhile;?>
<h1 class="page-title" style="text-align:left;"><span>Tin liên quan</span></h1>
<div class="catdiv" style="display:inline-block;width:100%">
<ul class="cat-rel">
<?php $exc = get_the_ID();
$cats = get_the_category($post->ID);
$exc = $wp_query->post->ID;
$args = array('posts_per_page'=> -1, 'orderby' => 'rand', 'cat'=>$cats[0]->term_id );
$loop = new wp_query($args);
while($loop -> have_posts()) : $loop -> the_post();
if($exc != get_the_ID()){?>

<li>
<a href="<?php the_permalink();?>">
<span class="fa fa-lightbulb-o"></span>
<?php the_title();?>
</a>
</li>

<?php }endwhile;?>
</ul>

	</div>	
</section>
<?php include 'views/side.php';?>
</main>
</div>
<?php get_footer(); ?>

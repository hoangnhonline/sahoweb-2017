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
<h1 class="page-title" style="text-align:left;"><span><?php single_cat_title();?></span></h1>
<ul class="cat">
<?php while(have_posts()): the_post();?>
<li>
<a href="<?php the_permalink();?>">
<div class="thumb">
<?php the_post_thumbnail();?>
</div>
</a>
<a href="<?php the_permalink();?>">
<div class="tomtat">
<h3><?php the_title();?></h3>
<span style="color:#999999"><span class="fa fa-calendar"></span> <?php echo get_the_date();?></span>
<?php the_excerpt();?>
</div>
</a>
</li>
<?php endwhile;?>
</ul>
	<?php page_nav();?>
</section>
<?php include 'views/side.php';?>
</main>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>
<div class="paragraph">
<main class="container">
<section>
<?php echo bc();?>
<h1 class="page-title"><span><?php the_title();?></span></h1>
<div class="content">
<?php while(have_posts()): the_post();?>
<?php the_content();?>
<?php endwhile;?>
</div>
<?php echo do_shortcode('[contact-form-7 id="4" title="Liên hệ"]');?>
</section>
<?php include 'views/side.php';?>
</main>
</div>
<?php get_footer(); ?>

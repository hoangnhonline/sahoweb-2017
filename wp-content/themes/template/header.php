<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head();?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/owl.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/sli.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
</head>
<body <?php body_class();?>>
	<header>
		<div class="container">
			<?php if(!is_front_page()){?>
			<div class="logo">
				<a href="<?php echo site_url();?>" title="<?php echo get_bloginfo('name');?>">
				<?php echo do_shortcode('[metaslider id=33]');?>
				</a>
			</div>
			<?php }else{ ?>
			<h1 class="logo">
				<a href="<?php echo site_url();?>" title="<?php echo get_bloginfo('name');?>">
				<?php echo do_shortcode('[metaslider id=33]');?>
				</a>
			</h1>
			<?php };?>
			<nav class="menu">
				<i class="fa fa-align-justify"></i>
				<?php wp_nav_menu(array('theme_location' => 'menu'));?>
			</nav>
		</div>
	</header>
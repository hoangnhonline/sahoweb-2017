<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.ico" type="image/x-icon"/>
	<?php wp_head();?>	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
	<style type="text/css">
		.page-title:after{			
			<?php if(is_front_page()){?>
			background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;
			<?php }else{?>
			background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat left;
			<?php };?>			
		}
		.page-title-2:after{		
			background: url(<?php echo get_template_directory_uri();?>/assets/images/line-2.png)no-repeat center !important;
		}
		.title-cat-home:after{		
			background:url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;			
		}	
		.page-title-home:after{		
		    background: url(<?php echo get_template_directory_uri();?>/assets/images/line.png)no-repeat center;		    
		}
		.ft:after{
		    background: url(<?php echo get_template_directory_uri();?>/assets/images/line-3.png)no-repeat center!important;
		}
		.backTOP{
			background:url(<?php echo get_template_directory_uri();?>/assets/images/top.png);			
		}
	</style>
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

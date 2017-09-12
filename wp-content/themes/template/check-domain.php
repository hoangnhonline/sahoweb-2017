

<?php 
/*
** Template name: Check domain
*/
get_header(); ?>
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

<div style="width:100%;display:inline-block; background: url(<?php echo get_template_directory_uri();?>/assets/images/khung-domain.png)no-repeat ; background-size:cover; padding:20px">

<?php while(have_posts()): the_post();?>
<h1 class="page-title" style="text-align:left;"><span><?php the_title();?></span></h1>
<div class="content">
<?php the_content();?>
</div>
<?php endwhile;?>
<div class="form">
<input type="text" style="    border: 1px solid #ff6600;
    padding: 9px 15px;
    width: 90%;
    float: left;" placeholder="Nhập tên domain muốn kiểm tra"/>
<button style="background: #ff6600;
    padding: 9px 15px;
    border: 1px solid #ff6600;
    color: #fff;
    width: 10%;">Kiểm tra</button>
</div>

</div>
<br><br>
<table width="100%">
<tbody>
<tr>
<td style="color:#ff6600;width:80%"><i class="fa fa-check-circle-o"></i> Domain.vn</td>
<td style="background:#ff6600;padding:8px 25px;color:#fff;text-align:center">Liên hệ đăng ký</td>
</tr>
</table>


</section>
<?php include 'views/side.php';?>
</main>
</div>
<?php get_footer(); ?>

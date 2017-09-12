<?php
/*
** Template name: liên kết
*/;?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head();?>
<style>
.hoang2 a{
	color:#343434 !important;
}
.hoang2 iframe{
	display:none;
}
.hoang iframe{
	width:100%;
	height:100%;
		    margin: -29px auto 0px auto;
}
body{
	overflow:hidden;
	margin:0;
	border:none;
}

.hoang{
	text-align:center;
		position:relative;
    top: 16px;
    padding-top: 13px;
}
.st-content{
	overflow-y:none;
}
.panel,.panel span,.panel a {
color:#fff;
text-decoration:none;
}
#device a{
	color:#fff
}
html{
	margin:0!important
}
@media all and (min-width:986px){
#device {
    font-family: arial;
    display: inline-block;
    width: 100%;
}
}
@media all and (max-width:985px){
#device {
    background: #183544;
    font-family: arial;
    display: inline-block;
    width: 100%;
}
}
.mf30 {
    margin-left: 30px;
}
.panel span {
    position: relative;
    top: 1px;
    margin-right: 10px;
}
#desktop {
    border-radius: 3px 0px 0px 3px;
}
.panel a {
   
    display: inline-block;
    margin: 12px -4px 12px 0px;
    padding: 6px 14px;
    vertical-align: middle;
}
#tablet {
    border-left: 1px solid #666666;
    border-right: 1px solid #666666;
}
#phone {
    border-radius: 0px 3px 3px 0px;
}
.panel span {
    position: relative;
    top: 1px;
    margin-right: 10px;
}
.panel span.panel_closer {
    position: absolute;
    right: 5px;
    top: 5px;
    cursor: pointer;
}
.fa-2x {
    font-size: 2em;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.fa-remove:before, .fa-close:before, .fa-times:before {
    content: "\f00d";
}
*:before, *:after {
    box-sizing: border-box;
}
.mouse{
	display:none;
}
.panel #desktop:hover{
	background: gainsboro;
}
.panel #tablet:hover{
	background: gainsboro;
}
.panel #phone:hover{
	background: gainsboro;
}
.widget{
	display:none;
}
.selected{
	background:gainsboro;
}
.ttt{
	    display: inline-block;
    text-align: center;
    width: 100%;
    position: absolute;
    left: 0;
    padding: 17px 0;
}

#metaslider_39 .slides{
	margin:0
}
@media(max-width:570px){
	.slides img{
		width:65%;
		height:auto
	}
	.ttt {
    display: inline-block;
    text-align: center;
    width: 50%;
    position: absolute;
    right: 0;
	left:inherit;
    padding: 17px 0;
}
}
</style>
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
$(window).ready(function(){
	$('#desktop').click(function(){
		$('.hoang iframe').animate({
			width:"100%",
		});
		$('#desktop').addClass('selected');
		$('#tablet').removeClass();
		$('#phone').removeClass();
	});
	$('#tablet').click(function(){
		$('.hoang iframe').animate({
			width:"66%",
		});
		$('#tablet').addClass('selected');
		$('#desktop').removeClass();
		$('#phone').removeClass();
	});
	$('#phone').click(function(){
		$('.hoang iframe').animate({
			width:"33%",
		});
		$('#phone').addClass('selected');
			$('#tablet').removeClass();
		$('#desktop').removeClass();
	});
	$('.panel_closer').click(function(){
		$('#device').fadeOut();
	});
	$('iframe').css('height',$(window).height()-120);
	var name = localStorage.getItem("name");
	var phone = localStorage.getItem("phone");
	$('.hoang2').html(name);
	$('.hhh').attr("href", "tel:" + phone);
	$('.hhh').html(phone);
});
</script>
</head>
<body>
<div class="panel"> 
<div id="device" class="device" style="list-style:none;">
<h1 style="float:left;top: 0px;
    position: relative;margin:0;
    z-index: 99;
	"><a href="<?php echo site_url();?>">
						<img src="http://iweb247.vn/wp-content/uploads/logo/logo.png" alt="" title="">
	
			</a>
</h1>
<div class="ttt"><div class="hoang2">

</div>
<span style="color:#fff;    display: inline-block;">
<div style="    text-align: center;
    display: inline-block;">
<span style="top:20px;margin-left:30px;float:left;color:#000"> Chọn thiết bị xem: </span>

<a style="float:left;" id="desktop" class="active " title="Xem web trên máy tính" href="#">
<img class="mouse-over" src="http://iweb247.vn/wp-content/themes/iweb247/images/desktop_dark.png" width="40" height="22" alt=""></a> 

<a id="tablet" href="#" style="float:left;" title="Xem web trên máy tính bảng" class="">
<img class="mouse-over" src="http://iweb247.vn/wp-content/themes/iweb247/images/tablet_dark.png" width="17" height="22" alt=""></a>
<a id="phone" style="float:left;" title="Xem web trên điện thoại di động" href="#">
<img class="mouse-over" src="http://iweb247.vn/wp-content/themes/iweb247/images/phone_dark.png" width="13" height="22" alt=""></a>
</div>
</span>

<span style="float:left;font-size: 43px;color:#343434;font-weight:700; top: 17px;
    right: 17px;" class="panel_closer">X</span>
</div>			

</div>


		
						<div class="hoang"><iframe src="<?php echo $_GET['url'];?>"></iframe></div>
					
				</div>
				</body>
				</html>
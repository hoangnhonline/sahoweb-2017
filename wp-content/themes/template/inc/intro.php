<?php
add_action('widgets_init', create_function('', "register_widget('head');"));
class head extends WP_Widget {

	function head() {
		$widget_ops = array( 'classname' => 'head-edit', 'mota' => __('header', 'genesis') );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'head-edit' );
		$this->WP_Widget( 'head-edit', __('header', 'genesis'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
					'tieude1' => '',
			'hotline' => '',
			'tieude2' => '',
			'time' => '',
			'tieude3' => '',
			'mail' => '',
			'fb' => '',
			'gg' => '',
			'youtube' => '',
			'twitter' => ''
		) );

			$gt=$before_widget;
			if (!empty($instance['title']))
				$gt=$gt.$before_title . apply_filters('widget_title', $instance['title']) . $after_title;
	$gt=$gt.'
<div class="detail">
<strong><a href="tel:'.$instance['hotline'].'">'.$instance['hotline'].'</a></strong>
</div>
'; 
	global $post;
	$dk=true;
	$gt=$gt.$after_widget;
	if ($dk)
		echo $gt;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	//Hien thi form cap nhat widget
	function form($instance) {

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
					'tieude1' => '',
			'hotline' => '',
			'tieude2' => '',
			'time' => '',
			'tieude3' => '',
			'mail' => '',
			'fb' => '',
			'gg' => '',
			'youtube' => '',
			'twitter' => ''
		) );

?>
	<p><label for="<?php echo $this->get_field_id('hotline'); ?>"><?php _e('Hotline', 'genesis'); ?>:</label>
		<input style="width:95%" id="<?php echo $this->get_field_id('hotline'); ?>" name="<?php echo $this->get_field_name('hotline'); ?>" value="<?php echo esc_attr( $instance['hotline'] ); ?>"/></p>
		<?php
	}
}
?>
<?php
add_action('widgets_init', create_function('', "register_widget('social');"));
class social extends WP_Widget {

	function social() {
		$widget_ops = array( 'classname' => 'social-edit', 'mota' => __('social edit', 'genesis') );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'social-edit' );
		$this->WP_Widget( 'social-edit', __('tuvan', 'genesis'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'u' => '',
			'u1' => '',
			'u2' => '',
			'phone' => '',
			'phone2' => '',
			'phone3' => ''
		) );

			$gt=$before_widget;
			if (!empty($instance['title']))
				$gt=$gt.$before_title . apply_filters('widget_title', $instance['title']) . $after_title;
	$gt=$gt.'
<div class="conta"><strong style="color:#018bbc;font-weight:600"><i style="padding-right:12px" class="fa fa-user"></i><b class="cont">'.$instance['u'].'</b></strong><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['phone'].'</i><br>
</div>
<div class="conta"><strong style="color:#018bbc;font-weight:600"><i style="padding-right:12px" class="fa fa-user"></i><b class="cont">'.$instance['u2'].'</b></strong><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['phone2'].'</i><br>
</div>
<div class="conta">
<strong style="color:#018bbc;font-weight:600"><i style="padding-right:12px" class="fa fa-user"></i><b class="cont">'.$instance['u3'].'</b></strong><br>
<i style="    padding-left: 27px;
    display: inline-block;">'.$instance['phone3'].'</i><br>
	</div>
';
	global $post;
	$dk=true;
	$gt=$gt.$after_widget;
	if ($dk)
		echo $gt;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	//Hien thi form cap nhat widget
	function form($instance) {

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'tv' => '',
			'kd' => '',
			'phone' => '',
			'e' => '',
			'phone2' => '',
			'e2' => ''
		) );

?>	
		<p><label for="<?php echo $this->get_field_id('u'); ?>"><?php _e('1', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('u'); ?>" name="<?php echo $this->get_field_name('u'); ?>" value="<?php echo esc_attr( $instance['u'] ); ?>"/>
		<input style="width:95%;" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" value="<?php echo esc_attr( $instance['phone'] ); ?>"/></p>

		<p><label for="<?php echo $this->get_field_id('u2'); ?>"><?php _e('2', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('u2'); ?>" name="<?php echo $this->get_field_name('u2'); ?>" value="<?php echo esc_attr( $instance['u2'] ); ?>"/>
		<input style="width:95%;" id="<?php echo $this->get_field_id('phone2'); ?>" name="<?php echo $this->get_field_name('phone2'); ?>" value="<?php echo esc_attr( $instance['phone2'] ); ?>"/></p>

		<p><label for="<?php echo $this->get_field_id('u3'); ?>"><?php _e('3', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('u3'); ?>" name="<?php echo $this->get_field_name('u3'); ?>" value="<?php echo esc_attr( $instance['u3'] ); ?>"/>
		<input style="width:95%;" id="<?php echo $this->get_field_id('phone3'); ?>" name="<?php echo $this->get_field_name('phone3'); ?>" value="<?php echo esc_attr( $instance['phone3'] ); ?>"/></p>
		<?php
	}
}
?>
<?php
add_action('widgets_init', create_function('', "register_widget('footer');"));
class footer extends WP_Widget {

	function footer() {
		$widget_ops = array( 'classname' => 'footer-edit', 'mota' => __('footer edit', 'genesis') );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'footer-edit' );
		$this->WP_Widget( 'footer-edit', __('Tùy chỉnh', 'genesis'), $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'about' => '',
			'chat' => '',
			'text' => '',
			'lh' => '',
			'dm' => '',
						'sp-t' => '',
			'sp-nd' => '',
						'dtac-t' => '',
			'dtac-nd' => ''
		) );

			$gt=$before_widget;
			if (!empty($instance['title']))
				$gt=$gt.$before_title . apply_filters('widget_title', $instance['title']) . $after_title;
	$gt=$gt.'	
	<footer>
<div class="container">
	<div class="info">
<strong class="str">'.$instance['lh'].'</strong><br>
'.$instance['about'].'
</div>
<div class="info">
<div class="fb-page" height="260" width="480" data-href="'.$instance['chat'].'" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
</div>
</div>
</footer>
<div class="text">'.$instance['text'].'</div>
<div class="fbchatbox hidden-xs" style="position:fixed;right:5px;bottom:0px;z-index:9999">
		<div class="fb-page fb-page1" data-href="'.$instance['chat'].'" data-small-header="true" data-adapt-container-width="false" data-height="300" data-width="300" data-hide-cover="true" data-show-facepile="true" data-show-posts="false" data-tabs="messages"><div class="fb-xfbml-parse-ignore"></div></div>
		<span id="closefbchat" style="white-space: nowrap;
    position: absolute;
    right: 2px;
    bottom: 0px;
    padding: 5px 25px;
    background: #0D97FF;
    color: rgb(255, 255, 255);
    cursor: pointer;
    border-radius: 4px 4px 0 0;    box-shadow: 3px 0px 7px -2px;"></span> 
</div>	
<script>
jQuery.noConflict();
jQuery(document).ready(function($){
	$(".dm").text("'.$instance['dm'].'");
	$(".SP").text("'.$instance['sp-t'].'");
	$(".SP-DES").html("'.$instance['sp-nd'].'");
	$(".dtac-t").text("'.$instance['dtac-t'].'");
	$(".dtac-des").html("'.$instance['dtac-nd'].'");
});
</script>
';
	global $post;
	$dk=true;
	$gt=$gt.$after_widget;
	if ($dk)
		echo $gt;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	//Hien thi form cap nhat widget
	function form($instance) {

		$instance = wp_parse_args( (array)$instance, array(
			'title' => '',
			'about' => '',
			'chat' => '',
			'text' => '',
			'lh' => '',
			'dm' => '',
			'sp-t' => '',
			'sp-nd' => '',
			'dtac-t' => '',
			'dtac-nd' => ''
		) );

?><p><label><?php _e('HOME SP', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('sp-t'); ?>" name="<?php echo $this->get_field_name('sp-t'); ?>" value="<?php echo esc_attr( $instance['sp-t'] ); ?>"/>
				<textarea style="width:95%;height:120px" id="<?php echo $this->get_field_id('sp-nd'); ?>" name="<?php echo $this->get_field_name('sp-nd'); ?>"><?php echo esc_attr( $instance['sp-nd'] ); ?></textarea>
		</p>
		 <p><label><?php _e('Đối tác', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('dtac-t'); ?>" name="<?php echo $this->get_field_name('dtac-t'); ?>" value="<?php echo esc_attr( $instance['dtac-t'] ); ?>"/>
				<textarea style="width:95%;height:120px" id="<?php echo $this->get_field_id('dtac-nd'); ?>" name="<?php echo $this->get_field_name('dtac-nd'); ?>"><?php echo esc_attr( $instance['dtac-nd'] ); ?></textarea>
		</p>
	<p><label><?php _e('Footer', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('lh'); ?>" name="<?php echo $this->get_field_name('lh'); ?>" value="<?php echo esc_attr( $instance['lh'] ); ?>"/>
				<textarea style="width:95%;height:120px" id="<?php echo $this->get_field_id('about'); ?>" name="<?php echo $this->get_field_name('about'); ?>"><?php echo esc_attr( $instance['about'] ); ?></textarea>
		</p>
		
		<p><label for="<?php echo $this->get_field_id('dm'); ?>"><?php _e('Tiêu đề sidebar', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('dm'); ?>" name="<?php echo $this->get_field_name('dm'); ?>" value="<?php echo esc_attr( $instance['dm'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('chat'); ?>"><?php _e('Chat', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('chat'); ?>" name="<?php echo $this->get_field_name('chat'); ?>" value="<?php echo esc_attr( $instance['chat'] ); ?>"/></p>
		
		<p><label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('End', 'genesis'); ?>:</label>
		<input style="width:95%;" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" value="<?php echo esc_attr( $instance['text'] ); ?>"/></p>
		<?php
	}
}
?>

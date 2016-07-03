<?php
/*
Plugin name: Test - widget
Author: Phong dat
Plugin URI: http://phongdat.com
Description: Huong dan tu tao widget
Version: 1.0.0
*/

// 6 buoc tu tao widget
//b1 khoi tao widget
add_action('widgets_init','create_tp_widget');
function create_tp_widget(){
	register_widget('tp_widget');
}

//b2 tao class ke thua WP_Widget va cac phuong thuc bat buoc
class tp_widget extends WP_Widget {

	//b3 phuong thuc khoi tao
	function __construct(){ //khai bao id, va ten widget
		parent::__construct(
			'widgetid',
			'widgetname',
			array(
				'description' => 'Tu  tao widget co ban'
				));


	}
	//b4 tao form option
	function form($instance){
		parent::form($instance);
		//tao bien mac dinh cho form
		$default = array(
			'title' => 'Day la widget randompost'
			);
		//gop mang $default sang $instance
		$instance = wp_parse_args( (array) $instance, $default);
		//tao bien gia tri cho form
		$title = esc_attr( $instance['title']);
		//Hien thi form ra ngoai
		echo ('Nhap tieu de: <input class="widgetfat" type="text" name="'. $this->get_field_name('title') .'" value="'.$title .'" />');

	}
	//b5 luu form
	function update($new_instance, $old_instance){

	}
	//b6 show widget
	function widget($args, $instance){

	}





}



?>
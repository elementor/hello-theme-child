<?php 
if( function_exists('acf_register_block_type') ):

acf_register_block_type(array(
	'name' => 'service-slider-block',
	'title' => 'item-slider-block',
	'description' => '',
	'category' => 'common',
	'keywords' => array(
		0 => 'item',
		1 => 'slider',
		2 => 'widget',
		3 => 'block',
		4 => 'custom',
		5 => 'service',
	),
	'post_types' => array(
	),
	'mode' => 'preview',
	'align' => 'center',
	'align_content' => NULL,
	'render_template' => 'inc/acf-blocks/item-slider.block.php',
	'render_callback' => '',
	'enqueue_style' => 'assets/css/item-slider-block.css',
	'enqueue_script' => '',
	'enqueue_assets' => '',
	'icon' => 'dashicons-block-default',
	'supports' => array(
		'align' => true,
		'mode' => true,
		'multiple' => false,
		'jsx' => false,
		'align_content' => false,
		'anchor' => false,
	),
));

endif;

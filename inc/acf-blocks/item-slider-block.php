<?php
/**
 * About Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   int|string $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'item-slider-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-section';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( !empty($block['mode']) ) {
    $className .= ' mode' . $block['mode'];
}

// Load values and assign defaults.
$heading = get_field('heading_text') ?: 'Your Heading Here...';
$description = get_field('descriptive_text') ?: 'This is the content text layer...';
$bg_opacity = get_field('background_opacity') ?: 'rgba(255,255,255,.7)';
$bg_image = get_field('background_image')['sizes']['large'] ?: 'https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png';

?>

<div class='container'>
	<div class='service-widget'>

		<div class='button-container'>
			<div id='button-one' class='button one'><i class='fas fa-hiking fa-7x'></i><h2>Service One</h2></div>
			<div id='button-two' class='button two'><i class='fas fa-tv fa-7x'></i><h2>Service Two</h2></div>
			<div id='button-three' class='button three'><i class='fas fa-mask fa-7x'></i><h2>Service Three</h2></div>
		</div>

		<div class='content-container'>
			<div id="content-one" class='content'>
				<div class='header'><h1>HEADER1</h1></div>
				<div class='body'><p>Interdum posuere lorem ipsum dolor sit amet consectetur. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Donec ac odio tempor orci dapibus ultrices in. Aenean pharetra magna ac placerat. Tristique senectus et netus et malesuada fames ac turpis. Viverra ipsum nunc aliquet bibendum enim. Sit amet aliquam id diam maecenas ultricies mi eget. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum.</p></div>
			</div>
						<div id="content-two" class='content hidden'>
				<div class='header'><h1>HEADER2</h1></div>
				<div class='body'><p>Interdum posuere lorem ipsum dolor sit amet consectetur. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Donec ac odio tempor orci dapibus ultrices in. Aenean pharetra magna ac placerat. Tristique senectus et netus et malesuada fames ac turpis. Viverra ipsum nunc aliquet bibendum enim. Sit amet aliquam id diam maecenas ultricies mi eget. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum.</p></div>
			</div>
						<div id="content-three" class='content hidden'>
				<div class='header'><h1>HEADER3</h1></div>
				<div class='body'><p>Interdum posuere lorem ipsum dolor sit amet consectetur. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Donec ac odio tempor orci dapibus ultrices in. Aenean pharetra magna ac placerat. Tristique senectus et netus et malesuada fames ac turpis. Viverra ipsum nunc aliquet bibendum enim. Sit amet aliquam id diam maecenas ultricies mi eget. Fermentum et sollicitudin ac orci phasellus egestas tellus rutrum.</p></div>
			</div>
		</div>
	</div>
</div>

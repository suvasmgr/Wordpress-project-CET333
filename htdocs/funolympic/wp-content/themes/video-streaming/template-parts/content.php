<?php
/**
 * The template part for displaying content
 * @package Video Streaming
 * @subpackage video_streaming
 * @since 1.0
 */
?>

<?php $video_streaming_theme_lay = get_theme_mod( 'video_streaming_post_layouts','Layout 2');
if($video_streaming_theme_lay == 'Layout 1'){ 
	get_template_part('template-parts/Post-layouts/layout1'); 
}else if($video_streaming_theme_lay == 'Layout 2'){ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}else if($video_streaming_theme_lay == 'Layout 3'){ 
	get_template_part('template-parts/Post-layouts/layout3'); 
}else{ 
	get_template_part('template-parts/Post-layouts/layout2'); 
}
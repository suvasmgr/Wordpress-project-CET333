<?php

add_action( 'admin_menu', 'video_streaming_gettingstarted' );
function video_streaming_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'video-streaming'), esc_html__('About Theme', 'video-streaming'), 'edit_theme_options', 'video-streaming-guide-page', 'video_streaming_guide');   
}

function video_streaming_admin_theme_style() {
   wp_enqueue_style('video-streaming-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'video_streaming_admin_theme_style');

function video_streaming_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Video Streaming, you rock!', 'video-streaming' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional automobile website. Please Click on the link below to know the theme setup information.', 'video-streaming' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=video-streaming-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'video-streaming' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'video_streaming_notice');

/**
 * Theme Info Page
 */
function video_streaming_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'video-streaming' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Video Streaming', 'video-streaming' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'video-streaming' ); ?>	
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'video-streaming' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( VIDEO_STREAMING_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'video-streaming'); ?></a>
						<a href="<?php echo esc_url( VIDEO_STREAMING_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'video-streaming'); ?></a>
						<a href="<?php echo esc_url( VIDEO_STREAMING_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'video-streaming'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Video Streaming Theme', 'video-streaming' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'Video Streaming provides you with plenty of possibilities for creating a website for your video blog, a perfect gallery of videos for your favourite clips, a professional online portfolio, creative blog, creative design, news portal, podcast, video agency, travel blogs, guide videos, and much more creative ideas. It is built on a strong foundation, allowing you to create a fully functional and fully featured website. The Theme is totally configurable, SEO friendly, responsive, interactive, and has a faster page load time. The theme is well-designed and versatile, and it works well. It has a CTA button as well as clean code. Social networking icons have been included so that your potential customers do not miss out on essential information about your companys developments. The Video Streaming also includes a variety of customization options that are tailored to your interests and needs. This WordPress theme also has a testimonial section. WordPress Theme emphasizes the high-quality banner animation graphic, which is appealing and will entice any consumer the instant they land on your homepage. Because of its Bootstrap structure and versatility, this WordPress theme is adaptable, allowing your website to fit any screen size. It generates a bug-free, smooth-running website by using clean and secure code.', 'video-streaming' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','video-streaming'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','video-streaming'); ?></a> <?php esc_html_e( 'your website.','video-streaming'); ?> </li>
							<li><?php esc_html_e( 'Video Streaming','video-streaming'); ?> <a target="_blank" href="<?php echo esc_url( VIDEO_STREAMING_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','video-streaming'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','video-streaming'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','video-streaming'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'This Free Video Streaming WordPress theme is designed for a high-performance and well-functioning website. It is suitable for a wide variety of purposes such as video websites, gaming, streaming, video theme, video magazine, Vimeo, multimedia, video portal, video production, and many more. The theme has an energetic vibe to it, which appeals to customers or visitors. It contains the Bootstrap framework, which facilitates website development by offering a variety of tools and features on the theme. It is undeniably valuable since it is built using efficient, secure, and clean code. This WordPress theme has a translation feature, as well as a full, safe, and clean code. The has a testimonial box for a more prominent display of important comments.', 'video-streaming' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','video-streaming'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Car listing Shortcode with category','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Car listing Shortcode','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Multiple image feature for each property with slider.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Brand Listing Section','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Car Brand(categories) Option','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Car Tags(categories) Option','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Testimonial listing.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Testimonial shortcode.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Social icons widget.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Latest post with the image widget.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Live customize editor for the About US section.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Font Awesome integrated.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets.','video-streaming'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Well sanitized as per WordPress standards.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Allow to set site title, tagline, logo.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page.','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Footer Widgets & Editor style','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Gallery & Banner functionality','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Full-width Template','video-streaming'); ?></li>
										<li><?php esc_html_e( 'Custom Menu, Colors Editor','video-streaming'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','video-streaming'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( VIDEO_STREAMING_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','video-streaming'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( VIDEO_STREAMING_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','video-streaming'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','video-streaming'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','video-streaming'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','video-streaming'); ?></a> <?php esc_html_e( 'your website.','video-streaming'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','video-streaming'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( VIDEO_STREAMING_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','video-streaming'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( VIDEO_STREAMING_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','video-streaming'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','video-streaming'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( VIDEO_STREAMING_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'video-streaming'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>
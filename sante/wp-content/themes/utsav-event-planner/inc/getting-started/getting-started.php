<?php
//about theme info
add_action( 'admin_menu', 'utsav_event_planner_gettingstarted' );
function utsav_event_planner_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'utsav-event-planner'), esc_html__('About Theme', 'utsav-event-planner'), 'edit_theme_options', 'utsav_event_planner_guide', 'utsav_event_planner_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function utsav_event_planner_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'utsav_event_planner_admin_theme_style');

//guidline for about theme
function utsav_event_planner_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'utsav-event-planner' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Utsav Event Planner WordPress Theme', 'utsav-event-planner' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'utsav-event-planner' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'utsav-event-planner' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'utsav-event-planner' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'utsav-event-planner' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'utsav-event-planner' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'utsav-event-planner' ); ?> <a href="<?php echo esc_url( UTSAV_EVENT_PLANNER_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'utsav-event-planner' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Utsav event planner is an exotic WordPress theme for the celebration or any kind of event related to the marriage. It is also good for the grand events, bookings of parties, competition contest, tournament, game, meetings and much more. Since it came in the market, it has done well in the popularity charts and is a preferred one for the fixtures as well as meetings. Armed with some of the exclusive features suitable for business, this is multipurpose to the core and apart from that is highly responsive. It is a good one for the professional decorators and the event planners and is latest, elegant, user friendly and fine for the banquet mangers and also for the individuals as well as the agencies. It is good for the planners of special occasions and the credit goes to its classic features like call to action button, professionalism, Bootstrap framework, modern looks and much more. With Utsav events planner, an occasion becomes special and is an exclusive theme for birthdays and engagement parties as well as the anniversaries. It is a good one in case you are interested to open the wedding planning agency. It is not only alluring but stylish as well. ', 'utsav-event-planner')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Utsav Event Planner Theme', 'utsav-event-planner' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'utsav-event-planner'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( UTSAV_EVENT_PLANNER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'utsav-event-planner'); ?></a>
			<a href="<?php echo esc_url( UTSAV_EVENT_PLANNER_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'utsav-event-planner'); ?></a>
			<a href="<?php echo esc_url( UTSAV_EVENT_PLANNER_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'utsav-event-planner'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/utsav-event-planner.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'utsav-event-planner'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'utsav-event-planner'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'utsav-event-planner'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>
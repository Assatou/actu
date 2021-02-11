<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'utsav_event_planner_above_slider' ); ?>

<?php if( get_theme_mod('utsav_event_planner_slider_hide_show') != ''){ ?>
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $utsav_event_planner_slider_pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'utsav_event_planner_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $utsav_event_planner_slider_pages[] = $mod;
			        }
		      	}
		      	if( !empty($utsav_event_planner_slider_pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $utsav_event_planner_slider_pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?></a>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h1><?php the_title(); ?></h1>	      	
			            </div>
			            <div class="read-btn">
			              <a href="<?php the_permalink(); ?>" class="" title="<?php esc_attr_e( 'READ MORE', 'utsav-event-planner' ); ?>"><?php esc_html_e('READ MORE','utsav-event-planner'); ?>
			              </a>
				       	</div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section>
<?php }?>

<?php do_action('utsav_event_planner_below_slider'); ?>

<?php /*--We Arrange Section --*/?>
<?php if( get_theme_mod('utsav_event_planner_arrange_cat') != '' || get_theme_mod('utsav_event_planner_section_title') != '' ){ ?>
	<section id="our_service">
		<div class="container">
			<div class="service-box">
				<?php if( get_theme_mod('utsav_event_planner_section_title') != ''){ ?>
		    		<h2><?php echo esc_html(get_theme_mod('utsav_event_planner_section_title','')); ?></h2>
		    		<hr>
		    	<?php }?>
	            <div class="row">
		      		<?php $utsav_event_planner_catData1=  get_theme_mod('utsav_event_planner_arrange_cat'); 
		      		if($utsav_event_planner_catData1){ 
		      		$page_query = new WP_Query(array( 'category_name' => esc_html($utsav_event_planner_catData1 ,'utsav-event-planner')));?>
		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
		          			<div class="col-lg-3 col-md-6">
		          				<div class="content-topic">
							      	<?php the_post_thumbnail(); ?>
							      	<h3><?php the_title(); ?></h3>
							      	<p><?php $excerpt = get_the_excerpt(); echo esc_html( utsav_event_planner_string_limit_words( $excerpt,20 ) ); ?></p>
							      	<div class="cat-btn">
							      		<a href="<?php the_permalink(); ?>"><i class="fas fa-angle-right"></i></a>
		          					</div>
							    </div>    
							</div>	
		          		<?php endwhile; 
		          	wp_reset_postdata();
		          	}?>
	      		</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
<?php }?>

<?php do_action('utsav_event_planner_below_we_arrange_section'); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
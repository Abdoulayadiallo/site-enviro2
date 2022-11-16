<?php
/**
 *
 * @package Econature Lite
 */

get_header(); 


/*****************************
  ** Get Sider
*****************************/
if (!is_home() && is_front_page()) {

  $nature_hide_slider = get_theme_mod( 'nature_hide_slider', '1' );
  if( $nature_hide_slider == '' ){
    $nature_lite_pages = array();

    for( $sld=1; $sld<4; $sld++ ) {
      $getsld = absint( get_theme_mod( 'slide'.$sld ) );
      if ( 'page-none-selected' != $getsld ) {
        $nature_lite_pages[] = $getsld;
      }
    }

    if( !empty( $nature_lite_pages ) ) :

      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'page',
        'post__in' => $nature_lite_pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : 
      $sld = 7;
?>
<div id="theme-slider" class="nature-slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $nature_lite_slideno[] = $i;
          $nature_lite_slidetitle[] = get_the_title();
          $nature_lite_slidedesc[] = get_the_excerpt();
          $nature_lite_slidelink[] = esc_url(get_permalink());
          $image_id = get_post_thumbnail_id();
          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo $image_alt; ?>"/>
          <?php
          $getsld++;
        endwhile;
      ?>
    </div><!-- slider wraper -->
    <?php
      $k = 0;
      foreach( $nature_lite_slideno as $nature_lite_sln ){ ?>
      <div id="slidecaption<?php echo esc_attr( $nature_lite_sln ); ?>" class="nivo-html-caption">
        <div class="inner-caption">
          <h2><a href="<?php echo esc_url($nature_lite_slidelink[$k] ); ?>"><?php echo esc_html($nature_lite_slidetitle[$k] ); ?></a></h2>
          <p><?php echo esc_html($nature_lite_slidedesc[$k] ); ?></p>
          <?php if( !empty( get_theme_mod('slide_more',true) ) ){ ?>
          <a class="sliderbtn" href="<?php echo esc_url($nature_lite_slidelink[$k] ); ?>">
            <?php echo esc_html(get_theme_mod('slide_more',__('Read More','econature-lite')));?>
          </a>
          <?php } ?>
        </div><!-- inner caption -->
      </div>
      <?php $k++;
      wp_reset_postdata();
      }
    ?>
  </div><!-- slider -->
</div><!-- orphan slider -->
<?php endif;
    endif;
  }
}

/*****************************
  ** Get Why Us Section
*****************************/
get_template_part('template-parts/first','section');

/*****************************
  ** Get Wel come Section
*****************************/
get_template_part('template-parts/second','section');

?>

<div class="main-container">                                     
  <div class="content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
          <?php
            if ( have_posts() ) :
                // Start the Loop.
                while ( have_posts() ) : the_post();
                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content-page', get_post_format() );

                endwhile;
                // Previous/next post navigation.
                the_posts_pagination();
    	           wp_reset_postdata();
            else :
                // If no content, include the "No posts found" template.
                 get_template_part( 'no-results' );
            endif;
          ?>
        </div>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
  </div>
<?php get_footer(); ?>
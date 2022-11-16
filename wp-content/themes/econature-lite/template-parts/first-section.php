<?php
/**
 * The Featured Section for our theme.
 *
 * Display all information related to Featured section
 *
 * @package Econature Lite
*/

$hidefeat = get_theme_mod( 'nature_hide_fsec','1' );

if( $hidefeat == '' ){
    echo '<section class="featured-section"><div class="container">';

        $featmore = get_theme_mod('fsec_more');

        echo '<div class="flex-box">';
            for( $feat = 1; $feat<5; $feat++ ){
                if( get_theme_mod( 'fsec'.$feat,true ) !='' ){
                    $abtsecquery = new WP_Query( array( 'page_id' => get_theme_mod( 'fsec'.$feat ) ) );
                    while( $abtsecquery->have_posts() ) : $abtsecquery->the_post();
                        $shwthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
                        $image_id = get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        echo '<div class="col"><div class="feat-box"><div class="inner-feat-box">';
                            if( has_post_thumbnail() ) {
                              echo '<div class="feat-box-thumb"><img src="'.$shwthumb[0].'" alt="'.$image_alt.'"/></div><!-- feat box thumb -->';
                            }
                            echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3><p>'.get_the_excerpt().'</p>'.($featmore != '' ? '<a href="'.get_the_permalink().'" class="feat-more">'.$featmore.'</a>' : '').'';
                        echo '</div></div></div>';
                    endwhile; wp_reset_postdata();
                }
            }
    echo '</div></div></section>';
}
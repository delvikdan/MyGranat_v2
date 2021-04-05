<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mygranat
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="container pt-60">
       
       <div class="row">
          <div class="col-md-2 left-column">
            <h2>Блог</h2>
            <div class="blog-menu">
              <p>РУБРИКИ:</p>
              <ul>
              <?php        
              $args = array(
              'orderby' => 'name',
              'title_li' => ''
              );

              wp_list_categories($args);
              ?>  
              </ul>
            </div>
          </div> <!-- //col-md-2 -->
          
          <div class="col-md-10">
            <?php if ( have_posts() ) : ?>

            <?php

            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

            the_posts_navigation();

            else :

            get_template_part( 'template-parts/content', 'none' );

            endif; ?>
          </div> <!-- //col-md-10 -->
        </div> <!-- //row -->
      </div> <!-- //container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
          <?php
          while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', get_post_format() );

            //the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          endwhile; // End of the loop.
          ?>
          </div> <!-- //col-md-10 -->
        </div> <!-- //row -->
      </div> <!-- //container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

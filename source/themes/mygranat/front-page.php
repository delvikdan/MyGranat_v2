<?php
/*
Template Name: Front Page

*/

get_header(); ?>

  <main id="main" class="site-main" role="main">

    <div class="container pt-60">
      <div class="row">
        <div class="col-md-2 left-column">
          <img src="/source/themes/mygranat/assets/img/logo_name.svg" alt="Granat">
        </div>
        <!-- .col-md-2 -->

        <div class="col-md-8">

          <?php
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;
              endwhile; // End of the loop.
            ?>

        </div>
        <!-- .col-md-8 -->
      </div>
      <!-- .row -->

      <hr class="border-brick" />


      <div class="row">
        <div class="col-md-2 left-column">
          <h2>Потрфолио</h2>
        </div> <!-- .col-md-2 -->
        <div class="col-md-10">
          <div class="row bricks-wrapper">
            <div class="col-sm-4 padding-right-0">
              <div class="brick-1">
                  <a title='' href="#">
                    <span class="b-top"><img src="/source/themes/mygranat/assets/img/white_web_site_icon.png" alt="Web"> Разработка сайтов</span>
                    <span class="b-bottom">«Инок-Прайм» / редизайн сайта <img src="/source/themes/mygranat/assets/img/white_arrow_mini.png" alt=">"></span>
                  </a>
              </div>
            </div> <!-- .col-sm-4 -->
            <div class="col-sm-8 padding-left-0">
              <div class="brick-2">
                <a title='' href="#">
                  <span class="b-top"><img src="/source/themes/mygranat/assets/img/white_design_icon.png" alt="Design"> Дизайн</span>
                  <span class="b-bottom">«ShowBox Event Agency» / разработка логотипа <img src="/source/themes/mygranat/assets/img/white_arrow_mini.png" alt=">"></span>
                </a>              
              </div> 
              <div class="brick-3">
                <a title='' href="#">
                  <span class="b-top"><img src="/source/themes/mygranat/assets/img/white_web_site_icon.png" alt="Web"> Разработка сайтов</span>
                  <span class="b-bottom">«TrueDubbing Studio» / разработка сайта <img src="/source/themes/mygranat/assets/img/white_arrow_mini.png" alt=">"></span>
                </a>                
              </div>
            </div>  <!-- .col-sm-8 -->
          </div> <!-- .row .bricks-wrapper -->
        </div>  <!-- .col-md-10 -->
        <div class="col-md-12"><br><a title="" class="more" href="/portfolio/">все работы</a></div>
      </div>  <!-- .row -->
      
      
      
      <div class="row blog-wrapper">
        <div class="col-md-2 left-column">
          <h2>Блог</h2>
        </div>
        <div class="col-md-10">
        
          <?php $the_query = new WP_Query( 'posts_per_page=3' ); 
          while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          
          
          <div class="blog-item">
            <div class="article-title"><a title="" href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
            <div class="excerpt"><?php the_excerpt(__('(more…)')); ?></div>
            <a class='read-more' title="" href="<?php the_permalink() ?>"><img title="" src="/source/themes/mygranat/assets/img/arrow_mini.svg" alt=">"></a>
          </div>   
          <?php 
          endwhile; 
          wp_reset_postdata();
          ?>
           
          
        
      </div> <!-- //col-md-10 -->
      
      <div class="col-md-12"><a title="" class="more" href="/blog/">все записи</a></div>
      
    </div> <!-- .container -->


  </main>
  <!-- #main -->

  <?php
get_footer();
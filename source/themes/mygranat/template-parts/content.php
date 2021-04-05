<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mygranat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('about-item'); ?>>

  <div class="a-top">
      
      
      
      <?php if ( has_post_thumbnail() ) : ?>

      <?php the_post_thumbnail("thumbnail"); ?>

      <?php else : ?>

      <img class="size-thumbnail" src="/source/themes/mygranat/assets/img/noavatar.png" alt="<?php  the_title () ?>" />

      <?php endif; ?>
      
    <div class="entry-header a-headline">
      <div class="entry-meta">
        <?php mygranat_posted_on(); ?>
      </div><!-- .entry-meta -->
      <?php
      if ( is_single() ) :
        the_title( '<h1 class="entry-title">', '</h1>' );
      else :
        the_title( '<div class="entry-title name"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
      endif;

      if ( 'post' === get_post_type() ) : ?>

      <?php 
      endif; ?>
    </div><!-- .entry-header -->
	
  </div>
  
  
	<div class="entry-content a-text">
	  
	  
    <?php if ( is_home() or is_category() ) : ?>
     
      <?php the_excerpt(); ?>
       <?php if ( is_home() ) : ?>
	      <p class="post-category"><?php the_category(', '); ?></p>
	      <?php endif; ?>
	    
	    <?php else : ?>
	
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mygranat' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mygranat' ),
				'after'  => '</div>',
			) );
		?>
    
    <div class="entry-footer">
      
      
       <?php edit_post_link() ?>
     
      <?php // mygranat_entry_footer(); ?>
    </div><!-- .entry-footer -->
    
		<?php endif; ?>
		
	</div><!-- .entry-content -->


</article><!-- #post-## -->

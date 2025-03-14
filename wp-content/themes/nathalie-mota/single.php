<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nathalie_mota
 */

 /**Ce fichier et responsable de la mise en page et de l'affichages de chaque article.
  *  en-tête, contenu de l'article navigation entre les articles, commentaires et pied de page.   
  */

 get_header();
 ?>
 
 <main id="primary" class="site-main">
	 <div>
		 <h1>hello</h1>
	 </div>
 
	 <?php
	 while (have_posts()) :
		 the_post();
 
		 get_template_part('template-parts/content', get_post_type());
 
		 the_post_navigation(
			 array(
				 'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'nathalie_mota') . '</span> <span class="nav-title">%title</span>',
				 'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'nathalie_mota') . '</span> <span class="nav-title">%title</span>',
			 )
		 );
 
		 // If comments are open or we have at least one comment, load up the comment template.
		 if (comments_open() || get_comments_number()) :
			 comments_template();
		 endif;
 
	 endwhile; // End of the loop.
	 ?>
 
 </main><!-- #main -->
 
 <?php
 get_sidebar();
 get_footer();
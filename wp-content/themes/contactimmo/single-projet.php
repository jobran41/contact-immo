<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
                        
                    <div class="breadbrumb-produits" ><?php // seomix_content_breadcrumb(); ?></div>
                    
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'produit' ); ?>
                    
                                <?php
                                    //if(get('configuration_page_activer_navigation')):
                                       // echo produit_child_navigation();
                                    //endif;
                                ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
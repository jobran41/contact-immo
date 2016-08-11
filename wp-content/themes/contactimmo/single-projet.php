<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="main">		
    <div class="ci-header">
		<div class="container flextop">
	        <div class="ci-header-content">
	            <div class="search-form-container">
					<?php get_search_form(); ?>
				</div>
	        </div>
	        <div class="ci-header-content">
	            <div class="location">Votre agence à Colmar</div>
	            <div class="phone">03 89 24 42 40</div>
	        </div>
	        <div class="ci-header-content">
	            <a href="" class="signin">
	                <i class="fa fa-user"></i> 
	                S'identifier
	            </a>
	        </div>
		</div>
	</div>
	<div class="bgmenu">
	    <div class="container posheader" style="">
	    	<div class="header">
				<div class="row">
					<div class="col-xs-12">
						<a class="logo" href="<?php bloginfo("url");?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/Logo.png" alt=""></a>
						<nav class="navbar  ">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header hidden-lg hidden-md hidden-sm">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a class="navbar-brand" href="#">Awesome Theme</a>
						    </div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php 
									wp_nav_menu(array(
										'theme_location' => 'primary',
										'container' => false,
										'menu_class' => 'nav navbar-nav ',
										'walker' => new Walker_Nav_Primary()
										)
									);
								?>

							</div>
						</nav>
						<a href="" class="icon-menu"><img src="<?php bloginfo("stylesheet_directory");?>/images/side-icon.png" alt=""></a>
					</div>
				</div>
			</div>
	    </div>	
	</div>    
</div>
<section id="content" class="site-content">
	<div id="primary" role="main" class="container primary">
                    
                <div class="breadbrumb-produits" ><?php // seomix_content_breadcrumb(); ?></div>
                
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'projet' ); ?>
                
                            <?php
                                //if(get('configuration_page_activer_navigation')):
                                   // echo produit_child_navigation();
                                //endif;
                            ?>

			<?php // comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content container -->
</section><!-- #primary -->
	<footer>
	<div class="footerbottom">          
		<ul>
			<li>Copyright 2015 ContactImmo</li>
			<li>|</li>
			<li>Tous droits réservés</li>
			<li>| </li>
			<li>Mentions légales </li>
			<li> | </li>
			<li><a href="www.streamerz.com">Powred by Streamerz</a></li>
		</ul>
	</div>
</footer>
<?php get_footer(); ?>
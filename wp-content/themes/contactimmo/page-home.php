<?php get_header(); ?>
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
    <div class="container posheader" style="">
    	<div class="header">
			<div class="row">
				<div class="col-xs-12">
					<a class="logo" href="<?php bloginfo("url");?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/logo.png" alt=""></a>
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
	<div id="myCarousel" class="carousel slide fp-slide fp-table active" data-ride="carousel" style="width: 100%;">
		<!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			  </ol>
            <div class="carousel-inner" role="listbox">
              <?php $documents = new WP_Query(array(
				'post_type' => 'slide',
				)) ;?>
				<?php while ($documents->have_posts()) : $documents->the_post(); ?>
				<div class="item  ">
	                  <?php $image = get_field('image');
						    if( !empty($image) ): ?>
						        <img width="100%" height="" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
						<?php endif; ?> 
	              </div>
				<?php  endwhile; ?>
            </div>
            <a class=" slidparalaxleft" href="#myCarousel" role="button" data-slide="prev">
              <span class="" href=""></span>
            </a>
            <a class=" slidparalaxright" href="#myCarousel" role="button" data-slide="next">
              <span class="bx-next" href=""></span>
            </a>
            <div class="ci-text-hello">
                <p>entrez <span class="slidtext"> chez vous</span></p>
            </div>
      </div>
      <div class="ci-intro-bar">
	        <p>Neventore <span>Contact-Immo</span> et quasi architecto beatae vitae dicta sunt explicabo</p>
	        <a href="#">Entrer chez vous !</a>
	   </div>
</div>
<section class="monprojet">
	<div class="bgmonprojt">
		<div class="container">
		    <ul class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-5 mesprojet">
			    <?php $documents = new WP_Query(array(
					'post_type' => 'projet',
					'showposts' => 5
					)) ;?>
					<?php while ($documents->have_posts()) : $documents->the_post(); ?>
					<li>
						<a href="" class="blockprojet">
					    	<div class="panel-heading">
				                <span class="maisons">
				                	<?php $image = get_field('smallimg');
								    if( !empty($image) ): ?>
								        <img width="100%" height="" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
								    <?php endif; ?> 
				                </span>
				                <span class="titlepro"><?php the_title(); ?></span>
				            </div>
				            <div class="panel-body">
				                <?php echo get_the_excerpt();?>
				            </div>
				        </a>    
				    </li>
				<?php  endwhile; ?>
			</ul>
	    </div>
	</div>
    <div class="figureprojet">
	    <div class="uk-grid uk-grid-collapse ">
	        <div class="uk-width-1-2">
	        	<div class="descriptionpro">
	            	<h3 class="protitre">VENTE</h3>
		            <p class="contentpro">Vestibulum posuere sollicitudin feugiat.
						Morbi vulputate suscipit magna quis
						aoreet massa nisl.
					</p>
		            <a href="#" class="btnvente btnsavoir">EN SAVOIR PLUS <i class="fa fa-caret-right fa-1x " aria-hidden="true" ></i></a>
	            </div>
			    <img width="100%" height="" class="img-responsive center-block" src="<?php bloginfo("stylesheet_directory");?>/images/1.png" />
	        </div>
	        <div class="uk-width-1-2">
	        	<div class="uk-grid uk-grid-collapse location">
	        		<div class="uk-width-1-2 bglocation">
	        			<div class="descriptionpro">
			            	<h3 class="protitre">LOCATION</h3>
				            <p class="contentpro">Vestibulum posuere sollicitudin feugiat.
								Morbi vulputate suscipit magna quis
								aoreet massa nisl.
							</p>
				            <a href="#" class="btnvente btnsavoir">EN SAVOIR PLUS <i class="fa fa-caret-right fa-1x " aria-hidden="true" ></i></a>
			            </div>
	        		</div>
	                <div class="uk-width-1-2">
	                	<img width="100%" height="" class="img-responsive center-block" src="<?php bloginfo("stylesheet_directory");?>/images/22.png" />
	                </div>
	        	</div>
	        	<div class="uk-width-1-1 commercial">
	        		<div class="descriptionpro">
		            	<h3 class="protitre">PRO <span> ET COMMERCIAL </span></h3>
			            <p class="contentpro">Vestibulum posuere sollicitudin feugiat.
							Morbi vulputate suscipit magna quis
							aoreet massa nisl.
						</p>
			            <a href="#" class="btnvente btnsavoir">EN SAVOIR PLUS <i class="fa fa-caret-right fa-1x " aria-hidden="true" ></i></a>
		            </div>
	        		<img width="100%" height="" class="img-responsive center-block" src="<?php bloginfo("stylesheet_directory");?>/images/3.png" />
	        	</div>
	        	<div class="uk-width-1-1 neuf ">
	        		<div class="borderneuf"><div class="contentneuf"></div></div>
	        		<div class="descriptionpro">
    					<h3 class="protitre">NEUF</h3>
			            <p class="contentpro">Vestibulum posuere sollicitudin feugiat.
							Morbi vulputate suscipit magna quis
							aoreet massa nisl.
						</p>
			            <a href="#" class="btnvente btnsavoir">EN SAVOIR PLUS <i class="fa fa-caret-right fa-1x " aria-hidden="true" ></i></a>
		            </div>
	        		<img width="100%"  style="height: 21.26vw;" class="img-responsive center-block lstimg" src="<?php bloginfo("stylesheet_directory");?>/images/4.png" />
	        	</div>
	        </div>
	    </div>
	</div>    
</section>
<section class="presentation">
	<div class="container">
		<h3 class="titleagence text-center">L'AGENCE<span class="spanagence"> CONTACT IMMO</span></h3>
		<div class="uk-grid">
			<div class="uk-width-1-2">
				<p class="contentagence">
				Notre agence est présente au coeur de Colmar depuis 1999. Notre expertise immobilière s’étend sur COLMAR et sa région. 
				Véritables professionnels, nous saurons vous conseiller au mieux pour acheter, vendre, estimer ou louer votre bien. 

				</p>
			</div>
	        <div class="uk-width-1-2">
	        	<p  class="contentagence" >
	        	Notre équipe vous accompagnera dans toutes vos démarches d’achat ou de vente grâce à sa connaissance du marché de l’immobilier neuf ou existant.
	Professionnalisme,écoute, implication et disponibilité  sont nos engagements pour réussir à concrétiser votre projet .
	        	</p>
	        </div>
		</div>
		<div class="soupresent">
        	<span class="roundred">“</span>
        	<p class="notredevise">Notre devise : Votre satisfaction pour “entrer chez vous”</p>
        	<span class="titleweb">- CONTACT IMMO -</span>
        </div>
    </div>
</section>
<section class="nosbien">
	<div class="container">
		<h3 class="titleagence text-center">Nos-<span class="spanagence">bien</span></h3>
		<?php $documents = new WP_Query(array(
		'post_type' => 'nosbien',
		)) ;?>
		<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3" data-uk-grid="{gutter: 20}">
			<?php $i=0; while ($documents->have_posts()) : $documents->the_post(); ?>
	         <div class="img<?php echo $i ; ?> jsgrid">
				<div class="uk-thumbnail uk-overlay-hover" data-uk-modal="{target:'#modal-<?php echo $i ; ?>'}">
	                <figure class="uk-overlay">
	                	<?php $image = get_field('images');
					    if( !empty($image) ): ?>
					        <img width="100%" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
					    <?php endif; ?>
	                	<figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></figcaption>
	                    <a class="uk-position-cover" href="#"></a>
	                </figure>
	                <a href="#" class="captionportfolio">
						<h3 class="titleportfolio"><?php  the_title();?></h3>
					    <p class="contentporfolio"><?php  the_excerpt();?></p>
					</a>
	            </div>
	            <div id="modal-<?php echo $i ; ?>" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
	                <div class="uk-modal-dialog uk-modal-dialog-lightbox">
	                    <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
	                   <?php $image = get_field('images');
					    if( !empty($image) ): ?>
					        <img width="100%" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
					    <?php endif; ?>

	                </div>
	            </div>
			</div>
			<?php   $i++ ; endwhile; ?>
		</div>	
    </div>
</section>
<section id="contact">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9029.198989231496!2d10.202905785988403!3d36.85914362065707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34d34fcd64a1%3A0x8edd816bae5f5a2e!2sConvergys+La+Charguia+II!5e0!3m2!1sfr!2sfr!4v1464777604122" width="100%" height="470px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	 -->
	 <img width="100%" class="img-responsive center-block" src="<?php bloginfo("stylesheet_directory");?>/images/map.jpg" alt="" />
	 <div class="container infocontact">
		<div class="uk-grid">
			<div class="uk-width-1-2">
				<a class="logocontact" href="<?php bloginfo("url");?>"><img src="<?php bloginfo("stylesheet_directory");?>/images/logo.png" alt=""></a>
				<ul class="reseau">
					<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-rss" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				<div class="adress">
					<p>Pour tout renseignement, vous pouvez nous joindre par téléphone au  <span>03 89 24 42 40,</span></p> 
                    <p>par e-mail à l’adresse : <span>contact-immo@wanadoo.fr</span>  ou directement à l’agence. Notre équipe vous</p>
                    <p>réservera un accueil chaleureux et saura répondre à vos questions. </p>
					<p class="cordonne"> <span>COORDONNÉES</span> </p>
					<p>2 Place Jean de Lattre de Tassigny</p>
					<p>68000 Colmar</p>
					<p>CONTACT IMMO</p>
					<p> <span class="stylct">Tél :</span>  03 89 24 42 40</p>
					<p> <span class="stylct">Fax :</span>  03 89 24 40 67</p>
					<p> <span class="stylct"> Mail :</span> contact-immo@wanadoo.fr</p>
				</div>
			</div>
			<div class="uk-width-1-2">
				<?php echo do_shortcode( '[contact-form-7 id="17" title="Formulaire de contact 1"]' ); ?>
			</div>
		</div>		
	</div>
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
</section>








<?php get_footer(); ?>
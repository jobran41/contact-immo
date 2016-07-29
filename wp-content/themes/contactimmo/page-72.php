<?php get_header(); ?>

<div id="fullpage">
	<div class="section " id="section0">
<?php $documents = new WP_Query(array(
'post_type' => 'portfolio',
'posts_per_page' => -1,
)) ;?>

<?php while ($documents->have_posts()) : $documents->the_post(); ?>
	<?php  $bool=1;?>
<div class="myselect">
	<?php  $tabtaille= array();$tabcouleur= array();?>
    <?php if( have_rows('product') ): ?>
		<?php while( have_rows('product') ): the_row(); 
			$images = get_sub_field('images');?>
			<?php if( $images && $bool===1 ): ?>
			<img src="<?php echo $images;?>"/>
			<!-- <div id='retour1'></div> -->
			 <?php $bool=0;?>
	         <?php endif; ?>
	         <?php 
				if (!in_array(get_sub_field('taille'), $tabtaille)) {
					         $tabtaille[]= get_sub_field('taille');
				}
	         ?>
	         <?php 
				if (!in_array(get_sub_field('couleur'), $tabcouleur)) {
					         $tabcouleur[]= get_sub_field('couleur');
				}
	         ?>
	   <?php  endwhile; ?>

	       <select data-id='<?php echo the_ID(); ?>' class='monselecttaille'>
				<?php	
				foreach ($tabtaille as   $value) { ?>
					<option value='<?php echo $value; ?>'><?php echo $value; ?></option>
				<?php } ?>
			</select>

			<select data-id='<?php echo the_ID(); ?>' class='monselectcouleur'>
				<?php	
				foreach ($tabcouleur as   $value) { ?>
					<option value='<?php echo $value; ?>'><?php echo $value; ?></option>
				<?php } ?>
			</select>

	<?php endif; ?>
</div>
<?php  endwhile; ?>

<div class="gallery">
	<img id="zoom_09" src="<?php bloginfo("stylesheet_directory");?>/images/small/image1.png" data-zoom-image="<?php bloginfo("stylesheet_directory");?>/images/large/image1.jpg"/>
	<div id="gallery_09" style="width=500px;float:left">
	     <a href="#" class="elevatezoom-gallery active" data-update=""
		      data-image="<?php bloginfo("stylesheet_directory");?>/images/small/image1.png"
		      data-zoom-image="<?php bloginfo("stylesheet_directory");?>/images/large/image1.jpg">
		      <img src="<?php bloginfo("stylesheet_directory");?>/images/small/image1.png" width="100">
	     </a>
	     <a href="#" class="elevatezoom-gallery"
	        data-image="<?php bloginfo("stylesheet_directory");?>/images/small/image2.png"
	        data-zoom-image="<?php bloginfo("stylesheet_directory");?>/images/large/image2.jpg">
	     	<img src="<?php bloginfo("stylesheet_directory");?>/images/small/image2.png" width="100">
	     </a>
		<a href="tester" class="elevatezoom-gallery"
			 data-image="<?php bloginfo("stylesheet_directory");?>/images/small/image3.png" 
			 data-zoom-image="<?php bloginfo("stylesheet_directory");?>/images/large/image3.jpg">
			  <img src="<?php bloginfo("stylesheet_directory");?>/images/small/image3.png" width="100">
		</a>
	   <a href="tester" class="elevatezoom-gallery" 
		    data-image="<?php bloginfo("stylesheet_directory");?>/images/small/image4.png"
		    data-zoom-image="<?php bloginfo("stylesheet_directory");?>/images/large/image4.jpg"> 
		   	<img src="<?php bloginfo("stylesheet_directory");?>/images/small/image4.png" width="100">
	   </a>
    </div>
	<select id="select"> 
		<option value="1">Front</option>
		<option value="2">Back</option>
		<option value="3">Scenery</option>
		<option value="4">Side</option>
	</select>
</div>


	</div>
</div>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="my-id">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      blaaaaaaaaaaaaaaaaaaaa
    </div>
  </div>
</div>
<!-- echo get_template_directory_uri(); -->


<div class="footer ">
	<p class="text-center ft">
		© Copyright 2016 - streamerz
	</p>
</div>


<?php get_footer(); ?>
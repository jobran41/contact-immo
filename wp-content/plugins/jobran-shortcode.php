<?php
/*
  Plugin Name: jobran Post-listing shortcode
  Plugin URI: streamerz.net
  Description: This plugin provides a shortcode to list posts, with parameters. It also registers a couple of post types and tacxonomies to work with.
  Version: 1.0
  Author: Rachel McCollin
  Author URI: http://rachelmccollin.co.uk
  License: GPLv2
 */
add_action('admin_menu','parent_page_models_produits' );
function parent_page_models_produits() { remove_meta_box('pageparentdiv', 'projet', 'normal');}

add_action('add_meta_boxes', 'parent_page_models_boxes_produits');
function parent_page_models_boxes_produits() {
add_meta_box('chapter-parent', 'Parent', 'chapter_attributes_models_meta_box_produits', 'projet', 'side', 'high');
}

function chapter_attributes_models_meta_box_produits($post) {
$post_type_object = get_post_type_object($post->post_type);
if ( $post_type_object->hierarchical ) {
    $pages = wp_dropdown_pages(array('post_type' => 'projet', 'selected' => $post->post_parent, 'name' => 'parent_id', 'show_option_none' => __('(no parent)'), 'sort_column'=> 'menu_order, post_title', 'echo' => 0));
    if ( ! empty($pages) ) {
    echo $pages;
    }
}
}

// create shortcode with parameters so that the user can define what's queried - default is to list all blog posts
add_shortcode('load_box_produits', 'rmcc_post_listing_parameters_shortcode');
function rmcc_post_listing_parameters_shortcode($atts) {
    ob_start();
    ($attr['parent_id'])? $parent_id = $attr['parent_id'] : $parent_id = 0;
    $post_parent = get_post($parent_id);

    // define query parameters based on attributes

    extract(shortcode_atts(array(
        'type' => 'post',
        'types' => 'posts',
        ), $atts));
    

    $options = array(
        'post_type' => $type,
        'posts_per_page' => -1,
        'post_parent' => $types,
    );

   // if(isset($_GET['token'])) echo '<pre>'.print_r($produits,true).'</pre>';

    $query = new WP_Query($options);
    // run the loop based on the query
    if ($query->have_posts()) {
        ?>
            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3" data-uk-grid="{gutter: 20}">
            <?php $i=0; while ($query->have_posts()) : $query->the_post(); ?>
            <div class="img<?php echo $i ; ?> jsgrid">
                <div class="uk-thumbnail uk-overlay-hover" data-uk-modal="{target:'#modal-<?php echo $i ; ?>'}">
                        <figure class="uk-overlay">
                          <?php $image = get_field('bigimg');
                      if( !empty($image) ): ?>
                          <img width="100%" class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];  ?>" />
                      <?php endif; ?>
                          <figcaption class="uk-overlay-panel uk-overlay-icon uk-overlay-background uk-overlay-fade"></figcaption>
                            <a class="uk-position-cover" href="#"></a>
                        </figure>
                        <a href="<?php  the_permalink();?>" class="captionprojet">
                          <h4 class="titleportfolio"><?php  the_title();?></h4>
                        </a>
                    </div>
                    <div id="modal-<?php echo $i ; ?>" class="uk-modal popupstyle" aria-hidden="true" style="display: none; overflow-y: scroll;">
                        <div class="uk-modal-dialog uk-modal-dialog-large">
                            <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
                            <div class="uk-grid">
                             <div class="uk-width-medium-1-2">
                               <div data-uk-slideshow data-uk-check-display class="slidehowpop">
                                    <ul class="uk-slideshow" >
                                        <li >
                                           <img src="http://unsplash.it/600/400">
                                        </li>
                                        <li >
                                            <img src="http://unsplash.it/600/401">
                                        </li>
                                        <li >
                                            <img src="http://unsplash.it/600/402">
                                        </li>
                                    </ul>
                                    <ul class="uk-grid uk-grid-width-1-3 thamnail">
                                      <li><a data-uk-slideshow-item="0" class="uk-active"><img src="http://unsplash.it/600/400"></a></li>
                                      <li><a data-uk-slideshow-item="1"><img src="http://unsplash.it/600/401"></a></li>
                                       <li><a data-uk-slideshow-item="2"><img src="http://unsplash.it/600/402"></a></li>
                                    </ul>
                                    <a  class="leftsl btnslid" href="" data-uk-slideshow-item="previous"><</a>
                                    <a class="rightsl btnslid" href="" data-uk-slideshow-item="next">></a>
                                </div>
                             </div>
                             <div class="uk-width-medium-1-2 poptextstyle">
                              <h2><?php the_title(); ?></h2>
                              <ul>
                                <li>Appartement</li>
                                <li>132 m² environ</li>
                                <li>3 pièce</li>
                              </ul>
                              <h4>Les + du bien</h4>
                              <p>
                                Maecenas eros mi, la cinia eu ultricies vel, elementum et justo. Ut at tortor a odio vestibulum suscipit non sit amet dolor. Morbi molestie magna nec metus facilisis, at iaculis mi adipiscing. Praesent ac diam 
                              </p>
                              <h4>Descriptif du bien</h4>
                              <p>
                                Maecenas eros mi, la cinia eu ultricies vel, elementum et justo. Ut at tortor a odio vestibulum suscipit non sit amet dolor. Morbi molestie magna nec metus facilisis, at iaculis mi adipiscing. Praesent ac diam 
Maecenas eros mi, la cinia eu ultricies vel, elementum et justo. Ut at tortor a odio vestibulum suscipit non sit amet dolor. Morbi molestie magna nec metus facilisis, at iaculis mi adipiscing. Praesent ac diam 
                              </p>
                              <a href="">réserver pour visite</a>
                            </div>
                           </div>
                        </div>
                    </div>
              </div>
            <?php $i++ ; endwhile;
            wp_reset_postdata();
            ?>
        </ul>
        <?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}
?>
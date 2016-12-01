<?php 
//function php
function new_theme_slider(){
    

    register_post_type('slide',
                       array(
                           'public' => true,
                           'label' => 'Slide',
                            'labels' => array(
                            'name' => 'Slides',
                                'add_new' => 'add new slide',
                            ),
       'supports' => array('title','editor','thumbnail','excerpt','custom-fields')
    ));
}
add_action('init','new_theme_slider');




//slider.php for code
     
                 <?php
						    global $post;
						    $args = array( 'posts_per_page' => 5, 'post_type'=> 'slide');
						    $myposts = get_posts( $args );
						    foreach( $myposts as $post ) : setup_postdata($post); ?>
                
						     <?php $slider_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide' ); ?> 
                             <?php $slider_sec = get_post_meta($post->ID,'imag',true); ?> 
                <?php $slider_link = get_post_meta($post->ID,'link_theme',true); ?> 

          
                <div class="item " style="background-image: url(<?php echo $slider_image[0]; ?>">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><?php the_excerpt(); ?></h1>
                                    <h2 class="animation animated-item-2"><?php the_title(); ?></h2>
                                    
                                    <a class="btn-slide animation animated-item-3" href="<?php echo $slider_link; ?>">Read More</a>
  
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo $slider_sec; ?>" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                     
                </div><!--/.item-->
<?php endforeach; ?>	
    
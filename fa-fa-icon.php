




           <?php
                              global $post;
                             $args = array( 'posts_per_page' => 1, 'post_type'=> 'slide_Why_People');
                             $myposts = get_posts( $args );
                             foreach( $myposts as $post ) : setup_postdata($post); ?>
                         <?php $slider_lie = get_post_meta($post->ID,'have_quest',true); ?> 



<i class="fa fa-<?php echo $slider_lie; ?>"></i>
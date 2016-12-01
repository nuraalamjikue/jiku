//footer php code


                	<?php if ( ! dynamic_sidebar( 'footer_wid' ) ) : ?>

//condition loop here



	              <?php endif; ?>


//function php code here

function new_widgets(){
    register_sidebar(array(
          'name' => 'Footer Widgets',
        'description'   => 'Use this wegidte',
          'id' => 'footer_wid',
          'before_widget' => ' <div class="col-md-3 col-sm-6"><div class="widget">',
     	  'after_widget'  => '</div></div>',
	      'before_title'  => '<h3>',
	      'after_title'   => '</h3>'
        
        
    ));
    
}
add_action('widgets_init','new_widgets');
<?php
function ppm_quickstart_theme_files(){
    // css for call code
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'1.1.1','all');
        wp_register_style('awesome',get_template_directory_uri().'/css/font-awesome.min.css',array(),'1.1.1','all');
        wp_register_style('animate',get_template_directory_uri().'/css/animate.min.css',array(),'1.1.1','all');

        wp_register_style('prettyPhoto',get_template_directory_uri().'/css/prettyPhoto.css',array(),'1.1.1','all');
    wp_register_style('main',get_template_directory_uri().'/css/main.css',array(),'1.1.1','all');
    wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css',array(),'1.1.1','all');


    
    // wp enqueue  js and css
    wp_enqueue_style('bootstrap');
     wp_enqueue_style('awesome');
    wp_enqueue_style('animate');
    wp_enqueue_style('prettyPhoto');
    wp_enqueue_style('main');
    wp_enqueue_style('responsive');
    
    // js for call code
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs',get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'1.1.2',true);
        wp_enqueue_script('prettyPhoto-js',get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'),'1.1.3',true);
    wp_enqueue_script('isotope',get_template_directory_uri() . 'js/jquery.isotope.min.js', array('jquery'),'1.1.4',true);
    wp_enqueue_script('main-js',get_template_directory_uri() . '/js/main.js', array('jquery'),'1.1.5',true);
        wp_enqueue_script('wow',get_template_directory_uri() . '/js/wow.min.js', array('jquery'),'1.1.6',true);


}
add_action('wp_enqueue_scripts', 'ppm_quickstart_theme_files'); 

?>
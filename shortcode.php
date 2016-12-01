//function php code for


function features_shortcode($atts){
    
    extract( shortcode_atts( array(
        'icon' => '',
        'title' => '',
        'text' => '',
    ), $atts));
    
    return'<div class="feature-wrap">
          <i class="fa fa-'.$icon.'"></i>
            <h2>'.$title.'</h2>
        
            <h3>'.$text.'</h3>
           </div>';
    
}
add_shortcode('features','features_shortcode');
 

//page a for code

[features icon="home" title="new shortcode" text="Lorem ipsum dolor sit amet, consectetur adipisicing elit"]



//youtub vedio 


function youtube_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'width' => '560',
		'height' => '315',
	), $atts ) );

	return '<iframe class="video_iframe" width="560" height="315" src="//www.youtube.com/embed/'.$content.'" frameborder="0" allowfullscreen></iframe>';
}	
add_shortcode('youtube', 'youtube_shortcode');	
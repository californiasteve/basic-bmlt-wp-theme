<?php
    function basic_bmlt_customize_register( $wp_customize ) {
		
		$colors = array();
        $colors[] = array(
          'slug'=>'content_text_color', 
          'default' => '#333',
          'label' => __('Content Text Color', 'basic_bmlt')
                         );
        $colors[] = array(
          'slug'=>'content_link_color', 
          'default' => '#88C34B',
          'label' => __('Content Link Color', 'basic_bmlt')
                         );
		$colors[] = array(
          'slug'=>'content_hover_link_color', 
          'default' => '#404040',
          'label' => __('Content Link Color (Hover)', 'basic_bmlt')
                         );
		$colors[] = array(
          'slug'=>'content_blog_title_color', 
          'default' => '#ffffff',
          'label' => __('Site Title Color', 'basic_bmlt')
                         );
    foreach( $colors as $color ) {
  // SETTINGS
        $wp_customize->add_setting(
        $color['slug'], array(
          'default' => $color['default'],
          'type' => 'option', 
          'capability' => 
          'edit_theme_options'
                             )
                                  );
  // CONTROLS
        $wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        $color['slug'], 
          array('label' => $color['label'], 
            'section' => 'colors',
            'settings' => $color['slug'])
                                  )
                                  );
                                 }
	}
add_action( 'customize_register', 'basic_bmlt_customize_register');
	

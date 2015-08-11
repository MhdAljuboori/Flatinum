<?php

if ( ! function_exists( 'flatinum_customize_register' ) ) :

function flatinum_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'header_section', array(
    'title' => __( 'Header Section' )
  ));

    $wp_customize->add_setting( 'header_title', array(
    'type' => 'theme_mod',
    'default' => 'Simple Flat Theme'
  ));

    $wp_customize->add_control( 'header_title', array(
    'label' => __( 'Header Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_desc', array(
    'type' => 'theme_mod',
    'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
  ));

    $wp_customize->add_control( 'header_desc', array(
    'label' => __( 'header_describtion' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_title', array(
    'type' => 'theme_mod',
    'default' => 'Learn more'
  ));

    $wp_customize->add_control( 'header_btn_title', array(
    'label' => __( 'Header Button Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_href', array(
    'type' => 'theme_mod',
    'default' => '#'
  ));

    $wp_customize->add_control( 'header_btn_href', array(
    'label' => __( 'Header Button Link' ),
    'type' => 'url',
    'section' => 'header_section'
  ));

    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Section' )
  ));

    $wp_customize->add_setting( 'footer_company_name', array(
    'type' => 'theme_mod',
    'default' => 'Company Name'
  ));

    $wp_customize->add_control( 'footer_company_name', array(
    'label' => __( 'Company Name' ),
    'type' => 'text',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_fb_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_fb_link', array(
    'label' => __( 'Facebook Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_tw_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_tw_link', array(
    'label' => __( 'Twitter Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_google_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_google_link', array(
    'label' => __( 'Google Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_linkedin_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_linkedin_link', array(
    'label' => __( 'LinkedIn Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_vimo_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_vimo_link', array(
    'label' => __( 'Vimo Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_pintrest_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_pintrest_link', array(
    'label' => __( 'Pintrest Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_youtube_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_youtube_link', array(
    'label' => __( 'Youtube Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_instagram_link', array(
    'label' => __( 'Instagram Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_behance_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_behance_link', array(
    'label' => __( 'Behance Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_section( 'header_section', array(
    'title' => __( 'Header Section' )
  ));

    $wp_customize->add_setting( 'header_title', array(
    'type' => 'theme_mod',
    'default' => 'Simple Flat Theme'
  ));

    $wp_customize->add_control( 'header_title', array(
    'label' => __( 'Header Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_desc', array(
    'type' => 'theme_mod',
    'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
  ));

    $wp_customize->add_control( 'header_desc', array(
    'label' => __( 'header_describtion' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_title', array(
    'type' => 'theme_mod',
    'default' => 'Learn more'
  ));

    $wp_customize->add_control( 'header_btn_title', array(
    'label' => __( 'Header Button Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_href', array(
    'type' => 'theme_mod',
    'default' => '#'
  ));

    $wp_customize->add_control( 'header_btn_href', array(
    'label' => __( 'Header Button Link' ),
    'type' => 'url',
    'section' => 'header_section'
  ));

    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Section' )
  ));

    $wp_customize->add_setting( 'footer_company_name', array(
    'type' => 'theme_mod',
    'default' => 'Company Name'
  ));

    $wp_customize->add_control( 'footer_company_name', array(
    'label' => __( 'Company Name' ),
    'type' => 'text',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_fb_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_fb_link', array(
    'label' => __( 'Facebook Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_tw_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_tw_link', array(
    'label' => __( 'Twitter Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_google_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_google_link', array(
    'label' => __( 'Google Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_linkedin_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_linkedin_link', array(
    'label' => __( 'LinkedIn Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_vimo_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_vimo_link', array(
    'label' => __( 'Vimo Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_pintrest_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_pintrest_link', array(
    'label' => __( 'Pintrest Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_youtube_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_youtube_link', array(
    'label' => __( 'Youtube Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_instagram_link', array(
    'label' => __( 'Instagram Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_behance_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_behance_link', array(
    'label' => __( 'Behance Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_section( 'general_theme_customization', array(
    'title' => __( 'General Theme Customization' )
  ));

    $wp_customize->add_setting( 'primary_backgroud_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_backgroud_color', array(
    'label' => __( 'Primary Background Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'dark_primary_backgroud_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dark_primary_backgroud_color', array(
    'label' => __( 'Dark Primary Background Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'text_primary_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_primary_color', array(
    'label' => __( 'Text Primary Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'primary_link_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_link_color', array(
    'label' => __( 'Primary Link Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'primary_link_hover_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_link_hover_color', array(
    'label' => __( 'Primary Link Hover Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_section( 'header_section', array(
    'title' => __( 'Header Section' )
  ));

    $wp_customize->add_setting( 'btn_backgroud_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_backgroud_color', array(
    'label' => __( 'Button Background Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'btn_hover_backgroud_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_hover_backgroud_color', array(
    'label' => __( 'Button Hover Background Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'btn_text_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_text_color', array(
    'label' => __( 'Button Text Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'btn_text_hover_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_text_hover_color', array(
    'label' => __( 'Button Text Hover Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'social_link_color', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_link_color', array(
    'label' => __( 'Social Link Color' ),
    'type' => 'color',
    'section' => 'general_theme_customization'
  ) ) );

    $wp_customize->add_setting( 'header_title', array(
    'type' => 'theme_mod',
    'default' => 'Simple Flat Theme'
  ));

    $wp_customize->add_control( 'header_title', array(
    'label' => __( 'Header Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_desc', array(
    'type' => 'theme_mod',
    'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
  ));

    $wp_customize->add_control( 'header_desc', array(
    'label' => __( 'header_describtion' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_title', array(
    'type' => 'theme_mod',
    'default' => 'Learn more'
  ));

    $wp_customize->add_control( 'header_btn_title', array(
    'label' => __( 'Header Button Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_href', array(
    'type' => 'theme_mod',
    'default' => '#'
  ));

    $wp_customize->add_control( 'header_btn_href', array(
    'label' => __( 'Header Button Link' ),
    'type' => 'url',
    'section' => 'header_section'
  ));

    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Section' )
  ));

    $wp_customize->add_setting( 'footer_company_name', array(
    'type' => 'theme_mod',
    'default' => 'Company Name'
  ));

    $wp_customize->add_control( 'footer_company_name', array(
    'label' => __( 'Company Name' ),
    'type' => 'text',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_fb_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_fb_link', array(
    'label' => __( 'Facebook Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_tw_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_tw_link', array(
    'label' => __( 'Twitter Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_google_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_google_link', array(
    'label' => __( 'Google Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_linkedin_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_linkedin_link', array(
    'label' => __( 'LinkedIn Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_vimo_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_vimo_link', array(
    'label' => __( 'Vimo Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_pintrest_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_pintrest_link', array(
    'label' => __( 'Pintrest Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_youtube_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_youtube_link', array(
    'label' => __( 'Youtube Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_instagram_link', array(
    'label' => __( 'Instagram Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_behance_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_behance_link', array(
    'label' => __( 'Behance Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_section( 'header_section', array(
    'title' => __( 'Header Section' )
  ));

    $wp_customize->add_setting( 'header_title', array(
    'type' => 'theme_mod',
    'default' => 'Simple Flat Theme'
  ));

    $wp_customize->add_control( 'header_title', array(
    'label' => __( 'Header Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_desc', array(
    'type' => 'theme_mod',
    'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
  ));

    $wp_customize->add_control( 'header_desc', array(
    'label' => __( 'header_describtion' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_title', array(
    'type' => 'theme_mod',
    'default' => 'Learn more'
  ));

    $wp_customize->add_control( 'header_btn_title', array(
    'label' => __( 'Header Button Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_href', array(
    'type' => 'theme_mod',
    'default' => '#'
  ));

    $wp_customize->add_control( 'header_btn_href', array(
    'label' => __( 'Header Button Link' ),
    'type' => 'url',
    'section' => 'header_section'
  ));

    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Section' )
  ));

    $wp_customize->add_setting( 'footer_company_name', array(
    'type' => 'theme_mod',
    'default' => 'Company Name'
  ));

    $wp_customize->add_control( 'footer_company_name', array(
    'label' => __( 'Company Name' ),
    'type' => 'text',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_fb_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_fb_link', array(
    'label' => __( 'Facebook Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_tw_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_tw_link', array(
    'label' => __( 'Twitter Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_google_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_google_link', array(
    'label' => __( 'Google Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_linkedin_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_linkedin_link', array(
    'label' => __( 'LinkedIn Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_vimo_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_vimo_link', array(
    'label' => __( 'Vimo Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_pintrest_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_pintrest_link', array(
    'label' => __( 'Pintrest Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_youtube_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_youtube_link', array(
    'label' => __( 'Youtube Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_instagram_link', array(
    'label' => __( 'Instagram Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_behance_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_behance_link', array(
    'label' => __( 'Behance Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_section( 'header_section', array(
    'title' => __( 'Header Section' )
  ));

    $wp_customize->add_setting( 'header_title', array(
    'type' => 'theme_mod',
    'default' => 'Simple Flat Theme'
  ));

    $wp_customize->add_control( 'header_title', array(
    'label' => __( 'Header Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_desc', array(
    'type' => 'theme_mod',
    'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
  ));

    $wp_customize->add_control( 'header_desc', array(
    'label' => __( 'header_describtion' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_title', array(
    'type' => 'theme_mod',
    'default' => 'Learn more'
  ));

    $wp_customize->add_control( 'header_btn_title', array(
    'label' => __( 'Header Button Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_href', array(
    'type' => 'theme_mod',
    'default' => '#'
  ));

    $wp_customize->add_control( 'header_btn_href', array(
    'label' => __( 'Header Button Link' ),
    'type' => 'url',
    'section' => 'header_section'
  ));

    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Section' )
  ));

    $wp_customize->add_setting( 'footer_company_name', array(
    'type' => 'theme_mod',
    'default' => 'Company Name'
  ));

    $wp_customize->add_control( 'footer_company_name', array(
    'label' => __( 'Company Name' ),
    'type' => 'text',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_fb_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_fb_link', array(
    'label' => __( 'Facebook Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_tw_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_tw_link', array(
    'label' => __( 'Twitter Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_google_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_google_link', array(
    'label' => __( 'Google Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_linkedin_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_linkedin_link', array(
    'label' => __( 'LinkedIn Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_vimo_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_vimo_link', array(
    'label' => __( 'Vimo Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_pintrest_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_pintrest_link', array(
    'label' => __( 'Pintrest Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_youtube_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_youtube_link', array(
    'label' => __( 'Youtube Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_instagram_link', array(
    'label' => __( 'Instagram Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_behance_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_behance_link', array(
    'label' => __( 'Behance Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_section( 'header_section', array(
    'title' => __( 'Header Section' )
  ));

    $wp_customize->add_setting( 'header_title', array(
    'type' => 'theme_mod',
    'default' => 'Pinegrow Test Theme'
  ));

    $wp_customize->add_control( 'header_title', array(
    'label' => __( 'Header Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_desc', array(
    'type' => 'theme_mod',
    'default' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'
  ));

    $wp_customize->add_control( 'header_desc', array(
    'label' => __( 'header_describtion' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_setting( 'header_btn_title', array(
    'type' => 'theme_mod',
    'default' => 'Learn more'
  ));

    $wp_customize->add_control( 'header_btn_title', array(
    'label' => __( 'Header Button Title' ),
    'type' => 'text',
    'section' => 'header_section'
  ));

    $wp_customize->add_section( 'footer_section', array(
    'title' => __( 'Footer Section' )
  ));

    $wp_customize->add_setting( 'footer_company_name', array(
    'type' => 'theme_mod',
    'default' => 'Company Name'
  ));

    $wp_customize->add_control( 'footer_company_name', array(
    'label' => __( 'Company Name' ),
    'type' => 'text',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_fb_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_fb_link', array(
    'label' => __( 'Facebook Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_tw_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_tw_link', array(
    'label' => __( 'Twitter Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_google_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_google_link', array(
    'label' => __( 'Google Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_linkedin_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_linkedin_link', array(
    'label' => __( 'LinkedIn Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_vimo_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_vimo_link', array(
    'label' => __( 'Vimo Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_pintrest_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_pintrest_link', array(
    'label' => __( 'Pintrest Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_youtube_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_youtube_link', array(
    'label' => __( 'Youtube Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_instagram_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_instagram_link', array(
    'label' => __( 'Instagram Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    $wp_customize->add_setting( 'footer_behance_link', array(
    'type' => 'theme_mod'
  ));

    $wp_customize->add_control( 'footer_behance_link', array(
    'label' => __( 'Behance Link' ),
    'type' => 'url',
    'section' => 'footer_section'
  ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'flatinum_customize_register' );

endif;// flatinum_customize_register

function flatinum_color_scheme_css_template() {
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/assets/css/custom_script.css'
    );
    $dark_primary_backgroud_color = get_theme_mod( 'dark_primary_backgroud_color' );
    $primary_backgroud_color = get_theme_mod( 'primary_backgroud_color' );
    $btn_backgroud_color = get_theme_mod( 'btn_backgroud_color' );
    $btn_hover_backgroud_color = get_theme_mod( 'btn_hover_backgroud_color' );
    $btn_text_color = get_theme_mod( 'btn_text_color' );
    $btn_text_hover_color = get_theme_mod( 'btn_text_hover_color' );
    $social_link_color = get_theme_mod( 'social_link_color' );
    $text_primary_color = get_theme_mod( 'text_primary_color' );
    $primary_link_color = get_theme_mod( 'primary_link_color' );
    $primary_link_hover_color = get_theme_mod( 'primary_link_hover_color' );

    $css = <<<CSS

    .navbar.navbar-inverse {
        background-color: {$dark_primary_backgroud_color};
    }

    .jumbotron {
        background-color: {$primary_backgroud_color};
    }

    .jumbotron {
        color: {$text_primary_color};
    }

    .btn.btn-primary {
        background-color: {$btn_backgroud_color};
    }

    .btn.btn-primary {
        color: {$btn_text_color};
    }

    .btn.btn-primary:hover {
        background-color: {$btn_hover_backgroud_color};
    }

    .btn.btn-primary:hover {
        color: {$btn_text_hover_color};
    }

    #commentform input#submit,
    input.search-submit {
        background-color: {$btn_backgroud_color};
    }

    #commentform input#submit,
    input.search-submit {
        color: {$btn_text_color};
    }

    #commentform input#submit:hover,
    input.search-submit:hover {
        background-color: {$btn_hover_backgroud_color};
    }

    #commentform input#submit:hover,
    input.search-submit:hover {
        color: {$btn_text_hover_color};
    }

    .footer {
        background-color: {$primary_backgroud_color};
    }

    .footer {
        color: {$text_primary_color};
    }

    .footer a {
        color: {$primary_link_color};
    }

    .footer a:hover {
        color: {$primary_link_hover_color};
    }

    .copyright-footer {
        background-color: {$dark_primary_backgroud_color};
    }

    .social-links a {
        color: {$social_link_color};
    }
CSS;

  wp_add_inline_style( 'custom-style', $css );
}

add_action( 'wp_print_styles', 'flatinum_color_scheme_css_template' );
?>
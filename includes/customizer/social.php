<?php

function bq_social_customizer_section( $wp_customize ) {

    $wp_customize->add_section( 'bq_social_section', array( 
        'title'         => __( 'Social Settings', 'bluequest' ),
        'priority'      => 30,
    ) );

    // Email
    $wp_customize->add_setting( 'bq_email', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_email_input',
        array(
            'label'     => __( 'Email', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_email',
            'type'      => 'input',
        )
    ) );

    // Telephone
    $wp_customize->add_setting( 'bq_contact_phone', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_telephone_input',
        array(
            'label'     => __( 'Telephone', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_contact_phone',
            'type'      => 'input',
        )
    ) );

    // Facebook
    $wp_customize->add_setting( 'bq_facebook', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_facebook_input',
        array(
            'label'     => __( 'Facebook', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_facebook',
            'type'      => 'input',
        )
    ) );

    // Instagram
    $wp_customize->add_setting( 'bq_instagram', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_instagram_input',
        array(
            'label'     => __( 'Instagram', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_instagram',
            'type'      => 'input',
        )
    ) );

    // LinkedIn
    $wp_customize->add_setting( 'bq_linkedin', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_linkedin_input',
        array(
            'label'     => __( 'LinkedIn', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_linkedin',
            'type'      => 'input',
        )
    ) );

    // Pinterest
    $wp_customize->add_setting( 'bq_pinterest', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_pinterest_input',
        array(
            'label'     => __( 'Pinterest', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_pinterest',
            'type'      => 'input',
        )
    ) );

    // TikTok
    $wp_customize->add_setting( 'bq_tiktok', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_tiktok_input',
        array(
            'label'     => __( 'TikTok', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_tiktok',
            'type'      => 'input',
        )
    ) );

    // Twitter
    $wp_customize->add_setting( 'bq_twitter', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_twitter_input',
        array(
            'label'     => __( 'Twitter', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_twitter',
            'type'      => 'input',
        )
    ) );

    // YouTube
    $wp_customize->add_setting( 'bq_youtube', array( 
        'default'       => '', 
    ) );
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'bq_social_youtube_input',
        array(
            'label'     => __( 'YouTube', 'bluequest' ),
            'section'   => 'bq_social_section',
            'settings'   => 'bq_youtube',
            'type'      => 'input',
        )
    ) );

}
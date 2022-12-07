<?php
function lotos_sanitize_default($value)
{
   return $value;
}
/** Lotos - Customizer - Add Settings */
function lotos_register_theme_customizer($wp_customize)
{
   /** Add Sections -----------------------------------------------------------------------------------------------------------*/
   $wp_customize->add_section('logo', array(
      'title'       => esc_html__('Логотип на сайте', 'lotos'),
      'description' => esc_html__('Выберите нужный логотип для вашего сайта', 'lotos')
   ));

   $wp_customize->add_section('phone', array(
      'title'       => esc_html__('Номер телефона на страницах', 'lotos'),
      'description' => esc_html__('Номер телефона.', 'lotos')
   ));

   $wp_customize->add_section('mail', array(
      'title'       => esc_html__('E-mail на страницах', 'lotos'),
      'description' => esc_html__('E-mail', 'lotos')
   ));

   $wp_customize->add_section('map', array(
      'title'       => esc_html__('Ссылка и картинка для карты в подвале сайта', 'lotos'),
      'description' => esc_html__('Вставьте ссылку и загрузите изображение', 'lotos')
   ));

   $wp_customize->add_section('footer_text', array(
      'title'       => esc_html__('Текст в подвале сайта', 'lotos'),
      'description' => esc_html__('Введите текст', 'lotos')
   ));

   $wp_customize->add_section('footer_copyright', array(
      'title'       => esc_html__('Копирайт в подвале сайта', 'lotos'),
      'description' => esc_html__('Введите копирайт', 'lotos')
   ));


   /** Add Settings ------------------------------------------------------------------------------------------------------------*/
   // Header and Logo
   $wp_customize->add_setting(
      'header_logo',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'header_logo',
         array(
            'label'      => esc_html__('Загрузите логотип для шапки сайта', 'lotos'),
            'section'    => 'logo',
            'settings'   => 'header_logo',
            'priority'    => 1
         )
      )
   );

   $wp_customize->add_setting(
      'footer_logo',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'footer_logo',
         array(
            'label'      => esc_html__('Загрузите логотип для подвала вашего сайта', 'lotos'),
            'section'    => 'logo',
            'settings'   => 'footer_logo',
            'priority'    => 1
         )
      )
   );

   //Phone
   $wp_customize->add_setting(
      'text_phone',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'text_phone',
      array(
         'label'      => esc_html__('Номер телефона (эти цифры будут выводиться на сайте для пользователей)', 'lotos'),
         'section'    => 'phone',
         'settings'   => 'text_phone',
         'type'       => 'text',
         'priority'    => 1
      )
   );


   $wp_customize->add_setting(
      'link_phone',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'link_phone',
      array(
         'label'      => esc_html__('Формат телефона (эти цифры никому не видны, они нужны чтобы пользователя перенаправило на правильный формат телефона)', 'lotos'),
         'section'    => 'phone',
         'settings'   => 'link_phone',
         'type'       => 'text',
         'priority'    => 2
      )
   );

   //Mail
   $wp_customize->add_setting(
      'text_mail',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'text_mail',
      array(
         'label'      => esc_html__('E-mail (эта почта будет выводиться на сайте для пользователей)', 'lotos'),
         'section'    => 'mail',
         'settings'   => 'text_mail',
         'type'       => 'text',
         'priority'    => 1
      )
   );


   //text in footer
   $wp_customize->add_setting(
      'text_en',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'text_en',
      array(
         'label'      => esc_html__('Текст в подвале сайта на английском языке', 'lotos'),
         'section'    => 'footer_text',
         'settings'   => 'text_en',
         'type'       => 'text',
         'priority'    => 1
      )
   );

   $wp_customize->add_setting(
      'text_fr',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'text_fr',
      array(
         'label'      => esc_html__('Текст в подвале сайта на французком языке', 'lotos'),
         'section'    => 'footer_text',
         'settings'   => 'text_fr',
         'type'       => 'text',
         'priority'    => 2
      )
   );


   //copyright in footer
   $wp_customize->add_setting(
      'copyright',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'copyright',
      array(
         'label'      => esc_html__('', 'lotos'),
         'section'    => 'footer_copyright',
         'settings'   => 'copyright',
         'type'       => 'text',
         'priority'    => 2
      )
   );

   //link map
   $wp_customize->add_setting(
      'map_link',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      'map_link',
      array(
         'label'      => esc_html__('Вставьте ссылку на карту', 'lotos'),
         'section'    => 'map',
         'settings'   => 'map_link',
         'type'       => 'link',
         'priority'    => 2
      )
   );

   $wp_customize->add_setting(
      'map_img',
      array(
         'default' => '',
         'sanitize_callback' => 'lotos_sanitize_default'
      )
   );
   $wp_customize->add_control(
      new WP_Customize_Image_Control(
         $wp_customize,
         'map_img',
         array(
            'label'      => esc_html__('Загрузите картинку для карты', 'lotos'),
            'section'    => 'map',
            'settings'   => 'map_img',
            'priority'    => 1
         )
      )
   );
}
add_action('customize_register', 'lotos_register_theme_customizer');

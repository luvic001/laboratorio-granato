<?php

// Popup
$wp_customize->add_section('c--global-popup', [
	'panel' => 'c--global',
	'title' => 'Popup'
]);

$wp_customize->add_setting('global-site-popup-image');
$wp_customize->add_control(new WP_Customize_media_Control($wp_customize, 'global-site-popup-image', [
  'label' => __('Imagem da POPUP (640x480)', 'alba'),
  'section' => 'c--global-popup',
  'settings' => 'global-site-popup-image'
]));

$wp_customize->add_setting('global-site-popup-link');
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'global-site-popup-link', [
  'label' => __('Link da popup', 'alba'),
  'section' => 'c--global-popup',
  'settings' => 'global-site-popup-link'
  ]));
  
  
$wp_customize->add_setting('global-site-popup-link-new_blank');
$wp_customize->add_control('global-site-popup-link-new_blank', [
  'type' => 'checkbox',
  'label' => 'Abrir link em nova guia',
  'section' => 'c--global-popup',
  'description' => ''
]);

$wp_customize->add_setting('global-site-popup-close_color');
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'global-site-popup-close_color', [
  'label' => 'Cor do botão fechar "&times;"',
  'section' => 'c--global-popup',
  'description' => ''
]));
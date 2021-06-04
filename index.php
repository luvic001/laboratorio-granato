<?php 

if (!defined('PATH')) exit; 

get_header();

get_modules('webdoor', 'home');
get_modules('about-us', 'home');
get_modules('testes', 'home');
get_modules('testes-carousel', 'home');
get_modules('resultados', 'home');

get_footer();
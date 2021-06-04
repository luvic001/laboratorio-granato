<?php 

if (!defined('PATH')) exit; 

get_header();

get_modules('webdoor', 'home');
get_modules('about-us', 'home');

get_footer();
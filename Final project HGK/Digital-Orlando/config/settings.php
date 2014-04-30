<?php
/**
 * settings.php - site wide generic settings for Digital Orlando
 */
 
 global $settings;
 
 //project defined settings
 $settings['project_title'] = "Digital Orlando";
 $settings['project_director'] = "Hannah Gillow Kloster";
 $settings['project_logo'] = "woolflogo.png";

 //HTML meta
 $settings['meta_keywords'] = "woolf, virginia woolf, orlando, 1928, textual studies, digital edition, edition, digital humanities";
 $settings['meta_charset'] = "utf-8";
 $settings['meta_description'] = "Sample digital edition of Virginia Woolf's Orlando";

 //framework settings
 $settings['language_id'] = "en";
 $settings['url'] = str_replace(basename($_SERVER['PHP_SELF']), '', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['SCRIPT_NAME'])."/");
 $settings['request_uri'] = "$_SERVER[REQUEST_URI]";
 
?>
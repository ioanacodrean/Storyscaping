<?php
/*
* Plugin Name: Owl Popup 
* Plugin URI: http://localhost/learningwordpress/cheers
* Description: This is a Newsletter Signup form Plugin for Cheers based on HTML5, CSS, JS and PHP
* Version: 0.9.9
* Author: Murat Kilic
* Author URI: http://localhost/learningwordpress/cheers
* License: GPL2
*/

function owlpopup_form()
{
    $content = '';
    $content .= '<div class="popup-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<img id="owl" src=" '.plugins_url("test/img/owl.png").' " ';
    $content .= 'alt="TH: LANGS owl mascot">';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">Are you new to TH. LANGS?</h3>';
  	$content .= '<h5 id="tilmeld">write your name and email to get in touch with our skilled study counselors who can help you find your future</h5>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="text" name="email" id="email" placeholder="Enter your name here..." required>';
    $content .= '</div>';
  	$content .= '<div>';
    $content .= '<input type="email" name="email" id="email" placeholder="Enter your e-mail here..." required>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="button" value="begin your future" name="submitBtn" id="submitBtn">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_owlpopup','owlpopup_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('popup/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('popup/js/script.js'), array('jquery'), null, true);
    }



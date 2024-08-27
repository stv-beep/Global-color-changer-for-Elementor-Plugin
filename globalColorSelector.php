<?php
/**
 * Plugin Name:         Global color changer for Elementor
 * Plugin URI:          https://belaweb.net
 * Description:         Let visitor select colors to change website client-side colors.
 * Version:             0.3.1
 * Author:              Belaweb
 * Author URI:          https://belaweb.net
 * Text Domain:         global-color-selector
 * Domain Path:         /languages
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI:   https://github.com/stv-beep/Global-color-changer-for-Elementor-Plugin
 * GitHub Branch:       master
 * Tested up to: 6.5
 * Requires at least: 6.3
 * PHP tested up to: 8.3
 * Requires PHP: 7.4
 * Elementor tested up to: 3.23.2
 * Elementor Pro tested up to: 3.21.3
 *
 * @link                https://belaweb.net
 * @author              Belaweb
 * @license             GPL-2.0+
 * @package             Global_Color_Selector
 *
 */


// Exit if accessed directly.
defined('ABSPATH') or exit;

define('HIDE_ADMIN_NOTICES_URL', plugin_dir_url(__FILE__));


add_action('wp_footer', 'mfp_Add_Selector');

function enqueue_custom_scripts() { 
    wp_enqueue_script('custom-script', plugin_dir_url( __FILE__ ) . 'assets/js/globalColorSelector.js', array('jquery'), '1.0', true); 
} 
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_custom_styles() { 
    wp_enqueue_style('custom-style', plugin_dir_url( __FILE__ ) . 'assets/css/globalColorSelector.css'); 
} 
add_action('wp_enqueue_scripts', 'enqueue_custom_styles'); 



function mfp_Add_Selector() {
    echo "<section id='dropdownCont'>

    <button id='showColorsBtn'><i class='arrowUp'></i> Global Color</button>

    <div id='colorPalette'>
        <div>
            <div class='primaryColor'>
                <span class=''>1</span>
                <button class='colorBtn' data-color='#fca311' style='background:#fca311;'></button>
                <button class='colorBtn' data-color='#caf0f8' style='background:#caf0f8;'></button>
                <button class='colorBtn' data-color='#f1faee' style='background:#f1faee;'></button>
                <button class='colorBtn' data-color='#023047' style='background:#023047;'></button>
                <button class='colorBtn' data-color='#14213D' style='background:#14213D;'></button>
                <button class='colorBtn' data-color='#e9c46a' style='background:#e9c46a;'></button>
                <button class='colorBtn' data-color='#231942' style='background:#231942;'></button>
                <button class='colorBtn' data-color='#111111' style='background:#111111;'></button>
                <button class='colorBtn' data-color='#dad7cd' style='background:#dad7cd;'></button>
                <button class='colorBtn' data-color='#e1bb80' style='background:#e1bb80;'></button>
                <button class='colorBtn' data-color='#EE5780' style='background:#EE5780;'></button>
                <input type='color' id='customPrimaryColor' />
                <label for='customPrimaryColor'>Custom</label>

            </div>

            <div class='secondaryColor'>
                <span class=''>2</span>
                <button class='colorBtn2' data-color='#14213D' style='background:#14213D;'></button>
                <button class='colorBtn2' data-color='#0c02ff' style='background:#0c02ff;'></button>
                <button class='colorBtn2' data-color='#e63946' style='background:#e63946;'></button>
                <button class='colorBtn2' data-color='#8ecae6' style='background:#8ecae6;'></button>
                <button class='colorBtn2' data-color='#fca311' style='background:#fca311;'></button>
                <button class='colorBtn2' data-color='#264653' style='background:#264653;'></button>
                <button class='colorBtn2' data-color='#cdb4db' style='background:#cdb4db;'></button>
                <button class='colorBtn2' data-color='#f1faee' style='background:#f1faee;'></button>
                <button class='colorBtn2' data-color='#588157' style='background:#588157;'></button>
                <button class='colorBtn2' data-color='#352208' style='background:#352208;'></button>
                <button class='colorBtn2' data-color='#006C8C' style='background:#006C8C;'></button>
                <input type='color' id='customSecondaryColor'/>
                <label for='customSecondaryColor'>Custom</label>

            </div>
            
        </div>
    </div>
</section>
";
}

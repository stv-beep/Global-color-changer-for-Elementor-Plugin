<?php // phpcs:ignore
/**
 * Plugin Name: Global color changer for Elementor
 * Plugin URI: https://belaweb.net
 * Description: Let visitor select colors to change website client-side colors
 * Version: 0.1.0
 * Author: Belaweb
 * Author URI: https://belaweb.net
 * Text Domain: global-color-selector
 * Domain Path: /plugins
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 
 * GitHub Branch:     master
 * Requires WP:       6.4.2
 * Requires PHP:      7.4
 * Tested up to: 6.4.2
 *
 * @link      https://belaweb.net
 * @author    Belaweb
 * @license   GPL-2.0+
 * @package   Global_Color_Selector
 *
 */
 
add_action('wp_footer', 'mfp_Add_Selector');
 
function mfp_Add_Selector() {
    echo "<section id='dropdownCont'>

    <button id='showColorsBtn'>⬆️ Color</button>

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


            </div>
            
        </div>
    </div>
</section>


<script>
    jQuery(document).ready(function($) {

        $('#showColorsBtn').on('click', function() {
            $('#colorPalette').slideToggle(200);
        });

        function changeColors(global, color) {

            if (global == 'primary') {
                $('.elementor-kit-8').css('--e-global-color-primary', color);
            } else if (global == 'secondary') {
                $('.elementor-kit-8').css('--e-global-color-secondary', color);
            }
        }

        $('.colorBtn2').on('click', function() {
            var color = $(this).data('color'); // Puedes ajustar según sea necesario

            changeColors('secondary', color);
        });


        $('.colorBtn').on('click', function() {
            var color = $(this).data('color');

            changeColors('primary', color);
        });
    });
</script>

<style>

    #dropdownCont {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1000;
    }

    @media (max-width:768px) {
        #dropdownCont {
            bottom: 76px;
            left: 1%;
        }
    }
    
    #colorPalette {
        display: none;
        background-color: #fff;
        padding: 2px 7px 0px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /*transition: height 0.3s ease-in-out;*/
    }

    #colorPalette > div {
        flex-direction: column;
        background-color: #fff;
        padding: 2px 7px 0px;
        border-radius: 5px;
        gap:2px;
    }

    .colorBtn, .colorBtn2 {
        width: 20px;
        height: 20px;
        border: none;
        cursor: pointer;
        padding:0px;
    }
    @media (max-width:981px) {
        .colorBtn, .colorBtn2 {
            width: 17.2px;
            height: 17.2px;
        }
    }

    

    #showColorsBtn {
        background-color: #11A900;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 1px 6px;
    }
    #showColorsBtn:hover {
        background-color: #2BBF1A;
    }
</style>

    ";
}

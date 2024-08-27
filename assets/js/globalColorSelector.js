window.onload = function() {
    jQuery(document).ready(function($) {
        
        $('#showColorsBtn').on('click', function() {
            $('#colorPalette').slideToggle(200);
            $('#showColorsBtn i').toggleClass("arrowDown");
        });

        function changeColors(global, color) {

            if (global == 'primary') {
                $('[class*="elementor-kit-"]').css('--e-global-color-primary', color);
                
            } else if (global == 'secondary') {
                $('[class*="elementor-kit-"]').css('--e-global-color-secondary', color);
            }
        }
        
        $('.colorBtn').on('click', function() {
            var color = $(this).data('color');
            changeColors('primary', color);
        });
        

        $('.colorBtn2').on('click', function() {
            var color = $(this).data('color');
            changeColors('secondary', color);
        });
        

        // custom colors
        $('#customPrimaryColor').on('input change', function() {
            
            var color = $(this).val();

            console.log(color);
            changeColors('primary', color);
        });

        $('#customSecondaryColor').on('input change', function() {
            var color = $(this).val();

            console.log(color);
            changeColors('secondary', color);
        });
        
    });

};
//--------------------------------------------------------------------------------//
// Css Animation Classes
//--------------------------------------------------------------------------------//

// Class Name  

// bounce  flash   pulse   rubberBand
// shake   headShake   swing   tada
// wobble  jello   bounceIn    bounceInDown
// bounceInLeft    bounceInRight   bounceInUp  bounceOut
// bounceOutDown   bounceOutLeft   bounceOutRight  bounceOutUp
// fadeIn  fadeInDown  fadeInDownBig   fadeInLeft
// fadeInLeftBig   fadeInRight fadeInRightBig  fadeInUp
// fadeInUpBig fadeOut fadeOutDown fadeOutDownBig
// fadeOutLeft fadeOutLeftBig  fadeOutRight    fadeOutRightBig
// fadeOutUp   fadeOutUpBig    flipInX flipInY
// flipOutX    flipOutY    lightSpeedIn    lightSpeedOut
// rotateIn    rotateInDownLeft    rotateInDownRight   rotateInUpLeft
// rotateInUpRight rotateOut   rotateOutDownLeft   rotateOutDownRight
// rotateOutUpLeft rotateOutUpRight    hinge   jackInTheBox
// rollIn  rollOut zoomIn  zoomInDown
// zoomInLeft  zoomInRight zoomInUp    zoomOut
// zoomOutDown zoomOutLeft zoomOutRight    zoomOutUp
// slideInDown slideInLeft slideInRight    slideInUp
// slideOutDown    slideOutLeft    slideOutRight   slideOutUp

//--------------------------------------------------------------------------------//
//convert hex to rgba
//--------------------------------------------------------------------------------//
// function hexTOrgba(hex, opacity) {
//     hex = hex.replace('#', '');
//     r = parseInt(hex.substring(0, 2), 16);
//     g = parseInt(hex.substring(2, 4), 16);
//     b = parseInt(hex.substring(4, 6), 16);

//     //result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
//     result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')';
//     // console.log(result);
//     return result;
// }

(function($) {

    var option;

    /*Sticky Header Plugin Start */
    $.fn.sktHeader = function(options) {

        option = $.extend({

            transparent_background: true,
            header_bg_color: hexTOrgba('#ffffff', 100),    

            border_top:false,
            border_top_color: '#aaa',
            border_top_height: 10,

            header_border_bottom: false,
            header_border_bottom_color: '#ddd',
            header_box_shadow : true,
            // header_box_shadow_value: '1px 1px 10px', 
            header_box_shadow_color : '#e4e4e4',
            header_box_shadow_value : '1px 1px 10px',

            header_width: '80%',
            header_animation : true,
            header_animation_class : 'animated ' + 'slideInDown',

            header_go_up: false, // second header style
            diraction_up : 0,

            logo_img : 'images/logo.jpg',
            logo_width : 140,
            logo_height : 140,          

            logo_txt_enable : false,
            logo_text : 'LOGO HERE',
            // logo_text_font_size : '4vmin',
            logo_text_font_size : '36px',

            copyRight :false,
            copyRightColor: '#005887',
            copyRightBgColor: '#dddddd'

        }, options);

        /* Sticky Header Style */
        $('.header').css({'width':option.header_width});//header width       

        if (option.transparent_background == true) {

            $('.header_container').css({
                'background': 'none',
                'box-shadow': 'none'
            }); 
           
        }else{ //console.log('transparent_background == false');

            $('.header_container').css({
                'background-color': option.header_bg_color                
            });

            if(option.header_box_shadow==true){
                $('.header_container').css({'box-shadow': option.header_box_shadow_value + ' ' + option.header_box_shadow_color});
            }
            // option.header_box_shadow_value

            if(option.header_border_bottom == true){
                $('.header_container').css({
                    'border-bottom' : '1px solid ' + option.header_border_bottom_color
                });
            } 

        }

        if(option.border_top==true){
            $('.header_container').css({
                'border-top': option.border_top_height + 'px solid ' + option.border_top_color   
            });
        }

        if(option.header_go_up == true){

            $('.header_container').css({
                'background-color': option.header_bg_color
            });  

        }

        if(option.logo_txt_enable == true){
            $('.logo').text(option.logo_text);
            $('.logo').css({'font-size' : option.logo_text_font_size, 'padding' : '17px'});
        }
        else{
            // $('.logo > img').css({'background-image' : 'url(' + option.logo_img + ' no-repeat)'}); 
            $(".logo img").attr("src",option.logo_img);
            $('.logo > img').css({'width' : option.logo_width + 'px'}); 
            $('.logo > img').css({'height' : option.logo_height + 'px'}); 
        }

        if(option.copyRight == true){

            jQuery('.copyRight').css({'color':option.copyRightColor});
            jQuery('.copyRight').css({'background-color':option.copyRightBgColor});

        }else{
            jQuery('.copyRight').css({'display':'none'})
        }

        return this;

    }    
     /*Sticky Header Plugin End */

    /* Sticky Header Start */
    jQuery(window).scroll(function() { 

        var scroller_anchor = $(".scroller-anchor").offset().top + $('.header').innerHeight(); 

        if(option.header_go_up == true){

            // option.transparent_background = false;

            var pos2 = window.pageYOffset;
              
            if(pos2 > option.diraction_up) {

                if (option.header_animation == true) {
                    $('.header_container').removeClass(option.header_animation_class);
                }

                $('.scroller').css({
                    'position': 'relative'
                });
                // console.log('scroll down ' );
            }

            if(option.diraction_up > pos2) {

                if (option.header_animation == true) {
                    $('.header_container').addClass(option.header_animation_class); 
                }

                $('.scroller').css({
                    'position': 'fixed'
                });
                // console.log('scroll up');
            }
            option.diraction_up = pos2;          

        }else{    
            
            // var scroller_anchor = $(".scroller-anchor").offset().top + $('.header').innerHeight();        

            if ($(this).scrollTop() >= scroller_anchor && $('.scroller').css('position') != 'fixed') {

                $(".header_container").removeClass(".scroll");          
                
                if (option.header_animation == true) {
                    $('.header_container').addClass(option.header_animation_class); 
                }

                $('.scroller').css({
                    'position': 'fixed'
                });

                if (option.transparent_background == true) {
                    $('.header_container').css({
                        'background-color': option.header_bg_color,
                        
                    });

                    if(option.header_box_shadow==true){
                        $('.header_container').css({'box-shadow': option.header_box_shadow_value + option.header_box_shadow_color});
                    }
                }

                if (option.header_border_bottom == true) {
                    $('.header_container').css({
                        'border-bottom': '1px solid ' + option.header_border_bottom_color
                    });
                }

                // console.log('scroll down');

            } else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'absolute') {

                if (option.header_animation == true) {
                    $('.header_container').removeClass(option.header_animation_class);
                }

                $('.scroller').css({
                    'position': 'relative'
                });            

                if (option.header_border_bottom == true) {
                    $('.header_container').css({
                        'border-bottom': 'none'
                    });
                }

                if (option.transparent_background == true) {
                    $('.header_container').css({
                        'background-color': 'rgba(0,0,0,0)',
                        // 'box-shadow' : '0px 0px 0px #000'
                        // 'background': 'none',
                        'box-shadow': 'none'
                    });
                    //$(".header a").css("cssText", "color : "+jQuery.sktMenu.textColor+" !important;");
                }else{
                    if (option.header_border_bottom == true) {
                        $('.header_container').css({
                            'border-bottom': '1px solid ' + option.header_border_bottom_color
                        });
                    }
                }

                 $('.header_container').css({
                        'position': 'absolute'
                    });

            }

        }
    });
    /* Sticky Header End */

})(jQuery);
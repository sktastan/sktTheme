/*     
    -----------------------------------------------------------
						sktMenu Section Start
	-----------------------------------------------------------
*/

jQuery.sktMenu = {

    responsive: true,
    mobilResponsiveWidth: 768,

    //CONSOLE_LOG: 1,
    itemWidth: 40,
    itemHeight: 28,

    listHoverBackground: false,
    listHoverBackgroundColor: '#dedede',

    borderBottom: true,
    borderBottoMWidth: 2,
    borderBottomColor: 'orange',

    // textColor: '#bbb',
    textColor: '#005887',
    textHoverColor: 'orange',
    // textSelectedColor: '#23e32e',
    textSelectedColor: '#005887',
    cssClassName: 'sktMenu',
    activeListItem: '',

    sub_menu_animation: true,
    sub_menu_animation_class: 'animated ' + 'bounceIn',

    landing_page: false,

    initSize: function() {
        if (jQuery(window).width() <= jQuery.sktMenu.mobilResponsiveWidth) {
            jQuery.sktMenu.responsive = false;

            if(jQuery.sktMenu.landing_page==true){
                jQuery(jQuery.sktMenu.getCssClassName() + ' li a:first').addClass('selectedResponsive');
            }
            else{
                
                jQuery(jQuery.sktMenu.getCssClassName() + ' li.current-menu-item > a').addClass('selectedResponsive');
            }
        
            jQuery( jQuery.sktMenu.getCssClassName() + ' li' ).has( "ul" ).append('<div class="dropDown">+</div>'); 
        }

        if (jQuery(window).width() > jQuery.sktMenu.mobilResponsiveWidth) {

            jQuery.sktMenu.responsive = true;

            if(jQuery.sktMenu.landing_page==true){
                jQuery(jQuery.sktMenu.getCssClassName() + ' li a:first').addClass('selected');
            }
            else{
                jQuery(jQuery.sktMenu.getCssClassName() + ' li.current-menu-item > a').addClass('selected');
            }
            
        }
    },

    initCss: function() {
        if(jQuery.sktMenu.sub_menu_animation==true){
            jQuery('.sktMenu li ul').addClass(jQuery.sktMenu.sub_menu_animation_class);
        }

        jQuery(jQuery.sktMenu.getCssClassName() + ' li a').css({ 'color': jQuery.sktMenu.textColor });
        jQuery(jQuery.sktMenu.getCssClassName() + ' > li > a').css({ 'padding-top': +jQuery.sktMenu.itemHeight + 'px', 'padding-bottom': +jQuery.sktMenu.itemHeight + 'px', 'padding-left': +jQuery.sktMenu.itemWidth + 'px', 'padding-right': +jQuery.sktMenu.itemWidth + 'px' });
        //jQuery.sktMenu.consoleWrite("initcss..." );
       
        jQuery('.show-menu').css({ 'color': jQuery.sktMenu.textColor});

        jQuery('.show-menu').hover(function() {
            jQuery(this).css({ 'background-color': jQuery.sktMenu.textColor});
        }, function() {
            jQuery(this).css({ 'background':'none' });
        });
        
    },

    appendSelectedClass: function() {
        // ---------- create css style dynmically ----------
        if (jQuery.sktMenu.borderBottom == true) {
            
            var addBackgroundColor = '';
            if(jQuery.sktMenu.listHoverBackground == true){
                addBackgroundColor = ' background : ' + jQuery.sktMenu.listHoverBackgroundColor + ' !important;' 
            }

            var selected_style = '<style> .selected {' + addBackgroundColor + ' padding-top:' + jQuery.sktMenu.itemHeight + 'px !important; padding-bottom:' + (jQuery.sktMenu.itemHeight - jQuery.sktMenu.borderBottoMWidth) + 'px !important;border-bottom :' + jQuery.sktMenu.borderBottoMWidth + 'px solid ' + jQuery.sktMenu.textSelectedColor + ' !important; color: ' + jQuery.sktMenu.textSelectedColor + ' !important;} </style>'
            jQuery(selected_style).appendTo('head');           

            var selected_style_Res = '<style> .selectedResponsive {' + addBackgroundColor + ' border-left :' + jQuery.sktMenu.borderBottoMWidth + 'px solid ' + jQuery.sktMenu.textSelectedColor + ' !important; color: ' + jQuery.sktMenu.textSelectedColor + ' !important;} </style>'
            
            jQuery(selected_style_Res).appendTo('head');

        }
    },

    checkWindowSize: function() {
        if (jQuery(window).width() <= jQuery.sktMenu.mobilResponsiveWidth && jQuery.sktMenu.responsive == true) {
            jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selected');
            jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selectedResponsive');
            // jQuery(jQuery.sktMenu.activeListItem).addClass('selectedResponsive');
            jQuery(jQuery.sktMenu.getCssClassName() + ' li.current-menu-item > a').addClass('selectedResponsive');
            jQuery.sktMenu.responsive = false;
        }

        if (jQuery(window).width() > jQuery.sktMenu.mobilResponsiveWidth && jQuery.sktMenu.responsive == false) {
            jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selected');
            jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selectedResponsive');
            // jQuery(jQuery.sktMenu.activeListItem).addClass('selected');
             jQuery(jQuery.sktMenu.getCssClassName() + ' li.current-menu-item > a').addClass('selected');
            jQuery(jQuery.sktMenu.getCssClassName() + ' li > ul').removeAttr('style');
            jQuery.sktMenu.responsive = true;
        }
    },

    getCssClassNameNoDot: function() {

        return jQuery.sktMenu.cssClassName;

    },

    getCssClassName: function() {
        var dotCssClass = '.' + jQuery.sktMenu.cssClassName;
        return dotCssClass;
    },

    setCssClassName: function(cssClass) {
        jQuery.sktMenu.cssClassName = cssClass;
        jQuery('ul:first').addClass(cssClass);
    },

    listItemWidth: function() {

    },

    listItemHeight: function() {

    },   

    /*  
         ---------- all jquery events ----------   
    */

    listResponsiveClick: function() {
       
        jQuery(jQuery.sktMenu.getCssClassName() + ' li .dropDown').on("click", function() { 

            var par = jQuery(this).parent();
            // console.log(jQuery.sktMenu.getCssClassName() + ' li#'+par.attr('id') + ' a');

            if (jQuery.sktMenu.responsive == false) {
                if (jQuery(jQuery.sktMenu.getCssClassName() + ' li#'+par.attr('id') + ' > a').hasClass('clicked')) {
                    jQuery(jQuery.sktMenu.getCssClassName() + ' li#'+par.attr('id') + ' > a').removeClass('clicked').next('ul').slideUp(100);
                } else if (jQuery(jQuery.sktMenu.getCssClassName() + ' li#'+par.attr('id') + ' > a').parents().siblings('a').hasClass('clicked')) { 

                    // jQuery(jQuery.sktMenu.getCssClassName() + ' li').append('<div class="dropDown">+</div>');

                    jQuery('.clicked').slideDown();
                    jQuery(jQuery.sktMenu.getCssClassName() + ' li#'+par.attr('id') + ' > a').addClass('clicked').next('ul').slideDown(100);


                } else {
                    jQuery(jQuery.sktMenu.getCssClassName() + ' li#'+par.attr('id') + ' > a').addClass('clicked').next('ul').slideDown(100);
                }
            }
          
        });
    },

    listItemClick: function() {
        // ---------- menu li a click event add class selected ----------
        jQuery(jQuery.sktMenu.getCssClassName() + ' > li > a').on('click', function(e) {

            if(jQuery.sktMenu.landing_page==true){
                e.preventDefault();
            }            

            if (jQuery.sktMenu.responsive == true) {   
                jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selected');
                jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selectedResponsive');
                jQuery.sktMenu.activeListItem = jQuery(this).addClass('selected');
            }

            if (jQuery.sktMenu.responsive == false) {
                jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selected');
                jQuery(jQuery.sktMenu.getCssClassName() + ' li a').removeClass('selectedResponsive');
                jQuery.sktMenu.activeListItem = jQuery(this).addClass('selectedResponsive');               
            }
           
        });
    },

    listItemHover: function() {
        // ---------- hover function chaange border-bottom and padding ----------  
        if (jQuery.sktMenu.borderBottom == true) {
            jQuery(jQuery.sktMenu.getCssClassName() + ' > li').hover(function() {
                jQuery(this).find("a:first").css({
                    'padding-top': +jQuery.sktMenu.itemHeight + 'px',
                    'padding-bottom': (jQuery.sktMenu.itemHeight - jQuery.sktMenu.borderBottoMWidth) + 'px',
                    'border-bottom': jQuery.sktMenu.borderBottoMWidth + 'px solid ' + jQuery.sktMenu.borderBottomColor
                });

                if (jQuery(window).width() <= jQuery.sktMenu.mobilResponsiveWidth && jQuery.sktMenu.responsive == false) {
                    jQuery(this).find("a:first").css({
                        'border-left': jQuery.sktMenu.borderBottoMWidth + 'px solid'
                    });
                }

            }, function() {

                jQuery(this).find("a:first").css({
                    'border-bottom': 'none',
                    'padding-top': +jQuery.sktMenu.itemHeight + 'px',
                    'padding-bottom': jQuery.sktMenu.itemHeight + 'px'
                });

                if (jQuery(window).width() <= jQuery.sktMenu.mobilResponsiveWidth && jQuery.sktMenu.responsive == false) {
                    jQuery(this).find("a:first").css({
                        'border-left': 'none'
                    });
                }
            });
        }

        if (jQuery.sktMenu.listHoverBackground == true) {
            jQuery(jQuery.sktMenu.getCssClassName() + ' li > a').hover(function() {
                jQuery(this).css({ 'background': jQuery.sktMenu.listHoverBackgroundColor });
            }, function() {
                jQuery(this).css({ 'background': 'none' });
            });
        }
    },

    listItemHoverColor: function() {
        // ---------- hover function chaange menu li a color ----------
        jQuery(jQuery.sktMenu.getCssClassName() + ' li a').hover(function() {
            jQuery(this).css({ 'color': jQuery.sktMenu.textHoverColor });
        }, function() {
            jQuery(this).css({ 'color': jQuery.sktMenu.textColor });
        });
    },

    reSize: function() {
        jQuery(window).resize(function() {
            jQuery.sktMenu.checkWindowSize();
        });
    },

}

jQuery.sktMenuReady = function() {
    jQuery.sktMenu.initSize();
    jQuery.sktMenu.initCss();
    jQuery.sktMenu.appendSelectedClass();
    jQuery.sktMenu.reSize();
    jQuery.sktMenu.listResponsiveClick();
    jQuery.sktMenu.listItemClick();
    jQuery.sktMenu.listItemHover();
    jQuery.sktMenu.listItemHoverColor();
}

jQuery(document).ready(function() {
    //jQuery.sktHeaderReady();
    jQuery.sktMenuReady();

});

/*     
    -----------------------------------------------------------
						sktMenu Section End
	-----------------------------------------------------------
*/
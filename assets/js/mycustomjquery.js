$(document).ready(function(){
    
    /*=====================Slider Principal==========================*/
    $(".slider-main").slick({
        dots:               false,
        infinite:           true,
        slidesToShow:       1,
        slidesToScroll:     1,
        autoplay:           true,
        arrows:             true,
        speed:              2000,
        autoplaySpeed:      5000,
    });
   

    // Slider con más de un item
    $(".slider-customers").slick({

        arrows:         false,

        dots:           false,

        infinite:       true,

        slidesToShow:   5,

        slidesToScroll: 1,

        speed:          2000,

        autoplaySpeed:  2000,

        autoplay:       true,

        respondTo:      'window',

        mobileFirst:    true,

        responsive: [

            {

                breakpoint: 1080,

                settings: {

                    slidesToShow: 5,

                    slidesToScroll: 1

                }

            },

            {

                breakpoint: 991,

                settings: {

                    slidesToShow: 4,

                    slidesToScroll: 1

                }

            },
            {

                breakpoint: 820,

                settings: {

                    slidesToShow: 3,

                    slidesToScroll: 1

                }

            },

            {

                breakpoint: 769,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1

                }

            },

            {

                breakpoint: 690,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1

                }

            },

            {

                breakpoint: 620,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1

                }

            },

            {

                breakpoint: 480,

                settings: {

                    slidesToShow: 2,

                    slidesToScroll: 1

                }

            },

            {

                breakpoint: 300,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                }

            },
            {

                breakpoint: 277,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                }

            },
            {

                breakpoint: 240,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                }

            },
            {

                breakpoint: 230,

                settings: {

                    slidesToShow: 1,

                    slidesToScroll: 1

                }

            }

        ]

    })

    // Includes
    // $('.menu-main').load('_menu-main.html');

    /*===============Parallax====================*/
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion =  (barra * 0.50);
        // var size =  (barra * 0.050);

        $('.parallax-int').css({
            'background-position': 'center -' + posicion + 'px',
            // 'background-size': 100 + size + '%',
        });
    })
    
    /*===================Sky====================*/
    
    
    $('.up').click(function(){
        $('body,html').animate({
            scrollTop: '0px'
        },2000);
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 0){
            $('.up').slideDown(500);
        }else{
            $('.up').slideUp(500);
        }
    });
    
})
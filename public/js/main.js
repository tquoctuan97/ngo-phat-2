$(window).on('load',function() {
    var owl = $('.owl-carousel');
    var owl3 = $('.owl-carousel-3');
    var owl5 = $('.owl-carousel-5');



    owl.owlCarousel({
        items: 1,
        nav: true,
        loop: true,
        smartSpeed: 400,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
    });
    owl3.owlCarousel({
        center:true,
        items: 3,
        smartSpeed: 400,
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsiveClass:true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900:{
                items: 3
            }
        }
    });

    owl5.owlCarousel({
        center: true,
        smartSpeed: 400,
        nav: true,
        loop: true,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            300: {
                items: 1,
                stagePadding: 0,
            },
            700:{
                items: 3,
                stagePadding: 40
            },
            1200:{
                stagePadding: 140
            },
            1400:{
                stagePadding: 160
            },
            1500:{
                stagePadding: 190
            },
            1600:{
                items: 5, 
                stagePadding: 120
            }

        }   
    });



    // function clickCarousel(owl) {
    //     $('.arr--right').on('click',function () {
    //         owl.trigger('next.owl.carousel',[500]);
    //     });
    //     $('.arr--left').on('click',function () {
    //         owl.trigger('prev.owl.carousel',[500]);
    //     });
    // }
    $('#hamburger').click(function (e) { 
        e.preventDefault();
        $('#menu-mobile').addClass('active');
    });
    $('#close-menu').click(function (e) { 
        e.preventDefault();
        $('#menu-mobile').removeClass('active');
    });


})
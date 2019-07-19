
$(window).on('load',function() { 

        
// owlCarousel

    var owl = $('.owl-carousel');
    var owl3 = $('.owl-carousel-3');
    var owl5 = $('.owl-carousel-5');



    owl.owlCarousel({
        items: 1,
        nav: true,
        loop: true,
        smartSpeed: 400,
        margin: 0,
        autoplay: true,
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
            },
            1500:{
                items: 4
            }
        }
    });

    owl5.owlCarousel({
        center: true,
        smartSpeed: 400,
        nav: true,
        loop: true,
        autoplay: true,
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



    if ($(window).width() <= 600 ){ 
        $("#menu").slideUp();
        $('#hamburger').click(function (e) { 
            e.preventDefault();
            $('#menu').slideToggle("slow");                       
            $('#hamburger').children().toggleClass('active');
        });
    }
    
    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
          $("header").addClass("header__sticky");
        } else {
          $("header").removeClass("header__sticky");
        }
      });
// func stop video
// https://gist.github.com/cferdinandi/9044694
    // function stopVideo(element) {
	// var iframe = $('iframe');
	// var video = $('video');
	// if (iframe) {
	// 	var iframeSrc = iframe.src;
	// 	iframe.src = iframeSrc;
	// }
	// if (video) {
	// 	video.click();
	// }
    // };
    var videoWrap = $('#video-popup');
    $("[data-module='popup-video']").click(function (e) { 
        videoWrap.toggleClass('active');        

    });
    $('#close-video').click(function (e) { 
            //$('#popup-youtube-player').stopVideo();
        $('.embedded-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');    
    });
    

})
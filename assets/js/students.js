jQuery('document').ready(function(e) {
    let owl1 = $('.owl-carousel-1')
    owl1.owlCarousel({
        loop:true,
        margin:20,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true,
        autoWidth:true,
        merge:true,
        rtl:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

    let owl2 = $('.owl-carousel-2')
    owl2.owlCarousel({
        loop:true,
        margin:20,
        autoplay:true,
        autoplayTimeout:3500,
        autoplayHoverPause:true,
        autoWidth:true,
        merge:true,
        rtl:true,
        responsive:{
            0:{
                items:1,
                rtl:false,
            },
            600:{
                items:2,
                rtl:false,
            },
            1000:{
                items:3
            }
        }
    })

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        // autoWidth:true,
        merge:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

}) 


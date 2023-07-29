jQuery('document').ready(function(e) {

    $('.loader-wrapper').fadeOut();

    $(window).scroll(function() {
    if ($(this).scrollTop() > 0){
        $('.header').addClass("sticky");
        $('.main-nav-items a').css("color", "black");
        $('.line').css('stroke', 'black')
        // $('.section-header').addClass("sticky_section");
        // $('.section-main-nav-items a').css("color", "black");
        // $('.section-logo-img img').attr("src", '../img/Gymko_logo_sa_tekstom-svg.svg')
 
    } else{
        $('.header').removeClass("sticky");
        $('.main-nav-items a').css("color", "white");
        $('.line').css('stroke', 'white');
        $('.dropdown-item').css('color', 'black')
        if($('svg').hasClass('active')){
            $('.line').css('stroke', 'black');
            $('.main-nav-items a').css("color", "black");
            // $('.section-logo-img img').attr("src", '../img/Gymko_logo_sa_tekstom-svg.svg')
        }
        // $('.section-header').removeClass("sticky_section");
        // $('.section-main-nav-items a').css("color", "white");
        // $('.section-logo-img img').attr("src", '../img/Gymko_logo_white_sa_tekstom-svg.svg');
        
    }
    });

    $('.logo-img img').click(function(){
        window.location.href = 'index.html'
    });

    $('.section-logo-img img').click(function(){
        window.location.href = 'index.html'
    });

    $('svg').click(function(){
        if($('svg').hasClass('active')){
            $('header').addClass('nav-open')
            $('header').addClass('fill-header')
            $('.line').css('stroke', 'black')
            // $('.section-logo-img img').attr("src", '../img/Gymko_logo_sa_tekstom-svg.svg')
            $('.main-nav-items a').css("color", "black");
        }
        if(!$('svg').hasClass('active')){
            $('header').removeClass('nav-open')
            $('header').removeClass('fill-header')
            if($(window).scrollTop() === 0){
                $('.line').css('stroke', 'white')
                // $('.section-logo-img img').attr("src", '../img/Gymko_logo_white_sa_tekstom-svg.svg')
            }
        }
    })
})  


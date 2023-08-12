jQuery('document').ready(function(e) {
    $('.loader-wrapper').fadeOut();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0){
            $('.section-header').addClass("sticky_section");
            $('.section-main-nav-items a').css("color", "black");
            $('.section-logo-img img').attr("src", 'http://gymko.edu.rs/wp-content/uploads/2023/08/Gymko_logo_sa_tekstom-svg-svg-1-compressed-1.png')
            $('.line').css('stroke', 'black')
        }else{
            $('.section-header').removeClass("sticky_section");
            $('.section-main-nav-items a').css("color", "white");
            $('.section-logo-img img').attr("src", 'http://gymko.edu.rs/wp-content/uploads/2023/08/Gymko_logo_sa_tekstom-svg-svg-1-compressed-1-1.png');
            $('.dropdown-item').css('color', 'black')
            $('.line').css('stroke', 'white');
            if($('svg').hasClass('active')){
                $('.line').css('stroke', 'black');
                $('.section-logo-img img').attr("src", 'http://gymko.edu.rs/wp-content/uploads/2023/08/Gymko_logo_sa_tekstom-svg-svg-1-compressed-1.png')
            }
        }
    })
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
            $('.section-logo-img img').attr("src", 'http://gymko.edu.rs/wp-content/uploads/2023/08/Gymko_logo_sa_tekstom-svg-svg-1-compressed-1.png')
            $('.main-nav-items a').css("color", "black");
        }
        if(!$('svg').hasClass('active')){
            $('header').removeClass('nav-open')
            $('header').removeClass('fill-header')
            if($(window).scrollTop() === 0){
                $('.line').css('stroke', 'white')
                $('.section-logo-img img').attr("src", 'http://gymko.edu.rs/wp-content/uploads/2023/08/Gymko_logo_sa_tekstom-svg-svg-1-compressed-1-1.png')
            }
        }
    })
})  

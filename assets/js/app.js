jQuery('document').ready(function(e) {
    $(window).scroll(function() {
    if ($(this).scrollTop() > 0){
        $('.header').addClass("sticky");
        $('.main-nav-items a').css("color", "black");
        $('.line').css('stroke', 'black')
    } else{
        $('.header').removeClass("sticky");
        $('.main-nav-items a').css("color", "white");
        $('.line').css('stroke', 'white');
        $('.dropdown-item').css('color', 'black')
        if($('svg').hasClass('active')){
            $('.line').css('stroke', 'black');
            $('.main-nav-items a').css("color", "black");
        }
    }
    });
    $('.logo-img img').click(function(){
        window.location.href = '/'
    });
    $('.section-logo-img img').click(function(){
        window.location.href = '/'
    });
    $('svg').click(function(){
        if($('svg').hasClass('active')){
            $('header').addClass('nav-open')
            $('header').addClass('fill-header')
            $('.line').css('stroke', 'black')
            $('.main-nav-items a').css("color", "black");
        }
        if(!$('svg').hasClass('active')){
            $('header').removeClass('nav-open')
            $('header').removeClass('fill-header')
            if($(window).scrollTop() === 0){
                $('.line').css('stroke', 'white')
            }
        }
    })
})  


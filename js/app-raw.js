//slick slider videos
$('.slider-videos').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});
//slick slider depoimentos
$('.depoimentos-empresas .depoimento-slide').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    
});
//slick slider equipe
$('.equipe .slide-equipe').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});

//contador
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 10000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
//menu mobile
$('.menu-mobile img').click(function(){
    $('.menu-mobile ul').slideToggle();
});


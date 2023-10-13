window.scroll(function () {
    if ($(this).scrollTop() > 50) {
        $("nav").addClass("newClass");
    } else {
        $("nav").removeClass("newClass");
    }
});

$(".testimoni-slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});
$(".gallery-slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    vertical: true,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow:
        '<a href="" class="slick-prev" ><i class="fas fa-angle-up" aria-hidden="true"></i></a>',
    nextArrow:
        '<a href="" class="slick-next" ><i class="fas fa-angle-down" aria-hidden="true"></i></a>',
});

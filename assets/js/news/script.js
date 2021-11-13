$(function() {
    $('.news-slider__main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        prevArrow: '<button class="slick-prev"><span class="slider-arrow-left"></span></button>',
        nextArrow: '<button class="slick-next"><span class="slider-arrow-right"></span></button>',
        asNavFor: '.news-slider__navigation',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    dots: false,
                    arrows: true,
                    infinite: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button class="slick-prev"><span class="slider-arrow-left"></span></button>',
                    nextArrow: '<button class="slick-next"><span class="slider-arrow-right"></span></button>',
                }
            },
            {
                breakpoint: 580,
                settings: {
                    dots: false,
                    arrows: true,
                    infinite: false,
                    adaptiveHeight: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: '<button class="slick-prev"><span class="slider-arrow-left"></span></button>',
                    nextArrow: '<button class="slick-next"><span class="slider-arrow-right"></span></button>',
                }
            },
        ]
    });

    $('.news-slider__navigation').slick({
        infinite: true,
        autoplay: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: 0,
        asNavFor: '.news-slider__main',
        arrows: true,
        prevArrow: '<button class="slick-prev"><span class="slider-arrow-left"></span></button>',
        nextArrow: '<button class="slick-next"><span class="slider-arrow-right"></span></button>',
        vertical: false,
    });

    $('.news-slider__navigation').on('init', function(slick){
        console.log(111);
    });

    $('a[data-slide]').click(function(e) {
        e.preventDefault();
        var slideno = $(this).data('slide');
        $('.product-detail__images-slider').slick('slickGoTo', slideno - 1);
    });
});

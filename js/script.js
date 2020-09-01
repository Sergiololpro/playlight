$(document).ready(function () {

    // Слайдер на главной
    if ($('.hits__slider').length) {
        $('.hits__slider').slick({
            slidesToScroll: 3,
            slidesToShow: 3,
            centermode: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        centerMode: true,
                        variableWidth: true
                    }
                }
            ]
        });
    }

    // Открыть меню
    $(".header__menu").on("click", function() {
        $(".header_menu").addClass("active");
    });

    // Закрыть меню
    $(".header_menu__close").on("click", function() {
        $(".header_menu").removeClass("active");
    });

    $(window).on("scroll load", function() {
 
        // Меню в категории
        if ($('.cat_menu').length) {
            $('.cat_menu').css("height", $(".cat_menu__wp").height());

            var offset = $('.cat_menu').offset().top;
            var scroll = $(window).scrollTop() + 70;

            if (scroll >= offset) {
                $('.cat_menu').addClass("active");
            } else {
                $('.cat_menu').removeClass("active");
            }

            $(".cat__block").each(function () {
                var windowTop = $(window).height() + $(window).scrollTop(),
                    objectTop = $(this).offset().top;
    
                if (windowTop > objectTop && windowTop < $(this).offset().top + $(this).height()) {
                    $(".cat_menu__el").removeClass("active");
                    $(".cat_menu__el[data-id='" + $(this).data("id") + "']").addClass("active");
                }
            });
        }
    });

    // Скролл в категори
    $(".cat_menu__el").on("click", function() {
        var id = $(this).data("id");
        
        $(".cat_menu__el").removeClass("active");
        $(this).addClass("active");

        $('body, html').animate({
            scrollTop: $(".cat__block[data-id='" + id + "']").offset().top - $(".header").height() - $(".cat_menu").height() - 30
        }, 500);
    });

    // Галлерея в карточке
    $(".product__images .product__image").on("click", function() {
        var id = $(this).data("id");
        
        $(".product__image-main").attr("style", $(this).attr("style"));
    });

    // Select2
    $('.select2').select2({
        minimumResultsForSearch: -1
    });

    // Показать поиск
    $(".show_search").on("click", function() {
        $(".search").addClass("active");
    });

    // Показать окно
    $(".modal_show").on("click", function() {
        $(".modal, .overlay").addClass("active");
    });

    // Скрыть окно
    $(".overlay, .modal__close").on("click", function() {
        $(".modal, .overlay").removeClass("active");
    });

});

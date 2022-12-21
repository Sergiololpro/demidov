$(document).ready(function () {

    // Меню
    $(".header__menu").on("click", function() {
        $(".mobile_menu").addClass("active");
    });

    $(".mobile_menu__close").on("click", function() {
        $(".mobile_menu").removeClass("active");
    });

    // Слайдер в баннере
    if ($('.banner__slider').length) {
        $(".banner__slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="banner__nav banner__nav-prev"></div>',
            nextArrow: '<div class="banner__nav banner__nav-next"></div>',
            dots: true
        });
    }

    // Меню
    $(".nav__el").on("mouseenter", function() {
        var id = $(this).data("id");

        $(".nav__el, .drop").removeClass("active");

        $(this).addClass("active");
        $(".drop[data-id=" + id + "]").addClass("active");
    });

    $(".nav__el, .drop").on("mouseleave", function() {
        var check = true;

        setTimeout(function(){
            document.querySelectorAll(':hover').forEach(function(em){
                if (em.className.includes("nav") || em.className.includes("drop")) {
                    check = false;
                }
            });

            if (check) {
                $(".nav__el, .drop").removeClass("active");
            }
        }, 100)
    });

    // Карта
    $(".checked").on("click", function(event) {
        var height = parseInt($(".map_window").css("height")),
            width = parseInt($(".map_window").css("width"));
    
        $(".map_window").css({
            left: event.offsetX - width / 2 + 20,
            top: event.offsetY - height / 3 - 120
        });

        $(".map_window__city").html($(this).data("city"));
        $(".map_window__title").html($(this).data("title"));
        $(".map_window__phone").html($(this).data("phone")).attr("href", "tel:" + $(this).data("phone"));
        $(".map_window__email").html($(this).data("email")).attr("href", "mailto:" + $(this).data("email"));;
        $(".map_window__address span").html($(this).data("address"));

        $(".map_window").addClass("active");
    });

    // Слайдер поставщики
    if ($('.provider__slider').length) {
        $(".provider__slider").slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<div class="provider__nav provider__nav-prev"></div>',
            nextArrow: '<div class="provider__nav provider__nav-next"></div>',
            dots: true,
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }]
        });
    }

    // Слайдер производство
    if ($('.prod__slider').length) {
        $(".prod__slider").slick({
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<div class="prod__nav prod__nav-prev"></div>',
            nextArrow: '<div class="prod__nav prod__nav-next"></div>',
            dots: true,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 641,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }

    // Слайдер каталог
    if ($('.cat_slider').length) {
        $(".cat_slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="cat_slider__nav cat_slider__nav-prev"></div>',
            nextArrow: '<div class="cat_slider__nav cat_slider__nav-next"></div>',
            dots: true
        });
    }

    // Фото в карточке
    $(".card__img").on("click", function() {
        $(".card__img").removeClass("active");

        $(this).addClass("active");

        $(".card__image").attr("style", $(this).attr("style"));
    });

    // Переключатель в карточке
    $(".card_switch").on("click", function() {
        $(this).toggleClass("active");
    });

    // Табы в карточке
    $(".card_tabs__tab").on("click", function() {
        var id = $(this).data("id");

        $(".card_tabs__tab, .card_cont__el").removeClass("active");

        $(this).addClass("active");
        $(".card_cont__el[data-id=" + id + "]").addClass("active");
    });

    // Фильрры 1 уровень
    $(".filters__arrow_1").on("click", function() {
        var $el = $(this).closest(".filters__level_1");

        $el.toggleClass("active");
    });

    // Фильрры 2 уровень
    $(".filters__arrow_2").on("click", function() {
        var $el = $(this).closest(".filters__level_2");

        $el.toggleClass("active");
    });

    // Select2
    if ($.fn.select2) {
        $('.select2').select2({
            minimumResultsForSearch: -1,
            placeholder: $(this).data("placeholder")
        });
    }

    // Закрыть окно
    $(".modal__close").on("click", function() {
        $(this).closest(".modal").removeClass("active");
    });

    // Открыть окно
    $(".cart_el-add").on("click", function() {
        $(".modal_cart").addClass("active");
    });

});

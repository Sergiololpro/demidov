$(document).ready(function () {

    $(window).on('scroll load', function() {
        if ($(this).scrollTop() > 0) {
            $('.header').addClass('short');
        } else {
            $('.header').removeClass('short');
        }
    });

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
    if ($.fn.select2 && !$("#calculator").length) {
        $('.select2').select2({
            minimumResultsForSearch: -1,
            placeholder: $(this).data("placeholder")
        });
    }

    // Закрыть окно
    $(".modal__close, .close_modal").on("click", function() {
        $(this).closest(".modal").removeClass("active");
    });

    // Открыть окно
    $(".cart_el-add").on("click", function() {
        $(".modal_cart").addClass("active");
    });

    // Открыть отзыв
    $(".reviews__button").on("click", function() {
        $(".modal_reviews").addClass("active");
    });

    // Открыть добавить отзыв
    $(".reviews__add").on("click", function() {
        $(".modal_reviews_add").addClass("active");
    });

    // Кабинет, переключение заказов
    $(".cabinet__filter").on("click", function() {
        var id = $(this).data("id");

        $(".cabinet__filter, .cabinet__el").removeClass("active");

        $(this).addClass("active");

        if (id == 1) {
            $(".cabinet__el").addClass("active");
        } else {
            $(".cabinet__el[data-id=" + id + "]").addClass("active");
        }
    });

    // Открыть фильтры
    $(".ct__filt").on("click", function() {
        $(".ct__filters").addClass("active");
    });

    // Закрыть фильтры
    $(".ct__filt_close").on("click", function() {
        $(".ct__filters").removeClass("active");
    });

    // Вакансии, переключение
    $(".vacancy_list__nav").on("click", function() {
        var id = $(this).data("id");

        $(".vacancy_list__nav, .vacancy_list__el").removeClass("active");

        $(this).addClass("active");

        if (id == 1) {
            $(".vacancy_list__el").addClass("active");
        } else {
            $(".vacancy_list__el[data-id=" + id + "]").addClass("active");
        }
    });

    // Вакансии, раскрытие
    $(".vacancy_list__button").on("click", function() {
        $(this).closest(".vacancy_list__el").toggleClass("opened");
    });

    // Контакты, переключение
    $(".contacts__tab").on("click", function() {
        var id = $(this).data("id");

        $(".contacts__tab, .contacts__wrp").removeClass("active");

        $(this).addClass("active");
        $(".contacts__wrp[data-id=" + id + "]").addClass("active");
    });

    // Контакты, город, переключение
    $(".contacts__city").on("click", function() {
        var id = $(this).data("id");

        $(".contacts__city, .contacts__c").removeClass("active");

        $(this).addClass("active");
        $(".contacts__c[data-id=" + id + "]").addClass("active");
    });

    // Modal video
    $(".modal_video").modalVideo();

    // Фильтр новостей
    $(".news_page_filters__el").on("click", function() {
        var year = $(this).data("year");

        $(".news_page_filters__el, .news_page_el, .press__el").removeClass("active");

        $(this).addClass("active");

        if (year == 1) {
            $(".news_page_el, .press__el").addClass("active");
        } else {
            $(".news_page_el[data-year=" + year + "]").addClass("active");
            $(".press__el[data-year=" + year + "]").addClass("active");
        }
    });

    // Оценка
    $(".quality__el").on("click", function() {
        var id = $(this).data("id");

        $(this).closest(".quality__els").find(".quality__el").removeClass("active");

        $(this).addClass("active");

        $(this).closest(".quality__els").find("input").val(id);
        
        if (id == 0) {
            $(this).closest(".quality__row").find(".modal__input input")[0].setAttribute("disabled", "disabled");
        } else {
            $(this).closest(".quality__row").find(".modal__input input")[0].removeAttribute("disabled"); 
        }
    });

    // Открыть поиск
    $(".header__search").on("click", function() {
        $(".nav_search").toggleClass("active");
    });

    // Закрыть поиск
    $(".search_block__close").on("click", function() {
        $(".nav_search").removeClass("active");
    });

    // Календарь
    if (typeof dates !== 'undefined') {
        var vue = new Vue({
            el: '#vue',
            data: {
                dates: dates.length ? dates : [],
                curDate: "",
                curDateFull: "",
                times: ["12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30"],
                activeTimes: [],
                dateRow: "",
                selectedDate: "",
                selectedTime: "",
            },
            mounted: function() {
                var self = this;

                $('#calendar').dateRangePicker({
                    startOfWeek: 'monday',
                    language: "ru",
                    singleMonth: true,
                    showTopbar: false,
                    separator: ',',
                    customArrowPrevSymbol: '&lsaquo;',
                    customArrowNextSymbol: '&rsaquo;',
                    startDate: moment(),
                    container: $(".booking__calendar")
                }).bind('datepicker-change',function(event, obj) {
                    self.curDate = moment(obj.date1).format('DDMMYYYY');
                    self.curDateFull = obj.date1;

                    self.showTime();

                    $(".booking__time").removeClass("active");
                });
            },
            methods:{
                showTime() {
                    var self = this;

                    self.activeTimes = [];

                    self.dates.forEach((date) => {
                        if (date.date == self.curDate) {
                            console.log()
                            self.times.forEach((time) => {
                                if (!date.times.includes(time)) {
                                    self.activeTimes.push(time)
                                }
                            });
                        }
                    });
                },

                chooseTime(time) {
                    var self = this;

                    moment.locale('ru');

                    self.dateRow = moment(self.curDateFull).format('D MMMM YYYY') + " в " + time;

                    self.selectedDate = self.curDate;
                    self.selectedTime = time;
                },
            }
        });
    }

    // Открыть цель
    $(".value__more").on("click", function() {
        $(this).closest(".value__el").find(".value__content").addClass("active");
        $(this).hide();
    });

    // Fancybox
    if ($(".fancybox").length) {
        $(".fancybox").fancybox();
    }

    // Избранное
    $(".card__fav").on("click", function() {
        $(this).toggleClass("active");
    });

    // Сфера открыть
    $(".sfera__el").on("click", function() {
        var id = $(this).data("id");

        $(".modal_sfera").removeClass("active");

        $(".modal_sfera[data-id=" + id + "]").addClass("active");
    });

    // Виды списка
    $(".ct_views__el").on("click", function() {
        var type = $(this).data("type");

        $(".ct_views__el").removeClass("active");

        $(this).addClass("active");

        $(".ct__content").removeClass("tiles").removeClass("table");

        if (type == "tiles") {
            $(".ct__content").addClass("tiles");
        }

        if (type == "table") {
            $(".ct__content").addClass("table");
        }
    });

    // Калькулятор
    if (typeof types !== 'undefined') {
        var vue = new Vue({
            el: '#calculator',
            data: {
                types: types.length ? types : [],
                metall_types: metall_types.length ? metall_types : [],
                type_selected: '',
                p: 3.1415926535,
                density: 7850,

                armatura_diameters: armatura_diameters.length ? armatura_diameters : [],
                armatura_diameter: "",
                armatura_length: "",
                armatura_weight: "",

                beam__types: beam__types.length ? beam__types : [],
                beam__normal: beam__normal.length ? beam__normal : [],
                beam__slope: beam__slope.length ? beam__slope : [],
                beam__number: [],
                beam__type: "",
                beam__id: "",
                beam_length: "",
                beam__weight: "",

                channel_types: channel_types.length ? channel_types : [],
                channel_normal: channel_normal.length ? channel_normal : [],
                channel_slope: channel_slope.length ? channel_slope : [],
                channel_number: [],
                channel_type: "",
                channel_id: "",
                channel_length: "",
                channel_weight: "",

                corner_type: "",
                corner_width: "",
                corner_height: "",
                corner_thickness: "",
                corner_length: "",
                corner_weight: "",

                pipe_type: "",
                pipe_diameter: "",
                pipe_thickness: "",
                pipe_length: "",
                pipe_weight: "",

                profile_pipe_type: "",
                profile_pipe_width: "",
                profile_pipe_height: "",
                profile_pipe_thickness: "",
                profile_pipe_length: "",
                profile_pipe_weight: "",

                circle_type: "",
                circle_diameter: "",
                circle_length: "",
                circle_weight: "",

                square_type: "",
                square_side: "",
                square_length: "",
                square_weight: "",

                six_type: "",
                six_number: "",
                six_length: "",
                six_weight: "",

                ribbon_type: "",
                ribbon_width: "",
                ribbon_thickness: "",
                ribbon_length: "",
                ribbon_weight: "",

                sheet_type: "",
                sheet_width: "",
                sheet_thickness: "",
                sheet_length: "",
                sheet_quantity: "",
                sheet_weight: "",
            },
            mounted: function() {
                var self = this;
                
                $(".select2_images").select2({
                    minimumResultsForSearch: -1,
                    placeholder: $(this).data("placeholder"),
                    templateResult: formatState
                }).on('change', function () {
                    self.type_selected = this.value;
                });
        
                function formatState (state) {
                    if (!state.id) {
                      return state.text;
                    }

                    var $state = $('<span><span style="background-image: url(img/select2_image-' + state.element.value.toLowerCase() + '.jpg)" class="select2__img"></span>' + state.text + '</span>');
        
                    return $state;
                };
            },
            methods:{
                calcAramturaWeight() {
                    this.armatura_weight = (this.p * Math.pow(this.armatura_diameter * 0.001, 2) / 4 * this.density * this.armatura_length).toFixed(3);
                },

                calcBeamWeight() {
                    if (this.beam__type == 1) {
                        this.beam__number = this.beam__normal[this.beam__id];
                    }

                    if (this.beam__type == 2) {
                        this.beam__number = this.beam__slope[this.beam__id];
                    }
                
                    this.beam__weight = (this.density * (2 * this.beam__number.b * 0.001 * this.beam__number.t * 0.001 + (this.beam__number.h * 0.001 - 2 * this.beam__number.t * 0.001) * this.beam__number.s * 0.001) * this.beam_length).toFixed(3);
                },

                calcChannelWeight() {
                    if (this.channel_type == 1) {
                        this.channel_number = this.channel_normal[this.channel_id];
                    }

                    if (this.channel_type == 2) {
                        this.channel_number = this.channel_slope[this.channel_id];
                    }
                
                    this.channel_weight = (this.density * (2 * this.channel_number.b * 0.001 * this.channel_number.t * 0.001 + (this.channel_number.h * 0.001 - 2 * this.channel_number.t * 0.001) * this.channel_number.s * 0.001) * this.channel_length).toFixed(3);
                },

                calcCornerWeight() {
                    this.corner_weight = (((this.corner_width + this.corner_height - this.corner_thickness) * this.corner_thickness + (1 - this.p / 4)) * this.density * 0.000001).toFixed(3);
                },

                calcPipeWeight() {
                    this.pipe_weight = (this.p * 0.001 * (this.pipe_diameter - this.pipe_thickness) * this.pipe_thickness * this.pipe_type * 0.001).toFixed(3);
                },

                calcProfilePipeWeight() {
                    this.profile_pipe_weight = (this.profile_pipe_type / 7850 * 0.0157 * this.profile_pipe_thickness * (+this.profile_pipe_width + +this.profile_pipe_height - 2.86 * this.profile_pipe_thickness) * this.profile_pipe_length).toFixed(3);
                },

                calcCircleWeight() {
                    this.circle_weight = (this.p * Math.pow(this.circle_diameter * 0.001, 2) / 4 * this.circle_type * this.circle_length).toFixed(3);
                },

                calcSquareWeight() {
                    this.square_weight = (Math.pow(this.square_side * 0.001, 2) * this.square_type * this.square_length).toFixed(3);
                },

                calcSixWeight() {
                    this.six_weight = (2 * Math.sqrt(3 * Math.pow(this.six_number * 0.001, 2)) * this.six_type * this.six_length * 0.001).toFixed(3);
                },

                calcRibbonWeight() {
                    this.ribbon_weight = (this.ribbon_width * 0.001 * this.ribbon_thickness * 0.001 * this.ribbon_type * this.ribbon_length).toFixed(3);
                },

                calcSheetWeight() {
                    this.sheet_weight = (this.sheet_width * 0.001 * this.sheet_thickness * 0.001 * this.sheet_length * 0.001 * this.sheet_type * this.sheet_quantity).toFixed(3);
                },
            }
        });
    }

});

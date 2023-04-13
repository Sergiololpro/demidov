$(document).ready(function () {

    $(window).on('scroll load', function() {
        if ($(this).scrollTop() > 0) {
            $('.header, .drop, .drop_about').addClass('short');
        } else {
            $('.header, .drop, .drop_about').removeClass('short');
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
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000
        });
    }

    // Меню
    $(".nav__el").on("mouseenter", function() {
        var id = $(this).data("id");

        $(".nav__el, .drop, .drop_about").removeClass("active");
        $(".drop[data-id=" + id + "]").addClass("active");
    });

    $(".nav__el, .drop, .drop_about").on("mouseleave", function() {
        var check_1 = true,
            check_2 = true;

        setTimeout(function(){
            document.querySelectorAll(':hover').forEach(function(em){
                if (em.className.includes("nav") || em.className.includes("drop")) {
                    check_1 = false;
                }
            });

            document.querySelectorAll(':hover').forEach(function(em){
                if (em.className.includes("nav") || em.className.includes("drop_about")) {
                    check_2 = false;
                }
            });

            if (check_1) {
                $(".nav__el, .drop").removeClass("active");
            }

            if (check_2) {
                $(".nav__el, .drop_about").removeClass("active");
            }
        }, 100)
    });

    // Карта
    $(".checked").on("click", function(event) {
        var height = parseInt($(".map_window").css("height")),
            width = parseInt($(".map_window").css("width"));
    
        $(".map_window").css({
            left: event.offsetX,
            top: event.offsetY - height / 3 - 160
        });

        $(".map_window__address").removeClass("active");

        $(".map_window__title").html($(this).data("title"));
        $(".map_window__phone").html($(this).data("phone")).attr("href", "tel:" + $(this).data("phone"));
        $(".map_window__email").html($(this).data("email")).attr("href", "mailto:" + $(this).data("email"));

        if ($(this).data("office")) {
            $(".map_window__address-office").addClass("active");
            $(".map_window__txt-office").html($(this).data("office"));
        }

        if ($(this).data("stock")) {
            $(".map_window__address-stock").addClass("active");
            $(".map_window__txt-stock").html($(this).data("stock"));
        }
    
        $(".map_window__link").attr("href", $(this).data("link"));

        $(".map_window").addClass("active");
    });

    if ($('.map').length) {
        $("body").on("click", function(e) {
            var targetbox = $(this).find('.checked');

            if (!targetbox.is(e.target) && targetbox.has(e.target).length === 0) {
                $(".map_window").removeClass("active");
            }
        });
    }

    // Слайдер новости
    if ($('.news__els').length) {
        $(".news__els").slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<div class="news__nav news__nav-prev"></div>',
            nextArrow: '<div class="news__nav news__nav-next"></div>',
            dots: true,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 769,
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
                    alwaysOpen: true,
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
                type_selected: '1',
                p: 3.1415926535,
                density: 7850,

                armatura_calc: true,
                armatura_diameters: armatura_diameters.length ? armatura_diameters : [],
                armatura_diameter: "",
                armatura_length: "",
                armatura_weight: "",
                armatura_calc_length: "",
                armatura_calc_weight: "",

                beam_calc: true,
                beam__types: beam__types.length ? beam__types : [],
                beam__normal: beam__normal.length ? beam__normal : [],
                beam__slope: beam__slope.length ? beam__slope : [],
                beam__number: [],
                beam__type: "",
                beam__id: "",
                beam_length: "",
                beam__weight: "",
                beam_calc_length: "",
                beam_calc_weight: "",

                channel_calc: true,
                channel_types: channel_types.length ? channel_types : [],
                channel_normal: channel_normal.length ? channel_normal : [],
                channel_slope: channel_slope.length ? channel_slope : [],
                channel_number: [],
                channel_type: "",
                channel_id: "",
                channel_length: "",
                channel_weight: "",
                channel_calc_length: "",
                channel_calc_weight: "",

                corner_calc: true,
                corner_type: "",
                corner_width: "",
                corner_height: "",
                corner_thickness: "",
                corner_length: "",
                corner_weight: "",
                corner_calc_length: "",
                corner_calc_weight: "",

                pipe_calc: true,
                pipe_type: "",
                pipe_diameter: "",
                pipe_thickness: "",
                pipe_length: "",
                pipe_weight: "",
                pipe_calc_length: "",
                pipe_calc_weight: "",

                profile_pipe_calc: true,
                profile_pipe_type: "",
                profile_pipe_width: "",
                profile_pipe_height: "",
                profile_pipe_thickness: "",
                profile_pipe_length: "",
                profile_pipe_weight: "",
                profile_pipe_calc_length: "",
                profile_pipe_calc_weight: "",

                circle_calc: true,
                circle_type: "",
                circle_diameter: "",
                circle_length: "",
                circle_weight: "",
                circle_calc_length: "",
                circle_calc_weight: "",

                square_calc: true,
                square_type: "",
                square_side: "",
                square_length: "",
                square_weight: "",
                square_calc_length: "",
                square_calc_weight: "",

                six_calc: true,
                six_type: "",
                six_number: "",
                six_length: "",
                six_weight: "",
                six_calc_length: "",
                six_calc_weight: "",

                ribbon_calc: true,
                ribbon_type: "",
                ribbon_width: "",
                ribbon_thickness: "",
                ribbon_length: "",
                ribbon_weight: "",
                ribbon_calc_length: "",
                ribbon_calc_weight: "",

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
                calcAramtura() {
                    if (this.armatura_calc) {
                        this.armatura_calc_weight = (this.p * Math.pow(this.armatura_diameter * 0.001, 2) / 4 * this.density * this.armatura_length).toFixed(3);
                    } else {
                        this.armatura_calc_length = ( this.armatura_weight / (this.p * Math.pow(this.armatura_diameter * 0.001, 2) / 4 * this.density)).toFixed(3);
                    }
                },

                calcBeam() {
                    if (this.beam__type == 1) {
                        this.beam__number = this.beam__normal[this.beam__id];
                    }

                    if (this.beam__type == 2) {
                        this.beam__number = this.beam__slope[this.beam__id];
                    }

                    if (this.beam_calc) {
                        this.beam_calc_weight = (this.density * (2 * this.beam__number.b * 0.001 * this.beam__number.t * 0.001 + (this.beam__number.h * 0.001 - 2 * this.beam__number.t * 0.001) * this.beam__number.s * 0.001) * this.beam_length).toFixed(3);
                    } else {
                        this.beam_calc_length = (this.beam__weight / (this.density * (2 * this.beam__number.b * 0.001 * this.beam__number.t * 0.001 + (this.beam__number.h * 0.001 - 2 * this.beam__number.t * 0.001) * this.beam__number.s * 0.001))).toFixed(3);
                    }
                },

                calcChannel() {
                    if (this.channel_type == 1) {
                        this.channel_number = this.channel_normal[this.channel_id];
                    }

                    if (this.channel_type == 2) {
                        this.channel_number = this.channel_slope[this.channel_id];
                    }

                    if (this.channel_calc) {
                        this.channel_calc_weight = (this.density * (2 * this.channel_number.b * 0.001 * this.channel_number.t * 0.001 + (this.channel_number.h * 0.001 - 2 * this.channel_number.t * 0.001) * this.channel_number.s * 0.001) * this.channel_length).toFixed(3);
                    } else {
                        this.channel_calc_length = (this.channel_weight / (this.density * (2 * this.channel_number.b * 0.001 * this.channel_number.t * 0.001 + (this.channel_number.h * 0.001 - 2 * this.channel_number.t * 0.001) * this.channel_number.s * 0.001))).toFixed(3);
                    }
                },

                calcCorner() {
                    if (this.corner_calc) {
                        this.corner_calc_weight = (((+this.corner_width + +this.corner_height - +this.corner_thickness) * this.corner_thickness + (1 - this.p / 4)) * this.density * 0.000001 * this.corner_length).toFixed(3);
                    } else {
                        this.corner_calc_length = (this.corner_weight / (((+this.corner_width + +this.corner_height - +this.corner_thickness) * this.corner_thickness + (1 - this.p / 4)) * this.density * 0.000001)).toFixed(3);
                    }
                },

                calcPipe() {
                    if (this.pipe_calc) {
                        this.pipe_calc_weight = (this.p * 0.001 * (this.pipe_diameter - this.pipe_thickness) * this.pipe_thickness * this.pipe_type * 0.001 * this.pipe_length).toFixed(3);
                    } else {
                        this.pipe_calc_length = (this.pipe_weight / (this.p * 0.001 * (this.pipe_diameter - this.pipe_thickness) * this.pipe_thickness * this.pipe_type * 0.001)).toFixed(3);
                    }
                },

                calcProfilePipe() {
                    if (this.profile_pipe_calc) {
                        this.profile_pipe_calc_weight = (this.profile_pipe_type / 7850 * 0.0157 * this.profile_pipe_thickness * (+this.profile_pipe_width + +this.profile_pipe_height - 2.86 * this.profile_pipe_thickness) * this.profile_pipe_length).toFixed(3);
                    } else {
                        this.profile_pipe_calc_length = (this.profile_pipe_calc_weight / (this.profile_pipe_type / 7850 * 0.0157 * this.profile_pipe_thickness * (+this.profile_pipe_width + +this.profile_pipe_height - 2.86 * this.profile_pipe_thickness))).toFixed(3);
                    }
                },

                calcCircle() {
                    if (this.circle_calc) {
                        this.circle_calc_weight = (this.p * Math.pow(this.circle_diameter * 0.001, 2) / 4 * this.circle_type * this.circle_length).toFixed(3);
                    } else {
                        this.circle_calc_length = (this.circle_weight / (this.p * Math.pow(this.circle_diameter * 0.001, 2) / 4 * this.circle_type)).toFixed(3);
                    }
                },

                calcSquare() {
                    if (this.square_calc) {
                        this.square_calc_weight = (Math.pow(this.square_side * 0.001, 2) * this.square_type * this.square_length).toFixed(3);
                    } else {
                        this.square_calc_length = (this.square_weight / (Math.pow(this.square_side * 0.001, 2) * this.square_type)).toFixed(3);
                    }
                },

                calcSix() {
                    if (this.six_calc) {
                        this.six_calc_weight = (2 * Math.sqrt(3 * Math.pow(this.six_number * 0.001, 2)) * this.six_type * 0.001 * this.six_length).toFixed(3);
                    } else {
                        this.six_calc_length = (this.six_weight / (2 * Math.sqrt(3 * Math.pow(this.six_number * 0.001, 2)) * this.six_type * 0.001)).toFixed(3);
                    }
                },

                calcRibbon() {
                    if (this.ribbon_calc) {
                        this.ribbon_calc_weight = (this.ribbon_width * 0.001 * this.ribbon_thickness * 0.001 * this.ribbon_type * this.ribbon_length).toFixed(3);
                    } else {
                        this.ribbon_calc_length = (this.ribbon_weight / (this.ribbon_width * 0.001 * this.ribbon_thickness * 0.001 * this.ribbon_type)).toFixed(3);
                    }
                },

                calcSheet() {
                    this.sheet_weight = (this.sheet_width * 0.001 * this.sheet_thickness * 0.001 * this.sheet_type * this.sheet_quantity * this.sheet_length * 0.001).toFixed(3);
                },
            }
        });
    }

    // Слайдер покупателям
    if ($('.customers_slider').length) {
        $(".customers_slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="customers_slider__nav customers_slider__nav-prev"></div>',
            nextArrow: '<div class="customers_slider__nav customers_slider__nav-next"></div>',
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000
        });
    }

    // Оформление заказа
    $(".order__button-address").on("click", function() {
        var id = $(this).data("id");

        $(".order__button-address, .order__wrp, .card__alert-order").removeClass("active");

        $(this).addClass("active");
        $(".order__wrp[data-id=" + id + "]").addClass("active");
        $(".card__alert-order[data-id=" + id + "]").addClass("active");

        if (id == 1) {
            $(".order__rgt").show();
        } else {
            $(".order__rgt").hide();
        }
    });

    // Калькулятор заказ
    if ($('#date').length) {
        $('#date').dateRangePicker({
            startOfWeek: 'monday',
            language: "ru",
            singleMonth: true,
            showTopbar: false,
            separator: ',',
            autoClose: true,
            singleDate: true,
            customArrowPrevSymbol: '&lsaquo;',
            customArrowNextSymbol: '&rsaquo;',
            startDate: moment(),
            container: $(".booking__calendar")
        });
    }

    // Выбор адреса
    $("#order_address").on("change", function() {
        var value = $("#order_address").val();

        $(".modal__input-full_select").hide();

        $(".order__address_wrp").html(value);
        $(".order__address").addClass("active");

        $("#order_address_modal").val(value);

        $('#order_address_modal').select2({
            minimumResultsForSearch: -1,
            placeholder: $(this).data("placeholder")
        });

        var id = $('#order_address option[value="' + $("#order_address").val() + '"]').data("id");

        $.post('/local/ajax/upd_map.php', 'add2cart=y&id='+ id + '', function (data_up) {
            $('#map_place').html(data_up);
        });
    });

    // Открыть выбор адреса
    $(".order__change").on("click", function() {
        $(".change_address").addClass("active");
    });

    // Выбор адреса в окне
    $(".change_address_choose").on("click", function() {
        var value = $("#order_address_modal").val();

        $(".order__address_wrp").html(value);
        $(".order__address").addClass("active");

        $(".change_address").removeClass("active");

        $("#order_address").val(value).trigger('change');
        
        var id = $('#order_address_modal option[value="' + $("#order_address_modal").val() + '"]').data("id");

        $.post('/local/ajax/upd_map.php', 'add2cart=y&id='+ id + '', function (data_up) {
            $('#map_place').html(data_up);
        });
    });

    // Сортировка в каталоге
    $("#cat_sort").on("change", function() {
        location = $("#cat_sort").val();
    });

    // Перенос теггов
    if ($(".ct_tags__wrp").length) {
        $(".ct_tags").each(function() {
            $($(this).detach()).appendTo(".ct_tags_els");
        });

        $(".ct_tags").each(function() {
            if ($(this).height() > 42) {
                $(".ct_tags__wrp").addClass("hide");
            }
        });
    }

    // Показать все теги
    $(".ct_tags__more").on("click", function() {
        $(".ct_tags__wrp").removeClass("hide");
    });

    // Открыть окно
    $(".cart_el-add").on("click", function() {
        $(".modal_cart").addClass("active");
    });

    // Открыть подсказку
    $(".left_el__text").on("click", function() {
        $(".left_el__content").toggleClass("active");
    });

    // Закрыть подсказку
    $(".left_el__close").on("click", function() {
        $(".left_el__content").removeClass("active");
    });

    // Открыть окно внизу
    $(".bottom_el").on("click", function() {
        $(".modal_bottom").addClass("active");
    });

    // Выбрать тег
    $(".ct_tags__el").on("click", function() {
        var id = $(this).attr("id");

        $(".bx-filter-select-popup ." + id +"").click();

        $("li.all_inp").each(function() {
            $(this).trigger("click");
        });

        setTimeout(function() { 
            var box_fl = document.querySelector('.bx-filter-container-modef a');
            
            box_fl.click();
        }, 2000);
    });

    //  Оформление заказа, переключение
    $(".order__button-person").on("click", function() {
        var id = $(this).data("id");

        $(".order__button-person, .order__cont").removeClass("active");

        $(this).addClass("active");
        
        $(".order__cont[data-id=" + id + "]").addClass("active");
    });

    // Слайдер контакты
    if ($('.contacts_slider__wrp').length) {
        $(".contacts_slider__wrp").slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<div class="contacts_slider__nav contacts_slider__nav-prev"></div>',
            nextArrow: '<div class="contacts_slider__nav contacts_slider__nav-next"></div>',
            dots: true,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 769,
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

});
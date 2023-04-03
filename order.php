<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="breadcrumbs">
        <div class="wrapper wrapper-breadcrumbs">
            <a href="#">Главная</a>
            <div class="breadcrumbs__arrow"></div>
            <span>Оформление заказа</span>
        </div>
    </div>
    <div class="wrapper">
        <h1 class="title title-page">Оформление заказа</h1>

        <div class="cart">
            <div class="cart__left">
                <div class="order">
                    <div class="order__block">
                        <div class="order__top">
                            <span>1</span>
                            Доставка
                        </div>
                        <div class="order__buttons">
                            <div data-id="1" class="order__button order__button-address active">Самовоз</div>
                            <div data-id="2" class="order__button order__button-address">Доставка</div>
                        </div>
                        <div class="order__wp">
                            <div data-id="2" class="order__wrp">
                                <div class="calculator__inputs calculator__inputs-order">
                                    <div class="modal__input">
                                        <div class="modal__label">Край / Область<span>*</span></div>
                                        <input id="order_district" name="order_district" placeholder="Введите" class="input" type="text">
                                    </div>
                                    <div class="modal__input">
                                        <div class="modal__label">Район<span>*</span></div>
                                        <input id="order_area" name="order_area" placeholder="Введите" class="input" type="text">
                                    </div>
                                    <div class="modal__input">
                                        <div class="modal__label">Населенный пункт<span>*</span></div>
                                        <input id="order_city" name="order_city" placeholder="Введите" class="input" type="text">
                                    </div>
                                    <div class="modal__input">
                                        <div class="modal__label">Улица<span>*</span></div>
                                        <input id="order_street" name="order_street" placeholder="Введите" class="input" type="text">
                                    </div>
                                    <div class="modal__input">
                                        <div class="modal__label">Номер дома<span>*</span></div>
                                        <input id="order_house" name="order_house" placeholder="Введите" class="input" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="order__lft">
                                <div data-id="1" class="order__wrp active">
                                    <div class="order__address">
                                        <div class="order__address_wrp"></div>
                                        <div class="order__change">Изменить</div>
                                    </div>
                                    <div class="modal__input modal__input-full_select">
                                        <div class="modal__label">Выберите адрес самовывоза<span>*</span></div>
                                        <select id="order_address" data-placeholder="Введите" class="select2">
                                            <option value="">&nbsp;</option>
                                            <option data-id="city_1" value="<div class='order__city'>Москва Розница</div> 300057, г. Москва, Алексинское шоссе, дом 36">г. Москва, Алексинское шоссе, дом 36</option>
                                            <option data-id="city_2" value="<div class='order__city'>Тула</div>">г. Тула</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal__input booking__calendar booking__calendar">
                                    <div class="modal__label">Выберите удобный день<span>*</span></div>
                                    <input id="date" name="date" placeholder="Введите" class="input input-calendar" type="text">
                                </div>
                                <div class="modal__input modal__input-order">
                                    <div class="modal__label">Временной интервал<span>*</span></div>
                                    <select data-placeholder="Введите" class="select2">
                                        <option value="">&nbsp;</option>
                                        <option value="time_1">с 10:00 до 15:00</option>
                                        <option value="time_2">с 15:00 до 20:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="order__rgt">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af60fcafc04bbfa7137a2f05d6d3c58c30702dd3631a65aca38ff2230fb595196&amp;source=constructor"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="order__block">
                        <div class="order__top">
                            <span>2</span>
                            Покупатель
                        </div>
                        <div class="order__buttons">
                            <div data-id="1" class="order__button order__button-person active">Физлицо</div>
                            <div data-id="2" class="order__button order__button-person">Юрлицо</div>
                        </div>
                        <div data-id="1" class="order__cont active">
                            <div class="modal__input">
                                <div class="modal__label">ФИО<span>*</span></div>
                                <input id="f_name" name="f_name" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="order__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Телефон<span>*</span></div>
                                    <input id="f_phone" name="f_phone" placeholder="Введите" class="input" type="text">
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">E-mail<span>*</span></div>
                                    <input id="f_email" name="f_email" placeholder="Введите" class="input" type="email">
                                </div>
                            </div>
                        </div>
                        <div data-id="2" class="order__cont">
                            <div class="modal__input">
                                <div class="modal__label">Наименование компании<span>*</span></div>
                                <input id="u_title" name="u_title" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Контактное лицо<span>*</span></div>
                                <input id="u_name" name="u_name" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="order__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Телефон<span>*</span></div>
                                    <input id=u_phone" name="u_phone" placeholder="Введите" class="input" type="text">
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">E-mail<span>*</span></div>
                                    <input id="u_email" name="u_email" placeholder="Введите" class="input" type="email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order__block">
                        <div class="order__top">
                            <span>3</span>
                            Оплата
                        </div>
                        <div class="order__buttons">
                            <div class="order__button active">
                                <span>Картой онлайн</span>
                                <span>Карта</span>
                            </div>
                            <div class="order__button">
                                <span>Оплата по счету</span>
                                <span>По счету</span>
                            </div>
                        </div>
                    </div>
                    <div class="order__block">
                        <div class="order__top">
                            <span>4</span>
                            Комментарии к заказу
                        </div>
                        <div class="modal__input">
                            <textarea name="comment" class="textarea" placeholder="Введите"></textarea>
                        </div>
                    </div>
                </div>
                <div class="order_els">
                    <div class="order_els__title">Состав заказа</div>
                    <div class="order_els__top">
                        <div class="order_els__name order_els__name-title">Наименование</div>
                        <div class="order_els__name">В продаже</div>
                        <div class="order_els__name">Склад</div>
                        <div class="order_els__name">Количество</div>
                        <div class="order_els__name order_els__name-price">Цена</div>
                    </div>
                    <div class="order_els__wrp">
                        <div class="order_els__el">
                            <div class="order_els__left">
                                <a href="#" class="order_els__image" style="background-image: url(img/card__image-1.jpg)"></a>
                                <div class="order_els__col">
                                    <a href="#" class="order_els__ttl">Труба профильная 25х25х3</a>
                                    <div class="order_els__text">Длина: 6м</div>
                                </div>
                            </div>
                            <div class="order_els__txt">999</div>
                            <div class="order_els__txt">Мск</div>
                            <div class="order_els__txt">7</div>
                            <div class="order_els__price">15 500 р</div>
                        </div>
                        <div class="order_els__el">
                            <div class="order_els__left">
                                <a href="#" class="order_els__image" style="background-image: url(img/card__image-1.jpg)"></a>
                                <div class="order_els__col">
                                    <a href="#" class="order_els__ttl">Труба профильная 25х25х3</a>
                                    <div class="order_els__text">Длина: 6м</div>
                                </div>
                            </div>
                            <div class="order_els__txt">999</div>
                            <div class="order_els__txt">Мск</div>
                            <div class="order_els__txt">7</div>
                            <div class="order_els__price">15 500 р</div>
                        </div>
                        <div class="order_els__el">
                            <div class="order_els__left">
                                <a href="#" class="order_els__image" style="background-image: url(img/card__image-1.jpg)"></a>
                                <div class="order_els__col">
                                    <a href="#" class="order_els__ttl">Труба профильная 25х25х3</a>
                                    <div class="order_els__text">Длина: 6м</div>
                                </div>
                            </div>
                            <div class="order_els__txt">999</div>
                            <div class="order_els__txt">Мск</div>
                            <div class="order_els__txt">7</div>
                            <div class="order_els__price">15 500 р</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart__right">
                <div class="cart__title">Ваш заказ</div>
                <div class="cart__row">
                    Товары
                    <div class="cart__bold">150 680 р</div>
                </div>
                <div class="cart__row">
                    Металлобработка
                    <div class="cart__bold">Индивидуально</div>
                </div>
                <div class="cart__row">
                    Скидка
                    <div class="cart__bold">2 680 р</div>
                </div>
                <div class="cart__row">
                    Итого
                    <div class="cart__total">148 680 р</div>
                </div>
                <ul class="cart__ul">
                    <li>Общий вес: 21,5 т.</li>
                    <li>Максимальная длина: 6 м.</li>
                </ul>
                <div class="card__alert">
                    Внимание! <span>Цены носят ознакомительный характер</span>. Окончательную стоимость сообщит менеджер после обработки заявки.
                </div>
                <div class="cart__button">Подтвердить заказ</div>
                <div class="cart__under">
                    Нажимая кнопку «Подписаться» вы соглашаетесь с условиями <a href="#">Пользовательского соглашения</a> и <a href="#">Условиями обработки персональных данных</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
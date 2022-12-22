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
                            <div class="order__button active">Самовоз</div>
                            <div class="order__button">Доставка</div>
                        </div>
                        <div class="order__wp">
                            <div class="order__lft">
                                <div class="order__address">
                                    <div class="order__city">Москва Розница</div>
                                    300057, г. Москва, Алексинское шоссе, дом 36
                                    <div class="order__change">Изменить</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Выберите удобный день<span>*</span></div>
                                    <input id="date" name="date" placeholder="Введите" class="input input-calendar" type="text">
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Временной интервал<span>*</span></div>
                                    <select data-placeholder="Введите" class="select2">
                                        <option value="">&nbsp;</option>
                                        <option value="time_1">Время 1</option>
                                        <option value="time_1">Время 2</option>
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
                            <div class="order__button active">Физлицо</div>
                            <div class="order__button">Юрлицо</div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Наименование компании<span>*</span></div>
                            <input id="title" name="title" placeholder="Введите" class="input" type="text">
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Контактное лицо<span>*</span></div>
                            <input id="name" name="name" placeholder="Введите" class="input" type="text">
                        </div>
                        <div class="order__inputs">
                            <div class="modal__input">
                                <div class="modal__label">Мобильный телефон<span>*</span></div>
                                <input id="phone" name="phone" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">E-mail<span>*</span></div>
                                <input id="email" name="email" placeholder="Введите" class="input" type="email">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Городской номер<span>*</span></div>
                                <input id="city_phone" name="city_phone" placeholder="Введите" class="input" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="order__block">
                        <div class="order__top">
                            <span>3</span>
                            Оплата
                        </div>
                        <div class="order__buttons">
                            <div class="order__button active">Картой онлайн</div>
                            <div class="order__button">Оплата по счету</div>
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
                <div class="cart__button">Подтвердить заказ</div>
                <div class="cart__under">
                    Нажимая кнопку «Подписаться» вы соглашаетесь с условиями <a href="#">Пользовательского соглашения</a> и <a href="#">Условиями обработки персональных данных</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
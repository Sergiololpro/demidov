<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="breadcrumbs">
        <div class="wrapper wrapper-breadcrumbs">
            <a href="#">Главная</a>
            <div class="breadcrumbs__arrow"></div>
            <span>Корзина</span>
        </div>
    </div>
    <div class="wrapper">
        <h1 class="title title-page">Корзина</h1>

        <div class="cart">
            <div class="cart__left">
                <div class="cart__els">
                    <div class="cart_el">
                        <div class="cart_el__left">
                            <div class="cart_el__row">
                                <div class="cart_el__lft">
                                    <a href="#" class="cart_el__image" style="background-image: url(img/card__image-1.jpg)"></a>
                                    <div class="cart_el__col">
                                        <a href="#" class="cart_el__title">Труба профильная 25х25х3</a>
                                        <div class="cart_el__text">Длина: 6м</div>
                                    </div>
                                </div>
                                <div class="cart_el__rgt">
                                    <div class="cart_el__line">
                                        <select data-placeholder="Выберите" class="select2 select2-cart">
                                            <option value="choose_1">Метры</option>
                                            <option value="choose_2">Тонны</option>
                                        </select>
                                        <div class="cart_el_controls">
                                            <div class="cart_el_controls__button cart_el_controls__button-plus"></div>
                                            <input class="cart_el_controls__input" value="0" type="text">
                                            <div class="cart_el_controls__button cart_el_controls__button-minus"></div>
                                        </div>
                                    </div>
                                    <div class="cart_el__info">
                                        <span>Общий вес:</span> 5.6 т
                                    </div>
                                </div>
                            </div>
                            <div class="cart_el__add cart_el-add">+ Добавить металлобработку</div>
                        </div>
                        <div class="cart_el__right">
                            <div class="cart_el__prices">
                                <div class="cart_el__old_price">23 0000</div>
                                <div class="cart_el__price">15 500 р</div>
                            </div>
                            <div class="cart_el__del"></div>
                        </div>
                    </div>
                    <div class="cart_el">
                        <div class="cart_el__left">
                            <div class="cart_el__row">
                                <div class="cart_el__lft">
                                    <a href="#" class="cart_el__image" style="background-image: url(img/card__image-1.jpg)"></a>
                                    <div class="cart_el__col">
                                        <a href="#" class="cart_el__title">Труба профильная 1125х1125х113</a>
                                        <div class="cart_el__text">Длина: 6м</div>
                                    </div>
                                </div>
                                <div class="cart_el__rgt">
                                    <div class="cart_el__line">
                                        <select data-placeholder="Выберите" class="select2 select2-cart">
                                            <option value="choose_1">Метры</option>
                                            <option value="choose_2">Тонны</option>
                                        </select>
                                        <div class="cart_el_controls">
                                            <div class="cart_el_controls__button cart_el_controls__button-plus"></div>
                                            <input class="cart_el_controls__input" value="0" type="text">
                                            <div class="cart_el_controls__button cart_el_controls__button-minus"></div>
                                        </div>
                                    </div>
                                    <div class="cart_el__info">
                                        <span>Общий вес:</span> 5.6 т
                                    </div>
                                </div>
                            </div>
                            <div class="cart_el__add cart_el__add-del">Порезка газовая: <span>Резка</span></div>
                        </div>
                        <div class="cart_el__right">
                            <div class="cart_el__prices">
                                <div class="cart_el__old_price">23 0000</div>
                                <div class="cart_el__price">15 500 р</div>
                            </div>
                            <div class="cart_el__del"></div>
                        </div>
                    </div>
                </div>
                <div class="cart__more">Очистить корзину</div>
                <div class="cart_empty_text">
                    Ваша корзина пустая, вы можете перейти в <a href="#">каталог продукции</a>.
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
                <div class="cart__button">Оформить заказ</div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
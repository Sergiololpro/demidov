<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="breadcrumbs">
        <div class="wrapper wrapper-breadcrumbs">
            <a href="#">Главная</a>
            <div class="breadcrumbs__arrow"></div>
            <a href="#">О компании</a>
            <div class="breadcrumbs__arrow"></div>
            <span>Контроль качества</span>
        </div>
    </div>
    <div class="wrapper">
        <h1 class="title title-text">Контроль качества</h1>
        
        <div class="page_links">
            <a href="#" class="page_links__el">О компании</a>
            <a href="#" class="page_links__el">Миссия</a>
            <a href="#" class="page_links__el">Производство</a>
            <a href="#" class="page_links__el">Региональная сеть</a>
            <a href="#" class="page_links__el">Грамоты и награды</a>
            <a href="#" class="page_links__el">Сертификаты</a>
            <a href="#" class="page_links__el">ГОСТы</a>
            <a href="#" class="page_links__el">Фотогалерея</a>
            <a href="#" class="page_links__el">Видео</a>
            <a href="#" class="page_links__el">Новости компании</a>
            <a href="#" class="page_links__el">Пресса о нас</a>
            <a href="#" class="page_links__el">Партнеры</a>
            <a href="#" class="page_links__el">Отзывы и достижения</a>
            <a href="#" class="page_links__el active">Контроль качества</a>
            <a href="#" class="page_links__el">Реквизиты</a>
        </div>

        <div class="quality">
            <div class="quality_text">
                <div class="quality_text__title">Уважаемые клиенты и партнеры компании!</div>
                <p>В случае если у вас возникли проблемы, появились вопросы, либо просто есть пожелания или комментарии по поводу качества нашей продукции или уровня обслуживания, просим Вас заполнить форму-анкету на этой странице. Отдел контроля качества обязательно ответит на ваши вопросы и учтет все пожелания.</p>
                <p>«ГК Демидов» непрерывно стремится к улучшению качества предоставляемой металлопродукции и повышению уровня обслуживания во всех филиалах нашей сети: Москва, Белгород, Воронеж, Екатеринбург, Краснодар, Ростов-на-Дону, Тула, Тверь, Рязань, Казань, Уфа, Новосибирск, Нижний Новгород, Пенза, Самара, Челябинск.</p>
            </div>
            <div class="quality__content">
                <div class="quality__title">Анкета «Контроль качества продукции»</div>
                <div class="quality__block">
                    <div class="quality__ttl">Данные о компании</div>
                    <div class="quality__inputs">
                        <div class="modal__input">
                            <div class="modal__label">Название компании<span>*</span></div>
                            <input name="company" placeholder="Введите" class="input" type="text">
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Город<span>*</span></div>
                            <input name="city" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="quality__inputs">
                        <div class="modal__input">
                            <div class="modal__label">ФИО<span>*</span></div>
                            <input name="name" placeholder="Введите" class="input" type="text">
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">ФИО вашего менеджера<span>*</span></div>
                            <input name="manager" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                </div>
                <div class="quality__block">
                    <div class="quality__ttl">Контактная информация</div>
                    <div class="quality__inputs">
                        <div class="modal__input">
                            <div class="modal__label">Телефон<span>*</span></div>
                            <input name="phone" placeholder="Введите" class="input" type="text">
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">E-mail<span>*</span></div>
                            <input name="email" placeholder="Введите" class="input" type="email">
                        </div>
                    </div>
                </div>
                <div class="quality__block">
                    <div class="quality__ttl">Оцените качество продукции производства Рязанский ТЗ, по 5-ти бальной системе</div>
                    <div class="quality__row">
                        <div class="quality__left">
                            <div class="modal__label">Труба э/с профильная<span>*</span></div>
                            <div class="quality__els">
                                <div data-id="0" class="quality__el">-</div>
                                <div data-id="1" class="quality__el">1</div>
                                <div data-id="2" class="quality__el">2</div>
                                <div data-id="3" class="quality__el">3</div>
                                <div data-id="4" class="quality__el">4</div>
                                <div data-id="5" class="quality__el active">5</div>
                                <input name="mark_1" class="input" type="hidden" value="5">
                            </div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Ваш комментарий<span>*</span></div>
                            <input name="comment_1" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="quality__row">
                        <div class="quality__left">
                            <div class="modal__label">Труба электросварная<span>*</span></div>
                            <div class="quality__els">
                                <div data-id="0" class="quality__el">-</div>
                                <div data-id="1" class="quality__el">1</div>
                                <div data-id="2" class="quality__el">2</div>
                                <div data-id="3" class="quality__el">3</div>
                                <div data-id="4" class="quality__el">4</div>
                                <div data-id="5" class="quality__el active">5</div>
                                <input name="mark_2" class="input" type="hidden" value="5">
                            </div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Ваш комментарий<span>*</span></div>
                            <input name="comment_2" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="quality__row">
                        <div class="quality__left">
                            <div class="modal__label">Труба водогазопроводная<span>*</span></div>
                            <div class="quality__els">
                                <div data-id="0" class="quality__el">-</div>
                                <div data-id="1" class="quality__el">1</div>
                                <div data-id="2" class="quality__el">2</div>
                                <div data-id="3" class="quality__el">3</div>
                                <div data-id="4" class="quality__el">4</div>
                                <div data-id="5" class="quality__el active">5</div>
                                <input name="mark_3" class="input" type="hidden" value="5">
                            </div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Ваш комментарий<span>*</span></div>
                            <input name="comment_3" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="quality__row">
                        <div class="quality__left">
                            <div class="modal__label">Сетка сварная<span>*</span></div>
                            <div class="quality__els">
                                <div data-id="0" class="quality__el">-</div>
                                <div data-id="1" class="quality__el">1</div>
                                <div data-id="2" class="quality__el">2</div>
                                <div data-id="3" class="quality__el">3</div>
                                <div data-id="4" class="quality__el">4</div>
                                <div data-id="5" class="quality__el active">5</div>
                                <input name="mark_4" class="input" type="hidden" value="5">
                            </div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Ваш комментарий<span>*</span></div>
                            <input name="comment_4" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="quality__row">
                        <div class="quality__left">
                            <div class="modal__label">Лист-просечно - вытяжной<span>*</span></div>
                            <div class="quality__els">
                                <div data-id="0" class="quality__el">-</div>
                                <div data-id="1" class="quality__el">1</div>
                                <div data-id="2" class="quality__el">2</div>
                                <div data-id="3" class="quality__el">3</div>
                                <div data-id="4" class="quality__el">4</div>
                                <div data-id="5" class="quality__el active">5</div>
                                <input name="mark_5" class="input" type="hidden" value="5">
                            </div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Ваш комментарий<span>*</span></div>
                            <input name="comment_5" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="quality__row">
                        <div class="quality__left">
                            <div class="modal__label">Оцените качество упаковки<span>*</span></div>
                            <div class="quality__els">
                                <div data-id="0" class="quality__el">-</div>
                                <div data-id="1" class="quality__el">1</div>
                                <div data-id="2" class="quality__el">2</div>
                                <div data-id="3" class="quality__el">3</div>
                                <div data-id="4" class="quality__el">4</div>
                                <div data-id="5" class="quality__el active">5</div>
                                <input name="mark_6" class="input" type="hidden" value="5">
                            </div>
                        </div>
                        <div class="modal__input">
                            <div class="modal__label">Ваш комментарий<span>*</span></div>
                            <input name="comment_6" placeholder="Введите" class="input" type="text">
                        </div>
                    </div>
                    <div class="modal__input">
                        <div class="modal__label">Рекомендации по улучшению качества продукции и упаковки<span>*</span></div>
                        <textarea name="comment" class="textarea" placeholder="Введите"></textarea>
                    </div>
                    <div class="quality__bottom">
                        <div class="quality__button">Отправить</div>
                        <div class="quality__txt">
                            Нажимая кнопку «Подписаться» вы соглашаетесь с условиями <a href="#">Пользовательского соглашения</a> и <a href="#">Условиями обработки персональных данных</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
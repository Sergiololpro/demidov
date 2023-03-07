<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="js/libs/slick/slick.css">
  <link rel="stylesheet" href="js/libs/select2/select2.min.css">
  <link rel="stylesheet" href="js/libs/modal_video/modal_video.min.css">
  <link rel="stylesheet" href="js/libs/datepicker/datepicker.css">
  <link rel="stylesheet" href="js/libs/fancybox/fancybox.css">
  <link rel="stylesheet" href="css/styles.css?v=27">
  <title>Demidov</title>
</head>

<body>

  <header class="header">
    <div class="header__top">
      <div class="wrapper wrapper-header__top">
        <div class="header__left">
          <div class="header__menu">
            <div></div>
            <div></div>
            <div></div>
          </div>
          <div class="header__city">г. Москва</div>
          <div class="header__time">Пн-Чт <span>9:00 - 18:00</span> Пт <span>9:00 - 17:00</span></div>
        </div>
        <div class="header__right">
          <div class="header__search"></div>
          <div class="header__catalog">КАТАЛОГ</div>
          <div class="header__contacts">
            <a href="mailto:zakaz@demidovsteel.ru" class="header__email">zakaz@demidovsteel.ru</a>
            <a href="tel:+7(495)775-38-96" class="header__phone">+7 (495) 775-38-96</a>
          </div>
          <div class="header__callback">Обратный звонок</div>
        </div>
      </div>
    </div>
    <div class="header__bottom">
     <div class="wrapper wrapper-header__bottom">
        <a href="#" class="header__logo">
          <img src="img/logo.svg" alt="">
        </a>
        <div class="header__search header__search-short"></div>
        <nav class="nav nav_search">
          <a data-id="1" href="#" class="nav__el nav__el-1">Продукция</a>
          <a data-id="2" href="#" class="nav__el">О компании</a>
          <a href="#" class="nav__el">Доставка и оплата</a>
          <a href="#" class="nav__el">Услуги</a>
          <a data-id="3" href="#" class="nav__el">Покупателю</a>
          <a href="#" class="nav__el">Вакансии</a>
          <a href="#" class="nav__el">Электронная очередь</a>
          <a href="#" class="nav__el">Контакты</a>
          <div class="nav__dots">
            ...
            <div class="nav__drops">
              <a href="#" class="nav__drop">Услуги</a>
              <a href="#" class="nav__drop">Покупателю</a>
              <a href="#" class="nav__drop">Вакансии</a>
              <a href="#" class="nav__drop">Электронная очередь</a>
              <a href="#" class="nav__drop">Контакты</a>
            </div>
          </div>
          <div class="search_block active">
            <input name="search_row" placeholder="Поиск по сайту" class="search_block__input" type="text">
            <div class="search_block__close"></div>
            <div class="search_block__wrp active">
              <div class="search_block__block">
                <div class="search_block__title">Категории</div>
                <div class="search_block__els">
                  <a href="#" class="search_block__el">
                    <div class="search_block__img" style="background-image: url(img/card__image-1.jpg)"></div>
                    <div class="search_block__text">Арматура рифленая</div>
                  </a>
                  <a href="#" class="search_block__el">
                    <div class="search_block__img" style="background-image: url(img/card__image-1.jpg)"></div>
                    <div class="search_block__text">Арматура рифленая</div>
                  </a>
                  <a href="#" class="search_block__el">
                    <div class="search_block__img" style="background-image: url(img/card__image-1.jpg)"></div>
                    <div class="search_block__text">Арматура рифленая</div>
                  </a>
                </div>
              </div>
              <div class="search_block__block">
                <div class="search_block__title">Товары</div>
                <div class="search_block__els">
                  <a href="#" class="search_block__el">
                    <div class="search_block__img" style="background-image: url(img/card__image-2.jpg)"></div>
                    <div class="search_block__text">Арматура рифленая 12 2Ф а500С ГОСТ 34028-2016</div>
                  </a>
                  <a href="#" class="search_block__el">
                    <div class="search_block__img" style="background-image: url(img/card__image-2.jpg)"></div>
                    <div class="search_block__text">Арматура рифленая 12 2Ф а500С ГОСТ 34028-2016</div>
                  </a>
                  <a href="#" class="search_block__el">
                    <div class="search_block__img" style="background-image: url(img/card__image-2.jpg)"></div>
                    <div class="search_block__text">Арматура рифленая 12 2Ф а500С ГОСТ 34028-2016</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <a href="tel:+7(495)775-38-96" class="header__phone header__phone-short">+7 (495) 775-38-96</a>
        <div class="header__rgt">
          <div class="header__calculator">Калькулятор металла</div>
          <div class="header__cabinet">Войти</div>
          <a href="#" class="header__cart">
            Корзина
            <div class="header__label">123</div>
          </a>
          <a href="#" class="header__fav">
            <div class="header__label">5</div>
          </a>
        </div>
      </div>
    </div>
  </header>

  <div data-id="1" class="drop">
    <div class="wrapper">
      <div class="drop__title">Продукция</div>
      <div class="drop__wrp">
        <div class="drop__col">
          <div class="drop__cat">
            <a href="#" class="drop__ttl">Трубный прокат</a>
            <div class="drop__el">
              <a href="#" class="drop__link">Трубы профильные</a>
              <a href="#" class="drop__link drop__link-small">Трубы профильные г/к</a>
              <a href="#" class="drop__link drop__link-small">Трубы профильные х/к</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Трубы электросварные</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Трубы водогазопроводные</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Трубы оцинкованные</a>
              <a href="#" class="drop__link drop__link-small">Трубы профильные оцинкованные</a>
              <a href="#" class="drop__link drop__link-small">Трубы электросварные оцинкованные</a>
            </div>
          </div>
        </div>
        <div class="drop__col">
          <div class="drop__cat">
            <a href="#" class="drop__ttl">Сортовой прокат</a>
            <div class="drop__el">
              <a href="#" class="drop__link">Арматура</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Квадрат</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Круг</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Поковка</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Полоса</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Шестигранник</a>
            </div>
          </div>
        </div>
        <div class="drop__col">
          <div class="drop__cat">
            <a href="#" class="drop__ttl">Сетка сварная</a>
            <div class="drop__el">
              <a href="#" class="drop__link">Сетка сварная кладочная</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Сетка сварная дорожная</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Сетка сварная арматурная</a>
            </div>
          </div>
          <div class="drop__cat">
            <a href="#" class="drop__ttl">Фасонный прокат</a>
            <div class="drop__el">
              <a href="#" class="drop__link">Уголок</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Швеллер</a>
              <a href="#" class="drop__link drop__link-small">Швеллер г/к</a>
              <a href="#" class="drop__link drop__link-small">Швеллер гнутый</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Балка горячекатаная</a>
            </div>
          </div>
        </div>
        <div class="drop__col">
          <div class="drop__cat">
            <a href="#" class="drop__ttl">Листовой прокат</a>
            <div class="drop__el">
              <a href="#" class="drop__link">Лист горячекатаный</a>
              <a href="#" class="drop__link drop__link-small">Лист г/к ст3</a>
              <a href="#" class="drop__link drop__link-small">Лист низколегированный</a>
              <a href="#" class="drop__link drop__link-small">Лист конструкционный</a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Лист рифленый </a>
            </div>
            <div class="drop__el">
              <a href="#" class="drop__link">Лист холоднокатаный</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="drop_about" data-id="2">
    <div class="drop_about__title">О компании</div>
    <nav class="drop_about__navs">
      <a href="#" class="drop_about__nav">Миссия</a>
      <a href="#" class="drop_about__nav">Отзывы и достижения</a>
      <a href="#" class="drop_about__nav">Видео</a>
      <a href="#" class="drop_about__nav">Региональная сеть</a>
      <a href="#" class="drop_about__nav">ГОСТы</a>
      <a href="#" class="drop_about__nav">Партнеры</a>
      <a href="#" class="drop_about__nav">Производство</a>
      <a href="#" class="drop_about__nav">Грамоты и награды</a>
      <a href="#" class="drop_about__nav">Контроль качества</a>
      <a href="#" class="drop_about__nav">Пресса о нас</a>
      <a href="#" class="drop_about__nav">Сертификаты</a>
      <a href="#" class="drop_about__nav">Реквизиты</a>
      <a href="#" class="drop_about__nav">Новости компании</a>
      <a href="#" class="drop_about__nav">Фотогалерея</a>
    </nav>
  </div>

  <div class="drop_about" data-id="3">
    <div class="drop_about__title">Покупателю</div>
    <nav class="drop_about__navs">
      <a href="#" class="drop_about__nav">Покупателю</a>
      <a href="#" class="drop_about__nav">Типовой договор</a>
      <a href="#" class="drop_about__nav">Каталоги и презентации</a>
      <a href="#" class="drop_about__nav">Грамоты и награды</a>
      <a href="#" class="drop_about__nav">Сертификаты соответствия</a>
      <a href="#" class="drop_about__nav">ГОСТы</a>
      <a href="#" class="drop_about__nav">Контроль качества</a>
      <a href="#" class="drop_about__nav">Реквизиты</a>
    </nav>
  </div>

  <div class="mobile_menu">
    <div class="mobile_menu__top">
      <div class="mobile_menu__close"></div>
      <div class="mobile_menu__city">г. Москва</div>
    </div>
    <nav class="mobile_menu__navs">
      <a href="#" class="mobile_menu__nav">Продукция</a>
      <a href="#" class="mobile_menu__nav">О компании</a>
      <a href="#" class="mobile_menu__nav">Доставка и оплата</a>
      <a href="#" class="mobile_menu__nav">Услуги</a>
      <a href="#" class="mobile_menu__nav">Покупателю</a>
      <a href="#" class="mobile_menu__nav">Вакансии</a>
      <a href="#" class="mobile_menu__nav">Электронная очередь</a>
      <a href="#" class="mobile_menu__nav">Контакты</a>
    </nav>
    <div class="mobile_menu__time">Пн-Чт <span>9:00 - 18:00</span> Пт <span>9:00 - 17:00</span></div>
    <a href="mailto:zakaz@demidovsteel.ru" class="mobile_menu__email">zakaz@demidovsteel.ru</a>
    <a href="tel:+7(495)775-38-96" class="mobile_menu__phone">+7 (495) 775-38-96</a>
    <div class="mobile_menu__callback">Обратный звонок</div>
  </div>

  <div class="modal modal_cart">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Добавить металлобработку</div>
      <div class="modal__input">
        <div class="modal__label">Выберите тип обработки<span>*</span></div>
        <select data-placeholder="Введите" class="select2 select2-modal">
            <option value="">&nbsp;</option>
            <option value="type_1">Тип 1</option>
            <option value="type_2">Тип 2</option>
        </select>
      </div>
      <div class="modal__input">
        <div class="modal__label">Задание<span>*</span></div>
        <textarea name="comment" class="textarea" placeholder="Опишите подробнее, что необходимо сделать"></textarea>
      </div>
      <div class="input_file">
        <input id="file" name="file" class="input_file__input" type="file">
        <label for="file" class="input_file__label">
          <span class="input_file__button">Прикрепить чертеж</span>
          <span class="input_file__text">Не обязательно. Файлы jpeg, png, pdf не более 6 мб</span>
        </label>
      </div>
      <div class="modal__buttons">
        <div class="modal__button">Отмена</div>
        <div class="modal__button modal__button-dark">Добавить</div>
      </div>
      <div class="modal__operator">После оформления заказа Менеджер клиентского сервиса свяжется с Вами для уточнения деталей задания</div>
    </div>
  </div>

  <div class="modal modal_cabinet">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Войдите <br>или зарегистриуйтесь</div>
      <div class="modal__input">
        <div class="modal__label">Ваш e-mail</div>
        <input name="email" placeholder="Sample@sample.com" class="input" type="email">
      </div>
      <div class="modal__input">
        <div class="modal__label">Пароль</div>
        <input name="password" placeholder="Введите" class="input" type="password">
      </div>
      <div class="modal__buttons">
        <div class="modal__button modal__button-dark">Добавить</div>
        <div class="modal__button modal__button-empty">Забыли пароль?</div>
      </div>
      <div class="modal__text">
        Еще нет аккаунта? Зарегистрируйтесь
        и получайте индивидуальные предложения
      </div>
      <div class="modal__button">Зарегистрироваться</div>
    </div>
  </div>

  <div class="modal modal_reg">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Регистрация</div>
      <div class="modal__input">
        <div class="modal__label">ФИО<span>*</span></div>
        <input id="name" name="name" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Наименование компании<span>*</span></div>
        <input id="title" name="title" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Ваш e-mail<span>*</span></div>
        <input name="email" placeholder="Sample@sample.com" class="input" type="email">
      </div>
      <div class="modal__input">
        <div class="modal__label">Номер телефона<span>*</span></div>
        <input id="phone" name="phone" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Пароль<span>*</span></div>
        <input name="password" placeholder="Введите" class="input" type="password">
      </div>
      <div class="modal__input">
        <div class="modal__label">Повторите пароль<span>*</span></div>
        <input name="password_2" placeholder="Введите" class="input" type="password">
      </div>
      <div class="modal__button modal__button-dark modal__button-full">Зарегистрироваться</div>
      <div class="checkbox">
          <input id="agree" value="agree" name="agree" type="checkbox">
          <label for="agree">
            Нажимая кнопку «Зарегистрироваться» вы соглашаетесь с условиями <a href="#" target="_blank">Пользовательского соглашения</a> и <a href="#" target="_blank">Условиями обработки персональных данных</a>
          </label>
      </div>
      <div class="modal__buttons">
        <div class="modal__question">Есть аккаунт?</div>
        <div class="modal__button">Войти</div>
      </div>
    </div>
  </div>

  <div class="modal modal_ren">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Востановление пароля</div>
      <div class="modal__text modal__text-full">Введите ваш e-mail указанный при регистрации и мы вышлем на него инструкцию по востановлению пароля</div>
      <div class="modal__input">
        <div class="modal__label">Ваш e-mail<span>*</span></div>
        <input name="email" placeholder="Sample@sample.com" class="input" type="email">
      </div>
      <div class="modal__button modal__button-dark modal__button-full">Востановить пароль</div>
    </div>
  </div>

  <div class="modal modal_ren_2">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Востановление пароля</div>
      <div class="modal__ttl">Введите новые данные</div>
      <div class="modal__input">
        <div class="modal__label">Новый пароль<span>*</span></div>
        <input name="password" placeholder="Введите" class="input" type="password">
      </div>
      <div class="modal__input">
        <div class="modal__label">Повторите пароль<span>*</span></div>
        <input name="password_2" placeholder="Введите" class="input err" type="password">
        <div class="input__alert">Пароли не совпадают</div>
      </div>
      <div class="modal__alert">Неверный логин или пароль!</div>
      <div class="modal__button modal__button-dark modal__button-full">Востановить пароль</div>
    </div>
  </div>

  <div class="modal modal_success">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Заказ Е-787863 от 14.12.22 <br>Успешно завершен!</div>
      <div class="modal__button modal__button-dark modal__button-full close_modal">Хорошо</div>
    </div>
  </div>

  <div class="modal modal_reviews">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal_reviews__wrp">
        <img class="modal_reviews__img" src="img/modal_reviews__img.jpg" alt="">
        <div class="modal_reviews__right">
          <div class="reviews__title">ООО «Липецкая металлургическая компания»</div>
          <div class="reviews__small">Генеральный директор</div>
          <div class="reviews__name">Кривенкова А.В.</div>
          <div class="reviews__text">
            <p>Предприятие ООО «Металл-Сервис НК» выражает огромную благодарность и признательность компании «ГК Демидов» за качественную и высокопрофессиональную работу по поставкам металлопроката для нужд нашего предприятия.
              Особо следует отметить компетентность и высокую квалификацию сотрудников компании, в частности менеджера Устинова Максима за добросовестное отношение к заказам и работе в целом. Все поставки металлопроката осуществляется своевременно, качественно и в полном объеме.</p>
            <p>Благодарим Вас за взаимовыгодное и плодотворное сотрудничество и желаем коллективу «ГК Демидов» уверенного роста и процветания.Предприятие ООО «Металл-Сервис НК» выражает огромную благодарность и признательность компании «ГК Демидов» за качественную и высокопрофессиональную работу по поставкам металлопроката для нужд нашего предприятия.
              Особо следует отметить компетентность и высокую квалификацию сотрудников компании, в частности менеджера Устинова Максима за добросовестное отношение к заказам и работе в целом. Все поставки металлопроката осуществляется своевременно, качественно и в полном объеме.</p>
            <p>Благодарим Вас за взаимовыгодное и плодотворное сотрудничество и желаем коллективу «ГК Демидов» уверенного роста и процветания.Предприятие ООО «Металл-Сервис НК» выражает огромную благодарность и признательность компании «ГК Демидов» за качественную и высокопрофессиональную работу по поставкам металлопроката для нужд нашего предприятия.</p>
            <p>Особо следует отметить компетентность и высокую квалификацию сотрудников компании, в частности менеджера Устинова Максима за добросовестное отношение к заказам и работе в целом. Все поставки металлопроката осуществляется своевременно, качественно и в полном объеме.</p>
            <p>Благодарим Вас за взаимовыгодное и плодотворное сотрудничество и желаем коллективу «ГК Демидов» уверенного роста и процветания</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal_reviews_add">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Добавить отзыв</div>
      <div class="modal__input">
        <div class="modal__label">Компания<span>*</span></div>
        <input name="company" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">ФИО<span>*</span></div>
        <input name="name" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Ваш отзыв<span>*</span></div>
        <textarea name="comment" class="textarea" placeholder="Введите"></textarea>
      </div>
      <div class="input_file">
        <input id="file_2" name="file_2" class="input_file__input" type="file">
        <label for="file_2" class="input_file__label">
          <span class="input_file__button">Прикрепить документ</span>
          <span class="input_file__text">Не обязательно. Файлы jpeg, png, pdf не более 6 мб</span>
        </label>
      </div>
      <div class="modal__button modal__button-dark modal__button-full">Добавить отзыв</div>
      <div class="modal__under">
        Нажимая кнопку «Добавить отзыв» вы соглашаетесь с условиями<br>
        <a href="#">Пользовательского соглашения</a> и <a href="#">Условиями обработки персональных данных</a>
      </div>
    </div>
  </div>

  <div class="modal modal_callback">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Обратный звонок</div>
      <div class="modal__input">
        <div class="modal__label">ФИО<span>*</span></div>
        <input id="name" name="name" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Номер телефона<span>*</span></div>
        <input id="phone" name="phone" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__button modal__button-dark modal__button-full">Отправить</div>
      <div class="checkbox">
          <input id="agree_2" value="agree_2" name="agree_2" type="checkbox">
          <label for="agree_2">
            Нажимая кнопку «Отправить» вы соглашаетесь с условиями <a href="#" target="_blank">Пользовательского соглашения</a> и <a href="#" target="_blank">Условиями обработки персональных данных</a>
          </label>
      </div>
    </div>
  </div>

  <div class="modal modal_order">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Быстрый заказ</div>
      <div class="modal__input">
        <div class="modal__label">ФИО<span>*</span></div>
        <input id="name" name="name" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Номер телефона<span>*</span></div>
        <input id="phone" name="phone" placeholder="Введите" class="input" type="text">
      </div>
      <div class="modal__input">
        <div class="modal__label">Ваш e-mail<span>*</span></div>
        <input name="email" placeholder="Sample@sample.com" class="input" type="email">
      </div>
      <div class="modal__button modal__button-dark modal__button-full">Оформить</div>
      <div class="checkbox">
          <input id="agree_3" value="agree_3" name="agree_3" type="checkbox">
          <label for="agree_3">
            Нажимая кнопку «Оформить» вы соглашаетесь с условиями <a href="#" target="_blank">Пользовательского соглашения</a> и <a href="#" target="_blank">Условиями обработки персональных данных</a>
          </label>
      </div>
    </div>
  </div>

  <div class="modal change_address">
    <div class="modal__content">
      <div class="modal__close"></div>
      <div class="modal__title">Изменить адрес самовывоза</div>
      <div class="modal__input">
          <div class="modal__label">Выберите адрес самовывоза<span>*</span></div>
          <select id="order_address_modal" data-placeholder="Введите" class="select2">
              <option value="">&nbsp;</option>
              <option value="<div class='order__city'>Москва Розница</div> 300057, г. Москва, Алексинское шоссе, дом 36">г. Москва, Алексинское шоссе, дом 36</option>
              <option  value="<div class='order__city'>Тула</div>">г. Тула</option>
          </select>
      </div>
      <div class="modal__buttons">
        <div class="modal__button close_modal">Отмена</div>
        <div class="modal__button modal__button-dark change_address_choose">Выбрать</div>
      </div>
    </div>
  </div>
  
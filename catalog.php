<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="breadcrumbs">
        <div class="wrapper wrapper-breadcrumbs">
            <a href="#">Главная</a>
            <div class="breadcrumbs__arrow"></div>
            <span>Каталог</span>
        </div>
    </div>
    <div class="wrapper">
        <h1 class="title title-page">Каталог продукции</h1>

        <div class="cat_slider">
            <div class="cat_slider__el" style="background-image: url(img/cat_slider__el-1.jpg)">
                <div class="cat_slider__title">Заголовок для слайдера</div>
                <a href="#" class="banner__button">Подробнее</a>
            </div>
            <div class="cat_slider__el" style="background-image: url(img/cat_slider__el-1.jpg)">
                <div class="cat_slider__title">Заголовок для слайдера</div>
                <a href="#" class="banner__button">Подробнее</a>
            </div>
            <div class="cat_slider__el" style="background-image: url(img/cat_slider__el-1.jpg)">
                <div class="cat_slider__title">Заголовок для слайдера</div>
                <a href="#" class="banner__button">Подробнее</a>
            </div>
        </div>

        <div class="cat_utps">
            <div class="cat_utps__el">
                <img class="cat_utps__img" src="img/cat_utps__img-1.svg" alt="">
                <div class="cat_utps__text">На рынке металорпоката<br> с 1992 года</div>
            </div>
            <div class="cat_utps__el">
                <img class="cat_utps__img" src="img/cat_utps__img-2.svg" alt="">
                <div class="cat_utps__text">Собственное<br> производство</div>
            </div>
            <div class="cat_utps__el">
                <img class="cat_utps__img" src="img/cat_utps__img-3.svg" alt="">
                <div class="cat_utps__text">Развитая<br> региональная сеть</div>
            </div>
            <div class="cat_utps__el">
                <img class="cat_utps__img" src="img/cat_utps__img-4.svg" alt="">
                <div class="cat_utps__text">Сервисный<br> металлоцентр</div>
            </div>
            <div class="cat_utps__el">
                <img class="cat_utps__img" src="img/cat_utps__img-5.svg" alt="">
                <div class="cat_utps__text">Гибкая система<br> скидок</div>
            </div>
            <div class="cat_utps__el">
                <img class="cat_utps__img" src="img/cat_utps__img-6.svg" alt="">
                <div class="cat_utps__text">Возможность<br> рассрочки</div>
            </div>
        </div>

        <?php include 'includes/cats.php'; ?>

        <div class="cat_banner" style="background-image: url(img/cat_banner.jpg)">
            <div class="cat_banner__left">
                <div class="cat_banner__title">Акции</div>
                <div class="cat_banner__text">Тут мы собрали самые актуальные скидки и акции успейте воспользоваться выгодными предложениями</div>
            </div>
            <a href="#" class="banner__button">Подробнее</a>
        </div>

        <div class="treatment">
            <h2 class="title title-page title-page_small">Металлобработка</h2>
            <div class="treatment__els">
                <div class="treatment__el">
                    <div class="treatment__image" style="background-image: url(img/treatment__image-1.jpg)"></div>
                    <div class="treatment__title">Обработка арматурного проката</div>
                    <div class="treatment__bottom">
                        <ul class="treatment__list">
                            <li class="treatment__l">
                                Газовая резка арматурного проката
                                <b>от 2 500р/т</b>
                            </li>
                        </ul>
                        <a href="#" class="treatment__link">В каталог</a>
                    </div>
                </div>
                <div class="treatment__el">
                    <div class="treatment__image" style="background-image: url(img/treatment__image-2.jpg)"></div>
                    <div class="treatment__title">Обработка листового проката</div>
                    <div class="treatment__bottom">
                        <ul class="treatment__list">
                            <li class="treatment__l">
                                Плазменная резка
                                <div>от 2 500р/т</div>
                            </li>
                            <li class="treatment__l">
                                Рубка гильотинными ножницами
                                <div>от 2 500р/т</div>
                            </li>
                            <li class="treatment__l">
                                Газовая резка листового проката
                                <div>от 2 500р/т</div>
                            </li>
                        </ul>
                        <a href="#" class="treatment__link">В каталог</a>
                    </div>
                </div>
                <div class="treatment__el">
                    <div class="treatment__image" style="background-image: url(img/treatment__image-3.jpg)"></div>
                    <div class="treatment__title">Обработка сортового проката</div>
                    <div class="treatment__bottom">
                        <ul class="treatment__list">
                            <li class="treatment__l">
                                Газовая резка сортового проката
                                <span>от 2 500р/т</span>
                            </li>
                        </ul>
                        <a href="#" class="treatment__link">В каталог</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart_del">
            <div class="cart_del__top">
                <h2 class="title title-page title-page_small">Доставка и оплата</h2>
                <div class="cart_del__city">г. Москва</div>
            </div>

            <?php include 'includes/city_block.php'; ?>
            
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
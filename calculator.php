<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="breadcrumbs">
        <div class="wrapper wrapper-breadcrumbs">
            <a href="#">Главная</a>
            <div class="breadcrumbs__arrow"></div>
            <span>Калькулятор металла</span>
        </div>
    </div>
    <div class="wrapper">
        <h1 class="title title-text">Калькулятор металла</h1>
        <div class="calculator">
            <div class="calculator__wrp">
                <div class="calculator__col">
                    <div class="modal__input">
                        <div class="modal__label">Тип продукции<span>*</span></div>
                        <select data-placeholder="Швеллер" class="select2 select2_images">
                            <option value="">&nbsp;</option>
                            <option value="1">Труба круглая</option>
                            <option value="2">Труба профильная</option>
                        </select>
                    </div>
                    <div class="modal__input">
                        <div class="modal__label">Выберите парамметр для рассчета:</div>
                        <div class="calculator__tabs">
                            <div data-id="1" class="calculator__tab">Расчет веса</div>
                            <div data-id="2" class="calculator__tab active">Расчет длины</div>
                        </div>
                    </div>
                    <div data-id="1" class="calculator__wp">
                        <div class="calculator__inputs">
                            <div class="modal__input">
                                <div class="modal__label">Вес полки<span>*</span></div>
                                <input id="calc_6" name="calc_6" placeholder="0" class="input" type="text">
                                <div class="modal__txt">Кг</div>
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Вес стенки<span>*</span></div>
                                <input id="calc_7" name="calc_7" placeholder="0" class="input" type="text">
                                <div class="modal__txt">Кг</div>
                            </div>
                        </div>
                    </div>
                    <div data-id="2" class="calculator__wp active">
                        <div class="calculator__inputs">
                            <div class="modal__input">
                                <div class="modal__label">Толщина полки<span>*</span></div>
                                <input id="calc_1" name="calc_1" placeholder="0" class="input" type="text">
                                <div class="modal__txt">мм</div>
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Толщина стенки<span>*</span></div>
                                <input id="calc_2" name="calc_2" placeholder="0" class="input" type="text">
                                <div class="modal__txt">мм</div>
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Вес<span>*</span></div>
                                <input id="calc_3" name="calc_3" placeholder="0" class="input" type="text">
                                <div class="modal__txt">Кг</div>
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Высота швеллера<span>*</span></div>
                                <input id="calc_4" name="calc_4" placeholder="0" class="input" type="text">
                                <div class="modal__txt">мм</div>
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Ширина полки<span>*</span></div>
                                <input id="calc_5" name="calc_5" placeholder="0" class="input" type="text">
                                <div class="modal__txt">мм</div>
                            </div>
                        </div>
                    </div>
                    <div class="calculator__bold">Длина партии: 450 м</div>
                    <div class="calculator__grey">Ориентировочная длина 1кг: 0,24 м</div>
                    <div class="calculator__button">Экспресс заявка</div>
                </div>
                <div class="calculator__col">
                    <img class="calculator__img" src="img/calculator__img.png" alt="">
                    <div class="calculator__text">Как отметила в своем выступлении на 12-й общероссийской конференции «Стальные трубы: производство и региональный сбыт» Александра Бобкова, руководитель отдела снабжения «ГК Демидов»</div>
                </div>
            </div>
            <div class="calculator__txt">Наша компания на протяжении последний пяти лет плодотворно сотрудничает с «ГК Демидов» (или ООО «ТК РТЗ»). На протяжении многих лет мы имели возможность неоднократно убедиться в высокой квалификации менеджмента Вашей компании, отличном качестве электросварной трубы ООО «Рязанский трубный завод». Качество обслуживания ООО «ГК Демидов», доброжелательность и профессионализм сотрудников, оперативная поставка широкого ассортимента профильной и электросварной трубы всегда оставляет очень хорошее впечатление!</div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
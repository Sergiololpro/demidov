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
        <div id="calculator" class="calculator">
            <div class="calculator__wrp">
                <div class="calculator__col">
                    <div class="modal__input">
                        <div class="modal__label">Тип продукции<span>*</span></div>
                        <select id="type" data-placeholder="Выберите тип" class="select2_images">
                            <option value="">&nbsp;</option>
                            <option v-for="type in types" :value="type.id">{{ type.title }}</option>
                        </select>
                    </div>
                    <div v-if="type_selected == 1" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div data-id="1" class="calculator__tab active">Расчет веса</div>
                                <div data-id="2" class="calculator__tab">Расчет длины</div>
                            </div>
                        </div>
                        <div data-id="1" class="calculator__wp active">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Диаметр<span>*</span>{{ armatura_diameter }}</div>
                                    <select
                                        v-model="armatura_diameter"
                                        data-select="armatura_diameter"
                                        class="my_select"
                                        @change="calcAramturaWeight()"
                                    >
                                        <option value="" disabled selected>Диаметр</option>
                                        <option v-for="diameter in armatura_diameters" :value="diameter.value">{{ diameter.value }}</option>
                                    </select>
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="armatura_length"
                                        id="armatura_length"
                                        name="armatura_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcAramturaWeight()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                            </div>
                        </div>
                        <div data-id="2" class="calculator__wp">
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
                        <div v-if="armatura_length" class="calculator__bold">Длина партии: {{ armatura_length }} м</div>
                        <div v-if="armatura_diameter && armatura_length" class="calculator__bold">Вес партии: {{ armatura_weight }} кг</div>
                    </div>
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

<script>
    var types = [
        {
            id: 1,
            title: "Арматура",
        },
        {
            id: 2,
            title: "Двутавр",
        },
        {
            id: 3,
            title: "Швеллер",
        },
        {
            id: 4,
            title: "Уголок",
        },
        {
            id: 5,
            title: "Труба",
        },
        {
            id: 6,
            title: "Профильная труба",
        },
    ],
    
    armatura_diameters = [
        {
            value: 4.0
        },
        {
            value: 4.5
        },
        {
            value: 5.0
        },
        {
            value: 5.5
        },
        {
            value: 6.0
        },
        {
            value: 6.5
        },
        {
            value: 7.0
        },
        {
            value: 7.5
        },
        {
            value: 8.0
        },
        {
            value: 8.5
        },
        {
            value: 9.0
        },
        {
            value: 9.5
        },
        {
            value: 10.0
        },
        {
            value: 11.0
        },
        {
            value: 12.0
        },
        {
            value: 13.0
        },
        {
            value: 14.0
        },
        {
            value: 15.0
        },
        {
            value: 16.0
        },
        {
            value: 17.0
        },
        {
            value: 18.0
        },
        {
            value: 19.0
        },
        {
            value: 20.0
        },
        {
            value: 22.0
        },
        {
            value: 25.0
        },
        {
            value: 28.0
        },
        {
            value: 32.0
        },
        {
            value: 36.0
        },
        {
            value: 40.0
        }
    ]
</script>

<?php include 'includes/footer.php'; ?>

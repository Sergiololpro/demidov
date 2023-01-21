<?php include 'includes/header.php'; ?>

<div class="page">
    <div class="breadcrumbs">
        <div class="wrapper wrapper-breadcrumbs">
            <a href="#">Главная</a>
            <div class="breadcrumbs__arrow"></div>
            <a href="#">О компании</a>
            <div class="breadcrumbs__arrow"></div>
            <span>Бронирование</span>
        </div>
    </div>
    <div class="wrapper">
        <h1 class="title title-text">Бронирование</h1>

        <div class="booking">
            <div class="booking__ttl">Уважаемые клиенты и партнеры компании!</div>
            <div class="booking__text">В случае если у вас возникли проблемы, появились вопросы, либо просто есть пожелания или комментарии по поводу качества нашей продукции или уровня обслуживания, просим Вас заполнить форму-анкету на этой странице. Отдел контроля качества обязательно ответит на ваши вопросы и учтет все пожелания.</div>
            <div class="booking__wrp">
                <div class="booking__top">Анкета на бронирование</div>
                <div class="booking__left">
                    <div class="quality__block">
                        <div class="quality__ttl">Данные о компании</div>
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
                        <div class="quality__inputs">
                            <div class="modal__input">
                                <div class="modal__label">ФИО Клиента<span>*</span></div>
                                <input name="name" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Наименование организации<span>*</span></div>
                                <input name="organization" placeholder="Введите" class="input" type="text">
                            </div>
                        </div>
                        <div class="quality__inputs">
                            <div class="modal__input">
                                <div class="modal__label">E-mail<span>*</span></div>
                                <input name="email" placeholder="Sample@sample.com" class="input" type="email">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Телефон<span>*</span></div>
                                <input name="phone" placeholder="+_ ___ ___ __ __" class="input" type="text">
                            </div>
                        </div>
                        <div class="quality__inputs">
                            <div class="modal__input">
                                <div class="modal__label">Номер счета<span>*</span></div>
                                <input name="number" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Регистрационный номер автомобиля<span>*</span></div>
                                <input name="car" placeholder="Введите" class="input" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="quality__block">
                        <div class="quality__ttl">Водитель</div>
                        <div class="quality__inputs">
                            <div class="modal__input">
                                <div class="modal__label">ФИО Водителя<span>*</span></div>
                                <input name="driver" placeholder="Введите" class="input" type="text">
                            </div>
                            <div class="modal__input">
                                <div class="modal__label">Серия и номер паспорта водителя<span>*</span></div>
                                <input name="passport" placeholder="Введите" class="input" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="modal__input">
                        <div class="modal__label">Дополнительная иформация</div>
                        <textarea name="comment" class="textarea" placeholder="Введите"></textarea>
                    </div>
                </div>
                <div id="vue" class="booking__right">
                    <div class="quality__ttl">Дата и время погрузки</div>
                    <div id="calendar" class="calendar"></div>
                    <div class="booking__calendar">

                    </div>
                    <div class="booking__times">
                        <div
                            v-for="time in activeTimes"
                            class="booking__time"
                            :class="{ 'active' : selectedDate == curDate && selectedTime == time }"
                            :data-time="time"
                            @click="chooseTime(time)"
                        >
                            {{ time }}
                        </div>
                    </div>
                    <div v-if="dateRow" class="booking__t">
                        Ваше вреямя: 
                        <span>{{ dateRow }}</span>
                        <input name="date" type="hidden" :value="selectedDate">
                        <input name="time" type="hidden" :value="selectedTime">
                    </div>
                </div>
                <div class="booking__bottom">
                    <div class="booking__button">Получить номер талона</div>
                    <div class="quality__txt">
                        Нажимая кнопку «Подписаться» вы соглашаетесь с условиями <a href="#">Пользовательского соглашения</a> и <a href="#">Условиями обработки персональных данных</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var dates = [
        {
            date: "21012023",
            times: ["12:00", "12:30", "13:00"],
        },
        {
            date: "22012023",
            times: ["13:00", "13:30", "14:00"],
        },
        {
            date: "23012023",
            times: ["15:00", "15:30", "16:00"],
        },
        {
            date: "24012023",
            times: ["12:00", "12:30", "13:00"],
        },
        {
            date: "25012023",
            times: ["13:00", "13:30", "14:00"],
        },
        {
            date: "26012023",
            times: ["12:00", "12:30", "13:00"],
        },
        {
            date: "27012023",
            times: ["13:00", "13:30", "14:00"],
        },
        {
            date: "28012023",
            times: ["15:00", "15:30", "16:00"],
        },
        {
            date: "29012023",
            times: ["15:00", "15:30", "16:00"],
        },
        {
            date: "30012023",
            times: ["15:00", "15:30", "16:00"],
        },
        {
            date: "31012023",
            times: ["15:00", "15:30", "16:00"],
        },
    ]
</script>


<?php include 'includes/footer.php'; ?>
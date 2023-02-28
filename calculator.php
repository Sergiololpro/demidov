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
                            <option v-for="type in types" :value="type.id">{{ type.title }}</option>
                        </select>
                    </div>
                    <div v-if="type_selected == 1" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : armatura_calc }"
                                    @click="armatura_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !armatura_calc }"
                                    @click="armatura_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Диаметр<span>*</span></div>
                                    <select
                                        v-model="armatura_diameter"
                                        data-select="armatura_diameter"
                                        class="my_select"
                                        @change="calcAramtura()"
                                    >
                                        <option value="" disabled selected>Диаметр</option>
                                        <option v-for="diameter in armatura_diameters" :value="diameter.value">{{ diameter.value }}</option>
                                    </select>
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="armatura_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="armatura_length"
                                        id="armatura_length"
                                        name="armatura_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcAramtura()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!armatura_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="armatura_weight"
                                        id="armatura_weight"
                                        name="armatura_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcAramtura()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="armatura_calc && armatura_calc_weight > 0" class="calculator__bold">Вес партии: {{ armatura_calc_weight }} кг</div>
                        <div v-if="!armatura_calc && armatura_calc_length > 0" class="calculator__bold">Длина партии: {{ armatura_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 2" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : beam_calc }"
                                    @click="beam_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !beam_calc }"
                                    @click="beam_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Тип балки<span>*</span></div>
                                    <select
                                        v-model="beam__type"
                                        data-select="beam__type"
                                        class="my_select"
                                    >
                                        <option value="" disabled selected>Тип</option>
                                        <option v-for="type in beam__types" :value="type.id">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div v-if="beam__type" class="modal__input">
                                    <div class="modal__label">Номер балки<span>*</span></div>
                                    <select
                                        v-if="beam__type == 1"
                                        v-model="beam__id"
                                        data-select="beam__id"
                                        class="my_select"
                                        @change="calcBeam()"
                                    >
                                        <option value="" disabled selected>Номер</option>
                                        <option v-for="(type, id) in beam__normal" :value="id">{{ type.title }}</option>
                                    </select>
                                    <select
                                        v-if="beam__type == 2"
                                        v-model="beam__id"
                                        data-select="beam__id"
                                        class="my_select"
                                        @change="calcBeam()"
                                    >
                                        <option value="" disabled selected>Номер</option>
                                        <option v-for="(type, id) in beam__slope" :value="id">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div v-if="beam_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="beam_length"
                                        id="beam_length"
                                        name="beam_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcBeam()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!beam_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="beam__weight"
                                        id="beam__weight"
                                        name="beam__weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcBeam()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="beam_calc && beam_calc_weight > 0" class="calculator__bold">Вес партии: {{ beam_calc_weight }} кг</div>
                        <div v-if="!beam_calc && beam_calc_length > 0" class="calculator__bold">Длина партии: {{ beam_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 3" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : channel_calc }"
                                    @click="channel_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !channel_calc }"
                                    @click="channel_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Тип балки<span>*</span></div>
                                    <select
                                        v-model="channel_type"
                                        data-select="channel_type"
                                        class="my_select"
                                    >
                                        <option value="" disabled selected>Тип</option>
                                        <option v-for="type in channel_types" :value="type.id">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div v-if="channel_type" class="modal__input">
                                    <div class="modal__label">Номер швеллера<span>*</span></div>
                                    <select
                                        v-if="channel_type == 1"
                                        v-model="channel_id"
                                        data-select="channel_id"
                                        class="my_select"
                                        @change="calcChannel()"
                                    >
                                        <option value="" disabled selected>Номер</option>
                                        <option v-for="(type, id) in channel_normal" :value="id">{{ type.title }}</option>
                                    </select>
                                    <select
                                        v-if="channel_type == 2"
                                        v-model="channel_id"
                                        data-select="channel_id"
                                        class="my_select"
                                        @change="calcChannel()"
                                    >
                                        <option value="" disabled selected>Номер</option>
                                        <option v-for="(type, id) in channel_slope" :value="id">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div v-if="channel_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="channel_length"
                                        id="channel_length"
                                        name="channel_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcChannel()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!channel_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="channel_weight"
                                        id="channel_weight"
                                        name="channel_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcChannel()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="channel_calc && channel_calc_weight > 0" class="calculator__bold">Вес партии: {{ channel_calc_weight }} кг</div>
                        <div v-if="!channel_calc && channel_calc_length > 0" class="calculator__bold">Длина партии: {{ channel_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 4" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : corner_calc }"
                                    @click="corner_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !corner_calc }"
                                    @click="corner_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="corner_type"
                                        data-select="corner_type"
                                        class="my_select"
                                        @change="calcCorner()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Ширина<span>*</span></div>
                                    <input
                                        v-model="corner_width"
                                        id="corner_width"
                                        name="corner_width"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCorner()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Высота<span>*</span></div>
                                    <input
                                        v-model="corner_height"
                                        id="corner_height"
                                        name="corner_height"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCorner()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Толщина<span>*</span></div>
                                    <input
                                        v-model="corner_thickness"
                                        id="corner_thickness"
                                        name="corner_thickness"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCorner()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="corner_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="corner_length"
                                        id="corner_length"
                                        name="corner_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCorner()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!corner_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="corner_weight"
                                        id="corner_weight"
                                        name="corner_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCorner()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="corner_calc && corner_calc_weight > 0" class="calculator__bold">Вес партии: {{ corner_calc_weight }} кг</div>
                        <div v-if="!corner_calc && corner_calc_length > 0" class="calculator__bold">Длина партии: {{ corner_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 5" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : pipe_calc }"
                                    @click="pipe_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !pipe_calc }"
                                    @click="pipe_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="pipe_type"
                                        data-select="pipe_type"
                                        class="my_select"
                                        @change="calcPipe()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Диаметр<span>*</span></div>
                                    <input
                                        v-model="pipe_diameter"
                                        id="pipe_diameter"
                                        name="pipe_diameter"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcPipe()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Толщина стенки<span>*</span></div>
                                    <input
                                        v-model="pipe_thickness"
                                        id="pipe_thickness"
                                        name="pipe_thickness"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcPipe()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="pipe_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="pipe_length"
                                        id="pipe_length"
                                        name="pipe_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcPipe()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!pipe_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="pipe_weight"
                                        id="pipe_weight"
                                        name="pipe_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcPipe()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="pipe_calc && pipe_calc_weight > 0" class="calculator__bold">Вес партии: {{ pipe_calc_weight }} кг</div>
                        <div v-if="!pipe_calc && pipe_calc_length > 0" class="calculator__bold">Длина партии: {{ pipe_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 6" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : profile_pipe_calc }"
                                    @click="profile_pipe_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !profile_pipe_calc }"
                                    @click="profile_pipe_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="profile_pipe_type"
                                        data-select="profile_pipe_type"
                                        class="my_select"
                                        @change="calcProfilePipe()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Ширина<span>*</span></div>
                                    <input
                                        v-model="profile_pipe_width"
                                        id="profile_pipe_width"
                                        name="profile_pipe_width"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcProfilePipe()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Высота<span>*</span></div>
                                    <input
                                        v-model="profile_pipe_height"
                                        id="profile_pipe_height"
                                        name="profile_pipe_height"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcProfilePipe()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Толщина стенки<span>*</span></div>
                                    <input
                                        v-model="profile_pipe_thickness"
                                        id="profile_pipe_thickness"
                                        name="profile_pipe_thickness"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcProfilePipe()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="profile_pipe_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="profile_pipe_length"
                                        id="profile_pipe_length"
                                        name="profile_pipe_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcProfilePipe()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!profile_pipe_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="profile_pipe_weight"
                                        id="profile_pipe_weight"
                                        name="profile_pipe_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcProfilePipe()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="profile_pipe_calc && profile_pipe_calc_weight > 0" class="calculator__bold">Вес партии: {{ profile_pipe_calc_weight }} кг</div>
                        <div v-if="!profile_pipe_calc && profile_pipe_calc_length > 0" class="calculator__bold">Длина партии: {{ profile_pipe_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 7" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : circle_calc }"
                                    @click="circle_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !circle_calc }"
                                    @click="circle_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="circle_type"
                                        data-select="circle_type"
                                        class="my_select"
                                        @change="calcCircle()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Диаметр<span>*</span></div>
                                    <input
                                        v-model="circle_diameter"
                                        id="circle_diameter"
                                        name="circle_diameter"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCircle()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="circle_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="circle_length"
                                        id="circle_length"
                                        name="circle_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCircle()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!circle_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="circle_weight"
                                        id="circle_weight"
                                        name="circle_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcCircle()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="circle_calc && circle_calc_weight > 0" class="calculator__bold">Вес партии: {{ circle_calc_weight }} кг</div>
                        <div v-if="!circle_calc && circle_calc_length > 0" class="calculator__bold">Длина партии: {{ circle_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 8" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : square_calc }"
                                    @click="square_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !square_calc }"
                                    @click="square_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="square_type"
                                        data-select="square_type"
                                        class="my_select"
                                        @change="calcSquare()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Сторона квадрата<span>*</span></div>
                                    <input
                                        v-model="square_side"
                                        id="square_side"
                                        name="square_side"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSquare()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="square_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="square_length"
                                        id="square_length"
                                        name="square_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSquare()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!square_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="square_weight"
                                        id="square_weight"
                                        name="square_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSquare()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="square_calc && square_calc_weight > 0" class="calculator__bold">Вес партии: {{ square_calc_weight }} кг</div>
                        <div v-if="!square_calc && square_calc_length > 0" class="calculator__bold">Длина партии: {{ square_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 9" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : six_calc }"
                                    @click="six_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !six_calc }"
                                    @click="six_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="six_type"
                                        data-select="six_type"
                                        class="my_select"
                                        @change="calcSix()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Номер шестигранника<span>*</span></div>
                                    <input
                                        v-model="six_number"
                                        id="six_number"
                                        name="six_number"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSix()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="six_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="six_length"
                                        id="six_length"
                                        name="six_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSix()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!six_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="six_weight"
                                        id="six_weight"
                                        name="six_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSix()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="six_calc && six_calc_weight > 0" class="calculator__bold">Вес партии: {{ six_calc_weight }} кг</div>
                        <div v-if="!six_calc && six_calc_length > 0" class="calculator__bold">Длина партии: {{ six_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 10" class="calculator__type">
                        <div class="modal__input">
                            <div class="modal__label">Выберите парамметр для рассчета:</div>
                            <div class="calculator__tabs">
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : ribbon_calc }"
                                    @click="ribbon_calc = true"
                                >
                                    Расчет веса
                                </div>
                                <div
                                    class="calculator__tab"
                                    :class="{ 'active' : !ribbon_calc }"
                                    @click="ribbon_calc = false"
                                >
                                    Расчет длины
                                </div>
                            </div>
                        </div>
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="ribbon_type"
                                        data-select="ribbon_type"
                                        class="my_select"
                                        @change="calcRibbon()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Ширина ленты<span>*</span></div>
                                    <input
                                        v-model="ribbon_width"
                                        id="ribbon_width"
                                        name="ribbon_width"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcRibbon()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Толщина ленты<span>*</span></div>
                                    <input
                                        v-model="ribbon_thickness"
                                        id="ribbon_thickness"
                                        name="ribbon_thickness"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcRibbon()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div v-if="ribbon_calc" class="modal__input">
                                    <div class="modal__label">Длина<span>*</span></div>
                                    <input
                                        v-model="ribbon_length"
                                        id="ribbon_length"
                                        name="ribbon_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcRibbon()"
                                    >
                                    <div class="modal__txt">м</div>
                                </div>
                                <div v-if="!ribbon_calc" class="modal__input">
                                    <div class="modal__label">Вес<span>*</span></div>
                                    <input
                                        v-model="ribbon_weight"
                                        id="ribbon_weight"
                                        name="ribbon_weight"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcRibbon()"
                                    >
                                    <div class="modal__txt">кг</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="ribbon_calc && ribbon_calc_weight > 0" class="calculator__bold">Вес партии: {{ ribbon_calc_weight }} кг</div>
                        <div v-if="!ribbon_calc && ribbon_calc_length > 0" class="calculator__bold">Длина партии: {{ ribbon_calc_length }} м</div>
                    </div>
                    <div v-if="type_selected == 11" class="calculator__type">
                        <div class="calculator__wp">
                            <div class="calculator__inputs">
                                <div class="modal__input">
                                    <div class="modal__label">Марка стали<span>*</span></div>
                                    <select
                                        v-model="sheet_type"
                                        data-select="sheet_type"
                                        class="my_select"
                                        @change="calcSheet()"
                                    >
                                        <option value="" disabled selected>Марка стали</option>
                                        <option v-for="type in metall_types" :value="type.value">{{ type.title }}</option>
                                    </select>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Ширина листа<span>*</span></div>
                                    <input
                                        v-model="sheet_width"
                                        id="sheet_width"
                                        name="sheet_width"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSheet()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Толщина листа<span>*</span></div>
                                    <input
                                        v-model="sheet_thickness"
                                        id="sheet_thickness"
                                        name="sheet_thickness"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSheet()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Длина листа<span>*</span></div>
                                    <input
                                        v-model="sheet_length"
                                        id="sheet_length"
                                        name="sheet_length"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSheet()"
                                    >
                                    <div class="modal__txt">мм</div>
                                </div>
                                <div class="modal__input">
                                    <div class="modal__label">Количество<span>*</span></div>
                                    <input
                                        v-model="sheet_quantity"
                                        id="sheet_quantity"
                                        name="sheet_quantity"
                                        placeholder="0"
                                        class="input"
                                        type="text"
                                        @input="calcSheet()"
                                    >
                                    <div class="modal__txt">шт</div>
                                </div>
                            </div>
                        </div>
                        <div v-if="sheet_width && sheet_length && sheet_quantity" class="calculator__bold">Площадь партии: {{ sheet_width * 0.001 * sheet_length * 0.001 * sheet_quantity }} м</div>
                        <div v-if="sheet_type && sheet_width && sheet_thickness && sheet_length && sheet_quantity" class="calculator__bold">Вес партии: {{ sheet_weight }} кг</div>
                    </div>
                </div>
                <div v-if="type_selected == 5" class="calculator__col calculator__col-right">
                    <div class="calculator__images">
                        <img class="calculator__img" src="img/calc_5_1.svg" alt="">
                        <img class="calculator__img" src="img/calc_5_2.png" alt="">
                    </div>
                    <div class="calculator__text">Как отметила в своем выступлении на 12-й общероссийской конференции «Стальные трубы: производство и региональный сбыт» Александра Бобкова, руководитель отдела снабжения «ГК Демидов»</div>
                </div>
                <div v-if="type_selected == 6" class="calculator__col calculator__col-right">
                    <div class="calculator__images">
                        <img class="calculator__img" src="img/calc_6_1.svg" alt="">
                        <img class="calculator__img" src="img/calc_6_2.png" alt="">
                    </div>
                    <div class="calculator__text">Как отметила в своем выступлении на 12-й общероссийской конференции «Стальные трубы: производство и региональный сбыт» Александра Бобкова, руководитель отдела снабжения «ГК Демидов»</div>
                </div>
                <div v-if="type_selected == 7" class="calculator__col calculator__col-right">
                    <div class="calculator__images">
                        <img class="calculator__img" src="img/calc_7_1.svg" alt="">
                        <img class="calculator__img" src="img/calc_7_2.png" alt="">
                    </div>
                    <div class="calculator__text">Как отметила в своем выступлении на 12-й общероссийской конференции «Стальные трубы: производство и региональный сбыт» Александра Бобкова, руководитель отдела снабжения «ГК Демидов»</div>
                </div>
                <div v-if="type_selected == 8" class="calculator__col calculator__col-right">
                    <div class="calculator__images">
                        <img class="calculator__img" src="img/calc_8_1.svg" alt="">
                        <img class="calculator__img" src="img/calc_8_2.png" alt="">
                    </div>
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
        {
            id: 7,
            title: "Круг",
        },
        {
            id: 8,
            title: "Квадрат",
        },
        {
            id: 9,
            title: "Шестигранник",
        },
        {
            id: 10,
            title: "Лента",
        },
        {
            id: 11,
            title: "Лист",
        },
    ],

    // Марка металла
    metall_types = [
        {
            title: "Ст 3",
            value: 7800
        },
        {
            title: "10",
            value: 7850
        },
        {
            title: "20",
            value: 7850
        },
        {
            title: "40Х",
            value: 7820
        },
        {
            title: "45",
            value: 7820
        },

        {
            title: "65",
            value: 7810
        },
        {
            title: "65Г",
            value: 7850
        },
        {
            title: "09Г2С",
            value: 7850
        },
        {
            title: "15Х5М",
            value: 7750
        },
        {
            title: "10ХСНД",
            value: 7850
        },
        {
            title: "12Х1МФ",
            value: 7800
        },
        {
            title: "ШХ15",
            value: 7810
        },
        {
            title: "Р6М5",
            value: 8300
        },
        {
            title: "У7",
            value: 7830
        },
        {
            title: "У8",
            value: 7840
        },
        {
            title: "У8А",
            value: 7850
        },
        {
            title: "У10",
            value: 7810
        },
        {
            title: "У10А",
            value: 7810
        },
        {
            title: "У12А",
            value: 7810
        },
    ],
    
    // Арматура
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
    ],

    // Двутавр
    beam__types = [
        {
            id: 1,
            title: "Нормальный двутавр",
        },
        {
            id: 2,
            title: "Двутавр с уклоном полок",
        },
    ],

    beam__normal = [
        {
            title: "10Б1",
            h: 100,
            t: 5.7,
            b: 55,
            s: 4.1
        },
        {
            title: "12Б1",
            h: 117.6,
            t: 5.1,
            b: 64,
            s: 3.8
        },
        {
            title: "12Б2",
            h: 120,
            t: 6.3,
            b: 64,
            s: 4.4
        },
        {
            title: "14Б1",
            h: 137.4,
            t: 5.6,
            b: 73,
            s: 3.8
        },
        {
            title: "14Б2",
            h: 140,
            t: 6.9,
            b: 73,
            s: 4.7
        },
        {
            title: "16Б1",
            h: 157,
            t: 5.9,
            b: 82,
            s: 4
        },
        {
            title: "16Б2",
            h: 160,
            t: 7.4,
            b: 82,
            s: 5
        },
        {
            title: "18Б1",
            h: 177,
            t: 6.5,
            b: 91,
            s: 4.3
        },
        {
            title: "18Б2",
            h: 180,
            t: 8,
            b: 91,
            s: 5.3
        },
        {
            title: "20Б1",
            h: 200,
            t: 8.5,
            b: 100,
            s: 5.6
        },
        {
            title: "23Б1",
            h: 230,
            t: 9,
            b: 110,
            s: 5.6
        },
        {
            title: "26Б1",
            h: 258,
            t: 8.5,
            b: 120,
            s: 5.8
        },
        {
            title: "26Б2",
            h: 261,
            t: 10,
            b: 120,
            s: 6
        },
        {
            title: "30Б1",
            h: 296,
            t: 8.5,
            b: 140,
            s: 5.8
        },
        {
            title: "30Б2",
            h: 299,
            t: 10,
            b: 140,
            s: 6
        },
        {
            title: "35Б1",
            h: 346,
            t: 8.5,
            b: 155,
            s: 6.2
        },
        {
            title: "35Б2",
            h: 349,
            t: 10,
            b: 155,
            s: 6.5
        },
        {
            title: "40Б1",
            h: 392,
            t: 9.5,
            b: 165,
            s: 7
        },
        {
            title: "40Б2",
            h: 396,
            t: 11.5,
            b: 165,
            s: 7.5
        },
        {
            title: "45Б1",
            h: 443,
            t: 11,
            b: 180,
            s: 7.8
        },
        {
            title: "45Б2",
            h: 447,
            t: 13,
            b: 180,
            s: 8.4
        },
        {
            title: "50Б1",
            h: 492,
            t: 12,
            b: 200,
            s: 8.8
        },
        {
            title: "50Б2",
            h: 496,
            t: 14,
            b: 200,
            s: 9.2
        },
        {
            title: "55Б1",
            h: 543,
            t: 13.5,
            b: 220,
            s: 9.5
        },
        {
            title: "55Б2",
            h: 547,
            t: 15.5,
            b: 220,
            s: 10
        },
        {
            title: "60Б1",
            h: 593,
            t: 15.5,
            b: 230,
            s: 10.5
        },
        {
            title: "60Б2",
            h: 597,
            t: 17.5,
            b: 230,
            s: 11
        },
        {
            title: "70Б1",
            h: 691,
            t: 5.5,
            b: 260,
            s: 12
        },
        {
            title: "70Б2",
            h: 697,
            t: 18.5,
            b: 260,
            s: 12.5
        },
        {
            title: "80Б1",
            h: 791,
            t: 17,
            b: 280,
            s: 13.5
        },
        {
            title: "80Б2",
            h: 798,
            t: 20.5,
            b: 280,
            s: 14
        },
        {
            title: "90Б1",
            h: 893,
            t: 18.5,
            b: 300,
            s: 15
        },
        {
            title: "90Б2",
            h: 900,
            t: 22,
            b: 300,
            s: 15.5
        },
        {
            title: "100Б1",
            h: 990,
            t: 21,
            b: 320,
            s: 16
        },
        {
            title: "100Б2",
            h: 998,
            t: 25,
            b: 320,
            s: 17
        },
        {
            title: "100Б3",
            h: 1006,
            t: 29,
            b: 320,
            s: 18
        },
        {
            title: "100Б4",
            h: 1013,
            t: 32.5,
            b: 320,
            s: 19.5
        },
    ],

    beam__slope = [
        {
            title: "10",
            h: 100,
            t: 7.3,
            b: 55,
            s: 4.5
        },
        {
            title: "12",
            h: 120,
            t: 7.3,
            b: 64,
            s: 4.8
        },
        {
            title: "14",
            h: 140,
            t: 7.5,
            b: 73,
            s: 4.9
        },
        {
            title: "16",
            h: 160,
            t: 7.8,
            b: 81,
            s: 5
        },
        {
            title: "18",
            h: 180,
            t: 8.1,
            b: 90,
            s: 5.1
        },
        {
            title: "20",
            h: 200,
            t: 8.4,
            b: 100,
            s: 5.2
        },
        {
            title: "22",
            h: 220,
            t: 8.7,
            b: 110,
            s: 5.4
        },
        {
            title: "24",
            h: 240,
            t: 9.5,
            b: 115,
            s: 5.6
        },
        {
            title: "27",
            h: 270,
            t: 9.8,
            b: 125,
            s: 6
        },
        {
            title: "30",
            h: 300,
            t: 10.2,
            b: 135,
            s: 6.5
        },
        {
            title: "33",
            h: 330,
            t: 11.2,
            b: 140,
            s: 7
        },
        {
            title: "35",
            h: 360,
            t: 12.3,
            b: 145,
            s: 7.5
        },
        {
            title: "40",
            h: 400,
            t: 13,
            b: 155,
            s: 8.3
        },
        {
            title: "45",
            h: 450,
            t: 14.2,
            b: 160,
            s: 9
        },
        {
            title: "50",
            h: 500,
            t: 15.2,
            b: 170,
            s: 10
        },
        {
            title: "55",
            h: 550,
            t: 16.5,
            b: 180,
            s: 11
        },
        {
            title: "60",
            h: 600,
            t: 17.8,
            b: 190,
            s: 12
        },
    ],

    // Двутавр
    channel_types = [
        {
            id: 1,
            title: "С параллельными гранями полок (П)",
        },
        {
            id: 2,
            title: "С уклоном внутренних граней полок (У)",
        },
    ],

    channel_normal = [
        {
            title: "5П",
            h: 50,
            t: 7,
            b: 32,
            s: 4.4
        },
        {
            title: "6.5П",
            h: 65,
            t: 7.2,
            b: 36,
            s: 4.4
        },
        {
            title: "8П",
            h: 80,
            t: 7.4,
            b: 40,
            s: 4.5
        },
        {
            title: "10П",
            h: 100,
            t: 7.6,
            b: 46,
            s: 4.5
        },
        {
            title: "12П",
            h: 120,
            t: 7.8,
            b: 52,
            s: 4.8
        },
        {
            title: "14П",
            h: 140,
            t: 8.1,
            b: 58,
            s: 4.9
        },
        {
            title: "16П",
            h: 160,
            t: 8.4,
            b: 64,
            s: 5
        },
        {
            title: "16аП",
            h: 160,
            t: 9,
            b: 68,
            s: 5
        },
        {
            title: "18П",
            h: 180,
            t: 8.7,
            b: 70,
            s: 5.1
        },
        {
            title: "18аП",
            h: 180,
            t: 9.3,
            b: 74,
            s: 5.1
        },
        {
            title: "20П",
            h: 200,
            t: 9,
            b: 76,
            s: 5.2
        },
        {
            title: "22П",
            h: 220,
            t: 9.5,
            b: 82,
            s: 5.4
        },
        {
            title: "24П",
            h: 240,
            t: 10,
            b: 90,
            s: 5.6
        },
        {
            title: "27П",
            h: 270,
            t: 10.5,
            b: 95,
            s: 6
        },
        {
            title: "30П",
            h: 300,
            t: 11,
            b: 100,
            s: 6.5
        },
        {
            title: "33П",
            h: 330,
            t: 11.7,
            b: 105,
            s: 7
        },
        {
            title: "36П",
            h: 360,
            t: 12.6,
            b: 110,
            s: 7.5
        },
        {
            title: "40П",
            h: 400,
            t: 13.5,
            b: 115,
            s: 8
        },
    ],

    channel_slope = [
        {
            title: "5У",
            h: 50,
            t: 7,
            b: 32,
            s: 4.4
        },
        {
            title: "6.5У",
            h: 65,
            t: 7.2,
            b: 36,
            s: 4.4
        },
        {
            title: "8У",
            h: 80,
            t: 7.4,
            b: 40,
            s: 4.5
        },
        {
            title: "10У",
            h: 100,
            t: 7.6,
            b: 46,
            s: 4.5
        },
        {
            title: "12У",
            h: 120,
            t: 7.8,
            b: 52,
            s: 4.8
        },
        {
            title: "14У",
            h: 140,
            t: 8.1,
            b: 58,
            s: 4.9
        },
        {
            title: "16У",
            h: 160,
            t: 8.4,
            b: 64,
            s: 5
        },
        {
            title: "16аУ",
            h: 160,
            t: 9,
            b: 68,
            s: 5
        },
        {
            title: "18У",
            h: 180,
            t: 8.7,
            b: 70,
            s: 5.1
        },
        {
            title: "18аУ",
            h: 180,
            t: 9.3,
            b: 74,
            s: 5.1
        },
        {
            title: "20У",
            h: 200,
            t: 9,
            b: 76,
            s: 5.2
        },
        {
            title: "22У",
            h: 220,
            t: 9.5,
            b: 82,
            s: 5.4
        },
        {
            title: "24У",
            h: 240,
            t: 10,
            b: 90,
            s: 5.6
        },
        {
            title: "27У",
            h: 270,
            t: 10.5,
            b: 95,
            s: 6
        },
        {
            title: "30У",
            h: 300,
            t: 11,
            b: 100,
            s: 6.5
        },
        {
            title: "33У",
            h: 330,
            t: 11.7,
            b: 105,
            s: 7
        },
        {
            title: "36У",
            h: 360,
            t: 12.6,
            b: 110,
            s: 7.5
        },
        {
            title: "40У",
            h: 400,
            t: 13.5,
            b: 115,
            s: 8
        },
    ]

</script>

<?php include 'includes/footer.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/new_ad-filters.css?!">
    <link rel="stylesheet" href="../public/css/nav/nav.css?2">
    <title>Document</title>
</head>
<body>
    <!-- Modal Start -->
    <div class="reg_modal-wrapper">
        <div class="login_modal modal_active">
            <div class="close_button-block">
                <button class="close_button">X</button>
            </div>
            <div class="login_modal-title">
                <p>Вход</p>
            </div>
            <div class="login_modal-wrapper">
                <div class="login_modal-item">
                    <p>Логин</p>
                    <input type="text" id="login-log">
                </div>
                <div class="login_modal-item">
                    <p>Пароль</p>
                    <input type="password" id="password-log">
                </div>
                <div class="warning-box-log">
                    
                </div>
                <div class="button_block">
                    <button class="reg_button">Регистрация</button>
                    <button class="log_button" id="log-btn">Войти</button>
                </div>
            </div>
        </div>
        <div class="registr_modal">
            <div class="registr_modal-title">
                <p>Регистрация</p>
            </div>
            <div class="registr_modal-wrapper">
                <div class="registr_modal-item">
                    <p>Логин</p>
                    <input type="text" id="reg-login">
                </div>
                <div class="registr_modal-item">
                    <p>Пароль</p>
                    <input type="password" id="reg-password">
                </div>
                <div class="warning-box-reg">
                    
                </div>
                <div class="button_block">
                    <button class="back_button">Назад</button>
                    <button class="log_button" id="reg-btn">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Nav Start -->
    <nav class="nav-box">
        <div class="nav-container df">
            <div class="nav-column">
                <a href="ads.php"><p class="logo">Auto <span>Drive</span></p></a>
            </div>
            <div class="nav-column">
                <ul>
                    <a href="#">Связь с нами</a>
                    <a href="new_ad.php" class="new_ad-button">Выложить объявление</a>
                </ul>
            </div>
            <div class="nav-column">
                <button class="login_button">Вход</button>
            </div>
        </div>
    </nav>
    <!-- Nav End -->
    <div class="container">
        <!-- Main Start -->
        <main class="main-box">
            <!-- Wrapper Start -->
            <div class="new_ad-wrapper">
                <div class="ad_type-block">
                    <div class="ad_type-title">
                        <p>Выбор типа выкладываемого Т/С</p>
                    </div>
                    <div class="ad_type-wrapper">
                        <div class="choice_mark-block active">
                            <div class="choice_mark-title">
                                <p>Марка</p>
                            </div>
                            <div class="choice_mark-wrapper">
                                <div class="mark_list-block">
                                    <div class="item">
                                        <button class="mark_button">Alfa Romeo</button>
                                        <button class="mark_button">Audi</button>
                                        <button class="mark_button">BMW</button>
                                        <button class="mark_button">Chevrolet</button>
                                        <button class="mark_button">Chrysler</button>
                                        <button class="mark_button">Citroen</button>
                                    </div>
                                    <div class="item">
                                        <button class="mark_button">Dodge</button>
                                        <button class="mark_button">Fiat</button>
                                        <button class="mark_button">Ford</button>
                                        <button class="mark_button">Geely</button>
                                        <button class="mark_button">Honda</button>
                                        <button class="mark_button">Hyundai</button>
                                    </div>
                                    <div class="item">
                                        <button class="mark_button">Kia</button>
                                        <button class="mark_button">Lada (ВАЗ)</button>
                                        <button class="mark_button">Lexus</button>
                                        <button class="mark_button">Mazda</button>
                                        <button class="mark_button">Mercedes-Benz</button>
                                        <button class="mark_button">Mitsubishi</button>
                                    </div>                                    
                                    <div class="item">
                                        <button class="mark_button">Nissan</button>
                                        <button class="mark_button">Opel</button>
                                        <button class="mark_button">Peugeot</button>
                                        <button class="mark_button">Renault</button>
                                        <button class="mark_button">Rover</button>
                                        <button class="mark_button">SEAT</button>
                                    </div>
                                    <div class="item">
                                        <button class="mark_button">Skoda</button>
                                        <button class="mark_button">Subaru</button>
                                        <button class="mark_button">Suzuki</button>
                                        <button class="mark_button">Toyota</button>
                                        <button class="mark_button">Volkswagen</button>
                                        <button class="mark_button">Volvo</button>
                                    </div>
                                </div>
                                <div class="button-block">
                                    <button>Все марки</button>
                                </div>
                            </div>
                        </div>
                        <div class="choice_model-block">
                            <div class="choice_mark-title">
                                <p>BMW</p>
                            </div>
                            <div class="choice_model-title">
                                <p>Модель</p>
                            </div>
                            <div class="choice_model-wrapper">
                                <div class="model_list-block">
                                    <div class="item">
                                        <button class="model_button">1 серия</button>
                                        <button class="model_button">1M</button>
                                        <button class="model_button">2 серия</button>
                                        <button class="model_button">2 серия Active Tourer</button>
                                        <button class="model_button">2 серия Grand Tourer</button>
                                        <button class="model_button">3 серия</button>
                                        <button class="model_button">4 серия</button>
                                        <button class="model_button">5 серия</button>
                                        <button class="model_button">6 серия</button>
                                        <button class="model_button">7 серия</button>
                                    </div>
                                    <div class="item">
                                        <button class="model_button">8 серия</button>
                                        <button class="model_button">i3</button>
                                        <button class="model_button">i8</button>
                                        <button class="model_button">iX</button>
                                        <button class="model_button">iX3</button>
                                        <button class="model_button">M2</button>
                                        <button class="model_button">M3</button>
                                        <button class="model_button">M4</button>
                                        <button class="model_button">M5</button>
                                        <button class="model_button">M6</button>
                                    </div>
                                    <div class="item">
                                        <button class="model_button">M8</button>
                                        <button class="model_button">X1</button>
                                        <button class="model_button">X2</button>
                                        <button class="model_button">X3</button>
                                        <button class="model_button">X3M</button>
                                        <button class="model_button">X4</button>
                                        <button class="model_button">X4M</button>
                                        <button class="model_button">X5</button>
                                        <button class="model_button">X5M</button>
                                        <button class="model_button">X6</button>
                                    </div>                                    
                                    <div class="item">
                                        <button class="model_button">X6M</button>
                                        <button class="model_button">X7</button>
                                        <button class="model_button">Z1</button>
                                        <button class="model_button">Z3</button>
                                        <button class="model_button">Z3M</button>
                                        <button class="model_button">Z4</button>
                                        <button class="model_button">Z4M</button>
                                        <button class="model_button">Z8</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="choice_year-block">
                            <div class="choice_mark-title">
                                <p>BMW</p>
                            </div>
                            <div class="choice_model-title">
                                <p>5 серия</p>
                            </div>
                            <div class="choice_year-title">
                                <p>Год</p>
                            </div>
                            <div class="choice_year-wrapper">
                                <div class="year_list-block">
                                    <div class="item">
                                        <button class="year_button">2023</button>
                                        <button class="year_button">2022</button>
                                        <button class="year_button">2021</button>
                                        <button class="year_button">2020</button>
                                        <button class="year_button">2019</button>
                                        <button class="year_button">2018</button>
                                        <button class="year_button">2017</button>
                                        <button class="year_button">2016</button>
                                        <button class="year_button">2017</button>
                                        <button class="year_button">2016</button>
                                        <button class="year_button">2015</button>
                                        <button class="year_button">2014</button>
                                        <button class="year_button">2013</button>
                                    </div>
                                    <div class="item">
                                        <button class="year_button">2012</button>
                                        <button class="year_button">2011</button>
                                        <button class="year_button">2010</button>
                                        <button class="year_button">2009</button>
                                        <button class="year_button">2008</button>
                                        <button class="year_button">2007</button>
                                        <button class="year_button">2006</button>
                                        <button class="year_button">2005</button>
                                        <button class="year_button">2004</button>
                                        <button class="year_button">2003</button>
                                        <button class="year_button">2002</button>
                                        <button class="year_button">2001</button>
                                        <button class="year_button">2000</button>
                                    </div>
                                    <div class="item">
                                        <button class="year_button">1999</button>
                                        <button class="year_button">1998</button>
                                        <button class="year_button">1997</button>
                                        <button class="year_button">1996</button>
                                        <button class="year_button">1995</button>
                                        <button class="year_button">1994</button>
                                        <button class="year_button">1993</button>
                                        <button class="year_button">1992</button>
                                        <button class="year_button">1991</button>
                                        <button class="year_button">1990</button>
                                        <button class="year_button">1989</button>
                                        <button class="year_button">1988</button>
                                        <button class="year_button">1987</button>
                                    </div>                                    
                                    <div class="item">
                                        <button class="year_button">1986</button>
                                        <button class="year_button">1985</button>
                                        <button class="year_button">1984</button>
                                        <button class="year_button">1983</button>
                                        <button class="year_button">1982</button>
                                        <button class="year_button">1981</button>
                                        <button class="year_button">1980</button>
                                        <button class="year_button">1979</button>
                                        <button class="year_button">1978</button>
                                        <button class="year_button">1977</button>
                                        <button class="year_button">1976</button>
                                        <button class="year_button">1975</button>
                                        <button class="year_button">1974</button>
                                    </div>
                                    <div class="item">
                                        <button class="year_button">1973</button>
                                        <button class="year_button">1972</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="choice_generation-block">
                            <div class="choice_mark-title">
                                <p>BMW</p>
                            </div>
                            <div class="choice_model-title">
                                <p>5 серия</p>
                            </div>
                            <div class="choice_year-title">
                                <p>2000</p>
                            </div>
                            <div class="choice_generation-title">
                                <p>Поколение</p>
                            </div>
                            <div class="choice_generation-wrapper">
                                <div class="generation_list-block">
                                    <div class="item">
                                        <button class="parameters_button">
                                            <img draggable="false" src="../public/img/dorest.png">
                                            <p>E39, 1995...2000</p>
                                        </button>                                                                               
                                    </div>
                                    <div class="item">
                                        <button class="parameters_button">
                                            <img draggable="false" src="../public/img/rest.png">
                                            <p>E39 - Рестайлинг, 2000...2004</p>
                                        </button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="choice_parameters-block">
                            <div class="choice_mark-title">
                                <p>BMW</p>
                            </div>
                            <div class="choice_model-title">
                                <p>5 серия</p>
                            </div>
                            <div class="choice_year-title">
                                <p>2000</p>
                            </div>
                            <div class="choice_generation-title">
                                <p>E39 - Рестайлинг, 2000...2004</p>
                            </div>
                            <div class="choice_parameters-wrapper">
                                <div class="parameters_list-block">
                                    <div class="item">
                                        <div class="choice_parameters-title">
                                            <p>Параметры</p>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Кузов</p>
                                            <select>
                                                <option disabled selected>
                                                    <p>Тип кузова</p>
                                                </option>
                                                <option>
                                                    <p>Седан</p>
                                                </option>
                                                <option>
                                                    <p>Универсал</p>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Коробка передач</p>
                                            <div class="button-block">
                                                <button class="transmission_button transmission_button-active">Автомат</button>
                                                <button class="transmission_button">Механика</button>
                                            </div>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Тип двигателя</p>
                                            <select>
                                                <option disabled selected>
                                                    <p>Тип топлива</p>
                                                </option>
                                                <option>
                                                    <p>Дизель</p>                                                    
                                                </option>
                                                <option>
                                                    <p>Бензин</p>                                                    
                                                </option>
                                            </select>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Привод</p>
                                            <select>
                                                <option disabled selected>
                                                    <p>Тип привода</p>
                                                </option>
                                                <option>
                                                    <p>Задний</p>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Модификация</p>
                                            <select>
                                                <option disabled selected>
                                                    <p>Тип модификации</p>
                                                </option>
                                                <option>
                                                    <p>520d MT(136лс)</p>
                                                </option>
                                                <option>
                                                    <p>525d MT (163лс)</p>
                                                </option>
                                                <option>
                                                    <p>530d MT 24V (193лс)</p>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="choice_parameters-title">
                                            <p>VIN-номер</p>
                                        </div>
                                        <div class="parameter_item vin_item">
                                            <p>Код из 17 символов</p>
                                            <div class="vin_block">
                                                <input type="text">
                                                <div class="vin_desc">
                                                    <p>Необязательно для транспорта старше 2017 г.<br><br>
                                                        Но мы рекомендуем заполнить поле. Объявление с VIN-номером привлекает внимание и повышает доверие к продавцу.<br><br>                                                  
                                                        Результат проверки опубликуем на вашем объявлении и отметим его биркой: 
                                                    </p>
                                                    <div class="vin">
                                                        <img draggable="false" src="../public/img/check mark.svg">
                                                        VIN
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="choice_parameters-title">
                                            <p>Состояние и цвет</p>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Состояние</p>
                                            <select>
                                                <option disabled selected>
                                                    <p>Тип состояния</p>
                                                </option>
                                                <option>
                                                    <p>с пробегом</p>
                                                </option>
                                                <option>
                                                    <p>аварийный</p>
                                                </option>
                                                <option>
                                                    <p>на запчасти</p>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Пробег</p>
                                            <input type="text">
                                            <div class="button-block">
                                                <button class="mileage_button mileage_button-active">км</button>
                                                <button class="mileage_button">миль</button>
                                            </div>
                                        </div>
                                        <div class="parameter_item vin_item">
                                            <p>Цвет кузова</p>
                                            <div class="parameter_select-item">
                                                <select>
                                                    <option disabled selected>
                                                        <p>Цвет</p>
                                                    </option>
                                                    <option>
                                                        <p>белый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>бордовый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>желтый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>зеленый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>коричневый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>красный</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>оранжевый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>серебристый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>серый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>фиолетовый</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>черный</p>                                                    
                                                    </option>
                                                    <option>
                                                        <p>другой</p>                                                    
                                                    </option>
                                                </select>
                                                <p class="parameter_desc">Укажите похожий, если не нашли свой</p>
                                            </div>                                            
                                        </div>
                                        <div class="parameter_item">
                                            <p>Материал</p>
                                            <select>
                                                <option disabled selected>
                                                    <p>Тип материала</p>
                                                </option>
                                                <option>
                                                    <p>натуральная кожа</p>
                                                </option>
                                                <option>
                                                    <p>исскуственная кожа</p>
                                                </option>
                                                <option>
                                                    <p>ткань</p>
                                                </option>
                                                <option>
                                                    <p>велюр</p>
                                                </option>
                                                <option>
                                                    <p>алькантара</p>
                                                </option>
                                                <option>
                                                    <p>комбинированные материалы</p>
                                                </option>
                                            </select>
                                        </div>
                                        <div class="parameter_item">
                                            <p>Цвет салона</p>
                                            <div class="button-block">
                                                <button class="color_button">светлый</button>
                                                <button class="color_button color_button-active">комби</button>
                                                <button class="color_button">тёмный</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="choice_parameters-title">
                                            <p>Комплектация</p>
                                        </div>
                                        <div class="parameter_item configuration">
                                            <div class="advertisement_detailed-wrapper">
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Эксерьер</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="exterior1" class="checkbox-input" type="checkbox">
                                                            <label for="exterior1"></label>
                                                            <p class="heading_item">Легкосплавные диски</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="exterior2" class="checkbox-input" type="checkbox">
                                                            <label for="exterior2"></label>
                                                            <p class="heading_item">Рейлинги на крыше</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="exterior3" class="checkbox-input" type="checkbox">
                                                            <label for="exterior3"></label>
                                                            <p class="heading_item">Фаркоп</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Системы помощи</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="help_system1" class="checkbox-input" type="checkbox">
                                                            <label for="help_system1"></label>
                                                            <p class="heading_item">Датчик дождя</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="help_system2" class="checkbox-input" type="checkbox">
                                                            <label for="help_system2"></label>
                                                            <p class="heading_item">Камера заднего вида</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="help_system3" class="checkbox-input" type="checkbox">
                                                            <label for="help_system3"></label>
                                                            <p class="heading_item">Парктроники</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="help_system4" class="checkbox-input" type="checkbox">
                                                            <label for="help_system4"></label>
                                                            <p class="heading_item">Контроль мертвых зон на зеркалах</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Комфорт</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="comfort1" class="checkbox-input" type="checkbox">
                                                            <label for="comfort1"></label>
                                                            <p class="heading_item">Автозапуск двигателя</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="comfort2" class="checkbox-input" type="checkbox">
                                                            <label for="comfort2"></label>
                                                            <p class="heading_item">Круиз-контроль</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="comfort3" class="checkbox-input" type="checkbox">
                                                            <label for="comfort3"></label>
                                                            <p class="heading_item">Управление мульдимедиа с руля</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="comfort4" class="checkbox-input" type="checkbox">
                                                            <label for="comfort4"></label>
                                                            <p class="heading_item">Электрорегулировка сидений</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="comfort5" class="checkbox-input" type="checkbox">
                                                            <label for="comfort5"></label>
                                                            <p class="heading_item">Передние электро-стеклоподъёмники</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="comfort6" class="checkbox-input" type="checkbox">
                                                            <label for="comfort6"></label>
                                                            <p class="heading_item">Задние электро-стеклоподъёмники</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Климат</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="climate1" class="checkbox-input" type="checkbox">
                                                            <label for="climate1"></label>
                                                            <p class="heading_item">Климат-контроль</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="climate2" class="checkbox-input" type="checkbox">
                                                            <label for="climate2"></label>
                                                            <p class="heading_item">Кондиционер</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Системы безопасности</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="safety_system1" class="checkbox-input" type="checkbox">
                                                            <label for="safety_system1"></label>
                                                            <p class="heading_item">ABS</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="safety_system2" class="checkbox-input" type="checkbox">
                                                            <label for="safety_system2"></label>
                                                            <p class="heading_item">ESP</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="safety_system3" class="checkbox-input" type="checkbox">
                                                            <label for="safety_system3"></label>
                                                            <p class="heading_item">Антипробуксовочная</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="safety_system4" class="checkbox-input" type="checkbox">
                                                            <label for="safety_system4"></label>
                                                            <p class="heading_item">Иммобилайзер</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="safety_system5" class="checkbox-input" type="checkbox">
                                                            <label for="safety_system5"></label>
                                                            <p class="heading_item">Сигнализация</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Интерьер</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="interior1" class="checkbox-input" type="checkbox">
                                                            <label for="interior1"></label>
                                                            <p class="heading_item">Люк</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="interior2" class="checkbox-input" type="checkbox">
                                                            <label for="interior2"></label>
                                                            <p class="heading_item">Панорамная крыша</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Мультимедиа</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="multimedia1" class="checkbox-input" type="checkbox">
                                                            <label for="multimedia1"></label>
                                                            <p class="heading_item">AUX или iPod</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="multimedia2" class="checkbox-input" type="checkbox">
                                                            <label for="multimedia2"></label>
                                                            <p class="heading_item">Bluetooth</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="multimedia3" class="checkbox-input" type="checkbox">
                                                            <label for="multimedia3"></label>
                                                            <p class="heading_item">CD или MP3</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="multimedia4" class="checkbox-input" type="checkbox">
                                                            <label for="multimedia4"></label>
                                                            <p class="heading_item">USB</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="multimedia5" class="checkbox-input" type="checkbox">
                                                            <label for="multimedia5"></label>
                                                            <p class="heading_item">Мультимедийный экран</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="multimedia6" class="checkbox-input" type="checkbox">
                                                            <label for="multimedia6"></label>
                                                            <p class="heading_item">Штатная навигация</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Обогрев</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="heating1" class="checkbox-input" type="checkbox">
                                                            <label for="exterior3"></label>
                                                            <p class="heading_item">Сидений</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="heating1" class="checkbox-input" type="checkbox">
                                                            <label for="heating1"></label>
                                                            <p class="heading_item">Лобового стекла</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="heating2" class="checkbox-input" type="checkbox">
                                                            <label for="heating2"></label>
                                                            <p class="heading_item">Зеркал</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="heating3" class="checkbox-input" type="checkbox">
                                                            <label for="heating3"></label>
                                                            <p class="heading_item">Руля</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="heating4" class="checkbox-input" type="checkbox">
                                                            <label for="heating4"></label>
                                                            <p class="heading_item">Автономный отопитель</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Подушки</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="airbags1" class="checkbox-input" type="checkbox">
                                                            <label for="airbags1"></label>
                                                            <p class="heading_item">Передние</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="airbags2" class="checkbox-input" type="checkbox">
                                                            <label for="airbags2"></label>
                                                            <p class="heading_item">Боковые</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="airbags3" class="checkbox-input" type="checkbox">
                                                            <label for="airbags3"></label>
                                                            <p class="heading_item">Задние</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="advertisement_detailed-main_item">
                                                    <div class="detailed_title">
                                                        <p class="heading_title">Фары</p>
                                                    </div>
                                                    <div class="detailed_item">
                                                        <div class="heading_item-block">
                                                            <input id="headlights1" class="checkbox-input" type="checkbox">
                                                            <label for="headlights1"></label>
                                                            <p class="heading_item">Ксеноновые</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="headlights2" class="checkbox-input" type="checkbox">
                                                            <label for="headlights2"></label>
                                                            <p class="heading_item">Противотуманные</p>
                                                        </div>
                                                        <div class="heading_item-block">
                                                            <input id="headlights3" class="checkbox-input" type="checkbox">
                                                            <label for="headlights3"></label>
                                                            <p class="heading_item">Светодиодные</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                           
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="add_photo-block">
                                            <div class="add_photo-title_block">
                                                <p class="title">Фотографии</p>
                                                <p class="desc">Используйте только свои снимки и не размещайте рекламу. Иначе модератор отклонит ваше объявление.</p>
                                                <p class="desc">JPF или PNG размером до 20 МБ.</p>
                                                <div class="button-block">
                                                    <input id="file1" accept="image/jpeg, image/png" type="file">
                                                    <label for="file1">Выбрать...</label>
                                                    <p class="desc">до 20 фото</p>
                                                </div>
                                            </div>
                                            <div class="img-block">
                                                <img draggable="false" src="../public/img/bmwm2.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="next_button-block">
                                            <button>Далее</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad_rule-block">
                    <div class="ad_rule-header">
                        <div class="ad_rule-title">
                            <a href="#">Правила подачи объявлений</a>
                        </div>
                        <div class="ad_rule-img">
                            <img draggable="false" src="../public/img/warning.svg">
                        </div>
                    </div>
                    <div class="ad_rule-desc">
                        <p>Модератор имеет право удалить объявление, если оно нарушает правила подачи</p>
                    </div>
                </div>
            </div>
            <!-- Wrapper End -->
        </main>
        <!-- Main End -->
    </div>
    <script src="../public/js/ad_filters-events_click.js"></script>
    <script src="../public/js/open_modal.js"></script>
</body>
</html>
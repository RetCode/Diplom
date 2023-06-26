<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/ad_page.css?!">
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
            <div class="advertisement-block">
                <!-- Header Start -->
                <div class="advertisement-header">
                    <div class="advertisement_left-header">
                        <div class="advertisement_name-block">
                            <p class="advertisement-name">Продажа BMW X5 E53, 2001г. в Лиде</p>
                        </div>
                        <div class="advertisement_viewers_time-block">
                            <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9927 5.60001C10.2288 5.60001 9.57461 5.32561 9.03014 4.77681C8.48568 4.22801 8.21391 3.56908 8.21484 2.80001C8.21484 2.03001 8.48707 1.37062 9.03153 0.821816C9.576 0.273016 10.2297 -0.000916862 10.9927 1.64706e-05C11.7566 1.64706e-05 12.4108 0.274416 12.9553 0.823216C13.4997 1.37202 13.7715 2.03095 13.7706 2.80001C13.7706 3.57001 13.4983 4.22941 12.9539 4.77821C12.4094 5.32701 11.7557 5.60095 10.9927 5.60001ZM8.21484 28C7.82131 28 7.49121 27.8656 7.22453 27.5968C6.95786 27.328 6.82498 26.9957 6.82591 26.6V9.48501C4.974 8.99501 3.45173 8.02108 2.2591 6.56321C1.06647 5.10535 0.320146 3.44215 0.020136 1.57362C-0.0493107 1.15362 0.0608779 0.785882 0.350702 0.470416C0.640526 0.15495 1.01646 -0.00185019 1.47852 1.64706e-05C1.8026 1.64706e-05 2.08641 0.116683 2.32993 0.350016C2.57346 0.583349 2.71791 0.863349 2.76328 1.19002C3.01792 2.84668 3.73553 4.22941 4.91613 5.33821C6.09672 6.44701 7.54352 7.00094 9.25654 7.00001H12.7289C13.4233 7.00001 14.0715 7.12834 14.6734 7.38501C15.2753 7.64168 15.8192 8.01501 16.3054 8.50501L21.618 13.86C21.8727 14.1167 22 14.4433 22 14.84C22 15.2367 21.8727 15.5633 21.618 15.82C21.3634 16.0767 21.0393 16.205 20.6458 16.205C20.2523 16.205 19.9282 16.0767 19.6735 15.82L15.1595 11.27V26.6C15.1595 26.9967 15.0262 27.3294 14.7595 27.5982C14.4928 27.867 14.1632 28.0009 13.7706 28C13.377 28 13.0469 27.8656 12.7803 27.5968C12.5136 27.328 12.3807 26.9957 12.3816 26.6V19.6H9.60377V26.6C9.60377 26.9967 9.47044 27.3294 9.20376 27.5982C8.93709 27.867 8.60745 28.0009 8.21484 28Z" fill="#F97044"/>
                            </svg>
                            <p class="advertisement_viewers-text">6</p>
                            <p class="advertisement_time-text">появилась в продаже 5 минут назад</p>
                        </div>
                    </div>
                    <div class="advertisement_right-header">
                        <div class="advertisement_favorite-block">
                            <button class="favorite-button">
                                <svg width="19" height="34" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2.089V24.001L6.546 17.741L13.091 24.001V2.089C13.0855 1.53321 12.8609 1.00206 12.466 0.610913C12.0711 0.21977 11.5378 0.000235894 10.982 2.59533e-09L10.905 0.001H10.909H2.183L2.11 2.59533e-09C1.55428 -2.75475e-05 1.021 0.219285 0.626088 0.610269C0.231172 1.00125 0.0065335 1.53231 0.001 2.088L0 2.089Z" fill="#C8C8C8"/>
                                </svg>   
                            </button>                                                         
                        </div>
                        <div class="advertisement_complaints-block">
                            <a href="#" class="complaints-button">Пожаловаться на объявление</a>
                        </div>
                    </div>
                </div>
                <!-- Header End -->

                <!-- Wrapper Start -->
                <div class="advertisement-wrapper">
                    <div class="advertisement_general-wrapper">
                        <div class="advertisement_image-block">
                            <div class="advertisement_main_image-block">
                                <img src="../public/img/advertisemt-img/image 389.png">
                            </div>
                            <div class="advertisement_scroll_image-block">
                                <div class="image-item-block">
                                    <img src="../public/img/advertisemt-img/image 389.png">
                                </div>
                                <div class="image-item-block">
                                    <img src="../public/img/advertisemt-img/image 389.png">
                                </div>
                                <div class="image-item-block">
                                    <img src="../public/img/advertisemt-img/image 389.png">
                                </div>
                                <div class="image-item-block">
                                    <img src="../public/img/advertisemt-img/image 389.png">
                                </div>
                                <div class="image-item-block">
                                    <img src="../public/img/advertisemt-img/image 389.png">
                                </div>
                            </div>
                        </div>
                        <div class="advertisement_important_description-block">
                            <div class="advertisement_cost-block">
                                <p class="main-cost">22 240р.</p>
                                <p class="secondary-cost">8 000$</p>
                            </div>
                            <div class="advertisement__price_chart-button_block">
                                <button class="advertisement__price_chart-button">График цен</button>
                            </div>
                            <div class="advertisement_about-block">
                                <div class="advertisement_detailed-info">
                                    <p>2001 г., автомат 4.4 бензин, 500 000 км, кроссовер, постоянный полный привод, чёрный</p>
                                </div>
                                <div class="advertisement_exchange-block">
                                    <p class="exchange-text">Обмен не интересует</p>
                                </div>
                                <div class="advertisement__release_city-block">
                                    <p class="release_city-text">Гродненская обл. Лида</p>
                                </div>
                                <div class="advertisement_vin-block">
                                    <div class="vin-check">
                                        <img src="../public/img/check mark.svg">
                                        <p>VIN</p>
                                    </div>
                                    <div class="vin_number-check">
                                        <div class="vin_number-header">
                                            <p>VIN-номер авто</p>
                                        </div>
                                        <div class="vin_number-text">
                                            <p>********Z1A017119</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="show_phone-button_block">
                                <button onclick="showPhone()" id="show_phone" class="show_phone">Показать телефон</button> 
                                <!-- <input onclick="showPhone()" id="show_phone" class="show_phone" type="button" value="Показать телефон"> -->
                            </div>                            
                        </div>
                    </div>
                    <div class="advertisement_description-wrapper">
                        <div class="advertisement_description__name-block">
                            <p>Описание</p>
                        </div>
                        <div class="advertisement_description-block">
                            <p class="description">ACURA MDX 2014 в цвете "Снежная Королева" в уникальной комплектации и состоянии. Максимальная заводская комплектация (ADVANCED) - кожаный салон, премиальное дерево, акустика, камера 360, адаптивный круиз контроль (сама тормозит/набирает скорость), возможно лучшие в классе светодиодные фары (ночью едешь как днем) + дополнительный и очень недешевый комплект оборудования - оригинальные рейлинги, подножки, оригинальный фаркоп, второй комплект оригинальных литых дисков, багажник на крышу Thule Excellence XT (лучший у Thule) - возможна продажа вместе с авто. В машине есть все и даже больше

Отдельного внимания заслуживает система полного привода - SH-AWD, БМВ брало наработки по своему X-Drive именно у японцев. Машина настраивалась на трассе в Нюрнберге - почитайте - много интересного.

Не американец - модель специально адаптированная для рынка СНГ - увеличенный дорожный просвет, усиленные тормоза, настроенная подвеска, обогрев.

Зимняя резина в отличном состоянии, весной был куплен комплект совершенно новой резины Michelin Pilot Sport 4 SUV, при желании можно еще сезон покататься на GOODYEAR EAGLE F1.
около 9000 км назад были заменены на оригинальные тормозные диски (ресурса остается еще на 100-150 000 КМ), заменено масло в коробке, муфте полного привода. Есть фактически полный набор масел для следующего ТО, покупалось с запасом весной прошлого года.

Безаварийное прошлое, бережная забота, трассовый пробег (для города другое авто), исключительно гаражное хранение, с момента выпуска по сей день на КАСКО (текущий полис до конца мая 2023 года), уникальная комплектация - если нужен действительно хороший и сверхнадежный автомобиль для души и семьи - звоните.

Продается, чтобы решить жилищный вопрос. После в планах купить такой же автомобиль снова. Поверьте - менять не на что и незачем. Адекватному покупателю - адекватный торг. Срочности нет! Перекупщикам и автосалонам просьба не беспокоить.
                            </p>
                        </div>                      
                    </div>
                    <div class="advertisement_detailed-wrapper">
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Эксерьер</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">exterior-item_1</p>
                                <p class="heading_item">exterior-item_2</p>
                                <p class="heading_item">exterior-item_3</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Системы помощи</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">help_system-item_1</p>
                                <p class="heading_item">help_system-item_2</p>
                                <p class="heading_item">help_system-item_3</p>
                                <p class="heading_item">help_system-item_4</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Комфорт</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">comfort-item_1</p>
                                <p class="heading_item">comfort-item_2</p>
                                <p class="heading_item">comfort-item_3</p>
                                <p class="heading_item">comfort-item_4</p>
                                <p class="heading_item">comfort-item_5</p>
                                <p class="heading_item">comfort-item_6</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Климат</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">climate-item_1</p>
                                <p class="heading_item">climate-item_2</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Системы безопасности</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">safety_system-item_1</p>
                                <p class="heading_item">safety_system-item_2</p>
                                <p class="heading_item">safety_system-item_3</p>
                                <p class="heading_item">safety_system-item_4</p>
                                <p class="heading_item">safety_system-item_5</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Интерьер</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">interior-item_1</p>
                                <p class="heading_item">interior-item_2</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Мультимедиа</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">multimedia-item_1</p>
                                <p class="heading_item">multimedia-item_2</p>
                                <p class="heading_item">multimedia-item_3</p>
                                <p class="heading_item">multimedia-item_4</p>
                                <p class="heading_item">multimedia-item_5</p>
                                <p class="heading_item">multimedia-item_6</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Обогрев</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">heating-item_1</p>
                                <p class="heading_item">heating-item_2</p>
                                <p class="heading_item">heating-item_3</p>
                                <p class="heading_item">heating-item_4</p>
                                <p class="heading_item">heating-item_5</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Подушки</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">airbags-item_1</p>
                                <p class="heading_item">airbags-item_2</p>
                                <p class="heading_item">airbags-item_3</p>
                            </div>
                        </div>
                        <div class="advertisement_detailed-main_item">
                            <div class="detailed_title">
                                <p class="heading_title">Фары</p>
                            </div>
                            <div class="detailed_item">
                                <p class="heading_item">headlights-item_1</p>
                                <p class="heading_item">headlights-item_2</p>
                                <p class="heading_item">headlights-item_3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wrapper End -->
            </div>            
        </main>
        <!-- Main End -->

        <!-- Modals Start -->
        <div></div>
        <!-- Modals End -->
    </div>
    <script src="../public/js/event-click.js"></script>
    <script src="../public/js/open_modal.js"></script>
</body>
</html>
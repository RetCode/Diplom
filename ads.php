<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/items.css?1">
    <link rel="stylesheet" href="../public/css/nav/nav.css?2">
    <title>Auto Drive | Ads Page</title>
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
                    <input type="text">
                </div>
                <div class="login_modal-item">
                    <p>Пароль</p>
                    <input type="password">
                </div>
                <div class="button_block">
                    <button class="reg_button">Регистрация</button>
                    <button class="log_button">Войти</button>
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
                    <input type="text">
                </div>
                <div class="registr_modal-item">
                    <p>Пароль</p>
                    <input type="password">
                </div>
                <div class="button_block">
                    <button class="back_button">Назад</button>
                    <button class="log_button">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Nav Start -->
    <nav class="nav-box">
        <div class="nav-container df">
            <div class="nav-column">
                <a href="#"><p class="logo">Auto <span>Drive</span></p></a>
            </div>
            <div class="nav-column">
                <ul>
                    <a href="#">Связь с нами</a>
                    <a href="new_ad.php" class="new_ad-button">Выложить объявление</a>
                </ul>
            </div>
            <?php

                if(isset($_SESSION["auth"]))
                {
                    echo '<div class="nav-column">
                        <a href="lk.php">'.$_SESSION["username"].'</a>
                    </div>';
                }
                else
                {
                    echo '<div class="nav-column">
                        <button class="login_button">Вход</button>
                    </div>';
                }
            ?>
        </div>
    </nav>
    <!-- Nav End -->
    <div class="container">
        <!-- Main Start -->
        <main class="main-box">
            <div class="search-filter-box">
                <div class="search-keywords-box">
                    <input type="text" placeholder="Поиск по ключевым словам">
                    <div class="about-keywords-button">
                        <img src="../public/img/faq.svg">
                        <div class="about-keywords-window">
                            <p>Например, «техосмотр» или «снята с учёта»</p>
                        </div>
                    </div>
                </div>
                <div class="main-filter-box">
                    <select class="main-filter">
                        <option>Марка</option>
                    </select>
                    <select disabled class="main-filter main-filter-blocked">
                        <option>Модель</option>
                    </select>
                    <select disabled class="main-filter main-filter-blocked">
                        <option>Поколение</option>
                    </select>
                </div>
                <div class="search-button-box">
                    <button>Поиск (20)</button>
                </div>
            </div>
            <div class="main-content">
                <div class="additional-filters-box">
                    <div class="filter-box">
                        <div class="filter-container">
                            <div class="filters-box">
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Цена</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <input class="text-input" type="text">
                                        <p class="filter-parametrs-text">-</p>
                                        <input class="text-input" type="text">
                                        <select class="currency-selection-button">
                                            <option>BYN</option>
                                            <option>USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Год</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <input class="text-input bigger" type="text" placeholder="От">
                                        <p class="filter-parametrs-text">-</p>
                                        <input class="text-input bigger" type="text" placeholder="До">
                                    </div>
                                </div>  
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Объём</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <input class="text-input bigger" type="text" placeholder="От">
                                        <p class="filter-parametrs-text">-</p>
                                        <input class="text-input bigger" type="text" placeholder="До">
                                    </div>
                                </div>              
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Тип КПП</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <input id="input1" class="checkbox-input" type="checkbox">
                                        <label for="input1"></label>
                                        <p class="checkbox-filter-parametrs-text">Автомат</p>
                                        <input id="input2" class="checkbox-input" type="checkbox">
                                        <label for="input2"></label>
                                        <p class="checkbox-filter-parametrs-text">Механика</p>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Тип двигателя</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <div class="checkbox-display-block fdc">
                                            <div class="filter-block mb">
                                                <input id="input3" class="checkbox-input" type="checkbox">
                                                <label for="input3"></label>
                                                <p class="checkbox-filter-parametrs-text">Дизель</p>
                                            </div>
                                            <div class="filter-block">
                                                <input id="input4" class="checkbox-input" type="checkbox">
                                                <label for="input4"></label>
                                                <p class="checkbox-filter-parametrs-text">Бензин</p>
                                            </div>                            
                                        </div>
                                        <div class="checkbox-display-block fdc">
                                            <div class="filter-block mb">
                                                <input id="input5" class="checkbox-input" type="checkbox">
                                                <label for="input5"></label>
                                                <p class="checkbox-filter-parametrs-text">Электро</p>
                                            </div>
                                            <div class="filter-block">
                                                <input id="input6" class="checkbox-input" type="checkbox">
                                                <label for="input6"></label>
                                                <p class="checkbox-filter-parametrs-text">Гибрид</p>
                                            </div>                            
                                        </div>                        
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Тип кузова</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <select class="dropdown-menu">
                                            <option>Седан</option>
                                            <option>Седан</option>
                                            <option>Седан</option>
                                        </select>
                                    </div>
                                </div>   
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Продавец</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <select class="dropdown-menu mb">
                                            <option selected>Область</option>
                                            <option>Седан</option>
                                            <option>Седан</option>
                                        </select>
                                        <select disabled class="dropdown-menu disabled">
                                            <option selected>Город</option>
                                            <option>Седан</option>
                                            <option>Седан</option>
                                        </select>
                                    </div>
                                    <div class="checkbox-block">
                                        <div class="checkbox-display-block">
                                            <input id="input7" class="checkbox-input" type="checkbox">
                                            <label for="input7"></label>
                                            <p class="checkbox-filter-parametrs-text">Частное лицо</p>
                                        </div>
                                        <div class="checkbox-display-block">
                                            <input id="input8" class="checkbox-input" type="checkbox">
                                            <label for="input8"></label>
                                            <p class="checkbox-filter-parametrs-text">Компания</p>
                                        </div>                        
                                    </div>
                                </div> 
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Состояние</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <select class="dropdown-menu mb">
                                            <option selected>Состояние</option>
                                            <option>Седан</option>
                                            <option>Седан</option>
                                        </select>
                                        <select class="dropdown-menu">
                                            <option selected>Пробег, км</option>
                                            <option>Седан</option>
                                            <option>Седан</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="filter-item filter-item-end">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Об объявлении</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <select class="dropdown-menu mb">
                                            <option selected>Период подачи</option>
                                            <option>Седан</option>
                                            <option>Седан</option>
                                        </select>
                                    </div>
                                    <div class="checkbox-block">
                                        <div class="checkbox-display-block">                            
                                            <input id="input9" class="checkbox-input" type="checkbox">
                                            <label for="input9"></label>
                                            <p class="checkbox-filter-parametrs-text">Возможность обмена</p>
                                        </div>
                                        <div class="checkbox-display-block">
                                            <input id="input10" class="checkbox-input" type="checkbox">
                                            <label for="input10"></label>
                                            <p class="checkbox-filter-parametrs-text">Проверенный <span class="green-text">VIN</span></p>
                                        </div>   
                                        <div class="checkbox-display-block">
                                            <input id="input11" class="checkbox-input" type="checkbox">
                                            <label for="input11"></label>
                                            <p class="checkbox-filter-parametrs-text">Есть видео</p>
                                        </div>                      
                                    </div>
                                </div>             
                            </div> 
                            <div class="filter-button-box">
                                <button>Применить</button>
                            </div>           
                        </div>        
                    </div>
                </div>
                <div class="posting-advertisement-box">

                    <div class="item-post">
                        <div class="item">
                            <a class="open-advertisement" href="ad_page.php">
                                <div class="item-img-space">
                                    <img src="../public/img/advertisemt-img/image 389.png">
                                    <div class="vip-type-advertisement">
                                        <p>VIP</p>
                                    </div>
                                    <div class="vin-type-advertisement">
                                        <img src="../public/img/check mark.svg">
                                        <p>VIN</p>
                                    </div>
                                </div>
                            </a>
                            <div class="advertisement-info">
                                <div class="advertisement-general-info">
                                    <div class="name">
                                        <a class="open-advertisement" href="ad_page.php"><p>BMW X5 E53</p></a>
                                    </div>
                                    <div class="advertisement-cost">
                                        <p class="byn-cost">22 240р.</p>
                                        <p class="usd-cost">8 000$</p>
                                        <!-- Конверт валюты из той, которая была указана при подаче -->
                                    </div>
                                </div>
                                <div class="advertisement-detailed-info">
                                    <div class="advertisement-detailed-info-text">
                                        <p>2001 г., автомат, 4.4 бензин, кроссовер, 500 000 км.</p>
                                    </div>
                                    <div class="advertisement-info-city-time">
                                        <p class="city">Лида</p>
                                        <!-- Город объявления, который указал продавец -->
                                        <p class="release-time">5 минут назад</p>
                                        <!-- Рассчитывать время когда объявление вышло в свет -->
                                    </div>
                                </div>
                            </div>
                            <button class="favorite-button">
                                <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2.089V24.001L6.546 17.741L13.091 24.001V2.089C13.0855 1.53321 12.8609 1.00206 12.466 0.610913C12.0711 0.21977 11.5378 0.000235894 10.982 2.59533e-09L10.905 0.001H10.909H2.183L2.11 2.59533e-09C1.55428 -2.75475e-05 1.021 0.219285 0.626088 0.610269C0.231172 1.00125 0.0065335 1.53231 0.001 2.088L0 2.089Z" fill="#C8C8C8"/>
                                </svg>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </main>
        <!-- Main End -->
    </div>
    <script src="../public/js/event-click.js"></script>
    <script src="../public/js/open_modal.js"></script>
</body>
</html>
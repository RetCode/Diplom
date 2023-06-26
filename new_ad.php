<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/new_ad.css?!">
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
            <!-- Wrapper Start -->
            <div class="new_ad-wrapper">
                <div class="ad_type-block">
                    <div class="ad_type-title">
                        <p>Выбор типа выкладываемого Т/С</p>
                    </div>
                    <div class="ad_type-wrapper">
                        <a id="car" href="new_ad-filters.php" class="ad_type-item">
                            <div class="ad_type-item_header">
                                <img draggable="false" src="../public/img/car.svg">
                                <p>Легковой автомобиль</p>
                            </div>
                            <div class="ad_type-item_desc">
                                <p>Здесь вы можете выложить свой<br> легковой автомобиль</p>
                            </div>
                        </a>
                        <a id="truck" href="new_ad-filters.php" class="ad_type-item">
                            <div class="ad_type-item_header">
                                <img draggable="false" src="../public/img/truck.svg">
                                <p>Грузовой автомобиль</p>
                            </div>
                            <div class="ad_type-item_desc">
                                <p>Здесь вы можете выложить свой<br> грузовой автомобиль или фургон</p>
                            </div>
                        </a>
                        <a id="moto" href="new_ad-filters.php" class="ad_type-item">
                            <div class="ad_type-item_header">
                                <img draggable="false" src="../public/img/moto.svg">
                                <p>Мототехника</p>
                            </div>
                            <div class="ad_type-item_desc">
                                <p>Здесь вы можете выложить свой<br> мотоцикл или другою мототехнику</p>
                            </div>
                        </a>
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
    <script src="../public/js/open_modal.js"></script>
</body>
</html>
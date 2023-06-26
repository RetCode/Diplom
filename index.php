<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="../public/css/nav/nav.css">
    <title>Auto Drive | Welcome</title>
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
            <div class="main-box-left-side">
                <div class="main-text-box">
                    <p class="main-text">Помощь при Покупке и Продаже авто</p>
                </div>
                <div class="additional-text-box">
                    <p class="additional-text">Путь к вашему автомобилю<br> начинается здесь</p>
                </div>
                <div class="button-box">
                    <a href="ads.php" class="start-button">Попробовать</a>
                </div>
            </div>
            <div class="main-box-right-side">
                <img class="startup-img" src="../public/img/startup-image.png">
            </div>
        </main>
        <!-- Main End -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../public/js/open_modal.js"></script>
    <script src="public/js/reglog.js"></script>
</body>
</html>
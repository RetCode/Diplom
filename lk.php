<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/lk.css?1">
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
            <div class="nav-column">
                <button class="login_button">Вход</button>
            </div>
        </div>
    </nav>
    <!-- Nav End -->
    <div class="container">
        <!-- Main Start -->
        <main class="main-box">
            <div class="data-block">
                <div class="data_title-block">
                    <div class="title">
                        <p>Ваши данные</p>
                    </div>
                    <div class="name">
                        name
                    </div>
                    <div class="number">
                        +375 29 123 45 67
                    </div>
                </div>
                <div class="button-block">
                    <button class="user_button">Мои объявления</button>
                    <button class="favorite_button">Избранное</button>
                    <button>Выйти</button>
                </div>
            </div>
            <div class="user_ads-block active">
                <div class="title">
                    <p>Мои объявления</p>
                </div>
                <div class="wrapper">
                    <div class="user_ad-item">
                        <div class="ad_name">
                            <p>BMW X5 E53</p>
                            <button>Редактировать</button>
                        </div>
                        <div class="ad_status">
                            <p class="not_published">НЕ ОПУБЛИКОВАНО</p>
                            <p class="moderation">НА МОДЕРАЦИИ</p>
                            <p class="published active">ОПУБЛИКОВАНО</p>
                        </div>
                        <div class="ad_body">
                            <div class="img-block">
                                <img src="../public/img/advertisemt-img/image 389.png">
                            </div>
                            <div class="ad_desc">
                                <div class="desc_body">
                                    <div class="ad_info">
                                        <div class="title_block">
                                            <p class="title">22 240р. <span>≈ 8000$</span></p>
                                            <p class="publishing_title">Опубликовано минуту назад</p>
                                        </div>
                                    </div>
                                    <div class="ad_info">
                                        <p class="detailed_info">2001 г., автомат, 4.4 бензин, кроссовер</p>
                                        <p class="detailed_info">500 000км</p>
                                        <p class="ad_geo">Гродно</p>
                                    </div>
                                </div>
                                <div class="stat_body">
                                    <div class="title">
                                        <p>Статистика за всё время</p>
                                    </div>
                                    <div class="stat_items">
                                        <div class="item">
                                            <p>0</p>
                                            <p>просмотров<br> объявлений</p>
                                        </div>
                                        <div class="item">
                                            <p>0</p>
                                            <p>просмотров<br> телефона</p>
                                        </div>
                                        <div class="item">
                                            <p>0</p>
                                            <p>пользователей<br> добавили в избранное</p>
                                        </div>
                                        <div class="item">
                                            <p>1</p>
                                            <p>день в<br>продаже</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
            <div class="favotive_ads">
                <div class="title">
                    <p>Избранное</p>
                </div>
                <div class="wrapper">
                    <div class="favorite_ad-item">
                        <div class="img_block">
                            <img src="../public/img/advertisemt-img/image 391.png">
                        </div>
                        <div class="favotive_ad-info_body">
                            <div class="title_city-block">
                                <div class="title">
                                    <a href="">BMW M5CS</a>
                                </div>
                                <div class="city_block">
                                    <div class="city">
                                        <p>Минск</p>
                                    </div>
                                    <div class="publishing_time">
                                        <p>Опубликовано 28 мая</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ad_info">
                                <p class="detailed_info">2001 г., автомат, 4.4 бензин, седан</p>
                                <p class="detailed_info">500 000км</p>
                            </div>
                            <div class="price_block">
                                <p>526 000р. <br><span>≈ 200 000$</span></p>
                            </div>
                            <div class="button_block">
                                <button>
                                    <svg width="23" height="21" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.5 4.90909H19V3.43636C19 2.52498 18.6313 1.65093 17.9749 1.00649C17.3185 0.362044 16.4283 0 15.5 0H9.5C8.57174 0 7.6815 0.362044 7.02513 1.00649C6.36875 1.65093 6 2.52498 6 3.43636V4.90909H1.5C1.10218 4.90909 0.720644 5.06425 0.43934 5.34044C0.158035 5.61663 0 5.99123 0 6.38182C0 6.77241 0.158035 7.147 0.43934 7.42319C0.720644 7.69938 1.10218 7.85455 1.5 7.85455H2V24.5455C2 25.1964 2.26339 25.8208 2.73223 26.2811C3.20107 26.7414 3.83696 27 4.5 27H20.5C21.163 27 21.7989 26.7414 22.2678 26.2811C22.7366 25.8208 23 25.1964 23 24.5455V7.85455H23.5C23.8978 7.85455 24.2794 7.69938 24.5607 7.42319C24.842 7.147 25 6.77241 25 6.38182C25 5.99123 24.842 5.61663 24.5607 5.34044C24.2794 5.06425 23.8978 4.90909 23.5 4.90909ZM9 3.43636C9 3.30617 9.05268 3.1813 9.14645 3.08924C9.24021 2.99718 9.36739 2.94545 9.5 2.94545H15.5C15.6326 2.94545 15.7598 2.99718 15.8536 3.08924C15.9473 3.1813 16 3.30617 16 3.43636V4.90909H9V3.43636ZM20 24.0545H5V7.85455H20V24.0545ZM11 11.7818V19.6364C11 20.027 10.842 20.4015 10.5607 20.6777C10.2794 20.9539 9.89782 21.1091 9.5 21.1091C9.10218 21.1091 8.72064 20.9539 8.43934 20.6777C8.15804 20.4015 8 20.027 8 19.6364V11.7818C8 11.3912 8.15804 11.0166 8.43934 10.7404C8.72064 10.4643 9.10218 10.3091 9.5 10.3091C9.89782 10.3091 10.2794 10.4643 10.5607 10.7404C10.842 11.0166 11 11.3912 11 11.7818ZM17 11.7818V19.6364C17 20.027 16.842 20.4015 16.5607 20.6777C16.2794 20.9539 15.8978 21.1091 15.5 21.1091C15.1022 21.1091 14.7206 20.9539 14.4393 20.6777C14.158 20.4015 14 20.027 14 19.6364V11.7818C14 11.3912 14.158 11.0166 14.4393 10.7404C14.7206 10.4643 15.1022 10.3091 15.5 10.3091C15.8978 10.3091 16.2794 10.4643 16.5607 10.7404C16.842 11.0166 17 11.3912 17 11.7818Z" fill="#696969"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </main>
        <!-- Main End -->
    </div>
    <script src="../public/js/event-click.js"></script>
    <script src="../public/js/open_modal.js"></script>
    <script>
        let openUserAdsButton = document.querySelector('.user_button');
        let openFavoriteAdsButton = document.querySelector('.favorite_button');

        openUserAdsButton.addEventListener('click', () => {
            document.querySelector('.user_ads-block').classList.add('active');
            document.querySelector('.favotive_ads').classList.remove('active');
        })

        openFavoriteAdsButton.addEventListener('click', () => {
            document.querySelector('.favotive_ads').classList.add('active');
            document.querySelector('.user_ads-block').classList.remove('active');
        })
    </script>
</body>
</html>
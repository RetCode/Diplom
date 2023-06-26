<?php
    session_start();

    require_once("db.php");

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
                    <input type="text" placeholder="Поиск по ключевым словам" id="seraching">
                    <div class="about-keywords-button">
                        <img src="../public/img/faq.svg">
                        <div class="about-keywords-window">
                            <p>Например, «техосмотр» или «снята с учёта»</p>
                        </div>
                    </div>
                </div>
                <div class="main-filter-box">
                    <select class="main-filter" id="markF">
                        <option>Марка</option>
                    </select>
                    <select class="main-filter" id="modelF">
                        <option>Модель</option>
                    </select>
                    <select class="main-filter" id="childF">
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
                                        <input class="text-input" type="text" id="mincost">
                                        <p class="filter-parametrs-text">-</p>
                                        <input class="text-input" type="text" id="maxcost">
                                        <select class="currency-selection-button" id="valuta">
                                            <option value="1">BYN</option>
                                            <option value="2">USD</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Год</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <input class="text-input bigger" type="text" placeholder="От" id="minYear">
                                        <p class="filter-parametrs-text">-</p>
                                        <input class="text-input bigger" type="text" placeholder="До" id="maxYear">
                                    </div>
                                </div>  
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Объём</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <input class="text-input bigger" type="text" placeholder="От" id="minAAA">
                                        <p class="filter-parametrs-text">-</p>
                                        <input class="text-input bigger" type="text" placeholder="До" id="maxAAA">
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
                                        <select class="dropdown-menu" id="gazoline-sasfga">
                                        </select>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Тип кузова</p>
                                    </div>
                                    <div class="filter-parametrs">
                                        <select class="dropdown-menu" id="body-sasfga">
                                        </select>
                                    </div>
                                </div>   
                                <div class="filter-item">
                                    <div class="filter-name">
                                        <p class="filter-name-text">Продавец</p>
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
                                    </div>
                                </div>             
                            </div> 
                            <div class="filter-button-box">
                                <button id="filteder">Применить</button>
                            </div>           
                        </div>        
                    </div>
                </div>
                <div class="posting-advertisement-box">

                    <?php 

                        $sql = "SELECT * FROM ads_table";
                        $result = $conn->query($sql);
                        $data = $result->fetch_all(MYSQLI_ASSOC);


                        foreach ($data as $key => $value) 
                        {
                            echo '<div class="item-post">
                            <div class="item">
                                <a class="open-advertisement" href="ad_page.php?id='.$value["id"].'">
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
                                            <a class="open-advertisement" href="ad_page.php"><p>'.$value["carname_id"].'</p></a>
                                        </div>
                                        <div class="advertisement-cost">
                                            <p class="byn-cost">'.$value["cost_by"].'р.</p>
                                            <p class="usd-cost">'.$value["cost_usd"].'$</p>
                                            <!-- Конверт валюты из той, которая была указана при подаче -->
                                        </div>
                                    </div>
                                    <div class="advertisement-detailed-info">
                                        <div class="advertisement-detailed-info-text">
                                            <p>'.$value["car_year"].' г., автомат, 4.4 бензин, кроссовер, '.$value["mileage"].' км.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="favorite-button">
                                    <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 2.089V24.001L6.546 17.741L13.091 24.001V2.089C13.0855 1.53321 12.8609 1.00206 12.466 0.610913C12.0711 0.21977 11.5378 0.000235894 10.982 2.59533e-09L10.905 0.001H10.909H2.183L2.11 2.59533e-09C1.55428 -2.75475e-05 1.021 0.219285 0.626088 0.610269C0.231172 1.00125 0.0065335 1.53231 0.001 2.088L0 2.089Z" fill="#C8C8C8"/>
                                    </svg>
                                </button>
                            </div>';
                        }
                    ?>
                    </div>

                </div>
            </div>
        </main>
        <!-- Main End -->
    </div>
    <script src="../public/js/event-click.js"></script>
    <script src="../public/js/open_modal.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $.ajax({
            url: "filtersDataAjax.php", 
            type: "POST",
            data: {
                method: "getMark",
            },
            success: function(response) {
                document.getElementById("markF").innerHTML += response;
            },
        });

        $.ajax({
            url: "filtersDataAjax.php", 
            type: "POST",
            data: {
                method: "getBody",
            },
            success: function(response) {
                document.getElementById("body-sasfga").innerHTML = response;
            },
        });

        $.ajax({
            url: "filtersDataAjax.php", 
            type: "POST",
            data: {
                method: "getGazoline",
            },
            success: function(response) {
                document.getElementById("gazoline-sasfga").innerHTML = response;
            },
        });

        document.getElementById("markF").addEventListener("change", function() {

            $.ajax({
                url: "filtersDataAjax.php", 
                type: "POST",
                data: {
                    method: "getModel",
                    id: document.getElementById("markF").value
                },
                success: function(response) {
                    document.getElementById("modelF").innerHTML = response;
                },
            });
            

        });

        $("#filteder").on("click", () => {

            let noFirstBlock = false;
            let sql = "SELECT * FROM cars WHERE ";
            let minCost = document.getElementById("mincost").value;
            let maxCost = document.getElementById("maxcost").value;
            let minYear = document.getElementById("minYear").value;
            let maxYear = document.getElementById("maxYear").value;
            let minAAA = document.getElementById("minAAA").value;
            let maxAAA = document.getElementById("maxAAA").value;
            let typeValue = document.getElementById("valuta").value;


            if(minCost != "")
            {
                if(noFirstBlock == true)
                {
                    if(typeValue == 1)
                        sql += ` and cost_by >= ${minCost}`;
                    else
                        sql += ` and cost_usd >= ${minCost}`;

                }
                else
                {
                    if(typeValue == 1)
                        sql += `cost_by >= ${minCost}`;
                    else
                        sql += `cost_usd >= ${minCost}`;

                    noFirstBlock = true;
                }
            }

            if(maxCost != "")
            {
                if(noFirstBlock == true)
                {
                    if(typeValue == 1)
                        sql += ` and cost_by <= ${maxCost}`;
                    else
                        sql += ` and cost_usd <= ${maxCost}`;

                }
                else
                {
                    if(typeValue == 1)
                        sql += `cost_by <= ${maxCost}`;
                    else
                        sql += `cost_usd <= ${maxCost}`;

                    noFirstBlock = true;
                }
            }

            if(minYear != "")
            {
                if(noFirstBlock == true)
                {
                    sql += ` and car_year >= ${minYear}`;
                }
                else
                {
                    sql += `car_year >= ${minYear}`;
                    noFirstBlock = true;
                }
            }

            if(maxYear != "")
            {
                if(noFirstBlock == true)
                {
                    sql += ` and car_year <= ${maxYear}`;
                }
                else
                {
                    sql += `car_year <= ${maxYear}`;
                    noFirstBlock = true;
                }
            }

            if(minAAA != "")
            {
                if(noFirstBlock == true)
                {
                    sql += ` and engine_capacity >= ${minAAA}`;
                }
                else
                {
                    sql += `engine_capacity >= ${minAAA}`;
                    noFirstBlock = true;
                }
            }

            if(maxAAA != "")
            {
                if(noFirstBlock == true)
                {
                    sql += ` and engine_capacity <= ${maxAAA}`;
                }
                else
                {
                    sql += `engine_capacity <= ${maxAAA}`;
                    noFirstBlock = true;
                }
            }

            if(document.getElementById("input1").checked == true)
            {
                if(noFirstBlock == true)
                {
                    sql += ` and transmision_type = 0`;
                }
                else
                {
                    sql += `transmision_type = 0`;
                    noFirstBlock = true;
                }
            }

            if(document.getElementById("input2").checked == true)
            {
                if(noFirstBlock == true)
                {
                    sql += ` and transmision_type = 1`;
                }
                else
                {
                    sql += `transmision_type = 1`;
                    noFirstBlock = true;
                }
            }

            if(noFirstBlock == true)
            {
                sql += ` and fuel_type = ` + document.getElementById("gazoline-sasfga").value;
            }
            else
            {
                sql += `fuel_type = ` + document.getElementById("gazoline-sasfga").value;
                noFirstBlock = true;
            }

            if(noFirstBlock == true)
            {
                sql += ` and body_type = ` + document.getElementById("body-sasfga").value;
            }
            else
            {
                sql += `body_type = ` + document.getElementById("body-sasfga").value;
                noFirstBlock = true;
            }

            if(document.getElementById("input7").checked == true)
            {
                if(noFirstBlock == true)
                {
                    sql += ` and seller = 0`;
                }
                else
                {
                    sql += `seller = 0`;
                    noFirstBlock = true;
                }
            }

            if(document.getElementById("input8").checked == true)
            {
                if(noFirstBlock == true)
                {
                    sql += ` and seller = 1`;
                }
                else
                {
                    sql += `seller = 1`;
                    noFirstBlock = true;
                }
            }

            if(document.getElementById("input9").checked == true)
            {
                if(noFirstBlock == true)
                {
                    sql += ` and transfer = 1`;
                }
                else
                {
                    sql += `transfer = 1`;
                    noFirstBlock = true;
                }
            }

            if(document.getElementById("input10").checked == true)
            {
                if(noFirstBlock == true)
                {
                    sql += ` and vin_confirm = 1`;
                }
                else
                {
                    sql += `vin_confirm = 1`;
                    noFirstBlock = true;
                }
            }

            if(document.getElementById("seraching").value != "")
            {
                if(noFirstBlock == true)
                {
                    sql += ` and desc_text LIKE '%${document.getElementById("seraching").value}%'`;
                }
                else
                {
                    sql += `desc_text LIKE '%${document.getElementById("seraching").value}%'`;
                    noFirstBlock = true;
                }
            }

            console.log(sql);

        });

    </script>
</body>
</html>
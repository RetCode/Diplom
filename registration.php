<?php

    require_once("db.php");

    $name = $_POST["name"];
    $password = $_POST["password"];
    
    // Проверка существования аккаунта с таким же именем пользователя
    $checkQuery = "SELECT id FROM user WHERE name = '$name'";
    $checkResult = $conn->query($checkQuery);
    if ($checkResult->num_rows > 0) {
        echo false;
    } else {
        // Хэширование пароля (можно использовать другие методы шифрования)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Вставка данных в таблицу пользователей
        $insertQuery = "INSERT INTO user (name, pass, phone) VALUES ('$name', '$hashed_password', 'none')";
        if ($conn->query($insertQuery) === TRUE) {
            echo true;
        } else {
            echo "Ошибка регистрации: " . $conn->error;
        }
    }
?>
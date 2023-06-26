<?php

    require_once("db.php");

    $name = $_POST["name"];
    $password = $_POST["password"];

    // Поиск пользователя в базе данных
    $sql = "SELECT * FROM user WHERE name = '$name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["pass"];

        // Проверка пароля
        if (password_verify($password, $hashed_password)) {
            // Успешная аутентификация
            session_start();

            $_SESSION["auth"] = true;
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["phone"] = $row["phone"];

            echo true;
        } else {
            echo false;
        }
    } else {
        echo false;
    }
?>
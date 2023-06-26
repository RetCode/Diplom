<?php

    require_once("db.php");

    if($_POST["method"] == "getMark")
    {
        $sql = "SELECT id, mark FROM mark_filter";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод данных
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["id"].'">'.$row["mark"].'</option>';
            }
        } else {
            echo "";
        }
    }

    if($_POST["method"] == "getBody")
    {
        $sql = "SELECT * FROM body_filter";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод данных
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["id"].'">'.$row["body"].'</option>';
            }
        } else {
            echo "";
        }
    }

    if($_POST["method"] == "getGazoline")
    {
        $sql = "SELECT * FROM gazoline_filter";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод данных
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["id"].'">'.$row["gazoline"].'</option>';
            }
        } else {
            echo "";
        }
    }

    if($_POST["method"] == "getModel")
    {
        $mark_id = $_POST["id"];
        $sql = "SELECT * FROM model_filter WHERE mark_id = $mark_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Вывод данных
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["id"].'">'.$row["model"].'</option>';
            }
        } else {
            echo "";
        }
    }
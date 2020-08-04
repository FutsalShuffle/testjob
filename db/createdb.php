<?php
include_once('config.php');
try {
    /**
     * Создание БД и таблиц, необходимых для задания
     */
    $conn = new PDO("mysql:host=$servername", $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE $dbname";
    $conn->exec($sql);
    echo "Создали базу данных" . $dbname . "<br>";
     } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
     }
    $conn = null; // отключаемся от бд

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Создаем таблицы Филиалов и Работников
    $sql = "CREATE TABLE Places (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `address` VARCHAR(30) NOT NULL,
        placename VARCHAR(30) NOT NULL,
        photolink VARCHAR(30) NOT NULL)";
    if ($conn->query($sql) === TRUE) {
        echo "Таблица создана";
    } else {
        echo "Ошибка: " . $conn->error;
    }
    $sql = "CREATE TABLE Workers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        workername VARCHAR(30) NOT NULL,
        position VARCHAR(30) NOT NULL,
        place_id INT(6) UNSIGNED,
        FOREIGN KEY (place_id) REFERENCES Places (id))";

    if ($conn->query($sql) === TRUE) {
        echo "Таблица создана";
    } else {
        echo "Ошибка: " . $conn->error;
    }
    $conn = null;
?>
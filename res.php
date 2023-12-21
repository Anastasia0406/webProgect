<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];


// Вставка данных в базу данных
$sql = "INSERT INTO reservations (name, email, date) VALUES ('$name', '$email', '$date')";

if ($conn->query($sql) === TRUE) {
    header("Location: contact.html");
    exit();;
}

$conn->close();
?>
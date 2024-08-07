<?php
require_once 'functions.php';
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Перевірка довжини імені та паролю
    if (!checkStringLength($username, 3, 15)) {
        echo "Ім'я повинно містити від 3 до 15 символів." . "<br>";
        exit;
    }
    if (!checkStringLength($password, 6, 20) || !checkStringLength($confirm_password, 6, 20)) {
        echo "Пароль та його підтвердження повинні містити від 6 до 20 символів." . "<br>";
        exit;
    }
    // Перевірка правильності введеного email
    if (!validateEmail($email)) {
        echo "Email введено неправильно." . "<br>";
        exit;
    }

    // Перевірка, що пароль співпадає з підтвердженням пароля
    if ($password !== $confirm_password) {
        echo "Пароль та його підтвердження не співпадають." . "<br>";
        exit;

    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $conn = connectToDatabase();

    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $conn->prepare($sql);

    // Прив'язка параметрів до реальних значень
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $hashed_password);

    if ($stmt->execute()) {
        echo "Вітаємо, $username! Ваша реєстрація успішно завершена.";
        header("Location: login.php");
    } else {
        echo "Помилка при реєстрації: " . $stmt->errorInfo()[2];
    }

    $conn = null; // Закриття з'єднання

}
$template = basename($_SERVER ["PHP_SELF"]);
require_once 'frontend/leyout/authorization.php';


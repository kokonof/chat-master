<?php

session_start();
require_once 'functions.php';
require_once 'database.php'; // Підключення до бази даних

// Перевірка, чи користувач вже увійшов у систему
if (isset($_SESSION['email'])) {
    echo "Ви увійшли до системи як: " . $_SESSION['email'];
    echo "<br>";
    echo "<a href='delete_account.php'>Видалити профіль</a>";
    echo "<br>";
    echo "<a href='logout.php'>Вийти з системи</a>";
    exit;
}

// Обробка логіну
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Перевірка даних користувача
    if (!validateEmail($email) || !checkStringLength($password, 6, 20)) {
        echo "Email або пароль невірні.";
        exit;
    }

    // Підключення до бази даних
    $conn = connectToDatabase();

    // Перевірка існування користувача в базі даних та правильності пароля
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Успішний вхід - зберігаємо дані в сесію та перенаправляємо на головну сторінку
        $_SESSION['email'] = $email;
        header("Location: chat.php");
        exit;
    } else {
        echo "Email або пароль невірні.";
    }

    // Закриття з'єднання
    $conn = null;
}
$template = basename($_SERVER ["PHP_SELF"]);
require_once 'views/leyout/authorization.php';

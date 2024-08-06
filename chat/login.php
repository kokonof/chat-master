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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід у систему</title>
    <!-- Підключення Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Підключення Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://oir.mobi/uploads/posts/2021-03/1616979248_28-p-sinii-neonovii-fon-29.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Чорний фон з прозорістю 40% */
            z-index: -1;
        }

        .login-form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2); /* Білий фон з прозорістю 20% */
        }
    </style>
</head>
<body>
<div class="overlay"></div>
<div class="container mt-5">
    <h2 class="text-center mb-4 text-white">Вхід у систему</h2>
    <form method="POST" action="" class="login-form border p-4 shadow-sm">
        <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Введіть email" required>
        </div>
        <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> Пароль:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Введіть пароль" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Увійти</button>
    </form>
    <p class="text-center mt-3 text-white">Не маєте акаунту? <a href="register.php" class="text-white"><strong>Зареєструйтесь</strong></a></p>
</div>

<!-- Підключення Bootstrap JS та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

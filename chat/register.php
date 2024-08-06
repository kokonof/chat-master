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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
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

        .registration-form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.4); /* Білий фон з прозорістю 20% */
        }
    </style>
</head>
<body>
<div class="overlay"></div>
<div class="container mt-5">
    <h2 class="text-center mb-4 text-white">Форма реєстрації</h2>
    <form action="register.php" method="post" class="registration-form border p-4 shadow-sm">
        <div class="form-group">
            <label for="username"><i class="fas fa-user"></i> Ім'я користувача:</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Введіть ім'я користувача" required>
        </div>
        <div class="form-group">
            <label for="email"><i class="fas fa-envelope"></i> Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Введіть email" required>
        </div>
        <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i> Пароль:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Введіть пароль" required>
        </div>
        <div class="form-group">
            <label for="confirm_password"><i class="fas fa-lock"></i> Підтвердження паролю:</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Підтвердіть пароль" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i> Зареєструватися</button>
    </form>
</div>

<!-- Підключення Bootstrap JS та jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

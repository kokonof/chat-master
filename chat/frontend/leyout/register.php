<div class="authorization">
    <div class="overlay"></div>
    <div class="container pt-5">
        <h2 class="text-center mb-4 text-white">Форма реєстрації</h2>
        <form action="register.php" method="post" class="registration-form border p-4 shadow-sm">
            <div class="form-group">
                <label for="username"><i class="fas fa-user"></i> Ім'я користувача:</label>
                <input type="text" id="username" name="username" class="form-control"
                       placeholder="Введіть ім'я користувача" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Введіть email" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Пароль:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Введіть пароль"
                       required>
            </div>
            <div class="form-group">
                <label for="confirm_password"><i class="fas fa-lock"></i> Підтвердження паролю:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                       placeholder="Підтвердіть пароль" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-user-plus"></i> Зареєструватися
            </button>
        </form>
    </div>
</div>

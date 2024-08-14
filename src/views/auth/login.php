
    <div class="overlay"></div>
    <div class="container pt-5">
        <h2 class="text-center mb-4 text-white">Вхід у систему</h2>
        <form method="POST" action="" class="login-form border p-4 shadow-sm">
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Введіть email" required>
            </div>
            <div class="form-group valera">
                <label for="password"><i class="fas fa-lock"></i> Пароль:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Введіть пароль" required><br>

                <input type="checkbox" name="remember" id="login-password-info">
                <label for="login-password-info">Запамятайте мене</label>
                <a href="#">Я забув пароль</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Увійти</button>
        </form>
        <p class="text-center mt-3 text-white">Не маєте акаунту? <a href="register.php" class="text-white"><strong>Зареєструйтесь</strong></a></p>
    </div>

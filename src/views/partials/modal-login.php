
<section class="modal modal-login">
    <h2>Власний кабінет</h2>
    <p class="modal-description">Введіть свій логін та пароль</p>
    <form class="login-form" action="" method="post">
        <p>
            <label class="visually-hidden" for="user-login">Логін</label>
            <input  id="user-login" type="text" name="login" placeholder="Введіть email"
        </p>
        <p>
            <label class="visually-hidden" for="user-password">Пароль</label>
            <input id="user-password" type="password" name="password"
                   placeholder="Введіть пароль">
        </p>
        <p class="login-help">
            <label class="login-checkbox">
                <input type="checkbox" name="remember" class="visually-hidden">
                <span class="checkbox-indicator"></span>Запамятайте мене
            </label>
            <a class="restore" href="#">Я забув пароль</a>
        </p>
        <button class="button login-send" type="submit">Увійти</button>
    </form>
    <button class="modal-close" type="button"></button>
</section>

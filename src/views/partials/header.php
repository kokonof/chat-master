<header class="main-header">
    <nav class="navigation-fon">
        <div class="nav-links">

            <?php
             if ($_SERVER['QUERY_STRING'] !== '') {
                 echo '<a  class=""><img  class="" src="'. PUBLIC_BASE_URL . 'images/logo/logo_2.jpg" 
                    alt="Логотип мого сайту" height="44" width="44px"></a>';
                }
             ?>

            <a class="navigation" href="<?php echo BASE_URL; ?>">Головна</a>
            <a class="navigation" href="<?php echo BASE_URL; ?>chat">Чат</a>
            <a class="navigation" href="<?php echo BASE_URL; ?>news">Новини</a>
            <a class="navigation" href="<?php echo BASE_URL; ?>shop">Магазин</a>
            <a class="navigation" href="<?php echo BASE_URL; ?>contact">Контакти</a>
        </div>
        <div class="nav-links right-menu">
            <a class="navigation-login navigation " href="<?php echo BASE_URL; ?>news">Вхід_2</a>
            <a class="navigation-login navigation " href="<?php echo BASE_URL; ?>auth/login">Вхід</a>
            <a class="navigation navigation-login" href="<?php echo BASE_URL; ?>auth/register">Реєстрація</a>
        </div>
    </nav>
</header>

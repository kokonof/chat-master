<content>
    <a class="logos"><img  class="logo" src="<?php echo PUBLIC_BASE_URL?>images/logo/logo_2.jpg" alt="Логотип мого сайту"></a>
<!--    <h1>Заголовок !!</h1>-->
    <section class="features">
        <ul class="features-list">
            <li class="features-item">
                <h3>Швидко</h3>
                <p>Ми робимо свою роботу швидко (((але не факт що якісно)))</p>
            </li>
            <li class="features-item">
                <h3>Круто</h3>
                <p>Ми підстрижемо вас як зірку плейбою</p>
            </li>
            <li class="features-item">
                <h3>Дорого </h3>
                <p>Чекаю ваші шекелі</p>
            </li>
        </ul>
    </section>
    <div class="index-columns ">
        <section class="news">
            <h2> Новини про нашу багадельню</h2>
            <ul class=" news-list">
                <li class="news-item">
                    <p class="news-text">Я не з такої сім'ї як всі я з Богатої</p>
                    <time class="news-date" datetime="2024-08-05">5 серпня</time>
                </li>
                <li class="news-item">
                    <p class="news-text">Я не з такої сім'ї як всі я з Богатої</p>
                    <time class="news-date" datetime="2024-08-07">7 серпня</time>
                </li>
            </ul>
            <button class="bumbutton news-button" href="../news.php">Всі новини</button>
        </section>
        <section class="gallery">
            <h2  >Фотогалерея</h2>
            <div class="gallery-content">
            <figure>
                <a href="#">
                    <img  src="<?php echo PUBLIC_BASE_URL ?>images/photogalery/gallery_1.jpg" width="286" height="164" alt="Гори"></a>
            </figure>
            <button class="bumbutton gallery-button gallery-button-back" type="button">Попередня</button>
            <button class="bumbutton gallery-button gallery-button-next" type="button">Наступна</button>
            </div>
        </section>
    </div>
    <div class="index-columns ">
        <section class="contacts">
            <h2>Контактна інформація</h2>
            <p>Перукарня у Ярка<br>
                Адреса, Гуртах 4 к 11 блок вулиця Тарнавського 7<br>
                Телефон +380660948329<br>
            </p>
            <p>
                Час роботи<br>
                Пн-пт: з 10:00 до 22:00<br>
                Сб-нд: з 10:00 до 19:00
            </p>
            <button class="bumbutton" href="#">Як нас знайти</button>
            <button class="bumbutton" href="../contact.php">Наші контакти</button>
        </section>
        <section class="appointment">
            <h2>Запис</h2>
            <p class="appointment-info">Вкажіть бажану дату і час <br>і ми звяжемося з вами для затвердження </p>
            <form class="appointment-form" action="///" method="post">
                <p class="appointment-item">
                    <label for="appointment-date">Дата</label>
                    <input id="appointment-date" tupe="date" name="date" value="" placeholder="2024-08-13">
                </p>
                <p class="appointment-item">
                    <label for="appointment-time">Час</label>
                    <input id="appointment-time" tupe="time" name="time" value="" placeholder="10:00">
                </p>
                <p class="appointment-item">
                    <label for="appointment-name">Ваше імя</label>
                    <input id="appointment-name" tupe="text" name="name" value="" placeholder="борода">
                </p>
                <p class="appointment-item">
                    <label for="appointment-phone">Телефон</label>
                    <input id="appointment-phone" tupe="tel" name="tel" value="" placeholder="+380845734665">
                </p>
                <button class="bumbutton-appointment" type="submit">Відправити</button>
            </form>
        </section>
    </div>
</content>


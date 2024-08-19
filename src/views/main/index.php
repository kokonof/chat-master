<content>
    <h1>Заголовок !!</h1>
    <section class="features">
        <h2>Переваги</h2>
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
            <a class="a-decoration" href="../news.php">Всі новини</a>
        </section>
        <section class="gallery-content">
            <h2>Фотогалерея</h2>
            <figure>
                <a class="a-decoration" href="#">
                    <img src="<?php echo PUBLIC_BASE_URL ?>images/photogalery/gallery_1.jpg" width="384" height="232"
                         alt="Гори">
                </a>
            </figure>
            <button class="bumbutton" type="button">Попередня</button>
            <button class="bumbutton" type="button">Наступна</button>
        </section>
    </div>
    <div class="index-columns">

        <section class="contacts">
            <h2>Контактна інформація</h2>
            <p>Перукарня у Ярка<br>
                Адреса, Гуртах 4 кімната 11 блок вулиця Тарнавського 7<br>
                Телефон +380660948329<br>
            </p>
            <p>
                Час роботи<br>
                Пн-пт: з 10:00 до 22:00<br>
                Сб-нд: з 10:00 до 19:00
            </p>
            <a class="a-decoration" href="#">Як нас знайти</a><br>
            <a class="a-decoration" href="../contact.php">Наші контакти</a>
        </section>
        <section class="appointment">
            <h2>Запис</h2>
            <p>Вкажіть бажану дату і час і ми звяжемося з вами для затвердження </p>
            <form action="///" method="post">
                <p class="appointment-item">
                    <label for="appointment-date">Дата</label>
                    <input id="appointment-date" tupe="date" name="date" value="2024-08-13">
                </p>
                <p class="appointment-item">
                    <label for="appointment-time">Час</label>
                    <input id="appointment-time" tupe="time" name="time" value="10:00">
                </p>
                <p class="appointment-item">
                    <label for="appointment-name">Ваше імя</label>
                    <input id="appointment-name" tupe="text" name="name" value="" placeholder="борода">
                </p>
                <p class="appointment-item">
                    <label for="appointment-phone">Телефон</label>
                    <input id="appointment-phone" tupe="tel" name="tel" value="" placeholder="+380845734665">
                </p>
                <button type="submit">Відправити</button>
            </form>
        </section>
    </div>
</content>

<section class="map">
    <h2> Як нас знайти</h2>
    <button type="button">закрити</button>
</section>

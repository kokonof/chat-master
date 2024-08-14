<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://<?php echo $_SERVER["SERVER_NAME"]; ?>/chat/public/css/style.css">
</head>
    <body>
    <header>
        <nav class="navigation-fon">
            <div class="nav-links">
                <a class="navigation" href="index.php">Головна</a>
                <a class="navigation" href="news.php">Новини</a>
                <a class="navigation" href="shop.php">Магазин</a>
                <a class="navigation" href="contact.php">Контакти</a>
                <a class="navigation" href="/chat/src/chat.php">Чат</a>
            </div>
            <a class="navigation login" href="/chat/src/login.php">Вхід</a>
        </nav>
        <a>
            <img src="/chat/public/images/logo/logo_1.png" width="224" style="padding-top: 20px"
                 alt="Логотип мого сайту">
        </a>
    </header>
        <main>
       <h1>Заголовок !!</h1>
       <section class="advantages">
           <h2>Переваги</h2>
           <ul>
               <li>
                   <h3>Швидко</h3>
                   <p>Ми робимо свою роботу швидко (((але не факт що якісно)))</p>
               </li>
               <li>
                   <h3>Круто</h3>
                   <p>Ми підстрижемо вас як зірку плейбою</p>
               </li>
               <li>
                   <h3>Дорого </h3>
                   <p>Чекаю ваші шекелі</p>
               </li>
           </ul>
       </section>
       <section class="news">
           <h2> Новини про нашу багадельню</h2>
           <ul>
               <li>
                   <p class="news-text">Я не з такої сім'ї як всі я з Богатої</p>
                   <time class="news-date" datetime="2024-08-05">5 серпня</time>
               </li>
               <li>
                   <p class="news-text">Я не з такої сім'ї як всі я з Богатої</p>
                   <time class="news-date" datetime="2024-08-07">7 серпня</time>
               </li>
           </ul>
           <a href="news.php">Всі новини</a>
       </section>
       <section class="gallery">
           <h2>Фотогалерея</h2>
           <figure>
               <a href="#">
                <img src="/chat/public/images/photogalery/gallery_1.jpg" width= "384" height="232" alt="Гори">
               </a>
           </figure>
               <button class="bumbutton" type="button">Попередня</button>
               <button class="bumbutton" type="button">Наступна</button>
       </section>
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
           <a href="#">Як нас знайти</a><br>
           <a href="contact.php">Наші контакти</a>
       </section>
            <section class="notation">
                <h2>Запис</h2>
                <p>Вкажіть бажану дату і час і ми звяжемося з вами для затвердження </p>
                <form action="///" method="post">
                    <p>
                        <label for="appointment-date">Дата</label>
                        <input id="appointment-date" tupe="date" name="date" value="2024-08-13">
                    </p>
                    <p>
                        <label for="appointment-time">Час</label>
                        <input id="appointment-time" tupe="time" name="time" value="10:00">
                    </p>
                    <p>
                        <label for="appointment-name">Ваше імя</label>
                        <input id="appointment-name" tupe="text" name="name" value="" placeholder="борода">
                    </p>
                    <p>
                        <label for="appointment-phone">Телефон</label>
                        <input id="appointment-phone" tupe="tel" name="tel" value="" placeholder="+380845734665">
                     </p>
                    <button type="submit">Відправити</button>
                </form>
            </section>
        </main>
       <footer class="footer">
           <p>Перукарня у Ярка<br>
               Адреса, Гуртах 4 кімната 11 блок вулиця Тарнавського 7<br>
               <a href="#">Як нас знайти</a><br>
               Телефон +380660948329</p>
           <div>
               <p>соц мережі</p>
               <ul>
                   <li><a href="https://www.instagram.com/_grisha.volkov_?igsh=cmc2a2l4OXV5N3Ez"><i class="fa-brands fa-instagram fa-lg" style="color: #e88282;"></i></li>
                   <li><a href="https://t.me/gishavolkov"><i class="fa-brands fa-telegram" style="color: #74C0FC;"></i></a></li>
                   <li><a href="https://viber.click/+380660948329"><i class="fa-brands fa-viber" style="color: #B197FC;"></i></a></li>
               </ul>
           </div>
           <p>
               Розроблено:
               <a href="https://t.me/gishavolkov"><i class="fa-brands fa-telegram" style="color: #74C0FC;">Grisha</i></a></li>
           </p>
       </footer>
    <section class="map">
        <h2> Як нас знайти</h2>
        <button type="button">закрити</button>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
    </script>
    </body>
</html>

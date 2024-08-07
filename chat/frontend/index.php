<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна сторінка</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
    <header>
            <nav>
                <a>
                <img src="../photo/Без%20названия.png" width="224" height="224"
                     alt="Логотип мого сайту">
                </a>
                <ul>
                    <li><a href="index.php">Головна</a></li>
                    <li><a href="news.php">Новини</a></li>
                    <li><a href="shop.php">Магазин</a></li>
                    <li><a href="contact.php">Контакти</a></li>
                    <li><a href="/chat/chat.php">Чат</a></li>
                </ul>
                <ul>
                    <li>
                        <button type="button"><a href="/chat/login.php">Вхід</a></button>
                    </li>
                </ul>
            </nav>
    </header>
        <main>
ТЕСТ
       <h1>Заголовок</h1>

       <section>
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
       <section>
           <h2> Новини про нашу багадельню</h2>
           <ul>
               <li>
                   <p>Я не з такої сім'ї як всі я з Богатої</p>
                   <time datetime="2024-08-05">5 серпня</time>
               </li>
               <li>
                   <p>Я не з такої сім'ї як всі я з Богатої</p>
                   <time datetime="2024-08-07">7 серпня</time>
               </li>
           </ul>
           <a href="news.php">Всі новини</a>
       </section>
       <section>
           <h2>Фотогалерея</h2>
           <figure>
               <a href="#">
                <img src="/chat/photo/wallpapersden.com_k-mountain-snow-landscape_3840x2323.jpg" width= "384" height="232"
                     alt="Гори">
               </a>
           </figure>
               <button type="button">назад</button>
               <button type="button">вперед</button>
       </section>
       <section>
           <h2>Контактна інформація</h2>
           <p>Перукарня у Ярка<br>
               Адреса, Гуртах 4 кімната 11 блок вулиця Тарнавського 7<br>
               Телефон +380660948329<br>
           </p>
           <p>
               Час роботи<br>
               пн-пт: з 10:00 до 22:00<br>
               сб-нд: з 10:00 до 19:00
           </p>
           <a href="#">як нас знайти</a><br>
           <a href="contact.php">наші контакти</a>
       </section>
            <section>
                <h2>Запис</h2>
                <p>Вкажіть бажану дату і час і ми звяжемося з вами для затвердження </p>
<!--                Форму потім зроблю-->
            </section>
        </main>
       <footer>
           <p>Перукарня у Ярка<br>
               Адреса, Гуртах 4 кімната 11 блок вулиця Тарнавського 7<br>
               <a href="#">як нас знайти</a><br>
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
               Розробленно:
               <a href="https://t.me/gishavolkov"><i class="fa-brands fa-telegram" style="color: #74C0FC;">Grisha</i></a></li>
           </p>
       </footer>

    <section>
        <h2>Власний кабінет</h2>
        <p>Введіть логін і пароль</p>
<!--        Форма-->
        <button type="button">закрити</button>
    </section>

    <section>
        <h2> як нас знайти</h2>
        <button type="button">закрити</button>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
    </script>
    </body>
</html>

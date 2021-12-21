<?php

require "includes/db.php";

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музей ретрокомпьютеров RetroVibe</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <link rel="stylesheet" href="CSS/slick.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/jpg" href="img/logo.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora&family=Spectral+SC&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <header id="main" class="header">
            <div class="header_container container">
                <div class="header_content">
                    <a href="index.php" class="header_logo" alt=" RetroVibe ">
                        <img src="img/RetroVibe.png ">
                    </a>
                    <nav class="menu">
                        <ul>
                            <li>
                                <a href="#main">Главная</a>
                            </li>
                            <li>
                                <a href="#about">О музее</a>
                            </li>
                            <li>
                                <a href="#gallery">Галерея</a>
                            </li>
                            <li>
                                <a href="#record">Запись</a>
                            </li>
                            <li>
                                <a href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main id="main" class="main">
            <div class="main_block main_block">
                <div class="main_block_container container">
                    <div class="main_block_body">
                        <h1 class="main_block_tittle">Музей ретрокомпьютеров</h1>
                        <div class="main_block_btns">
                            <a href="#record" class="main_block_btn">Записаться</a>
                        </div>
                    </div>

                    <div class="main_block_img _ibg">
                        <img src="../img/background-1.jpg" alt="Comp">
                    </div>
                </div>
            </div>
            <section id="about" class="main_about about">
                <div class="about_container container">
                    <div class="adout_header header_block">
                        <h1 class="header_block_tittle">О музее</h1>
                    </div>
                </div>
            </section>
            <section class="main_about_text main_about_text">
                <div class="about_body_container container">
                    <div class="about_block_body">
                        <p class="about_block_text1">Сотни раритетных экспонатов. Эволюция компьютерной техники. Тематические экспозиции и экскурсии. Конкурсы и интерактивы. Всё это RetroVibe. История оживает здесь!</p>

                        <p class="about_block_text2"> <img class="about_img1 _ibg" src="../img/cassette-2.png" alt="Cassette">Экспозиция музея насчитывает более сотни уникальных экспонатов. Механические счётные машинки, калькуляторы, советские и импортные персональные компьютеры,
                            ноутбуки, игровые приставки, видеотехника, аудиотехника, средства хранения данных и даже советский мейнфрейм!</p>
                        <p class="about_block_text3">Приходите и всё увидите. Посещение музея бесплатное. Предварительная регистрация обязательна.<img class="about_img2 _ibg" src="../img/diskette-2.png"></p>
                    </div>
                    <div class="about_block_img _ibg">
                        <img src="../img/background-2.jpg" alt="background">
                    </div>
                </div>
            </section>
            <section id="gallery" class="main_gallery gallery">
                <div class="gallery_container container">
                    <div class="gallery_header header_block">
                        <h1 class="header_block_tiitle">Галерея</h1>
                    </div>
                </div>
                <div class="slider">
                    <div class="slider_item">
                        <img src="/img/device1.jpg" alt="">
                    </div>
                    <div class="slider_item">
                        <img src="/img/device2.jpg" alt="">
                    </div>
                    <div class="slider_item">
                        <img src="/img/device3.jpg" alt="">
                    </div>
                    <div class="slider_item">
                        <img src="/img/device4.jpg" alt="">
                    </div>
                    <div class="slider_item">
                        <img src="/img/device5.jpg" alt="">
                    </div>
                    <div class="slider_item">
                        <img src="/img/device6.jpg" alt="">
                    </div>
                </div>
    </div>
    </section>
    <section id="record" class="main_record record">
        <div class="about_container container">
            <div class="record_header header_block">
                <h1 class="header_block_tittle">Запись на экскурсию</h1>
            </div>
        </div>
    </section>
    <section class="form">
        <div class="form_container container">
            <div class="form_inner">
                <div class="form_content">
                    <div class="form_box">
                        <form action="index.php" method="POST">
                            <div class="form_box-container">
                                <label>
                                    E-mail
                                    <input type="email" placeholder="*Ваш e-mail" name="email" value="<?=$input_login?>"><?=$error_email?>
                                    Контактный телефон
                                    <input type="phone" placeholder="*Ваш телефон" name="phone" value="<?=$input_phone?>"><?=$error_phone?>
                                    ФИО
                                    <input type="text" placeholder="*Ваше ФИО" name="fio" value="<?=$input_phone?>"><?=$error_fio?>
                                    Кол-во человек
                                    <select name="kol">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <p>Запись групп более 5 человек осуществляется по телефону.</p>

                                    <button type="submit" name="confirm">Подтвердить</button>
                                </label>
                            </div>
                            <img src="../img/sonic.png" alt="sonic">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="main_contacts contacts">
        <div class="contacts_container container">
            <div class="contacts_header contacts_block">
                <h1 class="header_block_tittle">Контакты</h1>
            </div>
        </div>
    </section>
    <section class="map_contacts">
        <div class="map_contacts_content">
            <div class="map_contacts_container container">
                <div class="map_contacts_body">
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.178636475337!2d30.33790131575289!3d53.910801480101156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d04e1fc4fd5a33%3A0x59b1a38e2083e2be!2z0YPQuy4g0J_QtdGA0LLQvtC80LDQudGB0LrQsNGPIDQ0LCDQnNC-0LPQuNC70ZHQsg!5e0!3m2!1sru!2sby!4v1639482654501!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    <div class="map_contacts_info">
                        <div class="map_contacts_tittle1">Адресс музея</div>
                        <a href="#">г.Могилев,Первомайская улица, 44</a>
                        <div class="map_contacts_tittle2">Почтовый ящик</div>
                        <a href="#">RetroVibe@yandex.ru</a>
                        <div class="map_contacts_tittle3">Контактный телефон</div>
                        <a href="tel:37447020896">+375447020896</a>
                    </div>
                </div>
                <div class="map_img _ibg"><img src="../img/background-4.jpg" alt="background"></div>
            </div>
        </div>
    </section>
    </main>
    <footer class="footer">
        <div class="footer_block footer_block">
            <div class="footer_block_container container">
                <div class="footer_block_body">
                    <h1 class="footer_block_tittle">Будем рады видеть вас в нашем музее!</h1>
                    <div class="logo">
                        <a href="#" class="header_logo" alt=" RetroVibe ">
                            <img src="img/RetroVibe.png ">
                        </a>
                    </div>
                </div>

                <div class="footer_block_img _ibg">
                    <img src="../img/background-5.jpg" alt="Comp">
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="JS/slick.min.js"></script>
    <script src="JS/script.js "></script>
</body>



</html>
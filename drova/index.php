<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css?<?= rand() ?>">
    <link rel="stylesheet" href="assets/css/style.css?<?= rand() ?>">

    <meta name="description"
          content="У нас Вы можете купить дрова берёзовые, сухие, колотые валом или в мешках, недорого, с доставкой. Цена от 1499 рублей / куб. СПб, во Всеволожском и Кировском районах."/>
    <meta name="keywords"
          content="купить дрова, дрова с доставкой, дрова колотые, дрова березовые, цена дров, дрова во Всеволожске, дрова с доставкой, доставка дров в СПб"/>

    <link
            rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script
            src="//code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="//unpkg.com/imask"></script>

    <title>Купите дрова колотые берёзовые с доставкой в СПб, во Всеволожске и Кировском районах по цене от 1499
        рублей</title>

</head>
<body>

<!--<div class="wp100">100</div>
<div class="wp200">200</div>
<div class="wp300">300</div>
<div class="wp400">400 - view 75%</div>
<div class="wp500">500</div>
<div class="wp600">600</div>
<div class="wp700">700</div>
<div class="wp800">800 - view 100%, height 285</div>-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        var z = null;m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(90051915, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/90051915" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<header class="hero">
    <nav>
        <div class="logo">
            <img src="assets/images/logo.png" alt="">
        </div>
        <div class="info">
            <div class="point">
                <div class="point__item"><i class="icon-map"></i>Санкт-Петербург</div>
                <div class="point__item"><i class="icon-map"></i>Всеволожск</div>
                <div class="point__item"><i class="icon-map"></i>Кировск</div>
            </div>
            <div class="contacts">
                <div class="schedule">
                    <i class="icon-time"></i>Ежедневно с 9:00 до 22:00<br>
                    <small>график работы</small>
                </div>
                <div class="phone">
                    <i class="icon-phone-fill"></i><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a><br>
                    <small>телефон</small>
                </div>
            </div>
        </div>
    </nav>
    <div class="hero__suggest">
        <h1>Дрова колотые с доставкой по СПб, Всеволожскому и Кировскому району.</h1>
        <p class="allocated">Цена от <b>1599</b><sup><s>1800</s></sup> рублей / куб</p>
        <button class="button" data-popup=".popup--order"><i class="icon-leaf"></i>Рассчитайте стоимость</button>
    </div>
</header>
<main>
    <section class="quality bg-black">
        <div class="quality__selling">
            <h2>Доставка дров высшего сорта</h2>
        </div>
        <div class="quality__benefit">
            <span>Без гнили и без трухи</span>
            <p>Доставляем дрова только 100% качества</p>
            <div class="quality__image">
                <img class="bi" src="assets/images/no-dust-no-rot.png" alt="Без гнили и без трухи">
            </div>
        </div>
    </section>
    <section class="stock">
        <h2>В продаже</h2>
        <div class="stock__wrapper">
            <div class="stock__img">
                <img class="bi" src="assets/images/birch-firewood.png" alt="Дрова берёзовые">
            </div>
            <div class="stock__offer">
                <h3>Дрова берёзовые колотые</h3>
                <p>Быстро воспламеняется, очень хорошо горит, выделяя большое количество тепла и имеет приятный лечебный
                    аромат.</p>
                <p class="allocated">Валом <span><b>1599</b></span><sup><s>1800</s></sup> рублей / куб</p>
                <button class="button" data-popup=".popup--order"><i class="icon-leaf-birch"></i>Рассчитайте стоимость</button>
                <p class="notion-p">Уточните у оператора точную стоимость доставки до Ваc. Цены на дрова и доставку могут отличаться от региона.</p>
                <div class="phone_order">
                    <i class="icon-phone-fill"></i><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a><br>
                </div>
            </div>
        </div>
        <div class="stock__wrapper">
            <div class="stock__img">
                <img class="bi" src="assets/images/alder-firewood.png" alt="Дрова ольхи">
            </div>
            <div class="stock__offer">
                <h3>Дрова ольховые колотые</h3>
                <p>При горении выделяет мало сажи и способствует очистке дымохода, такие дрова хранятся намного дольше
                    чем осина и береза.</p>
                <p class="allocated">Валом <span><b>1699</b></span><sup><s>2100</s></sup> рублей / куб</p>
                <button class="button" data-popup=".popup--order"><i class="icon-leaf-alder"></i>Рассчитайте стоимость</button>
                <p class="notion-p">Уточните у оператора точную стоимость доставки до Ваc. Цены на дрова и доставку могут отличаться от региона.</p>
                <div class="phone_order">
                    <i class="icon-phone-fill"></i><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a><br>
                </div>
            </div>
        </div>
        <div class="stock__wrapper">
            <div class="stock__img">
                <img class="bi" src="assets/images/aspen-firewood.png" alt="Дрова осина">
            </div>
            <div class="stock__offer">
                <h3>Дрова осиновые колотые</h3>
                <p>Так же как и ольха отлично справляется с очисткой дымохода от копоти и сажи, имеет достаточно большое
                    пламя, быстро горит и не оставляет углей после горения
                    теплоотдачу.</p>
                <p class="allocated">Валом <span><b>1599</b></span><sup><s>1800</s></sup> рублей / куб</p>
                <button class="button" data-popup=".popup--order"><i class="icon-leaf-aspen"></i>Рассчитайте стоимость</button>
                <p class="notion-p">Уточните у оператора точную стоимость доставки до Ваc. Цены на дрова и доставку могут отличаться от региона.</p>
                <div class="phone_order">
                    <i class="icon-phone-fill"></i><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a><br>
                </div>
            </div>
        </div>
    </section>
    <section class="measurement bg-black">
        <h2>Длина дров от 30 - 40 см</h2>
        <p>Размер поленьев от 30-40 см в длину, ручной колки.</p>
        <p>Дрова отлично подойдут для домашних печей, каминов, бань и мангалов.</p>
        <img class="bi" src="assets/images/measure.png" alt="Размер палена 30-40">
    </section>
    <section class="bag content-center">
        <h2>Дрова в сетках</h2>
        <p class="tac"><b>250 рублей</b> / сетка 50 л.</p>
        <img class="bi" src="assets/images/bag.png" alt="Дрова в мешках">
        <button class="button" data-popup=".popup--order"><i class="icon-leaf"></i>Рассчитайте стоимость</button>
        <p class="notion-p">Уточните у оператора точную стоимость доставки до Ваc. Цены на дрова и доставку могут отличаться от региона.</p>
        <div class="phone_order">
            <i class="icon-phone-fill"></i><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a><br>
        </div>
    </section>
    <section class="payment bg-black">
        <h2>Наличный и безналичный расчёт</h2>
        <img class="bi" src="assets/images/money-and-card.png" alt="Наличный и безналичный">
    </section>
    <section class="fifty tac content-center">
        <h2>Смесь 50/50 любого вида дров</h2>
        <p>У нас можно Рассчитайте стоимость дрова как одной породы древесины, так и смесь 50/50 любого вида.</p>
        <img class="bi" src="assets/images/50-50.png" alt="Смесь древесины">
        <button class="button" data-popup=".popup--order"><i class="icon-leaf"></i>Рассчитайте стоимость</button>
        <p class="notion-p">Уточните у оператора точную стоимость доставки до Ваc. Цены на дрова и доставку могут отличаться от региона.</p>
        <div class="phone_order">
            <i class="icon-phone-fill"></i><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a><br>
        </div>
    </section>

    <div class="recall">
        <div class="recall__label">
            <label for="phone">Перезвонить Вам?<i class="icon-click"></i></label>
        </div>
    </div>

    <div class="recall">
        <div class="recall__label">
            <label for="phone">Введите номер телефона</label>
            <p>я согласен(а) и ознакомлен(а) с <a data-popup="#policy" href="#">политикой конфиденциальности</a></p>
        </div>
        <div class="recall__field">
            <form action="#" method="post" id="call-form">
                <input id="phone" type="tel" name="phone" placeholder="" value="+7">
                <input type="hidden" name="name" placeholder="" value="Перезвоните мне!">
                <button id="call">Перезвоните</button>
            </form>
        </div>
    </div>

    <?php require_once './policy.php' ?>
    <?php require_once './popup_form.php' ?>

</main>
<footer class="bg-black">
    <div class="logo tac">
        <img src="assets/images/logo.png" alt="">
    </div>
    <div class="right-panel">
        <div class="links">
            <ul>
                <li><a data-popup="#policy" href="#">Политика конфиденциальности</a></li>
                <li><a data-popup=".popup--order" href="#">Рассчитайте стоимость</a></li>
                <li><a class="cw" href="tel:+78126037760">+7 (812) 603-77-60	</a></li>
            </ul>
        </div>
        <div class="offer">
            <p>Обращаем ваше внимание на то, что данный интернет-сайт, а также вся информация о товарах и ценах, предоставленная на нём, носит исключительно информационный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.</p>
            <p>Для получения подробной информации о наличии и стоимости указанных товаров и (или) услуг, пожалуйста, обращайтесь к менеджеру сайта с помощью специальной формы связи или по телефону</p>
        </div>
    </div>
</footer>
<script type="module" src="assets/js/app.js?<?= rand() ?>"></script>
</body>
</html>
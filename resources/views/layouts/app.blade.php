<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Разработка сайтов в Дагестане &mdash; агенство RedRee</title>
    <meta name="fragment" content="!">
    <meta name="yandex-verification" content="a32999d0823e051f" />
    <meta name="description" content="Разработка и создание сайтов в агенстве «RedRee» - это отличное решение для Вашего бизнеса. Мы создаем сайты любого уровня сложности: от визиток до многофункциональных интернет-магазинов.">
    <meta name="keywords" content="Создание сайтов, создание сайтов в махачкале, разработка сайтов, разработка сайтов махачкала, купить сайт, сделать сайт в махачкале, Редри, RedRee, цена на сайт махачкала, создание мобильного приложения, приложение android махачкала, iphone приложение махачкала, ios приложение">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="copyright" lang="ru" content="Диджитал агенство RedRee" />
    <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Ubuntu:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/animate.css">
    <link rel="stylesheet" href="/public/css/owl.carousel.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="/public/js/SmoothScroll.js"></script>
    <script src="/public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter47230500 = new Ya.Metrika({
                        id:47230500,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/47230500" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <script src="/public/js/main.js"></script>
</head>

<body>
<div class="gradient"></div>
<div class="wrapper_popup mainPopup">
    <div class="wrap_popup mainPopup">
        <div class="popup childPopup">
            <h2>Заполните формы.</h2>
            <p>Мы свяжемся с вами в ближайшее время.</p>
            <i class="material-icons close_popup">&#xE5CD;</i>
            <form action="/sendme" method="post">
                {{ csrf_field() }}
                <input type="text" placeholder="Имя" required="" name="Sname">
                <input type="text" id="phone3" placeholder="Телефон" required="" name="Sphone">
                <input type="text" placeholder="Email" required="" name="Semail">
                <button class="button">Отправить заявку</button>
            </form>
        </div>
    </div>
</div>
<div class="padBlock">

    <!--  Start doc   -->
    <header>
        <div class="header__left">
            <a href="#"><img src="/public/images/logo.png" alt=""></a>
        </div>
        <div class="header__right">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="#ourWorks">Наши работы</a></li>
                <li><a href="#thirdScreen">Услуги</a></li>
                <li><a href="#fifthScreen">Студия</a></li>
                <li><a href="#sixthScreen">Методология</a></li>
                <li><a href="#seventhScreen">Контакты</a></li>
            </ul>
        </div>

    </header>


    @yield('content')


    <footer class="wrapper__footer">
        <div class="wrap__footer">
            <div class="footer_logo">
                <a href="/"><img src="/public/images/logo.png" alt=""></a>
            </div>
            <div class="footer_linksPage">
                <div>
                    <a href="">Главная</a>
                    <a href="">Наши работы</a>
                    <a href="">Услуги</a>
                </div>
                <div>
                    <a href="">Студия</a>
                    <a href="">Методология</a>
                    <a href="">Контакты</a>
                </div>
            </div>
            <div class="footer_contact">
                <div>
                    <p>Контакты:</p>
                    <a href="">+7 963 403 14 05</a>
                    <a href="">feedback@redree.ru</a>
                </div>
                <div>
                    <p>Мы в соц.сетях:</p>
                    <a href="">Вконтакте</a>
                    <a href="">Инстаграм</a>
                </div>
            </div>
        </div>
    </footer>



    <!--   End doc-->
</div>
</body>

</html>
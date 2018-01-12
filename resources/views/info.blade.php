@extends('layouts.app')
@section('content')

    @if($id == 1) @include('info.promo')@endif
    @if($id == 2) @include('info.coop')@endif
    @if($id == 3) @include('info.service')@endif
    @if($id == 4) @include('info.magaz')@endif
    @if($id == 5) @include('info.phone')@endif
    @if($id == 6) @include('info.brending')@endif
    <section class="thirdScreen thirdScreen_stepworkPage">
        <h3>Этапы работы</h3>
        <p>Правильно построенный алгоритм этапов работ - залог более быстрой и качественной работы, слаженных действий и в достаточной степени надёжной связи между всеми компонентами проекта.</p>
        <h4>Все этапы<br>работы над проектом</h4>
        <div class="Stageworks--servicePage">
            <div class="wrap_StageProject">
                <div class="StageProject">
                    <span>01</span>
                    <p>Предпроектная подготовка.</p>
                    <ul>
                        <li>Предварительное обсуждение проекта, определение целей и задач будущего сайта.</li>
                        <li>Как будет работать ваш сайт и какой контент он должен содержать.</li>
                        <li>Что должно обеспечивать конверсию посетителей в клиентов.</li>
                        <li>Какой и в каком виде потребуется контент (наполнение сайта: тексты, графика, иллюстрации и т.д.).</li>
                        <li>Какой и в каком виде потребуется контент (наполнение сайта: тексты, графика, иллюстрации и т.д.).</li>
                        <li>Какой и в каком виде потребуется контент (наполнение сайта: тексты, графика, иллюстрации и т.д.).</li>
                        <li>Примерная оценка стоимости и сроков проекта.</li>
                    </ul>
                </div>
                <div class="StageProject">
                    <span>02</span>
                    <p>Идея и структура.</p>
                    <ul>
                        <li>Окончательное определение целей и задач.</li>
                        <li>Подробные требования к дизайну, функционалу и наполнению.</li>
                        <li>Модель структуры, пути по сайту (карта сайта).</li>
                        <li>Составление технического задания.</li>
                        <li>Разработка UX стратегии и поиск креативных решений.</li>
                    </ul>
                </div>
                <div class="StageProject">
                    <span>03</span>
                    <p>Логотип.</p>
                    <ul>
                        <li>Подборка пользовательских сценариев.</li>
                        <li>Создание прототипа будущего сайта на основе комплексного исследования, проработка  всех блоков, кнопок, форм и текстов.</li>
                    </ul>
                </div>
            </div>

            <div class="wrap_StageProject">
                <div class="StageProject">
                    <span>04</span>
                    <p>Дизайн.</p>
                    <ul>
                        <li>Создание и утверждение прототипа сайта.</li>
                        <li>Проработка деталей, создание визуального образа.</li>
                        <li>Отрисовка дизайна Вашего сайта, создание иллюстраций, инфографики, добавление визуальных эффектов на сайт и анимации.</li>
                    </ul>
                </div>
                <div class="StageProject">
                    <span>05</span>
                    <p>Программирование.</p>
                    <ul>
                        <li>Html-верстка основных страниц.</li>
                        <li>Программирование функционала сайта, внедрение CMS.</li>
                        <li>Размещение сайта на тестовом домене.</li>
                    </ul>
                </div>
                <div class="StageProject">
                    <span>06</span>
                    <p>Тестирование и запуск проекта.</p>
                    <ul>
                        <li>Загрузка первичной информации, предоставленной клиентов на рабочий сайт.
                        </li>
                        <li>Двустороннее тестирование сайта (со стороны клиента и агентства).</li>
                        <li>Копирайтинг. Написание дополнительных уникальных текстов для сайта.</li>
                        <li>Перенос сайта с тестового домена на основной.</li>
                        <li>Передача сайта клиенту.</li>
                        <li>
                            Консультирование вашего сотрудника по работе с сайтом.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="wrapper_needsite_stepworkPage">
            <div class="NeedStageProject">
                <p>Хотите узнать во сколько<br>Вам обойдётся промо-сайт?</p>
                <p>Нажмите на <span>"Расчитать стоимость"</span><br>и узнайте стоимость вашего проекта</p>
                <a href="/services" class="button">Расчитать стоимость</a>
            </div>
            <div class="needsiteForm_stepworkPage">
                <p>Нужен промо-сайт?</p>
                <p>Заполните данные поля и мы свяжемся с вами в ближайшее время.</p>
                <div class="form--fourthScreen">
                    <form action="/services/promo/need" method="post">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Имя" name="promo_name">
                        <input type="email" placeholder="Email" name="promo_email">
                        <input type="text" id="phone4" placeholder="Телефон" name="promo_phone">
                        <button class="button">Свяжитесь со мной</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
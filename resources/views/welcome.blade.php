@extends('layouts.app')
@section('content')
    <section class="firstScreen">

        <div class="firstScreenMiddle">

            <span>ditital-agency</span>
            <h3>RedRee</h3>
            <div class="firstScreenMiddle__wrapp">
                <p>Студия веб-разработки с широким спектром возможность, а так же с большим списком приятных бонусов. </p>
                <a href="#" class="ActiveShadowButton popupButton">Свяжитесь со мной</a>
            </div>
        </div>

        <div class="firstScreenAbsolute">
            <div class="deadLine">
                <p>СРОК РАЗРАБОТКИ</p>
                <h3>от 14 дней</h3>
            </div>


            <div class="wrapperScroll">
                <div class="scroll-downs">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>

            <div class="firstScreen__ICONWRAP">
                <div class="firstScreen__ICONWRAP--icon">
                    <div class="socIcons">
                        <ul>
                            <li><a target="_blank" href="/errors"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href="/errors"> <i class="fa fa-vk" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.instagram.com/redree_digital/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="firstScreen__ICONWRAP--text">
                    мы в соц.сетях
                </div>
            </div>


        </div>
    </section>

    <section class="ourWorks" id="ourWorks">
        <div class="flex"><h3>Наши работы</h3> <select name="govno" id="govno">
                <option value="0">Все</option>
                <option value="1">Сайты</option>
                <option value="2">Брендинг</option>
                <option value="3">Приложения</option>
                <option value="4">Промо-ролики</option>
            </select></div>
        <div class="wrapper_ourWorks">
            <div class="infoSlide">
                <h1 id="titleWork">Инвестиционный портал<br>г.Махачкала</h1>
                <p>Клиент: <span id="clientWork">Администрация г.Махачкалы</span></p>
                <p >Вид работы: <span  id="typeWork">Digital</span></p>
                <p>Год: <span id="yearWork">2017</span></p>
                <div class="infoSlide_links">
                    <a id="urlLocal" class="ActiveShadowButton">Подробнее</a>
                    <a id="urlGlobal" >Перейти на сайт</a>
                </div>
            </div>
            <div class="slide" id="govnishko">
                <div class="owl-carousel slider_ourWorks"  >
                    <img src="/public/images/republic_bg.png" alt="">
                    <img src="/public/images/republic_bg.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="thirdScreen" id="thirdScreen">
        <h3>Услуги</h3>
        <p>Хорошо спроектированный интерфейс — основа успешного проекта, поэтому мы начинаем работу над сайтом с аналитики: изучаем конкурентов, описываем портреты целевой аудитории и создаем прототипы основных страниц будущего сайта. </p>
        <h4>Все виды услуг <br> продоставленные в нашем агенстве.</h4>
        <div class="serviceWrapper">

            <div class="serviceWrap__items">
                <div class="serviceWrapper__left--item">
                    <a href="/services/1/info" class="serviceWrapper__left--item__linkBlock"></a>
                    <h3>01</h3>
                    <h4>Промо-сайт</h4>
                    <p>Промо-сайт требуется для активного продвижения отдельно взятого товара или услуги. Делаем лендинги о продуктах, сайты мероприятий.</p>
                    <div class="serviceWrapButt">
                        <a href="/services/1" class="button">Расчитать стоимость</a>
                    </div>
                </div>

                <div class="serviceWrapper__left--item">
                    <a href="/services/2/info" class="serviceWrapper__left--item__linkBlock"></a>
                    <h3>02</h3>
                    <h4>Корпоративный сайт</h4>
                    <p>Корпоративный сайт - это визитная карточка вашей компании. Создаем площадку для взаимодействия компании с клиентами, партнерами, сотрудниками. Расскажем об услугах, соберем данные о посетителях, организуем обратную связь с ними.</p>
                    <div class="serviceWrapButt">
                        <a href="/services/2" class="button">Расчитать стоимость</a>
                    </div>
                </div>

                <div class="serviceWrapper__left--item">
                    <a href="/services/3/info" class="serviceWrapper__left--item__linkBlock"></a>
                    <h3>03</h3>
                    <h4>Сервис</h4>
                    <p>Опыт работы со стартапами научил нас превращать набор требований и пожеланий в удобный сервис. Больше всего любим сложную разработку, реализуем идеи любого масштаба.</p>
                    <div class="serviceWrapButt">
                        <a href="/services/3" class="button">Расчитать стоимость</a>
                    </div>
                </div>
            </div>

            <div class="serviceWrap__items">
                <div class="serviceWrapper__left--item">
                    <a href="/services/4/info" class="serviceWrapper__left--item__linkBlock"></a>
                    <h3>04</h3>
                    <h4>Интернет-магазин</h4>
                    <p>Полноценно включаем сайт в систему маркетинга компании, интегрируем с системами учета и с сервисами доставки и оплаты. Делаем удобную и гибкую систему управления, заботимся о конверсии.</p>
                    <div class="serviceWrapButt">
                        <a href="/services/4" class="button">Расчитать стоимость</a>
                    </div>
                </div>

                <div class="serviceWrapper__left--item">
                    <a href="/services/5/info" class="serviceWrapper__left--item__linkBlock"></a>
                    <h3>05</h3>
                    <h4>Мобильные приложения</h4>
                    <p>Полноценно включаем сайт в систему маркетинга компании, интегрируем с системами учета и с сервисами доставки и оплаты. Делаем удобную и гибкую систему управления, заботимся о конверсии.</p>
                    <div class="serviceWrapButt">
                        <a href="/services/5" class="button">Расчитать стоимость</a>
                    </div>
                </div>

                <div class="serviceWrapper__left--item">
                    <a href="/services/6/info" class="serviceWrapper__left--item__linkBlock"></a>
                    <h3>06</h3>
                    <h4>Разработка брендинга</h4>
                    <p>Полноценно включаем сайт в систему маркетинга компании, интегрируем с системами учета и с сервисами доставки и оплаты. Делаем удобную и гибкую систему управления, заботимся о конверсии.</p>
                    <div class="serviceWrapButt">
                        <a href="/services/6" class="button">Расчитать стоимость</a>
                    </div>
                </div>

            </div>
        </div>


    </section>

    <section class="fourthScreen" id="fourthScreen">

        <h3>Узнать подробности</h3>
        <div class="wrapper__form--fourthScreen">
            <div class="wrap--fourthScreen">
                <div class="info--fourthScreen">
                    <p>У вас возникли вопросы? Вы хотите узнать о скидках?</p>
                    <p>Заполните данные поля и мы свяжемся с вами в ближайшее время.</p>
                </div>
                <div class="form--fourthScreen">
                    <form action="/pupel" method="post" >
                        {{ csrf_field() }}
                        <input type="text" id="nameReg" name="reg_name" placeholder="Имя">
                        <input type="email" id="mailReg" name="reg_mail" placeholder="Email">
                        <input type="text" id="phone" name="reg_tel" placeholder="Телефон">
                        <button class="button registr-but" type="submit">Свяжитесь со мной</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="fifthScreen" id="fifthScreen">
        <h3>Студия</h3>
        <div class="wrap_info--fifthScreen">
            <p>Digital агенство RedRee работает с начала 2017 года.Основные направления — брендинг, разработка веб-сайтов, создание визуальных образов для поддержания имиджа компаний, их продуктов и услуг. Наша цель — делать продукты и услуги понятными и привлекательными для потребителя.
            </p>
            <h4>Все кто трудятся в<br> нашем агенстве.</h4>
        </div>
        <div class="workersWrap">
            <div class="workingPeople">
                <div class="owl-carousel owl-carousel_fifthScreen">
                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo">
                            <img src="/public/images/rasul_bg.png" alt="">
                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Зияудинов Расул</h5>
                                <span>Арт-директор, основатель.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo">
                            <img src="/public/images/kristina_bg.png" alt="">
                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Тюрюханова Кристина</h5>
                                <span>Back-end разработчик, основатель.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo">
                            <img src="/public/images/vic_bg.png" alt="">
                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Осипов Виктор</h5>
                                <span>Front-End разработчик, основатель.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo">
                            <img src="/public/images/ruslan_bg.png" alt="">
                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Алиев Руслан</h5>
                                <span>Android-разработчик.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo">
                            <img src="/public/images/zaur_bg.png" alt="">
                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Магомедов Заурбек</h5>
                                <span>Front-End разработчик, основатель.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo" style="background-color: #dcf5f6">

                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Гаджиев Саид</h5>
                                <span>Веб-разработчик.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo" style="background-color: #dcf5f6">

                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Магомедов Газимагомед</h5>
                                <span>Back-end разработчик.</span>
                            </div>
                        </div>
                    </div>

                    <div class="workersWrap__item">
                        <div class="workersWrap__item--photo" style="background-color: #dcf5f6">

                        </div>
                        <div class="workersWrap__item--descript">
                            <div class="WORKDESWRAP">
                                <h5>Казимов Камиль</h5>
                                <span>Копирайтер.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="sixthScreen" id="sixthScreen">
        <h3>Методология</h3>
        <p>
            Создание проекта происходит в несколько этапов в соответствии с заверенным заранее планом, начиная от составления общего макета, заканчивая сдачей работ заказчику. В любой момент времени заказчик может проследить на каком этапе разработки сейчас находится его проект.
        </p>
        <div class="sixthScreenMethodWrap">
            <div class="sixthScreenMethodWrap__item">
                <h3>01</h3>
                <h4>Исследование</h4>
                <p>Исследование - процесс формирования перечня функциональных особенностей и подсчёта ориентировочного срока разработки продукта. Также будет созданы: карта приложения и примерная структура будущей системы.</p>
            </div>

            <div class="sixthScreenMethodWrap__item">
                <h3>02</h3>
                <h4>Проектирование</h4>
                <p>Завершающий этап продукта - документ о решениях и правилах, включающий в себя несколько пунктов, таких как: информационную архитектуру, дизайн взаимодействия, визуальную концепцию сетки, элементы визуальных решений, ТЗ для разработчиков.</p>
            </div>

            <div class="sixthScreenMethodWrap__item">
                <h3>03</h3>
                <h4>Производство</h4>
                <p>Это этап завершения работ и подведения итогов, исправления ошибок, исправление деталей и доработку важных компонентов. По окончанию данного этапа и согласования товара заказчиком происходит запуск самого продукта.</p>
            </div>

        </div>

    </section>

    <section class="seventhScreen" id="seventhScreen">
        <h3>Контакты</h3>
        <div class="seventhScreenInfo">
            <div class="seventhScreenInfo__form">
                <div class="seventhScreenInfo__form--text">
                    <p>В любое время суток вы можете связаться с<br>нами, мы вас проконсультируем и ответим на<br>любые ваши вопросы.</p>
                    <div class="contact">
                        <div>
                            <p>+7 963 403 14 05</p>
                            <p>feedback@redree.ru</p>
                        </div>
                        <div>
                            <a href="">Вконтакте</a>
                            <a href="">Инстаграм</a>
                        </div>
                    </div>
                    <span>Оставте заявку и мы свяжемся<br>с Вами в ближайщее время.</span>
                </div>
                <form action="/contact" method="post">
                    {{ csrf_field() }}
                    <div>
                        <input type="text" placeholder="Имя" name="name1">
                        <input type="text" id="phone2" name="phone1" placeholder="Телефон">
                    </div>
                    <div>
                        <input type="text" placeholder="Email" name="email1">
                        <button  class="button">Свяжитесь со мной</button>
                    </div>
                </form>
            </div>
            <div class="seventhScreenInfo__map">
                <iframe src="https://snazzymaps.com/embed/33259" width="100%" height="100%" style="border:none;"></iframe>
            </div>
        </div>
    </section>
    
    
    <script>

    </script>
    
    
@endsection
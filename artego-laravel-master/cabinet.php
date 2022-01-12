<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style/main.min.css"/>
    <link rel="stylesheet" href="style/noty.css"/>
    <meta name="theme-color" content="#ffffff"/>
    <meta name="description" content="ArtEgo Website"/>
    <meta name="keywords" content="ArtEgo Website"/>
    <meta property="og:title" content="ArtEgo Website"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://ArtEgo.ru"/>
    <meta property="og:image" content=""/>
    <title>ArtEgo Website</title>
    <link rel="apple-touch-icon" sizes="57x57" href="./img/icons/favicon/apple-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="60x60" href="./img/icons/favicon/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="./img/icons/favicon/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="./img/icons/favicon/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="./img/icons/favicon/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="./img/icons/favicon/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="./img/icons/favicon/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="./img/icons/favicon/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/favicon/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="./img/icons/favicon/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="./img/icons/favicon/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" hsref="./img/icons/favicon/favicon-16x16.png"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="./img/icons/favicon/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff"/>
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen"/>

    <script type="text/javascript" src="js/main/vue.js"></script>
    <script type="text/javascript" src="js/main/jq.js"></script>
    <script type="text/javascript" src="js/main/vue_router.js"></script>
</head>
<body>
<div id="app">
    <nav class="nav">
        <div class="container">
            <div class="nav__left">
                <div class="nav__left__link" id="navMenuLink"><span class="bars"><i class="fas fa-bars"></i></span>
                    <p>Меню</p>
                </div>
                <form class="nav__search__form" method="POST" action="">
                    <input type="text" placeholder="Поиск"/>
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="nav__middle"><a class="nav__logo" href=""><img src="./img/logo-top-colored.svg" alt=""/></a>
            </div>
            <div class="nav__right"><a class="nav__phone" href="" tel="+74959888825"><img
                        src="./img/icons/icon-nav-phone.svg" alt=""/></a>
                <p>+7 (495) 988-88-25</p><a class="nav__ordercall" href="">Заказать звонок</a>
                <div class="nav__login"><a href="">Войти</a></div>
            </div>
            <div class="nav__menu">
                <ul>
                    <li><a class="modal__history" href=""><img src="./img/icons/icon-nav-aboutus.svg"/> О нас</a></li>
                    <li><a class="modal__club" href=""><img src="./img/icons/icon-nav-club.svg"/> Вступить в клуб</a>
                    </li>
                    <li><a class="modal__events" href=""><img src="./img/icons/icon-nav-events.svg"/> Мероприятия</a>
                    </li>
                    <li><a class="modal__abonement" href=""><img src="./img/icons/icon-nav-abonement.svg"/>
                            Абонементы</a></li>
                    <li><a class="modal__gift" href=""><img src="./img/icons/icon-nav-gift.svg"/> Подарочный сертификат</a>
                    </li>
                    <li><a class="modal__help" href=""><img src="./img/icons/icon-nav-help.svg"/> Помощь проекту</a>
                    </li>
                    <li><a class="modal__contacts" href=""><img src="./img/icons/icon-nav-contacts.svg"/> Контакты</a>
                    </li>
                    <li><a class="modal__conditions" href=""><img src="./img/icons/icon-nav-contacts.svg"/> Попап -
                            условия вступления</a></li>
                    <li><a class="modal__wine" href=""><img src="./img/icons/icon-nav-contacts.svg"/> Попап - цветная
                            заявка</a></li>
                </ul>
                <a class="nav__logo" href="/"><img src="./img/icons/logo-nav-bottom.svg" alt=""/></a>
            </div>
            <form class="nav__search__form nav__search__form--mobile" method="POST" action="">
                <input type="text" placeholder="Поиск"/>
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>
    <main>
        <router-view></router-view>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__left"><a class="footer__logo" href=""><img src="./img/icons/logo-footer.svg"
                                                                           alt=""/></a><a class="footer__copyright"
                                                                                          href="">Разработка сайта
                    HPACE</a></div>
            <div class="footer__right">
                <div class="footer__info">
                    <div class="footer__social"><a class="social__whatsapp" href=""><img
                                src="./img/icons/icon-footer-whatsapp.svg" alt=""/></a><a class="social__instagram" href=""><img
                                src="./img/icons/icon-footer-instagram.svg" alt=""/></a><a class="social__vk" href=""><img
                                src="./img/icons/icon-footer-vk.svg" alt=""/></a></div>
                    <div class="footer__getnews">
                        <p>Получайте первыми информацию о мероприятиях и акциях:</p>
                        <div class="footer__subscribe"><a class="footer__subscribe" href="">Подписаться</a>
                            <p class="footer__copyright">&copy; Все права защищены</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal top__slider__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="topslider__calendar swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide topslider__calendar__slide"><img src="./img/topslider-calendar-psycho.png"
                                                                              alt=""/>
                        <div class="topslider__calendar__sign">
                            <h2>Психология</h2>
                            <div class="topslider__calendar__price">
                                <div class="topslider__calendar__left">
                                    <del>от 800 р</del>
                                    <p>от 600 р</p>
                                </div>
                                <div class="topslider__calendar__right">
                                    <p class="topslider__calendar__days">1</p>
                                    <p class="topslider__calendar__text">дней</p>
                                </div>
                            </div>
                            <a class="topslider__calendar__register" href="#calendar-register-1">Зарегистрироваться</a>
                        </div>
                    </div>
                    <div class="swiper-slide topslider__calendar__slide"><img src="./img/topslider-calendar-wine.png"
                                                                              alt=""/>
                        <div class="topslider__calendar__sign">
                            <h2>Дегустация вина</h2>
                            <div class="topslider__calendar__price">
                                <div class="topslider__calendar__left">
                                    <del>от 800 р</del>
                                    <p>от 600 р</p>
                                </div>
                                <div class="topslider__calendar__right">
                                    <p class="topslider__calendar__days">1</p>
                                    <p class="topslider__calendar__text">дней</p>
                                </div>
                            </div>
                            <a class="topslider__calendar__register" href="#calendar-register-2">Зарегистрироваться</a>
                        </div>
                    </div>
                    <div class="swiper-slide topslider__calendar__slide"><img
                            src="./img/topslider-calendar-architecture.png" alt=""/>
                        <div class="topslider__calendar__sign">
                            <h2>Архитектура</h2>
                            <div class="topslider__calendar__price">
                                <div class="topslider__calendar__left">
                                    <del>от 800 р</del>
                                    <p>от 600 р</p>
                                </div>
                                <div class="topslider__calendar__right">
                                    <p class="topslider__calendar__days">1</p>
                                    <p class="topslider__calendar__text">дней</p>
                                </div>
                            </div>
                            <a class="topslider__calendar__register" href="#calendar-register-3">Зарегистрироваться</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="modal calendar__register__modal">
        <div class="modal__substrate"></div>
        <div class="calendar__register modal__wrapper"><a class="modal__close" href=""><i
                    class="fa fa-times"></i></a><img src="./img/topslider-calendar-wine.png" alt=""/>
            <div class="calendar__register__sign">
                <h2>Дегустация вина</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum molestias quaerat quod facere.
                    Error neque, maxime necessitatibus rerum, nam est beatae modi quaerat culpa, quam voluptatum. Enim
                    asperiores optio aperiam?</p><a class="calendar__register__pay" href="">Записаться</a>
            </div>
        </div>
    </div>
    <div class="modal calendar__pay__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="calendar__pay modal__wrapper"><img src="./img/topslider-calendar-wine.png" alt=""/>
                <div class="calendar__pay__sign">
                    <h2>Оплата мероприятия "Дегустация вина"</h2>
                    <form class="calendar__pay__form" method="POST" action="">
                        <div class="form-group">
                            <label for="calendar_pay_name">ФИО</label>
                            <input type="text" name="calendar_pay_name" id="calendar_pay_name"/>
                        </div>
                        <div class="form-group">
                            <label for="calendar_pay_email">Эл. почта</label>
                            <input type="text" name="calendar_pay_email" id="calendar_pay_email"/>
                        </div>
                        <div class="form-group">
                            <label for="calendar_pay_phone">Телефон</label>
                            <input type="tel" name="calendar_pay_phone" id="calendar_pay_phone"/>
                        </div>
                        <button class="calendar__register__pay" type="submit">Оплатить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal registration__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__left"><img src="./img/register-modal-bg-horizontal.png" alt=""/></div>
            <div class="modal__right">
                <div class="modal__registration__form">
                    <h2>Регистрация</h2>
                    <p>Всего пару полей, и Вы - участник нашего клуба</p>
                    <form method="POST" action="" id="modalRegistration">
                        <div class="form-group">
                            <label for="registration_name">ФИО</label>
                            <input type="text" id="registration_name" name="registration_name" placeholder="Ваше имя"/>
                        </div>
                        <div class="form-group">
                            <label for="registration_email">E-mail</label>
                            <input type="email" id="registration_email" name="registration_email"
                                   placeholder="Ваш адрес электронной почты"/>
                        </div>
                        <div class="form-group">
                            <label for="registration_login">Логин</label>
                            <input type="text" id="registration_login" name="registration_login"
                                   placeholder="Ваш логин"/>
                        </div>
                        <div class="form-group">
                            <label for="registration_password">Пароль</label>
                            <input type="password" id="registration_password" name="registration_password"
                                   placeholder="Пароль"/>
                        </div>
                        <div class="form-group">
                            <label for="registration_repeat">Повторный пароль</label>
                            <input type="password" id="registration_repeat" name="registration_repeat"
                                   placeholder="Повторите пароль"/>
                        </div>
                        <button type="submit">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal authorisation__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__left"><img src="./img/register-modal-bg-horizontal.png" alt=""/></div>
            <div class="modal__right">
                <div class="modal__registration__form">
                    <h2>ArtEgo</h2>
                    <p>Авторизация</p><a class="modal__about__link" href="">О членстве в клубе</a>
                    <form>
                        <div class="form-group">
                            <label for="registration_email">Эл. адрес</label>
                            <input type="text" id="inp-login-auth" name="registration_email"
                                   placeholder="Ваш адрес электронной почты"/>
                        </div>
                        <div class="form-group">
                            <label for="registration_password">Пароль</label>
                            <input type="password" id="inp-password-auth" name="registration_password"
                                   placeholder="Пароль"/>
                        </div>
                        <div class="form-buttons"><a class="modal__resetpassword" href="">Восстановить пароль</a>
                            <button onclick = "app.tryAuthUser($('#inp-login-auth').val(), $('#inp-password-auth').val())">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal resetpassword__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__left"><img src="./img/register-modal-bg-horizontal.png" alt=""/></div>
            <div class="modal__right">
                <div class="modal__registration__form">
                    <h2>ArtEgo</h2>
                    <p>Восстановление пароля</p>
                    <form method="POST" action="" id="modalResetPassword">
                        <div class="form-group">
                            <label for="resetpassword_email">Эл. адрес</label>
                            <input type="email" id="resetpassword_email" name="resetpassword_email"
                                   placeholder="Ваш адрес электронной почты"/>
                        </div>
                        <div class="form-group">
                            <label for="resetpassword_password">Новый пароль</label>
                            <input type="password" id="new_password" name="resetpassword_password"
                                   placeholder="Придумайте новый пароль"/>
                        </div>
                        <button type="submit">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal membership__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="membership__info">
                <div class="membership__single">
                    <h2>О членстве в клубе</h2>
                </div>
                <div class="membership__photo"></div>
                <div class="membership__double">
                    <div class="membership__left">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                    <div class="membership__right">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                </div>
                <div class="membership__double">
                    <div class="membership__left">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                    <div class="membership__right">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-modal-cta" href="">Вступить в членство</a>
        </div>
    </div>
    <div class="modal conditions__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="membership__info">
                <div class="membership__single">
                    <h2>Условия вступления в членство клуба</h2>
                </div>
                <div class="membership__single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                        fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error labore
                        fuga.</p>
                </div>
                <div class="membership__photo"></div>
                <div class="membership__double">
                    <div class="membership__left">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                    <div class="membership__right">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                </div>
            </div>
            <a class="btn btn-modal-cta" href="">Вступить в членство</a>
        </div>
    </div>
    <div class="modal history__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="membership__info">
                <div class="membership__single">
                    <h2>Наша история</h2>
                </div>
                <div class="membership__single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                        fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error labore
                        fuga.</p>
                </div>
                <div class="membership__photo"></div>
                <div class="membership__double">
                    <div class="membership__left">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                    <div class="membership__right">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                </div>
                <div class="membership__double">
                    <div class="membership__left membership__author"><img src=""/>
                        <div class="membership__author__text">
                            <h3>Irina Sireneva</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="membership__right">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nisi autem eum hic quo dolores
                            fugiat, porro, veritatis recusandae odit iusto eaque dolorum illo nostrum fugit, et error
                            labore fuga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal enterclub__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="enterclub__info">
                <h2><strong>Вступайте в наш клуб</strong> для возможности получать специальные предложения</h2>
                <form class="enterclub__form" id="enterclubForm" method="POST" action="">
                    <div class="form-group">
                        <label for="enterclub_name">ФИО</label>
                        <input type="text" id="enterclub_name" name="enterclub_name" placeholder="ФИО"/>
                    </div>
                    <div class="form-group">
                        <label for="enterclub_address">Адрес</label>
                        <input type="text" id="enterclub_address" name="enterclub_address" placeholder="Адрес"/>
                    </div>
                    <div class="form-group">
                        <label for="enterclub_phone">Номер телефона</label>
                        <input type="tel" id="enterclub_phone" name="enterclub_phone" placeholder="Номер телефона"/>
                    </div>
                    <div class="form-group">
                        <label for="enterclub_date">Выберите срок членства в клубе</label>
                        <div class="form-group__inputs">
                            <select name="enterclub_date" id="enterclub_date">
                                <option value="3month">3 мес. - 0 руб</option>
                                <option value="6month">6 мес. - 100 руб</option>
                                <option value="1year">1 год - 1000 руб</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit">Оплатить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal contacts__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__left"><img src="./img/register-modal-bg-horizontal.png" alt=""/><a
                    class="modal__left__logo" href="/"><img src="./img/icons/logo-nav-bottom.svg"/></a></div>
            <div class="modal__right">
                <h2>Контакты</h2>
                <div class="contacts__group">
                    <div class="contacts__icon"><i class="fas fa-phone"></i></div>
                    <div class="contacts__text">
                        <p>Номер телефона</p><a href="tel:+74959888825">+ 7 (495) 988-88-25</a>
                    </div>
                </div>
                <div class="contacts__group">
                    <div class="contacts__icon"><i class="fas fa-envelope"></i></div>
                    <div class="contacts__text">
                        <p>E-mail:</p><a href="mailto:info@artego.ru">info@artego.ru</a>
                    </div>
                </div>
                <div class="contacts__group">
                    <div class="contacts__icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contacts__text">
                        <p>Адрес:</p>
                        <p>г. Москва, ул. Верховая, 25</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal help__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__left"><img src="./img/register-modal-bg-horizontal.png" alt=""/><a
                    class="modal__left__logo" href="/"><img src="./img/icons/logo-nav-bottom.svg"/></a></div>
            <div class="modal__right">
                <div class="modal__registration__form">
                    <h2>Помощь проекту</h2>
                    <p>Если у вас есть желание поддерживать проект, то можете помогать ему финансово</p>
                    <form method="POST" action="" id="modalHelpProject">
                        <div class="form-group">
                            <label for="helpproject_name">ФИО</label>
                            <input type="text" id="helpproject_name" name="helpproject_name" placeholder="ФИО"/>
                        </div>
                        <div class="form-group">
                            <label for="helpproject_phone">Телефон</label>
                            <input type="tel" id="helpproject_phone" name="helpproject_phone" placeholder="Телефон"/>
                        </div>
                        <div class="form-group">
                            <label for="helpproject_sum">Сумма</label>
                            <input type="text" id="helpproject_sum" name="helpproject_sum"
                                   placeholder="Введите желаемую сумму"/>
                        </div>
                        <button type="submit">Оплатить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal gift__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__left"><img src="./img/gift-sertificate-bg.png" alt=""/></div>
            <div class="modal__right">
                <div class="modal__registration__form">
                    <h2>Подарочный сертификат</h2>
                    <h2>ArtEgo</h2>
                    <form method="POST" action="" id="modalGiftForm">
                        <div class="form-group">
                            <label for="gift_name">Кому</label>
                            <input type="text" id="gift_name" name="giftt_name" placeholder="Кому"/>
                        </div>
                        <div class="form-group">
                            <label for="gift_phone">Сообщение</label>
                            <input type="text" id="gift_phone" name="gift_phone" placeholder="Сообщение"/>
                        </div>
                        <div class="form-group">
                            <label for="gift_sum">От кого</label>
                            <input type="text" id="gift_sum" name="gift_sum" placeholder="От кого"/>
                        </div>
                        <button type="submit">Оплатить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal abonement__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__top"><img src="./img/register-modal-bg-vertical.png"/></div>
            <div class="modal__bottom">
                <h2>Заявка на оплату абонемента</h2>
                <form method="POST" action="" id="modalAbonementForm">
                    <div class="form-group">
                        <label for="abonement_name">ФИО</label>
                        <input type="text" id="abonement_name" name="abonement_name" placeholder="ФИО"/>
                    </div>
                    <div class="form-group">
                        <label for="abonement_email">Эл. адрес</label>
                        <input type="email" id="abonement_email" name="abonement_email" placeholder="E-mail"/>
                    </div>
                    <div class="form-group">
                        <label for="abonement_phone">Телефон</label>
                        <input type="tel" id="abonement_phone" name="abonement_phone" placeholder="Телефон"/>
                    </div>
                    <button type="submit">Оплатить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal wine__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__top"><img src="./img/modal-top-wine-bg.png"/></div>
            <div class="modal__bottom"><img src="./img/modal-bottom-wine-bg.png"/>
                <h2>Заявка на оплату дегустации вина</h2>
                <form method="POST" action="" id="modalPaymentForm">
                    <div class="form-group">
                        <label for="payment_name">ФИО</label>
                        <input type="text" id="payment_name" name="payment_name" placeholder="ФИО"/>
                    </div>
                    <div class="form-group">
                        <label for="payment_phone">Эл. адрес</label>
                        <input type="email" id="payment_email" name="payment_email" placeholder="E-mail"/>
                    </div>
                    <div class="form-group">
                        <label for="payment_phone">Телефон</label>
                        <input type="tel" id="payment_phone" name="payment_phone" placeholder="Телефон"/>
                    </div>
                    <button type="submit">Оплатить</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal events__modal">
        <div class="modal__substrate"></div>
        <div class="modal__wrapper"><a class="modal__close" href=""><i class="fa fa-times"></i></a>
            <div class="modal__events__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="modal__events__slide swiper-slide"><img src="./img/topslider-calendar-wine.png"/>
                        <div class="modal__events__text">
                            <h2>Дегустация вина</h2>
                            <div class="modal__events__info">
                                <div class="modal__events__price">
                                    <p class="modal__events__price--old">от 800 р</p>
                                    <p>600 р</p>
                                </div>
                                <div class="modal__events__days">
                                    <p class="modal__events__date">1</p>
                                    <p>дней</p>
                                </div>
                            </div>
                            <a class="btn modal__events__btn" href="">Зарегистрироваться</a>
                        </div>
                    </div>
                    <div class="modal__events__slide swiper-slide"><img src="./img/topslider-calendar-psycho.png"/>
                        <div class="modal__events__text">
                            <h2>Психология</h2>
                            <div class="modal__events__info">
                                <div class="modal__events__price">
                                    <p class="modal__events__price--old">от 800 р</p>
                                    <p>600 р</p>
                                </div>
                                <div class="modal__events__days">
                                    <p class="modal__events__date">1</p>
                                    <p>дней</p>
                                </div>
                            </div>
                            <a class="btn modal__events__btn" href="">Зарегистрироваться</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-controls">
                    <div class="swiper-arrows"><a class="modalevents__swiper-prev" href=""><img
                                src="./img/icons/icon-arrow-left.svg" alt=""/></a><a class="modalevents__swiper-next"
                                                                                     href=""><img
                                src="./img/icons/icon-arrow-right.svg" alt=""/></a></div>
                    <div class="swiper-counter">
                        <p><span id="modalevents__current">1</span><span>/</span><span id="modalevents__total">15</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$version = rand(1, 9999);
?>

<script type="text/javascript" src="js/main/axios.js?v=12"></script>
<script type="text/javascript" src="js/main/noty.js?v=12"></script>

<script type="text/javascript" src="js/main/templates/index.js?v=<?php echo $version?>"></script>

<script type="text/javascript" src="js/main/main.js?v=<?php echo $version?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/bundle.js"></script>
</body>
</html>
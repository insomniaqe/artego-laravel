@extends('master')

@section('content')
    @php
        if(isset($status_signup)){
            if($status_signup == 'success'){
                echo 'Вы успешно зарегистрировались';
            }

            if($status_signup == 'have_data'){
                echo 'Почта или телефон заняты';
            }
        }
    @endphp

    <form class="calendar__pay__form" action="{{route('login')}}" method="post">
        <div class="form-group">
            <label for="calendar_pay_name">Логин</label>
            <input type="text" name="login"/>
        </div>
        <div class="form-group">
            <label for="calendar_pay_email">Пароль</label>
            <input type="text" name="password"/>
        </div>
        @csrf
        <button type="submit">логин</button>
    </form>

    <div class="topslider">
        <div class="topslider__slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/topslider-wine.png" alt=""/>
                    <div class="topslider__container">
                        <p class="topslider__slogan">Воспользуйтесь “таблеткой” от одиночества в свободное время от</p>
                        <div class="topslider__buttons"><a class="btn topslider__btn topslider__btn--want"
                                                           href="#topslider__basic">Я хочу</a><a
                                class="btn topslider__btn topslider__btn--wantpro" href="">Я хочу PRO</a></div>
                        <h2 class="topslider__heading">Пить вино</h2>
                    </div>
                </div>
                <div class="swiper-slide"><img src="./img/topslider-architecture.png" alt=""/>
                    <div class="topslider__container">
                        <p class="topslider__slogan">Воспользуйтесь “таблеткой” от одиночества в свободное время от</p>
                        <div class="topslider__buttons"><a class="btn topslider__btn topslider__btn--want"
                                                           href="#topslider__basic">Я хочу</a><a
                                class="btn topslider__btn topslider__btn--wantpro" href="">Я хочу PRO</a></div>
                        <h2 class="topslider__heading">Изучать архитектуру</h2>
                    </div>
                </div>
                <div class="swiper-slide"><img src="./img/topslider-psycho.png" alt=""/>
                    <div class="topslider__container">
                        <p class="topslider__slogan">Воспользуйтесь “таблеткой” от одиночества в свободное время от</p>
                        <div class="topslider__buttons"><a class="btn topslider__btn topslider__btn--want"
                                                           href="#topslider__basic">Я хочу</a><a
                                class="btn topslider__btn topslider__btn--wantpro" href="">Я хочу PRO</a></div>
                        <h2 class="topslider__heading">Изучать психологию</h2>
                    </div>
                </div>
                <div class="swiper-slide"><img src="./img/topslider-arts.png" alt=""/>
                    <div class="topslider__container">
                        <p class="topslider__slogan">Воспользуйтесь “таблеткой” от одиночества в свободное время от</p>
                        <div class="topslider__buttons"><a class="btn topslider__btn topslider__btn--want"
                                                           href="#topslider__basic">Я хочу</a><a
                                class="btn topslider__btn topslider__btn--wantpro" href="">Я хочу PRO</a></div>
                        <h2 class="topslider__heading">Изучать живопись</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <section class="possibilities">
        <div class="possibilities__before parallax"><img src="./img/bg-map.png"/></div>
        <div class="container">
            <div class="possibilities__heading">
                <h2>Ничего лишнего. Только&nbsp;<span class="text--marine text--medium">возможности</span></h2>
            </div>
            <div class="possibilities__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="possibilities__text">
                            <p>Здесь собраны неповторимые фото с тренингов, а также с различных выездных программ</p>
                        </div>
                        <div class="possibilities__slide"><img src="./img/possibilities-slide.png" alt=""/><a
                                class="possibilities__slide__link" href=""><img src="./img/icons/logo-small.svg"
                                                                                alt=""/></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="possibilities__text">
                            <p>Здесь собраны неповторимые фото с тренингов, а также с различных выездных программ?</p>
                        </div>
                        <div class="possibilities__slide"><img src="./img/possibilities-slide.png" alt=""/><a
                                class="possibilities__slide__link" href=""><img src="./img/icons/logo-small.svg"
                                                                                alt=""/></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="possibilities__text">
                            <p>Здесь собраны неповторимые фото с тренингов, а также с различных выездных программ!!</p>
                        </div>
                        <div class="possibilities__slide"><img src="./img/possibilities-slide.png" alt=""/><a
                                class="possibilities__slide__link" href=""><img src="./img/icons/logo-small.svg"
                                                                                alt=""/></a></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="possibilities__text">
                            <p>Здесь собраны неповторимые фото с тренингов, а также с различных выездных программ!!!</p>
                        </div>
                        <div class="possibilities__slide"><img src="./img/possibilities-slide.png" alt=""/><a
                                class="possibilities__slide__link" href=""><img src="./img/icons/logo-small.svg"
                                                                                alt=""/></a></div>
                    </div>
                </div>
                <div class="swiper-controls">
                    <div class="swiper-arrows"><a class="possibilities__swiper-prev" href=""><img
                                src="./img/icons/icon-arrow-left.svg" alt=""/></a><a class="possibilities__swiper-next"
                                                                                     href=""><img
                                src="./img/icons/icon-arrow-right.svg" alt=""/></a></div>
                    <div class="swiper-counter">
                        <p><span id="possibilities__current">1</span><span>/</span><span
                                id="possibilities__total">15</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="possibilities__after parallax"><img src="./img/bg-map.png"/></div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <div class="advantages__photo"><img src="./img/button-man.png" alt=""/></div>
                    <p><strong>Выездные и экскурсионные&nbsp;</strong> программы как по РФ, так и за пределами страны.
                    </p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__photo"><img src="./img/button-heart.png" alt=""/></div>
                    <p><strong>Индивидуальный подход</strong> к каждому участнику, напоминающий личное наставничесво.
                    </p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__photo"><img src="./img/button-molnia.png" alt=""/></div>
                    <p><strong>Нет академизма.</strong> Здесь вас никто не осудит. Вы свободны в своих возможностях и
                        интересах.</p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__photo"><img src="./img/button-people.png" alt=""/></div>
                    <p>Вы всегда&nbsp;<strong>получите обратную связь.</strong> У нас не просто вещание ораторов, но и
                        грамотно выстроенный диалог с пришедшими.</p>
                </div>
                <div class="advantages__item">
                    <div class="advantages__photo"><img src="./img/button-community.png" alt=""/></div>
                    <p><strong>Клуб сообщество людей,</strong> таблетка от одиночества. Члены клуба, поддержат и тд</p>
                </div>
            </div>
        </div>
    </section>
    <section class="calendar">
        <div class="container">
            <h2><span class="text--marine">Календарь&nbsp;</span>ближайших мероприятий</h2>
            <div class="calendar__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-arrows"><a class="calendar__swiper-prev" href=""><img
                                src="./img/icons/icon-arrow-left.svg" alt=""/></a><a class="calendar__swiper-next"
                                                                                     href=""><img
                                src="./img/icons/icon-arrow-right.svg" alt=""/></a>
                        <div class="swiper-counter">
                            <p><span id="calendar__current">1</span><span>/</span><span id="calendar__total">15</span>
                            </p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-slide calendar__slide"><img src="./img/calendar-slide.png" alt=""/>
                        <div class="calendar__info">
                            <div class="calendar__info__date"><img src="./img/icons/icon-calendar.svg" alt=""/>
                                <p>16 сентября 2022 г.</p>
                            </div>
                            <h3>Silence is golden</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium suscipit est
                                vero
                                maiores sequi eligendi, omnis accusamus aliquam ratione delectus, placeat id.
                                Consectetur,
                                molestias pariatur. Aliquam minus accusantium dolore.</p><a class="btn calendar__btn"
                                                                                            href="">Хочу пойти</a>
                        </div>
                    </div>
                    <div class="swiper-slide calendar__slide"><img src="./img/calendar-slide.png" alt=""/>
                        <div class="calendar__info">
                            <div class="calendar__info__date"><img src="./img/icons/icon-calendar.svg" alt=""/>
                                <p>16 сентября 2022 г.</p>
                            </div>
                            <h3>Silence is golden</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium suscipit est
                                vero
                                maiores sequi eligendi, omnis accusamus aliquam ratione delectus, placeat id.
                                Consectetur,
                                molestias pariatur. Aliquam minus accusantium dolore.</p><a class="btn calendar__btn"
                                                                                            href="">Хочу пойти</a>
                        </div>
                    </div>
                    <div class="swiper-slide calendar__slide"><img src="./img/calendar-slide.png" alt=""/>
                        <div class="calendar__info">
                            <div class="calendar__info__date"><img src="./img/icons/icon-calendar.svg" alt=""/>
                                <p>16 сентября 2022 г.</p>
                            </div>
                            <h3>Silence is golden</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium suscipit est
                                vero
                                maiores sequi eligendi, omnis accusamus aliquam ratione delectus, placeat id.
                                Consectetur,
                                molestias pariatur. Aliquam minus accusantium dolore.</p><a class="btn calendar__btn"
                                                                                            href="">Хочу пойти</a>
                        </div>
                    </div>
                    <div class="swiper-slide calendar__slide"><img src="./img/calendar-slide.png" alt=""/>
                        <div class="calendar__info">
                            <div class="calendar__info__date"><img src="./img/icons/icon-calendar.svg" alt=""/>
                                <p>16 сентября 2022 г.</p>
                            </div>
                            <h3>Silence is golden</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium suscipit est
                                vero
                                maiores sequi eligendi, omnis accusamus aliquam ratione delectus, placeat id.
                                Consectetur,
                                molestias pariatur. Aliquam minus accusantium dolore.</p><a class="btn calendar__btn"
                                                                                            href="">Хочу пойти</a>
                        </div>
                    </div>
                    <div class="swiper-slide calendar__slide"><img src="./img/calendar-slide.png" alt=""/>
                        <div class="calendar__info">
                            <div class="calendar__info__date"><img src="./img/icons/icon-calendar.svg" alt=""/>
                                <p>16 сентября 2022 г.</p>
                            </div>
                            <h3>Silence is golden</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis laudantium suscipit est
                                vero
                                maiores sequi eligendi, omnis accusamus aliquam ratione delectus, placeat id.
                                Consectetur,
                                molestias pariatur. Aliquam minus accusantium dolore.</p><a class="btn calendar__btn"
                                                                                            href="">Хочу пойти</a>
                        </div>
                    </div>
                </div>
                <div class="calendar__slider__before parallax-bottom"><img src="./img/calendar.png"/></div>
            </div>
        </div>
    </section>
    <section class="bigadvantage">
        <div class="container">
            <div class="bigadvantage__left"><img src="./img/bigadvantage.png" alt=""/><a class="bigadvantage__link"
                                                                                         href=""><img
                        src="./img/icons/logo-small.svg" alt=""/></a></div>
            <div class="bigadvantage__right">
                <p class="bigadvantage__text"><span class="text--marine">Значимое преимущество</span> нашего клуба-это
                    взаимопонимание, приятное окружение и атмосфера, которая каждому придется по душе.</p>
                <p class="bigadvantage__smalltext">Здесь вы можете делиться своими мыслями, переживаниями, эмоциями и
                    быть
                    уверенным в том, что вас поддержат. Осуждение и безразличие - это не про наш клуб.</p>
            </div>
        </div>
    </section>
    <section class="tours">
        <div class="container">
            <div class="tours__heading">
                <h2>Наши невероятные&nbsp;<span class="text--marine">выездные туры</span></h2>
                <p>Помогут ощутить вам могущество нашей страны, а также богатства за ее пределами</p>
            </div>
            <div class="tours__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tours__slide"><img src="./img/tours-slide.png" alt=""/>
                        <p>Ваша жизнь станет ярче и насыщеннее, когда вы почувствуете свою значимость в обществе.</p>
                    </div>
                    <div class="swiper-slide tours__slide"><img src="./img/tours-slide.png" alt=""/>
                        <p>Ваша жизнь станет ярче и насыщеннее, когда вы почувствуете свою значимость в обществе.</p>
                    </div>
                    <div class="swiper-slide tours__slide"><img src="./img/tours-slide.png" alt=""/>
                        <p>Ваша жизнь станет ярче и насыщеннее, когда вы почувствуете свою значимость в обществе.</p>
                    </div>
                </div>
                <div class="tours__controls">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="tours__slider__after parallax-bottom"><img src="./img/coffer.png"/></div>
            </div>
        </div>
    </section>
    <section class="teachers">
        <div class="container">
            <div class="teachers__heading">
                <h2>Наши&nbsp;<span class="text--marine">профессиональные</span> ведущие на&nbsp;всем вашем пути</h2>
            </div>
            <div class="teachers__block">
                <div class="teachers__advertise">
                    <p><strong>Уникальные люди,</strong> способные вдохновить и зарядить мотивацией на высокие
                        результаты
                        сотни людей. Делятся накопленным опытом и знаниями, что в дальнейшем может принести успех именно
                        Вам.</p>
                </div>
                <div class="teachers__list">
                    <div class="teachers__item">
                        <div class="teachers__photo"><img src="./img/teacher-left-small.png" alt=""/>
                            <p class="teachers__name">Irina</p>
                            <div class="teachers__lastname">Skorobogatova</div>
                        </div>
                        <div class="teachers__info">
                            <p>Do you have completely crazy dreams that make you Wake up confused? Or maybe your body
                                shows
                                you real movies at</p>
                        </div>
                        <div class="teachers__knowmore"><a href="">Узнать больше</a></div>
                    </div>
                    <div class="teachers__item">
                        <div class="teachers__photo"><img src="./img/teacher-middle-small.png" alt=""/>
                            <p class="teachers__name">Irina</p>
                            <div class="teachers__lastname">Skorobogatova</div>
                        </div>
                        <div class="teachers__info">
                            <p>Do you have completely crazy dreams that make you Wake up confused? Or maybe your body
                                shows
                                you real movies at</p>
                        </div>
                        <div class="teachers__knowmore"><a href="">Узнать больше</a></div>
                    </div>
                    <div class="teachers__item">
                        <div class="teachers__photo"><img src="./img/teacher-right-small.png" alt=""/>
                            <p class="teachers__name">Irina</p>
                            <div class="teachers__lastname">Skorobogatova</div>
                        </div>
                        <div class="teachers__info">
                            <p>Do you have completely crazy dreams that make you Wake up confused? Or maybe your body
                                shows
                                you real movies at</p>
                        </div>
                        <div class="teachers__knowmore"><a href="">Узнать больше</a></div>
                    </div>
                </div>
            </div>
            <div class="teachers__after parallax-top"><img src="./img/ellips-bg-right.png"/></div>
        </div>
    </section>
    <section class="academism">
        <div class="academism__before parallax-top"><img src="./img/ellips-bg-left.png"/></div>
        <div class="container">
            <div class="academism__heading">
                <h2><span class="text--marine">“Нет”&nbsp;</span> академизму!</h2>
            </div>
            <div class="academism__text">
                <p>Будьте уверены, здесь вы точно не столкнетесь с академизмом. Вы будете чувствовать себя максимально
                    комфортно и расслабленно. Здесь своя, особенная атмосфера, где над вами никто не будет властвовать,
                    упрекать, указывать на ошибки.&nbsp;<strong>Здесь все на равных.</strong></p>
                <p class="academism__cta">Приходите и убедитесь в этом сами</p>
            </div>
            <div class="academism__image"><img src="./img/academism-bg.png" alt=""/><a class="academism__link"
                                                                                       href=""><img
                        src="./img/icons/logo-small.svg" alt=""/></a></div>
        </div>
    </section>
    <section class="orderform">
        <div class="container">
            <div class="orderform__left">
                <p>Если у Вас еще&nbsp;<strong>присутствуют сомнения</strong> насчёт нашего клуба - рискните, и вы
                    ничуть не
                    пожалеете, а если остались вопросы, то...</p>
                <p>Оставьте заявку, мы перезвоним и ответим на все интересующие вопросы.</p>
            </div>
            <div class="orderform__right">
                <form action="" method="POST" id="orderForm">
                    <div class="orderform__input"><span class="order__name__icon"></span>
                        <input type="text" id="order_name" name="order_name" placeholder="Введите имя"/>
                    </div>
                    <div class="orderform__input"><span class="order__phone__icon"></span>
                        <input type="tel" id="order_phone" name="order_phone" placeholder="Мобильный телефон"/>
                    </div>
                    <button type="submit">Оставить заявку</button>
                </form>
                <div id="subscribeMessage"></div>
            </div>
        </div>
    </section>
@endsection

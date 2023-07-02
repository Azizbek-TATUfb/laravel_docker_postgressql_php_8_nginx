@extends('layouts.site')
@section('content')
    <div class="container">
        <!-- === PRODUCTS === -->

        <section class="products">
            <h1 class="title" data-aos-offset="200" data-aos="flip-up">ПРОДУКЦИЯ</h1>
            <main class="products__inner">
                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="/app/images/products-1.webp" alt="products img">
                    <h3 class="products__title">Эндоваскулярная
                        хирургия</h3>
                    <button class="btn">Посмотреть все</button>
                </div>

                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="/app/images/products-2.webp" alt="products img">
                    <h3 class="products__title">Лабораторная
                        диагностика</h3>
                    <button class="btn">Посмотреть все</button>
                </div>

                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="/app/images/products-3.webp" alt="products img">
                    <h3 class="products__title">Кардиохирургия</h3>
                    <button class="btn">Посмотреть все</button>
                </div>

                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="/app/images/products-4.webp" alt="products img">
                    <h3 class="products__title">ДИАБЕТ</h3>
                    <button class="btn">Посмотреть все</button>
                </div>

                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="/app/images/products-5.webp" alt="products img">
                    <h3 class="products__title">ЭНДОУРОЛОГИЯ</h3>
                    <button class="btn">Посмотреть все</button>
                </div>

                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="/app/images/products-6.webp" alt="products img">
                    <h3 class="products__title">АРИТМОЛОГИЯ</h3>
                    <button class="btn">Посмотреть все</button>
                </div>
            </main>

            <a class="link" href="#">Перейти в каталог нашей продукции</a>
        </section>

        <!-- === SERVICE === -->

        <section class="service">
            <h1 class="title" data-aos-offset="200" data-aos="flip-up">УСЛУГИ</h1>

            <div class="service__inner">
                <div class="service__card" data-aos-duration="1000" data-aos-offset="100" data-aos="fade-left">
                    <div class="service__img">
                        <img src="/app/images/service-1.webp" alt="service">
                    </div>

                    <div class="service__info">
                        <h3 class="service__title">СЕРВИС ОБОРУДОВАНИЯ</h3>
                        <p class="service__text text">Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей</p>
                        <button class="btn service__btn">Подробнее</button>
                    </div>

                </div>

                <div class="service__card" data-aos-duration="1000" data-aos-offset="100" data-aos="fade-down">
                    <div class="service__img">
                        <img src="/app/images/service-2.webp" alt="service">
                    </div>

                    <div class="service__info">
                        <h3 class="service__title">РЕГИСТРАЦИИ</h3>
                        <p class="service__text text">Обеспечение получения разрешительных документов, регистрационного удостоверения на изделия медицинского назначения Подготовка объектов к проведению</p>
                        <button class="btn service__btn">Подробнее</button>
                    </div>

                </div>

                <div class="service__card" data-aos-duration="1000" data-aos-offset="100" data-aos="fade-right">
                    <div class="service__img">
                        <img src="/app/images/service-1.webp" alt="service">
                    </div>

                    <div class="service__info">
                        <h3 class="service__title">УСЛУГИ ЛОГИСТИКИ</h3>
                        <p class="service__text text">Компания предоставляет сервисное обслуживание по всем предоставляемым продуктам. У наших инженеров имеется опыт и сертификаты фирм производителей</p>
                        <button class="btn service__btn">Подробнее</button>
                    </div>

                </div>
            </div>
        </section>

        <!-- === COMPANY === -->

        <section class="company">
            <h1 class="title" data-aos-offset="200" data-aos="flip-up">О КОМПАНИИ</h1>

            <div class="company__inner">
                <div class="company__wrapper" data-aos-offset="100" data-aos-duration="1000" data-aos="zoom-in">
                    <div class="company__circle company__circle_1">
                        <div class="company__circle company__circle_2">
                            <div class="company__circle company__circle_3">
                                <img class="company__logo" src="/app/images/logo.webp" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="company__content" data-aos-offset="100" data-aos-duration="1000" data-aos="fade-right">
                    <img class="company__content-logo" src="/app/images/logo.webp" alt="logo">
                    <p class="company__text text">Группа компаний MEDOL создавалась высококвалифицированными специалистами в сфере медицины, инженерии и экономики, за плечами которых значительный опыт на рынке высоких медицинских технологий, которая имеет свои представительства в разных уголках Земли. В 2011 году MEDOL зарегистрировал в Узбекистане ИП ООО “Medical Online Services". Цель компании построить прозрачный долгосрочный бизнес, принести пользу обществу путем развития и внедрения передовых технологий в систему здравоохранения Республики Узбекистан. </p>

                    <button class="btn">Узнать больше</button>
                </div>
            </div>


        </section>

        <!-- === NEWS === -->

        <section class="news">
            <h1 class="title" data-aos-offset="200" data-aos="flip-up">НОВОСТИ</h1>
            <main class="news__slider">
                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="/app/images/news-1.webp" alt="news img">
                    <h3 class="news__title">Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича</h3>
                    <div class="news__date">26.07.2021</div>
                    <p class="news__text">
                        С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...
                    </p>
                    <button class="news__btn btn">Подробнее</button>
                </div>

                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="/app/images/news-1.webp" alt="news img">
                    <h3 class="news__title">Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича</h3>
                    <div class="news__date">26.07.2021</div>
                    <p class="news__text">
                        С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...
                    </p>
                    <button class="news__btn btn">Подробнее</button>
                </div>

                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="/app/images/news-1.webp" alt="news img">
                    <h3 class="news__title">Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича</h3>
                    <div class="news__date">26.07.2021</div>
                    <p class="news__text">
                        С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...
                    </p>
                    <button class="news__btn btn">Подробнее</button>
                </div>
                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="/app/images/news-1.webp" alt="news img">
                    <h3 class="news__title">Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича</h3>
                    <div class="news__date">26.07.2021</div>
                    <p class="news__text">
                        С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...
                    </p>
                    <button class="news__btn btn">Подробнее</button>
                </div>

                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="/app/images/news-1.webp" alt="news img">
                    <h3 class="news__title">Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича</h3>
                    <div class="news__date">26.07.2021</div>
                    <p class="news__text">
                        С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...
                    </p>
                    <button class="news__btn btn">Подробнее</button>
                </div>

                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="/app/images/news-1.webp" alt="news img">
                    <h3 class="news__title">Mастер-класс в исполнении Галлямова Эдуарда Абдулхаевича</h3>
                    <div class="news__date">26.07.2021</div>
                    <p class="news__text">
                        С 19 по 21 апреля в АО «РСНПМЦУ» (Республиканский Специализированный Научно-Практический Медицинский Центр Урологии) при поддержке компаний Ethicon Endo Surgery (Johnson&Johnson) и ИП ООО «Medical Online Services» был проведен мастер-класс в исполнении...
                    </p>
                    <button class="news__btn btn">Подробнее</button>
                </div>
            </main>

            <div class="news__links">
                <a class="link" href="#">Посмотреть все новости </a>
                <a class="link" href="#">Посмотреть все новости </a>
            </div>
        </section>

        <!-- === PARTNER === -->

        <section class="partner">
            <h1 class="title" data-aos-offset="200" data-aos="flip-up">ПАРТНЕРЫ</h1>

            <div class="partner__slider">
                <div class="partner__item">
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-1.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-2.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-3.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-4.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-5.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-6.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-7.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-8.webp" alt="partner img"></a>
                </div>
                <div class="partner__item">
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-1.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-2.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-3.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-4.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-5.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-6.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-7.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-8.webp" alt="partner img"></a>
                </div>
                <div class="partner__item">
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-1.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-2.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-3.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-4.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-5.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-6.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-7.webp" alt="partner img"></a>
                    <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="#"><img src="/app/images/partner-8.webp" alt="partner img"></a>
                </div>
            </div>

        </section>

        <!-- === FOOTER === -->

    </div>
@endsection

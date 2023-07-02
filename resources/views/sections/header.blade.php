<?php

?>
<header class="header">
    <div class="container">
        <div class="header__top">

            <div class="header__item header__location">
                <img class="header__icon" src="/app/images/location.svg" alt="header icon">
                <div class="header__info">г.Ташкент, Чиланзар <br> 10 квартал, дом 3/1</div>
            </div>

            <div class="header__item header__phones">
                <img class="header__icon" src="/app/images/phone.svg" alt="header icon">
                <div class="header__info">
                    <a class="header__phone" href="tel:+998712766253">+998 71 276-62-53</a>
                    <a class="header__phone" href="tel:+998712766254">+998 71 276-62-54</a>
                </div>
            </div>

            <a href="/" class="logo"><img src="/app/images/logo.webp" alt="logo"></a>


            <img class="header__icon header__search" src="/app/images/search.svg" alt="header icon">
            <div class="header__icon header__icon_block header__facebook">
                <img src="/app/images/facebook.svg" alt="header icon">
                <span>Мы на Facebook</span>
            </div>

<!--  Language Start           -->
            <x-language />
<!--  Language end          -->

            <div class="header-btn">
                <div class="header-btn__line"></div>
                <div class="header-btn__line"></div>
                <div class="header-btn__line"></div>
            </div>

        </div>
        <nav class="header__menu">
            <a class="header__link" href="#magazin">@lang('app.shop')</a>
            <a class="header__link active" href="#company">@lang('app.about-company')</a>
            <a class="header__link" href="#products">@lang('app.products')</a>
            <a class="header__link" href="#services">@lang('app.services')</a>
            <a class="header__link" href="#promotions-and-news">@lang('app.promotions-and-news')</a>
            <a class="header__link" href="#feedback">@lang('app.feedback')</a>
        </nav>
        <div class="header__slider">
            <div class="header__slide">
                <div class="header__content">
                    <h1 class="header__title">Анализатор ABL800 FLEX</h1>
                    <p class="header__text">Ориентированный на среднюю или высокую производительность тестов, анализатор ABL800 FLEX измеряет полный набор параметров, включая pH, газы крови, электролиты, метаболиты и показатели оксиметрии</p>
                    <button class="btn">Подробнее</button>
                </div>
                <img class="header__img" src="/app/images/header-img.webp" alt="header img">
            </div>

            <div class="header__slide">
                <div class="header__content">
                    <h1 class="header__title">Анализатор ABL800 FLEX</h1>
                    <p class="header__text">Ориентированный на среднюю или высокую производительность тестов, анализатор ABL800 FLEX измеряет полный набор параметров, включая pH, газы крови, электролиты, метаболиты и показатели оксиметрии</p>
                    <button class="btn">Подробнее</button>
                </div>
                <img class="header__img" src="/app/images/header-img.webp" alt="header img">
            </div>

            <div class="header__slide">
                <div class="header__content">
                    <h1 class="header__title">Анализатор ABL800 FLEX</h1>
                    <p class="header__text">Ориентированный на среднюю или высокую производительность тестов, анализатор ABL800 FLEX измеряет полный набор параметров, включая pH, газы крови, электролиты, метаболиты и показатели оксиметрии</p>
                    <button class="btn">Подробнее</button>
                </div>
                <img class="header__img" src="/app/images/header-img.webp" alt="header img">
            </div>
        </div>

        <div class="header-dots">
            <div class="header-dots__item"></div>
            <div class="header-dots__item active"></div>
            <div class="header-dots__item"></div>
        </div>
    </div>
</header>

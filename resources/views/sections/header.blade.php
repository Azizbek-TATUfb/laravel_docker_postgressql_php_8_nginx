<?php

?>
<header class="header">
    <div class="container">
        <div class="header__top">

            <div class="header__item header__location">
                <a href="{{ $settings['site_location']['link']??"#" }}" class="header__item header__location">
                    <img class="header__icon" src="/app/images/location.svg" alt="header icon">
                    <div class="header__info">{!! ($settings['site_location']['name']??"") !!}</div>
                </a>
            </div>

            <div class="header__item header__phones">
                <img class="header__icon" src="/app/images/phone.svg" alt="header icon">
                <div class="header__info">
                    <a class="header__phone" href="{{ $settings['site_phone_one']['link']??"#" }}">{{ $settings['site_phone_one']['name']??"" }}</a>
                    <a class="header__phone" href="{{ $settings['site_phone_two']['link']??"#" }}">{{$settings['site_phone_two']['name']??""}}</a>
                </div>
            </div>

            <a href="/" class="logo"><img src="/app/images/logo.webp" alt="logo"></a>


            <img class="header__icon header__search" src="/app/images/search.svg" alt="header icon">
            <div class="header__icon header__icon_block header__facebook">
                <a href="{{ $settings['facebook_text']['link']??"" }}" class="header__icon header__icon_block header__facebook">
                    <img src="/app/images/facebook.svg" alt="header icon">
                    <span>{{ $settings['facebook_text']['name']??"" }}</span>
                </a>
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
            @if(!empty($sliders))
                @foreach($sliders as $slider)
                    <div class="header__slide">
                        <div class="header__content">
                            <h1 class="header__title">{{ $slider['title'] }}</h1>
                            <p class="header__text">{{ $slider['excerpt'] }}</p>
                            <button class="btn">{{ __('app.news_button_one') }}</button>
                        </div>
                        <img class="header__img" src="{{ $slider['path']??"/app/images/header-img.webp" }}" alt="header img">
                    </div>
                @endforeach
            @else
                <div class="header__slide">
                    <div class="header__content">
                        <h1 class="header__title">{{__('app.header_title')}}</h1>
                        <p class="header__text">{{ __('app.header_text') }}</p>
                        <button class="btn">{{ __('app.news_button_one') }}</button>
                    </div>
                    <img class="header__img" src="/app/images/header-img.webp" alt="header img">
                </div>
                <div class="header__slide">
                    <div class="header__content">
                        <h1 class="header__title">{{__('app.header_title')}}</h1>
                        <p class="header__text">{{ __('app.header_text') }}</p>
                        <button class="btn">{{ __('app.news_button_one') }}</button>
                    </div>
                    <img class="header__img" src="/app/images/header-img.webp" alt="header img">
                </div>
                <div class="header__slide">
                    <div class="header__content">
                        <h1 class="header__title">{{__('app.header_title')}}</h1>
                        <p class="header__text">{{ __('app.header_text') }}</p>
                        <button class="btn">{{ __('app.news_button_one') }}</button>
                    </div>
                    <img class="header__img" src="/app/images/header-img.webp" alt="header img">
                </div>
            @endif
        </div>

        <div class="header-dots">
            <div class="header-dots__item"></div>
            <div class="header-dots__item active"></div>
            <div class="header-dots__item"></div>
        </div>
    </div>
</header>

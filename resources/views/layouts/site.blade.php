<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('app/images/logo.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('app/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('app/css/main.min.css') }}" />
    <title>{{ strip_tags($settings['site_title']['name']??"MEDOL") }}</title>
</head>
<body>

<aside class="sidebar">
    <div class="sidebar__inner">
        <img class="sidebar__close" src="/app/images/x-btn.webp" alt="x btn">

        <div class="header__item">
            <a href="{{ $settings['site_location']['link']??"" }}" class="header__item">
                <img class="header__icon" src="/app/images/location.svg" alt="header icon">
                <div class="header__info">{!! strip_tags(($settings['site_location']['name']??"")) !!}</div>
            </a>
        </div>

        <div class="header__item">
            <img class="header__icon" src="/app/images/phone.svg" alt="header icon">
            <div class="header__info">
                <a class="header__phone" href="{{ $settings['site_phone_one']['link']??"#" }}">{{ $settings['site_phone_one']['name']??"" }}</a>
                <a class="header__phone" href="{{ $settings['site_phone_two']['link']??"#" }}">{{$settings['site_phone_two']['name']??""}}</a>
            </div>
        </div>

        <a class="header__item" href="#">
            <img class="header__icon" src="/app/images/search.svg" alt="header icon">
            {{ __('app.search') }}
        </a>
        <div class="header__icon header__icon_block">
            <a href="{{ $settings['facebook_text']['link']??"" }}" class="header__icon header__icon_block">
                <img src="/app/images/facebook.svg" alt="header icon">
                <span>{{ $settings['facebook_text']['name']??"" }}</span>
            </a>
        </div>
    </div>
</aside>

@include('sections.header')

<div class="container">
    <!-- === PRODUCTS === -->
    @include('sections.products')

    <!-- === SERVICE === -->

    @include('sections.services')

    <!-- === COMPANY === -->

    @include('sections.company')

    <!-- === NEWS === -->

    @include('sections.promotions-and-news')

    <!-- === PARTNER === -->
    @include('sections.partner')





</div>
<!-- === FOOTER === -->
@include('sections.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/app/js/libs.min.js') }}"></script>
<script src="{{ asset('/app/js/script.js') }}"></script>
</body>
</html>

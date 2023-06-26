<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('app/images/logo.webp') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('app/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('app/css/main.min.css') }}" />
    <title>MEDOL - Medical Online Services</title>
</head>
<body>

<aside class="sidebar">
    <div class="sidebar__inner">
        <img class="sidebar__close" src="/app/images/x-btn.webp" alt="x btn">

        <div class="header__item">
            <img class="header__icon" src="/app/images/location.svg" alt="header icon">
            <div class="header__info">г.Ташкент, Чиланзар <br> 10 квартал, дом 3/1</div>
        </div>

        <div class="header__item">
            <img class="header__icon" src="/app/images/phone.svg" alt="header icon">
            <div class="header__info">
                <a class="header__phone" href="tel:+998712766253">+998 71 276-62-53</a>
                <a class="header__phone" href="tel:+998712766254">+998 71 276-62-54</a>
            </div>
        </div>

        <a class="header__item" href="#">
            <img class="header__icon" src="/app/images/search.svg" alt="header icon">
            Search
        </a>
        <div class="header__icon header__icon_block">
            <img src="/app/images/facebook.svg" alt="header icon">
            <span>Мы на Facebook</span>
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

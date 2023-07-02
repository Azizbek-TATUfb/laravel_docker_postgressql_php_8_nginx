<?php
use Illuminate\Support\Facades\App;
$languages = config('global.languages');
$currentLangLabel = $languages[App::getLocale()];
unset($languages[App::getLocale()]);
?>
<div class="header-dropdown">
    <div class="header-dropdown__active">
        <img class="header-icon" src="/app/images/languages/{{ App::getLocale() }}.webp" alt="flag">
        <span>{{ $currentLangLabel }}</span>
    </div>
    <ul class="header-dropdown__list">
        @foreach($languages as $key => $value)
            <a href="/{{ $key }}">
                <li class="header-dropdown__item">
                    <img class="header-icon" src="/app/images/languages/{{ $key }}.webp" alt="flag">
                    <span>{{ $value }}</span>
                </li>
            </a>
        @endforeach
    </ul>
    <img class="header-dropdown__arrow" src="/app/images/arrow-down.svg" alt="arrow">

</div>

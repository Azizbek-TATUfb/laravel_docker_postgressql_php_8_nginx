<?php
?>

<section class="company" id="company">
    <h1 class="title" data-aos-offset="200" data-aos="flip-up">{{ __('app.about-company') }}</h1>

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
            @if(!empty($about))
                @php $about=$about[0]; @endphp
            <img class="company__content-logo" src="{{ $about['path']??"/app/images/logo.webp" }}" alt="logo">
            <p class="company__text text">{{ $about['excerpt'] }}</p>
            <button class="btn">{{__('app.about_button_more')}}</button>
            @endif
        </div>
    </div>


</section>

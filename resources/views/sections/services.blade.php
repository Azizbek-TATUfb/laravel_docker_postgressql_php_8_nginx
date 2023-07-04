<?php
?>

<section class="service" id="services">
    <h1 class="title" data-aos-offset="200" data-aos="flip-up">{{ __('app.services') }}</h1>

    <div class="service__inner">
        @if(!empty($services))
            @foreach($services as $service)
                <div class="service__card" data-aos-duration="1000" data-aos-offset="100" data-aos="fade-left">
                    <div class="service__img">
                        <img src="{{ $service['path'] }}" alt="service">
                    </div>

                    <div class="service__info">
                        <h3 class="service__title">{{ $service['title'] }}</h3>
                        <p class="service__text text">{{ Str::of($service['excerpt'])->limit(250, ' (...)') }}</p>
                        <button class="btn service__btn">{{ __('app.news_button_one') }}</button>
                    </div>

                </div>
            @endforeach
        @endif

    </div>
</section>

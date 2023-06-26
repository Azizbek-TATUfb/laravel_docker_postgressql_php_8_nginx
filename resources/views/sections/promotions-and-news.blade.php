<?php
use Illuminate\Support\Facades\App;
?>
<section class="news" id="promotions-and-news">
    <h1 class="title" data-aos-offset="200" data-aos="flip-up">{{ __('app.NEWS') }}</h1>
    <main class="news__slider">
        @if(!empty($news))
            @foreach($news as $item)
                <div class="news__item" data-aos-offset="100" data-aos="flip-left">
                    <img class="news__img" src="{{ $item['path']??'' }}" alt="news img">
                    <h3 class="news__title">{{ $item['title'] }}</h3>
                    <div class="news__date">{{ date('d.m.Y', strtotime($item['date'])) }}</div>
                    <p class="news__text">
                       {{ Str::of($item['excerpt'])->limit(250, ' (...)') }}
                    </p>
                    <button class="news__btn btn">{{ __('app.news_button_one') }}</button>
                </div>
            @endforeach
        @endif
    </main>

    <div class="news__links">
        <a class="link" href="#">{{ @trans('app.view-all-news') }} </a>
    </div>
</section>

<?php
?>

<section class="partner" id="pa">
    <h1 class="title" data-aos-offset="200" data-aos="flip-up">{{ __('app.PARTNERS') }}</h1>

    <div class="partner__slider">
        @if(!empty($partners))
            <div class="partner__item">
            @foreach($partners as $partner)
                <a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{ $partner['link'] }}"><img src="{{ $partner['path'] }}" alt="partner img {{ $partner['name'] }}"></a>
                @if($loop->iteration != 0 and $loop->iteration%8==0)
            </div>
            <div class="partner__item">
                @endif
            @endforeach
            </div>
        @endif

    </div>

</section>

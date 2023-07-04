<?php
?>

<section class="products" id="products">
    <h1 class="title" data-aos-offset="200" data-aos="flip-up">{{ __('app.products') }}</h1>
    <main class="products__inner">
       @if(!empty($products))
           @foreach($products as $product)
                <div class="products__item" data-aos-offset="100" data-aos="zoom-out">
                    <img class="products__img" src="{{ $product['path'] }}" alt="products img">
                    <h3 class="products__title">{{$product['title']}}</h3>
                    <button class="btn">{{ __('app.more') }}</button>
                </div>
           @endforeach
       @endif

    </main>

    <a class="link" href="#">{{ __('app.product-view-all') }}</a>
</section>

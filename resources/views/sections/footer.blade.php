<?php
?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__start">
                <div class="footer-contact">
                    <h3 class="footer__title">{{ __('app.Contact') }}</h3>
                    <div class="footer-contact__box">
                        <div class="footer-contact__item">
                            <a href="{{ $settings['site_footer_location']['link']??"#" }}" class="header__item header__location">
                                <img class="footer__icon" src="/app/images/location.svg" alt="footer icon">
                                <div class="footer__infos">{!! ($settings['site_footer_location']['name']??"") !!}</div>
                            </a>
                        </div>
                        <div class="footer-contact__item">
                            <img class="footer__icon" src="/app/images/message.svg" alt="footer icon">
                            <a class="footer__infos" href="{{ $settings['site_email']['link']??"#" }}">{{ $settings['site_email']['link']??"#" }}</a>
                        </div>
                    </div>
                    <div class="footer-contact__box">
                        <div class="footer-contact__phone">
                            <img class="footer__icon" src="/app/images/phone.svg" alt="header icon">
                            <div class="footer__infos">
                                <a class="footer__phone" href="{{ $settings['site_phone_one']['link']??"#" }}">{{ $settings['site_phone_one']['name']??"" }}</a>
                                <a class="footer__phone" href="{{ $settings['site_phone_two']['link']??"#" }}">{{$settings['site_phone_two']['name']??""}}</a>
                            </div>
                        </div>
                        <button class="btn">@lang('app.submit-appeal')</button>
                    </div>
                </div>
                <div class="footer__info">
                    <img src="/app/images/logo.webp" alt="footer logo">
                    <p class="text">{{ $settings['footer_text']['name']??"" }}</p>
                </div>
            </div>
            <div class="footer__end">
                <div class="footer__end">
                    <div class="footer__item">
                        <h3 class="footer__title">@lang('app.about-company')</h3>
                        <ul class="footer__list">
                            <li><a class="footer__link" href="#">@lang('app.story')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.partners')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.vacancy')</a></li>
                        </ul>
                    </div>

                    <div class="footer__item">
                        <h3 class="footer__title">@lang('app.products')</h3>
                        <ul class="footer__list">
                            <li><a class="footer__link" href="#">@lang('app.endovascular-surgery')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.arrhythmology')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.cardiac-surgery')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.laboratory-diagnostics')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.surgery')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.endourology')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.anesthesiology-and-resuscitation')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.diabetes')</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h3 class="footer__title">@lang('app.services')</h3>
                        <ul class="footer__list">
                            <li><a class="footer__link" href="#">@lang('app.service')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.registrations')</a></li>
                            <li><a class="footer__link" href="#">@lang('app.logistics-services')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <span>© 2021 ООО «Medical Online Services»</span>
            <span>@lang('app.design-done') <a href="mailto:damingues92@gmail.com">damingues92@gmail.com</a></span>
        </div>
    </div>
</footer>

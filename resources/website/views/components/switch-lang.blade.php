<a class="lang-item {{ app()->getLocale() === 'km' ? 'selected' : '' }}"><img src="{{ asset('assets/images/flag/cambodia.png') }}"
            alt="" />@lang('website.flag.khmer') <i class="fa-solid fa-angle-down"></i></a>
<a class="lang-item {{ app()->getLocale() === 'en' ? 'selected' : '' }}"><img src="{{ asset('assets/images/flag/english.png') }}"
            alt="" />@lang('website.flag.english') <i class="fa-solid fa-angle-down"></i></a>
<ul class="sub-menu">
    <li @class(['order-first'=> !!$isLocaleEn])><a href="{{ route('website-switch-lang',
          config('dummy.locale.en')) }}"><img src="{{ asset('assets/images/flag/english.png') }}"
                      alt="" />@lang('website.flag.english')</a></li>
      <li @class(['order-first'=> !!$isLocaleKm])><a href="{{ route('website-switch-lang',
           config('dummy.locale.km')) }}"><img src="{{ asset('assets/images/flag/cambodia.png') }}"
                        alt="" />@lang('website.flag.khmer')</a></li>
</ul>

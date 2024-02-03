<nav>
    <div class="wrapper container-lg max-w-screen-xl mx-auto">
        <div class="close block lg:hidden"><i class="fa-regular fa-rectangle-xmark"></i></div>
        <div class="bg"></div>
        <ul class="menu-bar">
            <li @class(['active'=> !!Request::is('/'), 'font-km' => !!$isLocaleKm])><a
                    href="{{ route('home') }}">@lang('website.menu.home.text')</a></li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.spokesperson.slug')), 'font-km' =>
                !!$isLocaleKm])><a
                    href="{{ route(config('dummy.menu.spokesperson.slug')) }}">@lang('website.menu.spokesperson.text')</a>
            </li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.press-breifing.slug')), 'font-km'=> !!$isLocaleKm])><a href="{{ route(config('dummy.menu.press-breifing.slug')) }}">@lang('website.menu.press-breifing.text')</a></li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.public-schedule.slug')), 'font-km'=> !!$isLocaleKm])><a href="{{ route(config('dummy.menu.public-schedule.slug')) }}">@lang('website.menu.public-schedule.text')</a></li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.press-release.slug')), 'font-km'=> !!$isLocaleKm])><a href="{{ route(config('dummy.menu.press-release.slug')) }}">@lang('website.menu.press-release.text')</a></li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.about-us.slug')), 'font-km'=> !!$isLocaleKm])><a href="{{ route(config('dummy.menu.about-us.slug')) }}">@lang('website.menu.about-us.text')</a></li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.achieve.slug')), 'font-km'=> !!$isLocaleKm])><a href="{{ route(config('dummy.menu.achieve.slug')) }}">@lang('website.menu.achieve.text')</a></li>
            <li @class(['active'=> !!Request::is(config('dummy.menu.contact-us.slug')), 'font-km'=> !!$isLocaleKm])><a href="{{ route(config('dummy.menu.contact-us.slug')) }}">@lang('website.menu.contact-us.text')</a></li>
        </ul>
    </div>

    <div class="search-wrapper lg:hidden">
        @include('website::components.search')
    </div>

    <i class="fa-solid fa-bars menu-toggle"></i>
</nav>


<script type="module">
    $(document).ready(function() {
                var openMenu = $('.menu-toggle');
                var closeMenu = $('.bg');
                var wrapper = $('.wrapper');
                var closeIcon = $('.close');
                var menu = $('.menu-bar');
                var body = $('body');
                var html = $('html');

                function open() {
                        menu.animate({
                                right: '0%'
                        }, 200);
                        wrapper.css('right', '0%');
                        closeIcon.animate({
                                opacity: 1
                        }, 250, function() {
                                closeIcon.css('display', 'block');
                        });
                        body.css('overflow', 'hidden');
                        html.css('overflow', 'hidden');
                }

                function close() {
                        menu.animate({
                                right: '-100%'
                        }, 200);
                        closeIcon.css('display', 'none');
                        wrapper.css('right', '-100%');
                        body.css('overflowY', 'unset');
                        html.css('overflow', 'unset');
                }

                closeMenu.click(close);
                closeIcon.click(close);
                openMenu.click(open);


                var scrollThreshold = 240;
                $(window).scroll(function() {
                        if (window.pageYOffset > scrollThreshold) {
                                $('nav').addClass('stciky');
                        } else {
                                $('nav').removeClass('stciky');
                        }
                });
        });
</script>

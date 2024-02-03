<header>
    <section class="top-wrapper">
        <div class="wrapper container-lg max-w-screen-xl mx-auto">
            <div class="left-side">
                <ul>
                    <li><a href="{{ route(config('dummy.menu.about-us.slug')) }}">@lang('website.menu.about.text')</a></li>
                    <li><a href="#">@lang('website.menu.fqa.text')</a></li>
                    <li><a href="{{ route(config('dummy.menu.contact-us.slug')) }}">@lang('website.menu.contact.text')</a></li>
                </ul>
            </div>
            <div class="right-side">
                <ul>
                    <li><a href="{{ route(config('dummy.menu.achieve.slug')) }}">@lang('website.menu.achieve.text')</a></li>
                    <li class="language">
                        @include('website::components.switch-lang')
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="header-wrapper">
        <div class="wrapper container-lg max-w-screen-xl mx-auto">
            <a class="logo" href=""><img src="{{ asset('assets/images/main/logo.png') }}" alt=""
                    oncontextmenu="return false;"></a>


            <div class="search-wrapper hidden lg:flex">
                @include('website::components.search')
            </div>
        </div>
    </section>
</header>

@include('website::components.navbar')

<script type="module">
    $(document).ready(function() {
        $('.selected').click(function() {
            $('.sub-menu').fadeToggle();
            $('.sub-menu').show().css({
                                    'display': 'flex',
                                    'flex-direction': 'column',
                                    });
            $('.lang-item i').toggleClass('rotate rotate-up');
        });

        $('.text').click(function() {
            $('.list-category').slideToggle();
            $('.text i').toggleClass('rotate rotate-up');
        });
    });
</script>

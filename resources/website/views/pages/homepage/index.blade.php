@extends('website::layouts.body')
@include('website::components.meta', [
'title' => '',
// 'title' => config('dummy.menu.home.text') . ' -',
])

@section('content')
<section class="slider-container">
    @include('website::pages.homepage.swiper')
</section>
<main>
    <section class="container-lg max-w-screen-xl mx-auto hover-border-wrapper">
        <div class="image-wrapper">
            <img src="{{ asset('assets/images/mission/01.png') }}" alt="" oncontextmenu="return false;">
        </div>
    </section>

    <section class="container-lg max-w-screen-xl mx-auto policies-wrapper">
        @include('website::pages.homepage.policies')
    </section>

    <section class="container-lg max-w-screen-xl mx-auto news-wrapper">
        @include('website::pages.homepage.news')
    </section>

    <section class="container-lg max-w-screen-xl mx-auto menu-wrapper">
        <div class="grid grid-cols-1 lg:grid-cols-2 wrapper">
            <div class="order-2">
                <a href="{{ route(config('dummy.menu.about-unit.slug')) }}">
                    <h1>{{ __('website.menu.about-unit.text') }}</h1>
                </a>
            </div>
            <div class="order-1">
                <a href="{{ route(config('dummy.menu.unit-activity.slug')) }}">
                    <h1>{{ __('website.menu.unit-activity.text') }}</h1>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection

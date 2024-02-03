@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.about-unit.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto about-unit-wrapper">
        <div class="grid grid-cols-6">
            <div class="col-span-4 about">
                <h1 class="header-style">{{ __('website.menu.about-unit.text') }}</h1>
                <div>
                    {!! $about_unit->description->{app()->getLocale()} ?? '' !!}
                </div>
            </div>
            <div></div>
        </div>
    </section>
</main>
@endsection

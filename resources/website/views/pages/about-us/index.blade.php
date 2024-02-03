@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.about-us.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto contact-wrapper">
        <h1 class="header-style">{{ __('website.menu.about-us.text') }}</h1>
        <div>

        </div>
    </section>
</main>

@endsection

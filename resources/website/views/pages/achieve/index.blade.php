@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.achieve.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto contact-wrapper">
        <h1 class="header-style">{{ __('website.menu.achieve.text') }}</h1>

        
    </section>
</main>

@endsection

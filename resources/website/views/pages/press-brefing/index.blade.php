@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.press-breifing.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto press-breifing-wrapper">
        <h1 class="header-style">{{ __('website.menu.press-breifing.text') }}</h1>
        <div class="grid grid-cols-4 gap-5">
        </div>
    </section>
</main>

@endsection

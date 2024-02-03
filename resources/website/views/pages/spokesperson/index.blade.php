@extends('website::layouts.body')
@include('website::components.meta', [
    'title' => '',
     'title' => config('dummy.menu.spokesperson.text') . ' -',
])

@section('content')
        <main>
            <section class="container-lg max-w-screen-xl mx-auto hover-border-wrapper">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/images/mission/01.png') }}" alt="" oncontextmenu="return false;">
                </div>
            </section>

        </main>
@endsection

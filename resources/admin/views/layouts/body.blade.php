@extends('admin::index')
@section('index')
<main class="w-full h-[100vh] overflow-y-hidden">
    @include('admin::layouts.header')
    <div class="flex">
        @include('admin::layouts.sidebar')

        <div class="w-full p-5">
            @yield('content')
        </div>
    </div>

</main>


@endsection

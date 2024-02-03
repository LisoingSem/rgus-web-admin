@extends('website::layouts.body')
@include('website::components.meta', [
    'title' => '',
    'title' => config('dummy.footer.pentagonal.text') . ' -',
])

@section('content')
        <main>
                <section class="container-lg max-w-screen-xl mx-auto pentagonal-wrapper">
                    <iframe class="w-full h-[100vh]" src="{{ asset($filePath) }}" type="application/pdf"></iframe>
                </section>
        </main>
@endsection

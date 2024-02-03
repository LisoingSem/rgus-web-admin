@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.press-release.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto press-release-wrapper">
        <h1 class="header-style">{{ __('website.menu.press-release.text') }}</h1>
        <div class="grid lg:grid-cols-2 content">
            <div class="item">
                <div class="date">
                    <span>31</span>
                    <span>Jan, 2024</span>
                </div>
                <div class="title">
                    <h2>Deputy Prime Minister SOK Chenda Sophea to take part in Third EU Indo-Pacific Ministerial Forum and ASEAN-EU Ministerial Meeting in</h2>
                    <a href="#"><div class="read-more"><span>Read More</span></div></a>
                </div>
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/news/document.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="date">
                    <span>31</span>
                    <span>Jan, 2024</span>
                </div>
                <div class="title">
                    <h2>Deputy Prime Minister SOK Chenda Sophea to take part in Third EU Indo-Pacific Ministerial Forum and ASEAN-EU Ministerial Meeting in</h2>
                    <a href="#"><div class="read-more"><span>Read More</span></div></a>
                </div>
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/news/document.jpg') }}" alt="">
                </div>
            </div><div class="item">
                <div class="date">
                    <span>31</span>
                    <span>Jan, 2024</span>
                </div>
                <div class="title">
                    <h2>Deputy Prime Minister SOK Chenda Sophea to take part in Third EU Indo-Pacific Ministerial Forum and ASEAN-EU Ministerial Meeting in</h2>
                    <a href="#"><div class="read-more"><span>Read More</span></div></a>
                </div>
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/news/document.jpg') }}" alt="">
                </div>
            </div><div class="item">
                <div class="date">
                    <span>31</span>
                    <span>Jan, 2024</span>
                </div>
                <div class="title">
                    <h2>Deputy Prime Minister SOK Chenda Sophea to take part in Third EU Indo-Pacific Ministerial Forum and ASEAN-EU Ministerial Meeting in</h2>
                    <a href="#"><div class="read-more"><span>Read More</span></div></a>
                </div>
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/news/document.jpg') }}" alt="">
                </div>
            </div><div class="item">
                <div class="date">
                    <span>31</span>
                    <span>Jan, 2024</span>
                </div>
                <div class="title">
                    <h2>Deputy Prime Minister SOK Chenda Sophea to take part in Third EU Indo-Pacific Ministerial Forum and ASEAN-EU Ministerial Meeting in</h2>
                    <a href="#"><div class="read-more"><span>Read More</span></div></a>
                </div>
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/news/01.jpeg') }}" alt="">
                </div>
            </div><div class="item">
                <div class="date">
                    <span>31</span>
                    <span>Jan, 2024</span>
                </div>
                <div class="title">
                    <h2>Deputy Prime Minister SOK Chenda Sophea to take part in Third EU Indo-Pacific Ministerial Forum and ASEAN-EU Ministerial Meeting in</h2>
                    <a href="#"><div class="read-more"><span>Read More</span></div></a>
                </div>
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/news/document.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

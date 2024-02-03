@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.details.text') . ' -',
])

@section('shared')

<meta property="og:title" content="{{ $details->title->{app()->getLocale()} ?? '' }}">
<meta property="og:description" content="{{ $details->description->{app()->getLocale()} ?? '' }}">
<meta property="og:image"
    content="{{ isset($details->image) ? $details->image :  'https://police.gov.kh/assets/img/logo_polic.png' }}">
<meta property="og:url" content="URL of the Webpage">
@endsection

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto details-wrapper">
        <div class="grid grid-cols-3 gap-5">
            <div class="col-span-2">
                <div class="details">
                    <div class="header">
                        <h2>{{ $details->title->{app()->getLocale()} ?? '' }}</h2>
                        <div class="options">
                            <div class="alerts">
                                <span>
                                    <i class="fa-regular fa-clock"></i>
                                    {{ translateDate($details->date->{app()->getLocale()} ?? '') }}
                                </span>
                                <span>
                                    @lang('website.articles-by') :
                                    {{ isset($details->article_by) ? $details->article_by : '' }}
                                </span>
                            </div>

                            <div class="share">
                                {{--https://web.facebook.com/sharer/sharer.php?u={{ $url }}--}}
                                <a href="#">
                                    <div class="item">
                                        <img src="{{ asset('assets/images/social/facebook.png') }}" alt="">
                                        <span>@lang('website.social.facebook')</span>
                                    </div>
                                </a>
                                {{--https://t.me/share/url?url={{ $url }}&text={{ $details->title->km ?? '' }}--}}
                                <a href="#">
                                    <div class="item">
                                        <img src="{{ asset('assets/images/social/telegram.png') }}" alt="">
                                        <span>@lang('website.social.telegram')</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="item">
                                        <img src="{{ asset('assets/images/social/instagram.png') }}" alt="">
                                        <span>@lang('website.social.instagram')</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="description">
                        {!! $details->description->{app()->getLocale()} ?? '' !!}
                    </div>


                </div>


                <div class="related-wrapper">
                    <div class="header">
                        <h2>@lang('website.related')</h2>
                    </div>

                    <div class="grid grid-cols-3 content">
                        @for ($i = 0; $i < 6; $i++) <div class="item">
                            <a href="#">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/news/07.jpeg') }}" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <p>
                                    កាលពីថ្ងៃទី ៣០ ខែមិថុនា ឆ្នាំ ២០១៨ ប៉ុន្មានសប្តាហ៍មុនការបោះឆ្នោតសភា លោក ហ៊ុន សែន
                                    បានតែងតាំងកូនប្រុសច្បងទី២ គឺលោក ហ៊ុន
                                </p>
                            </a>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="event-wrapper">
            <div class="header">
                <h2>@lang('website.recent-event')</h2>
            </div>
            <div class="content">

                @foreach ($articles as $key => $item)
                @if($key < 6) <div class="item flex">
                    <div class="img">
                        <a href="#">
                            <img src="{{ asset('assets/images/news/document.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="title">
                        <a href="#">
                            <p>
                                Announcement of the Royal Government Spokesperson`s Unit to Hold a Press Conference on
                                «Progress and Continuation of Kampong Chhnang Provincial Administration» and «COVID 19
                                Pneumonia Update»
                            </p>
                        </a>
                        <span>
                            <i class="fa-regular fa-clock"></i>
                            {{ $details->date->locale(app()->getLocale())->diffForHumans(); }}
                        </span>
                    </div>
            </div>
            @endif
            @endforeach


        </div>
        </div>
        </div>
    </section>
</main>
@endsection

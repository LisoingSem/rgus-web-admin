@extends('website::layouts.body')
@include('website::components.meta', [
'title' => '',
'title' => config('dummy.footer.pm.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto hover-border-wrapper">
        <div>
            <img class="" src="{{ asset($image) }}" alt="">
        </div>
    </section>

    <section class="container-lg max-w-screen-xl mx-auto bio-wrapper">
        <div class="grid lg:grid-cols-4 grid-cols-1 lg:gap-10">
            <div class="lg:col-span-3">
                <section class="biography">
                    <div class="header">
                        <h2>{{ $biography->header->{app()->getLocale()} ?? '' }}</h2>
                    </div>
                    <div class="description">
                        {!! $biography->description->{app()->getLocale()} ?? '' !!}
                    </div>
                </section>

                <section class="speech-wrapper">
                    <div class="header">
                        <h2>@lang('website.recent-speech')</h2>
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
                </section>
            </div>
            <div class="social-media">
                <div class="header">
                    <h3>
                        {{ __('website.social.title') }}
                    </h3>
                </div>
                <div class="social">
                    @foreach ($socials as $item)
                    <a href="{{ $item->link }}" target="_blank">
                        <div class="item">
                            <img src="{{ asset($item->image) }}" alt="">
                            <span>{{ $item->name->{app()->getLocale()} ?? '' }}</span>
                        </div>
                    </a>
                    @endforeach

                    {{-- <a href="https://www.facebook.com/Dr.Hunmanetofcambodia" target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/facebook.png') }}" alt="">
                            <span>facebook</span>
                        </div>
                    </a>
                    <a href="https://twitter.com/Dr_Hunmanet_PM?fbclid=IwAR07piMFVRL38Cc20Ap6aDIYqsfC1MmzMoxpNtKt-VfSgWuUJ_ORFAObYl0"
                        target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/twitter.png') }}" alt="">
                            <span>twitter</span>
                        </div>
                    </a>
                    <a href="https://www.youtube.com/@Dr.Hunmanetofcambodia" target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/youtube.png') }}" alt="">
                            <span>youtube</span>
                        </div>
                    </a>
                    <a href="https://www.instagram.com/dr.hunmanetofcambodia/?fbclid=IwAR3hioHlFAVslkqaldGyTKL_aIcLsxpxTe9r22EGyw04lHonccUUw7CZAvE"
                        target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/instagram.png') }}" alt="">
                            <span>instagram</span>
                        </div>
                    </a>
                    <a href="http://www.hunmanet.kh/?fbclid=IwAR1Ykgh9nKG5a3LfCYW6PNhBPwpc8SzKG8NcVg24nAfN0fVBJrBYvhrukII"
                        target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/website.png') }}" alt="">
                            <span>website</span>
                        </div>
                    </a>
                    <a href="https://t.me/Dr_Hunmanetofcambodia?fbclid=IwAR2XoXxybfkG9hyOW7Cjt_JFdWI1Zq2tRL7m3QuHopp8FzuTpd_r3wbgg5E"
                        target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/telegram.png') }}" alt="">
                            <span>telegram</span>
                        </div>
                    </a>
                    <a href="https://www.tiktok.com/@dr.hunmanetofcambodia?fbclid=IwAR2XoXxybfkG9hyOW7Cjt_JFdWI1Zq2tRL7m3QuHopp8FzuTpd_r3wbgg5E"
                        target="_blank">
                        <div class="item">
                            <img src="{{ asset('assets/images/social/tiktok.png') }}" alt="">
                            <span>tiktok</span>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <section>

    </section>
</main>
@endsection

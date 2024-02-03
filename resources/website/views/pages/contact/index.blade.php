@extends('website::layouts.body')
@include('website::components.meta', [
'title' => config('dummy.menu.contact-us.text') . ' -',
])

@section('content')
<main>
    <section class="container-lg max-w-screen-xl mx-auto contact-wrapper">
        <h1 class="header-style">{{ __('website.menu.contact-us.text') }}</h1>
        <div>

            <div class="info">
                <div class="item">
                    <i class="fa-solid fa-location-crosshairs"></i>
                    <span>អគារមិត្តភាព , 38 មហាវិថី សហពន្ធ័រុស្ស៊ី (110), រាជធានីភ្នំពេញ, ព្រះរាជាណាចក្រកម្ពុជា</span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-square-phone"></i>
                    <span>023 212 409</span>
                </div>
                <div class="item">
                    <i class="fa-solid fa-globe"></i>
                    <a href="https:\\www.rgsu.gov.kh"><span>www.rgsu.gov.kh</span></a>
                </div>
            </div>

            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84306.09543980457!2d104.97072061100282!3d11.536367352407181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095a65c37d9ec9%3A0xc780b4a57542b1d3!2sChoeung%20Ek%20Genocidal%20Center!5e0!3m2!1sen!2skh!4v1706770193923!5m2!1sen!2skh" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>

@endsection

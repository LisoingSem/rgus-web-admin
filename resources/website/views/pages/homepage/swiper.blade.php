<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{{ asset('assets/images/slide/mission.jpg') }}" alt="" oncontextmenu="return false;"></div>
        <div class="swiper-slide"><img src="{{ asset('assets/images/slide/festival.jpg') }}" alt="" oncontextmenu="return false;"></div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<script type="module">
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

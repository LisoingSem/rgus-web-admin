<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon_io/site.webmanifest') }}">

    @yield('meta')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        @vite(['resources/website/sass/app.scss', 'resources/website/js/app.js' ]) </head>

<body>
    @yield('body')

    <button id="back-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <script type="module">
        $(document).ready(function() {
                        var btnBackTop = $('#back-top');
                        var lastScrollTop = 0;

                        $(window).scroll(function() {
                                var scrollTop = $(this).scrollTop();

                                if (scrollTop > lastScrollTop) {
                                        btnBackTop.fadeIn();
                                } else {
                                        btnBackTop.fadeOut();
                                }

                                lastScrollTop = scrollTop;
                        });

                        btnBackTop.click(function() {
                                $('html, body').animate({
                                        scrollTop: 0
                                }, 10);
                        });

                        $(document).ready(function() {
                                $("img").attr("oncontextmenu", "return false;");
                        });
                });

                var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
                if (isSafari) {
                        document.body.classList.add('safari');
                }
    </script>
    @vite(['resources/website/js/body.js'])
</body>

</html>

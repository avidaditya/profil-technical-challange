<!DOCTYPE html>
<html ng-app="myApp">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1P0L6X5NEC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-1P0L6X5NEC");
    </script>
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://gotoimpact.matomo.cloud/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = 'https://cdn.matomo.cloud/gotoimpact.matomo.cloud/matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    {{-- Tailwind Vite Initialize --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon/favicon-16x16.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('frontend/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('frontend/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/images/favicon/site.webmanifest') }}">
    {{-- end of favicon --}}

    {{-- SEO --}}
    <meta name="description" content="@yield('seo_description')">
    <!-- PER HALAMAN -->
    <meta name="abstract" content="">
    <meta name="keywords" content="@yield('seo_keywords')">
    <meta name="rating" content="General">

    <meta property="og:image" content="@yield('seo_image')">
    <!-- Web page thumbnail -->
    <meta property="og:site_name" content="{{ env('APP_NAME') }}"> <!-- Web site title -->
    <meta property="og:title" content="@yield('seo_title')"> <!-- Web page title PER HALAMAN-->
    <meta property="og:description" content="@yield('seo_description')">
    <!-- Web page description PER HALAMAN-->
    <meta property="og:url" content="{{ url()->full() }}"> <!-- Url to this web page SYSTEM GENERATED-->
    <meta property="og:type" content="website" />
    {{-- end of SEO --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/timeline.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/vertical-timeline.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/mobilemenu.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/index.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- <script src="https://unpkg.com/@phosphor-icons/web"></script> --}}
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('vendor/counterjs/jquery.easing.js') }}"></script>
    <script src="{{ asset('vendor/counterjs/counter.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom-frontend.js') }}"></script>
    <script src="{{ asset('frontend/js/verical-timeline.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="{{ asset('frontend/js/main.module.js') }}"></script>
    <script src="{{ asset('frontend/js/main.controller.js') }}"></script>
    <title>Profile Website</title>

    {!! htmlScriptTagJsApi() !!}
</head>

<body class="text-gray-800 antialiased" ng-cloak ng-controller="mainController" ng-init="init()">
    @php
        $menuItems = ['Beranda', 'Sumbang Idemu', 'Pertanyaan', 'Masuk/Daftar'];
        $loklist = ['Belitung', 'Lombok Tengah', 'Magelang', 'Malang'];
    @endphp

    @include('frontend.components.stickynav', ['menuItems' => $menuItems, 'loklist' => $loklist])

    @includeWhen(request()->route()->getName() === 'landing', 'frontend.components.homenav', [
        'menuItems' => $menuItems,
    ])

    @includeWhen(request()->route()->getName() !== 'landing', 'frontend.components.othernav', [
        'menuItems' => $menuItems,
        'loklist' => $loklist,
    ])

    @yield('content')

    @include('frontend.components.footer')

    {{-- @include('frontend.components.modal') --}}
    @includeWhen(request()->route()->getName() === 'lokasi', 'frontend.components.modal', ['slug' => $slug])

    @includeWhen(request()->route()->getName() !== 'lokasi', 'frontend.components.modal')
</body>
<svg style="display: none">
    <symbol id="arrow">
        <polyline points="7 10,12 15,17 10" fill="none" stroke="currentcolor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" />
    </symbol>
</svg>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@include('sweetalert::alert')
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
<script>
    // Get the navbar element
    const navbar = document.getElementById('stickynav');
    // Get the offset position where you want it to become sticky (e.g., 100 pixels)
    const stickyThreshold = 200;
    const zeroThreshold = 100;

    // Function to handle scroll events
    function handleScroll() {
        if (window.pageYOffset >= stickyThreshold) {
            navbar.style.opacity = '1';
        } else {
            navbar.style.opacity = '0';
        }
    }

    function zeroScroll() {
        if (window.pageYOffset >= zeroThreshold) {
            navbar.style.display = 'flex';
        } else {
            navbar.style.display = 'none';
        }
    }

    // Attach the scroll event listener
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('scroll', zeroScroll);
</script>
{{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
<script>
    // AOS.init();
</script>

{{-- <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('idea_submit').addEventListener('click', function() {
            _paq.push(['trackEvent', 'Conversion', 'Kirim Ide', 'Ide', 1]);
            gtag('event', 'Kirim Ide');
        });
    });
</script> --}}

{{-- <script>
    // Create a MutationObserver
    const observer = new MutationObserver((mutationsList, observer) => {
        console.log('Mutation Running', mutationsList);
        for (const mutation of mutationsList) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                // Check if the "thankyou-modal" element's display property changed
                const thankyouModal = document.getElementById('thankyou-modal');

                if (thankyouModal && thankyouModal.style.display === 'flex') {

                    console.log('tracking berhasil')

                    _paq.push(['trackEvent', 'Conversion', 'Kirim Ide', 'Ide', 1]);
                    gtag('event', 'Kirim Ide');

                    // break; // Stop observing once the change is detected
                }
            }
        }
    });

    // Start observing changes in the entire document
    observer.observe(document, { attributes: true, subtree: true });
</script> --}}

<script>
    (function() {
        var burger = document.querySelector('.burger-container'),
            header = document.querySelector('.header');
        if (burger) {
            burger.onclick = function() {
                header.classList.toggle('menu-opened');
            }
        }
    }());
</script>
<script>
    (function() {
        var burger = document.querySelector('.anim-ctr'),
            header = document.querySelector('.anim-btn');

        if (burger) {
            burger.onclick = function() {
                header.classList.toggle('menu-opened');
            }
        }
    }());
</script>
<script>
    $(document).ready(function() {
        $('#register-form-modal #occupation').on('change', function(e) {
            const value = e.target.value;
            const occupationOther = $('#register-form-modal #occupation_other');
            if (value === 'Lainnya') {
                occupationOther.show();
                occupationOther.attr('required', true);
            } else {
                occupationOther.hide();
                occupationOther.removeAttr('required');
            }
        });
        $('#complete-data-modal #occupation_2').on('change', function(e) {
            const value = e.target.value;
            const occupationOther = $('#complete-data-modal #occupation_other_2');
            if (value === 'Lainnya') {
                occupationOther.show();
                occupationOther.attr('required', true);
            } else {
                occupationOther.hide();
                occupationOther.removeAttr('required');
            }
        });
    })
</script>
<script>
    $(document).ready(function() {
        $('.ckcontent ul').addClass('list-disc ps-4');
    });
</script>
@yield('js')
@include('frontend.components.modal-handler')

</html>

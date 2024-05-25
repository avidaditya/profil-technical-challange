@extends('frontend.components.main')

@section('seo_title', @$seo['title'])
@section('seo_description', @$seo['description'])
@section('seo_keywords', @$seo['keywords'])
@section('seo_image', @$seo['image'])

@section('content')
    @php
        $slug = 'test';
    @endphp
    <main>
        {{-- main banner --}}
        <div class="relative pt-16 pb-12 flex content-center items-center justify-center mt-4 ml-2 mr-2 md:mr-0 md:ml-0"
            style="min-height: 75vh;">
            <div class="container absolute top-0 w-full h-full bg-center bg-cover rounded-3xl"
                style='background-image: url({{ ImageService::getImageUrl(@$singleContent['banner']['img']) }}); background-size: cover;'>
                <span id="blackOverlay" class="w-full h-full absolute bg-black rounded-3xl"></span>
            </div>
            <div class="container relative mx-auto flex flex-col justify-end h-auto" style="min-height: 60vh;">
                <div class="items-start flex flex-wrap">
                    <div class="w-full lg:w-12/12 px-4 md:ml-10 sm:ml-7 flex">
                        <div class="md:pr-12 sm:pr-6">
                            <h1
                                class="text-white font-semibold text-2xl lg:text-5xl md:text-5xl tracking-wide lg:leading-tight text-center lg:text-start md:text-start">
                                {{ @$singleContent['banner']['title'] }}
                            </h1>
                            <div class="mt-6 sm:text-center md:text-left text-center">
                                <a href="{{ @$singleContent['banner']['btn']['link'] }}"
                                    class="bg-white text-black active:bg-gray-700 text-lg font-bold px-6 py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 main-button"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    {{ @$singleContent['banner']['btn']['text'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end of main banner --}}

        {{-- Intro Section --}}
        <section class="pt-20" data-aos="fade-up">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-center text-center">
                    <div class="w-full lg:w-10/12 px-4">
                        <h2 class="text-2xl font-semibold leading-tight md:text-4xl">
                            {{ @$singleContent['intro']['title'] }}
                        </h2>
                        {{-- <div>
                            <video class="w-full rounded-3xl mt-6" controls>
                                <source src="{{ ImageService::getImageUrl(@$data['content_data']['content']['video']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div> --}}
                        <p class="text-base md:text-lg lg:text-lg leading-relaxed m-4 text-gray-600">
                            {{ @$singleContent['intro']['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of intro section --}}

        {{-- About Section --}}
        <section class="relative pt-20">
            <div class="container mx-auto px-2 md:px-4 lg:px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-6/12 ml-auto mr-auto px-3" data-aos="fade-right">
                        <iframe class="w-full aspect-video rounded-2xl" src="https://www.youtube.com/embed/xmQyhNrrANg"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                    </iframe>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4" data-aos="fade-left">
                        <div class="md:pr-12">
                            <h3
                                class="md:text-3xl lg:text-3xl text-2xl font-semibold md:pt-0 lg:pt-0 pt-6 text-center md:text-left lg:text-left">
                                {{-- {{ @$singleContent['about']['title'] }} --}}
                                Sumbang Ide lewat Open Ideas Challenge dan Dapatkan Hadiah Menarik!
                            </h3>
                            <div
                                class="mt-4 md:text-lg lg:text-lg text-base leading-relaxed text-gray-600 text-center md:text-left lg:text-left ckcontent">
                                {!! @$singleContent['about']['description'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of About Section --}}

        {{-- Steps Section --}}
        <section class="pt-0 md:pt-10 rounded-3xl mt-10 md:mt-10 pb-10 md:pb-10 px-4 md:px-0">
            <div class="container mx-auto px-4 w-full md:w-10/12 bg-gray-200 rounded-3xl py-10">
                <div class="flex flex-wrap justify-center text-center mb-2">
                    <div class="w-full lg:w-10/12 px-4">
                        <h2 class="text-2xl md:text-3xl font-semibold pb-6">Yang Perlu Kamu Lakukan</h2>
                    </div>
                </div>
                <ol class="items-center sm:flex mt-2 md:mt-2 w-full list-none">
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-purple-500 dark:bg-blue-900 sm:ring-2 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-user-circle-check text-3xl top-4 relative"></i>
                            </div>
                            {{-- <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">10 - 24 Mei 2024</h3> --}}
                            <time
                                class="block mb-2 mt-4 text-normal font-normal text-gray-700 dark:text-gray-500 px-6 leading-5">Daftar/ masuk ke akunmu</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-purple-500 dark:bg-blue-900 sm:ring-2 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-map-pin-line text-3xl top-4 relative"></i>
                            </div>
                            {{-- <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">10 - 31 Mei 2024</h3> --}}
                            <time
                                class="block mb-2 mt-4 text-normal font-normal text-gray-700 dark:text-gray-500 px-6 leading-5">Pelajari permasalahan di Belitung/ Lombok Tengah/ Magelang/ Malang</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-purple-500 dark:bg-blue-900 sm:ring-2 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-brain text-3xl top-4 relative"></i>
                            </div>
                            {{-- <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">1 - 15 Juni 2024</h3> --}}
                            <time
                                class="block mb-2 mt-4 text-normal font-normal text-gray-700 dark:text-gray-500 px-6 leading-5">Sumbang ide sederhana di kategori Open atau ide komprehensif di kategori Advanced </time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-purple-500 dark:bg-blue-900 sm:ring-2 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-thumbs-up text-3xl top-4 relative"></i>
                            </div>
                            {{-- <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">30 Juni 2024</h3> --}}
                            <time
                                class="block mb-2 mt-4 text-normal font-normal text-gray-700 dark:text-gray-500 px-6 leading-5">Berikan vote atau komentar untuk ide orang lain yang menurutmu menarik!</time>
                        </div>
                    </li>
                </ol>
            </div>
        </section>
        {{-- end of Steps Section --}}

        {{-- Counter Section --}}
        <section class="pt-10 pb-10 mx-4 md:mx-2 lg:mx-2 rounded-3xl">
            <div class="w-full mx-auto pt-32 pb-32 object-cover bg-alt-purple rounded-3xl bg-cover bg-no-repeat bg-center"
                style="background-image: url( {{ ImageService::getImageUrl(@$singleContent['counter']['img']) }} ); background-blend-mode: multiply; background-size: cover; background-position: center;">
                <div class="container mx-auto px-4 flex flex-wrap justify-center text-center">
                    <div class="w-full lg:w-7/12 px-4">
                        <h2 id="my-counter" class="tracking-wider text-4xl md:text-6xl font-semibold text-white"></h2>
                        <p class="text-2xl md:text-3xl leading-tight m-4 text-white">
                            {{ @$singleContent['counter']['text'] }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of Counter Section --}}

        {{-- About 2 Section --}}
        <section class="relative pt-10 pb-10">
            <div class="container mx-auto px-0 md:px-4 lg:px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-3" data-aos="fade-right">
                        <img class="max-w-full rounded-3xl md:h-96 lg:h-96 h-56 w-full object-cover"
                            src="{{ asset('frontend/images/img-08.jpg') }}" />
                    </div>
                    <div class="w-full md:w-6/12 ml-auto mr-auto px-4" data-aos="fade-left">
                        <div class="md:pr-12">
                            <h3
                                class="md:text-3xl lg:text-3xl text-2xl font-semibold md:pt-0 lg:pt-0 pt-6 text-center md:text-left lg:text-left">
                                Bagian dari Catalyst Changemakers Ecosystem</h3>
                            <p
                                class="mt-4 md:text-lg lg:text-lg text-base leading-relaxed text-gray-800 text-center md:text-left lg:text-left">
                                Melalui Open Ideas Challenge, <b>GoTo Impact Foundation</b> mengajak akademisi, mahasiswa,
                                aktivis, pengusaha muda, ataupun individu yang optimistis dan senang mengeksplorasi hal baru
                                terlepas dari apapun keahlian yang dimiliki, untuk mengumpulkan ribuan ide.
                            </p>
                            <div class="mt-6 sm:text-center md:text-left text-center relative align-bottom">
                                <a href="https://goto-impact.org/cce/" target="_blank"
                                    class="bg-def-green text-gray-900 active:bg-gray-700 text-lg font-bold px-auto py-3 rounded-full shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 sm:w-full md:px-6 w-full md:w-auto hover:scale-105"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    Kunjungi Situs CCE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of About 2 Section --}}

        {{-- Reward Section --}}
        <section class="relative pt-10 md:pt-16 pb-24">
            <div class="container mx-auto px-0 md:px-4 lg:px-4 flex flex-wrap">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-6/12 ml-auto mr-auto px-4 order-2 md:order-1 lg:order-1">
                        <div class="md:pr-12">
                            <h3 class="text-2xl md:text-3xl font-semibold text-center md:text-left lg:text-left">
                                {{ @$singleContent['reward']['title'] }}</h3>
                            <div
                                class="mt-4 text-base md:text-lg lg:text-lg leading-relaxed text-gray-600 text-left md:text-left lg:text-left ckcontent px-3 md:px-0">
                                {!! @$singleContent['reward']['description'] !!}
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-3 order-1 md:order-2 lg:order-2 pb-4 md:pb-0 lg:pb-0">
                        <img class="max-w-full rounded-3xl shadow-lg h-56 md:h-96 lg:h-96 w-full object-cover"
                            src="{{ ImageService::getImageUrl(@$singleContent['reward']['img']) }}" />
                    </div>
                </div>
            </div>
        </section>
        {{-- end of Reward Section --}}

        {{-- Ideas Category Section --}}
        <section class="pt-0 pb-10 md:pb-10 rounded-3xl">
            <div class="container mx-auto px-4">
                <div class="w-full md:w-10/12 ml-auto mr-auto px-4 order-2 md:order-1 lg:order-1">
                    <div class="md:pr-12">
                        <h3 class="text-2xl md:text-3xl font-semibold text-center">
                            Kamu Bisa Sumbang Ide lewat Dua Jalur</h3>
                        <p class="mt-4 text-base md:text-lg lg:text-lg leading-relaxed text-gray-600 text-center">
                            Pengumpulan ide terbagi menjadi dua kategori berdasarkan kelengkapan dan kompleksitas idemu
                        </p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row pt-10">
                    <div class="w-full md:w-12/12 lg:w-6/12 lg:mb-0 mb-12 px-2 md:px-4 flex-grow">
                        <div class="border-gray-800 border rounded-3xl p-8 h-full flex flex-col justify-between">
                            <div class="text-center md:text-left">
                                <span
                                    class= "border-2 border-gray-800 font-medium rounded-full text-lg p-3 h-12 w-10 relative pb-5 mb-6 top-0">
                                    <i class="ph ph-person text-3xl top-2 relative"></i>
                                </span>
                                <h5 class="text-xl font-bold mt-8">Kategori Open</h5>
                                <p class="mt-1 text-normal text-gray-800 font-semibold tracking-wide">
                                    Gagasan ataupun rekomendasi sederhana dalam bentuk teks 50-100 kata, dan bisa Kamu
                                    tambahkan link referensi</p>

                                <ul class="list-disc ps-4 text-left mt-2">
                                    <li>Tuliskan di kotak ide, apa ide Kamu untuk mengatasi masalah di kota ini, dan
                                        jelaskan mengapa menurut Kamu ide ini cocok untuk memecahkan masalah tersebut
                                        berdasarkan:
                                        <ol class="list-decimal ml-4 mt-1">
                                            <li class="mt-1">Kondisi lapangan (letak geografis, demografis, cuaca, dll)
                                            </li>
                                            <li class="mt-1">Kondisi sosial dan budaya penduduk (kearifan lokal, kondisi
                                                SES, budaya, dll)</li>
                                            <li class="mt-1">Potensi lokal yang ada (potensi alam, bisnis, lapangan
                                                pekerjaan, dll)</li>
                                        </ol>
                                    </li>

                                    <li class="mt-2">Kamu bisa tuliskan idemu yang berisikan:
                                        <ol class="list-decimal ml-4 mt-1">
                                            <li class="mt-1">Wawasan yang bersumber dari pemikiran atau pengalamanmu yang
                                                dapat memberikan perspektif baru dalam menyelesaikan permasalahan sosial,
                                                ekonomi, dan lingkungan</li>
                                            <li class="mt-1">Artikel dan literatur yang dapat memberikan pengetahuan baru
                                                untuk memecahkan masalah</li>
                                            <li class="mt-1">Individu atau organisasi yang perlu dilibatkan karena
                                                memiliki pengetahuan atau keahlian yang relevan dengan sektor permasalahan
                                                ataupun dengan lokasi Belitung, Magelang, Malang, dan Mandalika</li>
                                            <li class="mt-1">Teknologi, baik itu teknologi yang Kamu ciptakan sendiri
                                                atau teknologi lain yang pernah Kamu dengar atau gunakan, termasuk teknologi
                                                sumber terbuka (open source)</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-12/12 lg:w-6/12 lg:mb-0 mb-12 px-2 md:px-4 flex-grow">
                        <div class="border-gray-800 border rounded-3xl p-8 h-full flex flex-col justify-between">
                            <div class="text-center md:text-left">
                                <span
                                    class= "border-2 border-gray-800 font-medium rounded-full text-lg p-3 h-10 w-10 relative pb-5 mb-6 top-0">
                                    <i class="ph ph-building-office text-3xl top-2 relative"></i>
                                </span>
                                <h5 class="text-xl font-bold mt-8">Kategori Advanced</h5>
                                <p class="mt-1 text-normal text-gray-800 font-semibold tracking-wide">
                                    Gabungan beberapa ide dalam bentuk proposal atau makalah lengkap dengan format pdf
                                    berisikan maksimal 300-500 kata, serta visual pendukung dan link referensi</p>
                                <ul class="list-disc ps-4 text-left mt-2">
                                    <li>Tuliskan di kotak ide (50-100 kata), apa ide Kamu untuk mengatasi masalah di kota
                                        ini (bisa dalam bentuk wawasan dari pemikiran/ pengalaman, atau artikel dan
                                        literatur yang memberikan pengetahuan baru, atau teknologi ciptaan sendiri ataupun
                                        pihak lain), dan jelaskan mengapa menurut Kamu ide ini cocok untuk memecahkan
                                        masalah tersebut berdasarkan 3 hal berikut:
                                        <ol class="list-decimal ml-4 mt-1">
                                            <li class="mt-1">Kondisi lapangan (letak geografis, demografis, cuaca, dll)
                                            </li>
                                            <li class="mt-1">Kondisi sosial dan budaya penduduk (kearifan lokal, kondisi
                                                SES, budaya, dll)</li>
                                            <li class="mt-1">Potensi lokal yang ada (potensi alam, bisnis, lapangan
                                                pekerjaan, dll)</li>
                                        </ol>
                                    </li>

                                    <li class="mt-2">Tuliskan jawaban dari 3 pertanyaan berikut di dalam dokumen pdf mu:
                                        <ol class="list-decimal ml-4 mt-1">
                                            <li class="mt-1">Untuk mewujudkan ide tersebut dan mencapai dampak
                                                berkelanjutan, apa faktor pendukung apa yang Kamu pandang penting untuk
                                                dikembangkan (pengetahuan, kreativitas, keahlian, kolaborasi, dan
                                                kebijakan)? Bagaimana Kamu berencana untuk mengintegrasikan faktor-faktor
                                                tersebut ke dalam implementasi idemu? (min. 100 kata)</li>
                                            <li class="mt-1">Dampak positif apa yang mungkin terjadi jika ide tersebut
                                                diimplementasikan? Berapa perkiraan desa dan jumlah orang yang dapat
                                                merasakan dampak dari implementasi idemu? (min. 100 kata)</li>
                                            <li class="mt-1">Jelaskan hambatan/ tantangan yang mungkin terjadi dalam
                                                proses implementasi ide tersebut? (min. 100 kata)</li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Ideas Category --}}

        @if (count($juries) > 0)
            {{-- Jury Section --}}
            <section class="pt-20 pb-20 bg-gray-200 rounded-3xl hidden">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap justify-center text-center mb-8">
                        <div class="w-full lg:w-8/12 px-4">
                            <h2 class="text-2xl md:text-4xl font-semibold">{{ @$singleContent['juries']['title'] }}</h2>
                            {{-- <p class="text-lg leading-relaxed m-4 text-gray-600">
                                {{ @$singleContent['juries']['description'] }}
                            </p> --}}
                        </div>
                    </div>
                    <div id="jury-slider" class="flex flex-wrap">
                        @foreach ($juries as $item)
                            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-3 md:mb-12 px-4">
                                <div>
                                    <img alt="..." src="{{ ImageService::getImageUrl(@$item['img']) }}"
                                        class="shadow-lg rounded-3xl max-w-full mx-auto h-96 object-cover" />
                                    <div class="pt-3 text-center md:text-left">
                                        <h5 class="text-xl font-bold">{{ @$item['name'] }}</h5>
                                        <p class="mt-1 text-sm text-gray-800 font-semibold tracking-wide">
                                            {{ @$item['position'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- end of Jury section --}}
        @endif

        {{-- Penilaian Section --}}
        <section class="pt-20 pb-10 rounded-3xl">
            <div class="container mx-auto px-4">
                <div class="w-full md:w-10/12 ml-auto mr-auto px-4 order-2 md:order-1 lg:order-1">
                    <div class="md:pr-12">
                        <h3 class="text-2xl md:text-3xl font-semibold text-center">
                            Bagaimana Idemu Akan Dinilai dan Apa Hadiahnya?</h3>
                        {{-- <p class="mt-4 text-base md:text-lg lg:text-lg leading-relaxed text-gray-600 text-center">
                            Pengumpulan ide terbagi menjadi dua kategori berdasarkan kelengkapan dan kompleksitas idemu
                        </p> --}}
                    </div>
                </div>
                <div class="flex flex-col md:flex-row pt-10">
                    <div class="w-full md:w-12/12 lg:w-6/12 lg:mb-0 mb-12 px-2 md:px-4 flex-grow">
                        <div class="border-gray-800 border rounded-3xl p-8 h-full flex flex-col justify-between">
                            <div class="text-center md:text-left">
                                <span
                                    class= "border-2 border-gray-800 font-medium rounded-full text-lg p-3 h-12 w-10 relative pb-5 mb-6 top-0">
                                    <i class="ph ph-person text-3xl top-2 relative"></i>
                                </span>
                                <h5 class="text-xl font-bold mt-8">Kategori Open</h5>
                                {{-- <p class="mt-1 text-normal text-gray-800 font-semibold tracking-wide">
                                    Gagasan ataupun rekomendasi sederhana dalam bentuk teks 50-100 kata, mencakup pilihan berikut ini</p> --}}
                                <ul class="list-disc ps-4 text-left mt-2">
                                    <li>
                                        Idemu akan dinilai oleh publik melalui <i>voting</i> di platform ini
                                    </li>
                                    <li>
                                        Ide yang paling inspiratif, tepat guna, dan unik yang berkesempatan untuk
                                        memenangkan <i>voting</i>
                                    </li>
                                    <li>
                                        Pemilik ide boleh mengajak keluarga, teman, dan rekan untuk <i>voting</i>
                                    </li>
                                    <li>
                                        10 ide dengan <i>vote</i> terbanyak akan mendapatkan hadiah GoPay dan merchandise
                                        setiap minggu
                                    </li>
                                    <li>
                                        20 ide dengan <i>vote</i> terbanyak di setiap lokasi (5 ide pemenang di setiap
                                        lokasi) di sepanjang periode akan mendapatkan hadiah GoPay dengan total jutaan
                                        rupiah dan merchandise
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-12/12 lg:w-6/12 lg:mb-0 mb-12 px-2 md:px-4 flex-grow">
                        <div class="border-gray-800 border rounded-3xl p-8 h-full flex flex-col justify-between">
                            <div class="text-center md:text-left">
                                <span
                                    class= "border-2 border-gray-800 font-medium rounded-full text-lg p-3 h-12 w-10 relative pb-5 mb-6 top-0">
                                    <i class="ph ph-building-office text-3xl top-2 relative"></i>
                                </span>
                                <h5 class="text-xl font-bold mt-8">Kategori Advanced</h5>
                                {{-- <p class="mt-1 text-normal text-gray-800 font-semibold tracking-wide">
                                    Gabungan beberapa ide dalam bentuk proposal atau makalah lengkap dengan format pdf maksimal 500 kata, mencakup</p> --}}
                                <ul class="list-disc ps-4 text-left mt-2">
                                    <li>
                                        Akan dipilih 40 ide yang terdiri dari 10 ide dari setiap lokasi Belitung, Magelang, Malang, dan Lombok Tengah oleh tim GoTo Impact Foundation
                                    </li>
                                    <li>
                                        Juri akan memberikan penilaian terhadap 40 ide terpilih, berdasarkan kriteria: Kelengkapan ide, kebaruan dan keunikan ide, kemungkinan untuk diimplementasikan
                                    </li>
                                    <li>
                                        8 ide terbaik (2 ide terbaik dari setiap lokasi) akan dipilih untuk ditransformasi menjadi solusi di CCLab, dan akan diimplementasikan di lapangan melalui Proyek Implementasi Solusi
                                    </li>
                                    <li>
                                        8 orang yang menyumbangkan ide terpilih akan diterbangkan ke acara CCE Innovation Day di Jakarta bulan September 2024 untuk menampilkan idenya dan berkesempatan untuk mendapatkan mitra untuk mewujudkan ide tersebut
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Penilaian --}}

         {{-- Timeline Section --}}
         <section class="pt-0 md:pt-20 rounded-3xl pb-10 md:pb-10">
            <div class="container mx-auto px-4 w-full md:w-10/12">
                <div class="flex flex-wrap justify-center text-center mb-2">
                    <div class="w-full lg:w-10/12 px-4">
                        <h2 class="text-2xl md:text-3xl font-semibold">{{ @$singleContent['timelines']['title'] }}</h2>
                    </div>
                </div>
                <ol class="items-center sm:flex mt-6 md:mt-16 w-full list-none">
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-lightbulb-filament text-3xl top-4 relative"></i>
                            </div>
                            <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">10 - 24 Mei 2024</h3>
                            <time
                                class="block mb-2 mt-2 text-normal font-normal leading-none text-gray-700 dark:text-gray-500">Pengumpulan
                                ide</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-pencil-line text-3xl top-4 relative"></i>
                            </div>
                            <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">10 - 31 Mei 2024</h3>
                            <time
                                class="block mb-2 mt-2 text-normal font-normal leading-none text-gray-700 dark:text-gray-500">Publik
                                memilih dan memberi komentar</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-checks text-3xl top-4 relative"></i>
                            </div>
                            <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">1 - 15 Juni 2024
                            </h3>
                            <time
                                class="block mb-2 mt-2 text-normal font-normal leading-none text-gray-700 dark:text-gray-500">Pemilihan
                                pemenang hasil pilihan publik (kategori Open) dan penilaian oleh Juri (kategori
                                Advanced)</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0 w-full md:w-3/12 mx-auto flex flex-wrap text-center object-top">
                        <div class="mt-3 block items-center mx-auto">
                            <div
                                class="z-10 items-center bg-def-green rounded-full ring-0 ring-white dark:bg-blue-900 sm:ring-8 dark:ring-gray-900 shrink-0 relative mx-auto w-16 h-16">
                                <i class="ph ph-trophy text-3xl top-4 relative"></i>
                            </div>
                            <h3 class="text-normal font-semibold text-gray-900 dark:text-white mt-4">30 Juni 2024</h3>
                            <time
                                class="block mb-2 mt-2 text-normal font-normal leading-none text-gray-700 dark:text-gray-500">Pengumuman
                                ide terpilih</time>
                        </div>
                    </li>
                </ol>
            </div>
        </section>
        {{-- end of Timeline Section --}}

        <section class="pb-20 pt-10">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap w-full bg-def-purple rounded-3xl justify-between p-6 min-h-52">
                    <div class="w-full md:w-6/12">
                        <h2 class="text-2xl text-white lg:text-3xl font-normal md:font-semibold">Bantu selesaikan
                            permasalahan di
                            Belitung, Lombok Tengah, Magelang, dan Malang</h2>
                    </div>
                    <div class="w-full sm:w-12/12 md:w-4/12 lg:w-3/12 self-end mt-10 md:mt-0">
                        <a href="#lokasi"
                            class="flex justify-between self-center w-full p-1 ps-10 text-lg font-bold text-gray-900 rounded-full bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:bg-def-green hover:shadow-lg hover:scale-105 transition-all duration-300">
                            <span class="self-center w-full">
                                Sumbangkan Idemu
                            </span>
                            <span
                                class="self-end text-white border-2 border-def-green focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-3xl text-sm p-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <i class="ph ph-arrow-up text-def-green text-3xl"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function($) {
            var timelines = $('.cd-horizontal-timeline'),
                eventsMinDistance = 90;

            (timelines.length > 0) && initTimeline(timelines);

            function initTimeline(timelines) {
                timelines.each(function() {
                    var timeline = $(this),
                        timelineComponents = {};
                    //cache timeline components
                    timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
                    timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children(
                        '.events');
                    timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children(
                        '.filling-line');
                    timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
                    timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
                    timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
                    timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
                    timelineComponents['eventsContent'] = timeline.children('.events-content');

                    //assign a left postion to the single events along the timeline
                    setDatePosition(timelineComponents, eventsMinDistance);
                    //assign a width to the timeline
                    var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
                    //the timeline has been initialize - show it
                    timeline.addClass('loaded');

                    //detect click on the next arrow
                    timelineComponents['timelineNavigation'].on('click', '.next', function(event) {
                        event.preventDefault();
                        updateSlide(timelineComponents, timelineTotWidth, 'next');
                    });
                    //detect click on the prev arrow
                    timelineComponents['timelineNavigation'].on('click', '.prev', function(event) {
                        event.preventDefault();
                        updateSlide(timelineComponents, timelineTotWidth, 'prev');
                    });
                    //detect click on the a single event - show new event content
                    timelineComponents['eventsWrapper'].on('click', 'a', function(event) {
                        event.preventDefault();
                        timelineComponents['timelineEvents'].removeClass('selected');
                        $(this).addClass('selected');
                        updateOlderEvents($(this));
                        updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
                        updateVisibleContent($(this), timelineComponents['eventsContent']);
                    });

                    //on swipe, show next/prev event content
                    timelineComponents['eventsContent'].on('swipeleft', function() {
                        var mq = checkMQ();
                        (mq == 'mobile') && showNewContent(timelineComponents,
                            timelineTotWidth,
                            'next');
                    });
                    timelineComponents['eventsContent'].on('swiperight', function() {
                        var mq = checkMQ();
                        (mq == 'mobile') && showNewContent(timelineComponents,
                            timelineTotWidth,
                            'prev');
                    });

                    //keyboard navigation
                    $(document).keyup(function(event) {
                        if (event.which == '37' && elementInViewport(timeline.get(0))) {
                            showNewContent(timelineComponents, timelineTotWidth,
                                'prev');
                        } else if (event.which == '39' && elementInViewport(timeline
                                .get(0))) {
                            showNewContent(timelineComponents, timelineTotWidth,
                                'next');
                        }
                    });
                });
            }

            function updateSlide(timelineComponents, timelineTotWidth, string) {
                //retrieve translateX value of timelineComponents['eventsWrapper']
                var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
                    wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace(
                        'px', ''));
                //translate the timeline to the left('next')/right('prev')
                (string == 'next') ?
                translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance,
                    wrapperWidth - timelineTotWidth): translateTimeline(timelineComponents,
                    translateValue +
                    wrapperWidth - eventsMinDistance);
            }

            function showNewContent(timelineComponents, timelineTotWidth, string) {
                //go from one event to the next/previous one
                var visibleContent = timelineComponents['eventsContent'].find('.selected'),
                    newContent = (string == 'next') ? visibleContent.next() : visibleContent.prev();

                if (newContent.length > 0) { //if there's a next/prev event - show it
                    var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
                        newEvent = (string == 'next') ? selectedDate.parent('li').next('li').children(
                            'a') :
                        selectedDate.parent('li').prev('li').children('a');

                    updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
                    updateVisibleContent(newEvent, timelineComponents['eventsContent']);
                    newEvent.addClass('selected');
                    selectedDate.removeClass('selected');
                    updateOlderEvents(newEvent);
                    updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
                }
            }

            function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
                //translate timeline to the left/right according to the position of the selected event
                var eventStyle = window.getComputedStyle(event.get(0), null),
                    eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
                    timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace(
                        'px', '')),
                    timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace(
                        'px', ''));
                var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

                if ((string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string ==
                        'prev' &&
                        eventLeft < -timelineTranslate)) {
                    translateTimeline(timelineComponents, -eventLeft + timelineWidth / 2,
                        timelineWidth -
                        timelineTotWidth);
                }
            }

            function translateTimeline(timelineComponents, value, totWidth) {
                var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
                value = (value > 0) ? 0 : value; //only negative translate value
                value = (!(typeof totWidth === 'undefined') && value < totWidth) ? totWidth :
                    value; //do not translate more than timeline width
                setTransformValue(eventsWrapper, 'translateX', value + 'px');
                //update navigation arrows visibility
                (value == 0) ? timelineComponents['timelineNavigation'].find('.prev').addClass(
                        'inactive'):
                    timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
                (value == totWidth) ? timelineComponents['timelineNavigation'].find('.next').addClass(
                        'inactive'):
                    timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
            }

            function updateFilling(selectedEvent, filling, totWidth) {
                //change .filling-line length according to the selected event
                var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
                    eventLeft = eventStyle.getPropertyValue("left"),
                    eventWidth = eventStyle.getPropertyValue("width");
                eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', '')) /
                    2;
                var scaleValue = eventLeft / totWidth;
                setTransformValue(filling.get(0), 'scaleX', scaleValue);
            }

            function setDatePosition(timelineComponents, min) {
                let dist = 900 / (timelineComponents['timelineDates'].length + 1);
                for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
                    var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents[
                            'timelineDates'][i]),
                        distanceNorm = Math.round(distance / timelineComponents['eventsMinLapse']) + 2;
                    timelineComponents['timelineEvents'].eq(i).css('left', (i + 1) * dist + 'px');
                }
            }

            function setTimelineWidth(timelineComponents, width) {
                var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents[
                        'timelineDates'][
                        timelineComponents['timelineDates'].length - 1
                    ]),
                    timeSpanNorm = timeSpan / timelineComponents['eventsMinLapse'],
                    timeSpanNorm = Math.round(timeSpanNorm) + 4,
                    totalWidth = 900;
                timelineComponents['eventsWrapper'].css('width', totalWidth + 'px');
                updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents[
                        'fillingLine'],
                    totalWidth);

                return totalWidth;
            }

            function updateVisibleContent(event, eventsContent) {
                var eventDate = event.data('date'),
                    visibleContent = eventsContent.find('.selected'),
                    selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
                    selectedContentHeight = selectedContent.height();

                if (selectedContent.index() > visibleContent.index()) {
                    var classEnetering = 'selected enter-right',
                        classLeaving = 'leave-left';
                } else {
                    var classEnetering = 'selected enter-left',
                        classLeaving = 'leave-right';
                }

                selectedContent.attr('class', classEnetering);
                visibleContent.attr('class', classLeaving).one(
                    'webkitAnimationEnd oanimationend msAnimationEnd animationend',
                    function() {
                        visibleContent.removeClass('leave-right leave-left');
                        selectedContent.removeClass('enter-left enter-right');
                    });
                // eventsContent.css('height', selectedContentHeight + 'px');
            }

            function updateOlderEvents(event) {
                event.parent('li').prevAll('li').children('a').addClass('older-event').end().end()
                    .nextAll('li')
                    .children('a').removeClass('older-event');
            }

            function getTranslateValue(timeline) {
                var timelineStyle = window.getComputedStyle(timeline.get(0), null),
                    timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
                    timelineStyle.getPropertyValue("-moz-transform") ||
                    timelineStyle.getPropertyValue("-ms-transform") ||
                    timelineStyle.getPropertyValue("-o-transform") ||
                    timelineStyle.getPropertyValue("transform");

                if (timelineTranslate.indexOf('(') >= 0) {
                    var timelineTranslate = timelineTranslate.split('(')[1];
                    timelineTranslate = timelineTranslate.split(')')[0];
                    timelineTranslate = timelineTranslate.split(',');
                    var translateValue = timelineTranslate[4];
                } else {
                    var translateValue = 0;
                }

                return Number(translateValue);
            }

            function setTransformValue(element, property, value) {
                element.style["-webkit-transform"] = property + "(" + value + ")";
                element.style["-moz-transform"] = property + "(" + value + ")";
                element.style["-ms-transform"] = property + "(" + value + ")";
                element.style["-o-transform"] = property + "(" + value + ")";
                element.style["transform"] = property + "(" + value + ")";
            }

            //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
            function parseDate(events) {
                var dateArrays = [];
                events.each(function() {
                    var dateComp = $(this).data('date').split('/'),
                        newDate = new Date(dateComp[2], dateComp[1] - 1, dateComp[0]);
                    dateArrays.push(newDate);
                });
                return dateArrays;
            }

            function parseDate2(events) {
                var dateArrays = [];
                events.each(function() {
                    var singleDate = $(this),
                        dateComp = singleDate.data('date').split('T');
                    if (dateComp.length > 1) { //both DD/MM/YEAR and time are provided
                        var dayComp = dateComp[0].split('/'),
                            timeComp = dateComp[1].split(':');
                    } else if (dateComp[0].indexOf(':') >= 0) { //only time is provide
                        var dayComp = ["2000", "0", "0"],
                            timeComp = dateComp[0].split(':');
                    } else { //only DD/MM/YEAR
                        var dayComp = dateComp[0].split('/'),
                            timeComp = ["0", "0"];
                    }
                    var newDate = new Date(dayComp[2], dayComp[1] - 1, dayComp[0], timeComp[0],
                        timeComp[
                            1]);
                    dateArrays.push(newDate);
                });
                return dateArrays;
            }

            function daydiff(first, second) {
                return Math.round((second - first));
            }

            function minLapse(dates) {
                //determine the minimum distance among events
                var dateDistances = [];
                for (i = 1; i < dates.length; i++) {
                    var distance = daydiff(dates[i - 1], dates[i]);
                    dateDistances.push(distance);
                }
                return Math.min.apply(null, dateDistances);
            }

            /*
                How to tell if a DOM element is visible in the current viewport?
                http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
            */
            function elementInViewport(el) {
                var top = el.offsetTop;
                var left = el.offsetLeft;
                var width = el.offsetWidth;
                var height = el.offsetHeight;

                while (el.offsetParent) {
                    el = el.offsetParent;
                    top += el.offsetTop;
                    left += el.offsetLeft;
                }

                return (
                    top < (window.pageYOffset + window.innerHeight) &&
                    left < (window.pageXOffset + window.innerWidth) &&
                    (top + height) > window.pageYOffset &&
                    (left + width) > window.pageXOffset
                );
            }

            function checkMQ() {
                //check if mobile or desktop device
                return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'),
                        '::before')
                    .getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
            }
        });
    </script>
    <script>
        // function scrollToSection(sectionId) {
        //     const section = document.getElementById(sectionId);
        //     if (section) {
        //         const topOffset = section.getBoundingClientRect().top + window.scrollY;
        //         window.scrollTo({
        //             top: topOffset - 80,
        //             behavior: 'smooth'
        //         });
        //     }
        // }
    </script>
    <script>
        $(document).ready(function() {
            $('#jury-slider').slick({
                slidesToShow: 4,
                dots: true,
                responsive: [{
                        breakpoint: 1140,
                        settings: {
                            slidesToShow: 3,
                            dots: true,
                        }
                    },
                    {
                        breakpoint: 960,
                        settings: {
                            slidesToShow: 2,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 720,
                        settings: {
                            slidesToShow: 1,
                            dots: true,
                        },
                    }
                ]
            });
        });
    </script>
@endsection

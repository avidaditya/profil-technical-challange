@php
    $title1 = 'Penangkapan ikan ilegal terus merugikan nelayan lokal di Belitung. Mau tahu lebih lanjut?';
    $text1a = 'Belitung memiliki potensi sektor kelautan dan perikanan yang luar biasa, mulai dari kondisi terumbu karang yang sehat sehingga bisa mendukung keberlangsungan ekologi laut, hingga beberapa ikan yang memiliki potensi nilai ekonomi yang besar. Sumber daya yang berlimpah ini membuat Belitung memiliki potensi tinggi dalam hal produksi ikan. Sayangnya, banyak perusahaan melakukan penangkapan ikan ilegal dalam skala besar yang menggunakan praktik penangkapan ikan yang merusak lingkungan. Hal tersebut menyebabkan turunnya hasil tangkapan bagi nelayan lokal yang menggunakan praktik penangkapan ramah lingkungan. Hasil laut ini pun sebagian besar dijual ke perantara untuk dikirim ke luar pulau bahkan diekspor. Hanya sedikit ikan yang dijual di pasar lokal, itu pun ditawarkan dengan harga yang mahal dan bukan yang berkualitas baik. Akibatnya, masyarakat Belitung kesulitan untuk memperbaiki gizi guna menurunkan risiko stunting.';
    $text1b = 'Apa akar dari permasalahan perikanan di Belitung? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title2 = 'Lahan pertanian rusak akibat ekspansi perkebunan. Bagaimana dampaknya terhadap kebutuhan pangan masyarakat?';
    $text2a = 'Tanah di Belitung bukanlah tanah yang cukup sehat untuk ditanami tumbuhan produktif. Kebanyakan dari lahan ini adalah lahan bekas pertambangan ataupun perkebunan sawit. Dua sektor ini memang masih menjadi sumber mata pencaharian andalan warga karena lebih menjanjikan dibandingkan pertanian tanaman pangan yang ramah lingkungan. Hal ini mengakibatkan produksi pertanian rendah sehingga untuk memenuhi kebutuhan hidup sehari-hari, masyarakat bergantung pada produksi pertanian di Jawa dan Sumatera. Harga pangan pun menjadi mahal dan membuat masyarakat semakin kesulitan mengakses sumber pangan berkualitas.';
    $text2b = 'Apa akar dari permasalahan pertanian di Belitung? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title3 = 'Potensi pariwisata melimpah, tapi minat warga untuk mengelola rendah. Apa penyebabnya?';
    $text3a = 'Tumpukan batu granit berumur ratusan juta tahun yang tersebar di garis pantai Belitung menjadi daya tarik para wisatawan. Selain pemandangan batu granit, ada banyak potensi pariwisata di belitung, dari hutan, keindahan bawah laut, hingga kultur. Sayangnya, sektor pariwisata mengalami penurunan di Belitung. Harga tiket pesawat yang semakin meningkat, menurunnya frekuensi penerbangan dari Jakarta, serta tingginya biaya operasional di Belitung membuat wisatawan lebih memilih destinasi liburan lain. Akibatnya, kian hari minat warga untuk bekerja di sektor pariwisata pun semakin turun.';
    $text3b = 'Apa akar dari permasalahan pariwisata di Belitung? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';
@endphp

<div id="accordion-collapse" data-accordion="collapse" class="w-full lg:w-12/12 block text-center mx-auto">
    <div class="mb-6">
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                aria-controls="accordion-collapse-body-1">
                <span class="lg:text-start">{{ $title1 }}</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <div class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start">
                <p class="pb-4">{{ $text1a }}</p>
                <p class="pb-4">{{ $text1b }}
                </p>
            </div>
        </div>
    </div>
    <div class="mb-6">
        <h2 id="accordion-collapse-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                aria-controls="accordion-collapse-body-2">
                <span class="lg:text-start">{{ $title2 }}</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
            <div class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start">
                <p class="pb-4">{{ $text2a }}</p>
                <p class="pb-4">{{ $text2b }}</p>
            </div>
        </div>
    </div>
    <div class="mb-6">
        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                aria-controls="accordion-collapse-body-3">
                <span class="lg:text-start">{{$title3}}</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <div class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start">
                <p class="pb-4">{{ $text3a }}</p>
                <p class="pb-4">{{ $text3b }}</p>
            </div>
        </div>
    </div>
</div>

@php
    $title1 = 'Rantai pasok pertanian belum menguntungkan para petani Malang. Mau tahu lebih lanjut?';
    $text1a =
        'Sektor pertanian menyimpan beberapa tantangan yang menyebabkan produksi pangan kian menurun setiap tahun. Pertama, kondisi tanah yang rusak karena penerapan praktik pertanian yang tidak ramah lingkungan. Siklus panen dipaksa dipercepat karena petani ingin memaksimalkan hasil dari uang yang mereka keluarkan untuk menyewa lahan. Kedua, sumber pengairan yang semakin menyusut dengan kualitas semakin memburuk. Area hijau yang semakin gundul, dan kualitas sumber air seperti Sungai Brantas dan anak-anak sungainya yang mengaliri sebagian besar lahan pertanian di Malang terkenal sebagai sungai dengan polusi tertinggi ke enam di dunia. Kedua hal tersebut pun turut diperparah dengan adanya perubahan iklim.';
    $text1b =
        'Di tengah tantangan alam yang dihadapi, para petani juga terkendala dengan kondisi rantai pasok penyuplai bibit, pupuk, dan akses penjualan sehingga sulit untuk mendapatkan hasil ekonomi yang layak. Hal ini juga yang membatasi petani untuk berpindah ke pertanian organik dan ramah lingkungan, di mana membutuhkan waktu untuk mengistirahatkan tanah serta masa panen yang lebih panjang.';
    $text1c =
        'Apa akar dari permasalahan pertanian di Malang? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title2 = 'Keberlangsungan ekosistem perairan terancam. Bagaimana ini bisa terjadi?';
    $text2a =
        'Memiliki wilayah di area pesisir serta adanya waduk dan danau membuat Malang memiliki potensi perikanan yang besar. Di sektor kelautan, terdapat praktik pemancingan berlebihan terutama di Selat Sempu. Hal ini mengancam keberlangsungan ekosistem kelautan di area tersebut. Beternak ikan air tawar juga memiliki potensi perekonomian yang baik yang bisa dilakukan penduduk di sekitar danau dan waduk. Akan tetapi, masalah rantai pasok penjualan hasil panen ikan yang mengakibatkan harga ikan menjadi sangat tidak stabil dan merugikan para peternak ikan dan nelayan.';
    $text2b =
        'Apa akar dari permasalahan perikanan di Malang? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';
    $text2c =
        '';

    $title3 =
        'Kota kreatif tapi menyimpan angka pengangguran tertinggi di Jawa Timur. Apa penyebabnya?';
    $text3a =
        'Sebagai kota kreatif, banyak sekali masyarakat dari berbagai generasi yang giat berwirausaha di bidang seni kriya, fashion, kuliner, dan bidang lainnya. Di sektor ini, terdapat beberapa isu seperti sulitnya melakukan persaingan harga dengan pengusaha dari wilayah lain saat kebanyakan bahan baku tidak tersedia di provinsi Jawa Timur. Selain itu, kapasitas produksi juga sangat terbatas, jauh di bawah permintaan pasar akibat keterbatasan teknologi dan sulitnya mencari SDM yang bisa membantu menjalankan operasional. Padahal, sebanyak 5,7  persen angkatan kerja di Kabupaten Malang masih menganggur, membuat Kabupaten Malang menempati peringkat 10 besar untuk persentase angkatan menganggur tertinggi di Jawa Timur.  Fenomena rendahnya kualitas SDM ini juga ditambah dengan fenomena pernikahan dini yang mencapai 1,393 sepanjang tahun 2022 atau yang tertinggi di Jawa Timur.';
    $text3b =
        'Apa akar dari permasalahan usaha kreatif di Malang? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';
    $text3c = '';
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
                <p class="pb-4">{{ $text1b }}</p>
                @if (!empty($text1c))
                    <p class="pb-4">{{ $text1c }}</p>
                @endif
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
                @if (!empty($text2c))
                    <p class="pb-4">{{ $text2c }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="mb-6">
        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                aria-controls="accordion-collapse-body-3">
                <span class="lg:text-start">{{ $title3 }}</span>
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
                @if (!empty($text3c))
                    <p class="pb-4">{{ $text3c }}</p>
                @endif
            </div>
        </div>
    </div>
</div>

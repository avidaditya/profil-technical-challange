@php
    $title1 = 'Masyarakat Magelang masih ada yang mengalami kemiskinan ekstrem. Kok bisa?';
    $text1a =
        'Penduduk yang tinggal kurang lebih dalam radius lima kilometer dari komplek Candi Borobudur adalah kelompok masyarakat yang mendapatkan manfaat paling besar dari sektor pariwisata. Sementara itu, masyarakat di luar area wisata yang tinggal lebih jauh, yaitu di 70 (dari 372) desa/ kelurahan masih mengalami isu kemiskinan ekstrem.';
    $text1b =
        'Sebagian besar dari masyarakat di wilayah tersebut bekerja sebagai buruh tani yang berpenghasilan rendah dan tidak menentu. Hal ini tercermin dari data statistik 10,96% penduduk di Kabupaten Magelang dapat dikategorikan sebagai penduduk miskin, dan lebih dari 35% penduduk miskin bekerja di sektor pertanian. Sektor pertanian di Kabupaten Magelang juga mengalami kesulitan karena rantai nilai yang tidak menguntungkan bagi para petani, misalnya harga jual buah dan sayur yang rentan fluktuasi sedangkan harga pupuk cukup tinggi. Hal tersebut menyebabkan para petani terus merugi dan terjebak dalam jerat kemiskinan.';
    $text1c =
        'Apa akar dari permasalahan kemiskinan di Magelang? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title2 = 'Sektor pariwisata dihadapi potensi besar untuk tumbuh. Apa aja potensinya?';
    $text2a =
        'Meskipun memiliki potensi pariwisata yang besar, sektor pariwisata memiliki kontribusi yang tidak signifikan terhadap perekonomian di Kabupaten Magelang, baik dari sisi penyerapan tenaga kerja (5,65%) maupun PDRB (4,5%).';
    $text2b =
        'Kabar baiknya, saat ini telah ada beberapa upaya baik dari pihak pemerintah, swasta maupun masyarakat setempat untuk mulai mendorong pengembangan sektor pariwisata di Kabupaten Magelang. Kementerian Badan Usaha Milik Negara (BUMN), misalnya, mengembangkan Balai Ekonomi Desa (Balkondes) berupa fasilitas penginapan, tempat pertemuan, dan rumah makan yang cukup memadai di 20 Desa di Kecamatan Borobudur. Selain itu, beberapa desa seperti Dusun Butuh yang mengelola Nepal van Java dan Dusun Nampan yang mengelola Negeri Sayur terlihat cukup menggeliat dalam mengembangkan wisata berbasis alam dan pertanian. Upaya tersebut mampu memberikan pendapatan tambahan bagi masyarakat petani yang tinggal di sana.';
    $text2c =
        'Apa akar dari permasalahan pariwisata di Magelang? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title3 =
        'Tantangan lingkungan di Magelang meliputi sampah yang tidak terkelola dan bencana longsor. Mau tahu selengkapnya?';
    $text3a =
        'Kabupaten Magelang menghasilkan timbulan sampah sebesar 600 ton/hari, namun fasilitas pengelolaan yang ada belum mampu mengolah semua sampah yang dihasilkan meskipun sudah banyak upaya dari Pemerintah dan masyarakat, baik berupa Tempat Pengelolaan Sampah Terpadu (TPST) dan Tempat Pengelolaan Sampah Reduce Reuse Recycle (TPS3R) yang tersebar di 40 desa. Selain itu, beberapa daerah di Kabupaten Magelang mulai mengalami longsor saat hujan deras, dan kekeringan saat kemarau panjang. Hal tersebut merupakan dampak dari perubahan iklim dan alih fungsi lahan di daerah perbukitan.';
    $text3b =
        'Apa akar dari permasalahan lingkungan di Magelang? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';
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

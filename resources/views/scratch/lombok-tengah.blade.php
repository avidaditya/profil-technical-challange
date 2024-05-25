@php
    $title1 = 'Lombok Tengah merupakan penyumbang pekerja migran tertinggi keempat di Indonesia. Memang bagaimana kualitas SDM-nya?';
    $text1a = 'Di balik berbagai inisiatif pembangunan yang terjadi, masyarakat Lombok Tengah masih menghadapi beberapa tantangan dalam meningkatkan taraf hidup mereka. Menurut hasil survei Indonesian National Assessment Program, rerata skor kemampuan literasi (425), matematika (444), dan sains (429) dari siswa SD di Lombok Tengah masih di bawah skor rerata nasional (500). Selain itu, angka putus sekolah untuk jenjang SMP di Lombok Tengah merupakan yang tertinggi di Nusa Tenggara Barat berdasarkan data tahun 2020.';
    $text1b = 'Persoalan kemiskinan masih menjadi hambatan utama bagi anak usia sekolah untuk melanjutkan pendidikan. Banyak dari mereka yang harus mengorbankan pendidikan demi membantu perekonomian keluarga. Akibatnya, banyak anak muda yang menjadi pekerja informal di dalam maupun luar negeri. Berdasarkan data dari Badan Perlindungan Pekerja Migran Indonesia (BP2MI), 10.840 pekerja migran dari Lombok Tengah mendapatkan penempatan di tahun 2023, menjadikan Lombok Tengah sebagai kabupaten penyumbang pekerja migran tertinggi keempat di Indonesia. Hal ini menunjukkan bahwa masih banyak masyarakat yang belum merasakan manfaat dari perkembangan ekonomi sehingga potensi di Lombok Tengah belum digarap dengan optimal.';
    $text1c = 'Apa akar dari permasalahan Sumber Daya Manusia di Lombok Tengah? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title2 = 'Jumlah produksi hasil panen pada beberapa komoditas utama kian menurun. Mau tahu lebih lanjut?';
    $text2a = 'Dari sisi ekonomi, sektor pertanian, kehutanan, dan perikanan masih menjadi penyumbang Produk Domestik Regional Bruto (PDRB) terbesar di Lombok Tengah, dengan estimasi sebesar 25,07% di tahun 2023. Padi dan jagung menjadi komoditas utama di Lombok Tengah. Produksi padi berkisar di angka 500 ribu ton setiap tahunnya, sedangkan produksi jagung mengalami peningkatan yang cukup signifikan dari 54 ribu ton di tahun 2018 menjadi 88 ribu ton di tahun 2022. Petani mampu meraup keuntungan hingga Rp 30 juta tiap kali panen, sehingga mendorong banyak petani untuk menanam jagung. Di sisi lain, produksi budidaya ikan dan rumput laut terus merosot dari sekitar 73 ribu ton di 2018 menjadi 45 ribu ton di 2022. Perubahan iklim seperti peningkatan suhu dan kekeringan berkepanjangan adalah salah satu penyebab menurunnya jumlah produksi di beberapa komoditas utama.';
    $text2b = 'Apa akar dari permasalahan pertanian dan perikanan di Lombok Tengah? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';

    $title3 = 'Permasalahan lingkungan yang tidak kunjung terkendali. Apa saja dampaknya?';
    $text3a = 'Beberapa daerah di Lombok Tengah mengalami longsor dan banjir saat hujan deras, dan kekeringan saat kemarau panjang. Selain perubahan iklim, praktik alih fungsi lahan di daerah perbukitan menjadi lahan pertanian dan pariwisata juga turut andil menjadi penyebab bencana. Ditambah degradasi tanah akibat erosi, dan lahan pertanian yang mengandung pestisida dan pupuk kimia, dampak negatif juga turut dialami oleh ekosistem akuatik.';
    $text3b = 'Di sisi lain, pertumbuhan pariwisata dan ekonomi menyebabkan peningkatan volume sampah di Lombok Tengah. Namun, fasilitas pengelolaan saat ini belum mampu mengolah semua sampah yang dihasilkan. Alhasil, diperkirakan bahwa TPA Pengengat, satu-satunya tempat pembuangan akhir sampah di Lombok Tengah, akan penuh dalam tiga tahun ke depan.';
    $text3c = 'Apa akar dari permasalahan lingkungan di Lombok Tengah? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?';
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
                <p class="pb-4">{{ $text1c }}</p>
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
                <p class="pb-4">{{ $text3c }}</p>
            </div>
        </div>
    </div>
</div>

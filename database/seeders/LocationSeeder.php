<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::updateOrCreate(
            ['name' => 'Belitung'],
            [
                'name' => 'Belitung',
                'slug' => str()->slug('belitung'),
                'description' => 'Masyarakat Pulau Belitung perlu untuk meningkatkan ketahanan pangan berkualitas untuk mencegah stunting. Selain itu, mereka juga perlu meningkatkan perekonomian yang tidak merusak lingkungan, baik dari perikanan, pertanian, perkebunan, dan pariwisata. Bagaimana kita dapat membantu permasalahan yang ada di Belitung?',
                'cover_img' => 'frontend/images/lokasi/belitung1.jpg',
                'content_data' => [
                    'about' => [
                        'title' => 'Sumber Mata Pencaharian Eksploitatif, Ketahanan Pangan Tersendat',
                        'description' => 'Di Belitung, terdapat beberapa potensi sumber mata pencaharian yang berkelanjutan dan ramah lingkungan, seperti perikanan dan pariwisata. Akan tetapi, permintaan dan penawaran di sektor ini masih belum terkoneksi sehingga masyarakat kesulitan mengakses sumber pendapatan di sektor ini. Akibatnya, masyarakat masih bergantung kepada sektor yang memberikan penghasilan tinggi ataupun pendapatan secara instan, namun berdampak negatif pada lingkungan.',
                        'img' => 'frontend/images/lokasi/img-01.jpg',
                    ],
                    'content' => [
                        'video' => 'videos/sample.mp4',
                        'youtube' => 'fNVOvI-KMcc',
                        'title' => 'Sumber Mata Pencaharian Eksploitatif, Ketahanan Pangan Tersendat',
                        'description' => '<div id="accordion-collapse" data-accordion="collapse" class="w-full lg:w-12/12 block text-center mx-auto">
                        <div class="mb-6">
                            <h2 id="accordion-collapse-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-1">
                                    <span>Permasalahan perikanan masih banyak terjadi di Belitung. Mau tahu lebih lanjut?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start">
                                    <p>Belitung memiliki potensi sektor kelautan dan perikanan yang luar biasa, mulai dari kondisi terumbu
                                        karang yang sehat sehingga bisa mendukung keberlangsungan ekologi laut, hingga beberapa ikan yang
                                        memiliki potensi nilai ekonomi yang besar. Sumber daya yang berlimpah ini membuat Belitung memiliki
                                        potensi tinggi dalam hal produksi ikan. Sayangnya, banyak perusahaan penangkapan ikan dengan skala
                                        besar yang menggunakan metode penangkapan ikan ilegal. Hal tersebut menyebabkan turunnya hasil
                                        tangkapan bagi nelayan lokal yang menggunakan praktik penangkapan yang ramah lingkungan. Hasil laut
                                        ini pun sebagian besar dijual ke perantara untuk dikirim ke luar pulau bahkan diekspor. Hanya
                                        sedikit ikan yang dapat dijual di pasar lokal, itu pun ditawarkan dengan harga yang mahal dan bukan
                                        produk yang berkualitas baik. Akibatnya, masyarakat Belitung kesulitan untuk memperbaiki gizi guna
                                        menurunkan risiko stunting.</p>
                                    <p>
                                        Apa akar dari permasalahan perikanan di Belitung? Apa yang bisa kita lakukan untuk memecahkan
                                        permasalahan ini?
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
                                    <span>Permasalahan pertanian juga terjadi di Belitung. Mau tahu lebih lanjut?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start">
                                    <p>Tanah di Belitung bukanlah tanah yang cukup sehat untuk ditanami tumbuhan produktif yang ramah
                                        lingkungan. Kebanyakan dari lahan ini adalah lahan bekas pertambangan atau perkebunan sawit. Dua
                                        sektor ini memang masih menjadi sumber mata pencaharian andalan warga karena lebih menjanjikan
                                        dibandingkan pertanian tanaman pangan yang ramah lingkungan. Hal ini mengakibatkan produksi
                                        pertanian rendah sehingga untuk memenuhi kebutuhan hidup sehari-hari, masyarakat bergantung pada
                                        produksi pertanian di Jawa dan Sumatera. Harga pangan pun menjadi mahal dan membuat masyarakat
                                        semakin kesulitan mengakses sumber pangan berkualitas.</p>
                                    <p>Apa akar dari permasalahan pertanian di Belitung? Apa yang bisa kita lakukan untuk memecahkan
                                        permasalahan ini?</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h2 id="accordion-collapse-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-700 border border-b border-gray-200 rounded-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-purple-700 dark:text-gray-400 hover:bg-def-green hover:text-white dark:hover:bg-gray-800 gap-3 hover:scale-105 transition ease-in-out duration-300"
                                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                    aria-controls="accordion-collapse-body-3">
                                    <span>Tidak hanya itu, permasalahan pariwisata juga terjadi di Belitung. Mau tahu lebih lanjut?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5 border-gray-200 dark:border-gray-700 dark:bg-gray-900 text-gray-600 text-start">
                                    <p>Tumpukan batu granit berumur ratusan juta tahun yang tersebar di garis pantai Belitung menjadi daya tarik para wisatawan. Selain pemandangan batu granit, ada banyak potensi pariwisata di belitung, dari hutan, keindahan bawah laut, hingga kultur. Sayangnya, sektor pariwisata mengalami penurunan di Belitung. Harga tiket pesawat yang semakin meningkat, menurunnya frekuensi penerbangan dari Jakarta, serta tingginya biaya operasional di Belitung membuat wisatawan lebih memilih destinasi liburan lain. Akibatnya, kian hari minat warga untuk bekerja di sektor pariwisata pun semakin turun.</p>
                                    <p>Apa akar dari permasalahan pariwisata di Belitung? Apa yang bisa kita lakukan untuk memecahkan permasalahan ini?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    '
                    ],
                    'images' => [
                        '/frontend/images/lokasi/belitung/belitung-1.jpg',
                        '/frontend/images/lokasi/belitung/belitung-2.jpg',
                        '/frontend/images/lokasi/belitung/belitung-3.jpg',
                        '/frontend/images/lokasi/belitung/belitung-4.jpg',
                        '/frontend/images/lokasi/belitung/belitung-5.jpg',
                        '/frontend/images/lokasi/belitung/belitung-6.jpg',
                    ],
                    'seo' => [
                        'title' => 'Belitung',
                        'description' => 'Deskripsi Belitung',
                        'keywords' => 'belitung, lokasi',
                        'image' => '',
                    ],
                ],
            ],
        );

        Location::updateOrCreate(
            ['name' => 'Lombok Tengah'],
            [
                'name' => 'Lombok Tengah',
                'slug' => str()->slug('lombok-tengah'),
                'description' => 'Kualitas SDM yang belum maksimal menghambat peningkatan ekonomi dari pertanian, perikanan, dan pariwisata. Selain itu, permasalahan lingkungan dari sampah dan alih fungsi lahan juga ada di Lombok Tengah. Bagaimana kita dapat membantu permasalahan yang ada di Lombok Tengah?',
                'cover_img' => 'frontend/images/lokasi/lombok1.jpg',
                'content_data' => [
                    'about' => [
                        'title' => 'Pariwisata Melejit, SDM Sulit, Ekonomi Terbelit',
                        'description' => 'Kawasan Ekonomi Khusus (KEK) Mandalika diinisiasi sebagai bagian dari upaya Pemerintah Indonesia untuk meningkatkan investasi dan pariwisata di Lombok Tengah. Dengan memanfaatkan potensi alam dan budaya, KEK Mandalika telah menjadi magnet bagi investor dalam mengembangkan infrastruktur pariwisata dan komponen pendukung lainnya. Namun, manfaat dari perkembangan pariwisata terhadap peningkatan taraf hidup masyarakat masih belum merata. Dampak pariwisata terhadap lingkungan juga masih memerlukan perhatian khusus demi menjaga ekosistem alam dan keberlanjutan ekonomi di Lombok Tengah.',
                        'img' => 'frontend/images/lokasi/img-02.jpg',
                    ],
                    'content' => [
                        'video' => 'videos/sample.mp4',
                        'youtube' => 'Kp3d4-qFxxk',
                        'title' => 'Pariwisata Melejit, SDM Sulit, Ekonomi Terbelit',
                        'description' => '<p> Ketika mendengar Belitung, salah satu yang terlintas di benak kita adalah film Laskar Pelangi. Tumpukan batu granit yang indah, kecantikan bawah laut, budaya daerah, hingga keindahan lain yang belum banyak diketahui orang seperti obyek wisata hutan. Semua menyajikan pengalaman berwisata yang mengesankan, namun sayangnya sektor ini tetap belum mampu menyejahterakan masyarakat Belitung.</p><p>Sebenarnya, lebih dari sekadar keindahan pemandangan alam, Belitung menyimpan potensi sumber daya alam yang luar biasa, seperti komoditas perikanan dan pertanian yang  justru belum dimanfaatkan dengan baik. Hasil laut yang berkualitas baik diekspor ke luar pulau, menyisakan sedikit yang dijual di pasar lokal, yaitu yang berkualitas rendah dengan harga yang tinggi. Di sisi lain, eksploitasi lahan berlebihan untuk pertambangan timah ilegal dan perkebunan kelapa sawit dirasa lebih menjanjikan. Padahal, hal tersebut mengakibatkan produktivitas tanah menurun sehingga sulit ditanami bahan pangan produktif. Pada akhirnya, kurangnya optimalisasi bahan pangan dari perikanan dan pertanian membuat ribuan masyarakat di Belitung berisiko mengalami stunting.</p><p>Bagaimana kita bisa membantu masyarakat pulau untuk meningkatkan ketahanan pangan berkualitas? Tidak hanya untuk mencegah stunting, tapi juga untuk meningkatkan perekonomian yang tidak merusak lingkungan, baik dari perikanan, pertanian, perkebunan, dan pariwisata.</p>'
                    ],
                    'images' => [
                        '/frontend/images/lokasi/lombok/lombok-1.jpg',
                        '/frontend/images/lokasi/lombok/lombok-2.jpg',
                        '/frontend/images/lokasi/lombok/lombok-3.jpg',
                        '/frontend/images/lokasi/lombok/lombok-4.jpg',
                        '/frontend/images/lokasi/lombok/lombok-5.jpg',
                        '/frontend/images/lokasi/lombok/lombok-6.jpg',
                        '/frontend/images/lokasi/lombok/lombok-7.jpg',

                    ],
                    'seo' => [
                        'title' => 'Lombok Tengah',
                        'description' => 'Deskripsi Lombok Tengah',
                        'keywords' => 'lombok tengah, lokasi',
                        'image' => '',
                    ],
                ],
            ],
        );

        Location::updateOrCreate(
            ['name' => 'Magelang'],
            [
                'name' => 'Magelang',
                'slug' => str()->slug('magelang'),
                'description' => 'Diperlukan adanya penanggulangan masalah kemiskinan ekstrem dan ketidakmerataan ekonomi melalui perluasan manfaat dari sektor pertanian dan pariwisata ke setiap lapisan masyarakat di seluruh Kabupaten Magelang. Bagaimana kita dapat membantu permasalahan yang ada di Magelang?',
                'cover_img' => 'frontend/images/lokasi/magelang1.jpg',
                'content_data' => [
                    'about' => [
                        'title' => 'Ketidakmerataan Ekonomi yang Berujung Kemiskinan',
                        'description' => 'Borobudur merupakan  salah satu tujuan pariwisata utama kelas dunia yang mampu menarik banyak kunjungan wisatawan ke Magelang, dan menjadi sumber pendapatan sepanjang tahun. Selain itu, potensi budaya dan agrowisata yang dimiliki Magelang juga memiliki daya tarik tersendiri bagi wisatawan dan berpeluang besar dalam menciptakan sumber penghasilan yang berkelanjutan bagi masyarakat. Sayangnya, manfaat dari perkembangan pariwisata di Kabupaten Magelang baru dirasakan oleh sebagian kecil masyarakat, khususnya hanya bagi yang berada di sekitar area wisata.',
                        'img' => 'frontend/images/lokasi/img-03.jpg',
                    ],
                    'content' => [
                        'video' => 'videos/sample.mp4',
                        'youtube' => 'Yis8aBDwjnI',
                        'title' => 'Ketidakmerataan Ekonomi yang Berujung Kemiskinan',
                        'description' => '<p>Siapa yang tak kenal Candi Borobudur? Salah satu warisan budaya UNESCO ini telah menjadi destinasi wisata kelas dunia. Namun, destinasi wisata yang mengagumkan ini nyatanya belum berkontribusi  terhadap perekonomian Magelang secara merata. Fenomena yang terjadi adalah kesenjangan ekonomi antara masyarakat di area sekitar wisata yang lebih makmur dibandingkan dengan area di luar Borobudur. Bila ditelusuri, sektor pariwisata memiliki kontribusi yang belum signifikan terhadap perekonomian di Kabupaten Magelang, baik dari sisi penyerapan tenaga kerja (5,65%) maupun PDRB (4,5%). Sedangkan sebagian dari masyarakat di luar area wisata ini berprofesi sebagai petani. Harga jual buah dan sayur yang fluktuatif, serta harga pupuk yang tinggi, mengakibatkan petani terus merugi hingga terjerat dalam kemiskinan.</p><p>Kemiskinan bukan satu-satunya hambatan yang dialami Magelang. Isu lingkungan juga masih mencuri perhatian. Timbulan sampah yang dihasilkan Magelang mencapai 600 ton/hari. Walaupun fasilitas pengelolaan sampah sudah tersedia, namun belum mampu untuk menanggulangi permasalahan sampah ini. Selain itu, perubahan iklim dan alih fungsi lahan juga turut mendatangkan permasalahan lingkungan seperti rentan longsor saat hujan deras dan kekeringan saat kemarau panjang.</p><p>Bagaimana kita bisa menanggulangi masalah kemiskinan dan ketidakmerataan ekonomi di Magelang? Perluasan manfaat dari sektor pertanian dan pariwisata ke setiap lapisan masyarakat di seluruh Kabupaten Magelang menjadi kebutuhan mendesak.</p>'
                    ],
                    'images' => [
                        '/frontend/images/lokasi/magelang/magelang-1.jpg',
                        '/frontend/images/lokasi/magelang/magelang-2.jpg',
                        '/frontend/images/lokasi/magelang/magelang-3.jpg',
                        '/frontend/images/lokasi/magelang/magelang-4.jpg',
                        '/frontend/images/lokasi/magelang/magelang-5.jpg',
                        '/frontend/images/lokasi/magelang/magelang-6.jpg',
                        '/frontend/images/lokasi/magelang/magelang-7.jpg',
                    ],
                    'seo' => [
                        'title' => 'Magelang',
                        'description' => 'Deskripsi Magelang',
                        'keywords' => 'magelang, lokasi',
                        'image' => '',
                    ],
                ],
            ],
        );

        Location::updateOrCreate(
            ['name' => 'Malang'],
            [
                'name' => 'Malang',
                'slug' => str()->slug('malang'),
                'description' => 'Masyarakat dan usaha kecil perlu untuk bisa memiliki rantai pasok pertanian, perikanan, dan usaha kreatif yang berkelanjutan sehingga bisa mengentaskan kemiskinan yang tidak memperparah perubahan iklim di Malang. Bagaimana kita dapat membantu permasalahan yang ada di Malang?',
                'cover_img' => 'frontend/images/lokasi/malang1.jpg',
                'content_data' => [
                    'about' => [
                        'title' => 'Rantai Pasok Terputus, Laju Ekonomi Jadi Tandus',
                        'description' => 'Malang memiliki sejumlah potensi ekonomi yang besar, dari produksi pertanian, perkebunan, perikanan, hasil kerajinan seni, sampai usaha kreatif yang dijalankan oleh arema-arema Malang. Dari sektor pariwisata, Malang pun punya destinasi wisata yang beragam, dari area pegunungan, perkotaan, peninggalan sejarah, hingga pantai. Namun, permasalahan rantai pasok terjadi di setiap sektor masih terjadi, yang membuat para pelaku di masing-masing sektor tidak mendapatkan penghasilan yang optimal, bahkan terlilit utang karena produktivitas yang rendah. Mirisnya, meski memiliki potensi dan akses terhadap peningkatan ekonomi, Malang adalah kabupaten dengan populasi penduduk miskin tertinggi di Jawa Timur dengan 9,45% masyarakatnya masih hidup di bawah garis kemiskinan.',
                        'img' => 'frontend/images/lokasi/img-04.jpg',
                    ],
                    'content' => [
                        'video' => 'videos/sample.mp4',
                        'youtube' => 'RKgvHubPJBA',
                        'title' => 'Rantai Pasok Terputus, Laju Ekonomi Jadi Tandus',
                        'description' => '<p>Malang terkenal dengan dialek khas arema, yaitu dialek Walikan yang memiliki ciri khas membalikkan posisi huruf pada kosakata tertentu. Kreatif bukan? Kreativitas tersebut tidak hanya terwujud dalam berkomunikasi, tetapi juga dalam berwirausaha sehingga menjadikan sektor usaha kreatif di Malang berpotensi besar. Masalahnya, rantai pasok yang terfragmentasi membuat para pelaku di tiap sektor tidak mendapatkan penghasilan yang optimal. Misal dari sektor usaha kreatif, para pengusaha kesulitan mendapatkan bahan baku, mengakibatkan persaingan harga yang ketat dengan pengusaha dari wilayah lain. Selain itu, kapasitas produksi jauh di bawah permintaan pasar karena keterbatasan teknologi dan kurangnya SDM yang menjalankan operasional. Padahal, sebanyak 5,7 persen angkatan kerja di Malang masih menganggur, menjadikan Malang termasuk dalam peringkat 10 besar untuk persentase angkatan menganggur tertinggi di Jawa Timur.
                        </p><p>Sektor lain yang terkena dampak dari fragmentasi ini adalah sektor pertanian. Kondisi rantai pasok, mulai dari penyuplai bibit dan pupuk sampai akses penjualan yang terbatas menghambat para petani untuk mendapatkan hasil ekonomi yang layak. Kendala ini juga diperparah dengan kondisi tanah yang rusak akibat praktik tanam paksa, dan kualitas air yang buruk, ditambah adanya perubahan iklim. Fragmentasi rantai pasok juga terjadi dalam sektor perikanan dan kelautan. Malang memiliki wilayah di area pesisir serta keberadaan waduk dan danau air tawar yang berpotensi besar, namun akses penjualan hasil panen ikan yang terbatas mengakibatkan harga ikan menjadi sangat tidak stabil. Mirisnya, Malang adalah kabupaten dengan populasi penduduk miskin tertinggi di Jawa Timur.</p><p>Bagaimana kita membantu masyarakat dan usaha kecil untuk bisa memiliki rantai pasok pertanian, perikanan, dan usaha kreatif yang berkelanjutan? sehingga bisa mengentaskan kemiskinan yang tidak memperparah perubahan iklim?</p>'
                    ],
                    'images' => [
                        '/frontend/images/lokasi/malang/malang-1.jpg',
                        '/frontend/images/lokasi/malang/malang-2.jpg',
                        '/frontend/images/lokasi/malang/malang-3.jpg',
                        '/frontend/images/lokasi/malang/malang-4.jpg',
                        '/frontend/images/lokasi/malang/malang-5.jpg',
                        '/frontend/images/lokasi/malang/malang-6.jpg',
                    ],
                    'seo' => [
                        'title' => 'Malang',
                        'description' => 'Deskripsi Malang',
                        'keywords' => 'malang, lokasi',
                        'image' => '',
                    ],
                ],
            ],
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->homepage();
        $this->global();
        $this->seo();
        $this->faq();
        $this->modalpopup();
    }

    public function homepage(): void
    {
        // single content
        Section::updateOrCreate(
            ['section_page' => 'home-page', 'section_name' => 'single-content'],
            [
                'section_data' => [
                    'banner' => [
                        'img' => 'frontend/images/img-05.jpg',
                        'title' => 'Indonesia tidak akan besar karena obor di Jakarta, tapi akan bercahaya karena lilin di desa-desa',
                        'btn' => [
                            'text' => 'Sumbangkan Idemu',
                            'link' => '#lokasi',
                        ],
                    ],
                    'intro' => [
                        'title' => 'Setiap ide sederhana dapat menjadi sumber kekuatan besar yang berdampak pada jutaan manusia',
                        'description' => 'Satu ide mungkin tidak cukup, namun ketika digabungkan akan menjadi solusi komprehensif untuk mengatasi tantangan kompleks, bahkan bisa menjadi ledakan inspirasi yang bisa membangkitkan semangat perubahan positif.',
                    ],
                    'about' => [
                        'img' => 'frontend/images/img-06.jpg',
                        'title' => 'Sumbang Ide lewat Open Ideas Challenge!',
                        'description' => '<p>Open Ideas Challenge (OIC) adalah sebuah ruang untuk mengumpulkan ide dari seluruh Nusantara, memberikan kesempatan bagi semua pihak untuk punya andil dalam berinovasi, sehingga bersama-sama bisa memecahkan masalah sosial, ekonomi, dan lingkungan di Indonesia.</p><p class="mt-4">Kamu bisa <b>kontribusikan idemu</b>, Kamu bisa <b>kembangkan ide orang lain</b> lewat kolom komentar, dan Kamu juga bisa <b>vote ide orang lain</b> yang menurut kamu inspiratif, tepat guna, dan unik, karena semua ide yang masuk ke OIC akan <b>dikompetisikan!</b></p>',
                    ],
                    'location' => [
                        'title' => 'Masyarakat Belitung, Lombok Tengah, Magelang, dan Malang Butuh Idemu!',
                        'description' => 'According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.',
                    ],
                    'counter' => [
                        'img' => 'frontend/images/img-07.jpg',
                        'text' => 'ide telah terkumpul untuk menyelesaikan masalah sosial, ekonomi, dan lingkungan',
                    ],
                    'reward' => [
                        'img' => 'frontend/images/rewards.jpg',
                        'title' => 'Kenapa Kamu Harus Ikut Sumbang Ide?',
                        'description' => '<ul><li>Idemu bisa menginspirasi para pembuat dampak untuk mulai bergerak dan berinovasi
                        </li><li>Idemu bisa terpilih untuk membantu meningkatkan kesejahteraan masyarakat lokal di Belitung, Lombok Tengah, Magelang, dan Malang, karena ide yang terpilih akan ditransformasi menjadi solusi di dalam Catalyst Changemakers Lab (CCLab), dan akan diimplementasikan di lapangan melalui Proyek Implementasi Solusi</li><li>Bila idemu terpilih oleh publik ataupun juri, akan ada hadiah GoPay jutaan rupiah, merchandise, dan kesempatan mempresentasikan idemu di depan para ahli di CCE Innovation Day di Jakarta (termasuk biaya perjalanan!)</li>
                        </ul>',
                    ],
                    'juries' => [
                        'title' => 'Siapa Saja yang Akan Menilai Idemu?',
                        'description' => 'According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.',
                    ],
                    'timelines' => [
                        'title' => 'Perhatikan Jadwal Berikut Supaya Kamu Tidak Kelewatan!',
                    ],
                ],
            ],
        );

        // jury
        Section::updateOrCreate(
            ['section_page' => 'home-page', 'section_name' => 'juries'],
            [
                'section_data' => [
                    [
                        'id' => Uuid::uuid4(),
                        'img' => 'frontend/images/najwa.jpg',
                        'name' => 'Najwa Shihab',
                        'position' => 'Director of Media',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'img' => 'frontend/images/tanah.jpg',
                        'name' => 'Tanah Sulivan',
                        'position' => 'Director of Media',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'img' => 'frontend/images/afutami.jpg',
                        'name' => 'Afutami',
                        'position' => 'Director of Media',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'img' => 'frontend/images/img-08.jpg',
                        'name' => 'Para changemakers yang terpilih masuk ke CCE 3.0',
                        'position' => 'Director of Media',
                    ],
                ],
            ],
        );

        // timeline
        Section::updateOrCreate(
            ['section_page' => 'home-page', 'section_name' => 'timelines'],
            [
                'section_data' => [
                    [
                        'id' => Uuid::uuid4(),
                        'date' => 'Nov 2023',
                        'title' => 'Event title here',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'date' => 'Jan 2024',
                        'title' => 'Event title here',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'date' => 'Feb 2024',
                        'title' => 'Event title here',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'date' => 'Mar 2024',
                        'title' => 'Event title here',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'date' => 'Apr 2024',
                        'title' => 'Event title here',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.',
                    ],
                ],
            ],
        );
    }

    public function global(): void
    {
        // header
        Section::updateOrCreate(
            ['section_page' => 'global', 'section_name' => 'header'],
            [
                'section_data' => [
                    'big_logo' => 'frontend/images/logo-main.svg',
                    'small_logo' => 'frontend/images/logo-small.png',
                ],
            ],
        );

        // footer
        Section::updateOrCreate(
            ['section_page' => 'global', 'section_name' => 'footer'],
            [
                'section_data' => [
                    'logo_1' => '/frontend/images/goto-impact.svg',
                    'logo_2' => '/frontend/images/logo-main.svg',
                    'copyright' => '© 2024 Catalyst Changemaker Ecosystem. Powered by GoTo Impact Foundation',
                ],
            ],
        );

        // social media
        Section::updateOrCreate(
            ['section_page' => 'global', 'section_name' => 'social-media'],
            [
                'section_data' => [
                    'linkedin' => [
                        'link' => 'https://www.linkedin.com/company/goto-impact/',
                        'text' => 'goto impact foundation',
                    ],
                    'instagram' => [
                        'link' => 'https://www.instagram.com/goto.impact',
                        'text' => 'goto.impact',
                    ],
                    'website' => [
                        'link' => 'https://goto-impact.org',
                        'text' => 'www.goto-impact.org',
                    ],
                ],
            ],
        );

        // contact information
        Section::updateOrCreate(
            ['section_page' => 'global', 'section_name' => 'contact-information'],
            [
                'section_data' => [
                    'phone' => '+628211111111',
                    'email' => 'info@goto-impact.org',
                    'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.9056992625958!2d112.73800513880651!3d-7.262293287492401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f960abea3973%3A0xdc4aed9b38e91e32!2sJl.%20Basuki%20Rahmat%20No.8-12%2C%20Kedungdoro%2C%20Kec.%20Tegalsari%2C%20Surabaya%2C%20Jawa%20Timur%2060261!5e0!3m2!1sid!2sid!4v1711084392059!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                ],
            ],
        );
    }

    public function seo(): void
    {
        // seo
        Section::updateOrCreate(
            ['section_page' => 'home-page', 'section_name' => 'seo'],
            [
                'section_data' => [
                    'title' => 'Halaman Beranda',
                    'description' => 'Deskripsi Halaman Beranda',
                    'keywords' => 'beranda',
                    'image' => '',
                ],
            ],
        );
        Section::updateOrCreate(
            ['section_page' => 'faq-page', 'section_name' => 'seo'],
            [
                'section_data' => [
                    'title' => 'Halaman Kontak & FAQ',
                    'description' => 'Deskripsi Halaman Kontak & FAQ',
                    'keywords' => 'contact, faq',
                    'image' => '',
                ],
            ],
        );
    }

    public function faq(): void
    {
        // faq
        Section::updateOrCreate(
            ['section_page' => 'faq-page', 'section_name' => 'faqs'],
            [
                'section_data' => [
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apa tujuan dari Open Ideas Challenge?',
                        'answer' => 'Berangkat dari tujuan Catalyst Changemakers Ecosystem (CCE) yang akan merumuskan solusi komprehensif, pendekatan kolaboratif dibutuhkan untuk mendapatkan keberagaman perspektif dari berbagai lapisan masyarakat. Itulah mengapa Open Ideas Challenge (OIC) lahir, sebagai sebuah ruang untuk mengumpulkan ide dari seluruh Nusantara, memberikan kesempatan bagi generasi muda untuk punya suara dan andil dalam berinovasi memecahkan masalah kompleks di empat lokasi di Indonesia.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Kenapa Catalyst Changemakers Ecosystem membutuhkan ide dari publik?',
                        'answer' => 'Untuk menjawab tantangan yang kompleks yaitu permasalahan sosial, ekonomi, dan lingkungan, tentu membutuhkan kolaborasi dari berbagai aktor dan pemangku kepentingan. Dengan mengumpulkan ide dan berkreasi bersama lapisan masyarakat yang lebih luas, terutama dengan melibatkan masyarakat lokal, memungkinkan kami untuk menyusun solusi sesuai konteks lokal, serta menciptakan dampak multidimensional kepada masyarakat yang lebih luas secara berkelanjutan di Indonesia.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Siapa saja yang boleh ikut menyumbangkan ide?',
                        'answer' => 'GIF melalui CCE mengajak seluruh lapisan masyarakat, termasuk mahasiswa, aktivis, pengusaha muda, ataupun individu yang optimistis untuk memecahkan permasalahan sosial, ekonomi, lingkungan di Indonesia, serta senang mengeksplorasi hal baru terlepas dari apapun keahlian yang dimiliki.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apa keuntungan yang saya bisa dapatkan dari mengikuti Open Ideas Challenge ini?',
                        'answer' => '1. Berkesempatan untuk memenangkan hadiah yang telah disiapkan oleh GIF.<br>
                        2. Mengambil peran sekaligus menginspirasi individu/organisasi/entitas lain untuk membuat dampak positif.<br>
                        3. Berkesempatan untuk membantu meningkatkan kesejahteraan masyarakat lokal di Belitung, Lombok Tengah, Magelang, dan Malang, karena ide yang terpilih akan ditransformasi menjadi solusi di dalam Catalyst Changemakers Lab (CCLab), dan akan diimplementasikan di lapangan melalui Proyek Implementasi Solusi.<br>
                        4. Berkesempatan untuk memperluas jejaring bersama Changemakers CCE dan aktor-aktor lainnya.<br>',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apakah saya harus menjadi penyumbang ide, atau pemberi vote, atau pemberi komentar di Open Ideas Challenge?',
                        'answer' => '<p>Kamu bebas memilih keikutsertaanmu dalam Open Ideas Challenge karena sekecil apapun peran yang diambil, kamu tetap berkontribusi dalam membawa perubahan. Namun, kami menganjurkan untuk menyumbang ide karena ide terbaik yang mendapat vote dan komentar terbanyak berkesempatan untuk mendapat hadiah yang telah disiapkan oleh GIF. Setelah itu, jangan lupa untuk memberikan vote dan komentar di ide orang lain untuk memperkaya solusi dan menjalin diskusi yang bermakna!</p>

                        <p>Untuk bisa menyumbangkan ide, vote, maupun komentar, silakan daftarkan dirimu terlebih dahulu melalui tautan berikut.</p>',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Ide seperti apa yang dibutuhkan di Open Ideas Challenge?',
                        'answer' => 'Terdapat 2 kategori ide yang bisa kamu sumbangkan:<br>
                        1. Open Category: Ide dalam bentuk gagasan ataupun rekomendasi sederhana.<br>
                        2. Advanced Category: Ide dalam bentuk proposal atau makalah lengkap yang dibuat sendiri berdasarkan gabungan beberapa ide.<br>',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Bagaimana cara menyumbangkan ide di platform ini?',
                        'answer' => '1. Buat akun atau masuk ke akun, perhatikan syarat dan ketentuan yang berlaku.<br>
                        2. Klik "Sumbang Idemu" di laman utama.<br>
                        3. Pilih kota yang ingin kamu bantu atasi masalahnya dengan memilih tombol "Lebih Lanjut"<br>
                        5. Pelajari permasalahan di laman tersebut.<br>
                        6. Gulir ke bawah untuk menyumbang idemu dengan memilih tombol "Kirim Ide"<br>
                        7. Lengkapi seluruh pertanyaan.<br>
                        8. Unggah dokumen proposalmu jika memilih kategori advanced.<br>
                        9. Ide mu siap untuk dikumpulkan.<br>
                        10. Selanjutnya, kamu juga bisa memberikan komentar dan vote pada ide orang lain yang tidak kalah menarik, maupun menyumbang ide untuk permasalahan di kota-kota lain.<br>',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apakah saya boleh menyumbangkan ide yang tidak berhubungan dengan permasalahan di Belitung, Magelang, Malang, dan Mandalika?',
                        'answer' => 'Sejalan dengan tujuan Open Ideas Challenge 2024, ide kamu harus berhubungan dengan 4 lokasi yang menjadi fokus di CCE 3.0.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apakah saya boleh menyumbangkan permasalahan di Belitung, Magelang, Malang, dan Mandalika di platform ini?',
                        'answer' => 'Untuk memastikan kita dapat merumuskan solusi-solusi terbaik, diharapkan sumbangan berfokus pada ide untuk menanggapi permasalahan yang tertera pada masing-masing daerah.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apakah ide yang saya sumbangkan harus sudah terbukti berhasil?',
                        'answer' => 'Tidak jika kamu menyumbang ide pada kategori open, kamu boleh menyumbangkan ide apa saja selama ide tersebut masih relevan dengan permasalahan yang ada di Belitung, Magelang, Malang, dan Lombok Tengah. Namun, jika kamu memilih untuk menyumbang ide pada kategori advanced, dianjurkan untuk menyertakan teori, referensi, dan data yang bisa mendukung idemu.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apa yang perlu saya lakukan di kolom komentar?',
                        'answer' => 'Kamu dapat memberikan opini, dukungan, maupun masukan terhadap ide yang kamu komentari',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Siapa saja yang boleh vote ide yang sudah saya sumbangkan di platform ini?',
                        'answer' => 'Siapa saja yang berumur di atas 17 tahun, baik mahasiswa, aktivis, pengusaha muda, ataupun individu yang optimistis untuk memecahkan permasalahan sosial, ekonomi, lingkungan di Indonesia, serta senang mengeksplorasi hal baru terlepas dari apapun keahlian yang dimiliki.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Bagaimana ketentuan penilaian pemenang untuk kategori advance?',
                        'answer' => 'Pemenang kategori advance ditentukan oleh juri berdasarkan relevansi, kelayakan, skala dampak, dan kualitas proposal yang kamu berikan.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Bagaimana ketentuan penilaian pemenang untuk kategori open?',
                        'answer' => 'Pemenang kategori publik ditentukan berdasarkan vote terbanyak.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Bagaimana cara menghentikan notifikasi komentar yang masuk ke account saya?',
                        'answer' => 'Kamu dapat menekan tombol "unsubscribe" pada bagian bawah email.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apakah saya boleh menyumbangkan ide lebih dari satu?',
                        'answer' => 'Tentu saja boleh! Kamu dapat menyumbangkan ide sebanyak mungkin.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Kapan pengumuman pemenang Open Ideas Challenge?',
                        'answer' => 'Pemenang Open Ideas Challenge akan diumumkan pada 30 Juni 2024.',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Jika tidak terpilih sebagai pemenang, apa yang akan dilakukan terhadap ide yang sudah saya daftarkan?',
                        'answer' => 'Seluruh ide yang dikumpulkan akan dipertimbangkan dalam perumusan solusi yang akan diimplementasikan pada kegiatan Proyek Implementasi Solusi. Jadi, tidak ada ide yang terkumpul secara sia-sia. Segera daftarkan idemu ya!',
                    ],
                    [
                        'id' => Uuid::uuid4(),
                        'question' => 'Apa hadiah untuk pemenang?',
                        'answer' => 'Kami telah menyiapkan hadiah untuk beberapa pemenang. Untuk lebih rincinya, tunggu pengumuman di Instagam @goto.impact.',
                    ],
                ],
            ],
        );
        // content
        Section::updateOrCreate(
            ['section_page' => 'faq-page', 'section_name' => 'single-content'],
            [
                'section_data' => [
                    'about' => [
                        'img' => '/frontend/images/img-10.jpg',
                        'title' => 'Lokal Berdaya Bermula dari kearifan lokal, berlayar menuju inovasi.',
                        'description' => 'Memasuki tahun ketiga, CCE mengusung tema #LokalBerdaya yang bertujuan untuk memberdayakan masyarakat lokal agar terus bertumbuh, dan mampu menyelesaikan masalah sosial, lingkungan, dan ekonomi secara mandiri.',
                    ],
                    'faq' => [
                        'title' => 'Beberapa Pertanyaan Umum Seputar OIC',
                    ],
                ],
            ],
        );
    }

    public function modalpopup(): void
    {
        Section::updateOrCreate(
            ['section_page' => 'global', 'section_name' => 'modal-popup'],
            [
                'section_data' => [
                    'success-register-modal' => [
                        'title' => 'Pendaftaran Berhasil',
                        'text1' => 'Email verifikasi telah dikirimkan ke alamat',
                        'text2' => 'Harap melakukan aktifasi akun dengan mengikuti petunjuk pada emailmu.',
                    ],
                    'submission-guide-modal' => [
                        'title' => 'Panduan Menulis Ide',
                        'subtitle' => 'Aturan Penulisan Ide dalam Mengikuti Program OIC',
                        'content' => '<p>Untuk Open dan Advanced Category</p><p>
                        Tuliskan di kotak ide, apa ide Kamu untuk mengatasi masalah di kota ini, dan jelaskan mengapa menurut Kamu ide ini cocok untuk memecahkan masalah tersebut berdasarkan:</p>
                        <ul>
                        <li>Kondisi lapangan (letak geografis, demografis, cuaca, dll)</li>
                        <li>Kondisi sosial dan budaya penduduk (kearifan lokal, kondisi SES, budaya, dll)</li>
                        <li>Potensi lokal yang ada (potensi alam, bisnis, lapangan pekerjaan, dll)</li>
                        (50-100 kata)
                        </ul>

                        <p>Untuk Advanced Category, pdf mu harus menyertai jawaban dari 3 pertanyaan berikut</p>
                        <ol class="list-decimal">
                        <li><p>Untuk mewujudkan ide tersebut dan mencapai dampak berkelanjutan, apa faktor pendukung apa yang Kamu pandang penting untuk dikembangkan (pengetahuan, kreativitas, keahlian, kolaborasi, dan kebijakan)? Bagaimana Kamu berencana untuk mengintegrasikan faktor-faktor tersebut ke dalam implementasi idemu? (min. 100 kata)</p><br>

                        <p>Penjelasan faktor pendukung:</p>
                        <ul class="list-disc">
                        <li>Pengetahuan: segala sesuatu yang berkaitan dengan fakta, informasi, data, teori, atau kemampuan yang diperoleh dari suatu pengalaman.</li>
                        <li>Kreativitas: kemampuan menggunakan imajinasi untuk menghasilkan atau mengembangkan ide baru.</li>
                        <li>Keahlian: keterampilan, kompetensi, dan penguasaan atas suatu bidang atau aktivitas tertentu.</li>
                        <li>Kolaborasi: Proses kerja sama antara individu atau kelompok untuk mencapai tujuan bersama yang melibatkan ide, sumber daya, dan tanggung jawab.</li>
                        <li>Kebijakan: Aturan, panduan, atau keputusan yang ditetapkan oleh pemerintah, organisasi, atau lembaga untuk mengarahkan tindakan dan mencapai tujuan tertentu.</li>
                        </ul>
                        <li>

                        <li>Dampak positif apa yang mungkin terjadi jika ide tersebut diimplementasikan? Berapa perkiraan desa dan jumlah orang yang dapat merasakan dampak dari implementasi idemu? (min. 100 kata)</li>

                        <li>Jelaskan hambatan/ tantangan yang mungkin terjadi dalam proses implementasi ide tersebut? (min. 100 kata)</li>
                        </ol>',
                    ],
                    'thankyou-modal' => [
                        'title' => 'Terima Kasih',
                        'description' => 'Idemu sedang ditinjau ulang sebelum dipublikasikan. Tunggu email notifikasi dari OIC.
                        Sekarang Kamu bisa berikan vote di ide-ide yang menginspirasimu, dan bisa kembangkan ide-ide lain di kolom komentar.
                        Jangan lupa untuk ajak teman-temanmu menyumbangkan ide, berikan komentar, dan vote!',
                    ],
                    'blocked-modal' => [
                        'title' => 'Maaf Ide anda ditolak',
                        'description' => 'Ide anda mengandung kata-kata yang tidak diperbolehkan',
                    ]
                ],
            ],
        );
    }
}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Edukasi Kekerasan</title>

    <!-- PANGGIL CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">
     <div class="navbar-left">
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>

        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo DP2KBP3A">
            <span>DP2KBP3A</span>
        </div>
    </div>

    <div class="menu" id="navMenu">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('/profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a>
        <a href="{{ url('/materi') }}" class="{{ request()->is('materi*') ? 'active' : '' }}">Materi</a>
        <a href="{{ url('/chatbot') }}" class="{{ request()->is('chatbot') ? 'active' : '' }}">Chatbot</a>
    </div>

</nav>

<!-- HERO -->
<section class="hero">
    <div class="hero-container">

        <div class="hero-text">
            <h1>
                <span class="light">Ruang Belajar</span><br>
                <span class="dark">Edukasi Aman</span><br>
                <span class="accent">untuk Semua</span>
            </h1>

            <p>
                Platform edukasi dan informasi awal
                tentang kekerasan terhadap perempuan
                dan anak.
            </p>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/foto-landingpage.png') }}" alt="Ilustrasi Edukasi Aman">
        </div>

    </div>
</section>

<!-- ARTIKEL EDUKASI -->
<section class="section artikel">
    <h2 class="section-title underline">Artikel Edukasi</h2>

    <div class="artikel-grid">

        <a href="{{ url('/materi/kekerasan-perempuan-anak') }}" class="artikel-link">
            <div class="artikel-card">
                <img src="{{ asset('images/image-artikel.png') }}" alt="">
                <div class="artikel-body">
                    <span class="artikel-date">1 - 28 July 2022</span>
                    <h3>Kekerasan Terhadap Perempuan dan Anak</h3>
                </div>
            </div>
        </a>

        <a href="{{ url('/materi/hak-dan-perlindungan-korban') }}" class="artikel-link">
            <div class="artikel-card">
                <img src="{{ asset('images/image-artikel.png') }}" alt="">
                <div class="artikel-body">
                    <span class="artikel-date">1 - 28 July 2022</span>
                    <h3>Hak dan Perlindungan Korban</h3>
                </div>
            </div>
        </a>

        <a href="{{ url('/materi/sikap-dan-langkah-awal') }}" class="artikel-link">
            <div class="artikel-card">
                <img src="{{ asset('images/image-artikel.png') }}" alt="">
                <div class="artikel-body">
                    <span class="artikel-date">1 - 28 July 2022</span>
                    <h3>Sikap dan Langkah Aman</h3>
                </div>
            </div>
        </a>

        <a href="{{ url('/materi/pencegahan-lingkungan') }}" class="artikel-link">
            <div class="artikel-card">
                <img src="{{ asset('images/image-artikel.png') }}" alt="">
                <div class="artikel-body">
                    <span class="artikel-date">1 - 28 July 2022</span>
                    <h3>Pencegahan dan Peran Lingkungan</h3>
                </div>
            </div>
        </a>

    </div>
    <div class="lihat-semua"> <a href="{{ url('/materi') }}" class="btn-outline">Lihat Semua</a> </div>
</section>


<!-- KATEGORI EDUKASI -->
<section class="section">
    <h2 class="section-title">Kategori Edukasi</h2>
    <p style="text-align:center; max-width:600px; margin:0 auto 40px;">
        Materi disusun dengan bahasa sederhana dan mudah dipahami oleh semua kalangan.
    </p>

    <div class="kategori-grid">
        <div class="kategori-card">
            <img src="{{ asset('images/logo-edukasi-hukum.png') }}" alt="Edukasi Umum">
            <h3>Edukasi Umum</h3>
            <p>Informasi dasar mengenai kekerasan terhadap perempuan dan anak.</p>
            <a href="#" class="btn">Pelajari</a>
        </div>

        <div class="kategori-card">
            <img src="{{ asset('images/logo-edukasi-hukum.png') }}" alt="Edukasi Anak">
            <h3>Edukasi Ramah Anak</h3>
            <p>Materi dengan bahasa sederhana dan visual ramah anak.</p>
            <a href="#" class="btn">Pelajari</a>
        </div>

        <div class="kategori-card">
            <img src="{{ asset('images/logo-edukasi-hukum.png') }}" alt="Edukasi Anak">
            <h3>Edukasi Hukum</h3>
            <p>Materi dengan bahasa sederhana dan visual ramah anak.</p>
            <a href="#" class="btn">Pelajari</a>
        </div>

        <div class="kategori-card">
            <img src="{{ asset('images/logo-edukasi-hukum.png') }}" alt="Pelaporan">
            <h3>Panduan Pelaporan</h3>
            <p>Alur dan informasi awal untuk melakukan pelaporan secara aman.</p>
            <a href="#" class="btn">Pelajari</a>
        </div>
    </div>
</section>

<script>
function toggleMenu() {
    document.getElementById('navMenu').classList.toggle('show');
}
</script>

<!-- CTA SIKAP DAN LANGKAH AMAN -->
<section class="cta-aman">
    <div class="cta-aman-content">
        <h2>Sikap dan Langkah Aman</h2>

        <div class="cta-desc">
            Ketahui langkah awal yang dapat dilakukan secara aman saat
            mengalami atau menyaksikan kekerasan.
        </div>

        <ul class="cta-list">
            <li>Tetap tenang dan jaga keselamatan diri</li>
            <li>Ceritakan kepada orang terpercaya</li>
            <li>Cari bantuan dari layanan yang tersedia</li>
        </ul>

        <a href="{{ url('/chatbot') }}" class="cta-btn">
            BERTANYA KE CHATBOT
        </a>
    </div>

    <div class="cta-aman-image">
        <img src="{{ asset('images/cta-ilustrasi.png') }}" alt="Ilustrasi Konseling">
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-new">
    <div class="footer-wave"></div>

    <div class="footer-wrapper">
        <div class="footer-container">

            <!-- KIRI -->
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="DP2KBP3A">
                    <div>
                        <strong>DP2KBP3A</strong><br>
                        <span>Kabupaten Bandung Barat</span>
                    </div>
                </div>

                <div class="footer-info">
                    <p>
                        <strong>Alamat:</strong><br>
                        Komplek Pemda Kabupaten Bandung Barat<br>
                        Jl. Raya Padalarang–Cisarua Km.2<br>
                        Ngamprah
                    </p>

                    <p>
                        <strong>Jam Operasional:</strong><br>
                        08.00 – 16.30
                    </p>
                </div>
            </div>

            <!-- KANAN -->
            <div class="footer-right">
                <h4>Tautan</h4>
                <a href="#">Tentang Kami</a><br>
                <a href="#">Website Pelaporan</a>

                <div class="footer-social">
                    <a href="#"><img src="{{ asset('images/icon-instagram.png') }}"></a>
                    <a href="#"><img src="{{ asset('images/icon-facebook.png') }}"></a>
                    <a href="#"><img src="{{ asset('images/icon-whatsapp.png') }}"></a>
                    <a href="#"><img src="{{ asset('images/icon-email.png') }}"></a>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        © Platform Edukasi Perlindungan Perempuan dan Anak
    </div>
</footer>



</body>
</html>
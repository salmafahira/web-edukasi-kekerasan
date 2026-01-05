<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil | DP2KBP3A</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}">
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
        <a href="{{ url('/user') }}" class="{{ request()->is('/user') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('/profil') }}" class="{{ request()->is('profil') ? 'active' : '' }}">Profil</a>
        <a href="{{ url('/materi') }}" class="{{ request()->is('materi*') ? 'active' : '' }}">Materi</a>
        <a href="{{ url('/chatbot') }}" class="{{ request()->is('chatbot') ? 'active' : '' }}">Chatbot</a>
    </div>

</nav>

<script>
function toggleMenu() {
    document.getElementById('navMenu').classList.toggle('show');
}
</script>

<!-- HEADER PROFIL -->
<section class="profil-header">
    <h1>Profil</h1>
</section>

<!-- BANNER PROFIL -->
<section class="profil-banner">
    <img src="{{ asset('images/banner-profil.jpg') }}" alt="Profil DP2KBP3A">
</section>

<!-- DESKRIPSI PROFIL -->
<section class="profil-content">
    <p>
        DP2KBP3A (Dinas Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian
        Penduduk, dan Keluarga Berencana) merupakan perangkat daerah yang bertugas
        melaksanakan urusan pemerintahan di bidang pemberdayaan perempuan,
        perlindungan anak, serta pengendalian penduduk dan keluarga berencana.
    </p>

    <p>
        Instansi ini berperan dalam penyediaan edukasi, pencegahan, serta layanan
        pendampingan bagi perempuan dan anak, termasuk dalam penanganan kasus
        kekerasan.
    </p>
</section>

<!-- VISI MISI -->
<section class="visi-misi">
    <h2 class="section-title underline">Visi & Misi</h2>

    <div class="visi">
        <h3>VISI</h3>
        <blockquote>
            “Mewujudkan Pengendalian Penduduk melalui Keluarga Berencana,
            Kesetaraan dan Keadilan Gender, Pemberdayaan Perempuan dan
            Perlindungan Anak, menuju Keluarga Kecil yang Sejahtera dan Unggul.”
        </blockquote>
    </div>

    <div class="misi">
        <h3>MISI</h3>
        <ol>
            <li>Meningkatkan partisipasi masyarakat terhadap program pengendalian penduduk, Keluarga Berencana, Ketahanan dan Pemberdayaan Keluarga;</li>
            <li>Meningkatkan pemberdayaan perempuan dan pemenuhan hak anak untuk mendapatkan kualitas hidup dan peran yang setara di berbagai bidang pembangunan;</li>
            <li>Meningkatkan perlindungan perempuan dan anak;</li>
            <li>Meningkatkan kualitas pelayanan administrasi organisasi.</li>
        </ol>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-new">
    <div class="footer-wave"></div>

    <div class="footer-container">
        <!-- KIRI -->
        <div class="footer-left">
            <div class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="DP2KBP3A">
                <div class="footer-logo-text">
                    <strong>DP2KBP3A</strong>
                    <span>Kabupaten Bandung Barat</span>
                </div>
            </div>
<div class="footer-info">
    <div class="footer-info-item">
        <img src="{{ asset('images/icon-lokasi.png') }}" alt="Alamat">
        <div>
            <p><strong>Alamat:</strong></p>
            <p>
                Komplek Pemda Kabupaten Bandung Barat<br>
                Jl. Raya Padalarang–Cisarua Km.2<br>
                Ngamprah
            </p>
        </div>
    </div>

    <div class="footer-info-item">
        <img src="{{ asset('images/icon-jam.png') }}" alt="Jam Operasional">
        <div>
            <p><strong>Jam Operasional:</strong></p>
            <p>08.00 – 16.30</p>
        </div>
    </div>
</div>


        </div>

        <!-- KANAN -->
        <div class="footer-right">
            <h4>Tautan</h4>

            <div class="footer-links">
                <a href="#">Tentang Kami</a>
                <a href="#">Website Pelaporan</a>
            </div>

            <div class="footer-social">
                <a href="#"><img src="{{ asset('images/logo-instagram.png') }}" alt="Instagram"></a>
                <a href="#"><img src="{{ asset('images/icon-facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('images/icon-whatsapp.png') }}" alt="WhatsApp"></a>
                <a href="#"><img src="{{ asset('images/icon-email.png') }}" alt="Email"></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        © Platform Edukasi Kekerasan terhadap Perempuan dan Anak
    </div>
</footer>

</body>
</html>

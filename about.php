<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LPC Adventure</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="assets/gambar/logo.png" alt="LPC Adventure Logo" class="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="welcome.php" class="active">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <?php if (check_login()): ?>
                        <li><a href="rental.php">Penyewaan</a></li>
                    <?php endif; ?>
                    <li><a href="contact.php">Contact</a></li>
                    <?php if (check_login()): ?>
                        <li><a href="logout.php" class="btn-login">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="btn-login">Login</a></li>
                        <li><a href="signup.php" class="btn-signup">Sign Up</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="page-header">
            <h1>Tentang LPC Adventure</h1>
            <p class="subtitle">Menyediakan perlengkapan outdoor terbaik di Lampung sejak 2015</p>
        </section>
        <section class="content-section">

</body>
<div class="about-text">
    <h2>Visi Kami</h2>
    <p>Sebagai pionir dalam industri perlengkapan outdoor di Lampung, LPC Adventure bercita-cita menjadi mitra
        terpercaya bagi setiap petualang. Kami tidak hanya menyediakan produk, tetapi juga menciptakan ekosistem yang
        mendukung gaya hidup aktif dan cinta alam melalui layanan terpadu yang mengutamakan kualitas, keamanan, dan
        pengalaman pelanggan yang tak terlupakan.</p>

    <h2>Misi Kami</h2>
    <ul class="mission-list">
        <li>
            <strong>Kualitas Tanpa Kompromi</strong>
            <p>Kami secara ketat memilih produk dari brand ternama dan melakukan quality control berlapis untuk
                memastikan setiap peralatan yang kami sediakan memenuhi standar keamanan tertinggi.</p>
        </li>
        <li>
            <strong>Harga Terjangkau, Nilai Tambah Maksimal</strong>
            <p>Dengan jaringan supplier langsung dan sistem manajemen yang efisien, kami mampu menawarkan harga
                kompetitif dilengkapi dengan garansi produk dan layanan purna jual.</p>
        </li>
        <li>
            <strong>Edukasi & Komunitas</strong>
            <p>Kami secara aktif menyelenggarakan workshop, seminar, dan kegiatan outdoor untuk membangun komunitas
                pecinta alam yang berpengetahuan dan bertanggung jawab.</p>
        </li>
        <li>
            <strong>Inovasi Berkelanjutan</strong>
            <p>Tim kami terus mengembangkan sistem penyewaan berbasis teknologi dan memperbarui koleksi produk mengikuti
                perkembangan tren outdoor terbaru.</p>
        </li>
        <li>
            <strong>Layanan Pelanggan 360°</strong>
            <p>Dari konsultasi pemilihan alat, reservasi online, hingga dukungan selama trip, kami hadir untuk
                memastikan petualangan Anda berjalan mulus dari awal hingga akhir.</p>
        </li>
    </ul>
</div>

</html>
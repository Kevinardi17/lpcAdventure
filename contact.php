<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LPC Adventure</title>
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
            <h1>Hubungi Kami</h1>
            <p class="subtitle">Kami siap membantu kebutuhan outdoor Anda</p>
        </section>
        <section class="contact-container">
            <div class="contact-info">
                <h2>Informasi Kontak</h2>
                <div class="info-item">
                    <h3>Alamat</h3>
                    <p>Jl. Padat Karya, Way Dadi,Kec. Sukarame, Lampung</p>
                </div>
                <div class="info-item">
                    <h3>Instagram</h3>
                    <p>lpcadventure.lampung</p>
                </div>
                <div class="info-item">
                    <h3>Email</h3>
                    <p>-</p>
                </div>
                <div class="info-item">
                    <h3>Jam Operasional</h3>
                    <p>Senin: 07.00-21.00 WIB</p>
                    <p>Selasa - Sabtu: 07.00-22.00 WIB</p>
                    <p>Minggu: 07.00-21.00 WIB</p>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>
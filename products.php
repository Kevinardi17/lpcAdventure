<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - LPC Adventure</title>
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
            <h1>Produk & Layanan Kami</h1>
            <p class="subtitle">Temukan peralatan outdoor terbaik untuk petualangan Anda</p>
        </section>
        <section class="product-categories">
            <div class="category">
                <img src="assets/gambar/tenda compass.png" alt="Tenda">
                <h3>Tenda</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/lampu tenda.png" alt="lampu tenda">
                <h3>Lampu Tenda</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/headlamp.png" alt="headlamp">
                <h3>headlamp</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/tripod.png" alt="tripod">
                <h3>Tripod</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/sleeping bag.png" alt="sleeping bag">
                <h3>Sleeping Bag</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/flysheet.png" alt="flysheet">
                <h3>Flysheet</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/gas portable.png" alt="gas portable">
                <h3>Gas Portable</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/matras.png" alt="matras">
                <h3>Matras</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/daypack.png" alt="daypack">
                <h3>Daypack</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/nesting.png" alt="Nesting">
                <h3>Nesting</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/kompor.png" alt="kompor portable">
                <h3>Kompor Portable</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/meja lipat.png" alt="meja lipat">
                <h3>Meja Lipat</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/kursi lipat.png" alt="kursi lipat">
                <h3>Kursi Lipat</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
            <div class="category">
                <img src="assets/gambar/tas carrier.png" alt="tas carrier">
                <h3>Tas carrier</h3>
                <a href="#" class="btn-orange">Lihat Produk</a>
            </div>
        </section>
        <section class="rental-info">
            <h2>LPC Adventure Sewa Alat Outdoor</h2>
            <h2>Adventure Tour Trip Outbound Gathering Camping</h2>
            <p>Tenda | Carrier | Daypack | Meja Portable | Kursi Portable |
                Tripod | Hammock | Nesting | Kompor Portable | Handy Talky |
                Sleeping Bag | Flysheet | Senter | Headlamp | Lampu Tenda | Matras |
                Gas Portable | Paket Alat Grill
            </p>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>
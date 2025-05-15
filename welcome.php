<?php
include 'config.php';

// Hanya bisa diakses jika sudah login
if (!check_login()) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPC Adventure</title>
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
        <section class="hero-section">
            <div class="hero-content">
                <h1>Selamat Datang, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
                <p class="hero-subtitle">Tempat Terbaik untuk Shop & Rental Alat Outdoor di Lampung</p>
                <p>Kami menyediakan berbagai perlengkapan outdoor berkualitas tinggi untuk memenuhi kebutuhan
                    petualangan Anda. Mulai dari tenda, sleeping bag, hingga peralatan climbing - semua bisa Anda beli
                    atau sewa dengan harga terjangkau.</p>
                <div class="hero-buttons">
                    <a href="products.php" class="btn-orange">Lihat Produk</a>
                    <a href="contact.php" class="btn-outline">Hubungi Kami</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/gambar/petualangan outdoor.png" alt="Petualangan Outdoor">
            </div>
        </section>

        <section class="features-section">
            <h2>Mengapa Memilih LPC Adventure?</h2>
            <div class="features-container">
                <div class="feature">
                    <div class="feature-icon">🏕️</div>
                    <h3>Produk Berkualitas</h3>
                    <p>Kami hanya menyediakan peralatan dari brand terpercaya dengan kualitas terbaik untuk keselamatan
                        dan kenyamanan petualangan Anda.</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">🛠️</div>
                    <h3>Perawatan Rutin</h3>
                    <p>Semua peralatan sewa kami melalui proses perawatan dan pengecekan rutin untuk memastikan keamanan
                        pengguna.</p>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>
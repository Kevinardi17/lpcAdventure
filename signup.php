<?php
include 'config.php';

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = clean_input($_POST['nama']);
    $email = clean_input($_POST['email']);
    $nomor_telepon = clean_input($_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah email sudah terdaftar
    $check_sql = "SELECT id FROM pelanggan WHERE email = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $error = "Email sudah terdaftar!";
    } else {
        $sql = "INSERT INTO pelanggan (nama, email, nomor_telepon, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nama, $email, $nomor_telepon, $password);

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;
            $_SESSION['user_name'] = $nama;
            $_SESSION['user_email'] = $email;
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Pendaftaran gagal: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - LPC Adventure</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo-container">
                <img src="logo.png" alt="LPC Adventure Logo" class="logo">
            </div>
            <nav>
                <ul>
                    <li><a href="welcome.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" class="btn-login">Login</a></li>
                    <li><a href="signup.php" class="active btn-signup">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="auth-page">
        <section class="auth-container">
            <h1>Buat Akun Baru</h1>
            <p class="auth-subtitle">Daftar sekarang untuk mulai berbelanja dan menyewa peralatan</p>

            <?php if (!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>

            <form class="auth-form" action="signup.php" method="POST">
                <div class="form-group">
                    <label for="signup-name">Nama Lengkap</label>
                    <input type="text" id="signup-name" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="signup-email">Email</label>
                    <input type="email" id="signup-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="signup-phone">Nomor Telepon</label>
                    <input type="tel" id="signup-phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="signup-password">Password</label>
                    <input type="password" id="signup-password" name="password" required>
                </div>
                <div class="form-group terms">
                    <label>
                        <input type="checkbox" name="terms" required> Saya setuju dengan <a href="#">Syarat dan
                            Ketentuan</a>
                    </label>
                </div>
                <button type="submit" class="btn-orange btn-block">Daftar Sekarang</button>
            </form>

            <div class="auth-footer">
                <p>Sudah punya akun? <a href="login.php">Masuk disini</a></p>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>
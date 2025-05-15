<?php
include 'config.php';

$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = clean_input($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM pelanggan WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nama'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LPC Adventure</title>
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
                    <li><a href="welcome.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php" class="active btn-login">Login</a></li>
                    <li><a href="signup.php" class="btn-signup">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="auth-page">
        <section class="auth-container">
            <h1>Masuk ke Akun Anda</h1>
            <p class="auth-subtitle">Silakan masuk untuk mengakses semua fitur kami</p>

            <?php if (!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>

            <form class="auth-form" action="login.php" method="POST">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Ingat saya
                    </label>
                    <a href="forgot-password.php" class="forgot-password">Lupa password?</a>
                </div>
                <button type="submit" class="btn-orange btn-block">Masuk</button>
            </form>

            <div class="auth-footer">
                <p>Belum punya akun? <a href="signup.php">Daftar sekarang</a></p>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>

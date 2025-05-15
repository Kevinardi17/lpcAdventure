<?php
include 'config.php';

// Hanya bisa diakses jika sudah login
if (!check_login()) {
    header("Location: login.php");
    exit();
}

// Ambil data produk yang tersedia
$sql = "SELECT * FROM stok WHERE jumlah > 0";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Alat - LPC Adventure</title>
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
                    <li><a href="rental.php" class="active">Penyewaan</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="logout.php" class="btn-login">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="page-header">
            <h1>Layanan Penyewaan Alat Outdoor</h1>
            <p class="subtitle">Sewa peralatan berkualitas untuk petualangan Anda</p>
        </section>

        <section class="rental-container">
            <div class="rental-terms">
                <h2><i class="fas fa-file-contract"></i> Syarat & Ketentuan Penyewaan</h2>
                <div class="terms-list">
                    <div class="term-item">
                        <div class="term-number">1</div>
                        <div class="term-content">
                            <h3><i class="fas fa-id-card"></i> Identitas Penyewa</h3>
                            <p>Wajib meninggalkan identitas diri yang masih berlaku (KTP/SIM) sebagai jaminan selama
                                masa penyewaan.</p>
                        </div>
                    </div>

                    <div class="term-item">
                        <div class="term-number">2</div>
                        <div class="term-content">
                            <h3><i class="fas fa-check-circle"></i> Pengecekan Alat</h3>
                            <p>Penyewa wajib mengecek kondisi alat sebelum disewa. Komplain kerusakan tidak diterima
                                setelah pengembalian.</p>
                        </div>
                    </div>

                    <div class="term-item">
                        <div class="term-number">3</div>
                        <div class="term-content">
                            <h3><i class="fas fa-clock"></i> Durasi Sewa</h3>
                            <p>Harga sewa dihitung per 24 jam sejak pengambilan alat. Toleransi keterlambatan
                                pengembalian maksimal 3 jam.</p>
                        </div>
                    </div>

                    <div class="term-item">
                        <div class="term-number">4</div>
                        <div class="term-content">
                            <h3><i class="fas fa-exclamation-triangle"></i> Keterlambatan</h3>
                            <p>Lebih dari 3 jam: denda 50% harga sewa/hari. Lebih dari 12 jam: dikenakan biaya sewa
                                penuh 1 hari.</p>
                        </div>
                    </div>

                    <div class="term-item">
                        <div class="term-number">5</div>
                        <div class="term-content">
                            <h3><i class="fas fa-money-bill-wave"></i> Pembayaran DP</h3>
                            <p>DP minimal 30% wajib dibayarkan saat booking. DP hangus jika terjadi pembatalan dari
                                pihak penyewa.</p>
                        </div>
                    </div>

                    <div class="term-item">
                        <div class="term-number">6</div>
                        <div class="term-content">
                            <h3><i class="fas fa-shield-alt"></i> Tanggung Jawab</h3>
                            <p>Segala bentuk kehilangan/kerusakan alat menjadi tanggung jawab penyewa dan wajib diganti
                                sesuai harga pasar.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rental-form-container">
                <div class="rental-form">
                    <h2>Formulir Penyewaan</h2>
                    <form id="rentalForm" action="rental-process.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

                        <div class="form-group">
                            <label for="rental-name">Nama Lengkap</label>
                            <input type="text" id="rental-name"
                                value="<?php echo htmlspecialchars($_SESSION['user_name']); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="rental-date">Tanggal Penyewaan</label>
                            <input type="date" id="rental-date" name="rental-date" required>
                        </div>
                        <div class="form-group">
                            <label for="rental-days">Lama Sewa (hari)</label>
                            <input type="number" id="rental-days" name="rental-days" min="1" value="1" required>
                        </div>
                        <div class="form-group">
                            <label for="rental-items">Peralatan yang Disewa</label>
                            <select id="rental-items" name="rental-items[]" multiple required>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <option value="<?php echo $row['id']; ?>" data-price="<?php echo $row['harga']; ?>">
                                        <?php echo $row['nama_produk']; ?> -
                                        Rp<?php echo number_format($row['harga'], 0, ',', '.'); ?>/hari
                                    </option>
                                <?php endwhile; ?>
                            </select>
                            <small>Gunakan Ctrl/Cmd untuk memilih multiple items</small>
                        </div>
                        <div class="form-group">
                            <label for="rental-total">Total Biaya</label>
                            <input type="text" id="rental-total" readonly>
                        </div>
                        <div class="form-group">
                            <label for="rental-dp">DP (Minimal 30%)</label>
                            <input type="text" id="rental-dp" name="rental-dp" readonly required>
                        </div>
                        <div class="form-group terms-checkbox">
                            <label>
                                <input type="checkbox" id="agree-terms" required>
                                Saya telah membaca dan menyetujui semua syarat dan ketentuan penyewaan
                            </label>
                        </div>
                        <button type="submit" class="btn-orange btn-block">Ajukan Penyewaan</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
    <script>
        // Hitung total biaya dan DP
        document.getElementById('rental-days').addEventListener('change', calculateTotal);
        document.getElementById('rental-items').addEventListener('change', calculateTotal);

        function calculateTotal() {
            const days = parseInt(document.getElementById('rental-days').value);
            const items = Array.from(document.getElementById('rental-items').selectedOptions);

            let total = 0;
            items.forEach(item => {
                const price = parseFloat(item.dataset.price);
                total += price * days;
            });

            document.getElementById('rental-total').value = 'Rp' + total.toLocaleString('id-ID');
            document.getElementById('rental-dp').value = 'Rp' + Math.ceil(total * 0.3).toLocaleString('id-ID');
        }
    </script>
</body>

</html>
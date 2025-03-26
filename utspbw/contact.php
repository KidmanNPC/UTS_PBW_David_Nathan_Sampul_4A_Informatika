<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Website Personal</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main class="container">
        <section class="contact-section">
            <div class="section-title">
                <h3>Contact me</h3>
                <p>Jika ada yang mau ditanyakan, bisa isi form dibawah ini untuk contact saya.</p>
            </div>

            <div class="contact-container">
                <!-- Form Kontak -->
                <div class="contact-form">
                    <?php if(isset($_GET['status'])): ?>
                        <div class="alert <?php echo $_GET['status'] === 'success' ? 'success' : 'error'; ?>">
                            <?php
                            if($_GET['status'] === 'success') {
                                echo '<i class="fas fa-check-circle"></i> Pesan berhasil dikirim!';
                            } else {
                                echo '<i class="fas fa-exclamation-circle"></i> Gagal mengirim pesan. Silakan coba lagi.';
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <form action="assets/php/send_email.php" method="POST" id="contactForm">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Alamat Email</label>
                            <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
                        </div>

                        <div class="form-group">
                            <label for="subject"><i class="fas fa-tag"></i> Subjek</label>
                            <input type="text" id="subject" name="subject" placeholder="Apa yang ingin Anda tanyakan?" required>
                        </div>

                        <div class="form-group">
                            <label for="message"><i class="fas fa-comment"></i> Pesan Anda</label>
                            <textarea id="message" name="message" rows="6" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-submit">
                            <i class="fas fa-paper-plane"></i> Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Informasi Kontak -->
                <div class="contact-info">
                    <h4><i class="fas fa-info-circle"></i> Informasi Kontak</h4>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5>Alamat</h5>
                            <p>Jl. Karangsatria 04, Kota Bekasi, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-content">
                            <h5>Telepon</h5>
                            <p>+62 821 2707 2206</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h5>Email</h5>
                            <p>evannathan78@gmail.com</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <h5>Media Sosial</h5>
                        <div class="social-links">
                            <a href="https://x.com/evannathan78" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/natedrkn/" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/davidnathan770/" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://github.com/KidmanNPC" class="social-link"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>
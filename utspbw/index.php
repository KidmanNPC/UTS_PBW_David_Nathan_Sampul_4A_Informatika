<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nate Folio - Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main class="container">
        <section class="hero">
            <div class="hero-content">
                <h2>Selamat Datang di Website Personal Saya</h2>
                <p>Halo! Saya seorang mahasiswa yang sedang belajar pemrograman web.</p>
                <a href="about.php" class="btn">Pelajari Lebih Lanjut</a>
            </div>
            <div class="hero-image">
                <img src="assets/images/Nate.jpg" alt="Foto Profil">
            </div>
        </section>

    <section class="skills">
    <h3>Skills</h3>
    <div class="skill-bars">
        <div class="skill">
            <div class="skill-info">
                <span><i class="fab fa-html5"></i> HTML</span>
                <span>90%</span>
            </div>
            <div class="circular-progress">
                <div class="circle html" data-percent="90%"></div>
            </div>
        </div>
        
        <div class="skill">
            <div class="skill-info">
                <span><i class="fab fa-css3-alt"></i> CSS</span>
                <span>85%</span>
            </div>
            <div class="circular-progress">
                <div class="circle css" data-percent="85%"></div>
            </div>
        </div>
        

        <div class="skill">
            <div class="skill-info">
                <span><i class="fab fa-js-square"></i> JavaScript</span>
                <span>75%</span>
            </div>
            <div class="circular-progress">
                <div class="circle js" data-percent="75%"></div>
            </div>
        </div>
        
        <!-- PHP Skill -->
        <div class="skill">
            <div class="skill-info">
                <span><i class="fab fa-php"></i> PHP</span>
                <span>70%</span>
            </div>
            <div class="circular-progress">
                <div class="circle php" data-percent="70%"></div>
            </div>
        </div>
    </div>
</section>

        <section class="experience">
            <h3>Pengalaman</h3>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2021 - Sekarang</div>
                    <div class="timeline-content">
                        <h4>Mahasiswa Informatika</h4>
                        <p>mengembsngkan skill ilmu Komputer. Belajar berbagai konsep pemrograman dasar hingga menengah.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">Desember 2023 - November 2024</div>
                    <div class="timeline-content">
                        <h4>Organisasi Mahasiswa Himtika</h4>
                        <p>Melaksanakan tugas di himpunan organisasi informatika sebagai Research & Development.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">Januari 2023 - Maret 2023</div>
                    <div class="timeline-content">
                        <h4>Peserta Kursus Haltev</h4>
                        <p>Mengikuti program kursus permulaan programming untuk bekal kuliah.</p>
                    </div>
                </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
    
    <script src="assets/js/script.js"></script>
</body>
</html>
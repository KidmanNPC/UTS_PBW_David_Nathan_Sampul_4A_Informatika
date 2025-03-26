<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Website Personal</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main class="container">
        <section class="about-section">
            <div class="section-title">
                <h3>About Nate</h3>
                <p>Let's go biar lebih tau tentang saya</p>
            </div>

            <div class="about-container">
                <!-- Profil Utama -->
                <div class="profile-card">
                    <div class="profile-image">
                        <img src="assets/images/Nate2.jpg" alt="Foto Profil" class="profile-picture">
                    </div>
                    <div class="profile-content">
                        <h4>David Nathan Sampul</h4>
                        <p class="profile-subtitle">Mahasiswa Informatika</p>
                        <div class="social-links">
                            <a href="https://github.com/KidmanNPC/" class="social-link"><i class="fab fa-github"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/natedrkn/" class="social-link"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Informasi Detail -->
                <div class="about-content">
                    <div class="about-tabs">
                        <button class="tab-button active" data-tab="personal">Personal</button>
                        <button class="tab-button" data-tab="education">Pendidikan</button>
                        <button class="tab-button" data-tab="experience">Pengalaman</button>
                    </div>

                    <!-- Tab Personal -->
                    <div class="tab-content active" id="personal-tab">
                        <h5><i class="fas fa-user"></i> Informasi Pribadi</h5>
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-user-tag"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Nama Lengkap</h5>
                                    <p>David Nathan Sampul</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-birthday-cake"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Umur</h5>
                                    <p>21 Tahun</p>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Alamat</h5>
                                    <p>Bekasi, Jawa Barat</p>
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
                        </div>

                        <h5 class="section-subtitle"><i class="fas fa-heart"></i> Hobi & Minat</h5>
                        <div class="hobbies">
                            <div class="hobby-item">
                                <i class="fas fa-code"></i>
                                <span>Programming</span>
                            </div>
                            <div class="hobby-item">
                                <i class="fas fa-book"></i>
                                <span>Membaca</span>
                            </div>
                            <div class="hobby-item">
                                <i class="fas fa-music"></i>
                                <span>Musik</span>
                            </div>
                            <div class="hobby-item">
                                <i class="fas fa-plane"></i>
                                <span>Traveling</span>
                            </div>
                            <div class="hobby-item">
                                <i class="fas fa-camera"></i>
                                <span>Fotografi</span>
                            </div>
                            <div class="hobby-item">
                                <i class="fas fa-utensils"></i>
                                <span>Memasak</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Pendidikan -->
                    <div class="tab-content" id="education-tab">
                        <div class="timeline-vertical">
                            <div class="timeline-item">
                                <div class="timeline-date">2023 - Sekarang</div>
                                <div class="timeline-content">
                                    <div class="exp-header">
                                        <h6>Universitas Singaperbangsa Karawang</h6>
                                        <span class="exp-date">S1</span>
                                    </div>
                                    <ul class="exp-details">
                                        <li>Program Studi: Informatika</li>
                                        <li>IPK: 3.86/4.00</li>
                                        <li>Fokus: Pengembangan Web dan Kecerdasan Buatan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2018 - 2021</div>
                                <div class="timeline-content">
                                    <div class="exp-header">
                                        <h6>SMA Negeri 18 Bekasi</h6>
                                        <span class="exp-date">Jurusan IPS</span>
                                    </div>
                                    <ul class="exp-details">
                                        <li>Nilai UN: 80.5</li>
                                        <li>Wakil Ketua English Club</li>
                                        <li>Juara 2 Lomba General Speech</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2015 - 2018</div>
                                <div class="timeline-content">
                                    <div class="exp-header">
                                        <h6>SMP Negeri 3 Bekasi</h6>
                                        <span class="exp-date">Sekolah Menengah Pertama</span>
                                    </div>
                                    <ul class="exp-details">
                                        <li>Nilai UN: 75.4</li>
                                        <li>Anggota Rohis</li>
                                        <li>Peserta Lomba Puisi Bahasa Inggris</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2009 - 2015</div>
                                <div class="timeline-content">
                                    <div class="exp-header">
                                        <h6>SD Negeri Bekasi Jaya XIII</h6>
                                        <span class="exp-date">Sekolah Dasar</span>
                                    </div>
                                    <ul class="exp-details">
                                        <li>Nilai UN: 80.7</li>
                                        <li>Juara Kelas 3 Tahun Berturut-turut</li>
                                        <li>Anggota Pramuka</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Pengalaman -->
                    <div class="tab-content" id="experience-tab">
                        <div class="experience-item">
                            <div class="exp-header">
                                <h6>Organisasi Mahasiswa Himtika</h6>
                                <span class="exp-date">Desember 2023 - November 2024</span>
                            </div>
                            <ul class="exp-details">
                                <li>Membangun website untuk mahasiswa informatika</li>
                                <li>Mengembangkan aplikasi web berbasis PHP dan MySQL</li>
                                <li>Meningkatkan performa website hingga 40% dengan optimasi</li>
                                <li>Bekerja dengan HTML5, CSS3, JavaScript, dan PHP</li>
                            </ul>
                        </div>
                        <div class="experience-item">
                            <div class="exp-header">
                                <h6>Part Time di Garden House</h6>
                                <span class="exp-date">Desember 2022 - Agustus 2023</span>
                            </div>
                            <ul class="exp-details">
                                <li>Membantu melayani customer</li>
                                <li>Membuat hidangan seusai dengan menu.</li>
                                <li>Mengantar makanan dan minuman</li>
                                <li>Berpartisipasi dalam daily standup meeting</li>
                            </ul>
                        </div>
                        <div class="experience-item">
                            <div class="exp-header">
                                <h6>Full Time Suki & Mentai</h6>
                                <span class="exp-date">Desember 2021 - Mei 2022</span>
                            </div>
                            <ul class="exp-details">
                                <li>Membantu partner mempersiapkan alat makan</li>
                                <li>Catering dan Box </li>
                                <li>Memasak hidangan jepang</li>
                            </ul>
                        </div>
                      </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="skills-section">
            <div class="section-title">
                <h3>Kemampuan Saya</h3>
                <p>Berikut adalah skill-set yang saya kuasai</p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <h5><i class="fas fa-code"></i> Web Development</h5>
                    <ul class="skill-list">
                        <li>HTML5 & CSS3 (Lanjutan)</li>
                        <li>JavaScript (ES6+)</li>
                        <li>PHP & MySQL</li>
                        <li>Bootstrap & Tailwind CSS</li>
                        <li>React.js (Dasar)</li>
                    </ul>
                </div>
                
                <div class="skill-category">
                    <h5><i class="fas fa-tools"></i> Tools & Teknologi</h5>
                    <ul class="skill-list">
                        <li>Visual Studio Code</li>
                        <li>Git & GitHub</li>
                        <li>Figma (UI/UX Design)</li>
                        <li>Adobe Photoshop</li>
                        <li>Postman (API Testing)</li>
                    </ul>
                </div>
                
                <div class="skill-category">
                    <h5><i class="fas fa-language"></i> Bahasa & Lainnya</h5>
                    <ul class="skill-list">
                        <li>Bahasa Indonesia (Native)</li>
                        <li>English (Intermediate - TOEFL 550)</li>
                        <li>Japanese (Basic - JLPT N5)</li>
                        <li>Kemampuan Presentasi</li>
                        <li>Manajemen Waktu</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>
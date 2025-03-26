<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web | Materi Pembelajaran</title>
    <meta name="description" content="Kumpulan materi pembelajaran pemrograman web modern">
    
    <!-- CSS Assets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
    
    <style>
        /* Fix untuk header */
        .web-programming-section {
            padding-top: 80px;
            margin-top: -20px;
        }
        
        /* Style Accordion */
        .accordion-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .accordion-item {
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background: white;
        }
        
        .accordion-header button {
            width: 100%;
            padding: 1.2rem 1.5rem;
            text-align: left;
            background: #2c3e50;
            color: white;
            border: none;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .accordion-header button:hover {
            background: #34495e;
        }
        
        .accordion-icon {
            margin-right: 12px;
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }
        
        .accordion-title {
            flex-grow: 1;
        }
        
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .content-wrapper {
            padding: 1.5rem;
        }
        
        /* Style konten */
        pre {
            margin: 1rem 0;
            border-radius: 6px;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
            margin: 1.5rem 0;
        }
        
        .feature-card {
            background: #f8f9fa;
            padding: 1rem;
            border-radius: 6px;
            border-left: 4px solid #3498db;
        }
        
        .code-example {
            background: #f5f5f5;
            padding: 1rem;
            border-radius: 6px;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main class="container">
        <section class="web-programming-section">
            <div class="section-title">
                <h1><i class="fas fa-code"></i> Materi Pemrograman Web</h1>
                <p class="section-subtitle">Belajar HTML, CSS, JavaScript, dan PHP dari dasar</p>
            </div>

            <div class="accordion-container">
                <!-- Accordion 1: HTML -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button aria-expanded="false" aria-controls="html-content">
                            <span class="accordion-icon"><i class="fab fa-html5"></i></span>
                            <span class="accordion-title">HTML Dasar</span>
                            <span class="accordion-indicator"><i class="fas fa-chevron-down"></i></span>
                        </button>
                    </div>
                    <div id="html-content" class="accordion-content">
                        <div class="content-wrapper">
                            <h3>Struktur Dasar HTML</h3>
                            <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="id"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Contoh HTML&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello World!&lt;/h1&gt;
    &lt;p&gt;Ini contoh paragraf.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

                            <h3>Elemen Semantik</h3>
                            <div class="feature-grid">
                                <div class="feature-card">
                                    <h4>&lt;header&gt;</h4>
                                    <p>Bagian kepala dokumen atau section</p>
                                </div>
                                <div class="feature-card">
                                    <h4>&lt;nav&gt;</h4>
                                    <p>Menu navigasi utama</p>
                                </div>
                                <div class="feature-card">
                                    <h4>&lt;main&gt;</h4>
                                    <p>Konten utama halaman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion 2: CSS -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button aria-expanded="false" aria-controls="css-content">
                            <span class="accordion-icon"><i class="fab fa-css3-alt"></i></span>
                            <span class="accordion-title">CSS Styling</span>
                            <span class="accordion-indicator"><i class="fas fa-chevron-down"></i></span>
                        </button>
                    </div>
                    <div id="css-content" class="accordion-content">
                        <div class="content-wrapper">
                            <h3>Contoh CSS</h3>
                            <pre><code class="language-css">/* Variabel CSS */
:root {
    --primary-color: #3498db;
}

/* Selektor Class */
.container {
    width: 90%;
    margin: 0 auto;
}

/* Flexbox */
.flex-container {
    display: flex;
    gap: 1rem;
}</code></pre>

                            <h3>Konsep Penting</h3>
                            <div class="feature-grid">
                                <div class="feature-card">
                                    <h4>Box Model</h4>
                                    <p>Margin, border, padding, content</p>
                                </div>
                                <div class="feature-card">
                                    <h4>Flexbox</h4>
                                    <p>Layout satu dimensi</p>
                                </div>
                                <div class="feature-card">
                                    <h4>Grid</h4>
                                    <p>Layout dua dimensi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion 3: JavaScript -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button aria-expanded="false" aria-controls="js-content">
                            <span class="accordion-icon"><i class="fab fa-js-square"></i></span>
                            <span class="accordion-title">JavaScript Dasar</span>
                            <span class="accordion-indicator"><i class="fas fa-chevron-down"></i></span>
                        </button>
                    </div>
                    <div id="js-content" class="accordion-content">
                        <div class="content-wrapper">
                            <h3>Contoh JavaScript</h3>
                            <pre><code class="language-javascript">// Variabel
let nama = "Budi";
const umur = 25;

// Fungsi
function sapa(nama) {
    return `Halo, ${nama}!`;
}

// Event Listener
document.addEventListener('click', () => {
    console.log('Tombol diklik');
});</code></pre>

                            <h3>Konsep ES6+</h3>
                            <div class="feature-grid">
                                <div class="feature-card">
                                    <h4>Arrow Function</h4>
                                    <p>() => { ... }</p>
                                </div>
                                <div class="feature-card">
                                    <h4>Template Literal</h4>
                                    <p>`String ${variabel}`</p>
                                </div>
                                <div class="feature-card">
                                    <h4>Destructuring</h4>
                                    <p>const { prop } = obj</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion 4: PHP -->
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button aria-expanded="false" aria-controls="php-content">
                            <span class="accordion-icon"><i class="fab fa-php"></i></span>
                            <span class="accordion-title">PHP Dasar</span>
                            <span class="accordion-indicator"><i class="fas fa-chevron-down"></i></span>
                        </button>
                    </div>
                    <div id="php-content" class="accordion-content">
                        <div class="content-wrapper">
                            <h3>Contoh PHP</h3>
                            <pre><code class="language-php">&lt;?php
// Variabel
$nama = "Budi";
$umur = 25;

// Fungsi
function sapa($nama) {
    echo "Halo, " . $nama;
}

// Form Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
}
?&gt;</code></pre>

                            <h3>Fitur Penting</h3>
                            <div class="feature-grid">
                                <div class="feature-card">
                                    <h4>Form Handling</h4>
                                    <p>$_GET, $_POST</p>
                                </div>
                                <div class="feature-card">
                                    <h4>Database</h4>
                                    <p>MySQLi, PDO</p>
                                </div>
                                <div class="feature-card">
                                    <h4>Sessions</h4>
                                    <p>$_SESSION</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi syntax highlighting
            hljs.highlightAll();
            
            // Fungsi accordion
            const accordionButtons = document.querySelectorAll('.accordion-header button');
            
            accordionButtons.forEach(button => {
                const content = document.getElementById(button.getAttribute('aria-controls'));
                
                // Inisialisasi state
                content.style.maxHeight = '0';
                content.style.overflow = 'hidden';
                content.style.transition = 'max-height 0.3s ease';
                
                button.addEventListener('click', () => {
                    const isExpanded = button.getAttribute('aria-expanded') === 'true';
                    
                    // Toggle state
                    button.setAttribute('aria-expanded', !isExpanded);
                    
                    // Toggle icon
                    const icon = button.querySelector('.accordion-indicator i');
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                    
                    // Toggle content
                    if (!isExpanded) {
                        content.style.maxHeight = content.scrollHeight + 'px';
                    } else {
                        content.style.maxHeight = '0';
                    }
                });
            });
        });
    </script>
</body>
</html>
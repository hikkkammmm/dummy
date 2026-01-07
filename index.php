<?php
$page_title = "Portfolio - Saya";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Halo, Saya adalah Web Developer</h1>
        <p>Saya membuat website yang indah, responsif, dan fungsional</p>
        <div class="hero-buttons">
            <a href="/portfolio/pages/portfolio.php" class="btn btn-primary">Lihat Portfolio Saya</a>
            <a href="/portfolio/pages/contact.php" class="btn btn-secondary">Hubungi Saya</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section section-padding">
    <div class="container">
        <h2 class="section-title">Tentang Saya</h2>
        <div class="about-grid">
            <div class="about-text">
                <h2>Saya adalah Developer yang Passionate</h2>
                <p>
                    Saya memiliki pengalaman dalam mengembangkan website menggunakan teknologi modern. 
                    Saya berfokus pada user experience yang baik dan code yang clean.
                </p>
                <p>
                    Dengan keahlian di frontend dan backend, saya mampu membuat solusi web yang lengkap 
                    dari konsep hingga deployment.
                </p>
                <div class="skills-list">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">Responsive Design</span>
                </div>
            </div>
            <div class="about-image">
                <div style="
                    width: 300px;
                    height: 300px;
                    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
                    border-radius: 10px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 5rem;
                ">
                    👨‍💻
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Preview -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title">Portfolio Terbaru</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <div class="portfolio-image">🌐</div>
                <div class="portfolio-content">
                    <h3>Website E-Commerce</h3>
                    <p>Platform e-commerce lengkap dengan keranjang belanja dan sistem pembayaran.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Bootstrap</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">📱</div>
                <div class="portfolio-content">
                    <h3>Aplikasi Manajemen Proyek</h3>
                    <p>Aplikasi web untuk tracking progress dan management team collaboration.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">REST API</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-item">
                <div class="portfolio-image">🎨</div>
                <div class="portfolio-content">
                    <h3>Landing Page Bisnis</h3>
                    <p>Website landing page modern dan profesional untuk bisnis dengan design unik.</p>
                    <div class="portfolio-tags">
                        <span class="tag">HTML5</span>
                        <span class="tag">CSS3</span>
                        <span class="tag">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <a href="/portfolio/pages/portfolio.php" class="btn btn-primary">Lihat Semua Portfolio</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Tertarik Bekerja Sama?</h2>
        <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">
            Hubungi saya untuk diskusi lebih lanjut tentang proyek Anda
        </p>
        <a href="/portfolio/pages/contact.php" class="btn btn-secondary">Hubungi Sekarang</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

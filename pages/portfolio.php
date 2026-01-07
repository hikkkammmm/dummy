<?php
$page_title = "Portfolio - Saya";
include '../includes/header.php';
?>

<section class="section-padding" style="background: var(--light-color);">
    <div class="container">
        <h2 class="section-title">Portfolio Saya</h2>
        <p style="text-align: center; color: var(--text-light); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Berikut adalah beberapa proyek yang telah saya kerjakan. Setiap proyek mencerminkan dedikasi saya terhadap kualitas dan inovasi.
        </p>
        
        <div class="portfolio-grid">
            <!-- Project 1 -->
            <div class="portfolio-item">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                    🛍️
                </div>
                <div class="portfolio-content">
                    <h3>E-Commerce Platform</h3>
                    <p>Platform e-commerce lengkap dengan sistem manajemen produk, keranjang belanja, dan integrasi pembayaran.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Bootstrap</span>
                        <span class="tag">JavaScript</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="portfolio-item">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                    📊
                </div>
                <div class="portfolio-content">
                    <h3>Dashboard Analitik</h3>
                    <p>Dashboard interaktif untuk monitoring data real-time dengan visualisasi grafik yang menarik.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">Chart.js</span>
                        <span class="tag">HTML5</span>
                        <span class="tag">CSS3</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="portfolio-item">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">
                    💬
                </div>
                <div class="portfolio-content">
                    <h3>Sistem Manajemen Forum</h3>
                    <p>Forum komunitas dengan sistem user, moderasi, dan fitur diskusi yang lengkap.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">OOP</span>
                        <span class="tag">MVC</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="portfolio-item">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #fa709a, #fee140);">
                    📅
                </div>
                <div class="portfolio-content">
                    <h3>Event Management System</h3>
                    <p>Aplikasi manajemen event dengan fitur registrasi peserta dan scheduling yang komprehensif.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">Responsive</span>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="portfolio-item">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #30cfd0, #330867);">
                    📚
                </div>
                <div class="portfolio-content">
                    <h3>Learning Management System</h3>
                    <p>Platform pembelajaran online dengan konten kursus, ujian, dan tracking progress siswa.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">AJAX</span>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="portfolio-item">
                <div class="portfolio-image" style="background: linear-gradient(135deg, #a8edea, #fed6e3);">
                    🏥
                </div>
                <div class="portfolio-content">
                    <h3>Sistem Manajemen Klinik</h3>
                    <p>Aplikasi manajemen klinik dengan fitur appointment, rekam medis, dan resep pasien.</p>
                    <div class="portfolio-tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">PDF</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title">Statistik Proyek</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 2rem; text-align: center;">
            <div>
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 0.5rem;">20+</h3>
                <p style="color: var(--text-light);">Proyek Selesai</p>
            </div>
            <div>
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 0.5rem;">15+</h3>
                <p style="color: var(--text-light);">Klien Puas</p>
            </div>
            <div>
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 0.5rem;">5+</h3>
                <p style="color: var(--text-light);">Tahun Pengalaman</p>
            </div>
            <div>
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 0.5rem;">100%</h3>
                <p style="color: var(--text-light);">Kepuasan Klien</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

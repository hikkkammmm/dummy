<?php
$page_title = "Tentang Saya - Portfolio";
include '../includes/header.php';
?>

<section class="section-padding" style="background: var(--light-color);">
    <div class="container">
        <h2 class="section-title">Tentang Saya</h2>
        
        <div class="about-grid">
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
            
            <div class="about-text">
                <h2>Saya adalah Web Developer Profesional</h2>
                <p>
                    Halo! Nama saya adalah Seorang Developer dengan passion tinggi dalam web development. 
                    Saya telah mengembangkan berbagai website dan aplikasi web selama beberapa tahun.
                </p>
                
                <h3 style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">Pengalaman Kerja</h3>
                <ul style="color: var(--text-light); line-height: 2;">
                    <li>✓ Lebih dari 5 tahun pengalaman dalam Web Development</li>
                    <li>✓ Menguasai Frontend dan Backend Development</li>
                    <li>✓ Berpengalaman dengan berbagai framework dan library</li>
                    <li>✓ Fokus pada clean code dan best practices</li>
                    <li>✓ Selalu mengikuti perkembangan teknologi terbaru</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section-padding">
    <div class="container">
        <h2 class="section-title">Keahlian Saya</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div style="background: var(--light-color); padding: 2rem; border-radius: 10px; text-align: center;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.3rem;">🎨 Frontend</h3>
                <ul style="list-style: none; color: var(--text-light);">
                    <li>HTML5</li>
                    <li>CSS3 & SASS</li>
                    <li>JavaScript</li>
                    <li>Responsive Design</li>
                    <li>Bootstrap & Tailwind</li>
                </ul>
            </div>
            
            <div style="background: var(--light-color); padding: 2rem; border-radius: 10px; text-align: center;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.3rem;">⚙️ Backend</h3>
                <ul style="list-style: none; color: var(--text-light);">
                    <li>PHP</li>
                    <li>MySQL Database</li>
                    <li>REST API</li>
                    <li>Server Management</li>
                    <li>OOP & Design Pattern</li>
                </ul>
            </div>
            
            <div style="background: var(--light-color); padding: 2rem; border-radius: 10px; text-align: center;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.3rem;">🛠️ Tools & Technologies</h3>
                <ul style="list-style: none; color: var(--text-light);">
                    <li>Git & GitHub</li>
                    <li>VS Code</li>
                    <li>XAMPP / Local Server</li>
                    <li>Linux</li>
                    <li>Debugging & Testing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section class="section-padding" style="background: var(--light-color);">
    <div class="container">
        <h2 class="section-title">Pendidikan & Sertifikasi</h2>
        
        <div style="max-width: 600px; margin: 0 auto;">
            <div style="background: white; padding: 2rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: var(--shadow);">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Diploma Teknik Informatika</h3>
                <p style="color: var(--text-light); margin: 0;">Sekolah Tinggi Teknologi | 2018 - 2021</p>
            </div>
            
            <div style="background: white; padding: 2rem; border-radius: 10px; margin-bottom: 1rem; box-shadow: var(--shadow);">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Sertifikat Web Developer</h3>
                <p style="color: var(--text-light); margin: 0;">Platform Pembelajaran Online | 2021</p>
            </div>
            
            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: var(--shadow);">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Full Stack Web Development</h3>
                <p style="color: var(--text-light); margin: 0;">Bootcamp Programming | 2022</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

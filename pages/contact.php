<?php
$page_title = "Hubungi Saya - Portfolio";

// Handle form submission
$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message_content = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation
    if (empty($name)) {
        $message = 'Nama tidak boleh kosong';
        $message_type = 'error';
    } elseif (empty($email)) {
        $message = 'Email tidak boleh kosong';
        $message_type = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Format email tidak valid';
        $message_type = 'error';
    } elseif (empty($subject)) {
        $message = 'Subjek tidak boleh kosong';
        $message_type = 'error';
    } elseif (empty($message_content)) {
        $message = 'Pesan tidak boleh kosong';
        $message_type = 'error';
    } else {
        // Sanitize input
        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
        $message_content = htmlspecialchars($message_content, ENT_QUOTES, 'UTF-8');
        
        // Log message to file
        $log_dir = '../logs';
        if (!is_dir($log_dir)) {
            mkdir($log_dir, 0755, true);
        }
        
        $log_file = $log_dir . '/contact_messages.txt';
        $timestamp = date('Y-m-d H:i:s');
        $log_entry = "[$timestamp] Nama: $name | Email: $email | Subjek: $subject\nPesan: $message_content\n" . str_repeat("-", 80) . "\n";
        
        if (file_put_contents($log_file, $log_entry, FILE_APPEND)) {
            $message = 'Terima kasih! Pesan Anda telah diterima. Saya akan segera menghubungi Anda.';
            $message_type = 'success';
            
            // Clear form
            $name = $email = $subject = $message_content = '';
        } else {
            $message = 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.';
            $message_type = 'error';
        }
    }
}

include '../includes/header.php';
?>

<section class="contact-section section-padding">
    <div class="container">
        <h2 class="section-title">Hubungi Saya</h2>
        
        <p style="text-align: center; color: var(--text-light); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
            Memiliki pertanyaan atau ingin berdiskusi tentang proyek Anda? Silakan isi form di bawah ini dan saya akan segera menghubungi Anda.
        </p>
        
        <div class="contact-container">
            <?php if (!empty($message)): ?>
                <div class="alert alert-<?php echo $message_type; ?>">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Nama Lengkap *</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        required 
                        value="<?php echo isset($name) ? $name : ''; ?>"
                    >
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required 
                        value="<?php echo isset($email) ? $email : ''; ?>"
                    >
                </div>
                
                <div class="form-group">
                    <label for="subject">Subjek *</label>
                    <input 
                        type="text" 
                        id="subject" 
                        name="subject" 
                        required 
                        value="<?php echo isset($subject) ? $subject : ''; ?>"
                    >
                </div>
                
                <div class="form-group">
                    <label for="message">Pesan *</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        required
                    ><?php echo isset($message_content) ? $message_content : ''; ?></textarea>
                </div>
                
                <button type="submit" class="form-submit">Kirim Pesan</button>
            </form>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="section-padding" style="background: var(--light-color);">
    <div class="container">
        <h2 class="section-title">Informasi Kontak</h2>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div style="text-align: center;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.3rem;">📧 Email</h3>
                <p style="color: var(--text-light);">
                    <a href="mailto:info@example.com" style="color: var(--primary-color);">info@example.com</a>
                </p>
            </div>
            
            <div style="text-align: center;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.3rem;">📱 Telepon</h3>
                <p style="color: var(--text-light);">
                    <a href="tel:+628123456789" style="color: var(--primary-color);">+62 812-3456-789</a>
                </p>
            </div>
            
            <div style="text-align: center;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 1.3rem;">📍 Lokasi</h3>
                <p style="color: var(--text-light);">Jakarta, Indonesia</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="section-padding">
    <div class="container" style="text-align: center;">
        <h2 class="section-title">Ikuti Saya</h2>
        
        <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
            <a href="#" style="
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                background: var(--primary-color);
                color: white;
                border-radius: 50%;
                font-size: 1.5rem;
                transition: all 0.3s ease;
            " onmouseover="this.style.transform='scale(1.1)'; this.style.background='var(--secondary-color)'" 
               onmouseout="this.style.transform='scale(1)'; this.style.background='var(--primary-color)'">
                f
            </a>
            
            <a href="#" style="
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                background: var(--primary-color);
                color: white;
                border-radius: 50%;
                font-size: 1.5rem;
                transition: all 0.3s ease;
            " onmouseover="this.style.transform='scale(1.1)'; this.style.background='var(--secondary-color)'" 
               onmouseout="this.style.transform='scale(1)'; this.style.background='var(--primary-color)'">
                🐦
            </a>
            
            <a href="#" style="
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                background: var(--primary-color);
                color: white;
                border-radius: 50%;
                font-size: 1.5rem;
                transition: all 0.3s ease;
            " onmouseover="this.style.transform='scale(1.1)'; this.style.background='var(--secondary-color)'" 
               onmouseout="this.style.transform='scale(1)'; this.style.background='var(--primary-color)'">
                in
            </a>
            
            <a href="#" style="
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 50px;
                height: 50px;
                background: var(--primary-color);
                color: white;
                border-radius: 50%;
                font-size: 1.5rem;
                transition: all 0.3s ease;
            " onmouseover="this.style.transform='scale(1.1)'; this.style.background='var(--secondary-color)'" 
               onmouseout="this.style.transform='scale(1)'; this.style.background='var(--primary-color)'">
                📷
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

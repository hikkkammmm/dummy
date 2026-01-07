# 🎨 Portfolio Website - PHP, HTML, CSS

Website portfolio profesional yang dibangun menggunakan **PHP**, **HTML**, dan **CSS**.

## 📋 Fitur Utama

✨ **Halaman Utama (Home)**
- Hero section dengan call-to-action
- Preview portfolio terbaru
- Section "Tertarik Bekerja Sama?"

👤 **Halaman Tentang (About)**
- Informasi personal
- Pengalaman kerja
- Keahlian & skill set
- Pendidikan & sertifikasi

🎯 **Halaman Portfolio**
- Grid tampilan 6+ proyek
- Deskripsi lengkap setiap proyek
- Tag teknologi yang digunakan
- Statistik proyek

📞 **Halaman Hubungi (Contact)**
- Form kontak lengkap
- Validasi PHP server-side
- Logging pesan ke file
- Informasi kontak & sosial media

## 🗂️ Struktur Folder

```
portfolio/
├── index.php                    # Halaman utama
├── css/
│   └── style.css               # File CSS utama
├── pages/
│   ├── about.php               # Halaman tentang
│   ├── portfolio.php           # Halaman portfolio
│   └── contact.php             # Halaman hubungi
├── includes/
│   ├── header.php              # Header & navigasi (reusable)
│   └── footer.php              # Footer (reusable)
├── assets/
│   └── img/                    # Folder untuk gambar
├── logs/
│   └── contact_messages.txt    # Log pesan kontak (auto-generated)
└── README.md                   # File dokumentasi ini
```

## 🚀 Cara Menjalankan

### 1. Persyaratan
- PHP 7.4+ (sudah terinstall dengan server lokal)
- XAMPP, WAMP, atau LAMP installed
- Browser modern (Chrome, Firefox, Safari, Edge)

### 2. Setup Menggunakan XAMPP

**Opsi A: Menggunakan PHP Built-in Server**
```powershell
cd d:\coding\UASCC\portfolio
php -S localhost:8000
```
Akses di browser: `http://localhost:8000`

**Opsi B: Menggunakan XAMPP**
1. Copy folder `portfolio` ke `C:\xampp\htdocs\`
2. Buka XAMPP Control Panel, start Apache
3. Akses di browser: `http://localhost/portfolio`

### 3. Test Semua Fitur

**Halaman Beranda**
- Klik "Lihat Portfolio Saya" untuk ke halaman portfolio
- Klik "Hubungi Saya" untuk ke halaman kontak

**Halaman Tentang**
- Lihat informasi lengkap tentang developer
- Skill tags yang interaktif

**Halaman Portfolio**
- Scroll dan lihat 6 proyek dengan detail
- Badge teknologi di setiap proyek

**Halaman Hubungi**
- Isi form dengan nama, email, subjek, pesan
- Klik "Kirim Pesan"
- Pesan disimpan di `portfolio/logs/contact_messages.txt`

## 📝 File Penting

### index.php
- Halaman utama portfolio
- Include header dan footer
- Menampilkan hero section dan preview portfolio

### pages/about.php
- Informasi lengkap tentang developer
- Pengalaman, keahlian, pendidikan
- Layout responsif dengan 3 kolom

### pages/portfolio.php
- Grid tampilan 6 proyek
- Statistik proyek (20+, 15+, 5+, 100%)
- Tag teknologi untuk setiap proyek

### pages/contact.php
- Form kontak dengan validasi PHP
- Proses data secara server-side
- Logging ke file `logs/contact_messages.txt`
- Menampilkan pesan sukses/error

### css/style.css
- Styling untuk semua halaman
- Responsive design (mobile, tablet, desktop)
- Animasi dan transisi smooth
- CSS Grid & Flexbox untuk layout

### includes/header.php
- Navigation bar dengan menu
- Active link indicator
- Reusable untuk semua halaman

### includes/footer.php
- Footer dengan 3 kolom
- Link kontak & sosial media
- Copyright section

## 🔧 Teknologi & Tools

| Teknologi | Fungsi |
|-----------|--------|
| **HTML5** | Struktur & semantic markup |
| **CSS3** | Styling, layout, animasi |
| **PHP** | Server-side processing, form handling |
| **Vanilla JavaScript** | Validasi form & interaktivitas |

## 🎨 Design Features

- **Modern Design**: Gradien, shadow, dan spacing yang profesional
- **Responsive**: Mobile-first approach, breakpoint di 768px dan 480px
- **Smooth Animations**: Fade in, slide, dan hover effects
- **Color Scheme**: 
  - Primary: #6c5ce7 (Ungu)
  - Secondary: #00b894 (Hijau)
  - Dark: #2d3436
  - Light: #f5f6fa

## 📱 Responsive Breakpoints

```css
Desktop:   1200px dan atas
Tablet:    768px - 1199px
Mobile:    480px - 767px
Small:     Di bawah 480px
```

## 🔒 Keamanan

✅ Validasi input PHP server-side
✅ Sanitasi dengan `htmlspecialchars()`
✅ Validasi email dengan `filter_var()`
✅ Check method POST sebelum proses
✅ File logging di folder terpisah

## 💾 Logging

Pesan kontak disimpan di:
```
portfolio/logs/contact_messages.txt
```

Format log:
```
[2025-01-07 14:30:00] Nama: John Doe | Email: john@example.com | Subjek: Proyek Baru
Pesan: Saya tertarik untuk membuat website baru...
────────────────────────────────────────────────────────────────────────────────
```

## 🎯 Customization

### Ubah Nama & Info
Edit bagian berikut di file-file:
- `index.php` - Info di hero section & CTA
- `pages/about.php` - Tentang saya & keahlian
- `includes/footer.php` - Email & telepon

### Ubah Warna
Edit CSS variables di `css/style.css`:
```css
:root {
    --primary-color: #6c5ce7;
    --secondary-color: #00b894;
    /* ... */
}
```

### Tambah Proyek
Edit `pages/portfolio.php`, duplicate portfolio-item dan sesuaikan:
```html
<div class="portfolio-item">
    <div class="portfolio-image" style="background: linear-gradient(...);">📱</div>
    <div class="portfolio-content">
        <h3>Nama Proyek</h3>
        <p>Deskripsi proyek...</p>
        <div class="portfolio-tags">
            <span class="tag">Tech1</span>
            <span class="tag">Tech2</span>
        </div>
    </div>
</div>
```

## 🐛 Troubleshooting

**Problem**: Halaman blank saat akses
- **Solusi**: Pastikan PHP server berjalan, check syntax di file

**Problem**: CSS tidak muncul
- **Solusi**: Periksa path CSS relative terhadap file HTML

**Problem**: Form tidak bisa mengirim
- **Solusi**: Cek folder `logs` punya permission write, atau buat manual

**Problem**: Pesan tidak tersimpan
- **Solusi**: Buat folder `logs` secara manual: `portfolio/logs/`

## 📈 Enhancement Ideas

Untuk pengembangan lebih lanjut:
- [ ] Tambah database MySQL untuk proyek & contact form
- [ ] Implementasi email notification saat ada pesan baru
- [ ] Admin dashboard untuk manage proyek
- [ ] Search & filter di halaman portfolio
- [ ] Comment system di setiap proyek
- [ ] Blog section
- [ ] Dark mode toggle
- [ ] Multi-language support

## 📄 Lisensi

Project ini bebas digunakan untuk keperluan pembelajaran dan personal.

---

**Dibuat dengan ❤️ menggunakan PHP, HTML & CSS**

**Happy Coding! 🚀**

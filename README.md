# 🌐 Portfolio Pemrograman Web
**Mata Kuliah: Pemrograman Web**  
**NIM: 202312061**  
**Nama: Nurita Wahyuni**  
**Institusi: STITEK Bontang**

---

## 📋 Deskripsi Proyek

Repository ini merupakan kumpulan lengkap tugas dan project dari mata kuliah Pemrograman Web yang dirancang untuk memberikan pengalaman pembelajaran progresif dari HTML dasar hingga aplikasi web dinamis dengan PHP dan database. Proyek ini mencakup 6 modul pembelajaran yang masing-masing membangun fondasi teknologi web modern.

**Tujuan Proyek:**
- Memahami fundamental teknologi web (HTML, CSS, JavaScript)
- Menguasai framework modern (Bootstrap)
- Mempelajari server-side programming (PHP)
- Mengintegrasikan database dengan aplikasi web
- Mengembangkan aplikasi web full-stack yang responsive dan aman

**Manfaat Pembelajaran:**
- Kemampuan membangun website dari nol hingga deployment
- Pemahaman mendalam tentang client-server architecture
- Keterampilan debugging dan problem-solving
- Penerapan best practices dalam web development

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi | Penggunaan |
|-----------|-------|------------|
| **HTML5** | Latest | Struktur dan markup halaman web |
| **CSS3** | Latest | Styling, layout, dan responsive design |
| **JavaScript** | ES6+ | Interaktivitas dan dynamic content |
| **Bootstrap** | 5.3.3 | Framework CSS untuk responsive design |
| **PHP** | 7.4+ | Server-side scripting dan backend logic |
| **MySQL** | 8.0+ | Database management system |

## 📁 Struktur Folder

```
Portofolio-Pemrograman-Web-202312061/
├── modul1/                     # HTML Fundamentals
│   └── pendaftaranmahasiswa.html # Form pendaftaran mahasiswa
├── modul2/                     # CSS & Responsive Design
│   └── halamanweb_css.html     # HTML structure dengan CSS
├── modul3/                     # Bootstrap Framework
│   └── company_profile.html    # Company profile dengan Bootstrap
├── modul4/                     # JavaScript Programming
│   └── mini_ecomerce.html      # Mini E-commerce dengan JavaScript
├── modul5/                     # PHP Fundamentals
│   └── bukutamu.php            # Buku tamu digital dengan validasi
├── modul6/                     # PHP & Database Integration
│   ├── index.php               # Halaman utama
│   ├── tambah.php              # Form tambah produk
│   ├── edit.php                # Form edit produk
│   ├── hapus.php               # Fungsi hapus produk
│   ├── koneksi.php             # Konfigurasi database
│   └── db_toko.sql             # Script database
└── README.md                   # Dokumentasi project
```

## 🎯 Detail Setiap Modul

### 📝 Modul 1: HTML Fundamentals
**File:** `modul1/pendaftaranmahasiswa.html`

**Deskripsi:** Formulir pendaftaran mahasiswa baru yang mendemonstrasikan penggunaan elemen HTML dasar dengan struktur semantik dan validasi form.

**Fitur:**
- Form validation dengan atribut `required`
- Input types: text, email, radio, checkbox, select, textarea
- Fieldset untuk grouping form elements
- Inline CSS styling
- Struktur HTML5 semantic

**Konsep yang Dipelajari:**
- Struktur HTML5 semantic
- Form elements dan attributes
- Basic styling dengan inline CSS
- Accessibility considerations

---

### 🎨 Modul 2: CSS & Responsive Design
**File:** `modul2/halamanweb_css.html`

**Deskripsi:** Implementasi CSS Grid Layout dengan responsive design untuk berbagai ukuran layar dan styling modern.

**Fitur:**
- CSS Grid Layout system
- Responsive breakpoints untuk berbagai device
- Custom color scheme dan typography
- Mobile-first approach
- External CSS styling

**Konsep yang Dipelajari:**
- CSS Grid vs Flexbox
- Media queries untuk responsive design
- CSS custom properties
- Box model dan positioning

---

### 🚀 Modul 3: Bootstrap Framework
**File:** `modul3/company_profile.html`

**Deskripsi:** Company profile menggunakan Bootstrap framework untuk rapid development dan responsive design.

**Fitur:**
- Responsive navigation dengan hamburger menu
- Bootstrap grid system
- Card components untuk product showcase
- Table styling dengan Bootstrap classes
- Footer dengan social media links

**Konsep yang Dipelajari:**
- Bootstrap component library
- Utility classes dan spacing
- Responsive grid system
- Component customization

---

### ⚡ Modul 4: JavaScript Programming
**File:** `modul4/mini_ecomerce.html`

**Deskripsi:** Aplikasi mini e-commerce dengan JavaScript interaktivity dan dynamic content.

**Fitur:**
- Real-time clock display
- Image slideshow dengan navigation
- Dynamic product catalog
- Form validation dan error handling
- Shopping cart calculation dengan promo codes
- Receipt generation

**Konsep yang Dipelajari:**
- DOM manipulation
- Event handling
- Array dan object manipulation
- Form validation
- Local storage (optional)

---

### 🔧 Modul 5: PHP Fundamentals
**File:** `modul5/bukutamu.php`

**Deskripsi:** Buku tamu digital STITEK Bontang dengan server-side validation dan processing.

**Fitur:**
- Server-side form processing
- Input validation dan sanitization
- Error handling dan user feedback
- Responsive design dengan custom CSS
- XSS protection dengan `htmlspecialchars()`

**Konsep yang Dipelajari:**
- PHP syntax dan variables
- Form handling dengan `$_POST`
- Input validation techniques
- Security best practices
- PHP dan HTML integration

---

### 🗄️ Modul 6: PHP & Database Integration
**Directory:** `modul6/`

**Deskripsi:** Aplikasi CRUD (Create, Read, Update, Delete) untuk manajemen produk toko online dengan integrasi database MySQL.

**Fitur:**
- Database connection dengan MySQLi
- Full CRUD operations
- Data listing dengan table format
- Form handling untuk input/edit
- Confirmation dialogs untuk delete operations
- Error handling untuk database operations

**Files:**
- `index.php` - Halaman utama dengan listing produk
- `tambah.php` - Form tambah produk baru
- `edit.php` - Form edit produk existing
- `hapus.php` - Fungsi delete produk
- `koneksi.php` - Database configuration
- `db_toko.sql` - Script database

**Konsep yang Dipelajari:**
- Database design dan normalization
- SQL queries (SELECT, INSERT, UPDATE, DELETE)
- PHP-MySQL integration
- Security considerations untuk database
- Error handling dan debugging

## 🚀 Cara Menjalankan Proyek

1. **Setup Web Server:**
   - Install XAMPP/WAMP/LAMP dan aktifkan layanan Apache dan MySQL.
   - Salin folder proyek ke `htdocs` (XAMPP) atau `www` (WAMP).
2. **Setup Database:**
   - Buat database dan impor `db_toko.sql`.
   - Sesuaikan koneksi pada `koneksi.php`.
3. **Akses Proyek:**
   - Modul diakses melalui URL seperti `https://github.com/nurita-wahyuni/praktikum-pweb/modul1/pendaftaranmahasiswa.html`.

## 📱 Responsive Design

Semua project telah dioptimasi untuk berbagai ukuran layar:

- **Desktop:** ≥ 1024px
- **Tablet:** 768px - 1023px  
- **Mobile:** ≤ 767px

## 🔒 Security Features

- **Input Validation:** Client-side dan server-side validation
- **XSS Protection:** Penggunaan `htmlspecialchars()` untuk sanitasi input
- **SQL Injection Prevention:** Prepared statements (dapat ditingkatkan)
- **CSRF Protection:** Token validation (untuk pengembangan lanjutan)

## 🎨 Design Patterns

- **Mobile-First Approach:** Responsive design dimulai dari mobile
- **Progressive Enhancement:** Fitur ditambahkan secara bertahap
- **Separation of Concerns:** HTML, CSS, dan JavaScript terpisah
- **DRY Principle:** Don't Repeat Yourself dalam kode

## 📈 Learning Outcomes

Setelah menyelesaikan semua modul, mahasiswa mampu:

1. **Frontend Development:**
   - Membuat struktur HTML semantik
   - Implementasi CSS modern dengan Grid/Flexbox
   - Menggunakan framework CSS (Bootstrap)
   - Programming JavaScript untuk interaktivitas

2. **Backend Development:**
   - PHP programming fundamentals
   - Database integration dengan MySQL
   - Server-side validation dan security

3. **Full-Stack Integration:**
   - Menggabungkan frontend dan backend
   - Database design dan management
   - Deployment dan hosting considerations

## 🤝 Contributing

Untuk kontribusi atau perbaikan:

1. Fork repository ini
2. Buat branch baru (`git checkout -b feature/improvement`)
3. Commit perubahan (`git commit -am 'Add new feature'`)
4. Push ke branch (`git push origin feature/improvement`)
5. Buat Pull Request

## 📈 Pembelajaran yang Diperoleh

Melalui proyek ini, mahasiswa mampu memahami dan mengimplementasikan:

1. **Struktur HTML semantik dan responsif** - Membangun fondasi yang kuat untuk web development
2. **Penggunaan CSS modern** - Styling yang efektif dan maintainable
3. **Pembuatan aplikasi interaktif dengan JavaScript** - Menambahkan dinamisme pada website
4. **Integrasi server-side dengan PHP dan MySQL** - Membangun aplikasi full-stack
5. **Best practices dalam security web** - Implementasi keamanan dasar

## 📄 Catatan

**Catatan Penting:**
- Proyek ini disusun sebagai bagian dari mata kuliah Pemrograman Web
- Semua modul telah ditest pada environment local development
- Untuk production deployment, diperlukan konfigurasi security tambahan
- Documentation ini akan terus diperbarui seiring perkembangan proyek

## 📞 Kontak

**Nurita Wahyuni**  
- 📧 Email: nuritawahyuni4@gmail.com
- 🏢 Institusi: STITEK Bontang
- 🆔 NIM: 202312061
- 📍 GitHub: https://github.com/nurita-wahyuni/praktikum-pweb

---

## 📄 License

Project ini dibuat untuk keperluan akademik mata kuliah Pemrograman Web di STITEK Bontang.

---

**© 2025 Nurita Wahyuni - STITEK Bontang | Portfolio Pemrograman Web**

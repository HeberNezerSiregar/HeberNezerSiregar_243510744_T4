<?php 
include 'config.php'; 
$query = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heber Nezer Siregar | Portofolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            margin-top: 60px;
            margin-bottom: 80px;
        }
        .hero-content { flex: 1; }
        .hero-image-container {
            position: relative;
            width: 320px;
            height: 420px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 24px;
            padding: 15px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
        }
        .hero-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin: 20px 0;
            font-size: 1.3rem;
        }
        .social-icons a {
            color: #94a3b8;
            transition: color 0.3s;
        }
        .social-icons a:hover { color: #10b981; }
        
        .about-box {
            background: rgba(17, 24, 39, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 80px;
        }
        .stats-grid {
            display: flex;
            gap: 50px;
            margin-top: 30px;
        }
        .stat-item h2 {
            font-size: 2.5rem;
            color: #3b82f6;
            margin: 0;
        }
        .stat-item p {
            color: #64748b;
            font-size: 0.85rem;
            text-transform: uppercase;
            margin-top: 5px;
        }

        /* Responsive untuk HP */
        @media (max-width: 768px) {
            .hero-section { flex-direction: column-reverse; text-align: center; }
            .hero-image-container { width: 100%; max-width: 300px; height: 380px; margin: 0 auto; }
            .social-icons { justify-content: center; }
            .stats-grid { justify-content: center; gap: 20px; }
        }
    </style>
</head>
<body>
    <div class="bg-glow-left"></div>
    <div class="bg-glow-right"></div>

    <div class="container">
        <nav style="display: flex; justify-content: space-between; align-items: center; padding: 20px 0;">
            <div style="font-weight: bold; font-size: 1.4rem; color: #fff;">Heber<span style="color: #10b981;">.</span></div>
            <div style="display: flex; gap: 25px; font-size: 0.95rem;">
                <a href="#" style="color: #10b981; text-decoration: none;">Beranda</a>
                <a href="#tentang" style="color: #94a3b8; text-decoration: none;">Tentang</a>
                <a href="#proyek" style="color: #94a3b8; text-decoration: none;">Proyek</a>
                <a href="#kontak" style="color: #94a3b8; text-decoration: none;">Kontak</a>
                <a href="admin.php" style="color: #3b82f6; text-decoration: none; font-weight: bold;">Menu Admin</a>
            </div>
        </nav>

        <section class="hero-section">
            <div class="hero-content">
                <p style="color: #10b981; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; font-weight: 600;">Halo, Saya</p>
                <h1 style="font-size: 3rem; margin: 10px 0; line-height: 1.1; font-weight: 800;">Heber Nezer<br><span style="color: #94a3b8; font-size: 2.2rem;">Siregar</span></h1>
                <p style="font-size: 1.2rem; color: #e2e8f0; font-weight: 500;">Seorang <span style="color: #10b981;">Mahasiswa Teknik Informatika UIR</span></p>
                
                <p style="color: #64748b; max-width: 450px; line-height: 1.6; font-size: 0.95rem;">Mahasiswa Teknik Informatika yang siap membantu bisnis dan individu mentransformasikan ide menjadi kode, menciptakan solusi digital yang fungsional dan estetis.</p>
                
                <div style="margin-top: 30px; display: flex; gap: 15px;">
                    <a href="#proyek" class="btn">Lihat Proyek ↗</a>
                    <a href="#kontak" class="btn" style="background: transparent; border: 1px solid #374151;">Kontak Saya</a>
                </div>
            </div>

            <div class="hero-image-container">
                <img src="img\Fotoku.jpeg" alt="Heber Nezer Siregar">
                <div style="position: absolute; bottom: 30px; left: 30px; background: rgba(0,0,0,0.6); padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; backdrop-filter: blur(5px);">
                     Heber Nezer Siregar
                </div>
            </div>
        </section>

        <section id="tentang" class="about-box">
            <h2 style="font-size: 1.8rem; margin-top: 0;">Tentang <span style="color: #8b5cf6;">Saya</span></h2>
            <p style="color: #10b981; font-style: italic; margin-top: -10px; font-size: 0.9rem;">Teknik informatika  UIR.</p>
            <p style="color: #94a3b8; line-height: 1.7; margin-top: 20px;">
Saya adalah mahasiswa Teknik Informatika semester 4, saya Terbiasa memecahkan masalah secara mandiri, saya memandang coding sebagai sebuah seni menyusun logika yang hidup.
Saat ini, saya fokus mendalami bidang Artificial Intelligence (AI) untuk menggabungkan algoritma cerdas dengan teknologi web/aplikasi, demi menciptakan solusi digital masa depan yang inovatif, fungsional, dan bernilai estetika tinggi.            </p>
        </section>

        <section id="proyek" style="margin-bottom: 80px;">
            <h2 style="font-size: 1.8rem; text-align: center; margin-bottom: 5px;">Proyek <span style="color: #10b981;">Terpilih</span></h2>
            <p style="color: #64748b; text-align: center; font-size: 0.9rem; margin-bottom: 40px;">Beberapa karya yang menyoroti keahlian saya.</p>

            <div class="project-grid">
                <?php if(mysqli_num_rows($query) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($query)): ?>
                        
                        <div class="project-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                            <div style="width: 100%; height: 200px; overflow: hidden; border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <img src="uploads/<?= htmlspecialchars($row['image']); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                            </div>
                            
                            <div style="padding: 25px;">
                                <div class="tech-stack" style="text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;"><i class="fas fa-code" style="margin-right: 5px;"></i> <?= htmlspecialchars($row['tech']); ?></div>
                                <h3 style="margin: 10px 0 15px 0; font-size: 1.3rem;"><?= htmlspecialchars($row['title']); ?></h3>
                                <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem; margin-bottom: 0;"><?= htmlspecialchars($row['description']); ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php else: ?>
                    <div style="grid-column: 1/-1; text-align: center; background: rgba(255,255,255,0.02); padding: 60px; border-radius: 20px; border: 1px dashed rgba(255,255,255,0.1);">
                        <i class="fas fa-folder-open" style="font-size: 2.5rem; color: #475569; margin-bottom: 15px;"></i>
                        <p style="color: #64748b; margin: 0;">Belum ada proyek dinamis. Silakan isi lewat <a href="admin.php" style="color: #3b82f6; text-decoration: none; font-weight: bold;">Halaman Admin</a>.</p>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section id="kontak" style="margin-bottom: 100px; margin-top: 60px;">
            <h2 style="font-size: 1.8rem; text-align: center; margin-bottom: 5px;">Mari <span style="color: #3b82f6;">Terhubung</span></h2>
            <p style="color: #64748b; text-align: center; font-size: 0.9rem; margin-bottom: 40px;">Hubungi saya secara langsung melalui saluran di bawah ini.</p>

            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; max-width: 700px; margin: 0 auto;">
                
                <div class="project-card" style="flex: 1; min-width: 280px; text-align: center; padding: 30px 20px;">
                    <div style="width: 50px; height: 50px; background: rgba(59, 130, 246, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                        <i class="fas fa-envelope" style="color: #3b82f6; font-size: 1.5rem;"></i>
                    </div>
                    <p style="color: #64748b; font-size: 0.8rem; text-transform: uppercase; margin: 0; letter-spacing: 1px;">Email Resmi</p>
                    <h3 style="margin: 10px 0 20px 0; font-size: 1.1rem; word-break: break-all;">hebersiregar29@gmail.com</h3>
                    <a href="mailto:hebersiregar29@gmail.com" class="btn" style="width: 80%; background: linear-gradient(135deg, #3b82f6, #1d4ed8);">Kirim Email ↗</a>
                </div>

                <div class="project-card" style="flex: 1; min-width: 280px; text-align: center; padding: 30px 20px;">
                    <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto;">
                        <i class="fab fa-whatsapp" style="color: #10b981; font-size: 1.6rem;"></i>
                    </div>
                    <p style="color: #64748b; font-size: 0.8rem; text-transform: uppercase; margin: 0; letter-spacing: 1px;">WhatsApp / Telepon</p>
                    <h3 style="margin: 10px 0 20px 0; font-size: 1.1rem;">+62 813 7177 1437</h3>
                    <a href="https://wa.me/6281371771437" target="_blank" class="btn" style="width: 80%;">Kirim Chat ↗</a>
                </div>

            </div>
        </section>

    </div> </body>
</html>
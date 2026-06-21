<?php 
include 'config.php';

$query = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Kelola Portofolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg-glow-left"></div>
    <div class="bg-glow-right"></div>

    <div class="container">
        <a href="index.php" style="color: #3b82f6; text-decoration: none; font-weight: bold;">← Kembali ke Portofolio Utama</a>
        
        <h2 style="margin-top: 30px;">Tambah Proyek Baru (CREATE)</h2>
        
        <form action="proses.php?aksi=tambah" method="POST" enctype="multipart/form-data" class="project-card">
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Judul Proyek</label>
                <input type="text" name="title" placeholder="Masukkan judul proyek..." required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Tech Stack</label>
                <input type="text" name="tech" placeholder="Contoh: React, Tailwind, PHP" required>
            </div>
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px;">Deskripsi Proyek</label>
                <textarea name="description" placeholder="Jelaskan secara singkat mengenai proyek ini..." rows="4" required></textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 5px;">Gambar/Foto Proyek</label>
                <input type="file" name="image" accept="image/*" required style="padding: 5px 0;">
            </div>
            
            <button type="submit" class="btn">Simpan Proyek</button>
        </form>

        <h2 style="margin-top: 50px;">Daftar Proyek Saat Ini</h2>
        
        <table width="100%" style="margin-top: 20px; border-collapse: collapse; background: rgba(17, 24, 39, 0.4); border-radius: 8px; overflow: hidden;">
            <thead>
                <tr style="background: #111827; border-bottom: 2px solid #374151; text-align: left;">
                    <th style="padding: 15px 10px; width: 100px;">Gambar</th>
                    <th style="padding: 15px 10px;">Judul Proyek</th>
                    <th style="padding: 15px 10px;">Teknologi</th>
                    <th style="padding: 15px 10px; width: 180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($query) > 0): ?>
                    <?php while($row = mysqli_fetch_assoc($query)): ?>
                    <tr style="border-bottom: 1px solid #1f2937;">
                        <td style="padding: 10px;">
                            <img src="uploads/<?= htmlspecialchars($row['image']); ?>" width="80" height="60" style="object-fit: cover; border-radius: 6px; border: 1px solid rgba(255,255,255,0.1);">
                        </td>
                        <td style="padding: 15px 10px; font-weight: 500;"><?= htmlspecialchars($row['title']); ?></td>
                        <td style="padding: 15px 10px;"><span style="color: #10b981; font-size: 0.9rem;"><?= htmlspecialchars($row['tech']); ?></span></td>
                        <td style="padding: 15px 10px;">
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn" style="background: #f59e0b; margin-right: 5px; padding: 6px 12px; font-size: 0.9rem;">Edit</a>
                            <a href="proses.php?aksi=hapus&id=<?= $row['id']; ?>" class="btn btn-danger" style="padding: 6px 12px; font-size: 0.9rem;" onclick="return confirm('Yakin ingin menghapus proyek ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="padding: 30px; text-align: center; color: #94a3b8;">Belum ada proyek yang ditambahkan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
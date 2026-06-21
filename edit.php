<?php 
include 'config.php'; 

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$query = mysqli_query($conn, "SELECT * FROM projects WHERE id = $id");
$data  = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Proyek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="admin.php" style="color: #3b82f6; text-decoration: none;">← Batal dan Kembali</a>
        <h2>Edit Proyek: <?= htmlspecialchars($data['title']); ?></h2>
        
        <form action="proses.php?aksi=update&id=<?= $data['id']; ?>" method="POST" class="project-card">
            <label>Judul Proyek</label>
            <input type="text" name="title" value="<?= htmlspecialchars($data['title']); ?>" required>
            
            <label>Tech Stack</label>
            <input type="text" name="tech" value="<?= htmlspecialchars($data['tech']); ?>" required>
            
            <label>Deskripsi Proyek</label>
            <textarea name="description" rows="5" required><?= htmlspecialchars($data['description']); ?></textarea>
            
            <button type="submit" class="btn">Perbarui Proyek</button>
        </form>
    </div>
</body>
</html>
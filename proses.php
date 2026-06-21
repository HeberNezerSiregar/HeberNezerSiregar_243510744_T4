<?php
include 'config.php';

$aksi = $_GET['aksi'] ?? '';

if ($aksi == 'tambah') {
    $title       = mysqli_real_escape_string($conn, $_POST['title']);
    $tech        = mysqli_real_escape_string($conn, $_POST['tech']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $image_name = $_FILES['image']['name'];
    $image_tmp  = $_FILES['image']['tmp_name'];
    
    $image_ext      = pathinfo($image_name, PATHINFO_EXTENSION);
    $new_image_name = time() . '_' . rand(100, 999) . '.' . $image_ext;

    $target_dir = "uploads/";
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $target_file = $target_dir . $new_image_name;

    if (move_uploaded_file($image_tmp, $target_file)) {
        // Jika file berhasil diupload, simpan nama filenya ke database
        $query = "INSERT INTO projects (title, tech, description, image) VALUES ('$title', '$tech', '$description', '$new_image_name')";
        
        if (mysqli_query($conn, $query)) {
            header("Location: admin.php");
        } else {
            echo "Gagal menyimpan ke database: " . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengunggah file gambar.";
    }
}

if ($aksi == 'hapus') {
    $id = intval($_GET['id']);

    // Cari tahu nama file gambar lama sebelum menghapus baris dari database
    $get_project = mysqli_query($conn, "SELECT image FROM projects WHERE id = $id");
    $project_data = mysqli_fetch_assoc($get_project);

    if ($project_data) {
        $image_file = "uploads/" . $project_data['image'];
        // Hapus file gambar asli dari penyimpanan folder local
        if (file_exists($image_file)) {
            unlink($image_file);
        }
    }

    $query = "DELETE FROM projects WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        header("Location: admin.php");
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
}
?>
<?php
include '../confiq/koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    
    // Nonaktifkan sementara foreign key checks
    $conn->query("SET FOREIGN_KEY_CHECKS=0;");
    
    // Siapkan query DELETE dengan prepared statement
    $stmt = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
    $stmt->bind_param("i", $id);
    
    // Eksekusi dan tangani hasilnya
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus'); window.location='../Halaman/index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . addslashes($stmt->error) . "'); window.location='../Halaman/index.php';</script>";
    }
    
    // Aktifkan kembali foreign key checks
    $conn->query("SET FOREIGN_KEY_CHECKS=1;");
    
    $stmt->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='../Halaman/index.php';</script>";
}

$conn->close();
?>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id = $id");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h3>Edit Data Pesanan</h3>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_pelanggan']; ?>" required>
        </div>
        
        <div class="mb-3">
            <label>Jenis Layanan (Ubah jika perlu)</label>
            <select name="layanan" class="form-select">
                <option value="Cuci Basah" <?php if($data['jenis_layanan'] == 'Cuci Basah') echo 'selected'; ?>>Cuci Basah</option>
                <option value="Cuci Kering" <?php if($data['jenis_layanan'] == 'Cuci Kering') echo 'selected'; ?>>Cuci Kering</option>
                <option value="Cuci Setrika" <?php if($data['jenis_layanan'] == 'Cuci Setrika') echo 'selected'; ?>>Cuci Setrika</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Berat (Kg)</label>
            <input type="number" step="0.1" name="berat" class="form-control" value="<?php echo $data['berat']; ?>" required>
        </div>

        <div class="mb-3">
            <label>Status Laundry</label>
            <select name="status" class="form-select">
                <option value="Proses" <?php if($data['status'] == 'Proses') echo 'selected'; ?>>Sedang Proses</option>
                <option value="Selesai" <?php if($data['status'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>
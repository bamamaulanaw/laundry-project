<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Laundry Sederhana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    
    <h2 class="text-center mb-4">Daftar Pesanan Laundry</h2>
    
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Pesanan Baru</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Layanan</th>
                <th>Berat (Kg)</th>
                <th>Harga Total</th>
                <th>Tgl Masuk</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id DESC");
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_pelanggan']; ?></td>
                <td><?php echo $data['jenis_layanan']; ?></td>
                <td><?php echo $data['berat']; ?> Kg</td>
                <td>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
                <td><?php echo $data['tanggal_masuk']; ?></td>
                <td>
                    <?php 
                    if($data['status'] == 'Selesai'){
                        echo '<span class="badge bg-success">Selesai</span>';
                    } else {
                        echo '<span class="badge bg-warning text-dark">Proses</span>';
                    }
                    ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
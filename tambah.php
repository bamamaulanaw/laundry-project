<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h3>Tambah Pesanan Baru</h3>
    <form action="proses_tambah.php" method="post">
        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jenis Layanan</label>
            <select name="layanan" class="form-select">
                <option value="Cuci Basah">Cuci Basah (Rp 3.000/kg)</option>
                <option value="Cuci Kering">Cuci Kering (Rp 4.000/kg)</option>
                <option value="Cuci Setrika">Cuci Setrika (Rp 6.000/kg)</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Berat (Kg)</label>
            <input type="number" step="0.1" name="berat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tgl" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
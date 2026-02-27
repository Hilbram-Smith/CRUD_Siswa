<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Tambah Data Siswa</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf <div class="mb-3">
            <label>Nama Siswa</label>
            <input type="text" name="nama" class="form-control" required maxlength="50">
        </div>
        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nilai</label>
            <input type="number" step="0.01" name="nilai" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Simpan Data</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
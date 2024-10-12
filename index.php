<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid py-3">
        <header class="container my-2 w-50 p-2 text-center bg-dark text-light">
            <h1>FORMULIR MAHASISWA</h1>
        </header>
        <section class="container my-2 bg-dark w-50 text-light p-2">
        <form action="submit.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="ttl" class="form-label">Tempat, Tanggal Lahir:</label>
                <input type="text" class="form-control" id="ttl" name="ttl" required>
            </div>
            <div class="mb-3">
                <label for="jk" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" id="jk" name="jk" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">Nomor Handphone:</label>
                <input type="text" class="form-control" id="nohp" name="nohp" required>
            </div>
            <div class="mb-3">
                <label for="fakultas_prodi" class="form-label">Fakultas dan Prodi:</label>
                <input type="text" class="form-control" id="fakultas_prodi" name="fakultas_prodi" required>
            </div>
            <div class="mb-3">
                <label for="pesan_kesan" class="form-label">Pesan dan Kesan:</label>
                <textarea class="form-control" id="pesan_kesan" name="pesan_kesan" rows="3" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Clear</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </section>
    </div>
</body>
</html>

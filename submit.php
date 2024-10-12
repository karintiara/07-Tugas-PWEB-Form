<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <header class="my-2 p-2 text-center">
            <h1>DATA MAHASISWA</h1>
        </header>
        <table class="table table-bordered">
            <tr class="table-dark text-center">
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor Handphone</th>
                <th>Fakultas & Prodi</th>
                <th>Pesan & Kesan</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_POST['nama']); ?></td>
                <td><?php echo htmlspecialchars($_POST['ttl']); ?></td>
                <td><?php echo htmlspecialchars($_POST['jk']); ?></td>
                <td><?php echo htmlspecialchars($_POST['alamat']); ?></td>
                <td><?php echo htmlspecialchars($_POST['nohp']); ?></td>
                <td><?php echo htmlspecialchars($_POST['fakultas_prodi']); ?></td>
                <td><?php echo htmlspecialchars($_POST['pesan_kesan']); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>

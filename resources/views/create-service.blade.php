<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan Baru</title>
    <style>
        body { font-family: sans-serif; margin: 40px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; }
        input, textarea { width: 300px; padding: 8px; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>

    <h1>Form Tambah Layanan Baru</h1>

    <form action="#" method="POST">

        <div class="form-group">
            <label for="nama_layanan">Nama Layanan</label>
            <input type="text" id="nama_layanan" name="nama_layanan">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Singkat</label>
            <textarea id="deskripsi" name="deskripsi"></textarea>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga">
        </div>

        <button type="submit">Simpan Layanan</button>

    </form>

</body>
</html>
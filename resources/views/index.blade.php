<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apotek</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="shortcut icon" href="assets/images/logo.png">
</head>

<body>
    <h1>APOTEK</h1>
    <div class="container">
        <div class="subcontainer1">
            <h3>Tabel Obat</h3>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Kategori Obat</th>
                    <th>Harga Beli Obat</th>
                    <th>Harga Jual Obat</th>
                    <th>Jumlah Obat</th>
                    <th>Keterangan</th>
                </tr>
                @foreach ($data as $obat)
                    <tr>
                        <td>{{ $obat->id }}</td>
                        <td>{{ $obat->kode }}</td>
                        <td>{{ $obat->nama }}</td>
                        <td>{{ $obat->jenis }}</td>
                        <td>{{ $obat->kategori }}</td>
                        <td>{{ $obat->harga_beli }}</td>
                        <td>{{ $obat->harga_jual }}</td>
                        <td>{{ $obat->jumlah }}</td>
                        <td>
                            <a class="update" href="/update/{{ $obat->kode }}">UPDATE</a>
                            |
                            <a class="delete" href="/hapus/{{ $obat->kode }}"> HAPUS</a>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="subcontainer2">
            <h3>Kelola Data Obat</h3>
            @foreach ($data2 as $obat2)
                <form action="/kelola" method="post">
                    <table>
                        <tr>
                            <td>Kode Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."
                                    value="{{ $obat2->kode }}"></td>
                        </tr>
                        <tr>
                            <td>Nama Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."></td>
                        </tr>
                        <tr>
                            <td>Jenis Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."></td>
                        </tr>
                        <tr>
                            <td>Kategori Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."></td>
                        </tr>
                        <tr>
                            <td>Harga Jual Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."></td>
                        </tr>
                        <tr>
                            <td>Harga Beli Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."></td>
                        </tr>
                        <tr>
                            <td>Jumlah Obat</td>
                            <td><input type="text" name="" placeholder="Input here ..."></td>
                        </tr>
                    </table>
                    <div class="subsubcontainer">
                        <input type="submit" class="tombol ubah" name="ubah" value="UBAH">
                        <input type="submit" class="tombol ubah" name="input" value="INPUT">
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</body>

</html>

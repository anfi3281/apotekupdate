<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apotek</title>
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <link rel="shortcut icon" href="/assets/images/logo.png">
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
                <?php $urutan = 0;?>
                @foreach ($data as $obat)
                <?php $urutan += 1;?>
                    <tr>
                        <td>{{ $urutan }}</td>
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
            @switch($form)
                @case(1)
                    <form action="/kelola" method="post">
                        {{ csrf_field() }}
                        <table>
                            <tr>
                                <td>Kode Obat</td>
                                <td><input type="text" name="kode" placeholder="Input here ..."></td>
                            </tr>
                            <tr>
                                <td>Nama Obat</td>
                                <td><input type="text" name="nama" placeholder="Input here ..."></td>
                            </tr>
                            <tr>
                                <td>Jenis Obat</td>
                                <td><input type="text" name="jenis" placeholder="Input here ..."></td>
                            </tr>
                            <tr>
                                <td>Kategori Obat</td>
                                <td><input type="text" name="kategori" placeholder="Input here ..."></td>
                            </tr>
                            <tr>
                                <td>Harga Beli Obat</td>
                                <td><input type="text" name="harga_beli" placeholder="Input here ..."></td>
                            </tr>
                            <tr>
                                <td>Harga Jual Obat</td>
                                <td><input type="text" name="harga_jual" placeholder="Input here ..."></td>
                            </tr>
                            <tr>
                                <td>Jumlah Obat</td>
                                <td><input type="text" name="jumlah" placeholder="Input here ..."></td>
                            </tr>
                        </table>
                        <div class="subsubcontainer">
                            <input type="submit" class="tombol ubah" name="ubah" value="UBAH">
                            <input type="submit" class="tombol ubah" name="input" value="INPUT">
                        </div>
                    </form>
                @break

                @case(2)
                    @foreach ($data2 as $obat2)
                        <form action="/kelola" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="kodesimpan" value="{{ $obat2->kode }}">
                            <table>
                                <tr>
                                    <td>Kode Obat</td>
                                    <td><input type="text" name="kode" placeholder="Input here ..."
                                            value="{{ $obat2->kode }}"></td>
                                </tr>
                                <tr>
                                    <td>Nama Obat</td>
                                    <td><input type="text" name="nama" placeholder="Input here ..."
                                            value="{{ $obat2->nama }}"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Obat</td>
                                    <td><input type="text" name="jenis" placeholder="Input here ..."
                                            value="{{ $obat2->jenis }}"></td>
                                </tr>
                                <tr>
                                    <td>Kategori Obat</td>
                                    <td><input type="text" name="kategori" placeholder="Input here ..."
                                            value="{{ $obat2->kategori }}"></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli Obat</td>
                                    <td><input type="text" name="harga_beli" placeholder="Input here ..."
                                            value="{{ $obat2->harga_beli }}"></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual Obat</td>
                                    <td><input type="text" name="harga_jual" placeholder="Input here ..."
                                            value="{{ $obat2->harga_jual }}"></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Obat</td>
                                    <td><input type="text" name="jumlah" placeholder="Input here ..."
                                            value="{{ $obat2->jumlah }}"></td>
                                </tr>
                            </table>
                            <div class="subsubcontainer">
                                <input type="submit" class="tombol ubah" name="ubah" value="UBAH">
                                <input type="submit" class="tombol ubah" name="input" value="INPUT">
                            </div>
                        </form>
                    @endforeach
                @break

            @endswitch

        </div>
    </div>
</body>

</html>

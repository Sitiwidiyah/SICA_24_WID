<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Buku</title>

    <style>

        body{
            font-family: Arial;
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse: collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
            text-align:center;
        }

    </style>

</head>

<body onload="window.print()">

    <h2>LAPORAN DATA BUKU</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Stok</th>
        </tr>

        <?php
        $no = 1;
        foreach($data as $d):
        ?>

        <tr>

            <td><?= $no++; ?></td>

            <!-- GANTI kode MENJADI kode_buku -->
            <td><?= $d->kode_buku; ?></td>

            <td><?= $d->judul; ?></td>

            <td><?= $d->penulis; ?></td>

            <td><?= $d->nama_kategori; ?></td>

            <td><?= $d->stok; ?></td>

        </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>
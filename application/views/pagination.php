<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Warna latar belakang, warna teks, dan warna panah pada link aktif */
    .pagination .page-item.active .page-link {
        background-color: #db2828;
        border-color: #db2828;
        color: #ffffff; /* Warna teks putih */
    }

    /* Warna latar belakang saat dihover */
    .pagination .page-item .page-link:hover {
        background-color: #ff0000; /* Warna latar belakang saat dihover */
        color: #ffffff; /* Warna teks putih */

    }

    /* Warna panah pada link aktif */
    .pagination .page-item.active .page-link:before,
    .pagination .page-item.active .page-link:after {
        color: #db2828;
    }

    /* Warna teks pada tautan yang aktif */
    .pagination .page-item.active .page-link span {
        color: #ffffff; /* Warna teks putih */
    }
    /* Warna teks pada tautan */
    .pagination .page-link {
        color: #db2828; /* Warna teks pada tautan */
    }


    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Pagination Example</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Kode Tender</th>
                    <th>Lokasi</th>
                    <th>Nama Tender</th>
                    <th>Nilai HPS Paket</th>
                    <th>Harga Penawaran</th>
                    <th>Status Peserta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                <tr>
                    <td><?php echo $result['kode_tender']; ?></td>
                    <td><?php echo $result['lokasi_pekerjaan']; ?></td>
                    <td><?php echo $result['nama_tender']; ?></td>
                    <td><?php echo $result['nilai_hps_paket']; ?></td>
                    <td><?php echo $result['harga_penawaran']; ?></td>
                    <td><?php echo $result['status_peserta']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Tampilkan tombol navigasi pagination -->
        <div class="mt-4">
            <?php echo $this->pagination->create_links() ?>
        </div>
    </div>
</body>
</html>

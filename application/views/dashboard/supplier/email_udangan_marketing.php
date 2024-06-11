<!-- application/views/email_template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Undangan Follow Up Perusahaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        .header h1 {
            color: #007BFF;
        }
        .content {
            padding: 20px 0;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
        }
        .footer p {
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Undangan Follow Up Perusahaan</h1>
        </div>
        <div class="content">
            <p>Halo <?= $nama_tim ?>,</p>
            <p>Anda diundang oleh <strong><?= $nama_perusahaan ?></strong> untuk melakukan follow up pada perusahaan-perusahaan berikut:</p>
            <ul>
                <?php foreach ($daftar_perusahaan as $perusahaan): ?>
                    <li><?= $perusahaan['nama_perusahaan'] ?></li>
                <?php endforeach; ?>
            </ul>
            <p>Untuk memulai, silakan login ke <a href="https://tenderplus.id">tenderplus.id</a> menggunakan informasi berikut:</p>
            <p>Email: <strong><?= $email ?></strong></p>
            <p>Password: <strong><?= $password ?></strong></p>
            <p>Setelah berhasil masuk, harap segera mengganti password Anda dan lengkapi profil Anda untuk pengalaman yang lebih baik.</p>
            <p>Jika Anda memiliki pertanyaan atau memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi tim support kami.</p>
            <p>Terima kasih,</p>
            <p><strong>Tenderplus.id</strong></p>
        </div>
        <div class="footer">
            <p>&copy; <?= date('Y') ?> Tenderplus.id. All rights reserved.</p>
        </div>
    </div>
</body>
</html>

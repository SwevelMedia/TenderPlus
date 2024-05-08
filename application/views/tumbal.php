<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tumbal</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <script>
        var outputData = <?php echo json_encode($output_data); ?>;
        // Iterasi melalui array dan tampilkan data
        // outputData.forEach(function(item) {
        //     console.log(item.nama_tender);
        //     console.log(item.harga_penawaran);
        //     console.log(item.nilai_hps_paket);
        //     console.log(item.month);
        //     console.log(item.year);
        //     console.log(item.status_peserta);
        //     console.log('===============================');
        // });

        // Melakukan AJAX call untuk mengirimkan data yang diperlukan untuk filter
        $.ajax({
            url: 'filter_data',
            type: 'POST',
            data: {data: outputData},
            success: function(response) {
                // Handle response
                console.log(response);
                // Menampilkan data yang sudah difilter ke pengguna
            },
            error: function(xhr, status, error) {
                // Handle errors
            }
        });
    </script>
</body>
</html>
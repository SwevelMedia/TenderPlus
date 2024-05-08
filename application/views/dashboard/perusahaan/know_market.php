<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= base_url() ?>assets/js/home/multiselect-dropdown.js"></script>
<style>
    .animation {
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .container-lg {
        margin-top: 20px;
    }

    .container-lg-2 {
        margin-left: 80px;
        margin-top: 50px;
    }

    .overflow {
        overflow: auto;
    }

    .shadow-sm {
        border-radius: 10px;
        margin: 5px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .chart-container {
        width: 100%;
        margin: 5px;
    }

    .card-sum {
        flex: 1;
        padding: 5px;
        margin: 3px;
        width: 90px;
    }

    .card-sum-3 {
        flex: 1;
        padding: 5px;
        margin: 3px;
        width: 130px;
    }

    .sum-title {
        font-size: 11px;
        color: #B89494;
    }

    .sum-text {
        font-size: 25px;
        margin-right: 2px;
        font-weight: bold;
    }

    .custom-img {
        width: 15x;
        height: 15px;
        margin-top: 8px;
    }

    .tren-card {
        width: 100%;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .tren-title {
        font-size: 25px;
        font-weight: bold;
        margin-left: 150px;
    }

    .tren-text {
        font-size: 18px;
        font-weight: bold;
        color: #694747;
        padding-left: 40px;
        margin-right: 40px;
        margin-top: 20px;
    }

    .tren-isi {
        font-size: 15;
        font-weight: bold;
        margin-left: 40px;
    }

    .col-4 {
        margin-top: 6rem;
    }

    .card-select {
        font-size: 10px;
        margin-left: 8px;
        margin-top: 10px;
        display: flex;
    }

    .form-select-custom {
        width: 500px;
        color: #CCCCCC;
        border-radius: 20px;
        font-size: 1rem;
        margin-bottom: 15px;
        border: 1px solid;
        background-color: white;
        margin-top: 1rem;
        margin-left: 10px;
        height: 2rem;
    }

    .form-select-custom:hover {
        border: 1.5px solid var(--primary-red-500, #D21B1B);
    }

    .chart-line {
        margin: 10px;
        border: 1px solid #B89494;
        width: 100%;
    }

    /* TABLE SORTING */

    .table-container {
        margin: auto;
        max-width: 1200px;
        min-height: 100vh;
        overflow: scroll;
        width: 100%;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    thead tr {
        border-bottom: 1px solid #ddd;
        border-top: 1px solid #ddd;
        height: 1px;
    }

    th {
        font-weight: bold;
        height: inherit;
        padding: 0;
    }

    th:not(:first-of-type) {
        border-left: 1px solid #ddd;
    }

    th button {
        background-color: #D21B1B;
        border: none;
        cursor: pointer;
        display: block;
        font: inherit;
        height: 100%;
        margin: 0;
        min-width: max-content;
        padding: 0.5rem 0.5rem;
        position: relative;
        text-align: left;
        width: 100%;
    }

    th button::after {
        position: absolute;
        right: 0.5rem;
    }

    th button[data-dir="asc"]::after {
        content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpolygon points='0, 0 8,0 4,8 8' fill='%23818688'/%3E%3C/svg%3E");
    }

    th button[data-dir="desc"]::after {
        content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpolygon points='4 0,8 8,0 8' fill='%23818688'/%3E%3C/svg%3E");
    }

    tbody tr {
        border-bottom: 1px solid #ddd;
    }

    td {
        padding: 0.5rem 1rem;
        text-align: left;
    }

    .data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .data-table th {
        background-color: #D21B1B;
        border: 1px solid #dddddd;
        text-align: left;

    }

    .data-table th button {
        background: none;
        border: none;
        cursor: pointer;
        font-weight: bold;
        color: white;
    }

    .data-table td {
        border: 1px solid #dddddd;
        padding: 8px;
    }

    .data-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .data-table tbody tr:hover {
        background-color: #ddd;
    }

    .custom-table-container {
        /* border-radius: 10px 10px 10px 10px; */
        overflow: hidden;
        border: 1px solid var(--neutral-100, #F0E2E2);
        overflow-y: scroll;
        max-height: 550px;
        /* display: flex; */
        align-items: center;
        justify-content: center;
    }

    .data-table {
        text-align: center;
    }

    tbody {
        text-align: left;
        font-size: 15px;
    }

    .custom-table-container table.data-table tbody {
        background-color: white;
    }

    .custom-table-container table.data-table tbody tr:nth-child(even) {
        background-color: white;
    }

    .custom-table-container table.data-table tbody tr:hover {
        background-color: #f2f2f2;
    }

    /*line*/
    .section-title {
        position: relative;
        margin-top: 20px;
    }

    .section-title h6 {
        font-size: 13px;
        font-weight: bold;
        color: #694747;
    }

    .section-title-padding {
        padding-bottom: 10px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 800px;
        height: 2px;
        background-color: #F0E2E2;
        bottom: 0;
        left: 0;
        margin-top: 30px;
    }

    .mb-0 {
        margin-top: 10px;
    }


    @media (max-width: 768px) {
        .justify-content-start {
            justify-content: center !important;
        }

        .container-lg-2 {
            width: 100%;
            margin-top: 80px;
            margin-left: 30px;
        }

        /* .container-lg {} */

        .form-select-custom {
            width: 100%;
            margin-right: 0;
        }

        /* .col-sm-2 {
            align-items: center;
        } */

        .mb-0 {
            width: 100%;
            text-align: center;
        }

        .chart-container {
            height: 100%;
        }

        .chart-label1 {
            font-size: 5px;
        }

        /* .card-sum {
            flex-basis: calc(100% - 10px);
        } */

        .card-graf {
            width: 100%;
        }

        .tren-card {
            width: 100%;
        }

        .card-select {
            padding: 20px;
        }

        .form-select-custom {
            flex-basis: calc(50% - 10px);
        }

        #lineChart {
            max-width: 100%;
            height: auto;
        }

        .linecol {
            width: 100%;
        }

        .linecard {
            width: 40%;
        }
        .bg-transparan{
            background-color: transparent;
        }


        .container {
            display: flex;
            justify-content: space-between; /* Untuk memberikan jarak maksimum antara div */
        }

        .card-sum {
            width: 100%; /* Agar setiap card memenuhi lebar maksimum container */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Untuk menengahkan konten secara vertikal */
            align-items: center; /* Untuk menengahkan konten secara horizontal */
        }

        }
        /* SELECT 2 */
        .select2-container--default .select2-selection--single {
            background-color: none;
            border: none;
            border-radius: none;
        }

        .select2-container {

            max-width: calc(100% - 10%);
        }
        #nilai-hps-tertinggi, #nilai-hps-terendah, #nilai-rata-rata-hps {
            font-size: 18px; /* Ukuran font yang lebih kecil */
        }
        .btn-fillter{
        /* height: 45px; */
        border-radius: 3px;
        font-size: var(--bs-body-font-size);
        font-weight: 500;
        letter-spacing: 0;
        background: #db2828;
        font-family: Ubuntu, sans-serif;
        color: #fff;
        }

    .container-lg {
    margin-top: 50px;
    }

    .table-responsives.custom-table-scroll {
        max-height: 520px;
        overflow-y: auto;
        padding: 3px;
    }

    .table.custom-table-container {
        border-radius: 10px 10px 10px 10px;
        overflow: hidden;
        border: 1px solid var(--neutral-100, #F0E2E2);
        box-shadow: 0px 0px 25px 2px rgba(95, 95, 95, 0.20);
    }

    .thead {
        color: #fff;
        background-color: #D21B1B;
        text-align: center;
        font-size: 15px;
        position: sticky;
        top: 0; 
        z-index: 1;
        border-radius: 10px 10px 10px 10px;
    }

    .text-center {
        text-align: center;
    }

    .custom-padding {
        max-width: 460px;
        border: none;
        align-items: center;
        vertical-align: middle;
        height: 65px !important;
        padding: 0px 7px 0px 10px !important;
    }
    .lingkaran-coklat {
    background-color: brown;
    color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    }

    .bg-abu {
        background-color: #f0f0f0; /* warna abu-abu */
    }

    .bg-putih {
        background-color: #ffffff; /* warna putih */
    }
    .loader-table {
        display: inline-block;
        width: 80px;
        height: 80px;
    }

    .loader-table:after {
        content: " ";
        display: block;
        width: 64px;
        height: 64px;
        margin: 8px;
        border-radius: 50%;
        border: 6px solid #dd4b39;
        border-color: #dd4b39 transparent #dd4b39 transparent;
        animation: loader-table 1.2s linear infinite;
    }
    @keyframes loader-table {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* css loading page */
    .loading-container {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loading-spinner {
        border: 4px solid rgba(0, 0, 0, 0.1);
        border-left-color: #333;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite; /* Animasi berputar */
    }
    @keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }



</style>

<section class="bg-white">
    <div class="container-lg-2 d-flex justify-content-left align-items-left wow fadeInUp" data-wow-delay="0.1s">
        <!-- <div class="section-title section-title-padding">
            <h6 class="mb-0 wow fadeInUp">Know Your Market</h6>
        </div> -->
    </div>
    <div class="container-lg d-flex justify-content-left align-items-left wow fadeInUp" data-wow-delay="0.1s">
        <h4 class="mb-0 fw-semibold wow fadeInUp">Hay, Kami Siap Membantu Menganalisa<p class="pt-2">LPSE Pilihan Mu!</p>
        </h4>
    </div>

    <!-- loading page -->
    <div id="loading-filter" class="loading-container" style="display: none;" >
        <div class="loading-spinner"></div>
    </div>
</section>

<section class="bg-white">
    <div class="overflow">
        <div class="container bg-white wow fadeInUp" data-wow-delay="0.1s">
            <div class="card-select shadow-sm">
                <div class="select-custom container-fluid">
                    <div class="row">
                        <!-- <div class="col form-select-custom d-flex" style="width: 250px; margin-right:10px">
                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                            <select class="" style="border:none;width:100%;background-color:transparent;">
                            <option value="">Lokasi Pekerjaan</option>
                            </select>
                        </div> -->
                        <div class="col form-select-custom d-flex" style="width: 250px; margin-right:10px">
                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                            <select id="select-lpse" class="" style="border:none; width:100%;background-color:transparent;">
                                <option value="">LPSE</option>
                                <?php foreach ($lpse as $lpse) : ?>
                                <option value="<?= $lpse['id_lpse'] ?>"><?php echo $lpse['nama_lpse']?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col form-select-custom d-flex" style="width: 250px; margin-right:10px">
                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                            <select id="select-jenis-pengadaan" class="select-jenis-pengadaan" style="border:none;width:100%;background-color:transparent;">
                                <option value="">Semua Pengadaan</option>
                                <?php foreach ($jenisTender as $jenisTender) : ?>
                                <option value="<?= $jenisTender['id_jenis'] ?>"><?php echo $jenisTender['jenis_tender'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col form-select-custom d-flex" id="dropdownHPS" style="width: 250px; margin-right:10px !important;cursor: pointer;" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                            <select class="" style="border:none;width:100%;background-color:transparent;">
                                <option value="" disabled selected hidden >HPS</option>
                            </select>
                        </div>
                            <ul class="dropdown-menu overflow-auto dropdownHPS" id="myDropdown3" style="max-height: 250px; width: 300px;" aria-labelledby="dropdownHPS">
                                <div class="row m-0 formset-hps justify-content-center">
                                    <div class="col-12 text-center mb-3" style="border-bottom: 1px solid #ddd;">
                                        <div class="form-check p-0">
                                            <input class="form-check-input" style="float: none;" type="checkbox" id="checkallhps" name="checkallhps" checked>
                                            <label class="form-check-label ps-1" for="checkallhps">Semua</label>
                                            <div class="form-text mt-0">Centang untuk menampilkan semua nilai HPS</div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center mb-3">
                                        <p class="my-3">Silakan atur rentang nilai HPS pada kolom di bawah ini:</p>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Nilai Awal (Rp)</span>
                                            <input class="form-control" type="text" name="nilai_hps_awal" id="nilai_hps_awal" value="" disabled>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Nilai Akhir (Rp)</span>
                                            <input class="form-control" type="text" name="nilai_hps_akhir" id="nilai_hps_akhir" value="" disabled>
                                            <div class="invalid-feedback">Nilai HPS akhir harus lebih besar!</div>
                                        </div>
                                    </div>
                                </div>
                            </ul>

                        
                        <div class="col form-select-custom d-flex" style="width: 250px; margin-right:10px">
                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                            <select id="select-tahun" class="" style="border:none;width:100%;background-color:transparent;">
                            <!-- <select name="field1" id="elect-tahun" multiple onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))"  multiselect-search="true" style="border:none;width:100%;background-color:transparent;"> -->
                                <option class="select-tahun-option" selected value="">Semua Tahun</option>
                                    <?php $tahun = (int) date('Y');
                                        for ($i = 0; $i < 5; $i++) :
                                    ?>
                                        <option class="select-tahun-option" value="<?= $tahun ?>"><?= $tahun ?></option>
                                            <?php
                                                $tahun--;
                                            endfor;  ?>
                            </select>
                            
                        </div>
                        <!-- Filter Button -->
                        <div class="col-auto d-flex align-items-center">
                            <button class="btn btn-fillter filter-button" style="background: #db2828;">
                                Analisis <i class="fas fa-chart-line"></i>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container-lg" data-aos="fade_up">
        <div class="row">
            <!-- Time Series Ikut Tender -->
            <div class="col-lg-6">
                <div class="chart-bg mt-4" style="height:95%; border-radius: 10px; box-shadow: 0px 0px 25px 2px rgba(225, 203, 203, 0.30);">
                    <div class="container wow fadeInUp">
                        <div style="padding:0">
                            <h3 style="color:#000000; margin:10px; font-size:22px; font-weight:700">NILAI PROYEK BERDASARKAN HPS</h3>
                            <div class="chart-container wow fadeInUp" style="margin:0; padding:0">
                                <canvas id="lineChart" style="width: 500; height:260;"></canvas>
                            </div>
                        </div>
                        <hr class="chart-line">
                        <h5 class="col" style="color:#000000; margin-top:0px; font-size:20px; font-weight:600"> Summary</h5>
                        <div class="container">
                            <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                                <div class="shadow-sm bg-white">
                                    <div class="card-sum">
                                        <div>
                                            <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">
                                                Nialai HPS Tertinggi</h1>
                                        </div>
                                        <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                            <h1 id="nilai-hps-tertinggi" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                            <img class="custom-img" src="<?= base_url('assets\img\icon_hpshijau.svg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                                <div class="shadow-sm bg-white">
                                    <div class="card-sum">
                                        <div>
                                            <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">100 - 500Jt</h1>
                                        </div>
                                        <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                            <h1 class="sum-text wow fadeInUp" data-wow-delay="0.3s">20</h1>
                                            <img class="custom-img" src="<?= base_url('assets\img\icon_hpsorange.svg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                                <div class="shadow-sm bg-white">
                                    <div class="card-sum">
                                        <div>
                                            <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">Nilai HPS Terendah</h1>
                                        </div>
                                        <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                            <h1 id="nilai-hps-terendah" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                            <img class="custom-img" src="<?= base_url('assets\img\icon_hpsmerah.svg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                                <div class="shadow-sm bg-white align-content-center">
                                    <div class="card-sum">
                                        <div>
                                            <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">Nilai Rata-Rata HPS</h1>
                                        </div>
                                        <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                            <h1 id="nilai-rata-rata-hps" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                            <img class="custom-img" src="<?= base_url('assets\img\icon_hpsabu.svg') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Riwayat ikut tender HPS -->

            <div class="col-lg-6 ">
                <div class="chart-bg  mt-4 " style="height:95%; border-radius: 10px; box-shadow: 0px 0px 25px 2px rgba(225, 203, 203, 0.30);">
                    <div style="padding:0">
                        <h3 class="col" style="color:#000000; margin:10px; font-size:20px; font-weight:700"> PROYEK LPSE</h3>
                        <div class="chart3" style="margin:0; padding:0">
                            <canvas id="stackedBarChart" style="font-size: 10px;"></canvas>
                        </div>
                    </div>
                    <hr class="chart-line">
                    <h5 style="color:#000000; margin-top:10px; margin-left:20px; font-size:20px; font-weight:600"> Summary</h5>
                    <div class="container">
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white">
                                <div class="card-sum">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">
                                            Tender Selesai</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 id="tender-selesai" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Thijau.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white">
                                <div class="card-sum">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">Seleksi Ulang</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 id="tender-ulang" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Torange.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white">
                                <div class="card-sum">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">Tender Batal</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 id="tender-batal" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Tmerah.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white align-content-center">
                                <div class="card-sum">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">Total Tender</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 id="tender-total" class="sum-text wow fadeInUp" data-wow-delay="0.3s">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Tabu.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- chart line 
<section class="bg-white">
    <div class="container-lg wow fadeInUp" data-wow-delay="0.1s">
        <div style="padding:0">
            <h3 style="color:#000000; margin:10px; font-size:24px; font-weight:700"> PESERTA LPSE</h3>
            <div class="chart-peserta" style="margin:0; padding:0">
                <canvas id="chartpeserta"></canvas>
            </div>
        </div>
    </div>
</section> -->


<section class="bg-white">
    <div class="container-lg wow fadeInUp" data-wow-delay="0.1s">
        <div class="row">
            <div class="col-lg-8">
                <div class="chart-bg">
                    <div style="padding:0">
                        <h3 style="color:#000000; margin:10px; font-size:18px; font-weight:700"> PESERTA LPSE</h3>
                        <div class="chart-peserta" style="margin:0; padding:0">
                            <canvas id="chartpeserta"></canvas>
                        </div>
                    </div>
                    <hr class="chart-line">
                    <h5 style="color:#000000; margin:8px; margin-left:20px; font-size:18px; font-weight:600"> Summary</h5>
                    <div class="container linecol">
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white">
                                <div class="card-sum-3 ">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">PESERTA MENANG</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="sum-text wow fadeInUp" data-wow-delay="0.3s" id="peserta_menang">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Thijau.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white">
                                <div class="card-sum-3">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">PESERTA MENAWAR</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="sum-text wow fadeInUp" data-wow-delay="0.3s" id="peserta_menawar">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Torange.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white">
                                <div class="card-sum-3">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">PESERTA MENDAFTAR</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="sum-text wow fadeInUp" data-wow-delay="0.3s" id="peserta_mendaftar">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Thitam.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wow fadeInUp animation" data-wow-delay="0.2s">
                            <div class="shadow-sm bg-white align-content-center">
                                <div class="card-sum-3">
                                    <div>
                                        <h1 class="sum-title wow fadeInUp" data-wow-delay="0.5s">TOTAL PESERTA</h1>
                                    </div>
                                    <div class="d-flex wow fadeInUp" data-wow-delay="0.3s">
                                        <h1 class="sum-text wow fadeInUp" data-wow-delay="0.3s" id="peserta_total">0</h1>
                                        <img class="custom-img" src="<?= base_url('assets\img\Tabu.svg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <h3 style="color:#000000; margin:10px; font-size:24px; font-weight:700"> PESERTA LPSE</h3>
                    <div class="chart-peserta" style="margin:0; padding:0">
                        <canvas id="chartpeserta"></canvas>
                    </div> -->
                <!-- <hr class="chart-line"> -->
            </div>
            <div class="col-lg-4">
                <!-- <div class="custom-table-container shadow-sm table-striped">
                    <table class="data-table">
                        <thead class="thead">
                            <tr style="color: white;"> 
                                
                                <th><button id="no">No.</button></th>
                                <th><button id="name">Nama Peserta</button></th>
                                <th><button id="hp">Jumlah Tender</button></th>
                            </tr>
                        </thead>
                        <tbody id="table-content"></tbody>
                    </table> 
                </div>  -->
                <div class="container-lg wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -20px;">
                    <div style="padding:0">
                        <div class="row table-responsives custom-table-scroll mt-4">
                            <table class="table custom-table-container">
                                <thead class="thead text-center">
                                    <tr> 
                                        <!-- <th></th> -->
                                        <th>No.</th>
                                        <th>Nama Peserta</th>
                                        <th>Jumlah Tender</th>
                                    </tr>
                                </thead>
                                <tbody id="tender-ikut">
                                    <tr>
                                        <th colspan="6" style="text-align: center; padding: 10px;">Tidak ada data yang tersedia untuk ditampilkan.</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>



<!-- table sorting -->
<!-- <section>
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th><button id="name">Name</button></th>
                    <th><button id="hp">HP</button></th>
                </tr>
            </thead>
            <tbody id="table-content"></tbody>
        </table>
    </div>
</section> -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include jQuery Tablesorter Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>

<script>
    $(document).ready(function() {
        $('#select-lpse').select2();
        $('#select-jenis-pengadaan').select2();
        $('#select-tahun').select2({
            width: '100%',
            minimumResultsForSearch: Infinity
        });

        $(".tablesorter").tablesorter();
        
        $(".btn-fillter").click(function() {
        // Panggil fungsi untuk mengambil data dan memperbarui grafik
            fetchDataAndUpdateCharts();
        });
        
        // // Event change untuk dropdown LPSE
        // $("#select-lpse").change(function() {
        //     fetchDataAndUpdateCharts();
        // });

        // // Event change untuk dropdown Tahun
        // $("#select-tahun").change(function() {
        //     fetchDataAndUpdateCharts();
        // });

        // // Event change untuk dropdown Jenis Pengadaan
        // $("#select-jenis-pengadaan").change(function() {
        //     fetchDataAndUpdateCharts();
        // });

    });

    $('#checkallhps').on('click', function() {
        let allhps = this.checked;
        $('#nilai_hps_awal, #nilai_hps_akhir').prop('disabled', allhps);
        
        if (allhps){
            // Jika checkbox dicentang, set nilai HPS awal dan akhir menjadi kosong
            $('#nilai_hps_awal').val('');
            $('#nilai_hps_akhir').val('');
        }
        // else {
        //     $('#nilai_hps_awal').focus();
        //     hps_awal = $('#nilai_hps_awal').val();
        //     hps_akhir = $('#nilai_hps_akhir').val();
        // }
    });

    // Fungsi untuk mengambil data dari server dan memperbarui grafik
    function fetchDataAndUpdateCharts() {
        var selectedLPSE = $("#select-lpse").val();
        var selectedYear = $("#select-tahun").val();
        var selectedJenisPengadaan = $("#select-jenis-pengadaan").val();
        var hps_awal = $("#nilai_hps_awal").val(); // Mengambil nilai HPS awal
        var hps_akhir = $("#nilai_hps_akhir").val(); // Mengambil nilai HPS akhir
        console.log("Selected LPSE:", selectedLPSE);
        console.log("Selected Year:", selectedYear);
        console.log("Selected Jenis Pengadaan:", selectedJenisPengadaan);
        console.log("HPS Awal:", hps_awal);
        console.log("HPS Akhir:", hps_akhir);
        fetchDataAndGenerateChartHps(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir);
        fetchDataAndGenerateChartProyekLpse(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir);
        generateTablePesertaTender(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir) 
        fetchDataForGraficPeserta(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir);
       
    }

    // Fungsi untuk mengambil data dari server dan membuat grafik Hps berdasarkan filter
    function fetchDataAndGenerateChartHps(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir) {
        $.ajax({
            url: 'market2/dataForHpsLpse',
            type: 'POST',
            dataType: 'json',
            data: { tahun: selectedYear,
                    lpse: selectedLPSE,
                    jenis_pengadaan:selectedJenisPengadaan,
                    hps_awal : hps_awal,
                    hps_akhir : hps_akhir,
                 },
            beforeSend: function(jqXHR, settings) {
                $('#loading-filter').show();
            },
            success: function(responseHps) {
                console.log("ini data Hps ",responseHps);
                createChartHps(responseHps); // Panggil fungsi createChartHps dengan respons yang diterima

                // update values summary
                updateValuesSummaryHps(responseHps);
                $('#loading-filter').hide();
            },
            error: function(xhr, status, error) {
                console.error('Kesalahan hps: ', error);
                $('#loading-filter').hide();

            }
        });
    }

    // Fungsi untuk membuat grafik HPS berdasarkan data yang diterima
    function createChartHps(responseHps) {
        var months = Object.keys(responseHps).sort(); // Mengurutkan kunci (bulan)
        var hpsValues = months.map(function(month) {
            return responseHps[month];
        });
        // console.log(hpsValues);

        var chartConfig = {
            type: 'line',
            data: {
                labels: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                ],
                datasets: [{
                    label: 'Grafik',
                    data: hpsValues,
                    borderColor: '#064E3B',
                    backgroundColor: '#064E3B',
                    pointStyle: 'circle',
                    pointRadius: 2,
                    pointHoverRadius: 15,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: false,
                    }
                }
            }
        };

        // Hancurkan grafik sebelumnya jika ada
        if (window.lineChartHps) {
            window.lineChartHps.destroy();
        }
        var ctx = document.getElementById('lineChart').getContext('2d');
        window.lineChartHps = new Chart(ctx, chartConfig);

        // var ctx = document.getElementById('lineChart').getContext('2d');
        // var lineChart = new Chart(ctx, chartConfig);
    }

    // Function untuk mengambil data dari server dan membuat grafik proyek HPS
    function fetchDataAndGenerateChartProyekLpse(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir) 
    {
        $.ajax({
            url: 'market2/proyekLpse',
            type: 'POST',
            dataType: 'json',
            data: { tahun: selectedYear, 
                    lpse: selectedLPSE,
                    jenis_pengadaan:selectedJenisPengadaan,
                    hps_awal : hps_awal,
                    hps_akhir :hps_akhir },
            success: function(getProyekLpse) {
                // alert('Data berhasil proyek lpse diterima'); // Ini akan memberi peringatan jika respons berhasil diterima
                console.log('ini data proyek LPSE',getProyekLpse); // Tampilkan respons di konsol browser
                
                updateValuesSummaryProyekLpse(getProyekLpse); // Panggil fungsi untuk mengupdate nilai-nilai elemen HTML
                // Panggil fungsi createChart dengan respons yang diterima
                createChartProyekLpse(getProyekLpse);
            },
            error: function(xhr, status, error) {
                console.error('Kesalahan: ', error);
            }
        });
    }

    function createChartProyekLpse(getProyekLpse)
    {
        var selesaiData = [];
        var ulangData = [];
        var batalData = [];
        var labels = []; // Array untuk menyimpan label bulan

        // Loop melalui data getProyekLpse dan isi array data sesuai dengan nilai dari setiap bulan
        for (var key in getProyekLpse) {
            if (getProyekLpse.hasOwnProperty(key)) {
                var data = getProyekLpse[key];
                selesaiData.push(data.total_selesai);
                ulangData.push(data.total_ulang);
                batalData.push(data.total_batal);

                // Tambahkan label bulan ke dalam array labels
                labels.push(data.month);
            }
        }


        const config = {
        type: 'bar',
        data: {
            labels: [
                'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
            ],
            datasets: [{
                    label: 'Tender Selesai',
                    data: selesaiData,
                    backgroundColor: '#10B981',
                    barPercentage: 0.5,
                },
                {
                    label: 'Seleksi Ulang',
                    data: ulangData,
                    backgroundColor: '#F9845F',
                    barPercentage: 0.5,
                },
                {
                    label: 'Tender Batal',
                    data: batalData,
                    backgroundColor: '#D21B1B',
                    barPercentage: 0.5,
                }
            ]
        },
        options: {
            plugins: {
                title: {
                    display: false,
                    text: 'PROYEK  LPSE '
                }
            },
            responsive: true,
            scales: {
                x: {
                    stacked: true
                },
                y: {
                    stacked: true
                }
            }
        }
        };

        // Hancurkan grafik sebelumnya jika ada
        if (window.barChartProyekLpse) {
            window.barChartProyekLpse.destroy();
        }

        var ctxStackedBar = document.getElementById('stackedBarChart').getContext('2d');
        window.barChartProyekLpse = new Chart(ctxStackedBar, config);

        // var ctxStackedBar = document.getElementById('stackedBarChart').getContext('2d');
        // var stackedBarChart = new Chart(ctxStackedBar, config);
    }

    function updateValuesSummaryProyekLpse(getProyekLpse) 
    {
            var tenderSelesai = 0;
            var seleksiUlang = 0;
            var tenderBatal = 0;

            // Loop melalui setiap objek dalam objek getProyekLpse
            for (var key in getProyekLpse) {
                if (getProyekLpse.hasOwnProperty(key)) { // Pastikan properti ini milik objek langsung, bukan dari prototype
                    var data = getProyekLpse[key];
                    tenderSelesai += parseInt(data.total_selesai);
                    seleksiUlang += parseInt(data.total_ulang);
                    tenderBatal += parseInt(data.total_batal);
                }
            }


            var totalTender = tenderSelesai + seleksiUlang + tenderBatal;

            // console.log('tender selesai :', tenderSelesai);

            // Update nilai-nilai pada elemen HTML
            $("#tender-selesai").text(tenderSelesai);
            $("#tender-ulang").text(seleksiUlang);
            $("#tender-batal").text(tenderBatal);
            $("#tender-total").text(totalTender);
    }


    // Fungsi untuk mengubah angka menjadi format yang disederhanakan
    function simplifyNumber(number) 
    {
        // Jika angka lebih besar dari atau sama dengan 1 miliar
            if (number >= 1e9) {
                return (number / 1e9).toFixed(1) + 'M';
            }
            // Jika angka lebih besar dari atau sama dengan 1 juta
            else if (number >= 1e6) {
                return (number / 1e6).toFixed(1) + 'JT';
            }
            // Jika angka lebih besar dari atau sama dengan 1 ribu
            else if (number >= 1e3) {
                return (number / 1e3).toFixed(1) + 'K';
            }
            // Jika angka lebih kecil dari 1 ribu
            else {
                return number.toString();
            }
    }


    // Fungsi untuk mengupdate summary (nilai HPS tertinggi, terendah, dan rata-rata) pada elemen HTML
    function updateValuesSummaryHps(responseHps) 
    {
            // Inisialisasi variabel untuk nilai HPS tertinggi, terendah, dan total HPS
            var maxHPS = -Infinity;
            var minHPS = Infinity;
            var totalHPS = 0;

            // Loop melalui objek responseHps untuk mencari nilai maksimum, minimum, dan total HPS
            Object.keys(responseHps).forEach(function(month) {
                var hps = responseHps[month];
                if (hps > maxHPS) {
                    maxHPS = hps;
                }
                if (hps < minHPS && hps !== 0) {
                    minHPS = hps;
                }
                totalHPS += hps;
            });

            // Menghitung jumlah bulan dengan nilai HPS yang bukan nol
            var count = Object.values(responseHps).filter(hps => hps !== 0).length;

            // Menghitung rata-rata HPS
            var averageHPS = totalHPS / count;
             
            // Menyederhanakan format tulisan angka untuk nilai HPS tertinggi, terendah, dan rata-rata
            maxHPS = simplifyNumber(maxHPS);
            minHPS = simplifyNumber(minHPS);
            averageHPS = simplifyNumber(averageHPS);

            console.log("max HPS:",maxHPS);
            console.log("min HPS:",minHPS);
            console.log("avg HPS:",averageHPS);

            // Update nilai-nilai pada elemen HTML
            $("#nilai-hps-tertinggi").text(maxHPS);
            $("#nilai-hps-terendah").text(minHPS);
            $("#nilai-rata-rata-hps").text(averageHPS);
    }




    // Function untuk AMBIL TOTAL PESERTA
    function fetchDataForGraficPeserta(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir) 
    {
        $.ajax({
            url: 'market2/getDataTablePeserta',
            type: 'POST',
            dataType: 'json',
            data: { tahun: selectedYear, 
                    lpse: selectedLPSE,
                    jenis_pengadaan:selectedJenisPengadaan,
                    hps_awal :hps_awal,
                    hps_akhir :hps_akhir,
                 },
            success: function(datapeserta) {
                // console.log('Data untuk grafik peserta diterima:', datapeserta);
                // Mendapatkan kunci bulan dan mengurutkannya
                const sortedMonths = Object.keys(datapeserta.mendaftar).sort();
                
                // Mengumpulkan data yang diurutkan
                // const totalPesertaData = sortedMonths.map(month => datapeserta.total[month]);
                const pesertaMendaftarData = sortedMonths.map(month => datapeserta.mendaftar[month]);
                const pesertaMenangData = sortedMonths.map(month => datapeserta.menang[month]);
                const pesertaMenawarData = sortedMonths.map(month => datapeserta.menawar[month]);

                createChartPeserta(pesertaMenangData, pesertaMenawarData,pesertaMendaftarData);
                updateSummaryChartPeserta(pesertaMenangData, pesertaMenawarData,pesertaMendaftarData);
               

            },
            error: function(xhr, status, error) {
                console.error('Kesalahan: ', error);
           }
        });
    }

    function updateSummaryChartPeserta(pesertaMenangData, pesertaMenawarData,pesertaMendaftarData)
    {
        // Hitung total peserta menang dari peserta menang data
        const totalPesertaMenang = pesertaMenangData.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
        
        // Hitung total peserta menawar dari peserta menawar data
        const totalPesertaMenawar = pesertaMenawarData.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
        
        // Hitung total peserta mendaftar dari peserta mendaftar data
        const totalPesertaMendaftar = pesertaMendaftarData.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
        
        // Hitung total peserta dari jumlah peserta menang, peserta menawar, dan peserta mendaftar
        const totalPeserta = totalPesertaMenang + totalPesertaMenawar + totalPesertaMendaftar;

        // Update nilai-nilai summary pada elemen HTML
        $("#peserta_menang").text(totalPesertaMenang);
        $("#peserta_menawar").text(totalPesertaMenawar);
        $("#peserta_mendaftar").text(totalPesertaMendaftar);
        $("#peserta_total").text(totalPeserta);

    }

    // MEMBUAT GRAFIK PESERTA MENANG,TOTALDAN MENAWAR
    let lineChart; // Variable to store the chart instance

    // Function membuat chart peserta
    function createChartPeserta(menang,menawar,mendaftar) 
    {
        const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

            const data = {
                labels: labels,
                datasets: [{
                    label: 'TOTAL MENDAFTAR',
                    data: mendaftar, // Gunakan data total peserta dari server
                    borderColor: '#404040',
                    fill: false,
                    tension: 0.5
                }, {
                    label: 'PESERTA MENANG',
                    data: menang, // Gunakan data peserta menang dari server
                    borderColor: '#10B981',
                    fill: false,
                    tension: 0.5
                }, {
                    label: 'PESERTA MENAWAR',
                    data: menawar, // Gunakan data peserta menawar dari server
                    borderColor: '#F9845F',
                    fill: false,
                    tension: 0.5
                }]
            };

            const lineconfig = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: false,
                            text: 'Chart.js Line Chart - Cubic interpolation mode'
                        },
                    },
                    interaction: {
                        intersect: false,
                    },
                    scales: {
                        x: {
                            display: true,
                            title: {
                                display: true
                            }
                        },
                        y: {
                            display: true,
                            suggestedMin: 0,
                            // suggestedMax: Math.max(...totalPesertaData) + 10 // Sesuaikan nilai maksimum sumbu y
                        }
                    }
                },
            };
            // Cek apakah chart sebelumnya sudah ada
            if (lineChart) {
                // Update chart dengan data baru
                lineChart.data = data;
                lineChart.update();
            } else {
                // Buat chart baru jika belum ada
                var ctxLineChart = document.getElementById('chartpeserta').getContext('2d');
                lineChart = new Chart(ctxLineChart, lineconfig);
            }
    }

    



   
    function generateTablePesertaTender(selectedLPSE, selectedYear,selectedJenisPengadaan,hps_awal,hps_akhir) 
    {
        $.ajax({
            url: 'market2/jumTenderPeserta',
            type: 'POST',
            dataType: 'json',
            data: { tahun: selectedYear, 
                    lpse: selectedLPSE,
                    jenis_pengadaan:selectedJenisPengadaan,
                    hps_awal :hps_awal,
                    hps_akhir :hps_akhir,
                 },
            beforeSend: function(jqXHR, settings) {
                loadingTable();
            },
            success: function(data) {
                // Jika permintaan berhasil, proses data JSON
                if (data) {
                    // Hapus pesan "Tidak ada data yang tersedia" jika ada data yang diterima
                    $('#tender-ikut').empty();
                    
                    var nomor = 1; // Variabel untuk nomor urut
                    
                    // Loop melalui data dan tambahkan ke tabel
                    $.each(data, function(nama_peserta, jumlah_tender) {
                        var bgColorClass = nomor % 2 == 0 ? 'bg-abu' : 'bg-putih';
                        var nomorHtml = '<div class="lingkaran-coklat">' + nomor + '</div>';
                        $('#tender-ikut').append('<tr class="' + bgColorClass + '"><td>' + nomorHtml + '</td><td>' + nama_peserta + '</td><td>' + jumlah_tender + '</td></tr>');
                       
                        nomor++; // Tambahkan nomor urut untuk baris selanjutnya
                    });
                } else {
                    // Jika tidak ada data diterima, tampilkan pesan "Tidak ada data yang tersedia"
                    $('#tender-ikut').html('<tr><td colspan="3" style="text-align: center; padding: 10px;">Tidak ada data yang tersedia untuk ditampilkan.</td></tr>');
                }
            },
            error: function(xhr, status, error) {
                console.error('Kesalahan: ', error);
                // Tampilkan pesan kesalahan kepada pengguna jika terjadi kesalahan dalam pengambilan data
                tableContent.innerHTML = '<tr><td colspan="3">Terjadi kesalahan dalam mengambil data.</td></tr>';
            }
        });
    }

     // loading tabel
    function loadingTable() {
        const tabelTenderIkut = document.getElementById('tender-ikut');
        tabelTenderIkut.innerHTML = `<tr>
            <th colspan="3" style="text-align: center; padding: 10px;">
                <div class="loader-table"></div>
            </th>
        </tr>`;
    }

    function createTable(data) {
        const tableContent = document.getElementById("table-content");
        tableContent.innerHTML = ''; // Hapus konten yang sudah ada sebelum menambahkan data baru

        // Panggil getTableContent untuk membuat baris tabel dari data
        getTableContent(data,tableContent);
    }

    const createRow = (obj, number) => {
        const row = document.createElement("tr");
        // Buat sel baru untuk nomor urut
        const numberCell = document.createElement("td");
        numberCell.innerText = number; // Isi sel dengan nomor urut
        row.appendChild(numberCell); // Tambahkan sel nomor urut ke dalam baris

        const objKeys = Object.keys(obj);
        objKeys.map((key) => {
            const cell = document.createElement("td");
            cell.setAttribute("data-attr", key);
            cell.innerHTML = obj[key];
            row.appendChild(cell);
        });
        return row;
    };

    const getTableContent = (data,tableContent) => {
        data.map((obj,index) => {
            const row = createRow(obj,index + 1);
            tableContent.appendChild(row);
        });
    };

    const sortData = (data, param, direction = "asc") => {
        tableContent.innerHTML = '';
        const sortedData =
            direction == "asc" ? [...data].sort(function (a, b) {
                if (a[param] < b[param]) {
                    return -1;
                }
                if (a[param] > b[param]) {
                    return 1;
                }
                return 0;
            }) : [...data].sort(function (a, b) {
                if (b[param] < a[param]) {
                    return -1;
                }
                if (b[param] > a[param]) {
                    return 1;
                }
                return 0;
            });

        getTableContent(sortedData);
    };

    const resetButtons = (event) => {
        [...tableButtons].map((button) => {
            if (button !== event.target) {
                button.removeAttribute("data-dir");
            }
        });
    };

    // window.addEventListener("load", () => {
    //     getTableContent(response.pokedata);

    //     [...tableButtons].map((button) => {
    //         button.addEventListener("click", (e) => {
    //             resetButtons(e);
    //             if (e.target.getAttribute("data-dir") == "desc") {
    //                 sortData(response.pokedata, e.target.id, "desc");
    //                 e.target.setAttribute("data-dir", "asc");
    //             } else {
    //                 sortData(response.pokedata, e.target.id, "asc");
    //                 e.target.setAttribute("data-dir", "desc");
    //             }
    //         });
    //     });
    // });

</script>
<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

<style>
    .animation {
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .badge {
        font-size: var(--bs-body-font-size);
        font-weight: var(--bs-body-font-weight);
        padding: 6px 10px;
        border-radius: 7px 0 7px 0;
        white-space: break-spaces;
    }

    .badge-danger {
        background: var(--bs-red-primary);
    }

    .badge-akhirdaftar {
        background: #fff8ea;
        color: #ee9d0a;
        border-radius: 0 7px 7px 0;
        border: 1px solid #d18c0b;
        padding: 5px 8px 6px 5px;
        font-weight: 500;
        text-align: left;
    }

    .filter {
        border-radius: 1rem;
        margin-inline: 10px;
    }

    .filter-item a {
        display: flex;
        align-items: center;
    }

    .select2-container--bootstrap-5 .select2-selection--single {

        padding: 0.85rem 2.25rem .85rem 1rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='' viewBox='0 0 16 16'%3e%3cpath fill='%23BF0C0C' stroke='%23BF0C0C00' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right .76rem center;
        background-size: 18px 18px;
    }

    .select2-container--bootstrap-5 .select2-selection {
        width: 135px;
        padding: 7px 0px 5px 5px;
        font-family: inherit;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #f0e2e2;
        background-color: transparent;
        border: none;
        border-radius: 5px;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .select2-container--bootstrap-5.select2-container--open.select2-container--below .select2-selection {
        border-bottom: 0 solid transparent;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .select2-container--bootstrap-5.select2-container--focus .select2-selection,
    .select2-container--bootstrap-5.select2-container--open .select2-selection {
        /* width: 221.5px; */
        border-color: #ffffff00;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
    }

    .select2-container--bootstrap-5 .select2-dropdown {
        border-color: #f0e2e2;
    }

    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered .select2-selection__placeholder {
        color: #212529;
    }

    .select2-container--bootstrap-5 .select2-dropdown.select2-dropdown--below {
        border: 1px solid var(--bs-border-color-translucent);
        border-radius: 5px;
        left: 10px;
        top: 2px;
        z-index: 1000;
    }

    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-container .select2-selection--single .select2-selection__rendered .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__clear,
    .select2-container--bootstrap-5 .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        width: 7px;
        right: 0px;
        left: 130px;
        bottom: 10px;
        background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23BF0C0C'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") 50%/.75rem auto no-repeat;
    }

    .select2-container--bootstrap-5 {
        padding-right: 0;
    }

    .select2-sorting+.select2-container--bootstrap-5 {
        padding-left: 0;
    }

    .select2-container--bootstrap-5 .select2-dropdown.select2-dropdown--below {
        left: -25px;
        width: 180px !important;
    }

    .select2-container--bootstrap-5 .select2-dropdown .select2-results__options .select2-results__option.select2-results__option--selected,
    .select2-container--bootstrap-5 .select2-dropdown .select2-results__options .select2-results__option[aria-selected=true]:not(.select2-results__option--highlighted) {
        color: #fff;
        background-color: #c50000;
    }

    .dropdown-sorting .text-dropdown {
        padding: 8px 12px;
        cursor: pointer;
    }

    .dropdown-sorting li:hover {
        background: #c50000;
        border-radius: 0;
    }

    .dropdown-sorting .dropdown-menu::after {
        top: -20px;
    }

    .dropdown-sorting .nav-link,
    .dropdown-sorting a.nav-link:focus,
    .dropdown-sorting a.nav-link:hover {
        padding: 12px 9px !important;
    }

    .dropdown-sorting .dropdown-toggle::after {
        display: none;
    }

    .paket {
        margin-block: 8px !important;
    }

    .rincian-paket tr {
        line-height: 1.4;
    }

    #pagination-container {
        margin-inline: 10px;
        margin-top: 15px !important;
    }

    .paginationjs.paginationjs-big .paginationjs-nav.J-paginationjs-nav {
        font-size: var(--bs-body-font-size) !important;
    }

    .paginationjs .paginationjs-pages {
        margin-top: -5px;
    }

    .paginationjs .paginationjs-pages li {
        border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
    }

    .card-body {
        margin-top: 10px;
        padding-left: 4%;
        border-radius: 30px;
    }

    .card-title p {
        color: #B89494;
        font-size: 0.75rem;
        font-weight: bold;
        padding: 6% 0% 6% 3%;
    }

    .card-title {
        color: #B89494;
        font-size: 26px;
        font-weight: bold;
        padding-top: 10px;
    }

    .card-text {
        font-size: 28px;
        font-weight: bold;
        padding-top: 2%;
    }

    .card-img {
        width: 35px;
        height: 40px;
        margin-right: 6%;
        margin-left: 6%
    }

    .content-above-navbar {
        margin-top: 65px;
        z-index: 999;
    }

    .card-select {
        font-size: 10px;
        margin-left: 8px;
        margin-top: 20px;
        display: flex;
    }

    .form-select-custom {
        width: 615px;
        color: #CCCCCC;
        border-radius: 20px;
        font-size: 1rem;
        margin-bottom: 15px;
        border: 1px solid;
        background-color: white;
    }

    .form-select-custom:hover {
        border: 1.5px solid var(--primary-red-500, #D21B1B);
    }

    .form-input-custom {
        border-radius: 20px;
        font-size: 1rem;
        width: 92%;
    }

    .statusCRM {
        /* background-color:#212529; */
        background-color: #ffeee6;
        border-radius: 10px;
    }

    h3 {
        color: #212529;
        font-weight: 200;
        font-size: x-large;
        text-align: center;
    }

    #grafikRiwayatPemenang {
        height: auto;
        width: auto;
    }

    .select2-container {
        margin-right: 15px;
        /* Atur margin right sesuai kebutuhan */
        width: auto;

    }

    /* Tambahkan gaya khusus untuk lingkaran di sebelah angka */
    .circle {
        width: 25px;
        height: 25px;
        background-color: #F17D3A;
        border-radius: 50%;
        /* Membuat lingkaran */
        display: inline-block;
        line-height: 25px;
        /* Menyesuaikan tinggi lingkaran dengan teks di dalamnya */
        text-align: center;
        /* Pusatkan teks di dalam lingkaran */
        color: white;
        /* Warna teks menjadi putih */
        /* padding: 2px; */
    }

    /* CSS */
    .grafikCRMContainer {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .chart2 {
        width: 100%;
        /* Mengisi lebar kontainer */
    }
    #nav-pemenang{
        background-color: #FCD9D9;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
    }
    .nav-item {
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
    }
    .custom-nav .nav-link {
        color: black;
        background-color: #FCD9D9;
        border-radius: 20px 20px 0 0; /* Menjaga border radius pada tab */
    }

    .custom-nav .nav-link.active {
        background-color: #D21B1B !important; /* Warna background ketika aktif */
        color: white !important; /* Warna teks ketika aktif */
    }

    @media (max-width: 576px) {
        .sec-pemenang-terbaru {
            margin-left: auto;
            margin-right: auto;
        }

    }
</style>

<section class="mt-7 bg-white">
    <div class="container">
        <div class="row justify-content d-flex content-above-navbar">
            <div class="col-md-5 d-flex justify-content-left align-items-left wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="mb-0 ms-2 mt-4 wow fadeInUp w-660" style="padding-top:8px;">
                    Selamat Datang <span class="fw-semibold nama-pengguna" style="color: #df3131;"></span>!<p class="pt-2">Yuk! Temukan Calon Customermu
                    <p>
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 25%;">
                        <div class="shadow rounded-3 bg-white ">
                            <div class="card-body ">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title ">Leads Terbaru</p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                    <img src="<?= base_url('assets\img\icon_card_people_peserta.svg') ?>" class="card-img" alt="">
                                    <h1 class="card-text wow fadeInUp" data-wow-delay="0.3s" id="leads_terbaru">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 25%;">
                        <div class="shadow rounded-3 bg-white">
                            <div class="card-body">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title">Leads Belum Diploting</p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                    <img src="<?= base_url('assets\img\icon_card_people_peserta_(2).svg') ?>" class="card-img m-sm-none" alt="">
                                    <h1 class="card-text wow fadeInUp" data-wow-delay="0.3s" id="leads_belum_ploting">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 25%;">
                        <div class="shadow rounded-3 bg-white ">
                            <div class="card-body ">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title ">Leads Belum Dilengkapi</p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                    <img src="<?= base_url('assets\img\icon_card_people_peserta_(1).svg') ?>" class="card-img" alt="">
                                    <h1 class="card-text wow fadeInUp belum-lengkap" data-wow-delay="0.3s" id="belum-lengkap">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 25%;">
                        <div class="shadow rounded-3 bg-white ">
                            <div class="card-body ">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title ">Total Data Leads </p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                    <img src="<?= base_url('assets\img\icon_card_people_peserta_(3).svg') ?>" class="card-img" alt="">
                                    <h1 class="card-text wow fadeInUp total-leads" data-wow-delay="0.3s" id="total-today">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- Grafik Leads -->
                        <div class="shadow rounded-3 bg-white" style="height: 100%;">
                            <div class="card-body ">
                                <div style="padding:0;">
                                    <!-- Select dropdown for year -->
                                    <div style="display: flex; align-items: center; justify-content: space-between;">
                                        <!-- Heading for Riwayat Peserta Menang -->
                                        <h3 style="font-size: 18px; text-align: left ;margin-top: 10px;">Riwayat Peserta Menang</h3>

                                        <!-- Select dropdown for year -->
                                        <select id="tahunSelect" onchange="Grafikpemenang()" class="form-select2" style="margin-top: 10px; margin-right: 15px;">
                                            <option value="2024" selected>2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                    <!-- Canvas container for Riwayat Peserta Menang Chart -->
                                    <div style="height: 300px;">
                                        <canvas id="grafikRiwayatPemenang"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp animation">
                        <!-- Tabel Tim Marketing -->
                        <div class="shadow rounded-3 bg-white ">
                            <div class="card-body ">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <h3>Tim Marketing</h3>
                                </div>
                                <div style="height: 310px;max-height: 310px; overflow-y: auto;">
                                    <table class="table custom-table-container">
                                        <tbody id="tim-marketing">
                                            <!-- <tr>
                                                <td><strong>Arjunanda</strong><br>Sleman, D.I Yogyakarta</td>
                                                <td><span class="circle">90</span></td>
                                            </tr> -->
                                            <!-- Tambahkan baris lainnya di sini -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Grafik Status CRM -->
            <div class="col-md-3 wow fadeInUp animation statusCRM">
                <div class="row justify-content-center mt-2 mx-1 px-1">
                    <h3>Status CRM</h3>
                </div>
                <div class="col">
                    <div class="grafikCRMContainer">
                        <div class="chart2" style="margin:0; padding:0">
                            <canvas id="grafikCRM" width="250" height="220"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Keterangan -->
                <div class="col">
                    <div class="keterangan" style="margin-top:10px; padding:0">
                        <p id="tanpa-status" class="crmstats-summary" style="margin-left: 10%;">
                            <span style="border-left: 4px solid orange; font-size:11px; margin-right:4px"></span>
                            <span class="crmstats-summary-number">0</span> Tanpa Status
                        </p>
                        <p id="sedang-dihubungi" class="crmstats-summary" style="margin-left: 10%;">
                            <span style="border-left: 4px solid lightblue; font-size:11px; margin-right:4px"></span>
                            <span class="crmstats-summary-number">0</span> Sedang Dihubungi
                        </p>
                        <p id="proses-negosiasi" class="crmstats-summary" style="margin-left: 10%;">
                            <span style="border-left: 4px solid purple; font-size:11px; margin-right:4px"></span>
                            <span class="crmstats-summary-number">0</span> Proses Negosiasi
                        </p>
                        <p id="diterima" class="crmstats-summary" style="margin-left: 10%;">
                            <span style="border-left: 4px solid green; font-size:11px; margin-right:4px"></span>
                            <span class="crmstats-summary-number">0</span> Diterima
                        </p>
                        <p id="ditolak" class="crmstats-summary" style="margin-left: 10%;">
                            <span style="border-left: 4px solid red; font-size:11px; margin-right:4px"></span>
                            <span class="crmstats-summary-number">0</span> Ditolak
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col md-12">
                <div class="card-select wow fadeInUp">
                    <div class="select-custom container-fluid mt-5">
                        <div class="text-center mb-3">
                            <h3 class="tender-title text-center wow fadeInUp d-inline-block px-3 pb-2" data-wow-delay="0.5s">Pemenang Tender Terbaru</h3>
                        </div> 
                        <div class="row" id="filter-pemenang">
                            <div class=" col-sm-2 form-select-custom" style="padding:5px; padding-left:24px; margin-right:10px;">
                                <input id="keyword" type="text" class="form-input-custom" style="border:none;" placeholder="Cari nama tender atau pemenang">
                                <img src="<?= base_url('assets\img\icon_search.svg') ?>" width="20" style="float:right;padding-top:3px;margin-right:10px">
                            </div>
                            <div class="col-sm-2 form-select-custom d-flex" style="width: 190px; margin-right:10px">
                                <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                                <select class="select2-wilayah" id="wilayah" style="border:none;">
                                </select>
                            </div>
                            <div class="col-sm-2 form-select-custom d-flex" style="width: 190px; margin-right:10px">
                                <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                                <select class="select2-jenis-pengadaan" style="border:none;">
                                </select>
                            </div>
                            <!-- Select Trigger Filter Nilai Penawaran -->
                            <div id="dropdownHPS" class="col-sm-2 form-select-custom d-flex" style="width: 180px;margin-right:10px" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                                <button style="border:none;background-color: white;padding-top: 2px">Nilai Penawaran</button>
                            </div>

                            <!-- Tampilah Nilai Penawaran -->
                            <ul class="dropdown-menu overflow-auto dropdownHPS" id="myDropdown3" style="max-height: 250px; width: 750px;" aria-labelledby="dropdownHPS">
                                <div class="row m-0 formset-hps justify-content-center">
                                    <div class="col-12 text-center" style="border-bottom: 1px solid #ddd;">
                                        <div class="form-check p-0">
                                            <input class="form-check-input" style="float: none;" type="checkbox" id="checkallhps" name="checkallhps" checked>
                                            <label class="form-check-label ps-1" for="checkallhps">Semua</label>
                                            <div class="form-text mt-0 mb-2">Centang untuk menampilkan semua nilai penawaran</div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="my-3">Silakan atur rentang nilai penawaran pada kolom di bawah ini:</p>
                                    </div>
                                    <div class="col-sm-5 pe-sm-0">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Nilai Awal (Rp)</span>
                                            <input class="form-control" type="text" name="nilai_hps_awal" id="nilai_hps_awal" value="0" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 text-center py-1 px-0 d-none d-sm-block">-</div>
                                    <div class="col-sm-5 ps-sm-0">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Nilai Akhir (Rp)</span>
                                            <input class="form-control" type="text" name="nilai_hps_akhir" id="nilai_hps_akhir" value="0" disabled>
                                            <div class="invalid-feedback">Nilai penawaran akhir harus lebih besar!</div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                            <!-- Filtering -->
                            <div class="col-sm-1 dropdown dropdown-profile dropdown-sorting" style="width: 5%;padding-left:15px;padding-right: 0;">
                                <a class="form-select-custom d-flex" style="width:40px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets\img\filtering.svg') ?>" width="40" style="padding:5px" alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end my-2 py-2 rounded-3">
                                    <li class="dropdown-item d-flex text-dropdown" data-sort="1">Nilai Penawaran Terendah</li>
                                    <li class="dropdown-item d-flex text-dropdown" data-sort="2">Nilai Penawaran Tertinggi</li>
                                    <li class="dropdown-item d-flex text-dropdown" data-sort="3">Penetapan Pemenang Terdekat</li>
                                    <li class="dropdown-item d-flex text-dropdown" data-sort="4">Penetapan Pemenang Terlama</li>
                                </ul>
                            </div>
                            <!-- Search Nama -->
                            <!-- <div class=" col-sm-1 form-select-custom" style="padding:5px; padding-left:30px; margin-right:60px;">
                                <input id="keyword" type="text" class="form-input-custom" style="border:none;" placeholder="Cari nama tender atau pemenang">
                                <img src="<?= base_url('assets\img\icon_search.svg') ?>" width="20" style="float:right;padding-top:3px;margin-right:10px">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-5">
            <div class="row">
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 32%;">
                        <div class="shadow rounded-3 bg-white ">
                            <div class="card-body ">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title ">Pemenang Hari Ini</p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                    <img src="<?= base_url('assets\img\icon_card_people_peserta_(1).svg') ?>" class="card-img" alt="" >
                                    <h1 class="card-text wow fadeInUp" data-wow-delay="0.3s" id="total-today">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 34%;">
                        <div class="shadow rounded-3 bg-white ">
                            <div class="card-body ">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title ">Pemenang Bulan Ini</p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                    <img src="<?= base_url('assets\img\icon_card_people_peserta.svg') ?>" class="card-img" alt="">
                                    <h1 class="card-text wow fadeInUp" data-wow-delay="0.3s" id="total-month">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-lg wow fadeInUp animation" data-wow-delay="0.2s" style="width: 34%;">
                        <div class="shadow rounded-3 bg-white">
                            <div class="card-body">
                                <div h1 class="card-title wow fadeInUp" data-wow-delay="0.5s">
                                    <p class="card-title">Pemenang Tahun Ini</p>
                                </div>
                                <div class="d-flex wow fadeInUp pb-3" data-wow-delay="0.3s">
                                <img src="<?= base_url('assets\img\icon_card_people_peserta_(2).svg') ?>" class="card-img m-sm-none" alt="">
                                    <h1 class="card-text wow fadeInUp" data-wow-delay="0.3s" id="total-year">0</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<section>
    <div class="container bg-white" x-data="newestTender" style="margin-top: -50px;">
        <div class="row align-items-center rounded-3 bg-white shadow mx-0 my-3 wow fadeInUp" id="sec-set-preferensi" data-wow-delay="0.7s" style="display: none;">
            <div class="col-md-2 p-3 text-center text-md-end">
                <img src="<?= base_url("assets/img/rincian 2.png") ?>" width="140" alt="">
            </div>
            <div class="col-md-8 p-3 text-center text-md-start">
                <h4 class="mb-2">Preferensi tender belum ditentukan!</h4>
                <p class="m-0">Hai <span class="fw-semibold nama-pengguna"></span>, Anda belum dapat melihat pemenang tender terbaru.<br>Lakukan pengaturan preferensi untuk mendapatkan informasi pemenang tender terbaru yang sesuai!</p>
            </div>
            <div class="col-md-2 p-3 text-center">
                <a href="<?= base_url() ?>preferensi" class="btn btn-danger m-1">Pengaturan</a>
            </div>
        </div>

        <div class="row align-items-center rounded-3 bg-white shadow mx-0 my-3 wow fadeInUp" id="sec-upgrade-paket" data-wow-delay="0.7s" style="display: none;">
            <div class="col-md-2 p-3 text-center text-md-end">
                <img src="<?= base_url("assets/img/rincian 2.png") ?>" width="140" alt="">
            </div>
            <div class="col-md-8 p-3 text-center text-md-start">
                <h4 class="mb-2">Upgrade paket akun premium!</h4>
                <p class="m-0">Hai <span class="fw-semibold nama-pengguna"></span>, akun Anda saat ini berada pada paket standard.<br>Silakan upgrade akun Anda ke paket premium untuk melihat informasi pemenang tender terbaru!</p>
            </div>
            <div class="col-md-2 p-3 text-center">
                <a href="<?= base_url() ?>pricing_plan" class="btn btn-danger m-1">Upgrade</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="pt-3 pb-3 mt-5 bg-white">
        <div id="sec-pemenang-terbaru" style="display: none; margin-left: 6%; margin-right: 6%;">
            <div class="row wow fadeInUp justify-content-center px-1" data-wow-delay="0.5s">
                <div class="row">
					<div class="col-12">
						<div class="pemenang-info">
							<div id="nav-pemenang" class="nav-main mt-3 custom-nav ">
								<!-- Tab Nav -->
								<ul class="nav nav-tab justify-content-center" id="myTab" role="tablist">
									<li class="nav-item col-6 text-center"><a class="nav-link active " data-toggle="tab" href="#m" role="tab">Pemenang Tender</a></li>
									<li class="nav-item col-6 text-center"><a class="nav-link" data-toggle="tab" href="#w" role="tab">Tender Anggota INKINDO</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

            <div class="row wow fadeInUp mx-0 my-2" id="list-pemenang" data-wow-delay="0.5s"></div>
            <div class="wow fadeInUp" id="pagination-container" data-wow-delay="0.5s"></div>
        </div>
    </div>
</section>

<script src="<?= base_url() ?>assets/js/home/pagination.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script>
    // Inisialisasi Select2 pada dropdown select
    $(document).ready(function() {
        $('.form-select2').select2();
        $('#filter-pemenang').hide();

        Grafikpemenang(2024);
        let id_pengguna = Cookies.get('id_pengguna');

        var total_leads;
        var basicAuth = btoa("beetend" + ":" + "76oZ8XuILKys5");

        function addAuthorizationHeader(xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + basicAuth);
        }
        $.ajax({
            url: "<?= base_url('api/supplier/getCount') ?>",
            type: "GET",
            dataType: "JSON",
            data: {
                id_pengguna: id_pengguna
            },
            beforeSend: addAuthorizationHeader,
            success: function(data) {
                $('#belum-lengkap').html(data.data.jumlah);
                // $('.belum-lengkap').html(data.data.belum_lengkap);
                var belum = data.data.jumlah
                $.ajax({
                    url: "<?= base_url('api/supplier/getTotal') ?>",
                    type: "GET",
                    dataType: "JSON",
                    data: {
                        id_pengguna: id_pengguna
                    },
                    beforeSend: addAuthorizationHeader,
                    success: function(data) {
                        // $('.total-leads').html(data.total_leads);
                        $('.total-leads').html(data.data);
                        var total = data.data

                        var jumlah = total - belum
                        $('.total').html(jumlah);
                        
                        $('#filter-pemenang').show();
                    }
                })
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);

            }
        })

        // GET DATA LEADS BELUM DI PLOTING
        $.ajax({
            url: "<?= base_url('DashboardUserSupplier/getLeadsBelumPloting') ?>",
            type: "GET",
            dataType: "JSON",
            data: {
                id_pengguna: id_pengguna
            },
            success: function(data) {
                // console.log('belum di ploting : '+ data);
                $('#leads_belum_ploting').html(data);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        })

        // get Recent DATA Leads
        $.ajax({
            url: "<?= base_url('DashboardUserSupplier/getRecentLeads') ?>",
            type: "GET",
            dataType: "JSON",
            data: {
                id_pengguna: id_pengguna
            },
            success: function(data) {
                // console.log('belum di ploting : '+ data);
                $('#leads_terbaru').html(data);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        })

        // get data untuk tabel tim marketing
        $.ajax({
            url: "<?= base_url('DashboardUserSupplier/getTabelTimMarketing') ?>",
            type: "GET",
            dataType: "JSON",
            data: {
                id_pengguna: id_pengguna
            },
            success: function(data) {
                // console.log(JSON.stringify(data, null, 2));

                // Fungsi untuk mengubah huruf pertama setiap kata menjadi huruf besar
                function capitalizeFirstLetter(string) {
                    return string.replace(/\b\w/g, function(l) {
                        return l.toUpperCase()
                    });
                }

                let rows = '';
                data.forEach(function(item) {
                    let namaTim = capitalizeFirstLetter(item.nama_tim);
                    let alamat = capitalizeFirstLetter(item.alamat);

                    rows += `
                        <tr>
                            <td><strong>${namaTim}</strong><br>${alamat}</td>
                            <td><span class="circle">${item.jumlah_perusahaan}</span></td>
                        </tr>
                    `;
                });
                $('#tim-marketing').html(rows);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        })

        // ajax  mengambil data untuk membuat grafik donat
        $.ajax({
            url: "<?= base_url('DashboardUserSupplier/getDonatChart') ?>",
            type: "GET",
            dataType: "JSON",
            data: {
                id_pengguna: id_pengguna
            },
            success: function(data) {
                // console.log(data)
                // panggil fungsi menamilkan grafik donan + keterangannya
                GrafikDonat(data)
                updateKeterangan(data)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        })

    });//akhir ready function


    // ajax grafik pemenang
    function Grafikpemenang(selectedYear = $("#tahunSelect").val()) {
        let id_pengguna = Cookies.get('id_pengguna');

        $.ajax({
            url: "<?= base_url() ?>DashboardUserSupplier/getDataGrafikPemenang",
            type: "GET",
            dataType: "JSON",
            data: {
                tahun: selectedYear,
                id_pengguna: id_pengguna,
            },
            success: function(data) {
                updateRiwayatPemenangChart(data)
            },
            error: function(jqXHR, textStatus, errorThrown) {}
        });
    }
    // Function to update Riwayat Peserta Menang Chart and adjust canvas height
    function updateRiwayatPemenangChart(data) {
        var selectedYear = document.getElementById("tahunSelect").value;
        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

        // Generate data for the selected year (mock data)
        var riwayatPemenangData = {
            labels: months,
            datasets: [{
                label: "Peserta Menang",
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                // data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 15, 10, 5], // Mock data, replace with actual data
                data: data,
            }]
        };

        // Update the chart with new data
        riwayatPemenangChart.data = riwayatPemenangData;
        riwayatPemenangChart.update();

        // Adjust canvas height to fit its container
        var containerHeight = document.getElementById("grafikRiwayatPemenang").parentNode.offsetHeight;
        document.getElementById("grafikRiwayatPemenang").style.height = containerHeight + "px";
    }

    // Riwayat Peserta Menang Chart Options
    var riwayatPemenangOptions = {
        responsive: true,
        maintainAspectRatio: false,
    };

    // Animation options
    var riwayatPemenangAnimation = {
        radius: {
            duration: 400,
            easing: 'linear',
            loop: (context) => context.active
        }
    };


    // Create Riwayat Peserta Menang Chart
    var riwayatPemenangChartCanvas = document.getElementById("grafikRiwayatPemenang").getContext("2d");
    var riwayatPemenangChart = new Chart(riwayatPemenangChartCanvas, {
        type: 'line',
        data: {},
        // options: riwayatPemenangOptions,
        // plugins: [riwayatPemenangAnimation] // Include animation options here
    });

    // Initial adjustment of canvas height
    updateRiwayatPemenangChart();

    // Donat Chart status Leads
    // Data untuk chart
    function GrafikDonat(data){
        var data = {
            labels: ["Tanpa Status", "Sedang dihubungi", "Proses Negosiasi", "Diterima", "Ditolak"],
            datasets: [{
                data:[
                    data['tanpa-status'],
                    data['sedang-dihubungi'],
                    data['proses-negosiasi'],
                    data['diterima'],
                    data['ditolak']
                    ],
                backgroundColor: [
                    'orange', // Tanpa Status
                    'lightblue', // Sedang dihubungi
                    'purple', // Proses Negosiasi
                    'green', // Diterima
                    'red' // Ditolak
                ]
            }]
        };

        // Pengaturan chart
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            cutoutPercentage: 70,
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    fontColor: 'black',
                    fontSize: 14
                }
            },
            title: {
                display: false
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        // Mendapatkan elemen canvas
        var ctx = document.getElementById("grafikCRM").getContext("2d");

        // Membuat doughnut chart
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });
    }

    function updateKeterangan(data) {
        $("#tanpa-status .crmstats-summary-number").text(data['tanpa-status']);
        $("#sedang-dihubungi .crmstats-summary-number").text(data['sedang-dihubungi']);
        $("#proses-negosiasi .crmstats-summary-number").text(data['proses-negosiasi']);
        $("#diterima .crmstats-summary-number").text(data['diterima']);
        $("#ditolak .crmstats-summary-number").text(data['ditolak']);
    }


</script>


<script>
    var keyword = '',
        jenis_pengadaan = '',
        hps_awal = '',
        hps_akhir = '',
        prov = '',
        kab = '',
        jum_pemenang, timer;

    $(document).ready(function() {
        $.ajax({
                // url : "<?= base_url() ?>api/getJumKatalogPemenangTerbaruByPengguna/"+id_pengguna,
                url : "<?= base_url() ?>Tender/gatJumLogPemenangTerbaru/"+id_pengguna,
                type: "GET",
                dataType: "JSON",
                success : function(data){
                    jum_pemenang = data.jumlah;
                                    
                    if (jum_pemenang > 0) {
                        $('#pagination-container').pagination({
                            // dataSource: "<?= base_url() ?>api/getKatalogPemenangTerbaruByPengguna/"+id_pengguna+"/"+jum_pemenang,
                            dataSource: "<?= base_url() ?>api/get_pemenang_terbaru/"+id_pengguna+"/"+jum_pemenang,
                            locator: '',
                            totalNumber: jum_pemenang,
                            pageSize: 10,
                            autoHidePrevious: true,
                            autoHideNext: true,
                            showNavigator: true,
                            formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> pemenang tender terbaru',
                            position: 'bottom',
                            className: 'paginationjs-theme-red paginationjs-big',
                            ajax: {
                                beforeSend: function(xhr, settings) {
                                    const url = settings.url
                                    const params = new URLSearchParams(url)
                                    let currentPageNum = params.get('pageNumber')
                                    currentPageNum = parseInt(currentPageNum)
                                    if (currentPageNum >= 2 && id_pengguna == 0) {
                                        window.location.href = `${base_url}login`
                                        return false
                                    }
                                            
                                    $('#list-pemenang').html('<div class="d-flex justify-content-center my-2"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan pemenang tender terbaru...</span></div>');
                                }
                            },
                            callback: function(data, pagination) {
                                console.log(data.length);
                                $('#sec-pemenang-terbaru').show();
                                if (data != '') {
                                    let html = template(data);
                                    $('#list-pemenang').html(html);
                                }
                            }
                        });
                    } else {
                        $('#sec-pemenang-terbaru').show();
                        $('#list-pemenang').html(`
                            <div class="row align-items-center rounded-3 bg-white shadow mx-0 my-3">
                                <div class="col-md-2 p-3 text-center text-md-end">
                                    <img src="<?= base_url("assets/img/rincian 2.png") ?>" width="140" alt="">
                                </div>
                                <div class="col-md-8 p-3 text-center text-md-start">
                                    <h4 class="mb-2">Pemenang tender kosong!</h4>
                                    <p class="m-0">Belum ada pemenang tender sesuai preferensi yang Anda tentukan.<br>Silakan bisa coba atur ulang preferensi Anda menggunakan kata kunci lain untuk mendapatkan hasil lebih baik.</p>
                                </div>
                                <div class="col-md-2 p-3 text-center">
                                    <a href="<?= base_url() ?>preferensi" class="btn btn-danger m-1">Pengaturan</a>
                                </div>
                            </div>
                        `);
                        
                        $('#pagination-container').hide();
                    }
                },error: function (jqXHR, textStatus, errorThrown){
                    $('#sec-pemenang-terbaru').show();
                    $('#list-pemenang').html('<div class="alert alert-danger">Terjadi kesalahan saat memuat data. Silakan coba lagi nanti.</div>');
                    console.error(`Error: ${textStatus}, ${errorThrown}`);
                }
        
        });

        // $.ajax({
        //     url: "<?= base_url() ?>api/supplier/jumlah-pemenang",
        //     type: "GET",
        //     dataType: "JSON",
        //     success: function(data) {
        //         $('#total-today').html(data.total_today);
        //         $('#total-month').html(data.total_month);
        //         $('#total-year').html(data.total_year);
        //         // console.log(data.total_today);
        //     },
        //     error: function(jqXHR, textStatus, errorThrown) {}
        // });

        // $.ajax({
        //     url: "<?= base_url() ?>api/getPreferensiPengguna/" + id_pengguna,
        //     type: "GET",
        //     dataType: "JSON",
        //     success: function(data) {
        //         if (data != null) {
        //             $('#sec-set-preferensi').hide();

        //             setTimeout(function() {
        //                 let status = $('#status_user').val();

        //                 if (status == '0') {
        //                     $('#sec-upgrade-paket').show();
        //                     $('#sec-pemenang-terbaru').hide();
        //                 } else {
        //                     $('#sec-upgrade-paket').hide();
        //                     $('#sec-pemenang-terbaru').show();

        //                     filterTender();

        //                     /*$.ajax({
        //                         url : "<?= base_url() ?>api/getJumKatalogPemenangTerbaruByPengguna/"+id_pengguna,
        //                         type: "GET",
        //             			dataType: "JSON",
        //                         success : function(data){
        //                             jum_pemenang = data.jumlah;
                                    
        //                             if (jum_pemenang > 0) {
        //                                 $('#pagination-container').pagination({
        //                                     dataSource: "<?= base_url() ?>api/getKatalogPemenangTerbaruByPengguna/"+id_pengguna+"/"+jum_pemenang,
        //                                     locator: '',
        //                                     totalNumber: jum_pemenang,
        //                                     pageSize: 10,
        //                                     autoHidePrevious: true,
        //                                     autoHideNext: true,
        //                                     showNavigator: true,
        //                                     formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> pemenang tender terbaru',
        //                                     position: 'bottom',
        //                                     className: 'paginationjs-theme-red paginationjs-big',
        //                                     ajax: {
        //                                         beforeSend: function(xhr, settings) {
        //                                             const url = settings.url
        //                                             const params = new URLSearchParams(url)
        //                                             let currentPageNum = params.get('pageNumber')
        //                                             currentPageNum = parseInt(currentPageNum)
        //                                             if (currentPageNum >= 2 && id_pengguna == 0) {
        //                                                 window.location.href = `${base_url}login`
        //                                                 return false
        //                                             }
                        
        //                                             $('#list-pemenang').html('<div class="d-flex justify-content-center my-2"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan pemenang tender terbaru...</span></div>');
        //                                         }
        //                                     },
        //                                     callback: function(data, pagination) {
        //                                         if (data != '') {
        //                                             let html = template(data);
        //                                             $('#list-pemenang').html(html);
        //                                         }
        //                                     }
        //                                 });
        //                             } else {
        //                                 $('#list-pemenang').html(`
        //                                     <div class="row align-items-center rounded-3 bg-white shadow mx-0 my-3">
        //                                         <div class="col-md-2 p-3 text-center text-md-end">
        //                                             <img src="<?= base_url("assets/img/rincian 2.png") ?>" width="140" alt="">
        //                                         </div>
        //                                         <div class="col-md-8 p-3 text-center text-md-start">
        //                                             <h4 class="mb-2">Pemenang tender kosong!</h4>
        //                                             <p class="m-0">Belum ada pemenang tender sesuai preferensi yang Anda tentukan.<br>Silakan bisa coba atur ulang preferensi Anda menggunakan kata kunci lain untuk mendapatkan hasil lebih baik.</p>
        //                                         </div>
        //                                         <div class="col-md-2 p-3 text-center">
        //                                             <a href="<?= base_url() ?>preferensi" class="btn btn-danger m-1">Pengaturan</a>
        //                                         </div>
        //                                     </div>
        //                                 `);
                                        
        //                                 $('#pagination-container').hide();
        //                             }
        //                         },
        //                         error: function (jqXHR, textStatus, errorThrown){}
        //                     });*/
        //                 }
        //             }, 1000);
        //         } else $('#sec-set-preferensi').show();
        //     },
        //     error: function(jqXHR, textStatus, errorThrown) {}
        // });
    });

    function filterTender(sort = '3') {
        let params = {
            'id_pengguna': id_pengguna,
            'keyword': keyword,
            'jenis_pengadaan': jenis_pengadaan,
            'nilai_hps_awal': hps_awal,
            'nilai_hps_akhir': hps_akhir,
            'prov': prov,
            'kab': kab,
            'sort': sort
        };

        $.ajax({
            // url: "<?= base_url() ?>api/getJumKatalogPemenangTerbaruByPengguna1",
            url: "<?= base_url() ?>Tender/tumbal",
            type: "POST",
            dataType: "JSON",
            data: params,
            success: function(data) {
                jum_pemenang = data.jumlah;

                if (jum_pemenang > 0) {
                    $('#pagination-container').pagination({
                        dataSource: "<?= base_url() ?>api/getKatalogPemenangTerbaruByPengguna1",
                        locator: '',
                        totalNumber: jum_pemenang,
                        pageSize: 10,
                        autoHidePrevious: true,
                        autoHideNext: true,
                        showNavigator: true,
                        formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> pemenang tender terbaru',
                        position: 'bottom',
                        className: 'paginationjs-theme-red paginationjs-big',
                        ajax: {
                            type: 'POST',
                            data: params,
                            beforeSend: function(xhr, settings) {
                                const url = settings.url
                                const params = new URLSearchParams(url)
                                let currentPageNum = params.get('pageNumber')
                                currentPageNum = parseInt(currentPageNum)
                                if (currentPageNum >= 2 && id_pengguna == 0) {
                                    window.location.href = `${base_url}login`
                                    return false
                                }

                                $('#list-pemenang').html('<div class="d-flex justify-content-center my-4"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan pemenang tender terbaru...</span></div>');
                            }
                        },
                        callback: function(data, pagination) {
                            if (data != '') {
                                let html = template(data);
                                $('#list-pemenang').html(html);
                            }
                        }
                    });
                } else {
                    $('#list-pemenang').html(`
                        <div class="row align-items-center rounded-3 bg-white shadow my-3" style="width: 98.2%;margin-inline: 12px;">
                            <div class="col-md-2 p-3 text-center">
                                <img src="<?= base_url("assets/img/rincian 2.png") ?>" width="140" alt="">
                            </div>
                            <div class="col-md-10 p-3 text-center text-md-start">
                                <h4 class="mb-2">Pemenang tender kosong!</h4>
                                <p class="m-0">Tidak ada pemenang tender sesuai kata kunci yang Anda tentukan.<br>Silakan bisa coba atur ulang kata kunci pencarian Anda untuk mendapatkan informasi pemenang tender sesuai yang diharapkan!</p>
                            </div>
                        </div>
                    `);

                    $('#pagination-container').hide();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {}
        });
    }

    function template(data) {
        var pemenang = '';
        for (var i = 0; i <= data.length - 1; i++) {
            let update_hari = data[i].update_hari;
            if (update_hari == 0) update_hari = 'Hari ini';
            else if (update_hari == 1) update_hari = 'Kemarin';
            else update_hari = update_hari + ' hari yang lalu';

            pemenang +=
                `<div class="paket col-md-6 px-1 py-0">
                    <div class="p-card bg-white p-3 p-lg-4 rounded-4 border hover-scale">
                        <div class="d-flex align-items-center border-bottom pb-3">
                            <div class="d-flex flex-row align-items-center">
                                <img class="rounded-circle me-1" src="<?= base_url("assets/img/img-profile-default.png") ?>" width="45">
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <div class="profiles">
                                    <div class="ms-2">
                                        <a class="p-0" href="` + data[i].url + `"><h6>` + data[i].nama_lpse + `</h6></a>
                                        <span><i class="fas fa-calendar-alt me-1"></i>` + update_hari + `</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="p-0 nama-paket" href="#"><h5 title="` + data[i].nama_tender + `">` + data[i].nama_tender + `</h5></a>
                        <span class="badge badge-danger mb-3">` + data[i].jenis_tender + `</span>
                        <table class="rincian-paket" width="100%">
                            <tbody>
                                <tr>
                                    <td class="th">Kode Tender</td>
                                    <td>:</td>
                                    <td><strong>` + data[i].kode_tender + `</strong></td>
                                </tr>
                                <tr>
                                    <td class="th">Nilai Penawaran</td>
                                    <td>:</td>
                                    <td><div class="label label-success mb-0">` + formatRupiah(data[i].harga_penawaran, 'Rp') + `</div></td>
                                </tr>
                                <tr>
                                    <td class="th">Nama Pemenang</td>
                                    <td>:</td>
                                    <td><div class="badge badge-akhirdaftar">` + data[i].nama_perusahaan + `</div></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-3">
                            <div></div>
                            <div class="link d-flex flex-row align-items-center">
                                <span><a class="btn btn-sm border btn-outline" href="${base_url}detail-pemenang/${data[i].kode_tender}" target="_blank"><i class="fas fa-info-circle me-1"></i>Detail Pemenang</a></span>
                            </div>
                        </div>
                    </div>
                </div>`;
        }

        return pemenang;
    }

    $('.dropdown-sorting .dropdown-item').on('click', function() {
        let sort = $(this).data('sort');

        filterTender(sort);
    });

    $('#checkallhps').on('click', function() {
        let allhps = this.checked;
        $('#nilai_hps_awal, #nilai_hps_akhir').prop('disabled', allhps);

        if (allhps) hps_awal = hps_akhir = 0;
        else {
            $('#nilai_hps_awal').focus();
            hps_awal = $('#nilai_hps_awal').val();
            hps_akhir = $('#nilai_hps_akhir').val();
        }

        filterTender();
    });

    $('#nilai_hps_awal, #nilai_hps_akhir').inputmask('decimal', {
        'alias': 'numeric',
        'groupSeparator': '.',
        'autoGroup': true,
        'digits': 0,
        'digitsOptional': false,
        'allowMinus': false,
        'placeholder': '0',
        'rightAlign': false,
        'autoUnmask': true
    }).on('keyup', function() {
        hps_awal = $('#nilai_hps_awal').val();
        hps_akhir = $('#nilai_hps_akhir').val();

        if (parseInt(hps_akhir) < parseInt(hps_awal)) $('#nilai_hps_akhir').addClass('is-invalid');
        else {
            $('#nilai_hps_akhir').removeClass('is-invalid');
            filterTender();
        }
    });

    $('#keyword').on('keyup', function() {
        clearTimeout(timer);

        timer = setTimeout(function() {
            keyword = $('#keyword').val();
            filterTender();
        }, 1000);
    });

    function formatData(data) {
        if (!data.id) return data.text;
        if (data.kategori != "2") return "<b>" + data.text + "</b>";
        else return "<span style='padding-left: 20px;'>" + data.text + "</span>";
    }

    $('.select2-wilayah').select2({
        placeholder: "Lokasi Pekerjaan",
        theme: 'bootstrap-5',
        allowClear: true,
        "language": {
            noResults: function() {
                return "<span>Tidak ada lokasi pekerjaan</span>";
            },
            loadingMore: function() {
                return "<span>Menampilkan lainnya...</span>";
            },
            searching: function() {
                return "<span>Mencari hasil...</span>";
            },
            errorLoading: function() {
                return "<span>Gagal menampilkan lokasi pekerjaan</span>";
            }
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        ajax: {
            url: "<?= base_url('api/getListLokasiPekerjaan') ?>",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term,
                    id_pengguna: id_pengguna,
                    jenis: '4',
                    page_limit: 10,
                    page: (params.page > 1 ? params.page - 1 : params.page)
                };
            },
            processResults: function(data, params) {
                params.page = params.page || 1;
                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 10) < data.total_count
                    }
                };
            },
            cache: true
        },
        templateResult: formatData
    }).on('change', function() {
        let wilayah = $(this).val();

        if (wilayah != null) {
            if (wilayah.includes('00')) {
                prov = wilayah;
                kab = '';
            } else {
                kab = wilayah;
                prov = '';
            }
        } else kab = prov = '';

        filterTender();
    });

    $('.select2-jenis-pengadaan').select2({
        placeholder: "Jenis Pengadaan",
        theme: 'bootstrap-5',
        allowClear: true,
        "language": {
            noResults: function() {
                return "<span>Tidak ada jenis pengadaan</span>";
            },
            loadingMore: function() {
                return "<span>Menampilkan lainnya...</span>";
            },
            searching: function() {
                return "<span>Mencari hasil...</span>";
            },
            errorLoading: function() {
                return "<span>Gagal menampilkan jenis pengadaan</span>";
            }
        },
        escapeMarkup: function(markup) {
            return markup;
        },
        ajax: {
            url: "<?= base_url('api/getListJenisPengadaan') ?>",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term,
                    id_pengguna: id_pengguna,
                    jenis: '4',
                    page_limit: 10,
                    page: (params.page > 1 ? params.page - 1 : params.page)
                };
            },
            processResults: function(data, params) {
                params.page = params.page || 1;
                return {
                    results: data.results,
                    pagination: {
                        more: (params.page * 10) < data.total_count
                    }
                };
            },
            cache: true
        }
    }).on('change', function() {
        jenis_pengadaan = $(this).val();
        filterTender();
    });
</script>
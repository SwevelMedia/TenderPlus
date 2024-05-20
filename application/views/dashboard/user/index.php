<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .tender-summary {
        font-size: 14px;
        font-weight: 500;
    }

    .tender-summary-number {
        font-size: 26px;
        margin-right: 5px;
    }

    .tender-summary-span {
        border-left-style: solid;
        border-left-width: 6px;
        height: 25px;
        opacity: 1;
        margin-right: 10px;
    }

    .tender-summary-span-total {
        border-left-color: #8B6464;
    }

    .tender-summary-span-win {
        border-left-color: #6EE7B7;
    }

    .tender-summary-span-lost {
        border-left-color: #DF3131;
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


    .tender-summary {
        font-size: 14px;
        font-weight: 500;
    }

    .tender-summary-span {
        border-left-style: solid;
        border-left-width: 6px;
        height: 25px;
        opacity: 1;
        margin-right: 10px;
    }

    .tender-summary-span-total {
        border-left-color: #8B6464;
    }

    .tender-summary-span-win {
        border-left-color: #6EE7B7;
    }

    .tender-summary-span-lost {
        border-left-color: #DF3131;
    }

    .npwp-alert-msg .btn-close {
        top: 0;
        right: 0;
        z-index: 2;
        padding: 1.25rem 1rem;
    }

    .modal-body {
        padding: 30px;
    }



    /* nopi */
    .animation {
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    /* .container-lg {
        margin-top: 90px;
    } */

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
        width: 70%;
        margin: 10px;
    }

    .card-sum {
        flex: 1;
        padding: 10px;
        margin: 10px;
        width: 100px;
    }

    .sum-title {
        font-size: 12px;
        color: #B89494;
    }

    .sum-text {
        font-size: 20px;
        margin-right: 8px;
    }

    .custom-img {
        width: 30px;
        height: 30px;
    }

    .tren-card {
        width: 400px;
        padding-bottom: 10px;
    }

    .tren-title {
        font-size: 25px;
        font-weight: bold;
        margin-left: 140px;
    }

    .tren-text {
        font-size: 18px;
        font-weight: bold;
        color: #694747;
        padding-left: 40px;
        margin-right: 50px;
        margin-top: 20px;
    }

    .tren-isi {
        font-size: 15;
        font-weight: bold;
        margin-left: 30px;
    }

    .col-4 {
        margin-top: 6rem;
    }

    .container-lg {
        margin-top: 50px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    /* table */
    .table-responsive.custom-table-scroll {
        max-height: 300px;
        overflow-y: auto;
        padding: 0.75em;
    }



    th,
    td {
        border: none;
        vertical-align: middle;
        height: 50px;
        padding: 0px 7px 0px 30px;
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px;
        /* 122.222% */
    }

    .custom-table-container {
        border-radius: 10px 10px 10px 10px;
        overflow: hidden;
        border: 1px solid var(--neutral-100, #F0E2E2);

    }

    th.custom-padding,
    td.custom-padding {
        max-width: 300px;
        border: none;
        align-items: center;
        vertical-align: middle;
        height: 65px !important;
        padding: 0px 7px 0px 10px !important;
    }

    .thead {
        color: #fff;
        background-color: #D21B1B;
        text-align: left;
        font-size: 15px;
    }

    .green-td {
        color: #10B981;
        text-align: center;
    }

    .orange-td {
        color: #EB650D;
        text-align: center;
    }

    /* scroll notif */

    .scrollable-container {
        max-height: 30vh !important;
        overflow-y: scroll;
        /* background-color: white; */
        padding: 2.5%;
    }

    .custom-scroll {
        display: flex;
        flex-direction: column;
        /* background-color: white; */
        /* padding: 10%; */
    }

    .scrollable-container-menang {
        max-height: 200px;
        overflow-y: auto;
        padding: 2.5%;
    }

    .box {
        max-height: 125px;
        margin-bottom: 10px;
        /* Jarak antara kotak-kotak */
    }


    /* Untuk desktop (lebar layar lebih besar dari 768px) */
    .chart3 {
        margin: 25px;
        padding: 20px;
    }

    /* Untuk mode seluler (lebar layar kurang dari atau sama dengan 768px) */
    @media (max-width: 768px) {
        .chart3 {
            margin: 0;
            padding: 0;
        }
    }

    .summary-box {
        min-width: 200px;
        width: 100%;
        max-height: 125px;
        height: auto;
        border-radius: 10px;
        /* box-shadow: 0px 0px 50px 2px rgba(153, 153, 153, 0.084); */
        padding: 10px;
        margin: auto;
        display: flex;
    }

    .card-riwayat {
        display: inline-flex;
        width: auto;
        padding: 16px 11px;
        align-items: center;
        gap: 26px;
        border-radius: 5px;
        background: var(--font-white, #FCFCFC);
        box-shadow: 0px 0px 2px 0px rgba(0, 0, 0, 0.25);

    }

    .card-riwayat p {
        font-size: 12px;
        font-weight: 300px;
    }

    .card-hps {
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        border-radius: 13.622px;
        box-shadow: 0.68112px 1.36225px 8.8546px 0px rgba(217, 217, 217, 0.80);
        color: white;
        vertical-align: middle;
    }


    .card-hps h6 {
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .sum-semua {
        display: flex;
        flex-direction: column;
        /* For stacking items vertically */
        align-items: stretch;
        /* For full width */
        gap: 18px;
        margin-top: 2rem;
        padding: 7.5%;
    }


    .sum-riwayat {
        display: inline-flex;
        height: 400px;
        padding: 2px;
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        flex-shrink: 0;
    }

    .kalah {
        display: flex;
        width: 90px;
        padding: 5px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 5px;
        background: var(--primary-red-100, #F8A5A5);
        color: var(--primary-red-700, #AE0707);
        text-align: center;
    }

    .menang {

        display: flex;
        width: 90px;
        padding: 5px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 5px;
        background: var(--success-100, #D1FAE5);
        color: var(--success-700, #047857);
    }

    .sedang-diikuti {
        display: flex;
        width: 140px;
        padding: 5px 0px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        border-radius: 5px;
        background: var(--Secondary-300, #FFD6D3);
        color: var(--Secondary-700, #EB650D);
        text-align: center;
    }

    .border-suram {
        display: flex;
        padding: 5px;
        align-items: center;
        gap: 5.449px;
        border-radius: 13.622px;
        background: var(--X, rgba(10, 10, 10, 0.15));

    }

    .form-select-custom {
        width: 300px;
        color: #CCCCCC;
        border-radius: 20px;
        font-size: 1rem;
        margin-bottom: 15px;
        border: 1px solid;
        background-color: white;
        margin-top: 0;
        height: 2rem;
    }

    .form-select-custom:hover {
        border: 1.5px solid var(--primary-red-500, #D21B1B);
    }

    .form-input-custom {
        border-radius: 20px;
        font-size: 1rem;
        width: 92%;
    }


    .sum-semua-notif {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .dashboard-hero {
        background-color: #ffeee6;
        width: 100%;
        min-height: 100px;
        height: auto;
        border-radius: 10px;
        padding: 2em;
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

    /* This will change the label text color to red when the checkbox is checked */
    .checkbox input[type="checkbox"]:checked+label {
        color: #D21B1B;
        /* Hex color for red */
    }

    /* Additional styles to ensure checkboxes are displayed inline and have a cursor pointer */
    .checkbox input[type="checkbox"] {
        cursor: pointer;
    }

    .checkbox label {
        cursor: pointer;
    }

    /* Optional: Add some spacing between the checkboxes */
    .checkbox {
        margin-right: 10px;
        /* Adjust the spacing as needed */
    }


    /* Optional: add some horizontal layout styling */
    .checkbox {
        display: inline-block;
        /* Align checkboxes horizontally */
        margin-right: 10px;
        /* Spacing between checkboxes */

    }

    .filter {
        border: none;
    }

    .notif-tender {
        max-height: 35vh;
        overflow-y: scroll;
    }

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
        animation: spin 1s linear infinite;
        /* Animasi berputar */
    }

    .btn-fillter {
        /* height: 45px; */
        border-radius: 3px;
        font-size: var(--bs-body-font-size);
        font-weight: 500;
        letter-spacing: 0;
        background: #db2828;
        font-family: Ubuntu, sans-serif;
        color: #fff;
    }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        border-width: 2px;
    }

    .empty-table-message {
        text-align: center;
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

<?php
// if ($npwpComplete) {
//     $total = json_decode($akumulasi);
//     $summary = json_decode($range);
// }

if (!$npwpComplete) : ?>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#npwpModal').modal('show');
        });
    </script>
<?php endif; ?>
<div class="modal fade" id="npwpModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" x-data="completeProfile">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable rincian-modal" style="width:500px">
        <div class="modal-content">
            <div class="modal-body modal-syarat text-center">
                <h1 class="fs-4 mb-4">Tinggal satu langkah lagi!</h1>
                <img src="<?= base_url('assets/img/lengkapi_profil.svg') ?>" height="200" alt="">
                <h6 class="mb-2 mt-4"><b>Masukkan NPWP Anda</b></h6>
                <div :class="npwpAlertClass" x-show="showAlert">
                    <div x-text="alertMsg"></div>
                </div>

                <p class="mt-3">Masukkan NPWP Anda untuk dapat melihat statistik performa tender yang Anda ikuti!</p>

                <form method="post" action="<?= base_url('update_npwp/') . $this->session->user_data['id_pengguna'] ?>">
                    <input type="text" id="exampleInputEmail1" aria-describedby="emailHelp" x-model="npwp" x-mask="99.999.999.9-999.999" placeholder="##.###.###.#-###.###" name="npwp" @keyup="validateNpwp()" :class="errors.npwp ? 'form-control mt-3 w-75 mx-auto is-invalid' : 'form-control mt-3 w-75 mx-auto'">
                    <p class="small text-danger" x-text="msg.npwp" style="display: none" x-show="errors.npwp"></p>
                    <button class="btn btn-danger mt-3 px-5" x-text="loading ? 'Menyimpan...' : 'Simpan'" @click="saveNpwp($event)">Simpan</button>
                    <a href="" type="submit" class="btn btn-secondary mt-3 px-5" @click.prevent="hideAlert()">Nanti saja</a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('completeProfile', () => ({
            npwp: '',
            errors: {
                npwp: null,
            },
            msg: {
                npwp: null,
            },
            loading: false,
            token: '',
            npwpAlertClass: '',
            showAlert: false,
            alertMsg: '',
            init() {
                this.$watch('npwp', (newVal, oldVal) => {
                    this.errors.npwp = !this.validateNpwp()
                })
            },
            hideAlert() {
                window.location.href = `${base_url}user-dashboard/list-tender`
            },
            validateNpwp() {
                const valLength = this.npwp.length > 0 && this.npwp.length <= 20
                if (!valLength) {
                    this.msg.npwp = 'Nomor NPWP tidak valid'
                }

                return valLength
            },
            saveNpwp(evt) {
                $.ajax({
                        url: `${base_url}npwp`,
                        type: 'POST',
                        data: {
                            npwp: this.npwp,
                            user_id: userId
                        },
                        dataType: 'json',
                        beforeSend: () => {
                            this.loading = true
                        },
                    })
                    .done(resp => {
                        this.loading = false
                        this.alertMsg = resp.message
                        if (resp.error_code == 0) {
                            this.npwpAlertClass = 'alert alert-success npwp-alert-msg'
                            $('#npwpModal').modal('hide');
                        } else {
                            this.npwpAlertClass = 'alert alert-danger npwp-alert-msg'
                        }
                        this.showAlert = true
                        console.log(resp)
                    })
                    .fail(err => {
                        const errs = JSON.parse(err.responseText)
                        this.loading = false
                        console.log(err)
                        this.errors.npwp = true
                        this.msg.npwp = errs.errors.npwp
                        // this.alertMsg = resp.message
                        // if (resp.error_code == 0) {
                        //     this.npwpAlertClass = 'alert alert-success'
                        // } else {
                        //     this.npwpAlertClass = 'alert alert-danger'
                        // }
                        // this.showAlert = true
                    })
                return evt.preventDefault()
            }
        }))
    });
</script>


<div class="container mb-3 pb-3" data-aos="fade_up">
    <div class="row">
        <div class="col-lg-12" style="margin:0">
            <h4 id="welcome-title-1" style="font-weight:510; font-size:22px;">Cari nama perusahaan terlebih dahulu </h4>
            <h4 id="welcome-title-2" style="font-weight:510; font-size:22px;">untuk menampilkan analsis data!</h4>
        </div>
    </div>
    <div id="loading-filter" class="loading-container" style="display: none;">
        <div class="loading-spinner"></div>
    </div>
</div>
<section class="bg-white">

</section>
<section id="user-dashboard" class="user-dashboard mt-5 pt-5 bg-white" style="margin-top:70px">
    <!-- <div class="container-lg wow pb-3 fadeInUp mb-3" data-wow-delay="0.1s">
        <h4 style="font-weight:510; font-size:22px;">Selamat datang kembali, <?= $peserta['0']['nama_peserta'] ?></h4>
        <h4 style="font-weight:510; font-size:22px;">Sudah siap untuk memenangkan Tender?</h4>
    </div> -->

    <section class="mt-10 bg-white">
        <div class="container">
            <div class="row justify-content d-flex content-above-navbar">
                <div class="d-flex justify-content-left align-items-left wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="mb-0 ms-2 mt-4 wow fadeInUp w-660" style="padding-top:8px;font-size:26px">
                        Selamat Datang Kembali, <span style="color:#D21B1B"> <!-- nama peserta--><?= $namaPerusahaan; ?> </span>
                        <br>Mulai pantau dan menangkan Tender Anda!
                    </h4>
                </div>
            </div>
        </div>
        </session>


        <div class="container-lg" data-aos="fade_up">
            <div class="row">
                <div class="col-lg-8" style="margin:0">
                    <!-- filter LPSE -->
                    <div class="container " data-wow-delay="0.1s">
                        <div class="row">
                            <div class="card-select">
                                <div class="select-custom container-fluid">
                                    <div class="row">
                                        <div class="col form-select-custom d-flex" style="width: 300px;">
                                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                                            <select id="select-lpse" class="" style="border:none;">
                                                <option value="">Semua LPSE</option>
                                                <?php foreach ($lpse as $lpse) : ?>
                                                    <option value="<?= $lpse['id_lpse'] ?>"><?php echo $lpse['nama_lpse'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col form-select-custom d-flex ms-2" style="width: 200px;">
                                            <img src="<?= base_url('assets\img\icon_filter.svg') ?>" width="20" alt="">
                                            <select id="select-tahun" class="" style="border:none;">
                                                <option class="select-tahun-option" value="">Semua tahun</option>
                                                <?php
                                                $tahunSekarang = (int) date('Y');
                                                for ($i = 0; $i < 5; $i++) :
                                                    $tahun = $tahunSekarang - $i;
                                                    $selected = ($i == 0) ? 'selected' : ''; // Mengatur opsi pertama sebagai yang dipilih secara default
                                                ?>
                                                    <option class="select-tahun-option" value="<?= $tahun ?>" <?= $selected ?>><?= $tahun ?></option>
                                                <?php endfor; ?>
                                            </select>

                                        </div>
                                        <div class="col-auto">
                                            <button id="btn-filter" class="btn-fillter">
                                                <i class="fas fa-filter"></i> Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Filter Tahun -->

                    <div class="dashboard-hero mt-4">
                        <!-- <div class="row col-sm-8 justify-content-center mx-1 px-1 ">

                    </div> -->

                        <div class="row mt-2">
                            <div class="col-lg-3 pl-4">
                                <div>
                                    <center>
                                        <div class="chart2" style="margin:0; padding:0">
                                            <canvas id="myDoughnutChart" width="350" height="350" style="user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px; cursor: default;" _echarts_instance_="ec_1698285832199"></canvas>
                                        </div>
                                    </center>
                                </div>
                            </div>

                            <div class="col-lg-5 px-3 mt-3 mb-3 align-content-center justify-content-center align-items-center">
                                <div class="row">
                                    <div class="col-2">

                                    </div>
                                    <!-- <div class="col-1" style="padding:0">
                                    <div style=" border-left: 3px solid #F9845F; height: 100px; opacity:1"></div>
                                </div> -->
                                    <div class="col" style="margin-top:5%; padding:0">
                                        <h5 id="menang" class="tender-summary"><span style="border-left: 4px solid #56C474; font-size:26px; margin-right:10px"></span><span class="tender-summary-number">0</span> Tender Dimenangkan</h5>
                                        <h5 id="kalah" class="tender-summary"><span style="border-left: 4px solid #EF5350; font-size:26px; margin-right:10px"></span><span class="tender-summary-number">0</span> Kalah Tender</h5>
                                        <h5 id="ikut" class="tender-summary"><span style="border-left: 4px solid #495894; font-size:26px; margin-right:10px"></span><span class="tender-summary-number">0</span> Sedang Diikuti (Pasca Evaluasi)</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <center> <img src="<?= base_url('assets/img/dashboard-hero.png') ?>" class="dh-img" alt=""></center>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Notif tender -->
                <div class="col-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="my-2" style="font-weight: 510; font-size: 22px;">Tender Terbaru</h4>
                        <a href="user-dashboard/list-tender">Lihat Semua</a>
                    </div>
                    <div class="notif-tender">

                        <?php if ($notif != null) {
                            foreach ($notif as $row) : ?>
                                <div class="scrollable-container">
                                    <div class="custom-scroll">
                                        <div class="mt-2 mb-1" style="max-height: 125px; border-radius: 10px; box-shadow: 1px 2px 7px 5px rgba(153, 153, 153, 0.30);">
                                            <div class="row summary-box d-flex align-content-center mb-2">
                                                <div class="col-2">
                                                    <img src="assets/img/notif-tender.png" style="margin-top: 10%; width: 45px" alt="">
                                                </div>
                                                <div class="col">
                                                    <h6 style="font-weight: 600; font-size: 12px">LPSE <?= $row['nama_lpse'] ?></h6>
                                                    <h5 style="font-weight: 400; font-size: 14px"><?= $row['nama_tender'] ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                        } else { ?>
                            <div class="scrollable-container">
                                <div class="custom-scroll">
                                    <div class="mt-2 mb-1" style="max-height: 125px; border-radius: 10px; box-shadow: 1px 2px 7px 5px rgba(153, 153, 153, 0.30);">
                                        <div class="row summary-box d-flex align-content-center mb-2">
                                            <div class="col-2">
                                                <img src="assets/img/notif-tender.png" style="margin-top: 10%; width: 45px" alt="">
                                            </div>
                                            <div class="col">
                                                <!-- <h6 style="font-weight: 600; font-size: 12px">Kabupaten Yogyakarta</h6> -->
                                                <h5 style="font-weight: 400; font-size: 14px">Tidak ada notifikasi tender terbaru</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- chart stacked -->
        <div class="container-lg pt-3 wow fadeInUp" data-wow-delay="0.1s" style="border-radius: 10px; background: #FFF; box-shadow: 0px 0px 25px 2px rgba(153, 153, 153, 0.15);">
            <div class="row">
                <div class="col-lg-6">
                    <div style="padding:0">
                        <h3 style="color:#000000; margin:10px; font-size:24px; font-weight:700">Riwayat Ikut Tender Berdasarkan HPS</h3>
                        <!-- Indikator loading dengan CSS -->
                        <!-- <div id="loading-doughnut" class="spinner-border text-primary" role="status" >
                          <span class="visually-hidden">Loading...</span>
                        </div> -->
                        <div class="chart3">
                            <canvas id="stackedBarChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div style="padding:0">
                            <h3 style="color:#000000; margin:10px; font-size:24px; font-weight:700"> Riwayat Menang Kalah</h3>
                            <div class="chart3">
                                <canvas id="chart-ikuttender"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chart stacked -->

        <!-- riwayat menang kalah  -->
        <div class="container-lg pt-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row">
                <div class="filter">
                    <div class="checkbox">
                        <label><input type="checkbox" id="checkbox-sedang-diikuti" name="checkbox-sedang-diikuti" />Sedang Diikuti</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="checkbox-menang" name="checkbox-menang" />Menang</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="checkbox-kalah" name="checkbox-kalah" />Kalah</label>
                    </div>
                </div>
                <div class="filter">

                </div>
                <div class="row table-responsive my-4 custom-table-scroll">
                    <table class="table custom-table-container">
                        <thead class="thead text-center">
                            <tr>
                                <!-- <th></th> -->
                                <th>No.</th>
                                <th>Kode Tender</th>
                                <th>Tender yang Sedang Diikuti</th>
                                <th>Lokasi Pekerjaan</th>
                                <th>HPS</th>
                                <th>Penawaran</th>
                                <th>Persentase Penurunan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="tender-ikut">
                            <tr>
                                <th colspan="8" style="text-align: center; padding: 10px;">Tidak ada data yang tersedia untuk ditampilkan.</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Tombol Pagination -->
                <div class="text-center mt-3">
                    <ul class="pagination justify-content-center" id="pagination">
                        <!-- Tombol Pagination akan ditambahkan di sini -->
                    </ul>
                </div>
            </div>
            <!-- end riwayat menang kalah  -->

    </section>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.x.x/dist/cdn.min.js"></script>
    <script defer src="<?= base_url() ?>assets/js/alpine-3.12.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('completeProfile', () => ({
                npwp: '',
                errors: {
                    npwp: null,
                },
                msg: {
                    npwp: null,
                },
                loading: false,
                token: '',
                npwpAlertClass: '',
                showAlert: false,
                alertMsg: '',
                init() {
                    this.$watch('npwp', (newVal, oldVal) => {
                        this.errors.npwp = !this.validateNpwp()
                    })
                },
                hideAlert() {
                    window.location.href = `${base_url}user-dashboard/list-tender`
                },
                validateNpwp() {
                    const valLength = this.npwp.length > 0 && this.npwp.length <= 20
                    if (!valLength) {
                        this.msg.npwp = 'Nomor NPWP tidak valid'
                    }

                    return valLength
                },
                saveNpwp(evt) {
                    $.ajax({
                            url: `${base_url}npwp`,
                            type: 'POST',
                            data: {
                                npwp: this.npwp,
                                user_id: userId
                            },
                            dataType: 'json',
                            beforeSend: () => {
                                this.loading = true
                            },
                        })
                        .done(resp => {
                            this.loading = false
                            this.alertMsg = resp.message
                            if (resp.error_code == 0) {
                                this.npwpAlertClass = 'alert alert-success npwp-alert-msg'
                                $('#npwpModal').modal('hide');
                            } else {
                                this.npwpAlertClass = 'alert alert-danger npwp-alert-msg'
                            }
                            this.showAlert = true
                            console.log(resp)
                        })
                        .fail(err => {
                            const errs = JSON.parse(err.responseText)
                            this.loading = false
                            console.log(err)
                            this.errors.npwp = true
                            this.msg.npwp = errs.errors.npwp
                            // this.alertMsg = resp.message
                            // if (resp.error_code == 0) {
                            //     this.npwpAlertClass = 'alert alert-success'
                            // } else {
                            //     this.npwpAlertClass = 'alert alert-danger'
                            // }
                            // this.showAlert = true
                        })
                    return evt.preventDefault()
                }
            }))
        });

        // Data for Stacked Bar Chart
        function generateRandomData() {
            return Array.from({
                length: 12
            }, () => 0);
        }
        let valLPSE = null,
            valTahun = null;
        var dataChart3 = {
            '0': generateRandomData(),
            '1': generateRandomData(),
            '2': generateRandomData(),
            '3': generateRandomData(),
            '4': generateRandomData()
        };
        var dataDoughnutChart = {
            '0': generateRandomData(),
            '1': generateRandomData(),
            '2': generateRandomData(),
        };
        let checkboxSedangDiikuti = false;
        let checkboxMenang = false;
        let checkboxKalah = false;

        $(document).ready(function() {
            // getData('', '');
            get_Peserta_Paket('', '2024');
            get_menang_kalah_ikut('', '2024');
            show_table(1, '', '2024', true, true, true);
            // showPage(1);
            $('#select-lpse').select2();
            $('#select-tahun').select2({
                width: '100%',
                minimumResultsForSearch: Infinity
            });

            addCheck();

        });

        $('#checkbox-sedang-diikuti, #checkbox-menang, #checkbox-kalah').on('change', function() {
            checkboxSedangDiikuti = $('#checkbox-sedang-diikuti').prop('checked');
            checkboxMenang = $('#checkbox-menang').prop('checked');
            checkboxKalah = $('#checkbox-kalah').prop('checked');

            // Mengambil nilai LPSE
            var lpseValue = document.getElementById('select-lpse').value;

            // Mengambil nilai tahun
            var tahunValue = document.getElementById('select-tahun').value;

            console.log(checkboxSedangDiikuti);
            console.log(checkboxMenang);
            console.log(checkboxKalah);
            console.log(lpseValue);
            console.log(tahunValue);
            update_table(1, lpseValue, tahunValue, checkboxSedangDiikuti, checkboxMenang, checkboxKalah);

        });

        document.getElementById('btn-filter').addEventListener('click', function() {

            // Mengambil nilai LPSE
            var lpseValue = document.getElementById('select-lpse').value;

            // Mengambil nilai tahun
            var tahunValue = document.getElementById('select-tahun').value;

            // Lakukan sesuatu dengan nilai lpseValue dan tahunValue, misalnya, kirim ke server atau lakukan operasi lainnya
            console.log("Nilai LPSE: ", lpseValue);
            console.log("Nilai Tahun: ", tahunValue);

            get_Peserta_Paket(lpseValue, tahunValue);
            get_menang_kalah_ikut(lpseValue, tahunValue);
            show_table(1, lpseValue, tahunValue);
            addCheck();



        });

        function removeCheck() {
            $('#checkbox-sedang-diikuti').prop('checked', false);
            $('#checkbox-menang').prop('checked', false);
            $('#checkbox-kalah').prop('checked', false);
        }

        function addCheck() {
            $('#checkbox-sedang-diikuti').prop('checked', true);
            $('#checkbox-menang').prop('checked', true);
            $('#checkbox-kalah').prop('checked', true);
        }




        function formatRupiahHPS(number) {
            const roundedNumber = Math.round(number * 100) / 100; // Bulatkan ke dua angka desimal
            const numString = roundedNumber.toString(); // Ubah angka menjadi string
            const splitNum = numString.split('.'); // Pisahkan bagian desimal jika ada

            let rupiah = splitNum[0]
                .split('')
                .reverse()
                .reduce((acc, curr, index) => {
                    return curr + (index && index % 3 === 0 ? '.' : '') + acc;
                }, '');

            // rupiah = 'Rp ' + rupiah; // Tambahkan 'Rp ' di depan

            // Tambahkan bagian desimal jika ada
            if (splitNum[1]) {
                rupiah += ',' + (splitNum[1].length === 1 ? splitNum[1] + '0' : splitNum[1]);
            } else {
                rupiah += ',00'; // Tambahkan '00' jika tidak ada desimal
            }

            return rupiah;
        }

        function removeComma(number) {
            let angkaHasil = '';
            let parsedNumber = parseFloat(number); // Mengonversi ke tipe data Number

            if (!isNaN(parsedNumber)) {
                // Jika parsedNumber adalah tipe data Number yang valid
                if (parsedNumber % 1 !== 0) {
                    // Angka memiliki nilai desimal (angka dibelakang koma)
                    angkaHasil = Math.floor(parsedNumber); // Mengubah ke integer tanpa angka di belakang koma
                } else {
                    // Angka tidak memiliki nilai desimal
                    angkaHasil = parsedNumber;
                }
            }

            return angkaHasil;
        }

        function calculatePercentage(hargaPenawaran, nilaiHPS) {
            const parsedOfferPrice = removeComma(hargaPenawaran);
            const parsedHPSValue = removeComma(nilaiHPS);

            const percentage = ((parsedHPSValue - parsedOfferPrice) / parsedHPSValue) * 100;
            const roundedPercentage = percentage.toFixed(0);

            return roundedPercentage + '%';
        }


        function capitalizeWords(text) {
            return text.replace(/(?:^|-)([a-z])/g, function(match) {
                return match.toUpperCase();
            }).replace(/-/g, ' ');
        }

        function loadingTable() {
            const tabelTenderIkut = document.getElementById('tender-ikut');
            tabelTenderIkut.innerHTML = `<tr>
        <th colspan="8" style="text-align: center; padding: 10px;">
            <div class="loader-table"></div>
        </th>
    </tr>`;
        }

        function failTable() {
            const tabelTenderIkut = document.getElementById('tender-ikut');
            tabelTenderIkut.innerHTML = `<tr>
                            <th colspan="8" style="text-align: center; padding: 10px;">Terjadi kesalahan dalam memuat data, silahkan coba lagi.</th>
                            </tr>`;
        }

        function show_table(page, lpseValue, tahunValue) {
            // Ketika halaman dimuat, kirim permintaan Ajax
            $.ajax({
                url: "<?php echo base_url('DashboardUser/show_table'); ?>",
                type: "GET",
                dataType: "json",
                data: {
                    page: page,
                    lpse: lpseValue,
                    tahun: tahunValue,
                    // sedang_diikuti :checkboxSedangDiikuti,
                    // menang : checkboxMenang,
                    // kalah :checkboxKalah
                }, // Mengirimkan nomor halaman ke server
                beforeSend: function(jqXHR, settings) {
                    // Tampilkan pesan loading jika diperlukan
                    // alert('tunggu sebentar');
                    loadingTable()
                },
                success: function(response) {
                    // Jika permintaan berhasil, perbarui isi tabel
                    if (response.results.length > 0) {
                        var tbody = $('#tender-ikut');
                        tbody.empty(); // Kosongkan isi tabel sebelum memasukkan data baru

                        var items_per_page = 10;
                        // Iterasi melalui data dan tambahkan baris baru ke tabel
                        $.each(response.results, function(index, item) {
                            var row = $('<tr>').appendTo(tbody);
                            var row_number = (page - 1) * items_per_page + index + 1;
                            $('<td>').text(row_number).appendTo(row);
                            $('<td>').text(item.kode_tender).appendTo(row);
                            $('<td>').text(item.nama_tender).appendTo(row);
                            $('<td>').text(item.lokasi_pekerjaan).appendTo(row);
                            // Mengatur kelas dan format pada tiga elemen td lainnya
                            $('<td>').addClass('green-td').text(formatRupiahHPS(item.nilai_hps_paket)).appendTo(row);
                            $('<td>').addClass('green-td').text(formatRupiahHPS(item.harga_penawaran)).appendTo(row);
                            $('<td>').addClass('orange-td').text(calculatePercentage(item.harga_penawaran, item.nilai_hps_paket)).appendTo(row);
                            // $('<td>').text(item.status_peserta).appendTo(row);
                            // Membuat status peserta dengan kelas CSS dan fungsi JavaScript
                            var statusCell = $('<td>').addClass('orange-td').appendTo(row);
                            $('<h6>').addClass(item.status_peserta).text(capitalizeWords(item.status_peserta)).css({
                                'font-weight': '400',
                                'font-size': '14px'
                            }).appendTo(statusCell);
                        });

                        // Memanggil fungsi createPagination() untuk membuat tombol pagination
                        createPagination(response.total_pages, response.lpse, response.tahun);
                    } else {
                        // Jika tidak ada data, tambahkan pesan "Tidak ada data" ke dalam tabel
                        var tbody = $('#tender-ikut');
                        tbody.empty(); // Kosongkan isi tabel sebelum memasukkan pesan
                        var row = $('<tr>').appendTo(tbody);
                        $('<td>').attr('colspan', '8').text('Tidak ada data yang tersedia untuk ditampilkan.').addClass('empty-table-message').appendTo(row);

                        // Sembunyikan pagination jika tidak ada data
                        // $('#pagination').hide();
                    }
                },
                error: function(xhr, status, error) {
                    // Jika terjadi kesalahan dalam permintaan Ajax
                    console.error("Error: " + error);
                    failTable()
                }
            });
        }

        function update_table(page, lpseValue, tahunValue, checkboxSedangDiikuti, checkboxMenang, checkboxKalah) {
            // Ketika halaman dimuat, kirim permintaan Ajax
            $.ajax({
                url: "<?php echo base_url('DashboardUser/update_table'); ?>",
                type: "GET",
                dataType: "json",
                data: {
                    page: page,
                    lpse: lpseValue,
                    tahun: tahunValue,
                    sedang_diikuti: checkboxSedangDiikuti,
                    menang: checkboxMenang,
                    kalah: checkboxKalah
                }, // Mengirimkan nomor halaman ke server
                beforeSend: function(jqXHR, settings) {
                    // Tampilkan pesan loading jika diperlukan
                    // alert('tunggu sebentar');
                    loadingTable()
                },
                success: function(response) {
                    // Jika permintaan berhasil, perbarui isi tabel
                    if (response.results.length > 0) {
                        var tbody = $('#tender-ikut');
                        tbody.empty(); // Kosongkan isi tabel sebelum memasukkan data baru

                        var items_per_page = 10;
                        // Iterasi melalui data dan tambahkan baris baru ke tabel
                        $.each(response.results, function(index, item) {
                            var row = $('<tr>').appendTo(tbody);
                            var row_number = (page - 1) * items_per_page + index + 1;
                            $('<td>').text(row_number).appendTo(row);
                            $('<td>').text(item.kode_tender).appendTo(row);
                            $('<td>').text(item.nama_tender).appendTo(row);
                            $('<td>').text(item.lokasi_pekerjaan).appendTo(row);
                            // Mengatur kelas dan format pada tiga elemen td lainnya
                            $('<td>').addClass('green-td').text(formatRupiahHPS(item.nilai_hps_paket)).appendTo(row);
                            $('<td>').addClass('green-td').text(formatRupiahHPS(item.harga_penawaran)).appendTo(row);
                            $('<td>').addClass('orange-td').text(calculatePercentage(item.harga_penawaran, item.nilai_hps_paket)).appendTo(row);
                            // $('<td>').text(item.status_peserta).appendTo(row);
                            // Membuat status peserta dengan kelas CSS dan fungsi JavaScript
                            var statusCell = $('<td>').addClass('orange-td').appendTo(row);
                            $('<h6>').addClass(item.status_peserta).text(capitalizeWords(item.status_peserta)).css({
                                'font-weight': '400',
                                'font-size': '14px'
                            }).appendTo(statusCell);
                        });

                        // Memanggil fungsi createPagination() untuk membuat tombol pagination
                        updatePagination(response.total_pages, response.lpse, response.tahun, response.sedang_diikuti, response.menang, response.kalah);
                    } else {
                        // Jika tidak ada data, tambahkan pesan "Tidak ada data" ke dalam tabel
                        var tbody = $('#tender-ikut');
                        tbody.empty(); // Kosongkan isi tabel sebelum memasukkan pesan
                        var row = $('<tr>').appendTo(tbody);
                        $('<td>').attr('colspan', '8').text('Tidak ada data yang tersedia untuk ditampilkan.').addClass('empty-table-message').appendTo(row);

                        // Sembunyikan pagination jika tidak ada data
                        // $('#pagination').hide();
                    }
                },
                error: function(xhr, status, error) {
                    // Jika terjadi kesalahan dalam permintaan Ajax
                    console.error("Error: " + error);
                    failTable()
                }
            });
        }

        // Fungsi untuk membuat tombol pagination
        function createPagination(totalPages, lpseValue, tahunValue) {
            var pagination = $('#pagination');
            pagination.empty(); // Mengosongkan tombol pagination sebelum membuat yang baru


            // Menambahkan tombol untuk setiap halaman
            for (var i = 1; i <= totalPages; i++) {
                $('<li>').addClass('page-item').append(
                    $('<a>').addClass('page-link').attr('href', '#').text(i)
                ).appendTo(pagination);

            }

            // Menambahkan event handler untuk setiap tombol pagination
            pagination.find('.page-link').click(function() {
                var page = $(this).text();
                show_table(page, lpseValue, tahunValue);
                return false;

            });


        }
        // Fungsi untuk meng update tombol pagination
        function updatePagination(totalPages, lpseValue, tahunValue, checkboxSedangDiikuti, checkboxMenang, checkboxKalah) {
            var pagination = $('#pagination');
            pagination.empty(); // Mengosongkan tombol pagination sebelum membuat yang baru

            // Menambahkan tombol untuk setiap halaman
            for (var i = 1; i <= totalPages; i++) {
                $('<li>').addClass('page-item').append(
                    $('<a>').addClass('page-link').attr('href', '#').text(i)
                ).appendTo(pagination);
            }

            // Menambahkan event handler untuk setiap tombol pagination
            pagination.find('.page-link').click(function() {
                var page = $(this).text();
                update_table(page, lpseValue, tahunValue, checkboxSedangDiikuti, checkboxMenang, checkboxKalah);
                return false;

            });

        }



        function updateTable(data) {
            //console.log(data);
            // console.log(formatRupiahHPS(123456789.123), 'RP'); // Output: Rp 123.456.789,12
            const tabelTenderIkut = document.getElementById('tender-ikut');
            tabelTenderIkut.innerHTML = '';

            if (data.length > 0) {
                data.forEach((pesertaIkut, index) => {
                    const row = `<tr>
                            <th></th>
                            <td>${index + 1}</td>
                            <td class="custom-padding">${pesertaIkut.kode_tender}</td>
                            <td class="custom-padding">${pesertaIkut.nama_tender}</td>
                            <td class="custom-padding">${pesertaIkut.lokasi_pekerjaan}</td>
                            <td class="green-td">${formatRupiahHPS(pesertaIkut.nilai_hps_paket)}</td>
                            <td class="green-td">${formatRupiahHPS(pesertaIkut.harga_penawaran)}</td>
                            <td class="orange-td">${calculatePercentage(pesertaIkut.harga_penawaran,pesertaIkut.nilai_hps_paket)}%</td>
                            <td class="orange-td"><h6 class="${pesertaIkut.status_peserta}" style="font-weight: 400; font-size: 14px">${capitalizeWords(pesertaIkut.status_peserta)}</h6></td>
                        </tr>`;
                    tabelTenderIkut.insertAdjacentHTML('beforeend', row);
                });
            } else {
                const emptyRow = `<tr>
                            <th colspan="8" style="text-align: center; padding: 10px;">Tidak ada data yang tersedia untuk ditampilkan.</th>
                            </tr>`;
                tabelTenderIkut.insertAdjacentHTML('beforeend', emptyRow);
            }
        }

        function get_menang_kalah_ikut(lpseValue, tahunValue) {
            $.ajax({
                url: '<?= base_url(); ?>DashboardUser/get_menang_kalah_ikut',
                type: 'POST',
                dataType: 'json',
                data: {
                    lpse: lpseValue,
                    tahun: tahunValue
                },
                beforeSend: function(jqXHR, settings) {
                    // Tampilkan pesan loading jika diperlukan
                    // alert('tunggu sebentar');
                    $('#loading-filter').show();
                },
                success: function(response) {
                    updateDoughnutChart(response.jumlah_status_peserta);
                    updateChart(response.jumlah_status_peserta)
                    updateBarChart_Menang_Kalah(response.riwayat_menang_kalah);
                    $('#loading-filter').hide();

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    $('#loading-filter').hide();

                }
            });
        }

        function get_Peserta_Paket(lpseValue, tahunValue) {
            $.ajax({
                url: '<?= base_url(); ?>DashboardUser/get_Peserta_Paket',
                type: 'POST',
                dataType: 'json',
                data: {
                    lpse: lpseValue,
                    tahun: tahunValue
                },
                beforeSend: function(jqXHR, settings) {
                    // Tampilkan pesan loading jika diperlukan
                    // alert('tunggu sebentar');
                },
                success: function(response) {
                    // console.log('asalam');
                    updateHPSBarChart(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        var myBarChartHPS; // Variabel global untuk grafik batang HPS
        var myBarChartMenangKalah; // Variabel global untuk grafik batang menang/kalah
        var myDoughnutChart; // Variabel global untuk grafik doughnut

        function updateHPSBarChart(response) {
            // const dataChart = data.paket_data.map(entry => entry.total_hps_paket);

            // Hancurkan grafik jika sudah ada sebelumnya
            if (window.myBarChart) {
                window.myBarChart.destroy();
            }

            const barConfigHPS = {
                type: 'bar',
                data: {
                    labels: [
                        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                    ],
                    datasets: [{
                            label: '<500 juta',
                            backgroundColor: '#EF5350',
                            data: response.range1,
                            barPercentage: 0.5,
                        },
                        {
                            label: '500jt - 1m',
                            backgroundColor: '#81D4FA',
                            data: response.range2,
                            barPercentage: 0.5,
                        },
                        {
                            label: '1m - 10m',
                            backgroundColor: '#F27932',
                            data: response.range3,
                            barPercentage: 0.5,
                        },
                        {
                            label: '10m - 100m',
                            backgroundColor: '#495894',
                            data: response.range4,
                            barPercentage: 0.5,
                        },
                        {
                            label: '>100m',
                            backgroundColor: '#56C474',
                            data: response.range5,
                            barPercentage: 0.5,
                        }
                    ]

                },
                options: {
                    plugins: {
                        title: {
                            display: false,
                            text: 'PROYEK  LPSE XXXX'
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

            // Inisialisasi chart pertama kali
            var ctxBarChart = document.getElementById('stackedBarChart').getContext('2d');
            window.myBarChart = new Chart(ctxBarChart, barConfigHPS);

        }



        function updateBarChart_Menang_Kalah(data) {

            // Hancurkan grafik jika sudah ada sebelumnya
            if (myBarChartMenangKalah) {
                myBarChartMenangKalah.destroy();
            }


            //ikut tender 
            const barConfigTimeSeries = {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                            label: 'Menang',
                            data: data.menang,
                            backgroundColor: '#56C474',
                            borderWidth: 1
                        },
                        {
                            label: 'Kalah',
                            data: data.kalah,
                            backgroundColor: '#EF5350',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    plugins: {
                        title: {
                            display: false,
                            text: 'Grafik Batang Data Bulan'
                        },
                        legend: {
                            align: 'end', // Mengatur legend menjadi end
                            title: {
                                position: 'end' // Mengatur posisi title menjadi end
                            }
                        },
                    },
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    },

                }

            };

            var ctxBarChartMenangKalah = document.getElementById('chart-ikuttender').getContext('2d');
            myBarChartMenangKalah = new Chart(ctxBarChartMenangKalah, barConfigTimeSeries);

        }

        function updateDoughnutChart(data) {
            // Hancurkan grafik jika sudah ada sebelumnya
            if (window.myDoughnutChart) {
                window.myDoughnutChart.destroy();
            }
            // doughnut chart
            var ctx = document.getElementById('myDoughnutChart').getContext('2d');

            var totalTender = data.total;

            var doughnutChartConfig = {
                type: 'doughnut',
                data: {
                    labels: ['Menang Tender', 'Kalah Tender', 'Tender Sedang Diikut'],
                    datasets: [{
                        data: [data.menang, data.kalah, data["sedang-diikuti"]],
                        backgroundColor: ['#56C474', '#EF5350', '#495894'],
                        borderWidth: 2, // Add gaps between segments
                        borderColor: 'white' // Color of the gaps
                    }]
                },
                options: {
                    cutout: '65%', // Make the doughnut thinner
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    animation: {
                        onComplete: function() {
                            var ctx = this.ctx;
                            ctx.save();

                            // Draw "Total Tender" text with smaller font
                            ctx.font = "14px Ubuntu";
                            ctx.fillStyle = 'black';
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'middle';
                            ctx.fontWeight = 500;
                            var centerX = this.chartArea.left + (this.chartArea.right - this.chartArea.left) / 2;
                            var centerY = this.chartArea.top + (this.chartArea.bottom - this.chartArea.top) / 2;
                            ctx.fillText("Total Tender", centerX, centerY - 10);

                            // Draw the numerical value with larger font
                            ctx.font = "30px Ubuntu";
                            ctx.fontWeight = 700;
                            ctx.fillText(totalTender.toFixed(0), centerX, centerY + 20);

                            ctx.restore();
                        }
                    }
                }
            };

            // Buat grafik dan simpan ke dalam window.myDoughnutChart
            window.myDoughnutChart = new Chart(ctx, doughnutChartConfig);
        }

        function updateChart(data) {
            $('#menang').html("<span style=\"border-left: 6px solid #6EE7B7; height: 45px; opacity:4; margin-right:10px\"></span>" + data.menang + " Tender Dimenangkan");
            $('#kalah').html("<span style=\"border-left: 6px solid #DF3131; height: 35px; opacity:1; margin-right:10px\"></span>" + data.kalah + " Kalah Tender");
            $('#ikut').html("<span style=\"border-left: 6px solid #495894; height: 35px; opacity:1; margin-right:10px\"></span>" + data["sedang-diikuti"] + " Sedang Diikuti (Pasca Evaluasi)");
        }

        // function updateDataByStatus(klpd, tahun, sedang_diikuti, menang, kalah) {

        //     $.ajax({
        //             url: "<?= base_url(); ?>user-dashboard/data-by-status",
        //             type: "POST",
        //             data: {
        //                 cariKLPD: klpd,
        //                 cariTahun: tahun,
        //                 kondisiIkut: sedang_diikuti,
        //                 kondisiMenang: menang,
        //                 kondisiKalah: kalah
        //             },
        //             beforeSend: (jqXHR, settings) => {
        //                 // Tampilkan pesan loading jika diperlukan
        //                 loadingTable();
        //             }
        //         })
        //         .done((result) => {
        //             console.log(result, 'data-by-status');
        //             // updateTable(result);
        //         })
        //         .fail((jqXHR, textStatus, err) => {
        //             console.error("AJAX request failed: " + textStatus, err);
        //             failTable();
        //         });
        //     page = 1; // Jika diperlukan, tetapi disarankan memindahkan kode ini ke dalam .done callback jika terkait dengan respons dari AJAX
        // }



        // Fungsi untuk memperbarui data di stackedBarChart
        // function updateChartData(newData) {
        //     barConfigHPS.data.datasets[0].data = newData.range[0];
        //     barConfigHPS.data.datasets[1].data = newData.range[1];
        //     barConfigHPS.data.datasets[2].data = newData.range[2];
        //     barConfigHPS.data.datasets[3].data = newData.range[3];
        //     barConfigHPS.data.datasets[4].data = newData.range[4];

        //     barConfigTimeSeries.data.datasets[0].data = newData.time_series;

        //     doughnutChartConfig.data.datasets[0].data = {
        //         '0': newData.akumulasi[0],
        //         '1': newData.akumulasi[1],
        //         '2': newData.akumulasi[2],
        //     };

        //     doughnutChartConfig.options.animation = {
        //         onComplete: function() {
        //             var ctx = this.ctx;
        //             ctx.save();

        //             // Draw "Total Tender" text with smaller font
        //             ctx.font = "14px Ubuntu";
        //             ctx.fillStyle = 'black';
        //             ctx.textAlign = 'center';
        //             ctx.textBaseline = 'middle';
        //             ctx.fontWeight = 500;
        //             var centerX = this.chartArea.left + (this.chartArea.right - this.chartArea.left) / 2;
        //             var centerY = this.chartArea.top + (this.chartArea.bottom - this.chartArea.top) / 2;
        //             ctx.fillText("Total Tender", centerX, centerY - 10);

        //             // Draw the numerical value with larger font
        //             ctx.font = "30px Ubuntu";
        //             ctx.fontWeight = 700;
        //             ctx.fillText(newData.akumulasi[3], centerX, centerY + 20);

        //             ctx.restore();
        //         }
        //     };

        //     if (stackedBarChart) {
        //         stackedBarChart.destroy(); // Hancurkan chart sebelumnya
        //     }
        //     if (barChart) {
        //         barChart.destroy(); // Hancurkan chart sebelumnya
        //     }
        //     if (myDoughnutChart) {
        //         myDoughnutChart.destroy(); // Hancurkan chart sebelumnya
        //     }

        //     // Buat chart baru dengan data yang diperbarui
        //     stackedBarChart = new Chart(document.getElementById('stackedBarChart').getContext('2d'), barConfigHPS);

        //     barChart = new Chart(document.getElementById('chart-ikuttender').getContext('2d'), barConfigTimeSeries);

        //     myDoughnutChart = new Chart(document.getElementById('myDoughnutChart').getContext('2d'), doughnutChartConfig);


        // }
    </script>

    <script src="<?= base_url('assets/js/users/dashboard.js') ?>"></script>
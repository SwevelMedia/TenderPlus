<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    .animation {
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .thead {
        color: #fff;
        background-color: #DF3131;
        text-align: center;
        font-size: 18px;
        width: 100px;
    }

    tbody {
        text-align: left;
        font-size: 15px;
    }

    .table {
        padding: 1rem;
    }

    /* .rounded {
        width: 25px;
        height: 25px;
        background-color: #553333;
        border-radius: 10px 10px 10px 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 15px;
    }*/
    .custom-table-container {
        border-radius: 10px 10px 10px 10px;
        overflow: hidden;
        border: 1px solid var(--neutral-100, #F0E2E2);
    }

    .btn-custom {
        padding-left: 10px;
        padding-right: 10px;
        background-color: #EB650D;
        color: #fff;
    }

    .underlined {
        border-collapse: collapse;
        width: 100%;
    }

    .card-body {
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 5px;
        margin-right: 10px;
        border-radius: 40%;
    }

    .card-title {
        color: #B89494;
        font-size: 0.75rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1.75rem;
        font-weight: bold;
    }

    th.custom-padding,
    td.custom-padding {
        border: none;
        vertical-align: middle;
        /* height: 60px !important; */
    }

    .form-select-custom {
        color: #CCCCCC;
        border-radius: 10px 10px 10px 10px;
        font-size: 1rem;
    }

    /* .toggle-button {
        padding: 5px;
        background-color: #059669;
        color: #fff;
        border: none;
        border-radius: 5rem;
    } */

    /* Style untuk ikon visibility */
    .toggle-button i {
        margin-left: 5px;
    }

    .link .btn-simpan {
        background-color: #E05151;
        color: white;
        transition: background-color 0.3s;
        height: 40px;
        width: 150px;
        font-size: 15px;
        align-content: center;
        padding-top: 8px;
    }

    .link .btn-simpan:hover {
        background-color: #EB650D;
    }

    .modal-dialog {
        display: flex;
        width: 518px;
        height: 555px;
        padding: 20px 30px 30px 30px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        flex-shrink: 0;
    }

    .custom-modal {
        height: 768px;
    }

    .btn-custom {
        display: flex;
        padding: 15px 30px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 5px;
        background: var(--primary-red-400, #E05151);
        color: white;
        text-decoration: none;
        cursor: pointer;

    }

    .btn-batal {
        display: flex;
        padding: 15px 30px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;

    }

    .modal-title {
        color: var(--font-dark-grey, #333);
        text-align: center;
        font-family: Ubuntu;
        font-size: 33px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .modal-body p {
        font-size: 18px;
        /* Ganti ukuran font sesuai dengan keinginan Anda */
    }

    .custom-button {
        background: none;
        border: none;
        display: flex;
        align-items: center;
        color: var(--Grey, #CCC);
        font-family: Ubuntu;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: 22px;
        cursor: pointer;
        outline: none;
    }

    .custom-button svg {
        margin-right: 8px;
    }

    .nama {
        font-weight: bold;
        text-align: justify;
    }

    .posisi {
        color: #694747;
        text-align: justify;
    }

    .email {
        text-decoration: underline;
        color: #000;
        text-align: justify;
    }

    .nohp {
        text-decoration: underline;
        text-align: justify;
    }

    .btn.btn-danger {
        font-size: 13px;
        width: 100px;
        margin-right: 8px;
        margin-bottom: 3px;
        margin-top: 3px;
    }

    .btn.btn-outline-danger {
        font-size: 13px;
        width: 70px;
    }

    .container-lg img {
        margin-bottom: 2px;
    }

    .h2 {
        margin-top: 50px;
    }

    @media (max-width: 767px) {
        .justify-content-start {
            justify-content: center !important;
        }

        .form-suplier {
            margin-top: 6rem !important;
        }

        .table {
            font-size: 14px;
            align-items: center;
        }

        .custom-table-container {
            overflow-x: auto;
        }

        .custom-padding {
            width: auto;
            white-space: nowrap;
        }

        .thead {
            text-align: center;
            font-size: 12px;
        }

        tbody {
            font-size: 12px;
        }

        .thead th,
        .custom-padding {
            width: auto !important;
            white-space: nowrap;
        }

        .container-lg img {
            width: 100%;
            height: auto;
        }

        .link .btn-simpan {
            font-size: 15px;
            padding: 8px 10px;
        }

        .container-lg img {
            width: 100%;
            height: auto;
        }

        h2 {
            font-size: 25px;
            margin-top: 60px;
            text-align: center;
        }

        .modal-dialog {
            width: 100%;
            height: auto;
            padding: 10px;
        }

        .modal-title {
            font-size: 24px;
        }

        .modal-body p {
            font-size: 16px;
        }

        .col-md-6 {
            text-align: center;
        }

        .d-flex {
            flex-direction: column;
            align-items: center;
        }

        .link {
            margin-top: 1rem;
        }

    }
</style>
<section class="bg-white pt-4 mt-4 w-100">
    <div class="container-lg d-flex justify-content-between align-items-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-6">
            <h2 class="mb-0 ms-0 wow fadeInUp" style="order: 1;">
                Selamat Datang!
                <p>Berikut Daftar Anggota Tim Anda!</p>
            </h2>
            <div class="d-flex justify-content-start">
                <div class="link d-flex flex-row align-items-center" style="margin-top:10px">
                    <span><a class="btn btn-sm border btn-outline btn-simpan" data-toggle="modal" data-target="#inputMarketingModal" style="background-color:#DF3131 ;">Tambahkan Tim <i class="fas fa-plus-circle me-1"></i></a></span>
                </div>
            </div>
        </div>
        <img src="<?= base_url('assets\img\image-marketing.svg') ?>" alt="" style="width: 270px; margin-top:25px; margin-bottom:10px">
    </div>
    <!-- tabel marketing -->
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col">
                <table class="table custom-table-container">
                    <thead class="thead" style="height: 10px;">
                        <tr>
                            <!-- <th class="custom-padding"></th> -->
                            <th class="custom-padding">No.</th>
                            <th class="custom-padding text-start" style="width:330px;">Nama</th>
                            <th class="custom-padding text-start">Posisi</th>
                            <th class="custom-padding text-start" style="width:250px;">Email</th>
                            <th class="custom-padding text-start">No. HP/WA</th>
                            <th class="custom-padding text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="data-marketing">
                        <!-- <tr>
                            <td></td>
                            <td>1</td>
                            <td class="nama">PT. Telekomunikasi Indonesia, Tbk.</td>
                            <td class="posisi">08.178.554.2-123.213</td>
                            <td class="email">office@telkom.co.id</td>
                            <td class="nohp">0274 7471 234 (Office)</i></button></td>
                            <td>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#inputMarketingModal">Detail</a>
                                <a class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2</td>
                            <td class="nama">PT. Telekomunikasi Indonesia, Tbk.</td>
                            <td class="posisi">08.178.554.2-123.213</td>
                            <td class="email">office@telkom.co.id</td>
                            <td class="nohp">0274 7471 234 (Office)</i></button></td>
                            <td>
                                <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#inputMarketingModal">Detail</a>
                                <a class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal">Hapus</a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <div id="error-message" class="alert alert-danger d-none" role="alert">
                    Gagal memuat data. Silakan coba lagi nanti.
                </div>
            </div>
            <!-- Pagination controls -->
            <div class="wow fadeInUp" id="pagination-container" data-wow-delay="0.5s"></div>
        </div>
    </div>
    <!-- end tabel marketing -->

    <!-- Modal Input Marketing -->
    <div class="col-12 py-5">
        <div class="modal fade" id="inputMarketingModal" tabindex="-1" role="dialog" aria-labelledby="inputMarketingModalLabel" aria-hidden="true" style="margin-top: -30px;">
            <div class="modal-dialog custom-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn btn-link" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">
                            <img src="<?= base_url("assets/img/button-x-popup.png") ?>" alt="Cancel" style="width: 32px; height: 32px; padding: 0;">
                        </button>
                    </div>
                    <div class="modal-body border-0">
                        <h3 class="modal-title" id="inputMarketingModalLabel">Input Marketing</h3>
                        <p class="text-center">Tambahkan untuk memasarkan produkmu</p>
                        <div class="input-popup justify-content-end">
                            <form id="form-input" class="row g-2">
                                <div class="col-12">
                                    <label for="inputNama" class="form-label text-start">Nama</label>
                                    <input type="text" name="nama_tim" class="form-control" id="inputNama" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputPosisi" class="form-label text-start">Posisi</label>
                                    <input type="text" name="posisi" class="form-control" id="inputPosisi" placeholder="Masukkan Posisi" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label text-start">Email</label>
                                    <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Masukkan Email" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputNoHP" class="form-label text-start">No. HP/WA</label>
                                    <input type="text" name="no_telp" class="form-control" id="inputNoHP" placeholder="Masukkan No. HP/WA" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAlamat" class="form-label text-start">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="inputAlamat" placeholder="Masukkan Alamat" rows="2" required></textarea>
                                </div>
                                <div class="d-flex justify-content-start mt-3 gap-2">
                                    <div class="link flex-row align-items-center w-100">
                                        <span>
                                            <a id="submit-input" class="btn-custom text-white text-center" style="background-color: #DF3131;">
                                                <i class="fas me-1"></i>Tambahkan
                                            </a>
                                        </span>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Input Marketing -->


    <!-- modal detail profil marketing -->
    <div class="col-12 py-5">

        <div class="modal fade" id="detailMarketingModal" tabindex="-1" role="dialog" aria-labelledby="detailMarketingModalLabel" aria-hidden="true" style="margin-top: -30px;">

            <div class="modal-dialog custom-modal" role="document">

                <div class="modal-content">

                    <div class="modal-header border-0">

                        <button type="button" class="btn btn-link" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">

                            <img src="<?= base_url("assets/img/button-x-popup.png") ?>" alt="Cancel" style="width: 32px; height: 32px; padding: 0;">

                        </button>

                    </div>

                    <div class="modal-body border-0">

                        <!-- <h3 class="modal-title" id="detailMarketingModalLabel">Detail Marketing</h3> -->

                        <div class="d-flex justify-content-center mt-3 mb-2">

                            <img id="user-photo" src="<?= base_url("assets/img/user-icon-detail.svg") ?>" style="border-radius: 50%; width: 90px; height: 90px; object-fit: cover;">

                        </div>

                        <div class="input-popup justify-content-end">

                            <p class="text-center" name="nama_tim" id="nama" style=" margin-bottom:3px;font-weight: bold; font-size:27px;"></p>

                            <p class="text-center" name="posisi" id="posisi" style="margin-bottom:9px;  font-size:15px;"></p>

                            <div class="input-group mb-3">
                                <a href="#">
                                    <span class="input-group-text clickable" id="inputEmail2" style=" background-color:#DF3131; color:#FCFCFC;width: 120px; "> <i class="fas fa-envelope me-3"></i> Email</span>
                                </a>

                                <input id="email" type="text" class="form-control" name="email" aria-label="Detail profil marketing" aria-describedby="inputGroup-sizing-default" disabled>

                            </div>

                            <div class="input-group mb-3">
                                <a href="#">
                                    <span class="input-group-text clickable" id="inputNoHP" style=" background-color:#DF3131; color:#FCFCFC;width: 120px; "><i class="fab fa-whatsapp me-2 1x"></i>WA / telp</span>
                                </a>

                                <input id="no_telp" type="text" class="form-control" name="no_telp" aria-label="Detail profil marketing" aria-describedby="inputGroup-sizing-default" disabled>

                            </div>

                            <div class="input-group mb-3">

                                <span class="input-group-text clickable" id="inputAlamat" style=" background-color:#DF3131; color:#FCFCFC; border-radius: 5px;width: 120px;"><i class="fas fa-home me-2"></i>Alamat</span>

                                <input type="text" class="form-control" name="alamat" aria-label="Detail profil marketing" aria-describedby="inputGroup-sizing-default" disabled>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- end modal detail profil marketing -->

    <!-- modal hapus -->
    <div class="col-12 py-5">

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true" style="margin-top: -30px;">

            <div class="modal-dialog custom-modal" role="document">

                <div class="modal-content">

                    <div class="modal-header border-0">

                        <button type="button" class="btn btn-link" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">

                            <img src="<?= base_url("assets/img/button-x-popup.png") ?>" alt="Cancel" style="width: 32px; height: 32px; padding: 0;">

                        </button>

                    </div>

                    <div class="modal-body border-0 text-center">

                        <h3 class="modal-title" id="deleteModalLabel">Hapus Data</h3>

                        <p class="text-center">Yakin ingin menghapus data perusahaan ini ?</p>

                        <div class="input-popup align-items-center justify-content-center">

                            <img src="<?= base_url("assets/img/learning-instructions.svg") ?>" alt="Gambar">

                        </div>

                        <div class="d-flex justify-content-start mt-3 gap-2">

                            <div></div>

                            <div class="link flex-row align-items-center w-100">

                                <span>

                                    <a id="hapus-modal" class="btn-custom text-white text-center" style="background-color: #DF3131;">

                                        <i class="fas me-1"></i>Hapus

                                    </a>

                                </span>

                            </div>

                        </div>

                        <div class="d-flex justify-content-start mt-3 gap-2">

                            <div></div>

                            <div class="link flex-row align-items-center w-100">

                                <span>

                                    <a class="btn btn-batal btn-sm border btn-outline" data-dismiss="modal">

                                        <i class="fas me-1"></i>Batal

                                    </a>

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- end modal hapus -->

    <!-- modal edit marketing -->
    <div class="col-12 py-5">

        <div class="modal fade" id="editMarketingModal" tabindex="-1" role="dialog" aria-labelledby="editMarketingModalLabel" aria-hidden="true" style="margin-top: -30px;">

            <div class="modal-dialog custom-modal" role="document">

                <div class="modal-content">

                    <div class="modal-header border-0">

                        <button type="button" class="btn btn-link" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">

                            <img src="<?= base_url("assets/img/button-x-popup.png") ?>" alt="Cancel" style="width: 32px; height: 32px; padding: 0;">

                        </button>

                    </div>


                    <div class="modal-body border-0">

                        <h3 class="modal-title" id="editMarketingModalLabel">Edit Marketing</h3>

                        <p class="text-center">Atur data anggota marketingmu !</p>

                        <div class="input-popup justify-content-end">

                            <form id="form-input1" class="row g-2">
                                <div class="col-12">
                                    <label for="inputNama" class="form-label text-start">Nama</label>
                                    <input type="text" name="nama_tim" class="form-control" id="editNama" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputPosisi" class="form-label text-start">Posisi</label>
                                    <input type="text" name="posisi" class="form-control" id="editPosisi" placeholder="Masukkan Posisi" required>
                                </div>
                                <div class="col-12">
                                    <label id="inputEmail" for="inputEmail" class="form-label text-start">Email</label>
                                    <input type="text" name="email" class="form-control" id="editEmail" placeholder="Masukkan Email" required>
                                </div>
                                <div class="col-12">
                                    <label id="inputNoHP" for="inputNoHP" class="form-label text-start">No. HP/WA</label>
                                    <input type="text" name="no_telp" class="form-control" id="editNoHP" placeholder="Masukkan No. HP/WA" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAlamat" class="form-label text-start">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="editAlamat" placeholder="Masukkan Alamat" rows="2" required></textarea>
                                </div>
                                <div class="d-flex justify-content-start mt-3 gap-2">
                                    <div class="link flex-row align-items-center w-100">
                                        <span>
                                            <!-- <input type="submit" class="btn-custom text-white text-center" value="Tambahkan"> -->
                                            <a href="#" id="submit-edit" class="btn-custom text-white text-center" style="background-color: #DF3131;">
                                                <i class="fas me-1"></i>Perbarui
                                            </a>
                                        </span>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal edit marketing -->
    <!-- kirim email modal -->
    <!-- <div class="modal fade" id="kirimModal" tabindex="-1" role="dialog" aria-labelledby="kirimModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kirimModalLabel">Kirim Email Undangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin mengirim email undangan ini?
                <input type="hidden" id="idTim" value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmSendEmail">Kirim</button>
            </div>
            </div>
        </div>
    </div> -->
    <!-- end kirim email -->
    <!-- kirim email modal -->
    <div class="col-12 py-5">
        <div class="modal fade" id="kirimModal" tabindex="-1" role="dialog" aria-labelledby="kirimModalLabel" aria-hidden="true" style="margin-top: -30px;">
            <div class="modal-dialog custom-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="btn btn-link" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; background: transparent; border: none;">
                            <img src="<?= base_url("assets/img/button-x-popup.png") ?>" alt="Cancel" style="width: 32px; height: 32px; padding: 0;">
                        </button>
                    </div>
                    <br>
                    <div class="modal-body border-0">
                        <h3 class="modal-title text-center mb-4" id="kirimModalLabel">Kirim Undangan Email</h3>

                        <div class="d-flex justify-content-center mt-3 mb-2">

                            <img src="<?= base_url("assets/img/email.svg") ?>" style=" width: 100px; height: 100px; ">

                        </div>
                        <input type="hidden" id="idTim" value="">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row"><i class="fas fa-building me-2"></i>Tim Marketing</th>
                                    <td id="teamName"></td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="fas fa-book me-2"></i>Follow-up Leads</th>
                                    <td>
                                        <ul id="followUpLeads">
                                            <!-- <li>PT Conda</li>
                                                <li>Data lead 2</li>
                                                <li>Data lead 3</li> -->
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-4 gap-2">
                            <a class="btn-custom text-white text-center" id="confirmSendEmail" style="background-color: #DF3131;  width: 200px; height: 40px;">
                                <i class="fas me-1"></i>Kirim
                            </a>
                            <button class="btn btn-batal btn-sm btn-outline-danger" data-dismiss="modal" style=" width: 200px; height: 40px; color:red;">
                                <i class="fas me-1"></i>Batal
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end kirim email modal -->
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js" integrity="sha512-hJsxoiLoVRkwHNvA5alz/GVA+eWtVxdQ48iy4sFRQLpDrBPn6BFZeUcW4R4kU+Rj2ljM9wHwekwVtsb0RY/46Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="<?= base_url() ?>assets/js/home/pagination.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script>
    var id_pengguna = <?= $_COOKIE['id_pengguna'] ?>;
    var basicAuth = btoa("beetend" + ":" + "76oZ8XuILKys5");

    function addAuthorizationHeader(xhr) {
        xhr.setRequestHeader("Authorization", "Basic " + basicAuth);
    }

    $(document).ready(function() {
        // Clear form fields when the modal is closed
        $('#detailMarketingModal').on('hidden.bs.modal', function() {
            $('#nama').text('');
            $('#posisi').text('');
            $('input[name=email]').val('');
            $('input[name=no_telp]').val('');
            $('input[name=alamat]').val('');
            $('#user-photo').attr('src', '<?= base_url("assets/img/user-icon-detail.svg") ?>');
        });
        $('#editMarketingModal').on('hidden.bs.modal', function() {
            $('#nama').text('');
            $('#posisi').val('');
            $('input[name=email]').val('');
            $('input[name=no_telp]').val('');
            $('input[name=alamat]').val('');
        });

        load();
    });

    function load() {
        $.ajax({
            url: "<?= base_url('api/supplier/getTotalTimMarketingById') ?>",
            type: "GET",
            dataType: "JSON",
            headers: {
                Authorization: `Basic ${basicAuth}`
            },
            data: {
                id_pengguna: id_pengguna
            },
            success: function(data) {
                console.log('total tim:', data);
                total_tim = data;
                if (total_tim > 0) {
                    $('#pagination-container').pagination({
                        dataSource: "<?= base_url() ?>api/supplier/getTimMarketingByIdSup",
                        locator: '',
                        totalNumber: total_tim,
                        pageSize: 10,
                        autoHidePrevious: true,
                        autoHideNext: true,
                        showNavigator: true,
                        formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> tim marketing',
                        position: 'bottom',
                        className: 'paginationjs-theme-red paginationjs-big',
                        ajax: {
                            type: "GET",
                            data: {
                                id_pengguna: id_pengguna,
                                total_tim: total_tim
                            },
                            headers: {
                                Authorization: `Basic ${basicAuth}`
                            },

                            beforeSend: function(xhr, settings) {
                                const url = settings.url
                                const params = new URLSearchParams(url)
                                let currentPageNum = params.get('pageNumber')
                                currentPageNum = parseInt(currentPageNum)
                                if (currentPageNum >= 2 && id_pengguna == 0) {
                                    window.location.href = `${base_url}login`
                                    return false
                                }
                                $('#data-marketing').html(`<tr id="loading-row"><td colspan="6" class="text-center"><div class="d-flex justify-content-center my-2"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan tim marketing ...</span></div></td></tr>`);
                            },
                        },
                        callback: function(data, pagination) {
                            console.log("Pagination callback triggered");
                            if (data != '') {
                                currentPage = pagination.pageNumber;
                                let html = tampilData(data);
                            }
                        }

                    })


                } else {
                    // alert('gagal memuat');
                    $('#error-message').removeClass('d-none').text('Gagal memuat data. Silakan coba lagi nanti.');

                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                $('#error-message').removeClass('d-none').text('Terjadi kesalahan saat memuat data. Silakan coba lagi nanti.');
            }
        });
    }

    function closeModal() {
        // Menutup modal dengan mengklik tombol dengan atribut data-dismiss="modal"
        $('[data-dismiss="modal"]').click();
    }

    // Handle form submission
    $('#submit-input').click(function(event) {
        event.preventDefault();

        // Get the form data
        var formData = {
            nama_tim: $('#inputNama').val(),
            posisi: $('#inputPosisi').val(),
            email: $('#inputEmail').val(),
            no_telp: $('#inputNoHP').val(),
            alamat: $('#inputAlamat').val(),
        };

        // Make an AJAX request
        $.ajax({
            url: '<?= base_url("api/supplier/create") ?>',
            type: 'POST',
            data: formData,
            beforeSend: addAuthorizationHeader,
            success: function(response) {
                if (response.status == true) {
                    Swal.fire({
                        icon: "success",
                        title: "Data berhasil ditambahkan!",
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        // Hide the modal
                        closeModal();
                        // Clear the form fields
                        $('#form-input')[0].reset();

                        // Call your function to refresh data display
                        load();
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Data gagal ditambahkan!",
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });

    // Clear the form fields when the modal is closed
    $('#inputMarketingModal').on('hidden.bs.modal', function() {
        $('#form-input')[0].reset();
    });

    function tampilData(data) {
        let html = '';
        for (let i = 0; i < data.length; i++) {
            html += '<tr>' +
                '<td style="text-align:center;">' + (i + 1) + '</td>' +
                '<td class="nama">' + data[i].nama_tim + '</td>' +
                '<td class="posisi">' + data[i].posisi + '</td>' +
                '<td style="width:20px;"><a class="email" href="mailto:' + data[i].email + '">' + data[i].email + '</a></td>' +
                '<td class="no_telp">' + data[i].no_telp + '</td>' +
                '<td style="text-align:center">' +
                '<a class="btn-det" data-toggle="modal" data-target="#detailMarketingModal" data-id="' + data[i].id_tim + '" title="Lihat Detail"><i class="fas fa-info-circle me-2"></i></a>' +
                '<a href="#" class="btn-edt" data-toggle="modal" data-target="#editMarketingModal" data-id="' + data[i].id_tim + '" title="Edit"><i class="fas fa-edit me-2"></i></a>' +
                '<a class="btn-del" data-toggle="modal" data-target="#deleteModal" data-id="' + data[i].id_tim + '" title="Hapus"><i class="fas fa-trash me-2"></i></a>' +
                '<a class="btn-kir" data-toggle="modal" data-target="#kirimModal" data-id="' + data[i].id_tim + '" title="Kirim Email Undangan"><i class="fas fa-paper-plane"></i></a>' +

                '</td>' +
                '</tr>';
        }
        $('#data-marketing').html(html);
        attachDeleteEvent();
        // attachDeleteEvent();
        attachEmailEvent();

        detail();
        edit();
        // aksi_edit();
    }

    // function tampilData(){
    //     $.ajax({
    //         url: "<?= base_url('api/supplier/get') ?>",
    //         type: "GET",
    //         dataType: "json",
    //         data: {
    //             id_pengguna: id_pengguna
    //         },
    //         beforeSend: addAuthorizationHeader,
    //         success: function(data) {
    //             let html = '';
    //             for (let i = 0; i < data.data.length; i++) {
    //                 html += '<tr>' +
    //                     '<td style="text-align:center;">' + (i + 1) + '</td>' +
    //                     '<td class="nama">' + data.data[i].nama_tim + '</td>' +
    //                     '<td class="posisi">' + data.data[i].posisi + '</td>' +
    //                     '<td style="width:20px;"><a class="email" href="mailto:' + data.data[i].email + '">' + data.data[i].email + '</a></td>' +
    //                     '<td class="no_telp">' + data.data[i].no_telp + '</td>' +
    //                     '<td style="text-align:center">' +
    //                     '<a class="btn-det" data-toggle="modal" data-target="#detailMarketingModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-info-circle me-2"></i></a>' +
    //                     '<a href="#" class="btn-edt" data-toggle="modal" data-target="#editMarketingModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-edit me-2"></i></a>' +
    //                     '<a class="btn-del" data-toggle="modal" data-target="#deleteModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-trash me-2"></i></a>' +
    //                     '<a class="btn-kir" data-toggle="modal" data-target="#kirimModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-paper-plane"></i></a>' +
    //                     '</td>' +
    //                     '</tr>';
    //             }
    //             $('#data-marketing').html(html);

    //             // Attach delete event listener after the table is populated
    //             attachDeleteEvent();
    //             detail();
    //             edit();
    //             // aksi_edit();
    //         }
    //     });
    // }

    function attachDeleteEvent() {
        $(".btn-del").click(function() {
            var id_tim = $(this).data("id");
            console.log('id tim yg di hapus:', id_tim)


            $('#hapus-modal').off('click').on('click', function(event) {
                event.preventDefault();
                // Make an AJAX request
                $.ajax({
                    url: "<?= base_url('api/supplier/delete/') ?>" + id_tim,
                    type: 'DELETE',
                    beforeSend: addAuthorizationHeader,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                icon: "success",
                                title: "Data berhasil dihapus!",
                                showConfirmButton: false,
                                timer: 2000
                            }).then(function() {
                                $('#deleteModal').modal('hide');
                                load(); // Refresh data
                                closeModal();
                            });
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Data gagal dihapus!",
                                showConfirmButton: false,
                                timer: 2000
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                        Swal.fire({
                            icon: "error",
                            title: "Terjadi kesalahan!",
                            text: "Silakan coba lagi.",
                            showConfirmButton: true
                        });
                    }
                });
            });
        });
    }

    function detail() {
        //Detail Marketing Action
        $(".btn-det").click(function() {
            var id_tim = $(this).data("id");

            var formData = {
                nama_tim: $('input[name=nama_tim]').val(),
                posisi: $('input[name=posisi]').val(),
                email: $('input[name=email]').val(),
                no_telp: $('input[name=no_telp]').val(),
                alamat: $('input[name=alamat]').val(),
            };

            // Get data from id
            $.ajax({
                url: "<?= base_url('api/supplier/getId/') ?>" + id_tim,

                type: 'GET',

                dataType: "json",

                beforeSend: addAuthorizationHeader,

                success: function(data) {

                    // $('input[name=nama_tim]').val(data.data.nama_tim);
                    $('#nama').text(data.data.nama_tim);

                    $('#posisi').text(data.data.posisi);

                    $('input[name=email]').val(data.data.email);

                    $('input[name=no_telp]').val(data.data.no_telp);

                    $('input[name=alamat]').val(data.data.alamat);

                    // Update user photo if available
                    if (data.data.foto) {
                        $('#user-photo').attr('src', '<?= base_url("assets/upload/") ?>' + data.data.foto);
                    } else {
                        $('#user-photo').attr('src', '<?= base_url("assets/img/user-icon-detail.svg") ?>');
                    }

                },

                error: function(xhr, status, error) {

                    console.log(xhr.responseText);
                }
            });
        });
        // Add click event to email and phone inputs
        $(document).on('click', '#inputEmail2', function() {
            var email = $('#email').val();
            console.log(email)
            if (email) {
                window.location.href = 'mailto:' + email;
            }
        });

        $(document).on('click', '#inputNoHP', function() {
            var no_telp = $('#no_telp').val();
            console.log(no_telp)

            if (no_telp) {
                window.location.href = 'https://wa.me/' + no_telp.replace(/^0/, '62'); // Assuming the phone number is in Indonesian format
            }
        });
    }


    function edit() {
        //Edit Action
        $(".btn-edt").click(function() {
            var id_tim = $(this).data("id");

            // $('#submit-input').click(function(event) {
            //     event.preventDefault();

            // Get the form instance
            var formData = {
                nama_tim: $('input[name=nama_tim]').val(),
                posisi: $('input[name=posisi]').val(),
                email: $('input[name=email]').val(),
                no_telp: $('input[name=no_telp]').val(),
                alamat: $('textarea[name=alamat]').val(),
            };

            // Get data from id
            $.ajax({
                url: "<?= base_url('api/supplier/getId/') ?>" + id_tim,

                type: 'GET',

                dataType: "json",

                beforeSend: addAuthorizationHeader,

                success: function(data) {
                    console.log(data);

                    $('input[name=nama_tim]').val(data.data.nama_tim);

                    $('input[name=posisi]').val(data.data.posisi);

                    $('input[name=email]').val(data.data.email);

                    $('input[name=no_telp]').val(data.data.no_telp);

                    $('textarea[name=alamat]').val(data.data.alamat);

                    aksi_edit(id_tim)
                },

                error: function(xhr, status, error) {

                    console.log(xhr.responseText);
                }
            });
        });
    }

    function aksi_edit(id_tim) {
        $('#submit-edit').click(function(event) {

            // var id_tim = $(this).data("id");
            event.preventDefault();

            // Get the form instance
            var formData = {
                nama_tim: $('#editNama').val(),
                posisi: $('#editPosisi').val(),
                email: $('#editEmail').val(),
                no_telp: $('#editNoHP').val(),
                alamat: $('#editAlamat').val(),
            };

            console.log('fotmat data edit:', formData)
            console.log('id tim yg di edit:', id_tim)

            // // Make an AJAX request
            $.ajax({

                url: '<?= base_url("api/supplier/update/") ?>' + id_tim,

                type: 'POST',

                data: formData,

                beforeSend: addAuthorizationHeader,

                success: function(response) {

                    console.log(response)

                    if (response.status == true) {

                        Swal.fire({

                            icon: "success",

                            title: "Data berhasil diubah!",

                            showConfirmButton: false,

                            timer: 2000

                        }).then(function() {

                            // window.location.href = "<?= base_url('suplier/marketing') ?>";
                            load();
                            closeModal();

                        });

                    } else {

                        Swal.fire({

                            icon: "eror",

                            title: "Data gagal diubah!",

                            showConfirmButton: false,

                            timer: 2000

                        })
                    }
                },

                error: function(xhr, status, error) {

                    console.log(xhr.responseText);

                }
            });

        });
    }

    // Kirim email
    function attachEmailEvent() {
        $('.btn-kir').on('click', function() {
            let idTim = $(this).data('id');
            $('#idTim').val(idTim); // Set the idTim value in hidden input
            // console.log('id tim :',idTim)
            // Tampilkan modal
            // $('#kirimModal').modal('show');
            $.ajax({
                url: '<?= base_url('api/supplier/before-send-mail'); ?>', // Ganti dengan URL endpoint PHP Anda
                type: 'GET',
                data: {
                    id: idTim
                },
                dataType: 'json',
                beforeSend: addAuthorizationHeader,
                success: function(response) {
                    // Perbarui elemen dalam modal dengan data dari response
                    $('#kirimModalLabel').text(response.modalTitle);
                    $('#teamName').text(response.teamName);
                    $('#followUpLeads').empty();

                    if (response.leads.length === 0) {
                        $('#followUpLeads').append('<li>Tidak ada data leads.</li>');
                        $('#confirmSendEmail').prop('disabled', true); // Disable the "Kirim" button
                    } else {
                        response.leads.forEach(function(lead) {
                            $('#followUpLeads').append('<li>' + lead.nama_perusahaan + '</li>');
                        });
                        $('#confirmSendEmail').prop('disabled', false); // Enable the "Kirim" button
                    }
                },
                error: function(xhr, error) {
                    console.error('AJAX Error: ' + error);
                    $('#followUpLeads').append('<li>Gagal memuat data leads.</li>');

                }
            });

        });

        let isRequestInProgress = false;

        $('#confirmSendEmail').on('click', function() {
            if (isRequestInProgress) return; // Cegah permintaan ganda

            isRequestInProgress = true; // Set flag ke true untuk menandakan permintaan sedang berlangsung
            let idTim = $('#idTim').val();
            console.log('id tim sebelum kirim email :', idTim)
             
            sendEmail(idTim, function() {
                isRequestInProgress = false; // Set flag ke false setelah permintaan selesai
            });
        });
    }

    function sendEmail(idTim, callback) {
        $.ajax({
            url: "<?= base_url('/api/supplier/send-email'); ?>", // Ganti dengan URL API backend Anda
            type: 'POST',
            dataType: 'json', // Set content type to JSON
            data: {
                id: idTim
            }, // Send idTim as JSON
            beforeSend: addAuthorizationHeader,
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: "success",
                        title: "berhasil",
                        text: "Email undangan telah berhasil dikirim!!",
                        showConfirmButton: false,
                        timer: 2000
                    });
                } else {
                    Swal.fire({
                        title: "gagal!",
                        icon: "error",
                        text: "Gagal mengirim email undangan! " + response.message,
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
                $('#kirimModal').modal('hide');
                if (callback) callback(); // Panggil callback setelah permintaan selesai
            },
            error: function(error) {
                Swal.fire({
                    title: "gagal!",
                    icon: "error",
                    text: "Gagal mengirim email undangan!",
                    showConfirmButton: false,
                    timer: 2000
                });
                $('#kirimModal').modal('hide');
                if (callback) callback(); // Panggil callback setelah permintaan selesai
            }
        });
    }
</script>





<!-- <script>
    var id_pengguna = <?= $_COOKIE['id_pengguna'] ?>;
    var basicAuth = btoa("beetend" + ":" + "76oZ8XuILKys5");

    function addAuthorizationHeader(xhr) {
        xhr.setRequestHeader("Authorization", "Basic " + basicAuth);
    }

    $(document).ready(function() {
        $.ajax({
            url: "<?= base_url('api/supplier/get') ?>",
            type: "GET",
            dataType: "json",
            data: {
                id_pengguna: id_pengguna
            },
            beforeSend: addAuthorizationHeader,
            success: function(data) {
                let html = '';
                let i;
                for (i = 0; i < data.data.length; i++) {
                    html += '<tr>' +

                        '<td style="text-align:center;">' + (i + 1) + '</td>' +
                        '<td class="nama">' + data.data[i].nama_tim + '</td>' +
                        '<td class="posisi">' + data.data[i].posisi + '</td>' +
                        '<td style="width:20px;"><a class="email" href="mailto:' + data.data[i].email + '">' + data.data[i].email + '</a></td>' +
                        '<td class="no_telp">' + data.data[i].no_telp + '</td>' +
                        '<td style="text-align:center">' +
                        '<a class="btn-det" data-toggle="modal" data-target="#detailMarketingModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-info-circle me-2"></i></a>' +
                        '<a href="#" class="btn-edt" data-toggle="modal" data-target="#editMarketingModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-edit me-2"></i></a>' +
                        '<a class="btn-del" data-toggle="modal" data-target="#deleteModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-trash me-2"></i></a>' +
                        '<a class="btn-kir" data-toggle="modal" data-target="#kirimModal" data-id="' + data.data[i].id_tim + '"><i class="fas fa-paper-plane"></i></a>'
                    '</td>' +
                    // '<td> <a href="#" class="btn btn-danger">Edit Data</a> <a class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal">Hapus</a><a class="btn btn-outline-danger" data-toggle="modal" data-target="#lengkapiLeadsModal">Lengkapi</a></td>' +
                    '</tr>';

                }
                $('#data-marketing').html(html);


                //Action Menambahkan tim baru
                $(document).ready(function() {

                    // Handle form submission
                    $('#submit-input').click(function(event) {
                        event.preventDefault();

                        // Get the form instance
                        var formData = {
                            nama_tim: $('input[name=nama_tim]').val(),
                            posisi: $('input[name=posisi]').val(),
                            email: $('input[name=email]').val(),
                            no_telp: $('input[name=no_telp]').val(),
                            alamat: $('textarea[name=alamat]').val(),
                        };

                        // Make an AJAX request
                        $.ajax({
                            url: '<?= base_url("api/supplier/create") ?>',
                            type: 'POST',
                            data: formData,
                            beforeSend: addAuthorizationHeader,
                            success: function(response) {
                                if (response.status == true) {
                                    Swal.fire({

                                        icon: "success",
                                        title: "Data berhasil ditambahkan!",
                                        showConfirmButton: false,
                                        timer: 2000
                                    }).then(function() {
                                        window.location.href = "<?= base_url('suplier/marketing') ?>";
                                    });
                                } else {
                                    Swal.fire({

                                        icon: "eror",
                                        title: "Data gagal ditambahkan!",
                                        showConfirmButton: false,
                                        timer: 2000
                                    })


                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                            }
                        });
                    });

                });

                // Delete action
                $(".btn-del").click(function() {
                    var id_tim = $(this).data("id");

                    $('#hapus-modal').click(function(event) {
                        event.preventDefault();
                        // Make an AJAX request
                        $.ajax({
                            url: "<?= base_url('api/supplier/delete/') ?>" + id_tim,
                            type: 'DELETE',
                            // data: formData,
                            beforeSend: addAuthorizationHeader,
                            success: function(response) {
                                if (response.status == true) {
                                    Swal.fire({

                                        icon: "success",
                                        title: "Data berhasil dihapus!",
                                        showConfirmButton: false,
                                        timer: 2000
                                    }).then(function() {
                                        window.location.href = "<?= base_url('suplier/marketing') ?>";
                                    });
                                } else {
                                    Swal.fire({

                                        icon: "eror",
                                        title: "Data gagal dihapus!",
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(xhr.responseText);
                            }
                        });
                    });
                });

                //Detail Marketing Action
                $(".btn-det").click(function() {
                    var id_tim = $(this).data("id");

                    var formData = {
                        nama_tim: $('input[name=nama_tim]').val(),
                        posisi: $('input[name=posisi]').val(),
                        email: $('input[name=email]').val(),
                        no_telp: $('input[name=no_telp]').val(),
                        alamat: $('input[name=alamat]').val(),
                    };

                    // Get data from id
                    $.ajax({
                        url: "<?= base_url('api/supplier/getId/') ?>" + id_tim,

                        type: 'GET',

                        dataType: "json",

                        beforeSend: addAuthorizationHeader,

                        success: function(data) {

                            // $('input[name=nama_tim]').val(data.data.nama_tim);
                            $('#nama').text(data.data.nama_tim);

                            $('input[name=posisi]').val(data.data.posisi);

                            $('input[name=email]').val(data.data.email);

                            $('input[name=no_telp]').val(data.data.no_telp);

                            $('input[name=alamat]').val(data.data.alamat);

                        },

                        error: function(xhr, status, error) {

                            console.log(xhr.responseText);
                        }
                    });
                });



                //Edit Action
                $(".btn-edt").click(function() {
                    var id_tim = $(this).data("id");

                    // $('#submit-input').click(function(event) {
                    //     event.preventDefault();

                    // Get the form instance
                    var formData = {
                        nama_tim: $('input[name=nama_tim]').val(),
                        posisi: $('input[name=posisi]').val(),
                        email: $('input[name=email]').val(),
                        no_telp: $('input[name=no_telp]').val(),
                        alamat: $('textarea[name=alamat]').val(),
                    };

                    // Get data from id
                    $.ajax({
                        url: "<?= base_url('api/supplier/getId/') ?>" + id_tim,

                        type: 'GET',

                        dataType: "json",

                        beforeSend: addAuthorizationHeader,

                        success: function(data) {

                            $('input[name=nama_tim]').val(data.data.nama_tim);

                            $('input[name=posisi]').val(data.data.posisi);

                            $('input[name=email]').val(data.data.email);

                            $('input[name=no_telp]').val(data.data.no_telp);

                            $('textarea[name=alamat]').val(data.data.alamat);

                        },

                        error: function(xhr, status, error) {

                            console.log(xhr.responseText);
                        }
                    });
                });



                $('#submit-edit').click(function(event) {

                    var id_tim = $(this).data("id");
                    event.preventDefault();

                    // Get the form instance
                    var formData = {
                        nama_tim: $('input[name=nama_tim]').val(),
                        posisi: $('input[name=posisi]').val(),
                        email: $('input[name=email]').val(),
                        no_telp: $('input[name=no_telp]').val(),
                        alamat: $('textarea[name=alamat]').val(),
                    };

                    // Make an AJAX request
                    $.ajax({

                        url: '<?= base_url("api/supplier/update/") ?>' + id_tim,

                        type: 'POST',

                        data: formData,

                        beforeSend: addAuthorizationHeader,

                        success: function(response) {

                            console.log(response)

                            return

                            if (response.status == true) {

                                Swal.fire({

                                    icon: "success",

                                    title: "Data berhasil diubah!",

                                    showConfirmButton: false,

                                    timer: 2000

                                }).then(function() {

                                    window.location.href = "<?= base_url('suplier/marketing') ?>";

                                });

                            } else {

                                Swal.fire({

                                    icon: "eror",

                                    title: "Data gagal diubah!",

                                    showConfirmButton: false,

                                    timer: 2000

                                })
                            }
                        },

                        error: function(xhr, status, error) {

                            console.log(xhr.responseText);

                        }
                    });
                });

            }
        })
    });
</script> -->
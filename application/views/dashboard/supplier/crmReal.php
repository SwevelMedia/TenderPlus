<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="<?= base_url() ?>assets/js/gijgo.min.js" type="text/javascript"></script>
<link href="<?= base_url() ?>assets/css/gijgo.css" rel="stylesheet" type="text/css">



<style>
  .paginationjs.paginationjs-big .paginationjs-nav.J-paginationjs-nav {
    font-size: 1rem !important;
  }

  .animation {
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }

  .thead {
    color: #fff;
    background-color: #E05151;
    text-align: center;
    font-size: 15px;
  }

  th.custom-padding,
  td.custom-padding {
    border: none;
    vertical-align: middle !important;
    /* height: 60px !important; */
    text-align: left;
  }

  tbody {
    margin: 10px;
    text-align: left;
    font-size: 13px;
  }

  .perusahaan {
    font-weight: bold;
    max-width: 250px;
  }

  .npwp {
    color: #8B6464;
  }

  .email {
    color: #000;
    text-decoration: underline;
  }

  .icon {
    margin-left: 20px;
  }

  .table {
    padding: 1rem;
  }

  .table-responsive.custom-table-scroll {
    max-height: 300px;
    overflow-y: auto;
    padding: 0.75em;
  }

  s .shadow-sm {
    border-radius: 10px;
  }

  .card-data {
    background: var(--shade-font-white, #FFF);
  }

  .card-body {
    margin-bottom: 10px;
    margin-left: 5px;
    margin-right: 10px;
    padding-left: 10px;
    padding-bottom: 10px;
    border-radius: 30px;
  }

  .card-title {
    color: #B89494;
    font-size: 0.76rem;
    font-weight: bold;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .card-text {
    font-size: 2rem;
    font-weight: bold;
    padding-bottom: 5px;
  }

  .card-input {
    font-size: 10px;
    margin-top: 2rem;
    display: flex;
    width: 500px;
  }

  .tbody-tr {
    gap: 10px;
  }

  tbody>tr {
    height: 60px;

  }

  tbody>tr>td {
    vertical-align: middle !important;
  }

  .btn.btn-success {
    border-color: #059669;
    border-radius: 5px;
    padding: 5px 10px;
    gap: 10px;
    font-size: 13px;
  }

  .btn.btn-outline-danger {
    color: #E05151;
    background-color: #FFF;
    border-color: #E05151;
  }

  .overflow {
    overflow: auto;
  }

  .custom-select {
    margin-bottom: 10px;
    border: 1px solid;
    background-color: white;
  }

  .form-select-custom {
    color: #CCCCCC;
    border-radius: 20px;
    font-size: 1rem;
  }

  .form-select {
    background-image: none !important;
  }

  .form-select-custom {
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
    width: 380px;
    padding-left: 10px;
  }

  .allcontact {
    background-color: #FFF;
    border: none;
    margin-left: 15px;
  }

  @media (max-width: 767px) {
    .overflow {
      flex-direction: column;
    }

    .col-6 {
      width: 100%;
    }

    .card-input {
      margin-bottom: 20px;
    }
  }

  @media (max-width: 767px) {
    .form-input-custom {
      width: calc(100% - 50px);
      max-width: 100%;
    }

    .overflow {
      overflow: hidden;
    }
  }

  /* PINDAH 3 CARD KEBAWAH  */
  @media (max-width: 768px) {
    .col-6.justify-content.d-flex {
      flex-direction: column;
    }

    .container-lg {
      width: 100%;
      margin-bottom: 20px;
    }
  }



  @media (max-width: 767px) {
    .col-4 {
      display: none;
    }
  }

  @media (min-width: 768px) {
    .col-8 {
      padding-left: 3rem;
    }
  }

  @media (max-width: 767px) {
    .col-8 {
      padding-left: 0;
      width: 100%;
    }

    .row.g-0 {
      margin: 0;
    }

    .custom-card-detail .row {

      padding: 10px;
    }

    .table-contact {
      flex-grow: unset;
      white-space: nowrap;
      overflow-x: auto;
    }



  }

  @media (max-width: 767px) {
    .modal-dialog {
      max-width: 90%;
    }

    .modal-content {
      overflow-y: auto;
      max-height: 80vh;
    }

    .modal-title {
      font-size: 18px;
    }

    .modal-body p {
      font-size: 14px;
    }

    .form-label {
      font-size: 14px;
    }

    .form-control {
      font-size: 14px;
    }

    .input-popup img {
      max-width: 75%;
      height: auto;
    }
  }

  @media (min-width: 768px) {
    .modal-dialog {
      max-width: 600px;
    }
  }

  .profile-image,
  .contact-image {
    display: block;
  }

  @media screen and (max-width: 768px) {

    .profile-image,
    .contact-image {
      display: none;
    }
  }

  @media (max-width: 768px) {
    .modal-dialog.custom-modal {
      max-width: 90%;
    }

    .modal-content {
      padding: 15px;
    }

    .modal-title {
      font-size: 18px;
    }

    .table.popup-table th,
    .table.popup-table td {
      font-size: 14px;
    }

    .btn-custom {
      font-size: 14px;
      padding: 5px 10px;
    }


  }

  .table-container {
    max-width: 100%;
    overflow-x: auto;
  }

  .custom-img {
    width: 30px;
    height: 30px;
  }

  .custom-img-tabel {
    width: 20px;
    height: 20px;
  }

  .custom-table-container {
    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    border: 1px solid var(--neutral-100, #F0E2E2);

  }

  input[type="date"] {
    border: none;
    /* Remove the border */
    /* Additional styling if needed */
    outline: none;
    /* Remove the outline */
    /* Add any other custom styles */
  }

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
</style>

<style>
  .popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 999;
  }

  .popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    max-width: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .popup-button {
    background-color: #E05151;
    color: white;
    padding: 10px 180px;
    border: none;
    border-radius: 5px;
    margin-top: 20px;
  }

  .popup-table {
    padding: 0.5rem 0.5rem;
    margin-top: 20px;
  }

  .popup img {
    margin-top: -5rem;
  }

  body.modal-open {
    overflow: hidden;
  }

  .popup-thead {
    font-size: small;
    margin-top: 2rem;
  }

  /* modal popup */
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

  .modal-title {
    color: var(--font-dark-grey, #333);
    text-align: center;
    font-family: Ubuntu;
    font-size: 33px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
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
    background: var(--primary-red-400, #DF3131);
    color: white;
    text-decoration: none;
    cursor: pointer;

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
</style>

<style>
  .rounded {
    width: 25px;
    height: 25px;
    background-color: #553333;
    border-radius: 10px 10px 10px 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 15px;
  }

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

  .link .btn-simpan {
    background-color: red;
    color: white;
    transition: background-color 0.3s;
  }

  .link .btn-simpan:hover {
    background-color: orange;
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
    display: flex;
    width: 735px;
    padding: 45px 30px 25px 30px;
    flex-direction: column;
    align-items: center;
    gap: 40px;
  }

  .btn-custom {
    display: flex;
    padding: 15px 30px;
    justify-content: center;
    align-items: center;
    gap: 10px;
    align-self: stretch;
    border-radius: 5px;
    background: var(--primary-red-400, #DF3131);
    color: white;
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

  .image-modal {
    position: absolute;
    top: 0%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    max-width: 80%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .modal-lg {
    max-width: 735px;
  }

  .form-select-custom-status {
    width: 300px;
    color: #D21B1B;
    border-radius: 20px;
    font-size: 1rem;
    margin-bottom: 15px;
    border: 1px solid;
    background-color: white;
    margin-top: 0;
    /* height: 2rem; */
  }

  .hidden {
    display: none;
  }

  .statusCRM {
    /* background-color:#212529; */
    background-color: #FFEEE6;
    border-radius: 10px;
  }

  .grafikCRMContainer {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }

  .dot {
    height: 10px;
    width: 10px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    margin-right: 10px;
  }

  .datepicker,
  .timepicker {
    border: none !important;
    background-color: white;
    font-size: 13px;
  }

  .gj-textbox-md,
  .gj-datepicker-md {
    font-size: 13px !important;
  }

  .custom-container {
    height: 100%;
    margin-right: 10px;
    border-left: 4px solid #F17D3A;
    ;
  }

  .btn {
    font-size: 13px !important;
  }

  .btn-arrow,
  .btn-arrow:disabled {
    border: 0px !important;
    /* for Firefox */
    -moz-appearance: none;
    /* for Safari, Chrome, Opera */
    -webkit-appearance: none;
  }

  .btn:focus {
    box-shadow: none !important;
  }

  p {
    margin-bottom: 5px !important;
  }

  .selectBox {
    border: 1px solid #ccc;
    position: relative;
    padding: 12px 24px;
    cursor: pointer;

    &__value {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      display: block;
    }

    &:after {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%) rotate(0deg);
      transition: all 0.2s ease-in-out;
      content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14.001' height='8.165' viewBox='0 0 14.001 8.165'%3E%3Cdefs%3E%3Cstyle%3E.a%7Bfill:%23212121;%7D%3C/style%3E%3C/defs%3E%3Cpath class='a' d='M13.861,60.224l-.7-.7a.441.441,0,0,0-.645,0L7,65.036,1.487,59.522a.441.441,0,0,0-.645,0l-.7.7a.441.441,0,0,0,0,.645l6.537,6.538a.441.441,0,0,0,.645,0l6.538-6.538a.442.442,0,0,0,0-.645Z' transform='translate(0 -59.382)'/%3E%3C/svg%3E");
    }

    .dropdown-menu {
      transition: all 0.5s ease-in-out;
      opacity: 0;
      display: block;
      top: 100%;
      width: 100%;
      max-height: 250px;
      z-index: -1;
      overflow-y: auto;
      transform: translateY(-15%);
      visibility: hidden;
    }

    &.show {
      background-color: #fff;

      &:after {
        transform: translateY(-50%) rotate(180deg);
      }

      .dropdown-menu {
        transition: all 0.3s ease-in-out;
        visibility: visible;

        opacity: 1;
        z-index: 1;

        transform: translateY(0);
      }
    }
  }
</style>

<section class="bg-white pt-5 mt-5">
  <div class="container-lg d-flex justify-content-left align-items-left wow fadeInUp" data-wow-delay="0.1s">
    <h4 class="mb-0 wow fadeInUp">Hi <span class="fw-semibold nama-pengguna" style="color: #df3131;"></span>!<p class="pt-2">Siap Menawarkan Produkmu Hari Ini ?</p>
    </h4>
  </div>
</section>
<section>
  <div class="container wow fadeInUp animation statusCRM">
    <div class="row justify-content-center mt-2 mx-1 px-1">
    </div>
    <div class="row col-12">
      <div class="col-3">
        <div class="grafikCRMContainer">
          <div class="chart2" style="margin:0; padding:0">
            <canvas id="grafikCRM" width="250" height="220"></canvas>
          </div>
        </div>
      </div>
      <!-- Keterangan -->
      <div class="col-3 pt-4 my-4">
        <h4 class="text-center">Status</h4>
        <div class="keterangan" style="margin-top:10px; padding:0">
          <p id="tanpa-status" class="crmstats-summary vertical-align-center" style="margin-left: 10%;">
            <span class="dot" style="background-color: orange; font-size:11px;"></span>Tanpa Status
            <span class="crmstats-summary-number float-right">0</span>

          </p>
          <p id="sedang-dihubungi" class="crmstats-summary vertical-align-center" style="margin-left: 10%;">
            <span class="dot" style="background-color: lightblue; font-size:11px;"></span>Sedang Dihubungi
            <span class="crmstats-summary-number float-right">0</span>
          </p>
          <p id="proses-negosiasi" class="crmstats-summary" style="margin-left: 10%;">
            <span class="dot" style="background-color: purple; font-size:11px;"></span>Proses Negosiasi
            <span class="crmstats-summary-number float-right">0</span>
          </p>
          <p id="disetujui" class="crmstats-summary" style="margin-left: 10%;">
            <span class="dot" style="background-color: green; font-size:11px;"></span>Disetujui
            <span class="crmstats-summary-number float-right">0</span>
          </p>
          <p id="ditolak" class="crmstats-summary" style="margin-left: 10%;">
            <span class="dot" style="background-color: red; font-size:11px;"></span>Ditolak
            <span class="crmstats-summary-number float-right">0</span>
          </p>
        </div>
      </div>
      <!-- <div class="col-3 my-auto">
        <div>
          <div class="custom-container fw-semibold mb-5">
            <div class="container" style="color: #6A6A6A;">
              <h6>Kontak Belum Dilengkapi</h6>
            </div>
            <div class="container">
              <h2 class="belum-lengkap">0</h2>
            </div>
          </div>
        </div>
        <div>
          <div class="custom-container fw-semibold">
            <div class="container" style="color: #6A6A6A;">
              <h6>
                Total Leads Anda
              </h6>
            </div>
            <div class="container">
              <h2 class=" total-leads">
                0
              </h2>
            </div>
          </div>
        </div>
      </div> -->
      <div class="col-6 justify-content-center align-items-center float-end">
        <img src="<?= base_url('assets/img/icon-crm.svg') ?>" class="my-4 float-end" style="width:300px" alt="CRM">
      </div>
    </div>
  </div>
</section>
<section class="bg-white">
  <div class="container" data-aos="fade_up">
    <!-- <div class="col-12" style="margin:0"> -->
    <div class="row my-3">
      <div class="col-5 form-select-custom d-flex" style="padding:5px 5px 5px 0px; margin-right:10px">
        <img class="ms-3" src="<?= base_url('assets\img\icon_search.svg') ?>" width="20" alt="" style="padding-right:5px">
        <input id="input-cari-tender" type="text" class="form-input-custom" style="border:none;" placeholder="Cari nama perusahaan">
      </div>
      <div class="col-3 form-select-custom-status d-flex ms-2">
        <img src="<?= base_url('assets\img\icon_filter_status.svg') ?>" width="20" alt="">
        <h6 style="margin-right: 10px;color: var(--primary-red-500, #D21B1B);margin-bottom: 0px;align-self: center;padding-left: 5px;text-align: center;font-weight: bold;">Status :</h6>
        <select id="select-status" class="" style="border:none;outline:none;background:transparent;color: var(--primary-red-500, #D21B1B);">
          <option class="select-status-option" value="" selected>All</option>
          <option class="select-status-option" value="sedang-dihubungi">Sedang Dihubungi</option>
          <option class="select-status-option" value="proses-negosiasi">Proses Negosiasi</option>
          <option class="select-status-option" value="ditunda">Ditunda</option>
          <option class="select-status-option" value="disetujui">Disetujui</option>
          <option class="select-status-option" value="dibatalkan">Dibatalkan</option>
        </select>
      </div>
    </div>


    <!-- </div> -->

  </div>

  <div class="container wow fadeInUp" style="margin-top:10px">

    <!-- <div class="row"> -->
    <!-- <div class=""> -->
    <div class="row">
      <table class="table custom-table-container">
        <thead class="thead">
          <tr>
            <th class="custom-padding" style="width: 5%">No.</th>
            <th class="custom-padding" style="width: 22%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets\img\icon_perusahaan.svg') ?>" width="20" alt="" style=""></a>Nama Perusahaan</th>
            <th class="custom-padding" style="width:13%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets\img\icon_kontak.svg') ?>" width="20" alt="" style=""></a>Kontak </th>
            <th class="custom-padding" style="width:14%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets\img\icon_filter_table.svg') ?>" width="20" alt="" style=""></a>Status</th>
            <th class="custom-padding" style="width:12%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets\img\icon_jadwal.svg') ?>" width="20" alt="" style=""></a>Jadwal</th>
            <th class="custom-padding" style="width:25%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets\img\icon_catatan.svg') ?>" width="20" alt="" style=""></a>Catatan</th>
            <th class="custom-padding text-center" style="width:9%">Aksi</th>
          </tr>
        </thead>
        <tbody id="data-leads">

        </tbody>
      </table>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <div class="wow fadeInUp my-4" id="pagination-container" data-wow-delay="0.5s"></div>
  </div>

</section>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/home/pagination.min.js" type="text/javascript"></script>

<script>
  $(document).ready(function() {
    let id_pengguna = Cookies.get('id_pengguna');
    let currentPage = 1;
    let itemsPerPage = 10;
    let total_leads;
    const basicAuth = btoa("beetend" + ":" + "76oZ8XuILKys5");
    var filterElement = document.getElementById("input-cari-tender");
    refreshDashboard();

    function addAuthorizationHeader(xhr) {
      xhr.setRequestHeader("Authorization", "Basic " + basicAuth);
    }
    // Get total leads
    $.ajax({
      url: "<?= base_url('api/supplier/getCount') ?>",
      type: "GET",
      headers: {
        Authorization: `Basic ${basicAuth}`
      },
      dataType: "JSON",
      data: {
        id_pengguna: id_pengguna
      },
      success: function(data) {
        $('.belum-lengkap').html(data.data.jumlah);
        let belum = data.data.jumlah;
        $.ajax({
          url: "<?= base_url('api/supplier/getTotal') ?>",
          type: "GET",
          headers: {
            Authorization: `Basic ${basicAuth}`
          },
          dataType: "JSON",
          data: {
            id_pengguna: id_pengguna
          },
          success: function(data) {
            $('.total-leads').html(data.data);
            let total = data.data;
            let jumlah = total - belum;
            $('.total').html(jumlah);
          }
        });
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });

    $.ajax({
      url: "<?= base_url('api/supplier/getTotal') ?>",
      type: "GET",
      dataType: "JSON",
      headers: {
        Authorization: `Basic ${basicAuth}`
      },
      data: {
        id_pengguna: id_pengguna
      },
      success: function(data) {
        total_leads = data.data;

        $('#pagination-container').pagination({
          dataSource: `<?= base_url() ?>api/supplier/getDataLeadCRM/`,
          locator: '',
          totalNumber: total_leads,
          pageSize: 10,
          autoHidePrevious: true,
          autoHideNext: true,
          showNavigator: true,
          formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> data leads',
          position: 'bottom',
          className: 'paginationjs-theme-red paginationjs-big',
          ajax: {
            type: "GET",
            data: {
              id_pengguna: id_pengguna
            },
            headers: {
              Authorization: `Basic ${basicAuth}`
            },
            beforeSend: function(xhr, settings) {
              const url = settings.url
              const params = new URLSearchParams(url)
              let currentPageNum = params.get('pageNumber')
              currentPageNum = parseInt(currentPageNum)
              if (currentPageNum >= 2 && id_pengguna == null) {
                window.location.href = `${base_url}login`
                return false
              }

              $('#data-leads').html('<tr> <td colspan="7"><div class="d-flex justify-content-center my-2"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Update Data Terbaru...</span></div></td> </tr>');
            }
          },
          callback: function(data, pagination) {
            console.log("Pagination callback triggered");
            if (data != '') {
              currentPage = pagination.pageNumber;
              let html = setTableLeads(data);
              $('#data-leads').html(html);
              bindTableEvents(); // Rebind events after rendering table
            }
          }
        });
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });

    function formatDate(date) {
      if (!date) return '';
      const options = {
        day: '2-digit',
        month: 'long',
        year: 'numeric'
      };
      const d = new Date(date);
      return d.toLocaleDateString('id-ID', options);
    }


    function setTableLeads(data) {
      var leads = "";
      $.each(data, function(index, value) {
        var rowNumber = (currentPage - 1) * itemsPerPage + index + 1;
        var formattedDate = formatDate(value.jadwal);
        var timeValue = value.waktu ? value.waktu : "";
        var catatanValue = value.catatan ? value.catatan : "";
        var statusOptions = `
      <option value="" ${!value.status ? 'selected' : '' }disabled></option>
      <option value="sedang-dihubungi" ${value.status === 'sedang-dihubungi' ? 'selected' : ''}>Sedang Dihubungi</option>
      <option value="proses-negosiasi" ${value.status === 'proses-negosiasi' ? 'selected' : ''}>Proses Negosiasi</option>
      <option value="ditunda" ${value.status === 'ditunda' ? 'selected' : ''}>Ditunda</option>
      <option value="disetujui" ${value.status === 'disetujui' ? 'selected' : ''}>Disetujui</option>
      <option value="dibatalkan" ${value.status === 'dibatalkan' ? 'selected' : ''}>Dibatalkan</option>
    `;
        leads +=
          `<tr data-id="` + value.id + ` " class="data-lead-table" data-searchable="true">
                    <td style="text-align:center">` + rowNumber + `</td>
                    <td class="perusahaan" >` + (value.nama_perusahaan || '') + `</td>
                    <td class="no_telp" >${value.no_telp || ''}</td>
                    <td class="status" contenteditable="false">
          <select class="status-select btn rounded-pill btn-arrow" disabled>
            ${statusOptions}
          </select>
        </td>
                    <td class="jadwal" contenteditable="false">
                      <input type="text" class="datepicker" value="${formattedDate}" disabled />
                      <input type="text" class="timepicker" value="${timeValue}" disabled />
                    </td>
                    <td class="catatan" contenteditable="false">${catatanValue}</td>
                    <td class="text-center">
                    <div>
                      <a class="edit-lead" data-id="` + value.id + `"><img src="<?= base_url('assets/img/icon_edit_table.svg') ?>" style="width: 20px"></a>
                      <a class="tambah" data-id="` + value.id + `"><img src="<?= base_url('assets/img/icon_tambah_table.svg') ?>" style="width: 20px"></a>
                      <a class="riwayat" data-id="` + value.id + `"><img src="<?= base_url('assets/img/icon_riwayat_table.svg') ?>" style="width: 20px" ></a>
                      <a class="save-lead float-left hidden" ><img src="<?= base_url('assets/img/ceklis.svg') ?>" style="width: 25px"></a>
                      <a class="cancel-lead float-right hidden" ><img src="<?= base_url('assets/img/x.svg') ?>" style="width: 25px"></a>
                    </div>
                    </td>
                </tr>
                <tr class="riwayat" data-id="` + value.id + `" style="display:none;" data-searchable="false">
                    <td colspan="7" class="riwayat-content"></td>
                </tr>`;
        $(leads).data('.jadwal', value.jadwal);
      });
      console.log("Table leads set");
      $(document).on('click', '.riwayat', function() {
        var idLead = $(this).data('id');
        var $riwayatRow = $('tr.riwayat[data-id="' + idLead + '"]');
        var $riwayatContent = $riwayatRow.find('.riwayat-content');

        if ($riwayatRow.is(':visible')) {
          $riwayatRow.hide();
        } else {
          $.ajax({
            url: '<?= base_url('api/supplier/getLeadRiwayat') ?>', // Ganti dengan URL endpoint Anda
            type: 'GET',
            headers: {
              Authorization: `Basic ${basicAuth}`
            },
            data: {
              id_lead: idLead
            },
            success: function(response) {
              let content = `<div class="row table justify-content-center">
                        <table class="table custom-table-container col-8 align-items-center">
                            <thead class="thead text-left">
                                <tr>
                                    <th width="20%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets/img/icon_filter_table.svg') ?>" width="20" alt=""></a>Status</th>
                                    <th width="20%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets/img/icon_jadwal.svg') ?>" width="20" alt=""></a>Jadwal</th>
                                    <th width="40%"><a style="padding-right:5px"><img class="custom-img-table" src="<?= base_url('assets/img/icon_catatan.svg') ?>" width="20" alt=""></a>Catatan</th>
                                </tr>
                            </thead>
                            <tbody>`;
              $.each(response, function(index, item) {
                content += `<tr>
                                        <td>  ${item.status}  </td>
                                        <td>  ${item.jadwal}  </td>
                                        <td>  ${item.catatan}  </td>
                                    </tr>`;
              });
              content += '</tbody></table></div>';
              $riwayatContent.html(content);
              $riwayatRow.show();
            },
            error: function(xhr, status, error) {
              console.error('Error fetching riwayat:', error);
            }
          });
        }
      });
      return leads;
    }

    function bindTableEvents() {
      console.log("Binding table events");
      // Unbind any existing event handlers to prevent duplicate bindings
      $(document).off('click', '.edit-lead');
      $(document).off('click', '.save-lead');
      $(document).off('click', '.cancel-lead');

      // Bind new event handlers
      $(document).on('click', '.edit-lead', function() {
        console.log("Edit lead clicked");
        var $row = $(this).closest('tr');
        $row.find('td[contenteditable="false"]').prop('contenteditable', true);
        $row.find('.jadwal input.datepicker').prop('disabled', false).datepicker({
          format: 'dd mmmm yyyy',
          todayHighlight: true,
          language: 'id',
          // uiLibrary: 'bootstrap3',
          onSelect: function() {
            $(this).data('datepicker-selected', true);
          }
        });
        $row.find('.jadwal input.timepicker').prop('disabled', false).timepicker({
          mode: '24hr',
          onSelect: function() {
            $(this).data('timepicker-selected', true);
          }
        });
        $row.find('.tambah').addClass('hidden');
        $row.find('.riwayat').addClass('hidden');
        $row.find('.edit-lead').addClass('hidden');
        $row.find('.save-lead, .cancel-lead').removeClass('hidden');
        $row.find('.status-select').prop('disabled', false);
      });

      $(document).on('click', '.save-lead', function() {
        console.log("Save lead clicked");
        var $row = $(this).closest('tr');
        var idLead = $row.data('id');
        var perusahaan = $row.find('.perusahaan').text();
        var no_telp = $row.find('.no_telp').text();
        var status = $row.find('.status-select').val();
        var date = $row.find('.jadwal input.datepicker').val();
        var time = $row.find('.jadwal input.timepicker').val();
        var catatan = $row.find('.catatan').text();

        $.ajax({
          url: `<?= base_url() ?>api/supplier/updateDataLeadCRM/${idLead}`,
          type: "POST",
          headers: {
            Authorization: `Basic ${basicAuth}`
          },
          data: JSON.stringify({
            id: idLead,
            nama_perusahaan: perusahaan,
            no_telp: no_telp,
            status: status,
            jadwal: date, // Only send date part to the server
            catatan: catatan,
            waktu: `${time} WIB`
          }),
          contentType: "application/json",
          success: function(response) {
            console.log("Save success: ", response);
            $row.find('.tambah').removeClass('hidden');
            $row.find('.riwayat').removeClass('hidden');
            $row.find('.edit-lead').removeClass('hidden');
            $row.find('.save-lead, .cancel-lead').addClass('hidden');
            $row.find('td[contenteditable="true"]').prop('contenteditable', false);
            $row.find('.status-select').prop('disabled', true);
            $row.find('.jadwal input.datepicker').prop('disabled', true).datepicker("destroy"); // Destroy datepicker after save
            $row.find('.jadwal input.time-input').prop('disabled', true);
            $('#pagination-container').pagination('refresh');
            refreshDashboard();
            $row.find('.jadwal input.time-input').val(time + ' WIB');
          },
          error: function(xhr, status, error) {
            console.error("Save error: ", error);
          }
        });
      });

      $(document).on('click', '.cancel-lead', function() {
        console.log("Cancel lead clicked");
        var $row = $(this).closest('tr');
        $row.find('td[contenteditable="true"]').prop('contenteditable', false);
        $row.find('.tambah').removeClass('hidden');
        $row.find('.riwayat').removeClass('hidden');
        $row.find('.edit-lead').removeClass('hidden');
        $row.find('.save-lead, .cancel-lead').addClass('hidden');
        $row.find('.status-select').prop('disabled', true);
        $row.find('.jadwal input.datepicker').prop('disabled', true).datepicker("destroy"); // Destroy datepicker on cancel
        $row.find('.jadwal input.time-input').prop('disabled', true);
        $('#pagination-container').pagination('refresh');
      });
    }

    function refreshDashboard() {
      $.ajax({
        url: "<?= base_url('DashboardUserSupplier/getDonatChart') ?>",
        type: "GET",
        dataType: "JSON",
        data: {
          id_pengguna: id_pengguna
        },
        success: function(data) {
          GrafikDonat(data);
          updateKeterangan(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
        }
      });
    }

    function GrafikDonat(data) {
      const total = data['tanpa-status'] + data['sedang-dihubungi'] + data['proses-negosiasi'] + data['disetujui'] + data['ditolak'];
      const chartData = {
        datasets: [{
          data: [
            data['tanpa-status'],
            data['sedang-dihubungi'],
            data['proses-negosiasi'],
            data['disetujui'],
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

      const options = {
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
        animation: {
          animateScale: true,
          animateRotate: true
        },
        plugins: {
          datalabels: {
            display: true,
            align: 'center',
            anchor: 'center',
            formatter: (value, ctx) => {
              let percentage = (value / total * 100).toFixed(2) + "%";
              return percentage;
            },
            color: 'white',
            font: {
              weight: 'bold',
              size: 16
            }
          }
        }
      };

      const ctx = document.getElementById("grafikCRM").getContext("2d");

      if (window.myDoughnutChart) {
        window.myDoughnutChart.destroy();
      }

      window.myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: chartData,
        options: options
      });
    }

    function updateKeterangan(data) {
      $('#tanpa-status .crmstats-summary-number').text(data['tanpa-status']);
      $('#sedang-dihubungi .crmstats-summary-number').text(data['sedang-dihubungi']);
      $('#proses-negosiasi .crmstats-summary-number').text(data['proses-negosiasi']);
      $('#disetujui .crmstats-summary-number').text(data['disetujui']);
      $('#ditolak .crmstats-summary-number').text(data['ditolak']);
      $('.belum-lengkap').text(data['belum-lengkap']);
      $('.total-leads').text(data['total-leads']);
    }

    // Initial binding of table events
    bindTableEvents();
    // Add an event listener to the input field for searching
    $('#input-cari-tender').on('input', function() {
      var searchText = $(this).val().toLowerCase(); // Convert the search text to lowercase for case-insensitive search

      // Loop through each row of the table
      $('.data-lead-table').each(function() {
        // Check if the row should be searchable
        var isSearchable = $(this).data('searchable');

        if (isSearchable) {
          // Get the company name from the current row
          var companyName = $(this).find('.perusahaan').text().toLowerCase();
          if (companyName.includes(searchText)) {
            $(this).show();
          } else {
            $(this).hide();
          }
        }
      });
    });
    $('#select-status').on('change', function() {
      var selectedStatus = $(this).val();

      // Loop through each row of the table
      $('.data-lead-table').each(function() {
        var status = $(this).find('.status-select').val();
        if (selectedStatus === status || selectedStatus === "") {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });
</script>
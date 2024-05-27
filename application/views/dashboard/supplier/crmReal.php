<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">


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
    background-color: #ffeee6;
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
    <div class="row">
      <div class="col-4">
        <div class="grafikCRMContainer">
          <div class="chart2" style="margin:0; padding:0">
            <canvas id="grafikCRM" width="250" height="220"></canvas>
          </div>
        </div>
      </div>
      <!-- Keterangan -->
      <div class="col-3 pt-4">
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
    </div>
  </div>
</section>
<section class="bg-white">
  <div class="container" data-aos="fade_up">
    <div class="col-12" style="margin:0">
      <div class="row">
        <!-- <div class="col-lg-4">
          <div class="d-flex gap-2 justify-content-between border rounded-pill py-1 px-4">
            <img src="<?= base_url('assets\img\icon_filter_status.svg') ?>" width="20" alt="" class="">
            <strong class="my-auto">Status:</strong>
            <select name="" id="" class="form-select focus-ring p-0 bg-white">
              <option value="">All</option>
              <option value=" sedang_dihubungi">Sedang Dihubungi</option>
              <option value="proses_negosiasi">Proses Negosiasi</option>
              <option value="ditunda">Ditunda</option>
              <option value="disetujui">Disetujui</option>
              <option value="dibatalkan">Dibatalkan</option>
            </select>
          </div>
        </div> -->
        <div class="col-3 form-select-custom-status d-flex">
          <img src="<?= base_url('assets\img\icon_filter_status.svg') ?>" width="20" alt="">
          <h6 style="margin-right: 10px;color: var(--primary-red-500, #D21B1B);margin-bottom: 0px;align-self: center;padding-left: 5px;text-align: center;font-weight: bold;">Status :</h6>
          <select id="select-status" class="" style="border:none;outline:none;background:transparent;color: var(--primary-red-500, #D21B1B);">
            <option class="select-status-option" value="" selected>All</option>
            <option class="select-status-option" value="sedang_dihubungi">Sedang Dihubungi</option>
            <option class="select-status-option" value="proses_negosiasi">Proses Negosiasi</option>
            <option class="select-status-option" value="ditunda">Ditunda</option>
            <option class="select-status-option" value="disetujui">Disetujui</option>
            <option class="select-status-option" value="dibatalkan">Dibatalkan</option>
          </select>
        </div>

        <div class="col-4 form-select-custom d-flex ms-2" style="padding:5px 5px 5px 0px; margin-right:20px">
          <input id="input-cari-tender" type="text" class="form-input-custom" style="border:none;" placeholder="Cari nama perusahaan">
          <img class=" float-right" src="<?= base_url('assets\img\icon_search.svg') ?>" width="20" alt="" style="padding-right:5px">
        </div>
      </div>


    </div>

    <!-- </div> -->

    <!-- </div> -->
  </div>

  <div class="container wow fadeInUp" style="margin-top:10px">

    <div class="row">
      <div class="col">
        <div class="row table-responsive my-4">
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
      </div>
    </div>
    <div class="wow fadeInUp" id="pagination-container" data-wow-delay="0.5s"></div>
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
          dataSource: "<?= base_url() ?>api/supplier/getDataLeadCRM",
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
            function(xhr, settings) {
              const url = settings.url;
              const params = new URLSearchParams(url);
              let currentPageNum = params.get('pageNumber');
              currentPageNum = parseInt(currentPageNum);
              if (currentPageNum >= 2 && id_pengguna == null) {
                window.location.href = `${base_url}login`;
                return false;
              }

              $('#data-leads').html('<div class="d-flex justify-content-center my-2"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan tender terbaru...</span></div>');
            }
          },
          callback: function(data, pagination) {
            if (data != '') {
              currentPage = pagination.pageNumber;
              let html = setTableLeads(data);
              $('#data-leads').html(html);
            }
          }
        });
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });
    // function formatDate(date) {
    //   if (!date) return '';
    //   const d = new Date(date);
    //   const year = d.getFullYear();
    //   const month = String(d.getMonth() + 1).padStart(2, '0');
    //   const day = String(d.getDate()).padStart(2, '0');
    //   return `${year}-${month}-${day}`;
    // }
    function formatDate(date) {
      if (!date) return '';
      const d = new Date(date);
      const year = d.getFullYear();
      const month = String(d.getMonth() + 1).padStart(2, '0');
      const day = String(d.getDate()).padStart(2, '0');
      return `${year}-${month}-${day}`;
    }

    function formatTime(date) {
      if (!date) return '';
      const d = new Date(date);
      const hours = String(d.getHours()).padStart(2, '0');
      const minutes = String(d.getMinutes()).padStart(2, '0');
      return `${hours}:${minutes}`;
    }

    function setTableLeads(data) {
      var leads = "";
      $.each(data, function(index, value) {
        var rowNumber = (currentPage - 1) * itemsPerPage + index + 1;

        leads +=
          `<tr data-id="` + value.id + `">
          <td style="text-align:center">` + rowNumber + `</td>
          <td class="perusahaan" >` + (value.nama_perusahaan || '') + `</td>
          <td class="no_telp" >${value.no_telp || ''}</td>
          <td class="status" contenteditable="false">
          <select class="status-select" disabled>
            <option value="sedang-dihubungi" ${value.status === 'sedang-dihubungi' ? 'selected' : ''}>Sedang Dihubungi</option>
            <option value="proses-negosiasi" ${value.status === 'proses-negosiasi' ? 'selected' : ''}>Proses Negosiasi</option>
            <option value="ditunda" ${value.status === 'ditunda' ? 'selected' : ''}>Ditunda</option>
            <option value="disetujui" ${value.status === 'disetujui' ? 'selected' : ''}>Disetujui</option>
            <option value="dibatalkan" ${value.status === 'dibatalkan' ? 'selected' : ''}>Dibatalkan</option>
          </select>
          </td>
          <td class="jadwal" contenteditable="false">
              
          <input type="date" value="${formatDate(value.jadwal)}" disabled />
            </td>
          <td class="catatan" contenteditable="false">${value.catatan}</td>
          <td class="text-center">
          <div>
                    <a class="edit-lead" data-id="` + value.id + `"><img src="<?= base_url('assets/img/icon_edit_table.svg') ?>" style="width: 20px"></a>
                    <a class="tambah" data-id="` + value.id + `"><img src="<?= base_url('assets/img/icon_tambah_table.svg') ?>" style="width: 20px"></a>
                    <a class="riwayat" data-id="` + value.id + `"><img src="<?= base_url('assets/img/icon_riwayat_table.svg') ?>" style="width: 20px" ></a>
                    <a class="save-lead hidden" ><img src="<?= base_url('assets/img/icon_check_table.svg') ?>" style="width: 20px"></a>
              <a class="cancel-lead hidden" ><img src="<?= base_url('assets/img/icon_cancel_table.svg') ?>" style="width: 20px"></a>
                    </div>
              
              
          </td>
      </tr>`;
      });
      $("#data-leads").html(leads);
      $(".status-select").each(function() {
        var status = $(this).closest("tr").find(".status").text().trim(); // Get the status text and trim any leading/trailing whitespace
        $(this).val(status); // Set the selected value of the dropdown
      });

      // Event listener for edit icon click
      $(document).on('click', '.edit-lead', function() {
        var $row = $(this).closest('tr');
        $row.find('td[contenteditable="false"]').prop('contenteditable', true); // Enable inline editing
        $row.find('.jadwal input').prop('disabled', false);
        $row.find('.tambah').addClass('hidden');
        $row.find('.riwayat').addClass('hidden');
        $row.find('.edit-lead').addClass('hidden');
        $row.find('.save-lead, .cancel-lead').removeClass('hidden');
        $row.find('.status-select').prop('disabled', false);

      });


      // Event listener for save button click
      $(document).on('click', '.save-lead', function() {
        var $row = $(this).closest('tr');
        var idLead = $row.data('id');
        var rowData = {
          // Get the updated values from the table cells
          status: $row.find('.status-select').val(),
          jadwal: $row.find('.jadwal input').val(),
          catatan: $row.find('.catatan').text()
        };

        // Send AJAX request to update the lead data
        $.ajax({
          url: `<?= base_url() ?>api/supplier/updateDataLeadCRM/${idLead}`,
          type: 'POST',
          dataType: 'json', // Ensure the data is being sent in JSON format
          contentType: 'application/json', // Ensure the data is being sent in JSON format
          data: JSON.stringify(rowData), // Stringify the data object
          success: function(response) {
            console.log(response);
            console.log('Lead data updated successfully');
            $row.find('td[contenteditable="true"]').prop('contenteditable', false); // Disable inline editing
            $row.find('.save-lead, .cancel-lead').addClass('hidden'); // Hide save and cancel buttons
            $row.find('.status-select, .jadwal input').prop('disabled', true);
            $row.find('.edit-lead, .tambah, .riwayat').removeClass('hidden'); // Show the edit icon
          },
          error: function(xhr, status, error) {
            console.error('Error updating lead data:', error);
          }
        });
      });

      // Event listener for cancel button click
      $(document).on('click', '.cancel-lead', function() {
        var $row = $(this).closest('tr');
        $row.find('td[contenteditable="true"]').prop('contenteditable', false); // Disable inline editing
        $row.find('.save-lead, .cancel-lead').addClass('hidden'); // Hide save and cancel buttons
        $row.find('.jadwal input, .status-select').prop('disabled', true);
        $row.find('.edit-lead, .riwayat, .tambah').removeClass('hidden'); // Show the edit icon
      });

      return leads;
    }
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

    // function updateRiwayatPemenangChart(data) {
    //   var selectedYear = document.getElementById("tahunSelect").value;
    //   var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

    //   // Generate data for the selected year (mock data)
    //   var riwayatPemenangData = {
    //     labels: months,
    //     datasets: [{
    //       label: "Peserta Menang",
    //       backgroundColor: "rgba(75,192,192,0.4)",
    //       borderColor: "rgba(75,192,192,1)",
    //       // data: [65, 59, 80, 81, 56, 55, 40, 30, 20, 15, 10, 5], // Mock data, replace with actual data
    //       data: data,
    //     }]
    //   };

    //   // Update the chart with new data
    //   riwayatPemenangChart.data = riwayatPemenangData;
    //   riwayatPemenangChart.update();

    //   // Adjust canvas height to fit its container
    //   var containerHeight = document.getElementById("grafikRiwayatPemenang").parentNode.offsetHeight;
    //   document.getElementById("grafikRiwayatPemenang").style.height = containerHeight + "px";
    // }

    // Riwayat Peserta Menang Chart Options
    // var riwayatPemenangOptions = {
    //   responsive: true,
    //   maintainAspectRatio: false,
    // };

    // Animation options
    // var riwayatPemenangAnimation = {
    //   radius: {
    //     duration: 400,
    //     easing: 'linear',
    //     loop: (context) => context.active
    //   }
    // };


    // Create Riwayat Peserta Menang Chart
    // var riwayatPemenangChartCanvas = document.getElementById("grafikRiwayatPemenang").getContext("2d");
    // var riwayatPemenangChart = new Chart(riwayatPemenangChartCanvas, {
    //   type: 'line',
    //   data: {},
    //   // options: riwayatPemenangOptions,
    //   // plugins: [riwayatPemenangAnimation] // Include animation options here
    // });

    // Initial adjustment of canvas height
    // updateRiwayatPemenangChart();

    // Donat Chart status Leads
    // Data untuk chart
    function GrafikDonat(data) {
      var total = data['tanpa-status'] + data['sedang-dihubungi'] + data['proses-negosiasi'] + data['disetujui'] + data['ditolak'];
      var data = {

        // labels: ["Tanpa Status", "Sedang dihubungi", "Proses Negosiasi", "Disetujui", "Ditolak"],
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
      $("#disetujui .crmstats-summary-number").text(data['disetujui']);
      $("#ditolak .crmstats-summary-number").text(data['ditolak']);
    }
  });
</script>
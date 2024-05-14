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
    height: 60px !important;
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

  .custom-table-leads {
    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    border: 1px solid var(--neutral-100, #F0E2E2);
  }

  .shadow-sm {
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

  .custom-table-container {
    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    border: 1px solid var(--neutral-100, #F0E2E2);

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
</style>

<section class="bg-white pt-5 mt-5">
  <div class="container-lg d-flex justify-content-left align-items-left wow fadeInUp" data-wow-delay="0.1s">
    <h4 class="mb-0 wow fadeInUp">Hi <span class="fw-semibold nama-pengguna" style="color: #df3131;"></span>!<p class="pt-2">Siap Menawarkan Produkmu Hari Ini ?</p>
    </h4>
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
          <select id="select-status" class="" style="border:none;color: var(--primary-red-500, #D21B1B);">
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
        <div class="table-responsive">
          <table class="table custom-table-leads table-striped">
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
    // var filterElement = document.getElementById("input-cari-tender");
    const basicAuth = btoa("beetend" + ":" + "76oZ8XuILKys5");

    // function addAuthorizationHeader(xhr) {
    //   xhr.setRequestHeader("Authorization", "Basic " + basicAuth);
    // }
    // var status = this.value;
    // var button = document.getElementById('status-button');
    // if (status !== '') {
    //   button.textContent = 'Status: ' + status.charAt(0).toUpperCase() + status.slice(1);
    // } else {
    //   button.textContent = 'Status: All';
    // }
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
      // beforeSend: addAuthorizationHeader,
      success: function(data) {
        $('.belum-lengkap').html(data.data.jumlah);
        // $('.belum-lengkap').html(data.data.belum_lengkap);
        let belum = data.data.jumlah
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
          // beforeSend: addAuthorizationHeader,
          success: function(data) {
            // $('.total-leads').html(data.total_leads);
            $('.total-leads').html(data.data);
            let total = data.data

            let jumlah = total - belum
            $('.total').html(jumlah);
            // console.log(jumlah);
          }
        })
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    })
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
      // beforeSend: addAuthorizationHeader,
      success: function(data) {
        total_leads = data.data;

        $('#pagination-container').pagination({
          dataSource: "<?= base_url() ?>api/supplier/getLead",
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
            // beforeSend: addAuthorizationHeader,
            function(xhr, settings) {
              const url = settings.url
              const params = new URLSearchParams(url)
              let currentPageNum = params.get('pageNumber')
              currentPageNum = parseInt(currentPageNum)
              if (currentPageNum >= 2 && id_pengguna == null) {
                window.location.href = `${base_url}login`
                return false
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
        //   toastr.error('Terjadi masalah saat pengambilan data.', 'Kesalahan', opsi_toastr);
      }
    });

    function setTableLeads(data) {
      var leads = "";

      $.each(data, function(index, value) {
        var rowNumber = (currentPage - 1) * itemsPerPage + index + 1;
        var hasMultipleContacts = value.jumlah_kontak > 1 ? 'visible' : 'hidden';
        leads +=
          `<tr>
                    <td style="text-align:center">` + rowNumber + `</td>
                    <td class="perusahaan">` + (value.nama_perusahaan || '') + `</td>
                    <td>${value.no_telp || ''}<a href="tel:` + value.no_telp + `"><img class="custom-img-table float-right" src="<?= base_url('assets/img/icon_kontak_table.svg') ?>" width="20" alt="" style="" ></a></td>
                    <td>
                    <a class="d-flex justify-content-center border rounded-pill py-1 px-4" style="background-color: purple">Done</a>
                    </td>
                    <td>This Date</td>
                    <td>This Schedule</td>
                    <td class="text-center">
                    <div>
                    <a><img src="<?= base_url('assets/img/icon_edit_table.svg') ?>" style="width: 20px"><a/>
                    <a><img src="<?= base_url('assets/img/icon_tambah_table.svg') ?>"style="width: 20px"><a/>
                    <a><img src="<?= base_url('assets/img/icon_riwayat_table.svg') ?>"style="width: 20px"><a/>
                    
                    </div>
                    </td>
                    
                </tr>`;
      });

      $("#data-leads").html(leads);
      // console.log(leads);

      //get data kontak
      // $("#data-leads").on("click", ".contact", function() {
      //   var id_lead = $(this).data("id");
      //   $.ajax({
      //     url: "<?= site_url('DashboardUserSupplier/getKontakLeadById/') ?>" + id_lead,
      //     type: "GET",
      //     dataType: "json",
      //     success: function(data) {
      //       var kontak = "";

      //       $.each(data, function(index, value) {
      //         kontak +=
      //           `<tr>
      //                               <td>` + value.nama + `</td>
      //                               <td>` + value.posisi + `</td>
      //                               <td>` + value.email + `</td>
      //                               <td>` + value.no_telp + `</td>
      //                           </tr>`;
      //       });

      //       $("#infoKontakModal .data-kontak").html(kontak);
      //     },
      //     error: function() {
      //       alert("Terjadi kesalahan saat mengambil data kontak.");
      //     }
      //   });
      // });

      return leads;
    }
  });
</script>
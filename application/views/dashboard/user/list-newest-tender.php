<link href="<?= base_url() ?>assets/css/home/pagination.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

<style>
    .badge {
        font-size: var(--bs-body-font-size);
        font-weight: var(--bs-body-font-weight);
        padding: 6px 10px;
        border-radius: 7px 0 7px 0;
        white-space: break-spaces;
    }
    
    .badge-danger { background: var(--bs-red-primary); }
    
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
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='%23BF0C0C' stroke='%23BF0C0C00' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right .75rem center;
        background-size: 18px 18px;
    }

    .select2-container--bootstrap-5 .select2-selection {
        width: 100%;
        min-height: calc(2.3em + .75rem + 2px);
        /* padding: .375rem .75rem; */
        font-family: inherit;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #f0e2e2;
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
        left: 12px;
        top: 2px;
        z-index: 1000;
    }
    
    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 52px;
        user-select: none;
        -webkit-user-select: none;
    }
    
    .select2-container--bootstrap-5 .select2-selection--multiple .select2-selection__clear, .select2-container--bootstrap-5 .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        width: 7px;
        right: 31px;
        background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23BF0C0C'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") 50%/.75rem auto no-repeat;
    }
    
    .select2-container--bootstrap-5 { padding-right: 0; }
    
    .select2-sorting + .select2-container--bootstrap-5 {
        padding-right: 6px;
        padding-left: 0;
    }
    
    .select2-container--bootstrap-5 .select2-dropdown.select2-dropdown--below { width: 307px !important; }
    
    .select2-container--bootstrap-5 .select2-dropdown .select2-results__options .select2-results__option.select2-results__option--selected, .select2-container--bootstrap-5 .select2-dropdown .select2-results__options .select2-results__option[aria-selected=true]:not(.select2-results__option--highlighted) {
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
    
    .dropdown-sorting .dropdown-menu::after { top: -20px; }
    
    .dropdown-sorting .nav-link, .dropdown-sorting a.nav-link:focus, .dropdown-sorting a.nav-link:hover {
        padding: 12px 9px !important;
    }
    
    .dropdown-sorting .dropdown-toggle::after { display: none; }
    
    .paket { margin-block: 8px !important; }
    
    .rincian-paket tr { line-height: 1.4; }
    
    #pagination-container {
        margin-inline: 10px;
        margin-top: 15px !important;
    }
    
    .paginationjs.paginationjs-big .paginationjs-nav.J-paginationjs-nav {
        font-size: var(--bs-body-font-size) !important;
    }
    
    .paginationjs .paginationjs-pages { margin-top: -5px; }
    
    .paginationjs .paginationjs-pages li {
        border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
    }
</style>

<section class="bg-white pt-5 pb-3 mt-5">
    <div class="container-lg d-flex justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.1s">
        <img src="<?= base_url("assets/img/dashboard-hero.png")?>" width="90" alt="">
        <h4 class="mb-0 ms-2 wow fadeInUp">Selamat Datang, <span class="fw-semibold nama-pengguna" style="color: #df3131;"></span>!</h4>
    </div>
</section>

<section>
    <div class="container py-5" x-data="newestTender">
        <div class="row align-items-center rounded-3 bg-white shadow mx-0 my-3 wow fadeInUp" id="sec-set-preferensi" data-wow-delay="0.7s" style="display: none;">
            <div class="col-md-2 p-3 text-center text-md-end">
                <img src="<?= base_url("assets/img/rincian 2.png")?>" width="140" alt="">
            </div>
            <div class="col-md-8 p-3 text-center text-md-start">
                <h4 class="mb-2">Preferensi tender belum ditentukan!</h4>
                <p class="m-0">Hai <span class="fw-semibold nama-pengguna"></span>, Anda belum dapat melihat tender terbaru.<br>Lakukan pengaturan preferensi untuk mendapatkan informasi tender terbaru yang sesuai!</p>
            </div>
            <div class="col-md-2 p-3 text-center">
                <a href="<?= base_url() ?>preferensi" class="btn btn-danger m-1">Pengaturan</a>
            </div>
        </div>

        <div class="row align-items-center rounded-3 bg-white shadow mx-0 my-3 wow fadeInUp" id="sec-upgrade-paket" data-wow-delay="0.7s" style="display: none;">
            <div class="col-md-2 p-3 text-center text-md-end">
                <img src="<?= base_url("assets/img/rincian 2.png")?>" width="140" alt="">
            </div>
            <div class="col-md-8 p-3 text-center text-md-start">
                <h4 class="mb-2">Upgrade paket akun premium!</h4>
                <p class="m-0">Hai <span class="fw-semibold nama-pengguna"></span>, akun Anda saat ini berada pada paket standard.<br>Silakan upgrade akun Anda ke paket premium untuk melihat informasi tender terbaru!</p>
            </div>
            <div class="col-md-2 p-3 text-center">
                <a href="<?= base_url() ?>pricing_plan" class="btn btn-danger m-1">Upgrade</a>
            </div>
        </div>

        <div id="sec-tender-terbaru" style="display: none;">
            <div class="text-center mb-3">
                <h3 class="tender-title text-center wow fadeInUp d-inline-block px-3 pb-2" data-wow-delay="0.5s">Paket Tender</h3>
            </div>
            
            <div class="row wow fadeInUp justify-content-center mx-0 px-1 filter" data-wow-delay="0.5s">
                <input type="text" class="filter-item" id="keyword" placeholder="Kode Tender atau Nama Tender" style="padding: 0 14px;width: 30%;border: none;margin-left: 6px;">

                <select class="my-lg-2 my-1 select2-wilayah" id="wilayah" style="width: 25%;"></select>

                <select class="my-lg-2 my-1 select2-jenis-pengadaan" id="jenis-pengadaan" style="width: 25%;"></select>

                <div class="col-lg filter-item mx-1 my-lg-2 my-1" id="dropdownHPS" style="margin: 8px 12px !important;cursor: pointer;" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex px-lg-1 px-2">
                        <a class="col-lg-11 col-md-11 col-11 float-left text-start text-body">Nilai HPS</a>
                        <a class="col-lg-1 col-md-1 col-1 text-end" style="color: #bf0d0b;"><i class="bi bi-caret-down-fill"></i></a>
                    </div>
                </div>
                <ul class="dropdown-menu overflow-auto dropdownHPS" id="myDropdown3" style="max-height: 250px; width: 750px;" aria-labelledby="dropdownHPS">
                    <div class="row m-0 formset-hps justify-content-center">
                        <div class="col-12 text-center" style="border-bottom: 1px solid #ddd;">
                            <div class="form-check p-0">
                                <input class="form-check-input" style="float: none;" type="checkbox" id="checkallhps" name="checkallhps" checked>
                                <label class="form-check-label ps-1" for="checkallhps">Semua</label>
                                <div class="form-text mt-0 mb-2">Centang untuk menampilkan semua nilai HPS</div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <p class="my-3">Silakan atur rentang nilai HPS pada kolom di bawah ini:</p>
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
                                <div class="invalid-feedback">Nilai HPS akhir harus lebih besar!</div>
                            </div>
                        </div>
                    </div>
                </ul>
                
                <div class="dropdown dropdown-profile dropdown-sorting" style="width: 4%;padding-left: 0;padding-right: 7px;">
                    <a class="nav-link dropdown-toggle link-danger text-center p-2 rounded-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-filter-circle" style="font-size: 27px;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end my-2 py-2 rounded-3">
                        <li class="dropdown-item d-flex text-dropdown" data-sort="1">Nilai HPS Terendah</li>
                        <li class="dropdown-item d-flex text-dropdown" data-sort="2">Nilai HPS Tertinggi</li>
                        <li class="dropdown-item d-flex text-dropdown" data-sort="3">Akhir Pendaftaran Terdekat</li>
                        <li class="dropdown-item d-flex text-dropdown" data-sort="4">Akhir Pendaftaran Terlama</li>
                    </ul>
                </div>
            </div>
        
            <div class="row wow fadeInUp mx-0 my-2" id="list-paket" data-wow-delay="0.5s"></div>
            <div class="wow fadeInUp" id="pagination-container" data-wow-delay="0.5s"></div>
        </div>
    </div>
</section>

<script src="<?= base_url() ?>assets/js/home/pagination.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script>
    var keyword = '',
        jenis_pengadaan = '',
        hps_awal = 0,
        hps_akhir = 0,
        prov = '',
        kab = '',
        jum_tender, timer;
        
    $(document).ready(function() {
        $.ajax({
            url : "<?= base_url() ?>api/getPreferensiPengguna/"+id_pengguna,
            type: "GET",
			dataType: "JSON",
            success : function(data){
                if (data != null) {
                    $('#sec-set-preferensi').hide();
                    
                    setTimeout(function(){
                        let status = $('#status_user').val();
                        if (status == '0') {
                            $('#sec-upgrade-paket').show();
                            $('#sec-tender-terbaru').hide();
                        } else {
                            $('#sec-upgrade-paket').hide();
                            $('#sec-tender-terbaru').show();
                            
                            // filterTender();
                            
                            $.ajax({
                                url : "<?= base_url() ?>api/getJumKatalogTenderTerbaruByPengguna/"+id_pengguna,
                                type: "GET",
                    			dataType: "JSON",
                                success : function(data){
                                    jum_tender = data.jumlah;
                                    
                                    if (jum_tender > 0) {
                                        $('#pagination-container').pagination({
                                            dataSource: "<?= base_url() ?>api/getKatalogTenderTerbaruByPengguna/"+id_pengguna+"/"+jum_tender,
                                            locator: '',
                                            totalNumber: jum_tender,
                                            pageSize: 10,
                                            autoHidePrevious: true,
                                            autoHideNext: true,
                                            showNavigator: true,
                                            formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> tender terbaru',
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
                        
                                                    $('#list-paket').html('<div class="d-flex justify-content-center my-4"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan tender terbaru...</span></div>');
                                                }
                                            },
                                            callback: function(data, pagination) {
                                                if (data != '') {
                                                    let html = template(data);
                                                    $('#list-paket').html(html);
                                                }
                                            }
                                        });
                                    } else {
                                        $('#list-paket').html(`
                                            <div class="row align-items-center rounded-3 bg-white shadow my-3" style="width: 98.2%;margin-inline: 12px;">
                                                <div class="col-md-2 p-3 text-center">
                                                    <img src="<?= base_url("assets/img/rincian 2.png")?>" width="140" alt="">
                                                </div>
                                                <div class="col-md-10 p-3 text-center text-md-start">
                                                    <h4 class="mb-2">Tender terbaru kosong!</h4>
                                                    <p class="m-0">Tidak ada tender terbaru sesuai kata kunci yang Anda tentukan.<br>Silakan bisa coba atur ulang kata kunci pencarian Anda untuk mendapatkan informasi tender terbaru sesuai yang diharapkan!</p>
                                                </div>
                                            </div>
                                        `);
                                        
                                        $('#pagination-container').hide();
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown){}
                            });
                        }
                    }, 1000);
                } else $('#sec-set-preferensi').show();
            },
            error: function (jqXHR, textStatus, errorThrown){}
        });
	});

    function filterTender(sort='3') {
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
            url : "<?= base_url() ?>api/getJumKatalogTenderTerbaruByPengguna1",
            type: "POST",
            dataType: "JSON",
            data: params,
            success : function(data){
                jum_tender = data.jumlah;
                
                if (jum_tender > 0) {
                    $('#pagination-container').pagination({
                        dataSource: "<?= base_url() ?>api/getKatalogTenderTerbaruByPengguna1",
                        locator: '',
                        totalNumber: jum_tender,
                        pageSize: 10,
                        autoHidePrevious: true,
                        autoHideNext: true,
                        showNavigator: true,
                        formatNavigator: 'Menampilkan <span class="count-paket"><%= rangeStart %> - <%= rangeEnd %></span> dari <span class="count-paket"><%= totalNumber %></span> tender terbaru',
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
        
                                $('#list-paket').html('<div class="d-flex justify-content-center my-4"><div role="status" class="spinner-border text-danger"></div><span class="ms-2 pt-1">Menampilkan tender terbaru...</span></div>');
                            }
                        },
                        callback: function(data, pagination) {
                            if (data != '') {
                                let html = template(data);
                                $('#list-paket').html(html);
                            }
                        }
                    });
                } else {
                    $('#list-paket').html(`
                        <div class="row align-items-center rounded-3 bg-white shadow my-3" style="width: 98.2%;margin-inline: 12px;">
                            <div class="col-md-2 p-3 text-center">
                                <img src="<?= base_url("assets/img/rincian 2.png")?>" width="140" alt="">
                            </div>
                            <div class="col-md-10 p-3 text-center text-md-start">
                                <h4 class="mb-2">Tender terbaru kosong!</h4>
                                <p class="m-0">Tidak ada tender terbaru sesuai kata kunci yang Anda tentukan.<br>Silakan bisa coba atur ulang kata kunci pencarian Anda untuk mendapatkan informasi tender terbaru sesuai yang diharapkan!</p>
                            </div>
                        </div>
                    `);
                    
                    $('#pagination-container').hide();
                }
            },
            error: function (jqXHR, textStatus, errorThrown){}
        });
    }
    
    function template(data) {
        var tender = '';
        for (var i = 0; i <= data.length-1; i++) {
          let update_hari = data[i].update_hari;
          if (update_hari == 0) update_hari = 'Hari ini';
          else if (update_hari == 1) update_hari = 'Kemarin';
          else update_hari = update_hari + ' hari yang lalu';
          
          let akhir_daftar = new Date(data[i].akhir_daftar);
          let tgl = ('0'+akhir_daftar.getDate()).slice(-2);
          let bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
          let bln = bulan[akhir_daftar.getMonth()];
          let thn = akhir_daftar.getFullYear();
          let jam = ('0'+akhir_daftar.getHours()).slice(-2);
          let mnt = ('0'+akhir_daftar.getMinutes()).slice(-2);
          akhir_daftar = tgl+' '+bln+' '+thn+' '+jam+':'+mnt;
          
          tender += 
              `<div class="paket col-md-6 px-1 py-0">
                  <div class="p-card bg-white p-3 p-lg-4 rounded-4 border hover-scale">
                      <div class="d-flex align-items-center border-bottom pb-3">
                          <div class="d-flex flex-row align-items-center">
                              <img class="rounded-circle me-1" src="<?= base_url("assets/img/img-profile-default.png") ?>" width="45">
                          </div>
                          <div class="d-flex flex-row align-items-center">
                              <div class="profiles">
                                  <div class="ms-2">
                                      <a class="p-0" href="`+data[i].url+`"><h6>`+data[i].nama_lpse+`</h6></a>
                                      <span><i class="fas fa-calendar-alt me-1"></i>`+update_hari+`</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a class="p-0 nama-paket" href="#"><h5 title="`+data[i].nama_tender+`">`+data[i].nama_tender+`</h5></a>
                      <span class="badge badge-danger mb-3">`+data[i].jenis_tender+`</span>
                      <table class="rincian-paket" width="100%">
                          <tbody>
                              <tr>
                                  <td class="th">Kode Tender</td>
                                  <td>:</td>
                                  <td><strong>`+data[i].kode_tender+`</strong></td>
                              </tr>
                              <tr>
                                  <td class="th">Nilai HPS</td>
                                  <td>:</td>
                                  <td><div class="label label-success mb-0">`+formatRupiah(data[i].hps,'Rp')+`</div></td>
                              </tr>
                              <tr>
                                  <td class="th">Akhir Pendaftaran</td>
                                  <td>:</td>
                                  <td><div class="badge badge-akhirdaftar">`+akhir_daftar+`</div></td>
                              </tr>
                          </tbody>
                      </table>
                      <div class="d-flex justify-content-between mt-2">
                          <div></div>
                          <div class="link d-flex flex-row align-items-center">
                              <span><a class="btn btn-sm border btn-outline" href="${base_url}detail-tender/${data[i].kode_tender}" target="_blank"><i class="fas fa-info-circle me-1"></i>Detail Tender</a></span>
                          </div>
                      </div>
                  </div>
              </div>`;
        }
      
        return tender;
    }
    
    $('.dropdown-sorting .dropdown-item').on('click', function(){
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
    }).on('keyup',function(){
        hps_awal = $('#nilai_hps_awal').val();
        hps_akhir = $('#nilai_hps_akhir').val();
        
        if (parseInt(hps_akhir) < parseInt(hps_awal)) $('#nilai_hps_akhir').addClass('is-invalid');
        else {
            $('#nilai_hps_akhir').removeClass('is-invalid');
            filterTender();
        }
    });
    
    $('#keyword').on('keyup',function(){
        clearTimeout(timer);
        
        timer = setTimeout(function(){
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
            loadingMore: function () {
                return "<span>Menampilkan lainnya...</span>";
            },
            searching: function () {
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
                    jenis: '2',
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
    }).on('change', function(){
        let wilayah = $(this).val();
        
        if (wilayah != null) {
            if (wilayah.includes('00')) { prov = wilayah; kab = ''; }
            else { kab = wilayah; prov = ''; }
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
            loadingMore: function () {
                return "<span>Menampilkan lainnya...</span>";
            },
            searching: function () {
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
                    jenis: '2',
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
    }).on('change', function(){
        jenis_pengadaan = $(this).val();
        filterTender();
    });
</script>

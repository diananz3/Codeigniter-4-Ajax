<div class="container-fluid pt-5">
    <div class="text-right">
        <a id="tambah" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</a>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#importModal">Import Data</a>
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Potensi</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabel" class="table card-table table-vcenter text-nowrap datatable stripe hover">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Tipe Project</th>
                    <th class="text-center">Nama Cluster</th>
                    <th class="text-center">Tipe Cluster</th>
                    <th class="text-center">Area</th>
                    <th class="text-center">Kabupaten</th> 
                    <th class="text-center">Kecamatan</th> 
                    <th class="text-center">Kelurahan</th> 
                    <th class="text-center">OLT</th> 
                    <th class="text-center">Longitude & Latitude</th> 
                    <th class="text-center">Perizinan</th> 
                    <th class="text-center">Kompetitor</th> 
                    <th class="text-center">Lokal Operator</th> 
                    <th class="text-center">Tiang Listrik</th> 
                    <th class="text-center">Jumlah Rumah</th> 
                    <th class="text-center">Rumah Kosong</th> 
                    <th class="text-center">Fasil Umum</th> 
                    <th class="text-center">Rata-rata Daya</th> 
                    <th class="text-center">Anak Kecil</th> 
                    <th class="text-center">Kendaraan</th> 
                    <th class="text-center">Air Conditioner (AC)</th> 
                    <th class="text-center">Penggunaan Internet Untuk Bisnis</th> 
                    <th class="text-center">Jumlah Peminat Awal</th> 
                    <th class="text-center">Harga ICONNET Menurut Warga (1)</th> 
                    <th class="text-center">Penggunaan Internet (1)</th> 
                    <th class="text-center">Jumlah Perangkat / Rumah (1)</th> 
                    <th class="text-center">Alokasi Budget untuk Internet (1)</th> 
                    <th class="text-center">Sampling Minat (1)</th> 
                    <th class="text-center">Harga ICONNET Menurut Warga (2)</th> 
                    <th class="text-center">Penggunaan Internet (2)</th> 
                    <th class="text-center">Jumlah Perangkat / Rumah (2)</th> 
                    <th class="text-center">Alokasi Budget untuk Internet (2)</th> 
                    <th class="text-center">Sampling Minat (2)</th> 
                    <th class="text-center">Harga ICONNET Menurut Warga (3)</th>
                    <th class="text-center">Penggunaan Internet (3)</th>  
                    <th class="text-center">Jumlah Perangkat / Rumah (3)</th> 
                    <th class="text-center">Alokasi Budget untuk Internet (3)</th> 
                    <th class="text-center">Sampling Minat (3)</th> 
                    <th class="text-center">Jumlah FAT</th>
                    <th class="text-center">Daftar FAT</th> 
                    <th class="text-center">Keterangan</th> 
                    <th class="text-center">Nilai ROI</th> 
                    <th class="text-center">Score</th> 
                    <th class="text-center">Kelayakan</th> 
                    <th class="text-center">Status Drawing</th> 
                    <th class="text-center">Link Maps</th> 
                    <th class="text-center">Jumlah FAT Ploating</th> 
                    <th class="text-center">Home Pass</th> 
                    <th class="text-center">Aproval Pembangunan</th> 
                    <th class="text-center">No PA / Project</th> 
                    <th class="text-center">Status Pembangunan</th> 
                    <th class="text-center">Plan Pembangunan</th> 
                    <th class="text-center">Created Date</th> 
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tipe Project</th>
                    <th>Nama Cluster</th>
                    <th>Tipe Cluster</th>
                    <th>Area</th>
                    <th>Kabupaten</th> 
                    <th>Kecamatan</th> 
                    <th>Kelurahan</th> 
                    <th>OLT</th> 
                    <th>Longitude & Latitude</th> 
                    <th>Perizinan</th> 
                    <th>Kompetitor</th> 
                    <th>Lokal Operator</th> 
                    <th>Tiang Listrik</th> 
                    <th>Jumlah Rumah</th> 
                    <th>Rumah Kosong</th> 
                    <th>Fasil Umum</th> 
                    <th>Rata-rata Daya</th> 
                    <th>Anak Kecil</th> 
                    <th>Kendaraan</th> 
                    <th>Air Conditioner (AC)</th> 
                    <th>Penggunaan Internet Untuk Bisnis</th> 
                    <th>Jumlah Peminat Awal</th> 
                    <th>Harga ICONNET Menurut Warga (1)</th> 
                    <th>Penggunaan Internet (1)</th> 
                    <th>Jumlah Perangkat / Rumah (1)</th> 
                    <th>Alokasi Budget untuk Internet (1)</th> 
                    <th>Sampling Minat (1)</th> 
                    <th>Harga ICONNET Menurut Warga (2)</th> 
                    <th>Penggunaan Internet (2)</th> 
                    <th>Jumlah Perangkat / Rumah (2)</th> 
                    <th>Alokasi Budget untuk Internet (2)</th> 
                    <th>Sampling Minat (2)</th> 
                    <th>Harga ICONNET Menurut Warga (3)</th>
                    <th>Penggunaan Internet (3)</th>  
                    <th>Jumlah Perangkat / Rumah (3)</th> 
                    <th>Alokasi Budget untuk Internet (3)</th> 
                    <th>Sampling Minat (3)</th> 
                    <th>Jumlah FAT</th>
                    <th>Daftar FAT</th> 
                    <th>Keterangan</th> 
                    <th>Nilai ROI</th> 
                    <th>Score</th> 
                    <th>Kelayakan</th> 
                    <th>Status Drawing</th> 
                    <th>Link Maps</th> 
                    <th>Jumlah FAT Ploating</th> 
                    <th>Home Pass</th> 
                    <th>Aproval Pembangunan</th> 
                    <th>No PA / Project</th> 
                    <th>Status Pembangunan</th> 
                    <th>Plan Pembangunan</th> 
                    <th>Created Date</th> 
                    <th>Aksi</th>
                  </tr>
                </thead>

                    <!-- <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Nama Karyawan</th>
                            <th>Usia</th>
                            <th>Status Vaksin 1</th>
                            <th>Status Vaksin 2</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>

<!--   Modal Import CSV-->
<div class="modal modal-blur fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= site_url('/employee') ?>">
                    <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="file" class="form-control" accept=".csv" id="file" placeholder="Enter file" name="file" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--   Modal Tambah Data-->
<div class="modal modal-blur fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
         <form action="<?= route_to('add.employee'); ?>" method="post" id="add-employee-form" autocomplete="off">
          <div class="row">
            <div class="col-lg-12 mb-2">
              <h2>Informasi Cluster</h2>
              <div class="form-group">
                <label for="tp_project" class="col-form-label">Tipe Project</label>
                <select class="form-control form-select" id="sel_tp_project" name="tp_project">
                  <option style="color:#cbd5e1;" value="">---Pilih Tipe Project---</option>
                </select>
              </div>   
              <div class="form-group">
                  <label for="nama" class="col-form-label">Nama Cluster</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Cluster">
                  <span class="text-danger error-text nama"></span>
              </div>
              <div class="form-group">
                  <label for="tipe_cluster" class="col-form-label">Tipe Cluster</label>
                  <select class="form-control form-select" name="tipe_cluster">
                      <option value="">---Pilih Tipe Cluster---</option>
                  </select>
                  <span class="text-danger error-text tipe_cluster_error"></span>
              </div>
              <div class="form-group">
                  <label for="area" class="col-form-label">Area</label>
                  <select class="form-control form-select" id="sel_area" name="area">
                      <option value="">---Pilih Area---</option>
                      <option value="1">SURABAYA</option>
                      <option value="2">MALANG</option>
                      <option value="3">MADIUN</option>
                      <option value="4">JEMBER</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="kota" class="col-form-label">Kabupaten/Kota</label>
                  <select class="form-control form-select" id="sel_kota" name="kota">
                    <option value="">---Pilih Kabupaten/Kota---</option>
                  </select>
              </div>                        
              <div class="form-group">
                  <label for="kecamatan" class="col-form-label">Kecamatan</label>
                  <select class="form-control form-select" id="sel_kec" name="kec">
                    <option value="">---Pilih Kecamatan---</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="desa" class="col-form-label">Desa/Kelurahan</label>
                  <select class="form-control form-select" id="sel_desa" name="desa">
                    <option value="">---Pilih Desa/Kelurahan---</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="olt" class="col-form-label">OLT</label>
                  <select class="form-control form-select" name="olt">
                      <option value="">---Pilih OLT---</option>
                  </select>
                  <span class="text-danger error-text olt_error"></span>
              </div>
              <div class="form-group">
                  <label for="ll" class="col-form-label">Longitude & Latitude</label>
                  <input type="text" class="form-control" id="ll" name="ll" placeholder="Longitude & Latitude">
                  <span class="text-danger error-text ll_error"></span>
              </div>
              <h2 class="pt-4">Survey Secara Umum</h2>
              <div class="form-group">
                  <label for="izin" class="col-form-label">Perizinan</label>
                  <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="izin" id="izin1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Mudah</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="izin" id="izin2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Sulit</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="kompetitor" class="col-form-label">Kompetitor</label>
                  <input type="number" class="form-control" id="kompetitor" name="kompetitor" min="0" max="10">
                  <span class="text-danger error-text kompetitor_error"></span>
              </div>
              <div class="form-group">
                <label for="operator" class="col-form-label">Lokal Operator</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="operator" id="operator1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="operator" id="operator2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="operator" class="col-form-label">Tiang Listrik</label>
                <div class="row">
                  <div class="col-lg-6  ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="tiang" id="tiang1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6  ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="tiang" id="tiang2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="jml_rumah" class="col-form-label">Jumlah Rumah</label>
                  <input type="number" class="form-control" id="jml_rumah" name="jml-rumah" step="50" min="0" max="1000">
                  <span class="text-danger error-text jml_rumah_error"></span>
              </div>
              <div class="form-group">
                  <label for="rmh_kosong" class="col-form-label">Rumah Kosong</label>
                  <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="rmh_kosong" id="rmh_kosong1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Sedikit <10</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="rmh_kosong" id="rmh_kosong2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Banyak >10</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <!-- Fasilitas umum -->
              <div class="form-group">
                <label for="fasil" class="col-form-label">Fasilitas Umum</label>
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="fasil" id="fasil1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="fasil" id="fasil2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="daya" class="col-form-label">Rata-rata Daya</label>
                  <select class="form-control form-select" name="daya">
                      <option value="">---Pilih Rata-rata Daya---</option>
                  </select>
                  <span class="text-danger error-text daya_error"></span>
              </div>
            <div class="form-group">
                <label for="anak" class="col-form-label">Anak Kecil</label>
                <div class="row">
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="anak" id="anak1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span></span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="anak" id="anak2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="kendaraan" class="col-form-label">Kendaraan</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="kendaraan" id="kendaraan1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Mobil</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="kendaraan" id="kendaraan2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Motor</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="AC" class="col-form-label">Air Conditioner</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="ac" id="ac1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="ac" id="ac2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="bisnis" class="col-form-label">Penggunaan Internet Untuk Bisnis</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="bisnis" id="bisnis1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="bisnis" id="bisnis2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak ada</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="peminat" class="col-form-label">Jumlah Peminat Awal</label>
                  <input type="number" class="form-control" id="peminat" name="peminat" min="0" max="1000">
                  <span class="text-danger error-text peminat_error"></span>
              </div>
              <h2 class="pt-4">Survey Sampling Warga 1</h2>
              <div class="form-group">
                  <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga</label>
                  <select class="form-control form-select" name="harga">
                      <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                  </select>
                  <span class="text-danger error-text harga_error"></span>
              </div>
              <div class="form-group">
                  <label for="internet" class="col-form-label">Penggunaan Internet</label>
                  <select class="form-control form-select" name="internet">
                      <option value="">---Pilih Penggunaan Internet---</option>
                  </select>
                  <span class="text-danger error-text internet_error"></span>
              </div>
              <div class="form-group">
                  <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                  <input type="number" class="form-control" id="perangkat" name="perangkat" min="0" max="1000">
                  <span class="text-danger error-text perangkat_error"></span>
              </div>
              <div class="form-group">
                  <label for="budget" class="col-form-label">Alokasi Budget untuk Internet</label>
                  <select class="form-control form-select" name="budget">
                      <option value="">---Pilih Alokasi Budget---</option>
                  </select>
                  <span class="text-danger error-text budget_error"></span>
              </div>
              <div class="form-group">
                  <label for="minat" class="col-form-label">Sampling Minat</label>
                  <select class="form-control form-select" name="minat">
                      <option value="">---Pilih Sampling Minat---</option>
                  </select>
                  <span class="text-danger error-text minat_error"></span>
              </div>
              <h2 class="pt-4">Survey Sampling Warga 2</h2>
              <div class="form-group">
                  <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga</label>
                  <select class="form-control form-select" name="harga">
                      <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                  </select>
                  <span class="text-danger error-text harga_error"></span>
              </div>
              <div class="form-group">
                  <label for="internet" class="col-form-label">Penggunaan Internet</label>
                  <select class="form-control form-select" name="internet">
                      <option value="">---Pilih Penggunaan Internet---</option>
                  </select>
                  <span class="text-danger error-text internet_error"></span>
              </div>
              <div class="form-group">
                  <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                  <input type="number" class="form-control" id="perangkat2" name="perangkat2" min="0" max="1000">
                  <span class="text-danger error-text perangkat_error"></span>
              </div>
              <div class="form-group">
                  <label for="budget" class="col-form-label">Alokasi Budget untuk Internet</label>
                  <select class="form-control form-select" name="budget">
                      <option value="">---Pilih Alokasi Budget---</option>
                  </select>
                  <span class="text-danger error-text budget_error"></span>
              </div>
              <div class="form-group">
                  <label for="minat" class="col-form-label">Sampling Minat</label>
                  <select class="form-control form-select" name="minat">
                      <option value="">---Pilih Sampling Minat---</option>
                  </select>
                  <span class="text-danger error-text minat_error"></span>
              </div>
              <h2 class="pt-4">Survey Sampling Warga 3</h2>
              <div class="form-group">
                  <label for="harga" class="col-form-label">Harga ICONNET Menurut Warga</label>
                  <select class="form-control form-select" name="harga">
                      <option value="">---Pilih Harga ICONNET Menurut Warga---</option>
                  </select>
                  <span class="text-danger error-text harga_error"></span>
              </div>
              <div class="form-group">
                  <label for="internet" class="col-form-label">Penggunaan Internet</label>
                  <select class="form-control form-select" name="internet">
                      <option value="">---Pilih Penggunaan Internet---</option>
                  </select>
                  <span class="text-danger error-text internet_error"></span>
              </div>
              <div class="form-group">
                  <label for="perangkat" class="col-form-label">Jumlah Perangkat / Rumah</label>
                  <input type="number" class="form-control" id="perangkat3" name="perangkat3" min="0" max="1000">
                  <span class="text-danger error-text perangkat_error"></span>
              </div>
              <div class="form-group">
                  <label for="budget" class="col-form-label">Alokasi Budget untuk Internet</label>
                  <select class="form-control form-select" name="budget">
                      <option value="">---Pilih Alokasi Budget---</option>
                  </select>
                  <span class="text-danger error-text budget_error"></span>
              </div>
              <div class="form-group">
                  <label for="minat" class="col-form-label">Sampling Minat</label>
                  <select class="form-control form-select" name="minat">
                      <option value="">---Pilih Sampling Minat---</option>
                  </select>
                  <span class="text-danger error-text minat_error"></span>
              </div>
              <h2 class="pt-4">Informasi Tambahan</h2>
              <div class="form-group">
                  <label for="fat" class="col-form-label">Jumlah FAT</label>
                  <input type="number" class="form-control" id="fat" name="fat" min="0" max="1000">
                  <span class="text-danger error-text fat_error"></span>
              </div>
              <div class="form-group">
                  <label for="daftar_fat" class="col-form-label">Daftar FAT</label>
                  <textarea name="daftar_fat" id="daftar_fat" cols="57" rows="4"></textarea>
                  <span class="text-danger error-text daftar_fat_error"></span>
              </div>
              <div class="form-group">
                  <label for="ket" class="col-form-label">Keterangan</label>
                  <textarea name="ket" id="ket" cols="57" rows="4"></textarea>
                  <span class="text-danger error-text ket_error"></span>
              </div>
              <h2 class="pt-4">Penilaian</h2>
              <div class="form-group">
                  <label for="roi" class="col-form-label">Nilai ROI</label>
                  <input type="number" class="form-control" id="roi" name="roi" step="0.1" min="0" max="100">
                  <span class="text-danger error-text roi_error"></span>
              </div>
              <div class="form-group">
                  <label for="score" class="col-form-label">Score</label>
                  <input type="number" class="form-control" id="score" name="score" min="0" max="100">
                  <span class="text-danger error-text score_error"></span>
              </div>
              <div class="form-group">
                <label for="layak" class="col-form-label">Kelayakan</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="layak" id="layak1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Layak</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="layak" id="layak2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Layak</span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <h2 class="pt-4">Pembangunan</h2>
              <div class="form-group">
                  <label for="drawing" class="col-form-label">Status Drawing</label>
                  <select class="form-control form-select" name="drawing">
                      <option value="">---Pilih Status Drawing---</option>
                  </select>
                  <span class="text-danger error-text drawing_error"></span>
              </div>
              <div class="form-group">
                  <label for="score" class="col-form-label">Link Maps</label>
                  <input type="text" class="form-control" id="maps" name="maps">
                  <span class="text-danger error-text score_error"></span>
              </div>
              <div class="form-group">
                  <label for="ploating" class="col-form-label">Jumlah FAT Ploating</label>
                  <input type="number" class="form-control" id="ploating" name="ploating" min="0" max="60">
                  <span class="text-danger error-text ploating_error"></span>
              </div>
              <div class="form-group">
                  <label for="home_pass" class="col-form-label">Home Pass</label>
                  <input type="number" class="form-control" id="home_pass" name="home_pass" min="0" max="512">
                  <span class="text-danger error-text home_pass_error"></span>
              </div>
              <div class="form-group">
                <label for="approval" class="col-form-label">Approval Pembangunan</label>
                <div class="row">
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="approval" id="approval1" value="1" class="form-selectgroup-input" >
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Setuju</span>
                        </div>
                      </div>
                    </label>
                  </div>
                  <div class="col-lg-6 ">
                    <label class="form-selectgroup-item flex-fill">
                      <input type="radio" name="approval" id="approval2" value="0" class="form-selectgroup-input">
                      <div class="form-selectgroup-label d-flex align-items-center">
                        <div class="me-4">
                          <span class="form-selectgroup-check"></span>
                        </div>
                        <div>
                          <span>Tidak Setuju </span>
                        </div>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="planbangun" class="col-form-label">Plan Pembangunan</label>
                <div class="input-icon mb-2">
                  <input class="form-control"  name="planbangun" placeholder="Select a date" id="datepicker-icon" value="2022-06-20"/>
                  <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
                  </span>
                </div>
              </div>
              <div class="form-group">
                  <label for="no_pa" class="form-label">No PA/Project</label>
                  <input type="text" class="form-control" id="no_pa" name="no_pa">
                  <span class="text-danger error-text no_pa_error"></span>
              </div>
              <div class="form-group">
                  <label for="stts_pembangunan" class="col-form-label">Status Pembangunan</label>
                  <select class="form-control form-select" name="stts_pembangunan">
                      <option value="">---Pilih Status Pembangunan---</option>
                  </select>
                  <span class="text-danger error-text stts_pembangunan_error"></span>
              </div>
              
            </div>
          </div> 
       
        </div>
        <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="btn-save">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Data -->
<div class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="#" method="post" autocomplete="off">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_id">
                    <input type="hidden" id="alamat">
                    <div class="form-group">
                        <label for="nama_karyawan" class="col-form-label">Nama Karyawan</label>
                        <input type="text" class="form-control nama_karyawan" id="nama_karyawan_edit" name="nama_karyawan" placeholder="Nama harus diisi">
                        <span id="error_nama" class="text-danger"></span>
                        <span class="text-danger error-text nama_karyawan_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="usia" class="col-form-label">Usia</label>
                        <input type="number" class="form-control usia" id="usia_edit" name="usia" placeholder="Usia harus diisi">
                        <span id="error_usia" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="status_vaksin_1" class="col-form-label">Status Vaksin 1</label>
                        <select class="form-control form-select status_vaksin_1" id="status_vaksin_1_edit">
                            <option value="">---Pilih Status Vaksin---</option>
                            <option value="belum">Belum Vaksin</option>
                            <option value="sudah">Sudah Vaksin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status_vaksin_2" class="col-form-label">Status Vaksin 2</label>
                        <select class="form-control form-select status_vaksin_2" id="status_vaksin_2_edit">
                            <option value="">---Pilih Status Vaksin---</option>
                            <option value="belum">Belum Vaksin</option>
                            <option value="sudah">Sudah Vaksin</option>
                        </select>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 mb-2">
                        <div class="form-group">
                            <label for="prov" class="col-form-label">Provinsi</label>
                            <input type="text" class="form-control prov" id="prov_edit" name="prov" readonly >
                          <span id="error_nama" class="text-danger"></span>
                            <span class="text-danger error-text prov_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="kota" class="col-form-label">Kabupaten/Kota</label>
                            <input type="text" class="form-control kota" id="kota_edit" name="kota" readonly >
                            <span id="error_kota" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="kec" class="col-form-label">Kecamatan</label>
                            <input type="text" class="form-control kec" id="kec_edit" name="kec" readonly >
                          <span id="error_nama" class="text-danger"></span>
                            <span class="text-danger error-text kec_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="desa" class="col-form-label">Desa/Kelurahan</label>
                            <input type="text" class="form-control desa" id="desa_edit" name="desa" readonly>
                            <span id="error_desa" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-2">
                        <div class="form-group">
                            <label for="provinsi" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_prov_edit" name="prov">
                                <option value="">---Pilih provinsi---</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kota" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_kota_edit" name="kota">
                              <option value="">---Pilih Kabupaten/Kota---</option>
                            </select>
                        </div>                        
                        <div class="form-group">
                            <label for="kecamatan" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_kec_edit" name="kec">
                              <option value="">---Pilih Kecamatan---</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desa" class="col-form-label">&nbsp</label>
                            <select class="form-control form-select" id="sel_desa_edit" name="desa">
                              <option value="">---Pilih Desa/Kelurahan---</option>
                            </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>



<!-- DATATABLES SCRIPT -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/4.6.3/papaparse.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
<!-- --- -->

<!-- KALENDER -->
<script type="text/javascript" src="Assets/js/litepicker.js"></script>
<script>
  // @formatter:off
  document.addEventListener("DOMContentLoaded", function () {
    window.Litepicker && (new Litepicker({
    element: document.getElementById('datepicker-icon'),
    buttonText: {
      previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
      nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
    },
    }));
  });
  // @formatter:on
</script>

<script>
  $(document).ready(function() {

    $('#add-employee-form').submit(function(e) {
      e.preventDefault();
      var form = this;
      $.ajax({
        url: $(form).attr('action'),
        method: $(form).attr('method'),
        data: new FormData(form),
        processData: false,
        dataType: 'json',
        contentType: false,
        beforeSend: function() {
          $(form).find('span.error-text').text('');
        },
        success: function(data) {

          if ($.isEmptyObject(data.error)) {
            if (data.code == 1) {
              $(form)[0].reset();
              $('#exampleModal').modal('hide');
              Swal.fire(
                'Berhasil!',
                'Data karyawan berhasil ditambahkan.',
                'success'
              )
              $('#tabel').DataTable().ajax.reload(null, false);
            } else {
              // Swal.fire(
              //   'Gagal',
              //   'Semua data harus diisi',
              //   'error'
              // );
            }
          } else {
            $.each(data.error, function(prefix, val) {
              $(form).find('span.' + prefix + '_error').text(val);
            });

          }
        }
      });
    });

    //PILIH KOTA, KEC, DESA
    $("#tambah").click(function(){
        // setelah pilih provinsi
        $('#sel_prov').change(function(){
            var prov = $(this).val(); //id prov dari data
        // AJAX request
            $.ajax({
                url:'employee/getKota',
                method: 'post',
                data: {prov: prov},
                dataType: 'json',
                success: function(response){
                // Remove options 
                    $('#sel_kec').find('option').not(':first').remove();
                    $('#sel_kota').find('option').not(':first').remove();
                    $('#sel_desa').find('option').not(':first').remove();
                // Add options
                    $.each(response,function(index,data){
                        $('#sel_kota').append('<option value="'+data['id_kota']+'">'+data['kota']+'</option>');
                    });
                }
            });
        });
        // Setelah pilih kota
        $('#sel_kota').change(function(){
            var kota = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getKecamatan',
                method: 'post',
                data: {kota: kota},
                dataType: 'json',
                success: function(response){
                // Remove options
                    $('#sel_kec').find('option').not(':first').remove();
                    $('#sel_desa').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_kec').append('<option value="'+data['id_kec']+'">'+data['kec']+'</option>');
                    });
                }
            });
        });

        //Setelah pilih kecamatan
        $('#sel_kec').change(function(){
            var kec = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getDesa',
                method: 'post',
                data: {kec: kec},
                dataType: 'json',
                success: function(response){
                // 
                $('#sel_desa').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_desa').append('<option value="'+data['id_desa']+'">'+data['desa']+'</option>');
                    });
                }
            });
        });
    });
    //END!!!! PILIH KOTA, KEC, DESA

    $('#tabel thead:nth-child(2) th').each(function(i) {
      var title = $('#tabel thead:nth-child(2) th').eq($(this).index()).text();
      $(this).html('<input type="text" class="form-control input-sm" placeholder="' + title + '" data-index="' + i + '" />');
    });

    var table = $('#tabel').DataTable({
      // orderCellsTop: true,
      fixedHeader: false,
      scrollY: "600px",
      'autoWidth': false,
      'scrollX': true,
      scrollCollapse: true,
      fixedColumns: true,
      "processing": true,
      "serverSide": true,
      "ajax": "getAllData",
      "dom": "lBfrtp",
      buttons: [
        // {
          // extend: "collection",
          // text: "Export",
          // buttons: [
            {
              extend: 'csv',
              text: "Export CSV",
              // exportOptions: {
              //   columns: [0,1,2,3,4,5,6,7,8,9]
              // },
            },
            {
              extend: 'excel',
              text: "Export Excel",
              // exportOptions: {
              //   columns: [0,1,2,3,4,5,6,7,8]
              // },
            }
          // ]
        // }
      ],
      stateSave: true,
      info: true,
      "iDisplayLength": 5,
      "pageLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "fnCreatedRow": function(row, data, index) {
        $('td', row).eq(0).html(index + 1);
      },
      "columnDefs": [{
        "width": "10%",
        "targets": 0
      }]
    });
    // table.column( 9 ).visible( false );

    // Filter event handler
    $(table.table().container()).on('keyup', 'thead:nth-child(2) input', function() {
      table
        .column($(this).data('index'))
        .search(this.value)
        .draw();
    });

    $(document).on('click', '.btn-edit', function(e) {
      e.preventDefault();
      // var edit_id = $(this).closest('tr').find('.krywn_id').text();
      var edit_id = $(this).attr('data-id');
      $.ajax({
        method: "post",
        url: "employee/edit",
        data: {
          'edit_id': edit_id
        },
        success: function(response) {
          $.each(response, function(key, value) {
            $('#sel_kec_edit').find('option').not(':first').remove();
            $('#sel_kota_edit').find('option').not(':first').remove();
            $('#sel_desa_edit').find('option').not(':first').remove();
            // $('#sel_prov_edit').find('option').not(':first').remove();
            
            $('#edit_id').val(value['id']);
            $('#alamat').val(value['alamat']);
            $('#nama_karyawan_edit').val(value['nama_karyawan']);
            $('#usia_edit').val(value['usia']);
            $('#status_vaksin_1_edit').val(value['status_vaksin_1']);
            $('#status_vaksin_2_edit').val(value['status_vaksin_2']);
            $('#prov_edit').val(value['prov']);
            $('#kota_edit').val(value['kota']);
            $('#kec_edit').val(value['kec']);
            $('#desa_edit').val(value['desa']);
            $('#editModal').modal('show');
          });
        }
      });
      
      // setelah pilih provinsi
      $('#sel_prov_edit').change(function(){
            var prov = $(this).val(); //id prov dari data
        // AJAX request
            $.ajax({
                url:'employee/getKota',
                method: 'post',
                data: {prov: prov},
                dataType: 'json',
                success: function(response){
                // Remove options 
                    $('#sel_kec_edit').find('option').not(':first').remove();
                    $('#sel_kota_edit').find('option').not(':first').remove();
                    $('#sel_desa_edit').find('option').not(':first').remove();
                // Add options
                    $.each(response,function(index,data){
                        $('#sel_kota_edit').append('<option value="'+data['id_kota']+'">'+data['kota']+'</option>');
                    });
                }
            });
        });
        // Setelah pilih kota
        $('#sel_kota_edit').change(function(){
            var kota = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getKecamatan',
                method: 'post',
                data: {kota: kota},
                dataType: 'json',
                success: function(response){
                // Remove options
                    $('#sel_kec_edit').find('option').not(':first').remove();
                    $('#sel_desa_edit').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_kec_edit').append('<option value="'+data['id_kec']+'">'+data['kec']+'</option>');
                    });
                }
            });
        });

        //Setelah pilih kecamatan
        $('#sel_kec_edit').change(function(){
            var kec = $(this).val();
            // AJAX request
            $.ajax({
                url:'employee/getDesa',
                method: 'post',
                data: {kec: kec},
                dataType: 'json',
                success: function(response){
                // 
                $('#sel_desa_edit').find('option').not(':first').remove();
                    // Add options
                    $.each(response,function(index,data){
                        $('#sel_desa_edit').append('<option value="'+data['id_desa']+'">'+data['desa']+'</option>');
                    });
                }
            });
        });
      e.preventDefault();
    });

    $(document).on('click', '.btn-update', function(e) {
      e.preventDefault();
      // var id = $(this).attr('data-id');
      // var prov = $('#sel_prov_edit').val();
      // if (prov != "") {
        var data1 = {
          'edit_id': $('#edit_id').val(),
          'nama_karyawan': $('#nama_karyawan_edit').val(),
          'usia': $('#usia_edit').val(),
          'status_vaksin_1': $('#status_vaksin_1_edit').val(),
          'status_vaksin_2': $('#status_vaksin_2_edit').val(),
          'alamat' : $('#sel_desa_edit').val()
        };
      // } else {
      //   var data = {
      //     'edit_id': $('#edit_id').val(),
      //     'nama_karyawan': $('#nama_karyawan_edit').val(),
      //     'usia': $('#usia_edit').val(),
      //     'status_vaksin_1': $('#status_vaksin_1_edit').val(),
      //     'status_vaksin_2': $('#status_vaksin_2_edit').val(),
      //     'desa' : $('#desa_edit').val(),
      //   }
      // }
      var data2 = {
        'edit_id': $('#edit_id').val(),
        'nama_karyawan': $('#nama_karyawan_edit').val(),
        'usia': $('#usia_edit').val(),
        'status_vaksin_1': $('#status_vaksin_1_edit').val(),
        'status_vaksin_2': $('#status_vaksin_2_edit').val(),
        'alamat' : $('#alamat').val(),
      };
      var id_kota = $('#sel_desa_edit').val();
      $.ajax({
        method: "post",
        url: "employee/update",
        data: (id_kota != "") ? data1 : data2,
        success: function(response) {
          if (response.status == "Data berhasil diupdate") {
            $('#editModal').modal('hide');
            // $('#tableData').html("");
            // display();
            $('#tabel').DataTable().ajax.reload(null, false);

            swal.fire("Berhasil", response.status, "success");
          } else {
            swal.fire("Gagal", response.status, "error");
          }
        }
      });
      e.preventDefault();
    });

    $(document).on('click', '#deleteEmployeeBtn', function() {
      var employee_id = $(this).data('id');
      var url = "<?= route_to('delete.employee'); ?>";

      swal.fire({

        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'

      }).then(function(result) {
        if (result.value) {

          $.post(url, {
            employee_id: employee_id
          }, function(data) {
            if (data.code == 1) {
              Swal.fire(
                'Deleted!',
                'Data karyawan berhasil dihapus.',
                'success'
              )
              $('#tabel').DataTable().ajax.reload(null, false);
            } else {
              alert(data.msg);
            }
          }, 'json');
        }
      });
    });


    $(document).on('click', '.btn-ubah', function(e) {
      e.preventDefault();
      // var id = $(this).attr('data-id');
      var data = {
        'edit_user': $('#edit_prof').val(),
        'user_name': $('#name').val(),
        'user_password': $('#password1').val(),
        'user_password': $('#password2').val(),
      };
      $.ajax({
        method: "post",
        url: "profile/update",
        data: data,
        success: function(response) {
          if (response.status == "Data berhasil diupdate") {
            // $('#editModal').modal('hide');
            // $('#tableData').html("");
            // display();
            $('#tabel').DataTable().ajax.reload(null, false);

            swal.fire("Berhasil", "profil berhasil diubah", "success");
          } else {
            swal.fire("Gagal", "profil gagal diubah", "error");
          }
        }
      });
      e.preventDefault();
    });

  });
</script>




<!-- buat simpan aja -->
<!-- <div>
    <form action="base url bala bla bla ?>" method="post" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <div class="mb-3">
                <input type="file" name="file" class="form-control" id="file">
            </div>
        </div>
        <div class="d-grid">
            <input type="submit" name="submit" value="Upload" class="btn btn-dark" />
        </div>
    </form>
</div> -->
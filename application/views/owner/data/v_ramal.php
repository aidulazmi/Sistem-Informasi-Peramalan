 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Prediksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Prediksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
               <h3>Prediksi Penjualan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url('C_owner/trend_projection')?>" method="GET">
                <div class="card-body">
                  
                  <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control" name="produk">
                          <?php                                
                              foreach ($user as $row) {  
                              echo "<option value='".$row->id_barang."'>".$row->nama_barang."</option>";
                              }
                            ?>
                        </select>
                  </div>
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>Dari Bulan</label>
                        <select class="form-control" name="start_month">
                          <option>Januari</option>
                        </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>Dari Tahun</label>
                        <select class="form-control" name="start_year">
                          <option>2018</option>
                        </select>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>Sampai Bulan</label>
                        <select class="form-control" name="end_month">
                         <option value="1">Januari</option>
                         <option value="2" selected="selected">Februari</option>
                         <option value="3">Maret</option>
                         <option value="4">April</option>
                         <option value="5">Mei</option>
                         <option value="6">Juni</option>
                         <option value="7">Juli</option>
                         <option value="8">Agustus</option>
                         <option value="9">September</option>
                         <option value="10">Oktober</option>
                         <option value="11">November</option>
                         <option value="12">Desember</option>
                        </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>Sampai Tahun</label>
                        <select class="form-control" name="end_year">
                          <option value="2030">2030</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019" selected >2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                        </select>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group" >
                        <label>Ramalan Bulan</label>
                        <select class="form-control" name="end_month_2">
                          <option value="1">Januari</option>
                         <option value="2" selected="selected">Februari</option>
                         <option value="3">Maret</option>
                         <option value="4">April</option>
                         <option value="5">Mei</option>
                         <option value="6">Juni</option>
                         <option value="7">Juli</option>
                         <option value="8">Agustus</option>
                         <option value="9">September</option>
                         <option value="10">Oktober</option>
                         <option value="11">November</option>
                         <option value="12">Desember</option>
                        </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>Ramalan Tahun</label>
                        <select class="form-control" name="end_year_2">
  <option value="2030">2030</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019" selected >2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>                        <option>Ramalan Tahun</option>
                        </select>
                  </div>
                  </div>
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Prediksi</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
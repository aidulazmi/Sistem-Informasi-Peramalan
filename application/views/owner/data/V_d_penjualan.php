 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penjualan</li>
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
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fas fa-file-import"> </i>   
                    Data Penjualan</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Stock</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; foreach($user as $u){ echo ''; $i++; ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $u->nama_barang ?></td>
                    <td>
                       <?php
                      $x =$u->bulan;
                      if ($x == '1' ) 
                          echo 'Januari';
                        elseif($x == '2' ){
                           echo 'Februari';
                        }elseif($x == '3' ){
                           echo 'Maret';
                        }elseif($x == '4' ){
                           echo 'April';
                        }elseif($x == '5' ){
                           echo 'Mei';
                        }elseif($x == '6' ){
                           echo 'Juni';
                        }elseif($x == '7' ){
                           echo 'Juli';
                        }elseif($x == '8' ){
                           echo 'Agustus';
                        }elseif($x == '9' ){
                           echo 'September';
                        }elseif($x == '10' ){
                           echo 'Oktober';
                        }elseif($x == '11' ){
                           echo 'November';
                        }elseif($x == '12' ){
                           echo 'Desember';
                        }
                        else
                        {
                          echo '<span class="badge badge-danger">Belum Ada Bulan</span>';
                        }
                      ?></td>
                    <td><?php echo $u->tahun ?></td>
                    <td><?php echo $u->stock ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Stock</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
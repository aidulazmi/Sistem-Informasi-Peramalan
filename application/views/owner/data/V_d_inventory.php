 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Inventory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Inventory</li>
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
                    Tambah Data Inventory</button>
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
                    <th>Action</th>
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
                    <td>
                    
                     <a class="btn btn-info btn-sm" href="<?php echo site_url('C_owner/edit_inventory/'.$u->id_inventory);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Ubah
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_owner/hapus_inventory/'.$u->id_inventory);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a>
                   
                      
                    </td>
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
                    <th>Action</th>
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


    <!-- Tambah Barang-->
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Inventory</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo site_url('C_owner/simpan_inventory')?>" method="POST">
                <div class="card-body">

                <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control" name="id_barang" id="id_barang">
                          <option value="Nama Barang Tidak diketahui" selected>Silahkan Isi Nama Barang</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_barang."'>".$row->nama_barang."</option>";
                              }
                            ?>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Bulan</label>
                        <select class="form-control" name="bulan" id="bulan">
                          <option value="1" selected>Silahkan Pilih Bulan</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
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
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tahun" name="tahun" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Jumlah Stock" name="stock" required>
                  </div>
                  
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
              <button type="Submit" name="Simpan" class="btn btn-outline-light">Simpan</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->
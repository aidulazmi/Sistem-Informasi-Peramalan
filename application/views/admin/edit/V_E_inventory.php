 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Inventory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Inventory</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Inventory</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('c_admin/update_inventory')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kode Barang" value="<?php echo $u->id_inventory ?>" name="id_inventory" required>
                  </div>
                  <div class="form-group">
                        <label>Nama Barang</label>
                        <select class="form-control" name="id_barang" id="id_barang">
                          <option value="<?php echo $u->id_inventory ?>"><?php echo $u->id_inventory ?></option>
                          <option value="<?php echo $u->id_inventory ?>">Silahkan Isi Nama Barang</option>
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
                          <option value="<?php echo $u->bulan ?>" selected><?php echo $u->bulan ?></option>
                          <option value="<?php echo $u->bulan ?>">Silahkan Pilih Bulan</option>
                          <option value="1">Januari (1)</option>
                          <option value="2">Februari (2)</option>
                          <option value="3">Maret(3)</option>
                          <option value="4">April(4)</option>
                          <option value="5">Mei(5)</option>
                          <option value="6">Juni(6)</option>
                          <option value="7">Juli(7)</option>
                          <option value="8">Agustus(8)</option>
                          <option value="9">September(9)</option>
                          <option value="10">Oktober(10)</option>
                          <option value="11">November(11)</option>
                          <option value="12">Desember(12)</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Tahun" value="<?php echo $u->tahun ?>" name="tahun" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Jumlah Stock" value="<?php echo $u->stock ?>" name="stock" required>
                  </div>
                  
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
              </form>
               <?php } ?>
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>
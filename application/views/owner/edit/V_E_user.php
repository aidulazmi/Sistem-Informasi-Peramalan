 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Ubah Data User</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form action="<?php echo site_url('C_owner/update_user')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Kode Barang" value="<?php echo $u->id_user ?>" name="id_user" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username" value="<?php echo $u->username ?>" name="username" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" value="<?php echo $u->email ?>" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Password" value="<?php echo $u->password ?>" name="password" required>
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status" id="status">
                          <option value="<?php echo $u->status ?>" selected><?php echo $u->status ?></option>
                          <option value="kasir">Hati-Hati Dalam Memilih Status</option>
                          <option value="kasir">Kasir</option>
                          <option value="admin">Admin</option>
                        </select>
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
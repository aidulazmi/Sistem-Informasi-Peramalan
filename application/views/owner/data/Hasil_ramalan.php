 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Ramalan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ramalan</li>
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
              <h3>Hasil Ramalan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Periode X</th>
                    <th>Penjualan Y</th>
                    <th>X^2</th>
                    <th>XY</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Periode X</th>
                    <th>Penjualan Y</th>
                    <th>X^2</th>
                    <th>XY</th>
                    </td>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Bulan</th>
                    <th>Periode X</th>
                    <th>Penjualan Y</th>
                    <th>X^2</th>
                    <th>XY</th>

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
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3>Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                   <tr>
                            <td><b>x</b></td>
                            <td>x</td>
                            <td><?php echo $result->next_x ?></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><b>a</b></td>
                            <td> &Sigma;y / n </td>
                            <td><?php echo $result->_y." / ". $_n ?></td>
                            <td><?php echo $result->_y / $_n ?></td>
                          </tr>
                          <tr>
                            <td><b>b</b></td>
                            <td> &Sigma;xy / &Sigma;x^2 </td>
                            <td><?php echo $result->_xy ." / ". $result->_xx?></td>
                            <td><?php echo $result->_xy / $result->_xx?></td>
                          </tr>
                          <tr>
                            <td><b>y`</b></td>
                            <td> a + b(x)</td>
                            <td><?php echo ( $result->_y / $_n ) ." + ". ( $result->_xy / $result->_xx ) . " * " . $result->next_x  ?></td>
                            <td><?php echo $_y_accent = ( $result->_y / $_n ) + ( $result->_xy / $result->_xx * $result->next_x ) ?></td>
                          </tr>
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
      <textarea style="display:none" id="data_real" >
        <?php echo json_encode( $data_real) ; ?>
</textarea>
<textarea style="display:none" id="data_x" >
        <?php echo json_encode( $data_x) ; ?>
</textarea>

<textarea style="display:none" id="data_prediction" >
        <?php echo json_encode( $data_prediction) ; ?>
</textarea>
    </section>
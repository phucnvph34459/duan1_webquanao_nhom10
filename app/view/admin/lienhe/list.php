
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách liên hệ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách liên hệ</li>
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
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID liên hệ</th>
                    <th>Họ tên</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>id khách hàng</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                         foreach ($listlienhe as $lh) {
                            extract($lh);
                            $xoabv= "index.php?act=xoalh&idlh=".$id_lienhe;
                            $suabv= "index.php?act=sualh&idlh=".$id_lienhe;
                            echo '
                                <tr>
                                        <td>'.$id_lienhe.'</td>
                                        <td>'.$ho_ten.'</td>
                                        <td>'.$dia_chi.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$so_dt.'</td>
                                        <th>i'.$id_khachhang.'</th>
                                        <td><a href="'.$xoabv.'"><input type="button" value="Sửa" name="" id=""></a>
                                        <a href="'.$suabv.'"><input type="button" value="Xóa" name="" id=""></a>
                                        </td>
                                </tr>'; }
                  ?>
                  </tbody>
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
  <!-- /.content-wrapper -->



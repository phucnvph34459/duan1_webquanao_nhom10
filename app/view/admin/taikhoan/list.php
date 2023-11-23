
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách tài khoản</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách tài khoản</li>
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
                    <th>ID khách hàng</th>
                    <th>Tên tài khoản</th>
                    <th>Mật khẩu</th>
                    <th>Họ tên</th>
                    <th>Năm sinh</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Chức vụ</th>
                  </tr>
                  </thead>
                  <?php 
                  foreach( $listkhachhang as $khach_hang){
                    extract($khach_hang);
                    $suatk="index.php?act=suatk&id_khachhang=".$id_khachhang;
                    $xoatk="index.php?act=xoatk&id_khachhang=".$id_khachhang;
                 echo' <tbody>
                  <tr>
                    <td>'.$id_khachhang.'</td>
                    <td>'.$tai_khoan.'</td>
                    <td>'.$mat_khau.'</td>
                    <td>'.$ho_ten.'</td>
                    <td>'.$nam_sinh.'</td>
                    <td>'.$dia_chi.'</td>
                    <td>'.$email.'</td>
                    <td>'.$so_dt.'</td>
                    <td>'.$vai_tro.'</td>
                    <td><a href="'. $suatk.'"><input type="button" value="Sửa" name="" id=""></a>
                    <a href="'.$xoatk.'"><input type="button" value="Xóa" name="" id=""></a>
                    </td>
                  </tr>
                  </tbody>';

                  }
                 
                  ?>
                 
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




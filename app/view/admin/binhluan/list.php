<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách bình luận</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách bình luận</li>
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
                    <th>ID bình luận</th>
                    <th>Nội dung bình luận</th>
                    <th>Ngày bình luận</th>
                    <th>Đánh giá</th>
                    <th>id khách hàng</th>
                    <th>id sản phẩm</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php 
                  foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $xoabl="index.php?act=xoabl&idbl=".$id_binh_luan;
                    echo ' <tbody>
                    <td>'.$id_binh_luan.'</td>
                    <td>'.$noi_dung.'</td>
                    <td>'.$ngay_binh_luan.'</td>
                    <td>'.$danh_gia.'</td>
                    <td>'.$id_khachhang.'</td>
                    <td>'.$id_sanpham.'</td>
                    <td>
                    <a href="'.$xoabl.'"><input type="button" value="Xóa" name=""></a>
                    </td>
                    </tr>
                  </tbody>';
                  }?>
                  </tr>
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
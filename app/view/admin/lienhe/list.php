
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
                    <th>id khách hàng</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                         foreach ($listlienhe as $lh) {
                            extract($lh);
                            $xoalh= "index.php?act=xoalh&idlh=".$id_lienhe;
                            $sualh= "index.php?act=sualh&idlh=".$id_lienhe;
                            echo '
                                <tr>
                                        <td>'.$id_lienhe.'</td>
                                        <td>'.$ho_ten.'</td>
                                        <td>'.$dia_chi.'</td>
                                        <td>'.$noi_dung.'</td>
                                        <th>'.$id_khachhang.'</th>
                                        <td>
                                        <a href="'.$xoalh.'"><input type="button" value="Xóa" name="" id=""></a>
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
      <div class="card-footer clearfix">
               <a href="index.php?act=addlh"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm liên hệ</button></a> 
              </div>
            </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
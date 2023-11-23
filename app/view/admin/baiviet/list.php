
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách bài viết</li>
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
                    <th>ID bài viết</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($listbaiviet as $bai_viet) {
                      extract($bai_viet);
                      $xoabv= "index.php?act=xoabv&idbv=".$id_baiviet;
                      $suabv= "index.php?act=suabv&idbv=".$id_baiviet;
                      echo '
                      <tr>
                      <td>'.$id_baiviet.'</td>
                      <td>'.$tieu_de.'</td>
                      <td>'.$noi_dung.'</td>
                      <td>'.$ngay_dang.'</td>
                      <td>'.$trang_thai.'</td>
                      <td>
                      <a href="'.$suabv.'"><input type="button" value="Sửa" name="" id=""></a>
                      <a href="'.$xoabv.'"><input type="button" value="Xóa" name="" id=""></a>
                      </td>
                    </tr>
                      ' ;
                    }
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
      <div class="card-footer clearfix">
               <a href="index.php?act=addbv"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm bài viết</button></a> 
              </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



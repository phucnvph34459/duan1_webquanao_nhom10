
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card-footer clearfix">
     
     <a href="index.php?act=adddm"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm danh mục</button></a> 
    </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <?php 
                  foreach($listdanhmuc as $danh_muc){
                    extract($danh_muc);
                    $suadm="index.php?act=suadm&iddm=".$iddm;
                    $xoadm="index.php?act=xoadm&iddm=".$iddm;
                    echo ' <tbody>
                  <tr>
                    <td>'.$iddm.'</td>
                    <td>'.$ten_danhmuc.'</td>
                    <td>'.$mo_ta.'</td>
                    <td>'.$trang_thai.'</td>
                    <td><a href="'.$suadm.'"><input type="button" value="Sửa" name="" id=""></a>
                    <a href="'.$xoadm.'"><input type="button" value="Xóa" name="" id=""></a>
                    </td>
                  </tr>
                  </tbody>
';
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
      <div class="card-footer clearfix">
               <a href="index.php?act=adddm"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm danh mục</button></a> 
              </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




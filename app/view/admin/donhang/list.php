
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách đơn hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách đơn hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card-footer clearfix">
     
     <a href="index.php?act=listdh"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm đơn hàng</button></a> 
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
                    <th>ID đơn hàng </th>
                    <th>Khách hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <?php 
                  foreach($listdonhang as $don_hang){
                    extract($don_hang);
                    $suadh="index.php?act=suadh&id=".$id_donhang;
                    $xoadh="index.php?act=xoadm&id=".$id_donhang;
                    echo ' <tbody>
                  <tr>
                    <td>'.$id_donhang.'</td>
                    <td>'.$id_khachhang.'</td>
                    <td>'.$ngay_dathang.'</td>
                    <td>'.$trang_thai.'</td>
                    <td><a href="'.$suadh.'"><input type="button" value="Sửa" name="" id=""></a>
                    <a href="'.$xoadh.'"><input type="button" value="Xóa" name="" id=""></a>
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
               <a href="index.php?act=addd"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm đơn hàng</button></a> 
              </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




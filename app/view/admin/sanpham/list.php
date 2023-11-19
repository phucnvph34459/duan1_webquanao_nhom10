
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh sách sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Danh sách sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card-footer clearfix">
     
     <a href="index.php?act=addsp"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm sản phẩm</button></a> 
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
                    <th>ID sản phâm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th>Số lương</th>
                    <th>lượt xem</th>
                    <th>iddm</th>
                  </tr>
                  </thead>
                  <?php 
                  foreach($listsanpham as $san_pham){
                    extract($san_pham);
                    $suasp="index.php?act=suasp&id=".$id_sanpham;
                    $xoasp="index.php?act=xoasp&id=".$id_sanpham;
                    $hinhpath="../upload/".$hinh_anh;
                    if(is_file($hinhpath)){
                      $hinh_anh="<img src='".$hinhpath."' height='80'>";
                    }else{
                      $hinh="no photo";
                    }
                    echo ' <tbody>
                  <tr>
                    <td>'.$id_sanpham.'</td>
                    <td>'.$name.'</td>
                    <td>'.$gia.'</td>
                    <td>'.$hinh_anh.'</td>
                    <td>'.$mo_ta.'</td>
                    <td>'.$so_luong.'</td>
                    <td>'.$luot_xem.'</td>
                    <td>'.$iddm.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="Sửa" name="" id=""></a>
                    <a href="'.$xoasp.'"><input type="button" value="Xóa" name="" id=""></a>
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
        
               <a href="index.php?act=addsp"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Thêm sản phẩm</button></a> 
              </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<?php
if(is_array($dm)){
  extract($dm);
}
?>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Horizontal Form -->
 <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php?act=updatedm" method="POST">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mã loại</label>
                    <input type="text" name="maloai" class="form-control" id="inputEmail3" placeholder="Nhập vào mã loại" value="<?php if(isset($iddm)&&($iddm!="")) echo $iddm ;?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên loại</label>
                    <input type="text" name="tenloai" class="form-control" id="inputEmail3" placeholder="Nhập vào tên loại"  value="<?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc ;?>" >
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái</label>
                    <input type="text" name="trang_thai" class="form-control" id="inputEmail3" placeholder="Nhập vào trạng thái">
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                    <textarea name="mota" id="" cols="400" rows="10"></textarea>
                  </div>
                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="id" value="<?php if(isset($iddm)&&($iddm>0)) echo $iddm ;?>" >
                <a href="index.php?act=listdm"><input  type="button" value="DANH SÁCH"></a>
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                  <input type="submit" value="CẬP NHẬP" name='capnhat'>
                </div>
                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    
 
     <!-- END HEADER -->

       
    </div>
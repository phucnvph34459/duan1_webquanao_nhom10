<?php
if(is_array($lh)){
  extract($lh);
}
?>
 
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập liên hệ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập liên hệ</li>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mã lh</label>
                    <input type="text" name="ma_lienhe" class="form-control" id="inputEmail3" placeholder="Nhập vào mã lh " value="<?php if(isset($idlh)&&($idlh!="")) echo $idlh ;?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nội dung</label>
                    <input type="text" name="noi_dung" class="form-control" id="inputEmail3" placeholder="Nhập vào nội dung"  value="<?php if(isset($ten_lienhe)&&($ten_lienhe!="")) echo $ten_lienhe ;?>" >
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái</label>
                    <input type="text" name="trang_thai" class="form-control" id="inputEmail3" placeholder="Nhập vào trạng thái">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mã Kh</label>
                    <input type="text" name="ma_khachhang" class="form-control" id="inputEmail3" placeholder="Nhập vào mã kh " value="<?php if(isset($idlh)&&($idlh!="")) echo $idlh ;?>">
                  </div>
                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="id" value="<?php if(isset($idlh)&&($idlh>0)) echo $idlh ;?>" >
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
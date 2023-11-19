<?php
if(is_array($tk)){
    extract($tk);
}
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập khách hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập khách hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Horizontal Form -->
 <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php?act=updatetk" method="POST">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên tài khoản</label>
                    <input type="text" name="tai_khoan" class="form-control" id="inputEmail3" placeholder="Nhập vào " value="<?php if(isset($tai_khoan)&&($tai_khoan!="")) echo $tai_khoan ;?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mật khẩu</label>
                    <input type="password" name="mat_khau" class="form-control" id="inputEmail3" placeholder="Nhập vào "  value="<?php if(isset($mat_khau)&&($mat_khau!="")) echo $mat_khau ;?>" >
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
                    <input type="text" name="ho_ten" class="form-control" id="inputEmail3" placeholder="Nhập vào"  value="<?php if(isset($ho_ten)&&($ho_ten!="")) echo $ho_ten ;?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Năm sinh</label>
                    <input type="date" name="nam_sinh" class="form-control" id="inputEmail3" placeholder="Nhập vào " >
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" id="inputEmail3" placeholder="Nhập vào " >
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Nhập vào " value="<?php if(isset($email)&&($email!="")) echo $email ;?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <input type="text" name="so_dt" class="form-control" id="inputEmail3" placeholder="Nhập vào " >
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vai trò</label>
                    <input type="text" name="vai_tro" class="form-control" id="inputEmail3" placeholder="Nhập vào " >
                  </div>
                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="id_khachhang" value="<?=$id_khachhang?>" >
                <a href="index.php?act=listkh"><input  type="button" value="DANH SÁCH"></a>
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
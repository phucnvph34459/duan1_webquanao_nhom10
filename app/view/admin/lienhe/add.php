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
              <form class="form-horizontal" action="index.php?act=addlh" method="POST">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Họ tên</label>
                    <input type="text" name="ho_ten" class="form-control" id="inputEmail3" placeholder="Nhập họ tên" >
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ </label>
                    <input type="text" name="dia_chi" class="form-control" id="inputEmail3" placeholder="Nhập địa chỉ " >
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nội dung</label>
                    <input type="text" name="noi_dung" class="form-control" id="inputEmail3" placeholder="Nhập nội dung">
                  </div>
                  <div class="form-group row">
                    Khách hàng <br>
                    <select name="id_khachhang" id="">
                      <option value=""></option>
                      <?php
                          foreach($listkhachhang as $kh){
                              extract($kh);
                              echo '<option value="'.$id_khachhang.'">'.$ho_ten.'-'.$so_dt.'</option>';
                          }
                      ?>
                    </select>
                  </div>
                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="id" value="" >
                <a href="index.php?act=listlh"><input  type="button" value="DANH SÁCH"></a>
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                  <input type="submit" value="Thêm mới" name='themmoi'>
                </div>
                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    
 
     <!-- END HEADER -->

       
    </div>
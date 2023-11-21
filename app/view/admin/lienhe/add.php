
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới liên hệ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Thêm mới liên hệ</li>
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
                  
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Nội dung</label>
                    <input type="text" name="noi_dung" class="form-control" id="inputEmail3" placeholder="Nhập vào ND ">
                    
                    
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái</label>
                    <input type="text" name="trang_thai" class="form-control" id="inputEmail3" placeholder="Nhập vào trạng thái">
                   
                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Mã liên hệ</label>
                    <select name="id_khachhang">
                        <option value="0">Thông tin khách hàng</option>
                        <?php
                        foreach($listkhachhang as $khachhang){
                            extract($khachhang);
                            echo '<option value="'.$id_khachhang.'">'.$ho_ten.'-'.$so_dt.'</option>';
                        }
                        ?>
                    </select>
                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">

                <a href="index.php?act=listlh"><input  type="button" value="DANH SÁCH"></a>
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                  <input type="submit" value="THÊM MỚI" name='themmoi'>
                </div>
                <?php if(isset($thongbao)&&($thongbao!="")) echo $thongbao; ?>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    
 
     <!-- END HEADER -->

       
    </div>
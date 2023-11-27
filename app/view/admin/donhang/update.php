<?php
if(is_array($listdonhang) ){
  extract($listdonhang);
}
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Horizontal Form -->
 <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row2 mb10 form_content_container">
                <label> Danh mục </label> <br>
                <select name="iddm" id="" style="float:left;">
                <?php
                foreach($listdanhmuc as $danh_muc){
                  extract($danh_muc);
                  echo '<option value="'.$iddm.'">'.$ten_danhmuc.'</option>';
                }
                ?>
                
                </select>
                <br>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control" id="inputEmail3" value="<?php $name ?>">
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">giá sản phẩm</label>
                    <input type="text" name="gia" class="form-control" id="inputEmail3" placeholder="Nhập vào giá sản phẩm">
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Hình ảnh</label>
                    <input type="file" name="hinh">
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                    <textarea name="mo_ta" id="" cols="400" rows="10"></textarea>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Số lượng</label>
                    <input type="text" name="so_luong" class="form-control" id="inputEmail3" placeholder="Nhập vào số lượng">
                  </div>
                </div>
               
                <!-- /.card-body -->
                <div class="card-footer">

                <a href="index.php?act=listsp"><input  type="button" value="DANH SÁCH"></a>
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
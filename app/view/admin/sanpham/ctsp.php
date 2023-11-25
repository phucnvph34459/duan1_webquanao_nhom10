<?php
if(is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$hinh_anh;
if(is_file($hinhpath)){
  $hinh_anh="<img src='".$hinhpath."' height='80'>";
}else{
  $hinh="no photo";
}
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chi tiết sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Horizontal Form -->
 <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php?act=ctsp" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row2 mb10 form_content_container">
               
            </div>
            <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh mục</label>
                    <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($listdanhmuc as $key=>$value){
                        if($iddm==$value['iddm']){
                            echo '<option value="'.$value['iddm'].'" selected>'.$value['ten_danhmuc'].'</option>' ;
                        }else{
                            echo '<option value="'.$value['iddm'].'">'.$value['ten_danhmuc'].'</option>' ;
                        }

                    }
                    ?>
                </select>
                  </div>
            <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                    <?php if(isset($name)&&($name!="")) echo $name ;?>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">giá sản phẩm</label>
                <?php if(isset($gia)&&($gia!="")) echo $gia ;?>
                  </div>
                   <div class="form-group row">
                    Hình ảnh<br>

                    <?=$hinh_anh?>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                     <?php if(isset($mo_ta)&&($mo_ta!="")) echo $mo_ta ;?>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Số lượng</label>
                    <?php if(isset($so_luong)&&($so_luong!="")) echo $so_luong ;?>
                  </div>
                </div>  
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                <a href="index.php?act=listsp"><input  type="button" value="Trở về"></a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    
 
     <!-- END HEADER -->

       
    </div>
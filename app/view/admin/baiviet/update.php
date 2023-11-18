<?php
  if(is_array($bv)){
    extract($bv);
  }
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Horizontal Form -->
 <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php?act=addbv" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tiêu đề</label>
                    <div class="col-sm-10">
                      <input type="Text" class="form-control" id="inputEmail3" placeholder="Tiêu đề bài viết" value="<?=$tieu_de?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nội dung</label>
                    <textarea name="mota" id="" cols="400" rows="10"><?=$noi_dung?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày đăng</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Ngày đăng" value="<?=$ngay_dang?>">
                    </div>
                  </div>
                  <div class="form-group row"></div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Trạng thái</label>
                    <input type="text" name="trang_thai" class="form-control" id="inputEmail3" placeholder="Nhập vào trạng thái" value="<?=$trang_thai?>">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="id_baiviet" <?=$id_baiviet?>>
                <a href="index.php?act=listbv"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Cập nhập</button></a> 
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    
 
     <!-- END HEADER -->

       
    </div>
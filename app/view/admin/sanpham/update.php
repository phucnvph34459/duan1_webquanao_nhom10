<?php
 include "home.php";
 
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cập nhập sản phẩm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Cập nhập sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Horizontal Form -->
 <div class="card card-info">
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="index.php?act=suasp" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group row">
                   <label>Danh mục</label><br>
                   <div class="col-sm-10" style="margin-left: 200px;">
                     <select name="" id="">
                    <option value="1">Áo</option>
                    <option value="2">Quần</option>
                   </select>
                    </div>   
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                    <div class="col-sm-10">
                      <input type="Text" class="form-control" id="inputEmail3" placeholder="Tên sản phẩm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Giá sản phẩm</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Giá sản phẩm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ảnh sản phẩm</label>
                    <div class="col-sm-10">
                      <input type="file" name="hinh" placeholder="nhập vào hình ảnh">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                    <textarea name="mota" id="" cols="400" rows="10"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a href="index.php?act=listsp"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Cập nhật</button></a> 
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

    
 
     <!-- END HEADER -->

       
    </div>
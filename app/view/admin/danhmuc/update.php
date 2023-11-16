
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
              <form class="form-horizontal" action="index.php?act=suadm" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mã loại</label>
                    <div class="col-sm-10">
                      <input type="Mã loại" class="form-control" id="inputEmail3" placeholder="Mã loại">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh mục</label>
                    <div class="col-sm-10">
                      <input type="Tên danh mục" class="form-control" id="inputEmail3" placeholder="tên danh mục">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mô tả</label>
                    <textarea name="mota" id="" cols="400" rows="10"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a href="index.php?act=listdm"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Cập nhập</button></a> 
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
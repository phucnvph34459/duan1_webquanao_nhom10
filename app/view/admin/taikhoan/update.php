
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
              <form class="form-horizontal" action="index.php?act=suatk" method="POST">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên tài khoản </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tên tài khoản">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên khách hàng </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tên khách hàng">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mật khẩu</label>
                    <div class="col-sm-10">
                      <input type="password" name="pass" placeholder="Mật khẩu">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">năm sinh</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Năm sinh">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Địa chỉ">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="email">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Số điện thoại">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a href="index.php?act=dskh"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>Cập nhập</button></a> 
                  <button type="reset" value="Nhập lại" class="btn btn-default float-right">Nhập lại</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
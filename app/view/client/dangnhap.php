
<style>
        * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>

<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.php">Trang chủ</a></li>
                  <li class="breadcrumb-sep">/</li>
                  <li>Đăng nhập</li>
                </ul>
              </nav>
              <h4 class="title">Đăng nhập</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Account Area Wrapper ==-->
    <form action="index.php?act=dangnhap" method="post">
    <div class="container">
      <h1>Đăng nhập</h1>
      <p>Nhập thông tin tài khoản.</p>
      <hr>
      <b>Tên đăng nhập</b>
      <input type="text" placeholder="Nhập tên đăng nhập" name="tai_khoan" required>
      <b>Mật khẩu</b>
      <input type="password" placeholder="Nhập mật khẩu" name="mat_khau" required>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">Ghi nhớ tài khoản?
      </label>
      <div class="clearfix">
        <input type="reset" value="Nhập lại" >
        <input  type="submit" name="dangnhap" value="Đăng Nhập"  class="signupbtn"> 
      </div>
    </div>
  </form>
  <h3 class="thongbao">
         <?php
   if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
   }
        ?>
        </h3>
    <!--== End Account Area Wrapper ==-->
  </main>

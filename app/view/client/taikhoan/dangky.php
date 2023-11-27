
<style>
        * {box-sizing: border-box}
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
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
</style>
<!--wrapper start-->
<div class="wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <nav class="breadcrumb-area">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep">/</li>
                  <li>Đăng ký</li>
                </ul>
              </nav>
              <h4 class="title">Đăng ký</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
 
<form action="index.php?act=dangky" method="post">
    <div class="container">
      <h1>Đăng ký thành viên</h1>
      <p>Vui lòng điền vào biểu mẫu này để tạo tài khoản.</p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Nhập Email" name="email" required>

      <label for="name"><b>Tên đăng nhập</b></label>
      <input type="text" placeholder="Nhập tên đăng nhập" name="tai_khoan" required>

      <label for="hoten"><b>Họ và tên</b></label>
      <input type="text" placeholder="Nhập tên" name="ho_ten" required>
      <label for="date"><b>Năm sinh</b></label>
      <input type="date"  name="nam_sinh" required><br>
      
      <label for="diachi"><b>địa chỉ</b></label>
      <input type="text" placeholder="Nhập địa chỉ" name="dia_chi" required>
      <label for="tell"><b>Số điện thoại</b></label>
      <input type="text" placeholder="Nhập số điện thoại" name="so_dt" required>
      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Nhập mật khẩu" name="mat_khau" required>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>Bằng cách tạo một tài khoản, bạn đồng ý với Điều khoản & Quyền riêng tư của chúng tôi.

      </a>.</p>
  
      <div class="clearfix">
        <input type="reset" value="Nhập lại" >
        <input  type="submit" value="Đăng ký" id="btn" name="dangky" class="signupbtn">
        <script language="javascript">
            var submit = document.getElementById("btn");
            submit.onclick = function(){
                alert("Đăng ký thành công,vui lòng đăng nhập lại!!");
            }
        </script> 
      </div>
    </div>
  </form>
 
            
</div>

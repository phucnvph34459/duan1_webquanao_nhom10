<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from template.hasthemes.com/julie/julie/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 13:19:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Julie – Minimal Fashion Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,500i,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="assets/css/headroom.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Ionicons CSS ==-->
    <link href="assets/css/ionicons.css" rel="stylesheet" />
    <!--== Material Icon CSS ==-->
    <link href="assets/css/material-design-iconic-font.css" rel="stylesheet" />
    <!--== Elegant Icon CSS ==-->
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
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
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

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
    <!--== E
  <!--== End Preloader Content ==-->
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

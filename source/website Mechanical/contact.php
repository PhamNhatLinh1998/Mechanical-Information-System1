<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BHPassIO</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  </head>
  <body>
    <header class="header mb-5">
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><div class = "time">
<script> 
						  dayName = new Array ("Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy") 
						  monName = new Array ("1","2","3","4","5","6","7","8","9","10","11","12") 
						  now = new Date 
						  document.write("<font color=#FF6600><b>"+now.getHours()+ ":" +now.getMinutes()+ " phút -  " +dayName[now.getDay()]+ ", " +now.getDate()+ "-" +monName[now.getMonth()]+ "-" +now.getFullYear()+ "</b></font>")                                     
</script>

</div></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li>
                <li class="list-inline-item"><a href="register.html">Đăng Kí</a></li>
                <li class="list-inline-item"><a href="contact.html">Liên Hệ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Đăng Nhập</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="Địa Chỉ Email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="Mật Khẩu" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Đăng Nhập</button>
                  </p>
                </form>
                <p class="text-center text-muted">Bạn Chưa Có Tài Khoản?</p>
                <p class="text-center text-muted"><a href="register.html"><strong>Đăng Kí Nhanh ! </strong></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="index.html" class="nav-link active">Trang Chủ</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Mỹ Phẩm<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="matna.html" style="text-decoration:none" >Mặt Nạ</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="matna.html" class="nav-link">Nhật Bản</a></li>
                          <li class="nav-item"><a href="matna.html" class="nav-link">Hàn Quốc</a></li>
                          <li class="nav-item"><a href="matna.html" class="nav-link">Đài Loan</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="son.html" style="text-decoration:none" >Son</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="son.html" class="nav-link">Son Lì</a></li>
                          <li class="nav-item"><a href="son.html" class="nav-link">Son Nước</a></li>
                          <li class="nav-item"><a href="son.html" class="nav-link">Son Kem</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="phannen.html" style="text-decoration:none" >Phấn Nền</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="phannen.html" class="nav-link">Phấn Phủ</a></li>
                          <li class="nav-item"><a href="phannen.html" class="nav-link">Phấn Nước</a></li>
                          <li class="nav-item"><a href="phannen.html" class="nav-link">Kem Nền</a></li>
                        </ul>
					  </div>
						<div class="col-md-6 col-lg-3">
                        <h5><a href="kemduong.html" style="text-decoration:none" >Kem Dưỡng</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="kemduong.html" class="nav-link">Kem chống nắng</a></li>
                          <li class="nav-item"><a href="kemduong.html" class="nav-link">Kem dưỡng ẩm</a></li>
                          <li class="nav-item"><a href="kemduong.html" class="nav-link">Tonner</a></li>
 
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Nước Hoa<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="nhnam.html" style="text-decoration:none" >Nam</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="nhnam.html" class="nav-link">Mỹ</a></li>
                          <li class="nav-item"><a href="nhnam.html" class="nav-link">Pháp</a></li>
                          <li class="nav-item"><a href="nhnam.html" class="nav-link">Ý</a></li>                      
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="nhnu.html" style="text-decoration:none" >Nữ</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="nhnu.html" class="nav-link">Mỹ</a></li>
                          <li class="nav-item"><a href="nhnu.html" class="nav-link">Pháp</a></li>
                          <li class="nav-item"><a href="nhnu.html" class="nav-link">Ý</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5><a href="nhnamnu.html" style="text-decoration:none" >Nam & Nữ</a></h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="nhnamnu.html" class="nav-link">Mỹ</a></li>
                          <li class="nav-item"><a href="nhnamnu.html" class="nav-link">Pháp</a></li>
                          <li class="nav-item"><a href="nhnamnu.html" class="nav-link">Ý</a></li>

                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="banner"><a href="#"><img src="img/nuochoa.png" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only"></span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>0 Sản Phẩm Trong Giỏ</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Liên Hệ</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <div class="banner"><a href="#"><img src="img/rose.png" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
              <div id="contact" class="box">
                <h1>Liên Hệ</h1>
                <p class="lead">Bạn đang thắc mắc về vấn đề ? Bạn đang gặp phải một trở ngại nào đó ? </p>
                <p>Hãy liên hệ với chúng tôi.Hoàn toàn miễn phí,dịch vụ hỗ trợ của chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7.</p>
                <hr>
                <div class="row">
                  <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i>  Địa Chỉ</h3>
                    <p>Hoàng Anh Gia Lai 3<br>Nguyễn Hữu Thọ<br>Quận 7<br>TP.Hồ Chí Minh<br><strong>Việt Nam</strong></p>
                  </div>
                  <div class="col-md-4">
                    <h3><i class="fa fa-phone"></i>Trung Tâm Cuộc Gọi</h3>
                    <p class="text-muted">Đây là số ở khu vực Việt Nam , nếu ở khu vực Việt Nam bạn sẽ hoàn toàn miễn phí cước phí gọi .<br> Nhưng nếu bạn ở ngoài khu vực Việt Nam chúng tôi khuyên bạn nên sử dụng hộp thư điện tử để tránh cước phí chuyển vùng cao.</p>
                    <p><strong>+98414180198</strong></p>
                  </div>
                  <div class="col-md-4">
                    <h3><i class="fa fa-envelope"></i> Hộp Thư Điện Tử</h3>
                    <p class="text-muted">Hãy viết mail cho chúng tôi vào hộp thư</p>
                    <ul>
                      <li><strong><a href="mailto:">it16050311@student.tdtu.edu.vn</a></strong></li>
					  <li><strong><a href="mailto:">bachbonglong@gmail.com</a></strong></li>
					  <li><strong><a href="mailto:">hannguyen@gmail.com</a></strong></li>
						<br> <br>
					  <p> Hoặc bạn có thể điền thông tin dưới đây </p>
                    </ul>
                  </div>
                </div>
                <h2>Liên Hệ</h2>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Tên của bạn</label>
                        <input id="firstname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Họ của bạn</label>
                        <input id="lastname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Địa Chỉ Email</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Chủ đề</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Thông điệp bạn muốn nhắn gởi cho chúng tôi</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>GỞI ĐI</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Trang</h4>
            <ul class="list-unstyled">
              <li><a href="index.html">Trang Chủ</a></li>
              <li><a href="contact.html">Liên Hệ Chúng Tôi</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">Người Dùng</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng Nhập</a></li>
              <li><a href="register.html">Đăng Kí</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Danh Sách Sản Phẩm </h4>
            <h5>Mỹ Phẩm</h5>
            <ul class="list-unstyled">
              <li><a href="matna.html">Mặt Nạ</a></li>
              <li><a href="son.html">Son</a></li>
              <li><a href="phanen.html">Phấn Nền</a></li>
			  <li><a href="kemduong.html">Kem Dưỡng</a></li>
            </ul>
            <h5>Nước Hoa</h5>
            <ul class="list-unstyled">
              <li><a href="nhnam.html">Nam</a></li>
              <li><a href="nhnu.html">Nữ</a></li>
              <li><a href="nhnamnu.html">Nam và Nữ</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Địa Chỉ</h4>
            <p>Hoàng Anh Gia Lai 3<br>Nguyễn Hữu Thọ<br>Quận 7<br>TP.Hồ Chí Minh<br><strong>Việt Nam</strong></p><a href="contact.html"></a>
            <hr class="d-block d-md-none">
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Có gì mới</h4>
            <p class="text-muted">Sản Phẩm Mới Cập Nhật Hằng Ngày.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Tìm Kiếm Sản Phẩm</button></span>
              </div>
            </form>
            <hr>
            <h4 class="mb-3">Liên Hệ Khác</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a>
			<a href="#" class="instagram external"><i class="fa fa-instagram"></i></a>
			<a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2018 BHPassIO.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
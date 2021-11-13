<!-- BANNER START -->
<div class="banner inner-banner">
    <div class="container">
      <div class="bread-crumb mtb-60 center-xs">
        <div class="page-title">Đăng nhập</div>
        <div class="bread-crumb-inner right-side float-none-xs">
          <ul>
            <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
            <li><span>Đăng nhập</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- BANNER END --> 

  <!-- CONTAIN START -->
  <section class="container">
    <div class="checkout-section pb-85 pt-55">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-3 col-sm-offset-2">
            <form action="index.php?act=login" method="post">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Đăng nhập</h2>
                    </div>
                    <?php
                    if(isset($_SESSION['fullname'])){
                        extract($_SESSION['fullname']);
                    }
                    ?>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email</label><br>
                      <input id="login-email" type="email" required="" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Mật khẩu</label><br>
                      <input id="login-pass" type="password" required="" placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button name="submit" type="submit" class="btn-black right-side">Đăng nhập</button>
                  </div>
                  <div class="col-xs-12">
                    <a title="Forgot Password" class="forgot-password mtb-20" href="#">Quên mật khẩu?</a>
                    <hr>
                  </div>
                  <div class="col-xs-12">
                    <div class="new-account align-center mt-20">
                      <span>Bạn chưa có tài khoản?</span>
                      <a class="link" title="Register with Streetwear" href="register.html">Tạo tài khoản</a>
                    </div>
                  </div>
                </div>
              </form>
              <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
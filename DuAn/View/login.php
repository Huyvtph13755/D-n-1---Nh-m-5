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
            <?php
            if (isset($_SESSION['email'])) {
              extract($_SESSION['email']);
            ?>
              <div class="row" style="margin: 80px 0; border: 2px solid #f1f1f1; padding: 50px; border-radius:10px;">
                <div class="col-xs-12 mb-20">
                  <div class="heading-part heading-bg">
                    <h2 class="heading">Xin chào <?= $fullname ?></h2>
                  </div>
                </div>
                <div class="col-xs-12">
                  <li>
                    <a href="index.php" style="font-size: 18px; font-weight: bold;">Xem shop</a>
                  </li>
                  <br>
                  <li>
                    <a href="index.php" style="font-size: 18px; font-weight: bold;">Cập nhật tài khoản</a>
                  </li>
                  <br>
                  <li>
                    <a href="index.php" style="font-size: 18px; font-weight: bold;">Đổi mật khẩu</a>
                  </li>
                  <br>
                  <?php if ($role == 1) { ?>
                    <li>
                      <a href="admin/index.php" style="font-size: 18px; font-weight: bold;">Trang quản trị</a>
                    </li>
                    <br>
                  <?php } ?>
                  <li>
                    <a href="index.php?act=logout" style="font-size: 18px; font-weight: bold;">Thoát</a>
                  </li>
                </div>
              </div>
            <?php
            } else {
            ?>
              <form action="index.php?act=login" style="margin: 80px 0;" class="main-form full" method="post">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Đăng nhập</h2>
                    </div>
                  </div>
                  <div>
                    <p class="notification" style="text-align: center; color: #005DA5; font-weight: bold;">
                      <?php
                      if (isset($notification) && ($notification != "")) {
                        echo $notification;
                      }
                      ?>
                    </p>
                    <br>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email</label><br>
                      <input id="login-email" type="email" name="email" required="" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Mật khẩu</label><br>
                      <input id="login-pass" type="password" name="password" required="" placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button name="login" type="submit" class="btn-black right-side">Đăng nhập</button>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="new-account align-center mt-20">
                    <span>Bạn chưa có tài khoản?</span>
                    <a class="link" title="Register with Streetwear" href="index.php?act=register">Tạo tài khoản</a>
                  </div>
                </div>
              <?php } ?>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- CONTAINER END -->
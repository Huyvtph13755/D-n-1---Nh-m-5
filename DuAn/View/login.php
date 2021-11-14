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
              if(isset($_SESSION['email'])){
                extract($_SESSION['email']);
            ?>
              <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Xin chào <?=$fullname?></h2>
                    </div>
                  </div>
                    <div class="col-xs-12">
                        <li>
                            <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                        </li>
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=user_profile">Cập nhật tài khoản</a>
                        </li>
                        <?php if($role==1){?>
                        <li>
                            <a href="admin/index.php">Đăng nhập Admin</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="index.php">Thoát</a>
                        </li>
                    </div>
                  </div>
                <?php
                    }else{
                ?>
            <form action="index.php?act=login" method="post">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Đăng nhập</h2>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email</label><br>
                      <input id="login-email" type="email" name="email" required="" placeholder="Email Address" style="width: 100%;">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Mật khẩu</label><br>
                      <input id="login-pass" type="password" name="password" required="" placeholder="Enter your Password" style="width: 100%;">
                    </div>
                  </div>
                  <div class="col-xs-12">
                  <input type="checkbox" name="" id=""><strong>Ghi nhớ tài khoản</strong> <button name="login" type="submit" class="btn-black right-side">Đăng nhập</button>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="input-box">
                    <label for="login-pass">Mật khẩu</label>
                    <input id="login-pass" type="password" required="" name="password" placeholder="Enter your Password">
                  </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="new-account align-center mt-20">
                      <span>Bạn chưa có tài khoản?</span>
                      <a class="link" title="Register with Streetwear" href="index.php?act=register">Tạo tài khoản</a>
                    </div>
                  </div>
                  <?php }?>
                  <div class="col-xs-12">
                    <h5 class="thongbao">
                      <?php
                          if(isset($thongbao)&&($thongbao!="")){
                              echo $thongbao;
                          }
                      ?>
                    </h5>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->
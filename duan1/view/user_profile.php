<!-- BANNER STRAT -->
<div class="banner inner-banner">
  <div class="container">
    <div class="bread-crumb mtb-60 center-xs">
      <div class="page-title">Tài khoản của tôi</div>
      <div class="bread-crumb-inner right-side float-none-xs">
        <ul>
          <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
          <li><span>Tài khoản của tôi</span></li>
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
      <div class="col-md-3 col-sm-4">
        <div class="account-sidebar account-tab mb-xs-30">
          <div class="tab-title-bg">
            <div class="heading-part">
              <div class="sub-title"><span></span> Tài khoản của tôi</div>
            </div>
          </div>
          <div class="account-tab-inner">
            <ul class="account-tab-stap">
              <li id="step1" class="active">
                <a href="javascript:void(0)">Tổng quan tài khoản<i class="fa fa-angle-right"></i>
                </a>
              </li>
              <li id="step2">
                <a href="javascript:void(0)">Chi tiết tài khoản<i class="fa fa-angle-right"></i>
                </a>
              </li>
              <li id="step3">
                <a href="javascript:void(0)">Đổi mật khẩu<i class="fa fa-angle-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?php
      if (isset($_SESSION['email']) && (is_array($_SESSION['email']))) {
        extract($_SESSION['email']);
      }
      ?>
      <div class="col-md-9 col-sm-8">
        <div id="data-step1" class="account-content" data-temp="tabdata">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading-part heading-bg mb-30">
                <h2 class="heading m-0">Tổng quan tài khoản</h2>
              </div>
            </div>
          </div>
          <div class="mb-30">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading-part">
                  <h3 class="sub-heading">Hello,<?= $fullname ?></h3>
                </div>
                <p>Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi. <a class="account-link" id="subscribelink" href="#">Bấm vào đây để xem shop</a></p>
              </div>
            </div>
          </div>
          <div class="m-0">
            <div class="row">
              <div class="col-xs-12 mb-20">
                <div class="heading-part">
                  <h3 class="sub-heading">Thông tin tài khoản</h3>
                </div>
                <hr>
              </div>
              <div class="col-sm-12">
                <div class="cart-total-table address-box commun-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Thông tin</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <ul>
                              <li class="inner-heading">
                                <b><?= $fullname ?></b>
                              </li>
                              <li>
                                <p>Email: <?= $email ?></p>
                              </li>
                              <li>
                                <p>Số điện thoại: 0<?php if ($contract_number == 0) {
                                                      echo "";
                                                    } else {
                                                      echo $contract_number;
                                                    } ?></p>
                              </li>
                              <li>
                                <p>Địa chỉ: <?= $address ?></p>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
              </div>
            </div>
          </div>
        </div>
        <div id="data-step2" class="account-content" data-temp="tabdata" style="display:none">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading-part heading-bg mb-30">
                <h2 class="heading m-0">Thay đổi thông tin</h2>
              </div>
            </div>
          </div>
          <div class="m-0">
            <form class="main-form full" action="index.php?act=user_profile" method="POST">
              <div class="mb-20">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part">
                      <h3 class="sub-heading">Địa chỉ nhận hàng</h3>
                    </div>
                    <hr>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <input type="text" required="" placeholder="Họ và tên" name="fullname" value="<?= $fullname ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <input type="email" required="" placeholder="Email" value="<?= $email ?>" disabled>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <input type="text" required="" placeholder="Số điện thoại liên hệ" name="contract_number" value="0<?= $contract_number ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-12">
                    <div class="input-box">
                      <input type="text" required="" placeholder="Địa chỉ nhận hàng" name="address" value="<?= $address?>">
                      <span>Vui lòng cung cấp địa chỉ chi tiết!</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="">
                <div class="row">
                  <div class="col-sm-12">
                    <input type="hidden" name="email" value="<?= $email?>">
                    <input type="hidden" name="user_id" value="<?= $user_id ?>">
                    <input type="hidden" name="password" value="<?= $password ?>">
                    <button class="btn btn-black right-side" name="user_profile" type="submit">Thay đổi</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="data-step3" class="account-content" data-temp="tabdata" style="display:none">
          <div class="row">
            <div class="col-xs-12">
              <div class="heading-part heading-bg mb-30">
                <h2 class="heading m-0">Đổi mật khẩu</h2>
              </div>
            </div>
          </div>
          <form class="main-form full">
            <div class="row">
              <div class="col-xs-12">
                <div class="input-box">
                  <label for="old-pass">Old-Password</label>
                  <input type="password" placeholder="Old Password" required="" id="old-pass">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-box">
                  <label for="login-pass">Password</label>
                  <input type="password" placeholder="Enter your Password" required="" id="login-pass">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-box">
                  <label for="re-enter-pass">Re-enter Password</label>
                  <input type="password" placeholder="Re-enter your Password" required="" id="re-enter-pass">
                </div>
              </div>
              <div class="col-xs-12">
                <button class="btn-black" type="submit" name="submit">Thay đổi</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->
<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
      <div class="bread-crumb mtb-60 center-xs">
        <div class="page-title">Đăng kí</div>
        <div class="bread-crumb-inner right-side float-none-xs">
          <ul>
            <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
            <li><span>Đăng kí</span></li>
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
              <form class="main-form full">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part heading-bg">
                      <h2 class="heading">Product <strong><?= $name_subcategory?></strong></h2>
                    </div>
                  </div>
                  <div class="col-xs-12">
                  <?php
                      foreach ($listpro as $product) {
                        extract($product);
                        $linkpro = "index.php?act=product&product_id".$product_id;
                        $image = $image_product_path . $image_product;
                        echo '<div class="product-item">
                                <div class="product-image">
                                    <a href="'.$linkpro.'">
                                     <img src="'.$image.'" alt="">
                                    </a>
                                  <div class="product-detail-inner">
                                    <div class="detail-inner-left align-center">
                                        <ul>
                                        <li class="pro-cart-icon">
                                          <form>
                                            <button title="Add to Cart"><span></span></button>
                                          </form>
                                        </li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-item-details">
                                  <div class="product-item-name">
                                    <a href="#">'.$name_product.'</a>
                                  </div>
                                  <div class="price-box">
                                    <span class="price">$80.00</span>
                                    <del class="price old-price">$100.00</del>
                                  </div>
                                  <div class="rating-summary-block">
                                    <div title="53%" class="rating-result">
                                      <span style="width:53%"></span>
                                    </div>
                                    <span class="label-review"><span>'.$view.'</span></span>
                                  </div>
                                </div>
                              </div>';
                      }
                      ?>
                  </div>
                  <!-- <div class="col-xs-12">
                    <div class="input-box">
                      <label for="l-name">Last Name</label>
                      <input type="text" id="l-name" required="" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-email">Email address</label>
                      <input id="login-email" type="email" required="" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input id="login-pass" type="password" required="" placeholder="Enter your Password">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="re-enter-pass">Re-enter Password</label>
                      <input id="re-enter-pass" type="password" required="" placeholder="Re-enter your Password">
                    </div>
                  </div> -->
                  <!-- <div class="col-xs-12">
                    <div class="check-box left-side mb-20">
                      <span>
                        <input type="checkbox" name="remember_me" id="remember_me" class="checkbox">
                      </span>
                      <label for="remember_me">Remember Me</label>
                    </div>
                    <button name="submit" type="submit" class="btn-black right-side">Submit</button>
                  </div>
                  <div class="col-xs-12">
                    <hr>
                    <div class="new-account align-center mt-20">
                      <span>Already have an account with us</span>
                      <a class="link" title="Register with Streetwear" href="login.html">Login Here</a>
                    </div>
                  </div> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CONTAINER END --> 
<!-- CONTAIN START -->
<section class="container pb-85 pt-55">
  <div class="row">
    <div class="col-md-3 col-sm-4 mb-xs-30">
      <div class="sidebar-block">
        <div class="sidebar-box listing-box mb-40">
          <span class="opener plus"></span>
          <div class="main_title sidebar-title">
            <h3><span>Danh mục</span></h3>
          </div>
          <div class="sidebar-contant">
            <ul>
              <li style="font-size: 18px; font-weight: bold; margin-left: 10px;"><a href="shop?category_id=<?= $_GET['category_id'] ?>"><?= $b['name_category'] ?></a></li>
              <?php foreach ($a as $index => $w) : ?>
                <li style="margin-left: 30px;"><a href="shop?category_id=<?= $_GET['category_id'] ?>&subcategory_id=<?= $w['subcategory_id'] ?>"><?= $w['name_subcategory'] ?></a></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
        <div class="sidebar-box filter-sidebar mb-40">
          <span class="opener plus"></span>
          <div class="main_title sidebar-title">
            <h3><span>Bộ</span> Lọc</h3>
          </div>
          <form action="" method="get">
            <div class="sidebar-contant">
              <div class="price-range mb-30">
                <div class="inner-title">Theo giá</div>
                <select name="filter" id="" style="width:100%; outline:none;">
                  <option value="1">Dưới 15 triệu</option>
                  <option value="2">15 - 20 triệu</option>
                  <option value="3">20 - 25 triệu</option>
                  <option value="4">25 - 30 triệu</option>
                  <option value="5">Trên 30 triệu</option>
                </select>
              </div>
              <button name="filter-pr" type="submit" class="btn btn-black">Lọc</button>
            </div>
          </form>
        </div>
        <div class="sidebar-box sidebar-item">
          <span class="opener plus"></span>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <div class="shorting mb-30">
        <div class="row">
        </div>
      </div>
      <div class="product-listing">
        <div class="row mlr_-20">
          <?php foreach ($s as $index => $i) : ?>
            <div class="col-md-4 col-xs-6 plr-20">
              <div class="product-item">
                <div class="product-image">
                  <a href="product-page.html">
                    <img src="<?= CLIENT ?>images/1.jpg" alt="Streetwear">
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
                    <a href="product-page.html"><?= $i['name_product'] ?></a>
                  </div>
                  <div class="price-box">
                    <span class="price" style="font-weight: bold;"><?= number_format($i['price_default']) ?> <u>đ</u></span>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>
        <div class="row">
          <!-- <div class="col-xs-12">
            <div class="pagination-bar">
              <ul>
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->
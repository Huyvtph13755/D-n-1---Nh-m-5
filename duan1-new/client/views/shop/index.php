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
              <?php foreach ($a as $index => $w) : ?>
                <li><a><?= $w['name_subcategory'] ?></a></li>
                <!-- <li><a>Shoes <span>(05)</span></a></li>
                <li><a>Jewellery <span>(10)</span></a></li>
                <li><a>Home & Furniture <span>(12)</span></a></li>
                <li><a>Bags <span>(18)</span></a></li>
                <li><a>Accessories <span>(70)</span></a></li> -->
              <?php endforeach ?>
            </ul>
          </div>
        </div>
        <div class="sidebar-box filter-sidebar mb-40">
          <span class="opener plus"></span>
          <div class="main_title sidebar-title">
            <h3><span>Bộ</span> Lọc</h3>
          </div>
          <div class="sidebar-contant">
            <div class="price-range mb-30">
              <div class="inner-title">Theo giá</div>
              <input class="price-txt" type="text" id="amount">
              <div id="slider-range"></div>
            </div>
            <!-- lọc hãng -->
            <!-- <div class="filter-inner-box mb-20">
                <div class="inner-title">Manufacture</div>
                <ul>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="apple-brand"></span>
                    <label for="apple-brand">Apple  <span>(15)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="prada-brand"></span>
                    <label for="prada-brand">Prada <span>(05)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="canon-brand"></span>
                    <label for="canon-brand">Canon <span>(10)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="htc-brand"></span>
                    <label for="htc-brand">HTC <span>(10)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="palm-brand"></span>
                    <label for="palm-brand">Palm <span>(10)</span></label>
                  </li>
                </ul>
              </div> -->
            <!-- Lọc màu -->
            <!-- <div class="filter-inner-box mb-20">
                <div class="inner-title">Color</div>
                <ul>
                  <li class="active">
                    <span><input type="checkbox" class="checkbox" id="black-color"></span>
                    <label for="black-color">Black  <span>(15)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="blue-color"></span>
                    <label for="blue-color">Blue <span>(05)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="brown-color"></span>
                    <label for="brown-color">Brown <span>(10)</span></label>
                  </li>
                </ul>
              </div> -->
            <!-- Lọc theo size -->
            <!-- <div class="filter-inner-box mb-20">
                <div class="inner-title">Size</div>
                <ul>
                  <li class="active">
                    <span><input type="checkbox" class="checkbox" id="s-size"></span>
                    <label for="s-size">S  <span>(15)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="m-size"></span>
                    <label for="m-size">M <span>(05)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="l-size"></span>
                    <label for="l-size">L <span>(10)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="xl-size"></span>
                    <label for="xl-size">XL <span>(05)</span></label>
                  </li>
                  <li>
                    <span><input type="checkbox" class="checkbox" id="xxl-size"></span>
                    <label for="xxl-size">XXL <span>(10)</span></label>
                  </li>
                </ul>
              </div> -->
            <a href="#" class="btn btn-black">Lọc</a>
          </div>
        </div>
        <div class="sidebar-box mb-40 visible-sm visible-md visible-lg">
          <a href="#">
            <img src="<?= CLIENT ?>images/left-banner.jpg" alt="Streetwear">
          </a>
        </div>
        <div class="sidebar-box sidebar-item">
          <span class="opener plus"></span>
          <div class="main_title sidebar-title">
            <h3><span>Sản phẩm</span> nổi bật</h3>
          </div>
          <div class="sidebar-contant">
            <!-- <ul>
              <li>
              <?php foreach ($b as $index => $w) : ?>
                <div class="pro-media">
                  <a><img alt="I-phone" src="<?= CLIENT ?>images/1.jpg"></a>
                </div>
                <div class="pro-detail-info">
                  <a style="font-size: 10px;" ><?= $w['name_product'] ?></a>
                  <div class="price-box">
                  <span class="price" ><?= number_format($w['price_default']) ?> <u>đ</u></span>
                  </div>
                  <div class="cart-link">
                    <form>
                      <button title="Add to Cart">Add To Cart</button>
                    </form>
                  </div>
                </div>
              </li>
              <?php endforeach ?>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-sm-8">
      <div class="shorting mb-30">
        <div class="row">
          <div class="col-md-6">
            <div class="view">
              <div class="list-types grid active ">
                <a href="shop.html">
                  <div class="grid-icon list-types-icon"></div>
                </a>
              </div>
              <div class="list-types list">
                <a href="shop-list.html">
                  <div class="list-icon list-types-icon"></div>
                </a>
              </div>
            </div>
            <div class="short-by float-right-sm">
              <span>Sắp xếp theo</span>
              <div class="select-item">
                <select>
                  <option value="" selected="selected">Tên (A to Z)</option>
                  <option value="">Tên(Z - A)</option>
                  <option value="">Giá(thấp&gt;cao)</option>
                  <option value="">Giá(cao &gt; thấp)</option>
                  <!-- <option value="">rating(highest)</option>
                    <option value="">rating(lowest)</option> -->
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="show-item right-side float-left-sm">
              <span>Show</span>
              <div class="select-item">
                <select>
                  <option value="" selected="selected">24</option>
                  <option value="">12</option>
                  <option value="">6</option>
                </select>
              </div>
              <span>Per Page</span>
              <div class="compare float-right-sm">
                <a href="#" class="btn btn-black">Compare (0)</a>
              </div>
            </div>
          </div>
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
                    <a href="product-page.html"><?= $i['name_product']?></a>
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
          <div class="col-xs-12">
            <div class="pagination-bar">
              <ul>
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTAINER END -->
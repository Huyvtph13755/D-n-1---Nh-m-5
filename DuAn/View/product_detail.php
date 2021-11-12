<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Chi tiết sản phẩm</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Trang chủ</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Chi tiết sản phẩm</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- BANNER END -->

<!-- CONTAIN START -->
<section class="container">
    <div class="pro-page pt-55">
        <div class="row">
            <div class="col-md-5 col-sm-5 mb-xs-30">
                <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                    <a href="#"><img src="./View/images/1.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/2.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/3.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/4.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/5.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/6.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/4.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/5.jpg" alt="Streetwear"></a>
                    <a href="#"><img src="./View/images/6.jpg" alt="Streetwear"></a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="product-detail-main">
                            <div class="product-item-details">
                                <h1 class="product-item-name"><?= $load_one['name_product'] ?></h1>
                                <div class="price-box">
                                    <br>
                                    <input style="border: none; outline: none; background-color:white; font-size:2em; font-weight: bold; width: 180px" type="text" name="hp" id="hp" onchange="load(this)" disabled value="<?= number_format($getMinPr['pr']) ?>">
                                    VND
                                </div>
                                <br>
                                <p><?= $load_one['sub_decription'] ?></p>
                                <div class="product-size select-arrow mb-20 mt-30">
                                    <label>Màu sắc</label>
                                    <select class="selectpicker form-control" id="a" name="a" onchange="load(this)">
                                        <?php foreach ($f_cl as $index => $c) : ?>
                                            <option value="<?= $c['price'] ?> <?= $c['color_id'] ?>"><?= $c['name_color'] ?></option value>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="product-color select-arrow mb-20">
                                    <label>Gói bảo hành</label>
                                    <select class="selectpicker form-control" id="b" name="b" onchange="load(this)">
                                        <option selected="selected" value="0">Chọn gói bảo hành</option>
                                        <?php foreach ($wa as $index => $b) : ?>
                                            <option value="<?= $b['price'] ?> <?= $b['warranty_id'] ?>"><?= $b['name_warranty'] ?></option value>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <br>
                                <div class="mb-40">
                                    <div class="product-qty">
                                        <label for="qty">Số lượng:</label>
                                        <div class="custom-qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value--;return false;" class="reduced items" type="button"> <i class="fa fa-minus"></i> </button>
                                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button"> <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>
                                    <div class="bottom-detail cart-button">
                                        <ul>
                                            <li class="pro-cart-icon">
                                                <form>
                                                    <button title="Add to Cart" class="btn-black"><span></span>Thêm vào giỏ hàng</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="ptb-85">
        <div class="product-detail-tab flipInX">
            <div class="row">
                <div class="col-md-12">
                    <div id="tabs">
                        <ul class="nav nav-tabs">
                            <li><a class="tab-Description selected" title="Description">Mô tả sản phẩm</a></li>
                            <li><a class="tab-Reviews" title="Reviews">Bình luận</a></li>
                        </ul>
                    </div>
                    <div id="items">
                        <div class="tab_content">
                            <ul>
                                <li>
                                    <div class="items-Description selected">
                                        <div class="Description"> <strong>The standard Lorem Ipsum passage, used since the 1500s</strong><br />
                                            <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                                            <p>Tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="items-Reviews">
                                        <div class="comments-area">
                                            <h4>Comments<span>(2)</span></h4>
                                            <ul class="comment-list mt-30">
                                                <li>
                                                    <div class="comment-user"> <img src="./View/images/comment-user.jpg" alt="Streetwear"> </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">John Doe</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>Fab 11, 2017</li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                    </div>
                                                    <ul class="comment-list child-comment">
                                                        <li>
                                                            <div class="comment-user"> <img src="./View/images/comment-user.jpg" alt="Streetwear"> </div>
                                                            <div class="comment-detail">
                                                                <div class="user-name">John Doe</div>
                                                                <div class="post-info">
                                                                    <ul>
                                                                        <li>Fab 11, 2017</li>
                                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-user"> <img src="./View/images/comment-user.jpg" alt="Streetwear"> </div>
                                                            <div class="comment-detail">
                                                                <div class="user-name">John Doe</div>
                                                                <div class="post-info">
                                                                    <ul>
                                                                        <li>Fab 11, 2017</li>
                                                                        <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comment-user"> <img src="./View/images/comment-user.jpg" alt="Streetwear"> </div>
                                                    <div class="comment-detail">
                                                        <div class="user-name">John Doe</div>
                                                        <div class="post-info">
                                                            <ul>
                                                                <li>Fab 11, 2017</li>
                                                                <li><a href="#"><i class="fa fa-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Consectetur adipiscing elit integer sit amet augue laoreet maximus nuncac.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-form mt-30">
                                            <h4>Để lại bình luận</h4>
                                            <div class="row mt-30">
                                                <form>
                                                    <div class="col-xs-12 mb-20">
                                                        <textarea cols="30" rows="3" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <button class="btn-black" name="submit" type="submit">Gửi</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="pb-85">
        <div class="product-slider owl-slider">
            <div class="row">
                <div class="col-xs-12">
                    <div class="heading-part align-center mb-40">
                        <h2 class="main_title">Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-slider-main position-r">
                    <div class="owl-carousel pro_cat_slider">
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <div class="sale-label"><span>Sale</span></div>
                                    <a href="product-page.html">
                                        <img src="./View/images/1.jpg" alt="Streetwear">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                        <del class="price old-price">$100.00</del>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                        <span class="label-review"><span>( 2 review )</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="./View/images/2.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="./View/images/3.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="./View/images/4.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="./View/images/5.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="./View/images/6.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="product-page.html">
                                        <img src="./View/images/7.jpg" alt="">
                                    </a>
                                    <div class="product-detail-inner">
                                        <div class="detail-inner-left align-center">
                                            <ul>
                                                <li class="pro-cart-icon">
                                                    <form>
                                                        <button title="Add to Cart"><span></span></button>
                                                    </form>
                                                </li>
                                                <li class="pro-wishlist-icon"><a href="#"></a></li>
                                                <li class="pro-compare-icon"><a href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-details">
                                    <div class="product-item-name">
                                        <a href="product-page.html">Defyant Reversible Dot Shorts</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="price">$80.00</span>
                                    </div>
                                    <div class="rating-summary-block">
                                        <div title="53%" class="rating-result">
                                            <span style="width:53%"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->
<script>
    function load(radio) {
        const numberFormat = new Intl.NumberFormat('vi-VN', {
            style: 'currency',
            currency: 'VND',
        });

        var hp = document.getElementById("hp");
        let a = String(document.getElementById("a").value);
        let b = String(document.getElementById("b").value);
        let arr = a.split(' ')
        let arrb = b.split(' ')
        hp.value = (Number(arr[0]) + Number(arrb[0])).toLocaleString();
    }
</script>
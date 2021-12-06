<!-- BANNER STRAT -->
<div class="banner inner-banner">
    <div class="container">
        <div class="bread-crumb mtb-60 center-xs">
            <div class="page-title">Women</div>
            <div class="bread-crumb-inner right-side float-none-xs">
                <ul>
                    <li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
                    <li><span>Women</span></li>
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
                <div class="checkout-step mb-40">
                    <ul>
                        <li class="active">
                            <a href="checkout.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">1</div>
                                </div>
                                <span>Thông tin</span>
                            </a>
                        </li>
                        <li>
                            <a href="order-overview.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">2</div>
                                </div>
                                <span>Tổng quan</span>
                            </a>
                        </li>
                        <li>
                            <a href="payment.html">
                                <div class="step">
                                    <div class="line"></div>
                                    <div class="circle">3</div>
                                </div>
                                <span>Trạng thái</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="checkout-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading-part align-center">
                                <h2 class="heading">Tổng quan đơn hàng</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form action="invoice" method="post">
                            <div class="col-sm-8 mb-sm-30">
                                <div class="cart-item-table commun-table mb-30">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th>Chi tiết</th>
                                                    <th>Giá Sản Phẩm</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($a as $index => $s) : ?>
                                                    <tr>
                                                        <td>
                                                            <a href="product-page.html">
                                                                <div class="product-image"><img alt="Streetwear" src="<?= ADMIN . $s['image_product'] ?>"></div>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="product-title">
                                                                <a href="product-page.html"><?php $s['name_product'] ?></a>
                                                                <div class="product-info-stock-sku m-0">
                                                                    <div>
                                                                        <label>Price: </label>
                                                                        <div class="price-box">
                                                                            <span class="info-deta price"><?= number_format($s['price_default']) ?> đ</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info-stock-sku m-0">
                                                                    <div>
                                                                        <label>color: </label>
                                                                        <div class="price-box">
                                                                            <span class="info-deta price"><?= $s['name_color'] ?> </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-info-stock-sku m-0">
                                                                    <div>
                                                                        <label>Quantity: </label>
                                                                        <span class="info-deta"><?= $s['quantity'] ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div data-id="100" class="total-price price-box">
                                                                <span class="price"><?= number_format($s['price_default']) ?>đ</span>
                                                            </div>
                                                        </td>
                                                        <!-- <td>
                                                        <i class="fa fa-trash cart-remove-item" data-id="100" title="Remove Item From Cart"></i>
                                                    </td> -->
                                                    </tr>
                                                <?php endforeach ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="cart-total-table commun-table mb-30">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Tổng giá trị đơn hàng</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td><b>Số tiền phải trả</b></td>
                                                    <td>
                                                        <div class="price-box">
                                                            <span class="price"><b><?= number_format($total) ?>đ</b></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="right-side float-none-xs">
                                    <button type="submit" class="btn btn-black">Đồng ý đặt hàng</button>
                                    <!-- <a href="" class="btn btn-black">Đồng ý đặt hàng</a> -->
                                </div>
                            </div>
                        </form>

                        <div class="col-sm-4">
                            <div class="cart-total-table address-box commun-table mb-30">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Địa chỉ giao hàng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <li class="inner-heading">
                                                            <p> NAME: <?= $u['fullname'] ?></p>
                                                        </li>
                                                        <li>
                                                            <p>EMAIL:<?= $u['email'] ?></p>
                                                        </li>
                                                        <li>
                                                            <p> SDT:<?php if ($u['contract_number'] == 0) {
                                                                        echo "";
                                                                    } else {
                                                                        echo  0 . $u['contract_number'];
                                                                    }  ?></p>
                                                        </li>
                                                        <li>
                                                            <p>ĐỊA CHỈ:<?= $u['address'] ?></p>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
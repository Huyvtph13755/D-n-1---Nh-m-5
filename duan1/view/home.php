 <!-- BANNER STRAT -->
 <section>
   <div class="banner">
     <div class="main-banner">
       <div class="banner-1">
         <img src="./view/images/banner1.jpg" alt="Streetwear">
         <div class="banner-detail">
           <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-6"></div>
             <div class="col-md-6 col-sm-6 col-xs-6">
               <div class="banner-detail-inner">
                 <span class="offer">Hot Offer</span>
                 <h1 class="banner-title">Introducing the new</h1>
                 <h1 class="banner-subtitle">Motorola Moto X</h1>
                 <a href="shop.html" class="btn btn-black">Shop Now</a>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="banner-2">
         <img src="./view/images/banner2.jpg" alt="Streetwear">
         <div class="banner-detail">
           <div class="row">
             <div class="col-md-1 col-sm-1 col-xs-1"></div>
             <div class="col-md-6 col-sm-6 col-xs-6">
               <div class="banner-detail-inner">
                 <span class="offer">Hot Offer</span>
                 <h1 class="banner-title">Samsung Galaxy Tab S2</h1>
                 <h1 class="banner-subtitle">Easy on your eyes and comfortable <span>in your hand</span></h1>
                 <a href="shop.html" class="btn btn-black">Shop Now</a>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="banner-3">
         <img src="./view/images/banner3.jpg" alt="Streetwear">
         <div class="banner-detail">
           <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-6"></div>
             <div class="col-md-6 col-sm-6 col-xs-6">
               <div class="banner-detail-inner">
                 <span class="offer">How would you like our</span>
                 <h1 class="banner-title">HUAWEI MediaPad M2</h1>
                 <h1 class="banner-subtitle">while a high contrast ratio gives <span>you depth and details</span></h1>
                 <a href="shop.html" class="btn btn-black">Shop Now</a>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="banner-4">
         <img src="./view/images/banner4.jpg" alt="Streetwear">
         <div class="banner-detail">
           <div class="row">
             <div class="col-md-1 col-sm-1 col-xs-1"></div>
             <div class="col-md-6 col-sm-6 col-xs-6">
               <div class="banner-detail-inner">
                 <span class="offer">Powered by the Internet of Things</span>
                 <h1 class="banner-title">SMARTRON TITANIUM</h1>
                 <h1 class="banner-subtitle">while a high contrast ratio gives you depth and details</h1>
                 <a href="shop.html" class="btn btn-black">Shop Now</a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- BANNER END -->

 <!-- CONTAIN START -->

 <!--  Featured Products Slider Block Start  -->
 <section class="container">
   <div class="ptb-85">
     <div class="product-slider owl-slider">
       <div class="row">
         <div class="col-xs-12">
           <div class="heading-part align-center mb-40">
             <h2 class="main_title">Featured Products</h2>
           </div>
         </div>
       </div>
       <div class="row">
         <div id="items">
           <div class="tab_content pro_cat">
             <ul>
               <li>
                 <div id="data-step1" class="items-step1 selected product-slider-main position-r" data-temp="tabdata" style="text-align: center;">
                   <?php foreach ($feature_pro as $index => $f) : ?>
                     <div class="col-md-3 col-xs-6 plr-20 mb-20">
                       <div class="product-item" style="margin-bottom: 50px">
                         <div class="product-image">
                           <a href="index.php?act=product_detail&product_id=<?= $f['product_id'] ?>">
                             <img src="./view/images/1.jpg" alt="Streetwear" href="">
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
                             <a style="font-size: 18px;" href="index.php?act=product_detail&product_id=<?= $f['product_id'] ?>"><?= $f['name_product'] ?></a>
                           </div>
                           <div class="price-box">
                             <span class="price" style="font-weight: bold;"><?= number_format($f['price']) ?></span>
                             <p class="price" style="font-size: 12px; color: #303030;">Màu sản phẩm: <?= $f['name_color'] ?></p>
                           </div>
                         </div>
                       </div>
                     </div>
                   <?php endforeach ?>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  Featured Products Slider Block End  -->

 <!-- perellex-banner Start -->
 <section>
   <div class="perellex-banner align-center">
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <div class="perellex-delail ptb-150">
             <div class="perellex-title">Các mẫu iPhone, MacBook mới được cập nhật liên tục</div>
             <div class="perellex-subtitle mtb-20s">Hi-Store - Uy tín trong từng sản phẩm</div>
             <span><a href="index.php" class="btn sub-btn">Xem shop</a></span>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- perellex-banner Start -->

 <!--  New Products Slider Block Start  -->
 <section class="container">
   <div class="ptb-85">
     <div class="product-slider owl-slider">
       <div class="row">
         <div class="col-xs-12">
           <div class="heading-part align-center mb-40">
             <h2 class="main_title">New Products</h2>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="product-slider-main position-r">
           <div class="owl-carousel pro_cat_slider" style="text-align: center;">
             <?php foreach ($new_pro as $index => $n) : ?>
               <div class="item">
                 <div class="product-item">
                   <div class="product-image">
                     <a href="index.php?act=product_detail&product_id=<?= $f['product_id'] ?>">
                       <img src="./view/images/1.jpg" alt="Streetwear">
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
                         </ul>
                       </div>
                     </div>
                   </div>
                   <div class="product-item-details">
                     <div class="product-item-name">
                       <a href="index.php?act=product_detail&product_id=<?= $n['product_id'] ?>" style="font-size: 18px;"><?= $n['name_product'] ?></a>
                     </div>
                     <div class="price-box">
                       <span class="price" style="font-weight: bold;"><?= number_format($n['price']) ?></span>
                       <p class="price" style="font-size: 12px; color: #303030;">Màu sản phẩm: <?= $n['name_color'] ?></p>
                     </div>
                   </div>
                 </div>
               </div>
             <?php endforeach ?>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!--  New Products Slider Block End  -->

 <!-- Brand logo block Start  -->
 <section class="container">
   <div class="pb-85 brand-main">
     <div class="row">
       <div class="col-md-12">
         <div class="brand">
           <div id="brand-logo" class="owl-carousel align_center">
             <div class="item"><a href="#"><img src="./view/images/brand1.png" alt="#"></a></div>
             <div class="item"><a href="#"><img src="./view/images/brand2.png" alt="#"></a></div>
             <div class="item"><a href="#"><img src="./view/images/brand3.png" alt="#"></a></div>
             <div class="item"><a href="#"><img src="./view/images/brand4.png" alt="#"></a></div>
             <div class="item"><a href="#"><img src="./view/images/brand5.png" alt="#"></a></div>
             <div class="item"><a href="#"><img src="./view/images/brand6.png" alt="#"></a></div>
             <div class="item"><a href="#"><img src="./view/images/brand7.png" alt="#"></a></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- Brand logo block End  -->

 <!-- CONTAINER END -->
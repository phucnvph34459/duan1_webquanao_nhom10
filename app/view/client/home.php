
<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/slider/screenshot_1700632516.png">
              <div class="slider-content">
                <h5 class="sub-title">BEST PRICE : $866</h5>
                <h2 class="title">NEW ARRIVAL</h2>
                <h4>70% OFF THIS WINTER</h4>
                <p>There are many variations of passages of Lorem Ipsum availables, but the majority have suffered alteration in some form.</p>
                <a class="btn-slider" href="shop.html">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/slider/2.png">
              <div class="slider-content">
                <h5 class="sub-title">BEST PRICE : $666</h5>
                <h2 class="title">NEW ARRIVAL</h2>
                <h4>70% OFF THIS WINTER</h4>
                <p>There are many variations of passages of Lorem Ipsum availables, but the majority have suffered alteration in some form.</p>
                <a class="btn-slider" href="shop.html">Shop Now</a>
              </div>
            </div>
          </div>
        </div>

        <!--== Add Swiper Arrows ==-->
        <div class="swiper-button-next"><i class="ion-ios7-arrow-right"></i></div>
        <div class="swiper-button-prev"><i class="ion-ios7-arrow-left"></i></div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->










    <!--== Start Product Area Wrapper ==-->
    <sections class="product-area">
      <div class="container product-pb" data-padding-bottom="25">
        <div class="row">
          <div class="col-12">
            <div class="product-category-tab-wrap">
              <ul class="nav nav-tabs product-category-nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <br>
                  <button class="nav-link active" id="best-seller-tab" data-bs-toggle="tab" data-bs-target="#bestSeller" type="button" role="tab" aria-controls="bestSeller" aria-selected="true">Hàng mới về</button>
                </li>
              </ul>
              <div class="tab-content product-category-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bestSeller" role="tabpanel" aria-labelledby="best-seller-tab">
                  <div class="row">
                    <div class="col-12">
                      <div class="swiper-container swiper-slide-gap product-slider-container">
                        <div class="swiper-wrapper">
                          
                          <?php
                            foreach($listsanpham as $sp){
                              extract($sp);
                              $hinhanh = $img_path.$hinh_anh;
                              echo '<div class="swiper-slide">
                              <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="single-product-simple.html">
                                    <img class="w-100" src="'.$hinhanh.'">
                                  </a>
                                  <span class="sale-title sticker">Sale</span>
                                  <span class="percent-count sticker">-15%</span>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="cart.html">
                                        <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <i class="zmdi zmdi-search icon"></i>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="single-product-simple.html"> '.$name.'</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">'.$gia.'</span>
                                      <span class="price-old">$130.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-button-prev"><i class="ei ei-icon_arrow_carrot-left"></i></div>
                        <div class="swiper-button-next"><i class="ei ei-icon_arrow_carrot-right"></i></div>
                      </div>';
                            }
                          ?>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="mostView" role="tabpanel" aria-labelledby="most-view-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                </div>
              </div>
              
              
              <!--== Add Swiper navigation Buttons ==-->
              <div class="swiper-button-prev"><i class="ei ei-icon_arrow_carrot-left"></i></div>
              <div class="swiper-button-next"><i class="ei ei-icon_arrow_carrot-right"></i></div>
            </div>
          </div>
        </div>
      </div>
      <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-new-arrivals-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Top sản phẩm bán chạy</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container swiper-slide-gap product-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product-simple.html">
                          <img class="w-100" src="assets/img/shop/1.jpg" alt="Image-HasTech">
                        </a>
                        <span class="sale-title sticker">Sale</span>
                        <span class="percent-count sticker">-18%</span>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="cart.html">
                              <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <i class="zmdi zmdi-search icon"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="single-product-simple.html">Meta Slevless Dress</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">$40.00</span>
                            <span class="price-old">$85.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product-simple.html">
                          <img class="w-100" src="assets/img/shop/5.jpg" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="cart.html">
                              <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <i class="zmdi zmdi-search icon"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="single-product-simple.html">Flower Print dress</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">$55.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product-simple.html">
                          <img class="w-100" src="assets/img/shop/2.jpg" alt="Image-HasTech">
                        </a>
                        <span class="sale-title sticker">Sale</span>
                        <span class="percent-count sticker">-15%</span>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="cart.html">
                              <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <i class="zmdi zmdi-search icon"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="single-product-simple.html"> Ruffled neck blouse</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">$110.00</span>
                            <span class="price-old">$130.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="single-product-simple.html">
                          <img class="w-100" src="assets/img/shop/6.jpg" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="cart.html">
                              <i class="zmdi zmdi-shopping-cart-plus icon"></i>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <i class="zmdi zmdi-favorite-outline zmdi-hc-fw icon"></i>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <i class="zmdi zmdi-search icon"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="single-product-simple.html">Fit Wool Suit</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                          <div class="prices">
                            <span class="price">$80.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
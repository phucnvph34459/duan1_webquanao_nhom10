<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="app/z4920524143853_f227dece3c5ec41bb8d4511a613ce2ae.jpg">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="app/z4920524186605_8f18b80b483cb8e58ae64d139ac331ff.jpg">
            </div>
          </div>
        </div>
<a href=""></a>
        <!--== Add Swiper Arrows ==-->
        <div class="swiper-button-next"><i class="ion-ios7-arrow-right"></i></div>
        <div class="swiper-button-prev"><i class="ion-ios7-arrow-left"></i></div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container product-pb" data-padding-bottom="25">
        <div class="row">
          <div class="col-12">
            <div class="product-category-tab-wrap">
              <ul class="nav nav-tabs product-category-nav justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="best-seller-tab" data-bs-toggle="tab" data-bs-target="#bestSeller" type="button" role="tab" aria-controls="bestSeller" aria-selected="true">Hàng mới về</button>
                </li>
              </ul>
              <div class="tab-content product-category-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bestSeller" role="tabpanel" aria-labelledby="best-seller-tab">
                  <div class="row">
                    <div class="col-12">
                      <div class="swiper-container swiper-slide-gap product-slider-container">
                        <div class="swiper-wrapper">
                          
                            <!--== Start Shop Item ==-->
                            <!--== Start Shop Item ==-->
                            <?php 
                              foreach($listsanpham as $sp){
                                extract($sp);
                                $hinh_anh = $img_path.$hinh_anh;
                                echo '
                                <div class="swiper-slide">
                                <div class="product-item">
                                <div class="inner-content">
                                  <div class="product-thumb">
                                    <a href="aohoodie.html">
                                      <img class="w-100" src="'.$hinh_anh.'" alt="Image-HasTech">
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
                                      <h4 class="title"><a href="single-product-simple.html">'.$name.'</a></h4>
                                      <div class="star-content">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                      </div>
                                      <div class="prices">
                                        <span class="price">'.$gia.'</span>
                                        <span class="price-old">$85.00</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div> ';
                              }
                            ?>
                  
                  <!-- end -->
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Bài viết</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container swiper-slide-gap post-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.html">
                          <img class="w-100" src="assets/img/blog/1.jpg" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><span>post by: </span><a class="author" href="blog.html">Julip</a></li>
                          <li><span> - Jan, 25 , 21</span></li>
                        </ul>
                        <h4 class="title"><a href="single-blog.html">Hot Summer Fashion for Women new collections arrives</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua...</p>
                        <a class="btn-theme" href="single-blog.html">Read more</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.html">
                          <img class="w-100" src="assets/img/blog/2.jpg" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><span>post by: </span><a class="author" href="blog.html">Morem</a></li>
                          <li><span> - Jan, 24 , 23</span></li>
                        </ul>
                        <h4 class="title"><a href="single-blog.html">But I must explain to you how all this mistaken ideal</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua...</p>
                        <a class="btn-theme" href="single-blog.html">Read more</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.html">
                          <img class="w-100" src="assets/img/blog/3.jpg" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><span>post by: </span><a class="author" href="blog.html">Adapo</a></li>
                          <li><span> - Jan, 20 , 23</span></li>
                        </ul>
                        <h4 class="title"><a href="single-blog.html">My Favorite White Sneakers From Splurge To Save</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua...</p>
                        <a class="btn-theme" href="single-blog.html">Read more</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.html">
                          <img class="w-100" src="assets/img/blog/1.jpg" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><span>post by: </span><a class="author" href="blog.html">Julip</a></li>
                          <li><span> - Jan, 25 , 21</span></li>
                        </ul>
                        <h4 class="title"><a href="single-blog.html">On the other hand we provide denounce with righteous</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua...</p>
                        <a class="btn-theme" href="single-blog.html">Read more</a>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
              </div>
              <!--== Add Swiper navigation Buttons ==-->
              <div class="swiper-button-prev"><i class="ei ei-icon_arrow_carrot-left"></i></div>
              <div class="swiper-button-next"><i class="ei ei-icon_arrow_carrot-right"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
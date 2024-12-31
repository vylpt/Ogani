<?php 
 session_start();
$is_homepage =true;
require_once('components/header.php')
?>
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                
                
                <div class="categories__slider owl-carousel">
                <?php
                
                $sql_str = "SELECT * FROM categories ORDER BY name";
                $result = mysqli_query($conn, $sql_str);
                     while ($row = mysqli_fetch_assoc($result)){
                      
                ?>
                    
                <?php } ?>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm đặc trưng</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <?php
                $sql_str = "SELECT * FROM categories ORDER BY name";
                $result = mysqli_query($conn, $sql_str);
                     while ($row = mysqli_fetch_assoc($result)){
                      
                ?>
                            <li data-filter=".<?= $row['slug']?>"><?= $row['name'] ?></li>
                            <?php }?>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <?php
               $sql_str = "SELECT products.id AS pid,products.disscounted_price AS dprice, products.name as pname, images, price, categories.slug as cslug FROM products, categories WHERE products.category_id = categories.id ";
                $result = mysqli_query($conn, $sql_str);
                     while ($row = mysqli_fetch_assoc($result)){
                      $anh_arr = explode(';', $row['images']);
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $row['cslug']?>">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?= "quantri/".$anh_arr[0]?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <h5><a href="sanpham.php?id=<?=$row['pid']?>"><?=$row['pname']?></a></h5>
                            
                            <div class="product__item__price"><?=$row['dprice']?> <span><?=$row['price']?></span></div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm mới nhất</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Rau cải</h6>
                                        <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Ớt chuông</h6>
                                        <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Gà</h6>
                                        <span>200.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Rau cải</h6>
                                    <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Ớt chuông</h6>
                                    <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Gà</h6>
                                    <span>200.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sản phẩm bán chạy</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Rau cải</h6>
                                    <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Ớt chuông</h6>
                                    <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Gà</h6>
                                    <span>200.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Rau cải</h6>
                                    <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Ớt chuông</h6>
                                    <span>10.000 VNĐ</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                    <h6>Gà</h6>
                                    <span>200.000 VNĐ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Tin tức</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
$sql_str="SELECT * FROM news ORDER BY created_at DESC  LIMIT 0,3";
                $result = mysqli_query($conn, $sql_str);
                while ($row = mysqli_fetch_assoc($result)){

                ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?= 'quantri/'.$row['avatar']?>" alt="" >
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i><?=$row['created_at']?></li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="tintuc.php?id=<?=$row['id']?>"><?=$row['title']?></a></h5>
                            <p><?=$row['summary']?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
                
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<?php 
require_once('components/footer.php');
?>
   
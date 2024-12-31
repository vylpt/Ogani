<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<div>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.php">Trang chủ</a></li>
                <li><a href="./shop.php">Cửa hàng</a></li>
                <li><a href="#">Pages</a>
                    
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.php">Liên hệ</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
        
                        <a href="#"><i class="fa fa-phone">0903030768</i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> Shopthucphamorganic@gmail.com</li>
                <li>Shop Thực Phẩm Organic</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>  Shopthucphamorganic@gmail.com</li>
                                <li>Shop Thực Phẩm Organic</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-phone"> 0903.030.768</i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">
                                <a href="quantri/login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Trang chủ</a></li>
                            <li><a href="./shop.php">Cửa hàng</a></li>
                            <li><a href="#">Pages</a>
                                
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            
                <li><a href="./cart.php"><i class="fa fa-shopping-bag"></i> <span>
                    <?php
                    $cart =[];
                    if (isset($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
                    }

                    $count=0; // hiển thị số lượng sản phẩm trong giỏ hàng
                    $tongtien=0;
                    foreach ($cart as $item) {
                        $count += $item['qty'];
                        $tongtien += $item['qty'] + $item['disscounted_price'];
                    }
                    //hiển thị số luongqj 
                    echo $count;
                    ?>
                </span></a></li>
                        </ul>
                        <div class="header__cart__price">Tổng tiền: <span><?=number_format($tongtien,0,'','.')." VND"?></span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
     <?php 
     if ($is_homepage){
        echo '<section class="hero">';
     }
     else {
        echo '<section class="hero hero-normal">';
     }
     ?>
    <!--<section class="hero">-->
      
    <div class="container">
    <div class="row">
        <!-- Cột bên trái: Danh mục sản phẩm -->
        <div class="col-lg-3">
            <div class="hero__categories">
                <div class="hero__categories__all">
                    <i class="fa fa-bars"></i>
                    <span>Danh mục sản phẩm</span>
                </div>
                <ul>
                    <?php
                    require('./db/conn.php');
                    $sql_str = "SELECT * FROM categories ORDER BY name";
                    $result = mysqli_query($conn, $sql_str);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <li><a href="#"><?=$row['name']?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <!-- Cột bên phải: Form tìm kiếm và Banner -->
        <div class="col-lg-9">
            <!-- Form tìm kiếm -->
            <div class="hero__search__form" style="margin-bottom: 20px;">
                <form action="timkiem.php" method="get">
                    <select name="danhmuc">
                        <option value="*">Tất cả danh mục</option>
                        <?php
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?=$row['id']?>"><?=$row['name']?></option>
                        <?php } ?>
                    </select>
                    <input type="text" name="tukhoa" placeholder="Bạn cần tìm gì?">
                    <button type="submit" class="site-btn">Tìm</button>
                </form>
            </div>

            <!-- Phần Banner -->
            <?php if ($is_homepage) { ?>
                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg" style="width: 100%; margin-top: 0;">
                    <div class="hero__text">
                        <span>FRUIT FRESH</span>
                        <h2>Vegetable <br>100% Organic</h2>
                        <p>Free Pickup and Delivery Available</p>
                        <a href="./index.php" class="primary-btn">Truy cập</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Hero Section End -->

    <!-- Hero Section End -->

<?php
    session_start();
    $is_homepage=false;
    $cart=[];
if (isset($_SESSION['cart'])){
    $cart=$_SESSION['cart'];
    }

                require_once('./db/conn.php');
if (isset($_POST['btDatHang'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    $address =$_POST['address'];

    // tạo dũ liệu cho order
    $sqli = "INSERT INTO orders VALUES (0, 0, '$firstname', '$lastname','$address', '$phone','$email', 'Processing',NOW(),NOW())";
    
    if (mysqli_query($conn, $sqli)){
        $last_order_id = mysqli_insert_id($conn);
        foreach($cart as $item)
        {
            $masp= $item['id'];
            $disscounted_price = $item['disscounted_price'];
            $qty = $item['qty'];
            $total = $item['qty'] * $item['disscounted_price'];
            $sqli2 = "INSERT INTO order_details VALUES (0, $last_order_id, $masp,
            $disscounted_price, $qty, $total, NOW(), NOW())";
           // echo $sqli2; exit;
            mysqli_query($conn, $sqli2);
        }
    }
    unset($_SESSION['cart']);
    header("location: thankyou.php");
   

}
               
            require_once('components/header.php');
            ?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh toán</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Thanh toán</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            
            <div class="checkout__form">
                <h4>Thông tin Khách hàng</h4>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ và tên lót<span>*</span></p>
                                        <input type="text" name ='firstname'>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Tên<span>*</span></p>
                                        <input type="text" name ="lastname">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="checkout__input">
                                <p>Địa chỉ nhận hàng: <span>*</span></p>
                                <input type="text" placeholder="Địa chỉ" class="checkout__input__add" name="address">
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                            </div>
                            
                                   
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng</h4>
                                <div class="checkout__order__products">Sản phẩm <span>Thành tiền</span></div>
                                <ul>
                                    <?php
                                $cart=[];
if (isset($_SESSION['cart'])){
    $cart=$_SESSION['cart'];
    }
    $count = 0;//stt
    $total = 0;
    foreach($cart as $item){
        $total += $item['qty'] + $item['disscounted_price'];

        ?>
                                    <li><?=$item['name']?> <span><?=number_format($item['disscounted_price'],0,'','.') . " VND"?></span></li>
                                    
                                <?php } ?>
                                </ul>
                                <div class="checkout__order__total">Tổng tiền: <span><?=number_format($total,0,'','.')." VND"?></span></div>
                                
                                
                                <button type="submit" class="site-btn" name="btDatHang">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    
    <?php 
require_once('components/footer.php');
?>
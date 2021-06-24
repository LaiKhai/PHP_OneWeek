<!-- Start Săn Sale -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Một Số Sản Phẩm Ở <b class="text-success">OneWeek</b></h1>
                <p>
                    Nơi luôn bán các mặt hàng chính hãng <b class="text-success">OneWeek</b>
                </p>
            </div>
        </div>
        <div class="row">
            <?php
        foreach($lst_sp as $item){?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php 
                                            if(isset($_SESSION['user']))
                                            {
                                                echo $level."pages/ChiTietSanPham.php?id=".$item['prodID'];
                                            }
                                            else
                                            {
                                                echo $level.pages_path."DangNhap.php";
                                            }
                                            ?>">
                        <img src="<?php echo $level.img_path.$item['img1'];?>" class="card-img-top wrap"
                            alt="OPPO Fine X3 Pro">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">
                                <?php echo number_format($item['prodPrice'],0).$item['prodInit'];?></li>
                        </ul>
                        <a href="<?php 
                                            if(isset($_SESSION['user']))
                                            {
                                                echo $level."pages/ChiTietSanPham.php?id=".$item['prodID'];
                                            }
                                            else
                                            {
                                                echo $level.pages_path."DangNhap.php";
                                            }
                                            ?>"
                            class="h2 text-decoration-none text-dark"><?php echo $item['prodName'];?></a>
                        <p class="card-text textline">
                            <?php echo $item['prodDescription'];?>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Săn Sale -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo base_url()?>assets/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/home/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/home/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/home/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/home/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/home/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/home/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/home/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/home/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/home/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/home/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container" style="padding-top:20px;">
				
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="<?php echo base_url('home')?>"><img src="<?php echo base_url()?>assets/home/images/home/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="custom"><i class="fa fa-crosshairs"></i> Custom</a></li>
								<li><a href="custom/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	
	
	
	<section>
		<div class="container" style="padding-top:50px;">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						
					
						<div class="brands_products" style="padding-bottom:20px;"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php foreach($list_data as $dd): ?>
						<div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
								<form method="post" action="<?php echo base_url();?>custom/add_cart" method="post" accept-charset="utf-8">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo base_url()?>assets/home/images/home/<?=$dd->img?>" alt="" style="height:200px; width:200px;" />
                                            <h2><?php echo 'Rp '.number_format($dd->harga);?> </h2>
                                            <p><?=$dd->nama_barang?></p>

											<input type="hidden" name="id" value="<?php echo $dd->id_transaksi ?>" />
                  <input type="hidden" name="nama" value="<?php echo $dd->nama_barang ?>" />
                  <input type="hidden" name="harga" value="<?php echo $dd->harga ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $dd->img ?>" />
                  <input type="hidden" name="qty" value="1" />
                                            <button type="submit" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="<?php echo base_url('custom/add_cart')?>"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="<?php echo base_url('custom/detail_barang/'.$dd->id_transaksi)?>"><i class="glyphicon glyphicon-edit"></i>Detail</a></li>
                                    </ul>
                                </div>
							</div>
						</div>
						<?php endforeach;?>
						

                        
                        
                        
						
                        
					</div><!--features_items-->
					
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer" ><!--Footer-->
		<div class="footer-bottom" >
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

    <script src="<?php echo base_url()?>assets/home/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/home/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/home/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/home/<?php echo base_url()?>assets/home/js/price-range.js"></script>
    <script src="<?php echo base_url()?>assets/home/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>assets/home/js/main.js"></script>
</body>
</html>
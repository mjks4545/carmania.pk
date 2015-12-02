<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Online Store</title>
<!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->

<link rel="stylesheet" href="<?=base_url();?>public/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>public/css/style.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>public/css/revslider.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>public/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>public/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>public/css/font-awesome.css" type="text/css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="page">
    <!-- Header -->
    <header class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Language -->
                    <div class="col-xs-6">
                        <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="<?=base_url();?>public/images/english.png" alt="language"> English <span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?=base_url();?>public/images/english.png" alt="language"> English </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?=base_url();?>public/images/francais.png" alt="language"> French </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="<?=base_url();?>public/images/german.png" alt="language"> German </a></li>
                            </ul>
                        </div>
                        <!-- End Header Language -->
                        <!-- Header Currency -->
                        <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                            </ul>
                        </div>
                        <!-- End Header Currency -->
                        <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
                    </div>
                    <div class="col-xs-6">
                        <!-- Header Top Links -->
                        <div class="toplinks">
                            <div class="links">
                                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
                                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                                <div class="phone hidden-xs">1 800 123 1234</div>
                            </div>
                        </div>
                        <!-- End Header Top Links -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header container">
            <div class="row">
                <div class="col-lg-2 col-sm-3 col-md-2 col-xs-12">
                    <!-- Header Logo -->
                    <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="<?=base_url();?>public/images/logo.png"></a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-lg-7 col-sm-4 col-md-6 col-xs-12">
                    <!-- Search-col -->
                    <div class="search-box">
                        <form action="cat" method="POST" id="search_mini_form" name="Categories">
                            <select name="category_id" class="cate-dropdown hidden-xs">
                                <option value="0">All Categories</option>
                                <option value="36">Camera</option>
                                <option value="37">Electronics</option>
                                <option value="42">&nbsp;&nbsp;&nbsp;Cell Phones</option>
                                <option value="43">&nbsp;&nbsp;&nbsp;Cameras</option>
                                <option value="44">&nbsp;&nbsp;&nbsp;Laptops</option>
                                <option value="45">&nbsp;&nbsp;&nbsp;Hard Drives</option>
                                <option value="46">&nbsp;&nbsp;&nbsp;Monitors</option>
                                <option value="47">&nbsp;&nbsp;&nbsp;Mouse</option>
                                <option value="48">&nbsp;&nbsp;&nbsp;Digital Cameras</option>
                                <option value="38">Desktops</option>
                                <option value="39">Computer Parts</option>
                                <option value="40">Televisions</option>
                                <option value="41">Featured</option>
                            </select>
                            <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
                            <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
                        </form>
                    </div>
                    <!-- End Search-col -->
                </div>
                <!-- Top Cart -->
                <div class="col-lg-3 col-sm-5 col-md-4 col-xs-12">
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"> <i class="icon-cart"></i>
                                    <div class="cart-box"><span class="title">My Cart</span><span id="cart-total"> 2 </span></div>
                                </a></div>
                            <div>
                                <div class="top-cart-content arrow_box">
                                    <div class="block-subtitle">Recently added item(s)</div>
                                    <ul id="cart-sidebar" class="mini-products-list">
                                        <li class="item even"> <a class="product-image" href="#" title="Downloadable Product "><img alt="Downloadable Product " src="products-<?=base_url();?>public/images/product1.jpg" width="80"></a>
                                            <div class="detail-item">
                                                <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                                                    <p class="product-name"> <a href="#" title="Downloadable Product">Downloadable Product </a> </p>
                                                </div>
                                                <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                                            </div>
                                        </li>
                                        <li class="item last odd"> <a class="product-image" href="#" title="  Sample Product "><img alt="  Sample Product " src="products-<?=base_url();?>public/images/product1.jpg" width="80"></a>
                                            <div class="detail-item">
                                                <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="#">&nbsp;</a>
                                                    <p class="product-name"> <a href="#" title="  Sample Product "> Sample Product </a> </p>
                                                </div>
                                                <div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="top-subtotal">Subtotal: <span class="price">$420.00</span></div>
                                    <div class="actions">
                                        <button class="btn-checkout" type="button"><span>Checkout</span></button>
                                        <button class="view-cart" type="button"><span>View Cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
                            <input value="" type="hidden">
                            <input id="enable_module" value="1" type="hidden">
                            <input class="effect_to_cart" value="1" type="hidden">
                            <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                        </div>
                    </div>
                    <div class="signup"><a title="Login" href="<?=site_url();?>home/sign_up"><span>Sign up Now</span></a></div>
                    <span class="or"> | </span>
                    <div class="login"><a title="Login" href="login.html"><span>Log In</span></a></div>
                </div>
                <!-- End Top Cart -->
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="nav-inner">
                <!--End mobile-menu -->
                <a class="logo-small" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="<?=base_url();?>public/images/logo-small.png"></a>
                <ul id="nav" class="hidden-xs">
                    <li class="level0 parent drop-menu"><a href="<?=site_url();?>home/index" class="active1"><span>Home</span> </a>

                    </li>
                    <li class="level0 parent drop-menu"><a href="#"><span>Services</span> </a>
                        <ul class="level1">
                            <li class="level1 first"><a href="<?=site_url();?>home/car_sales"><span>Car Sales</span></a></li>
                            <li class="level1 nav-10-2"> <a href="#"> <span>Mobile Sale</span> </a> </li>
                            <li class="level1 nav-10-3"> <a href="#"> <span>Property Sale</span> </a> </li>
                            </li>
                        </ul>
                    </li>
                    <li class="level0 nav-5 level-top first"> <a href="<?=site_url();?>home/car_sales" class="level-top active"> <span>Car Sales</span> </a>
                        <div class="level0-wrapper dropdown-6col" style="display:none;">
                            <div class="level0-wrapper2">
                                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                                    <ul class="level0">
                                        <li class="level1 nav-6-1 parent item"> <a href="#"><span>Search New Car</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>BMW</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Honda City</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Prado</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Search Used Car</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Speed Car</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>XLI</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Search By City</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Peshawar</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Islamabad</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Lahore</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Add New Post For Car</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>For New Car</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>For Used Car</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>For Challenging Car</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                    </ul>
                                    <div class="nav-add">
                                        <div class="push_item1">
                                            <div class="push_img"> <a href="#"> <img  alt="women jwellery" src="<?=base_url();?>public/images/women-cate-banner.jpg"> </a> </div>
                                        </div>
                                        <div class="push_item1">
                                            <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="<?=base_url();?>public/images/women-cate-banner1.jpg"> </a> </div>
                                        </div>
                                        <div class="push_item1 push_item1_last">
                                            <div class="push_img"> <a href="#"> <img  alt="women_bag" src="<?=base_url();?>public/images/women-cate-banner2.jpg"> </a> </div>
                                        </div>
                                        <br class="clear">
                                    </div>
                                </div>
                                <!--nav-block nav-block-center-->
                                <div class="nav-block nav-block-right std grid12-4">
                                    <p><a href="#"><img class="fade-on-hover" src="<?=base_url();?>public/images/nav-women-banner.jpg" alt="nav img"></a></p>
                                </div>
                                <!--nav-block nav-block-right std grid12-4-->
                            </div>
                        </div>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a href="grid.html" class="level-top"> <span>Mobile Sales</span> </a>
                        <div class="level0-wrapper dropdown-6col" style="display: none;">
                            <div class="level0-wrapper2">
                                <!--nav-block nav-block-center-->
                                <div class="nav-block nav-block-left std grid12-6">
                                    <p><a href="#"><img class="fade-on-hover" src="<?=base_url();?>public/images/nav-men-banner.jpg" alt="nav img"></a></p>
                                </div>
                                <!--nav-block nav-block-right std grid12-4-->

                                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                                    <ul class="level0">
                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Search New Brand</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Lenovo</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Samsung</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Nokia</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Motrola</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Search Used Brand</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Lenovo</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Samsung</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Nokia</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Motrola</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Search Normall Brand</span></a>
                                            <!--sub sub category-->
                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Lenovo</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Samsung</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Nokia</span></a> </li>
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Motrola</span></a> </li>
                                            </ul>
                                            <!--sub sub category-->
                                        </li>
                                    </ul>
                                    <div class="nav-add">
                                        <div class="push_item">
                                            <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="<?=base_url();?>public/images/men-banner-img.jpg"> </a> </div>
                                        </div>
                                        <div class="push_item last">
                                            <div class="push_img"> <a href="#"> <img  alt="women_jwellery" src="<?=base_url();?>public/images/men-banner-img.jpg"> </a> </div>
                                        </div>
                                        <br class="clear">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="level0 nav-5 level-top first"> <a class="level-top" href="grid.html"> <span>Property Sales</span> </a>
                        <div style="display:none;" class="level0-wrapper dropdown-6col">
                            <div class="level0-wrapper2">
                                <div class="nav-block nav-block-center grid12-8 itemgrid itemgrid-4col">
                                    <!--mega menu-->
                                    <ul class="level3">
                                        <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Commercial Area</span></a>
                                            <!--sub sub category-->

                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Commercial Area 1</span></a> </li>
                                                <!--level2 nav-6-1-1-->
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Commercial Area 2</span></a> </li>
                                                <!--level2 nav-6-1-1-->
                                            </ul>
                                            <!--level1-->

                                            <!--sub sub category-->
                                            <div class="cat-img"><img src="<?=base_url();?>public/images/e-img1.jpg" alt="Mobiles"></div>
                                        </li>
                                        <!--level1 nav-6-1 parent item-->

                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>For Rent</span></a>
                                            <!--sub sub category-->

                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Commercial Area 1</span></a> </li>
                                                <!--level2 nav-6-1-1-->
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Commercial Area 2</span></a> </li>
                                                <!--level2 nav-6-1-1-->
                                            </ul>
                                            <!--level1-->

                                            <!--sub sub category-->
                                            <div class="cat-img"><img src="<?=base_url();?>public/images/e-img1.jpg" alt="Mobiles Accesories"></div>
                                        </li>
                                        <!--level1 nav-6-1 parent item-->

                                        <li class="level1 nav-6-1 parent item"> <a href="grid.html"><span>Wanted</span></a>
                                            <!--sub sub category-->

                                            <ul class="level1">
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Wanted 1</span></a> </li>
                                                <!--level2 nav-6-1-1-->
                                                <li class="level2 nav-6-1-1"> <a href="#"><span>Wanted 2</span></a> </li>
                                                <!--level2 nav-6-1-1-->
                                            </ul>
                                            <!--level1-->

                                            <!--sub sub category-->
                                            <div class="cat-img"><img src="<?=base_url();?>public/images/e-img1.jpg" alt="Cameras"></div>
                                        </li>
                                        <!--level1 nav-6-1 parent item-->
                                    </ul>
                                    <!--level0-->
                                </div>
                                <!--nav-block nav-block-center-->

                                <!--nav-block nav-block-right std grid12-4-->
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
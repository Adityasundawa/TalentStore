
<body class="common-home res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-3">
    

    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-md hidden-sm hidden-xs welcome-msg">Welcome to SuperMarket! Wrap new offers / gift every single day on Weekends - New Coupon code: <span>Happy2018</span> </div>
                        <ul class="top-link list-inline hidden-lg ">
                            <li class="account" id="my_account">
                                <a href="<?= base_url()?>#" title="My Account " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs">My Account </span>  <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a href="<?= base_url()?>register.html"><i class="fa fa-user"></i> Register</a></li>
                                    <li><a href="<?= base_url()?>login.html"><i class="fa fa-pencil-square-o"></i> Login</a></li>
                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="http://demo.smartaddons.com/templates/html/supermarket/index.html" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="<?= base_url()?>#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="<?= base_url()?>#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="<?= base_url()?>#">($)&nbsp;US Dollar </a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li>   
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="http://demo.smartaddons.com/templates/html/supermarket/index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="<?= base_url('assets/')?>image/catalog/flags/gb.png" alt="English" title="English">
                                            <span class="">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= base_url()?>index.html"><img class="image_flag" src="<?= base_url('assets/')?>image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="<?= base_url()?>html_with_RTL/index.html"> <img class="image_flag" src="<?= base_url('assets/')?>image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo"><a href="<?= base_url()?>index.html"><img src="<?= base_url('assets/')?>image/catalog/logo.png" title="Your Store" alt="Your Store" /></a></div>
                    </div>
                    <!-- //end Logo -->

                    
                    <!-- Search -->
                    <div class="col-lg-7 col-md-6 col-sm-5">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="http://demo.smartaddons.com/templates/html/supermarket/index.html">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                            <select class="no-border" name="category_id">
                                                <option value="0">All Categories</option>
                                                <option value="78">Apparel</option>
                                                <option value="77">Cables &amp; Connectors</option>
                                                <option value="82">Cameras &amp; Photo</option>
                                                <option value="80">Flashlights &amp; Lamps</option>
                                                <option value="81">Mobile Accessories</option>
                                                <option value="79">Video Games</option>
                                                <option value="20">Jewelry &amp; Watches</option>
                                                <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                            </select>
                                        </div>

                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Keyword here..." name="search">
                                
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    
                                    </div>
                                    <input type="hidden" name="route" value="product/search" />
                                </form>
                            </div>
                        </div>  
                    </div>
                    <!-- //end Search -->
                    <div class="middle-right col-lg-3 col-md-3 col-sm-3">                  
                        <!--cart-->
                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                <i class="fa fa-shopping-bag"></i>
                              </span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart">

                                                My cart
                                            </p>

                                            <span class="total-shopping-cart cart-total-full">
                                   <span class="items_cart">02</span><span class="items_cart2"> item(s)</span><span class="items_carts">( $162.00 )</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="<?= base_url()?>product.html">
                                                            <img src="<?= base_url('assets/')?>image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Yutculpa ullamcon" title="Yutculpa ullamco" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name" href="<?= base_url()?>product.html">Yutculpa ullamco</a> 
                                                    </td>
                                                    <td class="text-center">x1</td>
                                                    <td class="text-center">$80.00</td>
                                                    <td class="text-right">
                                                        <a href="<?= base_url()?>product.html" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="<?= base_url()?>product.html">
                                                            <img src="<?= base_url('assets/')?>image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name" href="<?= base_url()?>product.html">Xancetta bresao</a> 
                                                    </td>
                                                    <td class="text-center">x1</td>
                                                    <td class="text-center">$60.00</td>
                                                    <td class="text-right">
                                                        <a href="<?= base_url()?>product.html" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Sub-Total</strong>
                                                        </td>
                                                        <td class="text-right">$140.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                        </td>
                                                        <td class="text-right">$2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>VAT (20%)</strong>
                                                        </td>
                                                        <td class="text-right">$20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong>
                                                        </td>
                                                        <td class="text-right">$162.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="<?= base_url()?>cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="<?= base_url()?>checkout.html"><i class="fa fa-share"></i>Checkout</a> 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--//cart-->

                        <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                            <li class="compare hidden-xs"><a href="<?= base_url()?>#" class="top-link-compare" title="Compare "><i class="fa fa-refresh"></i></a>
                            </li>
                            <li class="wishlist hidden-xs"><a href="<?= base_url()?>#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><i class="fa fa-heart"></i></a>
                            </li>
                        </ul>

                                            
                        
                    </div>
                    
                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">
                    
                   
                    
                    <!-- Main menu -->
                    <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="<?= base_url()?>index.html">Home <b class="caret"></b></a>
                                                        <div class="sub-menu" style="width:100%;" >
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>index.html" class="image-link"> 
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="<?= base_url('assets/')?>image/catalog/menu/home-1.jpg" alt="">
                                                                                
                                                                            </span> 
                                                                            <h3 class="figcaption">Home page - (Default)</h3> 
                                                                        </a> 
                                                                        
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>home2.html" class="image-link"> 
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="<?= base_url('assets/')?>image/catalog/menu/home-2.jpg" alt="">
                                                                               
                                                                            </span> 
                                                                            <h3 class="figcaption">Home page - Layout 2</h3> 
                                                                        </a> 
                                                                        
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>home3.html" class="image-link"> 
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="<?= base_url('assets/')?>image/catalog/menu/home-3.jpg" alt="">
                                                                               
                                                                            </span> 
                                                                            <h3 class="figcaption">Home page - Layout 3</h3> 
                                                                        </a> 
                                                                        
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>html_with_RTL/index.html" class="image-link"> 
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="<?= base_url('assets/')?>image/catalog/menu/rtl.jpg" alt="">
                                                                                
                                                                            </span> 
                                                                            <h3 class="figcaption">Home page - RTL</h3> 
                                                                        </a> 
                                                                        
                                                                    </div>
                                                                    
                                                                    <!-- <div class="col-md-15">
                                                                        <a href="<?= base_url()?>#" class="image-link"> 
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="<?= base_url('assets/')?>image/demo/feature/comming-soon.png" alt="">
                                                                                
                                                                            </span> 
                                                                            <h3 class="figcaption">Comming soon</h3> 
                                                                        </a> 
                                                                        
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?= base_url()?>#" class="clearfix">
                                                            <strong>Features</strong>
                                                            <img class="label-hot" src="<?= base_url('assets/')?>image/catalog/menu/new-icon.png" alt="icon items">
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; right: auto;">
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="<?= base_url()?>#" class="title-submenu">Listing pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="<?= base_url()?>category.html">Category Page 1 </a></li>
                                                                                    <li><a href="<?= base_url()?>category-v2.html">Category Page 2</a></li>
                                                                                    <li><a href="<?= base_url()?>category-v3.html">Category Page 3</a></li>
                                                                                </ul>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="<?= base_url()?>#" class="title-submenu">Product pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="<?= base_url()?>product.html">Product page 1</a></li>
                                                                                    <li><a href="<?= base_url()?>product-v2.html">Product page 2</a></li>
                                                                                    <!-- <li><a href="<?= base_url()?>product-v3.html">Image size - small</a></li> -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="<?= base_url()?>#" class="title-submenu">Shopping pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="<?= base_url()?>cart.html">Shopping Cart Page</a></li>
                                                                                    <li><a href="<?= base_url()?>checkout.html">Checkout Page</a></li>
                                                                                    <li><a href="<?= base_url()?>compare.html">Compare Page</a></li>
                                                                                    <li><a href="<?= base_url()?>wishlist.html">Wishlist Page</a></li>
                                                                                
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="<?= base_url()?>#" class="title-submenu">My Account pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="<?= base_url()?>login.html">Login Page</a></li>
                                                                                    <li><a href="<?= base_url()?>register.html">Register Page</a></li>
                                                                                    <li><a href="<?= base_url()?>my-account.html">My Account</a></li>
                                                                                    <li><a href="<?= base_url()?>order-history.html">Order History</a></li>
                                                                                    <li><a href="<?= base_url()?>order-information.html">Order Information</a></li>
                                                                                    <li><a href="<?= base_url()?>return.html">Product Returns</a></li>
                                                                                    <li><a href="<?= base_url()?>gift-voucher.html">Gift Voucher</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?= base_url()?>#" class="clearfix">
                                                            <strong>Pages</strong>
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 40%; ">
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>faq.html">FAQ</a></li>
                                                                            
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>sitemap.html">Site Map</a></li>
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>contact.html">Contact us</a></li>
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>banner-effect.html">Banner Effect</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>about-us.html">About Us 1</a></li>
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>about-us-2.html">About Us 2</a></li>
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>about-us-3.html">About Us 3</a></li>
                                                                            <li><a class="subcategory_item" href="<?= base_url()?>about-us-4.html">About Us 4</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="<?= base_url()?>#" class="clearfix">
                                                            <strong>Categories</strong>
                                                            <img class="label-hot" src="<?= base_url('assets/')?>image/catalog/menu/hot-icon.png" alt="icon items">
                                                  
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; display: none;">
                                                            <div class="content">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3 img img1">
                                                                                <a href="<?= base_url()?>#"><img src="<?= base_url('assets/')?>image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img2">
                                                                                <a href="<?= base_url()?>#"><img src="<?= base_url('assets/')?>image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img3">
                                                                                <a href="<?= base_url()?>#"><img src="<?= base_url('assets/')?>image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img4">
                                                                                <a href="<?= base_url()?>#"><img src="<?= base_url('assets/')?>image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>#" class="title-submenu">Automotive</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">More Car Accessories</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>#" class="title-submenu">Funitures</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Bathroom</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Bedroom</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Decor</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Living room</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Earings</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Wedding Rings</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Men Watches</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="<?= base_url()?>#" class="title-submenu">Electronics</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Computer</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Smartphone</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Tablets</a></li>
                                                                                        <li><a href="<?= base_url()?>#"  class="main-menu">Monitors</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                    <!-- <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Accessories</strong>
                                         
                                                        </a>
                                            
                                                    </li> -->
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="<?= base_url()?>blog-page.html" class="clearfix">
                                                            <strong>Blog</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->
                                      
                    <div class="bottom3">                        
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank"> 
                                <li><a href="<?= base_url()?>#"><i class="fa fa-truck"></i>track your order</a></li> 
                                <li><a href="<?= base_url()?>#"><i class="fa fa-phone-square"></i>Hotline (+123)4 567 890</a></li> 
                            </ul>
                        </div>  
                        <div class="signin-w hidden-md hidden-sm hidden-xs">
                            <ul class="signin-link blank">                            
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="<?= base_url()?>m/login">Login </a> or <a href="<?= base_url()?>m/register">Register</a></li>                                
                            </ul>                       
                        </div>                  
                    </div>
                    
                </div>
            </div>

        </div>
    </header>
    <!-- //Header Container  -->
    
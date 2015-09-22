<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="upmire" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Stylesheets
    ============================================= -->    
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

     <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

    <!-- Document Title
    ============================================= -->
    <title> Upmire </title>


</head>

<body class="stretched no-transition">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

         <!-- Header
        ============================================= -->
        <header id="header" class="full-header sticky-header">

           <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="index.html" class="standard-logo" data-dark-logo=""><img src="" alt="Canvas Logo"></a>
                        <a href="index.html" class="retina-logo" data-dark-logo=""><img src="" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <a id="addLinkBtn" class="uploadBtn"> Upload </a>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li><a href="index.html"><div>Home</div></a></li>                             
                            <li><a href=""><div> Celebs </div></a></li>
                            <li><a href=""><div> Cute </div></a></li>
                            <li><a href=""><div> Fun </div></a>
                                <ul>
                                    <li><a href="#"><div> Slots </div></a></li>
                                    <li><a href="#"><div> Bingo </div></a></li>
                                    <li><a href="#"><div> Scratch Cards</div></a></li>                  
                                </ul>
                            </li>
                            <li><a href=""><div> Rate </div></a></li>                     
                        </ul>


                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">

                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            <a href=""><i class="icon-line2-heart"></i></a>
                            <a href=""><i class="icon-line2-lock"></i></a>                            
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->
    

       
    
        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 col-md-push-2 col-lg-push-2"> 

                                @yield('content')
                        </div>

                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-md-pull-7 col-lg-pull-7">
                            
                                <div class="left">
                                    <div class="wrappers">
                                        <div class="profile">
                                            <img src="http://localhost/laravel/public/uploads/78987_cat.jpg" alt="">
                                            <p> Emily Pooter </p>
                                            <ul class="stars">
                                                <li> <i class="icon-star3"></i> </li>
                                                <li> <i class="icon-star3"></i> </li>
                                                <li> <i class="icon-star3"></i> </li>
                                                <li> <i class="icon-star3"></i> </li>
                                                <li> <i class="icon-star3"></i> </li>
                                            </ul>
                                        </div>

                                        <div class="meter">
                                            <span style="width:100%;"><span class="progress2"></span></span>
                                        </div>

                                        <p class="selectItem">* Please select an item</p>

                                        <div class="coinTotal">
                                            <img src="images/gold_coin.png" alt="">
                                            <p> Total Coins </p>
                                            <h3> 1423 </h3>
                                        </div>
                                    </div>     
                                    <div class="wrappers" style="margin-top: 10px;">
                                        <div class="coinTotal">
                                            <img src="images/lotto_icon.gif" alt="">
                                            <p style="margin-left: 57px;"> Latest Result </p>
                                            <h3> 125 </h3>
                                        </div>
                                    </div>

                                    <div class="wrappers" style="margin-top: 10px;">
                                        <div class="dailyOffer">
                                          <p><i class="icon-star3"></i> Our Daily Offers </p>      
                                          <a href=""><img src="images/offer1.jpg" alt=""></a>
                                          <a href=""><img src="images/offer2.jpg" alt=""></a>
                                        </div>
                                    </div>


                                </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="right">
                                <div class="wrappers">
                                        <div class="listWrapper">
                                            <h3>POPULAR ITEMS</h3>
                                            
                                            <div id="post-list-footer">
                                            
                            
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                        
                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </div>

                                <div class="wrappers">
                                        <div class="listWrapper">
                                            <h3>PEOPLE YOU FOLLOWED</h3>
                                            
                                            <div id="post-list-footer">
                                            
                            
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                        
                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </div>

                                <div class="wrappers">
                                        <div class="listWrapper">
                                            <h3>PEOPLE YOU FOLLOWED</h3>
                                            
                                            <div id="post-list-footer">
                                            
                            
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                        
                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </div>

                                <div class="wrappers">
                                        <div class="listWrapper">
                                            <h3>TRENDING ARTICLES</h3>
                                            
                                            <div id="post-list-footer">
                                            
                            
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                        
                                                
                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </div>


                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->



        <!-- Footer
        ============================================= -->
        <footer id="footer" class="dark">

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2015 All Rights Reserved by Upmire.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <a href="#" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                        <div class="clear"></div>

                        <i class="icon-envelope2"></i> info@upmire.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

<div id="addLinkModal" class="modal-container">
          <div class="modal-shade"></div>
          <div class="modal">
            <div class="modal-header">
              <h1> Upload Items </h1>
              <i class="icon-line2-close closeModalBtn" title="Close Modal"></i>
            </div>
            <div class="modal-banner">
              <input type="radio" id="urlChoice" name="linkChoice" checked>
              <label for="urlChoice" title="Insert as url" id="urlLabel"> Select a category </label>
            </div>
            <div class="modal-body-container">
             
              <div id="url" class="modal-body">
                
                <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                    <span>Sub-Category</span>
                    <ul id="subDropdown" class="dropdown">
                        <li><a href="#">Outfit</a></li>                        
                    </ul>
                </div>

                <i class="fa fa-chevron-right"></i>

                <div id="dd2" class="wrapper-dropdown-1" tabindex="1">
                    <span>Category</span>
                    <ul id="parentDropdown" class="dropdown">
                        <li><a href="#">Outfit</a></li>
                        <li><a href="#">Recipe</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Cooking</a></li>
                        <li><a href="#">Diet</a></li>
                        <li><a href="#">Room</a></li>
                        <li><a href="#">Garden</a></li>
                        <li><a href="#">Jewelry</a></li>
                        <li><a href="#">Holiday</a></li>
                    </ul>
                </div>

                <div>
                 

                <div class="outer" style="    
    height: 150px;
    float: right;
    width: 250px;
    margin-left: 15px;
    border-radius: 2px;
    overflow: hidden;">
                                    <div class="inner" style="overflow: hidden;">
                                        <img id="myImg" style="width:100%;">                              
                                    </div>
                    </div>
                    <div class="fileUpload">
                        <i class="icon-line-upload" style="display:block;color: #F36198;"></i>
                        <span>Upload Image</span>
                        <input type="file" name="file" class="upload" style="width:auto;">
                    </div>
                    
                </div>
                <div style="
    clear:both;
    display: block;
    margin-top: 30px;">
                  <input type="text" id="urlText" name="urlTextValue">
                  <label for="urlText"> Item Title </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Description </label>
                </div>           
               <!--  <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Intended application </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Animal Tested </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Eco Friendly </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Alternative Products </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Price Range </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Available From </label>
                </div> -->
              </div>
            
            </div>

            <div class="modal-footer">
              <!-- <div>
                <i id="fakeFileUploadBtn" class="icon-line-image" title="Upload File"></i>
                <input type="file" id="realFileUploadBtn" name="realFileUploadBtnValue">
                <span> Select an Image </span>
              </div> -->
              <div>                
                <p id="modal-add" class="footer-btn" title="Upload Now">  <i class="icon-line-cloud-upload"> </i> </p>                
              </div>
            </div>
          </div>
        </div>

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->      
    

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script>
       $(document).ready(function() {
           

            $(":file").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                    reader.readAsDataURL(this.files[0]);
                }
            });

            function imageIsLoaded(e) {
                $('#myImg').attr('src', e.target.result);           
            };


            function DropDown(el) {
                this.dd = el;
                this.placeholder = this.dd.children('span');
                this.opts = this.dd.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                        return false;
                    });

                    obj.opts.on('click',function(){
                        var opt = $(this);
                        obj.val = opt.text();
                        obj.index = opt.index();
                        obj.placeholder.text(obj.val);
                    });
                },
                getValue : function() {
                    return this.val;
                },
                getIndex : function() {
                    return this.index;
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-1').removeClass('active');
                });

            });

            function DropDown(el) {
                this.dd2 = el;
                this.placeholder = this.dd2.children('span');
                this.opts = this.dd2.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd2.on('click', function(event){
                        $(this).toggleClass('active');
                        return false;
                    });

                    obj.opts.on('click',function(){
                        var opt = $(this);
                        obj.val = opt.text();
                        obj.index = opt.index();
                        obj.placeholder.text(obj.val);
                    });
                },
                getValue : function() {
                    return this.val;
                },
                getIndex : function() {
                    return this.index;
                }
            }

            $(function() {

                var dd2 = new DropDown( $('#dd2') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-1').removeClass('active');
                });

            });

          // Set global variables
          var $textInputTypes = $("input[type=text], input[type=url]");
          var $fileHeight = $("#file").css("height");
          var $urlHeight = $("#url").css("height");
          
          // When user clicks on add link button in top left corner
          $("#addLinkBtn").on("click", function() {
            $(".modal").css({'z-index':'9999'});
            TweenMax.to($(".modal"), .3, { // Drop down modal
              top: "10%",             
              onComplete: function() { // When modal drops, lengthen modal body height 
                if ($("#urlChoice").is(':checked')) { // Make sure urlChoice radio is selected
                  TweenMax.to($(".modal-body-container"), .5, { // Change the height of modal body
                    height: $urlHeight,
                    ease: Expo.easeOut,
                    // When at correct height, show url body and focus on first input
                    onComplete: function() { 
                      TweenMax.to($("#url"), .3, {
                        opacity: 1,
                        //onComplete: function() {$("#urlText").focus();}
                      })
                    }
                  });
                  TweenMax.to($("#url"), .5, {display: "block"});
                }
              }
            });
            TweenMax.to($(".modal-shade"), .7, { // Delay start the modal shade
              position: "fixed",
              opacity: 1,
              delay: .3
            });
          });
          
          // When a user clicks on a the radio buttons for url || link
          $("input[name=linkChoice]").on("click", function() {
            if ($(this).attr("id") == "urlChoice") { // if urlChoice is clicked
              // if urlChoice is visible ? do nothing : hide file and show url
              if ($("#url").not(":visible")) {
                // hide file
                
              }
            }
          });
          
          // When a user clicks on the file upload button, trigger the invisible file upload input
          $("#fakeFileUploadBtn").on("click", function() {
            $("#realFileUploadBtn").trigger("click");
          });
          
          // WHen a user focuses out of a text input and there is text, the label will stay to the top
          $($textInputTypes).on("focusout", function() {
            var $this = $(this);
            var $isText = $this.val();
            
            if ($isText !== "") 
              $this.next().addClass("labelHasText");
            else
              $this.next().removeClass("labelHasText");
          });
          
          // When the user clicks on the close modal button
          $(".closeModalBtn").on("click", function() {
      
            TweenMax.to($(".modal"), .3, {
              top: "-100%",
              zIndex: "-1",
              ease: Back.easeIn
            });
            TweenMax.to($(".modal-shade"), .6, {
              position: "relative",
              opacity: 0
            });

            

            // Change Modal Container Height back to auto
            $(".modal-body-container").css("height", "auto");
            
            // Change the URL portion back to normal
            $("#url").css({
              "display": "none",
              "opacity": 0,
            });
            
            // Change radio back to url choice
            $("#urlChoice").prop("checked", true);
            
            // Change the File portion back to normal
            $("#file").css({
              "display": "none",
              "opacity": 0
            });  


            
           

          });
          
          $(window).resize(function() {
            $fileHeight = $("#file").css("height");
            $urlHeight = $("#url").css("height");
            if ($(".modal").is(":visible")) {
              
            }
          });
        });
    </script>

</body>
</html>
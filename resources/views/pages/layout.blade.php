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

<style>
    .rateEntry{
        margin-bottom: 30px;
        overflow: hidden;
    }
     .rateMenu{
        text-align: center;
        background-color: #fff;
        margin-bottom: 40px;
        padding-top: 2px;
        padding-bottom: 5px;
        border-radius: 2px;
        /* border-bottom: 1px dashed #DFDFDF; */
     }
    .rateMenu li{        
        padding-right: 3px;
    }
    .rateMenu li span{
        font-size: 10px;
        font-weight: 600;
        /*display: block;*/
        color: #343030;
        /* background-color: #000; */
        padding: 3px 8px;
        border-radius: 3px;
        text-transform: uppercase;
    }
    .rateMenu li a img{
        width: 41px;
        padding: 2px;
        overflow: hidden;
        border-radius: 50%;
        /*border: 1px solid #EBEBEB;
        background-color: whitesmoke;*/
        /*background: linear-gradient(to bottom, #F5F5F5 0%,#E5E5E5 100%);*/
    }   

</style>

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
                            <li><a><div> Fun </div></a>
                                <ul>
                                    <li><a href="#"><div> Slots </div></a></li>
                                    <li><a href="#"><div> Bingo </div></a></li>
                                    <li><a href="#"><div> Scratch Cards</div></a></li>                  
                                </ul>
                            </li>
                            <li><a href="{{ url('/rate') }}"><div> Rate </div></a></li>                     
                        </ul>


                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">

                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            <a href=""><i class="icon-line2-heart"></i></a>
                            <a href="" class="headerNotification"><i class="icon-bell"></i><span class="badge"> 2</span></a>
                            <a href=""><i class="icon-line2-lock"></i></a>                            
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>   

                 @if(Request::is('rate*')) 
                <ul class="list-inline rateMenu">
                    <!-- <li><span> Categories </span></li> -->
                    <li> <a href=""> <img src="{{ asset('images/outfits.png') }}" alt=""> <span>Outfits</span> </a> </li>
                    <li> <a href=""> <img src="{{ asset('images/shoes.png') }}" alt=""> <span>Shoes</span> </a> </li>        
                    <li> <a href=""> <img src="{{ asset('images/cooking.png') }}" alt=""> <span>Cooking</span> </a> </li>
                    <li> <a href=""> <img src="{{ asset('images/diet.png') }}" alt=""> <span> Diet </span></a> </li>
                    <li> <a href=""> <img src="{{ asset('images/bedroom.png') }}" alt=""> <span> Bedroom </span> </a> </li>
                    <li> <a href=""> <img src="{{ asset('images/garden.png') }}" alt=""> <span> Garden </span></a> </li>
                    <li> <a href=""> <img src="{{ asset('images/jewelry.png') }}" alt=""> <span> Jewelry </span></a> </li>
                    <li> <a href=""> <img src="{{ asset('images/holiday.png') }}" alt=""> <span> Holiday </span></a> </li>
                    <li> <a href=""> <img src="{{ asset('images/product.png') }}" alt=""> <span> Products </span> </a> </li>
                </ul> 
                @endif
                                    

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
                                            <img src="{{ asset('images/gold_coin.png') }}" alt="">
                                            <p> Total Coins </p>
                                            <h3> 1423 </h3>
                                        </div>
                                    </div>     
                                    <div class="wrappers" style="margin-top: 10px;">
                                        <div class="coinTotal">
                                            <img src="{{ asset('images/lotto_icon.gif') }}" alt="">
                                            <p style="margin-left: 57px;"> Latest Result </p>
                                            <h3> 125 </h3>
                                        </div>
                                    </div>

                                    <div class="wrappers" style="margin-top: 10px;">
                                        <div class="dailyOffer">
                                          <p><i class="icon-star3"></i> Our Daily Offers </p>      
                                          <a href=""><img src="{{ asset('images/offer1.jpg') }}" alt=""></a>
                                          <a href=""><img src="{{ asset('images/offer2.jpg') }}" alt=""></a>
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


<!--- Quick Uplaod Popup -->

<div id="addLinkModal" class="modal-container">
          <div class="modal-shade"></div>
          <div class="modal">
            <div class="modal-header">
              <h1> Upload Items  <a href="http://localhost/upmire/public/dashboard" style="    
    font-size: 13px;
    font-family: Roboto;
    color: #FFAFCD;
    padding: 10px;
    position: relative;
    top: -2px;"> Click here for product upload </a>  <i class="i"></i>  </h1>
              <i class="icon-line-cross closeModalBtn" title="Close Modal"></i>
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
                 

             
                    <div class="fileUpload">
                        <i class="icon-line-upload" style="display:block;color: #E4075B;"></i>
                        <span>Upload Image</span>
                        <input type="file" name="file" class="upload" style="width:auto;">

                           <div class="outer" style="  
    height: 100%;
    width:100%;                            
    border-radius: 2px;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.3;">
                                    <div class="inner" style="overflow: hidden;-moz-transform: translate(0%,-15%);-webkit-transform: translate(0%,-15%);transform: translate(0%,-15%);">
                                        <img id="myImg" style="width:100%;">                              
                                    </div>
                    </div>

                    </div>
                    
                </div>
                <div style="
    clear:both;
    display: block;
    margin-top: 15px;
  ">
                  <input type="text" id="urlText" name="urlTextValue">
                  <label for="urlText"> Item Title </label>
                </div>
                <div>
                  <input type="url" id="urlURL" name="urlURLValue">
                  <label for="urlURL"> Description </label>
                </div>           
              </div>
            
            </div>

            <div class="modal-footer">
              <!-- <div>
                <i id="fakeFileUploadBtn" class="icon-line-image" title="Upload File"></i>
                <input type="file" id="realFileUploadBtn" name="realFileUploadBtnValue">
                <span> Select an Image </span>
              </div> -->
              <div>                
                <p id="modal-add" class="footer-btn" title="Upload Now">  <i class="icon-cloud-upload"> </i> </p>   

              </div>
            </div>
          </div>
        </div>


<!--- Dashboard Uplaod Popup -->
<div class="wrappers uploadModal" style="margin-top:10px;padding: 0;position: absolute;top: -100%;">
    <i class="icon-line2-close uploadModalClose" title="Close Modal"></i>
    <div class="tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-9">

        <ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist" style="    
    background-color: #F36198;">
            <li class="ui-state-default ui-corner-top  ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="tabs-33" aria-labelledby="ui-id-17" aria-selected="false"><a href="#tabs-33" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-17"> Item Upload </a></li>
            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-34" aria-labelledby="ui-id-18" aria-selected="false"><a href="#tabs-34" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-18"> Product Upload </a></li>           
        </ul>

        <div class="tab-container">

            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-33" aria-labelledby="ui-id-17" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;padding: 0 10px;">
                
        
            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-34" aria-labelledby="ui-id-18" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;padding: 0 10px;">

                <form action="{{url('dashboard')}}" method="POST" enctype='multipart/form-data'>
                            {!! csrf_field() !!}
                

                        <div class="col_half">
                            
                             <div style="margin-bottom: 25px;">
                                 <div class="fileUpload fileUpload2" style="width:100%;padding: 15px;">
                                    <i class="icon-line-upload" style="display:block;color: #F36198;"></i>
                                    <span>Upload Image</span>
                                    <input type="file" name="file2" class="upload" style="width:auto;">
                                </div>
                                <div class="outer" style=" height: 300px; margin-top:20px; border-radius: 2px; overflow: hidden;">
                                    <div class="inner" style="overflow: hidden;">
                                        <img id="myImg2" style="width:100%;">                              
                                    </div>
                                </div>
                               
                            </div>


                        </div>
                        <div class="col_half col_last">
                            
                            <div class="productUploadForm">
                                <span> Product Name </span>
                                <input type="text" name="name" style="margin-top: 0;" required>

                                <span> Intended application </span>
                                <input type="text" name="intended_applicaion" style="margin-top: 0;" required>

                                <span> Animal Tested </span>
                                 <input type="radio" name="animal_tested" value="yes" checked> 
                                 <label for="animal_tested"> Yes </label>
                                 <input type="radio" name="animal_tested" value="No"> 
                                 <label for="animal_tested"> No </label>
                                 <br />
                                 <br />


                                <span> Eco Friendly </span>
                                <input type="radio" name="eco_friendly" value="yes" checked>
                                <label for="eco_friendly"> Yes </label>
                                 <input type="radio" name="eco_friendly" value="No">
                                 <label for="eco_friendly"> No </label>
                                 <br />
                                 <br />

                                <span> Alternative Products </span>
                                <input type="text" name="alt_products" style="margin-top: 0;" required>

                                <span> Price Range </span>
                                <input type="text" name="price_range" style="margin-top: 0;" required>

                                <span> Available From </span>
                                <input type="text" name="available_from" style="margin-top: 0;" required>

                                <input class="productUploadSubmit" type="submit" value="Submit">  
                            </div>

                        </div>

                </form>

            </div>
        

        </div>

    </div>
</div>

<!---Rate Item Popup -->
<div id="rateItem">
    <a class="imgRateClose" style="    
position: absolute;
color: #EDEDED;
z-index: 2;
top: 10px;
right: 10px;
font-size: 13px;
text-transform: uppercase;
font-weight: 600;"> <i class="icon-line-cross"></i> </a>
    <div class="col-md-7">
        <div class="left">
            <div class="topBlack">
                <!-- <div class="user"><img src="http://vps184562.ovh.net/uploads/29713_cat.jpg" alt=""> <span><a href="">by Emily</a></span> </div> -->
                <h2> Sweet Navy</h2>
            </div>
            <img src="http://www.hammihan.com/users/status/original/HamMihan-201510658816090181021424900436.058.jpg" alt="">
        </div>
    </div>
    <div class="col-md-5">
        <div class="right">
            <div class="admireBox">
                <h2> 100% <span> admirability </span> </h2>

                <div class="meterWrapper2 ">
                    <div class="meter" style="background:#df4580; border:1px solid rgb(240, 78, 140); height: 12px;">                   
                        <span style="width:100.0000%;"><span class="progress" style="background:#fd96be;"></span></span>
                    </div>
                  </div>

                <div class="pinkSeparator"></div>
                <ul class="list-inline pull-right listtwo">
                    <li> <a class="shareLink"> <i class="icon-share-alt"></i> </a> 
                         <div id="shareBox">                                
                                <div class="friendlist">
                                    <ul>
                                        <li>
                                            <a href="" class="fb">
                                                <p> <i class='icon-facebook-sign'></i> <span> Facebook </span>  </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="twtr">
                                                <p> <i class='icon-twitter'></i>  <span> Twitter </span> </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="pinterest">
                                                <p> <i class='icon-pinterest2'></i>  <span> Pinterest </span></p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </li>
                    <li> <a class="sendLink"> <i class="icon-paperplane"></i> </a>
                             <div id="sendBox">                                                                                             
                                <!-- <div class="sendImgWrap">
                                    <img src="http://des.rosewholesale.com/uploads/201211/heditor/201211191121242461.jpg" alt="">
                                </div> -->
                                <!-- <div style="height:100px;width:100%;overflow:hidden;">
                                    <span class="itemTitle">Sweet Navy</span>
                                    <img src="http://i01.i.aliimg.com/wsphoto/v0/2026196955_2/MOLE-2015-New-Fashion-Autumn-Winter-Sweater-Mohair-Cardigan-Knitted-Solid-Dress-Long-Sleeve-Knitted-Sweater.jpg" alt="">                                    
                                </div> -->
                                
                               
                                <textarea placeholder="Your message here..."></textarea>
                                <input type="text" placeholder="Search users"> 
                                <div class="friendlist">
                                    <span style="    
    color: #E8BFCE;
    font-size: 11px;
    margin: 0 12px;
    display: block;
    text-align: right;"> Send to  </span> 
                                    <ul>
                                        <li>
                                            <a href="">
                                                <div class="friendImg">                                            
                                                    <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xtp1/v/t1.0-1/p100x100/11692791_1033839559960313_372475612082020913_n.jpg?oh=0dc578c37cb4448f0ed656cf1d3b8dfd&oe=56A697B7&__gda__=1452669051_59a0ec27323dad96c80cacbeddd5e32b" alt="">                                                
                                                </div>
                                                <p> Alice Watermelon </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="friendImg">                                            
                                                    <img src="http://cdn.myanimelist.net/images/userimages/thumbs/4765654_thumb.jpg" alt="">                                                
                                                </div>
                                                <p> faliha101 </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <div class="friendImg">                                            
                                                    <img src="http://cdn.myanimelist.net/images/userimages/thumbs/1337071_thumb.jpg" alt="">                                                
                                                </div>
                                                <p> littleboyorange </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                

                            </div>
                     </li>
                </ul>
               
                <ul class="list-inline">
                    <li> <a href=""> <i class="icon-heart3 admired"></i> </a> </li>
                    <li> <a href=""><i class="icon-heart-empty dislike"></i> </a> </li>
                    <li> <span> You admire this. </span></li>                   
                </ul>
            </div>

            <div class="admireComment">
                <div class="col_three_fifth nobottommargin">
                    <div class="meter">
                     <span id="meter_yoyo" style="width:41.66666666666667%;"><span class="progress2"></span></span>
                    </div>
                    <span class="info" id="coins_to_earn"> 70 coins can be earned </span>
                </div>
                <div class="col_two_fifth col_last nobottommargin">
                    <span class="totalCoins"> Your Coins</span>
                    <p class="coins current_coins">907</p>
                </div>
            </div>

            <div class="commentWrapper">                              

                                            
                                            <h3> Comments <span> · <span id="comment_counter">4 </span></span></h3>
                                              <ul id="put_comments_here">
                                                                                                        <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-18 12:23:29 </span> </span>
                                                          <p class="commentContent"> water </p>
                                                      </li>
                                                                                                        <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 12:39:32 </span> </span>
                                                          <p class="commentContent">  </p>
                                                      </li>
                                                                                                        <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 12:39:33 </span> </span>
                                                          <p class="commentContent"> HALLO </p>
                                                      </li>
                                                                                                        <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 14:30:13 </span> </span>
                                                          <p class="commentContent"> tttttt </p>
                                                      </li>
                                                      <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 14:30:13 </span> </span>
                                                          <p class="commentContent"> tttttt </p>
                                                      </li>
                                                      <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 14:30:13 </span> </span>
                                                          <p class="commentContent"> tttttt </p>
                                                      </li>
                                                      <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 14:30:13 </span> </span>
                                                          <p class="commentContent"> tttttt </p>
                                                      </li>
                                                      <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 14:30:13 </span> </span>
                                                          <p class="commentContent"> tttttt </p>
                                                      </li>
                                                      <li>
                                                          <img src="
                                                                                                                          http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                             

                                                          " alt="">
                                                          <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-21 14:30:13 </span> </span>
                                                          <p class="commentContent"> tttttt </p>
                                                      </li>

                                                                     
                                              </ul>
                                          <div class="clearfix"></div>
                                          <form class="clearfix" action="#" method="post" id="commentform">
                                              <textarea id="comment_yeah" name="comment" cols="30" rows="10"></textarea>
                                              <!-- <input type="submit" id="submit-button" class="commentSubmit pull-right" value="Submit" style="margin: 0; margin-bottom: 20px;"> -->
                                          </form>
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
    <!-- <script type="text/javascript" src="{{ asset('js/simplebar.min.js') }}"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script>
       $(document).ready(function() {

            $(".sendLink").click(function() {
                $("#sendBox").toggle();
                $("#rateItem .icon-paperplane").css('color','white');
                $("#rateItem .icon-share-alt").css('color','#f8aac7');
                $("#shareBox").css('display','none');
            });

            $(".shareLink").click(function() {
                $("#shareBox").toggle();                
                $("#rateItem .icon-share-alt").css('color','white');
                $("#rateItem .icon-paperplane").css('color','#f8aac7');
                $("#sendBox").css('display','none');
            });
           
            //$('#put_comments_here').simplebar();

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

        

          
          $(".imgRate").on("click", function() {
               TweenMax.to($("#rateItem"), .3, { // Drop down modal
                  top: "6%",             
                  onComplete: function() { // When modal drops, lengthen modal body height 
                    // if ($("#urlChoice").is(':checked')) { // Make sure urlChoice radio is selected
                    //   TweenMax.to($(".modal-body-container"), .5, { // Change the height of modal body
                    //     height: $urlHeight,
                    //     ease: Expo.easeOut,
                    //     // When at correct height, show url body and focus on first input
                    //     onComplete: function() { 
                    //       TweenMax.to($("#url"), .3, {
                    //         opacity: 1,
                    //         //onComplete: function() {$("#urlText").focus();}
                    //       })
                    //     }
                    //   });
                    //   TweenMax.to($("#url"), .5, {display: "block"});
                    // }
                  }
                });
                TweenMax.to($(".modal-shade"), .7, { // Delay start the modal shade
                  position: "fixed",
                  opacity: 1,
                  delay: .3
                });
            });

            $(".imgRateClose").on("click", function() {
                  
                TweenMax.to($("#rateItem"), .3, {
                  top: "-100%",
                  ease: Back.easeIn
                });
                TweenMax.to($(".modal-shade"), .6, {
                  position: "relative",
                  opacity: 0
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
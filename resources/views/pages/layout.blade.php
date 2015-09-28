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
                        <a href="{{url('')}}" class="standard-logo" data-dark-logo=""><img src="" alt=""></a>
                        <a href="{{url('')}}" class="retina-logo" data-dark-logo=""><img src="" alt=""></a>
                    </div><!-- #logo end -->
                       
                   <div class="btn-group pull-right" >
                        <a data-toggle="dropdown" aria-expanded="false"> Upload </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a id="addLinkBtn"> Item </a></li>
                            <li><a id="addLinkBtn2"> Product </a></li>
                        </ul>
                    </div>

                    
                    <!-- <div class="dropdown" style="    
   float: right;
    margin-top: 17px;">
                      <a id="dLabel" class="headerNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-line2-heart"></i><span class="badge"> 2</span>                     
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                        ...
                      </ul>
                    </div> -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li><a href="{{url('')}}"><div>Home</div></a></li>                             
                            <li><a href="{{url('celebs')}}"><div> Celebs </div></a></li>
                            <li><a href="{{url('cute')}}"><div> Cute </div></a></li>
                            <li><a href=""><div> Fun </div></a>
                                <ul>
                                    <li><a href="{{url('slots')}}"><div> Slots </div></a></li>
                                    <li><a href="{{url('bingo')}}"><div> Bingo </div></a></li>
                                    <li><a href="{{url('scratch-cards')}}"><div> Scratch Cards</div></a></li>                  
                                </ul>
                            </li>
                            <li><a href="{{ url('/rate') }}"><div> Rate </div></a></li>                     
                        </ul>


                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">

                            <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            <a href="{{ url('/dashboard')}}"><i class="icon-line2-heart"></i></a> 
                            <a href="{{ url('/login')}}"><i class="icon-line2-lock"></i></a>                            
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>   

                 @yield('ratemenu')
                                    
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
                            @include('pages.__leftSideBar')
                            </div>
                            
                            @include('pages.__rightSideBar')

                    </div>

                </div>

            </div>

        </section><!-- #content end -->



        <!-- Footer
        ============================================= 
        <footer id="footer" class="dark" style="margin-top:0!important;">-->

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

       <!-- </footer> #footer end -->

    </div><!-- #wrapper end -->


<!--- Quick Uplaod Popup -->

<div id="addLinkModal" class="modal-container">
<form action="{{ url('rate/rate_upload') }}" method="POST" enctype='multipart/form-data' style="margin-bottom:0;">

{!! csrf_field() !!}
    <div class="modal-shade"></div>
    <div class="modal">
        <div class="modal-header">
            <h1> Upload Items </h1>
            <i class="icon-line-cross closeModalBtn" title="Close Modal"></i>
        </div>
        <div class="modal-banner">
            <input type="radio" id="urlChoice" name="linkChoice" checked>
            <label for="urlChoice" title="Insert as url" id="urlLabel"> Select a category </label>
        </div>
        @inject('getRateCategories','App\Sidebar')

        <div class="modal-body-container">

            <div id="url" class="modal-body">
                     <div class="select-style pull-right" style="margin-right:240px">
                        {!! Form::select('rate_categories_child',['select' => 'Select Parent'], null,['disabled','id' => 'rate_categories_child']) !!}
                    </div>
                    <div class="select-style">
                        {!! Form::select('rate_categories_parent',$getRateCategories->getRateCategories(), null,['id' => 'rate_categories_parent']) !!}
                    </div>
                   
                <div style="margin-top: 20px;">
                    <div class="fileUpload">

                        <i class="icon-line-upload" style="display:block;color: #E4075B;"></i>
                        <span>Upload Image</span>
                        <input type="file" name="file" class="upload" style="width:auto;">

                        <div class="outer" style="height: 100%; width:100%; border-radius: 2px; overflow: hidden; position: absolute; top: 0; left: 0;opacity: 0.3;">
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
                    <input type="text" id="urlText" name="name" required>
                    <label for="urlText"> Item Title </label>
                </div>

                <div>
                    <input type="text" id="urlURL" name="description" required>
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
                <!-- <p id="modal-add" class="footer-btn" title="Upload Now">  <i class="icon-cloud-upload"> </i> </p>  -->  
                <input type="submit" value="Upload Now" style="
    border: 1px solid #6D6D6D;
    background-color: #DADADA;
    color: #000;
    padding: 5px 20px;
    font-weight: 600;
    font-size: 12px;
    border-radius: 3px;
    ">
            </div>
        </div>
    </div>
    </form>
</div>


<div id="addLinkModal2" class="modal-container2">
<form action="{{ url('dashboard') }}" method="POST" enctype='multipart/form-data' style="margin-bottom:0;">

{!! csrf_field() !!}
    <div class="modal-shade"></div>
    <div class="modalproduct">
        <div class="modal-header">
            <h1> Upload Product </h1>
            <i class="icon-line-cross closeModalBtnProduct" title="Close Modal"></i>
        </div>
        <div class="modal-banner">
            <input type="radio" id="urlChoice2" name="linkChoice" checked>
            <label for="urlChoice" title="Insert as url" id="urlLabel2"> Upload an image </label>
        </div>
        <div class="modal-body-container" style="overflow:hidden;">

            <div id="url2" class="modal-body">                            
                
                <div style="
    margin-top: 30px;
    margin:10px;
    position: relative;
    ">
                     <div class="fileUpload fileUpload2" style="   
    width: 100%;
    padding: 15px;
    z-index: 2;
    height: 130px;">
                        <i class="icon-line-upload" style="
   display:block;
   color: #F36198;
   margin-top: 25px;"></i>

                        <span>Upload Image</span>
                        <input type="file" name="file2" class="upload" style="width:auto;">
                    </div>
                    <div class="outer" style="    
    border-radius: 2px;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0.3;">
                        <div class="inner" style="
    overflow: hidden;
    -moz-transform: translate(0%,-15%);
    -webkit-transform: translate(0%,-15%);
    transform: translate(0%,-15%);">
                            <img id="myImg2" style="width:100%;">                              
                        </div>
                    </div>
                </div>

                
                <form action="{{url('dashboard')}}" method="POST" enctype='multipart/form-data'>
                {!! csrf_field() !!}    
                             <div class="col_half col_last nobottommargin">
                                <div class="productUploadForm" style="padding: 15px;">
                                    <span> Product Name </span>
                                    <input type="text" name="name" style="margin-top: 0;" required>

                                    <span> Intended application </span>
                                    <input type="text" name="intended_applicaion" style="margin-top: 0;" required>
                                    <br />
                                 
                                    <span> Animal Tested </span>
                                     <input type="radio" name="animal_tested" value="yes" checked> 
                                     <label for="animal_tested"> Yes </label>
                                     <input type="radio" name="animal_tested" value="No"> 
                                     <label for="animal_tested"> No </label>
                                     <br />
                                   


                                    <span> Eco Friendly </span>
                                    <input type="radio" name="eco_friendly" value="yes" checked>
                                    <label for="eco_friendly"> Yes </label>
                                     <input type="radio" name="eco_friendly" value="No">
                                     <label for="eco_friendly"> No </label>
                                     <br />
                                   <br />
                                </div>
                            </div>


                            <div class="col_half nobottommargin">

                                <div class="productUploadForm" style="padding: 15px;">
                                    <span> Alternative Products </span>
                                    <input type="text" name="alt_products" style="margin-top: 0;" required>

                                    <span> Price Range </span>
                                    <input type="text" name="price_range" style="margin-top: 0;" required>

                                    <span> Available From </span>
                                    <input type="text" name="available_from" style="margin-top: 0;" required>

                                     
                                </div>
                                
                            </div>
              
                          
            </div>
        </div>

        <div class="modal-footer">          
            <div>                              
                <input type="submit" value="Upload Now" style="
    border: 1px solid #6D6D6D;
    background-color: #DADADA;
    color: #000;
    padding: 5px 20px;
    font-weight: 600;
    font-size: 12px;
    border-radius: 3px;
    ">
            </div>
        </div>
    </div>
    </form>
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
                <ul class="list-inline tleft">
                    <li> <a href=""> <i class="icon-heart3 admired"></i> </a> </li>
                    <li> <a href=""><i class="icon-heart-empty dislike"></i> </a> </li>
                    <li> <span> You admire this. </span></li>                   
                </ul>                
            </div>

            <div class="clearfix"></div>

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
                            <img src="http://vps184562.ovh.net/uploads/29713_cat.jpg" alt="">
                                <span class="name"> <a href="http://vps184562.ovh.net/profile/1"> Emily </a> <span class="commentDate"> · 2015-09-18 12:23:29 </span> </span>
                                <p class="commentContent"> water </p>
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
    <script type="text/javascript" src="{{ asset('js/simplebar.min.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script>
       $(document).ready(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $( "#rate_categories_parent" ).change(function() {
            var parent_id = "";
            $( "#rate_categories_parent option:selected" ).each(function() {
              parent_id += $( this ).attr('value') + " ";
            });

            if(parent_id != 0)
            {
                $.ajax({ 
                    type: 'post',
                    url: "{{url('ajax_get_child')}}",
                    data: {_token: CSRF_TOKEN,'parent_id' : parent_id}, 
                    success: function(response)
                    {
                        var option_men = '';
                        var parsed = JSON.parse(response);

                        $.each(parsed, function(idx, obj) {
                           option_men += '<option value="'+obj.slug+'">'+obj.name+'</option>';
                        });

                        $('#rate_categories_child').html(option_men);
                        $('#rate_categories_child').removeAttr('disabled');
                    }
                });
            }
            else
            {
                $('#rate_categories_child').html('<option value="select">Select Parent</option>');
                $('#rate_categories_child').attr('disabled','disabled');
            }


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

          // When user clicks on add link button in top left corner
          $("#addLinkBtn2").on("click", function() {
            $(".modalproduct").css({'z-index':'9999'});
            TweenMax.to($(".modalproduct"), .3, { // Drop down modal
              top: "10%",             
              onComplete: function() { // When modal drops, lengthen modal body height               
                  TweenMax.to($(".modal-body-container"), .5, { // Change the height of modal body
                    height: $urlHeight,
                    ease: Expo.easeOut,                    
                    onComplete: function() { 
                      TweenMax.to($("#url2"), .3, {
                        opacity: 1,                        
                      })
                    }
                  });
                  TweenMax.to($("#url2"), .5, {display: "block"});                
              }
            });
            TweenMax.to($(".modal-shade"), .7, { // Delay start the modal shade
              position: "fixed",
              opacity: 1,
              delay: .3
            });
          });

          // When the user clicks on the close modal button
          $(".closeModalBtnProduct").on("click", function() {
      
            TweenMax.to($(".modalproduct"), .3, {
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
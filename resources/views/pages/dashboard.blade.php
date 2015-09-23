@extends('pages.layout')

@section('content')

<style>
	.uploadModal{
		position: fixed;
		top: -100%;
		left: 25%;
		width: 100%;
		max-width: 600px;
	}
	.tabs{
		margin-bottom: 0;
	}
	.uploadModalClose{
		float: right;
	    margin: 9px 10px;
	    font-size: 15px;
	    position: relative;
	    z-index: 2;
	    color: #E93376;
	}
	.productUploadForm span{
		color: #B3B2B2;
	    font-size: 14px;
	    font-weight: 500;
	}
	
	.productUploadSubmit{
		background-color: #F45F98;
	    border: 0;
	    color: #fff;
	    font-family: Roboto;
	    font-weight: 700;
	    padding: 6px 22px;
	    font-size: 17px;
	    border-radius: 20px;
	}
	ul.tab-nav:not(.tab-nav-lg) li a{
		color: #fff;
	}
	.tabs.tabs-bb ul.tab-nav li a{
		border-bottom: none;
	}
	.tabs.tabs-bb ul.tab-nav li.ui-tabs-active a {
		background-color: #E35E90;
		height: 43px;
	    border-bottom: none;
	    -moz-box-shadow: inset 0 0 10px -3px #CF1B5E;
	    -webkit-box-shadow: inset 0 0 10px -3px #CF1B5E;
	    box-shadow: inset 0 0 10px -3px #CF1B5E;
	}
</style>




<div class="wrappers">	
	<div class="dashLink">
		<ul class="list-inline">
			<li> <a href=""><i class="icon-line2-heart"></i> Claim Coins </a> </li>
			<li> <a href=""><i class="icon-line2-diamond"></i> Buy Gifts </a> </li>
			<li> <a href=""><i class="icon-line2-star"></i> Win Prizes </a> </li>
			<li> <a href=""><i class="icon-cart"></i> Buy Coins </a> </li>
			<li> <a href=""><i class="icon-ticket"></i> Lotto Tickets </a> </li>		
		</ul>
	</div>
</div>

	
<div class="wrappers" style="margin-top:10px;padding: 0;background-color: #E7E5E5;">		
		<select name="" id="" class="pull-right" style="    
	margin: 10px;
    padding: 3px 5px;
    font-family: Roboto;
    font-size: 13px;
    border-radius: 3px;
    background-color: #F2F0F0;
    border: navajowhite;
    color: #000;
    font-weight: 600;">
			<option value=""> Category: All </option>
			<option value=""> Outfits </option>
			<option value=""> Recipe </option>
			<option value=""> Shoes </option>
			<option value=""> Cooking </option>
		</select>
		<select name="" id="" class="pull-right" style="    
	margin: 10px;
    padding: 3px 5px;
    font-family: Roboto;
    font-size: 13px;
    border-radius: 3px;
    background-color: #F2F0F0;
    border: navajowhite;
    color: #000;
    font-weight: 600;">
			<option value=""> Most Admired </option>
			<option value=""> Ascending </option>
			<option value=""> Descending </option>
		</select>
		<h6> Uploaded Items </h6>
		<!-- <div class="row thumbGallery"> -->
			<div id="image_container">
				
						@foreach($rateItems as $rateItem)
							<div class="outer">
								<div class="inner">
							<!-- <div class="col-md-3 col-sm-4 col-xs-6"> -->
								<a href=""><img class="img-responsive" src="{{url('uploads')}}/{{$rateItem->image_url}}" /></a>
							<!-- </div> -->
								</div>                          
							</div>
						@endforeach
						<div class="outer">
							<div class="inner" style="transform: translate(30%,24%);">
						<!-- <div class="col-md-3 col-sm-4 col-xs-6"> -->
							<a id="uploadItemBtn" style="    
    display: inline-block;
    border: 1px dashed;
    padding: 5px 15px;
    font-size: 40px;
    color: #B8B8B8;"><i class="icon-line-plus"></i></a>
						<!-- </div> -->
							</div>                          
						</div>
						
					
			</div>
	    <!-- </div> -->
</div>




<div class="wrappers" style="margin-top:10px;">		
	<div class="referralContainer center">
		<ul class="list-inline">
			<li><a target="_blank" href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?app_id=809770709118677&amp;sdk=joey&amp;u=http%3A%2F%2Flilotime.com%2F&amp;display=popup&amp;ref=plugin&amp;src=share_button','FB Share','width=500,height=300')" data-toggle="tooltip" title="" data-original-title="Refer on Facebook"><i class="icon-facebook-sign" style="color: #425f9c;"></i></a></li>
			<li><a target="_blank" href="https://twitter.com/intent/tweet?url=http://lilotime.com/&amp;text=@WatrmelonAlice+has+invited+you+to+join+@LiloTimeMag+get+100+coins+just+for+signing+up!" data-toggle="tooltip" title="" data-original-title="Refer on Twitter"><i class="icon-twitter2" style="color:#2aaae0;"></i></a></li>
			<li><a href="#" class="mail" data-toggle="modal" data-target="#myModal3" title="Email your friends"><i class="icon-email3" data-toggle="tooltip" title="" data-original-title="Email your friends"></i></a></li>
		</ul>
		<p>Refer your friends to reap more coins!</p>
		<a href="#">Read More</a>
	</div>
</div>



<script>
       $(document).ready(function() {

       		$("#uploadItemBtn").on("click", function() {
       			TweenMax.to($(".uploadModal"), .3, { // Drop down modal
	              top: "10%",         
	              zIndex: "9999999",    
	              ease: Expo.easeOut,
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

			 $(".uploadModalClose").on("click", function() {
			      
			            TweenMax.to($(".uploadModal"), .3, {
			              top: "-100%",
			              zIndex: "-1",
			              ease: Back.easeIn
			            });
			            TweenMax.to($(".modal-shade"), .6, {
			              position: "relative",
			              opacity: 0
			            });
			 });


           
       		$(".fileUpload1 :file").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded1;
                    reader.readAsDataURL(this.files[0]);
                }
            });

            function imageIsLoaded1(e) {
                $('#myImg1').attr('src', e.target.result);           
            };

            $(".fileUpload2 :file").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = imageIsLoaded2;
                    reader.readAsDataURL(this.files[0]);
                }
            });

            function imageIsLoaded2(e) {
                $('#myImg2').attr('src', e.target.result);           
            };

            function DropDown(el) {
                this.dd4 = el;
                this.placeholder = this.dd4.children('span');
                this.opts = this.dd4.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd4.on('click', function(event){
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

                var dd4 = new DropDown( $('#dd4') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-4').removeClass('active');
                });

            });

		});
</script>

@endsection
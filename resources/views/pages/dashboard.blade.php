@extends('pages.layout')

@section('content')

<style>
	
	.tabs{
		margin-bottom: 0;
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
    border: 1px solid #BBBBBB;
    color: #000;
    font-weight: 600;   
	background: #EFEFEF; /* Old browsers */
	background: -moz-linear-gradient(top,  #EFEFEF 0%, #F1F1F1 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#EFEFEF), color-stop(100%,#F1F1F1)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #EFEFEF 0%,#F1F1F1 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #EFEFEF 0%,#F1F1F1 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #EFEFEF 0%,#F1F1F1 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #EFEFEF 0%,#F1F1F1 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EFEFEF', endColorstr='#F1F1F1',GradientType=0 ); /* IE6-9 */
">
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
    border: 1px solid #BBBBBB;
    color: #000;
    font-weight: 600;    
	background: #EFEFEF; /* Old browsers */
	background: -moz-linear-gradient(top,  #EFEFEF 0%, #F1F1F1 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#EFEFEF), color-stop(100%,#F1F1F1)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #EFEFEF 0%,#F1F1F1 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #EFEFEF 0%,#F1F1F1 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #EFEFEF 0%,#F1F1F1 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #EFEFEF 0%,#F1F1F1 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#EFEFEF', endColorstr='#F1F1F1',GradientType=0 ); /* IE6-9 */
">
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
						<div class="outer" style="border:none;">
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


	
<div class="wrappers" style="margin-top:10px;padding: 0;">		
		<form action="{{url('dashboard')}}" method="POST" enctype='multipart/form-data'>
{!! csrf_field() !!}	
			 <div class="col_half col_last nobottommargin">
				<div class="productUploadForm" style="padding: 15px;">
	                <span> Product Name </span>
	                <input type="text" name="name" style="margin-top: 0;" required>

	                <span> Intended application </span>
	                <input type="text" name="intended_applicaion" style="margin-top: 0;" required>
					<br />
					<br />
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

	                <input class="productUploadSubmit" type="submit" value="Submit for Approval">  
	            </div>
	        </div>


	        <div class="col_half nobottommargin">
				

				<div style="margin-top: 30px;">
	                 <div class="fileUpload fileUpload2" style="width:100%;padding: 15px;z-index:0;">
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
	        </form>

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
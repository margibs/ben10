@extends('pages.layout')

@section('content')

<style>
	.tab-content .wrapper-dropdown-3, .tab-content .wrapper-dropdown-1{
		margin: 10px 0 30px 0!important;
	}
	.tab-content .wrapper-dropdown-3 {	 
	    margin-right: 185px!important;
	}
	.tab-content input[type=submit] {
	    margin: 0;
	    margin-top: 15px;
    	margin-bottom: 0;
	    font-family: Roboto;
	    font-weight: 500;
	    background-color: transparent;
	    border: 0;
	    background-color: rgb(239, 66, 109);
	    color: #fff;
	    padding: 7px 15px;
	    font-size: 15px;
	    border-radius: 20px;
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


<div class="wrappers">
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

<div class="wrappers" style="margin-top:10px;padding: 0;">
		<h6> Uploaded Items </h6>
		<div class="row thumbGallery">
			@foreach($rateItems as $rateItem)
				<div class="col-md-3 col-sm-4 col-xs-6"><img class="img-responsive" src="{{url('uploads')}}/{{$rateItem->image_url}}" /></div>
			@endforeach
	    </div>

</div>


<div class="wrappers" style="margin-top:10px;">
	<div class="tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-9">

		<ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
			<li class="ui-state-default ui-corner-top  ui-tabs-active ui-state-active" role="tab" tabindex="-1" aria-controls="tabs-33" aria-labelledby="ui-id-17" aria-selected="false"><a href="#tabs-33" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-17"> Item </a></li>
			<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-34" aria-labelledby="ui-id-18" aria-selected="false"><a href="#tabs-34" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-18"> Product </a></li>			
		</ul>

		<div class="tab-container">

			<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-33" aria-labelledby="ui-id-17" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;padding: 0 10px;">
				
		

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

                <div style="margin-bottom: 25px;">
	            	<div class="outer" style="height: 150px; float: right; width: 250px; margin-left: 15px; border-radius: 2px; overflow: hidden;">
                        <div class="inner" style="overflow: hidden;">
                            <img id="myImg1" style="width:100%;">                              
                        </div>
	                </div>
	                <div class="fileUpload fileUpload1">
	                    <i class="icon-line-upload" style="display:block;color: #F36198;"></i>
	                    <span>Upload Image</span>
	                    <input type="file" name="file" class="upload" style="width:auto;">
	                </div>
                </div>

				<span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Item Title </span>
                <input type="text" style="margin-top: 0;">

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Description </span>
                <input type="text" style="margin-top: 0;">

                <input type="submit" value="Submit">


                

			</div>
			<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-34" aria-labelledby="ui-id-18" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;padding: 0 10px;">

			<form action="{{url('dashboard')}}" method="POST" enctype='multipart/form-data'>
			{!! csrf_field() !!}
			
                <div style="margin-bottom: 25px;">
	            	<div class="outer" style="height: 150px; float: right; width: 250px; margin-left: 15px; border-radius: 2px; overflow: hidden;">
                        <div class="inner" style="overflow: hidden;">
                            <img id="myImg2" style="width:100%;">                              
                        </div>
	                </div>
	                <div class="fileUpload fileUpload2">
	                    <i class="icon-line-upload" style="display:block;color: #F36198;"></i>
	                    <span>Upload Image</span>
	                    <input type="file" name="file" class="upload" style="width:auto;">
	                </div>
                </div>

				<span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Product Name </span>
                <input type="text" style="margin-top: 0;">

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Intended application </span>
                <input type="text" style="margin-top: 0;">

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Animal Tested </span>
	             <input type="radio" name="animal_tested_yes" value="yes" checked> Yes
				 <input type="radio" name="animal_tested_no" value="No"> No
				 <br />
				 <br />

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Eco Friendly </span>
                <input type="radio" name="animal_tested_yes" value="yes" checked> Yes
				 <input type="radio" name="animal_tested_no" value="No"> No
				 <br />
				 <br />

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Alternative Products </span>
                <input type="text" style="margin-top: 0;">

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Price Range </span>
                <input type="text" style="margin-top: 0;">

                <span style="text-transform: uppercase; color: #D2D2D2; font-size: 13px;"> Available From </span>
                <input type="text" style="margin-top: 0;">

                <input type="submit" value="Submit">
			</form>
			</div>
		

		</div>

	</div>
</div>

<script>
       $(document).ready(function() {
           
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

		});
</script>

@endsection
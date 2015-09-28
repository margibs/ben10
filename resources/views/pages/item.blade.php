@extends('pages.layout')

@section('content')
@include('_common.dashlinks')
	
<div class="wrappers" style="margin-top:10px;padding: 0;">		
		<form action="{{url('dashboard')}}" method="POST" enctype='multipart/form-data' style="
 margin-bottom:0;
 ">


{!! csrf_field() !!}	
			 <div class="col_full nobottommargin">

				<div style="
    margin-top: 30px;
    margin:10px;
    position: relative;
    ">
				 	 <div class="fileUpload fileUpload3" style="   
	width: 100%;
    padding: 15px;
    z-index: 2;
    height: 150px;">
	                    <i class="icon-line-upload" style="
   display:block;
   color: #F36198;
   margin-top: 25px;"></i>

	                    <span>Upload Image</span>
	                    <input type="file" name="file3" class="upload" style="width:auto;">
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
	                        <img id="myImg3" style="width:100%;">                              
	                    </div>
	                </div>
				</div>

				


	    <div class="productUploadForm" style="padding: 15px;">

	    <h2 style="    
    margin: 10px 0;
    font-family: Roboto;
    color: #323232;
    font-size: 20px;"> Product Title </h2>

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
	        </form>

</div>

<script>
 $(document).ready(function() {
	$(".fileUpload3 :file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded3;
            reader.readAsDataURL(this.files[0]);
        }
    });

    function imageIsLoaded3(e) {
        $('#myImg3').attr('src', e.target.result);           
    };
});

</script>
@endsection
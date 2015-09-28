@extends('admin.layout')

@section('header_links')
  <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/chosen.min.css') }}" type="text/css" />
@endsection

@section('content')
	<style>
	.green, .red { 		
	    color: #fff;
	    padding: 5px;
	    font-size: 15px;
	    border-radius: 2px;
	    margin-right:5px;
	}
	.green:hover, .red:hover{
		color: #fff;	
	}
	.green{
		background-color: #21B20F;
	}	
	.red{
		background-color: #e90404; 
	}
	.grey { color: #babcba; }
	.productlists p{
		font-weight: 600;
    	font-size: 15px;
	}
	.productlists h3{
		color: #000;
		font-weight: 600;
    	font-size: 21px;
    	margin-top: 0;
	}
	.productlists p span{
		font-size: 11px;
	    font-weight: 400;
	    color: #C2C2C2;
	    margin-right: 5px;
	    display: block;
	}
	.productlists a{
		font-size: 14px;
	}
	.subMenu{
		margin: 10px 0 20px 0;
	}
	.subMenu li a{
		font-weight: 500;
	    padding: 5px;
	    font-size: 13px;
	}
	.subMenu li a.active{
		background-color: #CF0D0D;
	    border-radius: 4px;
	    padding: 5px 10px;
	    color: #fff;
	}
	</style>
	<h2 class="adminTitle"> <i class="icon-line-head"></i>  Rate Categories </h2>
	
	<div id="contentMainWrapper" style="background:transparent;border:none;">
	
	<ul class="list-inline subMenu">
		<li> <a href="" class="active"> All </a> </li>	
		<li> <a href=""> Approved </a> </li>	
		<li> <a href=""> Drafts </a> </li>	
		<li> <a href=""> Trash </a> </li>	
	</ul>

	<div class="row">
		@foreach($products as $product)
	      <div class="col-md-3">
	        <div class="thumbnail productlists">
	          <img alt="" src="{{ url('uploads')}}/{{ $product->image_url }}" style="display: block;">
	          <div class="caption">
	            <h3>{{ $product->name }}</h3>
	            <p><span>Intended application  </span> {{ $product->intended_applicaion }}</p>
	        	<p><span>Alternative Products</span>{{ $product->alt_products }}</p>
				<p><span>Animal Tested</span>{{ $product->animal_tested }}</p>
				<p><span>Eco Friendly</span>{{ $product->eco_friendly }}</p>
				<p><span>Price Range</span>{{ $product->price_range }}</p>
				<p><span>Available From</span>{{ $product->available_from }}</p>	            
				<br />
	            <a href="{{url('plugin/rate/items')}}/{{ $product->id }}/1" class="green"><i class="icon-line-check"></i> Approve </a>
	            <a href="{{url('plugin/rate/items')}}/{{ $product->id }}/2" class="red"><i class="icon-line-cross"></i> Reject </a> 
	          </div>
	        </div>
	      </div>
		@endforeach
    </div>

	</div>


@endsection

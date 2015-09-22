@extends('admin.layout')

@section('header_links')
  <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/chosen.min.css') }}" type="text/css" />
@endsection

@section('content')
	<h2 class="adminTitle"> <i class="icon-line-head"></i>  Rate Categories </h2>
	
	<div id="contentMainWrapper">
	<div class="table-responsive adminPosts">
			<table class="table table-striped">
			<thead>
				<th>Name</th>
				<th>Intended Application</th>
				<th>Alternative Product</th>
				<th>Animal Tested</th>
				<th>Eco Friendly</th>
				<th>Price Range</th>
				<th>Available From</th>
				<th>Approved</th>
			</thead>

			<tbody>
				@foreach($products as $product)
				<td>{{ $product->name }}</td>
				<td>{{ $product->intended_applicaion }}</td>
				<td>{{ $product->alt_products }}</td>
				<td>{{ $product->animal_tested }}</td>
				<td>{{ $product->eco_friendly }}</td>
				<td>{{ $product->price_range }}</td>
				<td>{{ $product->available_from }}</td>
				<td>
					@if($product->approved == 0)
					No
					@else
					Yes
					@endif
				</td>
				@endforeach
			</tbody>
			</table>
	</div>	
	</div>


@endsection

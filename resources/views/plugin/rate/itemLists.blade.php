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
				<th style="text-align: center;">Approved</th>
			</thead>

			<tbody>
				@foreach($products as $product)
				<tr>
				<td class="subTD">{{ $product->name }}</td>
				<td class="subTD">{{ $product->intended_applicaion }}</td>
				<td class="subTD">{{ $product->alt_products }}</td>
				<td class="subTD">{{ $product->animal_tested }}</td>
				<td class="subTD">{{ $product->eco_friendly }}</td>
				<td class="subTD">{{ $product->price_range }}</td>
				<td class="subTD">{{ $product->available_from }}</td>
				<td style="text-align: center;">
					@if($product->approved == 0)
					<i class="icon-line2-dislike"></i>
					@else
					<i class="icon-line2-like"></i>
					@endif
				</td>
				</tr>
				@endforeach
			</tbody>
			</table>
	</div>	
	</div>


@endsection

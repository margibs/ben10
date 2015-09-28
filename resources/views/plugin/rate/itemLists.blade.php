@extends('admin.layout')

@section('header_links')
  <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/chosen.min.css') }}" type="text/css" />
@endsection

@section('content')
	<style>
	.red { color: #e90404; }
	.green { color: #0bb20f; }
	.grey { color: #babcba; }
	</style>
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
					<a href="{{url('plugin/rate/items')}}/{{ $product->id }}/2"><i class="icon-line-cross red"></i></a>
					<a href="{{url('plugin/rate/items')}}/{{ $product->id }}/1"><i class="icon-line-check green"></i></a>
				</td>
				</tr>
				@endforeach
			</tbody>
			</table>
	</div>	
	</div>


@endsection

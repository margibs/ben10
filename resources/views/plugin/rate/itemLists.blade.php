@extends('admin.layout')

@section('header_links')
  <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/chosen.min.css') }}" type="text/css" />
@endsection

@section('content')
	<h2 class="adminTitle"> <i class="icon-line-head"></i>  Rate Categories </h2>
	
	<div id="contentMainWrapper">
	All - Pending - Approved
	<div class="table-responsive adminPosts">
			<table class="table table-striped">
			<thead>
				<th>Name</th>
				<th>Slug</th>
				<th>Sub Categories</th>
			</thead>

			<tbody>
				
			</tbody>
			</table>
	</div>	
	</div>


@endsection

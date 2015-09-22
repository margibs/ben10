@extends('admin.layout')

@section('header_links')
  <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/chosen.min.css') }}" type="text/css" />
@endsection

@section('content')
	<h2 class="adminTitle"> <i class="icon-line-head"></i>  Rate Categories </h2>

	<div class="col_two_third" style="margin-right: 10px;">
		<div id="contentMainWrapper">
		<div class="table-responsive adminPosts">
				<table class="table table-striped">
				<thead>			
					<th>Name</th>
					<th>Slug</th>
					<th>Sub Categories</th>
				</thead>

				<tbody>
					@foreach($categories as $category)
						<tr>
							<td class="subTD">{{ $category->name }}</td>
							<td class="subTD">{{ $category->slug }}</td>
							<td class="subTD">
								@if(count($category->sub_categories))
									@foreach($category->sub_categories as $sub_category)
										{{ $sub_category->name }},
									@endforeach
								@endif
							</td>
						</tr>
					@endforeach
				</tbody>
				</table>
		</div>	
		</div>
	</div>
	<div class="col_one_third col_last" style="margin-top: 10px;">
			<form action="{{url('plugin/rate/categories')}}" method="POST">
				{!! csrf_field() !!}
				<p style="    
	font-weight: 600;
    font-size: 15px;
    margin-bottom: 5px;"> Select parent category </p>
				{!! Form::select('parent_id',$category_select, null, ['data-placeholder' => 'parent','class' => 'chosen-select','style' => 'width:350px;']) !!}
				<p style="
    margin-top:15px;
	font-weight: 600;
    font-size: 15px;
    margin-bottom: 5px;"> Enter new category </p>
				<input type="text" 	name="name" placeholder="Name" class="form-control" required>
		        
		        <input type="submit" value="Add Category" class="button" style="margin-top: 10px;">
			</form>
	</div>

@endsection

@section('footer_scripts')
  <script type="text/javascript" src="{{ asset('nexuspress/dist/js/chosen.jquery.min.js') }}"></script>
  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
@endsection
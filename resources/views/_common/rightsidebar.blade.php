
<div class="whiteBGWrapper">
	<div class="right_content">
		<!-- <span> <a href="#"> See all </a></span> -->
		<h6> Popular Items </h6>
		<div id="post-list-footer">

			@if(isset($side_poll_items))
				@foreach($side_poll_items as $side_poll_item)	        
			        
			        <div class="spost clearfix">
			            <div class="entry-image">
			                <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}" class="nobg"><img alt="100%x180" src="{{ asset('uploads') }}/{{$side_poll_item->image_url}}"></a>
			            </div>
			            <div class="entry-c">
			                <div class="entry-title">
			                    <h4><a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}"> <b> {{ ucfirst($side_poll_item->name) }} </b> <span style="display: block; font-family: Roboto; font-size: 11px; color: #B3B2B2;"> 20% admirability </span> </a></h4>
			                </div>
			            </div>
			        </div>

				@endforeach
			@endif

		</div>
	</div>	
</div>

<div class="whiteBGWrapper">
	<div class="right_content">
		<!-- <span> <a href="#"> See all </a></span> -->
		<h6> People you followed ( Outfits ) </h6>
		<div id="post-list-footer">

			@if(isset($side_poll_items))
				@foreach($side_poll_items as $side_poll_item)	        
			        
			        <div class="spost clearfix">
			            <div class="entry-image">
			                <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}" class="nobg"><img alt="100%x180" src="{{ asset('uploads') }}/{{$side_poll_item->image_url}}"></a>
			            </div>
			            <div class="entry-c">
			                <div class="entry-title">
			                    <h4> Duduy commented on <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}"> <b> {{ ucfirst($side_poll_item->name) }} </b></h4>			                    
			                </div>
			            </div>
			        </div>

				@endforeach
			@endif

		</div>
	</div>	
</div>

<div class="whiteBGWrapper">
	<div class="right_content">

		<h6> People you followed </h6>
		<div id="post-list-footer">

			@if(isset($side_poll_items))
				@foreach($side_poll_items as $side_poll_item)	        
			        
			        <div class="spost clearfix">
			            <div class="entry-image">
			                <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}" class="nobg"><img alt="100%x180" src="{{ asset('uploads') }}/{{$side_poll_item->image_url}}"></a>
			            </div>
			            <div class="entry-c">
			                <div class="entry-title">
			                    <h4> Duduy commented on <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}"> <b> {{ ucfirst($side_poll_item->name) }} </b></h4>			                    
			                </div>
			            </div>
			        </div>

				@endforeach
			@endif

		</div>
	</div>	
</div>

<div class="whiteBGWrapper">
	<div class="right_content">

		<h6> Trending Articles </h6>
		<div id="post-list-footer">

			@if(isset($side_poll_items))
				@foreach($side_poll_items as $side_poll_item)	        
			        
			        <div class="spost clearfix">
			            <div class="entry-image">
			                <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}" class="nobg"><img alt="100%x180" src="{{ asset('uploads') }}/{{$side_poll_item->image_url}}"></a>
			            </div>
			            <div class="entry-c">
			                <div class="entry-title">
			                    <!-- <h4><a href="{{ url('/') }}/raJodie Kidd tries to keep a low profile after 'secret meeting' with Chris Evans amid rumours she'll join Top Gear line-upte/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}"> <b> {{ ucfirst($side_poll_item->name) }} </b> uploaded in {{ ucfirst($side_poll_item->sub_name)}} </a></h4> -->
			                    <h4> Kylie Jenner wears white for her birthday dinner </h4>
			                </div>
			            </div>
			        </div>

				@endforeach
			@endif

		</div>
	</div>	
</div>

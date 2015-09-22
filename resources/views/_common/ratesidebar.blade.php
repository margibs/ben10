<div class="ratesidebar">

	<h4>Site Users</h4>
    @foreach($users as $user)
	   <a href="{{url('profile')}}/{{$user->id}}">
		   @if( $user->profile_image != "")
		   		<img src="{{url('uploads')}}/{{$user->profile_image}}" alt="{{$user->name}}"  style="width: 55px; margin-right: -2px;">
            @else
            	<img src="{{ asset('images/nopic-tiny.gif') }}" alt="{{$user->name}}"  style="width: 55px; margin-right: -2px;">															
            @endif												    
	   </a>
	@endforeach

    <div class="line"></div>

	<h4 style="margin-bottom: 25px;">Recent Activity</h4>
	<div id="post-list-footer">

		@foreach($side_poll_items as $side_poll_item)
	        <div class="spost clearfix">
	            <div class="entry-image">
	                <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}" class="nobg"><img alt="100%x180" src="{{ asset('uploads') }}/{{$side_poll_item->image_url}}"></a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}"> <b> {{ ucfirst($side_poll_item->name) }} </b> uploaded in {{ ucfirst($side_poll_item->sub_name)}} </a></h4>
	                </div>
	            </div>
	        </div>
		@endforeach
    </div>

	<div class="line"></div>

	<h4 style="margin-bottom: 25px;"> Top rated outfits </h4>
	@foreach($side_poll_items as $side_poll_item)
	        <div class="spost clearfix">
	            <div class="entry-image">
	                <a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}" class="nobg"><img alt="100%x180" src="{{ asset('uploads') }}/{{$side_poll_item->image_url}}"></a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="{{ url('/') }}/rate/{{$side_poll_item->category_id}}/{{$side_poll_item->sub_category_id}}/{{$side_poll_item->id}}"> <b> {{ ucfirst($side_poll_item->name) }} </b> uploaded in {{ ucfirst($side_poll_item->sub_name)}} </a></h4>
	                </div>
	            </div>
	        </div>
	@endforeach



</div>

<script>
	
jQuery(document).ready(function() {

	setInterval("get_recent_activity()", 30000);

});

	
	function capitalise(string) 
	{
	    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
	}

	function get_recent_activity(){

		jQuery.getJSON( "{{url('rate/ajax_side_recent_activity')}}", function( data ) {
			var recent_activity = '';

		    for (var i in data) {
		    	recent_activity += "<a href='{{ url('/') }}/rate/"+ data[i].category_id +"/"+ data[i].sub_category_id +"/"+ data[i].id +"' class='list-group-item'><img alt='100%x180' src='{{ asset('uploads') }}/"+data[i].image_url+"'><p class='list-group-item-text'><b>"+ capitalise(data[i].name) +"</b> uploaded in "+ capitalise(data[i].sub_name) +" </p></a>";
		    }

		    jQuery("#recent_activity").hide().html(recent_activity).fadeIn( 2000 );

		});
			
	}


</script>

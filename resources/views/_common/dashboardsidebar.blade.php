
<div class="ratesidebar">
    <div class="list-group">
        @foreach($followed_updates as $followed_update)
                    
	        <div class="spost clearfix">
	            <div class="entry-image">
	                <a href="{{url('profile')}}/{{$followed_update->user_id}}" class="nobg"><img alt="100%x180" src="{{ url('uploads') }}/{{$followed_update->image_url}}" style="width:auto;" /></a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="{{url('profile')}}/{{$followed_update->user_id}}" style="color:#F45793;">{{$followed_update->user_name}}</a> </b> uploaded <a href="{{url('rate')}}/{{$followed_update->category_id}}/{{$followed_update->sub_category_id}}/{{$followed_update->id}}">{{$followed_update->name}} </a> </h4>
	                </div>
	            </div>
	        </div>

        @endforeach
    </div>
</div>




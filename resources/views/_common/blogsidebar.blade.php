<div class="sidebar-widgets-wrap">
    <div class="widget clearfix">
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
        
        <h4>Recent Activity</h4>
		<div id="post-list-footer">
	        <div class="spost clearfix">
	            <div class="entry-image">
	                <a href="#" class="nobg"><img src="images/magazine/small/1.jpg" alt=""></a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
	                </div>
	                <ul class="entry-meta">
	                    <li>10th July 2014</li>
	                </ul>
	            </div>
	        </div>

	        <div class="spost clearfix">
	            <div class="entry-image">
	                <a href="#" class="nobg"><img src="images/magazine/small/2.jpg" alt=""></a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
	                </div>
	                <ul class="entry-meta">
	                    <li>10th July 2014</li>
	                </ul>
	            </div>
	        </div>

	        <div class="spost clearfix">
	            <div class="entry-image">
	                <a href="#" class="nobg"><img src="images/magazine/small/3.jpg" alt=""></a>
	            </div>
	            <div class="entry-c">
	                <div class="entry-title">
	                    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
	                </div>
	                <ul class="entry-meta">
	                    <li>10th July 2014</li>
	                </ul>
	            </div>
	        </div>

    </div>
</div>
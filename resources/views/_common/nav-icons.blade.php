@if( Auth::check() )
	<a href="{{ url('/dashboard') }}" data-toogle="tooltip" title="Dashboard"><i class="icon-line2-heart"></i>  </a>                        
	<!-- <a href="{{ url('/profile') }}/{{ Auth::user()->id }}"  data-toogle="tooltip" title="Profile"><i class="icon-line2-user"></i>  </a>   -->
	<a href="{{ url('/auth/logout') }}"  data-toogle="tooltip" title="Logout"><i class="icon-line2-lock"></i>  </a> 
	<a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="button" style=" float:right; position: relative; top: 8px; color: #fff; padding: 5px 20px; font-size: 12px; height: auto; line-height: 20px;"> Upload </a>
	@if(Auth::user()->is_admin == 1)
		 <!-- <a href="{{ url('/admin') }}" class="menudropdownlink" style="top: 25px; margin-top: -10px;"> Go to Admin </a>  -->		
	@endif
@else
	<a href="{{ url('/auth/register') }}"><i class="icon-line2-note"></i>  </a>  
	<a href="{{ url('/auth/login') }}"><i class="icon-line2-lock-open"></i>  </a> 
	<!-- <a href="#" class="menudropdownlink"> Login </a> -->
@endif



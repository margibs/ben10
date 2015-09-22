@if(Auth::check())

	<div class="whiteBGWrapper" style="margin-bottom:10px;">
		<div class="left_content">
			@if($user_profile->profile_image != "")
			<a href="#" data-toggle="modal" data-target="#profileModal"> 
				<img src="{{url('/uploads')}}/{{$user_profile->profile_image}}" class="profilePic" style="border-radius:0;"> </a>
			@else
			<a href="#" data-toggle="modal" data-target="#profileModal"> 
				<img src="{{ asset('images/nopic-tiny.gif') }}" class="profilePic" alt="">
			</a>
			@endif	
			
			<p> {{$user_profile->name }} </p>
			<ul class="list-inline">
				<li><i class="icon-star3"></i></li>
				<li><i class="icon-star3"></i></li>
				<li><i class="icon-star3"></i></li>
				<li><i class="icon-star3"></i></li>
				<li><i class="icon-star3"></i></li>
			</ul>

			<!-- <div class="progress">
			  <div class="progress-bar pink1" style="width: 35%">
			    <span class="sr-only">35% Complete (success)</span>
			  </div>
			  <div class="progress-bar pink2" style="width: 20%">
			    <span class="sr-only">20% Complete (warning)</span>
			  </div>
			  <div class="progress-bar pink3" style="width: 10%">
			    <span class="sr-only">10% Complete (danger)</span>
			  </div>
			</div> -->

			@if($thermometer != '')
				<div class="meter" style="margin-top: 25px;">
				    <span id="meter_yoyo" style="width:{{$thermometer->meta_value_percentage == '' ? 0 : $thermometer->meta_value_percentage }}%;"><span class="progress2"></span></span>
				</div>
				<span class="info" id="coins_to_earn"> * {{ 120 - $thermometer->meta_value}} coins can be earned </span>
			@else
				<div class="meter" style="margin-top: 25px;">
				    <span style="width:100%;"><span class="progress2"></span></span>
				</div>
				<span class="info"> * Please select an item </span>
			@endif
			
			<img src="{{ asset('images/gold_coin.png') }}" class="gold_coin" alt="">
			<span class="totalCoins" style="margin-left: 65px;"> Total Coins</span>

			<p class="coins current_coins">{{$user_profile->coins}}</p>

		</div>
	</div>

	<div class="whiteBGWrapper" style="padding: 7px 15px;margin-top:0;margin-bottom:10px;">
		<div class="left_content">
			<img src="{{ asset('images/lotto_icon.gif') }}" class="gold_coin" alt="">
			<span class="totalCoins" style="margin-left: 55px;"> Latest Result</span>
			@if($winning_ticket != null)
				<p class="coins" style="margin-left: 53px;">{{ $winning_ticket->winner_ticket_id }}</p>
			@endif
		</div>
	</div>

	<div class="whiteBGWrapper" style="padding: 7px 15px;">
		<div class="left_content">
			<div class="dailyOffer">
				<p><i class="icon-star3"></i> Our Daily Offers </p>
				<a href=""><img src="{{ asset('images/offer1.jpg')}}" alt=""></a>
				<a href=""><img src="{{ asset('images/offer2.jpg')}}" alt=""></a>
			</div>			
		</div>
	</div>


	<audio class="audioDemo" controls preload="auto" style="display:none;"> 
	   <source src="{{ asset('sfx/coins_drop.mp3') }}" type="audio/mpeg">
	   <!-- <source src="audio/music.ogg" type="audio/ogg"> -->
	</audio>

@endif

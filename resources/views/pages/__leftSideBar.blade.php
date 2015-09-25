<div class="left">    
    @if(Auth::check())
            <div class="wrappers" style="margin-bottom:10px;">
                <div class="profile">
                    <!-- <img src="{{url('uploads')}}/{{Auth::user()->avatar}}" alt=""> -->
                    <img src="http://vps184562.ovh.net/uploads/29713_cat.jpg" alt="">
                    <p> {{ ucfirst(Auth::user()->name) }} </p>
                    <ul class="stars">
                        <li> <i class="icon-star3"></i> </li>
                        <li> <i class="icon-star3"></i> </li>
                        <li> <i class="icon-star3"></i> </li>
                        <li> <i class="icon-star3"></i> </li>
                        <li> <i class="icon-star3"></i> </li>
                    </ul>
                </div>

                <div class="meter">
                    <span style="width:100%;"><span class="progress2"></span></span>
                </div>

                <p class="selectItem">* Please select an item</p>

                <div class="coinTotal">
                    <img src="{{ asset('images/gold_coin.png') }}" alt="">
                    <p> Total Coins </p>
                    <h3> {{Auth::user()->coins}} </h3>
                </div>
            </div>     
            <div class="wrappers" style="margin-top: 10px;">
                <div class="coinTotal">
                    <img src="{{ asset('images/lotto_icon.gif') }}" alt="">
                    <p style="margin-left: 57px;"> Latest Result </p>
                    <h3> 125 </h3>
                </div>
            </div>
   @else

    @endif
            <div class="wrappers">
                <div class="dailyOffer">
                  <p><i class="icon-star3"></i> Our Daily Offers </p>      
                  <a href=""><img src="{{ asset('images/offer1.jpg') }}" alt=""></a>
                  <a href=""><img src="{{ asset('images/offer2.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
 
        <div class="line hidden-lg hidden-md"></div>

                                <div class="sidebar-widgets-wrap clearfix">

                                <div class="widget clearfix">

                                    <img class="aligncenter" src="images/magazine/ad.png" alt="">

                                </div>


                                <div class="widget widget_links clearfix">

                                    <h4>Categories</h4>
                                    <div class="col_half nobottommargin">
                                        <ul>
                                            <li><a href="#">Slots</a></li>
                                            <li><a href="#">Celebs</a></li>
                                            <li><a href="#">Cute</a></li>
                                            <li><a href="#">Outfits</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <div class="col_half nobottommargin col_last">
                                       <ul>
                                            <li><a href="#">Dress</a></li>
                                            <li><a href="#">Garden</a></li>
                                            <li><a href="#">Pie</a></li>
                                            <li><a href="#">Pet</a></li>
                                            <li><a href="#">Cooking</a></li>
                                        </ul>
                                    </div>

                                </div>


                                <div class="widget clearfix">

                                    <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                        <ul class="tab-nav clearfix">
                                            <li><a href="#tabs-1">Popular</a></li>
                                            <li><a href="#tabs-2">Recent</a></li>
                                          
                                        </ul>

                                        <div class="tab-container">

                                            <div class="tab-content clearfix" id="tabs-1">
                                                <div id="popular-post-list-sidebar">

                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                        </div>
                                                        <div class="entry-c">
                                                            <div class="entry-title">
                                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-content clearfix" id="tabs-2">
                                                <div id="recent-post-list-sidebar">

                                                    <div class="spost clearfix">
                                                        <div class="entry-image">
                                                            <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
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
                                                            <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
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
                                                            <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
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
                                          

                                        </div>

                                    </div>

                                </div>

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

                                </div>
                         

                            </div>

                        </div>
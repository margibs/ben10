@inject('sidebar','App\SideBar')

<?php 
 $waters = $sidebar->getPost();
?>

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <div class="right">
        <div class="wrappers">
            <div class="listWrapper">

            <h3>POPULAR ITEMS</h3>

           @foreach($waters as $water)
           {{$water->title}}
           @endforeach

        
            <div id="post-list-footer">
                <div class="spost clearfix">
                    <div class="entry-image">
                        <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg">
                            <img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg">
                        </a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="http://vps184562.ovh.net/rate/1/1/17"> 
                                    <b> Sweet Navy </b> 
                                    <span> 20% admirability </span> 
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="spost clearfix">
                    <div class="entry-image">
                        <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg">
                            <img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg">
                        </a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="http://vps184562.ovh.net/rate/1/1/16"> 
                                    <b> Summer Floral </b> 
                                    <span> 20% admirability </span> 
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>


                <div class="spost clearfix">
                    <div class="entry-image">
                        <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg">
                            <img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg">
                        </a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="http://vps184562.ovh.net/rate/1/1/15"> 
                                    <b> Madonna </b> 
                                    <span> 20% admirability </span> 
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>


                <div class="spost clearfix">
                    <div class="entry-image">
                        <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg">
                            <img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg">
                        </a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="http://vps184562.ovh.net/rate/1/1/14"> 
                                    <b> Simple Stripe </b> 
                                    <span> 20% admirability </span> 
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>


            <div class="spost clearfix">
            <div class="entry-image">
            <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
            </div>
            <div class="entry-c">
            <div class="entry-title">
            <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
            </div>
            </div>
            </div>
            </div>
            </div> 
        </div>

        @if(Auth::check())
        <div class="wrappers">
                <div class="listWrapper">
                    <h3>PEOPLE YOU FOLLOWED</h3>
                    
                    <div id="post-list-footer">
                    

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>
                                
                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>


        <div class="wrappers">
                <div class="listWrapper">
                    <h3>PEOPLE YOU FOLLOWED</h3>
                    
                    <div id="post-list-footer">
                    

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>
                                
                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>
        @endif

        <div class="wrappers">
                <div class="listWrapper">
                    <h3>TRENDING ARTICLES</h3>
                    
                    <div id="post-list-footer">
                    

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/17" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/27457_lbue.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/17"> <b> Sweet Navy </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/16" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/40197_image8.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/16"> <b> Summer Floral </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/15" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/55540_image7.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/15"> <b> Madonna </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>

                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/14" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/33910_image6.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/14"> <b> Simple Stripe </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>
                                
                        
                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="http://vps184562.ovh.net/rate/1/1/13" class="nobg"><img alt="100%x180" src="http://vps184562.ovh.net/uploads/45575_image5.jpg"></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="http://vps184562.ovh.net/rate/1/1/13"> <b> The Willow </b> <span> 20% admirability </span> </a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>
    </div>
</div>
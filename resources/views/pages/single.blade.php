@extends('pages.layout')

@section('content')

<style>
  .col-md-5, .col-d-7{
    padding: 0;
    color: #868686;
  }
  .col-md-5 > p{
    margin-bottom: 0;
  }
</style>

<meta name="csrf-token" content="{{ csrf_token() }}" />

<div class="clearfix"></div>

<section id="content">

	<div class="content-wrap" style="padding-top: 0;">

	   <div class="wrappers">

	    			
				    	<div class="row">

			                      <!-- Post Content
			                    ============================================= -->
			                  
			                    		 <div class="single-post nobottommargin">

                                                <!-- Single Post
                                                ============================================= -->
                                                <div class="entry clearfix">

                                                  <div class="entry-title">
                                                    <span class="categ"><a href=""> S {{-- $post->category_name --}} </a></span>      
                                                     <h2 >{{$post->title}}</h2>                                                        
                                                      <span class="comment"><i class="icon-comment2"></i>&nbsp; 0 Comments </span>
                                                      <span class="date"> <i class="icon-calendar-empty"></i> &nbsp;{{ date( 'jS F Y', strtotime($post->created_at) ) }}</span>
                                                    </div>
     
                                                    <div class="clearfix"></div>

                                                    <!-- Entry Image
                                                    ============================================= -->
                                                   <!--  <div class="entry-image">
                                                        <a href="{{url('/uploads')}}/{{$post->feat_image_url}}"><img src="{{url('/uploads')}}/{{$post->feat_image_url}}" alt="Blog Single"></a>
                                                    </div> --><!-- .entry-image end -->

    

@if($widget_rating != null && $widget_rating->enable != 0)
                        <!-- Ratings here -->

<div style="overflow: hidden;padding: 5px 20px 10px 20px;"> 

<div class="col_three_fifth nobottommargin"  style=" background-color: #efefef;padding: 10px;">
<p style="    
font-weight: 700;
font-size: 20px;
line-height: 22px;
color: #292929;
margin-bottom: 10px;">Slot Review & Gameplay Strategy</p>


<div class="col-md-5">
<p> Music & Sounds </p>
</div>
<div class="col-md-7">
<div class="star-ratings-css">
<div class="star-ratings-css-top" style="width: {{ $widget_rating->music_sounds / 10 * 100 }}%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
<div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-5">
<p> Long Term Playability </p>
</div>
<div class="col-md-7">
<div class="star-ratings-css">
<div class="star-ratings-css-top" style="width: {{ $widget_rating->long_term_play / 10 * 100 }}%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
<div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-5">
<p> Fun Rating </p>
</div>
<div class="col-md-7">
<div class="star-ratings-css">
<div class="star-ratings-css-top" style="width: {{ $widget_rating->fun_rate / 10 * 100 }}%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
<div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
</div>
</div>

<div class="clearfix"></div>

<div class="col-md-5">
<p> Graphics </p>
</div>
<div class="col-md-7">
<div class="star-ratings-css">
<div class="star-ratings-css-top" style="width: {{ $widget_rating->graphics / 10 * 100 }}%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
<div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
</div>
</div>

</div>  

<div class="col_two_fifth nobottommargin  col_last">
<div class="entry-image">
<a href="{{url('/uploads')}}/{{$post->feat_image_url}}"><img src="{{url('/uploads')}}/{{$post->feat_image_url}}" alt="Blog Single"></a>
<a href="{{$widget_rating->slot_url}}" class="button playnowBtn"> Play Now! <i class="icon-circle-arrow-left"></i> </a>
</div>
</div>

<!-- end Ratings here -->
</div>
@endif



                                                    
                                                    <div class="clearfix"></div>

                                                    <!-- Entry Image
                                                    ============================================= -->
                                                    <!-- <div class="entry-image">
                                                        <a href="{{url('/uploads')}}/{{$post->feat_image_url}}"><img src="{{url('/uploads')}}/{{$post->feat_image_url}}" alt="Blog Single"></a>
                                                    </div> --><!-- .entry-image end -->
                            
                                                    <!-- Entry Content
                                                    ============================================= -->
                                                    <div class="entry-content notopmargin" id="get_content_here">

                                                        <!-- Post Single -->
                                                       {!! $post->content !!}
                                                        <!--- Content End -->
                                              
                                                    </div>
                                                </div><!-- .entry end -->

                                                <!-- Post Navigation
                                                ============================================= -->
                                              <!--   <div class="post-navigation clearfix">

                                                    <div class="col_half nobottommargin">
                                                        <a href="#"><i class="icon-line-arrow-left"></i> This is a Standard post with a Slider Gallery</a>
                                                    </div>

                                                    <div class="col_half col_last tright nobottommargin">
                                                        <a href="#">This is an Embedded Audio Post <i class="icon-line-arrow-right"></i></a>
                                                    </div>

                                                </div> -->
                                                <!-- .post-navigation end -->

                                                <!-- Post Author Info
                                                ============================================= -->
                                               <!--  <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" style="font-size: 20px;font-weight: 400;">Posted by <span><a href="#">John Doe</a></span></h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="author-image">
                                                            <img src="{{ asset('images/author/1.jpg') }}" alt="" class="img-circle">
                                                        </div>
                                                        <span style="font-family: Lato; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum. </span>
                                                    </div>
                                                </div> -->
                                                <!-- Post Single - Author End -->

                                                <!-- <div class="line"></div>

                                                <h4>Related post:</h4>

                                                <div class="col_full bottommargin-lg clearfix">

                                                    <div class="row">
                                                       

                                                           
                                                             <div class="col-xs-12 col-sm-4 col-sm-4 col-lg-4">
                                                                <div class="ipost clearfix">
                                                                    <div class="entry-image">
                                                                        <a href=""><img class="image_fade" src="" alt="Image"></a>
                                                                    </div>
                                                                    <ul class="entry-meta clearfix" style="margin-bottom:0;">
                                                                        <li></li>
                                                                        <li><a href=""><i class="icon-comments"></i> 0</a></li>
                                                                    </ul>
                                                                    <div class="entry-title">
                                                                        <h3 style="line-height: 27px;"><a href=""></a></h3>
                                                                    </div>
                                                               
                                                                </div>
                                                             </div>
                                                            

                                                    </div>

                                                    <div class="clear"></div>

                                                </div> -->
                                                
                                                <!-- Comments
                                                ============================================= -->
                                 
                                                    
                                                    <!-- Comments List
                                                    ============================================= -->
                                                    <div class="commentWrapper" style="margin-top: 20px;">


                                                        <h3> Comments  
                                                            <span> · 
                                                                <span class="comment_counter">
                                                                    4 
                                                                </span>
                                                            </span> 
                                                        </h3>

                                                        <ul class="put_comments_here">
                                                                                                                    <li>
                                                                <img src="
                                                                                                                                  http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                                     

                                                                  " alt="">
                                                                <span class="name"> 
                                                                    <a href="http://vps184562.ovh.net/profile/1"> Emily </a> 
                                                                    <span class="commentDate"> · 2015-09-18 12:23:29 </span> 
                                                                </span>
                                                                <p class="commentContent"> water </p>
                                                                </li>
                                                                                                                    <li>
                                                                <img src="
                                                                                                                                  http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                                     

                                                                  " alt="">
                                                                <span class="name"> 
                                                                    <a href="http://vps184562.ovh.net/profile/1"> Emily </a> 
                                                                    <span class="commentDate"> · 2015-09-21 12:39:32 </span> 
                                                                </span>
                                                                <p class="commentContent">  </p>
                                                                </li>
                                                                                                                    <li>
                                                                <img src="
                                                                                                                                  http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                                     

                                                                  " alt="">
                                                                <span class="name"> 
                                                                    <a href="http://vps184562.ovh.net/profile/1"> Emily </a> 
                                                                    <span class="commentDate"> · 2015-09-21 12:39:33 </span> 
                                                                </span>
                                                                <p class="commentContent"> HALLO </p>
                                                                </li>
                                                                                                                    <li>
                                                                <img src="
                                                                                                                                  http://vps184562.ovh.net/uploads/29713_cat.jpg 
                                                                                                                                     

                                                                  " alt="">
                                                                <span class="name"> 
                                                                    <a href="http://vps184562.ovh.net/profile/1"> Emily </a> 
                                                                    <span class="commentDate"> · 2015-09-21 14:30:13 </span> 
                                                                </span>
                                                                <p class="commentContent"> tttttt </p>
                                                                </li>
                                                                               
                                                        </ul>

                                                        <div class="clearfix"></div>

                                                        <form class="clearfix" action="#" method="post" id="commentform">
                                                            <textarea class="comment_yeah" name="comment" cols="30" rows="10" get-this-id="17"></textarea>
                                                            <input type="submit" id="submit-button" class="commentSubmit pull-right" value="Submit" style=" margin-bottom: 20px; margin-top: 10px;">
                                                        </form>

                                                    </div>


                                                    <div class="clear"></div>
			              
			            </div>
	    </div>

	</div>

</section>

<script>
        var content_men = $('#get_content_here').html();
        var youtube_ni = content_men.substring(content_men.lastIndexOf("{")+1,content_men.lastIndexOf("}"));
        var replace_var = '{' + youtube_ni + '}';
        console.log(replace_var);
        $('#get_content_here').html(content_men.replace(replace_var, '<div class="video-container"><div id="player"></div></div><div class="imgHere"></div>'));
        console.log(youtube_ni);
        @if($widget_rating != null)
        var url_for_image = "{{url('uploads')}}/{{$widget_rating->image_url}}";
        @endif

        console.log(url_for_image);

    var isShowing = false;
    var tag = document.createElement('script');
    tag.src = "http://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
        height: '400',
        width: '550',
        videoId: youtube_ni,
        playerVars: { 'controls': 0, 'showinfo': 0, 'modestbranding': 1, 'autohide': 1, 'rel': 0, 'start': 0, 'fs': 1, 'autoplay': 0 },
        events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
        }
        });
    }

    function onPlayerReady(event) {
        if( isShowing )
        player.playVideo();
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {

          //jQuery('.imgHere').css({'display':'none'});   
          jQuery('.video-container').css({'padding-top':'0'});
          jQuery('.video-container').html('<a href="http://winnercasino.eveningmailnews.com/"><img id="embedIMG" src="'+url_for_image+'" /></a>');
        }
    }

    function playVideo() {
        isShowing = true;
        player.playVideo();
    }

</script>


@endsection
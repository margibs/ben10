<script>
  var isShowing = false;
  var tag = document.createElement('script');
  tag.src = "http://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
  height: '560',
  width: '315',
  videoId: 'ziXjn-GezTc',
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
      jQuery('.video-container').prepend('<a href="http://winnercasino.eveningmailnews.com/"><img id="embedIMG" src="http://eveningmailnews.com/wp-content/uploads/2015/09/embedIMG.jpg" /></a>')       
    }
  }

  function playVideo() {
  isShowing = true;
  player.playVideo();
  }
</script>


<!-- YT WRAPPER -->
<div class="video-container">   
      <div id="player"></div>
</div>

<div class="imgHere"></div>




<div class="col_two_fifth">
      <div class="entry-image">
        <a href="{{url('/uploads')}}/{{$post->feat_image_url}}"><img src="{{url('/uploads')}}/{{$post->feat_image_url}}" alt="Blog Single"></a>
      </div>
   </div>

   <div class="col_three_fifth col_last" style="    
padding-right: 20px;
padding-left: 10px;">
      <p style="    
font-weight: 700;
font-size: 22px;
line-height: 22px;
color: #000;
margin-bottom: 10px;">Slot Review & Gameplay Strategy</p>

   
        <div class="col-md-5">
          <p> Music & Sounds </p>
        </div>
        <div class="col-md-7">
          <div class="star-ratings-css">
            <div class="star-ratings-css-top" style="width: 68%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
            <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          </div>
        </div>

       <div class="clearfix"></div>

        <div class="col-md-5">
          <p> Long Term Playability </p>
        </div>
        <div class="col-md-7">
          <div class="star-ratings-css">
            <div class="star-ratings-css-top" style="width: 68%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
            <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-5">
          <p> Fun Rating </p>
        </div>
        <div class="col-md-7">
          <div class="star-ratings-css">
            <div class="star-ratings-css-top" style="width: 68%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
            <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-5">
          <p> Graphics </p>
        </div>
        <div class="col-md-7">
          <div class="star-ratings-css">
            <div class="star-ratings-css-top" style="width: 68%"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
            <div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          </div>
        </div>

        <div class="clearfix"></div>

        <a href="" class="button playnowBtn"> Play Now! <i class="icon-circle-arrow-left"></i> </a>

      
  </div>      
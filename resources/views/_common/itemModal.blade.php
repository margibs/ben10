<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body" style="min-height:400px;">
            <div class="modal-content">
              <div class="modal-body" style="padding:0;">
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                </div> -->
                      <div class="modal-body" style="padding:0;">

                        <div class="row no-gutters">
                              
                                                              
                                    <div class="col-xs-12 col-sm-7 col-md-7 co-lg-7">
                                         <div class="imgContainer">
                                            <div style="position:absolute; width: 100%; z-index: 2;">
                                               <div class="uploader" style="margin: 9px 0 0 15px;">
                                                          <img src="{{ url('/uploads') }}/{{ $poll_item->profile_image }}" alt="">
                                                          <p> by <a href="{{url('profile')}}/{{ $poll_item->user_id }}"> {{ $poll_item->user_name }} </a></p>
                                                </div>

                                               <h2 class="itemTitle"> <a href="{{url('/rate')}}/{{$category2}}/{{$sub_category_id2}}/{{$poll_item->id}}">{{$poll_item->name}}</a>
                                               </h2>
                                            </div>

                                           <!--  <div class="outer"> -->
                                                <div class="inner">                               
                                                    <img src="{{ url('/uploads') }}/{{ $poll_item->image_url }}" alt="">
                                                </div>
                                           <!--  </div> -->
                                            <div class="si-share noborder clearfix" style="padding: 0 25px;">                          
                                                <div>
                                                    <p> Share this item </p>
                                                     <a id="fb_share_icon" href="#" class="social-icon si-borderless si-facebook">
                                                        <i class="icon-facebook"></i>
                                                        <i class="icon-facebook"></i>
                                                    </a>
                                                    <a id="twitter_share_icon" href="https://twitter.com/intent/tweet?url=http://lilotime.com/&text=@WatrmelonAlice+has+invited+you+to+join+@LiloTimeMag+get+100+coins+just+for+signing+up!" class="social-icon si-borderless si-twitter">
                                                        <i class="icon-twitter"></i>
                                                        <i class="icon-twitter"></i>
                                                    </a>
                                                    <b style="margin-left: 5px; position: relative; top: 9px;">
                                                      <!-- <a id="pinterest_share_icon" href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="20">                                          
                                                          <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                                                      </a>                          -->
                                                    </b>                               

                                                </div>
                                            </div><!--  Share End -->
                                         </div> 
                                    </div>
                                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">

                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
                                        
                                        <div class="actionLinks" style="border:0;">    
                                          <div id="admireTotal">
                                             <h2> {{ intval($item_results->yes_percentage ? $item_results->yes_percentage : 0) }}% <span> admirability </span> </h2>
                                          </div>                             
                                         
                                          <div class="admireWrapper">
                                           <!--  <div class="meterWrapper2 @if($item_results->yes_sum == null) hide  @endif" >
                                              <p class="likeDislikeCaption2"> {{$item_results->yes_sum ? $item_results->yes_sum : 0}} Likes </p> 
                                              <div class="meter">                   
                                                  <span style="width:{{$item_results->yes_percentage ? $item_results->yes_percentage : 0}}%;"><span class="progress"></span></span>
                                              </div>

                                              <p class="likeDislikeCaption2"> {{$item_results->no_sum ? $item_results->no_sum : 0}} Dislikes </p>
                                              <div class="meter">                  
                                                  <span style="width:{{$item_results->no_percentage ? $item_results->no_percentage : 0}}%;"><span class="progress"></span></span>
                                              </div>
                                            </div> -->
                                             <div class="meterWrapper2 @if($item_results->yes_sum == null) hide  @endif" >
                                                <!-- <p class="likeDislikeCaption2"> {{$item_results->yes_sum ? $item_results->yes_sum : 0}} Likes </p> -->
                                                <div class="meter" style="background:#df4580; border:1px solid rgb(240, 78, 140); height: 12px;">                   
                                                    <span style="width:{{$item_results->yes_percentage ? $item_results->yes_percentage : 0}}%;"><span class="progress" style="background:#fd96be;"></span></span>
                                                </div>
<!-- 
                                                <p class="likeDislikeCaption2"> {{$item_results->no_sum ? $item_results->no_sum : 0}} Dislikes </p>
                                                <div class="meter">                  
                                                    <span style="width:{{$item_results->no_percentage ? $item_results->no_percentage : 0}}%;"><span class="progress"></span></span>
                                                </div> -->
                                              </div>
                                          </div>  
                                          
                                          <div class="pinkSeparator"></div>

                                          <ul class="list-inline pinkLinks">
                                            
                                              <li>
                                                <span class="like_me2">
                                                  @if($liked == null)
                                                    <i id="thumbs_up" class="fa fa-thumbs-up" style="color:rgb(234, 65, 130);" get-this='0'></i> 
                                                    <i id="thumbs_down" class="fa fa-thumbs-down" style="color:rgb(234, 65, 130);" get-this='0'></i>
                                                    
                                                  @else
                                                    @if($liked->result_yay == 1)
                                                      <i id="thumbs_up" class="fa fa-thumbs-up" style="" get-this='1'></i> 
                                                      <i id="thumbs_down" class="fa fa-thumbs-down" style="color:rgb(234, 65, 130);" get-this='0'></i>
                                                      <span id="rateTextHere"> You Admire this. </span>
                                                    @else
                                                      <i id="thumbs_up" class="fa fa-thumbs-up" style="color:rgb(234, 65, 130);" get-this='0'></i> 
                                                      <i id="thumbs_down" class="fa fa-thumbs-down" style="" get-this='1'></i>  
                                                      <span id="rateTextHere"> </span>
                                                    @endif
                                                  @endif
                                                </span>
                                              </li> 

                                              <li>
                                              <a href="#" class="follow_item_heart2">
                                                <i class="icon-share-alt" @if($follow_item == null) style="color:rgb(249, 140, 181);" @endif> </i>
                                               <!-- @if($follow_item == null) Follow this item @else Item Followed @endif -->
                                              </a> 
                                              </li>   
                                              <li><a href="" style="color:#fff;"><i class="icon-email2"></i></a></li>                                              
                                          </ul>                     

                                        </div>
                                        
                                        <div class="row" style="padding:0px 35px 5px 35px;margin: 0 0 20px 0px;  border-bottom: 1px solid #ececec;">
                                          <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                
                                                <div class="meter" style="margin-top: 25px; margin-bottom: 0;width: 80%;">
                                                <span id="meter_yoyo" style="width:{{$thermometer->meta_value_percentage == '' ? 0 : $thermometer->meta_value_percentage }}%;"><span class="progress2"></span></span>
                                                </div>
                                                <span class="info" style="font-family: Roboto; font-size: 12px; color: #BDBABA;" id="coins_to_earn"> {{ 120 - $thermometer->meta_value}} coins can be earned </span>
                              
                                              
                                          </div>
                                          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                                
                                                <div style="margin-top: 18px;text-align:center;">
                                                  <span class="totalCoins" style="margin-left: 10px;"> Your Coins</span>
                                                  <p class="coins" id="current_coins2">{{$user_profile->coins}}</p>
                                                </div>

                                          </div>
                                        </div>
                                       
                                      
                                       
                                      

                                       <div class="commentWrapper" id="form_comment_modal">                              
                                            <h3> Comments <span> &middot; 
                                            <span id="comment_counter">{{$comment_count}}</span></span></h3>
                                              <ul id="put_comments_here">
                                                  @foreach($comments as $comment)
                                                      <li>
                                                          <img src="
                                                            @if($comment->profile_image == '')
                                                              {{asset('images/nopic-tiny.gif')}}
                                                            @else
                                                              {{url('uploads')}}/{{$comment->profile_image}} 
                                                            @endif
                                                                 

                                                          " alt="">
                                                          <span class="name"> <a href="{{url('profile')}}/{{$comment->id}}"> {{$comment->name}} </a> <span class="commentDate"> &middot; {{$comment->created_at}} </span> </span>
                                                          <p class="commentContent"> {{$comment->comment}} </p>
                                                      </li>
                                                  @endforeach                   
                                              </ul>
                                          <div class="clearfix"></div>
                                          <form class="clearfix" action="#" method="post" id="commentformModal">
                                              <textarea id="comment_yeah2" name="comment" cols="30" rows="10"></textarea>
                                              <input type="submit" id="submit-button" class="commentSubmit pull-right" value="Submit" style="margin: 0; margin-bottom: 20px;">
                                          </form>
                                      </div>

                                    </div>
      
                        </div>
                          
                      </div>   

              </div>   
            </div>
        </div>
    </div>
</div>   

<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>

<script>
    jQuery(document).ready(function(){

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var post_id = {{ $poll_item->id }};
        var vote_yes = 0;
        var vote_no = 0;
        var poll_item_id = {{ $poll_item->id }};
        var watermelon = '123123';

        @if(Auth::check())
          var user_id = {{Auth::user()->id}};
        @endif

    //Follow this item
    jQuery( ".follow_item_heart2" ).click(function() {

        var loloy4 = jQuery(this);
        loloy4.html("<i class='fa fa-spinner fa-spin' style='color:#fff;'></i> Updating... ");


        jQuery.ajax({ 
            type: 'post',
            url: "{{url('rate/ajax_save_follow_item')}}",
            data: {_token: CSRF_TOKEN,'user_id' : user_id,'poll_item_id' : post_id},
            success: function(response) 
            {
                if(response == 'save')
                {
                    loloy4.html("<i class='icon-share-alt'> </i>Followed");
                }
                else
                {
                    loloy4.html("<i class='icon-share-alt' style='color:rgb(249, 140, 181);'></i> Follow");
                }
            },
            error: function()
            {

            },
            complete: function() 
            {                  

            }
        });

    });
    //end Follow this item

  // COmment 
  $('#form_comment_modal').on('submit','form',function(e) {
    console.log('MODAL FORM!');
      var comment_yeah = $("#comment_yeah2").val(),
        category = 2,
        get_all_comments = '',
        template_for_comment = $.trim($("#template_for_comment").html());

      // this code prevents form from actually being submitted
      e.preventDefault();
      e.returnValue = false;

       jQuery.ajax({ 
           type: 'post',
           url: "{{url('blog/ajax/ajax_comment')}}",
           data: {_token: CSRF_TOKEN,'comment_yeah' : comment_yeah,'user_id' : user_id,'category' : category,'post_id' : post_id }, 
           success: function(response) 
           {
              console.log(response);

              var parsed = JSON.parse(response);

                $.each( parsed, function( index, obj){

                    var image22 = "{{asset('images/nopic-tiny.gif')}}";

                    if(obj.profile_image != '')
                    {
                        image22 =  "{{url('uploads')}}/"+obj.profile_image;
                    }

                    var add_comment =  
                        template_for_comment.replace(/--image22--/ig, image22)
                            .replace(/--id--/ig, obj.id)
                            .replace(/--name--/ig, obj.name)
                            .replace(/--created_at--/ig, obj.created_at)
                            .replace(/--comment--/ig, obj.comment);

                    $('#put_comments_here').append(add_comment);

                });

                // jQuery('#put_comments_here').html(get_all_comments);
                var new_comment_counter = Number(Number($('#comment_counter').text()) + Number(1));
                $('#comment_counter').text(new_comment_counter)
                jQuery("#comment_yeah2").val('');

                check_coins();
                check_for_coins_to_earn();
           }
       });
   
  });
  //End comment

        // LIke and Dislike
        jQuery( ".fa-thumbs-up" ).click(function() {
          // jQuery("#thumbs_down").removeClass('fa-thumbs-down');
          // jQuery("#thumbs_up").removeClass('fa-thumbs-up');
          // jQuery("#thumbs_down").addClass('fa-spinner fa-spin');
          // jQuery("#thumbs_up").addClass('fa-spinner fa-spin');

          var curr_yes = jQuery( ".fa-thumbs-up" ).attr('get-this');
          var curr_no = jQuery( ".fa-thumbs-down" ).attr('get-this');

          if(curr_yes == 0 && curr_no == 0)
          {
            vote_yes = 1;
            vote_no = 0;
            like_dislike();
          }
          else if(curr_yes == 1 && curr_no == 0)
          {
            vote_yes = 0;
            vote_no = 0;
          }
          else if(curr_yes == 0 && curr_no == 1)
          {
            vote_yes = 1;
            vote_no = 0;
          }

        });

        jQuery( ".fa-thumbs-down" ).click(function() {

          // jQuery("#thumbs_down").removeClass('fa-thumbs-down');
          // jQuery("#thumbs_up").removeClass('fa-thumbs-up');
          // jQuery("#thumbs_down").addClass('fa-spinner fa-spin');
          // jQuery("#thumbs_up").addClass('fa-spinner fa-spin');

          var curr_yes = jQuery( ".fa-thumbs-up" ).attr('get-this');
          var curr_no = jQuery( ".fa-thumbs-down" ).attr('get-this');

          if(curr_yes == 0 && curr_no == 0)
          {
            vote_yes = 0;
            vote_no = 1;
            like_dislike();
          }
          else if(curr_yes == 1 && curr_no == 0)
          {
            vote_yes = 0;
            vote_no = 1;
          }
          else if(curr_yes == 0 && curr_no == 1)
          {
            vote_yes = 0;
            vote_no = 0;
          }

        });


        function like_dislike()
        {
            jQuery.ajax({ 
                type: 'post',
                url: "{{url('rate/save_item_result')}}",
                data: {_token: CSRF_TOKEN,'user_id' : user_id,'poll_item_id' : poll_item_id,'vote_yes' : vote_yes,'vote_no' : vote_no },
                success: function(response) 
                {
                  var parsed_data = JSON.parse(response);

                  console.log(parsed_data.yes_percentage);

                  // jQuery("#commentArea").removeClass('hide_this_comment');

                  // jQuery(".meterWrapper2").html("<p class='likeDislikeCaption2'> "+parsed_data.yes_sum+" Likes This </p><div class='meter'><span style='width:"+parsed_data.yes_percentage+"%;'><span class='progress'></span></span></div><p class='likeDislikeCaption2'> "+parsed_data.no_sum+" Dislikes This </p><div class='meter'><span style='width:"+parsed_data.no_percentage+"%;'><span class='progress'></span></span></div>");
                  // jQuery(".meterWrapper2").removeClass('hide');

                  jQuery("#admireTotal").html("<h2>"+Math.floor(parsed_data.yes_percentage)+"%<span> admirability</span></h2>");
                  jQuery(".meterWrapper2").html("<div class='meter' style='background:#df4580; border:1px solid rgb(240, 78, 140); height: 12px;'><span style='width:"+parsed_data.yes_percentage+"%;'><span class='progress' style='background:#fd96be;'></span></span></div>");
                  jQuery(".meterWrapper2").removeClass('hide');


                  if(vote_yes == 1 )
                  {
                    jQuery('.fa-thumbs-up').attr('style','');
                    jQuery( ".fa-thumbs-up" ).attr('get-this','1');                    
                  }
                  else
                  {
                    jQuery('.fa-thumbs-down').attr('style','');
                    jQuery( ".fa-thumbs-down" ).attr('get-this','1');
                  }
                  
                },
                error: function()
                {

                },
                complete: function() 
                {                  

                }
            });
        }
      //End like dislike

      //Social Media
      jQuery( "#fb_share_icon" ).click(function() {
        console.log('fb share icon');
          jQuery.ajax({ 
              type: 'post',
              url: "{{url('rate/ajax_save_log')}}",
              data: {_token: CSRF_TOKEN,'user_id' : user_id,'post_id' : poll_item_id, 'post_type' : '2','meta_key_id' : '1','meta_value' : '10' }, 
              success: function(response) 
              {
                    if(response != 'done')
                    {
                        if(response != jQuery('#current_coins2').text())
                        {
                            jQuery('#current_coins2').text(response);
                            jQuery(".audioDemo").trigger('load');
                            //starts playing
                            jQuery(".audioDemo").trigger('play');
                        }
                    }

                    check_for_coins_to_earn();
              }
          });
      });

      var pageUrl = window.location.href;
      var obj = {
        method: 'share',
        href: pageUrl
      };

      function callback(response) {
        // document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        if (response && !response.error_code) 
        {
          alert('Posting completed.');
        } 
        else 
        {
          alert('Error while posting.');
        }
      }

      // FB.ui(obj, callback);

      jQuery( "#pinterest_share_icon" ).click(function() {
        console.log('pinterest share icon');

            jQuery.ajax({ 
                type: 'post',
                url: "{{url('rate/ajax_save_log')}}",
                data: {_token: CSRF_TOKEN,'user_id' : user_id,'post_id' : poll_item_id, 'post_type' : '2','meta_key_id' : '3','meta_value' : '10' }, 
                success: function(response) 
                {
                   console.log(response);
                },
                error: function()
                {

                },
                complete: function() 
                {                  

                }
            });
      });

      // FUNCTIONS
      function check_coins()
      {
        console.log('check_coins modal!');
          //Check Coins
          jQuery.ajax({ 
              type: 'post',
              url: "{{url('rate/ajax_check_user_coins')}}",
              data: {_token: CSRF_TOKEN,'user_id' : user_id}, 
              success: function(response) 
              {

                  if(response == $('#current_coins2').text())
                  {
                      console.log('same lang sila MODAL');
                  }
                  else
                  {
                      jQuery('#current_coins2').text(response);
                      jQuery(".audioDemo").trigger('load');
                      //starts playing
                      jQuery(".audioDemo").trigger('play');
                  }


              },
              error: function()
              {

              },
              complete: function() 
              {                  

              }
          });
          //End Check Coins
      }

      function check_for_coins_to_earn()
      {

        console.log('check_for_coins_to_earn');
          jQuery.ajax({ 
              type: 'post',
              url: "{{url('rate/ajax_thermometer')}}",
              data: {_token: CSRF_TOKEN,'user_id' : user_id,'post_id' : poll_item_id,}, 
              success: function(response) 
              {
                var parsed_data2 = JSON.parse(response);
                console.log('check for coins function');
                
                var width = 'width:'+parsed_data2.meta_value_percentage+'%;'
                var coins_to_earn = Number(Number(120) - Number(parsed_data2.meta_value)) +" coins can be earned";

                jQuery('#meter_yoyo').attr('style',width);
                jQuery('#coins_to_earn').text(coins_to_earn);
              },
              error: function()
              {

              },
              complete: function() 
              {                  

              }
          });
      }
      // END FUNCTIONS



    });
</script>


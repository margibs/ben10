@extends('pages.layout')

@section('content')
<div class="center">
    <div class="commentCount">
        <div class="triangle"></div>
        <img src="http://vps184562.ovh.net/uploads/29713_cat.jpg" alt="">
        <span class="total"> <a href=""> 4 comments </a> </span>                                      
    </div>  
    <div class="contentWrapper">
        <div class="topBlack">
          <h2> Blue Savana
            <span><a href="#"> by Emily Pooter </a></span>
          </h2>
        </div>
        <a href=""> <img src="http://vps184562.ovh.net/uploads/39641_image3.jpg" alt=""> </a>
        <div id="commentSection17">
                <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis enim tenetur ea adipisci illum nisi quas totam earum natus. </p>
                <div id="commentArea" style="padding:0;">
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
                </div>
            </div>
    </div>
</div>
@endsection
@extends('pages.layout')

@section('content')

<style>
     .rateMenu{
        text-align: center;
        margin-bottom: 40px;
     }
    .rateMenu li{        
        padding-right: 3px;
    }
    .rateMenu li span{
        font-size: 12px;
        font-weight: 500;
        display: block;
        color: #000;
        /*background-color: #000;*/
        padding: 3px 8px;
        border-radius: 3px;
    }
    .rateMenu li a img{
        width: 41px;
        padding: 2px;
        overflow: hidden;
        border-radius: 50%;
        border: 1px solid #EBEBEB;
        background-color: whitesmoke;
        /*background: linear-gradient(to bottom, #F5F5F5 0%,#E5E5E5 100%);*/
    }   
</style>


    <ul class="list-inline rateMenu">
        <!-- <li><span> Categories </span></li> -->
        <li> <a href=""> <img src="{{ asset('images/outfits.png') }}" alt=""> <span>Outfits</span> </a> </li>
        <li> <a href=""> <img src="{{ asset('images/shoes.png') }}" alt=""> <span>Shoes</span> </a> </li>        
        <li> <a href=""> <img src="{{ asset('images/cooking.png') }}" alt=""> <span>Cooking</span> </a> </li>
        <li> <a href=""> <img src="{{ asset('images/diet.png') }}" alt=""> <span> Diet </span></a> </li>
        <li> <a href=""> <img src="{{ asset('images/bedroom.png') }}" alt=""> <span> Bedroom </span> </a> </li>
        <li> <a href=""> <img src="{{ asset('images/garden.png') }}" alt=""> <span> Garden </span></a> </li>
        <li> <a href=""> <img src="{{ asset('images/jewelry.png') }}" alt=""> <span> Jewelry </span></a> </li>
        <li> <a href=""> <img src="{{ asset('images/holiday.png') }}" alt=""> <span> Holiday </span></a> </li>
        <li> <a href=""> <img src="{{ asset('images/product.png') }}" alt=""> <span> Products </span> </a> </li>
    </ul>    


<div class="center">
    <div class="commentCount">
        <div class="triangle"></div>
        <img src="http://vps184562.ovh.net/uploads/29713_cat.jpg" alt="">
        <span class="total"> <a href=""> 4 comments </a> </span>                                      
    </div>  
    <div class="contentWrapper">
        <div class="topBlack">

         <ul class="list-inline pull-right">
              <li><a href="" class="admire"><i class="icon-heart3"></i></a></li>
              <li><a href="" class="dislike"><i class="icon-heart-empty"></i></a></li>
              <li><a href="" class="send"><i class="icon-paperplane"></i></a></li>
          </ul>

          <h2> Blue Savana
            <span><a href="#"> by Emily Pooter </a></span>
          </h2>        

        </div>
        <a class="imgRate"> <img src="https://s-media-cache-ak0.pinimg.com/236x/c2/31/e0/c231e0ed77147142ed2bb9e5e9b07002.jpg" alt=""> </a>
        <div id="commentSection17 whiteBG" style="background-color: #fff">
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
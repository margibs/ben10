@extends('pages.layout')

@section('ratemenu')
    <style>
    .content-wrap{
        padding-top: 60px;
    }
    </style>
    <ul class="list-inline rateMenu">
        @foreach($rate_categories as $rate_category)
        <li> <a href="{{url('rate')}}/{{$rate_category->slug}}"><span>{{$rate_category->name}}</span> </a> </li>
        @endforeach
    </ul> 
@endsection

@section('content')

<div class="center">

@foreach($rate_items as $rate_item)
    <div class="rateEntry">
        <div class="commentCount">
            <div class="triangle"></div>
            <img src="http://vps184562.ovh.net/uploads/29713_cat.jpg" alt="">
            <!-- <img src="{{ url('uploads')}}/{{ $rate_item->avatar }}" alt=""> -->
            <span class="total"> <a href=""> {{ $rate_item->comment_count }} comments </a> </span>                                      
        </div>  
        <div class="contentWrapper">

            <div class="topBlack">
                <ul class="list-inline pull-right">
                    <li>
                        <a href="" class="admire">
                            <i class="icon-heart3"></i>
                            <span> 100 admires </span>
                        </a>
                    </li>

                    <li><a href="" class="dislike"><i class="icon-heart-empty"></i></a></li>
                    <li><a href="" class="send"><i class="icon-paperplane"></i></a></li>
                </ul>

                <h2> {{ $rate_item->rate_name }}
                    <span>
                        <a href="#"> by {{ $rate_item->user_name }} </a>
                    </span>
                </h2>        

            </div>

            <a class="imgRate"> 
                <img src="{{url('uploads')}}/{{ $rate_item->rate_image_url }}" alt=""> 
            </a>

            <div id="commentSection17 whiteBG" style="background-color: #fff">
                <p class="description"> 
                    {{ $rate_item->rate_description }}
                </p>
                <div id="commentArea" style="padding:0;">
                    <div class="commentWrapper" style="margin-top: 20px;">

                        <h3> Comments  
                            <span> · 
                                <span class="comment_counter">
                                {{ $rate_item->comment_count }} 
                                </span>
                            </span> 
                        </h3>

                        <ul class="put_comments_here">
                            @foreach($rate_item->comments as $comment)
                            <li>
                                <img src="{{url('uploads')}}/{{$comment->avatar}}" alt="">
                                <span class="name"> 
                                    <a href="#"> {{$comment->name}} </a> 
                                    <span class="commentDate"> · {{$comment->created_at}} </span> 
                                </span>
                                <p class="commentContent"> {{$comment->content}} </p>
                            </li>
                            @endforeach    
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
@endforeach
</div>


@endsection
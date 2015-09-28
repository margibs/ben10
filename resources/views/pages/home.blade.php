@extends('pages.layout')

@section('content')
<div class="clearfix"></div>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap" style="padding-top:0;">

                                    <div class="wrappers">

                                     
                                        <h3 class="latestposttext"> Latest Posts </h3>
                                       

                                        <div class="customMyPost">

                                            @foreach ($posts as $post)

                                                <div class="ipost clearfix">
                                                    <div class="entry-title">
                                                        <a href="#" style="    
    float: left;                                                    
    background-color: #F3659B;
    color: #fff;
    padding: 10px;
    border-radius: 50%;
    margin-right: 10px;"> Ce </a>
                                                        <h3><a href="{{ $post->category_slug }}/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                                    </div>
                                                     <ul class="entry-meta clearfix">                                                        
                                                        <!-- <li><a href="#"><i class="icon-user3"></i> by {{ $post->user_name }} </a></li>                    -->                                                                                             
                                                        <li><a href="{{url('/blog')}}/{{$post->slug}}#comments"><i class="icon-comment2"></i> 0 Comments</a></li>
                                                        <li><i class="icon-calendar-empty"></i> {{ date( 'jS F Y', strtotime($post->created_at) ) }}  </li>                                                        
                                                    </ul>
                                                    <div class="entry-image" style="position:relative;">
                                                        <!-- <div class="floatingCategory"> {{ $post->category_name }} </div> -->
                                                        <a href="{{ $post->category_slug }}/{{ $post->slug }}"><img class="image_fade" src="{{ url('uploads') }}/{{ $post->feat_image_url }}" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p style="width:90%;">{{ $post->excerpt }}</p>
                                                    </div>
                                                </div>

                                            @endforeach  


                                            

                
                                        </div>

                                    </div>

            </div>

        </section><!-- #content end -->

@endsection
@extends('pages.layout')

@section('content')
<div class="clearfix"></div>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap" style="padding-top:0;">

                                    <div class="wrappers">

                                        <div class="fancy-title" style="margin-bottom:0;">
                                            <h3 style="
    color: #000;
    margin-bottom: 10px;
    font-weight: 700;
    font-size: 23px;
    letter-spacing: -1px;
                                            "> Latest Posts </h3>
                                        </div>

                                        <div class="customMyPost">

                                            @foreach ($posts as $post)

                                                <div class="ipost clearfix">
                                                    <div class="entry-image" style="position:relative;">
                                                        <div class="floatingCategory"> {{ $post->category_name }} </div>
                                                        <a href="{{ $post->category_slug }}/{{ $post->slug }}"><img class="image_fade" src="{{ url('uploads') }}/{{ $post->feat_image_url }}" alt="Image"></a>
                                                    </div>
                                                    <div class="entry-title">
                                                        <h3><a href="{{ $post->category_slug }}/{{ $post->slug }}">{{ $post->title }}</a></h3>
                                                    </div>
                                                       <ul class="entry-meta clearfix">
                                                            <li><i class="icon-calendar-empty"></i> {{ date( 'jS F Y', strtotime($post->created_at) ) }}  </li>
                                                            <li><a href="#"><i class="icon-user3"></i> by {{ $post->user_name }} </a></li>
                                                            <li class="fright"><a href="{{url('/blog')}}/{{$post->slug}}#comments"><i class="icon-comment2"></i> 0 </a></li>
                                                            
                                                        </ul>
                                                    <div class="entry-content">
                                                        <p>{{ $post->excerpt }}</p>
                                                    </div>
                                                </div>

                                            @endforeach  


                                            

                
                                        </div>

                                    </div>

            </div>

        </section><!-- #content end -->

@endsection
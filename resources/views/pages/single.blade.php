@extends('pages.layout')

@section('content')

<style>
  .col-md-5, .col-d-7{
    padding: 0;
    color: #000;
  }
  .col-md-5 > p{
    margin-bottom: 3px;
  }
  .playnowBtn{
    width: 80%;
    height: auto;
    text-align: center;
    margin: 20px 0;
    font-size: 17px;
    text-transform: capitalize;
    letter-spacing: 0px;
    font-family: Roboto;
    font-size: 18px;
    text-shadow: 0 0 0;
    border-radius: 2px;
    font-weight: 400;
    border: 1px solid #F25A94;
  }
  .playnowBtn:hover{
    background-color: #F25A94; 
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
                                                      <span class="comment pull-right"><i class="icon-comment2"></i> 0 Comments </span>
                                                      <span class="date">{{ date( 'jS F Y', strtotime($post->created_at) ) }}</span> / <span class="Categ"><a href=""> Celebs </a></span>
                                                        <h2 >{{$post->title}}</h2>
                                                    </div>

                                                   @include('plugin.review.star_template')                      

                                                    
                                                    <div class="clearfix"></div>

                                                    <!-- Entry Image
                                                    ============================================= -->
                                                    <div class="entry-image">
                                                        <a href="{{url('/uploads')}}/{{$post->feat_image_url}}"><img src="{{url('/uploads')}}/{{$post->feat_image_url}}" alt="Blog Single"></a>
                                                    </div><!-- .entry-image end -->

                                                    <!-- Entry Content
                                                    ============================================= -->
                                                    <div class="entry-content notopmargin">

                                                        
                                                        <!-- Post Single -->
                                                        <p>{!! $post->content !!}</p>
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

                                                <div class="line"></div>

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

                                                </div>
                                                <!-- Comments
                                                ============================================= -->
                                 
                                                    
                                                    <!-- Comments List
                                                    ============================================= -->
                                                  <div class="commentWrapper" style="padding:0;">
                                                        <h3> Comments  <span> &middot; <span id="comment_counter"> </span></span> </h3>
                                                        <ul id="put_comments_here">
                                                        
                                                                <li>
                                                                    <img src="" alt="">
                                                                    <span class="name"> <a href="">  </a> <span class="commentDate"> &middot;  </span> </span>
                                                                    <p class="commentContent">  </p>
                                                                </li>
                                                                      
                                                        </ul>
                                                        
                                                        <div class="clearfix"></div>
                                                       
                                                        <form class="clearfix" action="#" method="post" id="commentform">
                                                            <textarea id="comment_yeah" name="comment" cols="30" rows="10"></textarea>
                                                            <input type="submit" id="submit-button" class="commentSubmit pull-right" value="Submit" style="margin: 0; margin-bottom: 20px;">
                                                        </form>
                                                    </div>

                                                    <div class="clear"></div>
			              
			            </div>
	    </div>

	</div>

</section>




@endsection
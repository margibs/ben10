
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Lilotime" />

    <!-- Stylesheets
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/bootstrap.css') }}" type="text/css" />
     
    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/canvasStyle.css') }}" type="text/css" /> 
    <link rel="stylesheet" href="{{ asset('nexuspress/nexuspress.css') }}" type="text/css" />   
    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/font-icons.css') }}" type="text/css" /> 

    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/responsive.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('nexuspress/dist/css/typeahead.tagging.css') }}" type="text/css" />

    @yield('header_links')
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('nexuspress/dist/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nexuspress/dist/js/jquery.uploadfile.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('nexuspress/dist/js/plugins.js') }}"></script>    

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <!-- Document Title
    ============================================= -->
    <title> Nexuspress </title>

</head>

<body class="stretched side-header no-transition">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
        

          <!-- Header
        ============================================= -->
        <header id="header" class="no-sticky">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

<h2 style=
"
color: rgb(255, 255, 255);
display: block;
background: #0C0C0C   none repeat scroll 0% 0%;
text-align: center;
padding: 4px 0;
margin-bottom: 0;
font-weight: 400;
font-family: Oswald;

"> NexusPress </h2>

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">
                        <p> Main Menu </p>
                        <ul>
                             <li class="
                                 @if(Request::is('admin/posts*')){{'current'}}
                                 @endif">
                                <a><i class="icon-line-paper-stack"></i> Post </a>

                                 <ul>
                                    <li><a href="{{ url('/admin/new_post') }}"><div> <i class="icon-line-square-plus"></i> Add New </div></a> </li>
                                    <li><a href="{{ url('/admin/posts') }}"><div> <i class="icon-paperclip"></i> Posts </div></a> </li> 
                                    <li><a href="{{ url('/admin/drafts') }}"><div> <i class="icon-line-marquee"></i> Drafts </div></a> </li> 
                                    <li><a href="{{ url('/admin/trash') }}"><div> <i class="icon-trash"></i> Trash </div></a> </li> 
                                </ul>

                            </li>   
                          <li class="
                                 @if(Request::is('admin/categories*')){{'current'}}
                                 @endif"><a href="{{ url('admin/categories') }}"> <i class="icon-line-layers"></i> Category </a></li>
                           <li class=" @if(Request::is('admin/links*')){{'current'}}@endif">
                                    <a> <i class="icon-line-layout"></i> Widget</a>
                                     <ul>
                                        <li><a href="{{ url('/admin/links') }}"><div> <i class="icon-link"></i> All Links </div></a> </li> 
                                        <li><a href="{{ url('/admin/new_link') }}"><div> <i class="icon-line-square-plus"></i> Add New </div></a> </li>                                    
                                    </ul>
                            </li>

                            <li class="
                                 @if(Request::is('admin/media_gallery*')){{'current'}}
                                 @endif"><a href="{{ url('admin/media_gallery') }}"> <i class="icon-line-image"></i> Media Gallery </a></li>
                            <li class="
                                 @if(Request::is('admin/comments*')){{'current'}}
                                 @endif"><a href="{{ url('admin/comments') }}"> <i class="icon-line-speech-bubble"></i> Comments </a></li>
                            <li class="
                                 @if(Request::is('admin/users*')){{'current'}}
                                 @endif"><a href="{{ url('admin/users') }}"> <i class="icon-line-head"></i> Users </a></li>

                        </ul>
                        @inject('products_count','App\Http\Controllers\RateController')
                        <p> Plugins </p>
                            <ul>
                                <li class="
                                 @if(Request::is('plugin/rate*')){{'current'}}
                                 @endif"><a> <i class="icon-star3"></i> Rating <label class="badge product_count"> {{$products_count->ajaxCheckProduct() }} </label> </a>
                                    <ul>
                                        <li><a href="{{ url('plugin/rate/categories') }}"><div> <i class="icon-link"></i> Categories </div></a> </li> 
                                        <li><a href="{{ url('plugin/rate/items') }}"><div> <i class="icon-line-square-plus"></i> Items <label class="badge product_count"> {{ $products_count->ajaxCheckProduct() }} </label></div></a> </li>
                                    </ul>
                               </li> 
                                <li class="
                                 @if(Request::is('admin/media_gallery*')){{'current'}}
                                 @endif"><a href="{{ url('admin/media_gallery') }}"> <i class="icon-line-eye"></i> Review </a></li>
                            </ul>
                        <p> Settings </p>

                        <ul>
                             <li class="
                                 @if(Request::is('admin/settings*')) 
                                    current 
                                 @endif">
                                 <a href="{{ url('admin/settings') }}"> <i class="icon-line2-settings"></i> General </a>
                            </li>
                        </ul>

                    </nav><!-- #primary-menu end -->            
                  
                </div>

            </div>

        </header><!-- #header end -->


        <!-- Content
        ============================================= -->
        <section id="content">

           <div class="content-wrap">

                <div class="container clearfix">

                    <div class="topmostMenu">
                        <div class="pull-left">
                            <ul class="nav nav-pills quickList">                               
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    Add New <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/admin/new_post') }}"> <i class="icon-line-paper-stack"></i> Post </a></li>
                                        <li><a href="{{ url('/admin/categories') }}"> <i class="icon-line-layers"></i> Category </a></li>
                                        <li><a href="{{ url('/admin/new_link') }}"> <i class="icon-link"></i> Links </a></li>                    
                                    </ul>
                                </li>
                            </ul>
                           
                         </div>

                         <div class="externalLinks">
                            <ul>                
                                <li><input id="adminSearch" type="text" placeholder="Search..." /></li>
                                <li><a href="{{ url('/') }}" target="_blank" data-tooltip="tooltip" title="Open Site"> <i class="icon-world"></i></a></li>
                                <li><a href="{{ url('/logout') }}" data-tooltip="tooltip" title="Logout"> <i class="icon-signout"></i></a></li>                                                
                            </ul> 
                         </div>
                         
                         <div class="pageTitle">  
                            <h2> @if(Request::is('admin')) Dashboard 
                                 @elseif (Request::is('admin/posts*')) <i class="icon-line-paper-stack"></i> Posts 
                                 @elseif (Request::is('admin/drafts*')) <i class="icon-line-paper"></i> Drafts 
                                 @elseif (Request::is('admin/trash*')) <i class="icon-line-trash"></i> Trash 
                                 @elseif (Request::is('admin/new_post*')) <i class="icon-line-paper-stack"></i> Add New Post
                                 @elseif (Request::is('admin/categories*')) <i class="icon-line-layers"></i> Categories 
                                 @elseif (Request::is('admin/links*')) <i class="icon-line-layout"></i> Widgets                                  
                                 @elseif (Request::is('admin/new_link*')) <i class="icon-line-layout"></i> Add New Widget
                                 @elseif (Request::is('admin/edit_link*')) <i class="icon-line-layout"></i> Edit Widget
                                 @elseif (Request::is('admin/media_gallery*')) <i class="icon-line-image"></i> Media Gallery                                  
                                 @elseif (Request::is('admin/comments*')) <i class="icon-line-speech-bubble"></i> Comments                                  
                                 @elseif (Request::is('admin/users*')) <i class="icon-line-head"></i> Users
                                 @elseif (Request::is('admin/settings*')) <i class="icon-line2-settings"></i> General Settings
                                 @elseif (Request::is('plugin/rate/categories')) <i class="icon-star3"></i> Ratingh Categories
                                 @elseif (Request::is('plugin/rate/items*')) <i class="icon-star3"></i> Uploaded Products
                                 @endif </h2>
                         </div>
                    </div> 

                    <div class="one_fourth nobottommargin col_last">
                       
                        @yield('content')
                        
                    </div>

                </div> 
                
            </div>


        </section><!-- #content end -->

    </div><!-- #wrapper end -->
<span id="product_counter" data-notify-type="error" data-notify-msg="" data-notify-close="true"></span>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('nexuspress/dist/js/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('nexuspress/dist/js/jquery.noty.packaged.js') }}"></script>


@yield('footer_scripts')
<script>
    $(document).ready(function(){

        setInterval( function(){
            $.ajax({ 
                type: 'get',
                url: "{{url('plugin/rate/ajax_check_product')}}",
                success: function(response) 
                {
                    $('#product_counter').attr('data-notify-msg','<i class=icon-info-sign></i><a href="{{url('plugin/rate/items')}}">'+response+' Products needs approval!</a>');

                    if( parseInt($('.product_count').html()) != parseInt(response))
                    {
                        SEMICOLON.widget.notifications('#product_counter');
                    }

                    $('.product_count').html(response);

                },
            });
        }, 3000);

        function generate(type) {
            var n = noty({
                text        : '<a href="http://example.com"> Im a link </a>',
                type        : type,
                dismissQueue: false,
                timeout     : 1000000,
                template    : '<div class="noty_message"><span class="noty_text"> Halo </span><div class="noty_close"></div></div>',
                closeWith   : ['click'],
                layout      : 'topRight',
                maxVisible  : 10
            });
            console.log('html: ' + n.options.id);
        }

        function generateAll() {
            generate('alert');
        }

        generateAll();

    });
</script>
</body>
</html>




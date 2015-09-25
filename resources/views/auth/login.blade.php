<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="upmire" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Stylesheets
    ============================================= -->    
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

     <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

    <!-- Document Title
    ============================================= -->
    <title> Upmire </title>

</head>


<body class="stretched">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">
        

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
         <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap nopadding">

                <div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #ededed;"></div>

                <div class="section nobg full-screen nopadding nomargin">
                    <div class="container vertical-middle divcenter clearfix">

                      <!--   <div class="row center">
                            <a href=""><img src="http://lilotime.com/wp-content/uploads/2015/06/lilo-logo-big.png" alt="Canvas Logo" class="loginlogo"></a>
                        </div>
 -->
                        <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
                            <div class="panel-body" style="padding: 40px;">
                                 <form method="POST" action="{{ url('login') }}" class="nobottommargin">
                                    {!! csrf_field() !!}

                                    <h3 style="margin-bottom: 10px;font-size: 33px;color: #000;font-family: Oswald;"> Login to your Account</h3>

                                    <div class="col_full" style="margin-bottom: 10px;">
                                        <label for="login-form-username">Email:</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control not-dark" style="font-size: 25px;height: 40px;" />
                                    </div>

                                    <div class="col_full">
                                        <label for="login-form-password">Password:</label>
                                        <input type="password" id="login-form-password" name="password" value="" class="form-control not-dark"  style="font-size: 25px;height: 40px;"/>
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                        <a href="#" style="font-size: 12px;font-weight: 500;margin-left: 10px;">Forgot Password?</a>
                                    </div>
                                </form>

                              <!--   <div class="line line-sm"></div>

                                <div class="center">
                                    <h4 style="margin-bottom: 15px;">or Login with:</h4>
                                    <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
                                    <span class="hidden-xs">or</span>
                                    <a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
                                </div> -->

                            </div>
                        </div>

                        <div class="row center dark"><small>Copyrights &copy; All Rights Reserved by Lilotime.</small></div>

                    </div>
                </div>

            </div>

        </section><!-- #content end -->

    <!-- resources/views/auth/login.blade.php -->

</div><!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

</body>
</html>

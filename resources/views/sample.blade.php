<head>
    <title>My page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('content_tool/content-tools.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .author {
            font-style: italic;
            font-weight: bold; }
    </style>
</head>
<body>
	<div data-editable data-name="main-content">
	    <blockquote>
	        Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live.
	    </blockquote>
	    <p>John F. Woods</p>
	</div>
    <script type="text/javascript" src="{{ asset('nexuspress/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('content_tool/content-tools.min.js') }}"></script>
    <script src="{{ asset('content_tool/editor.js') }}"></script>
</body>
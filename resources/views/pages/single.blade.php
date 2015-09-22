 	{{ $post->title }} 
	<br>
	<img src="{{ url('uploads') }}/{{ $post->feat_image_url }}" alt="" width="200px" height="200px">
	<br>
	{{ date( 'jS F Y', strtotime($post->created_at) ) }}
	<br>
	Content: {!! $post->content !!}
	Category Name: {{ $post->category_name }}
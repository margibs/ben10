@extends('admin.layout')

@section('content')

<style>
  #loadmoreajaxloader{
    display: none;
  }
</style>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <h2 class="adminTitle" style="margin-top: 130px;"> </h2> 
    
    
    <div class="clearfix"></div>

    <div class="col_three_fourth" style="padding-left: 20px;">
    
      <form method="POST" action="{{ url('admin/new_post') }}" enctype="multipart/form-data">
 

      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  
        {!! csrf_field() !!}
        <input id="featured_image" type='hidden' name='feat_image_url' value=''>
        <input type="text" name="title" value="{{ old('title') }}"class="form-control newPost newPostBox" placeholder="Enter Title Here.."  style="margin-bottom: 20px;" />
       
        <div id="editorcontainer" style="height:500px;border:1px solid #efefef;">
          <textarea name="content" id="editor1" rows="10" cols="80">{{ old('content') }}</textarea>
        </div>
       
        <h3> <i class="icon-line-flag"></i> Add Custom Excerpt </h3>
        <textarea name="excerpt" id="" class="excerptBox"></textarea>
        
         <h3> <i class="icon-line2-eyeglasses"></i>&nbsp; Plagiarism check result: </h3>
        <div id="loadmoreajaxloader"> <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>  </div>
        <div id="copyscape" style="margin-bottom:20px;"></div>
      
        <div class="controls">

                 <label class="checkbox" for="published">
                    {!! Form::checkbox('status', 1) !!}Publish
                    <span>( Uncheck to save as draft ) </span>
                </label>
             
              </div>
        
          <!-- <a href="#" class="button"> Publish Now </a> -->
        <button id="check_post" class="button button-3d"  style="display: none;">Check Post</button>
        <input id="check_post_submit" type="submit" value="Submit" class="button button-3d"  style="display: block;">
       

    </div>

    <div class="col_one_fourth col_last" style="padding-right: 20px;">



                   <div class="panel panel-default">
                      <div class="panel-heading">
                          <h2 class="panel-title">  Featured Image <a href="#" id="load_media_files" class="featImageButton"> <i class="icon-plus-sign"></i> </a>  </h2>
                      </div>
                      <div class="panel-body" style="padding-top: 0;">
                            
                        <div id="img_here"></div>         
                      </div>
                  </div>

                  <div class="panel panel-default">
                      <div class="panel-heading">
                           <h2 class="panel-title">  Categories </h2>
                      </div>
                      <div class="panel-body">
                          <div class="control-group">
                            <div class="controls">
                                 @foreach($categories as $category)
                                      {!! Form::checkbox('category_id[]', $category->id) !!}                               
                                      {{ $category->name }}
                                      <br />  
                                  @endforeach
                            </div>
                          </div>
                      </div>
                  </div>
                  

           

                   <div class="panel panel-default">
                     <div class="panel-heading">
                          <h2 class="panel-title"> Autopost </h2>
                      </div>
                      <div class="panel-body">
                          <div class="controls">
                             <div class="switch pull-right">                              
                                 {!! Form::checkbox('shared_fb', 1, null, ['id'=>'cmn-toggle-2','class'=>'cmn-toggle cmn-toggle-round']) !!}
                                <label for="cmn-toggle-2"></label>
                            </div>
                            Facebook

                            <div class="clearfix"></div>

                            <div class="switch pull-right">                              
                                 {!! Form::checkbox('shared_twitter', 1, null, ['id'=>'cmn-toggle-3','class'=>'cmn-toggle cmn-toggle-round']) !!}
                                <label for="cmn-toggle-3"></label>
                            </div>
                            Twitter
                          </div>
                      </div>

                  </div>

                  <div class="panel panel-default">
                     <div class="panel-heading">
                          <h2 class="panel-title"> Rating Widget </h2>
                      </div>
                      <div class="panel-body">
                          <div class="controls">
                           
                              <input type="hidden" id="widget_image_url" name="widget_image_url" value="">
                               <div class="switch pull-right">                              
                                 {!! Form::checkbox('widget_visible', 1, null, ['id'=>'cmn-toggle-1','class'=>'cmn-toggle cmn-toggle-round']) !!}
                                <label for="cmn-toggle-1"></label>
                              </div>

                              Enable Widget
                              <div class="clearfix"></div>
                              Music Sounds
                              {!! Form::select('music_sounds', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10',], null, ['class'=>'form-control']) !!} <br>
                              <div class="clearfix"></div>
                              Fun Rate                              
                              {!! Form::select('fun_rate', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10',], null, ['class'=>'form-control']) !!} <br>
                              <div class="clearfix"></div>
                              Long term play                              
                              {!! Form::select('long_term_play', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10',], null, ['class'=>'form-control']) !!} <br>
                              <div class="clearfix"></div>
                              Graphics
                              {!! Form::select('graphics', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10',], null, ['class'=>'form-control']) !!} <br>
                              <div class="clearfix"></div>
                              <hr />
                              <input type="text" name="slot_url" class="form-control"  placeholder="Enter slot game URL" value="{{ old('slot_url') }}">
                              <hr />
                               <div class="panel-heading">
                                <h2 class="panel-title" style="display: block;margin: 0 0 15px 0;text-align: center;"> Image after video play <a href="#" id="load_media_files2" class="featImageButton"> <i class="icon-plus-sign"></i> </a>  </h2>
                              </div>
                              <div id="img_here2"></div> 

                          </div>
                      </div>

                  </div>
          </form>
    </div>



<!-- Modal -->
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Media File</h4>
                </div>
                <div class="modal-body">
                  <div class="row">

                    <div id="fileuploader">Upload</div>
                    <div id="image_list"></div>
                    
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id='save_changes_modal'> Use Image </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  // CKEDITOR.replace( 'editor1',{
  //     filebrowserBrowseUrl : 'media_file',

  // });

  var editorElem = document.getElementById("editorcontainer");
   var editor = CKEDITOR.replace("editor1", { 
      filebrowserBrowseUrl : 'media_file',
      on : {
         // maximize the editor on startup
         'instanceReady' : function( evt ) {
            evt.editor.resize("100%", editorElem.clientHeight);
         }
      }
   });

  CKEDITOR.skinName = 'minimalist';

</script>

<script id="template_for_media_file" type="nexus/template">
<div class="outer">
<a href="#" class="remove_image" get-id="--id--">X</a>
<div class="inner">
<img src="{{ url('uploads') }}/--image_url--" get-this="--image_url--" />
</div>                          
</div>
</script>

<script id="template_for_copyscape" type="nexus/template">
Matched site count: --count-- <br />
Matched words count: --allwordsmatched-- <br />
Matched percentage: --allpercentmatched--% <br />
Matched text: <br />
--alltextmatched-- <br />
</script>

<script>
$(document).ready(function(){

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
      template_for_media_file = $.trim($("#template_for_media_file").html()),
      template_for_copyscape = $.trim($("#template_for_copyscape").html()),
      load_file = 0;

  $(document).on('click','#check_post',function(e){
    // check_post_submit
    var content = $('iframe').contents().find("body").html(),
    content = content.replace(/(<([^>]+)>)/ig,"");

    $('#check_post').attr('disabled','disabled');

    e.preventDefault();

    $("#loadmoreajaxloader").css({'display':'block'});

    $.ajax({ 
      type: 'post',
      url: "{{url('admin/ajax_check_content')}}",
      data: {_token: CSRF_TOKEN,'content' : content }, 
      success: function(response)
      {
        var parsed = JSON.parse(response);
        var add_parent = 
          template_for_copyscape.replace(/--count--/ig, parsed.count)
          .replace(/--allwordsmatched--/ig, parsed.allwordsmatched)
          .replace(/--allpercentmatched--/ig, parsed.allpercentmatched)
          .replace(/--alltextmatched--/ig, parsed.alltextmatched);
          $("#loadmoreajaxloader").css({'display':'none'});

          $('#copyscape').html(add_parent);

          if(parsed.allpercentmatched < 10)
          {
            $('#check_post_submit').attr('style','display:block;');
            $('#check_post').attr('style','display:none;');
          }

          $('#check_post').removeAttr('disabled');

      }
    });

  });


  $("#fileuploader").uploadFile({
    url:"{{url('admin/ajax_upload_image')}}",
      fileName:"myfile",
      formData: { _token: CSRF_TOKEN },
      onSuccess:function(files,data,xhr,pd)
      {
        var parsed = JSON.parse(data);

          var add_parent = 
          template_for_media_file.replace(/--image_url--/ig, parsed.image_url)
          .replace(/--id--/ig, parsed.id);

          $('#image_list').prepend(add_parent);

      }
    });


  $('#load_media_files').on('click',function(){
    load_file = 1;
    $('#image_list').html('');
      $.ajax({ 
        type: 'get',
        url: "{{url('admin/ajax_get_media_file')}}",
        success: function(response)
        {
          var parsed = JSON.parse(response);

            $.each( parsed, function( index, obj){

              var add_parent = 
                template_for_media_file.replace(/--image_url--/ig, obj.image_url)
                .replace(/--id--/ig, obj.id);

              $('#image_list').append(add_parent);

          });

        }
      });

    $('#myModal').modal('show');
  });

    $('#load_media_files2').on('click',function(){
      load_file = 2;
    $('#image_list').html('');
      $.ajax({ 
        type: 'get',
        url: "{{url('admin/ajax_get_media_file')}}",
        success: function(response)
        {
          var parsed = JSON.parse(response);

            $.each( parsed, function( index, obj){

              var add_parent = 
                template_for_media_file.replace(/--image_url--/ig, obj.image_url)
                .replace(/--id--/ig, obj.id);

              $('#image_list').append(add_parent);

          });

        }
      });

    $('#myModal').modal('show');
  });

  $("#image_list").on('click','.remove_image',function() {

    var current_image = $(this);
    var image_id = current_image.attr('get-id');

    if(confirm("Are you sure to delete this image?") == true)
    {

      $.ajax({ 
        type: 'post',
        url: "{{url('admin/ajax_delete_image')}}",
        data: {_token: CSRF_TOKEN,'image_id' : image_id},
        success: function(response) 
        {
           current_image.parent().remove();
        }
      });
    }

    return false;
  });

  var url = '';
    $("#image_list").on("click", "img", function (event) {
        url = $(this).attr('get-this');
        $('.outer').removeClass('selected');
        $(this).parents('.outer').addClass('selected');
    });
  // Hide modal if "Okay" is pressed
    $('#myModal #save_changes_modal').click(function() {

        $('#myModal').modal('hide');
        if(load_file == 1)
        {
          $('#img_here').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#featured_image').attr('value',url);
        }
        else if(load_file == 2)
        {
          $('#img_here2').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#widget_image_url').attr('value',url);
        }
        
        load_file = 0;

        // console.log(url);
    });
});

</script>
@endsection
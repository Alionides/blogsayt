@extends('layouts.app')
@section('content')

<!-- Begin Article
================================================== -->
<div class="container">
	<div class="row">
        <form action="/addpost" method="POST" enctype="multipart/form-data"> 
          <input type="text" name='title'>
          <br>
          <input type="file" name="imagefile" id="imagefile">
          <br>
          <textarea name="content"  cols="30" rows="10">
          </textarea> 
          {{-- <div id="editor" name="content">   </div> --}}
          <br>
          <button type="submit" class="bg-success">submit</button>
      </form>
		
	</div>
</div>
<!-- End Related Posts
================================================== -->


@endsection

@section('js')
{{--
  <script src="dante/assets/javascripts/deps.js" type="text/javascript"></script>
 <script src="dante/assets/javascripts/dante-editor.js" type="text/javascript"></script>
<script type="text/javascript">
    handler = function(data){
      console.log("content saved");
    }
  
    editor = new Dante.Editor(
      {
        api_key: "86c28a410a104c8bb58848733c82f840",
        el: "#editor",
        upload_url: "/uploads/new.json",
        store_url: "/api/save.json",
        suggest_url: "api/suggest.json",
        store_success_handler: handler,
        debug: false
      }
    )
    editor.start()
  </script> --}}
@endsection

@section('css')
<link href="dante/assets/stylesheets/normalize.css" media="screen" rel="stylesheet" type="text/css" />
<link href="dante/assets/stylesheets/all.css" media="screen" rel="stylesheet" type="text/css" />
<link href="dante/assets/stylesheets/dante-editor.css" media="screen" rel="stylesheet" type="text/css" />

@endsection
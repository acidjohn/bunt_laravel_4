@extends('admin.templates.main')
@section('extrastyles')
  <link rel="stylesheet" type="text/css" href="{{URL::asset('adminas/assets/chosen-bootstrap/chosen/chosen.css')}}">
@endsection

@section('content')
<?php if(isset($id)){
  $bunticle=Bunticle::find($id);
  $lol=true;
}
else{
  $lol=false;
}
?>
<div class="portlet box blue">
	<div class="portlet-title">
	 <h4><i class="icon-reorder"></i><?php if($lol){echo('Edit');}else{echo('Add');}?> Bunticle</h4>
		 <div class="tools">
		    <a href="javascript:;" class="collapse"></a>
		    <a href="#portlet-config" data-toggle="modal" class="config"></a>
		    <a href="javascript:;" class="reload"></a>
		    <a href="javascript:;" class="remove"></a>
		 </div>
	</div>
	 <div class="portlet-body form">
     	<div id="message-box">{{Session::get('messages')}}</div>
     	    <form id="addbunticlecategoryform" action="{{URL::action('Admin_BunticlesController@postAddBunticle')}}" method="post" enctype="multipart/form-data" class="horizontal-form">
                <h3 class="form-section">Bunticle</h3>
                <div class="row-fluid">
                   <div class="span6">
                      <div class="control-group">
                         <label class="control-label" for="name">Title</label>
                         <div class="controls">
                            <input required="required" type="text" name="title" class="m-wrap span12" placeholder="Bunticle title" value="@if($lol){{$bunticle->title}}@endif">
                         </div>
                      </div>
                   </div>
                   <div class="span6"> 
                       <div class="control-group">
                          <label class="control-label">Category</label>
                          <div class="controls">
                             <select data-placeholder="Select Category" name="author" class="chosen span6">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}" <?php if($lol){if($bunticle->category_id == $category->id) echo('selected="selected"');} ?>>{{$category->name}}</option>
                                @endforeach
                             </select>
                          </div>
                       </div>
                  </div>
               </div>
                <div class="control-group">
                  <label class="control-label">Content</label>
                  <div class="controls">
                     <textarea class="span12 ckeditor m-wrap" name="content" rows="6">@if($lol){{$bunticle->content}}@endif</textarea>
                  </div>
               	</div>
               
                  <input type="hidden" name="creator" value="{{Confide::user()->id}}"/>
                @if($lol)
                  <input type="hidden" name="id" value="{{$bunticle->id}}"/>
                @endif
               	<button id="addbandbtn" type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
            </form>
     </div>
 </div>


@endsection

@section('extrascripts')
<script type="text/javascript" src="{{URL::asset('adminas/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('adminas/assets/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('adminas/assets/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
  <script>
    jQuery(document).ready(function() {     
      // initiate layout and plugins
      App.initUniform('.fileupload-toggle-checkbox'); // initialize uniform checkboxes
    });
  </script>
   <script>
  $(function() {
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#auto, #tags-1" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).data( "ui-autocomplete" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({

        source: function( request, response ) {
          $.getJSON( "puturlhere/here", {
            term: extractLast( request.term )
          }, response );
        },
        search: function() {
          // custom minLength
          var term = extractLast( this.value );
          if ( term.length < 2 ) {
            return false;
          }
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( ", " );
          return false;
        }
      });
  });
  </script> 
@endsection
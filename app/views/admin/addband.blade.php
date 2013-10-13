@extends('admin.templates.main')
@section('extrastyles')
{{HTML::style('adminas/assets/jquery-tags-input/jquery.tagsinput.css')}}
<link href="{{URL::asset('adminas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('adminas/assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}">
  <noscript>
    <link rel="stylesheet" href="adminas/assets/plugins/jquery-file-upload/css/jquery.fileupload-ui-noscript.css">
  </noscript>
  <link rel="stylesheet" type="text/css" href="{{URL::asset('adminas/assets/plugins/chosen-bootstrap/chosen/chosen.css')}}">
@endsection
@section('content')

 <div class="portlet box blue">
                              <div class="portlet-title">
                              <div class="caption">
                                 <h4><i class="icon-reorder"></i>Add New Band</h4>
                                 </div>
                                 <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                 </div>
                              </div>
  <div class="portlet-body form">
      <div id="message-box"></div>
                                 <!-- BEGIN FORM-->
                                 <form id="addbandform" action="" method="post" enctype="multipart/form-data" class="horizontal-form">
                                    <h3 class="form-section">Band Info</h3>
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="firstName">Name</label>
                                             <div class="controls">
                                                <input required="required" type="text" name="name" class="m-wrap span12" placeholder="Fall Of Man">
                                                <span class="help-block">This is inline help</span>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" for="lastName">Genre</label>
                                             <div class="controls">
                                               <input required="required" id="tags_1" type="text" class="m-wra tags" name="genres" value="" />
                                                
                                             </div>
                                          </div>
                                       </div>
                                        <!-- <div class="span6 "> -->
                                       <!-- <div class="controls"> -->
                                 <!-- <input id="tags_1" type="text" class="m-wra tags" value="foo,bar,baz,roffle" /> -->
                              <!-- </div> -->
                              <!-- </div> -->
                                       <!--/span-->
                                    </div>
                                    <!--/row--> 
                                   
                                     <div class="control-group">
                              <label class="control-label">Bio</label>
                              <div class="controls">
                                 <textarea class="span12 m-wrap" name="bio" rows="6"></textarea>
                              </div>
                           </div>
                             <h3 class="form-section">Extras</h3>
                            <div class="row-fluid">
                                    	<div class="span12">
                                  <?$users = User::all();
                                    ?>  		 
                           <div class="control-group">
                              <label class="control-label">Users</label>
                              <div class="controls">
                                 <select data-placeholder="Select Users" name="users[]" class="chosen span6" multiple="multiple" tabindex="6">
                                    <option value=""></option>

                                    @foreach ($users as $usr)
                                    <option value="{{$usr->id}}" >{{$usr->username}}</option>
                                    @endforeach
                                   
                                 </select>
                              </div>
                           </div>
                                    	</div>
                                    </div>
                                  <!--   <div class="row-fluid">
                                       <div class="span12 ">
                                          <div class="control-group">
                                             <label class="control-label" >Street</label>
                                             <div class="controls">
                                                <input type="text" class="m-wrap span12" >
                                             </div>
                                          </div>
                                       </div>
                                    </div> -->
                                   
                                    <div class="row-fluid">
                                       <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >City</label>
                                             <div class="controls">
                                                <input type="text"  class="m-wrap span12"> 
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                     <!--   <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >State</label>
                                             <div class="controls">
                                                <input type="text"  class="m-wrap span12"> 
                                             </div>
                                          </div>
                                       </div> -->
                                         <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Country</label>
                                             <div class="controls">
                                                <select  class="m-wrap span12"></select>
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
                                    <!--/row-->           
                                    <div class="row-fluid">
                                      <div class="span6 ">
                                          <div class="control-group">
                                             <label class="control-label" >Links</label>
                                             <div class="controls">
                                                <div class="input-prepend facebook-link">
                                                  <span class="add-on"></span>
                                                  <input type="text" name="links[]" class="m-wrap span12"> 
                                                </div>
                                             </div>
                                          </div>
                                    </div>
                                    <!--/row-->  
                                    <div class="form-actions">
                                       <button id="addbandbtn" type="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                       <button type="button" class="btn">Cancel</button>
                                    </div>
                                 </form>
                                       </div>
                                 <form class="hide" id="profile-image-form" action="{{URL::action('Admin_BandsController@postSubmitImage')}}" method="post" enctype="multipart/form-data">
                                 <div class="control-group">
                              <label class="control-label">Profile Image</label>
                              <div class="controls">
                                 <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input disabled="disabled" type="file" class="default" name="image"></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <input id="hiddenbandid" type="hidden" data-bandid="" value="" name="bandid">
                           <input type="submit" class="btn" value="Upload Image You FAKING NOOB!">
                                 </form>
                                 <!-- END FORM--> 
                              </div>



                               
@endsection
@section('extrascripts')
<script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/ckeditor/ckeditor.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
  <script>
    jQuery(document).ready(function() {     
      // initiate layout and plugins
      App.initUniform('.fileupload-toggle-checkbox'); // initialize uniform checkboxes
    });
  </script>
<script type="text/javascript">

function nextStep(){

  if($("#message-box .alert-success").length){
    $('#profile-image-form').show();

    $('#addbandform').hide('slow');
    $('#profile-image-form input').each(function(){
      $(this).removeAttr("disabled");
    })

  }
}
$(document).ready(function(){
  $("#addbandbtn").on("click", function(e){
var form = $("#addbandform").serialize();
console.log(form); 
  e.preventDefault();
  $.ajax({
      type: "POST",
      url: '{{URL::action("Admin_BandsController@postSubmitBand")}}',
      data: form,
      success: function( response ) {
        $("#message-box").prepend(response['html']);
        $("#hiddenbandid").attr("value", response['bandid']);
        nextStep();
      }

  });
});
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

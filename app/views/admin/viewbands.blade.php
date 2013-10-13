@extends('admin.templates.main')
@section('content')
<?
	$bands = Band::all();
?>
	<div class="portlet box light-grey">
							<div class="portlet-title">
								<h4><i class="icon-globe"></i>Managed Table</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
									<div class="btn-group">
										<button id="sample_editable_1_new" class="btn green">
										Add New <i class="icon-plus"></i>
										</button>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Print</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-bordered table-hover" id="sample_1">
									<thead>
										<tr>
											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
											<th>id</th>
											<th class="hidden-480">Name</th>
											<th class="hidden-480">Profile Image</th>
											<th class="hidden-480">Shout Out</th>
									
										</tr>
									</thead>
									<tbody>
									@foreach ($bands as $band)
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											<td>{{$band->id}}</td>
											<td><a href="{{URL::action('Admin_BandsController@getView')}}/{{$band->id}}">{{$band->name}}</a></td>
											<td class="hidden-480">
											@if(strlen($band->thumb) != 0)
											<img style="width:120px;" src="/bunt4/public/bandmedia/{{$band->name}}/profileimage/{{$band->name}}.jpg">
											@else
											No-Image :(
											@endif
											</td>
											<td class="hidden-480">{{$band->shoutout}}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
@endsection
@section('extrascripts')

	<script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/data-tables/jquery.dataTables.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/data-tables/DT_bootstrap.js')}}"></script>

		<script type="text/javascript">

	$("#sample_1").dataTable();
	</script>
@endsection
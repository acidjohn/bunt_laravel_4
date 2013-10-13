@extends('admin.templates.main')
@section('extrastyles')

  <link href="{{URL::asset('adminas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{URL::asset('adminas/assets/plugins/chosen-bootstrap/chosen/chosen.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{URL::asset('adminas/assets/css/pages/profile.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="row-fluid profile">
					<div class="span12">
<!--BEGIN TABS-->
						<div class="tabbable tabbable-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
								<li><a href="#tab_1_3" data-toggle="tab">Edit Profile</a></li>
								<li><a href="#tab_1_4" data-toggle="tab">Galleries</a></li>
								<li><a href="#tab_1_6" data-toggle="tab">Music</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane row-fluid active" id="tab_1_1">
									<ul class="unstyled profile-nav span3">
										<li>
									
										@if(strlen($band->thumb) != 0)
										<img src="{{URL::asset($band->thumb)}}" alt="" />
										@else
										No-Image
										@endif
										 <a href="#" class="profile-edit">edit</a>
										 </li>
										 
										<li><a href="#">Projects</a></li>
										<li><a href="#">Messages <span>3</span></a></li>
										<li><a href="#">Friends</a></li>
										<li><a href="#">Settings</a></li>
									</ul>
									<div class="span9">
										<div class="row-fluid">
											<div class="span8 profile-info">
												<h1>{{$band->name}}</h1>
												<p>{{$band->bio}}</p>
												<p><a href="#">www.mywebsite.com</a></p>
												<ul class="unstyled inline">
													<li><i class="icon-map-marker"></i> Spain</li>
													<li><i class="icon-calendar"></i> 18 Jan 1982</li>
													<li><i class="icon-briefcase"></i> Design</li>
													<li><i class="icon-star"></i> Top Seller</li>
													<li><i class="icon-heart"></i> BASE Jumping</li>
												</ul>
											</div>
											<!--end span8-->
											<div class="span4">
												<div class="portlet sale-summary">
													<div class="portlet-title">
														<h4>Profile Views</h4>
														<div class="tools">
															<a class="reload" href="javascript:;"></a>
														</div>
													</div>
													<ul class="unstyled">
														<li>
															<span class="sale-info">VIEWS TODAY <i class="icon-img-up"></i></span> 
															<span class="sale-num">23</span>
														</li>
														<li>
															<span class="sale-info">WEEKLY VIEWS <i class="icon-img-down"></i></span> 
															<span class="sale-num">87</span>
														</li>
														<li>
															<span class="sale-info">TOTAL VIEWS</span> 
															<span class="sale-num">2377</span>
														</li>
														<li>
															<span class="sale-info">Buzz</span> 
															<span class="sale-num">43%</span>
														</li>
													</ul>
												</div>
											</div>
											<!--end span4-->
										</div>
										<!--end row-fluid-->
									
									</div>
									<!--end span9-->
								</div>
								<!--end tab-pane-->
								<div class="tab-pane row-fluid profile-account" id="tab_1_3">
									<div class="row-fluid">
										<div class="span12">
											<div class="span3">
												<ul class="ver-inline-menu tabbable margin-bottom-10">
													<li class="active">
														<a data-toggle="tab" href="#tab_1-1">
														<i class="icon-cog"></i> 
														General Info
														</a> 
														<span class="after"></span>                           			
													</li>
													<li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Profile Image</a></li>
													<li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Assign Users</a></li>
											<!-- 		<li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacity Settings</a></li> -->
												</ul>
											</div>
											<div class="span9">
												<div class="tab-content">
													<div id="tab_1-1" class="tab-pane active">
														<div style="height: auto;" id="accordion1-1" class="accordion collapse">
															<form action="#">
																<label class="control-label">Name</label>
																<input type="text" placeholder="John" class="m-wrap span8" value="{{$band->name}}" />
																<label class="control-label">Counrty</label>
																<div class="controls">
																	<input type="text" class="span8 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;US&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
																	<p class="help-block"><span class="muted">Start typing to auto complete!. E.g: US</span></p>
																</div>
																<label class="control-label">Bio</label>
																<textarea class="span8 m-wrap" rows="3">{{$band->bio}}</textarea>
																<label class="control-label">Website Url</label>
																<input type="text" placeholder="http://www.mywebsite.com" class="m-wrap span8" />
																<div class="submit-btn">
																	<a href="#" class="btn green">Save Changes</a>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
													</div>
													<div id="tab_2-2" class="tab-pane">
														<div style="height: auto;" id="accordion2-2" class="accordion collapse">
															<form action="#">
																<br />
																<div class="controls">
																	<div class="thumbnail" style="width: 291px; height: 170px;">
																	@if(strlen($band->thumb) != 0)
																	<img src="{{URL::asset($band->thumb)}}" style="max-height:150px;" alt="" />
																	@else
																		<img src="http://www.placehold.it/291x170/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
																	@endif
																	</div>
																</div>
																<div class="space10"></div>
																<div class="fileupload fileupload-new" data-provides="fileupload">
																	<div class="input-append">
																		<div class="uneditable-input">
																			<i class="icon-file fileupload-exists"></i> 
																			<span class="fileupload-preview"></span>
																		</div>
																		<span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" class="default" />
																		</span>
																		<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
																	</div>
																</div>
																<div class="clearfix"></div>
																<div class="controls">
																	<span class="label label-important">NOTE!</span>
																	<span>Max file size 3mb.</span>
																</div>
																<div class="space10"></div>
																<div class="submit-btn">
																	<a href="#" class="btn green">Submit</a>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
													</div>
													<div id="tab_3-3" class="tab-pane">
														<div style="height: auto;" id="accordion3-3" class="accordion collapse">
															<form action="#">
																<label class="control-label">Current Password</label>
																<input type="password" class="m-wrap span8" />
																<label class="control-label">New Password</label>
																<input type="password" class="m-wrap span8" />
																<label class="control-label">Re-type New Password</label>
																<input type="password" class="m-wrap span8" />
																<div class="submit-btn">
																	<a href="#" class="btn green">Change Password</a>
																	<a href="#" class="btn">Cancel</a>
																</div>
															</form>
														</div>
													</div>
												
												</div>
											</div>
											<!--end span9-->                                   
										</div>
									</div>
								</div>
								<!--end tab-pane-->
								<div class="tab-pane" id="tab_1_4">
									<div class="row-fluid add-portfolio">
										<div class="pull-left">
											<span>4 Galleries with 96 photos!</span>
										</div>
										<div class="pull-right">
											<a href="#" class="btn icn-only green">Add a new Gallery <i class="m-icon-swapright m-icon-white"></i></a> 									
										</div>
									</div>
									<!--end add-portfolio-->
									<div class="row-fluid portfolio-block">
										<div class="span5 portfolio-text">
											<img src="{{URL::asset('adminas/assets/img/profile/portfolio/logo_metronic.jpg')}}" alt="" />
											<div class="portfolio-text-info">
												<h4>Live @ Kytarro Club</h4>
												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
											</div>
										</div>
										<div class="span5" style="overflow:hidden;">
											<div class="portfolio-info">
												Views Today
												<span>187</span>
											</div>
											<div class="portfolio-info">
												Total Views
												<span>1789</span>
											</div>
											<div class="portfolio-info">
												Buzz
												<span>48%</span>
											</div>
										</div>
										<div class="span2 portfolio-btn">
											<a href="#" class="btn bigicn-only"><span>Manage</span></a>								
										</div>
									</div>
									<!--end row-fluid-->
									<div class="row-fluid portfolio-block">
										<div class="span5 portfolio-text">
											<img src="{{URL::asset('adminas/assets/img/profile/portfolio/logo_metronic.jpg')}}" alt="" />
											<div class="portfolio-text-info">
												<h4>Photoshoot Chalandri</h4>
												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
											</div>
										</div>
										<div class="span5" style="overflow:hidden;">
											<div class="portfolio-info">
												Views Today
												<span>187</span>
											</div>
											<div class="portfolio-info">
												Total Views
												<span>1789</span>
											</div>
											<div class="portfolio-info">
												Buzz
												<span>48%</span>
											</div>
										</div>
										<div class="span2 portfolio-btn">
											<a href="#" class="btn bigicn-only"><span>Manage</span></a>								
										</div>
									</div>
									<!--end row-fluid-->
									<div class="row-fluid portfolio-block">
										<div class="span5 portfolio-text">
											<img src="{{URL::asset('adminas/assets/img/profile/portfolio/logo_metronic.jpg')}}" alt="" />
											<div class="portfolio-text-info">
												<h4>Noobfest 2013</h4>
												<p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
											</div>
										</div>
										<div class="span5" style="overflow:hidden;">
											<div class="portfolio-info">
												Views Today
												<span>187</span>
											</div>
											<div class="portfolio-info">
												Total Views
												<span>1789</span>
											</div>
											<div class="portfolio-info">
												Buzz
												<span>48%</span>
											</div>
										</div>
										<div class="span2 portfolio-btn">
											<a href="#" class="btn bigicn-only"><span>Manage</span></a>								
										</div>
									</div>
									<!--end row-fluid-->
								</div>
								<!--end tab-pane-->
								<div class="tab-pane row-fluid" id="tab_1_6">
									<div class="row-fluid">
										<div class="span12">
											<h1> MUSIC </h1>
										
											</div>
											<!--end span9-->                                   
										</div>
									</div>
								</div>
								<!--end tab-pane-->
							</div>
						</div>
						</div>
						</div>
@endsection
@section('extrascripts')
  <script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('adminas/assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
@endsection


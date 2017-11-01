@extends('layouts.master')

@include('layouts.common.title', ['title' => 'Leave Application Notification', 'link' => 'Test Link'])

@section('content')
<div class="tab-content rendering-content">
	<div class="tab-pane active" id="tabLeaves">
		<div class="row">
	        <div class="col-md-3 col-sm-4">
	            <div class="box-header">
	                <i class="fa fa-inbox"></i>
	                <h3 class="box-title">Notification Box</h3>
	            </div>
	            <!-- compose message btn -->
	            <div style="margin-top: 15px;">
	                <ul class="nav nav-pills nav-stacked">
	                    <li class="active"><a href="#"><i class="fa fa-inbox"></i>  All notifications </a></li>
	                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Read notifications </a></li>
	                    <li><a href="#"><i class="fa fa-mail-forward"></i> Unread notifications </a></li>
	                </ul>
	            </div>
	        </div><!-- /.col (LEFT) -->
	        <div class="col-md-9 col-sm-8">
	            <div class="row pad">
	                <div class="col-sm-6">
	                    <label style="margin-right: 10px;">
	                        <div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" id="check-all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
	                    </label>
	                    <!-- Action button -->
	                    <div class="btn-group">
	                        <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
	                            Action <span class="caret"></span>
	                        </button>
	                        <ul class="dropdown-menu" role="menu">
	                            <li><a href="#">Mark as read</a></li>
	                            <li><a href="#">Mark as unread</a></li>
	                            <li class="divider"></li>
	                            <li><a href="#">Move to junk</a></li>
	                            <li class="divider"></li>
	                            <li><a href="#">Delete</a></li>
	                        </ul>
	                    </div>

	                </div>
	                <div class="col-sm-6 search-form">
	                    <form action="#" class="text-right">
	                        <div class="input-group">
	                            <input type="text" class="form-control input-sm" placeholder="Search">
	                            <div class="input-group-btn">
	                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div><!-- /.row -->

	            <div class="table-responsive">
	                <!-- THE MESSAGES -->
	                <table class="table table-mailbox">
	                    <tbody><tr class="unread">
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr class="unread">
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr class="unread">
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr class="unread">
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                    <tr>
	                        <td class="small-col"><div class="icheckbox_minimal-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></td>
	                        <td class="small-col"><i class="fa fa-star-o"></i></td>
	                        <td class="name"><a href="#">John Doe</a></td>
	                        <td class="subject"><a href="#">Urgent! Please read</a></td>
	                        <td class="time">12:30 PM</td>
	                    </tr>
	                </tbody></table>
	            </div><!-- /.table-responsive -->
	        </div><!-- /.col (RIGHT) -->
	    </div>
	</div>
</div>
@stop
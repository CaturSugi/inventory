<!DOCTYPE html>

<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Inventor | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/uniform/css/uniform.default.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css") }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{ asset("templates/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/fullcalendar/fullcalendar.min.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/jqvmap.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/plugins/morris/morris.css") }}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="{{ asset("templates/assets/admin/pages/css/tasks.css") }}" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="{{ asset("templates/assets/global/css/components-rounded.css") }}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/global/css/plugins.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/admin/layout4/css/layout.css") }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset("templates/assets/admin/layout4/css/themes/light.css") }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset("templates/assets/admin/layout4/css/custom.css") }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
@include('layout.asset.navbar')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	@include('layout.asset.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Dashboard <small>statistics & reports</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				@include('layout.asset.toolbar')
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp">7800<small class="font-green-sharp">$</small></h3>
								<small>TOTAL PROFIT</small>
							</div>
							<div class="icon">
								<i class="icon-pie-chart"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only">76% progress</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 progress
								</div>
								<div class="status-number">
									 76%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-red-haze">1349</h3>
								<small>NEW FEEDBACKS</small>
							</div>
							<div class="icon">
								<i class="icon-like"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only">85% change</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 change
								</div>
								<div class="status-number">
									 85%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp">567</h3>
								<small>NEW ORDERS</small>
							</div>
							<div class="icon">
								<i class="icon-basket"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only">45% grow</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 grow
								</div>
								<div class="status-number">
									 45%
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-purple-soft">276</h3>
								<small>NEW USERS</small>
							</div>
							<div class="icon">
								<i class="icon-user"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
								<span class="sr-only">56% change</span>
								</span>
							</div>
							<div class="status">
								<div class="status-title">
									 change
								</div>
								<div class="status-number">
									 57%
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">Sales Summary</span>
								<span class="caption-helper hide">weekly stats...</span>
							</div>
							<div class="actions">
								<div class="btn-group btn-group-devided" data-toggle="buttons">
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
									<input type="radio" name="options" class="toggle" id="option1">Today</label>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
									<input type="radio" name="options" class="toggle" id="option2">Week</label>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
									<input type="radio" name="options" class="toggle" id="option2">Month</label>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="row list-separated">
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="font-grey-mint font-sm">
										 Total Sales
									</div>
									<div class="uppercase font-hg font-red-flamingo">
										 13,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="font-grey-mint font-sm">
										 Revenue
									</div>
									<div class="uppercase font-hg theme-font-color">
										 4,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="font-grey-mint font-sm">
										 Expenses
									</div>
									<div class="uppercase font-hg font-purple">
										 11,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-6">
									<div class="font-grey-mint font-sm">
										 Growth
									</div>
									<div class="uppercase font-hg font-blue-sharp">
										 9,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</div>
							</div>
							<ul class="list-separated list-inline-xs hide">
								<li>
									<div class="font-grey-mint font-sm">
										 Total Sales
									</div>
									<div class="uppercase font-hg font-red-flamingo">
										 13,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</li>
								<li>
								</li>
								<li class="border">
									<div class="font-grey-mint font-sm">
										 Revenue
									</div>
									<div class="uppercase font-hg theme-font-color">
										 4,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</li>
								<li class="divider">
								</li>
								<li>
									<div class="font-grey-mint font-sm">
										 Expenses
									</div>
									<div class="uppercase font-hg font-purple">
										 11,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</li>
								<li class="divider">
								</li>
								<li>
									<div class="font-grey-mint font-sm">
										 Growth
									</div>
									<div class="uppercase font-hg font-blue-sharp">
										 9,760 <span class="font-lg font-grey-mint">$</span>
									</div>
								</li>
							</ul>
							<div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 260px">
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">Member Activity</span>
								<span class="caption-helper hide">weekly stats...</span>
							</div>
							<div class="actions">
								<div class="btn-group btn-group-devided" data-toggle="buttons">
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
									<input type="radio" name="options" class="toggle" id="option1">Today</label>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
									<input type="radio" name="options" class="toggle" id="option2">Week</label>
									<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
									<input type="radio" name="options" class="toggle" id="option2">Month</label>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="row number-stats margin-bottom-30">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="stat-left">
										<div class="stat-chart">
											<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
											<div id="sparkline_bar"></div>
										</div>
										<div class="stat-number">
											<div class="title">
												 Total
											</div>
											<div class="number">
												 2460
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="stat-right">
										<div class="stat-chart">
											<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
											<div id="sparkline_bar2"></div>
										</div>
										<div class="stat-number">
											<div class="title">
												 New
											</div>
											<div class="number">
												 719
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="table-scrollable table-scrollable-borderless">
								<table class="table table-hover table-light">
								<thead>
								<tr class="uppercase">
									<th colspan="2">
										 MEMBER
									</th>
									<th>
										 Earnings
									</th>
									<th>
										 CASES
									</th>
									<th>
										 CLOSED
									</th>
									<th>
										 RATE
									</th>
								</tr>
								</thead>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Brain</a>
									</td>
									<td>
										 $345
									</td>
									<td>
										 45
									</td>
									<td>
										 124
									</td>
									<td>
										<span class="bold theme-font-color">80%</span>
									</td>
								</tr>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar5.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Nick</a>
									</td>
									<td>
										 $560
									</td>
									<td>
										 12
									</td>
									<td>
										 24
									</td>
									<td>
										<span class="bold theme-font-color">67%</span>
									</td>
								</tr>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Tim</a>
									</td>
									<td>
										 $1,345
									</td>
									<td>
										 450
									</td>
									<td>
										 46
									</td>
									<td>
										<span class="bold theme-font-color">98%</span>
									</td>
								</tr>
								<tr>
									<td class="fit">
										<img class="user-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
									</td>
									<td>
										<a href="javascript:;" class="primary-link">Tom</a>
									</td>
									<td>
										 $645
									</td>
									<td>
										 50
									</td>
									<td>
										 89
									</td>
									<td>
										<span class="bold theme-font-color">58%</span>
									</td>
								</tr>
								</table>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light tasks-widget">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">TASKS</span>
								<span class="caption-helper">16 pending</span>
							</div>
							<div class="inputs">
								<div class="portlet-input input-small input-inline">
									<div class="input-icon right">
										<i class="icon-magnifier"></i>
										<input type="text" class="form-control form-control-solid" placeholder="search...">
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">
								<div class="scroller" style="height: 282px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
									<!-- START TASK LIST -->
									<ul class="task-list">
										<li>
											<div class="task-checkbox">
												<input type="hidden" value="1" name="test"/>
												<input type="checkbox" class="liChild" value="2" name="test"/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Present 2013 Year IPO Statistics at Board Meeting </span>
												<span class="label label-sm label-success">Company</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Hold An Interview for Marketing Manager Position </span>
												<span class="label label-sm label-danger">Marketing</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												AirAsia Intranet System Project Internal Meeting </span>
												<span class="label label-sm label-success">AirAsia</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Technical Management Meeting </span>
												<span class="label label-sm label-warning">Company</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Kick-off Company CRM Mobile App Development </span>
												<span class="label label-sm label-info">Internal Products</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Prepare Commercial Offer For SmartVision Website Rewamp </span>
												<span class="label label-sm label-danger">SmartVision</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Sign-Off The Comercial Agreement With AutoSmart </span>
												<span class="label label-sm label-default">AutoSmart</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												Company Staff Meeting </span>
												<span class="label label-sm label-success">Cruise</span>
												<span class="task-bell">
												<i class="fa fa-bell-o"></i>
												</span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="last-line">
											<div class="task-checkbox">
												<input type="checkbox" class="liChild" value=""/>
											</div>
											<div class="task-title">
												<span class="task-title-sp">
												KeenThemes Investment Discussion </span>
												<span class="label label-sm label-warning">KeenThemes </span>
											</div>
											<div class="task-config">
												<div class="task-config-btn btn-group">
													<a class="btn btn-xs default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
													<i class="fa fa-cog"></i><i class="fa fa-angle-down"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
															<i class="fa fa-check"></i> Complete </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-pencil"></i> Edit </a>
														</li>
														<li>
															<a href="javascript:;">
															<i class="fa fa-trash-o"></i> Cancel </a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
									<!-- END START TASK LIST -->
								</div>
							</div>
							<div class="task-footer">
								<div class="btn-arrow-link pull-right">
									<a href="javascript:;">See All Tasks</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">Customer Support</span>
								<span class="caption-helper">45 pending</span>
							</div>
							<div class="inputs">
								<div class="portlet-input input-inline input-small ">
									<div class="input-icon right">
										<i class="icon-magnifier"></i>
										<input type="text" class="form-control form-control-solid" placeholder="search...">
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<div class="general-item-list">
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
												<a href="" class="item-name primary-link">Nick Larson</a>
												<span class="item-label">3 hrs ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-success"></span> Open</span>
										</div>
										<div class="item-body">
											 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</div>
									</div>
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar3.jpg">
												<a href="" class="item-name primary-link">Mark</a>
												<span class="item-label">5 hrs ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-warning"></span> Pending</span>
										</div>
										<div class="item-body">
											 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat tincidunt ut laoreet.
										</div>
									</div>
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
												<a href="" class="item-name primary-link">Nick Larson</a>
												<span class="item-label">8 hrs ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-primary"></span> Closed</span>
										</div>
										<div class="item-body">
											 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.
										</div>
									</div>
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
												<a href="" class="item-name primary-link">Nick Larson</a>
												<span class="item-label">12 hrs ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-danger"></span> Pending</span>
										</div>
										<div class="item-body">
											 Consectetuer adipiscing elit Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</div>
									</div>
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar9.jpg">
												<a href="" class="item-name primary-link">Richard Stone</a>
												<span class="item-label">2 days ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-danger"></span> Open</span>
										</div>
										<div class="item-body">
											 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ut laoreet dolore magna aliquam erat volutpat.
										</div>
									</div>
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar8.jpg">
												<a href="" class="item-name primary-link">Dan</a>
												<span class="item-label">3 days ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-warning"></span> Pending</span>
										</div>
										<div class="item-body">
											 Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</div>
									</div>
									<div class="item">
										<div class="item-head">
											<div class="item-details">
												<img class="item-pic" src="../../assets/admin/layout3/img/avatar2.jpg">
												<a href="" class="item-name primary-link">Larry</a>
												<span class="item-label">4 hrs ago</span>
											</div>
											<span class="item-status"><span class="badge badge-empty badge-success"></span> Open</span>
										</div>
										<div class="item-body">
											 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN REGIONAL STATS PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">Regional Stats</span>
							</div>
							<div class="actions">
								<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
								<i class="icon-cloud-upload"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
								<i class="icon-wrench"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;">
								</a>
								<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
								<i class="icon-trash"></i>
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="region_statistics_loading">
								<img src="../../assets/admin/layout/img/loading.gif" alt="loading"/>
							</div>
							<div id="region_statistics_content" class="display-none">
								<div class="btn-toolbar margin-bottom-10">
									<div class="btn-group btn-group-circle" data-toggle="buttons">
										<a href="" class="btn grey-salsa btn-sm active">
										Users </a>
										<a href="" class="btn grey-salsa btn-sm">
										Orders </a>
									</div>
									<div class="btn-group pull-right">
										<a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
										Select Region <span class="fa fa-angle-down">
										</span>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;" id="regional_stat_world">
												World </a>
											</li>
											<li>
												<a href="javascript:;" id="regional_stat_usa">
												USA </a>
											</li>
											<li>
												<a href="javascript:;" id="regional_stat_europe">
												Europe </a>
											</li>
											<li>
												<a href="javascript:;" id="regional_stat_russia">
												Russia </a>
											</li>
											<li>
												<a href="javascript:;" id="regional_stat_germany">
												Germany </a>
											</li>
										</ul>
									</div>
								</div>
								<div id="vmap_world" class="vmaps display-none">
								</div>
								<div id="vmap_usa" class="vmaps display-none">
								</div>
								<div id="vmap_europe" class="vmaps display-none">
								</div>
								<div id="vmap_russia" class="vmaps display-none">
								</div>
								<div id="vmap_germany" class="vmaps display-none">
								</div>
							</div>
						</div>
					</div>
					<!-- END REGIONAL STATS PORTLET-->
				</div>
				<div class="col-md-6 col-sm-6">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title tabbable-line">
							<div class="caption caption-md">
								<i class="icon-globe theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">Feeds</span>
							</div>
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_1" data-toggle="tab">
									System </a>
								</li>
								<li>
									<a href="#tab_1_2" data-toggle="tab">
									Activities </a>
								</li>
							</ul>
						</div>
						<div class="portlet-body">
							<!--BEGIN TABS-->
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1_1">
									<div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
										<ul class="feeds">
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 You have 4 pending tasks. <span class="label label-sm label-info">
																Take action <i class="fa fa-share"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New version v1.4 just lunched!
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 20 mins
													</div>
												</div>
												</a>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-danger">
																<i class="fa fa-bolt"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Database server #12 overloaded. Please fix the issue.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 24 mins
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New order received and pending for process.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 30 mins
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New payment refund and pending approval.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 40 mins
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-warning">
																<i class="fa fa-plus"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New member registered. Pending approval.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 1.5 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
																Overdue </span>
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 2 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Prod01 database server is overloaded 90%.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 3 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-warning">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New group created. Pending manager review.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 5 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Order payment failed.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 18 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New application received.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Dev90 web server restarted. Pending overall system check.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New member registered. Pending approval
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 L45 Network failure. Schedule maintenance.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Order canceled with failed payment.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Web-A2 clound instance created. Schedule full scan.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-default">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Member canceled. Schedule account review.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 21 hours
													</div>
												</div>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-info">
																<i class="fa fa-bullhorn"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New order received. Please take care of it.
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 22 hours
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_2">
									<div class="scroller" style="height: 337px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
										<ul class="feeds">
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New order received
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 10 mins
													</div>
												</div>
												</a>
											</li>
											<li>
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-danger">
																<i class="fa fa-bolt"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
																Take action <i class="fa fa-share"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 24 mins
													</div>
												</div>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
											<li>
												<a href="javascript:;">
												<div class="col1">
													<div class="cont">
														<div class="cont-col1">
															<div class="label label-sm label-success">
																<i class="fa fa-bell-o"></i>
															</div>
														</div>
														<div class="cont-col2">
															<div class="desc">
																 New user registered
															</div>
														</div>
													</div>
												</div>
												<div class="col2">
													<div class="date">
														 Just now
													</div>
												</div>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--END TABS-->
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('layout.assets.footer')
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ asset("templates/assets/global/plugins/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery-migrate.min.js") }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset("templates/assets/global/plugins/jquery-ui/jquery-ui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.blockui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.cokie.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/uniform/jquery.uniform.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js") }}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{ asset("templates/assets/global/plugins/morris/morris.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/morris/raphael-min.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/global/plugins/jquery.sparkline.min.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset("templates/assets/global/scripts/metronic.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/layout4/scripts/layout.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/layout4/scripts/demo.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/pages/scripts/index3.js") }}" type="text/javascript"></script>
<script src="{{ asset("templates/assets/admin/pages/scripts/tasks.js") }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
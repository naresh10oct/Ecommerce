<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (mail_outbox)</title>
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		
		<!-- custom icons -->
			<!-- font awesome icons -->
			<link href="assets/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
			<!-- ionicons -->	
			<link href="assets/icons/ionicons/css/ionicons.min.css" rel="stylesheet" media="screen">
			<!-- flags -->
			<link rel="stylesheet" href="assets/icons/flags/flags.css">
				
	
	<!-- page specific stylesheets -->

		<!-- responsive table -->
		<link rel="stylesheet" href="assets/lib/footable/css/footable.core.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="assets/lib/iCheck/skins/minimal/green.css">
				
		<!-- main stylesheet -->
		<link href="assets/css/style.css" rel="stylesheet" media="screen">
		
		<!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		
		<!-- moment.js (date library) -->
		<script src="assets/lib/moment-js/moment.min.js"></script>
		
    </head>
    <body>
		<!-- top bar -->
		<header class="navbar navbar-fixed-top" role="banner">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="dashboard.html" class="navbar-brand"><img src="assets/img/blank.gif" alt="Logo"></a>
				</div>
				<ul class="top_links">
					<li>
						<a href="tasks_summary.html"><span>23</span>Tasks</a>
					</li>
					<li>
						<a href="mail_inbox.html"><span>8</span>Mails</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="lang_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="flag-US"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="user_profile.html"><span class="flag-FR"></span> France</a></li>
							<li><a href="mail_inbox.html"><span class="flag-IN"></span> India</a></li>
							<li><a href="tasks_summary.html"><span class="flag-BR"></span> Brasil</a></li>
							<li><a href="tasks_summary.html"><span class="flag-GB"></span> UK</a></li>
						</ul>
					</li>
					<li class="user_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="user_profile.html">Profile</a></li>
							<li><a href="mail_inbox.html">My messages</a></li>
							<li><a href="tasks_summary.html">My tasks</a></li>
							<li class="divider"></li>
							<li><a href="login_page.html">Log Out</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)" class="slidebar-toggle"><span class="navbar_el_icon ion-navicon-round"></span></a></li>
				</ul>
			</div>
		</header>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_bar clearfix">
				<div class="row">
					<div class="col-sm-8">
						<h1 class="page_title">Outbox</h1>
						<p class="text-muted">12 email sent last week</p>
					</div>
					<div class="col-sm-4 text-right">
						<button class="btn btn-info"><i class="fa fa-refresh"></i></button>
						<div class="btn-group text-left">
							<button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button"><i class="fa fa-lg fa-cog"></i> <span class="caret"></span></button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li class="dropdown-header">Display Density</li>
								<li><a href="#">Comfortable</a></li>
								<li><a href="#">Cozy</a></li>
								<li><a href="#">Compact</a></li>
								<li class="divider"></li>
								<li><a href="#">Settings</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<nav class="breadcrumbs">
				<ul>
					<li><a href="#">Mail</a></li>
					<li class="sep">\</li>
					<li>Outbox</li>
				</ul>
			</nav>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="well well-sm">
									<div class="row">
										<div class="col-lg-4 text-right col-lg-push-8">
											<input type="text" id="mailbox_search" class="form-control input-sm" placeholder="Find message">
										</div>
										<div class="col-lg-8 col-lg-pull-4">
											<div class="btn-group">
												<button class="btn btn-default btn-sm"><span class="fa fa-mail-forward"></span></button>
												<button class="btn btn-default btn-sm"><span class="fa fa-trash-o"></span></button>
											</div>
										</div>
									</div>
								</div>
								<table id="mail_outbox" class="mail_table table table-hover toggle-arrow-tiny" data-filter="#mailbox_search" data-page-size="20">
									<thead>
										<tr>
											<th><input type="checkbox" class="check_all" name="check_all"></th>
											<th></th>
											<th data-hide="phone,tablet">From</th>
											<th>Subject</th>
											<th data-hide="phone">Date</th>
											<th data-hide="phone,tablet"><i class="fa fa-lg fa-paperclip"></i></th>
										</tr>
									</thead>
									<tbody data-link="row" class="rowlink">
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[0]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Emerson Schmeler</td>
											<td><a href="#">Dolorum cumque rerum id ullam.</a></td>
											<td>Feb 13</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[1]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Mrs. Adelbert McGlynn</td>
											<td><a href="#">Distinctio quis quia magnam est nihil.</a></td>
											<td>Feb 15</td>
											<td class="col_sm"><span class="fa fa-lg fa-paperclip"></span></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[2]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Precious Hackett</td>
											<td><a href="#">Deleniti dicta expedita ullam in.</a></td>
											<td>Feb 18</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[3]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Triston Pacocha</td>
											<td><a href="#">Quis reprehenderit sed architecto illum.</a></td>
											<td>Feb 25</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[4]" class="check_row" /></td>
											<td class="col_sm rowlink-skip mail_stared"><span class="mail_star fa fa-star-o"></span></td>
											<td>Martina Runolfsdottir</td>
											<td><a href="#">Vitae quis dolor.</a></td>
											<td>Feb 11</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[5]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>August Greenfelder</td>
											<td><a href="#">Deserunt ea ad.</a></td>
											<td>Feb 21</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[6]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Mr. Anissa Cummerata</td>
											<td><a href="#">Sit molestias facere similique.</a></td>
											<td>Feb 22</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[7]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Halie Berge</td>
											<td><a href="#">Eos provident impedit corporis.</a></td>
											<td>Feb 24</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[8]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Trevion Daugherty DDS</td>
											<td><a href="#">Dolores fuga ut unde quibusdam.</a></td>
											<td>Feb 11</td>
											<td class="col_sm"><span class="fa fa-lg fa-paperclip"></span></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[9]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Cristal Kerluke</td>
											<td><a href="#">Rerum eaque dolorum provident enim.</a></td>
											<td>Feb 10</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[10]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Miss Luciano McLaughlin V</td>
											<td><a href="#">Delectus ipsum harum.</a></td>
											<td>Feb 3</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[11]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Marilou Russel Sr.</td>
											<td><a href="#">Et perspiciatis laboriosam.</a></td>
											<td>Feb 7</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[12]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Jesse Leannon</td>
											<td><a href="#">Consectetur sapiente officia odio eligendi voluptatem.</a></td>
											<td>Feb 26</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[13]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Milton Nader</td>
											<td><a href="#">Minima qui porro dolorem.</a></td>
											<td>Feb 6</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[14]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Alanis Ratke</td>
											<td><a href="#">Laborum fuga culpa unde.</a></td>
											<td>Feb 13</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[15]" class="check_row" /></td>
											<td class="col_sm rowlink-skip mail_stared"><span class="mail_star fa fa-star-o"></span></td>
											<td>Tremaine Keebler V</td>
											<td><a href="#">Explicabo hic inventore doloremque maiores nam.</a></td>
											<td>Feb 10</td>
											<td class="col_sm"></td>
										</tr>
										<tr>
											<td class="col_sm rowlink-skip"><input type="checkbox" name="check_row[16]" class="check_row" /></td>
											<td class="col_sm rowlink-skip"><span class="mail_star fa fa-star-o"></span></td>
											<td>Miss Gerda Kunze PhD</td>
											<td><a href="#">Voluptas magnam reiciendis repellat.</a></td>
											<td>Feb 17</td>
											<td class="col_sm"></td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="6">
												<div class="row">
													<div class="col-md-4">
														<span class="mailbox_count_msg"><b class="page_start_row">1</b>-<b class="page_end_row">17</b> of <b class="all_rows">17</b></span>
													</div>
													<div class="col-md-8 text-right hide-if-no-paging">
														<ul class="pagination pagination-sm"></ul>
													</div>
												</div>
											</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- side navigation -->
		<nav id="side_nav">
			<ul>
				<li>
					<a href="dashboard.html"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
				</li>
				<li>
					<a href="#">
						<span class="label label-danger">32</span>
						<span class="ion-clipboard"></span>
						<span class="nav_title">Todo</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">Folders</h4>
							<ul>
								<li><a href="tasks_summary.html"><span class="side_icon ion-ios7-folder-outline"></span><span class="badge badge-primary">7</span> Summary</a></li>
								<li><a href="tasks_starred.html"><span class="side_icon ion-ios7-star-outline"></span> Starred</a></li>
								<li><a href="tasks_today.html"><span class="side_icon ion-ios7-calendar-outline"></span> Today</a></li>
							</ul>
							<h4 class="panel_heading">Labels</h4>
							<ul>
								<li class="add_label">
									<a href="tasks_label.html">Work</a>
									<div class="ts_label">
										<span class="color_a"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.html">Family</a>
									<div class="ts_label">
										<span class="color_b"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.html">Business</a>
									<div class="ts_label">
										<span class="color_c"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.html">Envato</a>
									<div class="ts_label">
										<span class="color_d"></span>
									</div>
								</li>
							</ul>
							<div class="panel_section">
								<button class="btn btn-primary">Add task</button>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-paper-airplane"></span>
						<span class="nav_title">Newsletter</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="newsletter_campaigns.html">Campaigns</a></li>
								<li><a href="newsletter_report.html">Reports</a></li>
								<li><a href="newsletter_templates.html">Templates</a></li>
							</ul>
							<h4 class="panel_heading">Latest Campaigns</h4>
							<ul>
								<li><a href="newsletter_report.html">Stanton LLC</a></li>
								<li><a href="newsletter_report.html">Veum Group</a></li>
								<li><a href="newsletter_report.html">Langosh Inc</a></li>
							</ul>
							<div class="panel_section">
								<button class="btn btn-success btn-sm">New Campaign</button>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-bag"></span>
						<span class="nav_title">Ecommerce</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="ecommerce_sales_report.html">Sales Report</a></li>
								<li><a href="ecommerce_products_list.html">Products List</a></li>
								<li><a href="ecommerce_product_edit.html">Product Edit</a></li>
							</ul>
							<h4 class="panel_heading">Top Products</h4>
							<ul>
								<li><a href="ecommerce_product_edit.html"><span class="badge badge-success">$2 344.00</span> Product A</a></li>
								<li><a href="ecommerce_product_edit.html"><span class="badge badge-default">$1 217.53</span> Product B</a></li>
								<li><a href="ecommerce_product_edit.html"><span class="badge badge-default">$684.62</span> Product C</a></li>
							</ul>
							<h4 class="panel_heading">Top Categories</h4>
							<ul>
								<li><a href="#"><span class="badge badge-success">18</span> Category 1</a></li>
								<li><a href="#"><span class="badge badge-default">9</span> Category 2</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="label label-success">14</span>
						<span class="ion-ios7-email-outline"></span>
						<span class="nav_title">Mailbox</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<form class="panel_section form-search">
								<div class="input-group input-group-sm">
									<input type="text" class="form-control input-sm" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-default btn-sm" type="submit"><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
							</form>
							<div class="panel_section">
								<a href="mail_compose.html" class="btn btn-sm btn-danger">New message</a>
							</div>
							<h4 class="panel_heading">Folders</h4>
							<ul>
								<li><a href="mail_inbox.html"><span class="side_icon ion-ios7-filing-outline"></span> Inbox <small class="text-muted pull-right">(142)</small></a></li>
								<li><a href="mail_outbox.html"><span class="side_icon ion-ios7-paperplane-outline"></span> Sent Mail</a></li>
								<li><a href="mail_spam.html"><span class="side_icon ion-ios7-close-outline"></span> Spam <small class="text-danger pull-right">(23)</small></a></li>
								<li><a href="#"><span class="side_icon ion-ios7-compose-outline"></span> Drafts</a></li>
								<li><a href="#"><span class="side_icon ion-ios7-trash-outline"></span> Deleted</a></li>
							</ul>
							<h4 class="panel_heading">Labels</h4>
							<ul>
								<li class="add_label">
									<a href="#">Work</a>
									<div class="ts_label">
										<span class="color_a"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="#">Family</a>
									<div class="ts_label">
										<span class="color_b"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="#">Business</a>
									<div class="ts_label">
										<span class="color_c"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="#">Envato</a>
									<div class="ts_label">
										<span class="color_d"></span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-beaker"></span>
						<span class="nav_title">Components</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">Form Elements</h4>
							<ul>
								<li><a href="form_elements.html">Regular Elements</a></li>
								<li><a href="form_extended_elements.html">Extended Elements</a></li>
								<li><a href="form_validation.html">Form Validation</a></li>
								<li><a href="multiupload.html">Multiupload</a></li>
								<li><a href="form_wizard.html">Wizard</a></li>
								<li><a href="form_wysiwg.html">WYSIWG Editor</a></li>
							</ul>
							<h4 class="panel_heading">Tables</h4>
							<ul>
								<li><a href="tables_regular.html">Regular</a></li>
								<li><a href="tables_datatables.html">Datatables</a></li>
							</ul>
							<h4 class="panel_heading">Other Components</h4>
							<ul>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="charts.html">Charts</a></li>
								<li><a href="easy_tree.html">Easy Tree</a></li>
								<li><a href="editable_elements.html">Editable Elements</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="image_zoom.html">Image Zoom</a></li>
								<li><a href="notifications.html">Notifications</a></li>
								<li><a href="modals_lightbox.html">Modals, Lightbox</a></li>
								<li><a href="tabs_accordions.html">Tabs, Accordions</a></li>
								<li><a href="tooltips_popovers.html">Tooltips, Popovers</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-ios7-albums-outline"></span>
						<span class="nav_title">Others</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">UI Elements</h4>
							<ul>
								<li><a href="alerts_buttons.html">Alerts, Buttons</a></li>
								<li><a href="grid.html">Grid</a></li>
								<li><a href="icons.html">Icons</a></li>
								<li><a href="sidebar_accordion.html">Sidebar Accordion</a></li>
								<li><a href="typography.html">Typography</a></li>
							</ul>
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="blank.html">Blank</a></li>
								<li><a href="chat.html">Chat</a></li>
								<li><a href="error_404.html">Error 404</a></li>
								<li><a href="invoice.html">Invoice</a></li>
								<li><a href="login_page.html">Login Page</a></li>
								<li><a href="user_list.html">User List</a></li>
								<li><a href="user_profile.html">User Profile</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</nav>

		<!-- right slidebar -->
		<div id="slidebar">
			<div id="slidebar_content">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
					</span>
					</div>
				<hr>
					
				<div class="sepH_a">
					<div class="progress">
						<div style="width: 60%;" role="progressbar" class="progress-bar">
							60%
						</div>
					</div>
					<span class="help-block">CPU Usage</span>
				</div>
				<div class="sepH_a">
					<div class="progress">
						<div style="width: 28%;" class="progress-bar progress-bar-success">
							28%
						</div>
					</div>
					<span class="help-block">Disk Usage</span>
				</div>
				<div class="progress">
					<div style="width: 82%;" class="progress-bar progress-bar-danger">
						0.2GB/20GB
					</div>
				</div>
				<span class="help-block">Monthly Transfer</span>
				<hr>
					
				<div class="heading_a">New Users</div>
				<div class="user_img_grid clearfix">
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_3.jpg" alt="" class="img-thumbnail"></a>
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_5.jpg" alt="" class="img-thumbnail"></a>
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_8.jpg" alt="" class="img-thumbnail"></a>
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_6.jpg" alt="" class="img-thumbnail"></a>
				</div>
				<hr>
					
				<form>
					<div class="form-group">
						<input type="text" class="input-sm form-control" placeholder="Tilte...">
					</div>
					<div class="form-group">
						<textarea cols="30" rows="3" class="form-control input-sm" placeholder="Message..."></textarea>
					</div>
					<button type="button" class="btn btn-default btn-sm">Send message</button>
				</form>
				<hr>
				<div class="sepH_a">
					<span class="label label-info">Reminder</span>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fuga omnis ipsa odit sint aut molestiae enim. Quia cupiditate distinctio ad dicta qui ducimus aspernatur debitis incidunt minima laboriosam atque.</p>
			</div>
		</div>

		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- easing -->
		<script src="assets/js/jquery.easing.1.3.min.js"></script>
		<!-- bootstrap js plugins -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- top dropdown navigation -->
		<script src="assets/js/tinynav.js"></script>
		<!-- perfect scrollbar -->
		<script src="assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>
		
		<!-- common functions -->
		<script src="assets/js/tisa_common.js"></script>
		
		<!-- style switcher -->
		<script src="assets/js/tisa_style_switcher.js"></script>
		
	<!-- page specific plugins -->

		<!-- rowlink -->
		<script src="assets/lib/jasny/rowlink.js"></script>
		<!-- responsive table -->
		<script src="assets/lib/footable/js/footable.js"></script>
		<script src="assets/lib/footable/js/footable.filter.js"></script>
		<script src="assets/lib/footable/js/footable.paginate.js"></script>
		<!-- iCheck -->
		<script src="assets/lib/iCheck/jquery.icheck.min.js"></script>
		
		<!-- mail functions -->
		<script src="assets/js/apps/tisa_mail.js"></script>
		
    </body>
</html>

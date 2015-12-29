<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (chat)</title>
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
			<div class="page_content">
				<div class="container-fluid chat_app">
					<div class="row">
						<div class="col-lg-8">
							<div class="panel panel-default">
								<div class="panel-heading">
									Chatroom
									<div class="btn-group btn-group-xs pull-right">
										<button type="button" class="btn btn-inverse"><i class="fa fa-refresh"></i></button>
										<button type="button" class="btn btn-inverse"><i class="fa fa-times"></i></button>
									</div>
								</div>
								<div class="panel_body_a">
									<div class="chat_messages">
										<div class="chat_message ch_right">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="chat_message_body">
												<p>Ipsum recusandae praesentium voluptates dignissimos totam ipsum praesentium. Quas necessitatibus quod officia perspiciatis distinctio. Id fuga dolor deserunt autem.</p>
												<p class="chat_message_date">Burdette Grady, 16:45:13</p>
											</div>
										</div>
										<div class="chat_message">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_11.jpg" alt="">
											<div class="chat_message_body">
												<p>Sunt quis qui iure quia beatae praesentium. Vel perferendis consequuntur molestias sed quos vel beatae. Molestiae praesentium nulla molestiae ut. Nobis eum sunt laudantium occaecati quia sed doloremque.</p>
												<p class="chat_message_date">Miss Chadd Breitenberg, 06:19:50</p>
											</div>
										</div>
										<div class="chat_message ch_right">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_19.jpg" alt="">
											<div class="chat_message_body">
												<p>Adipisci mollitia ut iste ut. Exercitationem similique voluptas voluptatem exercitationem quibusdam. Nam voluptate similique non magnam adipisci. Labore illo ab veniam deserunt porro quas et ut. Ut aspernatur modi eum vero voluptatem quae eum.</p>
												<p class="chat_message_date">Yasmine Gutmann, 11:51:28</p>
											</div>
										</div>
										<div class="chat_message">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_20.jpg" alt="">
											<div class="chat_message_body">
												<p>Ut possimus dolore labore atque voluptate ipsum. Eum deserunt doloribus aut accusamus sint voluptatum molestiae.</p>
												<p class="chat_message_date">Tre Schiller, 23:48:51</p>
											</div>
										</div>
										<div class="chat_message ch_right">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_9.jpg" alt="">
											<div class="chat_message_body">
												<p>A libero provident hic corporis soluta voluptatem. Sed vitae quasi facilis quis in quam atque.</p>
												<p class="chat_message_date">Kaitlin Blick, 08:50:30</p>
											</div>
										</div>
										<div class="chat_message">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_10.jpg" alt="">
											<div class="chat_message_body">
												<p>Provident autem error est minima eum praesentium aperiam doloribus. Labore eos ut et dicta.</p>
												<p class="chat_message_date">Eriberto Okuneva, 20:14:51</p>
											</div>
										</div>
										<div class="chat_message ch_right">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_12.jpg" alt="">
											<div class="chat_message_body">
												<p>Non est occaecati id delectus omnis sed fugit. Eum vitae qui nihil. Dolorem eveniet animi quaerat ipsum modi et quaerat. Cumque perspiciatis eos at nisi repellat nulla iusto qui.</p>
												<p class="chat_message_date">Joanne Bode, 03:24:04</p>
											</div>
										</div>
										<div class="chat_message">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_8.jpg" alt="">
											<div class="chat_message_body">
												<p>Sint ut et consequatur ut eum autem consequatur. Voluptatem exercitationem aut rerum qui. Harum maiores doloremque sunt dolores dolor et. Possimus dolorem quia soluta odio eum doloremque.</p>
												<p class="chat_message_date">Joesph Schinner, 15:09:25</p>
											</div>
										</div>
										<div class="chat_message ch_right">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_5.jpg" alt="">
											<div class="chat_message_body">
												<p>Non suscipit porro quo eius. Sequi eos explicabo incidunt. Sunt rem aut sunt quod qui incidunt mollitia.</p>
												<p class="chat_message_date">Nathan Kautzer, 10:43:19</p>
											</div>
										</div>
										<div class="chat_message">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_4.jpg" alt="">
											<div class="chat_message_body">
												<p>Et ex nam cum et. Quaerat velit qui qui. Quas incidunt quo et adipisci.</p>
												<p class="chat_message_date">Domenic Parker, 09:07:37</p>
											</div>
										</div>
										<div class="chat_message ch_right">
											<img class="img-thumbnail" src="assets/img/avatars/avatar_2.jpg" alt="">
											<div class="chat_message_body">
												<p>Commodi est est iusto rerum consequuntur tenetur. Architecto deserunt natus necessitatibus sed rem temporibus temporibus ut. Repudiandae in et inventore laudantium aliquam vitae aut.</p>
												<p class="chat_message_date">Tatum Kovacek, 16:41:45</p>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<div class="chat_submit">
										<div class="input-group">
											<input type="text" placeholder="Write a message..." class="form-control">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default">Send</button>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">Users (14)</div>
								<div class="panel_body_a">
									<table class="table table-striped contacts_table">
										<tbody>
											<tr>
												<td><span class="stat stat_busy"></span>Burdette Grady <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_online"></span>Miss Chadd Breitenberg <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_busy"></span>Yasmine Gutmann III <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_online"></span>Tre Schiller <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_online"></span>Mr. Kaitlin Blick <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_online"></span>Eriberto Okuneva <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_online"></span>Joanne Bode <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_offline"></span>Dr. Joesph Schinner II <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_online"></span>Aletha Hudson <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_busy"></span>Dr. Nathan Kautzer <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_busy"></span>Domenic Parker <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_offline"></span>Ms. Tatum Kovacek DVM <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
											<tr>
												<td><span class="stat stat_offline"></span>Ms. Lucas Bogisich <span class="contact_actions pull-right"><i class="fa fa-comments-o"></i> <i class="fa fa-ban"></i></span></td>
											</tr>
										</tbody>
									</table>
								</div>
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
		
    </body>
</html>

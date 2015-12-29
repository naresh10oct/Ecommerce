<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (tasks_summary)</title>
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

		<!-- iCheck -->
		<link rel="stylesheet" href="assets/lib/iCheck/skins/minimal/green.css">
		<!-- bootstrap-datepicker -->
		<link rel="stylesheet" href="assets/lib/bootstrap-datepicker/css/datepicker3.css">
				
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
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-8">
							
							<div class="todo_section panel panel-default">
								<div class="todo_date">
									<h4>Today</h4>
									<span class="text-muted">(14.05.2014)</span>
									<div class="pull-right">
										<span class="label label-success td_resolved_tasks">0</span> / <span class="label label-default">10</span>
									</div>
								</div>
								<ul class="todo_list_wrapper">
									<li data-task-title="Enim fuga sapiente aperiam voluptatem." data-task-label="envato" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a1" id="td_chbox_a1" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Enim fuga sapiente aperiam voluptatem.</a></h5>
									</li>
									<li data-task-title="Qui est dolores nisi doloremque." data-task-label="" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a2" id="td_chbox_a2">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Qui est dolores nisi doloremque.</a></h5>
									</li>
									<li data-task-title="Et et perferendis consequatur." data-task-label="work" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a3" id="td_chbox_a3">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Et et perferendis consequatur.</a></h5>
									</li>
									<li data-task-title="Temporibus quam minus consequatur." data-task-label="envato" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a4" id="td_chbox_a4">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Temporibus quam minus consequatur.</a></h5>
									</li>
									<li data-task-title="Unde eum cupiditate eos ullam." data-task-label="envato" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a5" id="td_chbox_a5">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Unde eum cupiditate eos ullam.</a></h5>
									</li>
									<li class="todo_stared" data-task-title="Aut praesentium illum modi." data-task-label="work" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a6" id="td_chbox_a6">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Aut praesentium illum modi.</a></h5>
									</li>
									<li data-task-title="Eaque est distinctio." data-task-label="family" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a7" id="td_chbox_a7">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_d pull-right">family</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Eaque est distinctio.</a></h5>
									</li>
									<li class="todo_stared" data-task-title="Eius qui esse autem in ut." data-task-label="" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a8" id="td_chbox_a8">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Eius qui esse autem in ut.</a></h5>
									</li>
									<li data-task-title="Nesciunt eveniet provident neque aliquam." data-task-label="work" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a9" id="td_chbox_a9" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Nesciunt eveniet provident neque aliquam.</a></h5>
									</li>
									<li data-task-title="Adipisci cumque ipsum quam esse." data-task-label="work" data-task-date="14.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_a10" id="td_chbox_a10">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Adipisci cumque ipsum quam esse.</a></h5>
									</li>
								</ul>
							</div>
							
							<div class="todo_section panel panel-default">
								<div class="todo_date">
									<h4>Tomorrow</h4>
									<span class="text-muted">(15.05.2014)</span>
									<div class="pull-right">
										<span class="label label-success td_resolved_tasks">0</span> / <span class="label label-default">6</span>
									</div>
								</div>
								<ul class="todo_list_wrapper">
									<li class="todo_stared" data-task-title="Porro id quis nulla et sit." data-task-label="work" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_b1" id="td_chbox_b1">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Porro id quis nulla et sit.</a></h5>
									</li>
									<li data-task-title="Est doloribus ullam." data-task-label="" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_b2" id="td_chbox_b2">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Est doloribus ullam.</a></h5>
									</li>
									<li data-task-title="Pariatur sint facere exercitationem excepturi." data-task-label="work" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_b3" id="td_chbox_b3">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Pariatur sint facere exercitationem excepturi.</a></h5>
									</li>
									<li class="todo_stared" data-task-title="Placeat alias ea quasi numquam." data-task-label="envato" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_b4" id="td_chbox_b4" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Placeat alias ea quasi numquam.</a></h5>
									</li>
									<li data-task-title="Id asperiores libero rerum cum." data-task-label="work" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_b5" id="td_chbox_b5" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Id asperiores libero rerum cum.</a></h5>
									</li>
									<li data-task-title="Eos sit facere distinctio et." data-task-label="work" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_b6" id="td_chbox_b6">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Eos sit facere distinctio et.</a></h5>
									</li>
								</ul>
							</div>
							
							<div class="todo_section panel panel-default">
								<div class="todo_date">
									<h4>Next 7 days</h4>
									<div class="pull-right">
										<span class="label label-success td_resolved_tasks">0</span> / <span class="label label-default">15</span>
									</div>
								</div>
								<ul class="todo_list_wrapper">
									<li data-task-title="Nam placeat est ducimus." data-task-label="work" data-task-date="20.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c1" id="td_chbox_c1" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Nam placeat est ducimus.</a> <span class="todo_due_date">(20.05.2014)</span></h5>
									</li>
									<li data-task-title="Dolorem minus et ut necessitatibus." data-task-label="" data-task-date="19.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c2" id="td_chbox_c2">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Dolorem minus et ut necessitatibus.</a> <span class="todo_due_date">(19.05.2014)</span></h5>
									</li>
									<li data-task-title="Est quidem architecto sit." data-task-label="work" data-task-date="18.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c3" id="td_chbox_c3" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Est quidem architecto sit.</a> <span class="todo_due_date">(18.05.2014)</span></h5>
									</li>
									<li data-task-title="Dolores velit quaerat quia voluptas." data-task-label="family" data-task-date="22.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c4" id="td_chbox_c4">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_d pull-right">family</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Dolores velit quaerat quia voluptas.</a> <span class="todo_due_date">(22.05.2014)</span></h5>
									</li>
									<li class="todo_stared" data-task-title="Est sunt dignissimos aut sint quam." data-task-label="envato" data-task-date="17.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c5" id="td_chbox_c5">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Est sunt dignissimos aut sint quam.</a> <span class="todo_due_date">(17.05.2014)</span></h5>
									</li>
									<li data-task-title="Dolore non et perspiciatis deserunt rem." data-task-label="work" data-task-date="19.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c6" id="td_chbox_c6" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Dolore non et perspiciatis deserunt rem.</a> <span class="todo_due_date">(19.05.2014)</span></h5>
									</li>
									<li data-task-title="Odio officia incidunt et deserunt." data-task-label="envato" data-task-date="22.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c7" id="td_chbox_c7" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Odio officia incidunt et deserunt.</a> <span class="todo_due_date">(22.05.2014)</span></h5>
									</li>
									<li data-task-title="Dolorum enim aliquid accusamus dicta." data-task-label="family" data-task-date="21.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c8" id="td_chbox_c8">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_d pull-right">family</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Dolorum enim aliquid accusamus dicta.</a> <span class="todo_due_date">(21.05.2014)</span></h5>
									</li>
									<li data-task-title="Quisquam eum laborum nisi." data-task-label="" data-task-date="18.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c9" id="td_chbox_c9">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Quisquam eum laborum nisi.</a> <span class="todo_due_date">(18.05.2014)</span></h5>
									</li>
									<li data-task-title="Placeat rerum fugiat." data-task-label="business" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c10" id="td_chbox_c10">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_g pull-right">business</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Placeat rerum fugiat.</a> <span class="todo_due_date">(15.05.2014)</span></h5>
									</li>
									<li data-task-title="Voluptatem voluptatem consequatur recusandae." data-task-label="" data-task-date="18.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c11" id="td_chbox_c11">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Voluptatem voluptatem consequatur recusandae.</a> <span class="todo_due_date">(18.05.2014)</span></h5>
									</li>
									<li class="todo_stared" data-task-title="Voluptate modi quo." data-task-label="work" data-task-date="18.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c12" id="td_chbox_c12">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Voluptate modi quo.</a> <span class="todo_due_date">(18.05.2014)</span></h5>
									</li>
									<li data-task-title="Qui odio doloremque." data-task-label="envato" data-task-date="15.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c13" id="td_chbox_c13">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_c pull-right">envato</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Qui odio doloremque.</a> <span class="todo_due_date">(15.05.2014)</span></h5>
									</li>
									<li data-task-title="Eos temporibus autem impedit." data-task-label="work" data-task-date="22.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c14" id="td_chbox_c14">
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
										<span class="label color_a pull-right">work</span>										
										<h5 class="todo_title"><a href="#todo_task_modal">Eos temporibus autem impedit.</a> <span class="todo_due_date">(22.05.2014)</span></h5>
									</li>
									<li class="todo_stared" data-task-title="Incidunt quod est." data-task-label="" data-task-date="20.05.2014">
										<div class="todo_checkbox">
											<input type="checkbox" name="td_chbox_c15" id="td_chbox_c15" checked>
										</div>
										<div class="todo_star">
											<span class="fa fa-star-o"></span>
										</div>
																				
										<h5 class="todo_title"><a href="#todo_task_modal">Incidunt quod est.</a> <span class="todo_due_date">(20.05.2014)</span></h5>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="events_list">
								<div class="events_date clearfix">
									<span class="event_date_big ion-ios7-calendar-outline"><span>24</span></span>
									<span class="event_date_day">Monday</span>
									<span class="event_date_full">May, 24 2014 </span>
								</div>
																
								<div class="event_item">
									<div class="event_hour">11:00</div>
									<ul class="event_content">
										<li>
											<p>Perferendis molestias officia dignissimos explicabo.</p>
											<span>work</span>										
										</li>
										<li>
											<p>Veritatis et odit.</p>
											<span>family</span>										
										</li>
										<li>
											<p>Dolorum facilis provident.</p>
											<span>work</span>										
										</li>
									</ul>
								</div>
															
								<div class="event_item">
									<div class="event_hour">16:00</div>
									<ul class="event_content">
										<li>
											<p>In aut sit.</p>
											<span>business</span>										
										</li>
										<li>
											<p>Sit et quia dolorem.</p>
											<span>envato</span>										
										</li>
										<li>
											<p>Incidunt magnam eveniet.</p>
											<span>work</span>										
										</li>
										<li>
											<p>Sunt nulla delectus.</p>
											<span>work</span>										
										</li>
										<li>
											<p>Ut expedita temporibus ex.</p>
											<span>family</span>										
										</li>
									</ul>
								</div>
															
								<div class="event_item">
									<div class="event_hour">18:00</div>
									<ul class="event_content">
										<li>
											<p>Inventore qui alias.</p>
											<span>business</span>										
										</li>
										<li>
											<p>Odit voluptates at deleniti.</p>
											<span>business</span>										
										</li>
										<li>
											<p>Pariatur consequatur minima.</p>
											<span>envato</span>										
										</li>
									</ul>
								</div>
							</div>
							
							<div id="mini-clndr">
								<script>
									// todo calendar events 
									var currentMonth = moment().format('YYYY-MM'),
										nextMonth    = moment().add('month', 1).format('YYYY-MM');
									
									todo_events = [
										{ date: currentMonth + '-' + '07', title: 'Neque et vel.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '08', title: 'Architecto in magnam aspernatur.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '08', title: 'Eos sed magnam.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '12', title: 'Ea reprehenderit est velit.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '19', title: 'Aliquam nihil exercitationem nisi.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '19', title: 'Veritatis explicabo corrupti harum.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '22', title: 'Ad reiciendis eos deserunt quibusdam.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '25', title: 'Aliquam voluptas officiis.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '25', title: 'Aspernatur ipsa consequatur voluptates.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '25', title: 'Ullam ullam sit eum animi.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '28', title: 'Nulla vitae ut itaque.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '28', title: 'Cupiditate ut rerum.', url: 'javascript:void(0)' },
										{ date: nextMonth + '-' + '04',    title: 'Quod veniam dolores sunt.', url: 'javascript:void(0)' },
										{ date: nextMonth + '-' + '18',    title: 'Qui dolor et fugit.', url: 'javascript:void(0)' }
									]
								</script>
								<script id="mini-clndr-template" type="text/template">
									<div class="controls">
										<div class="clndr-previous-button"><span class="glyphicon glyphicon-chevron-left"></span></div><div class="month"><%= month+' '+year %></div><div class="clndr-next-button"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
						
									<div class="days-container">
										<div class="days">
											<div class="headers">
												<% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
											</div>
											<% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
										</div>
										<div class="events">
											<div class="headers">
												<div class="x-button"><span class="glyphicon glyphicon-remove"></span></div>
												<div class="event-header">EVENTS</div>
											</div>
											<div class="events-list-wrapper">
												<div class="events-list">
													<% _.each(eventsThisMonth, function(event) { %>
														<div class="event">
															<a href="<%= event.url %>"><%= moment(event.date).format('MMM Do') %>: <%= event.title %></a>
														</div>
													  <% }); %>
												</div>
											</div>
										</div>
									</div>
								</script>
							</div>
						
							<div class="panel panel-default">
								<div class="panel-heading">Tasks by Labels <small class="text-muted">(last 7 days)</small></div>
								<div class="panel-body">
									<div id="todo_tasks_chart" class="chart" style="height:300px;width:100%">
										<script>
											chart_task_labels = [
												{ label: "Work", data: 31, color: '#1f77b4' },
												{ label: "Business", data: 14, color: '#d62728' },
												{ label: "Family", data: 24, color: '#2ca02c' },
												{ label: "Envato", data: 10, color: '#ff7f0e' }
											];
										</script>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="todo_task_modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<form>
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Add/Edit Task</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-12">
											<label for="todo_form_title">Task</label>
											<textarea class="form-control autosize" id="todo_form_title" name="todo_form_title"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="todo_form_date">Due Date</label>
											<input type="text" class="form-control" id="todo_form_date" name="todo_form_date">
										</div>
										<div class="col-sm-6">
											<label for="todo_form_label">Label</label>
											<select name="todo_form_label" id="todo_form_label" class="form-control">
												<option value="">---</option>
												<option value="work">Work</option>
												<option value="family">Family</option>
												<option value="business">Business</option>
												<option value="envato">Envato</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success">Save</button>
								<button type="button" class="btn btn-link"  data-dismiss="modal">Close</button>
							</div>
						</form>
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

		<!-- textarea autosize -->
		<script src="assets/lib/autosize/jquery.autosize.min.js"></script>
		<!-- iCheck -->
		<script src="assets/lib/iCheck/jquery.icheck.min.js"></script>
		<!-- clndr -->
		<script src="assets/lib/underscore-js/underscore-min.js"></script>
		<script src="assets/lib/CLNDR/src/clndr.js"></script>
		<!-- flot charts-->
		<script src="assets/lib/flot/jquery.flot.min.js"></script>
		<script src="assets/lib/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/lib/flot/jquery.flot.resize.min.js"></script>
		<!--  bootstrap-datepicker -->
		<script src="assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	
		<!-- todo functions -->
		<script src="assets/js/apps/tisa_todo.js"></script>
		
    </body>
</html>

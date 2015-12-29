<?php 
include('dbconnect.php');
include('queries.php');
?>


<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (dashboard)</title>
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

		<!-- nvd3 charts -->
		<link rel="stylesheet" href="assets/lib/novus-nvd3/nv.d3.min.css">
		<!-- owl carousel -->
		<link rel="stylesheet" href="assets/lib/owl-carousel/owl.carousel.css">
				
		<!-- main stylesheet -->
		<link href="assets/css/style.css" rel="stylesheet" media="screen">
		
		<!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		
		<!-- moment.js (date library) -->
		<script src="assets/lib/moment-js/moment.min.js"></script>
		
    </head>
    <body>
		<!-- top bar -->
		<?php include('header.php');?>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-lg-3 col-md-6">
									<div class="panel panel-default">
										<div class="stat_box stat_up">
											<div class="stat_ico color_f"><i class="ion-ios7-chatboxes-outline"></i></div>
											<div class="stat_content">
												<span class="stat_count"><?php echo totalrecords('Orders');?></span>
												<span class="stat_name">Total Orders</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="panel panel-default">
										<div class="stat_box stat_up">
											<div class="stat_ico color_g"><i class="ion-ios7-cart-outline"></i></div>
											<div class="stat_content">
												<span class="stat_count"><?php echo totalamount();?></span>
												<span class="stat_name">Total Amount</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="panel panel-default">
										<div class="stat_box stat_down">
											<div class="stat_ico color_a"><i class="ion-clipboard"></i></div>
											<div class="stat_content">
												<span class="stat_count"><?php echo totalrecords('Customers');?></span>
												<span class="stat_name">Total Customers</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6">
									<div class="panel panel-default">
										<div class="stat_box stat_up">
											<div class="stat_ico color_d"><i class="ion-ios7-email-outline"></i></div>
											<div class="stat_content">
												<span class="stat_count">2483</span>
												<span class="stat_name">Messages</span>
											</div>
										</div>
									</div>
								</div>
							</div>
								
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="easy_chart easy_chart_pages pull-left" data-percent="81"><i class="ion-document-text"></i></div>
									<div class="easy_chart_desc">
										<h4>132 New Pages</h4>
										<p>Lorem ipsum dolor sit&hellip;</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="easy_chart easy_chart_user pull-left" data-percent="56"><i class="ion-ios7-contact-outline"></i></div>
									<div class="easy_chart_desc">
										<h4>4 662 Unique Users</h4>
										<p>Lorem ipsum dolor sit&hellip;</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="easy_chart easy_chart_images pull-left" data-percent="56"><i class="ion-images"></i></div>
									<div class="easy_chart_desc">
										<h4>731 Images Uploaded</h4>
										<p>Lorem ipsum dolor sit&hellip;</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div id="nvd3_cumulativeLine" style="width:100%;height:300px">
										<svg></svg>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="heading_b">Social Networks</div>
									<div class="row">
										<div class="col-md-7">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Social Network</th>
														<th class="col_md sub_col">Visits</th>
														<th class="col_md sub_col">Pageviews</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">Twitter</a></td>
														<td class="sub_col">423</td>
														<td class="sub_col">631</td>
													</tr>
													<tr>
														<td><a href="#">Google+</a></td>
														<td class="sub_col">316</td>
														<td class="sub_col">549</td>
													</tr>
													<tr>
														<td><a href="#">LinkedIn</a></td>
														<td class="sub_col">264</td>
														<td class="sub_col">388</td>
													</tr>
													<tr>
														<td><a href="#">Facebook</a></td>
														<td class="sub_col">152</td>
														<td class="sub_col">274</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-md-5">
											<div id="flot_social" class="chart" style="height:240px;width:100%">
												<script>
													chart_social_data = [
														{ label: "Twitter", data: 423, color: '#1f77b4' },
														{ label: "Google+", data: 316, color: '#ff7f0e' },
														{ label: "LinkedIn", data: 264, color: '#2ca02c' },
														{ label: "Facebook", data: 152, color: '#d62728' }
													];
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="heading_b">Browsers</div>
									<div class="row">
										<div class="col-md-7">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Browser</th>
														<th class="col_md sub_col">Visits</th>
														<th class="col_md sub_col">% visits</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">Firefox</a></td>
														<td class="sub_col">1428</td>
														<td class="sub_col">54%</td>
													</tr>
													<tr>
														<td><a href="#">Chrome</a></td>
														<td class="sub_col">858</td>
														<td class="sub_col">21%</td>
													</tr>
													<tr>
														<td><a href="#">Safari</a></td>
														<td class="sub_col">647</td>
														<td class="sub_col">11%</td>
													</tr>
													<tr>
														<td><a href="#">Internet Explorer</a></td>
														<td class="sub_col">433</td>
														<td class="sub_col">6%</td>
													</tr>
													<tr>
														<td><a href="#">Opera</a></td>
														<td class="sub_col">141</td>
														<td class="sub_col">2%</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="col-md-5">
											<div id="flot_browsers" class="chart" style="height:240px;width:100%">
												<script>
													chart_browsers_data = [
														{ label: "Firefox", data: 1428, color: '#1f77b4' },
														{ label: "Chrome", data: 858, color: '#aec7e8' },
														{ label: "Safari", data: 647, color: '#ff7f0e' },
														{ label: "IE", data: 433, color: '#ffbb78' },
														{ label: "Opera", data: 141, color: '#2ca02c' }
													];
												</script>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="panel panel-default">
								<div class="panel-body">
									<div class="heading_b">Latest Images</div>
									<div id="latest-images" class="owl-carousel owl-theme">
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image001_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image002_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image003_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image004_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image005_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image006_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image007_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image008_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image009_tn.jpg" alt=""></div>
										<div class="item"><img class="img-thumbnail" src="assets/img/gallery/Image010_tn.jpg" alt=""></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div id="mini-clndr">
								<script>
									// todo calendar events 
									var currentMonth = moment().format('YYYY-MM'),
										nextMonth    = moment().add('month', 1).format('YYYY-MM');
									
									todo_events = [
										{ date: currentMonth + '-' + '07', title: 'Ducimus voluptatem autem.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '08', title: 'Vel ea soluta.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '08', title: 'Doloribus maxime aliquid nisi.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '12', title: 'Quia temporibus aut provident vitae.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '19', title: 'Aliquid sed voluptas fuga hic.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '19', title: 'Architecto fugit voluptatem sunt minima.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '22', title: 'Facilis eaque cupiditate deleniti.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '25', title: 'Ut nobis.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '25', title: 'A magni sint asperiores maiores.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '25', title: 'Rerum tempora reiciendis laudantium.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '28', title: 'Inventore dolor et.', url: 'javascript:void(0)' },
										{ date: currentMonth + '-' + '28', title: 'Qui ducimus et.', url: 'javascript:void(0)' },
										{ date: nextMonth + '-' + '04',    title: 'Eos illum sed.', url: 'javascript:void(0)' },
										{ date: nextMonth + '-' + '18',    title: 'Doloremque voluptates dolor.', url: 'javascript:void(0)' }
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
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- side navigation -->
		<?php include('sidenav.php');?>
		<!--right slidebar-->
		<?php include('slidebar.php');?>

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

		<!-- nvd3 charts -->
		<script src="assets/lib/d3/d3.min.js"></script>
		<script src="assets/lib/novus-nvd3/nv.d3.min.js"></script>
		<!-- flot charts-->
		<script src="assets/lib/flot/jquery.flot.min.js"></script>
		<script src="assets/lib/flot/jquery.flot.pie.min.js"></script>
		<script src="assets/lib/flot/jquery.flot.resize.min.js"></script>
		<script src="assets/lib/flot/jquery.flot.tooltip.min.js"></script>
		<!-- clndr -->
		<script src="assets/lib/underscore-js/underscore-min.js"></script>
		<script src="assets/lib/CLNDR/src/clndr.js"></script>
		<!-- easy pie chart -->
		<script src="assets/lib/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<!-- owl carousel -->
		<script src="assets/lib/owl-carousel/owl.carousel.min.js"></script>
		
		<!-- dashboard functions -->
		<script src="assets/js/apps/tisa_dashboard.js"></script>
		
    </body>
</html>

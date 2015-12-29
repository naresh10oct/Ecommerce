<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (icons)</title>
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
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="well">
								<div class="row">
									<div class="col-md-4">
										<input type="text" id="icon_find" class="form-control" placeholder="Find icon...">
									</div>
								</div>
							</div>
								
							<div class="panel panel-default">
								<div class="panel-heading">Glyphicons</div>
								<div class="panel-body">
									<ul id="glyphicons_list" class="icon-list clearfix">
										<li><span class="glyphicon glyphicon-asterisk"></span><code>glyphicon glyphicon-asterisk</code></li>
										<li><span class="glyphicon glyphicon-plus"></span><code>glyphicon glyphicon-plus</code></li>
										<li><span class="glyphicon glyphicon-euro"></span><code>glyphicon glyphicon-euro</code></li>
										<li><span class="glyphicon glyphicon-minus"></span><code>glyphicon glyphicon-minus</code></li>
										<li><span class="glyphicon glyphicon-cloud"></span><code>glyphicon glyphicon-cloud</code></li>
										<li><span class="glyphicon glyphicon-envelope"></span><code>glyphicon glyphicon-envelope</code></li>
										<li><span class="glyphicon glyphicon-pencil"></span><code>glyphicon glyphicon-pencil</code></li>
										<li><span class="glyphicon glyphicon-glass"></span><code>glyphicon glyphicon-glass</code></li>
										<li><span class="glyphicon glyphicon-music"></span><code>glyphicon glyphicon-music</code></li>
										<li><span class="glyphicon glyphicon-search"></span><code>glyphicon glyphicon-search</code></li>
										<li><span class="glyphicon glyphicon-heart"></span><code>glyphicon glyphicon-heart</code></li>
										<li><span class="glyphicon glyphicon-star"></span><code>glyphicon glyphicon-star</code></li>
										<li><span class="glyphicon glyphicon-star-empty"></span><code>glyphicon glyphicon-star-empty</code></li>
										<li><span class="glyphicon glyphicon-user"></span><code>glyphicon glyphicon-user</code></li>
										<li><span class="glyphicon glyphicon-film"></span><code>glyphicon glyphicon-film</code></li>
										<li><span class="glyphicon glyphicon-th-large"></span><code>glyphicon glyphicon-th-large</code></li>
										<li><span class="glyphicon glyphicon-th"></span><code>glyphicon glyphicon-th</code></li>
										<li><span class="glyphicon glyphicon-th-list"></span><code>glyphicon glyphicon-th-list</code></li>
										<li><span class="glyphicon glyphicon-ok"></span><code>glyphicon glyphicon-ok</code></li>
										<li><span class="glyphicon glyphicon-remove"></span><code>glyphicon glyphicon-remove</code></li>
										<li><span class="glyphicon glyphicon-zoom-in"></span><code>glyphicon glyphicon-zoom-in</code></li>
										<li><span class="glyphicon glyphicon-zoom-out"></span><code>glyphicon glyphicon-zoom-out</code></li>
										<li><span class="glyphicon glyphicon-off"></span><code>glyphicon glyphicon-off</code></li>
										<li><span class="glyphicon glyphicon-signal"></span><code>glyphicon glyphicon-signal</code></li>
										<li><span class="glyphicon glyphicon-cog"></span><code>glyphicon glyphicon-cog</code></li>
										<li><span class="glyphicon glyphicon-trash"></span><code>glyphicon glyphicon-trash</code></li>
										<li><span class="glyphicon glyphicon-home"></span><code>glyphicon glyphicon-home</code></li>
										<li><span class="glyphicon glyphicon-file"></span><code>glyphicon glyphicon-file</code></li>
										<li><span class="glyphicon glyphicon-time"></span><code>glyphicon glyphicon-time</code></li>
										<li><span class="glyphicon glyphicon-road"></span><code>glyphicon glyphicon-road</code></li>
										<li><span class="glyphicon glyphicon-download-alt"></span><code>glyphicon glyphicon-download-alt</code></li>
										<li><span class="glyphicon glyphicon-download"></span><code>glyphicon glyphicon-download</code></li>
										<li><span class="glyphicon glyphicon-upload"></span><code>glyphicon glyphicon-upload</code></li>
										<li><span class="glyphicon glyphicon-inbox"></span><code>glyphicon glyphicon-inbox</code></li>
										<li><span class="glyphicon glyphicon-play-circle"></span><code>glyphicon glyphicon-play-circle</code></li>
										<li><span class="glyphicon glyphicon-repeat"></span><code>glyphicon glyphicon-repeat</code></li>
										<li><span class="glyphicon glyphicon-refresh"></span><code>glyphicon glyphicon-refresh</code></li>
										<li><span class="glyphicon glyphicon-list-alt"></span><code>glyphicon glyphicon-list-alt</code></li>
										<li><span class="glyphicon glyphicon-lock"></span><code>glyphicon glyphicon-lock</code></li>
										<li><span class="glyphicon glyphicon-flag"></span><code>glyphicon glyphicon-flag</code></li>
										<li><span class="glyphicon glyphicon-headphones"></span><code>glyphicon glyphicon-headphones</code></li>
										<li><span class="glyphicon glyphicon-volume-off"></span><code>glyphicon glyphicon-volume-off</code></li>
										<li><span class="glyphicon glyphicon-volume-down"></span><code>glyphicon glyphicon-volume-down</code></li>
										<li><span class="glyphicon glyphicon-volume-up"></span><code>glyphicon glyphicon-volume-up</code></li>
										<li><span class="glyphicon glyphicon-qrcode"></span><code>glyphicon glyphicon-qrcode</code></li>
										<li><span class="glyphicon glyphicon-barcode"></span><code>glyphicon glyphicon-barcode</code></li>
										<li><span class="glyphicon glyphicon-tag"></span><code>glyphicon glyphicon-tag</code></li>
										<li><span class="glyphicon glyphicon-tags"></span><code>glyphicon glyphicon-tags</code></li>
										<li><span class="glyphicon glyphicon-book"></span><code>glyphicon glyphicon-book</code></li>
										<li><span class="glyphicon glyphicon-bookmark"></span><code>glyphicon glyphicon-bookmark</code></li>
										<li><span class="glyphicon glyphicon-print"></span><code>glyphicon glyphicon-print</code></li>
										<li><span class="glyphicon glyphicon-camera"></span><code>glyphicon glyphicon-camera</code></li>
										<li><span class="glyphicon glyphicon-font"></span><code>glyphicon glyphicon-font</code></li>
										<li><span class="glyphicon glyphicon-bold"></span><code>glyphicon glyphicon-bold</code></li>
										<li><span class="glyphicon glyphicon-italic"></span><code>glyphicon glyphicon-italic</code></li>
										<li><span class="glyphicon glyphicon-text-height"></span><code>glyphicon glyphicon-text-height</code></li>
										<li><span class="glyphicon glyphicon-text-width"></span><code>glyphicon glyphicon-text-width</code></li>
										<li><span class="glyphicon glyphicon-align-left"></span><code>glyphicon glyphicon-align-left</code></li>
										<li><span class="glyphicon glyphicon-align-center"></span><code>glyphicon glyphicon-align-center</code></li>
										<li><span class="glyphicon glyphicon-align-right"></span><code>glyphicon glyphicon-align-right</code></li>
										<li><span class="glyphicon glyphicon-align-justify"></span><code>glyphicon glyphicon-align-justify</code></li>
										<li><span class="glyphicon glyphicon-list"></span><code>glyphicon glyphicon-list</code></li>
										<li><span class="glyphicon glyphicon-indent-left"></span><code>glyphicon glyphicon-indent-left</code></li>
										<li><span class="glyphicon glyphicon-indent-right"></span><code>glyphicon glyphicon-indent-right</code></li>
										<li><span class="glyphicon glyphicon-facetime-video"></span><code>glyphicon glyphicon-facetime-video</code></li>
										<li><span class="glyphicon glyphicon-picture"></span><code>glyphicon glyphicon-picture</code></li>
										<li><span class="glyphicon glyphicon-map-marker"></span><code>glyphicon glyphicon-map-marker</code></li>
										<li><span class="glyphicon glyphicon-adjust"></span><code>glyphicon glyphicon-adjust</code></li>
										<li><span class="glyphicon glyphicon-tint"></span><code>glyphicon glyphicon-tint</code></li>
										<li><span class="glyphicon glyphicon-edit"></span><code>glyphicon glyphicon-edit</code></li>
										<li><span class="glyphicon glyphicon-share"></span><code>glyphicon glyphicon-share</code></li>
										<li><span class="glyphicon glyphicon-check"></span><code>glyphicon glyphicon-check</code></li>
										<li><span class="glyphicon glyphicon-move"></span><code>glyphicon glyphicon-move</code></li>
										<li><span class="glyphicon glyphicon-step-backward"></span><code>glyphicon glyphicon-step-backward</code></li>
										<li><span class="glyphicon glyphicon-fast-backward"></span><code>glyphicon glyphicon-fast-backward</code></li>
										<li><span class="glyphicon glyphicon-backward"></span><code>glyphicon glyphicon-backward</code></li>
										<li><span class="glyphicon glyphicon-play"></span><code>glyphicon glyphicon-play</code></li>
										<li><span class="glyphicon glyphicon-pause"></span><code>glyphicon glyphicon-pause</code></li>
										<li><span class="glyphicon glyphicon-stop"></span><code>glyphicon glyphicon-stop</code></li>
										<li><span class="glyphicon glyphicon-forward"></span><code>glyphicon glyphicon-forward</code></li>
										<li><span class="glyphicon glyphicon-fast-forward"></span><code>glyphicon glyphicon-fast-forward</code></li>
										<li><span class="glyphicon glyphicon-step-forward"></span><code>glyphicon glyphicon-step-forward</code></li>
										<li><span class="glyphicon glyphicon-eject"></span><code>glyphicon glyphicon-eject</code></li>
										<li><span class="glyphicon glyphicon-chevron-left"></span><code>glyphicon glyphicon-chevron-left</code></li>
										<li><span class="glyphicon glyphicon-chevron-right"></span><code>glyphicon glyphicon-chevron-right</code></li>
										<li><span class="glyphicon glyphicon-plus-sign"></span><code>glyphicon glyphicon-plus-sign</code></li>
										<li><span class="glyphicon glyphicon-minus-sign"></span><code>glyphicon glyphicon-minus-sign</code></li>
										<li><span class="glyphicon glyphicon-remove-sign"></span><code>glyphicon glyphicon-remove-sign</code></li>
										<li><span class="glyphicon glyphicon-ok-sign"></span><code>glyphicon glyphicon-ok-sign</code></li>
										<li><span class="glyphicon glyphicon-question-sign"></span><code>glyphicon glyphicon-question-sign</code></li>
										<li><span class="glyphicon glyphicon-info-sign"></span><code>glyphicon glyphicon-info-sign</code></li>
										<li><span class="glyphicon glyphicon-screenshot"></span><code>glyphicon glyphicon-screenshot</code></li>
										<li><span class="glyphicon glyphicon-remove-circle"></span><code>glyphicon glyphicon-remove-circle</code></li>
										<li><span class="glyphicon glyphicon-ok-circle"></span><code>glyphicon glyphicon-ok-circle</code></li>
										<li><span class="glyphicon glyphicon-ban-circle"></span><code>glyphicon glyphicon-ban-circle</code></li>
										<li><span class="glyphicon glyphicon-arrow-left"></span><code>glyphicon glyphicon-arrow-left</code></li>
										<li><span class="glyphicon glyphicon-arrow-right"></span><code>glyphicon glyphicon-arrow-right</code></li>
										<li><span class="glyphicon glyphicon-arrow-up"></span><code>glyphicon glyphicon-arrow-up</code></li>
										<li><span class="glyphicon glyphicon-arrow-down"></span><code>glyphicon glyphicon-arrow-down</code></li>
										<li><span class="glyphicon glyphicon-share-alt"></span><code>glyphicon glyphicon-share-alt</code></li>
										<li><span class="glyphicon glyphicon-resize-full"></span><code>glyphicon glyphicon-resize-full</code></li>
										<li><span class="glyphicon glyphicon-resize-small"></span><code>glyphicon glyphicon-resize-small</code></li>
										<li><span class="glyphicon glyphicon-exclamation-sign"></span><code>glyphicon glyphicon-exclamation-sign</code></li>
										<li><span class="glyphicon glyphicon-gift"></span><code>glyphicon glyphicon-gift</code></li>
										<li><span class="glyphicon glyphicon-leaf"></span><code>glyphicon glyphicon-leaf</code></li>
										<li><span class="glyphicon glyphicon-fire"></span><code>glyphicon glyphicon-fire</code></li>
										<li><span class="glyphicon glyphicon-eye-open"></span><code>glyphicon glyphicon-eye-open</code></li>
										<li><span class="glyphicon glyphicon-eye-close"></span><code>glyphicon glyphicon-eye-close</code></li>
										<li><span class="glyphicon glyphicon-warning-sign"></span><code>glyphicon glyphicon-warning-sign</code></li>
										<li><span class="glyphicon glyphicon-plane"></span><code>glyphicon glyphicon-plane</code></li>
										<li><span class="glyphicon glyphicon-calendar"></span><code>glyphicon glyphicon-calendar</code></li>
										<li><span class="glyphicon glyphicon-random"></span><code>glyphicon glyphicon-random</code></li>
										<li><span class="glyphicon glyphicon-comment"></span><code>glyphicon glyphicon-comment</code></li>
										<li><span class="glyphicon glyphicon-magnet"></span><code>glyphicon glyphicon-magnet</code></li>
										<li><span class="glyphicon glyphicon-chevron-up"></span><code>glyphicon glyphicon-chevron-up</code></li>
										<li><span class="glyphicon glyphicon-chevron-down"></span><code>glyphicon glyphicon-chevron-down</code></li>
										<li><span class="glyphicon glyphicon-retweet"></span><code>glyphicon glyphicon-retweet</code></li>
										<li><span class="glyphicon glyphicon-shopping-cart"></span><code>glyphicon glyphicon-shopping-cart</code></li>
										<li><span class="glyphicon glyphicon-folder-close"></span><code>glyphicon glyphicon-folder-close</code></li>
										<li><span class="glyphicon glyphicon-folder-open"></span><code>glyphicon glyphicon-folder-open</code></li>
										<li><span class="glyphicon glyphicon-resize-vertical"></span><code>glyphicon glyphicon-resize-vertical</code></li>
										<li><span class="glyphicon glyphicon-resize-horizontal"></span><code>glyphicon glyphicon-resize-horizontal</code></li>
										<li><span class="glyphicon glyphicon-hdd"></span><code>glyphicon glyphicon-hdd</code></li>
										<li><span class="glyphicon glyphicon-bullhorn"></span><code>glyphicon glyphicon-bullhorn</code></li>
										<li><span class="glyphicon glyphicon-bell"></span><code>glyphicon glyphicon-bell</code></li>
										<li><span class="glyphicon glyphicon-certificate"></span><code>glyphicon glyphicon-certificate</code></li>
										<li><span class="glyphicon glyphicon-thumbs-up"></span><code>glyphicon glyphicon-thumbs-up</code></li>
										<li><span class="glyphicon glyphicon-thumbs-down"></span><code>glyphicon glyphicon-thumbs-down</code></li>
										<li><span class="glyphicon glyphicon-hand-right"></span><code>glyphicon glyphicon-hand-right</code></li>
										<li><span class="glyphicon glyphicon-hand-left"></span><code>glyphicon glyphicon-hand-left</code></li>
										<li><span class="glyphicon glyphicon-hand-up"></span><code>glyphicon glyphicon-hand-up</code></li>
										<li><span class="glyphicon glyphicon-hand-down"></span><code>glyphicon glyphicon-hand-down</code></li>
										<li><span class="glyphicon glyphicon-circle-arrow-right"></span><code>glyphicon glyphicon-circle-arrow-right</code></li>
										<li><span class="glyphicon glyphicon-circle-arrow-left"></span><code>glyphicon glyphicon-circle-arrow-left</code></li>
										<li><span class="glyphicon glyphicon-circle-arrow-up"></span><code>glyphicon glyphicon-circle-arrow-up</code></li>
										<li><span class="glyphicon glyphicon-circle-arrow-down"></span><code>glyphicon glyphicon-circle-arrow-down</code></li>
										<li><span class="glyphicon glyphicon-globe"></span><code>glyphicon glyphicon-globe</code></li>
										<li><span class="glyphicon glyphicon-wrench"></span><code>glyphicon glyphicon-wrench</code></li>
										<li><span class="glyphicon glyphicon-tasks"></span><code>glyphicon glyphicon-tasks</code></li>
										<li><span class="glyphicon glyphicon-filter"></span><code>glyphicon glyphicon-filter</code></li>
										<li><span class="glyphicon glyphicon-briefcase"></span><code>glyphicon glyphicon-briefcase</code></li>
										<li><span class="glyphicon glyphicon-fullscreen"></span><code>glyphicon glyphicon-fullscreen</code></li>
										<li><span class="glyphicon glyphicon-dashboard"></span><code>glyphicon glyphicon-dashboard</code></li>
										<li><span class="glyphicon glyphicon-paperclip"></span><code>glyphicon glyphicon-paperclip</code></li>
										<li><span class="glyphicon glyphicon-heart-empty"></span><code>glyphicon glyphicon-heart-empty</code></li>
										<li><span class="glyphicon glyphicon-link"></span><code>glyphicon glyphicon-link</code></li>
										<li><span class="glyphicon glyphicon-phone"></span><code>glyphicon glyphicon-phone</code></li>
										<li><span class="glyphicon glyphicon-pushpin"></span><code>glyphicon glyphicon-pushpin</code></li>
										<li><span class="glyphicon glyphicon-usd"></span><code>glyphicon glyphicon-usd</code></li>
										<li><span class="glyphicon glyphicon-gbp"></span><code>glyphicon glyphicon-gbp</code></li>
										<li><span class="glyphicon glyphicon-sort"></span><code>glyphicon glyphicon-sort</code></li>
										<li><span class="glyphicon glyphicon-sort-by-alphabet"></span><code>glyphicon glyphicon-sort-by-alphabet</code></li>
										<li><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span><code>glyphicon glyphicon-sort-by-alphabet-alt</code></li>
										<li><span class="glyphicon glyphicon-sort-by-order"></span><code>glyphicon glyphicon-sort-by-order</code></li>
										<li><span class="glyphicon glyphicon-sort-by-order-alt"></span><code>glyphicon glyphicon-sort-by-order-alt</code></li>
										<li><span class="glyphicon glyphicon-sort-by-attributes"></span><code>glyphicon glyphicon-sort-by-attributes</code></li>
										<li><span class="glyphicon glyphicon-sort-by-attributes-alt"></span><code>glyphicon glyphicon-sort-by-attributes-alt</code></li>
										<li><span class="glyphicon glyphicon-unchecked"></span><code>glyphicon glyphicon-unchecked</code></li>
										<li><span class="glyphicon glyphicon-expand"></span><code>glyphicon glyphicon-expand</code></li>
										<li><span class="glyphicon glyphicon-collapse-down"></span><code>glyphicon glyphicon-collapse-down</code></li>
										<li><span class="glyphicon glyphicon-collapse-up"></span><code>glyphicon glyphicon-collapse-up</code></li>
										<li><span class="glyphicon glyphicon-log-in"></span><code>glyphicon glyphicon-log-in</code></li>
										<li><span class="glyphicon glyphicon-flash"></span><code>glyphicon glyphicon-flash</code></li>
										<li><span class="glyphicon glyphicon-log-out"></span><code>glyphicon glyphicon-log-out</code></li>
										<li><span class="glyphicon glyphicon-new-window"></span><code>glyphicon glyphicon-new-window</code></li>
										<li><span class="glyphicon glyphicon-record"></span><code>glyphicon glyphicon-record</code></li>
										<li><span class="glyphicon glyphicon-save"></span><code>glyphicon glyphicon-save</code></li>
										<li><span class="glyphicon glyphicon-open"></span><code>glyphicon glyphicon-open</code></li>
										<li><span class="glyphicon glyphicon-saved"></span><code>glyphicon glyphicon-saved</code></li>
										<li><span class="glyphicon glyphicon-import"></span><code>glyphicon glyphicon-import</code></li>
										<li><span class="glyphicon glyphicon-export"></span><code>glyphicon glyphicon-export</code></li>
										<li><span class="glyphicon glyphicon-send"></span><code>glyphicon glyphicon-send</code></li>
										<li><span class="glyphicon glyphicon-floppy-disk"></span><code>glyphicon glyphicon-floppy-disk</code></li>
										<li><span class="glyphicon glyphicon-floppy-saved"></span><code>glyphicon glyphicon-floppy-saved</code></li>
										<li><span class="glyphicon glyphicon-floppy-remove"></span><code>glyphicon glyphicon-floppy-remove</code></li>
										<li><span class="glyphicon glyphicon-floppy-save"></span><code>glyphicon glyphicon-floppy-save</code></li>
										<li><span class="glyphicon glyphicon-floppy-open"></span><code>glyphicon glyphicon-floppy-open</code></li>
										<li><span class="glyphicon glyphicon-credit-card"></span><code>glyphicon glyphicon-credit-card</code></li>
										<li><span class="glyphicon glyphicon-transfer"></span><code>glyphicon glyphicon-transfer</code></li>
										<li><span class="glyphicon glyphicon-cutlery"></span><code>glyphicon glyphicon-cutlery</code></li>
										<li><span class="glyphicon glyphicon-header"></span><code>glyphicon glyphicon-header</code></li>
										<li><span class="glyphicon glyphicon-compressed"></span><code>glyphicon glyphicon-compressed</code></li>
										<li><span class="glyphicon glyphicon-earphone"></span><code>glyphicon glyphicon-earphone</code></li>
										<li><span class="glyphicon glyphicon-phone-alt"></span><code>glyphicon glyphicon-phone-alt</code></li>
										<li><span class="glyphicon glyphicon-tower"></span><code>glyphicon glyphicon-tower</code></li>
										<li><span class="glyphicon glyphicon-stats"></span><code>glyphicon glyphicon-stats</code></li>
										<li><span class="glyphicon glyphicon-sd-video"></span><code>glyphicon glyphicon-sd-video</code></li>
										<li><span class="glyphicon glyphicon-hd-video"></span><code>glyphicon glyphicon-hd-video</code></li>
										<li><span class="glyphicon glyphicon-subtitles"></span><code>glyphicon glyphicon-subtitles</code></li>
										<li><span class="glyphicon glyphicon-sound-stereo"></span><code>glyphicon glyphicon-sound-stereo</code></li>
										<li><span class="glyphicon glyphicon-sound-dolby"></span><code>glyphicon glyphicon-sound-dolby</code></li>
										<li><span class="glyphicon glyphicon-sound-5-1"></span><code>glyphicon glyphicon-sound-5-1</code></li>
										<li><span class="glyphicon glyphicon-sound-6-1"></span><code>glyphicon glyphicon-sound-6-1</code></li>
										<li><span class="glyphicon glyphicon-sound-7-1"></span><code>glyphicon glyphicon-sound-7-1</code></li>
										<li><span class="glyphicon glyphicon-copyright-mark"></span><code>glyphicon glyphicon-copyright-mark</code></li>
										<li><span class="glyphicon glyphicon-registration-mark"></span><code>glyphicon glyphicon-registration-mark</code></li>
										<li><span class="glyphicon glyphicon-cloud-download"></span><code>glyphicon glyphicon-cloud-download</code></li>
										<li><span class="glyphicon glyphicon-cloud-upload"></span><code>glyphicon glyphicon-cloud-upload</code></li>
										<li><span class="glyphicon glyphicon-tree-conifer"></span><code>glyphicon glyphicon-tree-conifer</code></li>
										<li><span class="glyphicon glyphicon-tree-deciduous"></span><code>glyphicon glyphicon-tree-deciduous</code></li>
									</ul>
									<a href="http://glyphicons.com/" class="btn btn-sm btn-link">Glyphicons</a>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Font Awesome</div>
								<div class="panel-body">
									<ul id="fontawesome_list" class="icon-list clearfix">
										<li><span class="fa fa-glass"></span><code>fa fa-glass</code></li>
										<li><span class="fa fa-music"></span><code>fa fa-music</code></li>
										<li><span class="fa fa-search"></span><code>fa fa-search</code></li>
										<li><span class="fa fa-envelope-o"></span><code>fa fa-envelope-o</code></li>
										<li><span class="fa fa-heart"></span><code>fa fa-heart</code></li>
										<li><span class="fa fa-star"></span><code>fa fa-star</code></li>
										<li><span class="fa fa-star-o"></span><code>fa fa-star-o</code></li>
										<li><span class="fa fa-user"></span><code>fa fa-user</code></li>
										<li><span class="fa fa-film"></span><code>fa fa-film</code></li>
										<li><span class="fa fa-th-large"></span><code>fa fa-th-large</code></li>
										<li><span class="fa fa-th"></span><code>fa fa-th</code></li>
										<li><span class="fa fa-th-list"></span><code>fa fa-th-list</code></li>
										<li><span class="fa fa-check"></span><code>fa fa-check</code></li>
										<li><span class="fa fa-times"></span><code>fa fa-times</code></li>
										<li><span class="fa fa-search-plus"></span><code>fa fa-search-plus</code></li>
										<li><span class="fa fa-search-minus"></span><code>fa fa-search-minus</code></li>
										<li><span class="fa fa-power-off"></span><code>fa fa-power-off</code></li>
										<li><span class="fa fa-signal"></span><code>fa fa-signal</code></li>
										<li><span class="fa fa-cog"></span><code>fa fa-cog</code></li>
										<li><span class="fa fa-trash-o"></span><code>fa fa-trash-o</code></li>
										<li><span class="fa fa-home"></span><code>fa fa-home</code></li>
										<li><span class="fa fa-file-o"></span><code>fa fa-file-o</code></li>
										<li><span class="fa fa-clock-o"></span><code>fa fa-clock-o</code></li>
										<li><span class="fa fa-road"></span><code>fa fa-road</code></li>
										<li><span class="fa fa-download"></span><code>fa fa-download</code></li>
										<li><span class="fa fa-arrow-circle-o-down"></span><code>fa fa-arrow-circle-o-down</code></li>
										<li><span class="fa fa-arrow-circle-o-up"></span><code>fa fa-arrow-circle-o-up</code></li>
										<li><span class="fa fa-inbox"></span><code>fa fa-inbox</code></li>
										<li><span class="fa fa-play-circle-o"></span><code>fa fa-play-circle-o</code></li>
										<li><span class="fa fa-repeat"></span><code>fa fa-repeat</code></li>
										<li><span class="fa fa-refresh"></span><code>fa fa-refresh</code></li>
										<li><span class="fa fa-list-alt"></span><code>fa fa-list-alt</code></li>
										<li><span class="fa fa-lock"></span><code>fa fa-lock</code></li>
										<li><span class="fa fa-flag"></span><code>fa fa-flag</code></li>
										<li><span class="fa fa-headphones"></span><code>fa fa-headphones</code></li>
										<li><span class="fa fa-volume-off"></span><code>fa fa-volume-off</code></li>
										<li><span class="fa fa-volume-down"></span><code>fa fa-volume-down</code></li>
										<li><span class="fa fa-volume-up"></span><code>fa fa-volume-up</code></li>
										<li><span class="fa fa-qrcode"></span><code>fa fa-qrcode</code></li>
										<li><span class="fa fa-barcode"></span><code>fa fa-barcode</code></li>
										<li><span class="fa fa-tag"></span><code>fa fa-tag</code></li>
										<li><span class="fa fa-tags"></span><code>fa fa-tags</code></li>
										<li><span class="fa fa-book"></span><code>fa fa-book</code></li>
										<li><span class="fa fa-bookmark"></span><code>fa fa-bookmark</code></li>
										<li><span class="fa fa-print"></span><code>fa fa-print</code></li>
										<li><span class="fa fa-camera"></span><code>fa fa-camera</code></li>
										<li><span class="fa fa-font"></span><code>fa fa-font</code></li>
										<li><span class="fa fa-bold"></span><code>fa fa-bold</code></li>
										<li><span class="fa fa-italic"></span><code>fa fa-italic</code></li>
										<li><span class="fa fa-text-height"></span><code>fa fa-text-height</code></li>
										<li><span class="fa fa-text-width"></span><code>fa fa-text-width</code></li>
										<li><span class="fa fa-align-left"></span><code>fa fa-align-left</code></li>
										<li><span class="fa fa-align-center"></span><code>fa fa-align-center</code></li>
										<li><span class="fa fa-align-right"></span><code>fa fa-align-right</code></li>
										<li><span class="fa fa-align-justify"></span><code>fa fa-align-justify</code></li>
										<li><span class="fa fa-list"></span><code>fa fa-list</code></li>
										<li><span class="fa fa-outdent"></span><code>fa fa-outdent</code></li>
										<li><span class="fa fa-indent"></span><code>fa fa-indent</code></li>
										<li><span class="fa fa-video-camera"></span><code>fa fa-video-camera</code></li>
										<li><span class="fa fa-picture-o"></span><code>fa fa-picture-o</code></li>
										<li><span class="fa fa-pencil"></span><code>fa fa-pencil</code></li>
										<li><span class="fa fa-map-marker"></span><code>fa fa-map-marker</code></li>
										<li><span class="fa fa-adjust"></span><code>fa fa-adjust</code></li>
										<li><span class="fa fa-tint"></span><code>fa fa-tint</code></li>
										<li><span class="fa fa-pencil-square-o"></span><code>fa fa-pencil-square-o</code></li>
										<li><span class="fa fa-share-square-o"></span><code>fa fa-share-square-o</code></li>
										<li><span class="fa fa-check-square-o"></span><code>fa fa-check-square-o</code></li>
										<li><span class="fa fa-arrows"></span><code>fa fa-arrows</code></li>
										<li><span class="fa fa-step-backward"></span><code>fa fa-step-backward</code></li>
										<li><span class="fa fa-fast-backward"></span><code>fa fa-fast-backward</code></li>
										<li><span class="fa fa-backward"></span><code>fa fa-backward</code></li>
										<li><span class="fa fa-play"></span><code>fa fa-play</code></li>
										<li><span class="fa fa-pause"></span><code>fa fa-pause</code></li>
										<li><span class="fa fa-stop"></span><code>fa fa-stop</code></li>
										<li><span class="fa fa-forward"></span><code>fa fa-forward</code></li>
										<li><span class="fa fa-fast-forward"></span><code>fa fa-fast-forward</code></li>
										<li><span class="fa fa-step-forward"></span><code>fa fa-step-forward</code></li>
										<li><span class="fa fa-eject"></span><code>fa fa-eject</code></li>
										<li><span class="fa fa-chevron-left"></span><code>fa fa-chevron-left</code></li>
										<li><span class="fa fa-chevron-right"></span><code>fa fa-chevron-right</code></li>
										<li><span class="fa fa-plus-circle"></span><code>fa fa-plus-circle</code></li>
										<li><span class="fa fa-minus-circle"></span><code>fa fa-minus-circle</code></li>
										<li><span class="fa fa-times-circle"></span><code>fa fa-times-circle</code></li>
										<li><span class="fa fa-check-circle"></span><code>fa fa-check-circle</code></li>
										<li><span class="fa fa-question-circle"></span><code>fa fa-question-circle</code></li>
										<li><span class="fa fa-info-circle"></span><code>fa fa-info-circle</code></li>
										<li><span class="fa fa-crosshairs"></span><code>fa fa-crosshairs</code></li>
										<li><span class="fa fa-times-circle-o"></span><code>fa fa-times-circle-o</code></li>
										<li><span class="fa fa-check-circle-o"></span><code>fa fa-check-circle-o</code></li>
										<li><span class="fa fa-ban"></span><code>fa fa-ban</code></li>
										<li><span class="fa fa-arrow-left"></span><code>fa fa-arrow-left</code></li>
										<li><span class="fa fa-arrow-right"></span><code>fa fa-arrow-right</code></li>
										<li><span class="fa fa-arrow-up"></span><code>fa fa-arrow-up</code></li>
										<li><span class="fa fa-arrow-down"></span><code>fa fa-arrow-down</code></li>
										<li><span class="fa fa-share"></span><code>fa fa-share</code></li>
										<li><span class="fa fa-expand"></span><code>fa fa-expand</code></li>
										<li><span class="fa fa-compress"></span><code>fa fa-compress</code></li>
										<li><span class="fa fa-plus"></span><code>fa fa-plus</code></li>
										<li><span class="fa fa-minus"></span><code>fa fa-minus</code></li>
										<li><span class="fa fa-asterisk"></span><code>fa fa-asterisk</code></li>
										<li><span class="fa fa-exclamation-circle"></span><code>fa fa-exclamation-circle</code></li>
										<li><span class="fa fa-gift"></span><code>fa fa-gift</code></li>
										<li><span class="fa fa-leaf"></span><code>fa fa-leaf</code></li>
										<li><span class="fa fa-fire"></span><code>fa fa-fire</code></li>
										<li><span class="fa fa-eye"></span><code>fa fa-eye</code></li>
										<li><span class="fa fa-eye-slash"></span><code>fa fa-eye-slash</code></li>
										<li><span class="fa fa-exclamation-triangle"></span><code>fa fa-exclamation-triangle</code></li>
										<li><span class="fa fa-plane"></span><code>fa fa-plane</code></li>
										<li><span class="fa fa-calendar"></span><code>fa fa-calendar</code></li>
										<li><span class="fa fa-random"></span><code>fa fa-random</code></li>
										<li><span class="fa fa-comment"></span><code>fa fa-comment</code></li>
										<li><span class="fa fa-magnet"></span><code>fa fa-magnet</code></li>
										<li><span class="fa fa-chevron-up"></span><code>fa fa-chevron-up</code></li>
										<li><span class="fa fa-chevron-down"></span><code>fa fa-chevron-down</code></li>
										<li><span class="fa fa-retweet"></span><code>fa fa-retweet</code></li>
										<li><span class="fa fa-shopping-cart"></span><code>fa fa-shopping-cart</code></li>
										<li><span class="fa fa-folder"></span><code>fa fa-folder</code></li>
										<li><span class="fa fa-folder-open"></span><code>fa fa-folder-open</code></li>
										<li><span class="fa fa-arrows-v"></span><code>fa fa-arrows-v</code></li>
										<li><span class="fa fa-arrows-h"></span><code>fa fa-arrows-h</code></li>
										<li><span class="fa fa-bar-chart-o"></span><code>fa fa-bar-chart-o</code></li>
										<li><span class="fa fa-twitter-square"></span><code>fa fa-twitter-square</code></li>
										<li><span class="fa fa-facebook-square"></span><code>fa fa-facebook-square</code></li>
										<li><span class="fa fa-camera-retro"></span><code>fa fa-camera-retro</code></li>
										<li><span class="fa fa-key"></span><code>fa fa-key</code></li>
										<li><span class="fa fa-cogs"></span><code>fa fa-cogs</code></li>
										<li><span class="fa fa-comments"></span><code>fa fa-comments</code></li>
										<li><span class="fa fa-thumbs-o-up"></span><code>fa fa-thumbs-o-up</code></li>
										<li><span class="fa fa-thumbs-o-down"></span><code>fa fa-thumbs-o-down</code></li>
										<li><span class="fa fa-star-half"></span><code>fa fa-star-half</code></li>
										<li><span class="fa fa-heart-o"></span><code>fa fa-heart-o</code></li>
										<li><span class="fa fa-sign-out"></span><code>fa fa-sign-out</code></li>
										<li><span class="fa fa-linkedin-square"></span><code>fa fa-linkedin-square</code></li>
										<li><span class="fa fa-thumb-tack"></span><code>fa fa-thumb-tack</code></li>
										<li><span class="fa fa-external-link"></span><code>fa fa-external-link</code></li>
										<li><span class="fa fa-sign-in"></span><code>fa fa-sign-in</code></li>
										<li><span class="fa fa-trophy"></span><code>fa fa-trophy</code></li>
										<li><span class="fa fa-github-square"></span><code>fa fa-github-square</code></li>
										<li><span class="fa fa-upload"></span><code>fa fa-upload</code></li>
										<li><span class="fa fa-lemon-o"></span><code>fa fa-lemon-o</code></li>
										<li><span class="fa fa-phone"></span><code>fa fa-phone</code></li>
										<li><span class="fa fa-square-o"></span><code>fa fa-square-o</code></li>
										<li><span class="fa fa-bookmark-o"></span><code>fa fa-bookmark-o</code></li>
										<li><span class="fa fa-phone-square"></span><code>fa fa-phone-square</code></li>
										<li><span class="fa fa-twitter"></span><code>fa fa-twitter</code></li>
										<li><span class="fa fa-facebook"></span><code>fa fa-facebook</code></li>
										<li><span class="fa fa-github"></span><code>fa fa-github</code></li>
										<li><span class="fa fa-unlock"></span><code>fa fa-unlock</code></li>
										<li><span class="fa fa-credit-card"></span><code>fa fa-credit-card</code></li>
										<li><span class="fa fa-rss"></span><code>fa fa-rss</code></li>
										<li><span class="fa fa-hdd-o"></span><code>fa fa-hdd-o</code></li>
										<li><span class="fa fa-bullhorn"></span><code>fa fa-bullhorn</code></li>
										<li><span class="fa fa-bell"></span><code>fa fa-bell</code></li>
										<li><span class="fa fa-certificate"></span><code>fa fa-certificate</code></li>
										<li><span class="fa fa-hand-o-right"></span><code>fa fa-hand-o-right</code></li>
										<li><span class="fa fa-hand-o-left"></span><code>fa fa-hand-o-left</code></li>
										<li><span class="fa fa-hand-o-up"></span><code>fa fa-hand-o-up</code></li>
										<li><span class="fa fa-hand-o-down"></span><code>fa fa-hand-o-down</code></li>
										<li><span class="fa fa-arrow-circle-left"></span><code>fa fa-arrow-circle-left</code></li>
										<li><span class="fa fa-arrow-circle-right"></span><code>fa fa-arrow-circle-right</code></li>
										<li><span class="fa fa-arrow-circle-up"></span><code>fa fa-arrow-circle-up</code></li>
										<li><span class="fa fa-arrow-circle-down"></span><code>fa fa-arrow-circle-down</code></li>
										<li><span class="fa fa-globe"></span><code>fa fa-globe</code></li>
										<li><span class="fa fa-wrench"></span><code>fa fa-wrench</code></li>
										<li><span class="fa fa-tasks"></span><code>fa fa-tasks</code></li>
										<li><span class="fa fa-filter"></span><code>fa fa-filter</code></li>
										<li><span class="fa fa-briefcase"></span><code>fa fa-briefcase</code></li>
										<li><span class="fa fa-arrows-alt"></span><code>fa fa-arrows-alt</code></li>
										<li><span class="fa fa-users"></span><code>fa fa-users</code></li>
										<li><span class="fa fa-link"></span><code>fa fa-link</code></li>
										<li><span class="fa fa-cloud"></span><code>fa fa-cloud</code></li>
										<li><span class="fa fa-flask"></span><code>fa fa-flask</code></li>
										<li><span class="fa fa-scissors"></span><code>fa fa-scissors</code></li>
										<li><span class="fa fa-files-o"></span><code>fa fa-files-o</code></li>
										<li><span class="fa fa-paperclip"></span><code>fa fa-paperclip</code></li>
										<li><span class="fa fa-floppy-o"></span><code>fa fa-floppy-o</code></li>
										<li><span class="fa fa-square"></span><code>fa fa-square</code></li>
										<li><span class="fa fa-bars"></span><code>fa fa-bars</code></li>
										<li><span class="fa fa-list-ul"></span><code>fa fa-list-ul</code></li>
										<li><span class="fa fa-list-ol"></span><code>fa fa-list-ol</code></li>
										<li><span class="fa fa-strikethrough"></span><code>fa fa-strikethrough</code></li>
										<li><span class="fa fa-underline"></span><code>fa fa-underline</code></li>
										<li><span class="fa fa-table"></span><code>fa fa-table</code></li>
										<li><span class="fa fa-magic"></span><code>fa fa-magic</code></li>
										<li><span class="fa fa-truck"></span><code>fa fa-truck</code></li>
										<li><span class="fa fa-pinterest"></span><code>fa fa-pinterest</code></li>
										<li><span class="fa fa-pinterest-square"></span><code>fa fa-pinterest-square</code></li>
										<li><span class="fa fa-google-plus-square"></span><code>fa fa-google-plus-square</code></li>
										<li><span class="fa fa-google-plus"></span><code>fa fa-google-plus</code></li>
										<li><span class="fa fa-money"></span><code>fa fa-money</code></li>
										<li><span class="fa fa-caret-down"></span><code>fa fa-caret-down</code></li>
										<li><span class="fa fa-caret-up"></span><code>fa fa-caret-up</code></li>
										<li><span class="fa fa-caret-left"></span><code>fa fa-caret-left</code></li>
										<li><span class="fa fa-caret-right"></span><code>fa fa-caret-right</code></li>
										<li><span class="fa fa-columns"></span><code>fa fa-columns</code></li>
										<li><span class="fa fa-sort"></span><code>fa fa-sort</code></li>
										<li><span class="fa fa-sort-asc"></span><code>fa fa-sort-asc</code></li>
										<li><span class="fa fa-sort-desc"></span><code>fa fa-sort-desc</code></li>
										<li><span class="fa fa-envelope"></span><code>fa fa-envelope</code></li>
										<li><span class="fa fa-linkedin"></span><code>fa fa-linkedin</code></li>
										<li><span class="fa fa-undo"></span><code>fa fa-undo</code></li>
										<li><span class="fa fa-gavel"></span><code>fa fa-gavel</code></li>
										<li><span class="fa fa-tachometer"></span><code>fa fa-tachometer</code></li>
										<li><span class="fa fa-comment-o"></span><code>fa fa-comment-o</code></li>
										<li><span class="fa fa-comments-o"></span><code>fa fa-comments-o</code></li>
										<li><span class="fa fa-bolt"></span><code>fa fa-bolt</code></li>
										<li><span class="fa fa-sitemap"></span><code>fa fa-sitemap</code></li>
										<li><span class="fa fa-umbrella"></span><code>fa fa-umbrella</code></li>
										<li><span class="fa fa-clipboard"></span><code>fa fa-clipboard</code></li>
										<li><span class="fa fa-lightbulb-o"></span><code>fa fa-lightbulb-o</code></li>
										<li><span class="fa fa-exchange"></span><code>fa fa-exchange</code></li>
										<li><span class="fa fa-cloud-download"></span><code>fa fa-cloud-download</code></li>
										<li><span class="fa fa-cloud-upload"></span><code>fa fa-cloud-upload</code></li>
										<li><span class="fa fa-user-md"></span><code>fa fa-user-md</code></li>
										<li><span class="fa fa-stethoscope"></span><code>fa fa-stethoscope</code></li>
										<li><span class="fa fa-suitcase"></span><code>fa fa-suitcase</code></li>
										<li><span class="fa fa-bell-o"></span><code>fa fa-bell-o</code></li>
										<li><span class="fa fa-coffee"></span><code>fa fa-coffee</code></li>
										<li><span class="fa fa-cutlery"></span><code>fa fa-cutlery</code></li>
										<li><span class="fa fa-file-text-o"></span><code>fa fa-file-text-o</code></li>
										<li><span class="fa fa-building-o"></span><code>fa fa-building-o</code></li>
										<li><span class="fa fa-hospital-o"></span><code>fa fa-hospital-o</code></li>
										<li><span class="fa fa-ambulance"></span><code>fa fa-ambulance</code></li>
										<li><span class="fa fa-medkit"></span><code>fa fa-medkit</code></li>
										<li><span class="fa fa-fighter-jet"></span><code>fa fa-fighter-jet</code></li>
										<li><span class="fa fa-beer"></span><code>fa fa-beer</code></li>
										<li><span class="fa fa-h-square"></span><code>fa fa-h-square</code></li>
										<li><span class="fa fa-plus-square"></span><code>fa fa-plus-square</code></li>
										<li><span class="fa fa-angle-double-left"></span><code>fa fa-angle-double-left</code></li>
										<li><span class="fa fa-angle-double-right"></span><code>fa fa-angle-double-right</code></li>
										<li><span class="fa fa-angle-double-up"></span><code>fa fa-angle-double-up</code></li>
										<li><span class="fa fa-angle-double-down"></span><code>fa fa-angle-double-down</code></li>
										<li><span class="fa fa-angle-left"></span><code>fa fa-angle-left</code></li>
										<li><span class="fa fa-angle-right"></span><code>fa fa-angle-right</code></li>
										<li><span class="fa fa-angle-up"></span><code>fa fa-angle-up</code></li>
										<li><span class="fa fa-angle-down"></span><code>fa fa-angle-down</code></li>
										<li><span class="fa fa-desktop"></span><code>fa fa-desktop</code></li>
										<li><span class="fa fa-laptop"></span><code>fa fa-laptop</code></li>
										<li><span class="fa fa-tablet"></span><code>fa fa-tablet</code></li>
										<li><span class="fa fa-mobile"></span><code>fa fa-mobile</code></li>
										<li><span class="fa fa-circle-o"></span><code>fa fa-circle-o</code></li>
										<li><span class="fa fa-quote-left"></span><code>fa fa-quote-left</code></li>
										<li><span class="fa fa-quote-right"></span><code>fa fa-quote-right</code></li>
										<li><span class="fa fa-spinner"></span><code>fa fa-spinner</code></li>
										<li><span class="fa fa-circle"></span><code>fa fa-circle</code></li>
										<li><span class="fa fa-reply"></span><code>fa fa-reply</code></li>
										<li><span class="fa fa-github-alt"></span><code>fa fa-github-alt</code></li>
										<li><span class="fa fa-folder-o"></span><code>fa fa-folder-o</code></li>
										<li><span class="fa fa-folder-open-o"></span><code>fa fa-folder-open-o</code></li>
										<li><span class="fa fa-smile-o"></span><code>fa fa-smile-o</code></li>
										<li><span class="fa fa-frown-o"></span><code>fa fa-frown-o</code></li>
										<li><span class="fa fa-meh-o"></span><code>fa fa-meh-o</code></li>
										<li><span class="fa fa-gamepad"></span><code>fa fa-gamepad</code></li>
										<li><span class="fa fa-keyboard-o"></span><code>fa fa-keyboard-o</code></li>
										<li><span class="fa fa-flag-o"></span><code>fa fa-flag-o</code></li>
										<li><span class="fa fa-flag-checkered"></span><code>fa fa-flag-checkered</code></li>
										<li><span class="fa fa-terminal"></span><code>fa fa-terminal</code></li>
										<li><span class="fa fa-code"></span><code>fa fa-code</code></li>
										<li><span class="fa fa-reply-all"></span><code>fa fa-reply-all</code></li>
										<li><span class="fa fa-mail-reply-all"></span><code>fa fa-mail-reply-all</code></li>
										<li><span class="fa fa-star-half-o"></span><code>fa fa-star-half-o</code></li>
										<li><span class="fa fa-location-arrow"></span><code>fa fa-location-arrow</code></li>
										<li><span class="fa fa-crop"></span><code>fa fa-crop</code></li>
										<li><span class="fa fa-code-fork"></span><code>fa fa-code-fork</code></li>
										<li><span class="fa fa-chain-broken"></span><code>fa fa-chain-broken</code></li>
										<li><span class="fa fa-question"></span><code>fa fa-question</code></li>
										<li><span class="fa fa-info"></span><code>fa fa-info</code></li>
										<li><span class="fa fa-exclamation"></span><code>fa fa-exclamation</code></li>
										<li><span class="fa fa-superscript"></span><code>fa fa-superscript</code></li>
										<li><span class="fa fa-subscript"></span><code>fa fa-subscript</code></li>
										<li><span class="fa fa-eraser"></span><code>fa fa-eraser</code></li>
										<li><span class="fa fa-puzzle-piece"></span><code>fa fa-puzzle-piece</code></li>
										<li><span class="fa fa-microphone"></span><code>fa fa-microphone</code></li>
										<li><span class="fa fa-microphone-slash"></span><code>fa fa-microphone-slash</code></li>
										<li><span class="fa fa-shield"></span><code>fa fa-shield</code></li>
										<li><span class="fa fa-calendar-o"></span><code>fa fa-calendar-o</code></li>
										<li><span class="fa fa-fire-extinguisher"></span><code>fa fa-fire-extinguisher</code></li>
										<li><span class="fa fa-rocket"></span><code>fa fa-rocket</code></li>
										<li><span class="fa fa-maxcdn"></span><code>fa fa-maxcdn</code></li>
										<li><span class="fa fa-chevron-circle-left"></span><code>fa fa-chevron-circle-left</code></li>
										<li><span class="fa fa-chevron-circle-right"></span><code>fa fa-chevron-circle-right</code></li>
										<li><span class="fa fa-chevron-circle-up"></span><code>fa fa-chevron-circle-up</code></li>
										<li><span class="fa fa-chevron-circle-down"></span><code>fa fa-chevron-circle-down</code></li>
										<li><span class="fa fa-html5"></span><code>fa fa-html5</code></li>
										<li><span class="fa fa-css3"></span><code>fa fa-css3</code></li>
										<li><span class="fa fa-anchor"></span><code>fa fa-anchor</code></li>
										<li><span class="fa fa-unlock-alt"></span><code>fa fa-unlock-alt</code></li>
										<li><span class="fa fa-bullseye"></span><code>fa fa-bullseye</code></li>
										<li><span class="fa fa-ellipsis-h"></span><code>fa fa-ellipsis-h</code></li>
										<li><span class="fa fa-ellipsis-v"></span><code>fa fa-ellipsis-v</code></li>
										<li><span class="fa fa-rss-square"></span><code>fa fa-rss-square</code></li>
										<li><span class="fa fa-play-circle"></span><code>fa fa-play-circle</code></li>
										<li><span class="fa fa-ticket"></span><code>fa fa-ticket</code></li>
										<li><span class="fa fa-minus-square"></span><code>fa fa-minus-square</code></li>
										<li><span class="fa fa-minus-square-o"></span><code>fa fa-minus-square-o</code></li>
										<li><span class="fa fa-level-up"></span><code>fa fa-level-up</code></li>
										<li><span class="fa fa-level-down"></span><code>fa fa-level-down</code></li>
										<li><span class="fa fa-check-square"></span><code>fa fa-check-square</code></li>
										<li><span class="fa fa-pencil-square"></span><code>fa fa-pencil-square</code></li>
										<li><span class="fa fa-external-link-square"></span><code>fa fa-external-link-square</code></li>
										<li><span class="fa fa-share-square"></span><code>fa fa-share-square</code></li>
										<li><span class="fa fa-compass"></span><code>fa fa-compass</code></li>
										<li><span class="fa fa-caret-square-o-down"></span><code>fa fa-caret-square-o-down</code></li>
										<li><span class="fa fa-caret-square-o-up"></span><code>fa fa-caret-square-o-up</code></li>
										<li><span class="fa fa-caret-square-o-right"></span><code>fa fa-caret-square-o-right</code></li>
										<li><span class="fa fa-eur"></span><code>fa fa-eur</code></li>
										<li><span class="fa fa-gbp"></span><code>fa fa-gbp</code></li>
										<li><span class="fa fa-usd"></span><code>fa fa-usd</code></li>
										<li><span class="fa fa-inr"></span><code>fa fa-inr</code></li>
										<li><span class="fa fa-jpy"></span><code>fa fa-jpy</code></li>
										<li><span class="fa fa-rub"></span><code>fa fa-rub</code></li>
										<li><span class="fa fa-krw"></span><code>fa fa-krw</code></li>
										<li><span class="fa fa-btc"></span><code>fa fa-btc</code></li>
										<li><span class="fa fa-file"></span><code>fa fa-file</code></li>
										<li><span class="fa fa-file-text"></span><code>fa fa-file-text</code></li>
										<li><span class="fa fa-sort-alpha-asc"></span><code>fa fa-sort-alpha-asc</code></li>
										<li><span class="fa fa-sort-alpha-desc"></span><code>fa fa-sort-alpha-desc</code></li>
										<li><span class="fa fa-sort-amount-asc"></span><code>fa fa-sort-amount-asc</code></li>
										<li><span class="fa fa-sort-amount-desc"></span><code>fa fa-sort-amount-desc</code></li>
										<li><span class="fa fa-sort-numeric-asc"></span><code>fa fa-sort-numeric-asc</code></li>
										<li><span class="fa fa-sort-numeric-desc"></span><code>fa fa-sort-numeric-desc</code></li>
										<li><span class="fa fa-thumbs-up"></span><code>fa fa-thumbs-up</code></li>
										<li><span class="fa fa-thumbs-down"></span><code>fa fa-thumbs-down</code></li>
										<li><span class="fa fa-youtube-square"></span><code>fa fa-youtube-square</code></li>
										<li><span class="fa fa-youtube"></span><code>fa fa-youtube</code></li>
										<li><span class="fa fa-xing"></span><code>fa fa-xing</code></li>
										<li><span class="fa fa-xing-square"></span><code>fa fa-xing-square</code></li>
										<li><span class="fa fa-youtube-play"></span><code>fa fa-youtube-play</code></li>
										<li><span class="fa fa-dropbox"></span><code>fa fa-dropbox</code></li>
										<li><span class="fa fa-stack-overflow"></span><code>fa fa-stack-overflow</code></li>
										<li><span class="fa fa-instagram"></span><code>fa fa-instagram</code></li>
										<li><span class="fa fa-flickr"></span><code>fa fa-flickr</code></li>
										<li><span class="fa fa-adn"></span><code>fa fa-adn</code></li>
										<li><span class="fa fa-bitbucket"></span><code>fa fa-bitbucket</code></li>
										<li><span class="fa fa-bitbucket-square"></span><code>fa fa-bitbucket-square</code></li>
										<li><span class="fa fa-tumblr"></span><code>fa fa-tumblr</code></li>
										<li><span class="fa fa-tumblr-square"></span><code>fa fa-tumblr-square</code></li>
										<li><span class="fa fa-long-arrow-down"></span><code>fa fa-long-arrow-down</code></li>
										<li><span class="fa fa-long-arrow-up"></span><code>fa fa-long-arrow-up</code></li>
										<li><span class="fa fa-long-arrow-left"></span><code>fa fa-long-arrow-left</code></li>
										<li><span class="fa fa-long-arrow-right"></span><code>fa fa-long-arrow-right</code></li>
										<li><span class="fa fa-apple"></span><code>fa fa-apple</code></li>
										<li><span class="fa fa-windows"></span><code>fa fa-windows</code></li>
										<li><span class="fa fa-android"></span><code>fa fa-android</code></li>
										<li><span class="fa fa-linux"></span><code>fa fa-linux</code></li>
										<li><span class="fa fa-dribbble"></span><code>fa fa-dribbble</code></li>
										<li><span class="fa fa-skype"></span><code>fa fa-skype</code></li>
										<li><span class="fa fa-foursquare"></span><code>fa fa-foursquare</code></li>
										<li><span class="fa fa-trello"></span><code>fa fa-trello</code></li>
										<li><span class="fa fa-female"></span><code>fa fa-female</code></li>
										<li><span class="fa fa-male"></span><code>fa fa-male</code></li>
										<li><span class="fa fa-gittip"></span><code>fa fa-gittip</code></li>
										<li><span class="fa fa-sun-o"></span><code>fa fa-sun-o</code></li>
										<li><span class="fa fa-moon-o"></span><code>fa fa-moon-o</code></li>
										<li><span class="fa fa-archive"></span><code>fa fa-archive</code></li>
										<li><span class="fa fa-bug"></span><code>fa fa-bug</code></li>
										<li><span class="fa fa-vk"></span><code>fa fa-vk</code></li>
										<li><span class="fa fa-weibo"></span><code>fa fa-weibo</code></li>
										<li><span class="fa fa-renren"></span><code>fa fa-renren</code></li>
										<li><span class="fa fa-pagelines"></span><code>fa fa-pagelines</code></li>
										<li><span class="fa fa-stack-exchange"></span><code>fa fa-stack-exchange</code></li>
										<li><span class="fa fa-arrow-circle-o-right"></span><code>fa fa-arrow-circle-o-right</code></li>
										<li><span class="fa fa-arrow-circle-o-left"></span><code>fa fa-arrow-circle-o-left</code></li>
										<li><span class="fa fa-caret-square-o-left"></span><code>fa fa-caret-square-o-left</code></li>
										<li><span class="fa fa-dot-circle-o"></span><code>fa fa-dot-circle-o</code></li>
										<li><span class="fa fa-wheelchair"></span><code>fa fa-wheelchair</code></li>
										<li><span class="fa fa-vimeo-square"></span><code>fa fa-vimeo-square</code></li>
										<li><span class="fa fa-try"></span><code>fa fa-try</code></li>
										<li><span class="fa fa-plus-square-o"></span><code>fa fa-plus-square-o</code></li>
									</ul>
									<a href="http://fortawesome.github.io/Font-Awesome/" class="btn btn-sm btn-link">Font Awesome</a>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">IonIcons</div>
								<div class="panel-body">
									<ul id="ionicons_list" class="icon-list icon-list-a clearfix">
										<li><span class="ion-loading-a"></span><code>ion-loading-a</code></li>
										<li><span class="ion-alert"></span><code>ion-alert</code></li>
										<li><span class="ion-alert-circled"></span><code>ion-alert-circled</code></li>
										<li><span class="ion-android-add"></span><code>ion-android-add</code></li>
										<li><span class="ion-android-add-contact"></span><code>ion-android-add-contact</code></li>
										<li><span class="ion-android-alarm"></span><code>ion-android-alarm</code></li>
										<li><span class="ion-android-archive"></span><code>ion-android-archive</code></li>
										<li><span class="ion-android-arrow-back"></span><code>ion-android-arrow-back</code></li>
										<li><span class="ion-android-arrow-down-left"></span><code>ion-android-arrow-down-left</code></li>
										<li><span class="ion-android-arrow-down-right"></span><code>ion-android-arrow-down-right</code></li>
										<li><span class="ion-android-arrow-up-left"></span><code>ion-android-arrow-up-left</code></li>
										<li><span class="ion-android-arrow-up-right"></span><code>ion-android-arrow-up-right</code></li>
										<li><span class="ion-android-battery"></span><code>ion-android-battery</code></li>
										<li><span class="ion-android-book"></span><code>ion-android-book</code></li>
										<li><span class="ion-android-calendar"></span><code>ion-android-calendar</code></li>
										<li><span class="ion-android-call"></span><code>ion-android-call</code></li>
										<li><span class="ion-android-camera"></span><code>ion-android-camera</code></li>
										<li><span class="ion-android-chat"></span><code>ion-android-chat</code></li>
										<li><span class="ion-android-checkmark"></span><code>ion-android-checkmark</code></li>
										<li><span class="ion-android-clock"></span><code>ion-android-clock</code></li>
										<li><span class="ion-android-close"></span><code>ion-android-close</code></li>
										<li><span class="ion-android-contact"></span><code>ion-android-contact</code></li>
										<li><span class="ion-android-contacts"></span><code>ion-android-contacts</code></li>
										<li><span class="ion-android-data"></span><code>ion-android-data</code></li>
										<li><span class="ion-android-developer"></span><code>ion-android-developer</code></li>
										<li><span class="ion-android-display"></span><code>ion-android-display</code></li>
										<li><span class="ion-android-download"></span><code>ion-android-download</code></li>
										<li><span class="ion-android-dropdown"></span><code>ion-android-dropdown</code></li>
										<li><span class="ion-android-earth"></span><code>ion-android-earth</code></li>
										<li><span class="ion-android-folder"></span><code>ion-android-folder</code></li>
										<li><span class="ion-android-forums"></span><code>ion-android-forums</code></li>
										<li><span class="ion-android-friends"></span><code>ion-android-friends</code></li>
										<li><span class="ion-android-hand"></span><code>ion-android-hand</code></li>
										<li><span class="ion-android-image"></span><code>ion-android-image</code></li>
										<li><span class="ion-android-inbox"></span><code>ion-android-inbox</code></li>
										<li><span class="ion-android-information"></span><code>ion-android-information</code></li>
										<li><span class="ion-android-keypad"></span><code>ion-android-keypad</code></li>
										<li><span class="ion-android-lightbulb"></span><code>ion-android-lightbulb</code></li>
										<li><span class="ion-android-locate"></span><code>ion-android-locate</code></li>
										<li><span class="ion-android-location"></span><code>ion-android-location</code></li>
										<li><span class="ion-android-mail"></span><code>ion-android-mail</code></li>
										<li><span class="ion-android-microphone"></span><code>ion-android-microphone</code></li>
										<li><span class="ion-android-mixer"></span><code>ion-android-mixer</code></li>
										<li><span class="ion-android-more"></span><code>ion-android-more</code></li>
										<li><span class="ion-android-note"></span><code>ion-android-note</code></li>
										<li><span class="ion-android-playstore"></span><code>ion-android-playstore</code></li>
										<li><span class="ion-android-printer"></span><code>ion-android-printer</code></li>
										<li><span class="ion-android-promotion"></span><code>ion-android-promotion</code></li>
										<li><span class="ion-android-reminder"></span><code>ion-android-reminder</code></li>
										<li><span class="ion-android-remove"></span><code>ion-android-remove</code></li>
										<li><span class="ion-android-search"></span><code>ion-android-search</code></li>
										<li><span class="ion-android-send"></span><code>ion-android-send</code></li>
										<li><span class="ion-android-settings"></span><code>ion-android-settings</code></li>
										<li><span class="ion-android-share"></span><code>ion-android-share</code></li>
										<li><span class="ion-android-social"></span><code>ion-android-social</code></li>
										<li><span class="ion-android-social-user"></span><code>ion-android-social-user</code></li>
										<li><span class="ion-android-sort"></span><code>ion-android-sort</code></li>
										<li><span class="ion-android-star"></span><code>ion-android-star</code></li>
										<li><span class="ion-android-stopwatch"></span><code>ion-android-stopwatch</code></li>
										<li><span class="ion-android-storage"></span><code>ion-android-storage</code></li>
										<li><span class="ion-android-system-back"></span><code>ion-android-system-back</code></li>
										<li><span class="ion-android-system-home"></span><code>ion-android-system-home</code></li>
										<li><span class="ion-android-system-windows"></span><code>ion-android-system-windows</code></li>
										<li><span class="ion-android-timer"></span><code>ion-android-timer</code></li>
										<li><span class="ion-android-trash"></span><code>ion-android-trash</code></li>
										<li><span class="ion-android-volume"></span><code>ion-android-volume</code></li>
										<li><span class="ion-android-wifi"></span><code>ion-android-wifi</code></li>
										<li><span class="ion-archive"></span><code>ion-archive</code></li>
										<li><span class="ion-arrow-down-a"></span><code>ion-arrow-down-a</code></li>
										<li><span class="ion-arrow-down-b"></span><code>ion-arrow-down-b</code></li>
										<li><span class="ion-arrow-down-c"></span><code>ion-arrow-down-c</code></li>
										<li><span class="ion-arrow-expand"></span><code>ion-arrow-expand</code></li>
										<li><span class="ion-arrow-graph-down-left"></span><code>ion-arrow-graph-down-left</code></li>
										<li><span class="ion-arrow-graph-down-right"></span><code>ion-arrow-graph-down-right</code></li>
										<li><span class="ion-arrow-graph-up-left"></span><code>ion-arrow-graph-up-left</code></li>
										<li><span class="ion-arrow-graph-up-right"></span><code>ion-arrow-graph-up-right</code></li>
										<li><span class="ion-arrow-left-a"></span><code>ion-arrow-left-a</code></li>
										<li><span class="ion-arrow-left-b"></span><code>ion-arrow-left-b</code></li>
										<li><span class="ion-arrow-left-c"></span><code>ion-arrow-left-c</code></li>
										<li><span class="ion-arrow-move"></span><code>ion-arrow-move</code></li>
										<li><span class="ion-arrow-resize"></span><code>ion-arrow-resize</code></li>
										<li><span class="ion-arrow-return-left"></span><code>ion-arrow-return-left</code></li>
										<li><span class="ion-arrow-return-right"></span><code>ion-arrow-return-right</code></li>
										<li><span class="ion-arrow-right-a"></span><code>ion-arrow-right-a</code></li>
										<li><span class="ion-arrow-right-b"></span><code>ion-arrow-right-b</code></li>
										<li><span class="ion-arrow-right-c"></span><code>ion-arrow-right-c</code></li>
										<li><span class="ion-arrow-shrink"></span><code>ion-arrow-shrink</code></li>
										<li><span class="ion-arrow-swap"></span><code>ion-arrow-swap</code></li>
										<li><span class="ion-arrow-up-a"></span><code>ion-arrow-up-a</code></li>
										<li><span class="ion-arrow-up-b"></span><code>ion-arrow-up-b</code></li>
										<li><span class="ion-arrow-up-c"></span><code>ion-arrow-up-c</code></li>
										<li><span class="ion-at"></span><code>ion-at</code></li>
										<li><span class="ion-bag"></span><code>ion-bag</code></li>
										<li><span class="ion-battery-charging"></span><code>ion-battery-charging</code></li>
										<li><span class="ion-battery-empty"></span><code>ion-battery-empty</code></li>
										<li><span class="ion-battery-full"></span><code>ion-battery-full</code></li>
										<li><span class="ion-battery-half"></span><code>ion-battery-half</code></li>
										<li><span class="ion-battery-low"></span><code>ion-battery-low</code></li>
										<li><span class="ion-beaker"></span><code>ion-beaker</code></li>
										<li><span class="ion-beer"></span><code>ion-beer</code></li>
										<li><span class="ion-bluetooth"></span><code>ion-bluetooth</code></li>
										<li><span class="ion-bookmark"></span><code>ion-bookmark</code></li>
										<li><span class="ion-briefcase"></span><code>ion-briefcase</code></li>
										<li><span class="ion-bug"></span><code>ion-bug</code></li>
										<li><span class="ion-calculator"></span><code>ion-calculator</code></li>
										<li><span class="ion-calendar"></span><code>ion-calendar</code></li>
										<li><span class="ion-camera"></span><code>ion-camera</code></li>
										<li><span class="ion-card"></span><code>ion-card</code></li>
										<li><span class="ion-chatbox"></span><code>ion-chatbox</code></li>
										<li><span class="ion-chatbox-working"></span><code>ion-chatbox-working</code></li>
										<li><span class="ion-chatboxes"></span><code>ion-chatboxes</code></li>
										<li><span class="ion-chatbubble"></span><code>ion-chatbubble</code></li>
										<li><span class="ion-chatbubble-working"></span><code>ion-chatbubble-working</code></li>
										<li><span class="ion-chatbubbles"></span><code>ion-chatbubbles</code></li>
										<li><span class="ion-checkmark"></span><code>ion-checkmark</code></li>
										<li><span class="ion-checkmark-circled"></span><code>ion-checkmark-circled</code></li>
										<li><span class="ion-checkmark-round"></span><code>ion-checkmark-round</code></li>
										<li><span class="ion-chevron-down"></span><code>ion-chevron-down</code></li>
										<li><span class="ion-chevron-left"></span><code>ion-chevron-left</code></li>
										<li><span class="ion-chevron-right"></span><code>ion-chevron-right</code></li>
										<li><span class="ion-chevron-up"></span><code>ion-chevron-up</code></li>
										<li><span class="ion-clipboard"></span><code>ion-clipboard</code></li>
										<li><span class="ion-clock"></span><code>ion-clock</code></li>
										<li><span class="ion-close"></span><code>ion-close</code></li>
										<li><span class="ion-close-circled"></span><code>ion-close-circled</code></li>
										<li><span class="ion-close-round"></span><code>ion-close-round</code></li>
										<li><span class="ion-cloud"></span><code>ion-cloud</code></li>
										<li><span class="ion-code"></span><code>ion-code</code></li>
										<li><span class="ion-code-download"></span><code>ion-code-download</code></li>
										<li><span class="ion-code-working"></span><code>ion-code-working</code></li>
										<li><span class="ion-coffee"></span><code>ion-coffee</code></li>
										<li><span class="ion-compass"></span><code>ion-compass</code></li>
										<li><span class="ion-compose"></span><code>ion-compose</code></li>
										<li><span class="ion-connection-bars"></span><code>ion-connection-bars</code></li>
										<li><span class="ion-contrast"></span><code>ion-contrast</code></li>
										<li><span class="ion-disc"></span><code>ion-disc</code></li>
										<li><span class="ion-document"></span><code>ion-document</code></li>
										<li><span class="ion-document-text"></span><code>ion-document-text</code></li>
										<li><span class="ion-drag"></span><code>ion-drag</code></li>
										<li><span class="ion-earth"></span><code>ion-earth</code></li>
										<li><span class="ion-edit"></span><code>ion-edit</code></li>
										<li><span class="ion-egg"></span><code>ion-egg</code></li>
										<li><span class="ion-eject"></span><code>ion-eject</code></li>
										<li><span class="ion-email"></span><code>ion-email</code></li>
										<li><span class="ion-eye"></span><code>ion-eye</code></li>
										<li><span class="ion-eye-disabled"></span><code>ion-eye-disabled</code></li>
										<li><span class="ion-female"></span><code>ion-female</code></li>
										<li><span class="ion-filing"></span><code>ion-filing</code></li>
										<li><span class="ion-film-marker"></span><code>ion-film-marker</code></li>
										<li><span class="ion-flag"></span><code>ion-flag</code></li>
										<li><span class="ion-flash"></span><code>ion-flash</code></li>
										<li><span class="ion-flash-off"></span><code>ion-flash-off</code></li>
										<li><span class="ion-flask"></span><code>ion-flask</code></li>
										<li><span class="ion-folder"></span><code>ion-folder</code></li>
										<li><span class="ion-fork"></span><code>ion-fork</code></li>
										<li><span class="ion-fork-repo"></span><code>ion-fork-repo</code></li>
										<li><span class="ion-forward"></span><code>ion-forward</code></li>
										<li><span class="ion-game-controller-a"></span><code>ion-game-controller-a</code></li>
										<li><span class="ion-game-controller-b"></span><code>ion-game-controller-b</code></li>
										<li><span class="ion-gear-a"></span><code>ion-gear-a</code></li>
										<li><span class="ion-gear-b"></span><code>ion-gear-b</code></li>
										<li><span class="ion-grid"></span><code>ion-grid</code></li>
										<li><span class="ion-hammer"></span><code>ion-hammer</code></li>
										<li><span class="ion-headphone"></span><code>ion-headphone</code></li>
										<li><span class="ion-heart"></span><code>ion-heart</code></li>
										<li><span class="ion-help"></span><code>ion-help</code></li>
										<li><span class="ion-help-buoy"></span><code>ion-help-buoy</code></li>
										<li><span class="ion-help-circled"></span><code>ion-help-circled</code></li>
										<li><span class="ion-home"></span><code>ion-home</code></li>
										<li><span class="ion-icecream"></span><code>ion-icecream</code></li>
										<li><span class="ion-icon-social-google-plus"></span><code>ion-icon-social-google-plus</code></li>
										<li><span class="ion-icon-social-google-plus-outline"></span><code>ion-icon-social-google-plus-outline</code></li>
										<li><span class="ion-image"></span><code>ion-image</code></li>
										<li><span class="ion-images"></span><code>ion-images</code></li>
										<li><span class="ion-information"></span><code>ion-information</code></li>
										<li><span class="ion-information-circled"></span><code>ion-information-circled</code></li>
										<li><span class="ion-ionic"></span><code>ion-ionic</code></li>
										<li><span class="ion-ios7-alarm"></span><code>ion-ios7-alarm</code></li>
										<li><span class="ion-ios7-alarm-outline"></span><code>ion-ios7-alarm-outline</code></li>
										<li><span class="ion-ios7-albums"></span><code>ion-ios7-albums</code></li>
										<li><span class="ion-ios7-albums-outline"></span><code>ion-ios7-albums-outline</code></li>
										<li><span class="ion-ios7-arrow-back"></span><code>ion-ios7-arrow-back</code></li>
										<li><span class="ion-ios7-arrow-down"></span><code>ion-ios7-arrow-down</code></li>
										<li><span class="ion-ios7-arrow-forward"></span><code>ion-ios7-arrow-forward</code></li>
										<li><span class="ion-ios7-arrow-left"></span><code>ion-ios7-arrow-left</code></li>
										<li><span class="ion-ios7-arrow-right"></span><code>ion-ios7-arrow-right</code></li>
										<li><span class="ion-ios7-arrow-thin-down"></span><code>ion-ios7-arrow-thin-down</code></li>
										<li><span class="ion-ios7-arrow-thin-left"></span><code>ion-ios7-arrow-thin-left</code></li>
										<li><span class="ion-ios7-arrow-thin-right"></span><code>ion-ios7-arrow-thin-right</code></li>
										<li><span class="ion-ios7-arrow-thin-up"></span><code>ion-ios7-arrow-thin-up</code></li>
										<li><span class="ion-ios7-arrow-up"></span><code>ion-ios7-arrow-up</code></li>
										<li><span class="ion-ios7-at"></span><code>ion-ios7-at</code></li>
										<li><span class="ion-ios7-at-outline"></span><code>ion-ios7-at-outline</code></li>
										<li><span class="ion-ios7-bell"></span><code>ion-ios7-bell</code></li>
										<li><span class="ion-ios7-bell-outline"></span><code>ion-ios7-bell-outline</code></li>
										<li><span class="ion-ios7-bolt"></span><code>ion-ios7-bolt</code></li>
										<li><span class="ion-ios7-bolt-outline"></span><code>ion-ios7-bolt-outline</code></li>
										<li><span class="ion-ios7-bookmarks"></span><code>ion-ios7-bookmarks</code></li>
										<li><span class="ion-ios7-bookmarks-outline"></span><code>ion-ios7-bookmarks-outline</code></li>
										<li><span class="ion-ios7-box"></span><code>ion-ios7-box</code></li>
										<li><span class="ion-ios7-box-outline"></span><code>ion-ios7-box-outline</code></li>
										<li><span class="ion-ios7-briefcase"></span><code>ion-ios7-briefcase</code></li>
										<li><span class="ion-ios7-briefcase-outline"></span><code>ion-ios7-briefcase-outline</code></li>
										<li><span class="ion-ios7-browsers"></span><code>ion-ios7-browsers</code></li>
										<li><span class="ion-ios7-browsers-outline"></span><code>ion-ios7-browsers-outline</code></li>
										<li><span class="ion-ios7-calculator"></span><code>ion-ios7-calculator</code></li>
										<li><span class="ion-ios7-calculator-outline"></span><code>ion-ios7-calculator-outline</code></li>
										<li><span class="ion-ios7-calendar"></span><code>ion-ios7-calendar</code></li>
										<li><span class="ion-ios7-calendar-outline"></span><code>ion-ios7-calendar-outline</code></li>
										<li><span class="ion-ios7-camera"></span><code>ion-ios7-camera</code></li>
										<li><span class="ion-ios7-camera-outline"></span><code>ion-ios7-camera-outline</code></li>
										<li><span class="ion-ios7-cart"></span><code>ion-ios7-cart</code></li>
										<li><span class="ion-ios7-cart-outline"></span><code>ion-ios7-cart-outline</code></li>
										<li><span class="ion-ios7-chatboxes"></span><code>ion-ios7-chatboxes</code></li>
										<li><span class="ion-ios7-chatboxes-outline"></span><code>ion-ios7-chatboxes-outline</code></li>
										<li><span class="ion-ios7-chatbubble"></span><code>ion-ios7-chatbubble</code></li>
										<li><span class="ion-ios7-chatbubble-outline"></span><code>ion-ios7-chatbubble-outline</code></li>
										<li><span class="ion-ios7-checkmark"></span><code>ion-ios7-checkmark</code></li>
										<li><span class="ion-ios7-checkmark-empty"></span><code>ion-ios7-checkmark-empty</code></li>
										<li><span class="ion-ios7-checkmark-outline"></span><code>ion-ios7-checkmark-outline</code></li>
										<li><span class="ion-ios7-circle-filled"></span><code>ion-ios7-circle-filled</code></li>
										<li><span class="ion-ios7-circle-outline"></span><code>ion-ios7-circle-outline</code></li>
										<li><span class="ion-ios7-clock"></span><code>ion-ios7-clock</code></li>
										<li><span class="ion-ios7-clock-outline"></span><code>ion-ios7-clock-outline</code></li>
										<li><span class="ion-ios7-close"></span><code>ion-ios7-close</code></li>
										<li><span class="ion-ios7-close-empty"></span><code>ion-ios7-close-empty</code></li>
										<li><span class="ion-ios7-close-outline"></span><code>ion-ios7-close-outline</code></li>
										<li><span class="ion-ios7-cloud"></span><code>ion-ios7-cloud</code></li>
										<li><span class="ion-ios7-cloud-download"></span><code>ion-ios7-cloud-download</code></li>
										<li><span class="ion-ios7-cloud-download-outline"></span><code>ion-ios7-cloud-download-outline</code></li>
										<li><span class="ion-ios7-cloud-outline"></span><code>ion-ios7-cloud-outline</code></li>
										<li><span class="ion-ios7-cloud-upload"></span><code>ion-ios7-cloud-upload</code></li>
										<li><span class="ion-ios7-cloud-upload-outline"></span><code>ion-ios7-cloud-upload-outline</code></li>
										<li><span class="ion-ios7-cloudy"></span><code>ion-ios7-cloudy</code></li>
										<li><span class="ion-ios7-cloudy-night"></span><code>ion-ios7-cloudy-night</code></li>
										<li><span class="ion-ios7-cloudy-night-outline"></span><code>ion-ios7-cloudy-night-outline</code></li>
										<li><span class="ion-ios7-cloudy-outline"></span><code>ion-ios7-cloudy-outline</code></li>
										<li><span class="ion-ios7-cog"></span><code>ion-ios7-cog</code></li>
										<li><span class="ion-ios7-cog-outline"></span><code>ion-ios7-cog-outline</code></li>
										<li><span class="ion-ios7-compose"></span><code>ion-ios7-compose</code></li>
										<li><span class="ion-ios7-compose-outline"></span><code>ion-ios7-compose-outline</code></li>
										<li><span class="ion-ios7-contact"></span><code>ion-ios7-contact</code></li>
										<li><span class="ion-ios7-contact-outline"></span><code>ion-ios7-contact-outline</code></li>
										<li><span class="ion-ios7-copy"></span><code>ion-ios7-copy</code></li>
										<li><span class="ion-ios7-copy-outline"></span><code>ion-ios7-copy-outline</code></li>
										<li><span class="ion-ios7-download"></span><code>ion-ios7-download</code></li>
										<li><span class="ion-ios7-download-outline"></span><code>ion-ios7-download-outline</code></li>
										<li><span class="ion-ios7-drag"></span><code>ion-ios7-drag</code></li>
										<li><span class="ion-ios7-email"></span><code>ion-ios7-email</code></li>
										<li><span class="ion-ios7-email-outline"></span><code>ion-ios7-email-outline</code></li>
										<li><span class="ion-ios7-eye"></span><code>ion-ios7-eye</code></li>
										<li><span class="ion-ios7-eye-outline"></span><code>ion-ios7-eye-outline</code></li>
										<li><span class="ion-ios7-fastforward"></span><code>ion-ios7-fastforward</code></li>
										<li><span class="ion-ios7-fastforward-outline"></span><code>ion-ios7-fastforward-outline</code></li>
										<li><span class="ion-ios7-filing"></span><code>ion-ios7-filing</code></li>
										<li><span class="ion-ios7-filing-outline"></span><code>ion-ios7-filing-outline</code></li>
										<li><span class="ion-ios7-film"></span><code>ion-ios7-film</code></li>
										<li><span class="ion-ios7-film-outline"></span><code>ion-ios7-film-outline</code></li>
										<li><span class="ion-ios7-flag"></span><code>ion-ios7-flag</code></li>
										<li><span class="ion-ios7-flag-outline"></span><code>ion-ios7-flag-outline</code></li>
										<li><span class="ion-ios7-folder"></span><code>ion-ios7-folder</code></li>
										<li><span class="ion-ios7-folder-outline"></span><code>ion-ios7-folder-outline</code></li>
										<li><span class="ion-ios7-gear"></span><code>ion-ios7-gear</code></li>
										<li><span class="ion-ios7-gear-outline"></span><code>ion-ios7-gear-outline</code></li>
										<li><span class="ion-ios7-glasses"></span><code>ion-ios7-glasses</code></li>
										<li><span class="ion-ios7-glasses-outline"></span><code>ion-ios7-glasses-outline</code></li>
										<li><span class="ion-ios7-heart"></span><code>ion-ios7-heart</code></li>
										<li><span class="ion-ios7-heart-outline"></span><code>ion-ios7-heart-outline</code></li>
										<li><span class="ion-ios7-help"></span><code>ion-ios7-help</code></li>
										<li><span class="ion-ios7-help-empty"></span><code>ion-ios7-help-empty</code></li>
										<li><span class="ion-ios7-help-outline"></span><code>ion-ios7-help-outline</code></li>
										<li><span class="ion-ios7-infinite"></span><code>ion-ios7-infinite</code></li>
										<li><span class="ion-ios7-infinite-outline"></span><code>ion-ios7-infinite-outline</code></li>
										<li><span class="ion-ios7-information"></span><code>ion-ios7-information</code></li>
										<li><span class="ion-ios7-information-empty"></span><code>ion-ios7-information-empty</code></li>
										<li><span class="ion-ios7-information-outline"></span><code>ion-ios7-information-outline</code></li>
										<li><span class="ion-ios7-ionic-outline"></span><code>ion-ios7-ionic-outline</code></li>
										<li><span class="ion-ios7-keypad"></span><code>ion-ios7-keypad</code></li>
										<li><span class="ion-ios7-keypad-outline"></span><code>ion-ios7-keypad-outline</code></li>
										<li><span class="ion-ios7-lightbulb"></span><code>ion-ios7-lightbulb</code></li>
										<li><span class="ion-ios7-lightbulb-outline"></span><code>ion-ios7-lightbulb-outline</code></li>
										<li><span class="ion-ios7-location"></span><code>ion-ios7-location</code></li>
										<li><span class="ion-ios7-location-outline"></span><code>ion-ios7-location-outline</code></li>
										<li><span class="ion-ios7-locked"></span><code>ion-ios7-locked</code></li>
										<li><span class="ion-ios7-locked-outline"></span><code>ion-ios7-locked-outline</code></li>
										<li><span class="ion-ios7-medkit"></span><code>ion-ios7-medkit</code></li>
										<li><span class="ion-ios7-medkit-outline"></span><code>ion-ios7-medkit-outline</code></li>
										<li><span class="ion-ios7-mic"></span><code>ion-ios7-mic</code></li>
										<li><span class="ion-ios7-mic-off"></span><code>ion-ios7-mic-off</code></li>
										<li><span class="ion-ios7-mic-outline"></span><code>ion-ios7-mic-outline</code></li>
										<li><span class="ion-ios7-minus"></span><code>ion-ios7-minus</code></li>
										<li><span class="ion-ios7-minus-empty"></span><code>ion-ios7-minus-empty</code></li>
										<li><span class="ion-ios7-minus-outline"></span><code>ion-ios7-minus-outline</code></li>
										<li><span class="ion-ios7-monitor"></span><code>ion-ios7-monitor</code></li>
										<li><span class="ion-ios7-monitor-outline"></span><code>ion-ios7-monitor-outline</code></li>
										<li><span class="ion-ios7-moon"></span><code>ion-ios7-moon</code></li>
										<li><span class="ion-ios7-moon-outline"></span><code>ion-ios7-moon-outline</code></li>
										<li><span class="ion-ios7-more"></span><code>ion-ios7-more</code></li>
										<li><span class="ion-ios7-more-outline"></span><code>ion-ios7-more-outline</code></li>
										<li><span class="ion-ios7-musical-note"></span><code>ion-ios7-musical-note</code></li>
										<li><span class="ion-ios7-musical-notes"></span><code>ion-ios7-musical-notes</code></li>
										<li><span class="ion-ios7-navigate"></span><code>ion-ios7-navigate</code></li>
										<li><span class="ion-ios7-navigate-outline"></span><code>ion-ios7-navigate-outline</code></li>
										<li><span class="ion-ios7-paperplane"></span><code>ion-ios7-paperplane</code></li>
										<li><span class="ion-ios7-paperplane-outline"></span><code>ion-ios7-paperplane-outline</code></li>
										<li><span class="ion-ios7-partlysunny"></span><code>ion-ios7-partlysunny</code></li>
										<li><span class="ion-ios7-partlysunny-outline"></span><code>ion-ios7-partlysunny-outline</code></li>
										<li><span class="ion-ios7-pause"></span><code>ion-ios7-pause</code></li>
										<li><span class="ion-ios7-pause-outline"></span><code>ion-ios7-pause-outline</code></li>
										<li><span class="ion-ios7-people"></span><code>ion-ios7-people</code></li>
										<li><span class="ion-ios7-people-outline"></span><code>ion-ios7-people-outline</code></li>
										<li><span class="ion-ios7-person"></span><code>ion-ios7-person</code></li>
										<li><span class="ion-ios7-person-outline"></span><code>ion-ios7-person-outline</code></li>
										<li><span class="ion-ios7-personadd"></span><code>ion-ios7-personadd</code></li>
										<li><span class="ion-ios7-personadd-outline"></span><code>ion-ios7-personadd-outline</code></li>
										<li><span class="ion-ios7-photos"></span><code>ion-ios7-photos</code></li>
										<li><span class="ion-ios7-photos-outline"></span><code>ion-ios7-photos-outline</code></li>
										<li><span class="ion-ios7-pie"></span><code>ion-ios7-pie</code></li>
										<li><span class="ion-ios7-pie-outline"></span><code>ion-ios7-pie-outline</code></li>
										<li><span class="ion-ios7-play"></span><code>ion-ios7-play</code></li>
										<li><span class="ion-ios7-play-outline"></span><code>ion-ios7-play-outline</code></li>
										<li><span class="ion-ios7-plus"></span><code>ion-ios7-plus</code></li>
										<li><span class="ion-ios7-plus-empty"></span><code>ion-ios7-plus-empty</code></li>
										<li><span class="ion-ios7-plus-outline"></span><code>ion-ios7-plus-outline</code></li>
										<li><span class="ion-ios7-pricetag"></span><code>ion-ios7-pricetag</code></li>
										<li><span class="ion-ios7-pricetag-outline"></span><code>ion-ios7-pricetag-outline</code></li>
										<li><span class="ion-ios7-printer"></span><code>ion-ios7-printer</code></li>
										<li><span class="ion-ios7-printer-outline"></span><code>ion-ios7-printer-outline</code></li>
										<li><span class="ion-ios7-rainy"></span><code>ion-ios7-rainy</code></li>
										<li><span class="ion-ios7-rainy-outline"></span><code>ion-ios7-rainy-outline</code></li>
										<li><span class="ion-ios7-recording"></span><code>ion-ios7-recording</code></li>
										<li><span class="ion-ios7-recording-outline"></span><code>ion-ios7-recording-outline</code></li>
										<li><span class="ion-ios7-redo"></span><code>ion-ios7-redo</code></li>
										<li><span class="ion-ios7-redo-outline"></span><code>ion-ios7-redo-outline</code></li>
										<li><span class="ion-ios7-refresh"></span><code>ion-ios7-refresh</code></li>
										<li><span class="ion-ios7-refresh-empty"></span><code>ion-ios7-refresh-empty</code></li>
										<li><span class="ion-ios7-refresh-outline"></span><code>ion-ios7-refresh-outline</code></li>
										<li><span class="ion-ios7-reload"></span><code>ion-ios7-reload</code></li>
										<li><span class="ion-ios7-rewind"></span><code>ion-ios7-rewind</code></li>
										<li><span class="ion-ios7-rewind-outline"></span><code>ion-ios7-rewind-outline</code></li>
										<li><span class="ion-ios7-search"></span><code>ion-ios7-search</code></li>
										<li><span class="ion-ios7-search-strong"></span><code>ion-ios7-search-strong</code></li>
										<li><span class="ion-ios7-skipbackward"></span><code>ion-ios7-skipbackward</code></li>
										<li><span class="ion-ios7-skipbackward-outline"></span><code>ion-ios7-skipbackward-outline</code></li>
										<li><span class="ion-ios7-skipforward"></span><code>ion-ios7-skipforward</code></li>
										<li><span class="ion-ios7-skipforward-outline"></span><code>ion-ios7-skipforward-outline</code></li>
										<li><span class="ion-ios7-snowy"></span><code>ion-ios7-snowy</code></li>
										<li><span class="ion-ios7-speedometer"></span><code>ion-ios7-speedometer</code></li>
										<li><span class="ion-ios7-speedometer-outline"></span><code>ion-ios7-speedometer-outline</code></li>
										<li><span class="ion-ios7-star"></span><code>ion-ios7-star</code></li>
										<li><span class="ion-ios7-star-outline"></span><code>ion-ios7-star-outline</code></li>
										<li><span class="ion-ios7-stopwatch"></span><code>ion-ios7-stopwatch</code></li>
										<li><span class="ion-ios7-stopwatch-outline"></span><code>ion-ios7-stopwatch-outline</code></li>
										<li><span class="ion-ios7-sunny"></span><code>ion-ios7-sunny</code></li>
										<li><span class="ion-ios7-sunny-outline"></span><code>ion-ios7-sunny-outline</code></li>
										<li><span class="ion-ios7-telephone"></span><code>ion-ios7-telephone</code></li>
										<li><span class="ion-ios7-telephone-outline"></span><code>ion-ios7-telephone-outline</code></li>
										<li><span class="ion-ios7-thunderstorm"></span><code>ion-ios7-thunderstorm</code></li>
										<li><span class="ion-ios7-thunderstorm-outline"></span><code>ion-ios7-thunderstorm-outline</code></li>
										<li><span class="ion-ios7-time"></span><code>ion-ios7-time</code></li>
										<li><span class="ion-ios7-time-outline"></span><code>ion-ios7-time-outline</code></li>
										<li><span class="ion-ios7-timer"></span><code>ion-ios7-timer</code></li>
										<li><span class="ion-ios7-timer-outline"></span><code>ion-ios7-timer-outline</code></li>
										<li><span class="ion-ios7-trash"></span><code>ion-ios7-trash</code></li>
										<li><span class="ion-ios7-trash-outline"></span><code>ion-ios7-trash-outline</code></li>
										<li><span class="ion-ios7-undo"></span><code>ion-ios7-undo</code></li>
										<li><span class="ion-ios7-undo-outline"></span><code>ion-ios7-undo-outline</code></li>
										<li><span class="ion-ios7-unlocked"></span><code>ion-ios7-unlocked</code></li>
										<li><span class="ion-ios7-unlocked-outline"></span><code>ion-ios7-unlocked-outline</code></li>
										<li><span class="ion-ios7-upload"></span><code>ion-ios7-upload</code></li>
										<li><span class="ion-ios7-upload-outline"></span><code>ion-ios7-upload-outline</code></li>
										<li><span class="ion-ios7-videocam"></span><code>ion-ios7-videocam</code></li>
										<li><span class="ion-ios7-videocam-outline"></span><code>ion-ios7-videocam-outline</code></li>
										<li><span class="ion-ios7-volume-high"></span><code>ion-ios7-volume-high</code></li>
										<li><span class="ion-ios7-volume-low"></span><code>ion-ios7-volume-low</code></li>
										<li><span class="ion-ios7-wineglass"></span><code>ion-ios7-wineglass</code></li>
										<li><span class="ion-ios7-wineglass-outline"></span><code>ion-ios7-wineglass-outline</code></li>
										<li><span class="ion-ios7-world"></span><code>ion-ios7-world</code></li>
										<li><span class="ion-ios7-world-outline"></span><code>ion-ios7-world-outline</code></li>
										<li><span class="ion-ipad"></span><code>ion-ipad</code></li>
										<li><span class="ion-iphone"></span><code>ion-iphone</code></li>
										<li><span class="ion-ipod"></span><code>ion-ipod</code></li>
										<li><span class="ion-jet"></span><code>ion-jet</code></li>
										<li><span class="ion-key"></span><code>ion-key</code></li>
										<li><span class="ion-knife"></span><code>ion-knife</code></li>
										<li><span class="ion-laptop"></span><code>ion-laptop</code></li>
										<li><span class="ion-leaf"></span><code>ion-leaf</code></li>
										<li><span class="ion-levels"></span><code>ion-levels</code></li>
										<li><span class="ion-lightbulb"></span><code>ion-lightbulb</code></li>
										<li><span class="ion-link"></span><code>ion-link</code></li>
										<li><span class="ion-load-a"></span><code>ion-load-a</code></li>
										<li><span class="ion-load-b"></span><code>ion-load-b</code></li>
										<li><span class="ion-load-c"></span><code>ion-load-c</code></li>
										<li><span class="ion-load-d"></span><code>ion-load-d</code></li>
										<li><span class="ion-location"></span><code>ion-location</code></li>
										<li><span class="ion-locked"></span><code>ion-locked</code></li>
										<li><span class="ion-log-in"></span><code>ion-log-in</code></li>
										<li><span class="ion-log-out"></span><code>ion-log-out</code></li>
										<li><span class="ion-loop"></span><code>ion-loop</code></li>
										<li><span class="ion-magnet"></span><code>ion-magnet</code></li>
										<li><span class="ion-male"></span><code>ion-male</code></li>
										<li><span class="ion-man"></span><code>ion-man</code></li>
										<li><span class="ion-map"></span><code>ion-map</code></li>
										<li><span class="ion-medkit"></span><code>ion-medkit</code></li>
										<li><span class="ion-mic-a"></span><code>ion-mic-a</code></li>
										<li><span class="ion-mic-b"></span><code>ion-mic-b</code></li>
										<li><span class="ion-mic-c"></span><code>ion-mic-c</code></li>
										<li><span class="ion-minus"></span><code>ion-minus</code></li>
										<li><span class="ion-minus-circled"></span><code>ion-minus-circled</code></li>
										<li><span class="ion-minus-round"></span><code>ion-minus-round</code></li>
										<li><span class="ion-model-s"></span><code>ion-model-s</code></li>
										<li><span class="ion-monitor"></span><code>ion-monitor</code></li>
										<li><span class="ion-more"></span><code>ion-more</code></li>
										<li><span class="ion-music-note"></span><code>ion-music-note</code></li>
										<li><span class="ion-navicon"></span><code>ion-navicon</code></li>
										<li><span class="ion-navicon-round"></span><code>ion-navicon-round</code></li>
										<li><span class="ion-navigate"></span><code>ion-navigate</code></li>
										<li><span class="ion-no-smoking"></span><code>ion-no-smoking</code></li>
										<li><span class="ion-nuclear"></span><code>ion-nuclear</code></li>
										<li><span class="ion-paper-airplane"></span><code>ion-paper-airplane</code></li>
										<li><span class="ion-paperclip"></span><code>ion-paperclip</code></li>
										<li><span class="ion-pause"></span><code>ion-pause</code></li>
										<li><span class="ion-person"></span><code>ion-person</code></li>
										<li><span class="ion-person-add"></span><code>ion-person-add</code></li>
										<li><span class="ion-person-stalker"></span><code>ion-person-stalker</code></li>
										<li><span class="ion-pie-graph"></span><code>ion-pie-graph</code></li>
										<li><span class="ion-pin"></span><code>ion-pin</code></li>
										<li><span class="ion-pinpoint"></span><code>ion-pinpoint</code></li>
										<li><span class="ion-pizza"></span><code>ion-pizza</code></li>
										<li><span class="ion-plane"></span><code>ion-plane</code></li>
										<li><span class="ion-play"></span><code>ion-play</code></li>
										<li><span class="ion-playstation"></span><code>ion-playstation</code></li>
										<li><span class="ion-plus"></span><code>ion-plus</code></li>
										<li><span class="ion-plus-circled"></span><code>ion-plus-circled</code></li>
										<li><span class="ion-plus-round"></span><code>ion-plus-round</code></li>
										<li><span class="ion-pound"></span><code>ion-pound</code></li>
										<li><span class="ion-power"></span><code>ion-power</code></li>
										<li><span class="ion-pricetag"></span><code>ion-pricetag</code></li>
										<li><span class="ion-pricetags"></span><code>ion-pricetags</code></li>
										<li><span class="ion-printer"></span><code>ion-printer</code></li>
										<li><span class="ion-radio-waves"></span><code>ion-radio-waves</code></li>
										<li><span class="ion-record"></span><code>ion-record</code></li>
										<li><span class="ion-refresh"></span><code>ion-refresh</code></li>
										<li><span class="ion-reply"></span><code>ion-reply</code></li>
										<li><span class="ion-reply-all"></span><code>ion-reply-all</code></li>
										<li><span class="ion-search"></span><code>ion-search</code></li>
										<li><span class="ion-settings"></span><code>ion-settings</code></li>
										<li><span class="ion-share"></span><code>ion-share</code></li>
										<li><span class="ion-shuffle"></span><code>ion-shuffle</code></li>
										<li><span class="ion-skip-backward"></span><code>ion-skip-backward</code></li>
										<li><span class="ion-skip-forward"></span><code>ion-skip-forward</code></li>
										<li><span class="ion-social-android"></span><code>ion-social-android</code></li>
										<li><span class="ion-social-android-outline"></span><code>ion-social-android-outline</code></li>
										<li><span class="ion-social-apple"></span><code>ion-social-apple</code></li>
										<li><span class="ion-social-apple-outline"></span><code>ion-social-apple-outline</code></li>
										<li><span class="ion-social-bitcoin"></span><code>ion-social-bitcoin</code></li>
										<li><span class="ion-social-bitcoin-outline"></span><code>ion-social-bitcoin-outline</code></li>
										<li><span class="ion-social-buffer"></span><code>ion-social-buffer</code></li>
										<li><span class="ion-social-buffer-outline"></span><code>ion-social-buffer-outline</code></li>
										<li><span class="ion-social-designernews"></span><code>ion-social-designernews</code></li>
										<li><span class="ion-social-designernews-outline"></span><code>ion-social-designernews-outline</code></li>
										<li><span class="ion-social-dribbble"></span><code>ion-social-dribbble</code></li>
										<li><span class="ion-social-dribbble-outline"></span><code>ion-social-dribbble-outline</code></li>
										<li><span class="ion-social-dropbox"></span><code>ion-social-dropbox</code></li>
										<li><span class="ion-social-dropbox-outline"></span><code>ion-social-dropbox-outline</code></li>
										<li><span class="ion-social-facebook"></span><code>ion-social-facebook</code></li>
										<li><span class="ion-social-facebook-outline"></span><code>ion-social-facebook-outline</code></li>
										<li><span class="ion-social-freebsd-devil"></span><code>ion-social-freebsd-devil</code></li>
										<li><span class="ion-social-github"></span><code>ion-social-github</code></li>
										<li><span class="ion-social-github-outline"></span><code>ion-social-github-outline</code></li>
										<li><span class="ion-social-googleplus"></span><code>ion-social-googleplus</code></li>
										<li><span class="ion-social-googleplus-outline"></span><code>ion-social-googleplus-outline</code></li>
										<li><span class="ion-social-hackernews"></span><code>ion-social-hackernews</code></li>
										<li><span class="ion-social-hackernews-outline"></span><code>ion-social-hackernews-outline</code></li>
										<li><span class="ion-social-linkedin"></span><code>ion-social-linkedin</code></li>
										<li><span class="ion-social-linkedin-outline"></span><code>ion-social-linkedin-outline</code></li>
										<li><span class="ion-social-pinterest"></span><code>ion-social-pinterest</code></li>
										<li><span class="ion-social-pinterest-outline"></span><code>ion-social-pinterest-outline</code></li>
										<li><span class="ion-social-reddit"></span><code>ion-social-reddit</code></li>
										<li><span class="ion-social-reddit-outline"></span><code>ion-social-reddit-outline</code></li>
										<li><span class="ion-social-rss"></span><code>ion-social-rss</code></li>
										<li><span class="ion-social-rss-outline"></span><code>ion-social-rss-outline</code></li>
										<li><span class="ion-social-skype"></span><code>ion-social-skype</code></li>
										<li><span class="ion-social-skype-outline"></span><code>ion-social-skype-outline</code></li>
										<li><span class="ion-social-tumblr"></span><code>ion-social-tumblr</code></li>
										<li><span class="ion-social-tumblr-outline"></span><code>ion-social-tumblr-outline</code></li>
										<li><span class="ion-social-tux"></span><code>ion-social-tux</code></li>
										<li><span class="ion-social-twitter"></span><code>ion-social-twitter</code></li>
										<li><span class="ion-social-twitter-outline"></span><code>ion-social-twitter-outline</code></li>
										<li><span class="ion-social-vimeo"></span><code>ion-social-vimeo</code></li>
										<li><span class="ion-social-vimeo-outline"></span><code>ion-social-vimeo-outline</code></li>
										<li><span class="ion-social-windows"></span><code>ion-social-windows</code></li>
										<li><span class="ion-social-windows-outline"></span><code>ion-social-windows-outline</code></li>
										<li><span class="ion-social-wordpress"></span><code>ion-social-wordpress</code></li>
										<li><span class="ion-social-wordpress-outline"></span><code>ion-social-wordpress-outline</code></li>
										<li><span class="ion-social-yahoo"></span><code>ion-social-yahoo</code></li>
										<li><span class="ion-social-yahoo-outline"></span><code>ion-social-yahoo-outline</code></li>
										<li><span class="ion-social-youtube"></span><code>ion-social-youtube</code></li>
										<li><span class="ion-social-youtube-outline"></span><code>ion-social-youtube-outline</code></li>
										<li><span class="ion-speakerphone"></span><code>ion-speakerphone</code></li>
										<li><span class="ion-speedometer"></span><code>ion-speedometer</code></li>
										<li><span class="ion-spoon"></span><code>ion-spoon</code></li>
										<li><span class="ion-star"></span><code>ion-star</code></li>
										<li><span class="ion-stats-bars"></span><code>ion-stats-bars</code></li>
										<li><span class="ion-steam"></span><code>ion-steam</code></li>
										<li><span class="ion-stop"></span><code>ion-stop</code></li>
										<li><span class="ion-thermometer"></span><code>ion-thermometer</code></li>
										<li><span class="ion-thumbsdown"></span><code>ion-thumbsdown</code></li>
										<li><span class="ion-thumbsup"></span><code>ion-thumbsup</code></li>
										<li><span class="ion-trash-a"></span><code>ion-trash-a</code></li>
										<li><span class="ion-trash-b"></span><code>ion-trash-b</code></li>
										<li><span class="ion-umbrella"></span><code>ion-umbrella</code></li>
										<li><span class="ion-unlocked"></span><code>ion-unlocked</code></li>
										<li><span class="ion-upload"></span><code>ion-upload</code></li>
										<li><span class="ion-usb"></span><code>ion-usb</code></li>
										<li><span class="ion-videocamera"></span><code>ion-videocamera</code></li>
										<li><span class="ion-volume-high"></span><code>ion-volume-high</code></li>
										<li><span class="ion-volume-low"></span><code>ion-volume-low</code></li>
										<li><span class="ion-volume-medium"></span><code>ion-volume-medium</code></li>
										<li><span class="ion-volume-mute"></span><code>ion-volume-mute</code></li>
										<li><span class="ion-waterdrop"></span><code>ion-waterdrop</code></li>
										<li><span class="ion-wifi"></span><code>ion-wifi</code></li>
										<li><span class="ion-wineglass"></span><code>ion-wineglass</code></li>
										<li><span class="ion-woman"></span><code>ion-woman</code></li>
										<li><span class="ion-wrench"></span><code>ion-wrench</code></li>
										<li><span class="ion-xbox"></span><code>ion-xbox</code></li>
									</ul>
									<a href="http://ionicons.com/" class="btn btn-sm btn-link">IonIcons</a>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Flags</div>
								<div class="panel-body">
									<ul id="flags_list" class="icon-list icon-list-b clearfix">
										<li><i class="flag-AD"></i><code>flag-AD</code></li> 
										<li><i class="flag-AE"></i><code>flag-AE</code></li> 
										<li><i class="flag-AF"></i><code>flag-AF</code></li> 
										<li><i class="flag-AG"></i><code>flag-AG</code></li> 
										<li><i class="flag-AI"></i><code>flag-AI</code></li> 
										<li><i class="flag-AL"></i><code>flag-AL</code></li> 
										<li><i class="flag-AM"></i><code>flag-AM</code></li> 
										<li><i class="flag-AN"></i><code>flag-AN</code></li> 
										<li><i class="flag-AO"></i><code>flag-AO</code></li> 
										<li><i class="flag-AQ"></i><code>flag-AQ</code></li> 
										<li><i class="flag-AR"></i><code>flag-AR</code></li> 
										<li><i class="flag-AS"></i><code>flag-AS</code></li> 
										<li><i class="flag-AT"></i><code>flag-AT</code></li> 
										<li><i class="flag-AU"></i><code>flag-AU</code></li> 
										<li><i class="flag-AW"></i><code>flag-AW</code></li> 
										<li><i class="flag-AX"></i><code>flag-AX</code></li> 
										<li><i class="flag-AZ"></i><code>flag-AZ</code></li> 
										<li><i class="flag-BA"></i><code>flag-BA</code></li> 
										<li><i class="flag-BB"></i><code>flag-BB</code></li> 
										<li><i class="flag-BD"></i><code>flag-BD</code></li> 
										<li><i class="flag-BE"></i><code>flag-BE</code></li> 
										<li><i class="flag-BF"></i><code>flag-BF</code></li> 
										<li><i class="flag-BG"></i><code>flag-BG</code></li> 
										<li><i class="flag-BH"></i><code>flag-BH</code></li> 
										<li><i class="flag-BI"></i><code>flag-BI</code></li> 
										<li><i class="flag-BJ"></i><code>flag-BJ</code></li> 
										<li><i class="flag-BL"></i><code>flag-BL</code></li> 
										<li><i class="flag-BM"></i><code>flag-BM</code></li> 
										<li><i class="flag-BN"></i><code>flag-BN</code></li> 
										<li><i class="flag-BO"></i><code>flag-BO</code></li> 
										<li><i class="flag-BR"></i><code>flag-BR</code></li> 
										<li><i class="flag-BS"></i><code>flag-BS</code></li> 
										<li><i class="flag-BT"></i><code>flag-BT</code></li> 
										<li><i class="flag-BW"></i><code>flag-BW</code></li> 
										<li><i class="flag-BY"></i><code>flag-BY</code></li> 
										<li><i class="flag-BZ"></i><code>flag-BZ</code></li> 
										<li><i class="flag-CA"></i><code>flag-CA</code></li> 
										<li><i class="flag-CC"></i><code>flag-CC</code></li> 
										<li><i class="flag-CD"></i><code>flag-CD</code></li> 
										<li><i class="flag-CF"></i><code>flag-CF</code></li> 
										<li><i class="flag-CG"></i><code>flag-CG</code></li> 
										<li><i class="flag-CH"></i><code>flag-CH</code></li> 
										<li><i class="flag-CI"></i><code>flag-CI</code></li> 
										<li><i class="flag-CK"></i><code>flag-CK</code></li> 
										<li><i class="flag-CL"></i><code>flag-CL</code></li> 
										<li><i class="flag-CM"></i><code>flag-CM</code></li> 
										<li><i class="flag-CN"></i><code>flag-CN</code></li> 
										<li><i class="flag-CO"></i><code>flag-CO</code></li> 
										<li><i class="flag-CR"></i><code>flag-CR</code></li> 
										<li><i class="flag-CU"></i><code>flag-CU</code></li> 
										<li><i class="flag-CV"></i><code>flag-CV</code></li> 
										<li><i class="flag-CW"></i><code>flag-CW</code></li> 
										<li><i class="flag-CX"></i><code>flag-CX</code></li> 
										<li><i class="flag-CY"></i><code>flag-CY</code></li> 
										<li><i class="flag-CZ"></i><code>flag-CZ</code></li> 
										<li><i class="flag-DE"></i><code>flag-DE</code></li> 
										<li><i class="flag-DJ"></i><code>flag-DJ</code></li> 
										<li><i class="flag-DK"></i><code>flag-DK</code></li> 
										<li><i class="flag-DM"></i><code>flag-DM</code></li> 
										<li><i class="flag-DO"></i><code>flag-DO</code></li> 
										<li><i class="flag-DZ"></i><code>flag-DZ</code></li> 
										<li><i class="flag-EC"></i><code>flag-EC</code></li> 
										<li><i class="flag-EE"></i><code>flag-EE</code></li> 
										<li><i class="flag-EG"></i><code>flag-EG</code></li> 
										<li><i class="flag-EH"></i><code>flag-EH</code></li> 
										<li><i class="flag-ER"></i><code>flag-ER</code></li> 
										<li><i class="flag-ES"></i><code>flag-ES</code></li> 
										<li><i class="flag-ET"></i><code>flag-ET</code></li> 
										<li><i class="flag-EU"></i><code>flag-EU</code></li> 
										<li><i class="flag-FI"></i><code>flag-FI</code></li> 
										<li><i class="flag-FJ"></i><code>flag-FJ</code></li> 
										<li><i class="flag-FK"></i><code>flag-FK</code></li> 
										<li><i class="flag-FM"></i><code>flag-FM</code></li> 
										<li><i class="flag-FO"></i><code>flag-FO</code></li> 
										<li><i class="flag-FR"></i><code>flag-FR</code></li> 
										<li><i class="flag-GA"></i><code>flag-GA</code></li> 
										<li><i class="flag-GB"></i><code>flag-GB</code></li> 
										<li><i class="flag-GD"></i><code>flag-GD</code></li> 
										<li><i class="flag-GE"></i><code>flag-GE</code></li> 
										<li><i class="flag-GG"></i><code>flag-GG</code></li> 
										<li><i class="flag-GH"></i><code>flag-GH</code></li> 
										<li><i class="flag-GI"></i><code>flag-GI</code></li> 
										<li><i class="flag-GL"></i><code>flag-GL</code></li> 
										<li><i class="flag-GM"></i><code>flag-GM</code></li> 
										<li><i class="flag-GN"></i><code>flag-GN</code></li> 
										<li><i class="flag-GQ"></i><code>flag-GQ</code></li> 
										<li><i class="flag-GR"></i><code>flag-GR</code></li> 
										<li><i class="flag-GS"></i><code>flag-GS</code></li> 
										<li><i class="flag-GT"></i><code>flag-GT</code></li> 
										<li><i class="flag-GU"></i><code>flag-GU</code></li> 
										<li><i class="flag-GW"></i><code>flag-GW</code></li> 
										<li><i class="flag-GY"></i><code>flag-GY</code></li> 
										<li><i class="flag-HK"></i><code>flag-HK</code></li> 
										<li><i class="flag-HN"></i><code>flag-HN</code></li> 
										<li><i class="flag-HR"></i><code>flag-HR</code></li> 
										<li><i class="flag-HT"></i><code>flag-HT</code></li> 
										<li><i class="flag-HU"></i><code>flag-HU</code></li> 
										<li><i class="flag-IC"></i><code>flag-IC</code></li> 
										<li><i class="flag-ID"></i><code>flag-ID</code></li> 
										<li><i class="flag-IE"></i><code>flag-IE</code></li> 
										<li><i class="flag-IL"></i><code>flag-IL</code></li> 
										<li><i class="flag-IM"></i><code>flag-IM</code></li> 
										<li><i class="flag-IN"></i><code>flag-IN</code></li> 
										<li><i class="flag-IQ"></i><code>flag-IQ</code></li> 
										<li><i class="flag-IR"></i><code>flag-IR</code></li> 
										<li><i class="flag-IS"></i><code>flag-IS</code></li> 
										<li><i class="flag-IT"></i><code>flag-IT</code></li> 
										<li><i class="flag-JE"></i><code>flag-JE</code></li> 
										<li><i class="flag-JM"></i><code>flag-JM</code></li> 
										<li><i class="flag-JO"></i><code>flag-JO</code></li> 
										<li><i class="flag-JP"></i><code>flag-JP</code></li> 
										<li><i class="flag-KE"></i><code>flag-KE</code></li> 
										<li><i class="flag-KG"></i><code>flag-KG</code></li> 
										<li><i class="flag-KH"></i><code>flag-KH</code></li> 
										<li><i class="flag-KI"></i><code>flag-KI</code></li> 
										<li><i class="flag-KM"></i><code>flag-KM</code></li> 
										<li><i class="flag-KN"></i><code>flag-KN</code></li> 
										<li><i class="flag-KP"></i><code>flag-KP</code></li> 
										<li><i class="flag-KR"></i><code>flag-KR</code></li> 
										<li><i class="flag-KW"></i><code>flag-KW</code></li> 
										<li><i class="flag-KY"></i><code>flag-KY</code></li> 
										<li><i class="flag-KZ"></i><code>flag-KZ</code></li> 
										<li><i class="flag-LA"></i><code>flag-LA</code></li> 
										<li><i class="flag-LB"></i><code>flag-LB</code></li> 
										<li><i class="flag-LC"></i><code>flag-LC</code></li> 
										<li><i class="flag-LI"></i><code>flag-LI</code></li> 
										<li><i class="flag-LK"></i><code>flag-LK</code></li> 
										<li><i class="flag-LR"></i><code>flag-LR</code></li> 
										<li><i class="flag-LS"></i><code>flag-LS</code></li> 
										<li><i class="flag-LT"></i><code>flag-LT</code></li> 
										<li><i class="flag-LU"></i><code>flag-LU</code></li> 
										<li><i class="flag-LV"></i><code>flag-LV</code></li> 
										<li><i class="flag-LY"></i><code>flag-LY</code></li> 
										<li><i class="flag-MA"></i><code>flag-MA</code></li> 
										<li><i class="flag-MC"></i><code>flag-MC</code></li> 
										<li><i class="flag-MD"></i><code>flag-MD</code></li> 
										<li><i class="flag-ME"></i><code>flag-ME</code></li> 
										<li><i class="flag-MF"></i><code>flag-MF</code></li> 
										<li><i class="flag-MG"></i><code>flag-MG</code></li> 
										<li><i class="flag-MH"></i><code>flag-MH</code></li> 
										<li><i class="flag-MK"></i><code>flag-MK</code></li> 
										<li><i class="flag-ML"></i><code>flag-ML</code></li> 
										<li><i class="flag-MM"></i><code>flag-MM</code></li> 
										<li><i class="flag-MN"></i><code>flag-MN</code></li> 
										<li><i class="flag-MO"></i><code>flag-MO</code></li> 
										<li><i class="flag-MP"></i><code>flag-MP</code></li> 
										<li><i class="flag-MQ"></i><code>flag-MQ</code></li> 
										<li><i class="flag-MR"></i><code>flag-MR</code></li> 
										<li><i class="flag-MS"></i><code>flag-MS</code></li> 
										<li><i class="flag-MT"></i><code>flag-MT</code></li> 
										<li><i class="flag-MU"></i><code>flag-MU</code></li> 
										<li><i class="flag-MV"></i><code>flag-MV</code></li> 
										<li><i class="flag-MW"></i><code>flag-MW</code></li> 
										<li><i class="flag-MX"></i><code>flag-MX</code></li> 
										<li><i class="flag-MY"></i><code>flag-MY</code></li> 
										<li><i class="flag-MZ"></i><code>flag-MZ</code></li> 
										<li><i class="flag-NA"></i><code>flag-NA</code></li> 
										<li><i class="flag-NC"></i><code>flag-NC</code></li> 
										<li><i class="flag-NE"></i><code>flag-NE</code></li> 
										<li><i class="flag-NF"></i><code>flag-NF</code></li> 
										<li><i class="flag-NG"></i><code>flag-NG</code></li> 
										<li><i class="flag-NI"></i><code>flag-NI</code></li> 
										<li><i class="flag-NL"></i><code>flag-NL</code></li> 
										<li><i class="flag-NO"></i><code>flag-NO</code></li> 
										<li><i class="flag-NP"></i><code>flag-NP</code></li> 
										<li><i class="flag-NR"></i><code>flag-NR</code></li> 
										<li><i class="flag-NU"></i><code>flag-NU</code></li> 
										<li><i class="flag-NZ"></i><code>flag-NZ</code></li> 
										<li><i class="flag-OM"></i><code>flag-OM</code></li> 
										<li><i class="flag-PA"></i><code>flag-PA</code></li> 
										<li><i class="flag-PE"></i><code>flag-PE</code></li> 
										<li><i class="flag-PF"></i><code>flag-PF</code></li> 
										<li><i class="flag-PG"></i><code>flag-PG</code></li> 
										<li><i class="flag-PH"></i><code>flag-PH</code></li> 
										<li><i class="flag-PK"></i><code>flag-PK</code></li> 
										<li><i class="flag-PL"></i><code>flag-PL</code></li> 
										<li><i class="flag-PN"></i><code>flag-PN</code></li> 
										<li><i class="flag-PR"></i><code>flag-PR</code></li> 
										<li><i class="flag-PS"></i><code>flag-PS</code></li> 
										<li><i class="flag-PT"></i><code>flag-PT</code></li> 
										<li><i class="flag-PW"></i><code>flag-PW</code></li> 
										<li><i class="flag-PY"></i><code>flag-PY</code></li> 
										<li><i class="flag-QA"></i><code>flag-QA</code></li> 
										<li><i class="flag-RO"></i><code>flag-RO</code></li> 
										<li><i class="flag-RS"></i><code>flag-RS</code></li> 
										<li><i class="flag-RU"></i><code>flag-RU</code></li> 
										<li><i class="flag-RW"></i><code>flag-RW</code></li> 
										<li><i class="flag-SA"></i><code>flag-SA</code></li> 
										<li><i class="flag-SB"></i><code>flag-SB</code></li> 
										<li><i class="flag-SC"></i><code>flag-SC</code></li> 
										<li><i class="flag-SD"></i><code>flag-SD</code></li> 
										<li><i class="flag-SE"></i><code>flag-SE</code></li> 
										<li><i class="flag-SG"></i><code>flag-SG</code></li> 
										<li><i class="flag-SH"></i><code>flag-SH</code></li> 
										<li><i class="flag-SI"></i><code>flag-SI</code></li> 
										<li><i class="flag-SK"></i><code>flag-SK</code></li> 
										<li><i class="flag-SL"></i><code>flag-SL</code></li> 
										<li><i class="flag-SM"></i><code>flag-SM</code></li> 
										<li><i class="flag-SN"></i><code>flag-SN</code></li> 
										<li><i class="flag-SO"></i><code>flag-SO</code></li> 
										<li><i class="flag-SR"></i><code>flag-SR</code></li> 
										<li><i class="flag-SS"></i><code>flag-SS</code></li> 
										<li><i class="flag-ST"></i><code>flag-ST</code></li> 
										<li><i class="flag-SV"></i><code>flag-SV</code></li> 
										<li><i class="flag-SY"></i><code>flag-SY</code></li> 
										<li><i class="flag-SZ"></i><code>flag-SZ</code></li> 
										<li><i class="flag-TC"></i><code>flag-TC</code></li> 
										<li><i class="flag-TD"></i><code>flag-TD</code></li> 
										<li><i class="flag-TF"></i><code>flag-TF</code></li> 
										<li><i class="flag-TG"></i><code>flag-TG</code></li> 
										<li><i class="flag-TH"></i><code>flag-TH</code></li> 
										<li><i class="flag-TJ"></i><code>flag-TJ</code></li> 
										<li><i class="flag-TK"></i><code>flag-TK</code></li> 
										<li><i class="flag-TL"></i><code>flag-TL</code></li> 
										<li><i class="flag-TM"></i><code>flag-TM</code></li> 
										<li><i class="flag-TN"></i><code>flag-TN</code></li> 
										<li><i class="flag-TO"></i><code>flag-TO</code></li> 
										<li><i class="flag-TR"></i><code>flag-TR</code></li> 
										<li><i class="flag-TT"></i><code>flag-TT</code></li> 
										<li><i class="flag-TV"></i><code>flag-TV</code></li> 
										<li><i class="flag-TW"></i><code>flag-TW</code></li> 
										<li><i class="flag-TZ"></i><code>flag-TZ</code></li> 
										<li><i class="flag-UA"></i><code>flag-UA</code></li> 
										<li><i class="flag-UG"></i><code>flag-UG</code></li> 
										<li><i class="flag-US"></i><code>flag-US</code></li> 
										<li><i class="flag-UY"></i><code>flag-UY</code></li> 
										<li><i class="flag-UZ"></i><code>flag-UZ</code></li> 
										<li><i class="flag-VA"></i><code>flag-VA</code></li> 
										<li><i class="flag-VC"></i><code>flag-VC</code></li> 
										<li><i class="flag-VE"></i><code>flag-VE</code></li> 
										<li><i class="flag-VG"></i><code>flag-VG</code></li> 
										<li><i class="flag-VI"></i><code>flag-VI</code></li> 
										<li><i class="flag-VN"></i><code>flag-VN</code></li> 
										<li><i class="flag-VU"></i><code>flag-VU</code></li> 
										<li><i class="flag-WF"></i><code>flag-WF</code></li> 
										<li><i class="flag-WS"></i><code>flag-WS</code></li> 
										<li><i class="flag-YE"></i><code>flag-YE</code></li> 
										<li><i class="flag-YT"></i><code>flag-YT</code></li> 
										<li><i class="flag-ZA"></i><code>flag-ZA</code></li> 
										<li><i class="flag-ZM"></i><code>flag-ZM</code></li> 
										<li><i class="flag-ZW"></i><code>flag-ZW</code></li> 
										<li><i class="flag-_abkhazia"></i><code>flag-_abkhazia</code></li> 
										<li><i class="flag-_basque-country"></i><code>flag-_basque-country</code></li> 
										<li><i class="flag-_british-antarctic-territory"></i><code>flag-_british-antarctic-territory</code></li> 
										<li><i class="flag-_commonwealth"></i><code>flag-_commonwealth</code></li> 
										<li><i class="flag-_england"></i><code>flag-_england</code></li> 
										<li><i class="flag-_gosquared"></i><code>flag-_gosquared</code></li> 
										<li><i class="flag-_kosovo"></i><code>flag-_kosovo</code></li> 
										<li><i class="flag-_mars"></i><code>flag-_mars</code></li> 
										<li><i class="flag-_nagorno-karabakh"></i><code>flag-_nagorno-karabakh</code></li> 
										<li><i class="flag-_nato"></i><code>flag-_nato</code></li> 
										<li><i class="flag-_northern-cyprus"></i><code>flag-_northern-cyprus</code></li> 
										<li><i class="flag-_olympics"></i><code>flag-_olympics</code></li> 
										<li><i class="flag-_red-cross"></i><code>flag-_red-cross</code></li> 
										<li><i class="flag-_scotland"></i><code>flag-_scotland</code></li> 
										<li><i class="flag-_somaliland"></i><code>flag-_somaliland</code></li> 
										<li><i class="flag-_south-ossetia"></i><code>flag-_south-ossetia</code></li> 
										<li><i class="flag-_united-nations"></i><code>flag-_united-nations</code></li> 
										<li><i class="flag-_unknown"></i><code>flag-_unknown</code></li> 
										<li><i class="flag-_wales"></i><code>flag-_wales</code></li> 
									</ul>
									<a href="http://www.gosquared.com/" class="btn btn-sm btn-link">Flag Icons</a>
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
		
	<!-- page specific plugins -->

		<!-- quicksearch -->
		<script src="assets/js/jquery.quicksearch.js"></script>
		
		<!-- icons functions -->
		<script src="assets/js/apps/tisa_icons.js"></script>
		
    </body>
</html>

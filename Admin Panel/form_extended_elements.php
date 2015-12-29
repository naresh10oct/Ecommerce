<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (form_extended_elements)</title>
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

		<!-- datepicker -->
		<link rel="stylesheet" href="assets/lib/bootstrap-datepicker/css/datepicker3.css">
		<!-- date range picker -->
		<link rel="stylesheet" href="assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- timepicker -->
		<link rel="stylesheet" href="assets/lib/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<!-- ion.rangeSlider -->
		<link rel="stylesheet" href="assets/lib/ion.rangeSlider/css/ion.rangeSlider.css">
		<!-- bootstrap switches -->
		<link href="assets/lib/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
		<!-- 2col multiselect -->
		<link href="assets/lib/multi-select/css/multi-select.css" rel="stylesheet">
		<!-- multiselect, tagging -->
		<link rel="stylesheet" href="assets/lib/select2/select2.css">
				
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
							<div class="panel panel-default">
								<div class="panel-heading">Ion RangeSlider</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-6">
											<input id="range_slider_a" type="text" name="range_1" value="50;500" />
										</div>
										<div class="col-lg-6">
											<input id="range_slider_b" type="text" name="range_2" value="1000;100000" data-type="double" data-step="500" data-postfix=" &euro;" data-from="30000" data-to="90000" data-hasgrid="true" />
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<input id="range_slider_c" type="text" name="range_3" value="10000;100000" />
										</div>
										<div class="col-lg-6">
											<input id="range_slider_d" type="text" name="range_4" value="10000;100000" />
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Switch Buttons</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-3">
											<h4 class="heading_a">Large switch</h4>
											<input type="checkbox" checked class="bs_switch" data-size="large">
										</div>
										<div class="col-sm-3">
											<h4 class="heading_a">Default switch</h4>
											<input type="checkbox" checked class="bs_switch">
										</div>
										<div class="col-sm-3">
											<h4 class="heading_a">Small switch</h4>
											<input type="checkbox" checked class="bs_switch" data-size="small">
										</div>
										<div class="col-sm-3">
											<h4 class="heading_a">Mini switch</h4>
											<input type="checkbox" checked class="bs_switch" data-size="mini">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<h4 class="heading_a">Color: "primary"</h4>
											<input type="checkbox" checked class="bs_switch" data-on-color="primary">
										</div>
										<div class="col-sm-3">
											<h4 class="heading_a">Color: "info"</h4>
											<input type="checkbox" checked class="bs_switch" data-on-color="info">
										</div>
										<div class="col-sm-3">
											<h4 class="heading_a">Color: "success"</h4>
											<input type="checkbox" checked class="bs_switch" data-on-color="success">
										</div>
										<div class="col-sm-3">
											<h4 class="heading_a">Color: "warning"</h4>
											<input type="checkbox" checked class="bs_switch" data-on-color="warning">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<h4 class="heading_a">Color: "danger"</h4>
											<input type="checkbox" checked class="bs_switch" data-on-color="danger">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3">
											<h4 class="heading_a">HTML text</h4>
											<input type="checkbox" checked class="bs_switch" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>">
										</div>
										<div class="col-sm-9">
											<h4 class="heading_a">Radio switch (allow uncheck)</h4>
											<div class="row bs_switch_wrapper">
												<div class="col-sm-4 col-md-3">
													<input type="radio" class="bs_switch bs_switch_radio" name="radio_switch" value="option 1">
													<span class="help-block">option 1</span>
												</div>
												<div class="col-sm-4 col-md-3">
													<input type="radio" class="bs_switch bs_switch_radio" name="radio_switch" value="option 2">
													<span class="help-block">option 2</span>
												</div>
												<div class="col-sm-4 col-md-3">
													<input type="radio" class="bs_switch bs_switch_radio" name="radio_switch" value="option 3">
													<span class="help-block">option 3</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">Multiselect</h4>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6">
											<h4 class="heading_a">Pre-selected options</h4>
											<select name="2col_preselected" id="2col_preselected" multiple class="form-control">
												<option value="city_1">City 1</option>
												<option value="city_2">City 2</option>
												<option value="city_3">City 3</option>
												<option value="city_4">City 4</option>
												<option value="city_5" selected>City 5</option>
												<option value="city_6">City 6</option>
												<option value="city_7">City 7</option>
												<option value="city_8">City 8</option>
												<option value="city_9">City 9</option>
												<option value="city_10">City 10</option>
												<option value="city_11">City 11</option>
												<option value="city_12">City 12</option>
												<option value="city_13">City 13</option>
												<option value="city_14">City 14</option>
												<option value="city_15">City 15</option>
												<option value="city_16">City 16</option>
												<option value="city_17">City 17</option>
												<option value="city_18">City 18</option>
												<option value="city_19">City 19</option>
												<option value="city_20">City 20</option>
												<option value="city_21">City 21</option>
												<option value="city_22">City 22</option>
												<option value="city_23">City 23</option>
												<option value="city_24">City 24</option>
												<option value="city_25">City 25</option>
												<option value="city_26">City 26</option>
												<option value="city_27">City 27</option>
												<option value="city_28">City 28</option>
												<option value="city_29">City 29</option>
												<option value="city_30">City 30</option>
												<option value="city_31">City 31</option>
												<option value="city_32">City 32</option>
												<option value="city_33">City 33</option>
												<option value="city_34">City 34</option>
												<option value="city_35">City 35</option>
												<option value="city_36">City 36</option>
												<option value="city_37">City 37</option>
												<option value="city_38">City 38</option>
												<option value="city_39">City 39</option>
												<option value="city_40">City 40</option>
												<option value="city_41">City 41</option>
												<option value="city_42" selected>City 42</option>
												<option value="city_43">City 43</option>
												<option value="city_44">City 44</option>
												<option value="city_45">City 45</option>
												<option value="city_46">City 46</option>
												<option value="city_47">City 47</option>
												<option value="city_48">City 48</option>
												<option value="city_49">City 49</option>
												<option value="city_50">City 50</option>
												<option value="city_51">City 51</option>
												<option value="city_52">City 52</option>
												<option value="city_53">City 53</option>
												<option value="city_54">City 54</option>
												<option value="city_55">City 55</option>
												<option value="city_56">City 56</option>
												<option value="city_57">City 57</option>
												<option value="city_58">City 58</option>
												<option value="city_59">City 59</option>
												<option value="city_60">City 60</option>
												<option value="city_61">City 61</option>
												<option value="city_62">City 62</option>
												<option value="city_63">City 63</option>
												<option value="city_64">City 64</option>
												<option value="city_65">City 65</option>
												<option value="city_66">City 66</option>
												<option value="city_67">City 67</option>
												<option value="city_68">City 68</option>
												<option value="city_69">City 69</option>
												<option value="city_70">City 70</option>
												<option value="city_71">City 71</option>
												<option value="city_72">City 72</option>
												<option value="city_73">City 73</option>
												<option value="city_74">City 74</option>
												<option value="city_75">City 75</option>
												<option value="city_76">City 76</option>
												<option value="city_77">City 77</option>
												<option value="city_78">City 78</option>
												<option value="city_79">City 79</option>
												<option value="city_80">City 80</option>
												<option value="city_81">City 81</option>
												<option value="city_82">City 82</option>
												<option value="city_83">City 83</option>
												<option value="city_84">City 84</option>
												<option value="city_85">City 85</option>
												<option value="city_86">City 86</option>
												<option value="city_87">City 87</option>
												<option value="city_88">City 88</option>
												<option value="city_89">City 89</option>
												<option value="city_90">City 90</option>
												<option value="city_91">City 91</option>
												<option value="city_92">City 92</option>
												<option value="city_93">City 93</option>
												<option value="city_94">City 94</option>
												<option value="city_95">City 95</option>
												<option value="city_96">City 96</option>
												<option value="city_97">City 97</option>
												<option value="city_98">City 98</option>
												<option value="city_99">City 99</option>
												<option value="city_100">City 100</option>
											</select>
										</div>
										<div class="col-md-6">
											<h4 class="heading_a">Callback</h4>
											<select name="2col_callbacks" id="2col_callbacks" multiple class="form-control">
												<option value="option_1">elem_1</option>
												<option value="option_2">elem_2</option>
												<option value="option_3">elem_3</option>
												<option value="option_4">elem_4</option>
												<option value="option_5">elem_5</option>
												<option value="option_6">elem_6</option>
												<option value="option_7">elem_7</option>
												<option value="option_8">elem_8</option>
												<option value="option_9">elem_9</option>
												<option value="option_10">elem_10</option>
												<option value="option_11">elem_11</option>
												<option value="option_12">elem_12</option>
												<option value="option_13">elem_13</option>
												<option value="option_14">elem_14</option>
												<option value="option_15">elem_15</option>
												<option value="option_16">elem_16</option>
												<option value="option_17">elem_17</option>
												<option value="option_18">elem_18</option>
												<option value="option_19">elem_19</option>
												<option value="option_20">elem_20</option>
												<option value="option_21">elem_21</option>
												<option value="option_22">elem_22</option>
												<option value="option_23">elem_23</option>
												<option value="option_24">elem_24</option>
												<option value="option_25">elem_25</option>
												<option value="option_26">elem_26</option>
												<option value="option_27">elem_27</option>
												<option value="option_28">elem_28</option>
												<option value="option_29">elem_29</option>
												<option value="option_30">elem_30</option>
												<option value="option_31">elem_31</option>
												<option value="option_32">elem_32</option>
												<option value="option_33">elem_33</option>
												<option value="option_34">elem_34</option>
												<option value="option_35">elem_35</option>
												<option value="option_36">elem_36</option>
												<option value="option_37">elem_37</option>
												<option value="option_38">elem_38</option>
												<option value="option_39">elem_39</option>
												<option value="option_40">elem_40</option>
												<option value="option_41">elem_41</option>
												<option value="option_42">elem_42</option>
												<option value="option_43">elem_43</option>
												<option value="option_44">elem_44</option>
												<option value="option_45">elem_45</option>
												<option value="option_46">elem_46</option>
												<option value="option_47">elem_47</option>
												<option value="option_48">elem_48</option>
												<option value="option_49">elem_49</option>
												<option value="option_50">elem_50</option>
												<option value="option_51">elem_51</option>
												<option value="option_52">elem_52</option>
												<option value="option_53">elem_53</option>
												<option value="option_54">elem_54</option>
												<option value="option_55">elem_55</option>
												<option value="option_56">elem_56</option>
												<option value="option_57">elem_57</option>
												<option value="option_58">elem_58</option>
												<option value="option_59">elem_59</option>
												<option value="option_60">elem_60</option>
												<option value="option_61">elem_61</option>
												<option value="option_62">elem_62</option>
												<option value="option_63">elem_63</option>
												<option value="option_64">elem_64</option>
												<option value="option_65">elem_65</option>
												<option value="option_66">elem_66</option>
												<option value="option_67">elem_67</option>
												<option value="option_68">elem_68</option>
												<option value="option_69">elem_69</option>
												<option value="option_70">elem_70</option>
												<option value="option_71">elem_71</option>
												<option value="option_72">elem_72</option>
												<option value="option_73">elem_73</option>
												<option value="option_74">elem_74</option>
												<option value="option_75">elem_75</option>
												<option value="option_76">elem_76</option>
												<option value="option_77">elem_77</option>
												<option value="option_78">elem_78</option>
												<option value="option_79">elem_79</option>
												<option value="option_80">elem_80</option>
												<option value="option_81">elem_81</option>
												<option value="option_82">elem_82</option>
												<option value="option_83">elem_83</option>
												<option value="option_84">elem_84</option>
												<option value="option_85">elem_85</option>
												<option value="option_86">elem_86</option>
												<option value="option_87">elem_87</option>
												<option value="option_88">elem_88</option>
												<option value="option_89">elem_89</option>
												<option value="option_90">elem_90</option>
												<option value="option_91">elem_91</option>
												<option value="option_92">elem_92</option>
												<option value="option_93">elem_93</option>
												<option value="option_94">elem_94</option>
												<option value="option_95">elem_95</option>
												<option value="option_96">elem_96</option>
												<option value="option_97">elem_97</option>
												<option value="option_98">elem_98</option>
												<option value="option_99">elem_99</option>
												<option value="option_100">elem_100</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<h4 class="heading_a">Optgroup</h4>
											<select id="2col_optgroup" multiple class="form-control">
												<optgroup label="Friends">
													<option value="1">Yoda</option>
													<option value="2">Obiwan</option>
												</optgroup>
												<optgroup label="Enemies">
													<option value="3">Palpatine</option>
													<option value="4">Darth Vader</option>
												</optgroup>
											</select>
										</div>
										<div class="col-md-6">
											<h4 class="heading_a">Public methods (500 elements)</h4>
											<div class="form-group">
												<select name="2col_public_method" id="2col_public_method" multiple class="form-control">
													<option value="elem_1">elem_1</option>
													<option value="elem_2">elem_2</option>
													<option value="elem_3">elem_3</option>
													<option value="elem_4">elem_4</option>
													<option value="elem_5">elem_5</option>
													<option value="elem_6">elem_6</option>
													<option value="elem_7">elem_7</option>
													<option value="elem_8">elem_8</option>
													<option value="elem_9">elem_9</option>
													<option value="elem_10">elem_10</option>
													<option value="elem_11">elem_11</option>
													<option value="elem_12">elem_12</option>
													<option value="elem_13">elem_13</option>
													<option value="elem_14">elem_14</option>
													<option value="elem_15">elem_15</option>
													<option value="elem_16">elem_16</option>
													<option value="elem_17">elem_17</option>
													<option value="elem_18">elem_18</option>
													<option value="elem_19">elem_19</option>
													<option value="elem_20">elem_20</option>
													<option value="elem_21">elem_21</option>
													<option value="elem_22">elem_22</option>
													<option value="elem_23">elem_23</option>
													<option value="elem_24">elem_24</option>
													<option value="elem_25">elem_25</option>
													<option value="elem_26">elem_26</option>
													<option value="elem_27">elem_27</option>
													<option value="elem_28">elem_28</option>
													<option value="elem_29">elem_29</option>
													<option value="elem_30">elem_30</option>
													<option value="elem_31">elem_31</option>
													<option value="elem_32">elem_32</option>
													<option value="elem_33">elem_33</option>
													<option value="elem_34">elem_34</option>
													<option value="elem_35">elem_35</option>
													<option value="elem_36">elem_36</option>
													<option value="elem_37">elem_37</option>
													<option value="elem_38">elem_38</option>
													<option value="elem_39">elem_39</option>
													<option value="elem_40">elem_40</option>
													<option value="elem_41">elem_41</option>
													<option value="elem_42">elem_42</option>
													<option value="elem_43">elem_43</option>
													<option value="elem_44">elem_44</option>
													<option value="elem_45">elem_45</option>
													<option value="elem_46">elem_46</option>
													<option value="elem_47">elem_47</option>
													<option value="elem_48">elem_48</option>
													<option value="elem_49">elem_49</option>
													<option value="elem_50">elem_50</option>
													<option value="elem_51">elem_51</option>
													<option value="elem_52">elem_52</option>
													<option value="elem_53">elem_53</option>
													<option value="elem_54">elem_54</option>
													<option value="elem_55">elem_55</option>
													<option value="elem_56">elem_56</option>
													<option value="elem_57">elem_57</option>
													<option value="elem_58">elem_58</option>
													<option value="elem_59">elem_59</option>
													<option value="elem_60">elem_60</option>
													<option value="elem_61">elem_61</option>
													<option value="elem_62">elem_62</option>
													<option value="elem_63">elem_63</option>
													<option value="elem_64">elem_64</option>
													<option value="elem_65">elem_65</option>
													<option value="elem_66">elem_66</option>
													<option value="elem_67">elem_67</option>
													<option value="elem_68">elem_68</option>
													<option value="elem_69">elem_69</option>
													<option value="elem_70">elem_70</option>
													<option value="elem_71">elem_71</option>
													<option value="elem_72">elem_72</option>
													<option value="elem_73">elem_73</option>
													<option value="elem_74">elem_74</option>
													<option value="elem_75">elem_75</option>
													<option value="elem_76">elem_76</option>
													<option value="elem_77">elem_77</option>
													<option value="elem_78">elem_78</option>
													<option value="elem_79">elem_79</option>
													<option value="elem_80">elem_80</option>
													<option value="elem_81">elem_81</option>
													<option value="elem_82">elem_82</option>
													<option value="elem_83">elem_83</option>
													<option value="elem_84">elem_84</option>
													<option value="elem_85">elem_85</option>
													<option value="elem_86">elem_86</option>
													<option value="elem_87">elem_87</option>
													<option value="elem_88">elem_88</option>
													<option value="elem_89">elem_89</option>
													<option value="elem_90">elem_90</option>
													<option value="elem_91">elem_91</option>
													<option value="elem_92">elem_92</option>
													<option value="elem_93">elem_93</option>
													<option value="elem_94">elem_94</option>
													<option value="elem_95">elem_95</option>
													<option value="elem_96">elem_96</option>
													<option value="elem_97">elem_97</option>
													<option value="elem_98">elem_98</option>
													<option value="elem_99">elem_99</option>
													<option value="elem_100">elem_100</option>
													<option value="elem_101">elem_101</option>
													<option value="elem_102">elem_102</option>
													<option value="elem_103">elem_103</option>
													<option value="elem_104">elem_104</option>
													<option value="elem_105">elem_105</option>
													<option value="elem_106">elem_106</option>
													<option value="elem_107">elem_107</option>
													<option value="elem_108">elem_108</option>
													<option value="elem_109">elem_109</option>
													<option value="elem_110">elem_110</option>
													<option value="elem_111">elem_111</option>
													<option value="elem_112">elem_112</option>
													<option value="elem_113">elem_113</option>
													<option value="elem_114">elem_114</option>
													<option value="elem_115">elem_115</option>
													<option value="elem_116">elem_116</option>
													<option value="elem_117">elem_117</option>
													<option value="elem_118">elem_118</option>
													<option value="elem_119">elem_119</option>
													<option value="elem_120">elem_120</option>
													<option value="elem_121">elem_121</option>
													<option value="elem_122">elem_122</option>
													<option value="elem_123">elem_123</option>
													<option value="elem_124">elem_124</option>
													<option value="elem_125">elem_125</option>
													<option value="elem_126">elem_126</option>
													<option value="elem_127">elem_127</option>
													<option value="elem_128">elem_128</option>
													<option value="elem_129">elem_129</option>
													<option value="elem_130">elem_130</option>
													<option value="elem_131">elem_131</option>
													<option value="elem_132">elem_132</option>
													<option value="elem_133">elem_133</option>
													<option value="elem_134">elem_134</option>
													<option value="elem_135">elem_135</option>
													<option value="elem_136">elem_136</option>
													<option value="elem_137">elem_137</option>
													<option value="elem_138">elem_138</option>
													<option value="elem_139">elem_139</option>
													<option value="elem_140">elem_140</option>
													<option value="elem_141">elem_141</option>
													<option value="elem_142">elem_142</option>
													<option value="elem_143">elem_143</option>
													<option value="elem_144">elem_144</option>
													<option value="elem_145">elem_145</option>
													<option value="elem_146">elem_146</option>
													<option value="elem_147">elem_147</option>
													<option value="elem_148">elem_148</option>
													<option value="elem_149">elem_149</option>
													<option value="elem_150">elem_150</option>
													<option value="elem_151">elem_151</option>
													<option value="elem_152">elem_152</option>
													<option value="elem_153">elem_153</option>
													<option value="elem_154">elem_154</option>
													<option value="elem_155">elem_155</option>
													<option value="elem_156">elem_156</option>
													<option value="elem_157">elem_157</option>
													<option value="elem_158">elem_158</option>
													<option value="elem_159">elem_159</option>
													<option value="elem_160">elem_160</option>
													<option value="elem_161">elem_161</option>
													<option value="elem_162">elem_162</option>
													<option value="elem_163">elem_163</option>
													<option value="elem_164">elem_164</option>
													<option value="elem_165">elem_165</option>
													<option value="elem_166">elem_166</option>
													<option value="elem_167">elem_167</option>
													<option value="elem_168">elem_168</option>
													<option value="elem_169">elem_169</option>
													<option value="elem_170">elem_170</option>
													<option value="elem_171">elem_171</option>
													<option value="elem_172">elem_172</option>
													<option value="elem_173">elem_173</option>
													<option value="elem_174">elem_174</option>
													<option value="elem_175">elem_175</option>
													<option value="elem_176">elem_176</option>
													<option value="elem_177">elem_177</option>
													<option value="elem_178">elem_178</option>
													<option value="elem_179">elem_179</option>
													<option value="elem_180">elem_180</option>
													<option value="elem_181">elem_181</option>
													<option value="elem_182">elem_182</option>
													<option value="elem_183">elem_183</option>
													<option value="elem_184">elem_184</option>
													<option value="elem_185">elem_185</option>
													<option value="elem_186">elem_186</option>
													<option value="elem_187">elem_187</option>
													<option value="elem_188">elem_188</option>
													<option value="elem_189">elem_189</option>
													<option value="elem_190">elem_190</option>
													<option value="elem_191">elem_191</option>
													<option value="elem_192">elem_192</option>
													<option value="elem_193">elem_193</option>
													<option value="elem_194">elem_194</option>
													<option value="elem_195">elem_195</option>
													<option value="elem_196">elem_196</option>
													<option value="elem_197">elem_197</option>
													<option value="elem_198">elem_198</option>
													<option value="elem_199">elem_199</option>
													<option value="elem_200">elem_200</option>
													<option value="elem_201">elem_201</option>
													<option value="elem_202">elem_202</option>
													<option value="elem_203">elem_203</option>
													<option value="elem_204">elem_204</option>
													<option value="elem_205">elem_205</option>
													<option value="elem_206">elem_206</option>
													<option value="elem_207">elem_207</option>
													<option value="elem_208">elem_208</option>
													<option value="elem_209">elem_209</option>
													<option value="elem_210">elem_210</option>
													<option value="elem_211">elem_211</option>
													<option value="elem_212">elem_212</option>
													<option value="elem_213">elem_213</option>
													<option value="elem_214">elem_214</option>
													<option value="elem_215">elem_215</option>
													<option value="elem_216">elem_216</option>
													<option value="elem_217">elem_217</option>
													<option value="elem_218">elem_218</option>
													<option value="elem_219">elem_219</option>
													<option value="elem_220">elem_220</option>
													<option value="elem_221">elem_221</option>
													<option value="elem_222">elem_222</option>
													<option value="elem_223">elem_223</option>
													<option value="elem_224">elem_224</option>
													<option value="elem_225">elem_225</option>
													<option value="elem_226">elem_226</option>
													<option value="elem_227">elem_227</option>
													<option value="elem_228">elem_228</option>
													<option value="elem_229">elem_229</option>
													<option value="elem_230">elem_230</option>
													<option value="elem_231">elem_231</option>
													<option value="elem_232">elem_232</option>
													<option value="elem_233">elem_233</option>
													<option value="elem_234">elem_234</option>
													<option value="elem_235">elem_235</option>
													<option value="elem_236">elem_236</option>
													<option value="elem_237">elem_237</option>
													<option value="elem_238">elem_238</option>
													<option value="elem_239">elem_239</option>
													<option value="elem_240">elem_240</option>
													<option value="elem_241">elem_241</option>
													<option value="elem_242">elem_242</option>
													<option value="elem_243">elem_243</option>
													<option value="elem_244">elem_244</option>
													<option value="elem_245">elem_245</option>
													<option value="elem_246">elem_246</option>
													<option value="elem_247">elem_247</option>
													<option value="elem_248">elem_248</option>
													<option value="elem_249">elem_249</option>
													<option value="elem_250">elem_250</option>
													<option value="elem_251">elem_251</option>
													<option value="elem_252">elem_252</option>
													<option value="elem_253">elem_253</option>
													<option value="elem_254">elem_254</option>
													<option value="elem_255">elem_255</option>
													<option value="elem_256">elem_256</option>
													<option value="elem_257">elem_257</option>
													<option value="elem_258">elem_258</option>
													<option value="elem_259">elem_259</option>
													<option value="elem_260">elem_260</option>
													<option value="elem_261">elem_261</option>
													<option value="elem_262">elem_262</option>
													<option value="elem_263">elem_263</option>
													<option value="elem_264">elem_264</option>
													<option value="elem_265">elem_265</option>
													<option value="elem_266">elem_266</option>
													<option value="elem_267">elem_267</option>
													<option value="elem_268">elem_268</option>
													<option value="elem_269">elem_269</option>
													<option value="elem_270">elem_270</option>
													<option value="elem_271">elem_271</option>
													<option value="elem_272">elem_272</option>
													<option value="elem_273">elem_273</option>
													<option value="elem_274">elem_274</option>
													<option value="elem_275">elem_275</option>
													<option value="elem_276">elem_276</option>
													<option value="elem_277">elem_277</option>
													<option value="elem_278">elem_278</option>
													<option value="elem_279">elem_279</option>
													<option value="elem_280">elem_280</option>
													<option value="elem_281">elem_281</option>
													<option value="elem_282">elem_282</option>
													<option value="elem_283">elem_283</option>
													<option value="elem_284">elem_284</option>
													<option value="elem_285">elem_285</option>
													<option value="elem_286">elem_286</option>
													<option value="elem_287">elem_287</option>
													<option value="elem_288">elem_288</option>
													<option value="elem_289">elem_289</option>
													<option value="elem_290">elem_290</option>
													<option value="elem_291">elem_291</option>
													<option value="elem_292">elem_292</option>
													<option value="elem_293">elem_293</option>
													<option value="elem_294">elem_294</option>
													<option value="elem_295">elem_295</option>
													<option value="elem_296">elem_296</option>
													<option value="elem_297">elem_297</option>
													<option value="elem_298">elem_298</option>
													<option value="elem_299">elem_299</option>
													<option value="elem_300">elem_300</option>
													<option value="elem_301">elem_301</option>
													<option value="elem_302">elem_302</option>
													<option value="elem_303">elem_303</option>
													<option value="elem_304">elem_304</option>
													<option value="elem_305">elem_305</option>
													<option value="elem_306">elem_306</option>
													<option value="elem_307">elem_307</option>
													<option value="elem_308">elem_308</option>
													<option value="elem_309">elem_309</option>
													<option value="elem_310">elem_310</option>
													<option value="elem_311">elem_311</option>
													<option value="elem_312">elem_312</option>
													<option value="elem_313">elem_313</option>
													<option value="elem_314">elem_314</option>
													<option value="elem_315">elem_315</option>
													<option value="elem_316">elem_316</option>
													<option value="elem_317">elem_317</option>
													<option value="elem_318">elem_318</option>
													<option value="elem_319">elem_319</option>
													<option value="elem_320">elem_320</option>
													<option value="elem_321">elem_321</option>
													<option value="elem_322">elem_322</option>
													<option value="elem_323">elem_323</option>
													<option value="elem_324">elem_324</option>
													<option value="elem_325">elem_325</option>
													<option value="elem_326">elem_326</option>
													<option value="elem_327">elem_327</option>
													<option value="elem_328">elem_328</option>
													<option value="elem_329">elem_329</option>
													<option value="elem_330">elem_330</option>
													<option value="elem_331">elem_331</option>
													<option value="elem_332">elem_332</option>
													<option value="elem_333">elem_333</option>
													<option value="elem_334">elem_334</option>
													<option value="elem_335">elem_335</option>
													<option value="elem_336">elem_336</option>
													<option value="elem_337">elem_337</option>
													<option value="elem_338">elem_338</option>
													<option value="elem_339">elem_339</option>
													<option value="elem_340">elem_340</option>
													<option value="elem_341">elem_341</option>
													<option value="elem_342">elem_342</option>
													<option value="elem_343">elem_343</option>
													<option value="elem_344">elem_344</option>
													<option value="elem_345">elem_345</option>
													<option value="elem_346">elem_346</option>
													<option value="elem_347">elem_347</option>
													<option value="elem_348">elem_348</option>
													<option value="elem_349">elem_349</option>
													<option value="elem_350">elem_350</option>
													<option value="elem_351">elem_351</option>
													<option value="elem_352">elem_352</option>
													<option value="elem_353">elem_353</option>
													<option value="elem_354">elem_354</option>
													<option value="elem_355">elem_355</option>
													<option value="elem_356">elem_356</option>
													<option value="elem_357">elem_357</option>
													<option value="elem_358">elem_358</option>
													<option value="elem_359">elem_359</option>
													<option value="elem_360">elem_360</option>
													<option value="elem_361">elem_361</option>
													<option value="elem_362">elem_362</option>
													<option value="elem_363">elem_363</option>
													<option value="elem_364">elem_364</option>
													<option value="elem_365">elem_365</option>
													<option value="elem_366">elem_366</option>
													<option value="elem_367">elem_367</option>
													<option value="elem_368">elem_368</option>
													<option value="elem_369">elem_369</option>
													<option value="elem_370">elem_370</option>
													<option value="elem_371">elem_371</option>
													<option value="elem_372">elem_372</option>
													<option value="elem_373">elem_373</option>
													<option value="elem_374">elem_374</option>
													<option value="elem_375">elem_375</option>
													<option value="elem_376">elem_376</option>
													<option value="elem_377">elem_377</option>
													<option value="elem_378">elem_378</option>
													<option value="elem_379">elem_379</option>
													<option value="elem_380">elem_380</option>
													<option value="elem_381">elem_381</option>
													<option value="elem_382">elem_382</option>
													<option value="elem_383">elem_383</option>
													<option value="elem_384">elem_384</option>
													<option value="elem_385">elem_385</option>
													<option value="elem_386">elem_386</option>
													<option value="elem_387">elem_387</option>
													<option value="elem_388">elem_388</option>
													<option value="elem_389">elem_389</option>
													<option value="elem_390">elem_390</option>
													<option value="elem_391">elem_391</option>
													<option value="elem_392">elem_392</option>
													<option value="elem_393">elem_393</option>
													<option value="elem_394">elem_394</option>
													<option value="elem_395">elem_395</option>
													<option value="elem_396">elem_396</option>
													<option value="elem_397">elem_397</option>
													<option value="elem_398">elem_398</option>
													<option value="elem_399">elem_399</option>
													<option value="elem_400">elem_400</option>
													<option value="elem_401">elem_401</option>
													<option value="elem_402">elem_402</option>
													<option value="elem_403">elem_403</option>
													<option value="elem_404">elem_404</option>
													<option value="elem_405">elem_405</option>
													<option value="elem_406">elem_406</option>
													<option value="elem_407">elem_407</option>
													<option value="elem_408">elem_408</option>
													<option value="elem_409">elem_409</option>
													<option value="elem_410">elem_410</option>
													<option value="elem_411">elem_411</option>
													<option value="elem_412">elem_412</option>
													<option value="elem_413">elem_413</option>
													<option value="elem_414">elem_414</option>
													<option value="elem_415">elem_415</option>
													<option value="elem_416">elem_416</option>
													<option value="elem_417">elem_417</option>
													<option value="elem_418">elem_418</option>
													<option value="elem_419">elem_419</option>
													<option value="elem_420">elem_420</option>
													<option value="elem_421">elem_421</option>
													<option value="elem_422">elem_422</option>
													<option value="elem_423">elem_423</option>
													<option value="elem_424">elem_424</option>
													<option value="elem_425">elem_425</option>
													<option value="elem_426">elem_426</option>
													<option value="elem_427">elem_427</option>
													<option value="elem_428">elem_428</option>
													<option value="elem_429">elem_429</option>
													<option value="elem_430">elem_430</option>
													<option value="elem_431">elem_431</option>
													<option value="elem_432">elem_432</option>
													<option value="elem_433">elem_433</option>
													<option value="elem_434">elem_434</option>
													<option value="elem_435">elem_435</option>
													<option value="elem_436">elem_436</option>
													<option value="elem_437">elem_437</option>
													<option value="elem_438">elem_438</option>
													<option value="elem_439">elem_439</option>
													<option value="elem_440">elem_440</option>
													<option value="elem_441">elem_441</option>
													<option value="elem_442">elem_442</option>
													<option value="elem_443">elem_443</option>
													<option value="elem_444">elem_444</option>
													<option value="elem_445">elem_445</option>
													<option value="elem_446">elem_446</option>
													<option value="elem_447">elem_447</option>
													<option value="elem_448">elem_448</option>
													<option value="elem_449">elem_449</option>
													<option value="elem_450">elem_450</option>
													<option value="elem_451">elem_451</option>
													<option value="elem_452">elem_452</option>
													<option value="elem_453">elem_453</option>
													<option value="elem_454">elem_454</option>
													<option value="elem_455">elem_455</option>
													<option value="elem_456">elem_456</option>
													<option value="elem_457">elem_457</option>
													<option value="elem_458">elem_458</option>
													<option value="elem_459">elem_459</option>
													<option value="elem_460">elem_460</option>
													<option value="elem_461">elem_461</option>
													<option value="elem_462">elem_462</option>
													<option value="elem_463">elem_463</option>
													<option value="elem_464">elem_464</option>
													<option value="elem_465">elem_465</option>
													<option value="elem_466">elem_466</option>
													<option value="elem_467">elem_467</option>
													<option value="elem_468">elem_468</option>
													<option value="elem_469">elem_469</option>
													<option value="elem_470">elem_470</option>
													<option value="elem_471">elem_471</option>
													<option value="elem_472">elem_472</option>
													<option value="elem_473">elem_473</option>
													<option value="elem_474">elem_474</option>
													<option value="elem_475">elem_475</option>
													<option value="elem_476">elem_476</option>
													<option value="elem_477">elem_477</option>
													<option value="elem_478">elem_478</option>
													<option value="elem_479">elem_479</option>
													<option value="elem_480">elem_480</option>
													<option value="elem_481">elem_481</option>
													<option value="elem_482">elem_482</option>
													<option value="elem_483">elem_483</option>
													<option value="elem_484">elem_484</option>
													<option value="elem_485">elem_485</option>
													<option value="elem_486">elem_486</option>
													<option value="elem_487">elem_487</option>
													<option value="elem_488">elem_488</option>
													<option value="elem_489">elem_489</option>
													<option value="elem_490">elem_490</option>
													<option value="elem_491">elem_491</option>
													<option value="elem_492">elem_492</option>
													<option value="elem_493">elem_493</option>
													<option value="elem_494">elem_494</option>
													<option value="elem_495">elem_495</option>
													<option value="elem_496">elem_496</option>
													<option value="elem_497">elem_497</option>
													<option value="elem_498">elem_498</option>
													<option value="elem_499">elem_499</option>
													<option value="elem_500">elem_500</option>
												</select>
											</div>
											<a href="#" id="select-all" class="btn btn-xs btn-default">Select all</a>
											<a href="#" id="deselect-all" class="btn btn-xs btn-default">Deselect all</a>
											<a href="#" id="select-20" class="btn btn-xs btn-default">Select 20</a>
											<a href="#" id="deselect-20" class="btn btn-xs btn-default">Deselect 20</a>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<h4 class="heading_a">Custom header/footer</h4>
											<select id="2col_custom" name="2col_custom" multiple>
												<option value="elem_1">Country 1</option>
												<option value="elem_2">Country 2</option>
												<option value="elem_3">Country 3</option>
												<option value="elem_4">Country 4</option>
												<option value="elem_5">Country 5</option>
												<option value="elem_6">Country 6</option>
												<option value="elem_7">Country 7</option>
												<option value="elem_8">Country 8</option>
												<option value="elem_9">Country 9</option>
												<option value="elem_10">Country 10</option>
												<option value="elem_11">Country 11</option>
												<option value="elem_12">Country 12</option>
												<option value="elem_13">Country 13</option>
												<option value="elem_14">Country 14</option>
												<option value="elem_15">Country 15</option>
												<option value="elem_16">Country 16</option>
												<option value="elem_17">Country 17</option>
												<option value="elem_18">Country 18</option>
												<option value="elem_19">Country 19</option>
												<option value="elem_20">Country 20</option>
												<option value="elem_21">Country 21</option>
												<option value="elem_22">Country 22</option>
												<option value="elem_23">Country 23</option>
												<option value="elem_24">Country 24</option>
												<option value="elem_25">Country 25</option>
												<option value="elem_26">Country 26</option>
												<option value="elem_27">Country 27</option>
												<option value="elem_28">Country 28</option>
												<option value="elem_29">Country 29</option>
												<option value="elem_30">Country 30</option>
												<option value="elem_31">Country 31</option>
												<option value="elem_32">Country 32</option>
												<option value="elem_33">Country 33</option>
												<option value="elem_34">Country 34</option>
												<option value="elem_35">Country 35</option>
												<option value="elem_36">Country 36</option>
												<option value="elem_37">Country 37</option>
												<option value="elem_38">Country 38</option>
												<option value="elem_39">Country 39</option>
												<option value="elem_40">Country 40</option>
											</select>
										</div>
										<div class="col-md-6">
											<h4 class="heading_a">Searchable</h4>
											<select id="2col_searchable" name="2col_searchable" multiple>
												<option value="Voluptatem eligendi nobis.">Voluptatem eligendi nobis.</option>
												<option value="Non ut.">Non ut.</option>
												<option value="Deleniti rerum eligendi.">Deleniti rerum eligendi.</option>
												<option value="Consequatur quis.">Consequatur quis.</option>
												<option value="Ut quibusdam.">Ut quibusdam.</option>
												<option value="Rem minus.">Rem minus.</option>
												<option value="Accusamus odio.">Accusamus odio.</option>
												<option value="Iure ut veniam.">Iure ut veniam.</option>
												<option value="Est tenetur suscipit.">Est tenetur suscipit.</option>
												<option value="Ea velit.">Ea velit.</option>
												<option value="Quo rerum.">Quo rerum.</option>
												<option value="Excepturi magni.">Excepturi magni.</option>
												<option value="Animi odit.">Animi odit.</option>
												<option value="Dignissimos et esse.">Dignissimos et esse.</option>
												<option value="Aperiam omnis molestiae.">Aperiam omnis molestiae.</option>
												<option value="Amet consequuntur quos.">Amet consequuntur quos.</option>
												<option value="Fuga ea delectus.">Fuga ea delectus.</option>
												<option value="Asperiores tempore.">Asperiores tempore.</option>
												<option value="Dolor reprehenderit a.">Dolor reprehenderit a.</option>
												<option value="Voluptatem eligendi.">Voluptatem eligendi.</option>
												<option value="Accusantium voluptas.">Accusantium voluptas.</option>
												<option value="Necessitatibus dicta enim.">Necessitatibus dicta enim.</option>
												<option value="Recusandae quis ducimus.">Recusandae quis ducimus.</option>
												<option value="Mollitia at ut.">Mollitia at ut.</option>
												<option value="Quo corporis.">Quo corporis.</option>
												<option value="Ut ducimus.">Ut ducimus.</option>
												<option value="Qui velit id.">Qui velit id.</option>
												<option value="Ut accusantium cum.">Ut accusantium cum.</option>
												<option value="Nesciunt sapiente maxime.">Nesciunt sapiente maxime.</option>
												<option value="Perferendis et quia.">Perferendis et quia.</option>
												<option value="Voluptates aspernatur.">Voluptates aspernatur.</option>
												<option value="Eum ipsa.">Eum ipsa.</option>
												<option value="Debitis et.">Debitis et.</option>
												<option value="Mollitia est cumque.">Mollitia est cumque.</option>
												<option value="Officiis mollitia ut.">Officiis mollitia ut.</option>
												<option value="Ut voluptatem natus.">Ut voluptatem natus.</option>
												<option value="Minima eos aut.">Minima eos aut.</option>
												<option value="Libero quis labore.">Libero quis labore.</option>
												<option value="Asperiores eum officiis.">Asperiores eum officiis.</option>
												<option value="Placeat necessitatibus.">Placeat necessitatibus.</option>
												<option value="Quidem harum velit.">Quidem harum velit.</option>
												<option value="Et sed aut.">Et sed aut.</option>
												<option value="Sunt fugiat voluptas.">Sunt fugiat voluptas.</option>
												<option value="Aspernatur exercitationem.">Aspernatur exercitationem.</option>
												<option value="Reprehenderit illum.">Reprehenderit illum.</option>
												<option value="Voluptas voluptate quos.">Voluptas voluptate quos.</option>
												<option value="Odit et voluptatem.">Odit et voluptatem.</option>
												<option value="Sed nihil ut.">Sed nihil ut.</option>
												<option value="Laborum nam quas.">Laborum nam quas.</option>
												<option value="Alias et.">Alias et.</option>
												<option value="Ex eum.">Ex eum.</option>
												<option value="Non quia.">Non quia.</option>
												<option value="Laboriosam ut eos.">Laboriosam ut eos.</option>
												<option value="Est doloribus tempora.">Est doloribus tempora.</option>
												<option value="Ab eos.">Ab eos.</option>
												<option value="Eaque in.">Eaque in.</option>
												<option value="Placeat distinctio.">Placeat distinctio.</option>
												<option value="Blanditiis quia.">Blanditiis quia.</option>
												<option value="At molestiae recusandae.">At molestiae recusandae.</option>
												<option value="Eos autem.">Eos autem.</option>
												<option value="Necessitatibus et praesentium.">Necessitatibus et praesentium.</option>
												<option value="Corporis consequatur sed.">Corporis consequatur sed.</option>
												<option value="Qui nulla sed.">Qui nulla sed.</option>
												<option value="Quod quasi.">Quod quasi.</option>
												<option value="Et esse.">Et esse.</option>
												<option value="Dolorem sed.">Dolorem sed.</option>
												<option value="Cumque tempora dolores.">Cumque tempora dolores.</option>
												<option value="At excepturi voluptatem.">At excepturi voluptatem.</option>
												<option value="Officia id quia.">Officia id quia.</option>
												<option value="Odio temporibus.">Odio temporibus.</option>
												<option value="Impedit sequi.">Impedit sequi.</option>
												<option value="Nobis sit.">Nobis sit.</option>
												<option value="Quo dolores et.">Quo dolores et.</option>
												<option value="Aspernatur impedit labore.">Aspernatur impedit labore.</option>
												<option value="Ea quod nobis.">Ea quod nobis.</option>
												<option value="Ullam numquam laudantium.">Ullam numquam laudantium.</option>
												<option value="Quam corrupti qui.">Quam corrupti qui.</option>
												<option value="Doloremque cupiditate soluta.">Doloremque cupiditate soluta.</option>
												<option value="Porro magni.">Porro magni.</option>
												<option value="Sint ea accusamus.">Sint ea accusamus.</option>
												<option value="Quo perspiciatis.">Quo perspiciatis.</option>
												<option value="Ut et animi.">Ut et animi.</option>
												<option value="Libero culpa.">Libero culpa.</option>
												<option value="Rem distinctio.">Rem distinctio.</option>
												<option value="Qui accusantium.">Qui accusantium.</option>
												<option value="Iure velit.">Iure velit.</option>
												<option value="Enim consequatur aut.">Enim consequatur aut.</option>
												<option value="Non id.">Non id.</option>
												<option value="Exercitationem atque aliquam.">Exercitationem atque aliquam.</option>
												<option value="Saepe quo.">Saepe quo.</option>
												<option value="Commodi sint.">Commodi sint.</option>
												<option value="Vitae neque.">Vitae neque.</option>
												<option value="Autem itaque.">Autem itaque.</option>
												<option value="Officiis et sunt.">Officiis et sunt.</option>
												<option value="Et voluptatem.">Et voluptatem.</option>
												<option value="Magnam veritatis quidem.">Magnam veritatis quidem.</option>
												<option value="Aut odio asperiores.">Aut odio asperiores.</option>
												<option value="Excepturi dolores.">Excepturi dolores.</option>
												<option value="Expedita accusantium rerum.">Expedita accusantium rerum.</option>
												<option value="Recusandae quia quis.">Recusandae quia quis.</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Enhanced select box, tag handler</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6 clearfix">
											<h4 class="heading_a">Basic</h4>
											<select id="s2_basic" class="form-control">
												<option value=""></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
											</select>
										</div>
										<div class="col-md-6 clearfix">
											<h4 class="heading_a">Multi Value</h4>
											<select id="s2_multi_value" class="form-control" multiple>
												<option value=""></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 clearfix">
											<h4 class="heading_a">Auto Tokenization</h4>
											<input type="text" id="s2_tokenization" class="form-control" value="green,red">
											<span class="help-block">Try typing in the search field above and entering a space or a comma.</span>
										</div>
										<div class="col-md-6 clearfix">
											<h4 class="heading_a">External Value Change & Templating</h4>
											<div class="sepH_a">
												<select id="s2_ext_value" class="form-control" multiple>
														<option value="AF">Afghanistan</option>
														<option value="AX">Åland Islands</option>
														<option value="AL">Albania</option>
														<option value="DZ">Algeria</option>
														<option value="AS">American Samoa</option>
														<option value="AD">Andorra</option>
														<option value="AO">Angola</option>
														<option value="AI">Anguilla</option>
														<option value="AQ">Antarctica</option>
														<option value="AG">Antigua and Barbuda</option>
														<option value="AR">Argentina</option>
														<option value="AM">Armenia</option>
														<option value="AW">Aruba</option>
														<option value="AU">Australia</option>
														<option value="AT">Austria</option>
														<option value="AZ">Azerbaijan</option>
														<option value="BS">Bahamas</option>
														<option value="BH">Bahrain</option>
														<option value="BD">Bangladesh</option>
														<option value="BB">Barbados</option>
														<option value="BY">Belarus</option>
														<option value="BE">Belgium</option>
														<option value="BZ">Belize</option>
														<option value="BJ">Benin</option>
														<option value="BM">Bermuda</option>
														<option value="BT">Bhutan</option>
														<option value="BO">Bolivia, Plurinational State of</option>
														<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
														<option value="BA">Bosnia and Herzegovina</option>
														<option value="BW">Botswana</option>
														<option value="BV">Bouvet Island</option>
														<option value="BR">Brazil</option>
														<option value="IO">British Indian Ocean Territory</option>
														<option value="BN">Brunei Darussalam</option>
														<option value="BG">Bulgaria</option>
														<option value="BF">Burkina Faso</option>
														<option value="BI">Burundi</option>
														<option value="KH">Cambodia</option>
														<option value="CM">Cameroon</option>
														<option value="CA">Canada</option>
														<option value="CV">Cape Verde</option>
														<option value="KY">Cayman Islands</option>
														<option value="CF">Central African Republic</option>
														<option value="TD">Chad</option>
														<option value="CL">Chile</option>
														<option value="CN">China</option>
														<option value="CX">Christmas Island</option>
														<option value="CC">Cocos (Keeling) Islands</option>
														<option value="CO">Colombia</option>
														<option value="KM">Comoros</option>
														<option value="CG">Congo</option>
														<option value="CD">Congo, the Democratic Republic of the</option>
														<option value="CK">Cook Islands</option>
														<option value="CR">Costa Rica</option>
														<option value="CI">Côte d'Ivoire</option>
														<option value="HR">Croatia</option>
														<option value="CU">Cuba</option>
														<option value="CW">Curaçao</option>
														<option value="CY">Cyprus</option>
														<option value="CZ">Czech Republic</option>
														<option value="DK">Denmark</option>
														<option value="DJ">Djibouti</option>
														<option value="DM">Dominica</option>
														<option value="DO">Dominican Republic</option>
														<option value="EC">Ecuador</option>
														<option value="EG">Egypt</option>
														<option value="SV">El Salvador</option>
														<option value="GQ">Equatorial Guinea</option>
														<option value="ER">Eritrea</option>
														<option value="EE">Estonia</option>
														<option value="ET">Ethiopia</option>
														<option value="FK">Falkland Islands (Malvinas)</option>
														<option value="FO">Faroe Islands</option>
														<option value="FJ">Fiji</option>
														<option value="FI">Finland</option>
														<option value="FR">France</option>
														<option value="GF">French Guiana</option>
														<option value="PF">French Polynesia</option>
														<option value="TF">French Southern Territories</option>
														<option value="GA">Gabon</option>
														<option value="GM">Gambia</option>
														<option value="GE">Georgia</option>
														<option value="DE">Germany</option>
														<option value="GH">Ghana</option>
														<option value="GI">Gibraltar</option>
														<option value="GR">Greece</option>
														<option value="GL">Greenland</option>
														<option value="GD">Grenada</option>
														<option value="GP">Guadeloupe</option>
														<option value="GU">Guam</option>
														<option value="GT">Guatemala</option>
														<option value="GG">Guernsey</option>
														<option value="GN">Guinea</option>
														<option value="GW">Guinea-Bissau</option>
														<option value="GY">Guyana</option>
														<option value="HT">Haiti</option>
														<option value="HM">Heard Island and McDonald Islands</option>
														<option value="VA">Holy See (Vatican City State)</option>
														<option value="HN">Honduras</option>
														<option value="HK">Hong Kong</option>
														<option value="HU">Hungary</option>
														<option value="IS">Iceland</option>
														<option value="IN">India</option>
														<option value="ID">Indonesia</option>
														<option value="IR">Iran, Islamic Republic of</option>
														<option value="IQ">Iraq</option>
														<option value="IE">Ireland</option>
														<option value="IM">Isle of Man</option>
														<option value="IL">Israel</option>
														<option value="IT">Italy</option>
														<option value="JM">Jamaica</option>
														<option value="JP">Japan</option>
														<option value="JE">Jersey</option>
														<option value="JO">Jordan</option>
														<option value="KZ">Kazakhstan</option>
														<option value="KE">Kenya</option>
														<option value="KI">Kiribati</option>
														<option value="KP">Korea, Democratic People's Republic of</option>
														<option value="KR">Korea, Republic of</option>
														<option value="KW">Kuwait</option>
														<option value="KG">Kyrgyzstan</option>
														<option value="LA">Lao People's Democratic Republic</option>
														<option value="LV">Latvia</option>
														<option value="LB">Lebanon</option>
														<option value="LS">Lesotho</option>
														<option value="LR">Liberia</option>
														<option value="LY">Libya</option>
														<option value="LI">Liechtenstein</option>
														<option value="LT">Lithuania</option>
														<option value="LU">Luxembourg</option>
														<option value="MO">Macao</option>
														<option value="MK">Macedonia, the former Yugoslav Republic of</option>
														<option value="MG">Madagascar</option>
														<option value="MW">Malawi</option>
														<option value="MY">Malaysia</option>
														<option value="MV">Maldives</option>
														<option value="ML">Mali</option>
														<option value="MT">Malta</option>
														<option value="MH">Marshall Islands</option>
														<option value="MQ">Martinique</option>
														<option value="MR">Mauritania</option>
														<option value="MU">Mauritius</option>
														<option value="YT">Mayotte</option>
														<option value="MX">Mexico</option>
														<option value="FM">Micronesia, Federated States of</option>
														<option value="MD">Moldova, Republic of</option>
														<option value="MC">Monaco</option>
														<option value="MN">Mongolia</option>
														<option value="ME">Montenegro</option>
														<option value="MS">Montserrat</option>
														<option value="MA">Morocco</option>
														<option value="MZ">Mozambique</option>
														<option value="MM">Myanmar</option>
														<option value="NA">Namibia</option>
														<option value="NR">Nauru</option>
														<option value="NP">Nepal</option>
														<option value="NL">Netherlands</option>
														<option value="NC">New Caledonia</option>
														<option value="NZ">New Zealand</option>
														<option value="NI">Nicaragua</option>
														<option value="NE">Niger</option>
														<option value="NG">Nigeria</option>
														<option value="NU">Niue</option>
														<option value="NF">Norfolk Island</option>
														<option value="MP">Northern Mariana Islands</option>
														<option value="NO">Norway</option>
														<option value="OM">Oman</option>
														<option value="PK">Pakistan</option>
														<option value="PW">Palau</option>
														<option value="PS">Palestinian Territory, Occupied</option>
														<option value="PA">Panama</option>
														<option value="PG">Papua New Guinea</option>
														<option value="PY">Paraguay</option>
														<option value="PE">Peru</option>
														<option value="PH">Philippines</option>
														<option value="PN">Pitcairn</option>
														<option value="PL">Poland</option>
														<option value="PT">Portugal</option>
														<option value="PR">Puerto Rico</option>
														<option value="QA">Qatar</option>
														<option value="RE">Réunion</option>
														<option value="RO">Romania</option>
														<option value="RU">Russian Federation</option>
														<option value="RW">Rwanda</option>
														<option value="BL">Saint Barthélemy</option>
														<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
														<option value="KN">Saint Kitts and Nevis</option>
														<option value="LC">Saint Lucia</option>
														<option value="MF">Saint Martin (French part)</option>
														<option value="PM">Saint Pierre and Miquelon</option>
														<option value="VC">Saint Vincent and the Grenadines</option>
														<option value="WS">Samoa</option>
														<option value="SM">San Marino</option>
														<option value="ST">Sao Tome and Principe</option>
														<option value="SA">Saudi Arabia</option>
														<option value="SN">Senegal</option>
														<option value="RS">Serbia</option>
														<option value="SC">Seychelles</option>
														<option value="SL">Sierra Leone</option>
														<option value="SG">Singapore</option>
														<option value="SX">Sint Maarten (Dutch part)</option>
														<option value="SK">Slovakia</option>
														<option value="SI">Slovenia</option>
														<option value="SB">Solomon Islands</option>
														<option value="SO">Somalia</option>
														<option value="ZA">South Africa</option>
														<option value="GS">South Georgia and the South Sandwich Islands</option>
														<option value="SS">South Sudan</option>
														<option value="ES">Spain</option>
														<option value="LK">Sri Lanka</option>
														<option value="SD">Sudan</option>
														<option value="SR">Suriname</option>
														<option value="SJ">Svalbard and Jan Mayen</option>
														<option value="SZ">Swaziland</option>
														<option value="SE">Sweden</option>
														<option value="CH">Switzerland</option>
														<option value="SY">Syrian Arab Republic</option>
														<option value="TW">Taiwan, Province of China</option>
														<option value="TJ">Tajikistan</option>
														<option value="TZ">Tanzania, United Republic of</option>
														<option value="TH">Thailand</option>
														<option value="TL">Timor-Leste</option>
														<option value="TG">Togo</option>
														<option value="TK">Tokelau</option>
														<option value="TO">Tonga</option>
														<option value="TT">Trinidad and Tobago</option>
														<option value="TN">Tunisia</option>
														<option value="TR">Turkey</option>
														<option value="TM">Turkmenistan</option>
														<option value="TC">Turks and Caicos Islands</option>
														<option value="TV">Tuvalu</option>
														<option value="UG">Uganda</option>
														<option value="UA">Ukraine</option>
														<option value="AE">United Arab Emirates</option>
														<option value="GB">United Kingdom</option>
														<option value="US">United States</option>
														<option value="UM">United States Minor Outlying Islands</option>
														<option value="UY">Uruguay</option>
														<option value="UZ">Uzbekistan</option>
														<option value="VU">Vanuatu</option>
														<option value="VE">Venezuela, Bolivarian Republic of</option>
														<option value="VN">Viet Nam</option>
														<option value="VG">Virgin Islands, British</option>
														<option value="VI">Virgin Islands, U.S.</option>
														<option value="WF">Wallis and Futuna</option>
														<option value="EH">Western Sahara</option>
														<option value="YE">Yemen</option>
														<option value="ZM">Zambia</option>
														<option value="ZW">Zimbabwe</option>												
												</select>
											</div>
											<a href="#" id="s2_ext_us" class="btn btn-sm btn-default">Select USA</a>
											<a href="#" id="s2_ext_br_gb" class="btn btn-sm btn-default">Select Brazil & UK</a>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Datepicker</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3">
											<h4 class="heading_a">Default</h4>
											<input class="form-control ts_datepicker" type="text">
											<span class="help-block">mm/dd/yyyy</span>
										</div>
										<div class="col-md-3">
											<h4 class="heading_a">As component</h4>
											<div class="input-group date ts_datepicker" data-date-format="dd-mm-yyyy" >
												<input class="form-control" type="text">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											</div>
											<span class="help-block">dd-mm-yyyy</span>
										</div>
										<div class="col-md-3">
											<h4 class="heading_a">Autoclose</h4>
											<div class="input-group date ts_datepicker" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
												<input class="form-control" type="text">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											</div>
											<span class="help-block">dd-mm-yyyy</span>
										</div>
										<div class="col-md-3">
											<h4 class="heading_a">Start with year view</h4>
											<div class="input-group date ts_datepicker" data-date-format="dd.mm.yyyy" data-date-autoclose="true" data-date-start-view="2">
												<input class="form-control" type="text">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											</div>
											<span class="help-block">dd.mm.yyyy</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<h4 class="heading_a">Range input</h4>
											<div class="row">
												<div class="col-md-6">
													<input class="form-control" type="text" placeholder="Start date" id="dpStart" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
												</div>
												<div class="col-md-6">
													<input class="form-control" type="text" placeholder="End date" id="dpEnd" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
												</div>
											</div>
											<span class="help-block">dd-mm-yyyy</span>
										</div>
										<div class="col-md-6">
											<h4 class="heading_a">Inline</h4>
											<div class="ts_datepicker" data-date-format="dd-mm-yyyy"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Daterangepicker</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-4">
											<h4 class="heading_a">Reservations</h4>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
												<input type="text" name="reservation" id="reservation" class="form-control">
											</div>
										</div>
										<div class="col-md-4">
											<h4 class="heading_a">Pre-defined Ranges</h4>
											<div id="reportrange" class="btn">
												<span>February 24, 2014 - March 26, 2014</span> <b class="caret"></b>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Timepicker</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3">
											<h4 class="heading_a">Default timepicker</h4>
											<div class="input-group bootstrap-timepicker">
												<input id="tp-default" type="text" class="form-control">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
											</div>
										</div>
										<div class="col-md-3">
											<h4 class="heading_a">Inside a modal</h4>
											<div class="input-group bootstrap-timepicker">
												<input id="tp-24h" type="text" class="form-control">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
											</div>
											<span class="help-block">24h mode</span>
										</div>
										<div class="col-md-3">
											<h4 class="heading_a">Timepicker in modal</h4>
											<a data-toggle="modal" href="#tp_modal" class="btn btn-default">Open Modal</a>
											<div class="modal fade" id="tp_modal">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Timepicker in Modal</h4>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-md-4">
																	<div class="bootstrap-timepicker">
																		<input id="tp-modal" type="text" value="10:35 PM" class="form-control">
																		<i class="fa fa-clock-o"></i>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Textarea autosize</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12">
											<textarea name="exmpl_textarea_autosize" id="exmpl_textarea_autosize" cols="30" rows="4" class="form-control autosize" placeholder="Autosize with a CSS transition."></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">Input mask</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3">
											<input type="text" class="form-control" id="mask_date">
											<span class="help-block">showMaskOnHover: false</span>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" id="mask_phone">
											<span class="help-block">(999) 999-9999</span>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" id="mask_plate">
											<span class="help-block">[9-]AAA-999</span>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" id="mask_numeric">
											<span class="help-block">$999.999,99</span>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<input type="text" class="form-control" id="mask_mac">
											<span class="help-block">MAC adress</span>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" id="mask_callback">
											<span class="help-block">Oncomplete callback</span>
										</div>
										<div class="col-md-3">
											<input type="text" class="form-control" data-inputmask="'mask':'99-9999999'">
											<span class="help-block">data-inputmask="'mask': '99-9999999'"</span>
										</div>
									</div>
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

		<!--  datepicker -->
		<script src="assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<!-- date range picker -->
		<script src="assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- timepicker -->
		<script src="assets/lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<!-- ion.rangeSlider -->
		<script src="assets/lib/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
		<!--  bootstrap switches -->
		<script src="assets/lib/bootstrap-switch/build/js/bootstrap-switch.min.js"></script>
		<!--  2col multiselect -->
		<script src="assets/lib/multi-select/js/jquery.multi-select.js"></script>
		<script src="assets/js/jquery.quicksearch.js"></script>
		<!-- multiselect, tagging -->
		<script src="assets/lib/select2/select2.min.js"></script>
		<!-- textarea autosize -->
		<script src="assets/lib/autosize/jquery.autosize.min.js"></script>
		<!-- masked inputs -->
		<script src="assets/lib/jquery.inputmask/dist/jquery.inputmask.bundle.min.js"></script>
		
		<!-- form extended elements functions -->
		<script src="assets/js/apps/tisa_extended_elements.js"></script>
		
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (tables_datatables)</title>
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

		<!-- datatables -->
		<link rel="stylesheet" href="assets/lib/DataTables/media/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="assets/lib/DataTables/extensions/TableTools/css/dataTables.tableTools.min.css">
		<link rel="stylesheet" href="assets/lib/DataTables/extensions/Scroller/css/dataTables.scroller.min.css">
				
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
								<div class="panel-heading">Basic</div>
								<div class="panel-body">
									<table id="dt_basic" class="table table-striped">
										<thead>
											<tr>
												<th>id</th>
												<th>Short name</th>
												<th>Long Name</th>
												<th>Calling Code</th>
												<th>ISO 2</th>
												<th>ccTLD</th>
												<th>UN Member</th>
											</tr>
										</thead>
										<tbody>
											<tr><td>1</td><td>Afghanistan</td><td>Islamic Republic of Afghanistan</td><td>93</td><td>AF</td><td>.af</td><td>yes</td></tr>
											<tr><td>2</td><td>Aland Islands</td><td>Åland Islands</td><td>358</td><td>AX</td><td>.ax</td><td>no</td></tr>
											<tr><td>3</td><td>Albania</td><td>Republic of Albania</td><td>355</td><td>AL</td><td>.al</td><td>yes</td></tr>
											<tr><td>4</td><td>Algeria</td><td>People's Democratic Republic of Algeria</td><td>213</td><td>DZ</td><td>.dz</td><td>yes</td></tr>
											<tr><td>5</td><td>American Samoa</td><td>American Samoa</td><td>1+684</td><td>AS</td><td>.as</td><td>no</td></tr>
											<tr><td>6</td><td>Andorra</td><td>Principality of Andorra</td><td>376</td><td>AD</td><td>.ad</td><td>yes</td></tr>
											<tr><td>7</td><td>Angola</td><td>Republic of Angola</td><td>244</td><td>AO</td><td>.ao</td><td>yes</td></tr>
											<tr><td>8</td><td>Anguilla</td><td>Anguilla</td><td>1+264</td><td>AI</td><td>.ai</td><td>no</td></tr>
											<tr><td>9</td><td>Antarctica</td><td>Antarctica</td><td>672</td><td>AQ</td><td>.aq</td><td>no</td></tr>
											<tr><td>10</td><td>Antigua and Barbuda</td><td>Antigua and Barbuda</td><td>1+268</td><td>AG</td><td>.ag</td><td>yes</td></tr>
											<tr><td>11</td><td>Argentina</td><td>Argentine Republic</td><td>54</td><td>AR</td><td>.ar</td><td>yes</td></tr>
											<tr><td>12</td><td>Armenia</td><td>Republic of Armenia</td><td>374</td><td>AM</td><td>.am</td><td>yes</td></tr>
											<tr><td>13</td><td>Aruba</td><td>Aruba</td><td>297</td><td>AW</td><td>.aw</td><td>no</td></tr>
											<tr><td>14</td><td>Australia</td><td>Commonwealth of Australia</td><td>61</td><td>AU</td><td>.au</td><td>yes</td></tr>
											<tr><td>15</td><td>Austria</td><td>Republic of Austria</td><td>43</td><td>AT</td><td>.at</td><td>yes</td></tr>
											<tr><td>16</td><td>Azerbaijan</td><td>Republic of Azerbaijan</td><td>994</td><td>AZ</td><td>.az</td><td>yes</td></tr>
											<tr><td>17</td><td>Bahamas</td><td>Commonwealth of The Bahamas</td><td>1+242</td><td>BS</td><td>.bs</td><td>yes</td></tr>
											<tr><td>18</td><td>Bahrain</td><td>Kingdom of Bahrain</td><td>973</td><td>BH</td><td>.bh</td><td>yes</td></tr>
											<tr><td>19</td><td>Bangladesh</td><td>People's Republic of Bangladesh</td><td>880</td><td>BD</td><td>.bd</td><td>yes</td></tr>
											<tr><td>20</td><td>Barbados</td><td>Barbados</td><td>1+246</td><td>BB</td><td>.bb</td><td>yes</td></tr>
											<tr><td>21</td><td>Belarus</td><td>Republic of Belarus</td><td>375</td><td>BY</td><td>.by</td><td>yes</td></tr>
											<tr><td>22</td><td>Belgium</td><td>Kingdom of Belgium</td><td>32</td><td>BE</td><td>.be</td><td>yes</td></tr>
											<tr><td>23</td><td>Belize</td><td>Belize</td><td>501</td><td>BZ</td><td>.bz</td><td>yes</td></tr>
											<tr><td>24</td><td>Benin</td><td>Republic of Benin</td><td>229</td><td>BJ</td><td>.bj</td><td>yes</td></tr>
											<tr><td>25</td><td>Bermuda</td><td>Bermuda Islands</td><td>1+441</td><td>BM</td><td>.bm</td><td>no</td></tr>
											<tr><td>26</td><td>Bhutan</td><td>Kingdom of Bhutan</td><td>975</td><td>BT</td><td>.bt</td><td>yes</td></tr>
											<tr><td>27</td><td>Bolivia</td><td>Plurinational State of Bolivia</td><td>591</td><td>BO</td><td>.bo</td><td>yes</td></tr>
											<tr><td>28</td><td>Bonaire, Sint Eustatius and Saba</td><td>Bonaire, Sint Eustatius and Saba</td><td>599</td><td>BQ</td><td>.bq</td><td>no</td></tr>
											<tr><td>29</td><td>Bosnia and Herzegovina</td><td>Bosnia and Herzegovina</td><td>387</td><td>BA</td><td>.ba</td><td>yes</td></tr>
											<tr><td>30</td><td>Botswana</td><td>Republic of Botswana</td><td>267</td><td>BW</td><td>.bw</td><td>yes</td></tr>
											<tr><td>31</td><td>Bouvet Island</td><td>Bouvet Island</td><td>NONE</td><td>BV</td><td>.bv</td><td>no</td></tr>
											<tr><td>32</td><td>Brazil</td><td>Federative Republic of Brazil</td><td>55</td><td>BR</td><td>.br</td><td>yes</td></tr>
											<tr><td>33</td><td>British Indian Ocean Territory</td><td>British Indian Ocean Territory</td><td>246</td><td>IO</td><td>.io</td><td>no</td></tr>
											<tr><td>34</td><td>Brunei</td><td>Brunei Darussalam</td><td>673</td><td>BN</td><td>.bn</td><td>yes</td></tr>
											<tr><td>35</td><td>Bulgaria</td><td>Republic of Bulgaria</td><td>359</td><td>BG</td><td>.bg</td><td>yes</td></tr>
											<tr><td>36</td><td>Burkina Faso</td><td>Burkina Faso</td><td>226</td><td>BF</td><td>.bf</td><td>yes</td></tr>
											<tr><td>37</td><td>Burundi</td><td>Republic of Burundi</td><td>257</td><td>BI</td><td>.bi</td><td>yes</td></tr>
											<tr><td>38</td><td>Cambodia</td><td>Kingdom of Cambodia</td><td>855</td><td>KH</td><td>.kh</td><td>yes</td></tr>
											<tr><td>39</td><td>Cameroon</td><td>Republic of Cameroon</td><td>237</td><td>CM</td><td>.cm</td><td>yes</td></tr>
											<tr><td>40</td><td>Canada</td><td>Canada</td><td>1</td><td>CA</td><td>.ca</td><td>yes</td></tr>
											<tr><td>41</td><td>Cape Verde</td><td>Republic of Cape Verde</td><td>238</td><td>CV</td><td>.cv</td><td>yes</td></tr>
											<tr><td>42</td><td>Cayman Islands</td><td>The Cayman Islands</td><td>1+345</td><td>KY</td><td>.ky</td><td>no</td></tr>
											<tr><td>43</td><td>Central African Republic</td><td>Central African Republic</td><td>236</td><td>CF</td><td>.cf</td><td>yes</td></tr>
											<tr><td>44</td><td>Chad</td><td>Republic of Chad</td><td>235</td><td>TD</td><td>.td</td><td>yes</td></tr>
											<tr><td>45</td><td>Chile</td><td>Republic of Chile</td><td>56</td><td>CL</td><td>.cl</td><td>yes</td></tr>
											<tr><td>46</td><td>China</td><td>People's Republic of China</td><td>86</td><td>CN</td><td>.cn</td><td>yes</td></tr>
											<tr><td>47</td><td>Christmas Island</td><td>Christmas Island</td><td>61</td><td>CX</td><td>.cx</td><td>no</td></tr>
											<tr><td>48</td><td>Cocos (Keeling) Islands</td><td>Cocos (Keeling) Islands</td><td>61</td><td>CC</td><td>.cc</td><td>no</td></tr>
											<tr><td>49</td><td>Colombia</td><td>Republic of Colombia</td><td>57</td><td>CO</td><td>.co</td><td>yes</td></tr>
											<tr><td>50</td><td>Comoros</td><td>Union of the Comoros</td><td>269</td><td>KM</td><td>.km</td><td>yes</td></tr>
											<tr><td>51</td><td>Congo</td><td>Republic of the Congo</td><td>242</td><td>CG</td><td>.cg</td><td>yes</td></tr>
											<tr><td>52</td><td>Cook Islands</td><td>Cook Islands</td><td>682</td><td>CK</td><td>.ck</td><td>some</td></tr>
											<tr><td>53</td><td>Costa Rica</td><td>Republic of Costa Rica</td><td>506</td><td>CR</td><td>.cr</td><td>yes</td></tr>
											<tr><td>54</td><td>Cote d'ivoire (Ivory Coast)</td><td>Republic of Côte D'Ivoire (Ivory Coast)</td><td>225</td><td>CI</td><td>.ci</td><td>yes</td></tr>
											<tr><td>55</td><td>Croatia</td><td>Republic of Croatia</td><td>385</td><td>HR</td><td>.hr</td><td>yes</td></tr>
											<tr><td>56</td><td>Cuba</td><td>Republic of Cuba</td><td>53</td><td>CU</td><td>.cu</td><td>yes</td></tr>
											<tr><td>57</td><td>Curacao</td><td>Curaçao</td><td>599</td><td>CW</td><td>.cw</td><td>no</td></tr>
											<tr><td>58</td><td>Cyprus</td><td>Republic of Cyprus</td><td>357</td><td>CY</td><td>.cy</td><td>yes</td></tr>
											<tr><td>59</td><td>Czech Republic</td><td>Czech Republic</td><td>420</td><td>CZ</td><td>.cz</td><td>yes</td></tr>
											<tr><td>60</td><td>Democratic Republic of the Congo</td><td>Democratic Republic of the Congo</td><td>243</td><td>CD</td><td>.cd</td><td>yes</td></tr>
											<tr><td>61</td><td>Denmark</td><td>Kingdom of Denmark</td><td>45</td><td>DK</td><td>.dk</td><td>yes</td></tr>
											<tr><td>62</td><td>Djibouti</td><td>Republic of Djibouti</td><td>253</td><td>DJ</td><td>.dj</td><td>yes</td></tr>
											<tr><td>63</td><td>Dominica</td><td>Commonwealth of Dominica</td><td>1+767</td><td>DM</td><td>.dm</td><td>yes</td></tr>
											<tr><td>64</td><td>Dominican Republic</td><td>Dominican Republic</td><td>1+809, 8</td><td>DO</td><td>.do</td><td>yes</td></tr>
											<tr><td>65</td><td>Ecuador</td><td>Republic of Ecuador</td><td>593</td><td>EC</td><td>.ec</td><td>yes</td></tr>
											<tr><td>66</td><td>Egypt</td><td>Arab Republic of Egypt</td><td>20</td><td>EG</td><td>.eg</td><td>yes</td></tr>
											<tr><td>67</td><td>El Salvador</td><td>Republic of El Salvador</td><td>503</td><td>SV</td><td>.sv</td><td>yes</td></tr>
											<tr><td>68</td><td>Equatorial Guinea</td><td>Republic of Equatorial Guinea</td><td>240</td><td>GQ</td><td>.gq</td><td>yes</td></tr>
											<tr><td>69</td><td>Eritrea</td><td>State of Eritrea</td><td>291</td><td>ER</td><td>.er</td><td>yes</td></tr>
											<tr><td>70</td><td>Estonia</td><td>Republic of Estonia</td><td>372</td><td>EE</td><td>.ee</td><td>yes</td></tr>
											<tr><td>71</td><td>Ethiopia</td><td>Federal Democratic Republic of Ethiopia</td><td>251</td><td>ET</td><td>.et</td><td>yes</td></tr>
											<tr><td>72</td><td>Falkland Islands (Malvinas)</td><td>The Falkland Islands (Malvinas)</td><td>500</td><td>FK</td><td>.fk</td><td>no</td></tr>
											<tr><td>73</td><td>Faroe Islands</td><td>The Faroe Islands</td><td>298</td><td>FO</td><td>.fo</td><td>no</td></tr>
											<tr><td>74</td><td>Fiji</td><td>Republic of Fiji</td><td>679</td><td>FJ</td><td>.fj</td><td>yes</td></tr>
											<tr><td>75</td><td>Finland</td><td>Republic of Finland</td><td>358</td><td>FI</td><td>.fi</td><td>yes</td></tr>
											<tr><td>76</td><td>France</td><td>French Republic</td><td>33</td><td>FR</td><td>.fr</td><td>yes</td></tr>
											<tr><td>77</td><td>French Guiana</td><td>French Guiana</td><td>594</td><td>GF</td><td>.gf</td><td>no</td></tr>
											<tr><td>78</td><td>French Polynesia</td><td>French Polynesia</td><td>689</td><td>PF</td><td>.pf</td><td>no</td></tr>
											<tr><td>79</td><td>French Southern Territories</td><td>French Southern Territories</td><td></td><td>TF</td><td>.tf</td><td>no</td></tr>
											<tr><td>80</td><td>Gabon</td><td>Gabonese Republic</td><td>241</td><td>GA</td><td>.ga</td><td>yes</td></tr>
											<tr><td>81</td><td>Gambia</td><td>Republic of The Gambia</td><td>220</td><td>GM</td><td>.gm</td><td>yes</td></tr>
											<tr><td>82</td><td>Georgia</td><td>Georgia</td><td>995</td><td>GE</td><td>.ge</td><td>yes</td></tr>
											<tr><td>83</td><td>Germany</td><td>Federal Republic of Germany</td><td>49</td><td>DE</td><td>.de</td><td>yes</td></tr>
											<tr><td>84</td><td>Ghana</td><td>Republic of Ghana</td><td>233</td><td>GH</td><td>.gh</td><td>yes</td></tr>
											<tr><td>85</td><td>Gibraltar</td><td>Gibraltar</td><td>350</td><td>GI</td><td>.gi</td><td>no</td></tr>
											<tr><td>86</td><td>Greece</td><td>Hellenic Republic</td><td>30</td><td>GR</td><td>.gr</td><td>yes</td></tr>
											<tr><td>87</td><td>Greenland</td><td>Greenland</td><td>299</td><td>GL</td><td>.gl</td><td>no</td></tr>
											<tr><td>88</td><td>Grenada</td><td>Grenada</td><td>1+473</td><td>GD</td><td>.gd</td><td>yes</td></tr>
											<tr><td>89</td><td>Guadaloupe</td><td>Guadeloupe</td><td>590</td><td>GP</td><td>.gp</td><td>no</td></tr>
											<tr><td>90</td><td>Guam</td><td>Guam</td><td>1+671</td><td>GU</td><td>.gu</td><td>no</td></tr>
											<tr><td>91</td><td>Guatemala</td><td>Republic of Guatemala</td><td>502</td><td>GT</td><td>.gt</td><td>yes</td></tr>
											<tr><td>92</td><td>Guernsey</td><td>Guernsey</td><td>44</td><td>GG</td><td>.gg</td><td>no</td></tr>
											<tr><td>93</td><td>Guinea</td><td>Republic of Guinea</td><td>224</td><td>GN</td><td>.gn</td><td>yes</td></tr>
											<tr><td>94</td><td>Guinea-Bissau</td><td>Republic of Guinea-Bissau</td><td>245</td><td>GW</td><td>.gw</td><td>yes</td></tr>
											<tr><td>95</td><td>Guyana</td><td>Co-operative Republic of Guyana</td><td>592</td><td>GY</td><td>.gy</td><td>yes</td></tr>
											<tr><td>96</td><td>Haiti</td><td>Republic of Haiti</td><td>509</td><td>HT</td><td>.ht</td><td>yes</td></tr>
											<tr><td>97</td><td>Heard Island and McDonald Islands</td><td>Heard Island and McDonald Islands</td><td>NONE</td><td>HM</td><td>.hm</td><td>no</td></tr>
											<tr><td>98</td><td>Honduras</td><td>Republic of Honduras</td><td>504</td><td>HN</td><td>.hn</td><td>yes</td></tr>
											<tr><td>99</td><td>Hong Kong</td><td>Hong Kong</td><td>852</td><td>HK</td><td>.hk</td><td>no</td></tr>
											<tr><td>100</td><td>Hungary</td><td>Hungary</td><td>36</td><td>HU</td><td>.hu</td><td>yes</td></tr>
											<tr><td>101</td><td>Iceland</td><td>Republic of Iceland</td><td>354</td><td>IS</td><td>.is</td><td>yes</td></tr>
											<tr><td>102</td><td>India</td><td>Republic of India</td><td>91</td><td>IN</td><td>.in</td><td>yes</td></tr>
											<tr><td>103</td><td>Indonesia</td><td>Republic of Indonesia</td><td>62</td><td>ID</td><td>.id</td><td>yes</td></tr>
											<tr><td>104</td><td>Iran</td><td>Islamic Republic of Iran</td><td>98</td><td>IR</td><td>.ir</td><td>yes</td></tr>
											<tr><td>105</td><td>Iraq</td><td>Republic of Iraq</td><td>964</td><td>IQ</td><td>.iq</td><td>yes</td></tr>
											<tr><td>106</td><td>Ireland</td><td>Ireland</td><td>353</td><td>IE</td><td>.ie</td><td>yes</td></tr>
											<tr><td>107</td><td>Isle of Man</td><td>Isle of Man</td><td>44</td><td>IM</td><td>.im</td><td>no</td></tr>
											<tr><td>108</td><td>Israel</td><td>State of Israel</td><td>972</td><td>IL</td><td>.il</td><td>yes</td></tr>
											<tr><td>109</td><td>Italy</td><td>Italian Republic</td><td>39</td><td>IT</td><td>.jm</td><td>yes</td></tr>
											<tr><td>110</td><td>Jamaica</td><td>Jamaica</td><td>1+876</td><td>JM</td><td>.jm</td><td>yes</td></tr>
											<tr><td>111</td><td>Japan</td><td>Japan</td><td>81</td><td>JP</td><td>.jp</td><td>yes</td></tr>
											<tr><td>112</td><td>Jersey</td><td>The Bailiwick of Jersey</td><td>44</td><td>JE</td><td>.je</td><td>no</td></tr>
											<tr><td>113</td><td>Jordan</td><td>Hashemite Kingdom of Jordan</td><td>962</td><td>JO</td><td>.jo</td><td>yes</td></tr>
											<tr><td>114</td><td>Kazakhstan</td><td>Republic of Kazakhstan</td><td>7</td><td>KZ</td><td>.kz</td><td>yes</td></tr>
											<tr><td>115</td><td>Kenya</td><td>Republic of Kenya</td><td>254</td><td>KE</td><td>.ke</td><td>yes</td></tr>
											<tr><td>116</td><td>Kiribati</td><td>Republic of Kiribati</td><td>686</td><td>KI</td><td>.ki</td><td>yes</td></tr>
											<tr><td>117</td><td>Kosovo</td><td>Republic of Kosovo</td><td>381</td><td>XK</td><td></td><td>some</td></tr>
											<tr><td>118</td><td>Kuwait</td><td>State of Kuwait</td><td>965</td><td>KW</td><td>.kw</td><td>yes</td></tr>
											<tr><td>119</td><td>Kyrgyzstan</td><td>Kyrgyz Republic</td><td>996</td><td>KG</td><td>.kg</td><td>yes</td></tr>
											<tr><td>120</td><td>Laos</td><td>Lao People's Democratic Republic</td><td>856</td><td>LA</td><td>.la</td><td>yes</td></tr>
											<tr><td>121</td><td>Latvia</td><td>Republic of Latvia</td><td>371</td><td>LV</td><td>.lv</td><td>yes</td></tr>
											<tr><td>122</td><td>Lebanon</td><td>Republic of Lebanon</td><td>961</td><td>LB</td><td>.lb</td><td>yes</td></tr>
											<tr><td>123</td><td>Lesotho</td><td>Kingdom of Lesotho</td><td>266</td><td>LS</td><td>.ls</td><td>yes</td></tr>
											<tr><td>124</td><td>Liberia</td><td>Republic of Liberia</td><td>231</td><td>LR</td><td>.lr</td><td>yes</td></tr>
											<tr><td>125</td><td>Libya</td><td>Libya</td><td>218</td><td>LY</td><td>.ly</td><td>yes</td></tr>
											<tr><td>126</td><td>Liechtenstein</td><td>Principality of Liechtenstein</td><td>423</td><td>LI</td><td>.li</td><td>yes</td></tr>
											<tr><td>127</td><td>Lithuania</td><td>Republic of Lithuania</td><td>370</td><td>LT</td><td>.lt</td><td>yes</td></tr>
											<tr><td>128</td><td>Luxembourg</td><td>Grand Duchy of Luxembourg</td><td>352</td><td>LU</td><td>.lu</td><td>yes</td></tr>
											<tr><td>129</td><td>Macao</td><td>The Macao Special Administrative Region</td><td>853</td><td>MO</td><td>.mo</td><td>no</td></tr>
											<tr><td>130</td><td>Macedonia</td><td>The Former Yugoslav Republic of Macedonia</td><td>389</td><td>MK</td><td>.mk</td><td>yes</td></tr>
											<tr><td>131</td><td>Madagascar</td><td>Republic of Madagascar</td><td>261</td><td>MG</td><td>.mg</td><td>yes</td></tr>
											<tr><td>132</td><td>Malawi</td><td>Republic of Malawi</td><td>265</td><td>MW</td><td>.mw</td><td>yes</td></tr>
											<tr><td>133</td><td>Malaysia</td><td>Malaysia</td><td>60</td><td>MY</td><td>.my</td><td>yes</td></tr>
											<tr><td>134</td><td>Maldives</td><td>Republic of Maldives</td><td>960</td><td>MV</td><td>.mv</td><td>yes</td></tr>
											<tr><td>135</td><td>Mali</td><td>Republic of Mali</td><td>223</td><td>ML</td><td>.ml</td><td>yes</td></tr>
											<tr><td>136</td><td>Malta</td><td>Republic of Malta</td><td>356</td><td>MT</td><td>.mt</td><td>yes</td></tr>
											<tr><td>137</td><td>Marshall Islands</td><td>Republic of the Marshall Islands</td><td>692</td><td>MH</td><td>.mh</td><td>yes</td></tr>
											<tr><td>138</td><td>Martinique</td><td>Martinique</td><td>596</td><td>MQ</td><td>.mq</td><td>no</td></tr>
											<tr><td>139</td><td>Mauritania</td><td>Islamic Republic of Mauritania</td><td>222</td><td>MR</td><td>.mr</td><td>yes</td></tr>
											<tr><td>140</td><td>Mauritius</td><td>Republic of Mauritius</td><td>230</td><td>MU</td><td>.mu</td><td>yes</td></tr>
											<tr><td>141</td><td>Mayotte</td><td>Mayotte</td><td>262</td><td>YT</td><td>.yt</td><td>no</td></tr>
											<tr><td>142</td><td>Mexico</td><td>United Mexican States</td><td>52</td><td>MX</td><td>.mx</td><td>yes</td></tr>
											<tr><td>143</td><td>Micronesia</td><td>Federated States of Micronesia</td><td>691</td><td>FM</td><td>.fm</td><td>yes</td></tr>
											<tr><td>144</td><td>Moldava</td><td>Republic of Moldova</td><td>373</td><td>MD</td><td>.md</td><td>yes</td></tr>
											<tr><td>145</td><td>Monaco</td><td>Principality of Monaco</td><td>377</td><td>MC</td><td>.mc</td><td>yes</td></tr>
											<tr><td>146</td><td>Mongolia</td><td>Mongolia</td><td>976</td><td>MN</td><td>.mn</td><td>yes</td></tr>
											<tr><td>147</td><td>Montenegro</td><td>Montenegro</td><td>382</td><td>ME</td><td>.me</td><td>yes</td></tr>
											<tr><td>148</td><td>Montserrat</td><td>Montserrat</td><td>1+664</td><td>MS</td><td>.ms</td><td>no</td></tr>
											<tr><td>149</td><td>Morocco</td><td>Kingdom of Morocco</td><td>212</td><td>MA</td><td>.ma</td><td>yes</td></tr>
											<tr><td>150</td><td>Mozambique</td><td>Republic of Mozambique</td><td>258</td><td>MZ</td><td>.mz</td><td>yes</td></tr>
											<tr><td>151</td><td>Myanmar (Burma)</td><td>Republic of the Union of Myanmar</td><td>95</td><td>MM</td><td>.mm</td><td>yes</td></tr>
											<tr><td>152</td><td>Namibia</td><td>Republic of Namibia</td><td>264</td><td>NA</td><td>.na</td><td>yes</td></tr>
											<tr><td>153</td><td>Nauru</td><td>Republic of Nauru</td><td>674</td><td>NR</td><td>.nr</td><td>yes</td></tr>
											<tr><td>154</td><td>Nepal</td><td>Federal Democratic Republic of Nepal</td><td>977</td><td>NP</td><td>.np</td><td>yes</td></tr>
											<tr><td>155</td><td>Netherlands</td><td>Kingdom of the Netherlands</td><td>31</td><td>NL</td><td>.nl</td><td>yes</td></tr>
											<tr><td>156</td><td>New Caledonia</td><td>New Caledonia</td><td>687</td><td>NC</td><td>.nc</td><td>no</td></tr>
											<tr><td>157</td><td>New Zealand</td><td>New Zealand</td><td>64</td><td>NZ</td><td>.nz</td><td>yes</td></tr>
											<tr><td>158</td><td>Nicaragua</td><td>Republic of Nicaragua</td><td>505</td><td>NI</td><td>.ni</td><td>yes</td></tr>
											<tr><td>159</td><td>Niger</td><td>Republic of Niger</td><td>227</td><td>NE</td><td>.ne</td><td>yes</td></tr>
											<tr><td>160</td><td>Nigeria</td><td>Federal Republic of Nigeria</td><td>234</td><td>NG</td><td>.ng</td><td>yes</td></tr>
											<tr><td>161</td><td>Niue</td><td>Niue</td><td>683</td><td>NU</td><td>.nu</td><td>some</td></tr>
											<tr><td>162</td><td>Norfolk Island</td><td>Norfolk Island</td><td>672</td><td>NF</td><td>.nf</td><td>no</td></tr>
											<tr><td>163</td><td>North Korea</td><td>Democratic People's Republic of Korea</td><td>850</td><td>KP</td><td>.kp</td><td>yes</td></tr>
											<tr><td>164</td><td>Northern Mariana Islands</td><td>Northern Mariana Islands</td><td>1+670</td><td>MP</td><td>.mp</td><td>no</td></tr>
											<tr><td>165</td><td>Norway</td><td>Kingdom of Norway</td><td>47</td><td>NO</td><td>.no</td><td>yes</td></tr>
											<tr><td>166</td><td>Oman</td><td>Sultanate of Oman</td><td>968</td><td>OM</td><td>.om</td><td>yes</td></tr>
											<tr><td>167</td><td>Pakistan</td><td>Islamic Republic of Pakistan</td><td>92</td><td>PK</td><td>.pk</td><td>yes</td></tr>
											<tr><td>168</td><td>Palau</td><td>Republic of Palau</td><td>680</td><td>PW</td><td>.pw</td><td>yes</td></tr>
											<tr><td>169</td><td>Palestine</td><td>State of Palestine (or Occupied Palestinian Territory)</td><td>970</td><td>PS</td><td>.ps</td><td>some</td></tr>
											<tr><td>170</td><td>Panama</td><td>Republic of Panama</td><td>507</td><td>PA</td><td>.pa</td><td>yes</td></tr>
											<tr><td>171</td><td>Papua New Guinea</td><td>Independent State of Papua New Guinea</td><td>675</td><td>PG</td><td>.pg</td><td>yes</td></tr>
											<tr><td>172</td><td>Paraguay</td><td>Republic of Paraguay</td><td>595</td><td>PY</td><td>.py</td><td>yes</td></tr>
											<tr><td>173</td><td>Peru</td><td>Republic of Peru</td><td>51</td><td>PE</td><td>.pe</td><td>yes</td></tr>
											<tr><td>174</td><td>Phillipines</td><td>Republic of the Philippines</td><td>63</td><td>PH</td><td>.ph</td><td>yes</td></tr>
											<tr><td>175</td><td>Pitcairn</td><td>Pitcairn</td><td>NONE</td><td>PN</td><td>.pn</td><td>no</td></tr>
											<tr><td>176</td><td>Poland</td><td>Republic of Poland</td><td>48</td><td>PL</td><td>.pl</td><td>yes</td></tr>
											<tr><td>177</td><td>Portugal</td><td>Portuguese Republic</td><td>351</td><td>PT</td><td>.pt</td><td>yes</td></tr>
											<tr><td>178</td><td>Puerto Rico</td><td>Commonwealth of Puerto Rico</td><td>1+939</td><td>PR</td><td>.pr</td><td>no</td></tr>
											<tr><td>179</td><td>Qatar</td><td>State of Qatar</td><td>974</td><td>QA</td><td>.qa</td><td>yes</td></tr>
											<tr><td>180</td><td>Reunion</td><td>Réunion</td><td>262</td><td>RE</td><td>.re</td><td>no</td></tr>
											<tr><td>181</td><td>Romania</td><td>Romania</td><td>40</td><td>RO</td><td>.ro</td><td>yes</td></tr>
											<tr><td>182</td><td>Russia</td><td>Russian Federation</td><td>7</td><td>RU</td><td>.ru</td><td>yes</td></tr>
											<tr><td>183</td><td>Rwanda</td><td>Republic of Rwanda</td><td>250</td><td>RW</td><td>.rw</td><td>yes</td></tr>
											<tr><td>184</td><td>Saint Barthelemy</td><td>Saint Barthélemy</td><td>590</td><td>BL</td><td>.bl</td><td>no</td></tr>
											<tr><td>185</td><td>Saint Helena</td><td>Saint Helena, Ascension and Tristan da Cunha</td><td>290</td><td>SH</td><td>.sh</td><td>no</td></tr>
											<tr><td>186</td><td>Saint Kitts and Nevis</td><td>Federation of Saint Christopher and Nevis</td><td>1+869</td><td>KN</td><td>.kn</td><td>yes</td></tr>
											<tr><td>187</td><td>Saint Lucia</td><td>Saint Lucia</td><td>1+758</td><td>LC</td><td>.lc</td><td>yes</td></tr>
											<tr><td>188</td><td>Saint Martin</td><td>Saint Martin</td><td>590</td><td>MF</td><td>.mf</td><td>no</td></tr>
											<tr><td>189</td><td>Saint Pierre and Miquelon</td><td>Saint Pierre and Miquelon</td><td>508</td><td>PM</td><td>.pm</td><td>no</td></tr>
											<tr><td>190</td><td>Saint Vincent and the Grenadines</td><td>Saint Vincent and the Grenadines</td><td>1+784</td><td>VC</td><td>.vc</td><td>yes</td></tr>
											<tr><td>191</td><td>Samoa</td><td>Independent State of Samoa</td><td>685</td><td>WS</td><td>.ws</td><td>yes</td></tr>
											<tr><td>192</td><td>San Marino</td><td>Republic of San Marino</td><td>378</td><td>SM</td><td>.sm</td><td>yes</td></tr>
											<tr><td>193</td><td>Sao Tome and Principe</td><td>Democratic Republic of São Tomé and Príncipe</td><td>239</td><td>ST</td><td>.st</td><td>yes</td></tr>
											<tr><td>194</td><td>Saudi Arabia</td><td>Kingdom of Saudi Arabia</td><td>966</td><td>SA</td><td>.sa</td><td>yes</td></tr>
											<tr><td>195</td><td>Senegal</td><td>Republic of Senegal</td><td>221</td><td>SN</td><td>.sn</td><td>yes</td></tr>
											<tr><td>196</td><td>Serbia</td><td>Republic of Serbia</td><td>381</td><td>RS</td><td>.rs</td><td>yes</td></tr>
											<tr><td>197</td><td>Seychelles</td><td>Republic of Seychelles</td><td>248</td><td>SC</td><td>.sc</td><td>yes</td></tr>
											<tr><td>198</td><td>Sierra Leone</td><td>Republic of Sierra Leone</td><td>232</td><td>SL</td><td>.sl</td><td>yes</td></tr>
											<tr><td>199</td><td>Singapore</td><td>Republic of Singapore</td><td>65</td><td>SG</td><td>.sg</td><td>yes</td></tr>
											<tr><td>200</td><td>Sint Maarten</td><td>Sint Maarten</td><td>1+721</td><td>SX</td><td>.sx</td><td>no</td></tr>
											<tr><td>201</td><td>Slovakia</td><td>Slovak Republic</td><td>421</td><td>SK</td><td>.sk</td><td>yes</td></tr>
											<tr><td>202</td><td>Slovenia</td><td>Republic of Slovenia</td><td>386</td><td>SI</td><td>.si</td><td>yes</td></tr>
											<tr><td>203</td><td>Solomon Islands</td><td>Solomon Islands</td><td>677</td><td>SB</td><td>.sb</td><td>yes</td></tr>
											<tr><td>204</td><td>Somalia</td><td>Somali Republic</td><td>252</td><td>SO</td><td>.so</td><td>yes</td></tr>
											<tr><td>205</td><td>South Africa</td><td>Republic of South Africa</td><td>27</td><td>ZA</td><td>.za</td><td>yes</td></tr>
											<tr><td>206</td><td>South Georgia and the South Sandwich Islands</td><td>South Georgia and the South Sandwich Islands</td><td>500</td><td>GS</td><td>.gs</td><td>no</td></tr>
											<tr><td>207</td><td>South Korea</td><td>Republic of Korea</td><td>82</td><td>KR</td><td>.kr</td><td>yes</td></tr>
											<tr><td>208</td><td>South Sudan</td><td>Republic of South Sudan</td><td>211</td><td>SS</td><td>.ss</td><td>yes</td></tr>
											<tr><td>209</td><td>Spain</td><td>Kingdom of Spain</td><td>34</td><td>ES</td><td>.es</td><td>yes</td></tr>
											<tr><td>210</td><td>Sri Lanka</td><td>Democratic Socialist Republic of Sri Lanka</td><td>94</td><td>LK</td><td>.lk</td><td>yes</td></tr>
											<tr><td>211</td><td>Sudan</td><td>Republic of the Sudan</td><td>249</td><td>SD</td><td>.sd</td><td>yes</td></tr>
											<tr><td>212</td><td>Suriname</td><td>Republic of Suriname</td><td>597</td><td>SR</td><td>.sr</td><td>yes</td></tr>
											<tr><td>213</td><td>Svalbard and Jan Mayen</td><td>Svalbard and Jan Mayen</td><td>47</td><td>SJ</td><td>.sj</td><td>no</td></tr>
											<tr><td>214</td><td>Swaziland</td><td>Kingdom of Swaziland</td><td>268</td><td>SZ</td><td>.sz</td><td>yes</td></tr>
											<tr><td>215</td><td>Sweden</td><td>Kingdom of Sweden</td><td>46</td><td>SE</td><td>.se</td><td>yes</td></tr>
											<tr><td>216</td><td>Switzerland</td><td>Swiss Confederation</td><td>41</td><td>CH</td><td>.ch</td><td>yes</td></tr>
											<tr><td>217</td><td>Syria</td><td>Syrian Arab Republic</td><td>963</td><td>SY</td><td>.sy</td><td>yes</td></tr>
											<tr><td>218</td><td>Taiwan</td><td>Republic of China (Taiwan)</td><td>886</td><td>TW</td><td>.tw</td><td>former</td></tr>
											<tr><td>219</td><td>Tajikistan</td><td>Republic of Tajikistan</td><td>992</td><td>TJ</td><td>.tj</td><td>yes</td></tr>
											<tr><td>220</td><td>Tanzania</td><td>United Republic of Tanzania</td><td>255</td><td>TZ</td><td>.tz</td><td>yes</td></tr>
											<tr><td>221</td><td>Thailand</td><td>Kingdom of Thailand</td><td>66</td><td>TH</td><td>.th</td><td>yes</td></tr>
											<tr><td>222</td><td>Timor-Leste (East Timor)</td><td>Democratic Republic of Timor-Leste</td><td>670</td><td>TL</td><td>.tl</td><td>yes</td></tr>
											<tr><td>223</td><td>Togo</td><td>Togolese Republic</td><td>228</td><td>TG</td><td>.tg</td><td>yes</td></tr>
											<tr><td>224</td><td>Tokelau</td><td>Tokelau</td><td>690</td><td>TK</td><td>.tk</td><td>no</td></tr>
											<tr><td>225</td><td>Tonga</td><td>Kingdom of Tonga</td><td>676</td><td>TO</td><td>.to</td><td>yes</td></tr>
											<tr><td>226</td><td>Trinidad and Tobago</td><td>Republic of Trinidad and Tobago</td><td>1+868</td><td>TT</td><td>.tt</td><td>yes</td></tr>
											<tr><td>227</td><td>Tunisia</td><td>Republic of Tunisia</td><td>216</td><td>TN</td><td>.tn</td><td>yes</td></tr>
											<tr><td>228</td><td>Turkey</td><td>Republic of Turkey</td><td>90</td><td>TR</td><td>.tr</td><td>yes</td></tr>
											<tr><td>229</td><td>Turkmenistan</td><td>Turkmenistan</td><td>993</td><td>TM</td><td>.tm</td><td>yes</td></tr>
											<tr><td>230</td><td>Turks and Caicos Islands</td><td>Turks and Caicos Islands</td><td>1+649</td><td>TC</td><td>.tc</td><td>no</td></tr>
											<tr><td>231</td><td>Tuvalu</td><td>Tuvalu</td><td>688</td><td>TV</td><td>.tv</td><td>yes</td></tr>
											<tr><td>232</td><td>Uganda</td><td>Republic of Uganda</td><td>256</td><td>UG</td><td>.ug</td><td>yes</td></tr>
											<tr><td>233</td><td>Ukraine</td><td>Ukraine</td><td>380</td><td>UA</td><td>.ua</td><td>yes</td></tr>
											<tr><td>234</td><td>United Arab Emirates</td><td>United Arab Emirates</td><td>971</td><td>AE</td><td>.ae</td><td>yes</td></tr>
											<tr><td>235</td><td>United Kingdom</td><td>United Kingdom of Great Britain and Nothern Ireland</td><td>44</td><td>GB</td><td>.uk</td><td>yes</td></tr>
											<tr><td>236</td><td>United States</td><td>United States of America</td><td>1</td><td>US</td><td>.us</td><td>yes</td></tr>
											<tr><td>237</td><td>United States Minor Outlying Islands</td><td>United States Minor Outlying Islands</td><td>NONE</td><td>UM</td><td>NONE</td><td>no</td></tr>
											<tr><td>238</td><td>Uruguay</td><td>Eastern Republic of Uruguay</td><td>598</td><td>UY</td><td>.uy</td><td>yes</td></tr>
											<tr><td>239</td><td>Uzbekistan</td><td>Republic of Uzbekistan</td><td>998</td><td>UZ</td><td>.uz</td><td>yes</td></tr>
											<tr><td>240</td><td>Vanuatu</td><td>Republic of Vanuatu</td><td>678</td><td>VU</td><td>.vu</td><td>yes</td></tr>
											<tr><td>241</td><td>Vatican City</td><td>State of the Vatican City</td><td>39</td><td>VA</td><td>.va</td><td>no</td></tr>
											<tr><td>242</td><td>Venezuela</td><td>Bolivarian Republic of Venezuela</td><td>58</td><td>VE</td><td>.ve</td><td>yes</td></tr>
											<tr><td>243</td><td>Vietnam</td><td>Socialist Republic of Vietnam</td><td>84</td><td>VN</td><td>.vn</td><td>yes</td></tr>
											<tr><td>244</td><td>Virgin Islands, British</td><td>British Virgin Islands</td><td>1+284</td><td>VG</td><td>.vg</td><td>no</td></tr>
											<tr><td>245</td><td>Virgin Islands, US</td><td>Virgin Islands of the United States</td><td>1+340</td><td>VI</td><td>.vi</td><td>no</td></tr>
											<tr><td>246</td><td>Wallis and Futuna</td><td>Wallis and Futuna</td><td>681</td><td>WF</td><td>.wf</td><td>no</td></tr>
											<tr><td>247</td><td>Western Sahara</td><td>Western Sahara</td><td>212</td><td>EH</td><td>.eh</td><td>no</td></tr>
											<tr><td>248</td><td>Yemen</td><td>Republic of Yemen</td><td>967</td><td>YE</td><td>.ye</td><td>yes</td></tr>
											<tr><td>249</td><td>Zambia</td><td>Republic of Zambia</td><td>260</td><td>ZM</td><td>.zm</td><td>yes</td></tr>
											<tr><td>250</td><td>Zimbabwe</td><td>Republic of Zimbabwe</td><td>263</td><td>ZW</td><td>.zw</td><td>yes</td></tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">Table Tools</div>
								<div class="panel-body">
									<table id="dt_tableTools" class="table table-striped">
										<thead>
											<tr>
												<th>id</th>
												<th>Short name</th>
												<th>Long Name</th>
												<th>Calling Code</th>
												<th>ISO 2</th>
												<th>ccTLD</th>
												<th>UN Member</th>
											</tr>
										</thead>
										<tbody>
											<tr><td>1</td><td>Afghanistan</td><td>Islamic Republic of Afghanistan</td><td>93</td><td>AF</td><td>.af</td><td>yes</td></tr>
											<tr><td>2</td><td>Aland Islands</td><td>Åland Islands</td><td>358</td><td>AX</td><td>.ax</td><td>no</td></tr>
											<tr><td>3</td><td>Albania</td><td>Republic of Albania</td><td>355</td><td>AL</td><td>.al</td><td>yes</td></tr>
											<tr><td>4</td><td>Algeria</td><td>People's Democratic Republic of Algeria</td><td>213</td><td>DZ</td><td>.dz</td><td>yes</td></tr>
											<tr><td>5</td><td>American Samoa</td><td>American Samoa</td><td>1+684</td><td>AS</td><td>.as</td><td>no</td></tr>
											<tr><td>6</td><td>Andorra</td><td>Principality of Andorra</td><td>376</td><td>AD</td><td>.ad</td><td>yes</td></tr>
											<tr><td>7</td><td>Angola</td><td>Republic of Angola</td><td>244</td><td>AO</td><td>.ao</td><td>yes</td></tr>
											<tr><td>8</td><td>Anguilla</td><td>Anguilla</td><td>1+264</td><td>AI</td><td>.ai</td><td>no</td></tr>
											<tr><td>9</td><td>Antarctica</td><td>Antarctica</td><td>672</td><td>AQ</td><td>.aq</td><td>no</td></tr>
											<tr><td>10</td><td>Antigua and Barbuda</td><td>Antigua and Barbuda</td><td>1+268</td><td>AG</td><td>.ag</td><td>yes</td></tr>
											<tr><td>11</td><td>Argentina</td><td>Argentine Republic</td><td>54</td><td>AR</td><td>.ar</td><td>yes</td></tr>
											<tr><td>12</td><td>Armenia</td><td>Republic of Armenia</td><td>374</td><td>AM</td><td>.am</td><td>yes</td></tr>
											<tr><td>13</td><td>Aruba</td><td>Aruba</td><td>297</td><td>AW</td><td>.aw</td><td>no</td></tr>
											<tr><td>14</td><td>Australia</td><td>Commonwealth of Australia</td><td>61</td><td>AU</td><td>.au</td><td>yes</td></tr>
											<tr><td>15</td><td>Austria</td><td>Republic of Austria</td><td>43</td><td>AT</td><td>.at</td><td>yes</td></tr>
											<tr><td>16</td><td>Azerbaijan</td><td>Republic of Azerbaijan</td><td>994</td><td>AZ</td><td>.az</td><td>yes</td></tr>
											<tr><td>17</td><td>Bahamas</td><td>Commonwealth of The Bahamas</td><td>1+242</td><td>BS</td><td>.bs</td><td>yes</td></tr>
											<tr><td>18</td><td>Bahrain</td><td>Kingdom of Bahrain</td><td>973</td><td>BH</td><td>.bh</td><td>yes</td></tr>
											<tr><td>19</td><td>Bangladesh</td><td>People's Republic of Bangladesh</td><td>880</td><td>BD</td><td>.bd</td><td>yes</td></tr>
											<tr><td>20</td><td>Barbados</td><td>Barbados</td><td>1+246</td><td>BB</td><td>.bb</td><td>yes</td></tr>
											<tr><td>21</td><td>Belarus</td><td>Republic of Belarus</td><td>375</td><td>BY</td><td>.by</td><td>yes</td></tr>
											<tr><td>22</td><td>Belgium</td><td>Kingdom of Belgium</td><td>32</td><td>BE</td><td>.be</td><td>yes</td></tr>
											<tr><td>23</td><td>Belize</td><td>Belize</td><td>501</td><td>BZ</td><td>.bz</td><td>yes</td></tr>
											<tr><td>24</td><td>Benin</td><td>Republic of Benin</td><td>229</td><td>BJ</td><td>.bj</td><td>yes</td></tr>
											<tr><td>25</td><td>Bermuda</td><td>Bermuda Islands</td><td>1+441</td><td>BM</td><td>.bm</td><td>no</td></tr>
											<tr><td>26</td><td>Bhutan</td><td>Kingdom of Bhutan</td><td>975</td><td>BT</td><td>.bt</td><td>yes</td></tr>
											<tr><td>27</td><td>Bolivia</td><td>Plurinational State of Bolivia</td><td>591</td><td>BO</td><td>.bo</td><td>yes</td></tr>
											<tr><td>28</td><td>Bonaire, Sint Eustatius and Saba</td><td>Bonaire, Sint Eustatius and Saba</td><td>599</td><td>BQ</td><td>.bq</td><td>no</td></tr>
											<tr><td>29</td><td>Bosnia and Herzegovina</td><td>Bosnia and Herzegovina</td><td>387</td><td>BA</td><td>.ba</td><td>yes</td></tr>
											<tr><td>30</td><td>Botswana</td><td>Republic of Botswana</td><td>267</td><td>BW</td><td>.bw</td><td>yes</td></tr>
											<tr><td>31</td><td>Bouvet Island</td><td>Bouvet Island</td><td>NONE</td><td>BV</td><td>.bv</td><td>no</td></tr>
											<tr><td>32</td><td>Brazil</td><td>Federative Republic of Brazil</td><td>55</td><td>BR</td><td>.br</td><td>yes</td></tr>
											<tr><td>33</td><td>British Indian Ocean Territory</td><td>British Indian Ocean Territory</td><td>246</td><td>IO</td><td>.io</td><td>no</td></tr>
											<tr><td>34</td><td>Brunei</td><td>Brunei Darussalam</td><td>673</td><td>BN</td><td>.bn</td><td>yes</td></tr>
											<tr><td>35</td><td>Bulgaria</td><td>Republic of Bulgaria</td><td>359</td><td>BG</td><td>.bg</td><td>yes</td></tr>
											<tr><td>36</td><td>Burkina Faso</td><td>Burkina Faso</td><td>226</td><td>BF</td><td>.bf</td><td>yes</td></tr>
											<tr><td>37</td><td>Burundi</td><td>Republic of Burundi</td><td>257</td><td>BI</td><td>.bi</td><td>yes</td></tr>
											<tr><td>38</td><td>Cambodia</td><td>Kingdom of Cambodia</td><td>855</td><td>KH</td><td>.kh</td><td>yes</td></tr>
											<tr><td>39</td><td>Cameroon</td><td>Republic of Cameroon</td><td>237</td><td>CM</td><td>.cm</td><td>yes</td></tr>
											<tr><td>40</td><td>Canada</td><td>Canada</td><td>1</td><td>CA</td><td>.ca</td><td>yes</td></tr>
											<tr><td>41</td><td>Cape Verde</td><td>Republic of Cape Verde</td><td>238</td><td>CV</td><td>.cv</td><td>yes</td></tr>
											<tr><td>42</td><td>Cayman Islands</td><td>The Cayman Islands</td><td>1+345</td><td>KY</td><td>.ky</td><td>no</td></tr>
											<tr><td>43</td><td>Central African Republic</td><td>Central African Republic</td><td>236</td><td>CF</td><td>.cf</td><td>yes</td></tr>
											<tr><td>44</td><td>Chad</td><td>Republic of Chad</td><td>235</td><td>TD</td><td>.td</td><td>yes</td></tr>
											<tr><td>45</td><td>Chile</td><td>Republic of Chile</td><td>56</td><td>CL</td><td>.cl</td><td>yes</td></tr>
											<tr><td>46</td><td>China</td><td>People's Republic of China</td><td>86</td><td>CN</td><td>.cn</td><td>yes</td></tr>
											<tr><td>47</td><td>Christmas Island</td><td>Christmas Island</td><td>61</td><td>CX</td><td>.cx</td><td>no</td></tr>
											<tr><td>48</td><td>Cocos (Keeling) Islands</td><td>Cocos (Keeling) Islands</td><td>61</td><td>CC</td><td>.cc</td><td>no</td></tr>
											<tr><td>49</td><td>Colombia</td><td>Republic of Colombia</td><td>57</td><td>CO</td><td>.co</td><td>yes</td></tr>
											<tr><td>50</td><td>Comoros</td><td>Union of the Comoros</td><td>269</td><td>KM</td><td>.km</td><td>yes</td></tr>
											<tr><td>51</td><td>Congo</td><td>Republic of the Congo</td><td>242</td><td>CG</td><td>.cg</td><td>yes</td></tr>
											<tr><td>52</td><td>Cook Islands</td><td>Cook Islands</td><td>682</td><td>CK</td><td>.ck</td><td>some</td></tr>
											<tr><td>53</td><td>Costa Rica</td><td>Republic of Costa Rica</td><td>506</td><td>CR</td><td>.cr</td><td>yes</td></tr>
											<tr><td>54</td><td>Cote d'ivoire (Ivory Coast)</td><td>Republic of Côte D'Ivoire (Ivory Coast)</td><td>225</td><td>CI</td><td>.ci</td><td>yes</td></tr>
											<tr><td>55</td><td>Croatia</td><td>Republic of Croatia</td><td>385</td><td>HR</td><td>.hr</td><td>yes</td></tr>
											<tr><td>56</td><td>Cuba</td><td>Republic of Cuba</td><td>53</td><td>CU</td><td>.cu</td><td>yes</td></tr>
											<tr><td>57</td><td>Curacao</td><td>Curaçao</td><td>599</td><td>CW</td><td>.cw</td><td>no</td></tr>
											<tr><td>58</td><td>Cyprus</td><td>Republic of Cyprus</td><td>357</td><td>CY</td><td>.cy</td><td>yes</td></tr>
											<tr><td>59</td><td>Czech Republic</td><td>Czech Republic</td><td>420</td><td>CZ</td><td>.cz</td><td>yes</td></tr>
											<tr><td>60</td><td>Democratic Republic of the Congo</td><td>Democratic Republic of the Congo</td><td>243</td><td>CD</td><td>.cd</td><td>yes</td></tr>
											<tr><td>61</td><td>Denmark</td><td>Kingdom of Denmark</td><td>45</td><td>DK</td><td>.dk</td><td>yes</td></tr>
											<tr><td>62</td><td>Djibouti</td><td>Republic of Djibouti</td><td>253</td><td>DJ</td><td>.dj</td><td>yes</td></tr>
											<tr><td>63</td><td>Dominica</td><td>Commonwealth of Dominica</td><td>1+767</td><td>DM</td><td>.dm</td><td>yes</td></tr>
											<tr><td>64</td><td>Dominican Republic</td><td>Dominican Republic</td><td>1+809, 8</td><td>DO</td><td>.do</td><td>yes</td></tr>
											<tr><td>65</td><td>Ecuador</td><td>Republic of Ecuador</td><td>593</td><td>EC</td><td>.ec</td><td>yes</td></tr>
											<tr><td>66</td><td>Egypt</td><td>Arab Republic of Egypt</td><td>20</td><td>EG</td><td>.eg</td><td>yes</td></tr>
											<tr><td>67</td><td>El Salvador</td><td>Republic of El Salvador</td><td>503</td><td>SV</td><td>.sv</td><td>yes</td></tr>
											<tr><td>68</td><td>Equatorial Guinea</td><td>Republic of Equatorial Guinea</td><td>240</td><td>GQ</td><td>.gq</td><td>yes</td></tr>
											<tr><td>69</td><td>Eritrea</td><td>State of Eritrea</td><td>291</td><td>ER</td><td>.er</td><td>yes</td></tr>
											<tr><td>70</td><td>Estonia</td><td>Republic of Estonia</td><td>372</td><td>EE</td><td>.ee</td><td>yes</td></tr>
											<tr><td>71</td><td>Ethiopia</td><td>Federal Democratic Republic of Ethiopia</td><td>251</td><td>ET</td><td>.et</td><td>yes</td></tr>
											<tr><td>72</td><td>Falkland Islands (Malvinas)</td><td>The Falkland Islands (Malvinas)</td><td>500</td><td>FK</td><td>.fk</td><td>no</td></tr>
											<tr><td>73</td><td>Faroe Islands</td><td>The Faroe Islands</td><td>298</td><td>FO</td><td>.fo</td><td>no</td></tr>
											<tr><td>74</td><td>Fiji</td><td>Republic of Fiji</td><td>679</td><td>FJ</td><td>.fj</td><td>yes</td></tr>
											<tr><td>75</td><td>Finland</td><td>Republic of Finland</td><td>358</td><td>FI</td><td>.fi</td><td>yes</td></tr>
											<tr><td>76</td><td>France</td><td>French Republic</td><td>33</td><td>FR</td><td>.fr</td><td>yes</td></tr>
											<tr><td>77</td><td>French Guiana</td><td>French Guiana</td><td>594</td><td>GF</td><td>.gf</td><td>no</td></tr>
											<tr><td>78</td><td>French Polynesia</td><td>French Polynesia</td><td>689</td><td>PF</td><td>.pf</td><td>no</td></tr>
											<tr><td>79</td><td>French Southern Territories</td><td>French Southern Territories</td><td></td><td>TF</td><td>.tf</td><td>no</td></tr>
											<tr><td>80</td><td>Gabon</td><td>Gabonese Republic</td><td>241</td><td>GA</td><td>.ga</td><td>yes</td></tr>
											<tr><td>81</td><td>Gambia</td><td>Republic of The Gambia</td><td>220</td><td>GM</td><td>.gm</td><td>yes</td></tr>
											<tr><td>82</td><td>Georgia</td><td>Georgia</td><td>995</td><td>GE</td><td>.ge</td><td>yes</td></tr>
											<tr><td>83</td><td>Germany</td><td>Federal Republic of Germany</td><td>49</td><td>DE</td><td>.de</td><td>yes</td></tr>
											<tr><td>84</td><td>Ghana</td><td>Republic of Ghana</td><td>233</td><td>GH</td><td>.gh</td><td>yes</td></tr>
											<tr><td>85</td><td>Gibraltar</td><td>Gibraltar</td><td>350</td><td>GI</td><td>.gi</td><td>no</td></tr>
											<tr><td>86</td><td>Greece</td><td>Hellenic Republic</td><td>30</td><td>GR</td><td>.gr</td><td>yes</td></tr>
											<tr><td>87</td><td>Greenland</td><td>Greenland</td><td>299</td><td>GL</td><td>.gl</td><td>no</td></tr>
											<tr><td>88</td><td>Grenada</td><td>Grenada</td><td>1+473</td><td>GD</td><td>.gd</td><td>yes</td></tr>
											<tr><td>89</td><td>Guadaloupe</td><td>Guadeloupe</td><td>590</td><td>GP</td><td>.gp</td><td>no</td></tr>
											<tr><td>90</td><td>Guam</td><td>Guam</td><td>1+671</td><td>GU</td><td>.gu</td><td>no</td></tr>
											<tr><td>91</td><td>Guatemala</td><td>Republic of Guatemala</td><td>502</td><td>GT</td><td>.gt</td><td>yes</td></tr>
											<tr><td>92</td><td>Guernsey</td><td>Guernsey</td><td>44</td><td>GG</td><td>.gg</td><td>no</td></tr>
											<tr><td>93</td><td>Guinea</td><td>Republic of Guinea</td><td>224</td><td>GN</td><td>.gn</td><td>yes</td></tr>
											<tr><td>94</td><td>Guinea-Bissau</td><td>Republic of Guinea-Bissau</td><td>245</td><td>GW</td><td>.gw</td><td>yes</td></tr>
											<tr><td>95</td><td>Guyana</td><td>Co-operative Republic of Guyana</td><td>592</td><td>GY</td><td>.gy</td><td>yes</td></tr>
											<tr><td>96</td><td>Haiti</td><td>Republic of Haiti</td><td>509</td><td>HT</td><td>.ht</td><td>yes</td></tr>
											<tr><td>97</td><td>Heard Island and McDonald Islands</td><td>Heard Island and McDonald Islands</td><td>NONE</td><td>HM</td><td>.hm</td><td>no</td></tr>
											<tr><td>98</td><td>Honduras</td><td>Republic of Honduras</td><td>504</td><td>HN</td><td>.hn</td><td>yes</td></tr>
											<tr><td>99</td><td>Hong Kong</td><td>Hong Kong</td><td>852</td><td>HK</td><td>.hk</td><td>no</td></tr>
											<tr><td>100</td><td>Hungary</td><td>Hungary</td><td>36</td><td>HU</td><td>.hu</td><td>yes</td></tr>
											<tr><td>101</td><td>Iceland</td><td>Republic of Iceland</td><td>354</td><td>IS</td><td>.is</td><td>yes</td></tr>
											<tr><td>102</td><td>India</td><td>Republic of India</td><td>91</td><td>IN</td><td>.in</td><td>yes</td></tr>
											<tr><td>103</td><td>Indonesia</td><td>Republic of Indonesia</td><td>62</td><td>ID</td><td>.id</td><td>yes</td></tr>
											<tr><td>104</td><td>Iran</td><td>Islamic Republic of Iran</td><td>98</td><td>IR</td><td>.ir</td><td>yes</td></tr>
											<tr><td>105</td><td>Iraq</td><td>Republic of Iraq</td><td>964</td><td>IQ</td><td>.iq</td><td>yes</td></tr>
											<tr><td>106</td><td>Ireland</td><td>Ireland</td><td>353</td><td>IE</td><td>.ie</td><td>yes</td></tr>
											<tr><td>107</td><td>Isle of Man</td><td>Isle of Man</td><td>44</td><td>IM</td><td>.im</td><td>no</td></tr>
											<tr><td>108</td><td>Israel</td><td>State of Israel</td><td>972</td><td>IL</td><td>.il</td><td>yes</td></tr>
											<tr><td>109</td><td>Italy</td><td>Italian Republic</td><td>39</td><td>IT</td><td>.jm</td><td>yes</td></tr>
											<tr><td>110</td><td>Jamaica</td><td>Jamaica</td><td>1+876</td><td>JM</td><td>.jm</td><td>yes</td></tr>
											<tr><td>111</td><td>Japan</td><td>Japan</td><td>81</td><td>JP</td><td>.jp</td><td>yes</td></tr>
											<tr><td>112</td><td>Jersey</td><td>The Bailiwick of Jersey</td><td>44</td><td>JE</td><td>.je</td><td>no</td></tr>
											<tr><td>113</td><td>Jordan</td><td>Hashemite Kingdom of Jordan</td><td>962</td><td>JO</td><td>.jo</td><td>yes</td></tr>
											<tr><td>114</td><td>Kazakhstan</td><td>Republic of Kazakhstan</td><td>7</td><td>KZ</td><td>.kz</td><td>yes</td></tr>
											<tr><td>115</td><td>Kenya</td><td>Republic of Kenya</td><td>254</td><td>KE</td><td>.ke</td><td>yes</td></tr>
											<tr><td>116</td><td>Kiribati</td><td>Republic of Kiribati</td><td>686</td><td>KI</td><td>.ki</td><td>yes</td></tr>
											<tr><td>117</td><td>Kosovo</td><td>Republic of Kosovo</td><td>381</td><td>XK</td><td></td><td>some</td></tr>
											<tr><td>118</td><td>Kuwait</td><td>State of Kuwait</td><td>965</td><td>KW</td><td>.kw</td><td>yes</td></tr>
											<tr><td>119</td><td>Kyrgyzstan</td><td>Kyrgyz Republic</td><td>996</td><td>KG</td><td>.kg</td><td>yes</td></tr>
											<tr><td>120</td><td>Laos</td><td>Lao People's Democratic Republic</td><td>856</td><td>LA</td><td>.la</td><td>yes</td></tr>
											<tr><td>121</td><td>Latvia</td><td>Republic of Latvia</td><td>371</td><td>LV</td><td>.lv</td><td>yes</td></tr>
											<tr><td>122</td><td>Lebanon</td><td>Republic of Lebanon</td><td>961</td><td>LB</td><td>.lb</td><td>yes</td></tr>
											<tr><td>123</td><td>Lesotho</td><td>Kingdom of Lesotho</td><td>266</td><td>LS</td><td>.ls</td><td>yes</td></tr>
											<tr><td>124</td><td>Liberia</td><td>Republic of Liberia</td><td>231</td><td>LR</td><td>.lr</td><td>yes</td></tr>
											<tr><td>125</td><td>Libya</td><td>Libya</td><td>218</td><td>LY</td><td>.ly</td><td>yes</td></tr>
											<tr><td>126</td><td>Liechtenstein</td><td>Principality of Liechtenstein</td><td>423</td><td>LI</td><td>.li</td><td>yes</td></tr>
											<tr><td>127</td><td>Lithuania</td><td>Republic of Lithuania</td><td>370</td><td>LT</td><td>.lt</td><td>yes</td></tr>
											<tr><td>128</td><td>Luxembourg</td><td>Grand Duchy of Luxembourg</td><td>352</td><td>LU</td><td>.lu</td><td>yes</td></tr>
											<tr><td>129</td><td>Macao</td><td>The Macao Special Administrative Region</td><td>853</td><td>MO</td><td>.mo</td><td>no</td></tr>
											<tr><td>130</td><td>Macedonia</td><td>The Former Yugoslav Republic of Macedonia</td><td>389</td><td>MK</td><td>.mk</td><td>yes</td></tr>
											<tr><td>131</td><td>Madagascar</td><td>Republic of Madagascar</td><td>261</td><td>MG</td><td>.mg</td><td>yes</td></tr>
											<tr><td>132</td><td>Malawi</td><td>Republic of Malawi</td><td>265</td><td>MW</td><td>.mw</td><td>yes</td></tr>
											<tr><td>133</td><td>Malaysia</td><td>Malaysia</td><td>60</td><td>MY</td><td>.my</td><td>yes</td></tr>
											<tr><td>134</td><td>Maldives</td><td>Republic of Maldives</td><td>960</td><td>MV</td><td>.mv</td><td>yes</td></tr>
											<tr><td>135</td><td>Mali</td><td>Republic of Mali</td><td>223</td><td>ML</td><td>.ml</td><td>yes</td></tr>
											<tr><td>136</td><td>Malta</td><td>Republic of Malta</td><td>356</td><td>MT</td><td>.mt</td><td>yes</td></tr>
											<tr><td>137</td><td>Marshall Islands</td><td>Republic of the Marshall Islands</td><td>692</td><td>MH</td><td>.mh</td><td>yes</td></tr>
											<tr><td>138</td><td>Martinique</td><td>Martinique</td><td>596</td><td>MQ</td><td>.mq</td><td>no</td></tr>
											<tr><td>139</td><td>Mauritania</td><td>Islamic Republic of Mauritania</td><td>222</td><td>MR</td><td>.mr</td><td>yes</td></tr>
											<tr><td>140</td><td>Mauritius</td><td>Republic of Mauritius</td><td>230</td><td>MU</td><td>.mu</td><td>yes</td></tr>
											<tr><td>141</td><td>Mayotte</td><td>Mayotte</td><td>262</td><td>YT</td><td>.yt</td><td>no</td></tr>
											<tr><td>142</td><td>Mexico</td><td>United Mexican States</td><td>52</td><td>MX</td><td>.mx</td><td>yes</td></tr>
											<tr><td>143</td><td>Micronesia</td><td>Federated States of Micronesia</td><td>691</td><td>FM</td><td>.fm</td><td>yes</td></tr>
											<tr><td>144</td><td>Moldava</td><td>Republic of Moldova</td><td>373</td><td>MD</td><td>.md</td><td>yes</td></tr>
											<tr><td>145</td><td>Monaco</td><td>Principality of Monaco</td><td>377</td><td>MC</td><td>.mc</td><td>yes</td></tr>
											<tr><td>146</td><td>Mongolia</td><td>Mongolia</td><td>976</td><td>MN</td><td>.mn</td><td>yes</td></tr>
											<tr><td>147</td><td>Montenegro</td><td>Montenegro</td><td>382</td><td>ME</td><td>.me</td><td>yes</td></tr>
											<tr><td>148</td><td>Montserrat</td><td>Montserrat</td><td>1+664</td><td>MS</td><td>.ms</td><td>no</td></tr>
											<tr><td>149</td><td>Morocco</td><td>Kingdom of Morocco</td><td>212</td><td>MA</td><td>.ma</td><td>yes</td></tr>
											<tr><td>150</td><td>Mozambique</td><td>Republic of Mozambique</td><td>258</td><td>MZ</td><td>.mz</td><td>yes</td></tr>
											<tr><td>151</td><td>Myanmar (Burma)</td><td>Republic of the Union of Myanmar</td><td>95</td><td>MM</td><td>.mm</td><td>yes</td></tr>
											<tr><td>152</td><td>Namibia</td><td>Republic of Namibia</td><td>264</td><td>NA</td><td>.na</td><td>yes</td></tr>
											<tr><td>153</td><td>Nauru</td><td>Republic of Nauru</td><td>674</td><td>NR</td><td>.nr</td><td>yes</td></tr>
											<tr><td>154</td><td>Nepal</td><td>Federal Democratic Republic of Nepal</td><td>977</td><td>NP</td><td>.np</td><td>yes</td></tr>
											<tr><td>155</td><td>Netherlands</td><td>Kingdom of the Netherlands</td><td>31</td><td>NL</td><td>.nl</td><td>yes</td></tr>
											<tr><td>156</td><td>New Caledonia</td><td>New Caledonia</td><td>687</td><td>NC</td><td>.nc</td><td>no</td></tr>
											<tr><td>157</td><td>New Zealand</td><td>New Zealand</td><td>64</td><td>NZ</td><td>.nz</td><td>yes</td></tr>
											<tr><td>158</td><td>Nicaragua</td><td>Republic of Nicaragua</td><td>505</td><td>NI</td><td>.ni</td><td>yes</td></tr>
											<tr><td>159</td><td>Niger</td><td>Republic of Niger</td><td>227</td><td>NE</td><td>.ne</td><td>yes</td></tr>
											<tr><td>160</td><td>Nigeria</td><td>Federal Republic of Nigeria</td><td>234</td><td>NG</td><td>.ng</td><td>yes</td></tr>
											<tr><td>161</td><td>Niue</td><td>Niue</td><td>683</td><td>NU</td><td>.nu</td><td>some</td></tr>
											<tr><td>162</td><td>Norfolk Island</td><td>Norfolk Island</td><td>672</td><td>NF</td><td>.nf</td><td>no</td></tr>
											<tr><td>163</td><td>North Korea</td><td>Democratic People's Republic of Korea</td><td>850</td><td>KP</td><td>.kp</td><td>yes</td></tr>
											<tr><td>164</td><td>Northern Mariana Islands</td><td>Northern Mariana Islands</td><td>1+670</td><td>MP</td><td>.mp</td><td>no</td></tr>
											<tr><td>165</td><td>Norway</td><td>Kingdom of Norway</td><td>47</td><td>NO</td><td>.no</td><td>yes</td></tr>
											<tr><td>166</td><td>Oman</td><td>Sultanate of Oman</td><td>968</td><td>OM</td><td>.om</td><td>yes</td></tr>
											<tr><td>167</td><td>Pakistan</td><td>Islamic Republic of Pakistan</td><td>92</td><td>PK</td><td>.pk</td><td>yes</td></tr>
											<tr><td>168</td><td>Palau</td><td>Republic of Palau</td><td>680</td><td>PW</td><td>.pw</td><td>yes</td></tr>
											<tr><td>169</td><td>Palestine</td><td>State of Palestine (or Occupied Palestinian Territory)</td><td>970</td><td>PS</td><td>.ps</td><td>some</td></tr>
											<tr><td>170</td><td>Panama</td><td>Republic of Panama</td><td>507</td><td>PA</td><td>.pa</td><td>yes</td></tr>
											<tr><td>171</td><td>Papua New Guinea</td><td>Independent State of Papua New Guinea</td><td>675</td><td>PG</td><td>.pg</td><td>yes</td></tr>
											<tr><td>172</td><td>Paraguay</td><td>Republic of Paraguay</td><td>595</td><td>PY</td><td>.py</td><td>yes</td></tr>
											<tr><td>173</td><td>Peru</td><td>Republic of Peru</td><td>51</td><td>PE</td><td>.pe</td><td>yes</td></tr>
											<tr><td>174</td><td>Phillipines</td><td>Republic of the Philippines</td><td>63</td><td>PH</td><td>.ph</td><td>yes</td></tr>
											<tr><td>175</td><td>Pitcairn</td><td>Pitcairn</td><td>NONE</td><td>PN</td><td>.pn</td><td>no</td></tr>
											<tr><td>176</td><td>Poland</td><td>Republic of Poland</td><td>48</td><td>PL</td><td>.pl</td><td>yes</td></tr>
											<tr><td>177</td><td>Portugal</td><td>Portuguese Republic</td><td>351</td><td>PT</td><td>.pt</td><td>yes</td></tr>
											<tr><td>178</td><td>Puerto Rico</td><td>Commonwealth of Puerto Rico</td><td>1+939</td><td>PR</td><td>.pr</td><td>no</td></tr>
											<tr><td>179</td><td>Qatar</td><td>State of Qatar</td><td>974</td><td>QA</td><td>.qa</td><td>yes</td></tr>
											<tr><td>180</td><td>Reunion</td><td>Réunion</td><td>262</td><td>RE</td><td>.re</td><td>no</td></tr>
											<tr><td>181</td><td>Romania</td><td>Romania</td><td>40</td><td>RO</td><td>.ro</td><td>yes</td></tr>
											<tr><td>182</td><td>Russia</td><td>Russian Federation</td><td>7</td><td>RU</td><td>.ru</td><td>yes</td></tr>
											<tr><td>183</td><td>Rwanda</td><td>Republic of Rwanda</td><td>250</td><td>RW</td><td>.rw</td><td>yes</td></tr>
											<tr><td>184</td><td>Saint Barthelemy</td><td>Saint Barthélemy</td><td>590</td><td>BL</td><td>.bl</td><td>no</td></tr>
											<tr><td>185</td><td>Saint Helena</td><td>Saint Helena, Ascension and Tristan da Cunha</td><td>290</td><td>SH</td><td>.sh</td><td>no</td></tr>
											<tr><td>186</td><td>Saint Kitts and Nevis</td><td>Federation of Saint Christopher and Nevis</td><td>1+869</td><td>KN</td><td>.kn</td><td>yes</td></tr>
											<tr><td>187</td><td>Saint Lucia</td><td>Saint Lucia</td><td>1+758</td><td>LC</td><td>.lc</td><td>yes</td></tr>
											<tr><td>188</td><td>Saint Martin</td><td>Saint Martin</td><td>590</td><td>MF</td><td>.mf</td><td>no</td></tr>
											<tr><td>189</td><td>Saint Pierre and Miquelon</td><td>Saint Pierre and Miquelon</td><td>508</td><td>PM</td><td>.pm</td><td>no</td></tr>
											<tr><td>190</td><td>Saint Vincent and the Grenadines</td><td>Saint Vincent and the Grenadines</td><td>1+784</td><td>VC</td><td>.vc</td><td>yes</td></tr>
											<tr><td>191</td><td>Samoa</td><td>Independent State of Samoa</td><td>685</td><td>WS</td><td>.ws</td><td>yes</td></tr>
											<tr><td>192</td><td>San Marino</td><td>Republic of San Marino</td><td>378</td><td>SM</td><td>.sm</td><td>yes</td></tr>
											<tr><td>193</td><td>Sao Tome and Principe</td><td>Democratic Republic of São Tomé and Príncipe</td><td>239</td><td>ST</td><td>.st</td><td>yes</td></tr>
											<tr><td>194</td><td>Saudi Arabia</td><td>Kingdom of Saudi Arabia</td><td>966</td><td>SA</td><td>.sa</td><td>yes</td></tr>
											<tr><td>195</td><td>Senegal</td><td>Republic of Senegal</td><td>221</td><td>SN</td><td>.sn</td><td>yes</td></tr>
											<tr><td>196</td><td>Serbia</td><td>Republic of Serbia</td><td>381</td><td>RS</td><td>.rs</td><td>yes</td></tr>
											<tr><td>197</td><td>Seychelles</td><td>Republic of Seychelles</td><td>248</td><td>SC</td><td>.sc</td><td>yes</td></tr>
											<tr><td>198</td><td>Sierra Leone</td><td>Republic of Sierra Leone</td><td>232</td><td>SL</td><td>.sl</td><td>yes</td></tr>
											<tr><td>199</td><td>Singapore</td><td>Republic of Singapore</td><td>65</td><td>SG</td><td>.sg</td><td>yes</td></tr>
											<tr><td>200</td><td>Sint Maarten</td><td>Sint Maarten</td><td>1+721</td><td>SX</td><td>.sx</td><td>no</td></tr>
											<tr><td>201</td><td>Slovakia</td><td>Slovak Republic</td><td>421</td><td>SK</td><td>.sk</td><td>yes</td></tr>
											<tr><td>202</td><td>Slovenia</td><td>Republic of Slovenia</td><td>386</td><td>SI</td><td>.si</td><td>yes</td></tr>
											<tr><td>203</td><td>Solomon Islands</td><td>Solomon Islands</td><td>677</td><td>SB</td><td>.sb</td><td>yes</td></tr>
											<tr><td>204</td><td>Somalia</td><td>Somali Republic</td><td>252</td><td>SO</td><td>.so</td><td>yes</td></tr>
											<tr><td>205</td><td>South Africa</td><td>Republic of South Africa</td><td>27</td><td>ZA</td><td>.za</td><td>yes</td></tr>
											<tr><td>206</td><td>South Georgia and the South Sandwich Islands</td><td>South Georgia and the South Sandwich Islands</td><td>500</td><td>GS</td><td>.gs</td><td>no</td></tr>
											<tr><td>207</td><td>South Korea</td><td>Republic of Korea</td><td>82</td><td>KR</td><td>.kr</td><td>yes</td></tr>
											<tr><td>208</td><td>South Sudan</td><td>Republic of South Sudan</td><td>211</td><td>SS</td><td>.ss</td><td>yes</td></tr>
											<tr><td>209</td><td>Spain</td><td>Kingdom of Spain</td><td>34</td><td>ES</td><td>.es</td><td>yes</td></tr>
											<tr><td>210</td><td>Sri Lanka</td><td>Democratic Socialist Republic of Sri Lanka</td><td>94</td><td>LK</td><td>.lk</td><td>yes</td></tr>
											<tr><td>211</td><td>Sudan</td><td>Republic of the Sudan</td><td>249</td><td>SD</td><td>.sd</td><td>yes</td></tr>
											<tr><td>212</td><td>Suriname</td><td>Republic of Suriname</td><td>597</td><td>SR</td><td>.sr</td><td>yes</td></tr>
											<tr><td>213</td><td>Svalbard and Jan Mayen</td><td>Svalbard and Jan Mayen</td><td>47</td><td>SJ</td><td>.sj</td><td>no</td></tr>
											<tr><td>214</td><td>Swaziland</td><td>Kingdom of Swaziland</td><td>268</td><td>SZ</td><td>.sz</td><td>yes</td></tr>
											<tr><td>215</td><td>Sweden</td><td>Kingdom of Sweden</td><td>46</td><td>SE</td><td>.se</td><td>yes</td></tr>
											<tr><td>216</td><td>Switzerland</td><td>Swiss Confederation</td><td>41</td><td>CH</td><td>.ch</td><td>yes</td></tr>
											<tr><td>217</td><td>Syria</td><td>Syrian Arab Republic</td><td>963</td><td>SY</td><td>.sy</td><td>yes</td></tr>
											<tr><td>218</td><td>Taiwan</td><td>Republic of China (Taiwan)</td><td>886</td><td>TW</td><td>.tw</td><td>former</td></tr>
											<tr><td>219</td><td>Tajikistan</td><td>Republic of Tajikistan</td><td>992</td><td>TJ</td><td>.tj</td><td>yes</td></tr>
											<tr><td>220</td><td>Tanzania</td><td>United Republic of Tanzania</td><td>255</td><td>TZ</td><td>.tz</td><td>yes</td></tr>
											<tr><td>221</td><td>Thailand</td><td>Kingdom of Thailand</td><td>66</td><td>TH</td><td>.th</td><td>yes</td></tr>
											<tr><td>222</td><td>Timor-Leste (East Timor)</td><td>Democratic Republic of Timor-Leste</td><td>670</td><td>TL</td><td>.tl</td><td>yes</td></tr>
											<tr><td>223</td><td>Togo</td><td>Togolese Republic</td><td>228</td><td>TG</td><td>.tg</td><td>yes</td></tr>
											<tr><td>224</td><td>Tokelau</td><td>Tokelau</td><td>690</td><td>TK</td><td>.tk</td><td>no</td></tr>
											<tr><td>225</td><td>Tonga</td><td>Kingdom of Tonga</td><td>676</td><td>TO</td><td>.to</td><td>yes</td></tr>
											<tr><td>226</td><td>Trinidad and Tobago</td><td>Republic of Trinidad and Tobago</td><td>1+868</td><td>TT</td><td>.tt</td><td>yes</td></tr>
											<tr><td>227</td><td>Tunisia</td><td>Republic of Tunisia</td><td>216</td><td>TN</td><td>.tn</td><td>yes</td></tr>
											<tr><td>228</td><td>Turkey</td><td>Republic of Turkey</td><td>90</td><td>TR</td><td>.tr</td><td>yes</td></tr>
											<tr><td>229</td><td>Turkmenistan</td><td>Turkmenistan</td><td>993</td><td>TM</td><td>.tm</td><td>yes</td></tr>
											<tr><td>230</td><td>Turks and Caicos Islands</td><td>Turks and Caicos Islands</td><td>1+649</td><td>TC</td><td>.tc</td><td>no</td></tr>
											<tr><td>231</td><td>Tuvalu</td><td>Tuvalu</td><td>688</td><td>TV</td><td>.tv</td><td>yes</td></tr>
											<tr><td>232</td><td>Uganda</td><td>Republic of Uganda</td><td>256</td><td>UG</td><td>.ug</td><td>yes</td></tr>
											<tr><td>233</td><td>Ukraine</td><td>Ukraine</td><td>380</td><td>UA</td><td>.ua</td><td>yes</td></tr>
											<tr><td>234</td><td>United Arab Emirates</td><td>United Arab Emirates</td><td>971</td><td>AE</td><td>.ae</td><td>yes</td></tr>
											<tr><td>235</td><td>United Kingdom</td><td>United Kingdom of Great Britain and Nothern Ireland</td><td>44</td><td>GB</td><td>.uk</td><td>yes</td></tr>
											<tr><td>236</td><td>United States</td><td>United States of America</td><td>1</td><td>US</td><td>.us</td><td>yes</td></tr>
											<tr><td>237</td><td>United States Minor Outlying Islands</td><td>United States Minor Outlying Islands</td><td>NONE</td><td>UM</td><td>NONE</td><td>no</td></tr>
											<tr><td>238</td><td>Uruguay</td><td>Eastern Republic of Uruguay</td><td>598</td><td>UY</td><td>.uy</td><td>yes</td></tr>
											<tr><td>239</td><td>Uzbekistan</td><td>Republic of Uzbekistan</td><td>998</td><td>UZ</td><td>.uz</td><td>yes</td></tr>
											<tr><td>240</td><td>Vanuatu</td><td>Republic of Vanuatu</td><td>678</td><td>VU</td><td>.vu</td><td>yes</td></tr>
											<tr><td>241</td><td>Vatican City</td><td>State of the Vatican City</td><td>39</td><td>VA</td><td>.va</td><td>no</td></tr>
											<tr><td>242</td><td>Venezuela</td><td>Bolivarian Republic of Venezuela</td><td>58</td><td>VE</td><td>.ve</td><td>yes</td></tr>
											<tr><td>243</td><td>Vietnam</td><td>Socialist Republic of Vietnam</td><td>84</td><td>VN</td><td>.vn</td><td>yes</td></tr>
											<tr><td>244</td><td>Virgin Islands, British</td><td>British Virgin Islands</td><td>1+284</td><td>VG</td><td>.vg</td><td>no</td></tr>
											<tr><td>245</td><td>Virgin Islands, US</td><td>Virgin Islands of the United States</td><td>1+340</td><td>VI</td><td>.vi</td><td>no</td></tr>
											<tr><td>246</td><td>Wallis and Futuna</td><td>Wallis and Futuna</td><td>681</td><td>WF</td><td>.wf</td><td>no</td></tr>
											<tr><td>247</td><td>Western Sahara</td><td>Western Sahara</td><td>212</td><td>EH</td><td>.eh</td><td>no</td></tr>
											<tr><td>248</td><td>Yemen</td><td>Republic of Yemen</td><td>967</td><td>YE</td><td>.ye</td><td>yes</td></tr>
											<tr><td>249</td><td>Zambia</td><td>Republic of Zambia</td><td>260</td><td>ZM</td><td>.zm</td><td>yes</td></tr>
											<tr><td>250</td><td>Zimbabwe</td><td>Republic of Zimbabwe</td><td>263</td><td>ZW</td><td>.zw</td><td>yes</td></tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">Scroller</div>
								<div class="panel-body">
									<table id="dt_scroller" class="table table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>First name</th>
												<th>Last name</th>
												<th>ZIP / Post code</th>
												<th>Country</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-default">
								<div class="panel-heading">Scroll - horizontal</div>
								<div class="panel-body">
									<table id="dt_scroll_x" class="table table-striped">
										<thead>
											<tr>
												<th>id</th>
												<th>Short name</th>
												<th>Long Name</th>
												<th>Calling Code</th>
												<th>ISO 2</th>
												<th>ccTLD</th>
												<th>UN Member</th>
											</tr>
										</thead>
										<tbody>
											<tr><td>1</td><td>Afghanistan</td><td>Islamic Republic of Afghanistan</td><td>93</td><td>AF</td><td>.af</td><td>yes</td></tr>
											<tr><td>2</td><td>Aland Islands</td><td>Åland Islands</td><td>358</td><td>AX</td><td>.ax</td><td>no</td></tr>
											<tr><td>3</td><td>Albania</td><td>Republic of Albania</td><td>355</td><td>AL</td><td>.al</td><td>yes</td></tr>
											<tr><td>4</td><td>Algeria</td><td>People's Democratic Republic of Algeria</td><td>213</td><td>DZ</td><td>.dz</td><td>yes</td></tr>
											<tr><td>5</td><td>American Samoa</td><td>American Samoa</td><td>1+684</td><td>AS</td><td>.as</td><td>no</td></tr>
											<tr><td>6</td><td>Andorra</td><td>Principality of Andorra</td><td>376</td><td>AD</td><td>.ad</td><td>yes</td></tr>
											<tr><td>7</td><td>Angola</td><td>Republic of Angola</td><td>244</td><td>AO</td><td>.ao</td><td>yes</td></tr>
											<tr><td>8</td><td>Anguilla</td><td>Anguilla</td><td>1+264</td><td>AI</td><td>.ai</td><td>no</td></tr>
											<tr><td>9</td><td>Antarctica</td><td>Antarctica</td><td>672</td><td>AQ</td><td>.aq</td><td>no</td></tr>
											<tr><td>10</td><td>Antigua and Barbuda</td><td>Antigua and Barbuda</td><td>1+268</td><td>AG</td><td>.ag</td><td>yes</td></tr>
											<tr><td>11</td><td>Argentina</td><td>Argentine Republic</td><td>54</td><td>AR</td><td>.ar</td><td>yes</td></tr>
											<tr><td>12</td><td>Armenia</td><td>Republic of Armenia</td><td>374</td><td>AM</td><td>.am</td><td>yes</td></tr>
											<tr><td>13</td><td>Aruba</td><td>Aruba</td><td>297</td><td>AW</td><td>.aw</td><td>no</td></tr>
											<tr><td>14</td><td>Australia</td><td>Commonwealth of Australia</td><td>61</td><td>AU</td><td>.au</td><td>yes</td></tr>
											<tr><td>15</td><td>Austria</td><td>Republic of Austria</td><td>43</td><td>AT</td><td>.at</td><td>yes</td></tr>
											<tr><td>16</td><td>Azerbaijan</td><td>Republic of Azerbaijan</td><td>994</td><td>AZ</td><td>.az</td><td>yes</td></tr>
											<tr><td>17</td><td>Bahamas</td><td>Commonwealth of The Bahamas</td><td>1+242</td><td>BS</td><td>.bs</td><td>yes</td></tr>
											<tr><td>18</td><td>Bahrain</td><td>Kingdom of Bahrain</td><td>973</td><td>BH</td><td>.bh</td><td>yes</td></tr>
											<tr><td>19</td><td>Bangladesh</td><td>People's Republic of Bangladesh</td><td>880</td><td>BD</td><td>.bd</td><td>yes</td></tr>
											<tr><td>20</td><td>Barbados</td><td>Barbados</td><td>1+246</td><td>BB</td><td>.bb</td><td>yes</td></tr>
											<tr><td>21</td><td>Belarus</td><td>Republic of Belarus</td><td>375</td><td>BY</td><td>.by</td><td>yes</td></tr>
											<tr><td>22</td><td>Belgium</td><td>Kingdom of Belgium</td><td>32</td><td>BE</td><td>.be</td><td>yes</td></tr>
											<tr><td>23</td><td>Belize</td><td>Belize</td><td>501</td><td>BZ</td><td>.bz</td><td>yes</td></tr>
											<tr><td>24</td><td>Benin</td><td>Republic of Benin</td><td>229</td><td>BJ</td><td>.bj</td><td>yes</td></tr>
											<tr><td>25</td><td>Bermuda</td><td>Bermuda Islands</td><td>1+441</td><td>BM</td><td>.bm</td><td>no</td></tr>
											<tr><td>26</td><td>Bhutan</td><td>Kingdom of Bhutan</td><td>975</td><td>BT</td><td>.bt</td><td>yes</td></tr>
											<tr><td>27</td><td>Bolivia</td><td>Plurinational State of Bolivia</td><td>591</td><td>BO</td><td>.bo</td><td>yes</td></tr>
											<tr><td>28</td><td>Bonaire, Sint Eustatius and Saba</td><td>Bonaire, Sint Eustatius and Saba</td><td>599</td><td>BQ</td><td>.bq</td><td>no</td></tr>
											<tr><td>29</td><td>Bosnia and Herzegovina</td><td>Bosnia and Herzegovina</td><td>387</td><td>BA</td><td>.ba</td><td>yes</td></tr>
											<tr><td>30</td><td>Botswana</td><td>Republic of Botswana</td><td>267</td><td>BW</td><td>.bw</td><td>yes</td></tr>
											<tr><td>31</td><td>Bouvet Island</td><td>Bouvet Island</td><td>NONE</td><td>BV</td><td>.bv</td><td>no</td></tr>
											<tr><td>32</td><td>Brazil</td><td>Federative Republic of Brazil</td><td>55</td><td>BR</td><td>.br</td><td>yes</td></tr>
											<tr><td>33</td><td>British Indian Ocean Territory</td><td>British Indian Ocean Territory</td><td>246</td><td>IO</td><td>.io</td><td>no</td></tr>
											<tr><td>34</td><td>Brunei</td><td>Brunei Darussalam</td><td>673</td><td>BN</td><td>.bn</td><td>yes</td></tr>
											<tr><td>35</td><td>Bulgaria</td><td>Republic of Bulgaria</td><td>359</td><td>BG</td><td>.bg</td><td>yes</td></tr>
											<tr><td>36</td><td>Burkina Faso</td><td>Burkina Faso</td><td>226</td><td>BF</td><td>.bf</td><td>yes</td></tr>
											<tr><td>37</td><td>Burundi</td><td>Republic of Burundi</td><td>257</td><td>BI</td><td>.bi</td><td>yes</td></tr>
											<tr><td>38</td><td>Cambodia</td><td>Kingdom of Cambodia</td><td>855</td><td>KH</td><td>.kh</td><td>yes</td></tr>
											<tr><td>39</td><td>Cameroon</td><td>Republic of Cameroon</td><td>237</td><td>CM</td><td>.cm</td><td>yes</td></tr>
											<tr><td>40</td><td>Canada</td><td>Canada</td><td>1</td><td>CA</td><td>.ca</td><td>yes</td></tr>
											<tr><td>41</td><td>Cape Verde</td><td>Republic of Cape Verde</td><td>238</td><td>CV</td><td>.cv</td><td>yes</td></tr>
											<tr><td>42</td><td>Cayman Islands</td><td>The Cayman Islands</td><td>1+345</td><td>KY</td><td>.ky</td><td>no</td></tr>
											<tr><td>43</td><td>Central African Republic</td><td>Central African Republic</td><td>236</td><td>CF</td><td>.cf</td><td>yes</td></tr>
											<tr><td>44</td><td>Chad</td><td>Republic of Chad</td><td>235</td><td>TD</td><td>.td</td><td>yes</td></tr>
											<tr><td>45</td><td>Chile</td><td>Republic of Chile</td><td>56</td><td>CL</td><td>.cl</td><td>yes</td></tr>
											<tr><td>46</td><td>China</td><td>People's Republic of China</td><td>86</td><td>CN</td><td>.cn</td><td>yes</td></tr>
											<tr><td>47</td><td>Christmas Island</td><td>Christmas Island</td><td>61</td><td>CX</td><td>.cx</td><td>no</td></tr>
											<tr><td>48</td><td>Cocos (Keeling) Islands</td><td>Cocos (Keeling) Islands</td><td>61</td><td>CC</td><td>.cc</td><td>no</td></tr>
											<tr><td>49</td><td>Colombia</td><td>Republic of Colombia</td><td>57</td><td>CO</td><td>.co</td><td>yes</td></tr>
											<tr><td>50</td><td>Comoros</td><td>Union of the Comoros</td><td>269</td><td>KM</td><td>.km</td><td>yes</td></tr>
											<tr><td>51</td><td>Congo</td><td>Republic of the Congo</td><td>242</td><td>CG</td><td>.cg</td><td>yes</td></tr>
											<tr><td>52</td><td>Cook Islands</td><td>Cook Islands</td><td>682</td><td>CK</td><td>.ck</td><td>some</td></tr>
											<tr><td>53</td><td>Costa Rica</td><td>Republic of Costa Rica</td><td>506</td><td>CR</td><td>.cr</td><td>yes</td></tr>
											<tr><td>54</td><td>Cote d'ivoire (Ivory Coast)</td><td>Republic of Côte D'Ivoire (Ivory Coast)</td><td>225</td><td>CI</td><td>.ci</td><td>yes</td></tr>
											<tr><td>55</td><td>Croatia</td><td>Republic of Croatia</td><td>385</td><td>HR</td><td>.hr</td><td>yes</td></tr>
											<tr><td>56</td><td>Cuba</td><td>Republic of Cuba</td><td>53</td><td>CU</td><td>.cu</td><td>yes</td></tr>
											<tr><td>57</td><td>Curacao</td><td>Curaçao</td><td>599</td><td>CW</td><td>.cw</td><td>no</td></tr>
											<tr><td>58</td><td>Cyprus</td><td>Republic of Cyprus</td><td>357</td><td>CY</td><td>.cy</td><td>yes</td></tr>
											<tr><td>59</td><td>Czech Republic</td><td>Czech Republic</td><td>420</td><td>CZ</td><td>.cz</td><td>yes</td></tr>
											<tr><td>60</td><td>Democratic Republic of the Congo</td><td>Democratic Republic of the Congo</td><td>243</td><td>CD</td><td>.cd</td><td>yes</td></tr>
											<tr><td>61</td><td>Denmark</td><td>Kingdom of Denmark</td><td>45</td><td>DK</td><td>.dk</td><td>yes</td></tr>
											<tr><td>62</td><td>Djibouti</td><td>Republic of Djibouti</td><td>253</td><td>DJ</td><td>.dj</td><td>yes</td></tr>
											<tr><td>63</td><td>Dominica</td><td>Commonwealth of Dominica</td><td>1+767</td><td>DM</td><td>.dm</td><td>yes</td></tr>
											<tr><td>64</td><td>Dominican Republic</td><td>Dominican Republic</td><td>1+809, 8</td><td>DO</td><td>.do</td><td>yes</td></tr>
											<tr><td>65</td><td>Ecuador</td><td>Republic of Ecuador</td><td>593</td><td>EC</td><td>.ec</td><td>yes</td></tr>
											<tr><td>66</td><td>Egypt</td><td>Arab Republic of Egypt</td><td>20</td><td>EG</td><td>.eg</td><td>yes</td></tr>
											<tr><td>67</td><td>El Salvador</td><td>Republic of El Salvador</td><td>503</td><td>SV</td><td>.sv</td><td>yes</td></tr>
											<tr><td>68</td><td>Equatorial Guinea</td><td>Republic of Equatorial Guinea</td><td>240</td><td>GQ</td><td>.gq</td><td>yes</td></tr>
											<tr><td>69</td><td>Eritrea</td><td>State of Eritrea</td><td>291</td><td>ER</td><td>.er</td><td>yes</td></tr>
											<tr><td>70</td><td>Estonia</td><td>Republic of Estonia</td><td>372</td><td>EE</td><td>.ee</td><td>yes</td></tr>
											<tr><td>71</td><td>Ethiopia</td><td>Federal Democratic Republic of Ethiopia</td><td>251</td><td>ET</td><td>.et</td><td>yes</td></tr>
											<tr><td>72</td><td>Falkland Islands (Malvinas)</td><td>The Falkland Islands (Malvinas)</td><td>500</td><td>FK</td><td>.fk</td><td>no</td></tr>
											<tr><td>73</td><td>Faroe Islands</td><td>The Faroe Islands</td><td>298</td><td>FO</td><td>.fo</td><td>no</td></tr>
											<tr><td>74</td><td>Fiji</td><td>Republic of Fiji</td><td>679</td><td>FJ</td><td>.fj</td><td>yes</td></tr>
											<tr><td>75</td><td>Finland</td><td>Republic of Finland</td><td>358</td><td>FI</td><td>.fi</td><td>yes</td></tr>
											<tr><td>76</td><td>France</td><td>French Republic</td><td>33</td><td>FR</td><td>.fr</td><td>yes</td></tr>
											<tr><td>77</td><td>French Guiana</td><td>French Guiana</td><td>594</td><td>GF</td><td>.gf</td><td>no</td></tr>
											<tr><td>78</td><td>French Polynesia</td><td>French Polynesia</td><td>689</td><td>PF</td><td>.pf</td><td>no</td></tr>
											<tr><td>79</td><td>French Southern Territories</td><td>French Southern Territories</td><td></td><td>TF</td><td>.tf</td><td>no</td></tr>
											<tr><td>80</td><td>Gabon</td><td>Gabonese Republic</td><td>241</td><td>GA</td><td>.ga</td><td>yes</td></tr>
											<tr><td>81</td><td>Gambia</td><td>Republic of The Gambia</td><td>220</td><td>GM</td><td>.gm</td><td>yes</td></tr>
											<tr><td>82</td><td>Georgia</td><td>Georgia</td><td>995</td><td>GE</td><td>.ge</td><td>yes</td></tr>
											<tr><td>83</td><td>Germany</td><td>Federal Republic of Germany</td><td>49</td><td>DE</td><td>.de</td><td>yes</td></tr>
											<tr><td>84</td><td>Ghana</td><td>Republic of Ghana</td><td>233</td><td>GH</td><td>.gh</td><td>yes</td></tr>
											<tr><td>85</td><td>Gibraltar</td><td>Gibraltar</td><td>350</td><td>GI</td><td>.gi</td><td>no</td></tr>
											<tr><td>86</td><td>Greece</td><td>Hellenic Republic</td><td>30</td><td>GR</td><td>.gr</td><td>yes</td></tr>
											<tr><td>87</td><td>Greenland</td><td>Greenland</td><td>299</td><td>GL</td><td>.gl</td><td>no</td></tr>
											<tr><td>88</td><td>Grenada</td><td>Grenada</td><td>1+473</td><td>GD</td><td>.gd</td><td>yes</td></tr>
											<tr><td>89</td><td>Guadaloupe</td><td>Guadeloupe</td><td>590</td><td>GP</td><td>.gp</td><td>no</td></tr>
											<tr><td>90</td><td>Guam</td><td>Guam</td><td>1+671</td><td>GU</td><td>.gu</td><td>no</td></tr>
											<tr><td>91</td><td>Guatemala</td><td>Republic of Guatemala</td><td>502</td><td>GT</td><td>.gt</td><td>yes</td></tr>
											<tr><td>92</td><td>Guernsey</td><td>Guernsey</td><td>44</td><td>GG</td><td>.gg</td><td>no</td></tr>
											<tr><td>93</td><td>Guinea</td><td>Republic of Guinea</td><td>224</td><td>GN</td><td>.gn</td><td>yes</td></tr>
											<tr><td>94</td><td>Guinea-Bissau</td><td>Republic of Guinea-Bissau</td><td>245</td><td>GW</td><td>.gw</td><td>yes</td></tr>
											<tr><td>95</td><td>Guyana</td><td>Co-operative Republic of Guyana</td><td>592</td><td>GY</td><td>.gy</td><td>yes</td></tr>
											<tr><td>96</td><td>Haiti</td><td>Republic of Haiti</td><td>509</td><td>HT</td><td>.ht</td><td>yes</td></tr>
											<tr><td>97</td><td>Heard Island and McDonald Islands</td><td>Heard Island and McDonald Islands</td><td>NONE</td><td>HM</td><td>.hm</td><td>no</td></tr>
											<tr><td>98</td><td>Honduras</td><td>Republic of Honduras</td><td>504</td><td>HN</td><td>.hn</td><td>yes</td></tr>
											<tr><td>99</td><td>Hong Kong</td><td>Hong Kong</td><td>852</td><td>HK</td><td>.hk</td><td>no</td></tr>
											<tr><td>100</td><td>Hungary</td><td>Hungary</td><td>36</td><td>HU</td><td>.hu</td><td>yes</td></tr>
											<tr><td>101</td><td>Iceland</td><td>Republic of Iceland</td><td>354</td><td>IS</td><td>.is</td><td>yes</td></tr>
											<tr><td>102</td><td>India</td><td>Republic of India</td><td>91</td><td>IN</td><td>.in</td><td>yes</td></tr>
											<tr><td>103</td><td>Indonesia</td><td>Republic of Indonesia</td><td>62</td><td>ID</td><td>.id</td><td>yes</td></tr>
											<tr><td>104</td><td>Iran</td><td>Islamic Republic of Iran</td><td>98</td><td>IR</td><td>.ir</td><td>yes</td></tr>
											<tr><td>105</td><td>Iraq</td><td>Republic of Iraq</td><td>964</td><td>IQ</td><td>.iq</td><td>yes</td></tr>
											<tr><td>106</td><td>Ireland</td><td>Ireland</td><td>353</td><td>IE</td><td>.ie</td><td>yes</td></tr>
											<tr><td>107</td><td>Isle of Man</td><td>Isle of Man</td><td>44</td><td>IM</td><td>.im</td><td>no</td></tr>
											<tr><td>108</td><td>Israel</td><td>State of Israel</td><td>972</td><td>IL</td><td>.il</td><td>yes</td></tr>
											<tr><td>109</td><td>Italy</td><td>Italian Republic</td><td>39</td><td>IT</td><td>.jm</td><td>yes</td></tr>
											<tr><td>110</td><td>Jamaica</td><td>Jamaica</td><td>1+876</td><td>JM</td><td>.jm</td><td>yes</td></tr>
											<tr><td>111</td><td>Japan</td><td>Japan</td><td>81</td><td>JP</td><td>.jp</td><td>yes</td></tr>
											<tr><td>112</td><td>Jersey</td><td>The Bailiwick of Jersey</td><td>44</td><td>JE</td><td>.je</td><td>no</td></tr>
											<tr><td>113</td><td>Jordan</td><td>Hashemite Kingdom of Jordan</td><td>962</td><td>JO</td><td>.jo</td><td>yes</td></tr>
											<tr><td>114</td><td>Kazakhstan</td><td>Republic of Kazakhstan</td><td>7</td><td>KZ</td><td>.kz</td><td>yes</td></tr>
											<tr><td>115</td><td>Kenya</td><td>Republic of Kenya</td><td>254</td><td>KE</td><td>.ke</td><td>yes</td></tr>
											<tr><td>116</td><td>Kiribati</td><td>Republic of Kiribati</td><td>686</td><td>KI</td><td>.ki</td><td>yes</td></tr>
											<tr><td>117</td><td>Kosovo</td><td>Republic of Kosovo</td><td>381</td><td>XK</td><td></td><td>some</td></tr>
											<tr><td>118</td><td>Kuwait</td><td>State of Kuwait</td><td>965</td><td>KW</td><td>.kw</td><td>yes</td></tr>
											<tr><td>119</td><td>Kyrgyzstan</td><td>Kyrgyz Republic</td><td>996</td><td>KG</td><td>.kg</td><td>yes</td></tr>
											<tr><td>120</td><td>Laos</td><td>Lao People's Democratic Republic</td><td>856</td><td>LA</td><td>.la</td><td>yes</td></tr>
											<tr><td>121</td><td>Latvia</td><td>Republic of Latvia</td><td>371</td><td>LV</td><td>.lv</td><td>yes</td></tr>
											<tr><td>122</td><td>Lebanon</td><td>Republic of Lebanon</td><td>961</td><td>LB</td><td>.lb</td><td>yes</td></tr>
											<tr><td>123</td><td>Lesotho</td><td>Kingdom of Lesotho</td><td>266</td><td>LS</td><td>.ls</td><td>yes</td></tr>
											<tr><td>124</td><td>Liberia</td><td>Republic of Liberia</td><td>231</td><td>LR</td><td>.lr</td><td>yes</td></tr>
											<tr><td>125</td><td>Libya</td><td>Libya</td><td>218</td><td>LY</td><td>.ly</td><td>yes</td></tr>
											<tr><td>126</td><td>Liechtenstein</td><td>Principality of Liechtenstein</td><td>423</td><td>LI</td><td>.li</td><td>yes</td></tr>
											<tr><td>127</td><td>Lithuania</td><td>Republic of Lithuania</td><td>370</td><td>LT</td><td>.lt</td><td>yes</td></tr>
											<tr><td>128</td><td>Luxembourg</td><td>Grand Duchy of Luxembourg</td><td>352</td><td>LU</td><td>.lu</td><td>yes</td></tr>
											<tr><td>129</td><td>Macao</td><td>The Macao Special Administrative Region</td><td>853</td><td>MO</td><td>.mo</td><td>no</td></tr>
											<tr><td>130</td><td>Macedonia</td><td>The Former Yugoslav Republic of Macedonia</td><td>389</td><td>MK</td><td>.mk</td><td>yes</td></tr>
											<tr><td>131</td><td>Madagascar</td><td>Republic of Madagascar</td><td>261</td><td>MG</td><td>.mg</td><td>yes</td></tr>
											<tr><td>132</td><td>Malawi</td><td>Republic of Malawi</td><td>265</td><td>MW</td><td>.mw</td><td>yes</td></tr>
											<tr><td>133</td><td>Malaysia</td><td>Malaysia</td><td>60</td><td>MY</td><td>.my</td><td>yes</td></tr>
											<tr><td>134</td><td>Maldives</td><td>Republic of Maldives</td><td>960</td><td>MV</td><td>.mv</td><td>yes</td></tr>
											<tr><td>135</td><td>Mali</td><td>Republic of Mali</td><td>223</td><td>ML</td><td>.ml</td><td>yes</td></tr>
											<tr><td>136</td><td>Malta</td><td>Republic of Malta</td><td>356</td><td>MT</td><td>.mt</td><td>yes</td></tr>
											<tr><td>137</td><td>Marshall Islands</td><td>Republic of the Marshall Islands</td><td>692</td><td>MH</td><td>.mh</td><td>yes</td></tr>
											<tr><td>138</td><td>Martinique</td><td>Martinique</td><td>596</td><td>MQ</td><td>.mq</td><td>no</td></tr>
											<tr><td>139</td><td>Mauritania</td><td>Islamic Republic of Mauritania</td><td>222</td><td>MR</td><td>.mr</td><td>yes</td></tr>
											<tr><td>140</td><td>Mauritius</td><td>Republic of Mauritius</td><td>230</td><td>MU</td><td>.mu</td><td>yes</td></tr>
											<tr><td>141</td><td>Mayotte</td><td>Mayotte</td><td>262</td><td>YT</td><td>.yt</td><td>no</td></tr>
											<tr><td>142</td><td>Mexico</td><td>United Mexican States</td><td>52</td><td>MX</td><td>.mx</td><td>yes</td></tr>
											<tr><td>143</td><td>Micronesia</td><td>Federated States of Micronesia</td><td>691</td><td>FM</td><td>.fm</td><td>yes</td></tr>
											<tr><td>144</td><td>Moldava</td><td>Republic of Moldova</td><td>373</td><td>MD</td><td>.md</td><td>yes</td></tr>
											<tr><td>145</td><td>Monaco</td><td>Principality of Monaco</td><td>377</td><td>MC</td><td>.mc</td><td>yes</td></tr>
											<tr><td>146</td><td>Mongolia</td><td>Mongolia</td><td>976</td><td>MN</td><td>.mn</td><td>yes</td></tr>
											<tr><td>147</td><td>Montenegro</td><td>Montenegro</td><td>382</td><td>ME</td><td>.me</td><td>yes</td></tr>
											<tr><td>148</td><td>Montserrat</td><td>Montserrat</td><td>1+664</td><td>MS</td><td>.ms</td><td>no</td></tr>
											<tr><td>149</td><td>Morocco</td><td>Kingdom of Morocco</td><td>212</td><td>MA</td><td>.ma</td><td>yes</td></tr>
											<tr><td>150</td><td>Mozambique</td><td>Republic of Mozambique</td><td>258</td><td>MZ</td><td>.mz</td><td>yes</td></tr>
											<tr><td>151</td><td>Myanmar (Burma)</td><td>Republic of the Union of Myanmar</td><td>95</td><td>MM</td><td>.mm</td><td>yes</td></tr>
											<tr><td>152</td><td>Namibia</td><td>Republic of Namibia</td><td>264</td><td>NA</td><td>.na</td><td>yes</td></tr>
											<tr><td>153</td><td>Nauru</td><td>Republic of Nauru</td><td>674</td><td>NR</td><td>.nr</td><td>yes</td></tr>
											<tr><td>154</td><td>Nepal</td><td>Federal Democratic Republic of Nepal</td><td>977</td><td>NP</td><td>.np</td><td>yes</td></tr>
											<tr><td>155</td><td>Netherlands</td><td>Kingdom of the Netherlands</td><td>31</td><td>NL</td><td>.nl</td><td>yes</td></tr>
											<tr><td>156</td><td>New Caledonia</td><td>New Caledonia</td><td>687</td><td>NC</td><td>.nc</td><td>no</td></tr>
											<tr><td>157</td><td>New Zealand</td><td>New Zealand</td><td>64</td><td>NZ</td><td>.nz</td><td>yes</td></tr>
											<tr><td>158</td><td>Nicaragua</td><td>Republic of Nicaragua</td><td>505</td><td>NI</td><td>.ni</td><td>yes</td></tr>
											<tr><td>159</td><td>Niger</td><td>Republic of Niger</td><td>227</td><td>NE</td><td>.ne</td><td>yes</td></tr>
											<tr><td>160</td><td>Nigeria</td><td>Federal Republic of Nigeria</td><td>234</td><td>NG</td><td>.ng</td><td>yes</td></tr>
											<tr><td>161</td><td>Niue</td><td>Niue</td><td>683</td><td>NU</td><td>.nu</td><td>some</td></tr>
											<tr><td>162</td><td>Norfolk Island</td><td>Norfolk Island</td><td>672</td><td>NF</td><td>.nf</td><td>no</td></tr>
											<tr><td>163</td><td>North Korea</td><td>Democratic People's Republic of Korea</td><td>850</td><td>KP</td><td>.kp</td><td>yes</td></tr>
											<tr><td>164</td><td>Northern Mariana Islands</td><td>Northern Mariana Islands</td><td>1+670</td><td>MP</td><td>.mp</td><td>no</td></tr>
											<tr><td>165</td><td>Norway</td><td>Kingdom of Norway</td><td>47</td><td>NO</td><td>.no</td><td>yes</td></tr>
											<tr><td>166</td><td>Oman</td><td>Sultanate of Oman</td><td>968</td><td>OM</td><td>.om</td><td>yes</td></tr>
											<tr><td>167</td><td>Pakistan</td><td>Islamic Republic of Pakistan</td><td>92</td><td>PK</td><td>.pk</td><td>yes</td></tr>
											<tr><td>168</td><td>Palau</td><td>Republic of Palau</td><td>680</td><td>PW</td><td>.pw</td><td>yes</td></tr>
											<tr><td>169</td><td>Palestine</td><td>State of Palestine (or Occupied Palestinian Territory)</td><td>970</td><td>PS</td><td>.ps</td><td>some</td></tr>
											<tr><td>170</td><td>Panama</td><td>Republic of Panama</td><td>507</td><td>PA</td><td>.pa</td><td>yes</td></tr>
											<tr><td>171</td><td>Papua New Guinea</td><td>Independent State of Papua New Guinea</td><td>675</td><td>PG</td><td>.pg</td><td>yes</td></tr>
											<tr><td>172</td><td>Paraguay</td><td>Republic of Paraguay</td><td>595</td><td>PY</td><td>.py</td><td>yes</td></tr>
											<tr><td>173</td><td>Peru</td><td>Republic of Peru</td><td>51</td><td>PE</td><td>.pe</td><td>yes</td></tr>
											<tr><td>174</td><td>Phillipines</td><td>Republic of the Philippines</td><td>63</td><td>PH</td><td>.ph</td><td>yes</td></tr>
											<tr><td>175</td><td>Pitcairn</td><td>Pitcairn</td><td>NONE</td><td>PN</td><td>.pn</td><td>no</td></tr>
											<tr><td>176</td><td>Poland</td><td>Republic of Poland</td><td>48</td><td>PL</td><td>.pl</td><td>yes</td></tr>
											<tr><td>177</td><td>Portugal</td><td>Portuguese Republic</td><td>351</td><td>PT</td><td>.pt</td><td>yes</td></tr>
											<tr><td>178</td><td>Puerto Rico</td><td>Commonwealth of Puerto Rico</td><td>1+939</td><td>PR</td><td>.pr</td><td>no</td></tr>
											<tr><td>179</td><td>Qatar</td><td>State of Qatar</td><td>974</td><td>QA</td><td>.qa</td><td>yes</td></tr>
											<tr><td>180</td><td>Reunion</td><td>Réunion</td><td>262</td><td>RE</td><td>.re</td><td>no</td></tr>
											<tr><td>181</td><td>Romania</td><td>Romania</td><td>40</td><td>RO</td><td>.ro</td><td>yes</td></tr>
											<tr><td>182</td><td>Russia</td><td>Russian Federation</td><td>7</td><td>RU</td><td>.ru</td><td>yes</td></tr>
											<tr><td>183</td><td>Rwanda</td><td>Republic of Rwanda</td><td>250</td><td>RW</td><td>.rw</td><td>yes</td></tr>
											<tr><td>184</td><td>Saint Barthelemy</td><td>Saint Barthélemy</td><td>590</td><td>BL</td><td>.bl</td><td>no</td></tr>
											<tr><td>185</td><td>Saint Helena</td><td>Saint Helena, Ascension and Tristan da Cunha</td><td>290</td><td>SH</td><td>.sh</td><td>no</td></tr>
											<tr><td>186</td><td>Saint Kitts and Nevis</td><td>Federation of Saint Christopher and Nevis</td><td>1+869</td><td>KN</td><td>.kn</td><td>yes</td></tr>
											<tr><td>187</td><td>Saint Lucia</td><td>Saint Lucia</td><td>1+758</td><td>LC</td><td>.lc</td><td>yes</td></tr>
											<tr><td>188</td><td>Saint Martin</td><td>Saint Martin</td><td>590</td><td>MF</td><td>.mf</td><td>no</td></tr>
											<tr><td>189</td><td>Saint Pierre and Miquelon</td><td>Saint Pierre and Miquelon</td><td>508</td><td>PM</td><td>.pm</td><td>no</td></tr>
											<tr><td>190</td><td>Saint Vincent and the Grenadines</td><td>Saint Vincent and the Grenadines</td><td>1+784</td><td>VC</td><td>.vc</td><td>yes</td></tr>
											<tr><td>191</td><td>Samoa</td><td>Independent State of Samoa</td><td>685</td><td>WS</td><td>.ws</td><td>yes</td></tr>
											<tr><td>192</td><td>San Marino</td><td>Republic of San Marino</td><td>378</td><td>SM</td><td>.sm</td><td>yes</td></tr>
											<tr><td>193</td><td>Sao Tome and Principe</td><td>Democratic Republic of São Tomé and Príncipe</td><td>239</td><td>ST</td><td>.st</td><td>yes</td></tr>
											<tr><td>194</td><td>Saudi Arabia</td><td>Kingdom of Saudi Arabia</td><td>966</td><td>SA</td><td>.sa</td><td>yes</td></tr>
											<tr><td>195</td><td>Senegal</td><td>Republic of Senegal</td><td>221</td><td>SN</td><td>.sn</td><td>yes</td></tr>
											<tr><td>196</td><td>Serbia</td><td>Republic of Serbia</td><td>381</td><td>RS</td><td>.rs</td><td>yes</td></tr>
											<tr><td>197</td><td>Seychelles</td><td>Republic of Seychelles</td><td>248</td><td>SC</td><td>.sc</td><td>yes</td></tr>
											<tr><td>198</td><td>Sierra Leone</td><td>Republic of Sierra Leone</td><td>232</td><td>SL</td><td>.sl</td><td>yes</td></tr>
											<tr><td>199</td><td>Singapore</td><td>Republic of Singapore</td><td>65</td><td>SG</td><td>.sg</td><td>yes</td></tr>
											<tr><td>200</td><td>Sint Maarten</td><td>Sint Maarten</td><td>1+721</td><td>SX</td><td>.sx</td><td>no</td></tr>
											<tr><td>201</td><td>Slovakia</td><td>Slovak Republic</td><td>421</td><td>SK</td><td>.sk</td><td>yes</td></tr>
											<tr><td>202</td><td>Slovenia</td><td>Republic of Slovenia</td><td>386</td><td>SI</td><td>.si</td><td>yes</td></tr>
											<tr><td>203</td><td>Solomon Islands</td><td>Solomon Islands</td><td>677</td><td>SB</td><td>.sb</td><td>yes</td></tr>
											<tr><td>204</td><td>Somalia</td><td>Somali Republic</td><td>252</td><td>SO</td><td>.so</td><td>yes</td></tr>
											<tr><td>205</td><td>South Africa</td><td>Republic of South Africa</td><td>27</td><td>ZA</td><td>.za</td><td>yes</td></tr>
											<tr><td>206</td><td>South Georgia and the South Sandwich Islands</td><td>South Georgia and the South Sandwich Islands</td><td>500</td><td>GS</td><td>.gs</td><td>no</td></tr>
											<tr><td>207</td><td>South Korea</td><td>Republic of Korea</td><td>82</td><td>KR</td><td>.kr</td><td>yes</td></tr>
											<tr><td>208</td><td>South Sudan</td><td>Republic of South Sudan</td><td>211</td><td>SS</td><td>.ss</td><td>yes</td></tr>
											<tr><td>209</td><td>Spain</td><td>Kingdom of Spain</td><td>34</td><td>ES</td><td>.es</td><td>yes</td></tr>
											<tr><td>210</td><td>Sri Lanka</td><td>Democratic Socialist Republic of Sri Lanka</td><td>94</td><td>LK</td><td>.lk</td><td>yes</td></tr>
											<tr><td>211</td><td>Sudan</td><td>Republic of the Sudan</td><td>249</td><td>SD</td><td>.sd</td><td>yes</td></tr>
											<tr><td>212</td><td>Suriname</td><td>Republic of Suriname</td><td>597</td><td>SR</td><td>.sr</td><td>yes</td></tr>
											<tr><td>213</td><td>Svalbard and Jan Mayen</td><td>Svalbard and Jan Mayen</td><td>47</td><td>SJ</td><td>.sj</td><td>no</td></tr>
											<tr><td>214</td><td>Swaziland</td><td>Kingdom of Swaziland</td><td>268</td><td>SZ</td><td>.sz</td><td>yes</td></tr>
											<tr><td>215</td><td>Sweden</td><td>Kingdom of Sweden</td><td>46</td><td>SE</td><td>.se</td><td>yes</td></tr>
											<tr><td>216</td><td>Switzerland</td><td>Swiss Confederation</td><td>41</td><td>CH</td><td>.ch</td><td>yes</td></tr>
											<tr><td>217</td><td>Syria</td><td>Syrian Arab Republic</td><td>963</td><td>SY</td><td>.sy</td><td>yes</td></tr>
											<tr><td>218</td><td>Taiwan</td><td>Republic of China (Taiwan)</td><td>886</td><td>TW</td><td>.tw</td><td>former</td></tr>
											<tr><td>219</td><td>Tajikistan</td><td>Republic of Tajikistan</td><td>992</td><td>TJ</td><td>.tj</td><td>yes</td></tr>
											<tr><td>220</td><td>Tanzania</td><td>United Republic of Tanzania</td><td>255</td><td>TZ</td><td>.tz</td><td>yes</td></tr>
											<tr><td>221</td><td>Thailand</td><td>Kingdom of Thailand</td><td>66</td><td>TH</td><td>.th</td><td>yes</td></tr>
											<tr><td>222</td><td>Timor-Leste (East Timor)</td><td>Democratic Republic of Timor-Leste</td><td>670</td><td>TL</td><td>.tl</td><td>yes</td></tr>
											<tr><td>223</td><td>Togo</td><td>Togolese Republic</td><td>228</td><td>TG</td><td>.tg</td><td>yes</td></tr>
											<tr><td>224</td><td>Tokelau</td><td>Tokelau</td><td>690</td><td>TK</td><td>.tk</td><td>no</td></tr>
											<tr><td>225</td><td>Tonga</td><td>Kingdom of Tonga</td><td>676</td><td>TO</td><td>.to</td><td>yes</td></tr>
											<tr><td>226</td><td>Trinidad and Tobago</td><td>Republic of Trinidad and Tobago</td><td>1+868</td><td>TT</td><td>.tt</td><td>yes</td></tr>
											<tr><td>227</td><td>Tunisia</td><td>Republic of Tunisia</td><td>216</td><td>TN</td><td>.tn</td><td>yes</td></tr>
											<tr><td>228</td><td>Turkey</td><td>Republic of Turkey</td><td>90</td><td>TR</td><td>.tr</td><td>yes</td></tr>
											<tr><td>229</td><td>Turkmenistan</td><td>Turkmenistan</td><td>993</td><td>TM</td><td>.tm</td><td>yes</td></tr>
											<tr><td>230</td><td>Turks and Caicos Islands</td><td>Turks and Caicos Islands</td><td>1+649</td><td>TC</td><td>.tc</td><td>no</td></tr>
											<tr><td>231</td><td>Tuvalu</td><td>Tuvalu</td><td>688</td><td>TV</td><td>.tv</td><td>yes</td></tr>
											<tr><td>232</td><td>Uganda</td><td>Republic of Uganda</td><td>256</td><td>UG</td><td>.ug</td><td>yes</td></tr>
											<tr><td>233</td><td>Ukraine</td><td>Ukraine</td><td>380</td><td>UA</td><td>.ua</td><td>yes</td></tr>
											<tr><td>234</td><td>United Arab Emirates</td><td>United Arab Emirates</td><td>971</td><td>AE</td><td>.ae</td><td>yes</td></tr>
											<tr><td>235</td><td>United Kingdom</td><td>United Kingdom of Great Britain and Nothern Ireland</td><td>44</td><td>GB</td><td>.uk</td><td>yes</td></tr>
											<tr><td>236</td><td>United States</td><td>United States of America</td><td>1</td><td>US</td><td>.us</td><td>yes</td></tr>
											<tr><td>237</td><td>United States Minor Outlying Islands</td><td>United States Minor Outlying Islands</td><td>NONE</td><td>UM</td><td>NONE</td><td>no</td></tr>
											<tr><td>238</td><td>Uruguay</td><td>Eastern Republic of Uruguay</td><td>598</td><td>UY</td><td>.uy</td><td>yes</td></tr>
											<tr><td>239</td><td>Uzbekistan</td><td>Republic of Uzbekistan</td><td>998</td><td>UZ</td><td>.uz</td><td>yes</td></tr>
											<tr><td>240</td><td>Vanuatu</td><td>Republic of Vanuatu</td><td>678</td><td>VU</td><td>.vu</td><td>yes</td></tr>
											<tr><td>241</td><td>Vatican City</td><td>State of the Vatican City</td><td>39</td><td>VA</td><td>.va</td><td>no</td></tr>
											<tr><td>242</td><td>Venezuela</td><td>Bolivarian Republic of Venezuela</td><td>58</td><td>VE</td><td>.ve</td><td>yes</td></tr>
											<tr><td>243</td><td>Vietnam</td><td>Socialist Republic of Vietnam</td><td>84</td><td>VN</td><td>.vn</td><td>yes</td></tr>
											<tr><td>244</td><td>Virgin Islands, British</td><td>British Virgin Islands</td><td>1+284</td><td>VG</td><td>.vg</td><td>no</td></tr>
											<tr><td>245</td><td>Virgin Islands, US</td><td>Virgin Islands of the United States</td><td>1+340</td><td>VI</td><td>.vi</td><td>no</td></tr>
											<tr><td>246</td><td>Wallis and Futuna</td><td>Wallis and Futuna</td><td>681</td><td>WF</td><td>.wf</td><td>no</td></tr>
											<tr><td>247</td><td>Western Sahara</td><td>Western Sahara</td><td>212</td><td>EH</td><td>.eh</td><td>no</td></tr>
											<tr><td>248</td><td>Yemen</td><td>Republic of Yemen</td><td>967</td><td>YE</td><td>.ye</td><td>yes</td></tr>
											<tr><td>249</td><td>Zambia</td><td>Republic of Zambia</td><td>260</td><td>ZM</td><td>.zm</td><td>yes</td></tr>
											<tr><td>250</td><td>Zimbabwe</td><td>Republic of Zimbabwe</td><td>263</td><td>ZW</td><td>.zw</td><td>yes</td></tr>
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
		
	<!-- page specific plugins -->

		<!-- datatables -->
		<script src="assets/lib/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="assets/lib/DataTables/media/js/dataTables.bootstrap.js"></script>
		<script src="assets/lib/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="assets/lib/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
		
		<!-- datatables functions -->
		<script src="assets/js/apps/tisa_datatables.js"></script>
		
    </body>
</html>

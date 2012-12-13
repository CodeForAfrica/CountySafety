<!DOCTYPE html>

<html>
<head>
  <meta charset='utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
  <meta name='apple-mobile-web-app-status-bar-style' content='black' /> 
  <meta name='apple-mobile-web-app-capable' content='yes' />
  <meta property='og:title' content='Kenya Education' />
  <meta property='og:type' content='website' />
  <meta property='og:site_name' content='Kenya Education' />
  <meta property='fb:admins' content='8806219' />
  <meta property='og:description' content='Kenya Education' />
  <link rel='apple-touch-startup-image' href='img/ipad-icon.jpg' />
  <title>County Safety</title>
  <link rel='stylesheet' href='css/style.css' type='text/css' />
  <!--[if IE 7]>
  	<link rel='stylesheet' href='css/ie7.css'  type='text/css' />
  <![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div id='sidebar'>
  <div class='introduction'>
    <h1 class='heading'><a href='/county_safety'>County Safety</a></h1>
    <div class='limiter'>
The Standard Group's County Safety Crime Visualization is an intensity map of all crimes reported in selected local dailies including The Standard from January to August 2012. The crimes are listed in 15 categories and are documented by where the crimes occured.
	  </div>
  </div>

  <ul id='nav' class='clearfix limiter layers'>
    <li class='active'><a id='categories' hash='categories' href='#categories' data-story='categories' class='active'>Categories</a></li>
    <?php //echo "<li><a id='performance' hash='performance' href='#performance' data-story='performance'>Crime Categories</a></li>" ?>
    <li><a id='trend' hash='trend' href='#trend' data-story='trend'>Trend</a></li>
	 <li><a id='news' hash='news' href='#news' data-story='news'>Crime Stories</a></li>
	  <li><a id='stations' hash='stations' href='#stations' data-story='stations'>Police Stations</a></li>
  </ul>
  <ul id='data-modal' class='layers'>  
    <?php //echo "<li><a href='open' data-story='open'>Data</a></li> "?>
  <?php //echo "  <li><a href='#' data-story='methods' class='methods-link'>?</a></li> "?>
  </ul>
  <div id='content'>
    <div class='limiter clearfix'>
 <?php

	  ?>

      <div class='story categories active'>
	   
        <ul class='subnav'>
		<div style='display:none;'> <li class='active'>
	         <a href='#' data-layer='code4kenya.map-aorqvpcs'>All crimes</a>
	      </li></div>	
		Please select a crime category from the list below to see the intensity map for that crime :<div><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-aorqvpcs' class='section-name'>All crimes</a></div>
           <table width='100%'>
           <style type='text/css'>
           a:hover{
           color:brown;
           }
           td:hover{
           background-color:grey;
           }
         
           </style>
          
		   <tr><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-xml1xkji' class='section-name'>Arson</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-emlek0y0' class='section-name'>Assault</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-gysa1cc6' class='section-name'>Banditry</a></td></tr>
		   <tr><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-0zbfdg63' class='section-name'>Carjacking</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-fb3z39tr' class='section-name'>Conmanship</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-6tadvdgf' class='section-name'>Domestic murder</a></td></tr>
		   <tr><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.ux1wi1jw' class='section-name'>Forgery</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-d3yjx0fb' class='section-name'>Fraud</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-yjeq3af8' class='section-name'>Mob Justice</a></td></tr>
		   <tr><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-v7c1uoge' class='section-name'>Murder</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-mwz1t83o' class='section-name'>Rape</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-i67k66o6' class='section-name'>Robbery</a></td></tr>
		   <tr><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-zb1hiwl7' class='section-name'>Sodomy</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-abwdg8eb' class='section-name'>Stock Theft</a></td><td><a href='#' data-narrative='2' data-zoom='7' data-ease='2000' data-layer='code4kenya.map-mqwpn5r3' class='section-name'>Traffic Offence</a></td></tr>
</table>
<div style='margin-top:20px;' align='center'>
			<a href='http://standardmedia.co.ke'><img src='img/standard-digital-world.png' height='90px'></a>     
			<a href='http://code4kenya.org'><img src='img/code4kenya.png' height='40px'></a>
		</div>		   
        </ul>
		
      </div>
      <div class='story trend'>
        <ul class='subnav'>
          		<div>
<iframe src='timeline.php' width='500px' height='300px' scrolling='no'></iframe>
</div>
        </ul>
      </div>

<div class = 'story news'>

					<iframe src='news.php' id='childFrame' frameborder='0' width='100%' height='300px'></iframe>
						
</div>

	        <div class='story stations'>
 Latest crime stories from Standard Digital: <br>
        <ul class='subnav'>
          		<div>
<iframe src='stations' width='500px' height='300px' scrolling='no'></iframe>
</div>
        </ul>
      </div>
    </div>
  </div>
</div>  

<div class='methods-modal' style='display:none;'>
  <div class='methods-content'>
    <h3>About the site</h3>      
	<p>The Exploring Kenyan Education site investigates the education sector in Kenya and visualizes location data for all primary and secondary schools across the country. By mapping school locations with education outcomes and trend data, the site provides insight into the state of education within Kenya.</p>
	<h3>Methodology</h3>
	<p>Data work was carried out using OpenOffice and SQLite to join attribute data with spatial data for the purpose of visualization. Data was obtained and collected from the <a href="https://opendata.go.ke/">Kenya OpenData portal</a> and official Government of Kenya data. In cases of pre-2010 data, district names were updated to the 47 2010-designated counties. Data was aggregated and formatted into county-level tables and joined to county-level geographic data. Averages, minimums, and maximums were calculated to be included in the visualization.</p> 
	<p>School location data was downloaded from the Kenya OpenData portal. Latitude and longitude data for 37,725 primary and secondary schools were reformatted for proper use in mapping applications. All points were plotted on the map, including schools that are listed with zero enrollment. It is unknown to whether these locations have invalid data, missing data, or are closed.</p> 
	<p>Kenya Certificate of Primary Education (KCPE) and Kenya Certificate of Secondary Education (KCSE) exam results were obtained from the Kenyan National Examination Council. Exam results were listed by school with gender and score categorizations. Percentages of students passing (C+ or higher for secondary, or a score higher than 250 for primary) were calculated for both the KCPE and the KCSE exam results. Results were aggregated to county-level averages. The exam results only contained county location identifiers and did not include a national school identifier code so only county-level aggregations were able to be visualized.</p>
	<p>Other contextual data was obtained from the Kenya OpenData portal. Data was matched to county administrative geographic data by county name. There is no official source of county administrative boundary geographic data. This site used county geographic data made <a href="http://www.arcgis.com/home/item.html?id=5f83ca29e5b849b8b05bc0b281ae27bc">publicly available online</a>.</p>
	<p>All maps were created with <a href="http://mapbox.com/tilemill">TileMill</a> and hosted with <a href="http://mapbox.com">MapBox</a>. Color scales were determined based on natural breaks within each of the visualized indicators.</p>
	<a href='#' class='methods-close'>Close</a>
  </div>
</div>

<div id='map' class='map'></div>


<script src='ext/jquery.min.js'></script>
<script src='ext/modestmaps.min.js'></script>
<script src='ext/wax.mm.min.js'></script>
<script src='ext/easey.js'></script>
<script src='js/site.js'></script>
</body>
</html>
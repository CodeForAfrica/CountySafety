<?php
require_once('../config.php');
$coordinates = $_POST['gpscoordinates'];
$coordinates = str_replace('(', '', $coordinates);
$coordinates = str_replace(')', '', $coordinates);
$coordinates = explode(', ', $coordinates);
$lat1 = $coordinates[0];
$lng1 = $coordinates[1];
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBkJAmtq5SDyK3nAWrmjoHiOLYWXUXw-Uk&sensor=false"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" id='runscript'>
	
	
	$(function() {
	var markers = [
<?php
	function distance($lat1, $lng1, $lat2, $lng2)
{
	$pi80 = M_PI / 180;
	$lat1 *= $pi80;
	$lng1 *= $pi80;
	$lat2 *= $pi80;
	$lng2 *= $pi80;
 
	$r = 6372.797; // mean radius of Earth in km
	$dlat = $lat2 - $lat1;
	$dlng = $lng2 - $lng1;
	$a = sin ($dlat / 2) * sin ($dlat / 2) + cos ($lat1) * cos ($lat2) * sin ($dlng / 2) * sin ($dlng / 2);
	$c = 2 * atan2 (sqrt ($a), sqrt (1 - $a));
	$km = $r * $c;
 
	return $km;
	}
	
	
	$sql = mysql_query("SELECT * FROM stations WHERE geo_latitude!=''");
	$distances=array();
	while($row=mysql_fetch_array($sql))
	{
		
		
		$lat2=$row['geo_latitude'];
		$lng2=$row['geo_longitude'];
		
		$distances = array($row['id'] => distance($lat1, $lng1, $lat2, $lng2))+$distances;
		
	}

	asort($distances);
	$printpoints=array();
	foreach ($distances as $key => $val) {

		$val=$val*1000;
		if($val<5000)
		{
		
			settype($val, "integer");
			$distance=$val;
			$sql=mysql_query("SELECT * FROM stations WHERE id='$key'");
			$row=mysql_fetch_array($sql);
			$gps = $row['geo_latitude'].', '.$row['geo_longitude'];
			$printpoints[]="['<b>".$row['name']."</b><br>".$row['number']."', ".$gps."]";
		}
	}
	
echo implode(', ', $printpoints);
?>
];

if(markers==''){
alert('No stations found! Try another location');
}
		var myOptions = {
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
		var infowindow = new google.maps.InfoWindow(); 
		var marker, i;
		var bounds = new google.maps.LatLngBounds();
	
		for (i = 0; i < markers.length; i++) { 
			var pos = new google.maps.LatLng(markers[i][1], markers[i][2]);
			bounds.extend(pos);
			marker = new google.maps.Marker({
				position: pos,
				map: map
			});
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					infowindow.setContent(markers[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}
		map.fitBounds(bounds);
	});
	</script>
<div id="map_canvas"></div>	

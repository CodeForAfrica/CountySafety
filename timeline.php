<?php
require_once('config.php');
		  
$categories = array('Arson', 'Assault', 'Banditry', 'Carjacking', 'Conmanship', 'Domestic Murder', 'Forgery', 'Fraud', 'Mob Justice', 'Murder', 'Rape', 'Robbery', 'Sodomy', 'Stock Theft', 'Traffic Offence');
$months = array('Janurary', 'February', 'March', 'April', 'May', 'June', 'July', 'August');
$weapons = array('Acid', 'Arrow', 'Arrows', 'Arrows and Pangas', 'Assault', 'Axe', 'Blunt Objesct', 'Card-shuffling', 'Carjacking', 'Club', 'Crude Weapons', 'Defilement', 'Drowning', 'Drugs', 'Exhibition Stands', 'Fake Documents', 'Fake Tickets', 'False alarm', 'Fire', 'Fleecing', 'Flouting Traffic Rules', 'Gun', 'Guns', 'Hacking', 'Hot water', 'Illicit Brews', 'Iron bars and machetes', 'Knife', 'Machete', 'Major Vehicle defects', 'Metal bar', 'Murder', 'Mutilation', 'N/A', 'No PSV Documents', 'Panga', 'Pangas', 'Physical', 'Piece of wood', 'Plank of wood', 'Poisoned Arrow', 'Rape', 'Recruitment', 'Robbery', 'Sharp object', 'Stabbing', 'Stone', 'Strangling', 'Swords', 'Theft', 'Unknown');
require_once('timeline.php');
?>

<div style='margin-left:-50px;margin-top:-35px'>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<?php
function timeline($months, $categories){
?>
 
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          
          <?php
		  echo "['Month',"; 
		  if(isset($_GET['cat']))
			{
				$cat=$_GET['cat'];
				echo "'".$cat."'";
			}
			else
			{
			echo "'Arson', 'Assault', 'Banditry', 'Carjacking', 'Conmanship', 'Domestic Murder', 'Forgery', 'Fraud', 'Mob Justice', 'Murder', 'Rape', 'Robbery', 'Sodomy', 'Stock Theft', 'Traffic Offence'";
			}
			echo "],";
		  $monthdata = array();
		  foreach($months as $month)
		  {
		  $string =  "['".$month."',";
		  	 $totals = array();
			if(isset($_GET['cat']))
			{
			$cat = $_GET['cat'];
				$sql = mysql_query("SELECT * FROM crimeapp WHERE category='$cat' AND month='$month'");
				 $total = mysql_num_rows($sql);
				 $totals[]=$total;
			}
			else
			{
				 foreach($categories as $cat)
				 {
				 $sql = mysql_query("SELECT * FROM crimeapp WHERE category='$cat' AND month='$month'");
				 $total = mysql_num_rows($sql);
				 $totals[]=$total;
				 }
			 }
			 $string .= implode(', ', $totals);
		   $string .= "]";
		   $monthdata[]=$string;
		  }
		  echo implode(', ', $monthdata);
		  ?>
         ]);

        var options = {
          title: 'Crime Trend'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  

    <div id="chart_div" style="width: 450px; height: 300px;"></div>
    <div align='center' width='450px'>
<form>
<select name='cat' onchange="window.location.href='timeline.php?cat='+this.form.cat.options[this.form.cat.selectedIndex].value">
<option value='all'>All</option>
<?php
foreach($categories as $cat)
{
	echo '<option value="'.$cat.'">'.$cat.'</option>';
}
?>
</select>
</form></div>
<?php
}
timeline($months, $categories)
?>
<select>
<?php
foreach($categories as $category)
{
	//echo "<option>".$category."</option>";
}
?>
</select>
</div>
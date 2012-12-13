<!DOCTYPE html>
<head>
  <meta charset='utf-8'>
  
  <link type="text/css" href="styles/main.css" rel="stylesheet" />
  <link type="text/css" href="styles/jquery-ui/jquery-ui-1.8.16.custom.css" rel="stylesheet" />

  <!-- google maps -->
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

  <!-- jquery -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

  <!-- jquery UI -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

  <!-- our javascript -->
  <script type="text/javascript" src="js/gmaps.js"></script>
  
  <script type="text/javascript">

<!--
// create the XMLHttpRequest object, according browser
function get_XmlHttp() {
  // create the variable that will contain the instance of the XMLHttpRequest object (initially with null value)
  var xmlHttp = null;

  if(window.XMLHttpRequest) {		// for Forefox, IE7+, Opera, Safari, ...
    xmlHttp = new XMLHttpRequest();
  }
  else if(window.ActiveXObject) {	// for Internet Explorer 5 or 6
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  return xmlHttp;
}

// sends data to a php file, via POST, and displays the received answer
function ajaxrequest(php_file) {
  var gpscoordinates =document.getElementById('gpscoordinates').value;
	if(gpscoordinates=='')
	{
		alert('You haven\'t selected a location yet!');
	}
	else
	{
		var request =  get_XmlHttp();		// call the function for the XMLHttpRequest instance
  //document.getElementById("loading").style.display = 'block';
  //document.getElementById("gmaps-canvas").style.display = 'none';
  // create pairs index=value with data that must be sent to server
  var  the_data = 'gpscoordinates='+document.getElementById('gpscoordinates').value;

  request.open("POST", php_file, true);			// set the request

  // adds  a header to tell the PHP script to recognize the data as is sent via POST
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.send(the_data);		// calls the send() method with datas as parameter

  // Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      document.getElementById("newmap").innerHTML = request.responseText;
	  document.getElementById("gmaps-canvas").style.display = 'none';
	 
	 eval(document.getElementById("runscript").innerHTML);
	  
    }
  }
	}
	
	
  
}
--></script>
</head>

<body>
 
  <div id='container'>
    
    <div id='input'>
<input id='gmaps-input-address' placeholder='Start typing a place name...' type='text' style='width:50%'/>
     <span id='gmaps-output-latitude'></span>
      <span id='gmaps-output-longitude'></span>
            <div id='gmaps-error'></div>
	
	  <input name='location' id='gpscoordinates' type='hidden'>
	  <button value='locate' onclick="ajaxrequest('stations.php')">Locate stations</button>
    </div>
<br>
    <div id='gmaps-canvas'></div>
	  <div id='newmap'></div>
  </div>
</body>   
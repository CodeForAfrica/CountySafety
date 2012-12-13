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
</head>

<body>
    <hr/>

    <div id='input'>
      <input id='gmaps-input-address' placeholder='Start styping a place name...' type='text' />
      <br/>
      <br/>
      Latitude: <span id='gmaps-output-latitude'></span>
      <br/>
      Longitude: <span id='gmaps-output-longitude'></span>
      <br/>

      <div id='gmaps-error'></div>
    </div>

    <div id='gmaps-canvas'></div>
  </div>
</body>   

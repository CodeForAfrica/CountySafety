<form method='POST' action='stations.php'>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBkJAmtq5SDyK3nAWrmjoHiOLYWXUXw-Uk&sensor=false"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<div style="font-size:xx-small;">
<!-- begin gps data -->
                
        <script type="text/javascript">
        var PostCodeid2 = "#Postcode2";
        var longval2 = "#hidLong2";
        var latval2 = "#hidLat2";
        var geocoder2;
        var map2;
        var marker2;

        function initialize2() {
            //MAP
            var initialLat = $(latval2).val();
            var initialLong = $(longval2).val();
            if (initialLat == '') {
                initialLat = "-1.2920659";
                initialLong = "36.82194619999996";
            }
            var latlng = new google.maps.LatLng(initialLat, initialLong);
            var options = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
        
            map2 = new google.maps.Map(document.getElementById("geomap2"), options);
        
            geocoder2 = new google.maps.Geocoder();    
        
            marker2 = new google.maps.Marker({
                map: map2,
                draggable: true,
                position: latlng
            });
        
            google.maps.event.addListener(marker2, "dragend", function (event) {
                var point = marker2.getPosition();
                map2.panTo(point);
            });
            
        };
        
        $(document).ready(function () {
        
            initialize2();
        
            $(function () {
                $(PostCodeid2).autocomplete({
                    //This bit uses the geocoder to fetch address values
                    source: function (request, response) {
                        geocoder2.geocode({ 'address': request.term }, function (results, status) {
                            response($.map(results, function (item) {
                                return {
                                    label: item.formatted_address,
                                    value: item.formatted_address
                                };
                            }));
                        });
                    }
                });
            });
        
            $('#findbutton2').click(function (e) {
                var address = $(PostCodeid2).val();
                geocoder2.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        map2.setCenter(results[0].geometry.location);
                        marker2.setPosition(results[0].geometry.location);
                        $(latval2).val(marker2.getPosition().lat());
                        $(longval2).val(marker2.getPosition().lng());
						alert("Location found, proceed");
                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });
                e.preventDefault();
            });
        
            //Add listener to marker for reverse geocoding
            google.maps.event.addListener(marker2, 'drag', function () {
                geocoder2.geocode({ 'latLng': marker2.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            $(latval2).val(marker2.getPosition().lat());
                            $(longval2).val(marker2.getPosition().lng());
                        }
                    }
                });
            });
        
        });

    </script>
<style>
            .ui-autocomplete {
                background-color: white;
                width: 300px;
                border: 1px solid #cfcfcf;
                list-style-type: none;
                padding-left: 0px; font-family:Arial, Helvetica, sans-serif; cursor:pointer; font-size:12px;
            }
            .ui-menu-item {padding:3px 0;}
        </style>

        <p><input class="postcode" id="Postcode2" name="Postcode" type="text"> <input type="submit" id="findbutton2" value="Find" /></p>
        
        <div id="geomap2" style="width:400px; height:200px;">
            <p>Loading Please Wait...</p>
        </div>
        
        <input id="hidLat2" name="hidLat" type="hidden" value="-1.2920659">
        <input id="hidLong2" name="hidLong" type="hidden" value="36.82194619999996">     
	</div>	
	<br />
	<input type='submit' name='submit' value='find nearby stations'>
<!-- end gps data -->
</form>
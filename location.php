<!DOCTYPE html>
<html>
<head>
	  <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ8AWWumxuJ5Fpn1oD1oNzKEYsJH1Nyv4&callback=initMap"
  type="text/javascript"></script>
  <style >
  	#map{
  		width: 400px;
  		height: 400px;
  	}
  </style>
	<script type="text/javascript">
		x= navigator.geolocation;
		x.getCurrentPosion(success,failure);
		function success(position)
		{
			var myLat = position.coords.latitude;
			var myLong = position.coords.longitude;
			var coords = new google.maps.Latlang(myLat,myLong);
			var mapOptions={
				zoon:9,
				center:coords,
				mapTypeId:google.maps.mapTypeId.ROADMAP
			}
			var map =new google.maps.Map(document.getElementById("map"),mapOptions);
			var market = new google.maps.Market({map:map,position:coords});
		}
		function failure(){}
	</script>
</head>
<body>
   <div id="map"></div>
</body>
</html>
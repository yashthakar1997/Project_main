

var a = name;
b = a.split(",");
b[0] = "MoMo";


		
var map;
var i;
var geocoder;


function initialize() {
	 geocoder = new google.maps.Geocoder();
  
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

   map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

   		
   
	var i,j=0;
	
	for(i=0;i<latt.length;i++)
	{   
			
		  var infowindow = new google.maps.InfoWindow();
 		
	      var myLatlng = new google.maps.LatLng(latt[i],longi[i]);
	  
	  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title:b[i]
		});
	 
  google.maps.event.addListener(marker, 'click', function() {
	infowindow.setContent(this.title);
	infowindow.open(map,this);
    });
	
  
}  
// for geolocation

    if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Your location is'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
  
  
    //var contentString = name;
	}
	
function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}	
	
function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }
    
  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };
  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
  

  
}



function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
// endddddddddddddddd geo location
google.maps.event.addDomListener(window, 'load', initialize);
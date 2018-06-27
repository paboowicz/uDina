/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

				var map;
				function initialize() {
				  var mapOptions = {
				    zoom: 15,
				    center: new google.maps.LatLng(50.1511, 23.1176),
				    mapTypeId: google.maps.MapTypeId.ROADMAP
				  };
				  map = new google.maps.Map(document.getElementById('map-canvas'),
				      mapOptions);
				      
				   var companyLogo = new google.maps.MarkerImage('images/logo_big.png',
					    new google.maps.Size(100,50),
					    new google.maps.Point(0,0),
					    new google.maps.Point(50,50)
				    );
				
				   
				   
				   var companyPos = new google.maps.LatLng(50.1511, 23.1176);
				    var companyMarker = new google.maps.Marker({
					position: companyPos,
				//	icon: companyLogo,
				//      shadow: companyShadow,
					map: map,
					title:"U Dina"
				    });
				  
				}

				google.maps.event.addDomListener(window, 'load', initialize);

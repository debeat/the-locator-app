var Locator = {
	
	init: function() {
		$('#enable-message').hide();
		// On load initiate geolocation
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(Locator.successCallback,Locator.errorCallback);
		}
		
		// Add event handler to locate button
		if ($('.locate-button').length >= 1) {
			
			$('.locate-button').bind('click', function(){
				
				event.preventDefault();
				
				navigator.geolocation.getCurrentPosition(Locator.successCallback,Locator.errorCallback);
			});
			
		}
	},
	
	successCallback: function(position) {
		var latitude = position.coords.latitude;
		
		var longitude = position.coords.longitude;
		
		$('#map').append('<article>latitude: ' + latitude + '\nlongitude: ' + longitude + '</article>');
	
	},
	
	errorCallback: function(error) {
		// Discovery: If Location Services are Off in Settings, then an error will occur
		error = error.toString(); 
		alert('There was an error!\nPossibly Location Services are Off in Settings\nMore info: ' + error);	
	}
};

Locator.init();
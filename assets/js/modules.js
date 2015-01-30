$(document).ready(function(){
	
        function b({

            var apiKey = 'ff9c797c09b59a071a1459c8d8c533f6';
            var url = 'https://api.forecast.io/forecast/';
            var lati = 45.9160;
            var longi = 6.1330;
            var data;
            $.getJSON(url + apiKey + "/" + lati + "," + longi + "?callback=?", function(data) {
              //console.log(data);
              $('#weather').html(data.currently.temperature + ' °F');
		$('#weather2').html(data.currently.windSpeed + ' knots');
            });
        }
window.onload= b;
});

         $("#datepicker div").datepicker({
            format: "dd/mm/yyyy",
            todayBtn: true,
            clearBtn: true
            });
 

 
});



$(function(){

	$.ajax({
		url: '/php/get_events.php',
		type: 'GET',
		success: function(response) {

			if (typeof response.errors === 'undefined' || response.errors.length < 1) {
				var dayMap = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
				var $events = $('<ul class="noList"></ul>');
				var decodedResponse = JSON.parse(response);
				console.log(decodedResponse);
				$.each(decodedResponse, function(i, ev) {
					var date = new Date(ev.day.date); 
					var day = dayMap[date.getDay()];
					var event = '<li><a class=\'eventItem\' data-notes=\'links to the meetup page\' href=\'#\' title=\'' + ev.title + '\'><span class=\'dateWrapper\'><span class=\'month\'>' + 
						ev.month + '</span><span class=\'date\'>' + date.getDate()+ '</span></span><span class=\'eventWrapper\'><h4 class=\'eventTitle\'><span>' + 
						ev.title + '</span></h4><span class=\'eventMeta\'>'+ day +' <span>at &nbsp;&nbsp;</span>' + date.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'}) + '</span></span></a></li>'
					$events.append(event)
				});

				$('#js-events').html($events);

			} else {
				$('#js-events p:first').text('Response error');
			}
		},
		error: function(errors) {
			$('#js-events p:first').text('Request error ' + errors.text);
		}
	});
});
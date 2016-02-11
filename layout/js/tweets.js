$(function(){

	$.ajax({
		url: '/php/get_tweets.php',
		type: 'GET',
		success: function(response) {

			if (typeof response.errors === 'undefined' || response.errors.length < 1) {
				
				var $tweets = $('<ul class="noList"></ul>');
				$.each(response, function(i, obj) {
					if (obj.text.indexOf("bmorewitjobs") > -1) {
						$tweets.append('<li><a href=\'#\'>' + obj.text + '</a>&mdash;');
						var date = obj.created_at.match(/\w+ \w+ \d+/);
						$tweets.append('<span>posted on ' + date +'</span></li>');
					}
				});

				$('.jobTweets').html($tweets);

			} else {
				$('.jobTweets p:first').text('Response error');
			}
		},
		error: function(errors) {
			$('.jobTweets p:first').text('Request error ' + errors.text);
		}
	});
});
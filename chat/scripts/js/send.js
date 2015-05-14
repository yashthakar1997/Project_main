$('#form_input').submit(function() {
	var message = $('#message').val();
	var sender 	= $('#sender').val();
	
	$.ajax({
		url: 'scripts/php/Send.php',
		data: { sender: sender, message: message }, 
		success: function(data) {
			$('#feedback').html(data);
			
				$('#feedback').fadeIn('slow', function() {
					$('#feedback').fadeOut(6000);
				});
				
			$('#message').val('');
			
		}
	});
	
	return false;
});
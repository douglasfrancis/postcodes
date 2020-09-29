

	$('#btn').click(function() {
		if($('#postcode').val() == '') {
			alert('Please type in your postcode')
		} else {
		
		$.ajax({
			url: "php/getPostcodes.php",
			type: 'POST',
			dataType: 'json',
			data: {
				postcode: $('#postcode').val().replace(/ /g,'')
			},
			success: function(result) {
				console.log(result);
				
					if (result.data.length > 0 && result.data != null) {

						$('#pst').html(result.data[0].postalCode);
						$('#long').html(result.data[0].lng);
						$('#lat').html(result.data[0].lat);
						$('#country').html(result.data[0].adminName1);
						$('#region').html(result.data[0].adminName3);

				
				} else {
					alert('Please use a valid Postcode');
				}
				
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(jqXHR, textStatus, errorThrown);
			}
		
		}); 
		
	}
	window.location = '#bottom';
	});



	

	
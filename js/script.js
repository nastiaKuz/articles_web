$(function() {
		var $request=[];

	var $inputs=$('.guitar');
	$inputs.each(function() {
		$request.push($(this));
	})

	$('.submit').on('click', function(e) {
		//e.preventDefault();

		$.ajax({
			url: 'data.php',
			dataType: 'json',
			method: 'post',
			success: function(data) {
				console.log(data);
			}

		});
	});




});


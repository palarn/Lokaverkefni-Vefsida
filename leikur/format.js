$(document).ready(function() {
	$('#text').click(function() 
	{
		$('#moreText').toggle(function() 
		{
			var home = '<div class="drop">';	
			home += '<p>Space = Skjóta!</p>';		
			home += '<p>W = Fram!</p>';
	        home += '<p>S = Aftur!</p>';
	        home += '<p>A = Vinstri! </p>';
	        home += '<p>D = Hægri! (etc)</p>';
	        home += '<p>H = Stop!</p>';
	        home += '<p>1 = Kalla á skip þar sem mús bendir!</p>';
	        home += '<p>K = Eyða nálægasta skipi!</p>';
	        home += '<p>0 = Kalla á steina!</p>';
	        home += '<p>R = Endurstilla</p>';
	        home += '<p>P = Pása</p>';	        
			home += '</div>';
											
			$('#moreText').html(home);
	});
	});
});
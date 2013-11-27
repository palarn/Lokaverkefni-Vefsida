$(document).ready(function() {
	$('#text').click(function() 
	{
		$('#moreText').toggle(function() 
		{
			var home = '<div class="drop">';

			home += '<p>Mark Zuckerberg, stofnandi facebook, um forritunar kennslu</p>';		
			home += '<p><iframe width="560" height="315" src="//www.youtube.com/embed/dmM_xDzy2nU" frameborder="0" allowfullscreen></iframe></p>';		
			     
			home += '</div>';
											
			$('#moreText').html(home);
	});
	});

	$('#java').click(function() 
	{
		$('#moreJava').toggle(function() 
		{
			var home = '<div class="drop">';

			home += '<p>Kennslumyndbönd frá "thenewboston" sem er snillingur, hér er java kennslumyndbönd</p>';		
			home += '<p><iframe width="560" height="315" src="//www.youtube.com/embed/Hl-zzrqQoSE?list=PL17E300C92CE0261A" frameborder="0" allowfullscreen></iframe></p>';		
			     
			home += '</div>';
											
			$('#moreJava').html(home);
	});
	});
});
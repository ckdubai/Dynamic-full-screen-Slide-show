	<!DOCTYPE html>
	<html>
	<head> 
		<title>Slide Show for Shibin</title>
		<meta name="language" content="en" />
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" href="css/style.css">
		<script src="script/jquery.min.js" > </script>
	</head> 

	<body> 
		<div id="container">
		</div>


		<script type="text/javascript" charset="utf-8">
			
			jQuery('document').ready(function() {

				jQuery.ajax({            
					url: "get_imgs.php", 
					type: "POST",          
					dataType: "HTML", 
					success: function( data ) { 
						jQuery('#container').html(data);
						slide();
					},
					error: function(jqXHR, data ) {        
						alert ('Ajax request Failed.');    
					}
				}); 

				function slide() {
					$("#container > div:gt(0)").hide();

					setInterval(function() { 
						$('#container > div:first')
						.fadeOut(1000)
						.next()
						.fadeIn(1000)
						.end()
						.appendTo('#container');
					},  5000);

				}


			});
			







		</script>


	</div>
</body>

</html>
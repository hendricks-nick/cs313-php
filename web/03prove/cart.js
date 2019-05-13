 $('.button').click(function(elem) {
	var $item = elem.id;

	console.log($item);

	 $.ajax({
	  type: "POST",
	  url: "addcart.php",
	  data: { item: $item }
	}).done(function( msg ) {
	  alert( "Data Saved: " + msg );
	});    

 });
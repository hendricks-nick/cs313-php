 $('.button').click(function(this) {
	var $item = this.id;

	console.log($item);

	 $.ajax({
	  type: "POST",
	  url: "addcart.php",
	  data: { item: $item }
	}).done(function( msg ) {
	  alert( "Data Saved: " + msg );
	});    

 });
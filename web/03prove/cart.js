 function addToCart(elem) {
	var $item = elem.id;

	console.log($item);

	 $.ajax({
	  type: "POST",
	  url: "addcart.php",
	  data: { item: $item }
	}).done(function( msg ) {
	  alert("Added to cart");
	});    

 }
 
 function removeCart(elem) {
	var $item = elem.id;

	console.log($item);

	 $.ajax({
	  type: "POST",
	  url: "removecart.php",
	  data: { item: $item }
	}).done(function( msg ) {
	  location.reload();
	});    

 }
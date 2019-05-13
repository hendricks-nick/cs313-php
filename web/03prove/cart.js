 // ajax call to add item to cart
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
 
 // ajax call to remove items from cart.
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
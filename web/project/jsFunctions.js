// ajax call to add item to cart
 function addContact(elem) {
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
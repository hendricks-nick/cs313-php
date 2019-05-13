function addToCart(element) {
 
    console.log("Response: " + element.id);
	
	/*$.ajax({
    type: "POST",
    url: "addcart.php",
    data: {item: $element.id},
        success: function(msg){
           alert( "Data Saved: " + msg );
               
        }
    });
    */
	var $item = $(element);
	var serializedData = $item.serialize();
	console.log("Response: "+serializedData);
	
	$.post('addcart.php', serializedData, function(response) {
    // Log the response to the console
    console.log("Response: "+response);
});
  }
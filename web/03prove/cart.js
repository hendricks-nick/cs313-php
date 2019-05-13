function addToCart(element) {
 
    console.log("Response: " + element.id);
	
	$.ajax({
    type: "POST",
    url: "addcart.php",
    data: {item: $element.id},
        success: function(msg){
           alert( "Data Saved: " + msg );
               
        }
    });
    
  }
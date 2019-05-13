function addToCart(element) {
    var item = element.id;
    console.log("Response: " + item);
	$.ajax({
    type: "POST",
    url: "addcart.php",
    data: item,
        success: function(msg){
           alert( "Data Saved: " + msg );
               
        }
    });
    
  }
function addToCart(element) {
    var item = element.value;
    $.post('/addcart.php', item, function(response) {
        // Log the response to the console
        console.log("Response: "+response);
    });
  }
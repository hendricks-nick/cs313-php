function addToCart(item) {
    $.post('/addcart.php', item, function(response) {
        // Log the response to the console
        console.log("Response: "+response);
    });
  }
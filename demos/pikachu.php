<html>
<head>

<?php
    include "menu.css";
?>

</head>
<body>


<h1>Sakila<img src="pika.jpg" width = "90" height = "75" style="vertical-align:bottom"> </h1><br>

<ul>
  <li class = "dropdown">
    <div class = "dropa"> 
    <a href="javascript:void(0)" class="drop">View Tables</a>
    <div class="drop_table">
      <a href="actor.php">Actor</a>
      <a href="address.php">Address</a>
      <a href="category.php">Category</a>
  	  <a href="city.php">City</a>
  	  <a href="country.php">Country</a>
  	  <a href="customer.php">Customer</a>
  	  <a href="film.php">Film</a>
  	  <a href="film_actor.php">Film_actor</a>
  	  <a href="film_category.php">Film_category</a>
  	  <a href="film_text.php">Film_text</a>
  	  <a href="inventory.php">Inventory</a>
  	  <a href="language.php">Language</a>
  	  <a href="payment.php">Payment</a>
  	  <a href="rental.php">Rental</a>
  	  <a href="staff.php">Staff</a>
  	  <a href="store.php">Store</a>
    </div>
    </div>
  </li>
</ul>
        
        <img id="image" src="poke1.jpg" width = "100%">

        <script type = "text/javascript">
            var image = document.getElementById("image");
            var currentPos = 0;
            var images = ["poke1.jpg", "poke2.jpg", "poke3.jpg"]

            function volgendefoto() {
                if (++currentPos >= images.length)
                    currentPos = 0;

                image.src = images[currentPos];
            }

            setInterval(volgendefoto, 3500);
        </script>
</body>
</html>
    	
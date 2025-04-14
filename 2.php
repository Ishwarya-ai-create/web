<!DOCTYPE html>
<html lang="en">
<head>
<title>FoodExpress - Menu</title>
<style>
body {
  font-family: 'Segoe UI', sans-serif;
  background-image: url('restaurant.jpg');
  margin: 0;
  padding: 0;
  color: #333;
}

/* Navbar */
nav {
  background-color: #333;
  padding: 15px;
  text-align: center;
}

nav a {
  color: white;
  text-decoration: none;
  margin: 0 15px;
  font-size: 18px;
  text-transform: uppercase;
}

nav a:hover {
  color: #ff4d4d;
}

/* Header */
header {
  text-align: center;
  padding: 40px 20px 10px;
  background-color: #ff4d4d;
  color: white;
}

/* Menu Items */
.menu-items {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 30px 20px;
}

.menu-item {
  background: white;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  overflow: hidden;
  width: 280px;
  text-align: center;
  transition: transform 0.2s ease;
}

.menu-item:hover {
  transform: translateY(-5px);
}

.menu-item img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.menu-item h3 {
  margin: 15px 0 10px;
}

.menu-item p {
  color: #777;
  margin: 0 0 10px;
}

.menu-item a {
  display: inline-block;
  padding: 10px 15px;
  background-color: #ff4d4d;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  margin-bottom: 20px;
}

.menu-item a:hover {
  background-color: #e64545;
}

/* Footer */
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 20px;
  position: fixed;
  width: 100%;
  bottom: 0;
}
</style>
</head>
<body>
  <!-- Navbar -->
  <nav>
    <a href="index.html">Home</a>
    <a href="#">About Us</a>
    <a href="#">Contact</a>
    <a href="#">Order Now</a>
  </nav>

  <!-- Header -->
  <header>
    <h1>Menu - Spice Hub</h1>
    <p>Choose your favorite dishes from the menu below</p>
  </header>

  <!-- Menu Section for Spice Hub -->
  <div class="menu-items">
    <div class="menu-item">
      <img src="spicehub1.jpg" alt="Spicy Chicken Wings">
      <h3>Spicy Chicken Wings</h3>
      <p>A perfect blend of heat and flavor with crispy chicken wings.</p>
      <p>Price: $9.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="spicehub2.jpg" alt="Paneer Tikka">
      <h3>Paneer Tikka</h3>
      <p>Grilled paneer cubes with a tangy marinade.</p>
      <p>Price: $8.49</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="spicehub3.jpg" alt="Veg Biryani">
      <h3>Veg Biryani</h3>
      <p>Fragrant rice mixed with seasonal vegetables and spices.</p>
      <p>Price: $11.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="spicehub4.jpg" alt="Chicken Tandoori">
      <h3>Chicken Tandoori</h3>
      <p>Smoked chicken marinated in yogurt and traditional spices.</p>
      <p>Price: $12.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="spicehub5.jpg" alt="Butter Naan">
      <h3>Butter Naan</h3>
      <p>Soft and fluffy naan with a buttery finish.</p>
      <p>Price: $3.49</p>
      <a href="#">Add to Cart</a>
    </div>
  </div>

  <!-- Additional Restaurants Section -->

  <h1>Other Restaurants</h1>
  <div class="menu-items">
    <!-- Burger Queen -->
    <div class="menu-item">
      <img src="burgerqueen1.jpg" alt="Cheese Burger">
      <h3>Cheese Burger</h3>
      <p>A classic cheeseburger with juicy beef patty and melted cheese.</p>
      <p>Price: $7.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="burgerqueen2.jpg" alt="French Fries">
      <h3>French Fries</h3>
      <p>Crispy golden fries, perfect as a side dish.</p>
      <p>Price: $3.49</p>
      <a href="#">Add to Cart</a>
    </div>

    <!-- Pizza Planet -->
    <div class="menu-item">
      <img src="pizzaplanet1.jpg" alt="Pepperoni Pizza">
      <h3>Pepperoni Pizza</h3>
      <p>A delicious pizza topped with spicy pepperoni and cheese.</p>
      <p>Price: $11.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="pizzaplanet2.jpg" alt="Margarita Pizza">
      <h3>Margarita Pizza</h3>
      <p>A fresh tomato and basil pizza topped with mozzarella.</p>
      <p>Price: $10.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <!-- Pasta Fiesta -->
    <div class="menu-item">
      <img src="pastafiesta1.jpg" alt="Spaghetti Bolognese">
      <h3>Spaghetti Bolognese</h3>
      <p>A classic pasta dish with rich tomato meat sauce.</p>
      <p>Price: $13.49</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="pastafiesta2.jpg" alt="Penne Alfredo">
      <h3>Penne Alfredo</h3>
      <p>Pasta in a creamy garlic sauce with chicken and vegetables.</p>
      <p>Price: $12.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <!-- Grill House -->
    <div class="menu-item">
      <img src="grillhouse1.jpg" alt="BBQ Ribs">
      <h3>BBQ Ribs</h3>
      <p>Juicy and tender ribs with BBQ sauce.</p>
      <p>Price: $16.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="grillhouse2.jpg" alt="Grilled Veggies">
      <h3>Grilled Veggies</h3>
      <p>A delicious mix of grilled vegetables with smoky flavor.</p>
      <p>Price: $8.49</p>
      <a href="#">Add to Cart</a>
    </div>

    <!-- Sushi Central -->
    <div class="menu-item">
      <img src="sushicentral1.jpg" alt="California Roll">
      <h3>California Roll</h3>
      <p>A popular sushi roll with crab, avocado, and cucumber.</p>
      <p>Price: $10.99</p>
      <a href="#">Add to Cart</a>
    </div>

    <div class="menu-item">
      <img src="sushicentral2.jpg" alt="Spicy Tuna Roll">
      <h3>Spicy Tuna Roll</h3>
      <p>Sushi rolls with spicy tuna and a kick of wasabi.</p>
      <p>Price: $11.49</p>
      <a href="#">Add to Cart</a>
    </div>
  </div>
</body>
</html>

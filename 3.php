<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant - Spice Hub</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Spice Hub</h1>
    <p>Delicious Indian Cuisine</p>
  </header>
  <div class="menu-container">
    <div class="menu-items">
      <div class="menu-item">
        <img src="spicehub1.jpg" alt="Chicken Curry">
        <h3>Chicken Curry</h3>
        <p>$12.99</p>
        <a href="product.php?id=1">View Details</a>
      </div>
      <div class="menu-item">
        <img src="spicehub2.jpg" alt="Paneer Tikka">
        <h3>Paneer Tikka</h3>
        <p>$10.49</p>
        <a href="product.php?id=2">View Details</a>
      </div>
      <div class="menu-item">
        <img src="spicehub3.jpg" alt="Veg Biryani">
        <h3>Veg Biryani</h3>
        <p>$9.99</p>
        <a href="product.php?id=3">View Details</a>
      </div>
      <div class="menu-item">
        <img src="spicehub4.jpg" alt="Butter Naan">
        <h3>Butter Naan</h3>
        <p>$3.99</p>
        <a href="product.php?id=4">View Details</a>
      </div>
      <div class="menu-item">
        <img src="spicehub5.jpg" alt="Mango Lassi">
        <h3>Mango Lassi</h3>
        <p>$4.99</p>
        <a href="product.php?id=5">View Details</a>
      </div>
    </div>
  </div>
</body>
</html>
<style>
body {
  font-family: 'Segoe UI', sans-serif;
  background-image: url('restaurant.jpg');
  margin: 0;
  padding: 0;
  color: #333;
}
header {
  background: #ff4d4d;
  color: white;
  padding: 30px;
  text-align: center;
}
.menu-container {
  display: flex;
  justify-content: center;
  padding: 20px;
}
.menu-items {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  max-width: 1200px;
  background: #fff;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
.menu-item {
  background: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  width: 280px;
  text-align: center;
}
.menu-item img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
}
.menu-item a {
  display: inline-block;
  margin-top: 10px;
  padding: 10px 15px;
  background-color: #ff4d4d;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}
.menu-item a:hover {
  background-color: #e64545;
}
</style>
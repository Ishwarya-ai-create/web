<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cart - FoodExpress</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-image: url('restaurant.jpg');
      margin: 0;
      padding: 0;
      color: #333;
    }
    .cart-container {
      max-width: 1200px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .cart-header {
      text-align: center;
      padding: 20px;
      background-color: #ff4d4d;
      color: white;
      border-radius: 10px;
    }
    .cart-items {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
    }
    .cart-item img {
      width: 100px;
      height: auto;
      border-radius: 5px;
    }
    .cart-item-details {
      flex: 1;
      margin-left: 20px;
    }
    .cart-item-details h3 {
      margin: 0;
      font-size: 20px;
    }
    .cart-item-details p {
      margin: 5px 0;
      font-size: 16px;
    }
    .cart-item-details input {
      width: 50px;
      padding: 5px;
      text-align: center;
      margin-right: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .cart-item-price {
      font-size: 18px;
      font-weight: bold;
    }
    .cart-buttons {
      text-align: center;
      margin-top: 30px;
    }
    .cart-buttons button {
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      background-color: #ff4d4d;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }
    .cart-buttons button:hover {
      background-color: #e64545;
    }
  </style>
</head>
<body>
  <div class="cart-container">
    <div class="cart-header">
      <h1>Your Cart</h1>
      <p>Review your items before proceeding to checkout</p>
    </div>

    <div class="cart-items">
      <!-- Veg Biryani -->
      <div class="cart-item">
        <img src="spicehub1.jpg" alt="Veg Biryani">
        <div class="cart-item-details">
          <h3>Veg Biryani</h3>
          <p><strong>Price:</strong> $12.99</p>
          <p><strong>Quantity:</strong> <input type="number" value="1" min="1"></p>
        </div>
        <div class="cart-item-price">$12.99</div>
      </div>

      <!-- Paneer Tikka -->
      <div class="cart-item">
        <img src="spicehub2.jpg" alt="Paneer Tikka">
        <div class="cart-item-details">
          <h3>Paneer Tikka</h3>
          <p><strong>Price:</strong> $10.49</p>
          <p><strong>Quantity:</strong> <input type="number" value="1" min="1"></p>
        </div>
        <div class="cart-item-price">$10.49</div>
      </div>

      <!-- Chicken Curry -->
      <div class="cart-item">
        <img src="spicehub3.jpg" alt="Chicken Curry">
        <div class="cart-item-details">
          <h3>Chicken Curry</h3>
          <p><strong>Price:</strong> $12.99</p>
          <p><strong>Quantity:</strong> <input type="number" value="1" min="1"></p>
        </div>
        <div class="cart-item-price">$12.99</div>
      </div>
    </div>

    <div class="cart-buttons">
      <button onclick="location.href='checkout.php'">Proceed to Checkout</button>
      <button onclick="location.href='index.php'">Continue Shopping</button>
    </div>
  </div>
</body>
</html>

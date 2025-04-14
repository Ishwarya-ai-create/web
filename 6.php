<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Spice Hub - Veg Biryani</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
      color: #333;
    }
    .header {
      text-align: center;
      padding: 20px;
      background-color: #ff4d4d;
      color: white;
    }
    .product-container {
      max-width: 1100px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      display: flex;
      gap: 40px;
      align-items: flex-start;
    }
    .product-container img {
      width: 450px;
      height: auto;
      border-radius: 10px;
    }
    .product-details {
      flex: 1;
    }
    .product-details h2 {
      margin-top: 0;
      font-size: 28px;
      color: #333;
    }
    .product-details p {
      margin: 12px 0;
      line-height: 1.6;
    }
    .product-details ul {
      padding-left: 20px;
      margin: 10px 0;
    }
    .product-details ul li {
      line-height: 1.6;
    }
    .product-buttons {
      margin-top: 25px;
    }
    .product-buttons button {
      padding: 12px 25px;
      margin-right: 15px;
      border: none;
      border-radius: 5px;
      background-color: #ff4d4d;
      color: white;
      cursor: pointer;
      font-size: 16px;
    }
    .product-buttons button:hover {
      background-color: #e64545;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Spice Hub</h1>
    <p>Authentic Indian Flavors Delivered To You</p>
  </div>

  <div class="product-container">
    <img src="spicehub3.jpg" alt="Veg Biryani">
    <div class="product-details">
      <h2>Veg Biryani</h2>
      <p><strong>Price:</strong> $9.99</p>
      <p><strong>Description:</strong> Aromatic basmati rice cooked with fresh vegetables, Indian spices, and saffron. Served with raita and salad.</p>
      <p><strong>Ingredients:</strong></p>
      <ul>
        <li>Basmati Rice</li>
        <li>Carrots, Beans, Green Peas, Potatoes</li>
        <li>Yogurt, Ginger-Garlic Paste</li>
        <li>Spices: Garam Masala, Biryani Masala, Saffron</li>
        <li>Fried Onions, Mint, Coriander</li>
      </ul>
      <p><strong>Preparation Style:</strong> Dum cooked in traditional handi</p>
      <p><strong>Spice Level:</strong> Medium</p>
      <p><strong>Allergens:</strong> Contains dairy, prepared in a shared kitchen</p>
      <p><strong>Delivery Time:</strong> 30-40 minutes (depending on your location)</p>

      <div class="product-buttons">
        <form method="post" action="cart.php">
          <input type="hidden" name="product_id" value="3">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
        <form method="post" action="checkout.php">
          <input type="hidden" name="product_id" value="3">
          <button type="submit" name="buy_now">Buy Now</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Spice Hub - Chicken Curry</title>
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
    <img src="spicehub1.jpg" alt="Chicken Curry">
    <div class="product-details">
      <h2>Chicken Curry</h2>
      <p><strong>Price:</strong> $12.99</p>
      <p><strong>Description:</strong> A rich and flavorful Indian-style Chicken Curry made with a perfect blend of traditional spices, fresh herbs, and slow-cooked chicken to perfection. Served hot with your choice of rice or naan.</p>
      <p><strong>Ingredients:</strong></p>
      <ul>
        <li>Chicken (bone-in or boneless)</li>
        <li>Onions, Tomatoes, Garlic, Ginger</li>
        <li>Spices: Turmeric, Chili Powder, Garam Masala, Coriander, Cumin</li>
        <li>Fresh Cilantro</li>
        <li>Vegetable Oil or Ghee</li>
        <li>Salt and Water</li>
      </ul>
      <p><strong>Preparation Style:</strong> Traditional Indian slow-cooked style</p>
      <p><strong>Spice Level:</strong> Medium (customizable)</p>
      <p><strong>Allergens:</strong> May contain dairy, cooked in a shared kitchen</p>
      <p><strong>Delivery Time:</strong> 30-45 minutes (depending on your location)</p>

      <div class="product-buttons">
        <form method="post" action="cart.php">
          <input type="hidden" name="product_id" value="1">
          <button type="submit" name="add_to_cart">Add to Cart</button>
        </form>
        <form method="post" action="checkout.php">
          <input type="hidden" name="product_id" value="1">
          <button type="submit" name="buy_now">Buy Now</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
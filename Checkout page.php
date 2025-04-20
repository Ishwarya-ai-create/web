<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - FoodExpress</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-image: url('restaurant.jpg');
      margin: 0;
      padding: 0;
      color: #333;
    }
    .checkout-container {
      max-width: 1200px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    .checkout-header {
      text-align: center;
      padding: 20px;
      background-color: #ff4d4d;
      color: white;
      border-radius: 10px;
    }
    .checkout-form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .checkout-form label {
      font-size: 18px;
    }
    .checkout-form input, .checkout-form select {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .checkout-form .payment-options {
      display: flex;
      gap: 20px;
      margin-top: 15px;
    }
    .checkout-form .payment-options input {
      margin-right: 10px;
    }
    .checkout-total {
      margin-top: 30px;
      display: flex;
      justify-content: space-between;
      font-size: 20px;
      font-weight: bold;
    }
    .checkout-buttons {
      text-align: center;
      margin-top: 30px;
    }
    .checkout-buttons button {
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      background-color: #ff4d4d;
      color: white;
      font-size: 18px;
      cursor: pointer;
    }
    .checkout-buttons button:hover {
      background-color: #e64545;
    }
  </style>
</head>
<body>
  <div class="checkout-container">
    <div class="checkout-header">
      <h1>Checkout</h1>
      <p>Complete your purchase by choosing your payment method</p>
    </div>

    <form class="checkout-form" method="post" action="process_checkout.php">
      <!-- Payment Method -->
      <label for="payment-method">Select Payment Method</label>
      <select id="payment-method" name="payment_method" required>
        <option value="credit_card">Credit Card</option>
        <option value="paypal">PayPal</option>
        <option value="cash_on_delivery">Cash on Delivery</option>
      </select>

      <div class="payment-options">
        <div>
          <input type="radio" id="credit_card" name="payment_mode" value="Credit Card" checked>
          <label for="credit_card">Credit Card</label>
        </div>
        <div>
          <input type="radio" id="paypal" name="payment_mode" value="PayPal">
          <label for="paypal">PayPal</label>
        </div>
        <div>
          <input type="radio" id="cash_on_delivery" name="payment_mode" value="Cash on Delivery">
          <label for="cash_on_delivery">Cash on Delivery</label>
        </div>
      </div>

      <div class="checkout-total">
        <span>Total Amount:</span>
        <span>$36.47</span> <!-- Total amount calculated from items in cart -->
      </div>

      <div class="checkout-buttons">
        <button type="submit" name="place_order">Place Order</button>
      </div>
    </form>
  </div>
</body>
</html>

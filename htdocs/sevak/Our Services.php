<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS styling for the form */
    .form-container {
      width: 400px;
      margin: 0 auto;
    }

    .form-container input[type="text"],
    .form-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Services Form</h2>
    <form action="submit.php" method="post">
      <label for="price_list">Price List:</label>
      <input type="text" name="price_list" id="price_list" required>

      <label for="area">Area:</label>
      <input type="text" name="area" id="area" required>

      <label for="time">Time:</label>
      <input type="text" name="time" id="time" required>

      <label for="milk">Milk (Cow/Buffalo):</label>
      <select name="milk" id="milk" required>
        <option value="cow">Cow</option>
        <option value="buffalo">Buffalo</option>
      </select>

      <label for="amount">Amount (Fixed/Monthly):</label>
      <select name="amount" id="amount" required>
        <option value="fixed">Fixed</option>
        <option value="monthly">Monthly</option>
      </select>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>

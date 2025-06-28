<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Add Customer</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="form-container">
    <h2>Add Customer</h2>
    <form action="insert-customer.php" method="POST">
      <label>Full Name or Company Name *</label>
      <input type="text" name="name" required />

      <label>Phone Number *</label>
      <input type="tel" name="phone" required pattern="[0-9]{10}" placeholder="0771234567" />

      <label>Address (Optional)</label>
      <input type="text" name="address" />

      <input type="hidden" name="reg_number" id="reg_number" />

      <button type="submit">Save & Add Vehicle</button>
    </form>
  </div>

  <script>
    // Ideally: fetch latest number from database via AJAX, but demo below uses initials
    const companyName = sessionStorage.getItem('company') || 'Lions';
    const prefix = 'LVM' + companyName.trim().charAt(0).toUpperCase();
    const uniqueNumber = Math.floor(Math.random() * 9999 + 1).toString().padStart(4, '0');
    document.getElementById("reg_number").value = prefix + uniqueNumber;
  </script>
</body>
</html>
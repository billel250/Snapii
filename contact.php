<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f9;
      padding: 0;
      margin: 0;
    }

    /* ===== Navbar ===== */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #004ff9, #000000);
      padding: 25px;
      position: relative;
      color: white;
    }

    .navbar h2 {
      margin: 0;
      font-size: 20px;
    }

    .navbar a {
      position: absolute;
      left: 15px;
      color: white;
      text-decoration: none;
      font-size: 20px;
      color:#ffffff;
      padding: 6px 12px;
      font-weight: bold;

    }
    /* ===== Container ===== */
    .container {
      max-width: 500px;
      margin: 40px auto;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #007BFF;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="index.php">Snapii</a>
    <h2>Contact Us</h2>
  </div>

  <!-- Form -->
  <div class="container">
    <form action="#" method="post">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

  <div style="text-align: center;">
  <p>Email:</p>
  <p style="color: #0056b3;">bibikinzo47@gmail.com</p>
</div>


  <?php include 'footer.php'; ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
      color: #333;
    }
    header {
      background: linear-gradient(135deg, #004ff9, #000000);
      color: #fff;
      padding: 6px;
      text-align: center;
      position: relative;
    }
    header a.logo {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      text-decoration: none;
      font-size: 20px;
      font-weight: bold;
      color: #fff;
    }
    main {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background: linear-gradient(135deg,rgb(5, 131, 248),rgb(81, 83, 255));
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      color:rgb(255, 255, 255);
    }
    p {
      line-height: 1.6;
      margin-bottom: 15px;
      color:#ffffff;
    }
  </style>
</head>
<body>
  <header>
    <a href="index.php" class="logo">Snapii</a>
    <h2>About Us</h2>
  </header>
  <main>
    <h1>Who We Are</h1>
    <p>
      Welcome to our TikTok Video Downloader — a free tool that allows you to download TikTok videos without watermark quickly and easily.
    </p>
    <p>
      Our mission is to provide a simple, fast, and secure way to save your favorite TikTok videos in high quality (MP4 or MP3).
    </p>
    <p>
      This website is not affiliated with TikTok. All trademarks belong to their respective owners. 
      Users are responsible for respecting copyright and using the downloaded content appropriately.
    </p>
    <p>
      If you have any questions or suggestions, feel free to <a href="contact.php">contact us</a>.
    </p>
  </main>
  <?php include 'footer.php'; ?>
</body>
</html>

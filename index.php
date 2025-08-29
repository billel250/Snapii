<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Download Video Without Watermark</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #ffffff;
      margin: 0;
      padding: 0;
      color: #000;
    }

    header {
      background: linear-gradient(135deg, #004ff9, #000000);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .logo {
      font-weight: bold;
      font-size: 20px;
      color: #ffffff;
      text-decoration: none;
    }
   
    .nav-links {
      display: flex;
      gap: 25px;
    }

    .nav-links a {
      text-decoration: none;
      color: #fff;
      font-size: 14px;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #D3BFFF;
    }

    .container {
      background: linear-gradient(135deg, #004ff9, #000000);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      padding: 80px 30px;
      border-radius: 0px;
      text-align: center;
      max-width: 1210px;
      margin: 30px auto;
    }

    input[type="text"],
    button {
      width: 60%;
      padding: 12px;
      font-size: 14px;
      border-radius: 8px;
      margin: 15px 0;
    }

    input[type="text"] {
      border: 1px solid #555;
      background-color: #f9f9f9;
      color: #000;
    }

    button {
      background-color: #3666ad;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #ffffff;
      color: #000;
    }

    .info-row {
      display: flex;
      justify-content: center;
      gap: 50px;
      margin: 40px 20px;
      flex-wrap: wrap;
      text-align: center;
    }

    .info-item {
      max-width: 300px;
    }

    .info-item h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .info-item p {
      font-size: 15px;
      line-height: 1.6;
    }

    .steps-container {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .step {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 30px;
    }

    .step img {
      width: 150px;
      border-radius: 10px;
    }

    .step-number {
      position: absolute;
      top: 8px;
      left: 8px;
      background-color: #000;
      color: #fff;
      font-weight: bold;
      padding: 4px 10px;
      border-radius: 50%;
      font-size: 16px;
    }

    .step-text {
      max-width: 600px;
      font-size: 16px;
      line-height: 1.6;
      color: #000;
    }

    .step strong {
      font-size: 17px;
      display: block;
      margin-bottom: 4px;
      color: #111;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-links {
        justify-content: center;
        margin-top: 10px;
      }

      .container {
        padding: 40px 20px;
      }

      .info-row {
        flex-direction: column;
        gap: 25px;
      }

      .step {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .step-text {
        margin-top: 10px;
      }
    }
    .tiktok-features {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
  }

  .tiktok-features .feature-item {
    flex: 1 1 300px; 
    max-width: 320px;
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    text-align: center;
  }

  .tiktok-features .feature-item img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 15px;
  }

  .tiktok-features .feature-item p {
    font-size: 15px;
    line-height: 1.6;
    color: #333;
  }

  /* Responsiveness */
  @media (max-width: 768px) {
    .tiktok-features {
      flex-direction: column;
      align-items: center;
    }
  }
  
  
  .tiktok-featuress {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 40px;
    max-width: 1200px;
    margin: 50px auto;
    padding: 0 20px;
  }

  .tiktok-featuress .featur-item {
    flex: 1 1 300px; 
    max-width: 320px;
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    text-align: center;
  }

  .tiktok-featuress .featur-item img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    margin-bottom: 15px;
  }

  .tiktok-featuress .featur-item p {
    font-size: 15px;
    line-height: 1.6;
    color: #333;
  }

  /* Responsiveness */
  @media (max-width: 768px) {
    .tiktok-featuress {
      flex-direction: column;
      align-items: center;
    }
  }

  .faq-container {
  max-width: 800px;
  margin: 50px auto; 
  padding: 20px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}


  .faq-item {
  border-bottom: 1px solid #ccc;
}

.faq-question {
  padding: 15px 20px;
  background-color: #fff;
  cursor: pointer;
  font-weight: bold;
  color: #004ff9;
  transition: background-color 0.3s;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.faq-question:hover {
  background-color: #f0f8ff;
}

.faq-answer {
  padding: 10px 20px;
  display: none;
  background-color: #f9f9f9;
  color: #000000;
}

.faq-question.open {
  background-color: #a3c0eb;
}

.faq-question.open .arrow {
  transform: rotate(90deg);
}


.arrow {
  transition: transform 0.3s ease;
  font-size: 18px;
}

@media (max-width: 600px) {
  .faq-container {
    width: 95%;
    padding: 15px;
  }
}
  </style>
  
</head>
<body>

<header>
    <a href="index.php" class="logo">Snapii</a>
    <nav class="nav-links">
        <a href="How-to-Download-MP4.php">How to Download MP4?</a>
    </nav>
</header>

<div class="container">
    <form method="post" action="download.php">
        <input type="text" name="url" placeholder="Paste the video link here" required>
        <button type="submit">Download Video</button>
    </form>
</div>

<div class="info-row">
    <div class="info-item">
        <h2>Unlimited</h2>
        <p>Save as many TikTok videos as you want, with no limits.</p>
    </div>
    <div class="info-item">
        <h2>No Watermark!</h2>
        <p>Download TikTok videos in MP4 or remove the TikTok logo.</p>
    </div>
    <div class="info-item">
        <h2>MP4 & MP3</h2>
        <p>Save files in HD quality, convert TikTok to MP4 or MP3.</p>
    </div>
</div>

<div class="steps-container">
    <h2 style="text-align:center;">How to Download TikTok Videos Without Watermark</h2>
    <div style="text-align: center; margin-top: 40px;">
        <img src="photo/fleshe.png" alt="How to download TikTok videos without watermark" style="max-width: 90px; height: auto; margin-bottom: 70px;">
    </div>

    <div class="step">
        <div style="position: relative;">
            <img src="photo/photo8.jpg" alt="Step 1">
            <div class="step-number">1</div>
        </div>
        <div class="step-text">
            <strong> Find your video</strong>
            Open the TikTok app and scroll until you find the video you want to keep. Play it to make sure it’s the right one.
        </div>
    </div>

    <div class="step">
        <div style="position: relative;">
            <img src="photo/photo9.jpg" alt="Step 2">
            <div class="step-number">2</div>
        </div>
        <div class="step-text">
            <strong>Copy the link</strong>
            Tap the “Share” icon and select “Copy Link”. The video link is now ready to paste into our downloader tool.
        </div>
    </div>

    <div class="step">
        <div style="position: relative;">
            <img src="photo/photo10.jpg" alt="Step 3">
            <div class="step-number">3</div>
        </div>
        <div class="step-text">
            <strong> Paste the link</strong>
            Open our website and paste the copied link into the download box. Then click the “Download” button to save your video.
        </div>
    </div>
</div>

<div style="text-align: center; margin-top: 40px;">
    <img src="photo/fleshe.png" alt="How to download TikTok videos without watermark" style="max-width: 90px; height: auto; margin-bottom: 70px;">
</div>

<div style="max-width: 900px; margin: 30px auto; font-size: 16px; line-height: 1.6; padding: 0 20px; text-align: center; color: #000000;">
Snapii is one of the simplest tools to download TikTok videos online without watermark.<br>
    With our service, you can quickly save videos in MP4 format or extract the audio in MP3 — your choice.<br>
    No app required: just open your browser on Android or iOS, paste the video link on our site, and start downloading.<br>
    <strong style="color: #004ff9;">Fast, simple, and 100% free!</strong>
</div>

<div class="tiktok-features">
    <div class="feature-item">
        <img src="photo/screen.png" alt="Compatibility">
        <p>Our TikTok downloader works on all browsers (Chrome, Safari, Firefox...) and all systems (Android,ios, Windows...).</p>
    </div>
    <div class="feature-item">
        <img src="photo/picture.png" alt="Simplicity">
        <p>No registration needed. Just paste the TikTok link on our site and download the video instantly, hassle-free.</p>
    </div>
    <div class="feature-item">
        <img src="photo/music.png" alt="Quality">
        <p>Download in high quality MP4 or MP3, with or without audio, free and watermark-free.</p>
    </div>
</div>

<div class="tiktok-featuress">
    <div class="featur-item">
        <img src="photo/brand.png" alt="Free">
        <p>Enjoy completely free TikTok downloads with no limits! Save as many videos as you like, no sign-up, no hidden fees, on all your devices.</p>
    </div>
    <div class="featur-item">
        <img src="photo/bolt.png" alt="Fast">
        <p>Download your favorite TikTok videos in a flash with our ultra-fast tool. Enjoy high-speed downloads, watermark-free, directly in MP4 or MP3, compatible with all devices and browsers.</p>
    </div>
    <div class="featur-item">
        <img src="photo/link-alt.png" alt="No Watermark">
        <p>Download TikTok videos in MP4 without logo or watermark, easily. Perfect for editing, reusing, and republishing content professionally, with no visual distractions.</p>
    </div>
</div>


<div class="faq-container">
    <div class="faq-item">
      <div class="faq-question">Is TikTok video downloading free?
        <span class="arrow">&#9658;</span>
      </div>
      <div class="faq-answer">Yes! We love helping people download TikTok videos for free, and to support our service we display ads.</div>
    </div>
  
    <div class="faq-item">
      <div class="faq-question">Do I need to install an extension to save TikTok videos?
        <span class="arrow">&#9658;</span>
      </div>
      <div class="faq-answer">No, no extension is required. Just paste the link on our website.
      </div>
    </div>
  
    <div class="faq-item">
      <div class="faq-question">Do I need a TikTok account to download videos?
        <span class="arrow">&#9658;</span>
      </div>
      <div class="faq-answer">No, our tool lets you download without a TikTok account.</div>
    </div>
  
    <div class="faq-item">
      <div class="faq-question">Can I download TikTok videos from private accounts?
        <span class="arrow">&#9658;</span>
      </div>
      <div class="faq-answer">Yes, as long as the video is public, you can download it.</div>
    </div>
  
    <div class="faq-item">
      <div class="faq-question">Can I use your TikTok Downloader on my Android phone?
        <span class="arrow">&#9658;</span>
      </div>
      <div class="faq-answer">Of course! Our website works with all mobile browsers.</div>
    </div>
  
    <div class="faq-item">
      <div class="faq-question">Can I download TikTok videos in HD?
        <span class="arrow">&#9658;</span>
      </div>
      <div class="faq-answer">Yes, if the original video is in HD, you can download it in the same quality.</div>
    </div>
  </div>
  
  <script>
    document.querySelectorAll('.faq-question').forEach((question) => {
      question.addEventListener('click', () => {
        question.classList.toggle('open');
        const answer = question.nextElementSibling;
        if (answer.style.display === 'block') {
          answer.style.display = 'none';
        } else {
          answer.style.display = 'block';
        }
      });
    });
  </script>
  
  <?php include 'footer.php'; ?>
</div>
  
</body>
</html>

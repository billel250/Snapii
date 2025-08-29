<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["url"])) {
    $originalUrl = trim($_POST["url"]);

    // Clean the URL
    $parsedUrl = parse_url($originalUrl);
    if (isset($parsedUrl['query'])) {
        parse_str($parsedUrl['query'], $queryParams);
        if (isset($queryParams['v'])) {
            $originalUrl = "https://www.youtube.com/watch?v=" . $queryParams['v'];
        }
    }

    $originalUrl = preg_replace('/[?&].*/', '', $originalUrl);
    $url = escapeshellarg($originalUrl);

    // Get video info
    $jsonCommand = "C:\\yt-dlp\\yt-dlp.exe --dump-json $url";
    $videoInfoJson = shell_exec($jsonCommand);

    if (!$videoInfoJson || trim($videoInfoJson) === "") {
        die("
        <div class='error-message'>
            <h2>Oops! Unable to fetch video information.</h2>
            <p>We couldn't retrieve the video details. Please make sure the link is correct and try again.</p>
            <a href='index.php' class='back-link'>Back to Home</a>
        </div>
        ");
    }

    $videoData = json_decode($videoInfoJson, true);

    if (!$videoData) {
        die("
        <div class='error-message'>
            <h2>Oops! Unable to process video data.</h2>
            <p>We couldn't process the video information. Please check the link and try again.</p>
            <a href='index.php' class='back-link'>Back to Home</a>
        </div>
        ");
    }

    // Video data
    $title = $videoData["title"] ?? "Unknown";
    $description = $videoData["description"] ?? "No description available.";
    $thumbnail = $videoData["thumbnail"] ?? "";
    $uploader = $videoData["uploader"] ?? "Unknown";
    $uploaderThumbnail = $videoData["uploader_thumbnail"] ?? "";
    $tags = $videoData["tags"] ?? [];

    // Download path
    $folder = "downloads/";
    if (!is_dir($folder)) mkdir($folder);
    $filename = $folder . uniqid("video_") . ".mp4";

    // Download video
    $downloadCommand = "C:\\yt-dlp\\yt-dlp.exe -f bestvideo+bestaudio/best --merge-output-format mp4 -o \"$filename\" $url";
    shell_exec($downloadCommand);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style> 
body { 
    font-family: 'Poppins', 
    sans-serif; background: #ffffff; 
    margin: 0; 
    padding: 0; 
    color: #000; 
} 
header { 
    background: linear-gradient(135deg, #004ff9, #000000); 
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    padding: 30px; 
    box-shadow: 0 2px 5px rgb(85, 84, 84); 
} 
.logo { 
    font-weight: bold; 
    font-size: 20px; color:rgb(255, 255, 255); 
    text-decoration: none; 
} 
.logo:hover { 
    color: #D3BFFF; 
} 
.nav-links a { 
    margin: 0 10px; 
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
    padding: 20px; 
    border-radius: 10px; 
    box-shadow: 0 0 20px rgba(0,0,0,0.3); 
    width: 90%; 
    max-width: 600px;
    margin: 35px auto; 
    text-align: center; 
} 
img.thumbnail, img.uploader { 
    width: 80%; 
    max-width: 200px; 
    border-radius: 10px; 
    margin-bottom: 12px; 
} 
h2 { 
    font-size: 1.6rem; 
    margin-bottom: 15px; 
    color: #ffffff 
} 
pre { 
    background-color:rgb(255, 255, 255); 
    padding:7px; 
    border-radius: 8px; 
    overflow-x: auto; 
    text-align: left; 
    font-size: 0.95rem; 
    color:rgb(0, 0, 0); 
} 
p{ 
    color: #ffffff; 
} 
.tag { 
    display: inline-block; 
    margin: 4px; 
    padding: 6px 12px; 
    background-color:rgb(255, 255, 255); 
    border-radius: 20px; 
    font-size: 14px; 
    color: #000; 
} 
.download-link, .back-link { 
    display: inline-block; 
    margin-top: 20px; 
    padding: 12px 25px; 
    background-color: #3666ad; color: white; 
    text-decoration: none; 
    border-radius: 5px; 
    font-weight: bold; 
    transition: background-color 0.3s ease; 
} 
.download-link:hover { 
    background-color: #ffffff; 
    color: #000; 
} 
.back-link {
    background-color: #3666ad;
    margin-left: 10px; 
} 
.back-link:hover { 
    background-color: #ffffff; 
    color: #000; 
} 
@media (max-width: 768px) { 
header { 
    flex-direction: column; 
    align-items: flex-start; 
    gap: 10px; 
} 
.download-link, .back-link { 
    display: block; 
    width: 100%;
    margin: 10px 0; 
 } 
.container {
  margin: 20px; 
  padding: 20px 15px; 
 } } 

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Information</title>
</head>
<body>
<header>
    <a href="index.php" class="logo">Snapii</a>
    <nav class="nav-links">
        <a href="How-to-Download-MP4.php">How to Save Video?</a>
    </nav>
</header>

<div class="container">
    <h2>Video Information</h2>

    <?php if ($thumbnail): ?>
        <img src="<?= htmlspecialchars($thumbnail) ?>" class="thumbnail" alt="Video Thumbnail">
    <?php endif; ?>

    <?php if ($uploaderThumbnail): ?>
        <img src="<?= htmlspecialchars($uploaderThumbnail) ?>" class="uploader" alt="Uploader Thumbnail">
    <?php endif; ?>

    <p><strong>Title:</strong> <?= htmlspecialchars($title) ?></p>
    <p><strong>Uploader:</strong> <?= htmlspecialchars($uploader) ?></p>
    <p><strong>Description:</strong><br>
        <pre><?= htmlspecialchars($description) ?></pre>
    </p>

    <?php if ($tags): ?>
        <p><strong>Hashtags:</strong><br>
        <?php foreach ($tags as $tag): ?>
            <span class="tag">#<?= htmlspecialchars($tag) ?></span>
        <?php endforeach; ?>
        </p>
    <?php endif; ?>

    <?php if (file_exists($filename)): ?>
        <a href="<?= $filename ?>" download class="download-link">Download Now</a>
        <script>
        setTimeout(function () {
            fetch('delete.php?file=<?= urlencode(basename($filename)) ?>')
            .then(res => res.text()).then(console.log).catch(console.error);
        }, 60000);
        </script>
    <?php endif; ?>

    <a href="index.php" class="back-link">Back to Home</a>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
<?php
} // end POST
?>

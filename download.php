<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["url"])) {
    $originalUrl = trim($_POST["url"]);

    // تنظيف الرابط
    $parsedUrl = parse_url($originalUrl);
    if (isset($parsedUrl['query'])) {
        parse_str($parsedUrl['query'], $queryParams);
        if (isset($queryParams['v'])) {
            $originalUrl = "https://www.youtube.com/watch?v=" . $queryParams['v'];
        }
    }

    // إزالة الوسائط الإضافية مثل ?si= أو &feature
    $originalUrl = preg_replace('/[?&].*/', '', $originalUrl);
    $url = escapeshellarg($originalUrl);

    // استخراج بيانات الفيديو
    $jsonCommand = "C:\\yt-dlp\\yt-dlp.exe --dump-json $url";
    $videoInfoJson = shell_exec($jsonCommand);

    if ($videoInfoJson === null || $videoInfoJson === false || trim($videoInfoJson) === "") {
        die("<p style='color: red;'>فشل في جلب معلومات الفيديو. تأكد من أن الرابط صحيح و yt-dlp يعمل بشكل صحيح.</p>");
    }

    $videoData = json_decode($videoInfoJson, true);

    if ($videoData === null) {
        die("<p style='color: red;'>فشل في تحليل بيانات الفيديو. تحقق من صلاحية الرابط أو تحديث yt-dlp.</p>");
    }

    // إعداد البيانات
    $title = $videoData["title"] ?? "Inconnu";
    $description = $videoData["description"] ?? "Aucune description disponible.";
    $thumbnail = $videoData["thumbnail"] ?? "";
    $uploader = $videoData["uploader"] ?? "Inconnu";
    $uploaderThumbnail = $videoData["uploader_thumbnail"] ?? "";
    $tags = $videoData["tags"] ?? [];

    // تحديد اسم الملف
    $folder = "downloads/";
    if (!is_dir($folder)) {
        mkdir($folder);
    }

    $filename = $folder . uniqid("video_") . ".mp4";

    // تحميل الفيديو
    $downloadCommand = "C:\\yt-dlp\\yt-dlp.exe -f bestvideo+bestaudio/best --merge-output-format mp4 -o \"$filename\" $url";
    shell_exec($downloadCommand);

    // HTML
    echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Informations Vidéo</title>
    <style>
        body { font-family: Garamond; background-color: #3B4371; color: #fff; padding: 40px; text-align: center; }
        .container { background: #000428; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 700px; margin: auto; }
        img.thumbnail, img.uploader { max-width: 35%; border-radius: 10px; margin-bottom: 20px; }
        h2 { color: #ffffff; }
        pre { background: #000; padding: 10px; border-radius: 8px; text-align: left; overflow-x: auto; }
        .tag { display: inline-block; margin: 5px; padding: 5px 10px; background-color: #ffffff; border-radius: 20px; font-size: 14px; color: #000; }
        .download-link { display: inline-block; margin-top: 20px; padding: 12px 25px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; }
        .download-link:hover { background-color: #218838; }
        .back-link { display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; }
        .back-link:hover { background-color: #0056b3; }
        .footer { margin-top: 60px; color: #ffffff; font-size: 14px; }
    </style>
</head>
<body>
<div class='container'>
<h2> Informations sur la vidéo</h2>";

    if (!empty($thumbnail)) {
        echo "<img src='" . htmlspecialchars($thumbnail) . "' class='thumbnail' alt='Miniature de la vidéo'>";
    }

    if (!empty($uploaderThumbnail)) {
        echo "<img src='" . htmlspecialchars($uploaderThumbnail) . "' class='uploader' alt='Miniature de l'auteur'>";
    }

    echo "<p><strong>Titre :</strong> " . htmlspecialchars($title) . "</p>";
    echo "<p><strong>Auteur :</strong> " . htmlspecialchars($uploader) . "</p>";
    echo "<p><strong>Description :</strong><br><pre>" . htmlspecialchars($description) . "</pre></p>";

    if (!empty($tags)) {
        echo "<p><strong>Hashtags :</strong><br>";
        foreach ($tags as $tag) {
            echo "<span class='tag'>#" . htmlspecialchars($tag) . "</span>";
        }
        echo "</p>";
    }

    if (file_exists($filename)) {
        echo "<a href='$filename' download class='download-link'> Télécharger maintenant</a>";

        // حذف بعد 60 ثانية
        echo "<script>
            setTimeout(function() {
                fetch('delete.php?file=' + encodeURIComponent('" . basename($filename) . "'))
                    .then(response => response.text())
                    .then(result => console.log('Résultat suppression:', result))
                    .catch(error => console.error('Erreur suppression:', error));
            }, 60000);
        </script>";
    }

    echo "<br><a href='index.html' class='back-link'> Retour à l'accueil</a>
          <div class='footer'>© 2025 Téléchargement Vidéo.</div>
        </div>
    </body>
</html>";
}
?>

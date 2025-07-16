<?php
if (!isset($_GET['file'])) {
    http_response_code(400);
    exit('Bad Request');
}

$filename = basename($_GET['file']);
$filepath = __DIR__ . DIRECTORY_SEPARATOR . "downloads" . DIRECTORY_SEPARATOR . $filename;

if (file_exists($filepath)) {
    if (unlink($filepath)) {
        echo "Fichier supprimé.";
    } else {
        http_response_code(500);
        echo "Erreur lors de la suppression.";
    }
} else {
    http_response_code(404);
    echo "Fichier non trouvé.";
}
?>

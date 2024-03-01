<?php
include 'includes/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["mediaFile"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["mediaFile"]["name"]);

    if (move_uploaded_file($_FILES["mediaFile"]["tmp_name"], $target_file)) {
        $fileName = basename($_FILES["mediaFile"]["name"]);
        $stmt = $connection->prepare("INSERT INTO media (file_name) VALUES (?)");
        $stmt->bind_param("s", $fileName);

        if ($stmt->execute()) {
            echo "The file " . htmlspecialchars($fileName) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$connection->close();
header("Location: media.php");
exit();

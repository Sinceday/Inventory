<?php
include 'includes/connect.php';
// Directory
$upload_dir = "uploads/";

if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true); // Create directory
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["mediaFile"])) {
        $target_file = $upload_dir . basename($_FILES["mediaFile"]["name"]);

        if (move_uploaded_file($_FILES["mediaFile"]["tmp_name"], $target_file)) {
            // File uploaded successfully
            $filename = basename($_FILES["mediaFile"]["name"]);
            $sql = "INSERT INTO media (file_name) VALUES ('$filename')";

            if ($connection->query($sql) === TRUE) {
                header("Location: media.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file."; // need to fix this into modal
        }
    }
}

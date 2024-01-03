<?php
?>
<?php
$uploadsDirectory = 'uploads';

// Check if the directory doesn't exist, then create it
if (!is_dir($uploadsDirectory)) {
    if (!mkdir($uploadsDirectory, 0777, true)) {
        die('Failed to create the "uploads" directory.');
    }
}
// Rest of your upload script goes here...



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Allow only PDF files
        if ($fileType == "pdf") {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                echo "File uploaded successfully!";
                // Now you can implement the translation logic or further processing.
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Only PDF files are allowed.";
        }
    } else {
        echo "Error: No file uploaded.";
    }
}
?>
<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    // Check if the file exists
    if (file_exists($file)) {
        // Set appropriate headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        
        // Read the file and output it to the browser
        readfile($file);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}
?>

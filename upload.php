<?php

// Include UploadHandler class
require_once 'UploadHandler.php';

// Read config settings
$config = parse_ini_file('config.ini');

// Create UploadHandler instance
$uploader = new UploadHandler($config);

// Handle uploaded files
$uploader->handleUpload($_FILES);

// Display results
if ($uploader->hasErrors()) {
    echo "Error uploading files: " . $uploader->getErrorMessage();
} else {
    echo "Files uploaded successfully!";
}


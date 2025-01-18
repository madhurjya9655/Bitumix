<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Define the upload directory with escaped backslashes for Windows compatibility
$uploadDir = __DIR__ . '\\uploads\\';

// Ensure the upload directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $position = htmlspecialchars(strip_tags($_POST['position'] ?? ''));

    // Validate form fields
    if (empty($name) || empty($email) || empty($position)) {
        die("Error: All fields are required.");
    }

    // Handle file upload
    if (isset($_FILES['resume'])) {
        // Debugging: Check file upload errors
        if ($_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
            die("Error: File upload error code: " . $_FILES['resume']['error']);
        }

        // Validate file extension
        $allowedExtensions = ['pdf', 'doc', 'docx'];
        $fileInfo = pathinfo($_FILES['resume']['name']);
        $fileExtension = strtolower($fileInfo['extension']);

        if (!in_array($fileExtension, $allowedExtensions)) {
            die("Error: Invalid file format. Allowed formats: PDF, DOC, DOCX.");
        }

        // Create unique file name
        $resumeName = time() . "_" . basename($_FILES['resume']['name']);
        $resumePath = $uploadDir . $resumeName;

        // Debugging: Print file paths for verification
        echo "Temporary file: " . $_FILES['resume']['tmp_name'] . "<br>";
        echo "Target file path: " . $resumePath . "<br>";

        // Attempt to move the uploaded file
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath)) {
            // Save form data to a log file (instead of database)
            $logFile = __DIR__ . '\\applications.txt';
            $data = "Name: $name, Email: $email, Position: $position, Resume: $resumeName" . PHP_EOL;

            if (file_put_contents($logFile, $data, FILE_APPEND)) {
                echo "Application submitted successfully!";
            } else {
                die("Error: Could not save application data to log file.");
            }
        } else {
            die("Error: Failed to move uploaded file. Check folder permissions.");
        }
    } else {
        die("Error: No resume file uploaded.");
    }
} else {
    die("Error: Invalid request method.");
}
?>

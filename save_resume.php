<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resumeData = $_POST['resumeData'];
    $fileName = 'resume_' . time() . '.html';
    
    // Save the resume data to a file
    file_put_contents($fileName, $resumeData);
    
    echo json_encode(['success' => true, 'fileName' => $fileName]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>

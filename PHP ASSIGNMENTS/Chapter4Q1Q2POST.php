<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $gr = htmlspecialchars($_POST['gr'] ?? '');
    $class = htmlspecialchars($_POST['class'] ?? '');
    $section = htmlspecialchars($_POST['section'] ?? '');
    
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>G.R#:</strong> $gr</p>";
    echo "<p><strong>Class:</strong> $class</p>";
    echo "<p><strong>Section:</strong> $section</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>

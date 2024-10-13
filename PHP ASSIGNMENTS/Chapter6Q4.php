<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $math = intval($_POST['math']);
    $english = intval($_POST['english']);
    $physics = intval($_POST['physics']);

    
    $totalMarks = 300; 
    $obtainedMarks = $math + $english + $physics;

    
    $percentage = ($obtainedMarks / $totalMarks) * 100;

    
    if ($percentage >= 90) {
        $grade = "A+";
    } elseif ($percentage >= 80) {
        $grade = "A";
    } elseif ($percentage >= 70) {
        $grade = "B";
    } elseif ($percentage >= 60) {
        $grade = "C";
    } elseif ($percentage >= 50) {
        $grade = "D";
    } else {
        $grade = "F";
    }

    
    echo "<h2>Student Marksheet</h2>";
    echo "<p><strong>Math Marks:</strong> " . htmlspecialchars($math) . "</p>";
    echo "<p><strong>English Marks:</strong> " . htmlspecialchars($english) . "</p>";
    echo "<p><strong>Physics Marks:</strong> " . htmlspecialchars($physics) . "</p>";
    echo "<p><strong>Total Obtained Marks:</strong> " . htmlspecialchars($obtainedMarks) . " / " . $totalMarks . "</p>";
    echo "<p><strong>Percentage:</strong> " . number_format($percentage, 2) . "%</p>";
    echo "<p><strong>Grade:</strong> " . htmlspecialchars($grade) . "</p>";
} else {
    echo "<p>No marks submitted.</p>";
}
?>

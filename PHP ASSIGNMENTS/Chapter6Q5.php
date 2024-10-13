<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num=intval($_POST["num"]);
    if($num>=0|| $num<= 100){
        $res="Number is between 1 and 100";
    
}
else{
    $res= "Number is above 100";
}
echo "<p><strong>Number report:</strong> " . htmlspecialchars($res) . "</p>";
}

?>
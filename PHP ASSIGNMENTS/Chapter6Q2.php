<?php
$letter="";
$result="";
if($_SERVER["REQUEST_METHOD"]== "POST"){
$letter=htmlspecialchars($_POST['alpha']);
$letter = strtolower($letter);
if($letter== 'a'|| $letter== 'e'|| $letter== 'o'|| $letter== 'i'|| $letter== 'u' ){
    $result="VOWEL";}
else{
    $result="NOT VOWEL";
}
echo "Letter is ".htmlspecialchars( $result );

}


?>
<?php
function perkenalan($saya, $salam="Assalamulaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$saya."<br/>"; 
    echo "Senang berkenalan dengan kalian!<br/>";
}

// get the function
perkenalan("Salma", "Halo");
echo "<hr>";
$saya = "Cindy";
$salam = "Good Morning";

perkenalan($saya);
?>

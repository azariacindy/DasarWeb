<?php
function hitungUmur($lahir, $sekarang){
    $umur = $sekarang - $lahir;
    return $umur;
}
function perkenalan($saya, $salam="Assalamulaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$saya."<br/>"; 
    echo "Senang berkenalan dengan kalian!<br/>";
}

perkenalan("Cindy");
?>
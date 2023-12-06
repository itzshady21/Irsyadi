<?php
$film[0]= "Social Network";
$film[1]= "Who Am I (Germany)";
$film[2]= "Snowden";
$film[3]= "Black Berry";
$film[4]= "Wikileaks";
$film[5]= "Intersellar";

// $film = array("wiro sableng", "JCSDF", " invincible", "Snowden");

for ($i=0; $i < count($film); $i++) {
    echo "Nonton Film" .$film[$i]."<br>";
}
?>
<br>
<br>

Array Assosiatif <br>
<?php
//$mhs["budi"] = 202027;
//$mhs["erna"] = 202028;
//$mhs["murni"] = 202029;

$mhs = array(
    "budi" => "202027",
    "erna" => "202028",
    "murni" => "202029",
);

foreach ($mhs as $nama => $nim) {
    echo "Mahasiswa dengan nama ".$nama. "dan NIM " .$nim."<br>";
}
?>

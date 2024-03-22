<?php 
// Array Numerik - Index & Value
$domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi"];

// Array Assosiative - Key & Value
$program_studi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital"
];

$skill_programming = [
    'HTML' => 10,
    'CSS' => 20,
    'JavaScript' => 30,
    'PHP' => 30,
    'Python' => 40,
    'Java' => 50,
];

function skor($skills){
    $skor = 0;
    foreach ($skills as $skill) {
        if ($skill == 'HTML'){
            $skor += 5;
        } elseif($skill == 'CSS'){
            $skor += 5;
        } elseif($skill == 'JavaScript'){
            $skor += 15;
        } elseif($skill == 'PHP'){
            $skor += 15;
        } elseif($skill == 'Python'){
            $skor += 25;
        } elseif($skill == 'Java'){
            $skor += 35;
        }
    }
    return $skor;
}


?>
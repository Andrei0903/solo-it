<?php

function All($a, $b, $c){
    return $a+$b+$c;
}
function Average($a, $b, $c){
    return All($a, $b, $c)/3;
}
function Percent($a, $b, $c, $max=300){
    return (All($a, $b, $c)/300)*100;
}
function Color($opt){
    if($opt <= 50) return 'red';
    elseif ($opt > 50 && $opt <= 80) return 'yellow';
    else return 'green';
}

$hero = array(
    $hero1 = array(
        "Name" => "Павел",
        "Entity" => "Человек",
        "Description" => "Программист которого боится ЛЕГАСИ код",

        "Weapons" => "Модная клавиатура",
        "Endurance" => 45,
        "Power" => 30,
        "Dexterity" => 90
    ),
    $hero2 = array(
        "Name" => "Гном",
        "Entity" => "Волшебное существо",
        "Description" => "Живет в глубинах пещер. Очень любит алмазы.",

        "Weapons" => "Старая кирка",
        "Endurance" => 80,
        "Power" => 45,
        "Dexterity" => 30
    ),
    $hero3 = array(
        "Name" => "Преспешник",
        "Entity" => "Неизвестно",
        "Description" => "Существо с неизвестной силой",

        "Weapons" => "Неизвестно",
        "Endurance" => 95,
        "Power" => 67,
        "Dexterity" => 79,
    )

);
<?php

if (isset($_POST['btnData'])){
    var_dump($_POST);

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = $_POST['name'];
    $atk = 50;
    $life =200;
    $color ='bleu';

    $addCharacter = new Character();
    $addCharacter->name = $name;
    $addCharacter->atk = $atk;
    $addCharacter->life = $life;
    $addCharacter->color = $color;

    $characters = $addCharacter->insertCharacter();
   header('location: index.php?list');
}
echo "OK";
echo $_POST['name'];
}
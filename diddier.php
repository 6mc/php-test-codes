<html>
<head>
  <title>Anasayfa</title>
  </head>
<body>


<?php

$name = $_GET["gender"];


echo "you've  picked " . $name;

$pick = rand(1,5);

echo "\n" . $pick;

if ($pick == 1 and $name == rock){
    echo "<br/> cpu's picked" . $name;
    echo " <br/> noone wins try again";
}
if ($pick == 2 and $name == paper){
    echo "<br/> cpu's picked" . $name;
    echo " <br/> noone wins try again";
}
if ($pick == 3 and $name == scissors){
    echo "<br/> cpu's picked" . $name;
    echo " <br/> noone wins try again";
}
if ($pick == 4 and $name == lizard){
    echo "<br/> cpu's picked" . $name;
    echo " <br/> noone wins try again";
}
if ($pick == 5 and $name == spock){
    echo "<br/> cpu's picked" . $name;
    echo " <br/> noone wins try again";
}

if ($pick == 1 and $name == paper){
    echo "<br/> cpu's picked Rock ";
    echo " <br/> you win";
}

if ($pick == 1 and $name == scissors) {
    echo "<br/> cpu's picked Rock ";
    echo " <br/> you lost";
}
if ($pick == 1 and $name == lizard) {
    echo "<br/> cpu's picked Rock ";
    echo " <br/> you lost";
    echo "<br> rock crushes lizard";
}
if ($pick == 1 and $name == spock) {
    echo "<br/> cpu's picked Rock ";
    echo " <br/> you lost";
    echo "<br> spock vaporizes rock";
}
if ($pick == 2 and $name == rock) {
    echo "<br/> cpu's picked paper ";
    echo " <br/> you lost";
    echo "<br> paper covers rock";
}
if ($pick == 2 and $name == scissors) {
    echo "<br/> cpu's picked paper ";
    echo " <br/> you win";
    echo "<br> scissors cuts paper";
}
if ($pick == 2 and $name == lizard) {
    echo "<br/> cpu's picked paper ";
    echo " <br/> you won";
    echo "<br> lizard eats paper";
}

if ($pick == 2 and $name == spock) {
    echo "<br/> cpu's picked paper ";
    echo " <br/> you lost";
    echo "<br> paper disproves spock";
}

 ?>



</body>

 </html>

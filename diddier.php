<html>
<head>
  <title>Fight</title>
  </head>
<body>


<?php

$name = $_GET["gender"];

function conv($ada){
    if ($ada==6 or $ada==1){
        $neal='rock';
        return $neal;
    }
    if ($ada==12 or $ada==2){
        $neal='paper';
        return $neal;
    }
    if ($ada==18 or $ada==3){
        $neal='scissors';
        return $neal;
    }
    if ($ada==24 or $ada==4){
        $neal='lizard';
        return $neal;
    }
    if ($ada==30 or $ada==5){
        $neal='spock';
        return $neal;
    }
}

echo "you've  picked " . conv($name);

$pick = rand(1,5);

echo "<br/> cpu's picked ". conv($pick);
//  echo "\n" . $pick;

$sum = $pick + $name;
//$test = "http://media4.picsearch.com/is?_Y7hQeBvZU443SlMKzMN2d6GHg4LGm_5bj3RZ9Dbiqs&height=237";

game($sum);
ini_set('max_execution_time', 0);
function game($dat){
    $new =$dat%7;
    if ( $new==0){
        echo "<br/>noone wins try again";
    }
    if ($dat==29 or $dat==17 or $dat==22 or $dat==10 or $dat==33 or $dat==13 or $dat==31 or $dat==20 or $dat==26 or $dat==9) {

        echo "<br/>Congrats, You Win!";

    }
    if ($dat==23 or $dat==11 or $dat==34 or $dat==16 or $dat==27 or $dat==19 or $dat==25 or $dat==8 or $dat==32 or $dat==15) {

        echo "<br/>You Lost";
    }
}

$urlm ="http://www.picsearch.com/index.cgi?q=".conv($pick);//benim seçimim

$url = "http://www.picsearch.com/index.cgi?q=".conv($name);//pc nin seçimi

$mydata =file_get_contents($urlm);//benim seçimim

$data = file_get_contents($url);// pc seçimi





$title =explode('<img class="thumbnail" src="',$data);
$titla =explode('" alt="" data-width="290" data-height="224" id="QvERz0TT57RVcohjT-P_95N8X0UggslkzM_Aizknv2o" />',$title[1]);

$testa = $titla[0];


$link =explode('<img class="thumbnail" src="',$mydata);
$linka=explode('" alt="" data-width="290" data-height="224" id="QvERz0TT57RVcohjT-P_95N8X0UggslkzM_Aizknv2o" />',$link[1]);

$test =$linka[0];

//echo $linka[0];

 ?>
<br/>
<FORM><INPUT Type="button" VALUE="TRY AGAİN" onClick="history.go(-1);return true;"></FORM
<br/>   <img src="<?php echo $testa ?>
<img src="http://s31.postimg.org/kmisg31rf/versus.png" alt="versus">
<img src="<?php echo $test ?>
</body>

 </html>

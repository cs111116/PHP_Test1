<?php
$house =180;
$car='BYD';
$res=$house && $car;


$res = $house && $car == 'BMW';


var_dump($res);

if($res){
    echo '還是可以嫁';
}
else {
    echo '再等兩年';
}
?>

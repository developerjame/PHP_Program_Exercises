<?php
function myFunction(iterable $numbers){
    foreach($numbers as $number){
        echo $number;
    }
}
$num = array('1','4','5','2');
echo myFunction($num);
?>
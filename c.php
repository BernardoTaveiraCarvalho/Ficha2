<?php
$hours=  readline("Insert the number of hours ");

if($hours<=36){
    echo "You gona recieve ".$hours*7.5;
}else
    echo "You gona recieve ".(35*7.5+($hours-35)*10);
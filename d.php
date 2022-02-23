<?php
do {
    $state = readline("Insert your civil state 0 for single and 1 for married ");
}while($state <0 ||$state>1);
do {
    $age = readline("Insert your age ");
}while($age<0 || $age>100);
if($age>=34 && $state==1) {
echo "You are in the 4 group";
}else if ($state ==1){
    echo "You are in the 3 group";
} else if($age>=25 && $state==0){
    echo "You are in the 2 group";
} else{
    echo "You are in the 1 group";
}


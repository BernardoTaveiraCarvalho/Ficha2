<?php
$salary = readline("Insert your salary ");
$role = readline("Insert your role ");
if($role == 101){
    echo "You will now receive ".($salary+$salary*0.25);
}else if($role==102) {
    echo "You will now receive ".($salary+$salary*0.20);
} else if($role==103){
    echo "You will now receive ".($salary+$salary*0.15);
}else{
    echo "You will now receive ".($salary+$salary*0.10);
}



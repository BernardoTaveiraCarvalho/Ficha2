<?php

    $salary = readline("Insert your average salary ");
if($salary<=200){
    echo "You will not receive the credit because you have an averave salary of ".$salary;
}else if($salary<=400) {
    echo "You will  receive ".($salary+$salary*0.2)." credit because you have an averave salary of ".$salary;
} else if($salary<=600){
    echo "You will  receive ".($salary+$salary*0.3)." credit because you have an averave salary of ".$salary;
} else {
    echo "You will  receive ".($salary+$salary*0.4)." credit because you have an averave salary of ".$salary;
}


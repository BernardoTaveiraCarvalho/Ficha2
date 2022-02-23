<?php
$oral=  readline("Insert the oral test result ");
$write = readline("Insert the write test result ");
if(($oral*0.70)+($write*0.30)>10){
    echo "You pass!!!";
}else
    echo "You dont pass :(";
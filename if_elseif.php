<?php
$nameing='dssadsadsadsadsadasdda';

if(strlen($nameing)<=10&& strlen($nameing)>5){
    
    echo 'Estandard';
}elseif (strlen($nameing)<=5) {
    echo 'Min';
    
} else {
    echo 'Max';  
}


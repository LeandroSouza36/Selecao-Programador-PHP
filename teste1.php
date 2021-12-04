<?php

function SeculoAno($ano){
    $seculo = 0;
    if($ano%100 == 0){
        $seculo = $ano/100;
    }else{
        for($i=0;$i<=$ano;$i++){
            if($i%100 == 0){
                $seculo++;
            }
        }
    }
    return "Século ".$seculo;
}

//Pode digitar qualquer outro ano
 echo SeculoAno(2001);

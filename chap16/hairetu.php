<?php
$m = array("ねむくないですか","おはようございます","こんにちわ","こんばんわ");
if(date("G")>=18){
    print $m[3];
    }elseif(date("G")>=9){
    print $m[2];
    }elseif(date("G")>=6){
    print $m[1];
    }else{
    print $m[0];
    }
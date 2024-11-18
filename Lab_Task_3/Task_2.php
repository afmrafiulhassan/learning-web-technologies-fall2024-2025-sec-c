<?php

    $amount=1000;
    $vat=15/100;
    
    $amountwithtax= $amount * $vat;


    echo("The Amount is: ". $amount . "<br>");
    echo("The Vat is: ". $vat . "<br>");
    echo("The Vat over this amount is: ". $amountwithtax . "<br>");



?>
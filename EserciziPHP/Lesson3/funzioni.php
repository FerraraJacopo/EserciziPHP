<?php
    //function funzione(<lista parametri>){istruzioni}
    function calc($op1, $op2, $oper){
        switch($oper){
            case "+":
                $return = $op1 + $op2; 
                break;
            case "-":
                $return = $op1 - $op2; 
                break;
            case "*":
                $return = $op1 * $op2; 
                break;
            case "/":
                $return = $op1 / $op2; 
                break;
            default:
                $return = "operatore sbagliato";
        }
        return $return;
    }

    echo "</br>5 + 6 =". calc(5,6,"+");
    echo "</br>5 - 6 =". calc(5,6,"-");
    echo "</br>5 * 6 =". calc(5,6,"*");
    echo "</br>5 / 6 =". calc(5,6,"/");

    $op3 = 5;
    $op4 = 6;

    function call(){
        global $op3;
        global $op4;
        echo "</br>op3: $op3 op4: $op4";
    }

    call();
    

?>
<?php
/**
 *
 */
class LogicaComputacional
{
    function __construct()
    {
        echo "Estoy en la materia Logica Computacional";
    }
    function Promedio($n1,$n2,$n3,$e1,$t1){
        $parciales=$n1+$n2+$n3;
        $parciales/=3;
        $parciales*=0.55;
        $examen=$e1*0.30;
        $trabajo=$t1*0.15;
        $final=$parciales+$examen+$trabajo;
        return round($final,1);
    }
}

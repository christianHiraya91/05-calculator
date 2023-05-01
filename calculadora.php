<?php
if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operador'])){
    $num1 = $_POST['numero1'];
    $num2 = $_POST['numero2'];
    $operador = $_POST['operador'];
    $resultado = 0;
    switch($operador){
        case 'soma': 
            $resultado = $num1 + $num2;
            break;
        case 'subtracao':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacao':
            $resultado = $num1 * $num2;
            break;
        case 'divisao':
            if($num2 != 0){
                $resultado = $num1 / $num2;
            }
            break;
    }
    echo "<h1>O resultado da operação é: $resultado</h1>";
}
?>
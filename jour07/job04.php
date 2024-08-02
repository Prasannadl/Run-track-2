<?php
function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+' :
           return $a + $b;
        
        case'-' :
            return $a - $b;
            
            case '*' :
                return $a * $b;
                
                case '/' :
                    if($b != 0) {
                        return $a / $b;
                    } else {
                        return "error: Divison by zero";
                    }
                    
                    case '%' :
                        if($b != 0) {
                            return $a % $b;
                        } else {
                            return "error: Modulo by zero";
                        }
                        default:
                        return "error: invalid operation";
    }
}
echo calcule(10, '+', 5);  
echo "<br>";

echo calcule(437, '/', 3);  
echo "<br>";
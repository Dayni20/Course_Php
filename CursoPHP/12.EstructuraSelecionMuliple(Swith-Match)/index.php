<?php

//////////////////////////////////////////77SWITH
$a=2;

switch ($a) {
    case '1':
        # code...
        break;
        case '2':
            echo"Hola martes";
            break;
            case '3':
               echo"Hola mioercoles";
                break;
                case '4':
                    # code...
                    break;
    default:
        # code...
        break;
};


///////////////////////////////////////////////MATCH
$b=4;

echo match($b){
    1=>'Lunes',
    2=>'Martes',
    3=>'Miercoles',
    4=>'Jueves',
    5=>'Viernes',
    default=>'EL VALOR NO ES VALIDO',
};
?>
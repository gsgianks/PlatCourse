<?php 

if (isset($_POST['consulta'])) {
    switch($_POST['consulta']) {

        case 'agregarActivo':
        agregarActivo();
        break;
    }
}


?>

<?php

require_once '../Logic/LogicaLogin.php';

if (isset($_POST['consulta'])) {
    switch($_POST['consulta']) {

        case 'login':
        $login= new LogicaLogin();
        echo json_encode($login->validarUsuario($_POST['email'],$_POST['consulta']));
        break;
    }
}

?>
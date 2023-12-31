<?php
switch ($path_components[$path_index]) {
    case 'formulario':
        require_once("./app/registro/controller/registro.controller.php");
        break;
    case 'presentacion':
        require_once("./app/presentacion/controller/presentacion.controller.php");
    break;
   
    case 'tareas':
        require_once("./app/tareas/tareas.controller.php");
    break;

    case 'login':
        if (!checkSession()) 
        require_once("./app/Sesion/login/controller/login.controller.php");
    else 
    header ("Location: /tareas");
        break;

        case 'loginregistro':
            if (!checkSession()) 
            require_once("./app/Sesion/registro/controller/registro.controller.php");
            else 
            header ("Location: /tareas");
            break;



            case 'app-paises':
                require_once("./app/paises/paises.controller.php");
            break;


            case 'logout':
                session_destroy();
                header("Location:  /login");
                 break;


                 
    default:
        header("HTTP/1.1 404 Not Found");
        break;
}
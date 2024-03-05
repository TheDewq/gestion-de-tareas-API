<?php
    if($_SERVER["REQUEST_METHOD"] == 'GET'){

        if( !isset($_GET['id']) ){ //en caso de que no este 'id' va a devolver la lista de tareas

        }elseif( isset($_GET['id']) ){ // en caso de que si este 'id' va a devolver la tarea del correspondiente id

        }else{ // en caso de que no se cumpla ningun condicion, se hara un error 404
            header('HTTP/1.1 404 NOT FOUND');
        }

    }
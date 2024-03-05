<?php

    function connect_db($db){
        try{
            $server = new PDO($db['dsn'], $db['user'], $db['pass']);
            return $server;
        }catch(PDOException $e){
            header("HTTP/1.1 500 error en el servidor");
        }
        

    }
<?php
use dcai\curl;

//endereço REST:
$end_rest="http://192.168.70.215/moodle/"."webservice/rest/server.php";

//token:
$token="b846f5ea63c640979b371c2050ee140e";

//função criar usuários:
$func = "core_user_create_users";

//parâmetros da função
$param = array(
    "users" =>
    Array
    (
        "0" =>
        Array
        (
            
            "username" => "SuperAdmin",
            "password" => "Mudar#123",
            "firstname" => "Admin",
            "lastname" => "SUPER",
            "email" => "superadmin@uv.edu.br",
        ),
        
        "1" =>
        Array
        (
            
            "username" => "SuperAdminT",
            "password" => "Mudar@123",
            "firstname" => "AdminT",
            "lastname" => "SUPERT",
            "email" => "superadmin@uv.edu.br",
        )
    )

);

//curl:
require_once("curl.php");
$curl = new curl();

//ajustes finais:
header('content-type: text/plain');
$solicit_ws = $end_rest . '?wstoken=' . $token . '&wsfunction=' .$func;

//solicitar serviços:
$resp = $curl->post($solicit_ws, $param);

//imprimir resposta:
print_r($resp);
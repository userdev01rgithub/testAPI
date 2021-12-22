<?php 
require('vendor/autoload.php');
require('connect.php');


if (!$_GET) {die("Ошибка");}
$q = $_GET['q'];
$method = $_SERVER['REQUEST_METHOD'];

$params = explode('/', $q);
$type = $params[0];

header('Content-type: json/application');

switch($method){

    case 'GET':
        if ($params[1]){
            $data = $database->select("post", [
                'id',
                'name',
                'text'
            ], [
                "id[=]" => $params[1]
            ]);
            echo json_encode($data);
        }   else    {
            $data = $database->select("post", "*");
            echo json_encode($data);
        }
    break;

    case 'POST':
        $database->insert("post", [
            "name" => $_POST['name'],
            "text" => $_POST['text'],
        ]);

        $res = [
            "status" => 'ok',
            "id" => $database->id()
        ];
        http_response_code(201);
        echo json_encode($res);

    break;

    case 'PATCH':
        $json_d = file_get_contents('php://input');
        $json_d = json_decode($json_d);

        $data = $database->update("post", [
            "name" => $json_d->name,
            "text" => $json_d->text,
        ], [
            "id" => $params[1]
        ]);

        $res = [
            "status" => 'ok',
        ];

        echo json_encode($res);
    break;

    case 'DELETE':
        $database->delete("post", [
            "id" => [$params[1]]
        ]);

        $res = [
            "status" => 'delete',
        ];

        echo json_encode($res);
    break;

}


?>
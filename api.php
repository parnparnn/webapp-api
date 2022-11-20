<?php

    require_once('dbconfig.php');

    $db = new Database('cwe1u6tjijexv3r6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com','qvwk8uwuhqjslj6m','v8czsu2ww7ibandh','eiq0nzh57knw4cug');

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        echo json_encode($db->query('SELECT * FROM landmarks'));
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo 'This is POST';
    } else {
        http_response_code(405);
    }

?>

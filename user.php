<?php

include __DIR__ . '/config/Database.php';

$database = new Database();
$db = $database->connect();

$sql = 'SELECT * FROM users';
$users = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$response = [];

$response["data"] = [];


foreach ($users as $user) {
    $response['data'][] = [
        'id ' => $user['id'],
        'Username ' => $user['id'],
        'Password ' => $user['id'],
        'Name ' => $user['id'],
        'Surname ' => $user['id'],
        'Age ' => $user['id'],
        'Section ' => $user['id'],
        'Grade ' => $user['id'],
        'Gano ' => $user['id'],
        'Registration_Date ' => $user['id'],


    ];
}

echo json_encode($response);
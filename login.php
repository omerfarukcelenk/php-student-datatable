<?php
include __DIR__ . '/config/Database.php';

$database = new Database();
$db = $database->connect();

$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['username']) and  empty($_POST['password'])){
        $error_array['userNameErr'] = "Username  Boş";
        $error_array['Password'] = "Password Boş";
        echo $error_array['userNameErr'];
        echo $error_array['passwordErr'];
    }else {

        $username = trim($_POST['username'], ' ');
        $password = trim($_POST['password'], ' ');
        $stmt = $db->prepare("SELECT * FROM users WHERE Username=:uname and Password=:pwd");
        $stmt->execute(['uname' => $username, 'pwd' => $password]);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

        if (empty($response)) {
            echo "Giriş Başarısız username ve password sistemde uyuşmuyor";
        } else {
            echo "Giriş Başarılı :D";
            echo json_encode($response);
//            header("Location: http://localhost:80/php-student-datatable/");

        }
    }

//        $sql = 'SELECT * FROM users WHERE Username="$username" and Password="$password"';
//        $users = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//       var_dump($users);


}

<?php
include __DIR__ . "/config/Database.php";

$database = new Database();
$db = $database->connect();

$username = "";
$password = "";
$name = "";
$surname = "";
$age = null;
$section = "";
$grade = "";
$gano = null;


if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if (empty($_POST["username"]) and empty($_POST["password"])){
       echo "username ve password boş bırakılamaz";
       header("Location: http://localhost:80/php-student-datatable/register.php");
   } else {
       $username = $_POST["username"];
       $password = $_POST["password"];

       $stmt = $db->prepare("SELECT * FROM users WHERE Username=:uname and Password=:pwd");
       $stmt->execute(['uname' => $username, 'pwd' => $password]);
       $searchResult = $stmt->fetch(PDO::FETCH_ASSOC);
       if (!$searchResult){
           $name = $_POST["Name"];
           $surname = $_POST["Surname"];
           $age = $_POST["Age"];
           $section = $_POST["Section"];
           $grade = $_POST["Grade"];
           $gano = $_POST["Gano"];

           $sql = $db->prepare("INSERT INTO `users` (`Username`, `Password`, `Name`, `Surname`, `Age`, `Section`, `Grade`, `Gano`, `Registration_Date`) 
                                        VALUES (:username, :password, :name, :surname, :age, :section, :grade, :gano, current_timestamp());");
           $sql->execute(['username' => $username, 'password' => $password , 'name' => $name, 'surname' => $surname, 'age' => $age, 'section' => $section, 'grade' => $grade, 'gano' => $gano]);
           $insertResult = $sql->fetchAll();

           if (! $insertResult){
               echo "kayıt başarısız";
           }else {
               echo  "Kayıt başarılı";
           }


       }else{
           echo "Böyle bir kullanıcı var";
       }
   }


}

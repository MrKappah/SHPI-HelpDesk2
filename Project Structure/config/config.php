<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shpi";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    //example Rootpath
    define('ROOT_PATH', dirname(__DIR__) . '/');


//Autoload de classes com Namespace
    spl_autoload_register(function ($class_name) {
        $file = str_replace('\\', '/', $class_name);
        require ROOT_PATH . "src/$file.php";


    });
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


?>
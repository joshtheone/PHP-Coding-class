<?php
$host = "localhost";
$user = "root";
$pass = "password";
$database = "phpclass";
$db = null;
try {
    $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if($db){
    $sql = "SELECT id, email FROM users WHERE email = :email";
    $stmt = $db->prepare($sql);
    $stmt->execute([':email' => 'josh@gmail.com']);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($users);

    // insert
    $sql = "INSERT INTO users ( email, password) VALUES (:email, :password)";
    $stmt = $db->prepare($sql);

    try {
        $exc = $stmt->execute([ ':email' => 'jux@gmail.com', ':password' => '1234']);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

// class

// class car{
//     public $name;
//     public $model;
//     public $year;
//     public $cc;


//     public function __construct($name, $model, $year, $cc)
//     {
//         $this->name = $name;
//         $this->model = $model;
//         $this->year = $year;
//         $this->cc = $cc;
//     }

//     public function startEngine(){
//         // chomeka fungua 
//         // kanyaga break

//         echo $this->name . " " . $this->model . " Imewaka \n";
//     }

//     public function stopEngine(){
//         // Fungua mlango
//         // ruka

//         echo $this->name . " " . $this->model . " Imezima \n";
//     }
// }

// $bmw = new car('BMW', 'X5', '2022', '5000cc');


// // $car2 = new car();

// $bmw->startEngine();

// $bmw->name = "Mercedes";

// $bmw->startEngine();
// // $car2->stopEngine();
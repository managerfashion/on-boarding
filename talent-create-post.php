<?php require_once 'global.php';
try{
    $talent = new Talent();
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $height = $_POST['height'];

    $talent->name = $name;
    $talent->gender = $gender;
    $talent->email = $email;
    $talent->address = $address;
    $talent->height = $height;


    $talent->insert($name, $gender, $email, $address, $height);

    header('Location: list.php');
}catch (Exception $e) {
    Error::catchError($e);
}
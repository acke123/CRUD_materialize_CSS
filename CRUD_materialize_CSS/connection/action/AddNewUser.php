<?php
require '../Database.php';

class AddNewUser extends Database
{
    public function setData($firstname, $lastname, $userName, $email, $active)
    {
        $sql = "INSERT INTO users (first_name, last_name, user_name , email , active) 
VALUES ('$firstname', '$lastname', '$userName', '$email', '$active')";
        $conn = $this->getConnection();
        mysqli_query($conn, $sql);
        header('Location:../../index.php');
    }
}

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$userName = $_POST['user_name'];
$email = $_POST['email'];
if ($_POST['active']) {
    $active = 1;
} else {
    $active = 0;
}


$newUser = new AddNewUser();
$newUser->setData($firstname, $lastname, $userName, $email, $active);



<?php
require '../Database.php';

class Update extends Database
{
    public function setData($id, $firstname, $lastname, $userName, $email, $active)
    {
        $sql = "UPDATE users SET first_name = '$firstname', last_name = '$lastname', user_name = '$userName', email = '$email', active = '$active' WHERE id = '$id'";
        $conn = $this->getConnection();
        mysqli_query($conn, $sql);
        header('Location:../../index.php');
    }
}

$id = $_GET['id'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$userName = $_POST['user_name'];
$email = $_POST['email'];
if ($_POST['active']) {
    $active = 1;
} else {
    $active = 0;
}

$newUser = new Update();
$newUser->setData($id, $firstname, $lastname, $userName, $email, $active);
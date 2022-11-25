<?php
require '../Database.php';

class Delete extends Database
{
    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = $id";
        $conn = $this->getConnection();
        mysqli_query($conn, $sql);
        header('Location:../../index.php');
    }
}

$id = $_GET['id'];
$data = new Delete();
$data->delete($id);





